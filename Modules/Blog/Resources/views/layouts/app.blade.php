<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.frontend.head')
</head>
<body>
    <div class="wrap">
    @include('layouts.frontend.logo_nav')

    @include('blog::layouts.breadcrumb')

    @include('blog::layouts.blog')

    @include('layouts.frontend.footer_widgets')

    @include('layouts.frontend.footer')
    </div>    
    @include('layouts.frontend.script')
</body>
</html>