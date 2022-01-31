@extends('layouts.master')
@section('title','Ucuz yukdaşıma şirkəti')

@section('content')
    <!-- slider-section - start
		================================================== -->
    <section id="slider-section" class="slider-section clearfix">


        @foreach($sliders as $slider)
        <!-- item - start -->
        <div class="item" style="background-image: url('{{env('way').$slider->image}}')">
            <div class="overlay-white">
                <div class="container">
                    <h3 class="clr-orange mb-15">{{$slider->title}}</h3>
                    <h1 class="mb-40">
                        {{$slider->content}}
                    </h1>
                    <div class="text-left">
                        <a href="contact.html" class="custom-btn bg-orange waves-light">
                            <span>Əlaqə</span>
                            <i class="ion-ios-arrow-forward"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- item - end -->
            @endforeach

    </section>
    <!-- slider-section - end
    ================================================== -->





    <!-- features-section - start
    ================================================== -->
    <section id="features-section" class="features-section clearfix">
        <div class="container">

            <!-- features-items-area - start -->
            <ul class="features-items-area z-depth-1">


                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            24/7 support
                        </h2>
                    </div>

                    <div class="feature-contant">
                        <h3>3</h3>
                        <p>
                            Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria Excepteur sint occaecat cupid.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            24/7 support
                        </h2>
                    </div>

                    <div class="feature-contant">
                        <h3>3</h3>
                        <p>
                            Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria Excepteur sint occaecat cupid.
                        </p>
                    </div>
                </li>
                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            24/7 support
                        </h2>
                    </div>

                    <div class="feature-contant">
                        <h3>3</h3>
                        <p>
                            Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria Excepteur sint occaecat cupid.
                        </p>
                    </div>
                </li>

            </ul>
            <!-- features-items-area - end -->

            <!-- features-items-area2 - start -->
            <ul class="features-items-area2 z-depth-1">

                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            most secured
                        </h2>
                    </div>

                    <div class="feature-contant">
                        <h3>1</h3>
                        <p>
                            Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria Excepteur sint occaecat cupid.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            world wide
                        </h2>
                    </div>

                    <div class="feature-contant">
                        <h3>2</h3>
                        <p>
                            Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria Excepteur sint occaecat cupid.
                        </p>
                    </div>
                </li>

                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            24/7 support
                        </h2>
                    </div>

                    <div class="feature-contant">
                        <h3>3</h3>
                        <p>
                            Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla paria Excepteur sint occaecat cupid.
                        </p>
                    </div>
                </li>

            </ul>
            <!-- features-items-area2 - end -->

        </div>
    </section>
    <!-- features-section - end
    ================================================== -->





    <!-- service-section - start
    ================================================== -->
    <section id="service-section" class="service-section sec-ptb-100 clearfix">
        <div class="container">

            <div class="section-title">
                <h3>Bizim</h3>
                <h2>Xidmətlərimiz</h2>
            </div>

            <!-- service-slider - start -->
            <div class="service-slider owl-carousel owl-theme">

            @foreach($services as $service)
                <!-- item - start -->
                <div class="item" style="background-image: url('{{env('way').$service->image}}')" >
                    <div class="overlay-white">
                        <h4 class="title-small mb-40">
                            {{$service->title}}
                            <small class="icon">
                                <img src="{{asset('assets/images/service/car-icon.png')}}" alt="icon">
                            </small>
                        </h4>
                        <p>
                          {{$service->content}}
                        </p>
                    </div>
                </div>
                <!-- item - end -->
            @endforeach

            </div>
            <!-- service-slider - end -->

        </div>

    </section>
    <!-- service-section - end
    ================================================== -->

    <!-- quote-section - start
    ================================================== -->
    <section id="quote-section" class="quote-section sec-ptb-100 clearfix">

        <span class="bg-icon ion-paper-airplane"></span>

        <div class="container">
            <div class="row">

                <!-- quote-section-img - start -->
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="quote-section-img">
                        <img src="{{asset('assets/images/quote/quote-img.jpg')}}" alt="image">
                    </div>
                </div>
                <!-- quote-section-img - end -->

                <!-- quote-form - start -->
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <form class="quote-form">

                        <div class="section-title">
                            <h3>Bizimlə</h3>
                            <h2>Əlaqə</h2>
                        </div>

                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text" placeholder="Ad">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="email" placeholder="Mobil nömrə">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea placeholder="Zəhmət olmasa mesajınızı qeyd edin.Əməkdaşlarımız tezliklə sizinlə əlaqə saxlayacaqdır."></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href="#!" class="custom-btn bg-orange waves-light waves-effect waves-light" tabindex="0">
                                    <span>Göndər</span>
                                    <i class="ion-android-send"></i>
                                </a>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- quote-form - end -->

            </div>
            <!-- row - end -->
        </div>
        <!-- container - end -->

    </section>
    <!-- quote-section - end
    ================================================== -->
    <!-- service-section - start
   ================================================== -->
    <section id="service-section" class="service-section sec-ptb-100 clearfix">
        <div class="container">

            <div class="section-title">
                <h3>Daşıdığımız</h3>
                <h2>Yüklər</h2>
            </div>

            <!-- service-slider - start -->
            <div class="service-slider owl-carousel owl-theme">

            @foreach($cargoes as $cargo)
                <!-- item - start -->
                    <div class="item" style="background-image: url('{{env('way').$cargo->image}}')" >
                        <div class="overlay-white">
                            <h4 class="title-small mb-40">
                                {{$cargo->title}}
                                <small class="icon">
                                    <img src="{{asset('assets/images/service/car-icon.png')}}" alt="icon">
                                </small>
                            </h4>
                            <p>
                                {{$cargo->content}}
                            </p>
                        </div>
                    </div>
                    <!-- item - end -->
                @endforeach

            </div>
            <!-- service-slider - end -->

        </div>

    </section>
    <!-- service-section - end
    ================================================== -->





    <!-- about-section - start
    ================================================== -->
    <section id="about-section" class="about-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">

                <!-- about-us-area - start -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="section-title">
                        <h3>Şirkət</h3>
                        <h2>Haqqında</h2>
                    </div>

                    <div class="about-us-area">
                       <p class="mb-40">
                           {{$settings->about}}
                       </p>

                        <a href="about.html" class="custom-btn bg-blue waves-light waves-effect waves-light" tabindex="0">
                            <span>Ətraflı</span>
                            <i class="ion-ios-arrow-forward"></i>
                        </a>

                    </div>
                </div>
                <!-- about-us-area - end -->

                <!-- question-area - start -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="section-title">
                        <h3>Yükünüzün</h3>
                        <h2>daşınma prosesi</h2>
                    </div>

                    <div class="question-area">
                        <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                            <!-- Accordion card - start -->
                            <div class="card">

                                <div class="card-header" role="tab" id="headingOne">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h5>
                                            Sifarişinizin qəbulu
                                        </h5>
                                    </a>
                                </div>

                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        Bu mərhələdə sifariş qəbul edildikdən sonra dərhal əməkdaşlarımız qeyd olunan ünvana yönlendirilir
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card - end -->

                            <!-- Accordion card - start -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingTwo">
                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h5>
                                            Yüklərin qablaşdırılması
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                    Bu mərhələdə yükləriniz təcrübəli əməkdaşlarımız tərəfindən düzgün qaydada qablaşdırılır.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card - end -->

                            <!-- Accordion card - start -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingThree">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h5>
                                            Ünvana çatdırılması
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        Bu mərhələdə qablaşdırılmış yükləriniz əməkdaşlarımız tərəfindən qeyd olunan ünvana daşınılır
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card - end -->

                            <!-- Accordion card - start -->
                            <div class="card">

                                <!-- Card header -->
                                <div class="card-header" role="tab" id="headingFour">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                        <h5>
                                            Təhvil  verilməsi
                                        </h5>
                                    </a>
                                </div>

                                <!-- Card body -->
                                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="card-body">
                                    Bu mərhələdə yüklər müştəriyə təhvil verilir.
                                    </div>
                                </div>
                            </div>
                            <!-- Accordion card - end -->

                        </div>
                    </div>

                </div>
                <!-- question-area - end -->

            </div>
        </div>
    </section>
    <!-- about-section - end
    ================================================== -->





    <!-- testimonial-section - start
    ================================================== -->
    <section id="testimonial-section" class="testimonial-section clearfix">
        <div class="overlay-white sec-ptb-100 clearfix">
            <div class="container">

                <!-- section-title - start -->
                <div class="section-title text-center">
                    <h3>our clients say</h3>
                    <h2>testimonial</h2>
                </div>
                <!-- section-title - end -->

                <!-- testimonial-carousel - start -->
                <div class="testimonial-carousel owl-carousel owl-theme">

                    <!-- client - start -->
                    <div class="item client">
                        <p class="client-comment title-xsmall mb-40">
                            <i class="ion-quote"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            <i class="ion-quote quote-right"></i>
                        </p>

                        <div class="row">

                            <!-- hero - start -->
                            <div class="col-lg-7 col-md- col-sm-7">
                                <ul class="post-mate ul-li">
                                    <li class="hero float-left">
                                        <a href="#!" class="hero-img">
                                            <img src="{{asset('assets/images/testimonial/client1.png')}}" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <span class="hero-name">Maria Mazza</span><br>
                                        <small class="hero-title">CEO, Payra.com</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- hero - end -->

                            <!-- rateing-star - start -->
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <ul class="rateing-star ul-li text-right">
                                    <li class="rateing-point">
                                        5
                                    </li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                </ul>
                            </div>
                            <!-- rateing-star - end -->

                        </div>
                    </div>
                    <!-- client - end -->

                    <!-- client - start -->
                    <div class="item client">
                        <p class="client-comment title-xsmall mb-40">
                            <i class="ion-quote"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            <i class="ion-quote quote-right"></i>
                        </p>

                        <div class="row">

                            <!-- hero - start -->
                            <div class="col-lg-7 col-md- col-sm-7">
                                <ul class="post-mate ul-li">
                                    <li class="hero float-left">
                                        <a href="#!" class="hero-img">
                                            <img src="{{asset('assets/images/testimonial/client1.png')}}" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <span class="hero-name">Maria Mazza</span><br>
                                        <small class="hero-title">CEO, Payra.com</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- hero - end -->

                            <!-- rateing-star - start -->
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <ul class="rateing-star ul-li text-right">
                                    <li class="rateing-point">
                                        5
                                    </li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                </ul>
                            </div>
                            <!-- rateing-star - end -->

                        </div>
                    </div>
                    <!-- client - end -->

                    <!-- client - start -->
                    <div class="item client">
                        <p class="client-comment title-xsmall mb-40">
                            <i class="ion-quote"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            <i class="ion-quote quote-right"></i>
                        </p>

                        <div class="row">

                            <!-- hero - start -->
                            <div class="col-lg-7 col-md- col-sm-7">
                                <ul class="post-mate ul-li">
                                    <li class="hero float-left">
                                        <a href="#!" class="hero-img">
                                            <img src="{{asset('assets/images/testimonial/client1.png')}}" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <span class="hero-name">Maria Mazza</span><br>
                                        <small class="hero-title">CEO, Payra.com</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- hero - end -->

                            <!-- rateing-star - start -->
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <ul class="rateing-star ul-li text-right">
                                    <li class="rateing-point">
                                        5
                                    </li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                </ul>
                            </div>
                            <!-- rateing-star - end -->

                        </div>
                    </div>
                    <!-- client - end -->

                    <!-- client - start -->
                    <div class="item client">
                        <p class="client-comment title-xsmall mb-40">
                            <i class="ion-quote"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            <i class="ion-quote quote-right"></i>
                        </p>

                        <div class="row">

                            <!-- hero - start -->
                            <div class="col-lg-7 col-md- col-sm-7">
                                <ul class="post-mate ul-li">
                                    <li class="hero float-left">
                                        <a href="#!" class="hero-img">
                                            <img src="{{asset('assets/images/testimonial/client1.png')}}" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <span class="hero-name">Maria Mazza</span><br>
                                        <small class="hero-title">CEO, Payra.com</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- hero - end -->

                            <!-- rateing-star - start -->
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <ul class="rateing-star ul-li text-right">
                                    <li class="rateing-point">
                                        5
                                    </li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                </ul>
                            </div>
                            <!-- rateing-star - end -->

                        </div>
                    </div>
                    <!-- client - end -->

                    <!-- client - start -->
                    <div class="item client">
                        <p class="client-comment title-xsmall mb-40">
                            <i class="ion-quote"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            <i class="ion-quote quote-right"></i>
                        </p>

                        <div class="row">

                            <!-- hero - start -->
                            <div class="col-lg-7 col-md- col-sm-7">
                                <ul class="post-mate ul-li">
                                    <li class="hero float-left">
                                        <a href="#!" class="hero-img">
                                            <img src="{{asset('assets/images/testimonial/client1.png')}}" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <span class="hero-name">Maria Mazza</span><br>
                                        <small class="hero-title">CEO, Payra.com</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- hero - end -->

                            <!-- rateing-star - start -->
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <ul class="rateing-star ul-li text-right">
                                    <li class="rateing-point">
                                        5
                                    </li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                </ul>
                            </div>
                            <!-- rateing-star - end -->

                        </div>
                    </div>
                    <!-- client - end -->

                    <!-- client - start -->
                    <div class="item client">
                        <p class="client-comment title-xsmall mb-40">
                            <i class="ion-quote"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            <i class="ion-quote quote-right"></i>
                        </p>

                        <div class="row">

                            <!-- hero - start -->
                            <div class="col-lg-7 col-md- col-sm-7">
                                <ul class="post-mate ul-li">
                                    <li class="hero float-left">
                                        <a href="#!" class="hero-img">
                                            <img src="{{asset('assets/images/testimonial/client1.png')}}" alt="image">
                                        </a>
                                    </li>
                                    <li>
                                        <span class="hero-name">Maria Mazza</span><br>
                                        <small class="hero-title">CEO, Payra.com</small>
                                    </li>
                                </ul>
                            </div>
                            <!-- hero - end -->

                            <!-- rateing-star - start -->
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <ul class="rateing-star ul-li text-right">
                                    <li class="rateing-point">
                                        5
                                    </li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                    <li class="rated"><i class="ion-ios-star"></i></li>
                                </ul>
                            </div>
                            <!-- rateing-star - end -->

                        </div>
                    </div>
                    <!-- client - end -->

                </div>
                <!-- testimonial-carousel - end -->

            </div>
        </div>
    </section>
    <!-- testimonial-section - end
    ================================================== -->





    <!-- blog-section - start
    ================================================== -->
    <section id="blog-section" class="blog-section sec-ptb-100 clearfix">
        <div class="container">

            <!-- section-title - start -->
            <div class="section-title">
                <h3>news & updates</h3>
                <h2>our blog</h2>
            </div>
            <!-- section-title - end -->

            <div class="row">

                <!-- blog - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="blog">

                        <div class="blog-img">
                            <img src="{{asset('assets/images/blog/blog1.jpg')}}" alt="image">
                            <span class="date">
									11 Oct 2017
								</span>
                        </div>

                        <div class="blog-contant clearfix">
                            <ul class="post-mate ul-li mb-15">
                                <li>by <a href="#!" class="clr-orange">Sujonmaji</a></li>
                                <li><a href="#!">Comm (35)</a></li>
                            </ul>

                            <h3 class="title-xsmall mb-40">
                                Minim veniam quis nostrud exercitation ullamco laboris nisi ut.
                            </h3>

                            <div>
                                <a href="blog-details.html" class="learn-more float-left">
                                    learn more
                                    <i class="ion-android-arrow-forward"></i>
                                </a>
                                <ul class="share-list float-right text-right">
                                    <li>
                                        <a href="#!" class="share">
                                            share
                                            <i class="ion-android-share-alt clr-orange"></i>
                                        </a>
                                    </li>
                                    <li class="share-link facebook"><a href="#!"><i class="ion-social-facebook"></i></a></li>
                                    <li class="share-link twitter"><a href="#!"><i class="ion-social-twitter"></i></a></li>
                                    <li class="share-link googleplus"><a href="#!"><i class="ion-social-googleplus"></i></a></li>
                                    <li class="share-link linkedin"><a href="#!"><i class="ion-social-linkedin-outline"></i></a></li>
                                    <li class="share-link dribbble"><a href="#!"><i class="ion-social-dribbble-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- blog - end -->

                <!-- blog - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="blog">

                        <div class="blog-img">
                            <img src="{{asset('assets/images/blog/blog2.jpg')}}" alt="image">
                            <span class="date">
									11 Oct 2017
								</span>
                        </div>

                        <div class="blog-contant clearfix">
                            <ul class="post-mate ul-li mb-15">
                                <li>by <a href="#!" class="clr-orange">Sujonmaji</a></li>
                                <li><a href="#!">Comm (35)</a></li>
                            </ul>

                            <h3 class="title-xsmall mb-40">
                                Minim veniam quis nostrud exercitation ullamco laboris nisi ut.
                            </h3>

                            <div>
                                <a href="blog-details.html" class="learn-more float-left">
                                    learn more
                                    <i class="ion-android-arrow-forward"></i>
                                </a>
                                <ul class="share-list float-right text-right">
                                    <li>
                                        <a href="#!" class="share">
                                            share
                                            <i class="ion-android-share-alt clr-orange"></i>
                                        </a>
                                    </li>
                                    <li class="share-link facebook"><a href="#!"><i class="ion-social-facebook"></i></a></li>
                                    <li class="share-link twitter"><a href="#!"><i class="ion-social-twitter"></i></a></li>
                                    <li class="share-link googleplus"><a href="#!"><i class="ion-social-googleplus"></i></a></li>
                                    <li class="share-link linkedin"><a href="#!"><i class="ion-social-linkedin-outline"></i></a></li>
                                    <li class="share-link dribbble"><a href="#!"><i class="ion-social-dribbble-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- blog - end -->

                <!-- blog - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="blog">

                        <div class="blog-img">
                            <img src="{{asset('assets/images/blog/blog3.jpg')}}" alt="image">
                            <span class="date">
									11 Oct 2017
								</span>
                        </div>

                        <div class="blog-contant clearfix">
                            <ul class="post-mate ul-li mb-15">
                                <li>by <a href="#!" class="clr-orange">Sujonmaji</a></li>
                                <li><a href="#!">Comm (35)</a></li>
                            </ul>

                            <h3 class="title-xsmall mb-40">
                                Minim veniam quis nostrud exercitation ullamco laboris nisi ut.
                            </h3>

                            <div>
                                <a href="blog-details.html" class="learn-more float-left">
                                    learn more
                                    <i class="ion-android-arrow-forward"></i>
                                </a>
                                <ul class="share-list float-right text-right">
                                    <li>
                                        <a href="#!" class="share">
                                            share
                                            <i class="ion-android-share-alt clr-orange"></i>
                                        </a>
                                    </li>
                                    <li class="share-link facebook"><a href="#!"><i class="ion-social-facebook"></i></a></li>
                                    <li class="share-link twitter"><a href="#!"><i class="ion-social-twitter"></i></a></li>
                                    <li class="share-link googleplus"><a href="#!"><i class="ion-social-googleplus"></i></a></li>
                                    <li class="share-link linkedin"><a href="#!"><i class="ion-social-linkedin-outline"></i></a></li>
                                    <li class="share-link dribbble"><a href="#!"><i class="ion-social-dribbble-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- blog - end -->

            </div>

        </div>
    </section>
    <!-- blog-section - end
    ================================================== -->





    <!-- partner-section - start
    ================================================== -->
    <div id="partner-section" class="partner-section clearfix">
        <div class="container">

            <ul class="partner-list z-depth-1-half">
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner1.png')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner2.png')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner3.png')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner4.png')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner5.png')}}" alt="image">
                    </a>
                </li>
            </ul>

            <ul class="partner-list2 z-depth-1-half">
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner1.png')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner2.png')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner3.png')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner4.png')}}" alt="image">
                    </a>
                </li>
                <li>
                    <a href="#!" class="waves-effect">
                        <img src="{{asset('assets/images/partner/partner5.png')}}" alt="image">
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <!-- partner-section - end
    ================================================== -->

@endsection
