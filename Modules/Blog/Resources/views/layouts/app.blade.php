<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    @include('blog::layouts.head')
</head>
<body class="stretched">
    <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">

        @include('blog::layouts.header')

        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Blog</h1>
                <span>Our Latest News</span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </div>

        </section>
        <!-- #page-title end -->

        @include('blog::layouts.content')

        @include('blog::layouts.footer')

        @include('blog::layouts.scripts')
</body>
</html>


