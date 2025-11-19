@extends('layouts.master')

@section('title', 'Goldken Sdn Bhd - About Us')

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
      {{-- Founded in 1993 (later rebranded as <strong>Goldken Sdn Bhd</strong>), we’ve supported Malaysian manufacturers
      with precision cutting solutions for <strong>32+ years</strong>. With advanced global machinery and skilled technicians,
      we deliver cleaner cuts, reduced waste, and longer tool life across multiple industries. --}}

      <strong>Goldken Sdn Bhd</strong>, established in 1993, is a trusted specialist in industrial knives, precision grinding, 
      and cutting accessories. With over <strong>32 years</strong> of expertise, we deliver high-performance tools, 
      safety solutions, and technical support to help customers achieve the best results.
    </p>
  </div>

  <!-- What we do -->
  <h5 class="mt-3">What We Do</h5>
  {{-- <ul class="mb-3">
    <li><strong>Industrial knife regrinding</strong> to OEM-level sharpness</li>
    <li><strong>Supply of industrial knives & accessories</strong></li>
    <li><strong>Technical support</strong> for applications, troubleshooting & efficiency</li>
  </ul> --}}
  <ul class="mb-3">
    <li><strong>Industrial knife regrinding</strong> to OEM-level sharpness</li>
    <li>Produce <strong>Standard, Super, and Mirror-Finish blades</strong> to exact specifications</li>
    <li>Maintain a robust inventory of <strong>replacement knives</strong> and <strong>accessories</strong></li>
    <li>Provide <strong>safety solutions</strong> including blade handling and disposal</li>
    <li><strong>Technical consultation & support</strong> for tool optimization and efficiency</li>
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
    {{-- <li>Optional <strong>inspection reports</strong> (before/after condition, tolerance checks, measured specs vs. OEM/customer)</li>
    <li>Full <strong>traceability & documentation</strong> to support regulated industries</li>
    <li><strong>Safety & handling</strong> with free scrap knife disposal service</li> --}}
    <li>Transparent quality control protocols</li>
    <li>Detailed inspection reports</li>
    <li>Responsive technical support</li>
    <li>Honest turnaround times and clear communication</li>
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
      <div class="col-lg-12">
        <h3 class="fw-bold text-center mb-5">Industry Expertise & Solutions</h3>

      </div>
      <div class="col-lg-6">
        <div class="timeline-img">  
          {{-- <img src="https://itbrief.com.au/uploads/story/2023/03/21/GettyImages-1408596915.webp" class="img-fluid rounded shadow" alt="Technology & Craftsmanship"> --}}
          <img src="https://pcsman.com/wp-content/uploads/2016/05/3_Plate_Blanket_a-e1465418753969.jpg" style="height: 350px" class="img-fluid rounded shadow" alt="Paper & Printing Industry Solutions">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="timeline-content ps-lg-4">
          {{-- <h3 class="fw-bold">Technology & Craftsmanship</h3> --}}
          <h3 class="fw-bold">Paper & Printing Industry Solutions</h3>
          <p>
            {{-- We invest in advanced global machinery and skilled technicians to deliver stable accuracy,
            repeatability, and premium finishes that keep your production efficient. --}}
            Goldken Sdn Bhd began its journey in the paper and printing industry, one of our core sectors. 
            This industry faces challenges such as frayed edges, machine vibration, and costly downtime from 
            dull or misaligned knives.
          </p>
          <h4 class="fw-bold">Our Expertise</h4>
          <ul class="list-unstyled mb-0">
            {{-- <li>Advanced grinding capability up to <strong>4.5m</strong> length</li>
            <li>Circular grinding up to <strong>400mm OD</strong></li>
            <li>Surface finishes: <strong>Standard</strong>, <strong>Super</strong>, <strong>Mirror</strong></li> --}}
            <li>Precision regrinding to restore optimal blade geometry</li>
            <li>Maintaining exact bevel angles and edge sharpness</li>
            <li>Ensuring straightness and flatness for uniform pressure</li>
            <li>Extending knife lifespan and reducing wear on supporting components</li>
            <li>Delivering smoother cuts, less paper dust, and longer intervals between sharpening cycles</li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Block 2 — Commitment to Quality & Service --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-lg-2">
        <div class="timeline-img">
          {{-- <img src="{{ asset('assets/images/photo/20200714_163704.jpg') }}" class="img-fluid rounded shadow" alt="Commitment to Quality & Service"> --}}
          <img src="https://www.tkmgroup.com/hubfs/%5Bv20%5D/Main%20Header%20Fotos/Non-Woven-Slider_webp.webp" class="img-fluid rounded shadow" alt="Commitment to Quality & Service">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="timeline-content pe-lg-4 text-lg-end">
          {{-- <h3 class="fw-bold">Commitment to Quality &amp; Service</h3> --}}
          <h3 class="fw-bold">Non-Woven Industry Solutions</h3>
          <p>
            {{-- Our quality system covers incoming inspection, in-process monitoring, and final inspection.
            Optional reports are available for full traceability—ideal for regulated industries. --}}
            Cutting non-woven fabrics presents unique challenges such as fiber fraying, material distortion, static buildup, and knife wear. 
            <strong>Goldken Sdn Bhd</strong> ensures clean, precise cuts and consistent production quality.
          </p>
          <h4 class="fw-bold">Our Expertise</h4>
          <ul class="list-unstyled mb-0">
            {{-- <li>Before/after condition photos &amp; notes</li>
            <li>Tolerance checks &amp; measured specifications vs OEM/customer requirements</li>
            <li>Consistent, repeatable outcomes across sharpening batches</li>   --}}
            <li>Precision-honed edges to prevent fiber tearing or fuzzing</li>
            <li>Optimized bevel angles for specific non-woven densities and bonding methods</li>
            <li>Ultra-smooth polishing to minimize heat and static buildup</li>
            <li>Rigorous concentricity and balance checks for vibration-free cutting</li>
            <li>Fast turnaround to minimize downtime in high-volume operations</li>
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
          {{-- <h3 class="fw-bold">Sharpening Solutions</h3> --}}
          <h3 class="fw-bold">Steel & Metal Processing Solutions</h3>
          <p>
            {{-- Beyond sharpening—we partner with your team to keep lines running smoothly, reduce waste,
            and extend tool life with practical support on and off site. --}}
            Metal cutting faces rapid edge dulling, burr formation, vibration, and heat buildup due to the hardness of materials. 
            Goldken ensures precise, durable, and stable blade performance for high-demand steel and metal operations.
          </p>
          <h4 class="fw-bold">Our Expertise</h4>
          <ul class="list-unstyled mb-0">
            {{-- <li>Knife application consultation &amp; tool-life optimisation</li>
            <li>Troubleshooting &amp; root cause analysis of cutting issues</li>
            <li>Production efficiency support &amp; maintenance programs</li> --}}
            <li>Tight-tolerance regrinding for accurate bevels</li>
            <li>Heat-controlled grinding to prevent warping</li>
            <li>Precision balancing for vibration-free cutting</li>
            <li>Smooth finishing to reduce friction</li>
            <li>Longer blade life, cleaner cuts, faster throughput</li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Block 4 — Safety & Handling --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-lg-2">
        <div class="timeline-img">
          <img src="{{ asset('assets/images/photo/semiconductor.jpg') }}" class="img-fluid rounded shadow" alt="Safety & Handling">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="timeline-content pe-lg-4 text-lg-end">
          {{-- <h3 class="fw-bold">Safety &amp; Handling</h3> --}}
          <h3 class="fw-bold">Semiconductor Industry Solutions</h3>
          <p>
            {{-- We prioritise safe logistics and responsible disposal so your team can focus on production. --}}
            Semiconductor production demands ultra-precise, contamination-free cutting. Key challenges include micro-chipping, 
            particle contamination, blade misalignment, and yield loss from defective cuts. Goldken delivers micron-level grinding 
            accuracy to protect delicate materials like wafers, FPC, insulation films, and thin metals.
          </p>
          <h4 class="fw-bold">Our Expertise</h4>
          <ul class="list-unstyled mb-0">
            {{-- <li>Free scrap knife disposal service</li>
            <li>Safe packaging &amp; handling guidance</li>
            <li>Replacement monitoring support</li> --}}
            <li>Micron-precision regrinding for ultra-sharp, symmetric edges</li>
            <li>Burr-free finishing to prevent contamination</li>
            <li>Material-specific grinding for carbide, ceramic, and tool steel blades</li>
            <li>Precision balancing for stable high-RPM cutting</li>
            <li>Higher yield, cleaner cuts, longer blade life, and reduced downtime</li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Optional: Industries Summary (short) --}}
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="timeline-img">
          <img src="{{ "https://www.tkmgroup.com/hubfs/%5Bv20%5D/Produkte/Mix_Schneidmesser_verbundstoffe.png"}}" class="img-fluid rounded shadow" alt="Industries We Serve">
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
        {{-- Block 4 — Safety & Handling --}}
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-lg-2">
        <div class="timeline-img">
          <img src="https://www.tkmgroup.com/hubfs/%5Bv20%5D/Industrien/sonstige-Industrien.jpg" class="img-fluid rounded shadow" alt="Safety & Handling">
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
