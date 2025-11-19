@extends('layouts.master')

@section('title', 'Goldken Sdn Bhd - Home')

@section('content')

<!-- :: Header Home 2 -->
<header class="header header-home-2" id="page">
    <div class="header-owl owl-carousel owl-theme">
        <div class="sec-hero display-table" style="background-image: url({{ asset('template/images/header/04_header.jpg') }})">
            <div class="table-cell">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="banner">
                                <div class="headline-top">Quality & Integrity Service Agency</div>
                                <h1 data-aos="fade-right" data-aos-delay="200" class="handline">Your industrial knife partner, solution to your cutting needs</h1>
                                <p class="about-website">Your industrial knife partner, solution to your cutting needs</p>
                                <a class="btn-1 btn-2" href="/services">Our Services</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- :: Features -->
<section class="features features-home-2">
    <div class="container">
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
</section>

<section class="about-us py-100" id="about-us-section" style="background-size:auto;background-image: url({{ asset('template/images/event-bg.jpg') }})">
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
                        <h2>Your Trusted Industrial Knife Partner</h2>
                        <h3>Precision Sharpening. Trusted Quality. Since 1993.</h3>
                        <p>
                            Founded in 1993, <strong>Goldken Sdn Bhd</strong> has grown into a leading specialist in 
                            <strong>industrial knives</strong> and <strong>precision regrinding services</strong>. 
                            With advanced global machinery and skilled technicians, we deliver 
                            cleaner cuts, reduced waste, and longer tool life across multiple industries. 
                        </p>
                    </div>

                    <p data-aos="fade-right" data-aos-delay="300">
                        We serve diverse sectors including <em>paper & printing, plastics, recycling, semiconductor, 
                        metal, wood processing,</em> and more — providing sharpening solutions that keep 
                        production lines efficient and reliable.
                    </p>

                    <ul data-aos="fade-right" data-aos-delay="400">
                        <li>OEM-level sharpness and superior cutting performance</li>
                        <li>Surface finishes: Standard, Super, and Mirror</li>
                        <li>Advanced grinding capability up to 4.5m length and 400mm OD</li>
                        <li>Technical consultation and blade life optimization</li>
                        <li>Commitment to safety with free scrap knife disposal service</li>
                    </ul>

                    <div class="any-question" data-aos="fade-right" data-aos-delay="500">
                        Whatsapp us today: 
                        <a href="tel:0162052950">+(6016) 205 2950</a> or 
                        <a href="tel:0166612366">+(6016) 661 2366</a>
    
                    </div>
                    <a href="{{ url('about-us') }}" class="btn btn-primary mt-3">Learn More About Us</a>

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
                    <img src="https://www.tkmgroup.com/hubfs/%5Bv20%5D/Main%20Header%20Fotos/Non-Woven-Slider_webp.webp" class="card-img-top products-image" alt="Non-Woven">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Non-Woven</h5>
                        <p class="card-text">Knives for hygiene, medical, filtration, and automotive non-woven fabric production.</p>
                    </div>
                </div>
            </div>

            <!-- Paper & Printing -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="https://www.tkmgroup.com/hubfs/%5Bv20%5D/Industrien/Papierindustrie_Karoussel.jpg" class="card-img-top products-image" alt="Paper & Printing">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Paper & Printing</h5>
                        <p class="card-text">Slitter, trimmer, and guillotine knives delivering clean cuts in paper & tissue production.</p>
                    </div>
                </div>
            </div>

            <!-- Plastics & Rubber -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="https://pcsman.com/wp-content/uploads/2016/05/MG_0583.jpg" class="card-img-top products-image" alt="Plastics & Rubber">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Plastics & Rubber</h5>
                        <p class="card-text">Granulator and slitting blades engineered for plastics and rubber processing plants.</p>
                    </div>
                </div>
            </div>

            <!-- Recycling & Waste -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="https://www.tkmgroup.com/hubfs/%5Bv20%5D/allgemein/KGR_webp.webp" class="card-img-top products-image" alt="Recycling & Waste">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Recycling & Waste</h5>
                        <p class="card-text">Heavy-duty shredder, crusher, and chopper knives for waste management and recycling.</p>
                    </div>
                </div>
            </div>

            <!-- Semiconductor -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="https://electronicsemiconductor.com/wp-content/uploads/2018/01/what-is-semiconductor-electronics-semicon-devices-meaning-means.png" class="card-img-top products-image" alt="Semiconductor">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Semiconductor</h5>
                        <p class="card-text">Precision knives for wafer cutting, film slitting, and high-tech semiconductor processes.</p>
                    </div>
                </div>
            </div>

            <!-- Steel & Metal -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="https://www.tkmgroup.com/hubfs/Stahlcoil_web.png" class="card-img-top products-image" alt="Steel & Metal">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Steel & Metal</h5>
                        <p class="card-text">Slitter and shear blades designed for durability in metal processing and fabrication.</p>
                    </div>
                </div>
            </div>

            <!-- Wood Processing -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card industry-card h-100">
                    <img src="https://www.tkmgroup.com/hubfs/%5Bv20%5D/allgemein/Holz.gif" class="card-img-top products-image" alt="Wood Processing">
                    <div data-aos="fade" data-aos-delay="100" class="card-body">
                        <h5 class="card-title">Wood Processing</h5>
                        <p class="card-text">Planer, chipper, veneer, and saw blades for efficient wood cutting and finishing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services py-100-70 ">
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
                <div class="services-item">
                    <span></span>
                    <i class="flaticon-mechanism"></i>
                    <h4>OEM-LEVEL <br>Sharpness</h4>
                    <p>Superior cutting performance ensuring cleaner cuts and longer tool life.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span></span>
                    <i class="flaticon-tank"></i>
                    <h4>Advanced <br>Grinding</h4>
                    <p>Capability up to 4.5m length and 400mm OD with precision accuracy.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span></span>
                    <i class="flaticon-chemical"></i>
                    <h4>Scrap Knife <br>Disposal Service</h4>
                    <p>Free and Safe blade collection and disposal, fully compliant.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span style="top: 111.375px; left: -2.5px;"></span>
                    <i class="flaticon-machine"></i>
                    <h4>Multi-Stage <br>Quality Control Process</h4>
                    <p>Covering incoming checks, in-process monitoring, and final sharpness testing.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span style="top: 106.375px; left: -15.5px;"></span>
                    <i class="flaticon-robot-arm"></i>
                    <h4>Knife & Production <br> Support</h4>
                    <p>Expert guidance to optimize blade performance and production efficiency.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span></span>
                    <i class="flaticon-manufacturing-plant"></i>
                    <h4>Custom <br>Solutions</h4>
                    <p>Tailored sharpening services designed for specific industries and production needs.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="work py-100-70 work-home-2">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-4">
                    <h2>we work with global Industries!</h2>
                    <h3 data-aos="fade" data-aos-delay="100">Goldken completed some project for our foreign clients</h3>
                </div>
                <div class="col-lg-5 col-md-8 d-flex align-items-center">
                    <p data-aos="fade" data-aos-delay="100">Goldken Are A Professional Industry and Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry and any Industrial related business field.</p>
                </div>
                <div class="col-lg-3 col-md-4 d-flex align-items-center justify-content-end button-sec">
                    <a class="btn-1 btn-3" href="/petrox/01_work">All Works</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="item-work">
                    <span style="top: 411.609px; left: 159.5px;"></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/photo/20200714_164329.jpg" alt="01 Work">
                    </div>
                    <div class="hover-box">
                        <a class="open-item-work" href="/petrox/01_work"><i class="fas fa-arrow-right"></i></a>
                        <div class="text-box">
                            <div class="tags"><a href="/petrox/01_work">Title</a></div>
                            <h4><a href="/petrox/01_work">View More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="item-work">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/photo/20200721_151742.jpg" alt="02 Work">
                    </div>
                    <div class="hover-box">
                        <a class="open-item-work" href="/petrox/01_work"><i class="fas fa-arrow-right"></i></a>
                        <div class="text-box">
                            <div class="tags"><a href="/petrox/01_work">Title</a></div>
                            <h4><a href="/petrox/01_work">View More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="item-work">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/photo/20200721_152904.jpg" alt="03 Work">
                    </div>
                    <div class="hover-box">
                        <a class="open-item-work" href="/petrox/01_work"><i class="fas fa-arrow-right"></i></a>
                        <div class="text-box">
                            <div class="tags"><a href="/petrox/01_work">Title</a></div>
                            <h4><a href="/petrox/01_work">View More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="item-work">
                    <span style="top: 401.438px; left: 159.5px;"></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/photo/20200714_163704.jpg" alt="04 Work">
                    </div>
                    <div class="hover-box">
                        <a class="open-item-work" href="/petrox/01_work"><i class="fas fa-arrow-right"></i></a>
                        <div class="text-box">
                            <div class="tags"><a href="/petrox/01_work">Title</a></div>
                            <h4><a href="/petrox/01_work">View More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="item-work">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/photo/20200714_163045.jpg" alt="05 Work">
                    </div>
                    <div class="hover-box">
                        <a class="open-item-work" href="/petrox/01_work"><i class="fas fa-arrow-right"></i></a>
                        <div class="text-box">
                            <div class="tags"><a href="/petrox/01_work">Title</a></div>
                            <h4><a href="/petrox/01_work">View More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="item-work">
                    <span></span>
                    <div class="img-box">
                        <img class="img-fluid gallery-item-img" src="assets/images/photo/20200714_163725.jpg" alt="06 Work">
                    </div>
                    <div class="hover-box">
                        <a class="open-item-work" href="/petrox/01_work"><i class="fas fa-arrow-right"></i></a>
                        <div class="text-box">
                            <div class="tags"><a href="/petrox/01_work">Title</a></div>
                            <h4><a href="/petrox/01_work">View More</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="contact py-100">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="sec-title text-center">
                    <h3>Are You Looking For a Industry!</h3>
                    <p>Stop Worrying about problems. let us provide the support you deserve.</p>
                    <a class="btn-1" href="/petrox/01_contact">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}


<section class="expert" style="margin-bottom: 70px;">
    <div class="bg-section">
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
    <div class="quote">
        <div class="container">
            
            <div class="quote-box">
                
                <div class="row">
                    <!-- Contact Info -->
                    <div class="col-lg-4">
                        <div class="quote-info d-flex align-items-start flex-column">
                            <div class="info-top mb-auto">
                                <div class="item">
                                    <h5>Our Location</h5>
                                    <p>Selangor, Malaysia</p>
                                </div>
                                <div class="item">
                                    <h5>Quick Contact</h5>
                                    <p>info@goldken.com<br>sales@goldken.com</p>
                                </div>
                            </div>
                            <div class="info-down">
                                <i class="flaticon-call"></i>
                                <h5>+60 12-128-43661<br>+60 106-8710-594</h5>
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

