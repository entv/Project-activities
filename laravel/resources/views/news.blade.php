@extends('layot')

@section('title')
    News
@endsection

@section('main')
    <div class="main_content">
        <h1>Горячие новости</h1>
    @foreach ($news as $post)
        <h3><a href="{{route('post', $post->id)}}">{{$post->title}}</a></h3>
        <p>{{$post->description}}</p>
    @endforeach
    </div>
@endsection