@extends('card.Master')
@section('content')

    <h4>Create a new card</h4>
    <form action="{{ url('/cards') }}" method="post" id="create-card" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="">File</label>
                <input type="file" name="file_path" class="form-control">
                @if ($errors->has('file_path'))
                    <span class="text-danger">{{ $errors->first('file_path') }}</span>
                @endif
            </div>
            <div class="form-group">

                <input type="submit" value="Create" class="btn btn-primary">
            </div>
        </div>


    </form>

@endsection
@section('page-level-js')
    {!! JsValidator::formRequest('App\Http\Requests\CradRequest','#create-card') !!}
    @endsection