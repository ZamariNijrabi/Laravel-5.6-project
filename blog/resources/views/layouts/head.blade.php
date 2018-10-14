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
    
    </head>
    <body>
