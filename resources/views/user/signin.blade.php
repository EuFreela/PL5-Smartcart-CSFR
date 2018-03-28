@extends('Lameck\Smartcart::layouts.app')


@section('title', 'Registro de Usuario')

@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Login</h1>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{  $error  }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('user.postsignin') }}" method="POST" class="form-group">           
            <div class="form-group">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />                
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
                <br>
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="form-control" >
                <br>
                <button type="submit" class="btn btn-success" >Registrar</button>   
                <br><br>
                <p>Não é cadastro? <a href="{{route('user.getsignup')}}">Criar minha conta</a></p>             
            </div>
        </form>
    </div>
</div>

@endsection