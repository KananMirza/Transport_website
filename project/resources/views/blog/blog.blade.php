@extends('layouts.master')
@section('title',$blog->title)

@section('meta')
    <meta name="robots" content="index, follow"/>
    <meta name="author" content="Kanan Mirzayev">
    <meta name="keywords" content="{{$blog->tags}}" />
    <meta name="description" content="{{$blog->title}}">
    <meta property="og:image" content="{{env('way').$blog->image}}" />
    <meta property="og:image:width" content="358" /><meta property="og:image:height" content="367" /><meta property="og:image:alt" content="Ucuz Yükdaşıma logo" /><meta property="og:image:type" content="image/png" />
    <meta property="og:locale" content="az_AZ" />
    <meta property="og:description" content="{{$blog->title}}" />
    <meta property="og:url" content="{{env('way').'blog/'.$blog->slug}}" />
    <meta property="og:site_name" content="Ucuz Yükdaşıma" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="{{env('way').$blog->image}}" />
    <meta name="twitter:title" content="{{$blog->title}}" />
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
                    <li class="breadcrumb-item active">Bloq</li>
                </ol>

                <h2 class="breadcrumb-title">{{$blog->title}}</h2>

            </div>
        </div>
    </section>
    <!-- breadcrumb-section - end
    ================================================== -->

    <!-- blog-section - start
		================================================== -->
    <section id="blog-section" class="blog-section sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">

                <!-- blog-details - start -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-details">

                        <!-- blog-details-img - start -->
                        <div class="blog-details-img mb-40">
                            <img src="{{env('way').$blog->image}}" alt="Image">
                        </div>
                        <!-- blog-details-img - end -->

                        <ul class="post-mate ul-li mb-40">
                            <li>
                                Tags: {{$blog->tags}}
                            </li>
                        </ul>

                        <!-- blog-details-contant - start -->
                        <div class="blog-details-contant mb-40">
                            <h1 class="title-xlarge mb-15">
                                {{$blog->title}}
                            </h1>

                            <div class="mb-30">
                                {!! $blog->content !!}
                            </div>

                        </div>
                        <!-- blog-details-contant - end -->


                    </div>

                </div>
                <!-- blog-details - end -->

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

                        <!-- rs-recent-post - start -->
                        <div class="rs-recent-post mb-30">
                            <h2 class="title-small">
                                Son Bloqlar
                            </h2>

                            <ul class="rs-recent-post-list ul-li-block">
                                @foreach($blogs as $text)
                                    <li>
                                        <a href="#!" class="waves-effect">
											<span class="post-img float-left">
												<img src="{{env('way').$text->image}}" alt="recent blog image">
											</span>
                                            {{$text->title}}
                                            <small>{{\Carbon\Carbon::parse($text->created_at)->isoFormat('MMM Do YYYY')}}</small>
                                        </a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                        <!-- rs-recent-post - end -->

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
                            @include('layouts.messages')
                            <h2 class="title-small">
                                Yeniliklərdən xəbəriniz olsun
                            </h2>

                            <form action="{{route('subscribe')}}" class="rs-contact-form" method="POST">
                                @csrf
                                <input type="email" placeholder="Email" name="email">

                                <div class="text-center">
                                    <button type="submit" class="custom-btn bg-orange waves-light waves-effect waves-light" tabindex="0">
                                        <span>Abonə ol</span>
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
    <!-- blog-section - end
    ================================================== -->


@endsection
