{{--  Select  --}}
{{ Form::label($name,$label,['class'=>'col-form-label col-lg-2']) }}
<div class="col-lg-{{ $col }} {{ $errors->has($name) ? 'has-error' : '' }}">
    <div class="form-group">
        {!! Form::select($name, $optionValue, null, array_merge(['class' => 'form-control select'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div>

{{--  {{ Form::selectGroup('4','categories', $categories, ['placeholder' => 'Selecione uma categoria...'], 'Data da Publicação' , $errors) }}  --}}