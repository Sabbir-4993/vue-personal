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
            @include('Frontend.layouts.navbar')

            @include('Frontend.layouts.rightsidebar')

            <div class="sidebarOverlay"></div>
            <div class="bodyContent">
                @yield('content')
            </div>
        </div>
    </div>
</div>

@include('Frontend.layouts.footer')

