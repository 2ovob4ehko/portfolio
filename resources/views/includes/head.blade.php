<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>@yield('page_title')</title>
    </head>
    <body class="@yield('body_class')" style="background-image: url('{{ asset('images/header_background.jpg')}}')">
        @include('includes.header')
