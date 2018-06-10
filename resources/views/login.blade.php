@extends('layouts.default')
@section('page_title', 'Login page')
@section('body_class', 'admin')

@section('content')
    <div class="col-12 col-md-4 offset-md-4 align-self-center">
        <form method="POST" action="/auth">
            <div class="form-group">
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            </div>
            <div class="form-group">
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="">
            </div>
            {{ csrf_field() }}
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
            </div>
        </form>
    </div>
@endsection