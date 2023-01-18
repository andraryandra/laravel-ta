@extends('layouts.app')

@section('title', 'Reset Password Users Admin')

@push('style')
    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet" href="{{ asset('') }}"> --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}" />
    {{-- <link rel="stylesheet"
        href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}"> --}}
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="{{ route('users.admin.index') }}"
                        class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>{{ __('Users Admin') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('users.admin.index') }}">Users Admin</a></div>
                    <div class="breadcrumb-item">Reset Password</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="{{ route('users.admin.reset-password', $userAdmin->id) }}" method="POST"
                                class="needs-validation" novalidate="">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <h4>{{ __('Reset Password') }}</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">

                                        <label>{{ __('Password') }}</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password">
                                        <p class="form-text fst-italic text-danger">--- Kosongkan jika tidak ingin
                                            mengubah password.</p>
                                        @error('password')
                                            <div class="text-danger fst-italic">* {{ $message }}</div>
                                        @enderror
                                        <div class="invalid-feedback">
                                            Setup your Password!
                                        </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="card">
                                <div class="card-header" type="button" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <h4>{{ __('Reset Password') }}</h4>
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <div class="card-body">
                                        <div class="form-group">

                                            <label>{{ __('Password') }}</label>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password">
                                            <p class="form-text fst-italic text-danger">--- Kosongkan jika tidak ingin
                                                mengubah password.</p>
                                            @error('password')
                                                <div class="text-danger fst-italic">* {{ $message }}</div>
                                            @enderror
                                            <div class="invalid-feedback">
                                                Setup your Password!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
