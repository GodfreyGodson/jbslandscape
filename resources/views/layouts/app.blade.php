<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>Jbs - Landscape Company Limited</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Jbslandscape">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
================================================== -->
<link rel="shortcut icon" type="images/ico" href="images/favicon.ico">
   

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('plugins/colorbox/colorbox.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



</head>

<body>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p class="info-text">Bagamoyo Road, Near IMTU Hospital, Mbezi Beach P.O.BOX 34271, Dar es Salaam,Tanzania.</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                        <ul class="list-unstyled">
                            <li>
                                <a title="Facebook" href="#">
                                    <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                                </a>
                                <a title="Twitter" href="#">
                                    <span class="social-icon"><i class="fab fa-twitter"></i></span>
                                </a>
                                <a title="Instagram" href="#">
                                    <span class="social-icon"><i class="fab fa-instagram"></i></span>
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->
        <!-- Header start -->
        <header id="header" class="header-two">
            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">

                                <div class="logo">
                                    <a class="d-block" href="{{ route('home')}}">
                                        <img loading="lazy" src="images/logo0.png" alt="jbs">
                                    </a>
                                </div>
                                <!-- logo end -->

                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav ml-auto align-items-center">
                                        <li class="nav-item dropdown active">
                                            <a href="{{ route('home')}}" class="nav-link dropdown-toggle active" >Home </a>
                                            
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company
                                                <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                               
                                              
                                                <li><a href="{{ route('faqs')}}">Faq</a></li>
                                               
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown active">
                                            <a href="{{ route('ourgallery')}}" class="nav-link dropdown-toggle active"> Our Gallery</a>

                                        </li>


                                        <li class="nav-item dropdown">
                                            <a href="{{ route('projects')}}" class="nav-link dropdown-toggle">Projects
                                                </a>
                                          
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a href="{{ route('ourservices')}}" class="nav-link dropdown-toggle" >Services
                                               </a>
                                           
                                        </li>

                                        

                                        <li class="nav-item dropdown">
                                            <a href="{{ route('blog')}}" class="nav-link dropdown-toggle" >Blog 
                                                   </a>
                                           
                                        </li>

                                        <li class="nav-item"><a class="nav-link" href="{{ route('contacts')}}">Contact</a></li>

                                        <li class="header-get-a-quote">
                                            <a class="btn btn-primary" href="{{ route('contacts')}}">Talk To Us </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end -->
                </div>
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->


        @yield('content')


    <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6 footer-widget footer-about">
                        <h3 class="widget-title">About Us</h3>
                      
                        <p class="text-justify">JBS Landscape Company Limited have evolved into the customer-oriented, diversified company we
                            are today by staying informed on the latest products, trends and technology. We design,
                            install and manage landscaping and hardscaping, with a wide array of features; from patios
                            and pergolas, to pools, spas, outdoor kitchens, recreational parks, sports facility, and
                            more.</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#" aria-label="Facebook"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" aria-label="Twitter"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#" aria-label="Instagram"><i
                                            class="fab fa-instagram"></i></a></li>
                                
                            </ul>
                        </div>
                        <!-- Footer social end -->
                    </div>
                    <!-- Col end -->

                    <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                        <h3 class="widget-title">Working Hours</h3>
                        <div class="working-hours">
                            We work 6 days a week, every day excluding major holidays and Sunday. Contact us if you have
                            an
                            emergency, with our Hotline and Contact form.
                            <br><br> Monday - Friday: <span class="text-right">7:00 - 4:00 </span>
                            <br> Saturday: <span class="text-right">12:00 - 3:00</span>

                        </div>
                    </div>
                    <!-- Col end -->

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                        <h3 class="widget-title">Services</h3>
                        <ul class="list-arrow">
                            <li><a href="{{ route('ourservices')}}">Residential Landscape Services</a></li>
                            <li><a href="{{ route('ourservices')}}">Commercial Landscape Services</a></li>
                            <li><a href="{{ route('ourservices')}}">Cleaning Services</a></li>
                            <li><a href="{{ route('ourservices')}}">Civic Landscape Services</a></li>
                            <li><a href="{{ route('ourservices')}}">Landscape Lighting</a></li>
                            <li><a href="{{ route('ourservices')}}">Landscape Design</a></li>
                            <li><a href="{{ route('ourservices')}}">Arboriculture (Tree Care and
                                    Maintainance)</a></li>
                        </ul>
                    </div>
                    <!-- Col end -->
                </div>
                <!-- Row end -->
            </div>
            <!-- Container end -->
        </div>
        <!-- Footer main end -->

        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-info text-center text-md-left">
                            <span>Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="footer-menu text-center text-md-right">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('aboutUs')}}">About</a></li>
                                <li><a href="{{ route('ourservices')}}">Our work</a></li>
                                <li><a href="{{('faqs')}}">Faq</a></li>
                                <li><a href="{{ route('blog')}}">Blog</a></li>
                                <li><a href="{{ route('contacts')}}"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

                <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                    <button class="btn btn-primary" title="Back to Top">
                        <i class="fa fa-angle-double-up"></i>
                    </button>
                </div>

            </div>
            <!-- Container end -->
        </div>
        <!-- Copyright end -->
    </footer>
    <!-- Footer end -->


    <!-- Javascript Files
  ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="{{ asset('plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}" defer></script>
    <!-- Slick Carousel -->
    <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>
    <!-- Color box -->
    <script src="{{ asset('plugins/colorbox/jquery.colorbox.js') }}"></script>
    <!-- shuffle -->
    <script src="{{ asset('plugins/shuffle/shuffle.min.js') }}" defer></script>


    <!-- Google Map API Key-->
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU') }}" defer></script>
    <!-- Google Map Plugin-->
    <script src="{{ asset('plugins/google-map/map.js') }}" defer></script>

    <!-- Template custom -->
    <script src="{{ asset('js/script.js') }}"></script>

    </div>
    <!-- Body inner end -->
</body>

</html>