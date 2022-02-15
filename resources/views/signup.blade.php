@extends ('layouts.main')
@section('content')
    <h1 class="container my-4">
        {{__("page.signup")}}
    </h1>
    <div class="container p-2 justify-content-evenly align-items-center">
        <div class="col-6 mb-2">
            <form action="/signup" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                {{-- FirstName --}}
                <div class="row mb-3">
                    <label for="first" class="col-4 col-form-label">
                        {{ __('page.first') }}
                    </label>
                    <div class="col-6">
                        <input class="col-3 form-control @error('first') is-invalid @enderror" name="first" id="first" value="{{ old('first') }}" required>
                    </div>
                </div>

                {{-- Middle --}}
                <div class="row mb-3">
                    <label for="middle" class="col-4 col-form-label">
                        {{ __('page.middle') }}
                    </label>
                    <div class="col-md-6">
                        <input class="form-control @error('middle') is-invalid @enderror" name="middle" id="middle" value="{{ old('middle') }}">
                    </div>
                </div>
                
                {{-- LastName --}}
                <div class="row mb-3">
                    <label for="last" class="col-4 col-form-label">
                        {{ __('page.last') }}
                    </label>
                    <div class="col-6">
                        <input class="col-3 form-control @error('last') is-invalid @enderror" name="last" id="last" value="{{ old('last') }}" required>
                    </div>
                </div>


                {{-- Gender --}}
                <div class="row mb-3">
                    <label for="gender" class="col-4 form-check-label">
                        {{ __('page.gender') }}
                    </label>

                    <div class="col-1">
                        <input id="male" type="radio" class="form-check-input " name="gender" value="1" required>
                    </div>
                    <label for="male" class="col-2 form-check-label">
                        {{ __('page.male') }}
                    </label>

                    <div class="col-1">
                        <input id="female" type="radio" class="col form-check-input" name="gender" value="2">
                    </div>
                    <label for="female" class="col-1 form-check-label">
                        {{ __('page.female') }}
                    </label>
                </div>

                {{-- Password --}}
                <div class="row mb-3">
                    <label for="password" class="col-4 col-form-label">
                        {{ __('page.password') }}
                    </label>

                    <div class="col-md-6">
                        <input type="password" class="col-3 form-control  @error('password') is-invalid @enderror" name="password" id="password" required>
                    </div>
                    @error('password')
                        <div class="col-6 offset-md-3 fs-6" style="color: red">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="row mb-3">
                    <label for="email" class="col-4 col-form-label">{{ __('page.email') }}</label>
                    <div class="col-6">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required>
                    </div>
                </div>
        
                {{-- Role --}}
                <div class="row mb-3">
                    <label for="role" class="col-4 col-form-label">{{ __('page.role') }}</label>
                    <div class="col-6">
                        <select class="form-control  @error('role') is-invalid @enderror" name="role" id="role">
                            <option value="1">{{__("page.user")}}</option>
                            <option value="2">{{__("page.admin")}}</option>
                        </select>
                    </div>
                </div>
        
                {{-- Display Picture --}}
                <div class="row mb-3">
                    <label for="image" class="col-4 col-form-label">{{__("page.image")}}</label>
                    <div class="col-6">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" accept="image/*" required>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="row mb-2 mt-4">
                    <div class="col-2"></div>
                    <button type="submit" class="ms-5 col-2 btn btn-warning">{{ __('page.btn_submit') }}</button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <a class="col-5" href="/login">{{__("page.login_text")}}</a>
        </div>
    </div>
@endsection
