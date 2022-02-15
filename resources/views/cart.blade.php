@extends ('layouts.main')
@section('content')
    @if (session('cart') != null)
        <form action="/checkout" method="POST">
            {{ csrf_field() }}
            <table class="table container mt-5 ms-5">
                <thead>
                    <tr>
                        <th class="text-center fs-2" scope="col" style="padding-top: 80px;">
                            {{__("page.title_book")}}
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach (session('cart') as $id => $cartDetail)
                        <tr>
                            <td class="col-5 text-center fs-5">
                                <a href="/ebook-detail/{{$id}}">
                                    {{$cartDetail['title']}}
                                </a>
                            </td>
                            <td class="fs-5"><a href="/delete-cart/{{$id}}">
                                {{__("page.btn_delete")}}
                            </a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div style="margin-bottom: 80px;" class="row me-5">
                <button class="btn btn-warning text-dark col-1 ms-auto" type="submit">
                    {{__("page.btn_submit")}}
                </button>
            </div>
        </form>
    @endif
@endsection