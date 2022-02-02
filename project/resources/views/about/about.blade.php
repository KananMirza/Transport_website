@extends('layouts.master')
@section('title','Ucuz Yükdaşıma | Haqqimizda')

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
    <meta property="og:url" content="https://yukdashima.az/haqqimizda" />
    <meta property="og:site_name" content="Ucuz Yükdaşıma" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="{{env('way').\App\Models\settings::first()->logo}}" />
    <meta name="twitter:title" content="Ucuz yukdaşıma şirkəti - Ölkə daxili hər növ yüklərin daşınması" />
    <meta name="twitter:description" content="Əgər siz yüksək səviyyədə yüklərinizin daşınıb və çatdırılmasını, sərfəli qiymətə həyata keçirən şirkət axtarirsınızsa “Ucuz YükDaşıma” xidmətinə müraciət edə bilərsiniz." />
    <meta name="twitter:site" content="@ucuzyukdasima" />
@endsection

@section('content')


    <!-- breadcrumb-section - start
		================================================== -->
    <section id="breadcrumb-section" class="breadcrumb-section clearfix">
        <div class="overlay-white sec-ptb-100">
            <div class="container">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Ana səhifə</a></li>
                    <li class="breadcrumb-item active">Haqqımızda</li>
                </ol>

                <h2 class="breadcrumb-title">Haqqımızda</h2>

            </div>
        </div>
    </section>
    <!-- breadcrumb-section - end
    ================================================== -->
    <!-- about-section - start
		================================================== -->
    <section id="about-section" class="about-section sec-ptb-100 clearfix">
        <div class="container">
        @include('layouts.messages')
            <div class="row">
                <!-- about-us-area - start -->
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <h2 class="title-xlarge mb-40 clr-orange">Ucuz Yükdaşıma</h2>

                    <div class="about-us-area">
                        <p>“Ucuz YükDaşıma” Bakı şəhərində və həmçinin respublika ərazisində kiçik və iri miqyaslı yük daşımalarını həyata keçirir.
                            Xidmət 2007-ci ilin əvvəlindən etibarən fəliyyətə başlamışdır. Şirkət həftənin 7 günü 24 saat bütün ölkə ərazisində yük daşımaları həyata keçirir.Bununla yanaşı, şirkət yükdaşımaları müşaiət edən kompleks yardımçı xidmətləri də müştərilərə təqdim edir.

                        </p>
                        <br>
                        <p style="font-weight: bold">
                            “Ucuz YükDaşıma” xidmətindən yararlanmağın 6 üstünlüyü vardır:
                        </p>
                        <br>
                        <ul>
                            <li>1.Sərfəli qiymət</li>
                            <li>2.Respublikanın istənilən nöqtəsinə yükdaşımalar</li>
                            <li>3.Peşəkar işçi qüvvəsi</li>
                            <li>4.24 saat fasiləsiz xidmət</li>
                            <li>5.Daşınan yüklərə 100%-lik zəmanət</li>
                            <li>6.Xidmətdə yüksək müştəri məmnuniyyəti</li>
                        </ul>
                        <br>
                        <p style="font-weight: bold">
                            Əgər siz yüksək səviyyədə yüklərinizin daşınıb və çatdırılmasını, sərfəli qiymətə həyata keçirən şirkət axtarirsınızsa “Ucuz YükDaşıma” xidmətinə müraciət edə bilərsiniz.
                        </p>
                    </div>
                </div>
                <!-- about-us-area - end -->

                <!-- question-area - start -->
                <div class="col-lg-6 col-md-12 col-xs-12">

                    <ul class="slickslide slickslide-about">
                        @foreach($sliders as $slider)
                        <li>
                            <img src="{{env('way').$slider->image}}" alt="image">
                        </li>
                        @endforeach
                    </ul>
                    <div class="slick-thumbs">
                        @foreach($sliders as $slider)
                            <li>
                                <img src="{{env('way').$slider->image}}" alt="image">
                            </li>
                        @endforeach
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



@endsection
