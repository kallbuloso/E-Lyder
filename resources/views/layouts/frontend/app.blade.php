<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="loading" data-textdirection="ltr">>
<head>
    @include('layouts.frontend.head')
</head>
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded" data-open="click" data-menu="horizontal-menu" data-col="2-columns">>

    @include('layouts.frontend.fixed_top')

    @include('layouts.frontend.top_menu')

    <div class="app-content container center-layout mt-2">
            <div class="content-wrapper">
    
                {{--  @include('blog::layouts.breadcrumb')  --}}
    
                <div class="content-body">
                    <section class="row">
                        <div class="col-sm-12">
                            @include('blog::layouts.blog')
                        </div>
                    </section>
                </div>
            </div>
        </div>

    @include('layouts.frontend.footer')

    @include('layouts.frontend.script')
</body>
</html>