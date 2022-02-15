@extends ('layouts.main')
@section('content')
    <h1 class="container my-4">
        {{__("page.login")}}
    </h1>
    <div class="container ms-5 col-6 mb-2">
        <form action="/login" method="POST">
            {{ csrf_field() }}
            <div class="row mb-3">
                <label for="email" class="col-3 col-form-label">
                    {{ __('page.email') }}
                </label>
                <div class="col-4">
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-3 col-form-label">
                    {{ __('page.password') }}
                </label>
                <div class="col-4">
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" required>
                </div>
            </div>
            <div class="row mb-2 mt-4">
                <div class="ms-5 col-1"></div>
                <button type="submit" class="ms-5 col-2 btn btn-warning">
                    {{ __('page.btn_submit') }}
                </button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <a class="col-4" href="/signup">
            {{__("page.signup_text")}}
        </a>
    </div>
@endsection