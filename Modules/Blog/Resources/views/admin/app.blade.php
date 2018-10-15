@extends('layouts.admin.app') 
@section('contentArea')
    <!-- Page header -->
    <div class="page-header page-header-light">

        @yield('header')

    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
        @if (session()->has('flash'))
            <div class="alert alert-success">{{ session('flash') }}</div>
        @endif
        @yield('content')
    </div>
    <!-- /content area -->
@endsection