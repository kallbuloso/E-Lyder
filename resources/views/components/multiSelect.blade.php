{{--  Select  --}}
{{ Form::label($name,$label,['class'=>'col-form-label col-lg-2']) }}
<div class="col-lg-{{ $col }} {{ $errors->has($name) ? 'has-error' : '' }}">
    <div class="form-group">
        {{--  {!! Form::select($name, $optionValue, null, array_merge(['multiple' => 'multiple', 'class' => 'form-control select', ' data-fouc '], $attributes)) !!}  --}}
        {!! Form::select($name, $optionValue, null, array_merge(['multiple' => 'multiple', 'class' => 'form-control select', ' data-fouc '], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div>

{{--  {{ Form::selectGroup('8','tags[]', ['tag\'s' => $tags], ['placeholder' => 'Selecione uma categoria...'], 'Data da Publicação' , $errors) }}  --}}