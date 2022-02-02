@extends('layouts.master')
@section('title','Ucuz Yükdaşıma | Əlaqə')

@section('content')


    <!-- breadcrumb-section - start
		================================================== -->
    <section id="breadcrumb-section" class="breadcrumb-section clearfix">
        <div class="overlay-white sec-ptb-100">
            <div class="container">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Ana səhifə</a></li>
                    <li class="breadcrumb-item active">Əlaqə</li>
                </ol>

                <h2 class="breadcrumb-title">Əlaqə</h2>

            </div>
        </div>
    </section>
    <!-- breadcrumb-section - end
    ================================================== -->

    <!-- contact-section - start
		================================================== -->
    <section id="contact-section" class="contact-section sec-ptb-100 clearfix">
        @include('layouts.messages')
        <div class="container">
            <div class="row">

                <!-- contact-form - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <form class="contact-form" action="{{route('order')}}" method="POST">
                        @csrf
                        <h2 class="title-large mb-40">
                            Bizimlə Əlaqə
                        </h2>

                        <input type="text" placeholder="Ad" name="name">
                        <input type="text" placeholder="Mobil nömrə" name="phone">
                        <textarea placeholder="Zəhmət olmasa mesajınızı qeyd edin.Əməkdaşlarımız tezliklə sizinlə əlaqə saxlayacaqdır." name="message"></textarea>

                        <div class="text-center">
                            <button class="custom-btn bg-orange waves-light" type="submit">
                                <span>Göndər</span>
                                <i class="ion-android-send"></i>
                            </button>
                        </div>

                    </form>
                </div>
                <!-- contact-form - end -->

                <!-- basic info & map - start -->
                <div class="col-lg-8 col-md-12 col-sm-12">

                    <!-- basic-info - start -->
                    <div class="basic-info">
                        <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="basic-info-item text-center">

										<span class="icon">
											<i class="ion-ios-location"></i>
										</span>


                                   <p>{{$setting->adress}}</p>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="basic-info-item text-center">

										<span class="icon">
											<i class="ion-android-call"></i>
										</span>
                                    @foreach(json_decode($setting->phones) as $phone)
                                    <p><a href="tel:{{$phone}}">{{$phone}}</a></p>
                                    @endforeach
                                   </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="basic-info-item text-center">

										<span class="icon">
											<i class="ion-ios-email"></i>
										</span>

                                    <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- basic-info - end -->

                    <!-- google-map - start -->
                    <div id="google-map">
                        <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.833684194355!2d49.80703231519605!3d40.41253506381893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40308761ec08d3b7%3A0x78aad37b2cef40e8!2sUcuz+Yuk+Dasima!5e0!3m2!1saz!2s!4v1532695662762" width="100%" height="540" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                    <!-- google-map - end -->

                </div>
                <!-- basic info & map - end -->

            </div>
        </div>
    </section>
    <!-- contact-section - end
    ================================================== -->



@endsection
