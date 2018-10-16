<!-- Post Single - Share
============================================= -->
<div class="si-share noborder clearfix">
    <span>{{ __('Compartilhe este post:') }}</span>
    <div>
        <a href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}&title={{ $post->title }}" class="social-icon si-borderless si-facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $post->title }}&via={{ config('app.name') }}&hashtags=Eletronica" class="social-icon si-borderless si-twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
        </a>
        <a href="https://plus.google.com/share?url={{ request()->fullUrl() }}&text={{ $post->excerpt }}&hl=pt-BR" class="social-icon si-borderless si-gplus">
            <i class="icon-gplus"></i>
            <i class="icon-gplus"></i>
        </a>
        <a href="http://pinterest.com/pin/create/link/?url={{ request()->fullUrl() }}" class="social-icon si-borderless si-pinterest">
            <i class="icon-pinterest"></i>
            <i class="icon-pinterest"></i>
        </a>
        {{--  <a href="#" class="social-icon si-borderless si-rss">
            <i class="icon-rss"></i>
            <i class="icon-rss"></i>
        </a>
        <a href="#" class="social-icon si-borderless si-email3">
            <i class="icon-email3"></i>
            <i class="icon-email3"></i>
        </a>  --}}
    </div>
</div><!-- Post Single - Share End -->