<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Enquiry</title>
</head>
<body>
    <h2>New enquiry received</h2>

    <p><strong>Source:</strong> {{ ucfirst($enquiry['source']) }}</p>
    <p><strong>Name:</strong> {{ $enquiry['name'] }}</p>
    <p><strong>Email:</strong> {{ $enquiry['email'] }}</p>

    @if (!empty($enquiry['phone']))
        <p><strong>Phone / WhatsApp:</strong> {{ $enquiry['phone'] }}</p>
    @endif

    @if (!empty($enquiry['industry']))
        <p><strong>Industry:</strong> {{ $enquiry['industry'] }}</p>
    @endif

    @if (!empty($enquiry['inquiry_type']))
        <p><strong>Inquiry Type:</strong> {{ $enquiry['inquiry_type'] }}</p>
    @endif

    <p><strong>Subject:</strong> {{ $enquiry['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{!! nl2br(e($enquiry['message'])) !!}</p>
</body>
</html>