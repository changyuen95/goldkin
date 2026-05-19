@extends('layouts.master')

@section('title', 'Goldken Sdn Bhd - Home')

@section('content')

<!-- :: Header Home 2 -->
<header class="header header-home-2" id="page">
    <div class="header-owl owl-carousel owl-theme">
        <div class="sec-hero display-table" style="background-image: url({{ asset('template/images/header/04_header.jpg') }}); min-height: 900px;">
            <div class="table-cell">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                       <div class="col-lg hero-content d-flex align-items-center">
                            <div class="banner">
                                <h1 data-aos="fade-right" data-aos-delay="200" class="handline" style="font-size:clamp(40px,7vw,90px);line-height:1.05;margin-bottom:.35rem;color:#fff;">
                                    <span class="d-block">Your Industrial Knife Partner</span>
                                    <span class="d-block">Solutions for Precision Cutting</span>
                                </h1>

                                <p class="about-website mb-0">
                                    <span class="tagline text-white-50">Precision Cutting Blades · Safer Cutting Solutions</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="about-us py-100" id="about-us-section" style="background-size:auto;background-image: url({{ asset('template/images/event-bg.jpg') }})">
    <div class="container">
        <div class="row">
            
            <!-- Left side: Images -->
            <div class="col-lg-4 order-lg-2">
                <div class="row">
                    <div class="col-12 mb-2">
                        <div class="d-flex align-items-start">
                            <div class="icon-circle d-flex align-items-center justify-content-center me-3" style="width:64px;height:64px;border-radius:50%;background:#e6f0fb;">
                                <i class="flaticon-gear" style="font-size:28px;color:#2b6cb0"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Professional</h5>
                                <p class="small text-muted mb-0">Qualified team and precise processes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="d-flex align-items-start">
                            <div class="icon-circle d-flex align-items-center justify-content-center me-3" style="width:64px;height:64px;border-radius:50%;background:#e6f9f0;">
                                <i class="flaticon-globe" style="font-size:28px;color:#38a169"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Global Standards</h5>
                                <p class="small text-muted mb-0">International machinery and quality <b>standards</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="d-flex align-items-start">
                            <div class="icon-circle d-flex align-items-center justify-content-center me-3" style="width:64px;height:64px;border-radius:50%;background:#fff7e6;">
                                <i class="flaticon-worker" style="font-size:28px;color:#d69e2e"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Experienced</h5>
                                <p class="small text-muted mb-0">Skilled technicians since 1993</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="d-flex align-items-start">
                            <div class="icon-circle d-flex align-items-center justify-content-center me-3" style="width:64px;height:64px;border-radius:50%;background:#f0f4ff;">
                                <!-- SVG fallback for plus -->
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z" fill="#4c51bf" />
                                </svg>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Safety</h5>
                                <p class="small text-muted mb-0">Safe handling and disposal services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="d-flex align-items-start">
                            <div class="icon-circle d-flex align-items-center justify-content-center me-3" style="width:64px;height:64px;border-radius:50%;background:#fff4e6;">
                                <i class="flaticon-management" style="font-size:28px;color:#ed8936"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Custom Solutions</h5>
                                <p class="small text-muted mb-0">Tailored sharpening and regrinding services</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="d-flex align-items-start">
                            <div class="icon-circle d-flex align-items-center justify-content-center me-3" style="width:64px;height:64px;border-radius:50%;background:#f0fff4;">
                                <!-- Clock icon -->
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.5-13H11v6l5.2 3.2.8-1.3-4.5-2.7V7z" fill="#2f855a"/>
                                </svg>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">Fast Turnaround</h5>
                                <p class="small text-muted mb-0">Quick service to keep you running</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side: Text content -->
            <div class="col-lg-8 order-lg-1 d-flex align-items-start">
                <div class="text-box" data-aos="fade-right" data-aos-delay="100">

                    <div class="sec-title" data-aos="fade-right" data-aos-delay="200">
                        <h3>Your Trusted Industrial Knife Partner</h3>
                        <h4>Precision Sharpening. Trusted Quality. Since 1993.</h4>
                        <p>
                            Founded in 1993, <strong>Goldken Sdn Bhd</strong> has grown into a leading specialist in 
                            <strong>industrial knives</strong> and <strong>precision regrinding services</strong>. 
                            With advanced global machinery and skilled technicians, we deliver 
                            cleaner cuts, reduced waste, and longer blade life across multiple industries. 
                        </p>
                    </div>

                    <p data-aos="fade-right" data-aos-delay="300">
                        We serve diverse sectors, including <em>paper & printing, plastics, recycling, semiconductor, 
                        metal, and wood processing</em> — providing sharpening solutions that keep 
                        production lines efficient and reliable.
                    </p>

                    <ul data-aos="fade-right" data-aos-delay="400">
                        <li>OEM-level sharpness and superior cutting performance</li>
                        <li>Surface finishes: Standard, Super, and Mirror</li>
                        <li>Advanced grinding capability up to 4.5m length and 400mm OD</li>
                        <li>Technical consultation and blade life optimization</li>
                        <li>Commitment to safety with complimentary scrap knife disposal service</li>
                    </ul>

                    <div class="any-question" data-aos="fade-right" data-aos-delay="500">
                        Whatsapp us today: 
                        <a href="tel:0162052950">(+60)16-205-2950</a> or 
                        <a href="tel:0166612366">(+60)16-661-2366</a>
    
                    </div>
                    <a href="{{ url('about-us') }}" class="btn btn-primary mt-3">Learn More About Us</a>

                </div>
            </div>


            
        </div>
    </div>
</section>

<!-- :: Features -->
<section class="features features-home-2 ">
  <div class="container">
    
    <div class="row align-items-center">
      <!-- Left Column: Title -->
      <div class="col-lg-3">
        <div class="section-header text-lg-start text-center mb-5 mb-lg-0">
          <h2 class="section-title">Why Choose Us?</h2>
        </div>
      </div>

      <!-- Right Column: Carousel -->
      <div class="col-lg-9">
        <div class="features-owl-2 owl-carousel owl-theme">
          <div class="features-item">
            <i class="flaticon-gear"></i>
            <h4>Professional &<br>Qualified</h4>
          </div>
          <div class="features-item">
            <i class="flaticon-worker"></i>
            <h4>Personalised<br>Solutions</h4>
          </div>
          <div class="features-item">
            <i class="flaticon-statistics"></i>
            <h4>Premium<br>Quality</h4>
          </div>
          <div class="features-item">
            <i class="flaticon-monitor"></i>
            <h4>100% Satisfaction<br>Guarantee</h4>
          </div>
          <div class="features-item">
            <i class="flaticon-management"></i>
            <h4>Accurate<br>Measuring</h4>
          </div>
          <div class="features-item">
            <i class="flaticon-eco"></i>
            <h4>Environmental<br>Sensitivity</h4>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>


<section class="industries py-100-70 work-home-2">
    <div class="container">
        <div data-aos="fade" data-aos-delay="100" class="sec-title text-center mb-5">
            <h2>Industries We Serve</h2>
            <h3>Trusted Solutions Across Multiple Sectors</h3>
            <p>For over 32 years, <strong>Goldken Sdn Bhd</strong> has delivered industrial knives and precision regrinding solutions tailored to the unique needs of multiple industries — ensuring performance, efficiency, and durability.</p>
            <div class="align-items-center justify-content-end button-sec">
                <a class="btn-1 btn-3" style="margin-top:10px" href="/services">View All Products</a>
            </div>
        </div>

        <div class="row">
            <!-- Non-Woven -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="/assets/images/home/non_woven.png" class="card-img-top products-image" alt="Non-Woven">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Non-Woven</h5>
                        <p class="card-text">Knives for hygiene, medical, filtration, and automotive non-woven fabric production.</p>
                    </div>
                </div>
            </div>

            <!-- Paper & Printing -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="/assets/images/home/paper_and_printing.jpg" class="card-img-top products-image" alt="Paper & Printing">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Paper & Printing</h5>
                        <p class="card-text">Slitter, trimmer, and guillotine knives delivering clean cuts in paper & tissue production.</p>
                    </div>
                </div>
            </div>

            <!-- Plastics & Rubber -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="/assets/images/home/plastic_and_rubber.jpeg" class="card-img-top products-image" alt="Plastics & Rubber">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Plastics & Rubber</h5>
                        <p class="card-text">Granulator and slitting blades engineered for plastics and rubber processing plants.</p>
                    </div>
                </div>
            </div>

            <!-- Recycling & Waste -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="/assets/images/home/recycle_and_waste.jpg" class="card-img-top products-image" alt="Recycling & Waste">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Recycling & Waste</h5>
                        <p class="card-text">Heavy-duty shredder, crusher, and chopper knives for waste management and recycling.</p>
                    </div>
                </div>
            </div>

            <!-- Semiconductor -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="/assets/images/home/semiconductor.jpeg" class="card-img-top products-image" alt="Semiconductor">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Semiconductor</h5>
                        <p class="card-text">Precision knives for wafer cutting, film slitting, and high-tech semiconductor processes.</p>
                    </div>
                </div>
            </div>

            <!-- Steel & Metal -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img  src="/assets/images/home/steel_and_metal.jpeg" class="card-img-top products-image" alt="Steel & Metal">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Steel & Metal</h5>
                        <p class="card-text">Slitter and shear blades designed for durability in metal processing and fabrication.</p>
                    </div>
                </div>
            </div>

            <!-- Wood Processing -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="/assets/images/home/wood_processing.png" class="card-img-top products-image" alt="Wood Processing">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Wood Processing</h5>
                        <p class="card-text">Planer, chipper, veneer, and saw blades for efficient wood cutting and finishing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="industries py-100-70 work-home-2">
  <div class="container">

    <!-- Section Title -->
    <div class="sec-title text-center mb-5" data-aos="fade" data-aos-delay="100">
      <h2>Safe Disposal & Handling Support</h2>
      <h3>Prioritizing Safety in Every Blade We Handle</h3>
      <p>
        At Goldken Sdn Bhd, safety is our top priority — for both our team and our customers.
        Industrial machine knives are extremely sharp and can be hazardous if not handled,
        transported, or disposed of properly. That’s why we are committed to promoting safe
        practices throughout every stage of the knife life cycle.
      </p>
    </div>

    <!-- Cards -->
    <div class="row justify-content-center">

      <!-- Card 1 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card industry-card h-100" data-aos="fade-up" data-aos-delay="100">
          <div class="card-body text-center">
            <h5 class="card-title">
              <i class="flaticon-recycle me-2"></i>
              Free Scrap Knife Collection & Disposal
            </h5>
            <p class="card-text">
              We provide a free-of-charge collection and disposal service, ensuring worn or
              damaged blades are removed responsibly and in full compliance with health and
              safety regulations.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card industry-card h-100" data-aos="fade-up" data-aos-delay="200">
          <div class="card-body text-center">
            <h5 class="card-title">
              <i class="flaticon-shield me-2"></i>
              Regular Safety Monitoring
            </h5>
            <p class="card-text">
              We monitor the condition of knife guards and provide replacement parts upon
              request, helping you maintain a safe and compliant cutting environment.
            </p>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card industry-card h-100" data-aos="fade-up" data-aos-delay="300">
          <div class="card-body text-center">
            <h5 class="card-title">
              <i class="flaticon-worker me-2"></i>
              Trained & Experienced Personnel
            </h5>
            <p class="card-text">
              Our trained personnel are equipped to assist you, ensuring all blades are
              handled with precision, care, and safety.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="services py-100-70" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Our Capabilities</h2>
                    <h3 data-aos="fade" data-aos-delay="100">High-Precision Sharpening & Regrinding Solutions</h3>
                </div>
                <div class="col-lg-5 col-md-8 d-flex align-items-center">
                    <p data-aos="fade" data-aos-delay="100">
                        At <strong>Goldken Sdn Bhd</strong>, we combine advanced machinery with skilled expertise 
                        to deliver sharpening solutions that maximize performance, efficiency, and durability 
                        across industries.
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 d-flex align-items-center justify-content-end button-sec">
                    <a class="btn-1 btn-3" href="/petrox/01_services">All Services</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="services-item" style="background-color: #6c757d;">
                    <span></span>
                    <i class="flaticon-globe"></i>
                    <h4>OEM-LEVEL <br>Sharpness</h4>
                    <p>Superior cutting performance ensuring cleaner cuts and longer tool life.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item" style="background-color: #6c757d;">
                    <span></span>
                    <i class="flaticon-gear"></i>
                    <h4>Advanced <br>Grinding</h4>
                    <p>Capability up to 4.5m length and 400mm OD with precision accuracy.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item" style="background-color: #6c757d;">
                    <span></span>
                    <i class="flaticon-eco"></i>
                    <h4>Scrap Knife <br>Disposal Service</h4>
                    <p>Free and Safe blade collection and disposal, fully compliant.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item" style="background-color: #6c757d;">
                    <span style="top: 111.375px; left: -2.5px;"></span>
                    <i class="flaticon-statistics"></i>
                    <h4>Multi-Stage <br>Quality Control Process</h4>
                    <p>Covering incoming checks, in-process monitoring, and final sharpness testing.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item" style="background-color: #6c757d;">
                    <span style="top: 106.375px; left: -15.5px;"></span>
                    <i class="flaticon-worker"></i>
                    <h4>Knife & Production <br> Support</h4>
                    <p>Expert guidance to optimize blade performance and production efficiency.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item" style="background-color: #6c757d;">
                    <span></span>
                    <i class="flaticon-management"></i>
                    <h4>Custom <br>Solutions</h4>
                    <p>Tailored sharpening services designed for specific industries and production needs.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="expert">
    <div class="bg-section" style="background-image: url({{ asset('assets/images/contact/contact_us_bg.png') }}); background-size: cover; background-position: center;">
        <div class="overlay2"></div>
    </div>
    <div class="container">
        <div class="row">
             <div class="col-md-8">
                <div class="sec-title">
                    <h2>Professional Work & Agile Services</h2>
                    <h3>Expert Workers Delivering Precision Sharpening & Industrial Solutions</h3>
                    <p>At <strong>Goldken Sdn Bhd</strong>, we specialize in industrial knives and precision regrinding services, delivering cleaner cuts, reduced waste, and longer tool life. Our solutions support diverse industries including paper, plastics, recycling, metal, wood, and semiconductor sectors.</p>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-between">
                <div class="statistic-owl owl-carousel owl-theme owl-loaded owl-drag">  
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1324px, 0px, 0px); transition: 1.5s; width: 2317px;">
                <div class="owl-item cloned" style="width: 316px; margin-right: 15px;">
                        <div class="statistic-item">
                            <i class="flaticon-worker"></i>
                            <div class="content-box">
                                <span class="counter">32</span>
                                <div class="name-content">Years of Industry Expertise</div>
                            </div>
                        </div>
                    </div>

                    <div class="owl-item" style="width: 316px; margin-right: 15px;">
                        <div class="statistic-item">
                            <i class="flaticon-globe"></i>
                            <div class="content-box">
                                <span class="counter">7</span>
                                <div class="name-content">Industries Served Globally</div>
                            </div>
                        </div>
                    </div>

                    <div class="owl-item" style="width: 316px; margin-right: 15px;">
                        <div class="statistic-item">
                            <i class="flaticon-worker-1"></i>
                            <div class="content-box">
                                <span class="counter">4.5</span>
                                <div class="name-content">Meter Max Grinding Length Capacity</div>
                            </div>
                        </div>
                    </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
            </div>
        </div>
      
    </div>

    <!-- :: Enquiry Form -->
    <div class="quote mt-5 mb-5">
        <div class="container">
            <div class="quote-box">
                
                <div class="row">
                    <!-- Contact Info -->
                    <div class="col-lg-4">
                        <div class="quote-info d-flex align-items-start flex-column">
                            <div class="info-top mb-auto">
                                <div class="item">
                                    <h5>Our Location</h5>
                                    <p>No. 9, Jalan 18/17,<br> Taman Kanagapuram, <br>46000, Selangor,<br> Malaysia</p>
                                </div>
                                <div class="item">
                                    <h5>Quick Contact</h5>
                                    <p><strong>Email:</strong><br>sales@goldken.com.my</p><br>
                                    <p><strong>Office Number:</strong><br>+603-77826442</p><br>
                                    <p><strong>Mobile/WhatsApp:</strong><br>+6016-2052950<br>
                                    +6016-6612366</p><br>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enquiry Form -->
                    <div class="col-lg-8">
                        <div class="text-box">
                            <div class="sec-title">
                                <h3>Send Us an Enquiry</h3>
                                <p>Have a question or need a quotation? Fill in the form below and our team will respond promptly.</p>
                            </div>
                            <form action="/enquiry/submit" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="text" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="email" name="email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <input type="text" name="subject" placeholder="Subject" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="quote-item">
                                            <select name="industry" required>
                                                <option value="">Select your industry</option>
                                                <option value="nonwoven">Non-Woven</option>
                                                <option value="paper-printing">Paper & Printing</option>
                                                <option value="plastics-rubber">Plastics & Rubber</option>
                                                <option value="recycling-waste">Recycling & Waste</option>
                                                <option value="semiconductor">Semiconductor</option>
                                                <option value="steel-metal">Steel & Metal</option>
                                                <option value="wood-processing">Wood Processing</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <textarea name="message" placeholder="Leave Your Message Here..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="quote-item">
                                            <button type="submit" class="btn-1 btn-3">Send Enquiry</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Enquiry Form -->
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

