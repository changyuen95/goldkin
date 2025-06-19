@extends('layouts.master')

@section('title', 'Home')

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
                                <h1 class="handline">Your industrial knife partner, solution to your cutting needs</h1>
                                <p class="about-website">Your industrial knife partner, solution to your cutting needs</p>
                                <a class="btn-1 btn-2" href="#">Our Services</a>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-end">
                            <div class="Petrox-info">
                                <img class="img-fluid" src="{{ asset('template/images/logo/logo.png') }}" alt="Header Logo">
                                <h4>Goldken Industry</h4>
                                <p>Bigger, Better, Faster And Stronger Projects Than Ever</p>
                                <a href="#">More About Us</a>
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
                <h4>Transparent<br>Pricing</h4>
            </div>
            <div class="features-item">
                <i class="flaticon-monitor"></i>
                <h4>100% Satisfaction<br>Guarantee</h4>
            </div>
            <div class="features-item">
                <i class="flaticon-management"></i>
                <h4>Accurate<br>Testing</h4>
            </div>
            <div class="features-item">
                <i class="flaticon-eco"></i>
                <h4>Environmental<br>Sensitivity</h4>
            </div>
        </div>
    </div>
</section>

<section class="about-us py-100" id="about-us-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row img-box">
                    <div class="col">
                        <div class="one">
                            <div class="about-img">
                                <img class="img-fluid" src="assets/images/photo/20200703_152158.jpg" alt="01 About">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="two">
                            <div class="about-img">
                                <img class="img-fluid" src="assets/images/photo/20200703_152238.jpg" alt="02 About">
                                <div class="experience-about">
                                    <i class="flaticon-globe"></i>
                                    <div class="counter">40</div>
                                    <h5>years of experience</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-between">
                <div class="text-box">
                    <div class="sec-title">
                        <h2>Welcome to best senoir care center</h2>
                        <h3>we help our clients to achieve their industry</h3>
                        <p>Goldken Are A Professional Industry and Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry and any Industrial related business field.</p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <ul>
                        <li>The Best Industrial Business</li>
                        <li>We Are Professional Contractor</li>
                        <li>We are hear to help industry</li>
                        <li>we use qulity industry materials</li>
                        <li>We Are Professional Contractor</li>
                    </ul>
                    <div class="any-question">Call to any Question : <a href="tel:01212843661">0121-2843-661</a> or <a href="tel:01068710594">0106-8710-594</a></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="services py-100-70">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Services We Offer</h2>
                    <h3>High quality services of Multiple Industries</h3>
                </div>
                <div class="col-lg-5 col-md-8 d-flex align-items-center">
                    <p>Goldken Are A Professional Industry and Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry and any Industrial related business field.</p>
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
                    <h4>Constraction <br>of Engineering</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span></span>
                    <i class="flaticon-tank"></i>
                    <h4>Goldken</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span></span>
                    <i class="flaticon-chemical"></i>
                    <h4>Basic &amp; <br>Industrial Chemicals</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span style="top: 111.375px; left: -2.5px;"></span>
                    <i class="flaticon-machine"></i>
                    <h4>Mechanical <br>Engineering</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span style="top: 106.375px; left: -15.5px;"></span>
                    <i class="flaticon-robot-arm"></i>
                    <h4>Bridge <br>Constraction</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span></span>
                    <i class="flaticon-manufacturing-plant"></i>
                    <h4>Automotive <br>Manufacturing</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                    <a class="more" href="/petrox/01_services">read more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="provide">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="text-box">
                    <div class="sec-title">
                        <h3>Petrox provide the best service for sustainable progress</h3>
                        <p>Goldken Are A Professional Industry and Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry and any Industrial related business field.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-12 col-lg-6 d-flex align-items-center justify-content-between">
                            <ul class="provide-features">
                                <li><h4>Great Support</h4></li>
                                <li><h4>Unique Technology</h4></li>
                                <li><h4>Awesome Team</h4></li>
                                <li><h4>smart Work</h4></li>
                                <li><h4>quality materials</h4></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-12 col-lg-6 d-flex align-items-center justify-content-between">
                            <div class="provide-features-box">
                                <i class="flaticon-gear"></i>
                                <h5>we are providing the best industrial services</h5>
                            </div>
                        </div>
                    </div>
                    <div class="profile">
                        {{-- <img class="img-fluid profile-provide" src="template/images/logo/logo.png" alt="Profile Provide"> --}}
                        {{-- <img class="img-fluid sign-provide" src="assets/images/provide/01_sign.png" alt="Sign Provide"> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <div class="video-box">
                        <span>Watch Our Presentation!</span>
                        <a href="https://youtu.be/TKnufs85hXk" class="pulse" data-lity="">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="work py-100-70">
    <div class="container">
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-4">
                    <h2>we work with global Industries!</h2>
                    <h3>Goldken completed some project for our foreign clients</h3>
                </div>
                <div class="col-lg-5 col-md-8 d-flex align-items-center">
                    <p>Goldken Are A Professional Industry and Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry and any Industrial related business field.</p>
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
</section>

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


<section class="expert">
    <div class="bg-section">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="sec-title">
                    <h2>professional work &amp; an agile services</h2>
                    <h3>Expert workers are giving best services to build your dream industry and manufacturing</h3>
                    <p>Goldken Are A Professional Industry and Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry and any Industrial related business field.</p>
                    <a class="btn-1" href="/petrox/01_single-services">Download our brochure</a>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-between">
                <div class="statistic-owl owl-carousel owl-theme owl-loaded owl-drag">
                    
                    
                    
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1324px, 0px, 0px); transition: 1.5s; width: 2317px;"><div class="owl-item cloned" style="width: 316px; margin-right: 15px;"><div class="statistic-item">
                        <i class="flaticon-worker"></i>
                        <div class="content-box">
                            <span class="counter">7,003</span>
                            <div class="name-content">Qualified Employees And Workers <br>With Us</div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 316px; margin-right: 15px;"><div class="statistic-item">
                        <i class="flaticon-globe"></i>
                        <div class="content-box">
                            <span class="counter">40</span>
                            <div class="name-content">Years Of Experience In The Factory <br>and Manufacturing</div>
                        </div>
                    </div></div><div class="owl-item" style="width: 316px; margin-right: 15px;"><div class="statistic-item">
                        <i class="flaticon-worker-1"></i>
                        <div class="content-box">
                            <span class="counter">7,112</span>
                            <div class="name-content">Projects And Residentials Completed <br>in 2021</div>
                        </div>
                    </div></div><div class="owl-item" style="width: 316px; margin-right: 15px;"><div class="statistic-item">
                        <i class="flaticon-worker"></i>
                        <div class="content-box">
                            <span class="counter">7,003</span>
                            <div class="name-content">Qualified Employees And Workers <br>With Us</div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 316px; margin-right: 15px;"><div class="statistic-item">
                        <i class="flaticon-globe"></i>
                        <div class="content-box">
                            <span class="counter">40</span>
                            <div class="name-content">Years Of Experience In The Factory <br>and Manufacturing</div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 316px; margin-right: 15px;"><div class="statistic-item">
                        <i class="flaticon-worker-1"></i>
                        <div class="content-box">
                            <span class="counter">7,112</span>
                            <div class="name-content">Projects And Residentials Completed <br>in 2021</div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 316px; margin-right: 15px;"><div class="statistic-item">
                        <i class="flaticon-worker"></i>
                        <div class="content-box">
                            <span class="counter">7,003</span>
                            <div class="name-content">Qualified Employees And Workers <br>With Us</div>
                        </div>
                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div></div>
            </div>
        </div>
    </div>
    
    <!-- :: Quote -->
    <div class="quote">
        <div class="container">
            <div class="quote-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="quote-info d-flex align-items-start flex-column">
                            <div class="info-top mb-auto">
                                <div class="item">
                                    <h5>Our Location</h5>
                                    <p>Brooklyn,<br>New York 11226 US.</p>
                                </div>
                                <div class="item">
                                    <h5>Quick Contact</h5>
                                    <p>Goldken@AR-Coder.com,<br>AR-Coder@Goldken.com</p>
                                </div>
                            </div>
                            <div class="info-down">
                                <i class="flaticon-call"></i>
                                <h5>+(002) 0121-2843-661</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="text-box">
                            <div class="sec-title">
                                <h3>Get Every Updates!</h3>
                                <p>Goldken Are A Professional Industry and Manufacturing Services Provider Institutions. Suitable For Factory, Manufacturing, Industry and any Industrial related business field.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="quote-item">
                                        <input type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="quote-item">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="quote-item">
                                        <input type="text" name="subject" placeholder="Enter Your Subject">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="quote-item">
                                        <select style="display: none;">
                                            <option value="0">Select your industry</option>
                                            <option value="1">Constraction Of Engineering</option>
                                            <option value="2">Petroxeum &amp; Gas Energy</option>
                                            <option value="3">Basic &amp; Industrial Chemicals</option>
                                            <option value="4">Mechanical Engineering</option>
                                            <option value="5">Bridge Constraction</option>
                                            <option value="6">Automotive Manufacturing</option>
                                        </select><div class="nice-select" tabindex="0"><span class="current">Select your industry</span><ul class="list"><li data-value="0" class="option selected">Select your industry</li><li data-value="1" class="option">Constraction Of Engineering</li><li data-value="2" class="option">Petroxeum &amp; Gas Energy</li><li data-value="3" class="option">Basic &amp; Industrial Chemicals</li><li data-value="4" class="option">Mechanical Engineering</li><li data-value="5" class="option">Bridge Constraction</li><li data-value="6" class="option">Automotive Manufacturing</li></ul></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="quote-item">
                                        <div class="quote-item">
                                            <textarea placeholder="Leave Your Message Here....."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="quote-item">
                                        <a class="btn-1 btn-3">Contact Us!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
