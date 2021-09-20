@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3">ID</th>
    <th class="px-4 py-3">Pavadinimas</th>
@endsection

@section('tableData')
    @foreach ($typesData as $type)
        <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border">{{ $type->id_types }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $type->name }}</td>
        </tr>
    @endforeach
@endsection


