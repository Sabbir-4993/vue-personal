@extends('Frontend.layouts.master')

@section('content')
    <div class="bodyContent">
        <div class="pageCointainer">
            <section class="comonSection blogSecion">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="sectionTitle">Latest Posts</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blogItem text-left">
                                <div class="biThumb">
                                    <img src="{{asset('frontend/assets/images/blog/1.jpg')}}" alt=""/>
                                    <div class="biMeta">
                                        <a href="{{route('blog')}}">Bellamy</a><a href="{{route('blog')}}">02 Apr, 2021</a>
                                    </div>
                                </div>
                                <div class="biDetails">
                                    <h3><a href="{{route('blog_details')}}">10 Tell-Tale Signs You Need to Get New Technology</a></h3>
                                    <p>
                                        Morbi ullamcorper vel nunc quis venenatis. Ut auctor dapibus dignissim. Sed tincidunt non odio id dignissim donec.
                                    </p>
                                    <a href="{{route('blog_details')}}" class="btt_link"><span>Read More</span></a>
                                    <span class="blogCount">01</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blogItem text-left">
                                <div class="biThumb">
                                    <img src="{{asset('frontend/assets/images/blog/2.jpg')}}" alt=""/>
                                    <div class="biMeta">
                                        <a href="{{route('blog')}}">Bellamy</a><a href="{{route('blog')}}">02 Apr, 2021</a>
                                    </div>
                                </div>
                                <div class="biDetails">
                                    <h3><a href="{{route('blog_details')}}">A Technology Success Story You'll Never Believe</a></h3>
                                    <p>
                                        Morbi ullamcorper vel nunc quis venenatis. Ut auctor dapibus dignissim. Sed tincidunt non odio id dignissim donec.
                                    </p>
                                    <a href="{{route('blog_details')}}" class="btt_link"><span>Read More</span></a>
                                    <span class="blogCount">02</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blogItem text-left">
                                <div class="biThumb">
                                    <img src="{{asset('frontend/assets/images/blog/3.jpg')}}" alt=""/>
                                    <div class="biMeta">
                                        <a href="{{route('blog')}}">Bellamy</a><a href="{{route('blog')}}">02 Apr, 2021</a>
                                    </div>
                                </div>
                                <div class="biDetails">
                                    <h3><a href="{{route('blog_details')}}">The Worst Videos of All Time About Technology</a></h3>
                                    <p>
                                        Morbi ullamcorper vel nunc quis venenatis. Ut auctor dapibus dignissim. Sed tincidunt non odio id dignissim donec.
                                    </p>
                                    <a href="{{route('blog_details')}}" class="btt_link"><span>Read More</span></a>
                                    <span class="blogCount">03</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blogItem text-left">
                                <div class="biThumb">
                                    <img src="{{asset('frontend/assets/images/blog/4.jpg')}}" alt=""/>
                                    <div class="biMeta">
                                        <a href="{{route('blog')}}">Bellamy</a><a href="{{route('blog')}}">02 Apr, 2021</a>
                                    </div>
                                </div>
                                <div class="biDetails">
                                    <h3><a href="{{route('blog_details')}}">20 Resources That'll Make You Better at Technology</a></h3>
                                    <p>
                                        Morbi ullamcorper vel nunc quis venenatis. Ut auctor dapibus dignissim. Sed tincidunt non odio id dignissim donec.
                                    </p>
                                    <a href="{{route('blog_details')}}" class="btt_link"><span>Read More</span></a>
                                    <span class="blogCount">04</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt30 mb30">
                        <div class="col-lg-12">
                            <div class="btt_pagination">
                                <a href="{{route('blog')}}"><i class="icon icon-Arrow rotateHorizonaly"></i></a>
                                <span class="current">01</span>
                                <a href="{{route('blog')}}">02</a>
                                <a href="{{route('blog')}}">03</a>
                                <span class="blanks">...</span>
                                <a href="{{route('blog')}}">10</a>
                                <a href="{{route('blog')}}"><i class="icon icon-Arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection
