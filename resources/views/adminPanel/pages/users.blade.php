@extends('adminPanel/adminPanelLayout')
@section('title') Admin Panel - Users @endsection
@section('keywords') lol,league,of,legends,admin,panel @endsection
@section('description') Admin panel for loldle @endsection
@section('scriptsHead') <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="row">
        <h1 class="mt-5">Users</h1>
        <table id="userTable" >
            @if(count($users))
                <thead id="userTableHead">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody id="userTableBody">
                @foreach($users as $user)
                    <tr class="dataRows">
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->value}}</td>
{{--                        <td><a href="{{route('showChampion',['id'=>$champion->id])}}"><button type="button" class="btn btn-primary">Edit</button></a></td>--}}
{{--                        <td><button type="button" onclick="deleteChampion({{$champion->id}})" class="btn btn-danger btnDelete">Delete</button></td>--}}
                    </tr>
                @endforeach
                @else
                    <h2>There is no users currently at database</h2>
                @endif

                </tbody>
        </table>
    </div>
    <div class="row">
        <h1 class="mt-5">Add new user</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST"  action="{{route('addUser')}}">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Name:</label>
                <input type="text" name="username" value="{{old('username')}}" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Email:</label>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleFormControlInput3">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label">Password:</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleFormControlInput4">
            </div>
            <select class="form-select mb-5" name="roleSelect">
                <option value="0">Choose role</option>
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->value}}</option>
                @endforeach
            </select>

            <input class="btn btn-primary mb-5" type="submit" value="Add User">
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
    </div>
@endsection
@section('scriptsBody')
    <script src="{{asset('assets/scripts/main.js')}}" type="text/javascript"></script>
@endsection
