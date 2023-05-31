@extends('adminPanel/adminPanelLayout')
@section('title') Admin Panel - Change Champion @endsection
@section('keywords') lol,league,of,legends,admin,panel @endsection
@section('description') Admin panel for loldle @endsection
@section('scriptsHead') <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="row">
        <h1 class="mt-5">Change existing champion</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{route('updateChampion')}}" enctype="multipart/form-data">
            @method("patch")
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Name:</label>
                <input type="text" name="name" value="{{$champion[0]->name}}" class="form-control" id="exampleFormControlInput2">
            </div>
            <input type="hidden" name="idChamp" value="{{$champion[0]->id}}">
            @foreach($data as $table)

                <select class="form-select mt-4" name="{{substr(array_search($table, $data,$strict=true),0,strlen(array_search($table, $data))-1)}}Select"  aria-label="Default select example">
                    <option value="0" selected>Choose {{substr(array_search($table, $data),0,strlen(array_search($table, $data))-1)}}</option>
                    @foreach($table as $value)
                        {{$column = substr(array_search($table, $data),0,strlen(array_search($table, $data))-1).'_id'}}
                        @if($champion[0]->$column==$value->id)
                        <option selected value="{{$value->id}}">{{$value->value}}</option>
                        @else
                            <option value="{{$value->id}}">{{$value->value}}</option>
                        @endif
                    @endforeach
                </select>
            @endforeach
            <div class="mb-3 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Quote:</label>
                <input type="text" value="{{$champion[0]->quote}}"  name="quote" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Release year:</label>
                <input type="text" value="{{$champion[0]->releaseYear}}"  name="year" class="form-control" id="exampleFormControlInput3">
            </div>
            <input class="btn btn-primary mb-5" type="submit" value="Change champion data">
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

