@extends('layouts.app')


@section('content')

<div class="banner-carousel banner-carousel-2 mb-0">
    <div class="banner-carousel banner-carousel-2 mb-0">
        <div id="banner-area" class="banner-area" style="background-image:url(images/bl.jpg)">

        </div><!-- Banner area end -->
    </div>
</div>


<section class="call-to-action no-padding">
    <div class="card w-75 mx-auto solid-bg" id="sl">
        <div class="card-body">
            <h5 class="card-title text-center">WELCOME TO JBS COMPANY LIMITED BLOG'S</h5>
            <p class="card-text text-justify">Here you can read our news and learn more about our projects also
                your allowed to share or contribute any idea on the comment section.
            </p>

        </div>
    </div>

</section>
<!-- Action end -->


<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="post">
                    <div class="post-media post-image">
                        <img loading="lazy" src="images/blog11.jpg" class="img-fluid" alt="post-image">
                    </div>

                    <div class="post-body">
                        <div class="entry-header">
                            <div class="post-meta">
                                <span class="post-author">
                                    <i class="far fa-user"></i><a href="#"> Admin</a>
                                </span>
                                <span class="post-cat">
                                    <i class="far fa-folder-open"></i><a href="#"> News</a>
                                </span>
                                <span class="post-meta-date"><i class="far fa-calendar"></i> June 14,
                                    2021</span>
                                <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                                        class="comments-link">Comments</a></span>
                            </div>
                            <h2 class="entry-title">
                                <a href="news-single.html">We just completed Residential
                                    Landscape Project</a>
                            </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur ...</p>
                        </div>

                        <div class="post-footer">
                            <a href="{{ route('news')}}" class="btn btn-primary">Continue Reading</a>
                        </div>

                    </div><!-- post-body end -->
                </div><!-- 1st post end -->


                <div class="post">
                    <div class="post-media post-image">
                        <img loading="lazy" src="images/blog12.jpg" class="img-fluid" alt="post-image">
                    </div>

                    <div class="post-body">
                        <div class="entry-header">
                            <div class="post-meta">
                                <span class="post-author">
                                    <i class="far fa-user"></i><a href="#"> Admin</a>
                                </span>
                                <span class="post-cat">
                                    <i class="far fa-folder-open"></i><a href="#"> News</a>
                                </span>
                                <span class="post-meta-date"><i class="far fa-calendar"></i> June 14,
                                    2022</span>
                                <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                                        class="comments-link">Comments</a></span>
                            </div>
                            <h2 class="entry-title">
                                <a href="news-single.html">We Just completed commercial Landscape
                                    work</a>
                            </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur ...</p>
                        </div>

                        <div class="post-footer">
                            <a href="{{ route('news')}}" class="btn btn-primary">Continue Reading</a>
                        </div>

                    </div><!-- post-body end -->
                </div><!-- 3rd post end -->

                <nav class="paging" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="fas fa-angle-double-left"></i></a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i
                                    class="fas fa-angle-double-right"></i></a></li>
                    </ul>
                </nav>

            </div><!-- Content Col end -->

            <div class="col-lg-4">

                <div class="sidebar sidebar-right">
                    <div class="widget recent-posts">
                        <h3 class="widget-title">Recent Posts</h3>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="#"><img loading="lazy" alt="img" src="images/news/news01.jpg"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="#">We just completed Residential
                                            Landscape Project</a>
                                    </h4>
                                </div>
                            </li><!-- 1st post end-->

                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="#"><img loading="lazy" alt="img" src="images/news/news02.jpg"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="#">We Just completed commercial Landscape
                                            work</a>
                                    </h4>
                                </div>
                            </li><!-- 2nd post end-->

                            <li class="d-flex align-items-center">
                                <div class="posts-thumb">
                                    <a href="#"><img loading="lazy" alt="img" src="images/news/news03.jpg"></a>
                                </div>
                                <div class="post-info">
                                    <h4 class="entry-title">
                                        <a href="#">We Just Completed Civic Landscape
                                            Work</a>
                                    </h4>
                                </div>
                            </li><!-- 3rd post end-->

                        </ul>

                    </div><!-- Recent post end -->

                    <div class="widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="arrow nav nav-tabs">
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Commercial</a></li>
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Safety</a></li>
                            <li><a href="#">Structure</a></li>
                        </ul>
                    </div><!-- Categories end -->

                    <div class="widget">
                        <h3 class="widget-title">Archives </h3>
                        <ul class="arrow nav nav-tabs">
                            <li><a href="#">Feburay 2020</a></li>
                            <li><a href="#">January 2020</a></li>
                            <li><a href="#">December 2019</a></li>
                            <li><a href="#">November 2019</a></li>
                            <li><a href="#">October 2019</a></li>
                        </ul>
                    </div><!-- Archives end -->

                    <div class="widget widget-tags">
                        <h3 class="widget-title">Tags </h3>

                        <ul class="list-unstyled">
                            <li><a href="#">Construction</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Project</a></li>
                          
                         
                            <li><a href="#">Residential</a></li>
                            <li><a href="#">Commercial</a></li>
                           
                        </ul>
                    </div><!-- Tags end -->


                </div><!-- Sidebar end -->
            </div><!-- Sidebar Col end -->

        </div><!-- Main row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->

@endsection