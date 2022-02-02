<!-- header-section - start
================================================== -->
<header id="header-section" class="header-section cd-auto-hide-header clearfix">

    <!-- header-top - start -->
    <div class="header-top">
        <div class="container">
            <div class="row">

                <!-- contact-info - start -->
                <div class="col-lg-8 col-md-8">
                    <ul class="contact-info ul-li">

                        <li>
                            <a href="tel:{{json_decode(\App\Models\settings::first()->phones)[2]}}">
                                <i class="ion-social-whatsapp-outline"></i>
                            {{json_decode(\App\Models\settings::first()->phones)[2]}}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{\App\Models\settings::first()->email}}">
                            <i class="ion-paper-airplane"></i>
                            {{\App\Models\settings::first()->email}}
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- contact-info - end -->

                <!-- social - start -->
                <div class="col-lg-4 col-md-4">
                    <ul class="social">

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
                <!-- social - end -->

            </div>
        </div>
    </div>
    <!-- header-top - end -->



    <!-- header-bottom - start -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">

                <!-- brand-logo - start -->
                <div class="col-lg-3">
                    <a href="{{route('index')}}" class="brand-logo">
                        <img src="{{env('way').\App\Models\settings::first()->logo}}" style="margin-top: -100px" alt="UcuzYükdaşıma Logo">
                    </a>
                </div>
                <!-- brand-logo - end -->

                <!-- main-menu - start -->
                <div class="col-lg-6">
                    <ul class="main-menu">
                        <li class="active"><a href="{{route('index')}}">Ana səhifə</a></li>
                        <li><a href="{{route('aboutIndex')}}">Haqqımızda</a></li>

                        <li>
                            <a href="#!">Xidmətlər <i class="ion-arrow-down-b"></i></a>

                            <div class="dropdown-area">
                                <ul class="dropdown-list clearfix">
                                    <li><a href="service.html">Xidmətlərimiz</a></li>
                                    <li><a href="service-details.html">Daşınılan yüklər</a></li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#!">Blog </a>
                        </li>

                        <li>
                            <a href="{{route('contactIndex')}}">Əlaqə </a>
                        </li>
                    </ul>
                </div>
                <!-- main-menu - end -->

                <!-- quote-search-btn - start -->
                <div class="col-lg-3">
                    <div class="quote-search-btn">
                        <a href="#!" class="quote-btn waves-light" data-toggle="modal" data-target="#quoteform">
                            Sifariş edin!
                        </a>

                        <button type="button" class="toggle-overlay search-btn waves-light">
                            <i class="ion-search"></i>
                        </button>

                    </div>
                </div>
                <!-- quote-search-btn - end -->

            </div>
        </div>
    </div>
    <!-- header-bottom - end -->

</header>
<!-- header-section - end
================================================== -->





<!-- altranative navbar - start -->
<nav class="alt-navbar navbar">

    <!-- brand logo - start -->
    <a class="navbar-brand" href="{{route('index')}}">
        <img src="{{env('way').\App\Models\settings::first()->logo}}" style="height: 50px;width: 150px" alt="UcuzYükdaşıma Logo">
    </a>
    <!-- brand logo - end -->

    <!-- Collapse button - start -->
    <button class="alt-menu-btn navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="ion-android-menu"></i>
    </button>
    <!-- Collapse button - end -->

    <!-- Collapsible content - start -->
    <div class="alt-menu collapse navbar-collapse" id="navbarSupportedContent">

        <!-- contact-info - start -->
        <ul class="contact-info navbar-nav">

            <li>
                <i class="ion-social-whatsapp-outline"></i>
                {{json_decode(\App\Models\settings::first()->phones)[2]}}
            </li>
            <li>
                <i class="ion-paper-airplane"></i>
                {{\App\Models\settings::first()->email}}
            </li>

        </ul>
        <!-- contact-info - end -->

        <!-- social - start -->
        <ul class="social ul-li mb-30">

            <li>
                <a href="{{json_decode(\App\Models\settings::first()->social_link)[0]}}" class="bg-facebook waves-light waves-effect waves-light">
                    <i class="ion-social-facebook-outline"></i>
                </a>
            </li>
            <li>
                <a href="{{json_decode(\App\Models\settings::first()->social_link)[1]}}" class="bg-googleplus waves-light waves-effect waves-light">
                    <i class="ion-social-instagram-outline"></i>
                </a>
            </li>
        </ul>
        <!-- social - end -->

        <!-- Links -->
        <ul class="alt-menu-list navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">Ana səhifə</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('aboutIndex')}}">Haqqımızda</a>
            </li>

            <li class="nav-item alt-dropdown-btn">
                <button type="button" class="nav-link" data-toggle="collapse" data-target="#service">
                    Xidmətlər <i class="ion-arrow-down-b"></i>
                </button>

                <ul id="service" class="alt-dropdown collapse">
                    <li><a href="service.html">Xidmətlərimiz</a></li>
                    <li><a href="service-details.html">Daşınılan yüklər</a></li>
                </ul>
            </li>

            <li class="nav-item alt-dropdown-btn">
                <a href="" class="nav-link">
                    Blog
                </a>
            </li>

            <li class="nav-item alt-dropdown-btn">
                <a href="{{route('contactIndex')}}" class="nav-link">
                    Əlaqə
                </a>
            </li>
        </ul>
        <!-- Links -->

        <div class="quote-search-btn">
            <a href="#!" class="quote-btn waves-light" data-toggle="modal" data-target="#quoteform">
                Sifariş edin!
            </a>

            <button type="button" class="toggle-overlay search-btn waves-light">
                <i class="ion-search"></i>
            </button>
        </div>

    </div>
    <!-- Collapsible content - end -->

</nav>
<!-- altranative navbar - end -->





<!-- search-body - start -->
<div class="search-body">
    <div class="overlay-white">

        <div class="outer-close toggle-overlay">
            <a class="search-close">
                <i class="ion-close-round"></i>
            </a>
        </div>
        <form class="search-form text-center" action="#">
            <input class="search-input" type="search" placeholder="Axtar...">
            <button type="button" class="custom-btn bg-orange waves-effect waves-light">
                <span>Axtar</span>
                <i class="ion-search"></i>
            </button>
        </form>

    </div>
</div>
<!-- search-body - end -->





<!-- request quote form - start -->
<div class="quoteform modal fade" id="quoteform" tabindex="-1" role="dialog" aria-labelledby="quoteformlabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="overlay-white">

                <div class="modal-header">
                    <h5 class="modal-title" id="quoteformlabel">Sifariş verin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="ion-close-round"></span>
                    </button>
                </div>

                <div class="modal-body">
                    <form class="quote-form" action="{{route('order')}}" method="POST">
                        @csrf
                        <div class="row">

                            <div class="col-lg-6">
                                <input type="text" placeholder="Ad" name="name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Mobil Nömrə" name="phone">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Zəhmət olmasa mesajınızı qeyd edin.Əməkdaşlarımız tezliklə sizinlə əlaqə saxlayacaqdır." name="message"></textarea>
                            </div>

                            <div class="col-lg-12">
                                <button class="custom-btn bg-orange waves-light waves-effect waves-light" tabindex="0" type="submit">
                                    <span>Göndər</span>
                                    <i class="ion-android-send"></i>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- request quote form - end -->
