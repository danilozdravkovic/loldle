<div class="row pt-5" id="panelHeader">
    <div class="col-10">
        <h1>Welcome {{session()->get('admin')->username}}</h1>
    </div>
    <div class="col-2">
        <div id="adminInicial"><p class="text-center">{{substr(session()->get('admin')->username,0,1)}}</p></div>
        <div><a class="text-dark" href="{{route('logout')}}">Log Out</a></div>
    </div>
</div>
