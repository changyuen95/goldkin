@extends('layouts.master')

@section('title', 'Goldken Sdn Bhd - Services & Products')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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
        <button class="nav-link active fw-bold" id="tab-services" data-bs-toggle="pill"
                data-bs-target="#pane-services" type="button" role="tab">
          Services
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link fw-bold" id="tab-products" data-bs-toggle="pill"
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
            <button class="nav-link active fw-bold" data-bs-toggle="tab" data-bs-target="#svc-regrinding" type="button" role="tab">Industrial Knife Regrinding</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#svc-support" type="button" role="tab">Technical Support</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#svc-qc" type="button" role="tab">Quality Control & Reporting (Value-added Services)</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#svc-scrap" type="button" role="tab">Scrap Knife Collection</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#svc-safety" type="button" role="tab">Safety & Handling</button>
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
              <!-- Font Awesome CDN -->

              <!-- ========================= -->
              <!-- Technical Support Section -->
              <!-- ========================= -->
              <section class="service-section bg-light">
                <div class="container">
                  <h3 class="service-title fw-bold">Technical Support</h3>
                  <p class="service-subtitle"><em>Expertise that goes beyond sharpening</em></p>
                  <div class="divider-line"></div>
                  <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="service-card text-center">
                        <i class="fa-solid fa-gears service-icon"></i>
                        <h6 class="fw-bold">Application Consultation</h6>
                        <p>Material selection, finish recommendations, and machine compatibility guidance.</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                      <div class="service-card text-center">
                        <i class="fa-solid fa-chart-line service-icon"></i>
                        <h6 class="fw-bold">Tool Life Optimization</h6>
                        <p>Wear analysis and regrinding strategies to extend blade lifespan.</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                      <div class="service-card text-center">
                        <i class="fa-solid fa-magnifying-glass service-icon"></i>
                        <h6 class="fw-bold">Troubleshooting</h6>
                        <p>Fast diagnosis of chipping, burrs, uneven cuts, and dullness.</p>
                      </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                      <div class="service-card text-center">
                        <i class="fa-solid fa-industry service-icon"></i>
                        <h6 class="fw-bold">Production Efficiency</h6>
                        <p>Optimizing machine interaction to reduce waste and downtime.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>


              <!-- ================================ -->
              <!-- Quality Control & Reporting -->
              <!-- ================================ -->
              <div class="tab-pane fade" id="svc-qc">
                <section class="service-section">
                  <div class="container">

                    <h3 class="service-title fw-bold">Quality Control & Reporting (Value-added Services)</h3>
                    <p class="service-subtitle"><em>Precision you can see. Confidence you can measure.</em></p>
                    <div class="divider-line"></div>

                    <div class="service-highlight">
                      <div class="row text-center g-4">

                        <div class="col-md-4">
                          <i class="fa-solid fa-box-open service-icon"></i>
                          <h6 class="fw-bold">Incoming Inspection</h6>
                          <p>Condition checks, wear evaluation, and defect detection before grinding.</p>
                        </div>

                        <div class="col-md-4">
                          <i class="fa-solid fa-sliders service-icon"></i>
                          <h6 class="fw-bold">In-Process Monitoring</h6>
                          <p>Angle consistency checks and calibrated grinding precision.</p>
                        </div>

                        <div class="col-md-4">
                          <i class="fa-solid fa-circle-check service-icon"></i>
                          <h6 class="fw-bold">Final Verification</h6>
                          <p>Geometry validation, sharpness measurement, and finish confirmation.</p>
                        </div>

                      </div>
                    </div>

                    <p class="text-center fw-semibold mt-5">
                      Because performance isn’t assumed — it’s verified.
                    </p>

                  </div>
                </section>
              </div>

            {{-- ========== CORE: Scrap Knife Collection ========== --}}
            <div class="tab-pane fade" id="svc-scrap">
              <div class="scrap-collection-section">
                <h3 class="fw-bold">
                  <i class="fa-solid fa-recycle me-2 text-primary"></i>
                  Scrap Knife Collection
                </h3>

                <p class="text-muted">
                  <em>Responsible collection, safe handling, and sustainable disposal.</em>
                </p>

                <p>
                  Goldken provides a professional <strong>scrap knife collection service</strong> to help you
                  remove end-of-life blades safely and efficiently from your facility. 
                  We consolidate scrap knives, manage secure handling and transport, and ensure 
                  materials are routed to <strong>approved recycling or disposal facilities</strong> 
                  in full compliance with local environmental and safety regulations.
                </p>

                <p>
                  Our structured process minimizes risk, supports workplace safety initiatives, 
                  and contributes to your company’s <strong>ESG and sustainability goals</strong>.
                </p>

                <h5 class="fw-bold mt-4">Service Highlights</h5>

                <ul class="mb-4">
                  <li>
                    <strong>Flexible Collection Scheduling:</strong> 
                    Scheduled pickups or ad-hoc collections based on your operational needs.
                  </li>
                  <li>
                    <strong>Full Documentation & Tracking:</strong> 
                    Supporting audit requirements and environmental reporting.
                  </li>
                  <li>
                    <strong>Safe Packaging & Transport:</strong> 
                    Preventing injury, contamination, and handling risks.
                  </li>
                  <li>
                    <strong>Certified Recycling Partnerships:</strong> 
                    Maximising material recovery through approved recyclers.
                  </li>
                </ul>

                <div class="mt-4">
                  <a href="{{ url('/contact') }}" class="btn-1">
                    <i class="fa-solid fa-truck-fast me-2"></i>
                    Arrange Collection
                  </a>
                </div>
              </div>
            </div>

            {{-- ========== CORE: Safety & Handling ========== --}}
            <div class="tab-pane fade" id="svc-safety">
              <!-- ======================= -->
              <!-- Safe Disposal & Handling Support -->
              <!-- ======================= -->

              <section class="safety-section text-center">
                <div class="container">
                  
                  <h3 class="fw-bold section-title">
                    Safe Disposal & Handling Support
                  </h3>
                  <div class="section-divider"></div>

                  <div class="row">

                    <div class="col-md-4">
                      <div class="icon-box shadow-sm">
                        <i class="fa-solid fa-recycle fa-2x"></i>
                        <h5 class="fw-bold mt-3">Free Scrap Collection</h5>
                        <p>
                          Responsible collection and disposal of worn or damaged blades in full 
                          <strong>health & safety compliance</strong>.
                        </p>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="icon-box shadow-sm">
                        <i class="fa-solid fa-gear fa-2x"></i>
                        <h5 class="fw-bold mt-3">Safety Monitoring</h5>
                        <p>
                          Regular inspection of <strong>knife guards</strong> and replacement parts 
                          upon request.
                        </p>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="icon-box shadow-sm">
                        <i class="fa-solid fa-shield-halved fa-2x"></i>
                        <h5 class="fw-bold mt-3">Complete Protection</h5>
                        <p>
                          From delivery to disposal, ensuring total 
                          <strong>operational safety and peace of mind</strong>.
                        </p>
                      </div>
                    </div>

                  </div>
                </div>
              </section>
              <!-- ======================= -->
              <!-- Health & Safety Accessories -->
              <!-- ======================= -->
              <section class="safety-section text-center bg-light">
                <div class="container">

                  <h3 class="fw-bold section-title">
                    Health & Safety Accessories
                  </h3>
                  <div class="section-divider"></div>

                  <div class="row">

                    <div class="col-md-6">
                      <div class="icon-box shadow-sm">
                        <i class="fa-solid fa-shield fa-2x"></i>
                        <h5 class="fw-bold mt-3">Knife Guards</h5>
                        <p>
                          Protect blade edges, extend lifespan, and enhance handling safety 
                          with durable OEM-quality guards.
                        </p>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="icon-box shadow-sm">
                        <i class="fa-solid fa-magnet fa-2x"></i>
                        <h5 class="fw-bold mt-3">Magnetic Strips</h5>
                        <p>
                          Secure, space-saving storage that provides quick access while 
                          keeping work areas safe and organized.
                        </p>
                      </div>
                    </div>

                  </div>

                  <p class="fw-bold mt-5">
                    Protect your investment. Protect your people.
                  </p>

                </div>
              </section>
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
              <button class="nav-link active fw-bold" data-bs-toggle="tab" data-bs-target="#prod-paper" type="button" role="tab">Paper & Printing</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#prod-nonwoven" type="button" role="tab">Non-woven</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#prod-recycling" type="button" role="tab">Recycling &amp; Waste</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#prod-metal" type="button" role="tab">Steel &amp; Metal</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#prod-wood" type="button" role="tab">Wood Processing</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#prod-plastic" type="button" role="tab">Plastic &amp; Rubber</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#prod-semi" type="button" role="tab">Semiconductor</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-bold" data-bs-toggle="tab" data-bs-target="#prod-cutting-accessories" type="button" role="tab">Cutting Accessories</button>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="tab-content">

          {{-- ========== INDUSTRIAL KNIVES: PAPER ========== --}}
          <div class="tab-pane fade show active" id="prod-paper">
            <h3>Paper & Printing Industry Blades</h3>
            <p>Supplying precision-engineered cutting tools for demanding paper, printing & converting applications.
              Our inventory is compatible with major systems (Polar, Wohlenberg, Horizon, etc.) and can be tailored to Malaysian industry specs.</p>

            {{-- e-commerce style cards --}}
            <div class="row g-3 mt-3">
              {{-- Top & Bottom Slitter Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/top_slitter_knife.jpg" alt="Top Slitter Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Top Slitter Knives</h6>
                    <p class="card-text small text-muted">Precision circular blades designed for clean and accurate slitting of paper, film, and foil.</p>
                  </div>
                </div>
              </div>

              {{-- Top & Bottom Slitter Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/bottom_slitter.jpg" alt="Bottom Slitter Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Bottom Slitter Knives</h6>
                    <p class="card-text small text-muted">Durable circular blades designed to work with top knives for precise and consistent slitting performance.</p>
                  </div>
                </div>
              </div>

              {{-- Guillotine Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/guillotine_knife.jpg" alt="Guillotine Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Guillotine Knives</h6>
                    <p class="card-text small text-muted">Heavy-duty straight blades designed for powerful, precise cutting of paper, board, plastic, and industrial materials.</p>
                  </div>
                </div>
              </div>

              {{-- Guillotine Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/three_side_trimmer.jpg" alt="Three Sides Trimmer">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Three Sides Trimmer</h6>
                    <p class="card-text small text-muted">Precision cutting knives designed for clean and accurate trimming on three sides in bookbinding and print finishing applications.</p>
                  </div>
                </div>
              </div>

              {{-- Circular Multiblock Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/circular_multiblock.jpg" alt="Circular Multiblock Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Circular Multiblock</h6>
                    <p class="card-text small text-muted">High-performance circular tooling system designed for efficient, multi-knife slitting in demanding industrial applications.</p>
                  </div>
                </div>
              </div>

              {{-- Circular Multiblock Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/saddle_stitch_binding.jpg" alt="Saddle Stitch Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Saddle Stitch Knives</h6>
                    <p class="card-text small text-muted">Specialized trimming knives designed for precise edge finishing in saddle stitch bookbinding operations.</p>
                  </div>
                </div>
              </div>

              {{-- Circular Multiblock Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/score_cutting_knives.jpg" alt="Score Cutting Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Score Cutting Knives</h6>
                    <p class="card-text small text-muted">Precision blades designed to create controlled score lines for accurate folding and material separation.</p>
                  </div>
                </div>
              </div>

              {{-- Sheeter Knives --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/sheeter_knives.jpg" alt="Sheeter Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Sheeter Knives</h6>
                    <p class="card-text small text-muted">High-precision straight blades designed for accurate cross-cutting of paper, board, and sheet materials.</p>
                  </div>
                </div>
              </div>

              {{-- Scraper / Doctor Blades --}}
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/scapper_doctor_blades.png" alt="Scraper / Doctor Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Scraper / Doctor Blades</h6>
                    <p class="card-text small text-muted">Thin, precision-engineered blades designed to control, spread, and remove excess material in printing and coating applications.</p>
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
                    <p class="card-text small text-muted">Heavy-duty cutting blades designed for efficient size reduction and shredding of industrial waste and materials.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/knives/recycleandwaste/granulator-blades.jpg" alt="Granulator Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Granulator Blades</h6>
                    <p class="card-text small text-muted">Durable precision blades designed for efficient granulating and size reduction of plastic and industrial materials.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/chopper_blades.jpg" alt="Chopper Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Chopper Knives</h6>
                    <p class="card-text small text-muted">Robust cutting blades designed for fast and consistent chopping of industrial materials in high-volume applications.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/knives/recycleandwaste/bale-cutter.jpg" alt="Bale Cutter Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Bale Cutter Blades</h6>
                    <p class="card-text small text-muted">Heavy-duty blades designed for safe and efficient cutting of compressed bales in recycling and material processing operations.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/rotary_pelletizer_knives.jpg" alt="Rotary Palletizer Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Rotary Palletizer Knives</h6>
                    <p class="card-text small text-muted">Precision rotary blades designed for accurate cutting and sizing in palletizing and material handling systems.</p>
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
                <p class="card-text small text-muted">High-strength industrial blades designed for precise and powerful shearing of metal and heavy-duty materials.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/slitter.jpeg" alt="Slitter Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Slitter Blades</h6>
                <p class="card-text small text-muted">Precision-engineered blades designed for clean and consistent slitting across a wide range of industrial materials.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/bending_machine_blade.jpg" alt="Bending Machine Blade">
                <div class="card-body">
                <h6 class="card-title mb-1">Bending Machine Blade</h6>
                <p class="card-text small text-muted">High-precision tooling blade designed for accurate and consistent metal bending in press brake applications.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/sheeter_knife.jpg" alt="Sheeter Knives">
                <div class="card-body">
                <h6 class="card-title mb-1">Sheeter Knives</h6>
                <p class="card-text small text-muted">High-precision straight blades designed for accurate cross-cutting of paper, board, and sheet materials.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/steelandmetal/scrap-chopper-knife.jpg" alt="Scrap Chopper Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Scrap Chopper Blades</h6>
                <p class="card-text small text-muted">Heavy-duty blades designed for efficient chopping and size reduction of scrap materials in industrial processes.</p>
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
                <p class="card-text small text-muted">Precision-ground blades designed for smooth and accurate surface planing in woodworking and industrial applications.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/jointer_blade.jpg" alt="Jointer Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Jointer Blades</h6>
                <p class="card-text small text-muted">High-precision blades designed to create straight, smooth edges for accurate jointing in woodworking applications.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/chipper_blade.jpg" alt="Chipper Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Chipper Blades</h6>
                <p class="card-text small text-muted">Heavy-duty cutting blades designed for efficient chipping and size reduction of wood and industrial materials.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/woodprocessing/flaker-knife.jpg" alt="Flaker Knives">
                <div class="card-body">
                <h6 class="card-title mb-1">Flaker Knives</h6>
                <p class="card-text small text-muted">Durable industrial knives designed for consistent flaking and size reduction in wood and biomass processing applications.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/woodprocessing/veneer-blades-2.jpg" alt="Veneer Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Veneer Blades</h6>
                <p class="card-text small text-muted">Precision-engineered blades designed for smooth and accurate slicing of veneer sheets in woodworking applications.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/woodprocessing/saw-blade-1.jpg" alt="Saw Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Saw Blades</h6>
                <p class="card-text small text-muted">High-performance cutting blades designed for precise and efficient sawing across wood, metal, and industrial materials.</p>
              </div></div></div>
            </div>
          </div>

          {{-- ================= PLASTIC & RUBBER ================= --}}
          <div class="tab-pane fade" id="prod-plastic">
            <h3>Plastic &amp; Rubber</h3>
            <p class="text-muted">Blades for granulating, slitting, guillotine cutting and converting.</p>

            <div class="row g-3 mt-3">
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/perforation_blade.jpg" alt="Perforation Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Perforation Blades</h6>
                    <p class="card-text small text-muted">Precision blades designed to create clean and consistent perforation lines for easy tearing and separation.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/foil_cutter.jpg" alt="Foil Cutter (Zig-zag) Knives">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Foil Cutter (Zig-zag) Knives</h6>
                    <p class="card-text small text-muted">Specialized zig-zag blades designed for clean and consistent cutting of foil and wrapping materials.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/knives/plasticandrubber/granulator-crusher-stator-blades.jpg" alt="Granalator Blades">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Granulator Knives</h6>
                    <p class="card-text small text-muted">Durable precision knives designed for efficient granulation and size reduction of plastic and industrial materials.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/steelandmetal/slitter-knives-1.jpg" alt="Slitter Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Slitter Blades</h6>
                <p class="card-text small text-muted">Precision-engineered blades designed for clean and consistent slitting across a wide range of industrial materials.</p>
              </div></div></div>
               <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/planner_blade.jpg" alt="Planer Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Planer Blades</h6>
                <p class="card-text small text-muted">Precision-ground blades designed for smooth and accurate surface planing in woodworking and industrial applications.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/knives/plasticandrubber/guillotine-knives-1.jpg" alt="Guillotine Knives">
                <div class="card-body">
                <h6 class="card-title mb-1">Guillotine Knives</h6>
                <p class="card-text small text-muted">Heavy-duty straight blades designed for powerful, precise cutting of paper, board, plastic, and industrial materials.</p>
              </div></div></div>
              <div class="col-md-6 col-lg-4"><div class="card h-100">
                <img class="card-img-top fix-height" src="assets/images/service/rotary_pelletizer_knives.jpg" alt="Rottary Cutter Blades">
                <div class="card-body">
                <h6 class="card-title mb-1">Rotary Pelletizer Blades</h6>
                <p class="card-text small text-muted">High-precision rotary blades designed for consistent and efficient pelletizing in plastic processing applications.</p>
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
                    <p class="card-text small text-muted">High-performance carbide blades designed for ultra-precise and long-lasting slitting in demanding industrial applications.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/carbide_bottom_slitter.jpg" alt="lithium-ion-slitter-top">
                  <div class="card-body">
                    {{-- <h6 class="card-title mb-1">Wafer Dicing Blades</h6> --}}
                    <h6 class="card-title mb-1">Carbide Bottom Slitter</h6>
                    <p class="card-text small text-muted">Durable carbide blades designed to deliver precise, long-lasting bottom slitting performance in high-speed industrial operations.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/carbide_flat_blade.jpg" alt="lithium-ion-flat-blade">
                  <div class="card-body">
                    {{-- <h6 class="card-title mb-1">Wafer Dicing Blades</h6> --}}
                    <h6 class="card-title mb-1">Carbide Flat Blade</h6>
                    <p class="card-text small text-muted">High-strength carbide flat blades designed for precision cutting and extended wear life in demanding applications.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- ========== ACCESSORY: CUTTING ACCESSORIES ========== --}}
          <div class="tab-pane fade" id="prod-cutting-accessories">
            <h3>Cutting Accessories</h3>

            <!-- High-Performance Cutting Sticks Section -->
            <div class="row align-items-center mb-5">
              <div class="col-lg-6">
                <img class="img-fluid rounded shadow-sm" 
                     src="assets/images/service/self_healing.png" 
                     alt="Self-Healing Polymer Structure"
                     style="max-height: 300px; object-fit: contain;">
              </div>
              <div class="col-lg-6 ps-lg-4">
                <h4 class="fw-bold">High-Performance Cutting Sticks</h4>
                <p class="text-muted">Engineered for durability, precision, and extended blade life.</p>
                
                <h6 class="fw-bold mt-4">Self-Healing Surface Technology</h6>
                <p>Our cutting sticks are manufactured with high-density engineered polymers designed to:</p>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="fas fa-check text-success me-2"></i><strong>Absorb blade impact</strong></li>
                  <li class="mb-2"><i class="fas fa-check text-success me-2"></i><strong>Minimize edge wear</strong></li>
                  <li class="mb-2"><i class="fas fa-check text-success me-2"></i><strong>Reduce micro-chipping</strong></li>
                  <li class="mb-2"><i class="fas fa-check text-success me-2"></i><strong>Extend blade life</strong></li>
                  <li class="mb-2"><i class="fas fa-check text-success me-2"></i><strong>Maintain consistent cutting depth</strong></li>
                </ul>
                <p class="text-muted small mt-3">This makes them ideal for high-precision industrial cutting applications.</p>
              </div>
            </div>

            <!-- Knife Handling & Machine Accessories Section -->
            <h4 class="fw-bold mb-4 mt-5">Knife Handling & Machine Accessories</h4>
            
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
                    <p class="card-text small text-muted">Precision circular blade designed for clean and accurate slitting of paper, film, and foil.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                  <img class="card-img-top fix-height" src="assets/images/service/bottom_slitter.jpg" alt="Bottom Slitter">
                  <div class="card-body">
                    <h6 class="card-title mb-1">Bottom Slitter</h6>
                    <p class="card-text small text-muted">Durable circular blade designed to work with top slitters for precise and consistent cutting performance.</p>
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
      const id = e.target.id.replace('tab-', ''); // e.g. 'services' or 'products'
      const url = new URL(window.location);
      url.searchParams.set('tab', id);

      // Always set a sensible default sub-selection for each top-level tab
      if (id === 'services') {
        url.searchParams.set('sub', 'svc-regrinding');
        // ensure sub tab is visible after the parent finishes activating (avoid race)
        const defaultSubBtn = document.querySelector('[data-bs-target="#svc-regrinding"]');
        if (defaultSubBtn) {
          const s = new bootstrap.Tab(defaultSubBtn);
          setTimeout(() => s.show(), 50);
        }
      } else if (id === 'products') {
        url.searchParams.set('sub', 'prod-paper');
        // delay activation slightly to ensure the products pane and its sub-nav are ready
        const defaultSubBtn = document.querySelector('[data-bs-target="#prod-paper"]');
        if (defaultSubBtn) {
          const s = new bootstrap.Tab(defaultSubBtn);
          setTimeout(() => s.show(), 50);
        }
      } else {
        // for other top-level tabs, clear sub selection
        url.searchParams.delete('sub');
      }

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
