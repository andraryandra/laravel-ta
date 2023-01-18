@extends('layouts.app')

@section('title', 'EOD Call Reports')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">

         <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}"/>

@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Eod Category</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Posts</a></div>
                    <div class="breadcrumb-item">All Posts</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        @foreach ((array)$eod_categories->count() as $item)
                                        <a class="nav-link active" href="#">All <span class="badge badge-white">{{ $item }}</span></a>
                                        @endforeach
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link"
                                            href="#">Draft <span class="badge badge-primary">1</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="#">Pending <span class="badge badge-primary">1</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="#">Trash <span class="badge badge-primary">0</span></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Posts Eod Category</h4>
                            </div>
                            <div class="m-3 d-flex">
                                <button class="btn btn-success mb-2 m-1" onclick="window.location.href=''"><i class="fa-solid fa-file-import"></i> Import</button>
                                <button class="btn btn-primary mb-2 m-1" onclick="window.location.href='{{ route('eod-categories.create') }}'"><i class="fa-solid fa-plus"></i> Add New</button>
                            </div>
                            <div class="card-body">
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
                                                <th>Name Eod Category</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($eod_categories as $eod_category)
                                                <tr class="">
                                                    <td>
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td class="text-uppercase">{{ $eod_category->name_categories }}</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('eod-categories.destroy',$eod_category->id ) }}" method="POST">
                                                            <button type="button" class="btn btn-action btn-info me-2" title="Edit" onclick="window.location.href='{{ route('eod-categories.edit',$eod_category->id ) }}'"><i class="fa fa-pencil"></i></button>

                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-action" title="Delete"><i class="fas fa-trash"></i></button>
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
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush
