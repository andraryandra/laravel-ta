@extends('layouts.app')

@section('title', 'Admin Users Page')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}"/>

    {{-- <link rel="stylesheet"
        href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}"> --}}
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Users Admin</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ url('/dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('users.admin.index') }}">Users Admin</a></div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Users Admin Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <button class="btn btn-success mb-3 me-3" title="Import" onclick="window.location.href='{{ route('users.admin.import.index') }}'"><i class="fa-solid fa-file-import mr-2"></i>Import</button>
                                    <button class="btn btn-primary mb-3 me-3" title="Add New" onclick="window.location.href='{{ route('users.admin.create') }}'"><i class="fa-solid fa-plus mr-2"></i>Add New</button>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($usersAdmin as $user_admin)
                                                <tr class="">
                                                    <td>
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-capitalize" title="Show">
                                                        {{ $user_admin->name }}
                                                        <div class="table-links">
                                                            <a href="{{ route('users.admin.show', $user_admin->id) }}" class="text-primary">Profile</a>
                                                        </div>
                                                    </td>
                                                    <td title="Edit"><a href="{{ route('users.admin.edit', $user_admin->id) }}" class="text-black">{{ $user_admin->email }}</a></td>
                                                    <td class="text-uppercase">{{ $user_admin->categoriRole->type_role }}
                                                    </td>
                                                    <td>
                                                        <div class="badge @if ($user_admin->id_status_user == 2)
                                                            badge-success @elseif ($user_admin->id_status_user == 1)
                                                            badge-danger
                                                        @endif">
                                                            {{ $user_admin->statusUser->type_status }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('users.admin.delete', $user_admin->id) }}" method="POST">
                                                            <button type="button" title="Change Password" class="btn btn-warning btn-action m-1" onclick="window.location.href='{{ route('users.admin.reset-password.index', $user_admin->id) }}'"><i class="fa-solid fa-key"></i></button>

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-action m-1" title="Delete"><i class="fas fa-trash"></i></button>
                                                        </form>

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
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
