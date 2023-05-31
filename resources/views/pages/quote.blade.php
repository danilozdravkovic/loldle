@extends('layouts/layout')
@section('title')Loldle - Quote @endsection
@section('keywords')lol,quiz,game,league,of,legends,guess,champion @endsection
@section('description') League of legends game quiz. @endsection
@section('scriptsHead') <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection
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
        </ul>
    @endif
@endsection
@section('content')
    <div class="row">
        <h3 class="text-white">Guess today's League of Legends champion based on quote:</h3>
        <h4 class="text-white">To start choose any champion</h4>
        <p id="quote"> </p>
        <p>Type any champion to begin.</p>
    </div>
    <div class="row">
        <form>
            <div class="mb-3">
                <input id="inputChampName" class="form-control" type="text" onkeyup="filterChampions()" >
            </div>
        </form>
        <div id="listOfChampions">

        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('assets/scripts/scriptClassic.js')}}" type="text/javascript"></script>
@endsection
