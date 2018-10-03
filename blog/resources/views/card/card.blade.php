@extends('card.Master')
@section('content')

    <h4>This is Card List</h4>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-card">
        Launch demo modal
    </button>
    <table class="table table-bordered ">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>file</th>
            <th>Created date</th>
            <th>updated date</th>
            <th>Delete</th>
            <th>Edit</th>

        </thead>
        @foreach($cards as $card)
            <tr>
                <td>{{$card->id}}</td>
                <td>{{$card->name}}</td>
                <td><a href="{{asset($card->file_path)}}">file</a></td>
                <td>{{$card->created_at}}</td>
                <td>{{$card->updated_at}}</td>
                <td><a href="{{url('cards/'.$card->id.'/delete')}}">Delete</a></td>
                <td><a href="{{url('cards/'.$card->id.'/edit')}}">Edit</a></td>
            </tr>

            @endforeach
    </table>
    <!-- Modal -->
    <div class="modal fade" id="create-card" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <form id="create-card-form">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                    <span id ='error' class="text-danger"></span>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="create-card-form">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @endsection