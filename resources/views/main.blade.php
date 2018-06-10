@extends('layouts.default')
@section('page_title', 'Main page')
@section('body_class', 'main')

@section('content')
    @foreach($posts as $post)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="main_grid" @if($post->image) style="background-image: url('{{ asset('images/'.$post->image->slug)}}')" @endif>
            <h2>{{$post->title}}</h2>
            <p>{{str_limit($post->content,200)}}</p>
        </div>
    </div>
    @endforeach
@endsection