@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3">ID</th>
    <th class="px-4 py-3">Vardas</th>
    <th class="px-4 py-3">Pavarde</th>
@endsection

@section('tableData')
    @foreach ($authorsData as $author)
    <tr class="text-gray-700">
        <td class="px-4 py-3 text-ms font-semibold border">{{ $author->id_authors }}</td>
        <td class="px-4 py-3 text-ms font-semibold border">{{ $author->name }}</td>
        <td class="px-4 py-3 text-ms font-semibold border">{{ $author->surname }}</td>
    </tr>
    @endforeach
@endsection

