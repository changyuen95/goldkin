<?php

namespace App\Http\Controllers;

use App\Mail\EnquirySubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EnquiryController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'source' => ['required', 'string', 'in:home,contact'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
            'industry' => ['nullable', 'string', 'max:100', 'required_without:inquiry_type'],
            'inquiry_type' => ['nullable', 'string', 'max:100', 'required_without:industry'],
        ]);

        $enquiry = [
            'source' => $validated['source'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'industry' => $validated['industry'] ?? null,
            'inquiry_type' => $validated['inquiry_type'] ?? null,
        ];

        try {
            Mail::to(config('services.contact_form.recipient'))->send(new EnquirySubmitted($enquiry));
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withInput()
                ->with('enquiry_error', 'We could not send your enquiry right now. Please try again or email sales@goldken.com.my.');
        }

        return back()->with('enquiry_success', 'Your enquiry has been submitted. Our team will get back to you soon.');
    }
}