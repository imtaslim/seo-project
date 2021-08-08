@extends('layouts.app')
@section('title', 'Facebook Post Share Order')

@section('content')

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Facebook Post Share Order</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <li class="list-inline-item breadcrumb-item active">Facebook Post Share Order</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--contact us promo start-->
    <section class="contact-us-promo pt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-12">
                    <div class="section-heading text-white text-center mb-5">
                        <h2 class="text-left">Buy Facebook Post Share</h2>
                        <form action="" method="">
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook User ID *</label>
                                <input class="form-control w-50" type="text" name="fb_user_id" placeholder="Enter your facebook user ID">
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook User Name *</label>
                                <input class="form-control w-50" type="text" name="fb_user_name" placeholder="Enter your facebook user Name">
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook Link *</label>
                                <input class="form-control w-50" type="text" name="fb_user_name" placeholder="https://www.facebook.com/vslengagementhub-104330467731189/">
                            </div>
                            <div class="form-group">
                                <label class="d-block mb-2 text-dark text-left">Facebook Post Share *</label>
                                <select class="form-control w-50" id="select_box">
                                    <option value="">Please Select</option>
                                    <option value="₦1500">100 Post Share</option>
                                    <option value="₦3000">200 Post Share</option>
                                    <option value="₦5000">300 Post Share</option>
                                    <option value="₦8000">500 Post Share</option>
                                    <option value="₦12000">750 Post Share</option>
                                    <option value="₦16000">1000 Post Share</option>
                                    <option value="₦80000">5000 Post Share</option>
                                    <option value="₦160000">10000 Post Share</option>
                                    <option value="₦800000">50000 Post Share</option>
                                    <option value="₦1600000">100000 Post Share</option>
                                </select>
                                
                            </div>
                            <div class="order-price mt-5">
                                <h4 class="text-left">Price: <input class="form-control d-inline w-25 text-danger text-center" type="text" value="₦0.00" id="show_only" disabled=""></h4>
                            </div>
                            <div class="form-group text-left">
                                <button type="submit" class="btn secondary-solid-btn mt-3" style="pointer-events: all; cursor: pointer;">
                                        Order Now
                                    </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us promo end-->

@endsection