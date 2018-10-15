{{--  TextArea  --}}
{{ Form::label($name,$label,['class'=>'col-form-label']) }}
<div class="col-lg-{{ $col }} {{ $errors->has($name) ? 'has-error' : '' }}">
        {!! Form::textarea($name, null, array_merge([ 'rows' => '4', 'cols' => '4','class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
</div>
{{--  {{ Form::textEditorGroup('12','editor', ['placeholder' => 'Faça um breve resumo da sua publicação...'], 'Resumo da Publicação' , $errors) }}  --}}
{{--  chamar os plugins  --}}
{{--  <script src="{{ asset('ll/global_assets/js/plugins/editors/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('ll/global_assets/js/demo_pages/editor_ckeditor.js') }}"></script>  --}}

{{-- Usar o Script abaixo --}}
{{--  <script type="text/javascript">
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
</script>   --}}