@extends ('layouts.main')
@section('content')
    <div style="padding-top: 80px; margin-bottom:100px;" class="container-fluid mt-5">
        <table class="table">
            <thead class="text-center fs-2">
                <tr>
                    <th scope="col">
                        {{__("page.account_text")}}
                    </th>
                    <th scope="col">
                        {{__("page.action")}}
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($users); $i++)
                    <tr class="container-fluid">
                        <td class="fs-3">{{$users[$i]->first_name.__(" ").$users[$i]->middle_name.__(" ").$users[$i]->last_name.__(" - ".$users[$i]->role->role_desc)}}</td>
                        <td class="d-flex justify-content-evenly">
                            <a class="mt-4" href="/update-role/{{$users[$i]->account_id}}">
                                {{__("page.btn_update")}}
                            </a>
                            <a class="mt-4" href="/delete-user/{{$users[$i]->account_id}}">
                                {{__("page.btn_delete")}}
                            </a>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
