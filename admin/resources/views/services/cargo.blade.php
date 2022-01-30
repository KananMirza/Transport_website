@extends('layouts.master')
@section('title',"Cargo")

@section('content')
    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Daşınılan Yüklər</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Ana səhifə</li>
                            <li class="breadcrumb-item active" aria-current="page">Daşınılan Yüklər</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
        @include('layouts.error_messages')
        <!-- Dynamic Table Full -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <a href=" javascript:void(0)">
                        <button class="btn btn-outline-primary float-right" onclick="viewModal()" >Əlavə
                            et
                        </button>
                    </a>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Başlıq</th>
                            <th>Şəkil</th>
                            <th>Status</th>
                            <th style="width: 35%;">Əməliyyat</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($datas as $key=>$data)
                            <tr>
                                <td class="text-center">{{$key+1}}</td>
                                <td>{{$data->title}}</td>
                                <td class="text-center"><img src="{{asset($data->image)}}" width="100px" height="100px" /></td>
                                <td>
                                    <select class="form-control" onchange="changeStatus({{$data->id}},this.value)">
                                        <option value="1" {{$data->status == 1 ? 'selected' : ''}}>Aktiv</option>
                                        <option value="0" {{$data->status == 0 ? 'selected' : ''}}>Deaktiv</option>
                                    </select>
                                </td>
                                <td>
                                    <button class="btn btn-outline-info" onclick="viewCargo({{$data->id}})">Bax</button>
                                    <button class="btn btn-outline-primary" onclick="editCargo({{$data->id}})">Redaktə et</button>
                                    <button class="btn btn-outline-danger" onclick="deleteCargo({{$data->id}})">Sil</button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </main>
    <!-- END Main Container -->

    <div class="modal fade" id="addCargo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xidmət Əlavə Et</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('addCargo')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="col-form-label">Basliq:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-form-label">Haqqında:</label>
                            <textarea type="text" class="form-control" name="about"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_image" class="col-form-label">Sekil:</label>
                            <div class="custom-file">
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="example-file-input-custom" name="image">
                                <label class="custom-file-label" for="example-file-input-custom">Şəkil seçin</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Təsdiqlə</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bagla</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="viewCargo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xidmət</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="title" class="col-form-label">Basliq:</label>
                        <input type="text" class="form-control" id="title" disabled="disabled">
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-form-label">Haqqında:</label>
                        <textarea type="text" class="form-control" id="about" disabled="disabled"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_image" class="col-form-label">Şəkil:</label>
                        <img src="" style="height: 200px;width: 200px" id="image">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bagla</button>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editCargo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xidmət</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('updateCargo')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input hidden name="id" id="id">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Basliq:</label>
                            <input type="text" class="form-control" id="edit_title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-form-label">Haqqında:</label>
                            <textarea type="text" class="form-control" id="edit_about" name="about"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_image" class="col-form-label">Cari Sekil:</label>
                            <img src="" style="height: 200px;width: 200px;margin-bottom: 10px" id="edit_image">
                            <div class="custom-file">
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <input type="file" class="custom-file-input" data-toggle="custom-file-input" id="example-file-input-custom" name="image">
                                <label class="custom-file-label" for="example-file-input-custom">Şəkil seçin</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Təsdiqlə</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bagla</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('css')

    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
    <style>
        #overlay{
            position: fixed;
            top: 0;
            z-index: 100;
            width: 100%;
            height:100%;
            display: none;
            background: rgba(0,0,0,.6);
        }
        .cv-spinner {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .spinner {
            width: 40px;
            height: 40px;
            border: 4px #ddd solid;
            border-top: 4px #2e93e6 solid;
            border-radius: 50%;
            animation: sp-anime 0.8s infinite linear;
        }
        @keyframes sp-anime {
            100% {
                transform: rotate(360deg);
            }
        }
        .is-hide{
            display:none;
        }
    </style>
@endsection
@section('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>

    <script>
        const viewModal = () => {
            $('#addCargo').modal('show')
        }
        const changeStatus = (id,status) => {
            const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "/services/cargo/status",
                data: {
                    _token: CSRF_TOKEN, id: id,status:status
                },
                success: function (data) {
                    console.log(data)
                    if (data === 0) {
                        swal({
                            title: "Xəta!",
                            text: "Gözlənilməyən xəta baş verdi!",
                            icon: "error",
                            button: "Bağla!",
                        });
                    } else {
                        swal({
                            title: "Uğurlu!",
                            text: "Status uğurla dəyiştirildi!",
                            icon: "success",
                            button: "Bağla!",
                        });
                        setTimeout(function (){
                            location.reload()
                        },1500)
                    }
                },
                error: function () {
                    swal({
                        title: "Xəta!",
                        text: "Gözlənilməyən xəta baş verdi!",
                        icon: "error",
                        button: "Bağla!",
                    });
                }
            })
        }
        const viewCargo = (id) => {
            const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "/services/cargo/view",
                data: {
                    _token: CSRF_TOKEN, id: id
                },
                success: function (data) {
                    console.log(data)
                    if (data === 0) {
                        swal({
                            title: "Xəta!",
                            text: "Gözlənilməyən xəta baş verdi!",
                            icon: "error",
                            button: "Bağla!",
                        });
                    } else {
                        const url = "{{ asset("") }}";
                        document.getElementById('title').value = data.title;
                        document.getElementById('about').value = data.content;
                        document.getElementById('image').src = url+data.image;
                        $('#viewCargo').modal('show');
                    }
                },
                error: function () {
                    swal({
                        title: "Xəta!",
                        text: "Gözlənilməyən xəta baş verdi!",
                        icon: "error",
                        button: "Bağla!",
                    });
                }
            })
        }
        const editCargo = (id) => {
            const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "/services/cargo/view",
                data: {
                    _token: CSRF_TOKEN, id: id
                },
                success: function (data) {
                    console.log(data)
                    if (data === 0) {
                        swal({
                            title: "Xəta!",
                            text: "Gözlənilməyən xəta baş verdi!",
                            icon: "error",
                            button: "Bağla!",
                        });
                    } else {
                        const url = "{{ asset("") }}";
                        document.getElementById('id').value = data.id;
                        document.getElementById('edit_title').value = data.title;
                        document.getElementById('edit_about').value = data.content;
                        document.getElementById('edit_image').src = url+data.image;
                        $('#editCargo').modal('show');
                    }
                },
                error: function () {
                    swal({
                        title: "Xəta!",
                        text: "Gözlənilməyən xəta baş verdi!",
                        icon: "error",
                        button: "Bağla!",
                    });
                }
            })
        }
        const deleteCargo = (id) => {
            swal({
                title: "Əminsiniz?",
                text: "Silinən Yükdaşıma geri qayıtmayacaq!",
                icon: "warning",
                buttons: ['Ləğv et','Qəbul edirəm'],
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            type: "POST",
                            url: "/services/cargo/delete",
                            data: {
                                _token: CSRF_TOKEN, id: id
                            },
                            success: function (data) {
                                console.log(data)
                                if (data === 0) {
                                    swal({
                                        title: "Xəta!",
                                        text: "Gözlənilməyən xəta baş verdi!",
                                        icon: "error",
                                        button: "Bağla!",
                                    });
                                } else {
                                    swal("Silmə Əməliyyatı Uğurla tamamlandı!", {
                                        icon: "success",
                                    });
                                    setTimeout(function (){
                                        location.reload();
                                    },1500)
                                }
                            },
                            error: function () {
                                swal({
                                    title: "Xəta!",
                                    text: "Gözlənilməyən xəta baş verdi!",
                                    icon: "error",
                                    button: "Bağla!",
                                });
                            }
                        })

                    } else {
                        swal("Silmə əməliyyatı ləğv edildi!");
                    }
                });

        }
    </script>
@endsection

