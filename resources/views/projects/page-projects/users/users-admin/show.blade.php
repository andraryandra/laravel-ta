@extends('layouts.app')

@section('title', 'Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="{{ route('users.admin.index') }}"
                        class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title text-capitalize">Hi, {{ $userAdmin->name }}!</h2>
                <p class="section-lead">
                    Change information about yourself on this page.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                <img alt="image"
                                    src="{{ asset('img/avatar/avatar-1.png') }}"
                                    class="rounded-circle profile-widget-picture">
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Posts</div>
                                        <div class="profile-widget-item-value">187</div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-widget-description">
                                <div class="profile-widget-name text-capitalize">{{ $userAdmin->name }} <div
                                        class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div> {{ $userAdmin->categoriRole->type_role }}
                                    </div>
                                </div>
                                Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a
                                fictional character but an original hero in my family, a hero for his children and for his
                                wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with
                                <b>'John Doe'</b>.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                            <form method="post"
                                class="needs-validation"
                                novalidate="">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>First Name</label>
                                            <input type="text"
                                                class="form-control"
                                                value="{{ $userAdmin->name }}"
                                                required="" disabled>
                                            <div class="invalid-feedback">
                                                Please fill in the first name
                                            </div>
                                        </div>
                                        {{-- <div class="form-group col-md-6 col-12">
                                            <label>Last Name</label>
                                            <input type="text"
                                                class="form-control"
                                                value="Maman"
                                                required="">
                                            <div class="invalid-feedback">
                                                Please fill in the last name
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-7 col-12">
                                            <label>Email</label>
                                            <input type="email"
                                                class="form-control"
                                                value="{{ $userAdmin->email }}"
                                                required="" disabled>
                                            <div class="invalid-feedback">
                                                Please fill in the email
                                            </div>
                                        </div>
                                        <div class="form-group col-md-5 col-12">
                                            <label>Phone</label>
                                            <input type="tel"
                                                class="form-control"
                                                value="" disabled>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <div class="card shadow">
                                                <div class="card-header">
                                                <label>Bio</label>
                                            </div>
                                            <div class="card-body">
                                                <p class="">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
