@extends('layouts.master')

@section('content')

<!-- :: Breadcrumb Header -->
<section class="breadcrumb-header" id="page" style="background-image: url('{{ asset('template/images/header/04_header.jpg') }}')">
    <div class="overlay"></div>
    <div style="margin-top:25px" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h1 style="text-align:center;margin-bottom:-20px">About Us</h1>
                    <ul style="text-align:center">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us py-100" id="about-us-section" style="background-size:cover;background-image: url({{ asset('template/images/event-bg.jpg') }})">
    <div class="container">
        <div class="row">
            
            <!-- Left side: Images -->
            <div class="col-lg-6">
                <div class="row img-box">
                    <div class="col">
                        <div class="one">
                            <div class="about-img">
                                <img class="img-fluid" src="assets/images/photo/20200703_152158.jpg" alt="Goldken Factory">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="two">
                            <div class="about-img">
                                <img class="img-fluid" src="assets/images/photo/20200703_152238.jpg" alt="Goldken Workshop">
                                <div class="experience-about">
                                    <i class="flaticon-globe"></i>
                                    <div class="counter">32</div>
                                    <h5>Years of Expertise</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side: Text content -->
            <div class="col-lg-6 d-flex align-items-center justify-content-between">
                <div class="text-box" data-aos="fade-right" data-aos-delay="100">

  <div class="sec-title" data-aos="fade-right" data-aos-delay="200">
    <h2>Your Industrial Knife Partner, Solution To Your Industrial Needs.</h2>
    <h3>Precision Sharpening. Trusted Quality. Since 1993.</h3>

    <p>
      Founded in 1993 (later rebranded as <strong>Goldken Sdn Bhd</strong>), we’ve supported Malaysian manufacturers
      with precision cutting solutions for <strong>32+ years</strong>. With advanced global machinery and skilled technicians,
      we deliver cleaner cuts, reduced waste, and longer tool life across multiple industries.
    </p>
  </div>

  <!-- What we do -->
  <h5 class="mt-3">What We Do</h5>
  <ul class="mb-3">
    <li><strong>Industrial knife regrinding</strong> to OEM-level sharpness</li>
    <li><strong>Supply of industrial knives & accessories</strong></li>
    <li><strong>Technical support</strong> for applications, troubleshooting & efficiency</li>
  </ul>

  <h5>Core Capabilities</h5>
  <ul class="mb-3">
    <li>Grinding length up to <strong>4.5&nbsp;m</strong>; circular OD up to <strong>400&nbsp;mm</strong></li>
    <li>Surface finishes: <strong>Standard</strong>, <strong>Super</strong>, <strong>Mirror</strong></li>
    <li>Consistent, burr-free edges for cleaner cuts & reduced rework</li>
  </ul>

  <!-- Quality & Safety -->
  <h5>Commitment to Quality & Service</h5>
  <ul class="mb-3">
    <li>Optional <strong>inspection reports</strong> (before/after condition, tolerance checks, measured specs vs. OEM/customer)</li>
    <li>Full <strong>traceability & documentation</strong> to support regulated industries</li>
    <li><strong>Safety & handling</strong> with free scrap knife disposal service</li>
  </ul>

  <!-- Industries -->
  <p class="text-muted mb-3">
    <em>Industries served:</em> Non-Woven, Paper & Printing, Plastics & Rubber, Recycling & Waste,
    Steel & Metal, Semiconductor, Wood Processing.
  </p>

  <!-- CTA -->
  <div class="any-question" data-aos="fade-right" data-aos-delay="500">
    Whatsapp us today:
    <a href="tel:01212843661">0121-2843-661</a> or
    <a href="tel:01068710594">0106-8710-594</a>
  </div>
  <a href="{{ url('contact') }}" class="btn btn-primary mt-3">Request A Quote</a>

</div>

            </div>
            
        </div>
    </div>
</section>


<!-- :: Company History Timeline -->
<!-- :: Company Detail Blocks (alternating image + content) -->
<section class="company-history py-100-70 position-relative">
  <div class="container">
    <div class="text-center mb-5">
    </div>

    {{-- Block 1 — Technology & Craftsmanship --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <div class="timeline-img">
          <img src="{{ asset('assets/images/photo/20200721_151324.jpg') }}" class="img-fluid rounded shadow" alt="Technology & Craftsmanship">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="timeline-content ps-lg-4">
          <h3 class="fw-bold">Technology & Craftsmanship</h3>
          <p>
            We invest in advanced global machinery and skilled technicians to deliver stable accuracy,
            repeatability, and premium finishes that keep your production efficient.
          </p>
          <ul class="list-unstyled mb-0">
            <li>Advanced grinding capability up to <strong>4.5m</strong> length</li>
            <li>Circular grinding up to <strong>400mm OD</strong></li>
            <li>Surface finishes: <strong>Standard</strong>, <strong>Super</strong>, <strong>Mirror</strong></li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Block 2 — Commitment to Quality & Service --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-lg-2">
        <div class="timeline-img">
          <img src="{{ asset('assets/images/photo/20200714_163704.jpg') }}" class="img-fluid rounded shadow" alt="Commitment to Quality & Service">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="timeline-content pe-lg-4 text-lg-end">
          <h3 class="fw-bold">Commitment to Quality &amp; Service</h3>
          <p>
            Our quality system covers incoming inspection, in-process monitoring, and final inspection.
            Optional reports are available for full traceability—ideal for regulated industries.
          </p>
          <ul class="list-unstyled mb-0">
            <li>Before/after condition photos &amp; notes</li>
            <li>Tolerance checks &amp; measured specifications vs OEM/customer requirements</li>
            <li>Consistent, repeatable outcomes across sharpening batches</li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Block 3 — Sharpening Solutions --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <div class="timeline-img">
          <img src="{{ asset('assets/images/photo/20200714_163045.jpg') }}" class="img-fluid rounded shadow" alt="Sharpening Solutions">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="timeline-content ps-lg-4">
          <h3 class="fw-bold">Sharpening Solutions</h3>
          <p>
            Beyond sharpening—we partner with your team to keep lines running smoothly, reduce waste,
            and extend tool life with practical support on and off site.
          </p>
          <ul class="list-unstyled mb-0">
            <li>Knife application consultation &amp; tool-life optimisation</li>
            <li>Troubleshooting &amp; root cause analysis of cutting issues</li>
            <li>Production efficiency support &amp; maintenance programs</li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Block 4 — Safety & Handling --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-lg-2">
        <div class="timeline-img">
          <img src="{{ asset('assets/images/photo/20200714_163725.jpg') }}" class="img-fluid rounded shadow" alt="Safety & Handling">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="timeline-content pe-lg-4 text-lg-end">
          <h3 class="fw-bold">Safety &amp; Handling</h3>
          <p>
            We prioritise safe logistics and responsible disposal so your team can focus on production.
          </p>
          <ul class="list-unstyled mb-0">
            <li>Free scrap knife disposal service</li>
            <li>Safe packaging &amp; handling guidance</li>
            <li>Replacement monitoring support</li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Optional: Industries Summary (short) --}}
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="timeline-img">
          <img src="{{ asset('assets/images/photo/20200703_152238.jpg') }}" class="img-fluid rounded shadow" alt="Industries We Serve">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="timeline-content ps-lg-4">
          <h3 class="fw-bold">Industries We Serve</h3>
          <p class="mb-2">
            We support <em>paper &amp; printing, plastics &amp; rubber, recycling &amp; waste, semiconductor,
            steel &amp; metal, wood processing</em> and more with precision cutting tools and regrinding.
          </p>
          <ul class="list-unstyled mb-0">
            <li>OEM-level sharpness &amp; superior cutting performance</li>
            <li>Cleaner cuts, reduced rework, longer tool life</li>
            <li>Fast, reliable turnaround with dedicated support</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  {{-- subtle center line, matching your previous style --}}
  <style>
    .timeline-img img{width:100%;height:auto;object-fit:cover}
    .company-history .timeline-content ul li{margin-bottom:.4rem}
    @media (min-width:992px){
      .company-history .timeline-content{text-align:left}
      .company-history .text-lg-end{text-align:right!important}
    }
    .company-history{position:relative}
    .company-history::before{
      content:'';
      position:absolute;left:50%;top:0;transform:translateX(-50%);
      width:4px;height:100%;background:#e0e0e0;opacity:.5;z-index:0
    }
  </style>
</section>

@endsection
