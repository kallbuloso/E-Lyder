@extends('blog::layouts.app') 
@section('posts')
	<!-- Posts
	============================================= -->
	<div id="posts" class="small-thumbs">
		<div class="entry clearfix">
			<div class="entry-image">
				<a href="images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/small/17.jpg" alt="Standard Post with Image"></a>
			</div>
			<div class="entry-c">
				<div class="entry-title">
					<h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li><i class="icon-calendar3"></i> 10th Feb 2014</li>
					<li><a href="#"><i class="icon-user"></i> admin</a></li>
					<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
					<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
					<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
					<li><a href="#"><i class="icon-camera-retro"></i></a></li>
				</ul>
				<div class="entry-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
					<a href="blog-single.html"class="more-link">{{ __('Ler mais') }}</a>
				</div>
			</div>
		</div>
	</div>
	<!-- #posts end -->
@stop