@extends('layouts.master')
@section('title',"Profile Page")

@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-image" style="background-image: url({{ asset('assets/media/photos/photo17@2x.jpg') }});">
            <div class="bg-black-75">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <a class="img-link" href="#">
                            <img class="img-avatar img-avatar96 img-avatar-thumb"
                                 src="{{asset(Auth::user()->image ? Auth::user()->image : 'assets/media/avatars/avatar.jpg')}}" alt="">
                        </a>
                        <h1 class="font-w700 my-2 text-white">Mənim Profilim</h1>
                        <h2 class="h4 font-w700 text-white-75">
                            {{ Auth::user()->name }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{route('profileUpdate')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('layouts.error_messages')
                    <!-- User Profile -->
                        <h2 class="content-heading pt-0">
                            <i class="fa fa-fw fa-user-circle text-muted mr-1"></i>Məlumatlarım
                        </h2>
                        <div class="row push">
                            <div style="margin: auto" class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="name">Ad</label>
                                    <input type="text" class="form-control" name="name"
                                           value="{{ Auth::user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" disabled="disabled"
                                           value="{{Auth::user()->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="admin-title">Sistem Rolu</label>
                                    <input type="text" class="form-control" id="admin-title" disabled="disabled"
                                           value="Admin">
                                </div>
                                <div class="form-group">
                                    <label>Cari Şəkil</label>
                                    <div class="push">
                                        <img class="img-avatar" src="{{asset(Auth::user()->image ? Auth::user()->image : 'assets/media/avatars/avatar.jpg')}}" alt="">
                                    </div>
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                               id="dm-profile-edit-avatar" name="image">
                                        <label class="custom-file-label" for="dm-profile-edit-avatar">Profil şəkli
                                            seçin</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END User Profile -->

                        <!-- Change Password -->
                        <h2 class="content-heading pt-0">
                            <i class="fa fa-fw fa-asterisk text-muted mr-1"></i> Şifrə Dəyiş
                        </h2>
                        <div class="row push">
                            <div style="margin: auto" class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="current_password">Cari Şifrə</label>
                                    <input type="password" class="form-control" id="current_password"
                                           name="current_password">
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="new_password">Yeni Şifrə</label>
                                        <input type="password" class="form-control" id="new_password"
                                               name="new_password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label for="new_password_confirm">Yeni Şifrə təkrar</label>
                                        <input type="password" class="form-control" id="new_password_confirm"
                                               name="new_password_confirm">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Change Password -->
                        <!-- Submit -->
                        <div class="row push">
                            <div class="col-lg-8 col-xl-5 offset-lg-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-primary">
                                        <i class="fa fa-check-circle mr-1"></i> Məlumatları yenilə
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- END Submit -->
                    </form>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
