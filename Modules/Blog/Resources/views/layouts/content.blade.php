<!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    @yield('posts')

                    <!-- Pagination
                    ============================================= -->
                    <div class="row mb-3">
                        <div class="col-12">
                            <a href="#" class="btn btn-outline-secondary float-left">&larr; {{ __('Anterior') }}</a>
                            <a href="#" class="btn btn-outline-dark float-right">{{ __('Próximo') }} &rarr;</a>
                        </div>
                    </div>
                    <!-- .pager end -->

                </div><!-- .postcontent end -->
                
                @include('blog::layouts.sidebar')

            </div>

        </div>

    </section><!-- #content end -->