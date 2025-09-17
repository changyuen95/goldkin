@extends('layouts.master')

@section('content')

<!-- :: Breadcrumb Header -->
<section class="breadcrumb-header" id="page" style="background-image: url('{{ asset('template/images/header/04_header.jpg') }}')">
    <div class="overlay"></div>
    <div style="margin-top:25px" class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner">
                    <h1 style="text-align: center;margin-bottom:-20px">Services</h1>
                    <ul style="text-align:center">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><i class="fas fa-angle-right"></i></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Services Section -->
<section class="single-services py-100-70">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            {{-- ====== CATALOG TABS (Services / Products / Pre-Order) ====== --}}
<section class="py-40 border-bottom" id="catalog-tabs">
  <div class="container">
    <ul class="nav nav-pills gap-2" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="tab-services" data-bs-toggle="pill"
                data-bs-target="#pane-services" type="button" role="tab">
          Services
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-products" data-bs-toggle="pill"
                data-bs-target="#pane-products" type="button" role="tab">
          Products
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-pre-order" data-bs-toggle="pill"
                data-bs-target="#pane-pre-order" type="button" role="tab">
          Pre-Order
        </button>      </li>
    </ul>
  </div>
</section>

<div class="tab-content">
  {{-- ===================== SERVICES PANE ===================== --}}
  <section class="single-services py-100-70 tab-pane fade show active" id="pane-services" role="tabpanel">
    <div class="container">
      <div class="row">
        {{-- ================== LEFT SIDEBAR ================== --}}
        <aside class="col-lg-4">
          <div class="single-services-list mr-20">
            <h4>Our Services</h4>

            {{-- Core Services --}}
            <h6 class="mt-3 mb-2 text-muted">Core Services</h6>
            <ul class="nav flex-column" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#svc-regrinding">Industrial Knife Regrinding <i class="fas fa-angle-right"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#svc-support">Technical Support <i class="fas fa-angle-right"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#svc-qc">Quality Control & Reporting <i class="fas fa-angle-right"></i></a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#svc-safety">Safety & Handling <i class="fas fa-angle-right"></i></a>
              </li> --}}
            </ul>

            {{-- Industry-specific --}}
            <h6 class="mt-4 mb-2 text-muted">Industry-Specific Services</h6>
            <ul class="nav flex-column" role="tablist">
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ind-nonwoven">Non-Woven <i class="fas fa-angle-right"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ind-paper">Paper & Printing <i class="fas fa-angle-right"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ind-plastics">Plastics & Rubber <i class="fas fa-angle-right"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ind-recycling">Recycling & Waste <i class="fas fa-angle-right"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ind-semi">Semiconductor <i class="fas fa-angle-right"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ind-metal">Steel & Metal <i class="fas fa-angle-right"></i></a></li>
              <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#ind-wood">Wood Processing <i class="fas fa-angle-right"></i></a></li>
            </ul>
          </div>

          {{-- Support card (kept from your theme) --}}
          <div class="dedicated-customer mr-20 mt-4">
            <h5>Dedicated Support Team</h5>
            <p>Our team is committed to providing excellent customer support across all service areas.</p>
            <a href="{{ url('/contact') }}" class="btn-1 btn-2">Request A Quote</a>
          </div>
        </aside>

        {{-- ================== RIGHT CONTENT ================== --}}
        <div class="col-lg-8">
          <div class="tab-content" id="serviceTabsContent">

            <div class="tab-pane fade show active" id="svc-regrinding">
  <h3 class="mb-3">Industrial Knife Regrinding Services</h3>

  <p class="lead mb-3"><strong>Restoring performance. Extending lifespan. Enhancing productivity.</strong></p>

  <p>
    At <strong>Goldken Sdn Bhd</strong>, our core specialization lies in the
    <strong>precision regrinding of industrial knives</strong>. Serving a diverse range of sectors, we understand
    that every blade plays a critical role in your production line — and even the smallest imperfections can impact
    output quality and efficiency.
  </p>

  <p>
    With advanced grinding technology, skilled technicians, and strict quality assurance, we deliver regrinding
    services that restore your blades to <strong>OEM-level sharpness</strong> or better, helping you achieve
    <strong>cleaner cuts, reduced waste, and longer tool life</strong>.
  </p>

  <p class="mb-2">
    At <strong>Goldken Sdn Bhd</strong>, our grinding stations are equipped with advanced precision machinery,
    allowing us to offer three levels of surface finish for your industrial knives — <strong>Standard Finish</strong>,
    <strong> Super Finish</strong>, and <strong>Mirror Finish</strong> — based on your specific production requirements.
  </p>

  <ul class="mb-4">
    <li class="mb-2">
      <strong>Standard Finish</strong> – Ideal for general applications where consistent sharpness and durability are required.
    </li>
    <li class="mb-2">
      <strong>Super Finish</strong> – Provides a smoother cutting surface for reduced friction and improved material flow,
      extending blade life in high-speed operations.
    </li>
    <li class="mb-2">
      <strong>Mirror Finish</strong> – Achieves the highest level of smoothness and reflectivity, minimizing resistance
      and material adhesion, making it ideal for sensitive or high-precision cutting tasks.
    </li>
  </ul>

  <p>
    For <strong>Tungsten Carbide Tipped (TCT)</strong> knives, we can achieve a world-class surface finish of
    <strong>0.05 RA</strong>, ensuring exceptional sharpness, reduced cutting force, and optimal performance even in the
    most demanding industrial applications. This precision finish not only enhances cut quality but also helps maintain
    dimensional accuracy, extend service intervals, and lower your overall operational costs.
  </p>

  <p class="mb-4">
    With our expertise and technology, Goldken ensures every knife leaving our facility meets the exacting standards of
    <strong>sharpness</strong>, <strong>smoothness</strong>, and <strong>durability</strong> that your industry demands.
  </p>

  <!-- Surface finish diagrams (placeholders; replace src paths with your images) -->
  <div class="row g-3">
    <div class="col-md-4">
      <figure class="text-center mb-0">
        <img class="img-fluid rounded shadow-sm" src="{{ asset('assets/images/STD Finish.png') }}" alt="Ra 0.5 Standard">
        <figcaption class="small mt-2">Ra 0.5 Standard</figcaption>
      </figure>
    </div>
    <div class="col-md-4">
      <figure class="text-center mb-0">
        <img class="img-fluid rounded shadow-sm" src="{{ asset('assets/images/Super Finish.png') }}" alt="Ra 0.2 Super">
        <figcaption class="small mt-2">Ra 0.2 Super</figcaption>
      </figure>
    </div>
    <div class="col-md-4">
      <figure class="text-center mb-0">
        <img class="img-fluid rounded shadow-sm" src="{{ asset('assets/images/Mirror Finish.png') }}" alt="Ra 0.05 Mirror">
        <figcaption class="small mt-2">Ra 0.05 Mirror</figcaption>
      </figure>
    </div>
  </div>
</div>


            {{-- ========== CORE: Technical Support ========== --}}
           <div class="tab-pane fade" id="svc-support">
  <h3 class="mb-2">Technical Support</h3>
  <p class="text-muted mb-3"><em>Expertise that goes beyond sharpening</em></p>

  <p>
    At <strong>Goldken Sdn Bhd</strong>, we believe in building long-term relationships with our clients—not just
    through quality craftsmanship, but through <strong>knowledge-sharing</strong> and dedicated
    <strong>technical support</strong>. Whether you're experiencing blade wear issues, production inconsistencies,
    or simply looking to improve tool life, our team is here to assist with
    <strong>practical, on-site, and remote guidance</strong>.
  </p>

  <p>
    Our support goes beyond the grinding bench. We work closely with our clients to understand their operations,
    analyze cutting issues, and recommend <strong>tailored solutions</strong> that enhance productivity and minimize downtime.
  </p>

  <h5 class="mt-4">What We Offer</h5>

  <h6 class="mt-3">Knife Application Consultation</h6>
  <ul>
    <li>Recommending the most suitable knife materials based on application</li>
    <li>Advising on finish levels (Standard, Super, Mirror) depending on substrate and cutting speed</li>
    <li>Guidance on knife compatibility with specific machines and brands</li>
  </ul>

  <h6 class="mt-3">Tool Life Optimization</h6>
  <ul>
    <li>Analyzing wear patterns and usage cycles</li>
    <li>Recommending optimal regrinding intervals</li>
    <li>Educating operators on handling, storage, and maintenance to extend blade life</li>
  </ul>

  <h6 class="mt-3">Troubleshooting &amp; Root Cause Analysis</h6>
  <ul>
    <li>Identifying causes of chipping, burrs, uneven cuts, or premature dullness</li>
    <li>On-site inspections or photo-based diagnosis to speed up resolution</li>
    <li>Suggestions to reduce strain on knives and prevent recurring issues</li>
  </ul>

  <h6 class="mt-3">Production Efficiency Support</h6>
  <ul class="mb-4">
    <li>Evaluating the interaction between knives, machine setup, and material feed</li>
    <li>Helping optimize cutting quality to reduce waste, rejects, and machine wear</li>
  </ul>

  <h5 class="mt-2">Why Our Support Stands Out</h5>
  <ul>
    <li>Experienced technicians with industry-specific knowledge</li>
    <li>Fast response and accessible communication</li>
    <li>Personalized advice based on real production challenges</li>
    <li>Support that aligns with your operational goals — not just our service offerings</li>
  </ul>
</div>


            {{-- ========== CORE: Quality Control & Reporting ========== --}}
            <div class="tab-pane fade" id="svc-qc">
  <h3 class="mb-2">Quality Control &amp; Reporting <small class="text-muted"></small></h3>
  <p class="text-muted"><em>Precision you can see. Confidence you can measure.</em></p>

  <p>
    At <strong>Goldken Sdn Bhd</strong>, we don’t just sharpen blades — we deliver
    <strong>measurable performance</strong> and <strong>quality assurance</strong>. Every knife that enters our facility
    undergoes a meticulous <strong>quality control (QC)</strong> process to ensure that it meets or exceeds performance
    expectations before it reaches your production line.
  </p>
  <p>
    By integrating <strong>inspection protocols</strong> and <strong>detailed reporting</strong>, we give our customers full
    visibility into the condition, quality, and usability of their blades — enabling better decision-making and total
    confidence in every tool we return.
  </p>

  <h5 class="mt-4">Our Quality Control Process</h5>
  <p>Our multi-stage QC workflow includes:</p>

  <h6 class="mt-3">1. Incoming Inspection</h6>
  <ul>
    <li>Visual and dimensional checks</li>
    <li>Identification of chips, cracks, or excessive wear</li>
    <li>Evaluation of blade condition before grinding</li>
  </ul>

  <h6 class="mt-3">2. In-Process Monitoring</h6>
  <ul>
    <li>Continuous checks during grinding for angle consistency and edge straightness</li>
    <li>Equipment calibration to maintain sharpening accuracy</li>
  </ul>

  <h6 class="mt-3">3. Final Inspection</h6>
  <ul class="mb-2">
    <li>Verification of edge geometry and sharpness</li>
    <li>Measurement of key dimensions (length, width, bevel angle)</li>
    <li>Surface finish evaluation (Standard, Super, or Mirror Finish)</li>
  </ul>
</div>


            {{-- ========== CORE: Safety & Handling ========== --}}
            <div class="tab-pane fade" id="svc-safety">
              <h3>Safety & Handling</h3>
              <ul class="list-unstyled">
                <li>Free scrap knife disposal service</li>
                <li>Safe packaging and handling guidelines</li>
                <li>Replacement monitoring support</li>
              </ul>
            </div>

            {{-- ===================================================== --}}
            {{-- =============== INDUSTRY: NON-WOVEN ================= --}}
            {{-- ===================================================== --}}
            <div class="tab-pane fade" id="ind-nonwoven">
              <h3>Non-Woven (Precision Cutting for Soft, Flexible, and Technical Fabrics)</h3>

              <h5>Industry Background</h5>
              <p>The non-woven industry spans hygiene products, medical textiles, automotive interiors,
                filtration systems, and geotextiles. Consistent edge quality without fraying or compressing
                the web is critical to product fit and filtration performance.</p>

              <h5>Key Industry Challenges</h5>
              <ul>
                <li>Fiber pull-out or edge fraying caused by dull or damaged blades</li>
                <li>Material distortion or wrinkling during cutting</li>
                <li>Static buildup affecting fabric feed and cut accuracy</li>
                <li>Knife wear from cutting abrasive technical fibers (e.g., polyester, glass-filled)</li>
                <li>Irregular cuts that compromise product fit, sealing, or performance</li>
              </ul>

              <h5>Goldken’s Precision Grinding Services for Non-Woven Tools</h5>
              <ul>
                <li>Optimized bevel angles for soft/technical webs</li>
                <li>Uniform edge sharpness to prevent snagging and melting</li>
                <li>Fine finishing (incl. mirror) to reduce friction and residue</li>
                <li>Tight tolerances for clean cuts at high line speeds</li>
              </ul>

              {{-- Knife types as “e-commerce” cards --}}
              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_164329.jpg" alt="Slitter Knives">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Slitter Knives</h6>
                      <p class="card-text small text-muted">For clean longitudinal slitting of non-woven webs.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200721_151742.jpg" alt="Trimmer Knives">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Trimmer Knives</h6>
                      <p class="card-text small text-muted">Edge trimming without snagging or wrinkling.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200721_152904.jpg" alt="Guillotine / Cross-cut">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Guillotine / Cross-cut</h6>
                      <p class="card-text small text-muted">Square, burr-free cross-cuts for stacked materials.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order Knives</a>
                <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
              </div>
            </div>

            {{-- ================= PAPER & PRINTING ================== --}}
            <div class="tab-pane fade" id="ind-paper">
              <h3>Paper & Printing (Cutting, Trimming, Binding, Tissue / Pulp)</h3>

              {{-- paste the exact doc text for Background + Challenges + Our Services here --}}
              <p class="text-muted">Paste Background / Challenges from the doc here.</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_163704.jpg" alt="Slitter / Sheeter">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Slitter / Sheeter Knives</h6>
                      <p class="card-text small text-muted">Clean cuts for paper & tissue.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_163045.jpg" alt="Guillotine">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Guillotine Knives</h6>
                      <p class="card-text small text-muted">Binding/cutting applications.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_163725.jpg" alt="Trim & Perforation">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Trim / Perforation Knives</h6>
                      <p class="card-text small text-muted">Consistent perforation lines.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order Knives</a>
                <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
              </div>
            </div>

            {{-- ================= PLASTICS & RUBBER ================= --}}
            <div class="tab-pane fade" id="ind-plastics">
              <h3>Plastics & Rubber</h3>
              <p class="text-muted">Paste Background / Challenges / Service Approach from the doc here.</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200721_152904.jpg" alt="Granulator Blades">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Granulator Blades</h6>
                      <p class="card-text small text-muted">Clean granulation without melt or dust.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_164329.jpg" alt="Slitter Blades">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Slitter Blades</h6>
                      <p class="card-text small text-muted">Film & sheet slitting.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200721_151742.jpg" alt="Guillotine / Rotary">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Guillotine / Rotary Cutters</h6>
                      <p class="card-text small text-muted">Trim, cross-cut, pelletizer support.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order Knives</a>
                <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
              </div>
            </div>

            {{-- ================= RECYCLING & WASTE ================= --}}
            <div class="tab-pane fade" id="ind-recycling">
              <h3>Recycling & Waste</h3>
              <p class="text-muted">Paste doc content (Background, Challenges, Approach, Benefits).</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_163704.jpg" alt="Shredder Knives">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Shredder / Chopper Knives</h6>
                      <p class="card-text small text-muted">Heavy-duty reduction.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_163045.jpg" alt="Granulator">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Granulator Blades</h6>
                      <p class="card-text small text-muted">Clean regrind, less dust.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order Knives</a>
                <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
              </div>
            </div>

            {{-- ================== SEMICONDUCTOR =================== --}}
            <div class="tab-pane fade" id="ind-semi">
              <h3>Semiconductor</h3>
              <p class="text-muted">Paste doc content (Background, Challenges, Approach, Benefits).</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200721_151742.jpg" alt="Wafer Dicing">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Wafer Dicing Blades</h6>
                      <p class="card-text small text-muted">Precision cutting.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200721_152904.jpg" alt="Film Slitter">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Film Slitter Blades</h6>
                      <p class="card-text small text-muted">Thin-film processing.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order Knives</a>
                <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
              </div>
            </div>

            {{-- ================== STEEL & METAL =================== --}}
            <div class="tab-pane fade" id="ind-metal">
              <h3>Steel & Metal</h3>
              <p class="text-muted">Paste doc content (Background, Challenges, Approach, Benefits).</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_163725.jpg" alt="Slitter / Shear">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Slitter & Shear Blades</h6>
                      <p class="card-text small text-muted">Durable, accurate slitting.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_164329.jpg" alt="Trimmer/Cropper">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Trimmer / Cropper</h6>
                      <p class="card-text small text-muted">Strip and coil finishing.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order Knives</a>
                <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
              </div>
            </div>

            {{-- ================== WOOD PROCESSING ================= --}}
            <div class="tab-pane fade" id="ind-wood">
              <h3>Wood Processing</h3>
              <p class="text-muted">Paste doc content (Background, Challenges, Approach, Benefits).</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200721_151742.jpg" alt="Planer / Jointer">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Planer & Jointer Knives</h6>
                      <p class="card-text small text-muted">Smooth, consistent planing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top" src="assets/images/photo/20200714_163725.jpg" alt="Chipper">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Chipper / Veneer Blades</h6>
                      <p class="card-text small text-muted">High-uptime wood reduction.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order Knives</a>
              </div>
            </div>

          </div> {{-- /tab-content (right) --}}
        </div>
      </div>
    </div>
  </section>

{{-- products --}}
{{-- ===================== PRODUCTS PANE ===================== --}}
<section class="single-services py-100-70 tab-pane fade" id="pane-products" role="tabpanel">
  <div class="container">
    <div class="row">
      {{-- ================== LEFT SIDEBAR ================== --}}
      <aside class="col-lg-4">
        <div class="single-services-list mr-20">
          <h4>Our Products</h4>

          {{-- Industrial Knives --}}
          <h6 class="mt-3 mb-2 text-muted">Industrial Knives & Accessories</h6>
          <ul class="nav flex-column" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#prod-paper">
                Paper (Guillotine, Slitter, Trimmer, etc.) <i class="fas fa-angle-right"></i>
              </a>
            </li>
 
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#prod-sticks">
                Cutting Sticks <i class="fas fa-angle-right"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#prod-guards">
                Knife Guards <i class="fas fa-angle-right"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#prod-magnets">
                Magnetic Strips <i class="fas fa-angle-right"></i>
              </a>
            </li>
          </ul>
        </div>

        {{-- support card (same look/feel as services) --}}
        <div class="dedicated-customer mr-20 mt-4">
          <h5>Need Help Choosing?</h5>
          <p>We’ll map blade specs to your machine (e.g., Polar, Wohlenberg, Horizon) and application.</p>
          <a href="{{ url('/contact') }}" class="btn-1 btn-2">Request A Quote</a>
        </div>
      </aside>

      {{-- ================== RIGHT CONTENT ================== --}}
      <div class="col-lg-8">
        <div class="tab-content">

          {{-- ========== INDUSTRIAL KNIVES: PAPER ========== --}}
          <div class="tab-pane fade show active" id="prod-paper">
            <h3>Premium Industrial Knives & Accessories</h3>
            <p>Supplying precision-engineered cutting tools for demanding paper, printing & converting applications.
              Our inventory is compatible with major systems (Polar, Wohlenberg, Horizon, etc.) and can be tailored to Malaysian industry specs.</p>

            {{-- e-commerce style cards --}}
            <div class="row g-3 mt-3">
              {{-- Guillotine Knives --}}
              <div class="col-md-6 col-lg-6">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/photo/20200714_163725.jpg" alt="Guillotine Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Guillotine Knives</h6>
                    <p class="card-text small text-muted">Compatible with Polar, Wohlenberg, Horizon & more for clean stack cuts.</p>
                  </div>
                </div>
              </div>

              {{-- Top & Bottom Slitter Knives --}}
              <div class="col-md-6 col-lg-6">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/photo/20200721_151742.jpg" alt="Top & Bottom Slitter Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Top & Bottom Slitter Knives</h6>
                    <p class="card-text small text-muted">High-accuracy paired slitters for clean slitting with minimal dust.</p>
                  </div>
                </div>
              </div>

              {{-- Trimmer Knives --}}
              <div class="col-md-6 col-lg-6">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/photo/20200721_152904.jpg" alt="Trimmer Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Trimmer Knives</h6>
                    <p class="card-text small text-muted">Consistent edges for high-speed 3-knife trimming & bindery lines.</p>
                  </div>
                </div>
              </div>

              {{-- Sheeter Knives --}}
              <div class="col-md-6 col-lg-6">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/photo/20200714_163704.jpg" alt="Sheeter Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Sheeter Knives</h6>
                    <p class="card-text small text-muted">Precision cutting for sheet lines; stable edges and clean output.</p>
                  </div>
                </div>
              </div>

              {{-- Scraper / Doctor Blades --}}
              <div class="col-md-6 col-lg-6">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/photo/20200714_164329.jpg" alt="Scraper / Doctor Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Scraper / Doctor Blades</h6>
                    <p class="card-text small text-muted">Reliable metering and cleaning for paper finishing processes.</p>
                  </div>
                </div>
              </div>

              {{-- Score / Creasing Knives --}}
              <div class="col-md-6 col-lg-6">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/photo/20200714_163045.jpg" alt="Score / Creasing Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Score / Creasing Knives</h6>
                    <p class="card-text small text-muted">Crisp, accurate creases and scoring for converting and finishing.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
            </div>
          </div>

          {{-- ========== ACCESSORY: CUTTING STICKS ========== --}}
          <div class="tab-pane fade" id="prod-sticks">
            <h3>Cutting Sticks</h3>
            <p>Durable sticks for guillotines & trimmers. Grade/colour options (UHMW, nylon, PVC) matched to your blade & machine.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-6">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/photo/20200721_152904.jpg" alt="Cutting Sticks">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Cutting Sticks</h6>
                    <p class="card-text small text-muted">Consistent performance and longer service life for clean cuts.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
            </div>
          </div>

          {{-- ========== ACCESSORY: KNIFE GUARDS ========== --}}
          <div class="tab-pane fade" id="prod-guards">
            <h3>Knife Guards</h3>
            <p>Safety guards/holders for safe transport and handling of knives. Protect cutting edges and operators; sizes for common guillotines.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-6">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/photo/20200714_163725.jpg" alt="Knife Guards">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Knife Guards</h6>
                    <p class="card-text small text-muted">Edge protection & safe handling during transport and storage.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
            </div>
          </div>

          {{-- ========== ACCESSORY: MAGNETIC STRIPS ========== --}}
          <div class="tab-pane fade" id="prod-magnets">
            <h3>Magnetic Strips</h3>
            <p>Reliable magnetic hold/positioning for setup and maintenance tasks — alignment, fixtures and line setup activities.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-6">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/photo/20200714_163704.jpg" alt="Magnetic Strips">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Magnetic Strips</h6>
                    <p class="card-text small text-muted">Practical accessory for fixture alignment and machine setup.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <a href="{{ url('/contact') }}" class="btn-1">Request A Quote</a>
            </div>
          </div>

        </div> {{-- /tab-content --}}
      </div>
    </div>
  </div>
</section>
{{-- ===================== PRE-ORDER PANE (CTAs only at bottom) ===================== --}}
<section class="single-services py-100-70 tab-pane fade" id="pane-pre-order" role="tabpanel">
  <div class="container">
    <div class="row">

      {{-- ================== LEFT SIDEBAR ================== --}}
      <aside class="col-lg-4">
        <div class="single-services-list mr-20">
          <h4>Pre-Order Catalog</h4>

          <h6 class="mt-3 mb-2 text-muted">Categories</h6>
          <ul class="nav flex-column" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#po-recycling">Recycling &amp; Waste Management <i class="fas fa-angle-right"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#po-metal">Steel &amp; Metal Processing <i class="fas fa-angle-right"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#po-wood">Wood Processing <i class="fas fa-angle-right"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#po-plastic">Plastic &amp; Rubber <i class="fas fa-angle-right"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#po-semi">Semiconductor <i class="fas fa-angle-right"></i></a></li>
          </ul>
        </div>

        <div class="dedicated-customer mr-20 mt-4">
          <h5>Need Help Choosing?</h5>
          <p>We’ll map blade specs to your machine (e.g., Polar, Wohlenberg, Horizon) and application.</p>
          <a href="{{ url('/contact') }}" class="btn-1 btn-2">Request A Quote</a>
        </div>
      </aside>

      {{-- ================== RIGHT CONTENT ================== --}}
      <div class="col-lg-8">
        <div class="tab-content" id="preorderTabsContent">

          {{-- ================= RECYCLING & WASTE ================= --}}
          <div class="tab-pane fade show active" id="po-recycling">
            <h3>Recycling &amp; Waste Management</h3>
            <p class="text-muted">Heavy-duty blades for reduction, regrind and bale handling.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Shredder Knives</h6>
                    <p class="card-text small text-muted">High-torque material reduction.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Granulator Blades</h6>
                    <p class="card-text small text-muted">Clean regrind with minimal dust.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Chopper Knives</h6>
                    <p class="card-text small text-muted">Strip &amp; scrap chopping operations.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Bale Cutter Blades</h6>
                    <p class="card-text small text-muted">Bale cutting &amp; opening support.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="mt-4">
              <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order</a>
              <a href="{{ url('/contact') }}" class="btn-1">Request Quote</a>
            </div>
          </div>

          {{-- ================= STEEL & METAL ================= --}}
          <div class="tab-pane fade" id="po-metal">
            <h3>Steel &amp; Metal Processing</h3>
            <p class="text-muted">Precision slitting, shearing and coil/strip finishing.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Rotary &amp; Straight Shear Blades</h6>
                <p class="card-text small text-muted">Accurate shearing performance.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Slitter Blades</h6>
                <p class="card-text small text-muted">Durable, accurate slitting lines.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Trimmer &amp; Cropper Knives</h6>
                <p class="card-text small text-muted">Strip &amp; coil finishing support.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Scrap Chopper Blades</h6>
                <p class="card-text small text-muted">Continuous scrap chopping.</p>
              </div></div></div>
            </div>

            <div class="mt-4">
              <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order</a>
              <a href="{{ url('/contact') }}" class="btn-1">Request Quote</a>
            </div>
          </div>

          {{-- ================= WOOD PROCESSING ================= --}}
          <div class="tab-pane fade" id="po-wood">
            <h3>Wood Processing</h3>
            <p class="text-muted">High-uptime blades for planing, chipping and veneer.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Planer &amp; Jointer Knives</h6>
                <p class="card-text small text-muted">Consistent finish &amp; flatness.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Chipper Blades</h6>
                <p class="card-text small text-muted">Reliable wood reduction.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Flaker Knives</h6>
                <p class="card-text small text-muted">Uniform flake production.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Veneer Blades</h6>
                <p class="card-text small text-muted">Clean peeling and slicing.</p>
              </div></div></div>
            </div>

            <div class="mt-4">
              <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order</a>
              <a href="{{ url('/contact') }}" class="btn-1">Request Quote</a>
            </div>
          </div>

          {{-- ================= PLASTIC & RUBBER ================= --}}
          <div class="tab-pane fade" id="po-plastic">
            <h3>Plastic &amp; Rubber</h3>
            <p class="text-muted">Blades for granulating, slitting, cutting and converting.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Granulator &amp; Pelletizer Knives</h6>
                <p class="card-text small text-muted">Clean granulation &amp; pelletizing.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Slitter Blades</h6>
                <p class="card-text small text-muted">Film &amp; sheet slitting lines.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Guillotine Knives</h6>
                <p class="card-text small text-muted">Trim, cross-cut &amp; converting.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Rotary Cutters</h6>
                <p class="card-text small text-muted">Rotary converting support.</p>
              </div></div></div>
            </div>

            <div class="mt-4">
              <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order</a>
              <a href="{{ url('/contact') }}" class="btn-1">Request Quote</a>
            </div>
          </div>

          {{-- ================= SEMICONDUCTOR ================= --}}
          <div class="tab-pane fade" id="po-semi">
            <h3>Semiconductor</h3>
            <p class="text-muted">Precision blades for wafer and film processes.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Wafer Dicing Blades</h6>
                <p class="card-text small text-muted">Clean, accurate wafer singulation.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Film Slitter Blades</h6>
                <p class="card-text small text-muted">Thin-film processing lines.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100"><div class="card-body">
                <h6 class="card-title mb-1">Die Attach Knives</h6>
                <p class="card-text small text-muted">Assembly &amp; packaging support.</p>
              </div></div></div>
            </div>

            <div class="mt-4">
              <a href="{{ url('/pre-order') }}" class="btn-1 btn-3 me-2">Pre-Order</a>
              <a href="{{ url('/contact') }}" class="btn-1">Request Quote</a>
            </div>
          </div>

        </div> {{-- /tab-content --}}
      </div>

    </div>
  </div>
</section>


</div>

        </div>
    </div>
</section>

@endsection


<script>
document.addEventListener('DOMContentLoaded', function () {
  // Persist tab in URL (?tab=services|products|pre-order)
  const navButtons = document.querySelectorAll('#catalog-tabs [data-bs-toggle="pill"]');

  navButtons.forEach(btn => {
    btn.addEventListener('shown.bs.tab', function (e) {
      const id = e.target.id.replace('tab-', ''); // e.g. 'services'
      const url = new URL(window.location);
      url.searchParams.set('tab', id);
      history.replaceState(null, '', url.toString());
    });
  });

  const params = new URLSearchParams(window.location.search);
  const initial = params.get('tab'); // 'services' | 'products' | 'pre-order'
  if (initial) {
    const btn = document.getElementById('tab-' + initial);
    if (btn) {
      const t = new bootstrap.Tab(btn);
      t.show();
    }
  }
});
</script>
