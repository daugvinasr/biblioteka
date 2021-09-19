@extends('layouts.layout')

@section('content')
    <div class="grid3text">
        <table class="displayTable">
            <tr>
                <th>ID</th>
                <th>Pavadinimas</th>
                <th>Puslapių skaičius</th>
                <th>Tipas</th>
                <th>Autorius</th>
            </tr>

            @foreach($booksData as $book)
                <tr>
                    <td>{{$book-> id_books}}</td>
                    <td>{{$book-> name}}</td>
                    <td>{{$book-> pageCount}}</td>
                    <td>{{$book-> fk_typesid}}</td>
                    <td>{{$book-> fk_authorsid}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
