@extends('card.Master')
@section('content')

    <h4>Edit {{$card->name}} card</h4>
    <form action="{{url('/cards/'.$card->id)}}" method="post">
        @csrf
        @method('put')
        <div class="col-md-4">
            <div class="form-group">
                <label for="ame">Name</label>
                <input type="text" name = 'name' value="{{$card->name}}" class="form-control">

            </div>
            <div class="form-group">

                <input type="submit" value="Update" class="btn btn-success">

            </div>
        </div>
    </form>

@endsection