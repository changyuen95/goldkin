@extends('layouts.master')

@section('title', 'Goldken Sdn Bhd - About Us')

@section('content')

<!-- :: Breadcrumb Header -->
<section class="breadcrumb-header" id="page" style="background-image: url('{{ asset('template/images/header/04_header.jpg') }}')">
    <div class="overlay"></div>
    <div style="margin-top:25px" class="container">
        <div class="row">
            <div class="col-md-12 hero-content">
                <div class="banner">
                    <h1 style="text-align:center;margin-bottom:-20px" class="handline">Welcome to Goldken Sdn Bhd <br> Your Trusted Industrial Knife Partner</h1>
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
    <strong>Established in 1993</strong> as Goldken Trading and later rebranded as 
    <strong>Goldken Sdn Bhd</strong>, we are a 
    <strong>leading specialist in industrial knives and precision grinding services</strong>.
    With over <strong>32 years of industry experience</strong>, we serve a wide range of sectors
    by delivering <strong>high-performance cutting solutions</strong> tailored to modern
    industrial demands.
  </p>
  <br>
  <p>
    Our <strong>advanced workshop</strong> utilizes <strong>state-of-the-art technology</strong>
    to produce <strong>Standard-Finish, Super-Finish, and Mirror-Finish blades</strong>, along
    with a comprehensive range of <strong>replacement knives and cutting accessories</strong>.
    <strong>Safety remains a core focus</strong> of our operations, supported by safety
    accessories, inspection services, and <strong>free blade disposal</strong>.
  </p>
  <br>
  <p>
    Driven by a commitment to <strong>Total Customer Satisfaction</strong>, we go beyond products
    by providing <strong>technical consultation</strong> and
    <strong>cutting tool life optimization</strong>—ensuring <strong>reliable performance</strong>
    and <strong>long-term value</strong> for our customers.
  </p>
  <br>
  <h2><strong>Experience the Goldken difference—where precision meets reliability.</strong></h2>

<p>
  We deliver <strong>precision sharpening solutions</strong> that ensure
  <strong>clean, consistent, and efficient cutting performance</strong> across:
</p>

<ul class="industry-list">
  <li>Paper & Printing Industry</li>
  <li>Non-Woven Industry</li>
  <li>Steel & Metal Processing Solution</li>
  <li>Semiconductor Industry Solutions</li>
  <li>Safety & Handling</li>
</ul>
</div>

 




  <!-- CTA -->
  <div class="any-question" data-aos="fade-right" data-aos-delay="500">
    Whatsapp us today:
    <a href="tel:01212843661">(+60)16-661-2366</a> or
    <a href="tel:01068710594">(+60)16-205-2950</a>
  </div>
  <a href="{{ url('contact') }}" class="btn btn-primary mt-3">Request A Quote</a>

</div>

            </div>
            
        </div>
    </div>
</section>


<!-- :: Company History Timeline -->
<!-- :: Company Detail Blocks (alternating image + content) -->
<section class="company-history py-100-50 position-relative">
  <div class="container">
    <div class="text-center mb-5">
    </div>

    {{-- Block 1 — Technology & Craftsmanship --}}

    <div class="row align-items-center mb-5">
      <div class="col-lg-12">
        <h3 class="fw-bold text-center mb-5">Supporting Industries Since 1993</h3>

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
          <h4>1993 — Our first industry served and the foundation of our precision expertise.</h4>          <p>
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
          <h4>Mid–1990s — Expanded into non-woven cutting solutions.</h4>
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
          <h4>Early 2000s — Our first diversification into heavy-duty cutting industries.</h4>          <p>
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
     <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="timeline-img">
          <img src="{{ "https://www.tkmgroup.com/hubfs/%5Bv20%5D/Produkte/Mix_Schneidmesser_verbundstoffe.png"}}" class="img-fluid rounded shadow" alt="Industries We Serve">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="timeline-content ps-lg-4">
          <h3 class="fw-bold">Wood Processing Industry</h3>
          <h4>Early 2000s — Expanded alongside metal processing applications.</h4>
          <p class="mb-2">
           Wood processing demands precise, durable cutting performance across sawing, milling, 
           and panel production. Goldken’s precision grinding services help maintain sharp, 
           balanced blades that deliver cleaner cuts, reduce material waste, extend knife life, 
           and support safe, efficient operations.
          </p>
          <ul class="list-unstyled mb-0">
            <li>Cleaner, straighter cuts with less sanding required</li>
            <li>Fewer damaged boards or rejected panels</li>
            <li>Extended knife life between sharpenings</li>
            <li>Reduced motor load and lower energy use</li>
            <li>Safer operations with less vibration and kickback</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-lg-2">
        <div class="timeline-img">
          <img src="{{ asset('assets/images/photo/semiconductor.jpg') }}" class="img-fluid rounded shadow" alt="Safety & Handling">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="timeline-content pe-lg-4 text-lg-end">
          {{-- <h3 class="fw-bold">Safety &amp; Handling</h3> --}}
          <h3 class="fw-bold">Plastic & Rubber Manufacturing Solutions</h3>
          <h4>2001 — Our first major market diversification.</h4>
          <p>
            The plastic and rubber manufacturing industry relies on precision cutting to maintain product 
            quality and production efficiency across a wide range of materials. From rigid plastics to soft 
            elastomers and synthetic rubber, blade geometry and edge quality are essential for achieving clean, 
            consistent cuts throughout the manufacturing process.
          </p>
          <h4 class="fw-bold">Our Expertise</h4>
          <ul class="list-unstyled mb-0">
            <li>Cleaner cuts and sharper product finishes</li>
            <li>Reduced product waste and rework</li>
            <li>Improved production line speed and uptime</li>
            <li>Lower energy consumption due to reduced resistance</li>
            <li>Extended knife and machine lifespan</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <div class="timeline-img">
          <img src="{{ asset('assets/images/photo/semiconductor.jpg') }}" class="img-fluid rounded shadow" alt="Safety & Handling">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="timeline-content pe-lg-4">
          {{-- <h3 class="fw-bold">Safety &amp; Handling</h3> --}}
          <h3 class="fw-bold">Recycling & Waste Management Solutions</h3>
          <h4>2008 — Second diversification into high-wear cutting environments.</h4>
          <p>
            The recycling industry is essential to sustainable waste management, 
            relying on heavy-duty cutting systems to process a wide range of materials efficiently. 
            Industrial knives used in shredding and granulating applications must withstand abrasive, 
            mixed materials under high loads, making blade durability, sharpness, and edge retention critical 
            to reliable plant performance.
          </p>
          <h4 class="fw-bold">Our Expertise</h4>
          <ul class="list-unstyled mb-0">
            <li>Increased productivity and material throughput</li>
            <li>Reduced energy use and wear-and-tear on equipment</li>
            <li>Longer knife lifespan, reducing frequency of replacements</li>
            <li>More uniform output sizes for efficient downstream processing</li>
            <li>Safer operation with reduced blade failure risk</li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Block 4 — SemiConductor --}}
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2">
        <div class="timeline-img">
          <img src="{{ asset('assets/images/photo/semiconductor.jpg') }}" class="img-fluid rounded shadow" alt="Safety & Handling">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="timeline-content pe-lg-4 text-lg-end">
          {{-- <h3 class="fw-bold">Safety &amp; Handling</h3> --}}
          <h3 class="fw-bold">Semiconductor Industry Solutions</h3>
          <h4>2012 — Our latest industry sector with over 10 years of experience.</h4>          
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

<section class="company-history py-100-70 position-relative">
  <div class="container">
    <div class="text-center mb-3">
    </div>

    <div class="row align-items-center">
      <div class="col-lg-12">
        <h3 class="fw-bold text-center">Quality Control & Reporting (Upon Request)</h3>
        <h4  class="text-center">Precision you can see. Confidence you can measure.</h4>
        <p>
          At <strong>Goldken Sdn Bhd</strong>, every blade undergoes a
          <strong>strict quality control process</strong> to deliver
          <strong>measurable performance</strong> and
          <strong>reliable cutting quality</strong>.
          Through <strong>detailed inspection and clear reporting</strong>,
          we provide <strong>full visibility</strong> and
          <strong>confidence</strong> in every blade we return.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="timeline-img">
          <h3 class="fw-bold">Inspection Reports You Can Trust</h3>
          <p>
            Upon request, customers receive a <strong>comprehensive inspection report</strong>
            with each batch of sharpened knives, providing clear documentation of blade
            condition and performance.
          </p>
          <ul class="qc-report-list">
            <li><strong>Blade condition</strong> (before and after sharpening)</li>
            <li><strong>Tolerance & specification checks</strong> vs. OEM or customer requirements</li>
            <li><strong>Service recommendations</strong> for future maintenance or replacement</li>
          </ul>
          <p>
            These reports support <strong>traceability, compliance, and quality assurance</strong>,
            especially for <strong>regulated industries</strong> such as food, pharmaceutical,
            and semiconductor manufacturing.
          </p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="timeline-img">
          <h3 class="fw-bold">Our Quality Control Process</h3>
          <p>
            Our <strong>multi-stage QC workflow</strong> ensures every blade meets strict
            performance and dimensional standards before return.
          </p>
          <ul class="qc-process-list">
            <li>
              <strong>Incoming Inspection:</strong>
              Visual and dimensional checks to identify wear or damage.
            </li>
            <li>
              <strong>In-Process Monitoring:</strong>
              Continuous control of angles, straightness, and machine accuracy.
            </li>
            <li>
              <strong>Final Inspection:</strong>
              Verification of sharpness, dimensions, and surface finish.
            </li>
          </ul>
          <p>
            This approach reduces failure risk, improves consistency, and
            supports <strong>preventive maintenance planning</strong>.
          </p>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-12">
        <h3 class="fw-bold text-center">Technical Support</h3>
        <h4  class="text-center">Expertise that goes beyond sharpening</h4>
        <p>
          At <strong>Goldken Sdn Bhd</strong>, our expertise goes beyond sharpening.
          We provide <strong>practical technical support</strong> to help customers
          improve cutting performance, resolve blade issues, and extend tool life.
        </p>
      </div>
      <div class="col-lg-6">
  <div class="timeline-img">
  <h3 class="fw-bold">What We Offer</h3>
  <ul class="tech-support-list">
    <li>
      <strong>Knife Application Consultation:</strong>
      Expert advice on knife materials, finish levels, and machine compatibility.
    </li>
    <li>
      <strong>Tool Life Optimization:</strong>
      Wear pattern analysis, regrinding interval planning, and handling best practices.
    </li>
    <li>
      <strong>Troubleshooting & Analysis:</strong>
      Identification of chipping, burrs, uneven cuts, or premature blade wear.
    </li>
  </ul>
  <p>
    *Support is available via <strong>on-site visits</strong> or
    <strong>remote consultation</strong> to ensure fast and effective issue resolution.
  </p>
</div>
</div>

<div class="col-lg-6">
  <div class="timeline-img">
    <h3 class="fw-bold">Why Our Support Matters</h3>
    <p>
      We don’t offer generic advice. Every recommendation is based on
      <strong>real production conditions</strong> and industry-specific experience.
    </p>
    <ul class="tech-support-benefits">
      <li>Experienced technicians with deep application knowledge</li>
      <li>Fast response and clear, practical communication</li>
      <li>Solutions aligned with your production goals</li>
    </ul>
    <p>
      By aligning technical insight with operational needs, we help
      <strong>reduce downtime, control costs, and improve cutting efficiency</strong>.
      Goldken is not just a service provider—we are your <strong>technical partner</strong>.
    </p>
  </div>
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
