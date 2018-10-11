@extends('layouts.admin.app') 
@section('contentArea')
    <!-- Page header -->
    <div class="page-header page-header-light">

        @yield('header')

    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        @yield('content')
    </div>
    <!-- /content area -->
@endsection