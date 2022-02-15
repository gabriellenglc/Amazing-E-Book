@extends ('layouts.main')
@php
    $user = auth()->user();
@endphp
@section('content')
    <div class="container row mt-5" style="padding-top: 120px;">
        <div class="container col-2">
            <img style="height: 250px; width: 250px;" src="{{Storage::url('images/').$user->display_picture_link}}" alt="">
        </div>

        <div class="container col-5">
            <form action="/update/{{$user->account_id}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="first" class="col-5 col-form-label">
                        {{ __('page.first') }}
                    </label>
                    <div class="col-6">
                        <input class="col-3 form-control @error('first') is-invalid @enderror" name="first" id="first" value="{{ $user->first_name }}" required>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="middle" class="col-5 col-form-label">
                        {{ __('page.middle') }}
                    </label>
                    <div class="col-6">
                        <input class="form-control @error('middle') is-invalid @enderror" name="middle" id="middle" value="{{ $user->middle_name }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="last" class="col-5 col-form-label">
                        {{ __('page.last') }}
                    </label>
                    <div class="col-6">
                        <input class="col-3 form-control @error('last') is-invalid @enderror" name="last" id="last" value="{{ $user->last_name }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gender" class="col-5 form-check-label">
                        {{ __('page.gender') }}
                    </label>

                    <div class="col-1">
                        <input id="male" type="radio" class="form-check-input " name="gender" value="1" required>
                    </div>
                    <label for="male" class="col-2 form-check-label">{{ __('page.male') }}</label>

                    <div class="col-1">
                        <input id="female" type="radio" class="col form-check-input" name="gender" value="2">
                    </div>
                    <label for="female" class="col-1 form-check-label">{{ __('page.female') }}</label>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-5 col-form-label">
                        {{ __('page.password') }}
                    </label>
                    <div class="col-6">
                        <input type="password" class="col-3 form-control  @error('password') is-invalid @enderror" name="password" id="password" required>
                    </div>
                    @error('password')
                        <div class="col-6 offset-md-3 fs-6" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-5 col-form-label">
                        {{ __('page.email') }}
                    </label>
                    <div class="col-6">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" value="{{ $user->email }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="role" class="col-5 col-form-label">
                        {{ __('page.role') }}
                    </label>
                    <div class="col-6">
                        <select class="form-control  @error('role') is-invalid @enderror" name="role" id="role" aria-valuenow="{{$user->role_id}}">
                            <option value="1">{{__("page.user")}}</option>
                            <option value="2">{{__("page.admin")}}</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="image" class="col-5 col-form-label">
                        {{__("page.image")}}
                    </label>
                    <div class="col-6">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" accept="image/*" required>
                    </div>
                </div>
                
                <div class="row mb-2 mt-3">
                    <div class="col-2"></div>
                    <button style="margin-left: 450px" type="submit" class="col-2 btn btn-warning">{{ __('page.btn_save') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection