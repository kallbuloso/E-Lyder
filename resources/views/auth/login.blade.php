@extends('layouts.auth.app')

@section('content')
<div class="card-header border-0">
    <div class="card-title text-center">
      <img src="ma/app-assets/images/logo/logo-dark.png" alt="branding logo">
    </div>
    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
      <span>Easily Using</span>
    </h6>
    </div>
    <div class="card-content">
        <div class="text-center">
        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
            <span class="la la-facebook"></span>
        </a>
        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
            <span class="la la-twitter"></span>
        </a>
        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
            <span class="la la-linkedin font-medium-4"></span>
        </a>
        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
            <span class="la la-github font-medium-4"></span>
        </a>
        </div>
        <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
        <span>Fazer Login</span>
        </p>
        <div class="card-body">
            {{--  Status Session  --}}
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-warning">
                    {{ session('warning') }}
                </div>
            @endif
            {!! Form::open(['class' => "form-horizontal", 'method' => 'POST']) !!}
                {{--  E-mail  --}}
                <fieldset class="form-group position-relative has-icon-left {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Seu email') }}" name="email" value="{{ old('email') }}" required autofocus>
                    <div class="form-control-position">
                        <i class="ft-user"></i>
                    </div>
                    {{--  error  --}}
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </fieldset>
                {{--  Senha  --}}
                <fieldset class="form-group position-relative has-icon-left {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" name="password" required>
                    <div class="form-control-position">
                        <i class="la la-key"></i>
                    </div>
                    {{--  error  --}}
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </fieldset>
                <div class="form-group row">
                    <div class="col-md-6 col-12 text-center text-sm-left">
                        <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember-me">{{ __('Permanecer logado') }}</label>
                        </fieldset>
                    </div>
                    <div class="col-md-6 col-12 float-sm-left text-center text-sm-right">
                        <a href="{{ route('password.request') }}" class="card-link">{{ __('Esqueci a senha') }}</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> {{ __('Entrar agora') }}</button>
            {!! Form::close() !!}
        </div>
        <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
            <span>{{ __('Novo no site?') }}</span>
        </p>
        <div class="card-body">
            <a href="{{ route('register') }}" class="btn btn-outline-danger btn-block">
                <i class="ft-user"></i> 
                {{ __(' Crie uma conta ') }}
            </a>
        </div>
    </div>    
@endsection

