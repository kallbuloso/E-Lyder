{{-- Lg email  --}}
{{ Form::label($name,$label,['class'=>'col-form-label col-lg-2']) }}
<div class="col-lg-{{ $col }} {{ $errors->has($name) ? 'has-error' : '' }}">
    {{ Form::email($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
    <small class="text-danger">{{ $errors->first($name) }}</small>
</div>
{{--  Usage  --}}
{{--  <div class="form-group row">
    {{ Form::emailGroup('col', 'email', null, ['placeholder' => 'Degite seu email'], 'E-mail' , $errors) }}
</div>  --}}