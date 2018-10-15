{{--  TextArea  --}}
{{ Form::label($name,$label,['class'=>'col-form-label col-lg-2']) }}
<div class="col-lg-{{ $col }} {{ $errors->has($name) ? 'has-error' : '' }}">
        {!! Form::textarea($name, null, array_merge([ 'rows' => '3', 'cols' => '54','class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
</div>
{{--  {{ Form::textAreaGroup('10','excerpt', ['placeholder' => 'Faça um breve resumo da sua publicação...'], 'Resumo da Publicação' , $errors) }}  --}}
