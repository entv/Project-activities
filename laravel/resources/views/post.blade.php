@extends('layot')

@section('title')
    {{$post->title}}
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{asset('css/comment.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/user-form.css')}}">
@endsection

@section('main')
    <div class="main_content">
        <h1>{{$post->title}}</h1>
        <h3>{{$post->description}}</h3>
        <p>{{$post->content}}</p>
    </div>

    @auth
    <div class="users_form">
        <h3>Отправить комментарий</h3>
        <form action="{{route('news.post.comment', $post->id)}}" method="POST">
        @csrf
            <div>
                <textarea name="message" placeholder="Комментарий"></textarea>
            </div>
        
            <input type="hidden" name="post_id" value="{{$post->id}}">

            <div class="button">
                <input type="submit" value="Отправить">
            </div>
        </form>
    </div>
    @endauth
    
    @foreach ($post->comments as $comment)
        <div class="comment">
            <span class="comment_title">
                <div class="comment_username">{{$comment->user->name}}</div>
            
                <span class="comment_time">{{$comment->date}}</span>
            </span>
            <div class="comment_content">
                {{$comment->message}}
            </div>
        </div>
    @endforeach
@endsection