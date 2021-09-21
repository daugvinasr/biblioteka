@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3">ID</th>
    <th class="px-4 py-3">Vardas Pavardė</th>
    <th class="px-4 py-3">Gimimo Diena</th>
    <th class="px-4 py-3">Studiju Programa</th>
@endsection

@section('tableData')
    @foreach ($studentsData as $student)
        <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border">{{ $student->id_students  }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $student->name }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $student->birthdate }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $student->studyProgramme }}</td>
        </tr>
    @endforeach
    <div style="padding: 15px">
        {{ $studentsData -> links() }}
        <style>
            .w-5{height: 10px;}
        </style>
    </div>
@endsection



