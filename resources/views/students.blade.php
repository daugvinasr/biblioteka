@extends('layouts.layout')

@section('content')
    <div class="grid3text">
        <table class="displayTable">
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Gimimo Diena</th>
                <th>Studiju Programa</th>
            </tr>

            @foreach ($studentsData as $student)
                <tr>
                    <td>{{ $student->id_students }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->birthdate }}</td>
                    <td>{{ $student->studyProgramme }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
