@extends('layouts/layout')
@section('title')Loldle @endsection
@section('keywords')lol,quiz,game,league,of,legends,guess,champion @endsection
@section('description') League of legends game quiz. @endsection
@section('content')
    <form class="mt-5 mb-5" method="POST" action="{{route('registerValidation')}}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label text-white">Email address:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{old('email')}}">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label text-white">Username:</label>
            <input type="text" name="username"  value="{{old('username')}}" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label text-white">Password:</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Register">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
