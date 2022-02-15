@extends('layouts.main')
@section('content')
    <div class="container mt-5 fw-bold fs-2" style="padding-top: 80px;">
        {{$user->first_name.__(" ").$user->middle_name.__(" ").$user->last_name.__(" - ".$user->role->role_desc)}}
    </div>
    <div class="container">
        <form action="/update-role/{{$user->account_id}}" method="POST">
            {{ csrf_field() }}
            <select class="form-control" name="role" id="role">
                <option value="1">{{__("page.user")}}</option>
                <option value="2">{{__("page.admin")}}</option>
            </select>

            <br><br>

            <div class="container mt-3">
                <button type="submit" class="col-1 btn btn-warning">
                    {{ __('page.btn_save') }}
                </button>
            </div><br><br><br>
        </form>
    </div>
@endsection
