@include('adminPanel/fixedAdmin/head')
<body>
<div class="container-fluid">
    <div class="row">
        @include('adminPanel/fixedAdmin/nav')
        <div class="col-10">
            @include('adminPanel/fixedAdmin/header')

            <div class="row" id="adminMain">
                @yield('content')
        </div>
    </div>
</div>
</div>
@yield('scriptsBody')
</body>
</html>

