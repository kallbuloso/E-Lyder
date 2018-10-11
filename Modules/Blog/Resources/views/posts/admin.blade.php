@extends('blog::admin.app')
{{--  stylesheets  --}}
@push('stylesheets')
    
@endpush
{{--  scripts  --}}
@push('scripts')
    <script src="{{ asset('ll/global_assets/js/demo_pages/datatables_extension_reorder.js') }}"></script>
@endpush
@section('content')
    <!-- Basic card -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h3 class="card-title">Posts</h3>
            <div class="header-elements">
                <div class="list-icons">
                    {{--  <a class="list-icons-item" data-action="collapse"></a>  --}}
                    {{--  <a class="list-icons-item" data-action="reload"></a>  --}}
                    {{--  <a class="list-icons-item" data-action="remove"></a>  --}}
                </div>
            </div>
        </div>

        <div class="card-body">

        </div>
    </div>
    <!-- /basic card -->
@endsection