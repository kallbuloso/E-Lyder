@extends('layouts.auth.app')

@section('content')
    <div class="card-header border-0">
        <div class="card-title text-center">
            <img src="ma/app-assets/images/logo/logo-dark.png" alt="branding logo">
        </div>
    </div>
    <div class="card-content">
        <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
            <span> Registrar </span>
        </p>
        <div class="card-body">           
            {{--  Form  --}}
            {!! Form::open(['class' => "form-horizontal", 'method' => 'POST']) !!}
                {{--  Primeiro nome  --}}
                <fieldset class="form-group  position-relative has-icon-left {{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <input id="first_name" type="text" class="form-control" name="first_name" placeholder="Primeiro Nome" value="{{ old('first_name') }}" autofocus>
                    <div class="form-control-position">
                        <i class="ft-user"></i>
                    </div>
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </fieldset>
                {{--  Sobrenome  --}}
                <fieldset class="form-group position-relative has-icon-left {{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Sobrenome" value="{{ old('last_name') }}" >
                    <div class="form-control-position">
                        <i class="ft-user"></i>
                    </div>
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </fieldset>
                {{--  User Name  --}}
                <fieldset class="form-group position-relative has-icon-left {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" placeholder="Nome de usuário" value="{{ old('name') }}" required autofocus>
                    <div class="form-control-position">
                        <i class="ft-user"></i>
                    </div>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </fieldset>
                {{--  Email  --}}
                <fieldset class="form-group position-relative has-icon-left {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Email"  value="{{ old('email') }}" required>
                    <div class="form-control-position">
                        <i class="ft-mail"></i>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </fieldset>
                {{--  Password  --}}
                <fieldset class="form-group position-relative has-icon-left {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Digite uma senha"  required>
                    <div class="form-control-position">
                        <i class="la la-key"></i>
                    </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </fieldset>
                {{--  Re-Password  --}}
                <fieldset class="form-group position-relative has-icon-left">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repita a mesma senha" required>
                    <div class="form-control-position">
                        <i class="la la-key"></i>
                    </div>
                </fieldset>
                {{--  Termos de uso  --}}
                <div class="form-group row">
                    <div class="col-md-6 col-12 text-center text-sm-left">
                        <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember" required>
                            <label for="remember-me"> Aceita os <a href="http:#">Termos de uso?</a></label>
                        </fieldset>
                    </div>
                </div>
                {{--  Input  --}}
                <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-user"></i> Registrar</button>
                <br>
                <div class="form-group row">
                    <div class="col-md-12 col-12 float-sm-left text-sm-right">
                        <label>Já tem cadastro? <a href="{{ route('login') }}" class="card-link"> Fazer login </a></label>
                    </div>
                </div>
            {!! Form::close() !!}   
        </div>
    </div> 
@endsection