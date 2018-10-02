@extends('layouts.auth.app')

@section('content')
    {{-- <form class="form-horizontal" method="POST" action="{{ route('login') }}"> --}}
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
            {{-- {{ csrf_field() }} --}}
            <h1>Fazer Login</h1>
            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Seu e-mail" name="email" value="{{ old('email') }}" required autofocus>
                {{--  error  --}}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            {{--  input password  --}}
            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" name="password" required>
                {{--  error  --}}
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
           
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Permanecer logado') }}
                </label>
            </div>

            <div class="form-group">
                <button type="submit"  class="btn btn-primary" >Entrar</button>
                <a class="forgot-password padding-top-10" href="{{ route('password.request') }}">Esqueci a senha</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">
                <p class="change_link">Novo no site?
                    <a href="{{ route('register') }}" class="to_register"> Crie uma nova conta </a>
                </p>

                <div class="clearfix"></div>
                <br /> 
                @include('layouts.footer')
            </div>
        {!! Form::close() !!}
    
@endsection
