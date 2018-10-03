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