@extends('Lameck\Smartcart::layouts.app')


@section('title', 'Registro de Usuario')

@section('content')

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Registro</h1>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{  $error  }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('user.postsignup') }}" method="POST" class="form-group">           
            <div class="form-group">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" class="form-control"  value="{{ old('name') }}">
                <br>
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
                <br>
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="form-control" >
                <br>
                <button type="submit" class="btn btn-success" >Registrar</button> 
                <br><br>
                <p>Já possui uma conta? <a href="{{route('user.getsignin')}}">Fazer login</a></p>                            
            </div>
        </form>
    </div>
</div>

@endsection