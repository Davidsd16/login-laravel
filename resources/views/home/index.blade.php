@extends('layout.app-master')

@section('content')

    <h1>Home</h1>

    @auth
        <p>Bienvenido {{ auth()->user()->name ?? auth()->user()->username }} estás autentificado en esta página</p>
        <p>
            <a href="/logout">Logout</a>
        </p>
    @endauth

    @guest
        <p> Bienvenido, para ver el contenido <a href="\login">inicia sesion</p>
    @endguest
    
@endsection

