@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3 text-center">ID</th>
    <th class="px-4 py-3 text-center">Pavadinimas</th>
    <th class="px-4 py-3 text-center">Veiksmai</th>
@endsection

@section('tableData')
    @foreach ($typesData as $type)
        <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $type->id_types }}</td>
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $type->name }}</td>
            <td class="px-4 text-ms font-semibold border text-center ">
                <a class="shadow-lg bg-red-300 rounded-full py-2 px-2  " href="types/{{$type->id_types}}">TRINTI</a>
                <a class="shadow-lg bg-yellow-300 rounded-full py-2 px-2" href="types/edit/{{$type->id_types}}">REDAGUOTI</a>
            </td>
        </tr>

    @endforeach
@endsection

@section('inputFields')
    <form action="types" method="POST">
        <h1 class="p-2">Tipo pridėjimas:</h1>
        @csrf
        <div class="p-2">
            <label class="" for="name">Tipo pavadinimas:</label>
            <p></p>
            <input class="shadow-lg bg-gray-100" type="text" name="name">
            @error('name') {{$message}} @enderror
        </div>
        <div class="p-2">
            <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Pridėti">
        </div>

    </form>
@endsection


