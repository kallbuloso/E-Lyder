@extends('blog::layouts.app')

@section('meta-title', config('name'))
@section('meta-description', 'Blog du mara')

@section('posts')
<!-- Post Content
============================================= -->
<div class="postcontent nobottommargin clearfix">
	<!-- Posts
	============================================= -->
	<div id="posts" class="small-thumbs">
		@foreach ($posts as $post)
			<div class="entry clearfix">
				{{--  @if ($post->imageUrl)  --}}
					<div class="entry-image">
						<a href="{{ asset('images/blog/full/17.jpg') }}" data-lightbox="image"><img class="image_fade" src="{{ $post->image ?? 'images/blog/small/17.jpg'}}" alt="Standard Post with Image"></a>
					</div>					
				{{--  @endif  --}}

				<div class="entry-c">
					<div class="entry-title">
						<h2><a href="blog/{{ $post->url }}">{{ $post->title }}</a></h2>
					</div>
					<ul class="entry-meta clearfix">
						<li><i class="icon-calendar3"></i> {{ $post->date }} </li>
						<li><a href="#"><i class="icon-user"></i> {{ $post->author->name }} </a></li>
						<li><i class="icon-folder-open"></i> <a href="#"> {{ $post->category->name }}</a></a></li>
						{{--  <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>  --}}
						<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
						@if (!$post->tags == NULL)
							<li><i class="icon-tag"></i>
								@foreach ($post->tags as $tag)
									<a href="#"> #{{ $tag->name }} </a>							
								@endforeach
							</li>
						@endif

						<li><a href="#"><i class="icon-camera-retro"></i></a></li>
					</ul>
					<div class="entry-content">
						<p>{{ $post->excerpt }}</p>
						<a href="blog/{{ $post->url }}"class="more-link">{{ __('Ler mais') }}</a>
					</div>
				</div>
			</div>			
		@endforeach

	</div>
	<!-- #posts end -->

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
@stop