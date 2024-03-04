<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Mundo Café ☕️</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
<nav class="h-auto bg-bg_nav flex justify-between items-center p-4">
    <div class="first-column flex items-center justify-around">
        <div class="logo">
            <a href="{{route('home')}}"><img class=" max-w-[50px] h-auto" src="{{asset('img/logo_mundocafe.webp')}}" alt="imagen Logo"></a>
        </div>
        <div class="links">
            <a href="{{route('cafeterias.index')}}">Cafeterias</a>
            <a href="{{route('contact')}}">Conáctanos</a>
        </div>
    </div>
    <div class="second-column flex gap-3 items-center ">
        <a class="d-block" href="/registrate">Registrate</a>
        <img class="d-block" src="{{asset('img/user.svg')}}" alt="Logo Registro">
    </div>
</nav>
<div class="app container mx-auto">
    @yield('content')
</div>



