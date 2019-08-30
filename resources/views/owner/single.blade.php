@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Owner Details

                    <a href="{{route('owner.destroy',$owner->id)}}" class="ml-2 btn btn-primary float-right">
                        <span class="fa fa-trash" aria-hidden="true"></span>
                    </a>

                    <a href="{{route('owner.edit',$owner->id)}}" class="btn btn-primary float-right"> <span class="fa fa-edit" aria-hidden="true"></span></a>
                </div>
                <img src="{{$owner->photo}}" class="card-img-top" />

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Name:</th>
                            <td>{{$owner->name}}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth:</th>
                            <td>{{$owner->dob}}</td>
                        </tr>
                        <tr>
                            <th>Gender:</th>
                            <td>{{$owner->gender}}</td>
                        </tr>
                        <tr>
                            <th>Address: </th>
                            <td>{{$owner->address}}</td>
                        </tr>
                        <tr>
                            <th><abbr title="Local Government Area">LGA:</abbr></th>
                            <td>{{$owner->lga}}</td>
                        </tr>
                        <tr>
                            <th>State: </th>
                            <td>{{$owner->state}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <h3>vehicles</h3>
    <div class=" vehicleApp my-3">
        <div class="row">
            @foreach($owner->vehicles as $vehicle)
            <div class="col-md-4">
                @include('vehicle.result', ['owner'=>$vehicle])

                <!-- <vehicle-result :result="{{$vehicle}}" route="{{route('vehicle.show',$vehicle)}}"></vehicle-result> -->
            </div>
            @endforeach
        </div>
    </div>
</div> @endsection