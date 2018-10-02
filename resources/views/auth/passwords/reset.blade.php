@extends('layouts.auth.app')

@section('content')
<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}
    
        <input type="hidden" name="token" value="{{ $token }}">
        <h1>Nova Senha</h1>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ $email or old('email') }}" required autofocus>
    
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>
    
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Digite uma senha" required>
    
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>
    
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repita a mesma senha" required>
    
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
        </div>
    
        <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Confirmar nova Senha
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
    </form>
@endsection
