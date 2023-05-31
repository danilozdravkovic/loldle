@extends('layouts/layout')
@section('title')Loldle @endsection
@section('keywords')lol,quiz,game,league,of,legends,guess,champion @endsection
@section('description') League of legends game quiz. @endsection
@section('menu')
    @if(session()->has('user') || session()->has('admin') )
        <ul>
            @if(session()->get('user'))
                <li><p>{{session()->get('user')->username}}</p></li>
                @endif
                @if(session()->get('admin'))
                    <li><p class="text-danger">{{session()->get('admin')->username}} as ADMIN</p></li>
                @endif
            <li><a class="text-white" href="{{route('logout')}}">Log Out</a></li>
        </ul>
    @else
        <ul>
            <li><a class="text-white" href="{{route('loginForm')}}">Log In</a></li>
            <li><a class="text-white" href="{{route('registerForm')}}">Register</a></li>
            <li><a class="text-white" href="{{route('aboutAuthor')}}">About Author</a></li>
        </ul>
    @endif
@endsection
@section('content')
    <div class="row">
        <p class="text-center">Guess League of Legends champions</p>
    </div>
    <div class="row">
        @foreach($menu as $link)
            <div class="buttonImg">
                <a href="{{route($link->href)}}"><img src="{{asset('assets/img/'.$link->src)}}" alt="{{$link->alt}}"/></a>
            </div>
        @endforeach
    </div>
@endsection
