@extends('layouts.master')
@section('title',$service->title)

@section('meta')
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Kanan Mirzayev">
    <meta name="keywords" content="ucuz yükdaşıma,ucuz yukdasima,yükdaşıma xidməti,yukdasima xidmeti,yükdaşıma,yukdasima,yükdaşıma xidmətləri,yukdasima xidmeti qiymeti
,yukdasima xidmetleri,karqo və yükdaşıma şirkəti,serfeli yukdasima,yukdasima sirketleri" />
    <meta name="description" content="{{$service->title}}">
    <meta property="og:image" content="{{env('way').$service->image}}" />
    <meta property="og:image:width" content="358" /><meta property="og:image:height" content="367" /><meta property="og:image:alt" content="Ucuz Yükdaşıma logo" /><meta property="og:image:type" content="image/png" />
    <meta property="og:locale" content="az_AZ" />
    <meta property="og:description" content="{{$service->title}}" />
    <meta property="og:url" content="{{env('way').'kampaniyalar/'.$service->slug}}" />
    <meta property="og:site_name" content="Ucuz Yükdaşıma" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="{{env('way').$service->image}}" />
    <meta name="twitter:title" content="{{$service->title}}" />
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
            @include('layouts.messages')
            <div class="row">

                <!-- service-details - start -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="service-details">

                        <!-- service-details-img - start -->
                        <div class="service-details-img mb-40">
                            <img src="{{env('way').$service->image}}" alt="Image">
                        </div>
                        <!-- service-details-img - end -->

                        <!-- service-details-contant - start -->
                        <div class="service-details-contant mb-40">
                            <h1 class="title-xlarge mb-15">
                                {{$service->title}}
                            </h1>

                            <p class="mb-30">
                                {{$service->content}}
                            </p>


                        </div>
                        <!-- service-details-contant - end -->

                        <!-- opportunities - start -->
                        <div class="opportunities">
                            <div class="row">
                                <!-- opportuniti-contant - start -->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="opportuniti-contant">
                                        <h3 class="title-small mb-30">
                                            “Ucuz YükDaşıma” xidmətindən yararlanmağın 6 üstünlüyü vardır:
                                        </h3>

                                        <ul class="opportuniti-list ul-li-block">
                                            <li>
                                                <i class="ion-checkmark-circled"></i>
                                                Sərfəli qiymət
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-circled"></i>
                                                Respublikanın istənilən nöqtəsinə yükdaşımalar
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-circled"></i>
                                                Peşəkar işçi qüvvəsi
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-circled"></i>
                                                24 saat fasiləsiz xidmət

                                            </li>
                                            <li>
                                                <i class="ion-checkmark-circled"></i>
                                                Daşınan yüklərə 100%-lik zəmanət
                                            </li>
                                            <li>
                                                <i class="ion-checkmark-circled"></i>
                                                Xidmətdə yüksək müştəri məmnuniyyəti
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- opportuniti-contant - end -->

                            </div>
                        </div>
                        <!-- opportunities - start -->

                    </div>
                </div>
                <!-- service-details - end -->

                <!-- right-sidebar - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="right-sidebar">

                        <!-- rs-search - start -->
                        <form action="{{route('search')}}" method="GET" class="rs-search mb-30">
                            <input type="search" placeholder="Axtar..." aria-label="Search" name="keyword">
                            <button type="submit" class="search-btn">
                                <i class="ion-search"></i>
                            </button>
                        </form>
                        <!-- rs-search - end -->

                        <!-- rs-services - start -->
                        <div class="rs-services mb-30">
                            <h2 class="title-small">
                                Xidmətlər
                            </h2>

                            <ul class="rs-services-list ul-li-block">
                                @foreach($services as $servis)
                                <li>
                                    <a href="{{route('serviceDetails',$servis->slug)}}" class="waves-effect">
                                        <i class="ion-ios-checkmark-outline clr-orange"></i>
                                        {{$servis->title}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- rs-services - end -->

                        <!-- rs-contact - start -->
                        <div class="rs-contact">
                            <h2 class="title-small">
                                Əlaqə
                            </h2>

                            <form action="{{route('order')}}" class="rs-contact-form" method="POST">
                                @csrf
                                <input type="text" placeholder="Ad" name="name">
                                <input type="text" placeholder="Mobil nömrə" name="phone">
                                <textarea rows="3" placeholder="Zəhmət olmasa mesajınızı qeyd edin.Əməkdaşlarımız tezliklə sizinlə əlaqə saxlayacaqdır." name="message"></textarea>

                                <div class="text-center">
                                    <button class="custom-btn bg-orange waves-light waves-effect waves-light" tabindex="0" type="submit">
                                        <span>Göndər</span>
                                        <i class="ion-android-send"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- rs-contact - end -->

                    </div>
                </div>
                <!-- right-sidebar - end -->

            </div>
        </div>
    </section>
    <!-- service-section - end
    ================================================== -->



@endsection
