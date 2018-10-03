<div class="col-md-2">
    @foreach($medicines as $medicine)
                <div class="card border-success mb-3 row" style="max-width: 20rem;">
                        <div class="card-header bg-dark border-success text-info">{{$medicine->id}}</div>
                        <div class="card-body text-success">
                                <h4 class="card-title">{{$medicine->name}}</h4>
                                <p class="card-text">{{$medicine->description}}</p>
                                <p>{{$medicine->price}}</p>

                        </div>
                        <div class="card-footer bg-transparent border-success">Footer</div>
                </div>
    @endforeach

</div>