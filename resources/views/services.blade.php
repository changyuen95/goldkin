@extends('layouts.master')

@section('title', 'Goldken Sdn Bhd - Services & Products')

@section('content')
<style>
  .fix-height {
    max-height: 200px; 
    width: auto;    
    object-fit: contain; 
  }

  /* Keep catalog sub-navs visually attached to the main catalog tabs */
  /* Reduce top spacing for the panes that follow #catalog-tabs */
  #catalog-tabs + .tab-content .single-services {
    padding-top: 12px !important; /* pull content up so sub-nav sits close to main nav */
    padding-bottom: 30px !important;
  }

  /* Slightly tighten sub-nav spacing */
  .services-sub-nav, .products-sub-nav {
    margin-top: 6px;
    margin-bottom: 12px;
  }

  /* Dedicated customer - centered and sized (themed) */
  .dedicated-customer.centered {
    max-width: 880px;
    margin: 24px auto;
    padding: 22px 24px;
    text-align: center;
    border-radius: 8px;
    background: linear-gradient(180deg, #fff7f0 0%, #ffffff 100%); /* subtle brand tint */
    border: 1px solid rgba(231,100,31,0.06);
    color: #111; /* ensure text is dark to match project theme */
    box-shadow: 0 6px 18px rgba(21, 28, 36, 0.06);
  }

  /* Explicitly style inner typography to avoid inherited light colors */
  .dedicated-customer.centered h5 {
    color: #e7641f; /* brand accent */
  }
  .dedicated-customer.centered p {
    color: #222;
  }

  /* Smaller screens: keep spacing comfortable */
  @media (max-width: 767.98px) {
    #catalog-tabs + .tab-content .single-services { padding-top: 8px !important; }
    .services-sub-nav, .products-sub-nav { margin-top: 8px; margin-bottom: 10px; }
    .dedicated-customer.centered { padding: 16px; margin: 16px auto; }
  }
</style>
<!-- :: Breadcrumb Header -->
<section class="breadcrumb-header" id="page" style="background-image: url('{{ asset('template/images/header/04_header.jpg') }}')">
    <div class="overlay"></div>
    <div style="margin-top:25px" class="container">
        <div class="row">
            <div class="col-md-12 hero-content">
                <div class="banner">
                    <div class="banner">
                          <h1 style="text-align: center;margin-bottom:-20px" class="handline">Our Services & Products</h1>
                          <p class="about-website text-center">
                          <span class="tagline">
                              Trusted industrial services backed by experience, quality control, and technical expertise.
                          </span>
                          </p>
                      </div>
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
      {{-- <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab-pre-order" data-bs-toggle="pill"
                data-bs-target="#pane-pre-order" type="button" role="tab">
          Pre-Order
        </button>      </li> --}}
    </ul>
  </div>
</section>

<div class="tab-content">
  {{-- ===================== SERVICES PANE ===================== --}}
  <section class="single-services py-100-70 tab-pane fade show active" id="pane-services" role="tabpanel">
    <div class="container">
      <!-- Sub-nav for Core Services (appears when Services tab is active) -->
      <div class="services-sub-nav mb-4">
        <ul class="nav nav-pills gap-2 flex-nowrap overflow-auto justify-content-start" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#svc-regrinding" type="button" role="tab">Industrial Knife Regrinding</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#svc-support" type="button" role="tab">Technical Support</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#svc-qc" type="button" role="tab">Quality Control & Reporting</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#svc-scrap" type="button" role="tab">Scrap Knife Collection</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#svc-safety" type="button" role="tab">Safety & Handling</button>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-lg-12">
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
  <ul style="list-style: disc">
    <li>Recommending the most suitable knife materials based on application</li>
    <li>Advising on finish levels (Standard, Super, Mirror) depending on substrate and cutting speed</li>
    <li>Guidance on knife compatibility with specific machines and brands</li>
  </ul>

  <h6 class="mt-3">Tool Life Optimization</h6>
  <ul style="list-style: disc">
    <li>Analyzing wear patterns and usage cycles</li>
    <li>Recommending optimal regrinding intervals</li>
    <li>Educating operators on handling, storage, and maintenance to extend blade life</li>
  </ul>

  <h6 class="mt-3">Troubleshooting &amp; Root Cause Analysis</h6>
  <ul style="list-style: disc">
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
  <ul style="list-style: disc">
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
  <ul style="list-style: disc">
    <li>Visual and dimensional checks</li>
    <li>Identification of chips, cracks, or excessive wear</li>
    <li>Evaluation of blade condition before grinding</li>
  </ul>

  <h6 class="mt-3">2. In-Process Monitoring</h6>
  <ul style="list-style: disc">
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

            {{-- ========== CORE: Scrap Knife Collection ========== --}}
            <div class="tab-pane fade" id="svc-scrap">
              <h3>Scrap Knife Collection</h3>
              <p class="text-muted"><em>Responsible collection, safe handling, and sustainable disposal.</em></p>

              <p>
                Goldken offers a scrap knife collection service to help you remove end-of-life blades safely and
                responsibly from your facility. We consolidate scrap knives, ensure correct handling and transport,
                and route material to approved recyclers or disposal facilities in compliance with local regulations.
              </p>

              <h5 class="mt-3">Service Highlights</h5>
              <ul class="mb-3">
                <li>Scheduled scrap pickups or ad-hoc collection on request</li>
                <li>Documentation and tracking for audit / environmental reporting</li>
                <li>Safe packaging and transport to prevent injury and contamination</li>
                <li>Partnerships with certified recyclers to maximise resource recovery</li>
              </ul>

              <div class="mt-3">
                <a href="{{ url('/contact') }}" class="btn-1">Arrange Collection</a>
              </div>
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
              <ul style="list-style: disc">
                <li>Fiber pull-out or edge fraying caused by dull or damaged blades</li>
                <li>Material distortion or wrinkling during cutting</li>
                <li>Static buildup affecting fabric feed and cut accuracy</li>
                <li>Knife wear from cutting abrasive technical fibers (e.g., polyester, glass-filled)</li>
                <li>Irregular cuts that compromise product fit, sealing, or performance</li>
              </ul>

              <h5 style="margin-top:15px">Goldken’s Precision Grinding Services for Non-Woven Tools</h5>
              <ul style="list-style: disc">
                <li>Optimized bevel angles for soft/technical webs</li>
                <li>Uniform edge sharpness to prevent snagging and melting</li>
                <li>Fine finishing (incl. mirror) to reduce friction and residue</li>
                <li>Tight tolerances for clean cuts at high line speeds</li>
              </ul>

              {{-- Knife types as “e-commerce” cards --}}
              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_164329.jpg" alt="Slitter Knives">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Slitter Knives</h6>
                      <p class="card-text small text-muted">For clean longitudinal slitting of non-woven webs.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200721_151742.jpg" alt="Trimmer Knives">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Trimmer Knives</h6>
                      <p class="card-text small text-muted">Edge trimming without snagging or wrinkling.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200721_152904.jpg" alt="Guillotine / Cross-cut">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Guillotine / Cross-cut</h6>
                      <p class="card-text small text-muted">Square, burr-free cross-cuts for stacked materials.</p>
                    </div>
                  </div>
                </div>
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
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_163704.jpg" alt="Slitter / Sheeter">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Slitter / Sheeter Knives</h6>
                      <p class="card-text small text-muted">Clean cuts for paper & tissue.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_163045.jpg" alt="Guillotine">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Guillotine Knives</h6>
                      <p class="card-text small text-muted">Binding/cutting applications.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_163725.jpg" alt="Trim & Perforation">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Trim / Perforation Knives</h6>
                      <p class="card-text small text-muted">Consistent perforation lines.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- ================= PLASTICS & RUBBER ================= --}}
            <div class="tab-pane fade" id="ind-plastics">
              <h3>Plastics & Rubber</h3>
              <p class="text-muted">Paste Background / Challenges / Service Approach from the doc here.</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200721_152904.jpg" alt="Granulator Blades">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Granulator Blades</h6>
                      <p class="card-text small text-muted">Clean granulation without melt or dust.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_164329.jpg" alt="Slitter Blades">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Slitter Blades</h6>
                      <p class="card-text small text-muted">Film & sheet slitting.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200721_151742.jpg" alt="Guillotine / Rotary">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Guillotine / Rotary Cutters</h6>
                      <p class="card-text small text-muted">Trim, cross-cut, pelletizer support.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- ================= RECYCLING & WASTE ================= --}}
            <div class="tab-pane fade" id="ind-recycling">
              <h3>Recycling & Waste</h3>
              <p class="text-muted">Paste doc content (Background, Challenges, Approach, Benefits).</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_163704.jpg" alt="Shredder Knives">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Shredder / Chopper Knives</h6>
                      <p class="card-text small text-muted">Heavy-duty reduction.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_163045.jpg" alt="Granulator">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Granulator Blades</h6>
                      <p class="card-text small text-muted">Clean regrind, less dust.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- ================== SEMICONDUCTOR =================== --}}
            <div class="tab-pane fade" id="ind-semi">
              <h3>Semiconductor</h3>
              <p class="text-muted">Paste doc content (Background, Challenges, Approach, Benefits).</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/knives/semiconductor/lithium-ion/top.jpg" alt="lithium-ion-slitter-top">
                    <div class="card-body">
                      {{-- <h6 class="card-title mb-1">Wafer Dicing Blades</h6> --}}
                      <h6 class="card-title mb-1">Top Lithium-Ion Battery Slitter Knife</h6>
                      <p class="card-text small text-muted">Clean and consistent cutting.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/knives/semiconductor/lithium-ion/bottom.jpg" alt="lithium-ion-slitter-bottom">
                    <div class="card-body">
                      {{-- <h6 class="card-title mb-1">Film Slitter Blades</h6> --}}
                      <h6 class="card-title mb-1">Bottom Lithium-Ion Battery Slitter Knife</h6>
                      <p class="card-text small text-muted">Stable support and clean cuts.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- ================== STEEL & METAL =================== --}}
            <div class="tab-pane fade" id="ind-metal">
              <h3>Steel & Metal</h3>
              <p class="text-muted">Paste doc content (Background, Challenges, Approach, Benefits).</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_163725.jpg" alt="Slitter / Shear">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Slitter & Shear Blades</h6>
                      <p class="card-text small text-muted">Durable, accurate slitting.</p>
                    </div>
                  </div>
                </div>
                {{-- <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_164329.jpg" alt="Trimmer/Cropper">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Trimmer / Cropper</h6>
                      <p class="card-text small text-muted">Strip and coil finishing.</p>
                    </div>
                  </div>
                </div> --}}
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" style="width:auto; height:125px; object-fit:cover; overflow:hidden;" src="assets/images/knives/steelandmetal/top-blending-knife-2.jpg" alt="Trimmer/Cropper">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Top Bending Knife</h6>
                      <p class="card-text small text-muted">Strip and coil finishing.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {{-- ================== WOOD PROCESSING ================= --}}
            <div class="tab-pane fade" id="ind-wood">
              <h3>Wood Processing</h3>
              <p class="text-muted">Paste doc content (Background, Challenges, Approach, Benefits).</p>

              <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200721_151742.jpg" alt="Planer / Jointer">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Planer & Jointer Knives</h6>
                      <p class="card-text small text-muted">Smooth, consistent planing.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/photo/20200714_163725.jpg" alt="Chipper">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Chipper / Veneer Blades</h6>
                      <p class="card-text small text-muted">High-uptime wood reduction.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" style="width:auto; height:125px; object-fit:contain;" src="assets/images/knives/woodprocessing/saw-blade-1.jpg" alt="Chipper">
                    <div class="card-body">
                      <h6 class="card-title mb-1">Saw Blades</h6>
                      <p class="card-text small text-muted">Smooth, efficient cuts with minimal vibration.</p>
                    </div>
                  </div>
                </div>
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
      <!-- Products sub-nav (replaces sidebar) -->
      <div class="col-12">
        <div class="products-sub-nav mb-4">
          <ul class="nav nav-pills gap-2 flex-nowrap overflow-auto justify-content-start" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#prod-paper" type="button" role="tab">Paper</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#prod-nonwoven" type="button" role="tab">Non-woven</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#prod-recycling" type="button" role="tab">Recycling &amp; Waste</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#prod-metal" type="button" role="tab">Steel &amp; Metal</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#prod-wood" type="button" role="tab">Wood Processing</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#prod-plastic" type="button" role="tab">Plastic &amp; Rubber</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#prod-semi" type="button" role="tab">Semiconductor</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#prod-cutting-accessories" type="button" role="tab">Cutting Accessories</button>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="tab-content">

          {{-- ========== INDUSTRIAL KNIVES: PAPER ========== --}}
          <div class="tab-pane fade show active" id="prod-paper">
            <h3>Premium Industrial Knives & Accessories</h3>
            <p>Supplying precision-engineered cutting tools for demanding paper, printing & converting applications.
              Our inventory is compatible with major systems (Polar, Wohlenberg, Horizon, etc.) and can be tailored to Malaysian industry specs.</p>

            {{-- e-commerce style cards --}}
            <div class="row g-3 mt-3">
              {{-- Top & Bottom Slitter Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/service/top_slitter_knife.jpg" alt="Top Slitter Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Top Slitter Knives</h6>
                    <p class="card-text small text-muted">High-accuracy paired slitters for clean slitting with minimal dust.</p>
                  </div>
                </div>
              </div>

              {{-- Top & Bottom Slitter Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/service/bottom_slitter.jpg" alt="Bottom Slitter Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Bottom Slitter Knives</h6>
                    <p class="card-text small text-muted">High-accuracy paired slitters for clean slitting with minimal dust.</p>
                  </div>
                </div>
              </div>

              {{-- Guillotine Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/service/guillotine_knife.jpg" alt="Guillotine Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Guillotine Knives</h6>
                    <p class="card-text small text-muted">Compatible with Polar, Wohlenberg, Horizon & more for clean stack cuts.</p>
                  </div>
                </div>
              </div>

              {{-- Guillotine Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/service/three_side_trimmer.jpg" alt="Three Sides Trimmer">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Three Sides Trimmer</h6>
                    <p class="card-text small text-muted">Compatible with Polar, Wohlenberg, Horizon & more for clean stack cuts.</p>
                  </div>
                </div>
              </div>

              {{-- Circular Multiblock Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/service/circular_multiblock.jpg" alt="Circular Multiblock Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Circular Multiblock</h6>
                    <p class="card-text small text-muted">Compatible with Polar, Wohlenberg, Horizon & more for clean stack cuts.</p>
                  </div>
                </div>
              </div>

              {{-- Circular Multiblock Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/service/saddle_stitch_knives.jpg" alt="Saddle Stitch Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Saddle Stitch Knives</h6>
                    <p class="card-text small text-muted">Compatible with Polar, Wohlenberg, Horizon & more for clean stack cuts.</p>
                  </div>
                </div>
              </div>

              {{-- Circular Multiblock Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/service/score_cutting_knives.jpg" alt="Score Cutting Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Score Cutting Knives</h6>
                    <p class="card-text small text-muted">Compatible with Polar, Wohlenberg, Horizon & more for clean stack cuts.</p>
                  </div>
                </div>
              </div>

              {{-- Sheeter Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/service/sheeter_knives.jpg" alt="Sheeter Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Sheeter Knives</h6>
                    <p class="card-text small text-muted">Precision cutting for sheet lines; stable edges and clean output.</p>
                  </div>
                </div>
              </div>

              {{-- Scraper / Doctor Blades --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top" src="assets/images/service/scraper_doctor_blade.jpg" alt="Scraper / Doctor Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Scraper / Doctor Blades</h6>
                    <p class="card-text small text-muted">Reliable metering and cleaning for paper finishing processes.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- ================= RECYCLING & WASTE ================= --}}
          <div class="tab-pane fade" id="prod-recycling">
            <h3>Recycling &amp; Waste Management</h3>
            <p class="text-muted">Heavy-duty blades for reduction, regrind and bale handling.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/knives/recycleandwaste/shredder-cutter-2.jpg" alt="Shredder Knive">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Shredder Knives</h6>
                    <p class="card-text small text-muted">High-torque material reduction.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/knives/recycleandwaste/granulator-blades.jpg" alt="Granulator Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Granulator Blades</h6>
                    <p class="card-text small text-muted">Clean regrind with minimal dust.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/chopper_blades.jpg" alt="Chopper Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Chopper Knives</h6>
                    <p class="card-text small text-muted">Strip &amp; scrap chopping operations.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/knives/recycleandwaste/bale-cutter.jpg" alt="Bale Cutter Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Bale Cutter Blades</h6>
                    <p class="card-text small text-muted">Bale cutting &amp; opening support.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/rotary_pelletizer_knives.jpg" alt="Rotary Palletizer Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Rotary Palletizer Knives</h6>
                    <p class="card-text small text-muted">Bale cutting &amp; opening support.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- ================= STEEL & METAL ================= --}}
          <div class="tab-pane fade" id="prod-metal">
            <h3>Steel &amp; Metal Processing</h3>
            <p class="text-muted">Precision slitting, shearing and coil/strip finishing.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/shear_blade.jpg" alt="Shear Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Shear Blades</h6>
                <p class="card-text small text-muted">Accurate shearing performance.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/steelandmetal/slitter-knives-1.jpg" alt="Slitter Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Slitter Blades</h6>
                <p class="card-text small text-muted">Durable, accurate slitting lines.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/bending_machine_blade.jpg" alt="Bending Machine Blade">
                <div class="card-body">
                <h6 class="card-title mb-1">Bending Machine Blade</h6>
                <p class="card-text small text-muted">Durable, accurate bending support.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/sheeter_knife.jpg" alt="Sheeter Knives">
                <div class="card-body">
                <h6 class="card-title mb-1">Sheeter Knives</h6>
                <p class="card-text small text-muted">Durable, accurate sheeter support.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/steelandmetal/trimmer-knives-1.jpg" alt="Trimmer Blades">
                <div class="card-body">
                  <h6 class="card-title mb-1">Trimmer &amp; Cropper Knives</h6>
                  <p class="card-text small text-muted">Strip &amp; coil finishing support.</p>
                </div></div>
              </div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/steelandmetal/scrap-chopper-knife.jpg" alt="Scrap Chopper Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Scrap Chopper Blades</h6>
                <p class="card-text small text-muted">Continuous scrap chopping.</p>
              </div></div></div>
            </div>
          </div>

          {{-- ================= WOOD PROCESSING ================= --}}
          <div class="tab-pane fade" id="prod-wood">
            <h3>Wood Processing</h3>
            <p class="text-muted">High-uptime blades for planing, chipping and veneer.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/planner_blade.jpg" alt="Planner and Jointer Knives">
                <div class="card-body">
                <h6 class="card-title mb-1">Planer Blades</h6>
                <p class="card-text small text-muted">Consistent finish &amp; flatness.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/jointer_blade.jpg" alt="Jointer Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Jointer Blades</h6>
                <p class="card-text small text-muted">Reliable wood reduction.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/chipper_blade.jpg" alt="Chipper Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Chipper Blades</h6>
                <p class="card-text small text-muted">Reliable wood reduction.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/woodprocessing/flaker-knife.jpg" alt="Flaker Knives">
                <div class="card-body">
                <h6 class="card-title mb-1">Flaker Knives</h6>
                <p class="card-text small text-muted">Uniform flake production.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/woodprocessing/veneer-blades-2.jpg" alt="Veneer Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Veneer Blades</h6>
                <p class="card-text small text-muted">Clean peeling and slicing.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/woodprocessing/saw-blade-1.jpg" alt="Saw Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Saw Blades</h6>
                <p class="card-text small text-muted">Smooth, efficient cuts with minimal vibration.</p>
              </div></div></div>
            </div>
          </div>

          {{-- ================= PLASTIC & RUBBER ================= --}}
          <div class="tab-pane fade" id="prod-plastic">
            <h3>Plastic &amp; Rubber</h3>
            <p class="text-muted">Blades for granulating, slitting, cutting and converting.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/perforation_blade.jpg" alt="Perforation Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Perforation Blades</h6>
                    <p class="card-text small text-muted">Clean granulation &amp; pelletizing.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/foil_cutter.jpg" alt="Foil Cutter (Zig-zag) Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Foil Cutter (Zig-zag) Knives</h6>
                    <p class="card-text small text-muted">Clean granulation &amp; pelletizing.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/knives/plasticandrubber/granulator-crusher-stator-blades.jpg" alt="Granalator Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Granulator Knives</h6>
                    <p class="card-text small text-muted">Clean granulation &amp; pelletizing.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/steelandmetal/slitter-knives-1.jpg" alt="Slitter Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Slitter Blades</h6>
                <p class="card-text small text-muted">Durable, accurate slitting lines.</p>
              </div></div></div>
               <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/planner_blade.jpg" alt="Planer Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Planer Blades</h6>
                <p class="card-text small text-muted">Durable, accurate planing lines.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/plasticandrubber/guillotine-knives-1.jpg" alt="Guillotine Knives">
                <div class="card-body">
                <h6 class="card-title mb-1">Guillotine Knives</h6>
                <p class="card-text small text-muted">Trim, cross-cut &amp; converting.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/rotary_pelletizer_knives.jpg" alt="Rottary Cutter Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Rotary Pelletizer Blades</h6>
                <p class="card-text small text-muted">Rotary converting support.</p>
              </div></div></div>
            </div>
          </div>

          {{-- ================= SEMICONDUCTOR ================= --}}
          <div class="tab-pane fade" id="prod-semi">
            <h3>Semiconductor</h3>
            <p class="text-muted">Precision blades for wafer and film processes.</p>

            {{-- <div class="row g-3 mt-3">
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
            </div> --}}
            <div class="row g-3 mt-3">
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/service/carbide_top_slitter.jpg" alt="lithium-ion-slitter-top">
                    <div class="card-body">
                      {{-- <h6 class="card-title mb-1">Film Slitter Blades</h6> --}}
                      <h6 class="card-title mb-1">Carbide Top Slitter</h6>
                      <p class="card-text small text-muted">Stable support and clean cuts.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/service/carbide_bottom_slitter.jpg" alt="lithium-ion-slitter-top">
                    <div class="card-body">
                      {{-- <h6 class="card-title mb-1">Wafer Dicing Blades</h6> --}}
                      <h6 class="card-title mb-1">Carbide Bottom Slitter</h6>
                      <p class="card-text small text-muted">Clean and consistent cutting.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="card h-100">
                    <img class="card-img-top fix-height" src="assets/images/service/carbide_flat_blade.jpg" alt="lithium-ion-flat-blade">
                    <div class="card-body">
                      {{-- <h6 class="card-title mb-1">Wafer Dicing Blades</h6> --}}
                      <h6 class="card-title mb-1">Carbide Flat Blade</h6>
                      <p class="card-text small text-muted">Clean and consistent cutting.</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          {{-- ========== ACCESSORY: CUTTING ACCESSORIES ========== --}}
          <div class="tab-pane fade" id="prod-cutting-accessories">
            <h3>Cutting Accessories</h3>
            <p>
              Safety is our priority. Goldken Sdn Bhd promotes proper handling of industrial knives
              and offers a free scrap blade collection and compliant disposal service to ensure worn
              or damaged knives are removed safely and responsibly.
            </p>
            <div class="row align-items-stretch mb-5" id="safety-intro">
              <div class="col d-flex">
                  <img class="card-img-top w-100" 
                      src="assets/images/knives/cuttingaccessories/cutting-stick-self-healing.png" 
                      alt="Cutting Sticks"
                      style="object-fit: cover;">
              </div>
              <div class="col d-flex">
                  <p class="card-text small text-muted d-flex align-items-center justify-content-center text-center w-100">
                      To support your workplace safety initiatives, we offer a free-of-charge scrap knife collection and disposal service, ensuring that worn or damaged blades are removed responsibly and in full compliance with health and safety regulations.
                  </p>
              </div>
            </div>


            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/cutting_stick.jpg" alt="Cutting Sticks">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Cutting Sticks</h6>
                    <p class="card-text small text-muted">Consistent performance and longer service life for clean cuts.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/knife_guard.jpg" alt="Knife Guards">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Knife Guards with End Screw</h6>
                    <p class="card-text small text-muted">Edge protection & safe handling during transport and storage.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets\images\service\magnetic_clamp_pad.jpg" alt="Magnetic Strips">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Magnetic Clamp Pad</h6>
                    <p class="card-text small text-muted">Practical accessory for fixture alignment and machine setup.</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

           {{-- ========== ACCESSORY: CUTTING ACCESSORIES ========== --}}
          <div class="tab-pane fade" id="prod-nonwoven">
            <h3>Non-woven</h3>
            <p>
              Safety is our priority. Goldken Sdn Bhd promotes proper handling of industrial knives
              and offers a free scrap blade collection and compliant disposal service to ensure worn
              or damaged knives are removed safely and responsibly.
            </p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/top_slitter_knife.jpg" alt="Top Slitter">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Top Slitter</h6>
                    <p class="card-text small text-muted">Consistent performance and longer service life for clean cuts.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/bottom_slitter.jpg" alt="Bottom Slitter">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Bottom Slitter</h6>
                    <p class="card-text small text-muted">Edge protection & safe handling during transport and storage.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/sheeter_knives.jpg" alt="Sheeter Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Sheeter Knives</h6>
                    <p class="card-text small text-muted">Practical accessory for fixture alignment and machine setup.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/shear_blade.jpg" alt="Shear Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Shear Knives</h6>
                    <p class="card-text small text-muted">Practical accessory for fixture alignment and machine setup.</p>
                  </div>
                </div>
              </div>
               <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/circular_multiblock.jpg" alt="Circular Multiblock">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Circular Multiblock</h6>
                    <p class="card-text small text-muted">Practical accessory for fixture alignment and machine setup.</p>
                  </div>
                </div>
              </div>
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
  // Persist top-level tab in URL (?tab=services|products|pre-order)
  const navButtons = document.querySelectorAll('#catalog-tabs [data-bs-toggle="pill"]');

  navButtons.forEach(btn => {
    btn.addEventListener('shown.bs.tab', function (e) {
      const id = e.target.id.replace('tab-', ''); // e.g. 'services'
      const url = new URL(window.location);
      url.searchParams.set('tab', id);
      // clear any sub selection when switching top-level
      url.searchParams.delete('sub');
      history.replaceState(null, '', url.toString());
    });
  });

  // When a sub-tab (services or products) is requested, ensure the parent main tab is active first
  const subButtons = document.querySelectorAll('.services-sub-nav [data-bs-toggle="tab"], .products-sub-nav [data-bs-toggle="tab"]');
  subButtons.forEach(btn => {
    btn.addEventListener('show.bs.tab', function (e) {
      const target = ((btn.getAttribute('data-bs-target') || btn.getAttribute('href') || '') + '').replace('#','');
      if (!target) return;

      const isProduct = !!btn.closest('.products-sub-nav');

      // Ensure parent top-level tab is active; if not, delay sub-tab until parent is shown
      const parentBtn = document.getElementById(isProduct ? 'tab-products' : 'tab-services');
      if (parentBtn && !parentBtn.classList.contains('active')) {
        // cancel the current sub show, activate parent first, then show sub
        e.preventDefault();
        const p = new bootstrap.Tab(parentBtn);
        // show parent, then show sub once parent is visible
        const onParentShown = function () {
          const s = new bootstrap.Tab(btn);
          s.show();
          parentBtn.removeEventListener('shown.bs.tab', onParentShown);

          // persist both tab and sub in URL
          const url = new URL(window.location);
          url.searchParams.set('tab', isProduct ? 'products' : 'services');
          url.searchParams.set('sub', target);
          history.replaceState(null, '', url.toString());
        };
        parentBtn.addEventListener('shown.bs.tab', onParentShown);
        p.show();
        return;
      }

      // Parent already active - allow show, and persist URL
      const url = new URL(window.location);
      url.searchParams.set('tab', isProduct ? 'products' : 'services');
      url.searchParams.set('sub', target);
      history.replaceState(null, '', url.toString());
    });
  });

  // On initial load, honor ?tab= and optional ?sub=
  const params = new URLSearchParams(window.location.search);
  const initial = params.get('tab'); // 'services' | 'products' | 'pre-order'
  const initialSub = params.get('sub');

  if (initial) {
    const btn = document.getElementById('tab-' + initial);
    if (btn) {
      const t = new bootstrap.Tab(btn);
      t.show();
    }
  }

  if (initialSub) {
    // find matching sub button by data-bs-target or href
    const subBtn = document.querySelector(`[data-bs-target="#${initialSub}"], a[href="#${initialSub}"]`);
    if (subBtn) {
      // ensure parent tab is visible first, then show sub tab
      setTimeout(() => {
        const s = new bootstrap.Tab(subBtn);
        s.show();
      }, 50);
    }
  }

  // Keep UI classes in sync for sidebar / sub-navs
  document.addEventListener('shown.bs.tab', function (e) {
    const target = e.target.getAttribute('data-bs-target') || e.target.getAttribute('href');
    if (!target) return;

    // Update left sidebar links (if any)
    document.querySelectorAll('.single-services-list .nav a.nav-link').forEach(a => {
      if (a.getAttribute('href') === target) {
        a.classList.add('active');
      } else {
        a.classList.remove('active');
      }
    });

    // Update services and products sub-nav buttons
    document.querySelectorAll('.services-sub-nav .nav-link, .products-sub-nav .nav-link').forEach(btn => {
      const t = (btn.getAttribute('data-bs-target') || btn.getAttribute('href') || '');
      if (t === target) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });
  });
});
</script>
