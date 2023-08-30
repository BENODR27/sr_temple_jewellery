      <!--header section start-->
      <header class="ur_header_section primary-bg-color header-sticky">
        <div class="topbar py-2 bottom-border d-none d-lg-block">
            <div class="container-large">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="topbar-info d-flex align-items-center gap-48 flex-wrap">
                            <span class=" item-single">100% Quality</span>
                            <span class=" item-single">World Wide Shipping</span>
                            <span class=" item-single">GI Tag Product</span>
                            <!-- <span class=" item-single">Authorised Jewellery Maker</span> -->
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4">
                        <div class="d-flex align-items-center justify-content-end gap-48 topbar-info flex-wrap">
                            <div class="ur-header-select item-single">
                                <select>
                                    <option>EN</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-wrapper">
            <div class="container-large">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-6">
                        <a href="index.html" class="logo-white"><img src="assets/images/logo.png" alt="logo"
                                class="img-fluid logo"></a>
                    </div>
                    <div class="col-xxl-7 col-xl-8 d-none d-xl-block">
                        <nav class="ur-navmenu">
                            <ul>
                                <li><a href="/">HOME</a></li>
                                <li><a href="{{route('aboutus')}}">ABOUTUS</a></li>
                                <li class="has-submenu"><a href="javascript:void(0)">PRODUCTS</a>
                                    <ul class="submenu-wrapper">
                                        <li class="has-submenu"><a href="javascript:void(0)">Headset</a>
                                            <ul class="submenu-wrapper">
                                                <li><a href="{{route('products')}}">Single Chutti</a></li>
                                                <li><a href="{{route('products')}}">Full Chutti</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('products')}}">Earings</a></li>
                                        <li><a href="shop.html">Necklaces & Choker</a></li>
                                        <li><a href="shop.html">Long Harams</a></li>
                                        <li><a href="shop.html">Ottiyanam(Belt)</a></li>
                                        <li><a href="shop.html">Fancy chokers & Earings</a></li>
                                        <li><a href="shop.html">Bangles</a></li>
                                        <li><a href="shop.html">Others</a></li>
                                    </ul>
                                </li>
                                <li><a href="/#contactfooter">CONTACT US</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-6">
                        <div class="ur-header-right d-flex align-items-center justify-content-end">
                            <div class="ur-user-links position-relative">
                                <button type="button" class="user-btn">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </button>
                                <ul class="position-absolute user-menu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="signup.html">Sign Up</a></li>
                                    <li><a href="login.html">My Account</a></li>
                                </ul>
                            </div>
                            
                            <div class="header-search d-none d-sm-block">
                                <div class="dropdown">
                                    <button class="search-btn" data-bs-toggle="dropdown"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <form class="search-form d-flex align-items-center gap-2">
                                            <input type="text" placeholder="Search..."
                                                class="theme-input bg-transparent">
                                            <button type="submit" class="submit-btn">Go</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-sm-none">
                                <a href="javascript:void(0)" class="header-link header-search-open"><i
                                        class="fa-solid fa-magnifying-glass"></i></a>
                            </div>
                            <div class="header-toggle">
                                <button type="button"
                                    class="ur3-header-toggle offcanvus-toggle d-none d-xl-inline-block">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <button type="button" class="ur3-header-toggle mobile-menu-toggle d-xl-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header section end-->

    <!--offcanvus start-->
    <div class="offcanvus-box position-fixed bg-white">
        <a href="javascript:void(0)" class="offcanvus-close"><i class="fa-solid fa-xmark"></i></a>
        <div class="content-top mb-100">
            <!-- <a href="index.html" class="offcanvus-logo"><img src="assets/images/logo.png" alt="logo "></a> -->
            <p class="mb-0 mt-32 fw-light">SR Temple jewellery
            </p>
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
                <!-- <input type="email" placeholder="Enter your e-mail" class="theme-input"> -->
                <button type="submit" class="template-btn primary-btn mt-3 w-100"><span>Enquiry Via Whatsapp</span></button>
            </form>
        </div>
        <div class="offcanvus-bottom d-flex align-items-center justify-content-between">
            <div class="language-switcher">
                <div class="dropdown">
                    <button type="button" data-bs-toggle="dropdown"><img src="assets/images/icons/flag-usa.png"
                            alt="flag">English <span><i class="fas fa-angle-down"></i></span></button>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="#"><img src="assets/images/icons/flag-bd.jpg" alt="flag">Bangla</a></li>
                        <li><a href="#"><img src="assets/images/icons/flag-india.jpg" alt="flag">Hindi</a></li> -->
                    </ul>
                </div>
            </div>
            <!-- <div class="currency-switcher">
                <select>
                    <option>USD</option>
                    <option>BDT</option>
                    <option>CNY</option>
                </select>
            </div> -->
            <!-- <div class="user-links">
                <a href="login.html"><span class="me-2"><i class="fa-regular fa-user"></i></span>Account</a>
            </div> -->
        </div>
    </div>
    <!--offcanvus end-->

    <!--mobile menu start-->
    <div class="mobile-menu">
        <a href="javascript:void(0)" class="close"><i class="fas fa-xmark"></i></a>
        <a href="#" class="logo"><img src="assets/images/logo-black.jpg" alt="logo" class="img-fluid"></a>
        <ul class="mobile-nav-menu">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('aboutus')}}">AboutUs</a></li>
            <li class="has-submenu"><a href="javascript:void(0)">Products</a>
                <i class="fas fa-angle-down"></i>
                <ul class="submenu-wrapper">
                    <li class="has-submenu"><a href="javascript:void(0)">Headset</a>
                        <i class="fas fa-angle-down"></i>
                        <ul class="submenu-wrapper">
                            <li><a href="{{route('products')}}">Single Chutti</a></li>
                            <li><a href="{{route('products')}}">Full Chutti</a></li>
                        </ul>
                    </li>
                    <li><a href="shop.html">Earings</a></li>
                    <li><a href="shop.html">Necklaces & Choker</a></li>
                    <li><a href="shop.html">Long Harams</a></li>
                    <li><a href="shop.html">Ottiyanam(Belt)</a></li>
                    <li><a href="shop.html">Fancy chokers & Earings</a></li>
                    <li><a href="shop.html">Bangles</a></li>
                    <li><a href="shop.html">Others</a></li>
                </ul>
            </li>
            <li><a href="/#contactfooter">ContactUs</a></li>


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