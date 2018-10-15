{{-- Lg text  --}}
{{ Form::label($name,$label,['class'=>'col-form-label col-lg-2']) }}
<div class="col-lg-{{ $col }} {{ $errors->has('$name') ? 'has-error' : '' }}">
    {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    <small class="text-danger">{{ $errors->first($name) }}</small>
</div>
{{--  Usage  --}}
{{--  <div class="form-group row">
    {{ Form::lg_text('col','name', null, ['placeholder' => 'Título do post'], 'Título do Post' , $errors) }}
</div>  --}}