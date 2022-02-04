@extends('layouts.master')
@section('title',"Abonələr")

@section('content')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Abonələr</h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Ana səhifə</li>
                            <li class="breadcrumb-item active" aria-current="page">Abonələr</li>
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
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Email</th>
                            <th>Qeydiyyat Tarixi</th>
                            <th class="d-none d-sm-table-cell">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $key=>$data)
                            <tr>
                                <td class="text-center">{{$key+1}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y')}}</td>
                                <td>
                                    <span class="badge badge-{{$data->status === '1' ? 'success' : 'danger'}}">{{$data->status === '1' ? 'Aktiv' : 'Deaktiv'}}</span>
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
        const viewMessage = (id) => {
            const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "POST",
                url: "/messages/all",
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
                        document.getElementById('name').value = data.name;
                        document.getElementById('phone').value = data.phone;
                        document.getElementById('content').innerText = data.content;
                        $('#viewMessage').modal('show')
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
    </script>

@endsection
