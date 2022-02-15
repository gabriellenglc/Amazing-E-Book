@extends ('layouts.main')
@section('content')
    <div style="margin-top: 100px; margin-bottom: 100px;" class="container-fluid">
        <table class="table">
            <thead class="text-center fs-2">
                <tr>
                    <th scope="col">{{__("page.author")}}</th>
                    <th scope="col">{{__("page.title_book")}}</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($ebooks); $i++)
                    <tr class="container-fluid border">
                        <td class="border border-dark">{{$ebooks[$i]->author}}</td>
                        <td class="border border-dark"><a href="/ebook-detail/{{$ebooks[$i]->ebook_id}}">{{$ebooks[$i]->title}}</a></td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
