@extends('adminPanel/adminPanelLayout')
@section('title') AdminPanle - ActivityLog @endsection
@section('keywords') lol,league,of,legends,admin,panel @endsection
@section('description') Admin panel for loldle @endsection
@section('content')
    <div class="row">
        <h1 class="mt-5">Champions</h1>
        <table id="champTable" >
            @if(count($data['activityLogs']))
                <thead id="tableHead">
                <tr>
                    <th>Log Type</th>
                    <th>Time</th>
                    <th>User</th>
                </tr>
                </thead>
                <tbody id="tableBody">
                @foreach($data['activityLogs'] as $activityLog)
                    <tr class="dataRows">
                        <td>{{$activityLog->name}}</td>
                        <td>{{$activityLog->dateTime}}</td>
                        <td>{{$activityLog->user}}</td>
                    </tr>
                @endforeach
                @else
                    <h2>There is no champions currently at database</h2>
                @endif

                </tbody>
        </table>
        <nav aria-label="Page navigation example" class="mt-3">
            <ul class="pagination">
                @for($i=1;$i<=$data['numberOfPages'];$i++)
                    <li class="page-item"><a class="page-link" href="activityLog?page={{$i}}">{{$i}}</a></li>
                @endfor
            </ul>
        </nav>
    </div>
@endsection

