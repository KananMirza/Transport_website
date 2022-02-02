@extends('layouts.master')
@section('title','Ucuz Yükdaşıma | Xidmətlərimiz')

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
    <meta property="og:url" content="https://yukdashima.az/xidmetlerimiz" />
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
                    <li class="breadcrumb-item active">Xidmətlər</li>
                </ol>

                <h2 class="breadcrumb-title">Xidmətlər</h2>

            </div>
        </div>
    </section>
    <!-- breadcrumb-section - end
    ================================================== -->

    <!-- service-section - start
		================================================== -->
    <section id="service-section" class="service-section sec-ptb-100 clearfix">
        <div class="container">

            <div class="section-title">
                <h3>Bizim</h3>
                <h2>Xidmətlərimiz</h2>
            </div>

            <div class="row">
                @foreach($services as $service)
                <!-- item - start -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                    <div class="item" style="background-image: url('{{env('way').$service->image}}')">
                        <div class="overlay-white">

                            <h4 class="title-small mb-40">
                                {{$service->title}}
                                <small class="icon">
                                    <img src="{{asset('assets/images/service/car-icon.png')}}" alt="icon">
                                </small>
                            </h4>
                            <p class="mb-15">
                                {{substr($service->content,0,30)}}...
                            </p>

                            <a href="{{route('serviceDetails',$service->slug)}}" class="learn-more">
                                Ətraflı
                                <i class="ion-android-arrow-forward"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <!-- item - end -->
                    @endforeach

            </div>
            <!-- row - end -->

        </div>
    </section>
    <!-- service-section - end
    ================================================== -->
@endsection
