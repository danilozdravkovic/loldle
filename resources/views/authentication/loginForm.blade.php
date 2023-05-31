@extends('layouts/layout')
@section('title')Loldle @endsection
@section('keywords')lol,quiz,game,league,of,legends,guess,champion @endsection
@section('description') League of legends game quiz. @endsection
@section('content')
    @if(session()->has('user') || session()->has('admin') )
        <div class="alert alert-success mt-5" role="alert">
            You are already logged in!
        </div>
            <a href="{{route('logout')}}">
                <div class="alert alert-primary" role="alert">
                    Log Out
                </div>
            </a>

    @else
    <form class="mt-5 mb-5" method="POST" action="{{route('performLogin')}}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label text-white">Email address:</label>
            <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label text-white">Password:</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Log In">
    </form>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @endif
@endsection
