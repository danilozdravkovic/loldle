@extends('adminPanel/adminPanelLayout')
@section('title') Admin Panel - Champions @endsection
@section('keywords') lol,league,of,legends,admin,panel @endsection
@section('description') Admin panel for loldle @endsection
@section('scriptsHead') <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="row">
        <h1 class="mt-5">Champions</h1>
        <table id="champTable" >

                @if(count($champions))
                    <thead id="tableHead">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Position</th>
                        <th>Specie</th>
                        <th>Resource</th>
                        <th>Range type</th>
                        <th>Region</th>
                        <th>Release year</th>
                        <th>Quote</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
            <tbody id="tableBody">
                @foreach($allChampions as $champion)
                    <tr class="dataRows">
                        <td><img class="champImg" src="{{asset('assets/img/champions/'.$champion->src)}}" alt="{{$champion->alt}}" /> </td>
                        <td>{{$champion->name}}</td>
                        <td>{{$champion->gender}}</td>
                        <td>{{$champion->position}}</td>
                        <td>{{$champion->specie}}</td>
                        <td>{{$champion->resource}}</td>
                        <td>{{$champion->range}}</td>
                        <td>{{$champion->region}}</td>
                        <td>{{$champion->releaseYear}}</td>
                        <td>{{stripslashes($champion->quote)}}</td>
                        <td><a href="{{route('showChampion',['id'=>$champion->id])}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
                        <td><button type="button" onclick="deleteChampion({{$champion->id}})" class="btn btn-danger btnDelete">Delete</button></td>
                    </tr>
                @endforeach
            @else
                <h2>There is no champions currently at database</h2>
            @endif

            </tbody>
        </table>
    </div>
    <div class="row">
        <h1 class="mt-5">Add new champion</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{route('addChampion')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Name:</label>
                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload champion picture:</label>
                <input type="file" name="img"  class="form-control" id="inputGroupFile01" >
            </div>
            @foreach($champions as $data)

                <select class="form-select mt-4" name="{{substr(array_search($data, $champions, $strict = true),0,strlen(array_search($data, $champions))-1)}}Select" aria-label="Default select example">
                    <option value="0" selected>Choose {{substr(array_search($data, $champions),0,strlen(array_search($data, $champions))-1)}}</option>
                    @foreach($data as $gender)
                          <option value="{{$gender->id}}">{{$gender->value}}</option>
                    @endforeach
                </select>
            @endforeach
            <div class="mb-3 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Quote:</label>
                <input type="text"  name="quote" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Release year:</label>
                <input type="text"  name="year" class="form-control" id="exampleFormControlInput3">
            </div>
            <input class="btn btn-primary mb-5" type="submit" value="Add Champion">
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
