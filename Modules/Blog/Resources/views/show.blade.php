@extends('blog::layouts.app') 

@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)

@section('posts')
<div class="single-post nobottommargin">

	<!-- Entry Image
	============================================= -->
	<div class="entry-image bottommargin">
		<a href="#"><img src="{{ asset('images/blog/full/10.jpg') }}" alt="Blog Single"></a>
	</div><!-- .entry-image end -->

	<!-- Post Content
	============================================= -->
	<div class="postcontent nobottommargin clearfix">

		<!-- Single Post
		============================================= -->
		<div class="entry clearfix">

			<!-- Entry Title
			============================================= -->
			<div class="entry-title">
				<h2>{{ $post->title }}</h2>
			</div><!-- .entry-title end -->

			<!-- Entry Meta
			============================================= -->
			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> {{ $post->date }} </li>
				<li><a href="#"><i class="icon-user"></i> {{ $post->author->name }} </a></li>
				<li><i class="icon-folder-open"></i> <a href="#"> {{ $post->category->name }}</a></a></li>
				{{--  <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>  --}}
				<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>

			</ul>
			<!-- .entry-meta end -->

			<!-- Entry Content
			============================================= -->
			<div class="entry-content notopmargin">

				{{--  {!! $post->excerpt !!}
			</br>  --}}
				{!! $post->body !!}
				{{--  {{ $post->body }}  --}}
				<!-- Post Single - Content End -->
			<p></p>

				<!-- Tag Cloud
				============================================= -->
				<div class="tagcloud clearfix bottommargin">
					@if (!$post->tags == NULL)
						@foreach ($post->tags as $tag)
							<a href="#"> {{ $tag->name }} </a>							
						@endforeach
					@endif
				</div>
				<!-- .tagcloud end -->

				<div class="clear"></div>

				@include('blog::pages.socials')

			</div>
		</div><!-- .entry end -->

		<!-- Post Navigation
		============================================= -->
		<div class="post-navigation clearfix">

			<div class="col_half nobottommargin">
				<a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
			</div>

			<div class="col_half col_last tright nobottommargin">
				<a href="#">This is an Embedded Audio Post &rArr;</a>
			</div>

		</div><!-- .post-navigation end -->

		<div class="line"></div>

		@include('blog::pages.author')

		<div class="line"></div>

		@include('blog::pages.comments')

	</div><!-- .postcontent end -->



</div>


@stop