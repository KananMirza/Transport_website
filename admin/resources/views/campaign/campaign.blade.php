@extends('layouts.master')
@section('title',"Kampaniyalar")

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Kampaniya Əlavə et</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Ana səhifə</li>
                            <li class="breadcrumb-item active" aria-current="page">Kampaniya Əlavə et</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="content content-full content-boxed">
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{route('campaignAdd')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            @include('layouts.error_messages')
                    <!-- User Profile -->
                        <h2 class="content-heading pt-0">
                            <i class="fas fa-bullhorn text-muted mr-1"></i>Kampaniya Əlavə Et
                        </h2>
                        <div class="row push">
                            <div style="margin: auto" class="col-lg-10 col-xl-6">
                                <div class="form-group">
                                    <label for="name">Başlıq</label>
                                    <input type="text" class="form-control"
                                           value="" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="name">Haqqında</label>
                                    <textarea class="form-control"
                                              rows="5" name="about"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                               id="dm-profile-edit-avatar" name="image">
                                        <label class="custom-file-label" for="dm-profile-edit-avatar">Şəkil Əlavə et</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Başlama tarixi</label>
                                    <input type="date" class="form-control"
                                           value="" name="publish_date">
                                </div>
                                <div class="form-group">
                                    <label for="name">Bitmə tarixi</label>
                                    <input type="date" class="form-control"
                                           value="" name="end_date">
                                </div>
                            </div>
                        </div>
                        <!-- END User Profile -->
                        <!-- Submit -->
                        <div class="row push">
                            <div class="col-lg-8 col-xl-5 offset-lg-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-primary">
                                        <i class="fa fa-check-circle mr-1"></i> Əlavə Et
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
@endsection
