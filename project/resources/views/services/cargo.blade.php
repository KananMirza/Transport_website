@extends('layouts.master')
@section('title','Ucuz Yükdaşıma | Daşınılan Yüklər')

@section('content')


    <!-- breadcrumb-section - start
		================================================== -->
    <section id="breadcrumb-section" class="breadcrumb-section clearfix">
        <div class="overlay-white sec-ptb-100">
            <div class="container">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Ana səhifə</a></li>
                    <li class="breadcrumb-item active">Daşıdığımız Yüklər</li>
                </ol>

                <h2 class="breadcrumb-title">Daşıdığımız Yüklər</h2>

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
                <h3>Daşıdığımız</h3>
                <h2>Yüklər</h2>
            </div>

            <div class="row">
            @foreach($cargoes as $cargo)
                <!-- item - start -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
                        <div class="item" style="background-image: url('{{env('way').$cargo->image}}')">
                            <div class="overlay-white">

                                <h4 class="title-small mb-40">
                                    {{$cargo->title}}
                                    <small class="icon">
                                        <img src="{{asset('assets/images/service/car-icon.png')}}" alt="icon">
                                    </small>
                                </h4>
                                <p class="mb-15">
                                    {{$cargo->content}}
                                </p>


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
