@extends ('layouts.main')
@section('content')
    <div class="container-fluid ms-3 mt-5" style="padding-top: 80px;">
        <p class="fs-2 mb-3">
            {{__("page.detail")}}
        </p>
        <table class="table fs-5">
            <tbody>
                <tr>
                    <td class="col-2 fw-bold">
                        {{__("page.title_book")}}
                    </td>
                    <td>{{$ebook[0]->title}}</td>
                </tr>
                <tr>
                    <td class="col-2 fw-bold">
                        {{__("page.author")}}
                    </td>
                    <td>{{$ebook[0]->author}}</td>
                </tr>
                <tr>
                    <td class="col-2 fw-bold">
                        {{__("page.description")}}
                    </td>
                    <td>{{$ebook[0]->description}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div style="margin-bottom: 80px;" class="row me-4">
        <a class="btn btn-warning col-1 ms-auto" href="/add-cart/{{$ebook[0]->ebook_id}}">
            {{__("page.btn_rent")}}
        </a>
    </div>
@endsection
