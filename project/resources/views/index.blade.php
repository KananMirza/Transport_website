@extends('layouts.master')
@section('title','Ucuz Yükdaşıma - Ölkə daxili hər növ yüklərin daşınması')

@section('meta')
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Kanan Mirzayev">
    <meta name="keywords" content="ucuz yükdaşıma,ucuz yukdasima,yükdaşıma xidməti,yukdasima xidmeti,yükdaşıma,yukdasima,yükdaşıma xidmətləri,yukdasima xidmeti qiymeti
,yukdasima xidmetleri,karqo və yükdaşıma şirkəti,serfeli yukdasima,yukdasima sirketleri" />
    <meta name="description" content="Əgər siz yüksək səviyyədə yüklərinizin daşınıb və çatdırılmasını, sərfəli qiymətə həyata keçirən şirkət axtarirsınızsa “Ucuz YükDaşıma” xidmətinə müraciət edə bilərsiniz.">
    <meta property="og:image" content="{{env('way').\App\Models\settings::first()->logo}}" />
    <meta property="og:image:width" content="358" /><meta property="og:image:height" content="367" /><meta property="og:image:alt" content="Ucuz Yükdaşıma logo" /><meta property="og:image:type" content="image/png" />
    <meta property="og:locale" content="az_AZ" />
    <meta property="og:description" content="Əgər siz yüksək səviyyədə yüklərinizin daşınıb və çatdırılmasını, sərfəli qiymətə həyata keçirən şirkət axtarirsınızsa “Ucuz YükDaşıma” xidmətinə müraciət edə bilərsiniz." />
    <meta property="og:url" content="https://yukdashima.az/" />
    <meta property="og:site_name" content="Ucuz Yükdaşıma" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="{{env('way').\App\Models\settings::first()->logo}}" />
    <meta name="twitter:title" content="Ucuz yukdaşıma şirkəti - Ölkə daxili hər növ yüklərin daşınması" />
    <meta name="twitter:description" content="Əgər siz yüksək səviyyədə yüklərinizin daşınıb və çatdırılmasını, sərfəli qiymətə həyata keçirən şirkət axtarirsınızsa “Ucuz YükDaşıma” xidmətinə müraciət edə bilərsiniz." />
    <meta name="twitter:site" content="@ucuzyukdasima" />
@endsection

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
                        <a href="{{route('contactIndex')}}" class="custom-btn bg-orange waves-light">
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
                           Sürətli
                        </h2>
                    </div>

                </li>
                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            Təhlükəsiz
                        </h2>
                    </div>

                </li>
                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            Etibarlı
                        </h2>
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
                            Sürətli
                        </h2>
                    </div>
                </li>

                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            Təhlükəsiz
                        </h2>
                    </div>
                </li>

                <li>
                    <div class="feature-title mb-15">
                        <h2>
                            <i class="ion-android-checkmark-circle"></i>
                            Etibarlı
                        </h2>
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
                        <p class="mb-2">
                            {{substr($service->content,0,30)}}...
                        </p>
                        <a href="{{route('serviceDetails',$service->slug)}}" class="learn-more">
                            Ətraflı
                            <i class="ion-android-arrow-forward"></i>
                        </a>
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
                    <form class="quote-form" method="POST" action="{{route('order')}}">
@csrf
                        <div class="section-title">
                            <h3>Bizimlə</h3>
                            <h2>Əlaqə</h2>
                        </div>

                        <div class="row">
                            @include('layouts.messages')

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text" placeholder="Ad" name="name">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="text" placeholder="Mobil nömrə" name="phone">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea name="message" placeholder="Zəhmət olmasa mesajınızı qeyd edin.Əməkdaşlarımız tezliklə sizinlə əlaqə saxlayacaqdır."></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button class="custom-btn bg-orange waves-light waves-effect waves-light" tabindex="0" type="submit">
                                    <span>Göndər</span>
                                    <i class="ion-android-send"></i>
                                </button>
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
    <section id="about-section" class="about-section clearfix">
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

                        <a href="{{route('aboutIndex')}}" class="custom-btn bg-blue waves-light waves-effect waves-light" tabindex="0">
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

    <!-- service-section - start
   ================================================== -->
    <section id="service-section" class="service-section clearfix">
        <div class="container">

            <div class="section-title">
                <h3>Aktiv</h3>
                <h2>Kampaniyalar</h2>
            </div>

            <!-- service-slider - start -->
            <div class="service-slider owl-carousel owl-theme">

            @foreach($campaigns as $campaign)
                <!-- item - start -->
                    <div class="item" style="background-image: url('{{env('way').$campaign->image}}')" >
                        <div class="overlay-white">
                            <h4 class="title-small mb-40">
                                {{$campaign->title}}
                                <small class="icon">
                                    <img src="{{asset('assets/images/service/car-icon.png')}}" alt="icon">
                                </small>
                            </h4>
                            <p class="mb-2">
                                {{substr($campaign->content,0,30)}}...
                            </p>
                            <a href="{{route('campaignIndex',$campaign->slug)}}" class="learn-more">
                                Ətraflı
                                <i class="ion-android-arrow-forward"></i>
                            </a>
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

    <!-- blog-section - start
    ================================================== -->
    <section id="blog-section" class="blog-section sec-ptb-100 clearfix">
        <div class="container">

            <!-- section-title - start -->
            <div class="section-title">
                <h3>Son</h3>
                <h2>Bloqlar</h2>
            </div>
            <!-- section-title - end -->

            <div class="row">
                @foreach($blogs as $blog)
                <!-- blog - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="blog">

                        <div class="blog-img">
                            <img src="{{env('way').$blog->image}}" alt="image">
                            <span class="date">
									{{\Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM Do YYYY')}}
								</span>
                        </div>

                        <div class="blog-contant clearfix">
                            <ul class="post-mate ul-li mb-15">
                                <li>by <a href="{{route('contactIndex')}}" class="clr-orange">Admin</a></li>
                            </ul>

                            <h3 class="title-xsmall mb-40">
                               {{$blog->title}}
                            </h3>

                            <div>
                                <a href="{{route('blogDetails',$blog->slug)}}" class="learn-more float-left">
                                    Ətraflı
                                    <i class="ion-android-arrow-forward"></i>
                                </a>
                                <ul class="share-list float-right text-right">
                                    <li>
                                        <a href="javascript:void(0)" class="share">
                                            Paylaş
                                            <i class="ion-android-share-alt clr-orange"></i>
                                        </a>
                                    </li>
                                    <li class="share-link facebook"><a href="#!"><i class="ion-social-facebook"></i></a></li>
                                    <li class="share-link twitter"><a href="#!"><i class="ion-social-twitter"></i></a></li>
                                    <li class="share-link googleplus"><a href="#!"><i class="ion-social-pinterest"></i></a></li>
                                    <li class="share-link linkedin"><a href="#!"><i class="ion-social-linkedin-outline"></i></a></li>
                                    <li class="share-link dribbble"><a href="#!"><i class="ion-link"></i></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- blog - end -->
                    @endforeach
            </div>

        </div>
    </section>
    <!-- blog-section - end
    ================================================== -->

@endsection
