@extends("user.Master")
@section('title','Users')
@section('page-level-css')
    <style>
        tr{
            color: lawngreen;
        }
        table{
            background-color: darksalmon !important;
        }
    </style>
@endsection

@section('content')
    <table class = "table table-bordered bg-dark text-danger">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created date</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
            </tr>
            @endforeach

    </table>
    {{env('APP_THEM')}}
@endsection 
