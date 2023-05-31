@include('fixed/head')
<body>
<div id="wrapper" class="container-fluid">
    <div class="container d-flex flex-row" id="main">
        <div class="row mainChild">
            @yield('menu')
        </div>
        <div class="row d-flex justify-content-center mainChild" >
            @include('fixed.header')
            @yield('content')
            @include('fixed.footer')
        </div>
    </div>
</div>
@yield('scripts')
</body>
</html>
