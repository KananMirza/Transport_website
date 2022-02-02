@extends('layouts.master')
@section('title','Ucuz Yükdaşıma | Axtarış')
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
                    <li class="breadcrumb-item active">Axtarış</li>
                </ol>

                <h2 class="breadcrumb-title">Axtarış</h2>

            </div>
        </div>
    </section>
    <!-- breadcrumb-section - end
    ================================================== -->


@endsection
