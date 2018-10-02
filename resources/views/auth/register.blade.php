@extends('layouts.auth.app')
@section('content')

{{-- <form class="form-horizontal" method="POST" action="{{ route('register') }}"> --}}
    {{-- {{ csrf_field() }} --}}
    {!! Form::open(['class' => "form-horizontal", 'method' => 'POST']) !!}
        <h1>Criar uma conta</h1>
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <input id="first_name" type="text" class="form-control" name="first_name" placeholder="Primeiro Nome" value="{{ old('first_name') }}" autofocus>

                @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Sobrenome" value="{{ old('last_name') }}" >

                @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" name="name" placeholder="Nome de usuário" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email"  value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Digite uma senha"  required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repita a mesma senha" required>
        </div>

        <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Registrar
                </button>
        </div>
        <div class="clearfix"></div>

        <div class="separator">
            <p class="change_link">Já tem cadastro?
                <a href="{{ route('login') }}" class="to_register"> Fazer login </a>
            </p>

            <div class="clearfix"></div>
            <br />

            @include('layouts.footer')
        </div>
    {!! Form::close() !!}

@endsection