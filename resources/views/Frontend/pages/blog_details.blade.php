@extends('Frontend.layouts.master')

@section('page_title')
    {{ "Blog Details | Sabbir" }}
@endsection

@section('content')
    <div class="pageCointainer">
        <section class="comonSection thumbSection">
            <div class="blogThumb">
                <img src="{{asset('frontend/assets/images/blog/5.jpg')}}" alt=""/>
            </div>
        </section>
        <section class="comonSection blogContentSection">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="blogTitle">20 Resources That'll Make You Better at Technology.</h3>
                        <div class="blogMeta">
                            <span>By <a href="{{route('blog')}}">Bellamy</a></span>
                            <span><a href="{{route('blog')}}">02 Apr, 2021</a></span>
                        </div>
                        <div class="pageContent">
                            <p class="mb14">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.
                            </p>
                            <p class="mb22">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                                est laborum.
                            </p>
                            <img src="{{asset('frontend/assets/images/blog/6.jpg')}}" alt="" class="pcImg"/>
                            <p class="mb22">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                            </p>
                            <blockquote class="mb26">
                                <p>
                                    Sed ut perpiciatis unde omnis iste natus error sit volptatem accusantium doloremque laudntium, totam rem apriam, eaque ipsa quae
                                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                </p>
                            </blockquote>
                            <h3 class="mb26">Dicta sunt explicabo</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mt25">
                    <div class="col-lg-8">
                        <div class="sicmr_tag clearfix">
                            <i class="icofont-tags"></i>
                            <a href="{{route('blog')}}">Branding,</a><a href="{{route('blog')}}">UI Design,</a><a href="{{route('blog')}}">Booking,</a><a href="{{route('blog')}}">Statup,</a><a href="{{route('blog')}}">Landing</a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sicmr_social">
                            <a href="https://facebook.com/" target="_blank"><i class="icofont-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank"><i class="icofont-twitter"></i></a>
                            <a href="https://vimeo.com/" target="_blank"><i class="icofont-vimeo"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="commentArea">
                            <h2 class="sectionTitle mt52">04 Comments</h2>
                            <ol class="comment_list">
                                <li>
                                    <div class="single-comment">
                                        <img src="{{asset('frontend/assets/images/author/4.jpg')}}" alt="">
                                        <div class="authorDetails">
                                            <h5>John Williams</h5>
                                            <span>Apr 30, 2020 at 10:58 am</span>
                                        </div>
                                        <div class="comment">
                                            Technology strategy and the roadmap to implement that? The leaders are owning their own data, refreshing.
                                        </div>
                                        <a class="comment-reply-link" href="javascript:void(0);">Reply</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-comment">
                                        <img src="{{asset('frontend/assets/images/author/5.jpg')}}" alt="">
                                        <div class="authorDetails">
                                            <h5>Mark Smith</h5>
                                            <span>Jun 01, 2020 at 10:58 am</span>
                                        </div>
                                        <div class="comment">
                                            Vivamus ultrices ullamcorper tortor, nec pharetra massa sollicitudin nec.
                                            Integer posuere lacus et blandit pulvinar.
                                        </div>
                                        <a class="comment-reply-link" href="javascript:void(0);">Reply</a>
                                    </div>
                                    <ul class="children">
                                        <li>
                                            <div class="single-comment">
                                                <img src="{{asset('frontend/assets/images/author/4.jpg')}}" alt="">
                                                <div class="authorDetails">
                                                    <h5>John Williams</h5>
                                                    <span>Jul 30, 2020 at 10:00 am</span>
                                                </div>
                                                <div class="comment">
                                                    Vivamus ultrices ullamcorper tortor, nec pharetra massa sollicitudin nec.
                                                    Integer lacus et blandit  id fermentum purus.
                                                </div>
                                                <a class="comment-reply-link" href="javascript:void(0);">Reply</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="single-comment">
                                        <img src="{{asset('frontend/assets/images/author/6.jpg')}}" alt="">
                                        <div class="authorDetails">
                                            <h5>John Williams</h5>
                                            <span>Jul 30, 2020 at 10:00 am</span>
                                        </div>
                                        <div class="comment">
                                            Vivamus ultrices ullamcorper tortor, nec pharetra massa sollicitudin nec.
                                            Integer posuere lacus et blandit pulvinar. Ut id fermentum purus.
                                        </div>
                                        <a class="comment-reply-link" href="javascript:void(0);">Reply</a>
                                    </div>
                                </li>
                            </ol>
                            <h2 class="sectionTitle mt30">Leave a Comment</h2>
                            <div class="comentForm mb30">
                                <form method="post" action="javascript:void(0);" class="comForms">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <input type="text" name="name" class="com_inputa" placeholder="Name *">
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <input type="text" name="name" class="com_inputa" placeholder="Email *">
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <input type="text" name="name" class="com_inputa" placeholder="Website">
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <textarea class="com_textarea" name="com_textarea" placeholder="Comment"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="btt_btn"><span><i class="icon icon-MessageRight"></i>Post Comment</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
@endsection
