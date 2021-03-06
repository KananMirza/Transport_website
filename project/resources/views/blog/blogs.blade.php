@extends('layouts.master')
@section('title','Ucuz Yükdaşıma | Bloqlar')

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


    <!-- breadcrumb-section - start
		================================================== -->
    <section id="breadcrumb-section" class="breadcrumb-section clearfix">
        <div class="overlay-white sec-ptb-100">
            <div class="container">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Ana səhifə</a></li>
                    <li class="breadcrumb-item active">Bloqlar</li>
                </ol>

                <h2 class="breadcrumb-title">Bloqlar</h2>

            </div>
        </div>
    </section>
    <!-- breadcrumb-section - end
    ================================================== -->

    <!-- blog-section - start
		================================================== -->
    <section id="blog-section" class="blog-section main-blog-page sec-ptb-100 clearfix">
        <div class="container">
            <div class="row">

                <!-- all blog - start -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    @foreach($blogs as $blog)
                    <!-- blog - start -->
                    <div class="blog mb-40">

                        <div class="blog-img">
                            <img src="{{env('way').$blog->image}}" alt="{{$blog->title}}">
                            <span class="date">
									{{\Carbon\Carbon::parse($blog->created_at)->isoFormat('MMM Do YYYY')}}
								</span>
                        </div>

                        <div class="blog-contant clearfix">
                            <ul class="post-mate ul-li">
                                <li>
                                    Açar sözlər: {{$blog->tags}}
                                </li>
                            </ul>

                            <h2 class="title-xlarge mb-2">
                                {{$blog->title}}
                            </h2>
                            <p class="mb-2">
                                {!! substr($blog->content,0,200) !!}...
                            </p>

                            <div class="text-left" style="margin-top: 20px">
                                <a href="{{route('blogDetails',$blog->slug)}}" class="custom-btn bg-orange float-left waves-light">
                                    <span>Ətraflı</span>
                                    <i class="ion-ios-arrow-forward"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- blog - end -->
                        @endforeach
                </div>
                <!-- all blog - end -->

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
                                        <a href="{{route('blogDetails',$text->slug)}}" class="waves-effect">
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
