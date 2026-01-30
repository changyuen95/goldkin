@extends('layouts.master')

@section('title', 'Goldken Sdn Bhd - Contact Us')

@section('content')

<!-- :: Breadcrumb Header -->
<section class="breadcrumb-header" id="page" style="background-image: url('{{ asset('template/images/header/04_header.jpg') }}')">
    <div class="overlay"></div>
    <div style="margin-top:25px" class="container">
        <div class="row">
            <div class="col-md-12 hero-content">
                <div class="banner">
                    <h1 style="text-align: center;margin-bottom:-20px " class="handline">Get in Touch with us</h1>
                    <ul style="text-align:center">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: FAQs & Quote -->
<section class="faq-quote py-100">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <!-- FAQs -->
      <div class="col-lg-6" style="background-color: #000000;background: rgba(0,0,0,0.7);" >
        <div class="faq">
          <div class="sec-title sec-title-home-2">
            <h2>FAQs</h2>
            <h3>Everything you need to know about our knives & regrinding.</h3>
            <p>Quick answers to the most common questions customers ask us.</p>
          </div>

          <!-- Performance Benefits -->
          <div class="faq-box">
            <h5 class="question-header">
              <button class="btn btn-primary click" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqs-1" aria-expanded="true" aria-controls="faqs-1">
                Performance Benefits<i class="fas fa-angle-right"></i>
              </button>
            </h5>
            <div class="collapse show" id="faqs-1">
              <div class="card card-body about-text">
                <ul style="list-style:disc;padding-left:10px" class="mb-0">
                  <li>Cleaner cuts and sharper product finishes</li>
                  <li>Reduced product waste and rework</li>
                  <li>Improved line speed and uptime</li>
                  <li>Lower energy consumption due to reduced resistance</li>
                  <li>Extended knife and machine lifespan</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Knives we service -->
          <div class="faq-box">
            <h5 class="question-header">
              <button class="btn btn-primary click" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqs-2" aria-expanded="false" aria-controls="faqs-2">
                We service a wide range of knives, including:<i class="fas fa-angle-right"></i>
              </button>
            </h5>
            <div class="collapse" id="faqs-2">
              <div class="card card-body about-text">
                <ul style="list-style:disc;padding-left:10px" class="mb-2">
                  <li><b>Paper & Printing:</b> Guillotine knives, Top &amp; bottom slitter knives, Trimmer knives, Sheeter knives, Score / Creasing knives, Scraper / Doctor blades</li>
                  <li><b>Plastics &amp; Rubber / Recycling:</b> Granulator &amp; pelletizer blades, Rotary cutters, Guillotine / Rotary cutters, Shredder / Chopper knives, Bale cutter blades</li>
                  <li><b>Steel &amp; Metal:</b> Slitter &amp; shear blades, Trimmer / Cropper knives</li>
                  <li><b>Semiconductor:</b> Wafer dicing blades, Film slitter blades</li>
                  <li><b>Wood Processing:</b> Planer &amp; Jointer knives, Chipper / Veneer / Flaker knives</li>
                </ul>
                <p style="color:#fff" class="text-muted">Have a special blade? Ask us—customs welcome.</p>
              </div>
            </div>
          </div>

          <!-- Why our grinding -->
          <div class="faq-box">
            <h5 class="question-header">
              <button class="btn btn-primary click" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqs-3" aria-expanded="false" aria-controls="faqs-3">
                Why Our Grinding Makes a Difference<i class="fas fa-angle-right"></i>
              </button>
            </h5>
            <div class="collapse" id="faqs-3">
              <div class="card card-body about-text">
                <ul style="list-style:disc;padding-left:10px" class="mb-0">
                  <li>OEM-level—or better—sharpness with precision regrinding</li>
                  <li>Advanced capability: up to <b>4.5 m</b> length and <b>Ø 400 mm</b></li>
                  <li>Three finish levels: <b>Standard</b>, <b>Super</b>, <b>Mirror</b>; TCT finishes achievable to <b>Ra 0.05</b></li>
                  <li>Structured QC: incoming checks → in-process monitoring → final inspection</li>
                  <li>Optional inspection reports for full traceability</li>
                  <li>Technical support to optimize tool life and reduce downtime</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Quick Contact -->
          <div class="faq-box">
            <h5 class="question-header">
              <button class="btn btn-primary click" type="button" data-bs-toggle="collapse"
                data-bs-target="#faqs-4" aria-expanded="false" aria-controls="faqs-4">
                WhatsApp / Email<i class="fas fa-angle-right"></i>
              </button>
            </h5>
            <div class="collapse" id="faqs-4">
              <div class="card card-body about-text">
                <p style="color:#fff" class="mb-2">Talk to our team—share photos/specs for faster assistance.</p>
                <div class="d-flex flex-wrap gap-2">
                  <a href="tel:01212843661" class="btn btn-outline-warning btn-sm">Call (+60)16-661-2366</a>
                  <a href="tel:01068710594" class="btn btn-outline-warning btn-sm">Call (+60)16-205-2950</a>
                  <a href="mailto:sales@goldken.com.my" class="btn btn-outline-warning btn-sm">Email sales@goldken.com.my</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Quote -->
      <div class="col-lg-6">
        <div class="quote">
          <div class="sec-title">
            <h3>Request a Quote / Inquiry</h3>
          </div>

          <div class="quote-item">
            <label>Your Full Name</label>
            <input type="text" name="name" placeholder="Enter Your Full Name">
            <i class="fas fa-user-alt"></i>
          </div>

          <div class="quote-item">
            <label>Your Email</label>
            <input type="email" name="email" placeholder="Enter Your Email Address">
            <i class="far fa-envelope"></i>
          </div>

          <div class="quote-item">
            <label>Phone / WhatsApp</label>
            <input type="text" name="phone" placeholder="e.g. 0121-2843-661">
            <i class="fas fa-phone-alt"></i>
          </div>

          <div class="quote-item mb-5">
            <label>Inquiry Type</label>
            <select name="inquiry_type">
              <option value="">Select one…</option>
              <option value="service">Service</option>
              <option value="product">Product</option>
              <option value="preorder">Pre-Order</option>
              <option value="support">Technical Support</option>
            </select>
            <i class="fas fa-list"></i>
          </div>

          <div class="quote-item">
            <label>Your Subject</label>
            <input type="text" name="subject" placeholder="Enter Your Subject">
            <i class="fas fa-download"></i>
          </div>

          <div class="quote-item">
            <label>Your Message</label>
            <textarea name="message" placeholder="Enter Your Message (machine model, blade size/specs, quantity, etc.)"></textarea>
            <i class="far fa-edit"></i>
          </div>

          <div class="quote-item">
            <a class="btn-1 btn-3">Submit</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="mt-5 mb-5 contact-section">
  <div class="container">

    <!-- Section Header -->
    <div class="row mb-3">
      <div class="col text-center">
        <div class="sec-title">
          <h2>Get in Touch</h2>
          <h3>We’re Here to Support You</h3>
        </div>
      </div>
    </div>

    <!-- Three Columns -->
    <div class="row g-4 align-items-stretch">

      <!-- Contact Info: Location + Business Hours (merged) -->
      <div class="col-lg-4">
        <div class="contact-box h-100">
          <h4 class="fw-bold mb-3">Our Location</h4>
          <p>
            Selangor, Malaysia
          </p>
          <p class="mb-3">
            Tel: +(60)3-7782-6442<br>
            Email: info@goldken.com.my
          </p>

          <h4 class="fw-bold mb-3 mt-4">Business Hours</h4>
          <p>
            <strong>Monday – Friday</strong><br>
            8:30 AM – 5:30 PM
          </p>
          <p>
            <strong>Saturday</strong><br>
            9:00 AM – 1:00 PM
          </p>
          <p class="mb-0">
            Sunday & Public Holidays<br>
            <strong>Closed</strong>
          </p>
        </div>
      </div>

      <!-- Map (wider to accommodate merged column) -->
      <div class="col-lg-8">
        <div class="contact-box h-100 p-0 overflow-hidden">
          <iframe
            src="https://maps.google.com/maps?q=petaling%20jaya&t=&z=14&ie=UTF8&iwloc=&output=embed"
            style="width:100%; height:100%; border:0; min-height:260px;"
            loading="lazy">
          </iframe>
        </div>
      </div>

    </div>

  </div>
</section>
@endsection

