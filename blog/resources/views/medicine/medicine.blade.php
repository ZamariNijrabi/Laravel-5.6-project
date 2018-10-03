@extends('medicine.Master')
@section('content')
    <div class="row">
        <button class="btn btn-primary" id="table-view">Table</button>
        <button class="btn btn-primary" id="card-view">Card</button>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="medicine">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>price</th>
                        <th>Created_date</th>
                    </tr>
                @foreach($medicines as $medicine)
                    <tr>
                        <td>{{$medicine->id}}</td>
                        <td>{{$medicine->name}}</td>
                        <td>{{$medicine->decription}}</td>
                        <td>{{$medicine->price}}</td>
                        <td>{{$medicine->created_ar}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection