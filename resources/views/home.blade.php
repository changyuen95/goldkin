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
                                <h4>Petrox Industry</h4>
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

<!-- :: About Us -->
<section class="about-us about-us-home-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-box">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ asset('template/images/about/03_about.jpg') }}" alt="About Us">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-between">
                <div class="text-box">
                    <div class="sec-title">
                        <h2>Welcome to Petrox Company</h2>
                        <h3>Concerted Efforts To Build Better Services to you</h3>
                        <p>40 Years Of Experience In industry & Manufacturing Services.</p>
                    </div>
                    <div class="about-services">
                        <i class="flaticon-worker"></i>
                        <div class="about-services-box">
                            <h5>Working Ability</h5>
                            <p>Lorem Ipsum is simply text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="about-services">
                        <i class="flaticon-conveyor"></i>
                        <div class="about-services-box">
                            <h5>Machine Power</h5>
                            <p>Lorem Ipsum is simply text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- :: Services -->
<section class="services services-home-2 py-100-70">
    <div class="overlay"></div>
    <div class="container">
        <div class="sec-title sec-title-home-2">
            <div class="row">
                <div class="col-lg-5">
                    <h2>Services We Offer</h2>
                    <h3>High quality services of Multiple Industries</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <span></span>
                    <i class="flaticon-mechanism"></i>
                    <h4>Construction of Engineering</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#" class="more">read more</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
