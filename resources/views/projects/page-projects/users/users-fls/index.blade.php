@extends('layouts.app')

@section('title', 'FLS Users Page')

@push('style')
    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet"
        href="assets/modules/datatables/datatables.min.css"> --}}
    {{-- <link rel="stylesheet"
        href="assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css"> --}}

    {{-- <link rel="stylesheet" href="{{ asset('') }}"> --}}
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">

    {{-- <link rel="stylesheet"
        href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}"> --}}
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Users FLS</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Modules</a></div>
                    <div class="breadcrumb-item">DataTables</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Users FLS Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <button class="btn btn-success mb-3 me-3" onclick="window.location.href='{{ route('fls.import.index') }}'">Import</button>
                                    <a href="{{ url('/users/fls/create') }}" class="btn btn-warning mb-3 me-3">Add</a>
                            </div>
                                <div class="table-responsive">
                                    <table class="table-striped table" id="table-2">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            data-checkbox-role="dad" class="custom-control-input"
                                                            id="checkbox-all">
                                                        <label for="checkbox-all"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usersFLS as $user_fls)
                                                <tr class="">
                                                    <td>
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td><img src="{{ asset('icon/icon-component/delete.png') }}" alt="delete" style="font-size: 1px;"></td>
                                                    <td>{{ $user_fls->name }}</td>
                                                    <td>{{ $user_fls->email }}</td>
                                                    <td class="text-uppercase">{{ $user_fls->categoriRole->type_role }}</td>
                                                    <td>
                                                        <div class="badge @if ($user_fls->id_status_user == 2)
                                                            badge-success @elseif ($user_fls->id_status_user == 1)
                                                            badge-danger
                                                        @endif">
                                                            {{ $user_fls->statusUser->type_status }}
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    {{-- <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script> --}}
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
