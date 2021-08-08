@extends('layouts.app')
@section('title', 'Buy Faceboook Share')

@section('content')

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Buy Faceboook Share</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="list-inline-item breadcrumb-item active">Buy Faceboook Share</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--promo section start-->
    <section class="promo-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <i class="ti-dashboard"></i>
                            <span class="number-bg">01</span>
                        </div>
                        <div class="promo-info">
                            <h5>Quick success</h5>
                            <p>Don’t want to waste years trying to grow your page followers? Just buy yours.<br><br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <i class="ti-pulse"></i>
                            <span class="number-bg">02</span>
                        </div>
                        <div class="promo-info">
                            <h5>Better Facebook ranking.</h5>
                            <p>The more followers your page has the more Facebook algorithm will promote your page and the better rankings.<br><br></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="promo-single-wrap p-5 text-center custom-shadow rounded">
                        <div class="promo-icon mb-4">
                            <i class="ti-vector"></i>
                            <span class="number-bg">03</span>
                        </div>
                        <div class="promo-info">
                            <h5>More publicity.</h5>
                            <p>Purchasing the followers makes more people see your page and thus marketing your page/business/company or the products you are selling.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo section end-->
    
    <!--call to action section start-->
    <section class="call-to-action ptb-70" style="background: url('img/cta-bg.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-12">
                    <div class="section-heading text-center text-white mb-5">
                        <h2 class="text-white">Promote your facebook account</h2>
                        <p class="lead">These days buying social media services like Facebook followers is a common thing. Many people on Facebook these days are buying the followers to grow their accounts. The old organic way of growing following is getting harder and harder each day with increasing Facebook users. The competition is becoming more and more. The way that people used to get followers long ago is also changing since the algorithms and recommendation systems are also changing. All these things are fueling the need to buy yours to ease things up.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

   <!--pricing with switch section start-->
    <section id="pricing-section" class="pricing-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary">Our Pricing</strong>
                        <h2>Facebook Share Price</h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between mb-5">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦1500</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 50 FB Share</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>Best prices. In time delivery</li>
                                <li>100% real human</li>
                                <li>No click farms. No BOTs</li>
                                <li>Active users. 100% SAFE</li>
                                <li>Best quality guaranteed</span></li>
                            </ul>
                            <a href="{{ route('facebook_share_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦3000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 100 FB Share</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>Best prices. In time delivery</li>
                                <li>100% real human</li>
                                <li>No click farms. No BOTs</li>
                                <li>Active users. 100% SAFE</li>
                                <li>Best quality guaranteed</span></li>
                            </ul>
                            <a href="{{ route('facebook_share_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦5000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 300 FB Share</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>Best prices. In time delivery</li>
                                <li>100% real human</li>
                                <li>No click farms. No BOTs</li>
                                <li>Active users. 100% SAFE</li>
                                <li>Best quality guaranteed</span></li>
                            </ul>
                            <a href="{{ route('facebook_share_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦8000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 500 FB Share</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>Best prices. In time delivery</li>
                                <li>100% real human</li>
                                <li>No click farms. No BOTs</li>
                                <li>Active users. 100% SAFE</li>
                                <li>Best quality guaranteed</span></li>
                            </ul>
                            <a href="{{ route('facebook_share_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦12000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 750 FB Share</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>Best prices. In time delivery</li>
                                <li>100% real human</li>
                                <li>No click farms. No BOTs</li>
                                <li>Active users. 100% SAFE</li>
                                <li>Best quality guaranteed</span></li>
                            </ul>
                            <a href="{{ route('facebook_share_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card text-center single-pricing-pack">
                        <div class="price-img pt-5">
                            <img src="img/fb-logo.png" alt="price" width="120" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            <div class="price text-center mb-0 monthly-price">₦16000</div>
                        </div>
                        <div class="price-name">
                            <h5 class="mb-0">BUY 1000 FB Share</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-4 pricing-feature-list">
                                <li>Best prices. In time delivery</li>
                                <li>100% real human</li>
                                <li>No click farms. No BOTs</li>
                                <li>Active users. 100% SAFE</li>
                                <li>Best quality guaranteed</span></li>
                            </ul>
                            <a href="{{ route('facebook_share_order') }}" class="btn outline-btn mb-3" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="action-btns mt-5">
                        <a href="{{ route('facebook_share_order') }}" class="btn secondary-solid-btn px-5">CLICK HERE TO SEE MORE PLANS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--pricing with switch section end-->


 <!--call to action section start-->
    <section class="call-to-action py-5 gray-light-bg">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1">Contact V.S.L CONCEPTS ENGAGMENT HUB</h3>
                        <p>V.S.L ENGAGMENT HUB is a network that will help you Increase Your Social Media Growth Instantly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="contact-us.php" class="btn secondary-solid-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

@endsection