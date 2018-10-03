<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta http-equiv="X-US-Compitble" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet" type ="text/css">
    <title>@yield('title')</title>
    @yield('page-level-css')    
    @if(env('APP_THEM')== 'white'){}
        <link href="{{asset('/css/white.css')}}" rel="stylesheet" type ="text/css">

    @else
        <link href="{{asset('/css/black.css')}}" rel="stylesheet" type ="text/css">
    @endif
    
    </head>
    <body>
