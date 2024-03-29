@extends('Frontend.layouts.master')

@section('page_title')
    {{ "Portfolio | Sabbir" }}
@endsection

@section('content')
    <div class="pageCointainer">
        <section class="comonSection portfolioSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="sectionTitle">Latest Projects</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="filterUL">
                            <li class="active filter" data-filter="all">All</li>
                            <li class="filter" data-filter="dev">Development</li>
                            <li class="filter" data-filter="graphic">Graphic</li>
                            <li class="filter" data-filter="app">App</li>
                            <li class="filter" data-filter="illustrtopm">Illustration</li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="Grid">
                    <div class="col-lg-4 folio_effect mix graphic">
                        <div class="folio_item">
                            <a href="{{route('portfolio_details')}}" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="{{asset('frontend/assets/images/folio/1.jpg')}}" alt="Image">
                                    </div>
                                </div>
                            </a>
                            <div class="folio_content">
                                <h3 class="folio_title"><a href="{{route('portfolio_details')}}">Artwork Design</a></h3>
                                <p class="folio_cat"><a href="{{route('portfolio')}}">Graphic</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix dev">
                        <div class="folio_item">
                            <a href="{{route('portfolio_details')}}" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="{{asset('frontend/assets/images/folio/2.jpg')}}" alt="Image">
                                    </div>
                                </div>
                            </a>
                            <div class="folio_content">
                                <h3 class="folio_title"><a href="{{route('portfolio_details')}}">Web App</a></h3>
                                <p class="folio_cat"><a href="{{route('portfolio')}}">Development</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix illustrtopm">
                        <div class="folio_item">
                            <a href="{{route('portfolio_details')}}" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="{{asset('frontend/assets/images/folio/3.jpg')}}" alt="Image">
                                    </div>
                                </div>
                            </a>
                            <div class="folio_content">
                                <h3 class="folio_title"><a href="{{route('portfolio_details')}}">Pencil Drawing</a></h3>
                                <p class="folio_cat"><a href="{{route('portfolio')}}">Illustration</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix app">
                        <div class="folio_item">
                            <a href="{{route('portfolio_details')}}" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="{{asset('frontend/assets/images/folio/4.jpg')}}" alt="Image">
                                    </div>
                                </div>
                            </a>
                            <div class="folio_content">
                                <h3 class="folio_title"><a href="{{route('portfolio_details')}}">Graphic App</a></h3>
                                <p class="folio_cat"><a href="{{route('portfolio')}}">App</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix graphic">
                        <div class="folio_item">
                            <a href="{{route('portfolio_details')}}" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="{{asset('frontend/assets/images/folio/5.jpg')}}" alt="Image">
                                    </div>
                                </div>
                            </a>
                            <div class="folio_content">
                                <h3 class="folio_title"><a href="{{route('portfolio_details')}}">Awesome Illustration</a></h3>
                                <p class="folio_cat"><a href="{{route('portfolio')}}">UI/UX</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 folio_effect mix dev">
                        <div class="folio_item">
                            <a href="{{route('portfolio_details')}}" class="folio_item_thumbs">
                                <div class="folio_stack">
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_decoration"></div>
                                    <div class="folio_img_holder">
                                        <img class="folio_img" src="{{asset('frontend/assets/images/folio/6.jpg')}}" alt="Image">
                                    </div>
                                </div>
                            </a>
                            <div class="folio_content">
                                <h3 class="folio_title"><a href="{{route('portfolio_details')}}">Frontend Development</a></h3>
                                <p class="folio_cat"><a href="{{route('portfolio')}}">Development</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row loadMoreRow mb22">
                    <div class="col-lg-12 loadMoreCol text-center mt23">
                        <a href="#" data-count="1" class="btt_btn bttb_dark loadMoreItem"><span><i class="icon icon-Restart"></i> Load More</span></a>
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
@endsection
