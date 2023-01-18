@extends('layouts.app')

@section('title', 'Create Users FLS')

@push('style')
    <!-- CSS Libraries -->
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
                <h1>Users Admin</h1>
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
                                </div>

                                <div class="card">
                                    <form action="{{ route('fls.store') }}" method="POST" class="needs-validation" novalidate="">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Create Users FLS</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="section-title mt-0">Role</div>
                                            <div class="form-group col-3">
                                                <label>Choose One</label>
                                                <select class="custom-select" name="id_role">
                                                    <option value="3">FLS</option>
                                                </select>
                                            </div>
                                            <input type="text" name="id_status_user" class="form-control" value="2" hidden required="">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Oh no! Name is invalid.
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Oh no! Email is invalid.
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" required="">
                                                <div class="invalid-feedback">
                                                    Setup your Password!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
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
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
