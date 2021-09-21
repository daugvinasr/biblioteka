@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3">ID</th>
    <th class="px-4 py-3">Vardas</th>
    <th class="px-4 py-3">Pavarde</th>
    <th class="px-4 py-3">Veiksmai</th>
@endsection

@section('tableData')
    @foreach ($authorsData as $author)
    <tr class="text-gray-700">
        <td class="px-4 py-3 text-ms font-semibold border">{{ $author->id_authors }}</td>
        <td class="px-4 py-3 text-ms font-semibold border">{{ $author->name }}</td>
        <td class="px-4 py-3 text-ms font-semibold border">{{ $author->surname }}</td>
        <td class="px-4 text-ms font-semibold border text-center ">
            <a class="shadow-lg bg-red-300 rounded-full py-2 px-2  " href="authors/{{$author->id_authors}}">TRINTI</a>
            <a class="shadow-lg bg-yellow-300 rounded-full py-2 px-2" href="authors/edit/{{$author->id_authors}}">REDAGUOTI</a>
        </td>
    </tr>
    @endforeach

@endsection


@section('inputFields')
    <form action="authors" method="POST">
        <h1>Autoriaus pridėjimas:</h1>
        @csrf
        <label class="" for="name">Vardas:</label>
        <input class="shadow-lg bg-gray-100" type="text" name="name">
        <label class="" for="surname">Pavardė</label>
        <input class="shadow-lg bg-gray-100" type="text" name="surname">
        <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Pridėti">
    </form>
@endsection

