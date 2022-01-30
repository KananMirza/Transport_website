@extends('layouts.master')
@section('title',"Logo Page")

@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Logo və Favicon</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Ana səhifə</li>
                            <li class="breadcrumb-item active" aria-current="page">Logo və Favicon</li>
                        </ol>
                    </nav>
                </div>
            </div>
            @include('layouts.error_messages')
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{route('logoUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- User Profile -->
                        <h2 class="content-heading pt-0">
                            <i class="fas fa-image text-muted mr-1"></i>Logo
                        </h2>
                        <div class="row push">
                            <div style="margin: auto" class="col-lg-10 col-xl-10">
                                <div class="form-group">
                                    <label>Cari Logo: </label>
                                    <img src="{{asset($data->logo)}}" class="w-50 h-50" />
                                    <div class="custom-file" style="margin-top: 20px">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="example-file-input-custom" name="image">
                                        <label class="custom-file-label" for="example-file-input-custom">Logo seçin</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END User Profile -->

                        <!-- Submit -->
                        <div class="row push">
                            <div class="col-lg-8 col-xl-5 offset-lg-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-primary">
                                        <i class="fa fa-check-circle mr-1"></i> Məlumatı yenilə
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
        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{route('faviconUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- User Profile -->
                        <h2 class="content-heading pt-0">
                            <i class="fas fa-image text-muted mr-1"></i>Favicon
                        </h2>
                        <div class="row push">
                            <div style="margin: auto" class="col-lg-10 col-xl-10">
                                <div class="form-group">
                                    <label>Cari Favicon: </label>
                                    <img src="{{asset($data->favicon)}}" style="width: 32px;height: 32px;margin-bottom: 20px" />
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="example-file-input-custom" name="image">
                                        <label class="custom-file-label" for="example-file-input-custom">Logo seçin</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END User Profile -->

                        <!-- Submit -->
                        <div class="row push">
                            <div class="col-lg-8 col-xl-5 offset-lg-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-primary">
                                        <i class="fa fa-check-circle mr-1"></i> Məlumatı yenilə
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
