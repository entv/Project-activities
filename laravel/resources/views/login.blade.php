@extends('layot')

@section('head')
<meta name="csrf-token" content="{{csrf_token()}}">
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('title')
Sign in
@endsection

@section('main')
<div class="main_content">
    <div class="login_page">
        <div class="form">
            @error('authentication.error')
                    <div class="alert">{{$message}}</div>
            @enderror

            <form class="register_form" action="{{route('authentication.register')}}" method="POST">
                @csrf

                <input type="text" name="name" value="" placeholder="Имя пользователя">
                <input type="password" name="password" value="" placeholder="Пароль">
                <button type="submit" value="">Регистрация</button>
                <p class="message">Уже зарегистрировались? <a href="#">Войти</a></p>
            </form>
            <form class="login_form" action="{{route('authentication.login')}}" method="POST">
                @csrf

                <input type="text" name="name" value="" placeholder="Имя пользователя">
                <input type="password" name="password" value="" placeholder="Пароль">
                <button type="submit" value="">Войти</button>
                <p class="message">Не зарегистрированы? <a href="#">Создать аккаунт</a></p>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scrpts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
@endsection
