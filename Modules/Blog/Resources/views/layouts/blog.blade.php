<!-- Blog -->
<section class="row">	
	<div class="col-sm-12">		
		{{--  <div class="row">			
			<div class="col-sm-8">				
				<div class="blog-posts">

                @yield('post')
                
				</div>				
			</div>			
            <div class="col-sm-4">  --}}

            {{--  @include('blog::layouts.sidebar')  --}}
			
		{{--  </div>  --}}
		<!-- Kick start -->
		<div id="kick-start" class="card">
			<div class="card-header">
				<h4 class="card-title">Kick start your project development !</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
					<ul class="list-inline mb-0">
						<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
						<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						<li><a data-action="close"><i class="ft-x"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="card-content collapse show">
				<div class="card-body">
					<div class="card-text">
						<p>Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, Modern Admin provides useful features to kick start your project development with no efforts !</p>
						<ul>
							<li>Modern Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.</li>
							<li>It use PUG as template engine to generate pages and whole template quickly using node js. You can generate entire template with your selected custom layout, branding & menu. Save your time for doing the common changes for
								each page (i.e menu, branding and footer) by generating template with pug.</li>
							<li>Every components in Modern Admin are decoupled, it means use use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--/ Kick start -->
		
	</div>
	
</section>	