@extends('blog::admin.app')
{{--  stylesheets  --}}
@push('stylesheets')
    
@endpush
{{--  scripts  --}}
@push('scripts')
    <script src="{{ asset('ll/global_assets/js/demo_pages/datatables_extension_reorder.js') }}"></script>
@endpush
@section('header')
    
    {{--  <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Starters</span> - Navbars Fixed</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <a href="#" class="btn btn-labeled btn-labeled-right bg-pink-400">Button <b><i class="icon-menu7"></i></b></a>
        </div>
    </div>  --}}

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="#" class="breadcrumb-item">Link</a>
                    <span class="breadcrumb-item active">Current</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    {{--  <a href="#" class="breadcrumb-elements-item">
                        Link
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            Dropdown
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separate action</a>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </div>
    
@endsection
@section('content')
    <!-- Basic card -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h3 class="card-title">Posts</h3>
            <div class="header-elements">
                <div class="list-icons">
                    {{--  <a class="list-icons-item" data-action="collapse"></a>  --}}
                    {{--  <a class="list-icons-item" data-action="reload"></a>  --}}
                    {{--  <a class="list-icons-item" data-action="remove"></a>  --}}
                </div>
            </div>
        </div>

        <div class="card-body">

        </div>
    </div>
    <!-- /basic card -->
@endsection