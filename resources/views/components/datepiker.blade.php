{{--  Data  --}}
{{ Form::label($name,$label,['class'=>'col-form-label col-lg-2']) }}
<div class="col-lg-{{ $col }} {{ $errors->has($name) ? 'has-error' : '' }}">
    <div class="input-group">
        <span class="input-group-prepend">
            <span class="input-group-text"><i class="icon-calendar22"></i></span>
        </span>
        {!! Form::input('text',$name, $value, ['class' => 'form-control daterange-single']) !!}

        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div>
{{--  Usage  --}}
{{--  <div class="form-group row">
    {{ Form::dateGroup('4','date', 'Data da Publicação' , $errors) }}
</div>  --}}