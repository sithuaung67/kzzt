<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Japan IT and Business College</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/jiblogo.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: NewBiz
      Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>

<!--==========================
Header
============================-->
<header id="header" class="fixed-top">
    <div class="container">

        <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
            <a href="#intro" class="scrollto"><img src="img/jiblogo.png" alt="" class="img-fluid"></a>
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="#intro">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact Us</a></li>
                @if (Route::has('login'))
                    @auth
                        <li class="drop-down"><a href="#">Setting</a>
                            <ul>
                                <li><a href="{{url('/logout')}}">Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}">Post About</a></li>
                    @endauth
                @endif
            </ul>
        </nav><!-- .main-nav -->

    </div>
</header><!-- #header -->

<!--==========================
  Intro Section
============================-->
<section id="intro" class="clearfix">
    <div class="container">

        <div class="intro-info">
            <h2 class="text-dark">For Your Better Future</h2>
            <div>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="#services" class="btn-services scrollto">Our Services</a>
            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main" style="background: #d3d3d2;">

    <!--==========================
          Services Section
        ============================-->
    <section id="services" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3>Post Advertising</h3>
            </header>
            <div class="row">
                <div class="col-md-8 offset-2">
                    @if(Session('info')) <div class="alert alert-success">{{Session('info')}}</div> @endif
                    <div class="card">
                        <div class="card-header" style="background: #fdfd96;">Upload New Post</div>
                        <div class="card-body" style="background: #fdfd96;">
                            <form enctype="multipart/form-data" method="post" action="{{route('new.uploadPost')}}">
                                <div class="form-group">
                                    <label for="post_title">Post Title</label>
                                    <input type="text" name="post_title" id="post_title" class="form-control @if($errors->has('post_title'))is-invalid @endif">
                                    @if($errors->has('post_title'))<span class="invalid-feedback">{{$errors->first('post_title')  }} </span> @endif
                                </div>
                                <div class="form-group">
                                    <label for="image">Upload Picture</label>
                                    <input type="file" name="image" id="image" class="form-control @if($errors->has('image'))is-invalid @endif" >
                                    @if($errors->has('image')) <span class="invalid-feedback">{{$errors->first('image')}}</span> @endif
                                </div>
                                <div class="form-group">
                                    <label for="post_content">Post content</label>
                                    <textarea name="post_content" id="post_content" class="form-control @if($errors->has('post_content'))is-invalid @endif"></textarea>
                                    @if($errors->has('post_content'))<span class="invalid-feedback">{{$errors->first('post_content')  }} </span> @endif
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg">Upload</button>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <!--section id="why-us" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Why choose us?</h3>
                <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
            </header>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-diamond"></i>
                        <div class="card-body">
                            <h5 class="card-title">Corporis dolorem</h5>
                            <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus sunt ab inventore officiis aut voluptatibus.</p>
                            <a href="#" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-language"></i>
                        <div class="card-body">
                            <h5 class="card-title">Voluptates dolores</h5>
                            <p class="card-text">Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur.</p>
                            <a href="#" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa fa-object-group"></i>
                        <div class="card-body">
                            <h5 class="card-title">Eum ut aspernatur</h5>
                            <p class="card-text">Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis porro in non nemo ex. </p>
                            <a href="#" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">274</span>
                    <p>Clients</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p>Projects</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,364</span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">18</span>
                    <p>Hard Workers</p>
                </div>

            </div>

        </div>
    </section-->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container-fluid">

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>

            <div class="row wow fadeInUp">

                <div class="col-lg-6">
                    <div class="map mb-4 mb-lg-0">
                        <div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.350842225945!2d96.13802714981324!3d16.808942323598338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ebcb361e664d%3A0xac65378f54bec0e7!2sJapan%20IT%20%26%20Business%20College%20(JIB%20College)!5e0!3m2!1sen!2smm!4v1574578193713!5m2!1sen!2smm" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p>No.290(D), U Wizara Road, Kamayut Tsp, Yangon</p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p>jib.college@jibc.edu.mm</p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p>09-957799993<br>09-957799994</p>
                        </div>
                    </div>

                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" id="contactForm" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-warning" title="Send Message" >Send Message</button>
                            </div>
                            @csrf
                        </form>
                        @if(Session('info'))--}}
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{Session('info')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if(Session('err'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{Session('err')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- #contact -->

</main>

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-info">
                    <img src="{{"img/jiblogo.png"}}" width="300px" height="300px">
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        No.290(D), U Wizara Road<br>
                        Kamayut Tsp, Yangon<br>
                        Myanmar <br>
                        <strong>Phone:</strong> 09-957799993, 09957799994<br>
                        <strong>Email:</strong> jib.college@jibc.edu.mm
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            Copyright<strong> &copy;2019 JIB College</strong> All Rights Reserved
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/mobile-nav/mobile-nav.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js1/main.js"></script>

</body>
</html>


