{{--  Page Header  --}}
<div class="content-header row">
    {{--  Left  --}}
    <div class="content-header-left col-md-6 col-12">
        <h1 class="content-header-title mb-0">{!! config('blog.name') !!}</h1>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="breadcrumb-item active">Breadcrumbs bottom
                    </li>
                </ol><br>
            </div>
        </div>
        
    </div>
    {{--  Right  --}}
    <div class="content-header-right col-md-6 col-12">
        <!-- Custom elements -->
        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <h2 class="content-header-title mb-0">1 Column</h2>
            {{--  <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>  --}}
        </div>
    </div>
    {{--  <div class="content-header-lead col-12 mt-2">
        <p class="lead">Page header with page title, breadcrumbs at bottom & content title.</p>
    </div>  --}}
</div>