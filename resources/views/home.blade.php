@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('home')}}" class="inline-form">
                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="search" type="text" class="form-control{{ $errors->has('search') ? ' is-invalid' : '' }}" name="search" value="{{ old('search') }}" required autofocus>

                        @if ($errors->has('search'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('search') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="col-md-2">
                        <select name="type" class="form-control" id="">
                            <option value="owner">Owner</option>
                            <option value="vehicle">Vehicle</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Search') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if(isset($default))
    <h3>Recent Vehicles Added</h3>
    @endif
    <div class="row py-2">
        @if($results->isNotEmpty())
        @foreach($results as $result)
        <div class="col-md-4 my-2">
            @if($type=='owner')
            @include('owner.result', ['owner'=>$result])
            @else
            @include('vehicle.result', ['vehicle'=>$result] )
            @endif
        </div>
        @endforeach
        @else
        No result found
        @endif
    </div>
</div>
@endsection