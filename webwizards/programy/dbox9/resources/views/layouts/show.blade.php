@extends('welcome')

@section('content')
<!-- Tabela 1 -->
<table class="table table-striped">
<tr>
    <th>
    <!-- Back button -->
        <form method="get" action="{{ url()->previous() }}" enctype="multipart/form-data">
        @csrf
            <button type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
                </svg>
            </button>
        </form>
    </th>
</tr>
</table>

<!-- Tabela 2 -->
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th></th>
        <th></th>
    </tr>
    <tr>
    @foreach($items as $item)
        @if(strstr($item->name, ".") == True)
        <td id="name">{{$f_name = $item->name}}</td>

        <!-- Download a file -->
        <form method="POST" action="/download" enctype="multipart/form-data">
        @csrf
            <td>
                <button class="btn btn-small btn-outline-secondary" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                    </svg>
                </button>
            </td>
            <td ><input name="path_display" type="hidden" value="{{$item->path_display}}"></td>
        </form>
        @else

        <!-- Open Folder -->
        <form method="get" action="/openFolder" enctype="multipart/form-data">
        @csrf
            <td>
                <button class="btn btn-small btn-outline-warning" type="submit">{{$item->name}}/</button>
            </td>
            <td>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
        </td>
        <td><input name="path_display" type="hidden" value="{{$item->path_display}}"></td>
        </form>
        @endif
    </tr>
    @endforeach
</table>
@endsection