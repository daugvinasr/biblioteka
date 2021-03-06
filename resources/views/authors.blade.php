@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3 text-center">ID</th>
    <th class="px-4 py-3 text-center">Vardas Pavardė</th>
    <th class="px-4 py-3 text-center">Veiksmai</th>
@endsection

@section('tableData')
    @foreach ($authorsData as $author)
    <tr class="text-gray-700">
        <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $author->id_authors }}</td>
        <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $author->name }}</td>
        <td class="px-4 text-ms font-semibold border text-center ">
            <a class="shadow-lg bg-red-300 rounded-full py-2 px-2  " href="authors/{{$author->id_authors}}">TRINTI</a>
            <a class="shadow-lg bg-yellow-300 rounded-full py-2 px-2" href="authors/edit/{{$author->id_authors}}">REDAGUOTI</a>
        </td>
    </tr>
    @endforeach
    <div style="padding: 15px">
        {{ $authorsData -> links() }}
        <style>
            .w-5{height: 10px;}
        </style>
    </div>

@endsection


@section('inputFields')
    <form action="authors" method="POST">
        <h1 class="p-2">Autoriaus pridėjimas:</h1>
        @csrf
        <div class="p-2">
            <label class="" for="name">Vardas Pavardė:</label>
            <p></p>
            <input class="shadow-lg bg-gray-100 px-5" type="text" name="name">
            @error('name') {{$message}} @enderror
        </div>
        <div class="p-2">
            <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Pridėti">
        </div>
    </form>
@endsection

