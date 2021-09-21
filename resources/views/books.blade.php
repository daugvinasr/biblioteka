@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3">Pavadinimas</th>
    <th class="px-4 py-3">Puslapių skaičius</th>
    <th class="px-4 py-3">Tipas</th>
    <th class="px-4 py-3">Vardas</th>
    <th class="px-4 py-3">Pavardė</th>
@endsection

@section('tableData')
    @foreach ($booksData as $book)
        <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border">{{ $book->title }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $book->pageCount }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $book->type }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $book->name }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $book->surname }}</td>
        </tr>
    @endforeach
@endsection

@section('inputFields')

@endsection

