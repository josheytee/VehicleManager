@extends('layouts.app')
@section('title',$vehicle->name)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicle Details')}}
                    <a href="{{route('vehicle.destroy',$vehicle->id)}}" class="btn btn-primary float-right">
                        <span class="fa fa-trash" aria-hidden="true"></span>
                    </a>
                    <a href="{{route('vehicle.edit',$vehicle->id)}}" class="btn btn-primary mr-2 float-right">
                        <span class="fa fa-edit" aria-hidden="true"></span>
                    </a>
                </div>
                <img src="{{$vehicle->image}}" class="card-img-top" />

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Name:</th>
                            <td>{{$vehicle->name}} </td>
                        </tr>
                        <tr>
                            <th>owned by:</th>
                            <td><a href="{{route('owner.show',$vehicle->owner->id)}}">{{$vehicle->owner->name}}</a></td>
                        </tr>
                        <tr>
                            <th>model:</th>
                            <td>{{$vehicle->model}}</td>
                        </tr>
                        <tr>
                            <th>color: </th>
                            <td>{{$vehicle->color}}</td>
                        </tr>
                        <tr>
                            <th>plate:</th>
                            <td>{{$vehicle->plate}}</td>
                        </tr>
                        <tr>
                            <th>license:</th>
                            <td>
                                <img src="{{$vehicle->driving}}" style="width:100%" alt="">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection