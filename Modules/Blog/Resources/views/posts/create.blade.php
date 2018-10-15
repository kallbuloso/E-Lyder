@extends('blog::admin.app')
{{--  stylesheets  --}}
@push('stylesheets')
<script type="text/javascript">
    window.onload = function()  {
        CKEDITOR.replace( 'editor', {
            toolbar: [
               
                { name: 'clipboard', items : [ 'Cut','Copy','Paste','-','Undo','Redo' ] },
                { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
                { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
                '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
                { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
                { name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
                { name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
                { name: 'tools', items : [ 'Maximize', 'ShowBlocks'] }
            ]}         
            );
        CKEDITOR.config.removePlugins = "elementspath";
        CKEDITOR.config.resize_enabled = false;
     };
</script>
    {{--  <script src="{{ asset('ll/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/demo_pages/editor_summernote.js') }}"></script>  --}}
@endpush
{{--  scripts  --}}
@push('scripts')
    <!-- Theme JS files -->
    <script src="{{ asset('ll/global_assets/js/plugins/forms/inputs/inputmask.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/extensions/jquery_ui/core.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/forms/tags/tagsinput.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/forms/tags/tokenfield.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/forms/inputs/touchspin.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/forms/inputs/maxlength.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/forms/inputs/formatter.min.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js') }}"></script>
    
    {{--  <script src="{{ asset('ll/global_assets/js/demo_pages/form_floating_labels.js') }}"></script>  --}}
    {{--  date picker  --}}
	<script src="{{ asset('ll/global_assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script src="{{ asset('ll/global_assets/js/plugins/pickers/daterangepicker.js') }}"></script>
    {{--  editors  --}}
    <script src="{{ asset('ll/global_assets/js/plugins/editors/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ll/global_assets/js/demo_pages/form_select2.js') }}"></script>
    {{--  <script src="{{ asset('ll/global_assets/js/plugins/editors/summernote/summernote.min.js') }}"></script>  --}}


    {{--  date picker  --}}
    <script src="{{ asset('ll/global_assets/js/demo_pages/picker_date.js') }}"></script>
    {{--  <script src="{{ asset('ll/global_assets/js/demo_pages/editor_ckeditor.js') }}"></script>  --}}
 

@endpush
@section('header')
    
    {{--  <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Starters</span> - Navbars Fixed</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <a href="#" class="btn btn-labeled btn-labeled-right bg-pink-400">Button <b><i class="icon-menu7"></i></b></a>
        </div>
    </div>  --}}

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="#" class="breadcrumb-item">Link</a>
                    <span class="breadcrumb-item active">Criate</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    {{--  <a href="#" class="breadcrumb-elements-item">
                        Link
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            Dropdown
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <a href="#" class="dropdown-item">One more action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separate action</a>
                        </div>
                    </div>  --}}
                </div>
            </div>
        </div>
    
@endsection
@section('content')

{!! Form::open(['class' => "form-horizontal", 'method' => 'POST']) !!}
    <div class="row">
        <div class="col-md-12">
            <!-- Basic card -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h3 class="card-title">Criar um Post</h3>
                </div>

                <div class="card-body">
                    <fieldset class="mb-3">
                        <div class="form-group row">
                            {{--  Text  --}}
                            {{ Form::textGroup('10','title', null, ['placeholder' => 'Título do post'], 'Título do Post *' , $errors) }}
                        </div>

                        <div class="form-group row">
                            {{--  Data  --}}
                            {{ Form::dateGroup('4','date', null, 'Data da Publicação' , $errors) }}
                            {{--  Categoria  --}}
                            {{ Form::selectGroup('4','categories', $categories, ['placeholder' => 'Selecione uma categoria...'], 'Categoria *' , $errors) }}
                        </div>
                        
                        <div class="form-group row">
                            {{--  textarea  --}}
                            {{ Form::textAreaGroup('10','excerpt', ['placeholder' => 'Faça um breve resumo da sua publicação... '], 'Resumo da Publicação *' , $errors) }}
                        </div>   

                        <div class="form-group ">
                            {{--  Editor  --}}
                            {{ Form::textEditorGroup('','editor', [''], 'Conteúdo da Publicação *' , $errors) }}
                        </div>

                        <div class="form-group row">
                            {{--  Tag's  --}}
                            {{ Form::mSelectGroup('8','tags[]', ['Para selecionar várias tag\'s segure a tecla Ctrl' => $tags], ['data-placeholder' => 'Pressione "Ctrl" para selecionar mais de uma tag...'], 'Tag\'s' , $errors) }}
                        </div>

                        <div class="text-right">
                            <button class="btn btn-primary">{{ __('Salvar sem Publicar') }} <i class="icon-paperplane ml-2"></i></button>
                            <button type="submit" class="btn btn-primary">{{ __('Publicar') }} <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </fieldset>
                    {{--  {!! Form::close() !!}  --}}
                </div>
            </div>
            <!-- /basic card -->
        </div>

    </div>
{!! Form::close() !!}

@endsection