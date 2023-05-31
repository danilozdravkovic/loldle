@extends('layouts/layout')
@section('title')Loldle - About Author @endsection
@section('keywords')lol,quiz,game,league,of,legends,guess,champion @endsection
@section('description') League of legends game quiz. @endsection
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-5 text-white text-center">Danilo Zdravković</h1>
                </div>
                <div class="col-12 align-items-lg-center">
                    <p id="aboutMe">Hello user.I am from Serbia ,and I am full-stack web developer.I study at "visoka ICT skola" university.I enjoy making websites and applications and making my clients dream become true.Im passionate about my job and i like it very much.</p>
                </div>
                <div class="col-12 ">
                    <img src="assets/img/me.jpg" class="img-fluid bg-dark" alt="author" />
                </div>
                <div class="col-12 mt-3">
                    <a class="text-white" href="assets/documentacion.pdf" target="_blank">Documentation</a>
                </div>
            </div>
        </div>
    </div>
@endsection
