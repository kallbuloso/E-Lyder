@extends('blog::layouts.app')

@section('post')
    {{-- <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
    </p> --}}
    <!-- Blog Post -->
    <div class="blog-post">						
        <div class="post-thumb">						
            <a href="blog-post.html">
                <img src="fe/assets/images/blog-thumb-1.png" class="img-rounded" />
                <span class="hover-zoom"></span>
            </a>							
        </div>						
        <div class="post-details">							
            <h3>
                <a href="blog-post.html">We hill lady will both sang room by</a>
            </h3>							
            <div class="post-meta">								
                <div class="meta-info">
                    <i class="entypo-calendar"></i> 04 November 2015
                </div>								
                <div class="meta-info">
                    <i class="entypo-comment"></i>
                    3 comments
                </div>								
            </div>							
            <p>Paid was hill sir high. For him precaution any advantages dissimilar comparison few terminated projecting. Prevailed discovery immediate objection of ye at. Repair summer one winter living feebly pretty his. In so sense am known these since.</p>
        </div>						
    </div>
    
    <!-- Blog Post -->
    <div class="blog-post">
        
        <div class="post-thumb">
        
            <a href="blog-post.html">
                <img src="fe/assets/images/blog-thumb-1.png" class="img-rounded" />
                <span class="hover-zoom"></span>
            </a>
            
        </div>
        
        <div class="post-details">
            
            <h3>
                <a href="blog-post.html">Allowance sweetness direction to as...</a>
            </h3>
            
            <div class="post-meta">
                
                <div class="meta-info">
                    <i class="entypo-calendar"></i> 02 November 2015								</div>
                
                <div class="meta-info">
                    <i class="entypo-comment"></i>
                    0 comments
                </div>
                
            </div>
            
            <p>Paid was hill sir high. For him precaution any advantages dissimilar comparison few terminated projecting. Prevailed discovery immediate objection of ye at. Repair summer one winter living feebly pretty his. In so sense am known these since.</p>
            
        </div>
        
    </div>
    
    <!-- Blog Post -->
    <div class="blog-post">
        
        <div class="post-thumb">
        
            <a href="blog-post.html">
                <img src="fe/assets/images/blog-thumb-1.png" class="img-rounded" />
                <span class="hover-zoom"></span>
            </a>
            
        </div>
        
        <div class="post-details">
            
            <h3>
                <a href="blog-post.html">Is we miles ready he might going</a>
            </h3>
            
            <div class="post-meta">
                
                <div class="meta-info">
                    <i class="entypo-calendar"></i> 01 November 2015								</div>
                
                <div class="meta-info">
                    <i class="entypo-comment"></i>
                    1 comment
                </div>
                
            </div>
            
            <p>Paid was hill sir high. For him precaution any advantages dissimilar comparison few terminated projecting. Prevailed discovery immediate objection of ye at. Repair summer one winter living feebly pretty his. In so sense am known these since.</p>
            
        </div>
        
    </div>
    

    <!-- Blog Pagination -->
    <div class="text-center">					
        <ul class="pagination">
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li>
                <a href="#">Next</a>
            </li>
        </ul>
        
    </div>	
@stop
