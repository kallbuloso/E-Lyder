@extends('layouts.auth.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        
        <h1>Recuperar senha</h1>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" placeholder="Digite seu e-mail para recuperar a senha" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary">
                Recuperar a senha
            </button>
        </div>
        
        <div class="clearfix"></div>

        <div class="separator">
            <p class="change_link">Lembrei a senha,
                <a href="{{ route('login') }}" class="to_register"> voltar e fazer login </a>
            </p>
    
            <div class="clearfix"></div>
            <br />
    
            @include('layouts.footer')
        </div>
    </form>    
@endsection
