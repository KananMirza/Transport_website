
<!-- footer-section - start
		================================================== -->
<footer id="footer-section" class="footer-section clearfix">

    <!-- footer-top - start -->
    <div class="footer-top clearfix">
        <div class="overlay-black sec-ptb-100">
            <div class="container">
                <div class="row">

                    <!-- ftr-top-contant - start -->
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="ftr-top-contant">

                            <div class="text-left mb-40">
                                <a href="{{route('index')}}" class="brand-logo">
                                    <img src="{{env('way').\App\Models\settings::first()->logo}}" style="width: 236px;height: 54px" alt="UcuzYükdaşıma Logo">
                                </a>
                            </div>

                            <p class="mb-40">
                                {{\App\Models\settings::first()->about}}
                            </p>

                            <ul class="social clearfix">

                                <li>
                                    <a href="{{json_decode(\App\Models\settings::first()->social_link)[0]}}" class="bg-facebook waves-light">
                                        <i class="ion-social-facebook-outline"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{json_decode(\App\Models\settings::first()->social_link)[1]}}" class="bg-googleplus waves-light">
                                        <i class="ion-social-instagram-outline"></i>
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- ftr-top-contant - end -->

                    <!-- ftr-service-link - start -->
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="ftr-service-link">

                            <h2 class="title-small mb-40">
                                Xidmətlərimiz
                            </h2>

                            <ul class="ftr-link-list ul-li-block">
                                @foreach(\App\Models\services::where('status','1')->get() as $service)
                                <li>
                                    <a href="#!">
                                        <i class="ion-checkmark-circled"></i>
                                        {{$service->title}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                    <!-- ftr-service-link - end -->

                    <!-- ftr-quick-link - start -->
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="ftr-quick-link">

                            <h2 class="title-small mb-40">
                                Keçid
                            </h2>

                            <ul class="ftr-link-list ul-li-block">
                                <li>
                                    <a href="about.html">
                                        <i class="ion-checkmark-circled"></i>
                                        Ana səhifə
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <i class="ion-checkmark-circled"></i>
                                        Haqqımızda
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        <i class="ion-checkmark-circled"></i>
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="ion-checkmark-circled"></i>
                                        Əlaqə
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- ftr-quick-link - end -->

                    <!-- ftr-location - start -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="ftr-location">

                            <h2 class="title-small mb-40">
                                location
                            </h2>

                            <ul class="ftr-link-list ul-li-block">
                                <li>
                                    <p>
                                        <i class="ion-location"></i>
                                        {{\App\Models\settings::first()->adress}}
                                    </p>
                                </li>
                                <li>
                                    <a href="tel: {{json_decode(\App\Models\settings::first()->phones)[0]}}">
                                    <p>
                                        <i class="ion-iphone"></i>
                                        {{json_decode(\App\Models\settings::first()->phones)[0]}}
                                    </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel: {{json_decode(\App\Models\settings::first()->phones)[1]}}">
                                    <p>
                                        <i class="ion-android-call"></i>
                                        {{json_decode(\App\Models\settings::first()->phones)[1]}}
                                    </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel: {{json_decode(\App\Models\settings::first()->phones)[2]}}">
                                    <p>
                                        <i class="ion-android-call"></i>
                                        {{json_decode(\App\Models\settings::first()->phones)[2]}}
                                    </p>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto: {{\App\Models\settings::first()->email}}">
                                    <p>
                                        <i class="ion-android-mail"></i>
                                        {{\App\Models\settings::first()->email}}
                                    </p>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- ftr-location - start -->

                </div>
            </div>
        </div>
    </div>
    <!-- footer-top - end -->



    <!-- footer-bottom - start -->
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="copyright">
                        © All Right Reserved.Developed by
                        <a href="https://kananmirza.com/" target="blank" class="clr-orange"><u>KananMirza</u></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom - end -->

</footer>
<!-- footer-section - end
================================================== -->
