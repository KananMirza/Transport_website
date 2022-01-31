@extends('layouts.master')
@section('title',"Slider")

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Slider</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Ana səhifə</li>
                            <li class="breadcrumb-item active" aria-current="page">Slider</li>
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
                    <a href="javascript:void(0)">
                        <button class="btn btn-outline-primary float-right" onclick="viewModal()">Əlavə
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
                            <th>Başlama vaxtı</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Status</th>
                            <th style="width: 35%;">Əməliyyat</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $key=>$data)
                            <tr>
                                <td class="text-center">{{$key+1}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{ \Carbon\Carbon::parse($data->publish_date)->format('d/m/Y')}}</td>
                                <td>
                                    <span class="badge  badge-{{ $data->status == 0 ? "danger" : "success" }}">{{ $data->status == 0 ? "Deaktiv" : "Aktiv" }}</span>
                                </td>
                                <td>
                                    <button class="btn btn-outline-info" onclick="viewSlider({{$data->id}})">Bax</button>
                                    <button class="btn btn-outline-primary" onclick="editSlider({{$data->id}})">Redaktə et</button>
                                    <button class="btn btn-outline-danger" onclick="deleteSlider({{$data->id}})">Sil</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Dynamic Table Full -->

        </div>
        <!-- END Page Content -->
    </main>

    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yeni Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" enctype="multipart/form-data" method="POST">
                        @csrf
                    <div class="form-group">
                        <label for="title" class="col-form-label">Basliq:</label>
                        <input type="text" class="form-control" name="title"  >
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-form-label">Haqqında:</label>
                        <textarea type="text" class="form-control" name="about" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-form-label">Şəkil:</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="publish_date" class="col-form-label">Baslama vaxti:</label>
                        <input type="date" class="form-control" name="publish_date" >
                    </div>
                    <div class="form-group">
                        <label for="end_date" class="col-form-label">Bitmə vaxti:</label>
                        <input type="date" class="form-control" name="end_date" >
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
    <div class="modal fade" id="viewSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yeni Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Basliq:</label>
                        <input type="text" class="form-control" id="title" disabled >
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-form-label">Haqqında:</label>
                        <textarea type="text" class="form-control" id="about" disabled></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image" class="col-form-label">Şəkil:</label>
                        <img src="" style="width: 100%;height: 400px" id="image" />
                    </div>
                    <div class="form-group">
                        <label for="publish_date" class="col-form-label">Baslama vaxti:</label>
                        <input type="date" class="form-control" id="publish_date" disabled>
                    </div>
                    <div class="form-group">
                        <label for="end_date" class="col-form-label">Bitmə vaxti:</label>
                        <input type="date" class="form-control" id="end_date" disabled>
                    </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Təsdiqlə</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bagla</button>
                        </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="editSlider" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yeni Slider</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('updateSlider')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input name="id" hidden id="id">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Basliq:</label>
                            <input type="text" class="form-control" name="title" id="edit_title" >
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-form-label">Haqqında:</label>
                            <textarea type="text" class="form-control" name="about" id="edit_about"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-form-label">Cari Şəkil:</label>
                            <img src="" style="width: 100%;height: 400px" id="edit_image" />
                            <label class="col-form-label">Şəkil yüklə:</label>
                            <input type="file" class="form-control" style="margin-top: 10px" name="image" >

                        </div>
                        <div class="form-group">
                            <label for="publish_date" class="col-form-label">Baslama vaxti:</label>
                            <input type="date" class="form-control" name="publish_date" id="edit_publish_date" >
                        </div>
                        <div class="form-group">
                            <label for="end_date" class="col-form-label">Bitmə vaxti:</label>
                            <input type="date" class="form-control" name="end_date" id="edit_end_date">
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
          $('#viewModal').modal('show');
        }
        const viewSlider = (id) => {
            const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "/settings/slider/view",
                data: {
                    _token: CSRF_TOKEN, id: id,
                },
                success: function (data) {
                    console.log(data)
                    if (data === 0) {
                        swal({
                            title: "Xəta!",
                            text: "Gözlənilməyən xəta baş verdi!",
                            icon: "error",
                            button: "Aww yiss!",
                        });
                    } else {
                        const url = "{{ asset("") }}";
                        document.getElementById('title').value = data.title;
                        document.getElementById('about').value = data.content;
                        document.getElementById('image').src = url+data.image;
                        document.getElementById('publish_date').value = data.publish_date.substr(0,10);
                        document.getElementById('end_date').value = data.end_date.substr(0,10);
                        $('#viewSlider').modal('show');
                    }
                },
                error: function () {
                    swal({
                        title: "Xəta!",
                        text: "Gözlənilməyən xəta baş verdi!",
                        icon: "error",
                        button: "Aww yiss!",
                    });
                }
            })

        }
        const editSlider = (id) => {
            const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "/settings/slider/view",
                data: {
                    _token: CSRF_TOKEN, id: id,
                },
                success: function (data) {
                    console.log(data)
                    if (data === 0) {
                        swal({
                            title: "Xəta!",
                            text: "Gözlənilməyən xəta baş verdi!",
                            icon: "error",
                            button: "Aww yiss!",
                        });
                    } else {
                        const url = "{{ asset("") }}";
                        document.getElementById('id').value = data.id;
                        document.getElementById('edit_title').value = data.title;
                        document.getElementById('edit_about').value = data.content;
                        document.getElementById('edit_image').src = url+data.image;
                        document.getElementById('edit_publish_date').value = data.publish_date.substr(0,10);
                        document.getElementById('edit_end_date').value = data.end_date.substr(0,10);
                        $('#editSlider').modal('show');
                    }
                },
                error: function () {
                    swal({
                        title: "Xəta!",
                        text: "Gözlənilməyən xəta baş verdi!",
                        icon: "error",
                        button: "Aww yiss!",
                    });
                }
            })
        }
        const deleteSlider = (id) => {
            const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: "Əminsiz?",
                text: "Silinən slider ilə bağlı bütün məlumatlar silinəcək!",
                icon: "warning",
                buttons: ['Bağla','Razıyam'],
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: "POST",
                            url: "/settings/slider/delete",
                            data: {
                                _token: CSRF_TOKEN, id: id,
                            },
                            success: function (data) {
                                console.log(data)
                                if (data === 0) {
                                    swal({
                                        title: "Xəta!",
                                        text: "Gözlənilməyən xəta baş verdi!",
                                        icon: "error",
                                        button: "Anladım!",
                                    });
                                } else {
                                    swal("Kampaniya uğurla silindi!", {
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
                                    button: "Anladım!",
                                });
                            }
                        })

                    } else {
                        swal("Kampaniya silinmədi!");
                    }
                });

        }
    </script>


@endsection
