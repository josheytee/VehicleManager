@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{isset($owner->id) ? "Edit ":"Add " }}Owner</div>

                <div class="card-body">
                    <form method="POST" action="{{isset($owner->id) ? route('owner.update',$owner->id): route('owner.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if(isset($owner))
                        <input type="hidden" name="_method" value="put">
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{isset($owner->name) ? $owner->name: old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ isset($owner->dob) ? $owner->dob: old('dob') }}" required>

                                @if ($errors->has('dob'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">{{ __('photo') }}</label>

                            <div class="col-md-6">
                                @if(isset($owner->photo))
                                <img src="{{$owner->photo}}" style="width:100%;" alt="owner image">
                                @endif
                                <input id="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" required>

                                @if ($errors->has('photo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('photo') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6 ">
                                <div class="form-check">
                                    <input type="radio" name="gender" value="M" id="male" class="form-check-input" {{(isset($owner->gender) && $owner->gender=='M') ? "checked":""}}>
                                    <label for="male" class="form-check-label">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" value="F" id="female" {{(isset($owner->gender) && $owner->gender=='F') ? " checked ":""}}class="form-check-input">
                                    <label for="female" class="form-check-label">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value=" {{isset($owner->state) ? $owner->state: old('state')}}">


                                @if ($errors->has('dob'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lga" class="col-md-4 col-form-label text-md-right">Local gorvernment</label>

                            <div class="col-md-6">
                                <input id="lga" type="text" class="form-control" name="lga" value=" {{isset($owner->lga) ? $owner->lga: old('lga')}}">


                                @if ($errors->has('lga'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lga') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value=" {{isset($owner->address) ? $owner->address: old('address')}}">


                                @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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