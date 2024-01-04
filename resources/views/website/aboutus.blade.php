@extends('layouts.websitelayout')

@section('content')
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

 

    <!--history section start-->
    <section class="company-history bg-white ptb-120 overflow-hidden">
        <div class="container">
            <div class="row g-5 g-lg-4 align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="image-wrapper">
                        <img src="assets/images/about/1.jpg" alt="not found" class="img-fluid">
                    </div>
                </div>
                <div class="ps-xl-5 col-xl-5 col-lg-6">
                    <div class="history-content" style="color: black;">
                        <h4 class="fw-light text-uppercase d-block mb-4" style="color: black;">About</h4>
                        <h2 class="display-4 mb-5" style="color: black;">SR Temple Jewellery</h2>
                        <p class="mb-2 fw-light">We SR Temple Jewellery (Proprietor) : S. Nagalingom (Ramesh Achari)
                            making Temple Jewellery for the past 30 Years.
                            We are manufacturing all type of antique orginal temple jewellery used for classical dancers
                            like Headset, Rakodi, Mattal, Earings, Jimky, Necklace, Long Chain, Pearl Chain,Ottiyanam
                            and other collections.</p>
                        <p class="mb-5 fw-light">We are specialist in making custom made temple jewellery for clients on
                            order basis.
                            We are authorised geographical indication & Handicrafts - Ministry of Textiles, Gov of India, jewellery maker.
                        </p>
                        <h5 class=" mb-5" style="color: black;">Registration No : AU/6999/GI/65/123</h5>
                        <a href="#contactfooter" class="template-btn primary-btn text-uppercase"><span>Contact
                                Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--history section end-->

    <!--video section start-->
    <div class="video-box position-relative z-1 overflow-hidden" data-background="assets/images/about/video-bg.jpg">
        <a href="https://www.youtube.com/watch?v=6WZOxnYi4Cs" data-fancybox class="template-video-btn"><i
                class="fas fa-play"></i></a>
    </div>
    <!--video sectin end-->

    <!-- mission area start-->
    <!-- <section class="ptb-120 bg-white overflow-hidden">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-xl-4 col-lg-6">
                    <div class="theme-card">
                        <div class="overflow-hidden">
                            <img src="assets/images/about/01.jpg" alt="not found" class="img-fluid">
                        </div>
                        <div class="mt-40">
                            <h3 class="mb-30" style="color:black">Our Mission</h3>
                            <p class="fw-light">Curasre potenti metus natoquefui sociis tempor facilisis tempus
                                ridiaclus porta porttitor feugiat consequat aliquet maecenas turpis.</p>
                            <p class="fw-light">Dui integer est lobortis fusce odio curabitur accumsan auctor
                                scelerisque</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-none d-xl-block">
                    <div class="feature-image about-mission-box">
                        <img src="assets/images/about/2.jpg" alt="not found" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div>
                        <h3 class="mb-32">Our Goals</h3>
                        <p class="fw-light mb-40">Metus natoquefui sociis tempor facili tempus ridiclus porta porttitor
                            feugiat consequat.</p>
                        <div class="accordion ur2-accordion" id="ur2_accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#acc_1" data-bs-toggle="collapse" class="collapsed">Providing Pure Grade
                                        Jewelry</a>
                                </div>
                                <div class="accordion-collapse collapse show" id="acc_1"
                                    data-bs-parent="#ur2_accordion">
                                    <div class="accordion-body px-0 pb-0">
                                        <p class="mb-0 fw-light mb-0">Lectus litra mollis eros sollicitudin massa
                                            dapibus ultrices per suscipit montes accumsan curabitur sed aliquam volutpat
                                            porta naquis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#acc_2" data-bs-toggle="collapse">Easy Customer Service Policy</a>
                                </div>
                                <div class="accordion-collapse collapse" id="acc_2" data-bs-parent="#ur2_accordion">
                                    <div class="accordion-body px-0 pb-0">
                                        <p class="mb-0 fw-light mb-0">Lectus litra mollis eros sollicitudin massa
                                            dapibus ultrices per suscipit montes accumsan curabitur sed aliquam volutpat
                                            porta naquis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    <a href="#acc_3" data-bs-toggle="collapse">Easy Customer Service Policy</a>
                                </div>
                                <div class="accordion-collapse collapse" id="acc_3" data-bs-parent="#ur2_accordion">
                                    <div class="accordion-body px-0 pb-0">
                                        <p class="mb-0 fw-light mb-0">Lectus litra mollis eros sollicitudin massa
                                            dapibus ultrices per suscipit montes accumsan curabitur sed aliquam volutpat
                                            porta naquis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- mission area end-->

    <section class="ur-cta-section position-relative z-1 ptb-120 overflow-hidden bg-white">
        <span class="bg-shape position-absolute z--1 light-bg"></span>
        <div class="container">
            <div class="row justify-content-center align-items-center g-5">
                <div class="col-xl-5 col-lg-5">
                    <div class="feature-image-wrapper">
                        <div class="cta-image position-relative">
                            <img src="assets/images/products/rings.jpg" alt="rings"
                                class="img-fluid feature-image wow fadeInUp" data-wow-duration="0.5s">
                            <img src="assets/images/shapes/shape-1.jpg" alt="shape"
                                class="position-absolute shape-image d-none d-xl-block wow fadeInUp"
                                data-wow-delay="0.3s">
                        </div>
                    </div>

                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-7 ps-xl-5">
                    <div class="ps-2 ur-cta-content">
                        <h2 class="display-3 mb-28 fw-dark text-color wow fadeInUp" data-wow-duration="0.5s">Antique<br>Temple
                            Jewellery</h2>
                        <h6 class="mb-50 fw-light text-color wow fadeInUp" data-wow-delay="0.3s"
                            data-wow-duration="0.5s">Today, “Temple Jewellery” made in Silver & covered with Gold leaf (24 k) &
                            dipped in gold, Generally follows the age - old method. The old process of making
                            the frames (now in silver), twisting the silver wire into designs, fixing the wax,
                            embedding the stones in it and covering the silver with repeated layers of gold leaf,
                            is still followed by the artisans.</h6>
                        <a href="{{route('products')}}" class="template-btn primary-btn wow fadeInUp" data-wow-delay="0.5s"
                            data-wow-duration="0.5s"><span>Discover More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--ab feature section start-->
    <section class="ab-feature-section primary-bg-color ptb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-center g-5">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="ab-feature-box text-center">
                        <span class="icon-wrapper">
                           <img src="assets/images/about/shipping.png" alt="" class="img-fluid" width="80" height="80">
                        </span>
                        <h6 class=" mt-4 mb-3">World Wide Shipping</h6>
                        <!-- <p class="mb-30 fw-light">Proin hac augue integer tempor porta fringilla sapien</p> -->
                        <!-- <a href="#" class="explore-btn">Learn More <span class="ms-2"><i
                                    class="fas fa-arrow-right"></i></span></a> -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="ab-feature-box text-center">
                        <span class="icon-wrapper">
                            <img src="assets/images/about/gitag.png" alt="" class="img-fluid" width="80" height="80">
                        </span>
                        <h6 class=" mt-4 mb-3">GI Tag Product</h6>
                        <!-- <p class="mb-30 fw-light">Proin hac augue integer tempor porta fringilla sapien</p>
                        <a href="#" class="explore-btn">Learn More <span class="ms-2"><i
                                    class="fas fa-arrow-right"></i></span></a> -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="ab-feature-box text-center">
                        <span class="icon-wrapper">
                            <img src="assets/images/about/jewellery_maker.png" alt="" class="img-fluid" width="80" height="80">
                        </span>
                        <h6 class=" mt-4 mb-3">Authorised Jewellery Maker</h6>
                        <!-- <p class="mb-30 fw-light">Proin hac augue integer tempor porta fringilla sapien</p>
                        <a href="#" class="explore-btn">Learn More <span class="ms-2"><i
                                    class="fas fa-arrow-right"></i></span></a> -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="ab-feature-box text-center">
                        <span class="icon-wrapper">
                            <img src="assets/images/about/quality.png" alt="" class="img-fluid" width="80" height="80">
                        </span>
                        <h6 class=" mt-4 mb-3">100% Quality
                        </h6>
                        <!-- <p class="mb-30 fw-light">Proin hac augue integer tempor porta fringilla sapien</p>
                        <a href="#" class="explore-btn">Learn More <span class="ms-2"><i
                                    class="fas fa-arrow-right"></i></span></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ab feature section end-->

    <!--team section start-->
    <!-- <section class="team-section ptb-120 bg-white overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center">
                        <span class="fs-sm text-uppercase secondary-text-color">Making Everyday Special</span>
                        <h2 class="h1 mt-4 mb-60">Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-5 g-md-4">
                <div class="col-lg-4 col-md-6">
                    <div class="ur-team-card">
                        <div class="position-relative overflow-hidden">
                            <img src="assets/images/about/team-1.jpg" alt="team" class="img-fluid">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="member-info mt-32">
                            <h4 class="mb-2">David Smith</h4>
                            <span class="fw-light">Chief Creative</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ur-team-card">
                        <div class="position-relative overflow-hidden">
                            <img src="assets/images/about/team-2.jpg" alt="team" class="img-fluid">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="member-info mt-32">
                            <h4 class="mb-2">Zarat Martin</h4>
                            <span class="fw-light">Marketing Manger</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ur-team-card">
                        <div class="position-relative overflow-hidden">
                            <img src="assets/images/about/team-3.jpg" alt="team" class="img-fluid">
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="member-info mt-32">
                            <h4 class="mb-2">Andrew Dicaot</h4>
                            <span class="fw-light">UI/UX Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--team section end-->

    <!--feedback section start-->
    <section class="ur2-feedback-section ptb-120 overflow-hidden"
        data-background="assets/images/banner/light-background.jpg">
        <div class="ur2-feedback-slider slider-spacing px-3" >
            @foreach ($testimonials as $item)
            <div class="ur2-feedback-single text-center">
                <img src="assets/images/icons/quote-icon.png" alt="quote icon" class="img-fluid d-inline-block">
                <h4 class="mb-40 mt-3" style="color: black;">“{{$item->customerNote}}”</h4>
                <span class="text-uppercase secondary-text-color">{{$item->customerName}}</span>
            </div>
          @endforeach
          
            
        </div>
    </section>
    <!--feedback section end-->



    <!--scroll top button start-->
    <button type="button" class="scroll-top-btn"><i class="fa-solid fa-hand-pointer"></i></button>
    <!--scroll top button end-->


    @endsection
