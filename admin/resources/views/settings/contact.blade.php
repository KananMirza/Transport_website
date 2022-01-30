@extends('layouts.master')
@section('title',"Contact Page")

@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Əlaqə</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Ana səhifə</li>
                            <li class="breadcrumb-item active" aria-current="page">Əlaqə</li>
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
                    <form action="{{route('updateIndex')}}" method="POST">
                    @csrf
                    @include('layouts.error_messages')
                    <!-- User Profile -->
                        <h2 class="content-heading pt-0">
                            <i class="fas fa-user-cog text-muted mr-1"></i>Əlaqə
                        </h2>
                        <div class="row push">
                            <div style="margin: auto" class="col-lg-8 col-xl-5">
                                <div class="form-group">
                                    <label for="name">Əlaqə Telefonları: </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-home"></i>
                                                    </span>
                                        </div>
                                        <input type="text" class="form-control" id="example-group2-input1" name="phone[]" value="{{json_decode($data->phones)[0]}}">
                                    </div>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                       <i class="fas fa-mobile-alt"></i>
                                                    </span>
                                        </div>
                                        <input type="text" class="form-control" id="example-group2-input1" name="phone[]" value="{{json_decode($data->phones)[1]}}">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="fas fa-mobile-alt"></i>
                                                    </span>
                                        </div>
                                        <input type="text" class="form-control" id="example-group2-input1" name="phone[]" value="{{json_decode($data->phones)[2]}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Adress: </label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                       <i class="fas fa-map-marked"></i>
                                                    </span>
                                        </div>
                                        <input type="text" class="form-control" id="example-group2-input1" name="adress" value="{{$data->adress}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="admin-title">Email</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                       <i class="fas fa-at"></i>
                                                    </span>
                                        </div>
                                        <input type="text" class="form-control" id="example-group2-input1" name="email" value="{{$data->email}}">
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
