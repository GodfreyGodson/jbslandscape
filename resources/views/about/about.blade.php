@extends('layouts.app')


@section( 'content')

  <!--/ Header end -->
  <div id="banner-area" class="banner-area" style="background-image:url(images/banner/new.JPG)">
    <div class="banner-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-heading">


                    </div>
                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </div><!-- Banner text end -->
</div><!-- Banner area end -->


<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="column-title">Who We Are</h3>
                <p class="text-justify">JBS Landscape Company Limited is a full service residential, commercial,
                    industrial and government landscape design, installation and grounds maintenance services in
                    Tanzania and beyond. The Company boasts over eight years Of experience providing expert
                    landscaping services to residential, commercial, industrial and government clients, The
                    company cultivate naturally elegant properties with a commitment to providing the finest
                    quality product and customer service with respect to the environment.</p>



            </div><!-- Col end -->

            <div class="col-lg-6 mt-5 mt-lg-0">

                <div id="page-slider" class="page-slider small-bg">

                    <div class="item" style="background-image:url(images/slider-pages/slide1.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Leadership</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- Item 1 end -->

                    <div class="item" style="background-image:url(images/slider-pages/slide2.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Relationships</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- Item 1 end -->

                    <div class="item" style="background-image:url(images/slider-pages/slide3.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Performance</h2>
                                </div>
                            </div>
                        </div>
                    </div><!-- Item 1 end -->
                </div><!-- Page slider end-->


            </div><!-- Col end -->
        </div><!-- Content row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->


<section id="facts" class="facts-area dark-bg">
    <div class="container">
        <div class="facts-wrapper">
            <div class="row">
                <div class="col-md-3 col-sm-6 ts-facts">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="250">0</span></h2>
                        <h3 class="ts-facts-title">Total Projects</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="50">0</span></h2>
                        <h3 class="ts-facts-title">Staff Members</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                        <h3 class="ts-facts-title">Hours of Work</h3>
                    </div>
                </div><!-- Col end -->

                <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                    <div class="ts-facts-img">
                        <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
                    </div>
                    <div class="ts-facts-content">
                        <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                        <h3 class="ts-facts-title">Regions Experience</h3>
                    </div>
                </div><!-- Col end -->

            </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Facts end -->

<section class="call-to-action no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title text-justify">As a company committed to a professional approach
                            to Our business. we provide hands-on care toward quality landscapes through
                            individualized attention. Our knowledge and hands-on approach provide superior
                            One-on-one attention with a personalized touch.</h3>
                    </div>
                </div>
                <!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn">
                        <a class="btn btn-primary" href="{{route('contacts')}}">Work with JBS</a>
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
                        <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                        <p class="text-white">Latest updates and news</p>
                    </div>

                    <div class="col-md-7 newsletter-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                                <input type="email" name="email" id="newsletter-email"
                                    class="form-control form-control-lg"
                                    placeholder="Your your email and hit enter" autocomplete="off">
                            </div>
                        </form>
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

<section id="ts-features" class="ts-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-intro">
                    <h2 class="into-title">About Us</h2>
                    <h3 class="into-sub-title">We deliver quality projects</h3>
                    <p>For years the company has been able to undertake many multidisciplinary
                        challenging projects and accumulating more skills in all sectors that we provide
                        services.</p>
                </div><!-- Intro box end -->

                <div class="gap-20"></div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-trophy"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">We've Repution for Excellence</h3>
                            </div>
                        </div><!-- Service 1 end -->
                    </div><!-- col end -->

                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-sliders-h"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">We Build Partnerships</h3>
                            </div>
                        </div><!-- Service 2 end -->
                    </div><!-- col end -->
                </div><!-- Content row 1 end -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-thumbs-up"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">Guided by Commitment</h3>
                            </div>
                        </div><!-- Service 1 end -->
                    </div><!-- col end -->

                    <div class="col-md-6">
                        <div class="ts-service-box">
                            <span class="ts-service-icon">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="ts-service-box-content">
                                <h3 class="service-box-title">A Team of Professionals</h3>
                            </div>
                        </div><!-- Service 2 end -->
                    </div><!-- col end -->
                </div><!-- Content row 1 end -->
            </div><!-- Col end -->

            <div class="col-lg-6 mt-4 mt-lg-0">
                <h3 class="into-sub-title">Our Values</h3>
                <p>Commitment, Responsibility, Honesty, Excellence, Partnership, Promotion, Team Work, Attitude, Fun and Collaboration.
                </p>

                <div class="accordion accordion-group" id="our-values-accordion">
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    OurMission
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#our-values-accordion">
                            <div class="card-body">
                                Our mission is to deliver quality landscape service and workmanship at
                                competitive prices with the highest standards Of excellence to value Our
                                customers, community and employees.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    OurVision
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#our-values-accordion">
                            <div class="card-body text-justify">
                                JBS Landscape Company Limited will become a more diversified and profitable landscape contracting company that grows by its Strong reputation for quality and its proud, synergistic, dedicated and professional workforce.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0 bg-transparent" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    OurGoal
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#our-values-accordion">
                            <div class="card-body text-justify">
                                Our goal is simple, to offer high-quality, competitively priced residential, commercial, industrial and governmental landscapes and maintenance. We use only premium grade materials to deliver custom design and maintenance services that surpass expectations. We view ourselves as partners vhth our clients, our employees, our community, and our environment.
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Accordion end -->

            </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
</section><!-- Feature are end -->


@endsection