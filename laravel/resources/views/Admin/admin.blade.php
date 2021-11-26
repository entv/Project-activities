@extends('layot')

@section('head')
<meta name="csrf-token" content="{{csrf_token()}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/user-form.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
@endsection

@section('title')
    Create post
@endsection

@section('main')

<div class="users_form" id="admin_form">
    <h3>Новый пост</h3>
    <form action="{{route('admin.newPost')}}" method="POST">
    @csrf
        <div>
            @error('input.error')
            <div class="alert">{{$message}}</div>
            @enderror
            <textarea name="title" class="title" placeholder="Название"></textarea>
            <textarea name="description" class="description" placeholder="Краткое описание"></textarea>
            <textarea name="content" class="content" placeholder="Текст новости"></textarea>
        </div>

        <div class="button">
            <input type="submit" value="Опубликовать">
        </div>
    </form>
</div>

@auth

@endauth
@endsection