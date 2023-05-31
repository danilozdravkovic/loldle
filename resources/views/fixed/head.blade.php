<!DOCTYPE html>
<html lang="ENG">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('assets/img/icon.ico')}}" type="image/x-icon">
    <link href="{{asset('assets/css/style.css')}}"  rel="stylesheet" />
    <script src="https://kit.fontawesome.com/724ee7c4d3.js" crossorigin="anonymous"></script>
    @yield('scriptsHead')
</head>

