@extends('layouts.layout')

@section('content')
    <div class="grid3text">
        <table class="displayTable">
            <tr>
                <th>Pavadinimas</th>
                <th>Puslapių skaičius</th>
                <th>Tipas</th>
                <th>Vardas</th>
                <th>Pavardė</th>
            </tr>

            @foreach ($booksData as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->pageCount }}</td>
                    <td>{{ $book->type }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->surname }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
