@extends('layouts.master')
@section('title',"About Page")

@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Haqqında</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Ana səhifə</li>
                            <li class="breadcrumb-item active" aria-current="page">Haqqında</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-full content-boxed">
            <div class="block block-rounded">
                <div class="block-content">
                    <form action="{{route('updateAbout')}}" method="POST">
                    @csrf
                    @include('layouts.error_messages')
                    <!-- User Profile -->
                        <h2 class="content-heading pt-0">
                            <i class="fas fa-user-cog text-muted mr-1"></i>Haqqımızda
                        </h2>
                        <div class="row push">
                            <div style="margin: auto" class="col-lg-10 col-xl-10">
                                <div class="form-group">
                                    <label for="name">Haqqımızda: </label>
                                    <textarea class="form-control" rows="10" name="about">{{$data->about}}</textarea>

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
