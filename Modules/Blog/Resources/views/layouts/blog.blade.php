<!-- Blog -->
<section class="blog">	
	<div class="container">		
		<div class="row">			
			<div class="col-sm-8">				
				<div class="blog-posts">

                @yield('post')
                
				</div>				
			</div>			
            <div class="col-sm-4">

            @include('blog::layouts.sidebar')
			
		</div>
		
	</div>
	
</section>	