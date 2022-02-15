@extends('layouts.main')
 
@section('content')
<div class="box">
    <div style="display: flex;justify-content: center;align-items: center; width: 300px; height: 300px;
        outline: 10px solid #ADD8E6; margin-top:125px; margin-bottom:130px; 
        -webkit-border-radius: 300px 300px 300px 300px; border-radius: 300px 300px 300px 300px;">
        <p style="margin: 12px; text-align:center; font-size: 22px; font-weight: 500;">
            {{__("page.index")}}
        </p>
    </div>
</div>
@endsection