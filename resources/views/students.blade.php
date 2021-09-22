@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3 text-center">ID</th>
    <th class="px-4 py-3 text-center">Vardas Pavardė</th>
    <th class="px-4 py-3 text-center">Gimimo Diena</th>
    <th class="px-4 py-3 text-center">Studiju Programa</th>
    <th class="px-4 py-3 text-center">Veiksmai</th>
@endsection

@section('tableData')
    @foreach ($studentsData as $student)
        <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $student->id_students  }}</td>
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $student->name }}</td>
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $student->birthdate }}</td>
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $student->studyProgramme }}</td>
            <td class="px-4 text-ms font-semibold border text-center ">
                <a class="shadow-lg bg-red-300 rounded-full py-2 px-2  " href="students/{{$student->id_students}}">TRINTI</a>
                <a class="shadow-lg bg-yellow-300 rounded-full py-2 px-2" href="students/edit/{{$student->id_students}}">REDAGUOTI</a>
            </td>
        </tr>
    @endforeach
    <div style="padding: 15px">
        {{ $studentsData -> links() }}
        <style>
            .w-5{height: 10px;}
        </style>
    </div>
@endsection

@section('inputFields')
    <form action="students" method="POST">
        <h1 class="p-2">Studento pridėjimas:</h1>
        @csrf
        <div class="p-2">
            <label class="" for="name">Vardas Pavardė:</label>
            <p></p>
            <input class="shadow-lg bg-gray-100" type="text" name="name">
            @error('name') {{$message}} @enderror
        </div>
        <div class="p-2">
            <label class="" for="name">Gimimo data:</label>
            <p></p>
            <input class="shadow-lg bg-gray-100" type="text" name="birthdate">
            @error('birthdate') {{$message}} @enderror
        </div>
        <div class="p-2">
            <label class="" for="name">Studiju programa:</label>
            <p></p>
            <input class="shadow-lg bg-gray-100" type="text" name="studyProgramme">
            @error('studyProgramme') {{$message}} @enderror
        </div>
        <div class="p-2">
            <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Pridėti">
        </div>
    </form>
@endsection



