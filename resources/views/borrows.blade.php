@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3">Paėmimo data</th>
    <th class="px-4 py-3">Pridavimo data</th>
    <th class="px-4 py-3">Paėmusio vardas pavardė</th>
    <th class="px-4 py-3">Knyga</th>
@endsection

@section('tableData')
    @foreach ($borrowsData as $borrow)
        <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border">{{ $borrow->takenDate }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $borrow->broughtDate }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $borrow->name }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $borrow->title }}</td>
        </tr>
    @endforeach
@endsection


