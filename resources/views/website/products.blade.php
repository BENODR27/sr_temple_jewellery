@extends('layouts.websitelayout')

@section('content')
    <!--offcanvus start-->
    <div class="offcanvus-box position-fixed bg-white">
        <a href="javascript:void(0)" class="offcanvus-close"><i class="fa-solid fa-xmark"></i></a>
        <div class="content-top mb-100">
            <a href="index.html" class="offcanvus-logo"><img src="assets/images/logo-black.png" alt="logo"></a>
            <p class="mb-0 mt-32 fw-light">Distrak Street 2SK Line, Germanygalore@inside-support.com (+125) 2156-2145</p>
        </div>
        <div class="offcanvus-gallery d-flex align-items-center flex-wrap">
            <a href="#"><img src="assets/images/gallery/1.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/2.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/3.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/4.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/5.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/6.jpg" alt="not found"></a>
        </div>
        <div class="offcanvus-newsletter">
            <h4 class="mb-4 text-center">Newsletter</h4>
            <form action="#">
                <input type="email" placeholder="Enter your e-mail" class="theme-input">
                <button type="submit" class="template-btn primary-btn mt-3 w-100"><span>SUBSCRIBE NOW</span></button>
            </form>
        </div>
        <div class="offcanvus-bottom d-flex align-items-center justify-content-between">
            <div class="language-switcher">
                <div class="dropdown">
                    <button type="button" data-bs-toggle="dropdown"><img src="assets/images/icons/flag-usa.png" alt="flag">English <span><i class="fas fa-angle-down"></i></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#"><img src="assets/images/icons/flag-bd.jpg" alt="flag">Bangla</a></li>
                        <li><a href="#"><img src="assets/images/icons/flag-india.jpg" alt="flag">Hindi</a></li>
                    </ul>
                </div>
            </div>
            <div class="currency-switcher">
                <select>
                    <option>USD</option>
                    <option>BDT</option>
                    <option>CNY</option>
                </select>
            </div>
            <div class="user-links">
                <a href="login.html"><span class="me-2"><i class="fa-regular fa-user"></i></span>Account</a>
            </div>
        </div>
    </div>
    <!--offcanvus end-->

    <!--mobile menu start-->
    <div class="mobile-menu">
        <a href="javascript:void(0)" class="close"><i class="fas fa-xmark"></i></a>
        <a href="#" class="logo"><img src="assets/images/logo-black.jpg" alt="logo" class="img-fluid"></a>
        <ul class="mobile-nav-menu">
            <li class="has-submenu">
                <a href="javascript:void(0)">Home</a>
                <i class="fas fa-angle-down"></i>
                <ul class="submenu-wrapper">
                    <li><a href="index.html">Home Page 1</a></li>
                    <li><a href="index-2.html">Home Page 2</a></li>
                    <li><a href="index-3.html">Home Page 3</a></li>
                </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li class="has-submenu"><a href="javascript:void(0)">Pages</a>
                <i class="fas fa-angle-down"></i>
                <ul class="submenu-wrapper">
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="order-tracking.html">Order Tracking</a></li>
                </ul>

            </li>
            <li class="has-submenu"><a href="javascript:void(0)">Blog</a>
                <i class="fas fa-angle-down"></i>
                <ul class="submenu-wrapper">
                    <li><a href="blog.html">Blog List</a></li>
                    <li><a href="blog-single.html">Blog Details</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="javascript:void(0)">Shop</a>
                <i class="fas fa-angle-down"></i>
                <ul class="submenu-wrapper">
                    <li><a href="shop.html">Shop Grid</a></li>
                    <li><a href="shop-list.html">Shop List</a></li>
                    <li><a href="product-details.html">Product Details</a></li>
                    <li><a href="product-details-2.html">Product Details V2</a></li>
                    <li><a href="product-details-3.html">Product Details V3</a></li>
                </ul>
            </li>
            <li><a href="wishlist.html">Wishlist</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <form class="mobile-search d-flex align-items-center mt-5" action="#">
            <input type="text" placeholder="Search..." class="theme-input">
            <button type="submit" class="template-btn primary-btn"><span>Go</span></button>
        </form>
    </div>
    <!--mobile menu end-->

    <!--search form start-->
    <div class="ur-search-form">
        <a href="#" class="close"><i class="fas fa-xmark"></i></a>
        <form action="#" class="d-flex align-items-center">
            <input type="text" placeholder="Search...." class="theme-input">
            <button type="submit" class="submit-btn">Go</button>
        </form>
    </div>
    <!--search form end-->

    <!--cart drawer start-->
    <div class="cart-drawer position-fixed">
        <div class="drawer-close d-flex align-items-center justify-content-between position-absolute start-0 top-0 w-100 px-4 py-4 border-bottom">
            <h6 class="mb-0">Shopping Cart</h6>
            <a href="javascript:void(0)" class="drawer-close"><i class="fas fa-xmark"></i></a>
        </div>
        <ul class="cart-list">
            <li class="d-flex align-items-center gap-3">
                <div class="feature-image light-bg">
                    <a href="product-details.html"><img src="assets/images/products/product-1.png" alt="feature image" class="img-fluid"></a>
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
                    <a href="product-details.html"><img src="assets/images/products/product-2.png" alt="feature image" class="img-fluid"></a>
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
                    <a href="product-details.html"><img src="assets/images/products/product-3.png" alt="feature image" class="img-fluid"></a>
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
            <a href="cart.html" class="template-btn primary-btn text-uppercase fw-medium w-100 text-center mt-4"><span>View Cart & Check Out</span></a>
        </div>
    </div>
    <!--cart drawer end-->

        <!--latest arrival start-->
        <section class="ur-latest-arrival ptb-120 bg-white">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-6 text-center col-sm-12" style="position:absolute;right:30px;">
                        <a href="shop-list.html" class="template-btn primary-btn"><span>Enquiry Via Whatsapp</span></a>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="text-center">
                            <h2 class="h1 mb-50" style="color:black">{{$categoryName}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    @if(count($images)!=0)
                    @foreach ($images as $image)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="ur-product-card position-relative card-sm-small">
                            <div
                                class="feature-image d-flex align-items-cneter justify-content-center light-bg position-relative">
                                <a href="product-details.html"><img src="{{ asset('storage/product/images/' . $image->imageName) }}" alt="{{$image->imageTitle}}"
                                        class="img-fluid"></a>
                            </div>
                            <div class="mt-4">
                                <a href="shop-list.html" class="secondary-text-color text-uppercase">{{$image->imageTitle}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <h1 class="row g-4 justify-content-center p-5" style="color:black !important">
                            COMMING SOON
                        </h1>
                    @endif
                </div>
            </div>
        </section>

        <div style="position:absolute;right:30px;margin-top:-50px;">
            @if(count($images)!=0)
            {{ $images->appends(['id' => $images[0]->categoryId])->links('pagination::bootstrap-4') }}
            @endif
        </div>


<style>
    
</style>
    <!--scroll top button start-->
    <button type="button" class="scroll-top-btn"><i class="fa-solid fa-hand-pointer"></i></button>
    <!--scroll top button end-->
@endsection