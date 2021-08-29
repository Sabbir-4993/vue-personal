@extends('Frontend.layouts.master')

@section('content')
    <div class="bodyContent">
        <div class="pageCointainer">
            <section class="comonSection thumbSection">
                <ul id="folioGallery">
                    <li data-thumb="{{asset('frontend/assets/images/folio/13.jpg')}}" data-src="{{asset('frontend/assets/images/folio/13.jpg')}}">
                        <div class="folioThumb">
                            <img src="{{asset('frontend/assets/images/folio/13.jpg')}}" alt=""/>
                        </div>
                    </li>
                    <li data-thumb="{{asset('frontend/assets/images/folio/14.jpg')}}" data-src="{{asset('frontend/assets/images/folio/14.jpg')}}">
                        <div class="folioThumb">
                            <img src="{{asset('frontend/assets/images/folio/14.jpg')}}" alt=""/>
                        </div>
                    </li>
                    <li data-thumb="{{asset('frontend/assets/images/folio/15.jpg')}}" data-src="{{asset('frontend/assets/images/folio/15.jpg')}}">
                        <div class="folioThumb">
                            <img src="{{asset('frontend/assets/images/folio/15.jpg')}}" alt=""/>
                        </div>
                    </li>
                </ul>
            </section>
            <section class="comonSection folioContentSection">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="folioTitle">Artwork Design</h3>
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="pageContent">
                                        <p class="mb14">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur excepteur.
                                        </p>
                                        <p class="mb22">
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                            est laborum.
                                        </p>
                                        <p>
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-5 folioMeta">
                                    <div class="icon_box_01">
                                        <i class="icon icon-User"></i>
                                        <h3>Client</h3>
                                        <p>John Doe</p>
                                    </div>
                                    <div class="icon_box_01">
                                        <i class="icon icon-Calculator"></i>
                                        <h3>Date</h3>
                                        <p>20th March, 2021</p>
                                    </div>
                                    <div class="icon_box_01">
                                        <i class="icon icon-Settings"></i>
                                        <h3>Tools</h3>
                                        <p>Photoshop, Netbeans</p>
                                    </div>
                                    <div class="icon_box_01">
                                        <i class="icon icon-Settings"></i>
                                        <h3>Category</h3>
                                        <p><a href="portfolio.html">Graphic</a>, <a href="portfolio.html">Development</a></p>
                                    </div>
                                    <div class="fmfooter">
                                        <a href="javascript:void(0);" class="btt_link"><i class="icon icon-WorldWide"></i><span>View Project</span></a>
                                        <div class="sicmr_social">
                                            <a href="https://facebook.com/" target="_blank"><i class="icofont-facebook"></i></a>
                                            <a href="https://twitter.com/" target="_blank"><i class="icofont-twitter"></i></a>
                                            <a href="https://vimeo.com/" target="_blank"><i class="icofont-vimeo"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt52">
                        <div class="col-lg-12">
                            <h2 class="sectionTitle">The Challenges</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="icon_box_4">
                                <i>01</i>
                                <h3>Illustration</h3>
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon_box_4">
                                <i>02</i>
                                <h3>User Experience</h3>
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="icon_box_4">
                                <i>03</i>
                                <h3>Unit Test</h3>
                                <p>
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt52 mb30">
                        <div class="col-lg-12">
                            <h2 class="sectionTitle mb27">Client Review</h2>
                        </div>
                        <div class="col-lg-12">
                            <div class="clientReview">
                                <p>
                                    I would recommend "Linda M. Bellamy" to anyone who wants to have a creative portfolio sorting application, either design studio or freelancer.
                                </p>
                                <cite>-- John Doe</cite>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
