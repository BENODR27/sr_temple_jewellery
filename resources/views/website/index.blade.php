@extends('layouts.websitelayout')

@section('content')


    <!--hero section start-->
    <section class="ur-hero-section position-relative z-1 overflow-hidden" data-background="assets/images/bg/hero-bg.jpg">
        <span class="circle-white position-absolute z--1 rounded-circle"></span>
        <img src="assets/images/shapes/circle-1.png" alt="circle" class="position-absolute end-0 bottom-0 z--1 circle-color">
        <div class="container">
            <div class="ur-hero-slider slider-spacing">
                <div class="ur-hero-single-slide">
                    <div class="row align-items-center">
                        <div class="col-xxl-5 col-xl-6">
                            <div class="hero-left-content">
                                <h5 class="hero-subtitle fw-normal mb-40">design by Andrew Holi</h5>
                                <h1 class="hero-title mb-50">Hand Crafted Jewelry</h1>
                                <a href="#" class="template-btn primary-btn"><span>Explore Now</span></a>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-6">
                            <div class="hero-right mt-5 mt-xl-0">
                                <img src="assets/images/home1/hero-girl-1.png" alt="girl" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ur-hero-single-slide">
                    <div class="row align-items-center">
                        <div class="col-xxl-5 col-xl-6">
                            <div class="hero-left-content">
                                <h5 class="hero-subtitle fw-normal mb-40">design by Andrew Holi</h5>
                                <h1 class="hero-title mb-50">Fory Ring In Diamond</h1>
                                <a href="#" class="template-btn primary-btn"><span>Explore Now</span></a>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-6">
                            <div class="hero-right mt-5 mt-xl-0">
                                <img src="assets/images/home1/hero-girl-2.png" alt="girl" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ur-hero-feature-card d-flex align-items-center bg-white">
            <div class="item-thumb">
                <a href="#"><img src="assets/images/products/ring-sm.png" alt="product" class="img-fluid"></a>
            </div>
            <div>
                <a href="#">
                    <h5 class="mb-4 fw-normal">Deltanor Fory Ring in 24k Diamond</h5>
                </a>
                <div class="d-flex align-items-center product-meta gap-4">
                    <a href="#" class="wish-btn"><i class="fa-regular fa-heart"></i></a>
                    <a href="#" class="card-btn"><i class="fa-solid fa-plus"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

<!--cart drawer start-->
    <div class="cart-drawer position-fixed">
        <div
            class="drawer-close d-flex align-items-center justify-content-between position-absolute start-0 top-0 w-100 px-4 py-4 border-bottom">
            <h6 class="mb-0">Shopping Cart</h6>
            <a href="javascript:void(0)" class="drawer-close"><i class="fas fa-xmark"></i></a>
        </div>
        <ul class="cart-list">
            <li class="d-flex align-items-center gap-3">
                <div class="feature-image light-bg">
                    <a href="product-details.html"><img src="assets/images/products/product-1.png" alt="feature image"
                            class="img-fluid"></a>
                </div>
                <div class="d-flex justify-content-between gap-3 w-100">
                    <div>
                        <a href="product-details.html">
                            <h6 class="mb-1">Weeding Rings</h6>
                        </a>
                        <span class="price fw-medium secondary-text-color d-block mb-1 fs-sm">$250.00</span>
                        <div class="quantity d-flex align-items-center">
                            <input type="text" value="1">
                            <div class="step-btns">
                                <button class="increment"><i class="fa-solid fa-angle-up"></i></button>
                                <button class="decrement"><i class="fa-solid fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="close"><i class="fas fa-xmark"></i></a>
                    </div>
                </div>
            </li>
            <li class="d-flex align-items-center gap-4">
                <div class="feature-image light-bg">
                    <a href="product-details.html"><img src="assets/images/products/product-2.png" alt="feature image"
                            class="img-fluid"></a>
                </div>
                <div class="d-flex justify-content-between gap-3 w-100">
                    <div>
                        <a href="product-details.html">
                            <h6 class="mb-1">Diamond Rings</h6>
                        </a>
                        <span class="price fw-medium secondary-text-color d-block mb-1 fs-sm">$250.00</span>
                        <div class="quantity d-flex align-items-center">
                            <input type="text" value="1">
                            <div class="step-btns">
                                <button class="increment"><i class="fa-solid fa-angle-up"></i></button>
                                <button class="decrement"><i class="fa-solid fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="close"><i class="fas fa-xmark"></i></a>
                    </div>
                </div>
            </li>
            <li class="d-flex align-items-center gap-4">
                <div class="feature-image light-bg">
                    <a href="product-details.html"><img src="assets/images/products/product-3.png" alt="feature image"
                            class="img-fluid"></a>
                </div>
                <div class="d-flex justify-content-between gap-3 w-100">
                    <div>
                        <a href="product-details.html">
                            <h6 class="mb-1">Bracelets Gold</h6>
                        </a>
                        <span class="price fw-medium secondary-text-color d-block mb-1 fs-sm">$250.00</span>
                        <div class="quantity d-flex align-items-center">
                            <input type="text" value="1">
                            <div class="step-btns">
                                <button class="increment"><i class="fa-solid fa-angle-up"></i></button>
                                <button class="decrement"><i class="fa-solid fa-angle-down"></i></button>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="close"><i class="fas fa-xmark"></i></a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="drawer-bottom border-top">
            <div class="d-flex align-items-center justify-content-between mt-4">
                <h6 class="mb-0">Total:</h6>
                <span class="fw-medium secondary-text-color">$750.00</span>
            </div>
            <a href="cart.html"
                class="template-btn primary-btn text-uppercase fw-medium w-100 text-center mt-4"><span>View Cart & Check
                    Out</span></a>
        </div>
    </div>
    <!--cart drawer end-->


 

    <!--category section start-->
    <section class="ptb-120 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center mb-60">
                        <h2 class="h1 fw-normal mb-4 wow fadeInUp" data-wow-duration="0.5s" style="color:black">Browse
                            By Category</h2>
                        <p class="mb-0 fw-light wow wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">Our
                            jewellery completely handmade by skilled craftsman, focused on quality & Finishing, perfect
                            for
                            bharathanatyam, Kuchipudi, Mohiniyattam, etc., and cherished for years.</p>
                    </div>
                </div>
            </div>
            <div class="ur-category-slider slider-spacing">
                <div class="position-relative pp-overlay-card overflow-hidden">
                    <img src="assets/images/headset/headset_2.jpg" alt="earrings" class="img-fluid"
                        style="height: 100%;">
                    <!-- <span class="category-title position-absolute">Headset</span> -->
                    <a href="shop-list.html" class="pp-overlay position-absolute">
                        <span class="text-center">Headset</span>
                    </a>
                </div>
                <div class="position-relative pp-overlay-card overflow-hidden">
                    <img src="assets/images/earrings/earings_1.jpg" alt="neaklaces" class="img-fluid">
                    <!-- <span class="category-title position-absolute">Earings</span> -->
                    <a href="shop-list.html" class="pp-overlay position-absolute">
                        <span class="text-center">Earings</span>
                    </a>
                </div>
                <div class="position-relative pp-overlay-card overflow-hidden">
                    <img src="assets/images/necklaces_chockers/neck_1.jpg" alt="rings" class="img-fluid">
                    <!-- <span class="category-title position-absolute">Necklaces & Chokers</span> -->
                    <a href="#" class="pp-overlay position-absolute">
                        <span class="text-center">Necklaces & Chokers</span>
                    </a>
                </div>
                <div class="position-relative pp-overlay-card overflow-hidden">
                    <img src="assets/images/long_harams/haram_1.jpg" alt="bracelets" class="img-fluid">
                    <!-- <span class="category-title position-absolute">Long Harams</span> -->
                    <a href="shop-list.html" class="pp-overlay position-absolute">
                        <span class="text-center">Long Harams</span>
                    </a>
                </div>
                <div class="position-relative pp-overlay-card overflow-hidden">
                    <img src="assets/images/ottiyanam/belt.jpg" alt="rings" class="img-fluid">
                    <!-- <span class="category-title position-absolute">Ottiyanam</span> -->
                    <a href="shop-list.html" class="pp-overlay position-absolute">
                        <span class="text-center">Ottiyanam</span>
                    </a>
                </div>
                <div class="position-relative pp-overlay-card overflow-hidden">
                    <img src="assets/images/fancy_chockers/fancy.jpg" alt="rings" class="img-fluid">
                    <!-- <span class="category-title position-absolute">Fancy Chokers & Earings</span> -->
                    <a href="shop-list.html" class="pp-overlay position-absolute">
                        <span class="text-center">Fancy Chokers & Earings</span>
                    </a>
                </div>
                <div class="position-relative pp-overlay-card overflow-hidden">
                    <img src="assets/images/bangles/bangle_1.jpg" alt="rings" class="img-fluid">
                    <!-- <span class="category-title position-absolute">Bangles</span> -->
                    <a href="shop-list.html" class="pp-overlay position-absolute">
                        <span class="text-center">Bangles</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--category section end-->

    <!--newsticker area start-->
    <div class="ur-ticker-area overflow-hidden">
        <div class="ur-ticker-wrapper primary-bg-color">
            <div class="ur-ticker">
                <span class=" text-uppercase">100% Quality Assured</span>
                <span class=" text-uppercase">World Wide Shipping </span>
                <span class=" text-uppercase">Geographical Indication products</span>
                <span class=" text-uppercase">100% Quality Assured</span>
                <span class=" text-uppercase">World Wide Shipping </span>
                <span class=" text-uppercase">Geographical Indication products</span>
            </div>
        </div>
    </div>
    <!--newsticker area end-->

   

    <!--latest arrival start-->
    <section class="ur-latest-arrival ptb-120 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center">
                        <h2 class="h1 mb-50" style="color:black">Browse Latest Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ur-product-card position-relative card-sm-small">

                        <div
                            class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                            <a href="product-details.html"><img src="assets/images/bangles/bangle_1.jpg" alt="rings"
                                    class="img-fluid"></a>
                        </div>
                        <div class="mt-4">
                            <a href="shop-list.html" class="secondary-text-color text-uppercase">Bangles</a>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ur-product-card position-relative card-sm-small">

                        <div
                            class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                            <a href="product-details.html"><img src="assets/images/earrings/earings_1.jpg" alt="rings"
                                    class="img-fluid"></a>
                        </div>
                        <div class="mt-4">
                            <a href="shop-list.html" class="secondary-text-color text-uppercase">Earrings</a>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ur-product-card position-relative card-sm-small">

                        <div
                            class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                            <a href="product-details.html"><img src="assets/images/fancy_chockers/fancy.jpg" alt="rings"
                                    class="img-fluid"></a>
                        </div>
                        <div class="mt-4">
                            <a href="shop-list.html" class="secondary-text-color text-uppercase">Fancy Chockers</a>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ur-product-card position-relative card-sm-small">

                        <div
                            class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                            <a href="product-details.html"><img src="assets/images/headset/headset_2.JPG" alt="rings"
                                    class="img-fluid"></a>
                        </div>
                        <div class="mt-4">
                            <a href="shop-list.html" class="secondary-text-color text-uppercase">Headset</a>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ur-product-card position-relative card-sm-small">

                        <div
                            class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                            <a href="product-details.html"><img src="assets/images/long_harams/haram_1.jpg" alt="rings"
                                    class="img-fluid"></a>
                        </div>
                        <div class="mt-4">
                            <a href="shop-list.html" class="secondary-text-color text-uppercase">Long Harams</a>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ur-product-card position-relative card-sm-small">

                        <div
                            class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                            <a href="product-details.html"><img src="assets/images/necklaces_chockers/neck_1.jpg"
                                    alt="rings" class="img-fluid"></a>
                        </div>
                        <div class="mt-4">
                            <a href="shop-list.html" class="secondary-text-color text-uppercase">Necklaces &
                                Chockers</a>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ur-product-card position-relative card-sm-small">

                        <div
                            class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                            <a href="product-details.html"><img src="assets/images/ottiyanam/belt.jpg" alt="rings"
                                    class="img-fluid"></a>
                        </div>
                        <div class="mt-4">
                            <a href="shop-list.html" class="secondary-text-color text-uppercase">Ottiyanam</a>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="ur-product-card position-relative card-sm-small">

                        <div
                            class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                            <a href="product-details.html"><img src="assets/images/headset/headset_1.jpg" alt="rings"
                                    class="img-fluid"></a>
                        </div>
                        <div class="mt-4">
                            <a href="shop-list.html" class="secondary-text-color text-uppercase">Headset</a>


                        </div>
                    </div>
                </div>




            </div>
            <div class="text-center mt-60">
                <a href="{{route('products')}}" class="template-btn primary-btn"><span>View All</span></a>
            </div>
        </div>
    </section>
    <!--latest arrival end-->

    <!--feedback section start-->
    <section class="ptb-120 feedback-section overflow-hidden position-relative z-1"
        data-background="assets/images/banner/bg-overlay.jpg">
        <img src="assets/images/shapes/neaklace-2.png" alt="neaklace"
            class="position-absolute start-0 top-0 z--1 neaklace-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-xl-12 col-lg-12 order-2 order-lg-1 text-center">
                    <div class="section-content">
                        <div class="text-center"></div>
                        <h2 class="h1 mb-50" style="color:White">Our Customer Testimonials</h2>
                        <div class="ur-feedback-slider slider-spacing">
                            <div class="ur-feedback-single">
                                <p class="fw-light mb-4">“Flawless jewellery, Had great experience as their happy
                                    customer. The quality was as it's best.”</p>
                                <h3 class=" mb-0">Reshma Arun</h3>
                                <!-- <span class="fs-sm fw-light ">DESIGNER</span> -->
                            </div>
                            <div class="ur-feedback-single">
                                <p class="fw-light mb-4">“Visited their place, Varieties of jewells available. Very
                                    meticulously done, Courteous Owner, Good Experience”</p>
                                <h3 class=" mb-0">Venkatesh. P</h3>
                                <!-- <span class="fs-sm fw-light ">Developer</span> -->
                            </div>
                            <div class="ur-feedback-single">
                                <p class="fw-light mb-4">“The best temple jewelry store. Quality is at its best with
                                    nominal charges. I have received very good response from them. I have loved the
                                    jewelry from SR temple jewelry store. Go ahead with them and you will never regret”
                                </p>
                                <h3 class=" mb-0">Archana H.R </h3>
                                <!-- <span class="fs-sm fw-light ">Manager</span> -->
                            </div>
                            <div class="ur-feedback-single">
                                <p class="fw-light mb-4">“Very Happy with the design & price they quote, service they
                                    render, Overall very satisfied.”</p>
                                <h3 class=" mb-0">Kalamandalam Lekha </h3>
                                <!-- <span class="fs-sm fw-light ">Manager</span> -->
                            </div>
                            <div class="ur-feedback-single">
                                <p class="fw-light mb-4">“Best customer service. Beautiful and authentic ornaments.
                                    Delivered on time.”</p>
                                <h3 class=" mb-0">Udhayasree Panicker </h3>
                                <!-- <span class="fs-sm fw-light ">Manager</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-1 order-lg-2" style="display: none;">
                    <div class="feedback-clients-thumbail-slider slider-spacing">
                        <div class="single-item">
                            <img src="assets/images/clients/client-lg-1.jpg" alt="not found" class="img-fluid">
                        </div>
                        <div class="single-item">
                            <img src="assets/images/clients/client-lg-2.jpg" alt="not found" class="img-fluid">
                        </div>
                        <div class="single-item">
                            <img src="assets/images/clients/client-lg-3.jpg" alt="not found" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feedback section end-->

   

    <!--devider-->
    <span class="theme-devider"></span>

    <!--blog section start-->
    <section class="ptb-120 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center">
                        <h2 class="h1 fw-normal mb-4">From Our Blog</h2>
                        <h2 class="h1 mb-50" style="color:black">Services we offering</h2>
                        <!-- <p class="mb-60 fw-light">Services we are offering.</p> -->
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <article class="ur-blog-card position-relative">
                        <!-- <span class="date py-2 px-4 fs-sm  primary-bg-color position-absolute z-1 start-0 top-0">22 SEP,
                            2022</span> -->
                        <div class="feature-image overflow-hidden">
                            <a href="#"><img src="assets/images/blog/blog-1.jpg" alt="feature image"
                                    class="img-fluid"></a>
                        </div>
                        <div class="card-content mt-32">
                            <span class="fs-sm fw-bold" style="font-size: 20px;">Repair & Repolishing</span>
                            <a href="#">
                                <h4 class="fw-normal my-3" style="color: #f36a07;">15 days Time duration</h4>
                            </a>
                            <p class="mb-4 fw-light">Pearl Change, Stone Fixing, Gold Polishing, Thread Changing, Etc.,
                            </p>
                            <!-- <a href="#" class="explore-btn">Read More</a> -->
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-md-6">
                    <article class="ur-blog-card position-relative">
                        <!-- <span class="date py-2 px-4 fs-sm  primary-bg-color position-absolute z-1 start-0 top-0">21 SEP,
                            2022</span> -->
                        <div class="feature-image overflow-hidden">
                            <a href="#"><img src="assets/images/blog/blog-2.jpg" alt="feature image"
                                    class="img-fluid"></a>
                        </div>
                        <div class="card-content mt-32">
                            <span class="fs-sm fw-bold" style="font-size: 20px;">Customised Temple Jewellery</span>
                            <a href="#">
                                <h4 class="fw-normal my-3" style="color: #f36a07;">Made on Order basis</h4>
                            </a>
                            <p class="mb-4 fw-light">We will customise the Stone Colour, Design, Pearls,Gold balls,
                                Etc., </p>
                            <!-- <a href="#" class="explore-btn">Read More</a> -->
                        </div>
                    </article>
                </div>
                <div class="col-xl-4 col-md-6">
                    <article class="ur-blog-card position-relative">
                        <!-- <span class="date py-2 px-4 fs-sm  primary-bg-color position-absolute z-1 start-0 top-0">18 SEP,
                            2022</span> -->
                        <div class="feature-image overflow-hidden">
                            <a href="#"><img src="assets/images/blog/blog-3.jpg" alt="feature image"
                                    class="img-fluid"></a>
                        </div>
                        <div class="card-content mt-32">
                            <span class="fs-sm fw-bold" style="font-size: 20px;">Gift wrapping</span>
                            <a href="#">
                                <h4 class="fw-normal my-3" style="color: #f36a07;">To your loved ones</h4>
                            </a>
                            <p class="mb-4 fw-light">Wrapping gift with attractive paper and perhaps with ribbons &
                                Custom message card on request. </p>
                            <!-- <a href="#" class="explore-btn">Read More</a> -->
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--blog section end-->
    @endsection
