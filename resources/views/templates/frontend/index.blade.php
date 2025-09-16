<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('templates/image/favicon.png') }}" type="image/png">
    <title>Welcome To YellowKost</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('templates/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/vendors/linericon/style.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('templates/css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('templates/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('templates//vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/vendors/nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('templates/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('templates/css/responsive.css') }}">

    <script src="https://kit.fontawesome.com/b87f3ad2d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ url('/') }}">
                    <img src="{{ asset('templates/image/Logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="ml-auto nav navbar-nav menu_nav">
                        <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('accomodation') }}">Accomodation</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('gallery') }}">Gallery</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('blog') }}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('blog-single') }}">Blog
                                        Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Sign In</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Register</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="portion-relative">
                <video class=" position-absolute" style="object-fit:cover; width:100vw; top:0; height:100vh;" autoplay
                    muted loop>
                    <source src="{{ asset('video/bedroomShows.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="text-white d-flex justify-content-center align-items-center position-relative z-index-1 w-100"
                style="height: 100vh; background: rgba(0, 0, 0, 0.4);">
                <div class="container">
                    <div class="text-center banner_content">
                        <h6>Kostan Gen-Z Dengan</h6>
                        <h2>Kost Rasa Rumah</h2>
                        <p>Dekat dari berbagai macam sektor perkantoran, perkuliahan dan rumah sakit hanya 15
                            menit.<br>
                            Soal keamanan, kualitas, dan kebersihan jangan diragukan lagi.</p>
                        {{-- <a href="#" class="btn theme_btn button_hover">Get Started</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table d-flex justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col col-md-4">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="pl-5 bg-transparent border rounded shadow-none form-control border-secondary font-weight-light w-100"
                                                    id="inputNama" placeholder="Nama"
                                                    style="font-size: 0.85rem; outline: none; color:#fff; display:block;"
                                                    onfocus="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';"
                                                    onblur="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';">
                                                <span class="position-absolute"
                                                    style="left: 15px; top: 50%; transform: translateY(-50%);">
                                                    <i class="fa fa-user text-secondary"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="pl-5 bg-transparent border rounded shadow-none form-control border-secondary font-weight-light"
                                                    id="inputNIK" placeholder="NIK" maxlength="16" inputmode="numeric"
                                                    pattern="[0-9]*"
                                                    style="font-size: 0.85rem; outline: none; color:#fff;"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16);"
                                                    onfocus="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';"
                                                    onblur="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';">
                                                <span class="position-absolute"
                                                    style="left: 15px; top: 50%; transform: translateY(-50%);">
                                                    <i class="fa fa-id-card text-secondary"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="pl-5 bg-transparent border rounded shadow-none form-control border-secondary font-weight-light"
                                                    id="inputTelp" placeholder="Telp" maxlength="14" inputmode="numeric"
                                                    pattern="[0-9]*"
                                                    style="font-size: 0.85rem; outline: none; color:#fff;"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16);"
                                                    onfocus="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';"
                                                    onblur="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';">
                                                <span class="position-absolute"
                                                    style="left: 15px; top: 50%; transform: translateY(-50%);">
                                                    <i class="fa fa-phone text-secondary"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="pl-5 bg-transparent border rounded shadow-none form-control border-secondary font-weight-light"
                                                    id="inputTelpOrtu" placeholder="Telp Ortu/Saudara" maxlength="14"
                                                    inputmode="numeric" pattern="[0-9]*"
                                                    style="font-size: 0.85rem; outline: none; color:#fff;"
                                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,16);"
                                                    onfocus="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';"
                                                    onblur="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';">
                                                <span class="position-absolute"
                                                    style="left: 15px; top: 50%; transform: translateY(-50%);">
                                                    <i class="fa fa-address-book text-secondary"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <input type="text"
                                                    class="pl-5 bg-transparent border rounded shadow-none form-control border-secondary font-weight-light"
                                                    style="font-size: 0.85rem; outline: none; color:#fff;"
                                                    id="inputAlamat" placeholder="Alamat Lengkap"
                                                    onfocus="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';"
                                                    onblur="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';">
                                                <span class="position-absolute"
                                                    style="left: 15px; top: 50%; transform: translateY(-50%);">
                                                    <i class="fa fa-location-dot text-secondary"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <div class="position-relative">
                                                <input type="file"
                                                    class="pl-5 bg-transparent border rounded shadow-none form-control border-secondary font-weight-light"
                                                    style="font-size: 0.70rem; outline: none; color:#fff;"
                                                    id="inputFotoKTP" placeholder="Foto KTP"
                                                    onfocus="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';"
                                                    onblur="this.style.boxShadow='none'; this.style.borderColor='#6c757d'; this.style.outline='none';">
                                                <label for="inputNama"
                                                    class="form-label font-weight-light position-absolute"
                                                    style="font-size: 0.55rem; color:#fff">Uploaf Foto KTP, JPG, JPEG,
                                                    PNG maks 100mb.</label>
                                                <span class="position-absolute"
                                                    style="left: 15px; top: 50%; transform: translateY(-50%);">
                                                    <i class="fa fa-id-card text-secondary"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10 d-flex flex-column col-md-12">
                                    <p class="mb-2" style="font-size: 0.75rem; color:#fff; line-height: 1.1rem;">
                                        Dengan ini menyatakan bahwa saya telah menyampaikan data sudah sesuai dengan
                                        yang sebenarnya, dan saya telah membaca dan menyetujui Tata Tertib yang berlaku
                                        di kost.
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" id="setuju" required style="cursor: pointer;">
                                        <label for="setuju" class="mb-0 ml-2"
                                            style="font-size: 0.75rem; color:rgb(255, 255, 206); cursor: pointer;">Sudah
                                            sesuai
                                            dan Menyetujui</label>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn theme_btn button_hover" id="btnBooking"
                                            style="font-size: 0.75rem; cursor: pointer;" disabled>
                                            Booking sekarang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="text-center section_title">
                <h2 class="title_color">Hotel Accomodation</h2>
                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center accomodation_item">
                        <div class="hotel_img">
                            <img src="{{ asset('templates/image/room1.jpg') }}" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Double Deluxe Room</h4>
                        </a>
                        <h5>$250<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center accomodation_item">
                        <div class="hotel_img">
                            <img src="{{ asset('templates/image/room2.jpg') }}" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Single Deluxe Room</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center accomodation_item">
                        <div class="hotel_img">
                            <img src="{{ asset('templates/image/room3.jpg') }}" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Honeymoon Suit</h4>
                        </a>
                        <h5>$750<small>/night</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="text-center accomodation_item">
                        <div class="hotel_img">
                            <img src="{{ asset('templates/image/room4.jpg') }}" alt="">
                            <a href="#" class="btn theme_btn button_hover">Book Now</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">Economy Double</h4>
                        </a>
                        <h5>$200<small>/night</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="text-center section_title">
                <h2 class="title_w">Royal Facilities</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Restaurant</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Sports CLub</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Swimming Pool</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Rent a Car</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Gymnesium</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Bar</h4>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Facilities Area  =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
                            standards especially in the workplace. That’s why it’s crucial that, as women, our behavior
                            on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                        <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('templates//image/about_bg.jpg') }}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="text-center section_title">
                <h2 class="title_color">Testimonial from our Clients</h2>
                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from
                </p>
            </div>
            <div class="testimonial_slider owl-carousel">
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="{{ asset('templates/image/testtimonial-1.jpg') }}" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If
                            you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Ulangi untuk testimonial lain, ganti src gambar -->
                <div class="media testimonial_item">
                    <img class="rounded-circle" src="{{ asset('templates//image/testtimonial-1.jpg') }}" alt="">
                    <div class="media-body">
                        <p>As conscious traveling Paupers we must always be concerned about our dear Mother Earth. If
                            you think about it, you travel across her face, and She is the </p>
                        <a href="#">
                            <h4 class="sec_h4">Fanny Spencer</h4>
                        </a>
                        <div class="star">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star-half-o"></i></a>
                        </div>
                    </div>
                </div>
                <!-- dst... -->
            </div>
        </div>
    </section>
    <!--================ Testimonial Area  =================-->

    <!--================ Recent Area  =================-->

    <!--================ start footer Area  =================-->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About Agency</h6>
                        <p>The world has become so fast paced that people don’t want to stand by reading a page of
                            information, they would much rather look at a presentation and understand the message. It
                            has come to a point </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Navigation Links</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Feature</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">Newsletter</h6>
                        <p>For business professionals caught between high OEM price and mediocre print and graphic
                            output, </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="relative subscribe_form">
                                <div class="flex-row input-group d-flex">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">InstaFeed</h6>
                        <ul class="flex-wrap list_style instafeed d-flex">
                            <li><img src="{{ asset('templates/image/instagram/Image-01.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('templates/image/instagram/Image-02.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('templates/image/instagram/Image-03.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('templates/image/instagram/Image-04.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('templates/image/instagram/Image-05.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('templates/image/instagram/Image-06.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('templates/image/instagram/Image-07.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('templates/image/instagram/Image-08.jpg') }}" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="m-0 col-lg-8 col-sm-12 footer-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('templates/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('templates/js/popper.js') }}"></script>
    <script src="{{ asset('templates/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('templates/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('templates/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('templates/js/mail-script.js') }}"></script>
    <script src="{{ asset('templates/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}">
    </script>
    <script src="{{ asset('templates/vendors/nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('templates/js/mail-script.js') }}"></script>
    <script src="{{ asset('templates/js/stellar.js') }}"></script>
    <script src="{{ asset('templates/vendors/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('templates/js/custom.js') }}"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var checkbox = document.getElementById('setuju');
        var button = document.getElementById('btnBooking');
        checkbox.addEventListener('change', function () {
            button.disabled = !this.checked;
            if (button.disabled) {
                button.classList.remove('btn theme_btn button_hover');
                button.classList.add('btn-yellow');
            } else {
                button.classList.remove('btn-yellow');
                button.classList.add('btn theme_btn button_hover');
            }
        });
    });
    </script>
</body>

</html>