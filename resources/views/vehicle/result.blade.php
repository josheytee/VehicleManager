<div class="card card-default">
    <div class="card-image">
        <img src="{{$vehicle->image}}" class="card-img-top" />
    </div>

    <div class="card-body">
        <h5 class="card-title">
            <a href="{{route('vehicle.show',$vehicle)}}">{{$vehicle->name}}</a>
        </h5>
        <h6 class=" card-subtitle mb-2 text-muted">owned by: {{$vehicle->owner->name}}</h6>
        <div>model: {{$vehicle->model}}</div>
        <div>color: {{$vehicle->color}}</div>
        <div>plate: {{$vehicle->plate}}</div>
    </div>
</div>