<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.frontend.head')
</head>
<body>
    <div class="wrap">
    @include('layouts.frontend.logo_nav')

    @include('layouts.frontend.main_slider')

    @include('layouts.frontend.feature_block')

    @include('layouts.frontend.portifolio')

    @include('layouts.frontend.call')

    @include('layouts.frontend.testimonials')

    @include('layouts.frontend.clients_logo')

    @include('layouts.frontend.footer_widgets')

    @include('layouts.frontend.footer')
    </div>    
    @include('layouts.frontend.script')
</body>
</html>