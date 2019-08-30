@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{isset($vehicle->id) ? "Edit ":"Add " }} Vehicle</div>

                <div class="card-body">
                    <form method="POST" action="{{isset($vehicle->id)?route('vehicle.update',$vehicle) : route('vehicle.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($vehicle))
                        <input type="hidden" name="_method" value="put">
                        @endif
                        <div class="form-group row">
                            <label for="owner" class="col-md-4 col-form-label text-md-right">{{ __('Owner') }}</label>

                            <div class="col-md-6">
                                <select id="owner" class="js-example-templating form-control{{ $errors->has('owner') ? ' is-invalid' : '' }}" name="owner_id">

                                    <option></option>
                                    @foreach($owners as $owner)
                                    <option value="{{$owner->id}}" {{isset($vehicle->id) &&$vehicle->owner->id == $owner->id?"selected":""}}>
                                        {{$owner->name}}
                                    </option>
                                    @endforeach
                                </select>

                                @if ($errors->has('owner_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('owner_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{isset($vehicle->name)? $vehicle->name: old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="model" class="col-md-4 col-form-label text-md-right">{{ __('Model') }}</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control{{ $errors->has('model') ? ' is-invalid' : '' }}" name="model" value="{{isset($vehicle->model)? $vehicle->model:  old('model') }}" required>

                                @if ($errors->has('model'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('model') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('color') }}</label>

                            <div class="col-md-6">
                                <input id="color" type="color" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" value="isset($vehicle->color)? $vehicle->color:'' " name="color" required>

                                @if ($errors->has('color'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('color') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="plate" class="col-md-4 col-form-label text-md-right">{{ __('Plate Number') }}</label>

                            <div class="col-md-6">
                                <input id="plate" type="text" class="form-control" name="plate" value="{{isset($vehicle->plate)? $vehicle->plate : old('plate') }}" required>

                                @if ($errors->has('plate'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('plate') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="registerd_on" class="col-md-4 col-form-label text-md-right">{{ __('Registerd Date') }}</label>

                            <div class="col-md-6">
                                <input id="registerd_on" type="date" class="form-control{{ $errors->has('registered_on') ? ' is-invalid' : '' }}" name="registered_on" value="{{ isset($vehicle->registered_on)? $vehicle->registered_on :old('registered_on') }}" autofocus>

                                @if ($errors->has('registerd_on'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('registerd_on') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="expires" class="col-md-4 col-form-label text-md-right">{{ __('expires') }}</label>

                            <div class="col-md-6">
                                <input id="expires" type="date" class="form-control{{ $errors->has('expires_on') ? ' is-invalid' : '' }}" name="expires_on" value="{{ isset($vehicle->expires_on)? $vehicle->expires_on :old('expires_on') }}" autofocus>

                                @if ($errors->has('expires'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('expires') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="driving" class="col-md-4 col-form-label text-md-right">{{ __('Driving License') }}</label>

                            <div class="col-md-6">
                                @if(isset($vehicle->driving))
                                <img src="{{$vehicle->driving}}" style="width:100%;" alt="owner image">
                                @endif
                                <input id="driving" type="file" class="form-control{{ $errors->has('driving') ? ' is-invalid' : '' }}" name="driving" value="{{ old('driving') }}" autofocus>

                                @if ($errors->has('driving'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('driving') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                @if(isset($vehicle->image))
                                <img src="{{$vehicle->image}}" style="width:100%;" alt="owner image">
                                @endif
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{old('image') }}">

                                @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select2-bootstrap4.min.css')}}">
@endpush
@push('scripts')
<script src="{{asset('js/select2.min.js')}}"></script>
<script>
    function formatState(state) {
        if (!state.id) {
            return state.text;
        }
        var baseUrl = "/user/pages/images/flags";
        var $state = $(
            '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
        );
        return $state;
    };

    $(".js-example-templating").select2({
        // templateResult: formatState
        placeholder: "Select Owner",
        allowClear: true,
        theme: 'bootstrap4'
    });
</script>
@endpush