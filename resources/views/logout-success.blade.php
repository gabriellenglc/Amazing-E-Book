@extends ('layouts.main')
@section('content')
    <div class="box">
        <div style="display: flex;justify-content: center;align-items: center; width: 250px; height: 250px; 
        outline: 5px solid #ADD8E6; margin-top:125px; margin-bottom:130px;
            -webkit-border-radius: 100px 100px 100px 100px;border-radius: 150px 150px 150px 150px;">
            <p style="margin: 12px; text-align:center;">
                {{__("page.logout_text")}}
            </p> 
        </div>
    </div>
@endsection
