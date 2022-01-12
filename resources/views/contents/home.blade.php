@extends('layouts.app')



@section('content')

<div class="banner-carousel banner-carousel-2 mb-0">
    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bgd.jpg)">



    </div>

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bgc.png)">

    </div>

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bgb.jpg)">

    </div>

    <div class="banner-carousel-item" style="background-image:url(images/slider-main/bga.jpg)">

    </div>
</div>

<section class="call-to-action no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title text-justify">JBS Landscape Company Limited is a full service
                            residential, commercial, industrial and government landscape design, installation
                            and grounds maintenance services in Tanzania and beyond. The Company boasts over
                            eight years Of experience providing expert landscaping services to residential,
                            commercial, industrial and government clients, The company cultivate naturally
                            elegant properties with a commitment to providing the finest quality product and
                            customer service with respect to the environment.</h3>
                    </div>
                </div>
                <!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn">
                        <a class="btn btn-primary" href="{{ route('contacts')}}">Work with JBS</a>
                    </div>
                </div>
                <!-- col end -->
            </div>
            <!-- row end -->
        </div>
        <!-- Action style box -->
    </div>
    <!-- Container end -->
</section>
<!-- Action end -->

<div class="cta-block section">
    <div class=container>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12">

                <div class="box-slider-text">
                    <h2 class="box-slide-title">5 Years Of Excellence In</h2>
                    <h3 class="box-slide-sub-title">Landscape Services</h3>
                    <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally
                        diverse, forward
                        thinking team please click the button below to work with jbs.</p>
                    <p>
                        <a href="{{ route('ourservices')}}" class="slider btn btn-primary">Our Services</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">We Are Specialists In</h2>
                <h3 class="section-sub-title">What We Do</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="images/icon-image/service icon00.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Residential Landscape services </a></h3>
                        <p>Hardscaping and Soft-Scaping (Natural Gardens)</p>
                    </div>
                </div>
                <!-- Service 1 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="images/icon-image/service icon00.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Commercial Landscape Services</a></h3>
                        <p class="text-justify">We provide a multi-faceted landscaping service for big businesses and
                            small. Learn more about this service in our Company.</p>
                    </div>
                </div>
                <!-- Service 2 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="images/icon-image/service icon00.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Civic Landscape Services</a></h3>
                      <p class="text-justify">The approach connects Agriculture Land, Forest Land and Rangeland under one single management concept</p>
                    </div>
                </div>
                <!-- Service 3 end -->

            </div>
            <!-- Col end -->

            <div class="col-lg-4 text-center">
                <img loading="lazy" class="img-fluid" src="images/services/service-center1.JPG"
                    alt="service-avater-image">
            </div>
            <!-- Col end -->





            <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="images/icon-image/service icon00.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Landscape Lighting</a></h3>
                        <p class="text-justify">Unique lighting design, Innovative installation solution,Retrofit LED camping and  services General Repair.
                           
                            
                            </p>
                    </div>
                </div>
                <!-- Service 4 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="images/icon-image/service icon00.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Landscape Design</a></h3>
                        <p class="text-justify">Jbs Company Limited we have talented team  to provide landscape design services</p>
                    </div>
                </div>
                <!-- Service 5 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="images/icon-image/service icon00.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#"> Arboriculture (Tree Care and
                                Maintainance)</a></h3>
                        <p class="text-justify">We offer complete tree care services for residential, commercial, industrial and governmental properties.</p>
                    </div>
                </div>
                <!-- Service 6 end -->
            </div>
            <!-- Col end -->
        </div>
        <!-- Content row end -->

    </div>
    <!--/ Container end -->
</section>
<!-- Service end -->



<section id="project-area" class="project-area light-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Work of Excellence</h2>
                <h3 class="section-sub-title">Our Projects</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-12">
                
                <!-- project filter end -->


                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>

                    <div class="col-lg-4 col-sm-6 shuffle-item"
                        data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/Inst-image-79.jpg"
                                aria-label="project-img">
                                <img class="img-fluid" src="images/projects/Inst-image-79.jpg"
                                    alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Landscape Project</a>
                                    </h3>
                                    <p class="project-cat">Commercial Landscape</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 1 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/pro1.jpg" aria-label="project-img">
                                <img class="img-fluid" src="images/projects/pro1.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Landscape Project</a>
                                    </h3>
                                    <p class="project-cat">Residential Landscape</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 2 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item"
                        data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/pro2.jpg" aria-label="project-img">
                                <img class="img-fluid" src="images/projects/pro2.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Landscape Project</a>
                                    </h3>
                                    <p class="project-cat">Civic/Government landscape</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 3 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item"
                        data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/pro4.jpg" aria-label="project-img">
                                <img class="img-fluid" src="images/projects/pro4.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Landscape Project</a>
                                    </h3>
                                    <p class="project-cat">Residential Landscape</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 4 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item"
                        data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/pro5.jpg" aria-label="project-img">
                                <img class="img-fluid" src="images/projects/pro5.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Landscape Project</a>
                                    </h3>
                                    <p class="project-cat">commercial Landscape</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 5 end -->

                    <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="images/projects/pro6.jpg" aria-label="project-img">
                                <img class="img-fluid" src="images/projects/pro6.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="#">Landscape Project</a>
                                    </h3>
                                    <p class="project-cat">Residential Landscape</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shuffle item 6 end -->
                </div>
                <!-- shuffle end -->
            </div>




           

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="{{route('projects')}}">View All Projects</a>
                </div>
            </div>

        </div>
        <!-- Content row end -->
    </div>
    <!--/ Container end -->
    
</section>
<!-- Project area end -->

<section id="ts-features" class="ts-features pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="images/services/newre.png"
                            alt="service-image">
                    </div>
                    <div class="d-flex">

                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="{{ route('residentials')}}">Residential Landscape
                                    Services</a><a class="learn-more d-inline-block" href="{{ route('residentials')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <!-- Service1 end -->
            </div>
            <!-- Col 1 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="images/services/commercial.jpg"
                            alt="service-image">
                    </div>
                    <div class="d-flex">

                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="{{ route('commercials')}}">Commercial Landscape
                                    Services</a> <a class="learn-more d-inline-block" href="{{ route('commercials')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <!-- Service2 end -->
            </div>
            <!-- Col 2 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="images/services/civic2.jpg" alt="service-image">
                    </div>
                    <div class="d-flex">

                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="{{ route('civics')}}">Civic Landscape
                                    Services</a> <a class="learn-more d-inline-block" href="{{ route('civics')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn
                                    more</a></h3>


                        </div>
                    </div>
                </div>
                <!-- Service3 end -->
            </div>
            <!-- Col 3 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="images/services/design.jpg" alt="service-image">
                    </div>
                    <div class="d-flex">

                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="{{ route('designs')}}">Landscape Design</a> <a
                                    class="learn-more d-inline-block" href="{{ route('designs')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <!-- Service2 end -->
            </div>
            <!-- Col 2 end -->

            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="images/services/pro4.jpg" alt="service-image">
                    </div>
                    <div class="d-flex">

                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="{{ route('cleans')}}">Cleaning Services</a> <a
                                    class="learn-more d-inline-block" href="{{ route('cleans')}}"
                                    aria-label="service-details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <!-- Service2 end -->
            </div>
            <!-- Col 2 end -->


            <div class="col-lg-4 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="images/services/tree.jpg" alt="service-image">
                    </div>
                    <div class="d-flex">

                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="{{ route('arborcultures')}}">Arboriculture (Tree Care
                                    and
                                    Maintainance)</a> <a class="learn-more d-inline-block"
                                    href="{{ route('arborcultures')}}" aria-label="service-details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </h3>


                        </div>
                    </div>
                </div>
                <!-- Service2 end -->
            </div>
            <!-- Col 2 end -->


        </div>
        <!-- Content row end -->
    </div>
    <!-- Container end -->
</section>
<!-- Feature are end -->






<section class="content">
    <div class="container">
        <div class="row">


            <h3 class="column-title">Happy Clients</h3>

            <div class="row all-clients">
                <div class="col-sm-4 col-6">
                    <figure class="clients-logo">
                        <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/download.jpg"
                                alt="clients-logo" /></a>
                    </figure>
                </div><!-- Client 1 end -->

                <div class="col-sm-4 col-6">
                    <figure class="clients-logo">
                        <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/ed.JPG"
                                alt="clients-logo" /></a>
                    </figure>
                </div><!-- Client 2 end -->


                <div class="col-sm-4 col-6">
                    <figure class="clients-logo">
                        <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/tb.JPG"
                                alt="clients-logo" /></a>
                    </figure>
                </div><!-- Client 3 end -->

                <div class="col-sm-4 col-6">
                    <figure class="clients-logo">
                        <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/download (1).jpg"
                                alt="clients-logo" /></a>
                    </figure>
                </div><!-- Client 3 end -->

                <div class="col-sm-4 col-6">
                    <figure class="clients-logo">
                        <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/goba.JPG"
                                alt="clients-logo" /></a>
                    </figure>
                </div><!-- Client 4 end -->

                <div class="col-sm-4 col-6">
                    <figure class="clients-logo">
                        <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/mvu.JPG"
                                alt="clients-logo" /></a>
                    </figure>
                </div><!-- Client 5 end -->

                <div class="col-sm-4 col-6">
                    <figure class="clients-logo">
                        <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/pic1.jpg"
                                alt="clients-logo" /></a>
                    </figure>
                </div><!-- Client 6 end -->


                <div class="col-sm-4 col-6">
                    <figure class="clients-logo">
                        <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/luh.JPG"
                                alt="clients-logo" /></a>
                    </figure>
                </div><!-- Client 6 end -->

                <div class="col-sm-4 col-6">
                    <figure class="clients-logo">
                        <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/bunju.JPG"
                                alt="clients-logo" /></a>
                    </figure>
                </div><!-- Client 6 end -->

            </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
</div>
<!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="subscribe-call-to-acton">
                <h3>Can We Help?</h3>
                <h4>(+255) 716-013-341</h4>
            </div>
        </div>
        <!-- Col end -->

        <div class="col-md-8">
            <div class="ts-newsletter row align-items-center">
                <div class="col-md-5 newsletter-introtext">
                    <h4 class="text-white mb-0">Email Us Now</h4>
                    <p class="text-white">Support@jbslandscape.co.tz</p>
                </div>

                <div class="col-md-7 newsletter-form">
                   
                </div>
            </div>
            <!-- Newsletter end -->
        </div>
        <!-- Col end -->

    </div>
    <!-- Content row end -->
</div>
<!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="news" class="news">
<div class="container">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="section-title">Work of Excellence</h2>
            <h3 class="section-sub-title">Recent Work</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 banner-area">
            <div class="latest-post">
                <div class="latest-post-media">
                    <a href="{{ route('news')}}" class="latest-post-img">
                        <img loading="lazy" class="img-fluid" src="images/news/news01.jpg" alt="img">
                    </a>
                </div>
                <div class="post-body">
                    <h4 class="post-title">
                        <a href="{{ route('news')}}" class="d-inline-block">We just completed Residential
                            Landscape Project</a>
                    </h4>
                    <div class="latest-post-meta">
                        <span class="post-item-date">
                            <i class="fa fa-clock-o"></i> Nov 20, 2021
                        </span>
                    </div>
                </div>
            </div>
            <!-- Latest post end -->
        </div>
        <!-- 1st post col end -->

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
                <div class="latest-post-media">
                    <a href="{{ route('news')}}" class="latest-post-img">
                        <img loading="lazy" class="img-fluid" src="images/news/news02.jpg" alt="img">
                    </a>
                </div>
                <div class="post-body">
                    <h4 class="post-title">
                        <a href="{{ route('news')}}" class="d-inline-block">We Just completed commercial Landscape
                            work</a>
                    </h4>
                    <div class="latest-post-meta">
                        <span class="post-item-date">
                            <i class="fa fa-clock-o"></i> Nov 17, 2021
                        </span>
                    </div>
                </div>
            </div>
            <!-- Latest post end -->
        </div>
        <!-- 2nd post col end -->

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
                <div class="latest-post-media">
                    <a href="{{ route('news')}}" class="latest-post-img">
                        <img loading="lazy" class="img-fluid" src="images/news/news03.jpg" alt="img">
                    </a>
                </div>
                <div class="post-body">
                    <h4 class="post-title">
                        <a href="{{ route('news')}}" class="d-inline-block">We Just Completed Civic Landscape
                            Work</a>
                    </h4>
                    <div class="latest-post-meta">
                        <span class="post-item-date">
                            <i class="fa fa-clock-o"></i> Aug 12, 2021
                        </span>
                    </div>
                </div>
            </div>
            <!-- Latest post end -->
        </div>
        <!-- 3rd post col end -->
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
    </div>

</div>
<!--/ Container end -->
</section>
<!--/ News end -->
@endsection