@include('Frontend.layouts.header')
<body class="light">

<!-- Preloader Start -->
{{--<div class="preloader">--}}
{{--    <div class="preloader-inner">--}}
{{--        <div class="preloader-box">--}}
{{--            <div class="letter">L</div>--}}
{{--            <div class="letter">O</div>--}}
{{--            <div class="letter">A</div>--}}
{{--            <div class="letter">D</div>--}}
{{--            <div class="letter">I</div>--}}
{{--            <div class="letter">N</div>--}}
{{--            <div class="letter">G</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Preloader End -->

<div class="container">
    <div class="row">
        <div class="col-lg-4 profileColumn">
            @include('Frontend.layouts.profileSidebar')
        </div>
        <div class="col-lg-8 contentColumn">
            <header class="header clearfix">
                <a href="javascript:void(0)" class="menu_btn"><i class="icofont-navigation-menu"></i>Menu</a>
                <nav class="mainMenu">
                    <ul class="clearfix">
                        <li class="active"><a href="index.html"><i class="icon icon-House"></i><span>Home</span></a></li>
                        <li><a href="resume.html"><i class="icon icon-User"></i><span>Resume</span></a></li>
                        <li><a href="portfolio.html"><i class="icon icon-Bulb"></i><span>Portfolio</span></a></li>
                        <li><a href="blog.html"><i class="icon icon-ClipboardText"></i><span>Blog</span></a></li>
                        <li><a href="contact.html"><i class="icon icon-Imbox"></i><span>Contact</span></a></li>
                    </ul>
                </nav>
                <a href="#" class="sidebarToggler"><span><span></span><span></span><span></span></span></a>
            </header>
            <div class="sidebar">
                <a href="javascript:void(0);" class="widget_closer"><i class="icofont-close-line"></i></a>
                <div class="widget widget-search">
                    <h3 class="widget_title">Search</h3>
                    <form method="post" action="#" class="search_form">
                        <input type="text" name="s" placeholder="Enter Keword">
                        <button type="submit"><i class="icon icon-Search"></i></button>
                    </form>
                </div>
                <div class="widget widget-search">
                    <h3 class="widget_title">Categories</h3>
                    <ul>
                        <li><a href="blog.html">Web</a>(18)</li>
                        <li><a href="blog.html">Startup</a>(11)</li>
                        <li><a href="blog.html">Branding</a>(17)</li>
                        <li><a href="blog.html">UI UX</a>(23)</li>
                        <li><a href="blog.html">Agency</a>(19)</li>
                    </ul>
                </div>
                <div class="widget">
                    <h3 class="widget_title">
                        Recent Posts
                    </h3>
                    <div class="singleRecent">
                        <img src="{{asset('frontend/assets/images/blog/7.jpg')}}" alt="">
                        <span>01 Apr, 2021</span>
                        <a href="single_blog.html">
                            Create your next web site with Unity.
                        </a>
                    </div>
                    <div class="singleRecent">
                        <img src="{{asset('frontend/assets/images/blog/8.jpg')}}" alt="">
                        <span>31 Mar, 2021</span>
                        <a href="single_blog.html">
                            Truly unique hundreds of elements.
                        </a>
                    </div>
                    <div class="singleRecent">
                        <img src="{{asset('frontend/assets/images/blog/9.jpg')}}" alt="">
                        <span>26 Mar, 2021</span>
                        <a href="single_blog.html">
                            Easily create unlimited amount of custom.
                        </a>
                    </div>
                </div>
                <div class="widget">
                    <h3 class="widget_title">Tags</h3>
                    <div class="tabclouds">
                        <a href="blog.html">Web Design</a>
                        <a href="blog.html">Development</a>
                        <a href="blog.html">CSS</a>
                        <a href="blog.html">Studio</a>
                        <a href="blog.html">Award</a>
                        <a href="blog.html">Mobile</a>
                        <a href="blog.html">IOS</a>
                        <a href="blog.html">IOS</a>
                        <a href="blog.html">UI / UX</a>
                        <a href="blog.html">Portfolio</a>
                    </div>
                </div>
            </div>
            <div class="sidebarOverlay"></div>
            <div class="bodyContent">
                <div class="pageCointainer">
                    <section class="comonSection aboutSection">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="sectionTitle">About Info</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="icon_box_01">
                                                <i class="icon icon-User"></i>
                                                <h3>My Name</h3>
                                                <p>K. Melissa Caroll</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_01">
                                                <i class="icon icon-Calculator"></i>
                                                <h3>My Age</h3>
                                                <p>32 Years 241 Days</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_01">
                                                <i class="icon icon-Mail"></i>
                                                <h3>Email Address</h3>
                                                <p>k.melissa@caroll.me</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_01">
                                                <i class="icon icon-Phone"></i>
                                                <h3>Phone Number</h3>
                                                <p>1.800.987.6987</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="icon_box_01">
                                                <i class="icon icon-Pointer"></i>
                                                <h3>Address</h3>
                                                <p><a href="https://www.google.com/maps/place/189+Lodge+Ave,+Dagenham+RM8+2HQ,+UK/@51.5438977,0.1111455,17z/data=!3m1!4b1!4m5!3m4!1s0x47d8a5c65f86bfd1:0x9f6ccecbee08b740!8m2!3d51.5438944!4d0.1133342" target="_blank">Click Here to View Map.</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt30">
                                <div class="col-lg-12">
                                    <h2 class="sectionTitle mb22">Short Bio</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="abContent">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Quis ipsum suspendisse ultrices gravida risus commodo. Quis ipsum suspendisse ultrices gravida.
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                            <a href="#" class="fw_500">ut labore et dolore magna</a> aliqua.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="abContent">
                                        <p class="mb27">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <img class="signImg" src="{{asset('frontend/assets/images/home_01/3.png')}}" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt52">
                                <div class="col-lg-12">
                                    <h2 class="sectionTitle">What I Do?</h2>
                                </div>
                            </div>
                            <div class="row itemMb30">
                                <div class="col-lg-4">
                                    <div class="icon_box_02">
                                        <div class="i_div">
                                            <i class="icon icon-Settings"></i>
                                        </div>
                                        <h3><a href="javascript:void(0);">Web Development</a></h3>
                                        <h5>from scratch</h5>
                                        <p>
                                            Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon_box_02">
                                        <div class="i_div">
                                            <i class="icon icon-Pen"></i>
                                        </div>
                                        <h3><a href="javascript:void(0);">UX recherche</a></h3>
                                        <h5>data collection</h5>
                                        <p>
                                            Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon_box_02">
                                        <div class="i_div">
                                            <i class="icon icon-Layers"></i>
                                        </div>
                                        <h3><a href="javascript:void(0);">UI design</a></h3>
                                        <h5>creativ design</h5>
                                        <p>
                                            Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon_box_02">
                                        <div class="i_div">
                                            <i class="icon icon-Phone"></i>
                                        </div>
                                        <h3><a href="javascript:void(0);">Application</a></h3>
                                        <h5>stand alone</h5>
                                        <p>
                                            Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon_box_02">
                                        <div class="i_div">
                                            <i class="icon icon-Share"></i>
                                        </div>
                                        <h3><a href="javascript:void(0);">Social Media</a></h3>
                                        <h5>digital product</h5>
                                        <p>
                                            Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon_box_02">
                                        <div class="i_div">
                                            <i class="icon icon-ChartUp"></i>
                                        </div>
                                        <h3><a href="javascript:void(0);">Search Engine</a></h3>
                                        <h5>page rank</h5>
                                        <p>
                                            Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt30">
                                <div class="col-lg-12">
                                    <h2 class="sectionTitle">What They Says?</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="testimonialSlider owl-carousel">
                                        <div class="singleTestimonial">
                                            <div class="testiImg">
                                                <img src="{{asset('frontend/assets/images/author/1.jpg')}}" alt="">
                                                <span></span>
                                            </div>
                                            <div class="testicon">
                                                <p>
                                                    They'll have to make the best of things its an uphill climb. Said Californ'y is the place you ought
                                                    to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin' pools movie stars.
                                                    Maybe you and me were never meant to be.
                                                </p>
                                                <div class="tesAuthor"><h5>Edward Johnson,</h5> <h6>themewar.com</h6></div>
                                            </div>
                                        </div>
                                        <div class="singleTestimonial">
                                            <div class="testiImg">
                                                <img src="{{asset('frontend/assets/images/author/2.jpg')}}" alt="">
                                                <span></span>
                                            </div>
                                            <div class="testicon">
                                                <p>
                                                    They'll have to make the best of things its an uphill climb. Said Californ'y is the place you ought
                                                    to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin' pools movie stars.
                                                    Maybe you and me were never meant to be.
                                                </p>
                                                <div class="tesAuthor"><h5>Mosharof Khondoker,</h5> <h6>themewar.com</h6></div>
                                            </div>
                                        </div>
                                        <div class="singleTestimonial">
                                            <div class="testiImg">
                                                <img src="{{asset('frontend/assets/images/author/3.jpg')}}" alt="">
                                                <span></span>
                                            </div>
                                            <div class="testicon">
                                                <p>
                                                    They'll have to make the best of things its an uphill climb. Said Californ'y is the place you ought
                                                    to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin' pools movie stars.
                                                    Maybe you and me were never meant to be.
                                                </p>
                                                <div class="tesAuthor"><h5>Sara Ferdoush,</h5> <h6>themewar.com</h6></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt60">
                                <div class="col-lg-12">
                                    <h2 class="sectionTitle">Fair Price</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="pricingTable text-center">
                                        <i class="icon icon-Car"></i>
                                        <h5>Starter Package</h5>
                                        <p>
                                            Suitable for small business or Organizations.
                                        </p>
                                        <h2>$27.00</h2>
                                        <h6>per project</h6>
                                        <a href="contact.html" class="btt_link"><i class="icon icon-OpenedLock"></i><span>Let's Start</span></a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricingTable text-center">
                                        <i class="icon icon-Truck"></i>
                                        <h5>Business Package</h5>
                                        <p>
                                            Suitable for medium business or Organizations.
                                        </p>
                                        <h2>$47.00</h2>
                                        <h6>per project</h6>
                                        <a href="contact.html" class="btt_link"><i class="icon icon-OpenedLock"></i><span>Let's Start</span></a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pricingTable text-center">
                                        <i class="icon icon-BigTruck"></i>
                                        <h5>Pro Package</h5>
                                        <p>
                                            Suitable for any business or Organizations.
                                        </p>
                                        <h2>$97.00</h2>
                                        <h6>per project</h6>
                                        <a href="contact.html" class="btt_link"><i class="icon icon-OpenedLock"></i><span>Let's Start</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt60">
                                <div class="col-lg-5">
                                    <h2 class="sectionTitle">Love To</h2>
                                    <div class="singleInt">
                                        <i class="interest-badminton"></i>
                                        <h3>Badminton</h3>
                                    </div>
                                    <div class="singleInt">
                                        <i class="interest-knight"></i>
                                        <h3>Chase</h3>
                                    </div>
                                    <div class="singleInt">
                                        <i class="interest-basketball"></i>
                                        <h3>Basket Ball</h3>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <h2 class="sectionTitle">Languages</h2>
                                    <div class="languageDiv">
                                        <div class="ldInner profLevel7">
                                            <h5>English</h5>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <i>7/10</i>
                                        </div>
                                        <div class="ldInner profLevel6">
                                            <h5>German</h5>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <i>6/10</i>
                                        </div>
                                        <div class="ldInner profLevel4">
                                            <h5>Spanish</h5>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <i>4/10</i>
                                        </div>
                                        <div class="ldInner profLevel9">
                                            <h5>Bangla</h5>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <i>9/10</i>
                                        </div>
                                        <div class="ldInner profLevel7">
                                            <h5>Hindi</h5>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <span></span><span></span><span></span><span></span><span></span>
                                            <i>7/10</i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt30">
                                <div class="col-lg-12">
                                    <div class="clientSlider owl-carousel">
                                        <div class="sliderItem">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('frontend/assets/images/client/8.png')}}" alt="Client"/>
                                            </a>
                                        </div>
                                        <div class="sliderItem">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('frontend/assets/images/client/9.png')}}" alt="Client"/>
                                            </a>
                                        </div>
                                        <div class="sliderItem">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('frontend/assets/images/client/10.png')}}" alt="Client"/>
                                            </a>
                                        </div>
                                        <div class="sliderItem">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('frontend/assets/images/client/11.png')}}" alt="Client"/>
                                            </a>
                                        </div>
                                        <div class="sliderItem">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('frontend/assets/images/client/12.png')}}" alt="Client"/>
                                            </a>
                                        </div>
                                        <div class="sliderItem">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('frontend/assets/images/client/13.png')}}" alt="Client"/>
                                            </a>
                                        </div>
                                        <div class="sliderItem">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('frontend/assets/images/client/14.png')}}" alt="Client"/>
                                            </a>
                                        </div>
                                        <div class="sliderItem">
                                            <a href="javascript:void(0);">
                                                <img src="{{asset('frontend/assets/images/client/15.png')}}" alt="Client"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt60">
                                <div class="col-lg-12">
                                    <h2 class="sectionTitle">Interesting Facts</h2>
                                </div>
                            </div>
                            <div class="row mb30">
                                <div class="col-lg-4">
                                    <div class="icon_box_03 text-center hasCounter" data-count="10">
                                        <div class="icon_div">
                                            <i><span class="counter">10</span>+</i>
                                        </div>
                                        <h5>Years Experience</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon_box_03 text-center hasCounter" data-count="198">
                                        <div class="icon_div">
                                            <i><span class="counter">198</span>+</i>
                                        </div>
                                        <h5>Projects Done</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="icon_box_03 text-center hasCounter" data-count="2">
                                        <div class="icon_div">
                                            <i><span class="counter">2</span>K+</i>
                                        </div>
                                        <h5>Happy Customers</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="copyRight">&copy; 2021 All Rights Reserved By <a href="http://themewar.com" target="_blank">ThemeWar</a></div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Frontend.layouts.footer')

