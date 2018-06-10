@extends('layouts.default')
@section('page_title', 'Admin page')
@section('body_class', 'admin')

@section('content')
    <div class="admin_menu">
        <ul>
            <a href="#"><li class="menu_item">Posts</li></a>
            <a href="#"><li class="menu_item">Categories</li></a>
            <li class="line_to_right"></li>
            <a href="{{ url('/logout') }}"><li class="menu_item">Log out</li></a>
        </ul>
    </div>
@endsection