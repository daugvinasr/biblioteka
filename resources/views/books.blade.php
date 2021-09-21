@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3">Pavadinimas</th>
    <th class="px-4 py-3">Puslapių skaičius</th>
    <th class="px-4 py-3">Tipas</th>
    <th class="px-4 py-3">Vardas Pavardė</th>
    <th class="px-4 py-3">Veiksmai</th>
@endsection

@section('tableData')
    @foreach ($booksData as $book)
        <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border">{{ $book->title }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $book->pageCount }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $book->type }}</td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $book->name }}</td>
            <td class="px-4 text-ms font-semibold border text-center ">
                <a class="shadow-lg bg-red-300 rounded-full py-2 px-2  " href="books/{{$book->id_books}}">TRINTI</a>
                <a class="shadow-lg bg-yellow-300 rounded-full py-2 px-2" href="books/edit/{{$book->id_books}}">REDAGUOTI</a>
            </td>
        </tr>
    @endforeach
@endsection

@section('inputFields')
    <form action="books" method="POST">
        <h1 class="p-2">Knygos pridėjimas:</h1>
        @csrf
        <div class="p-2">
            <label>Pavadinimas:</label>
            <p></p>
            <input class="shadow-lg bg-gray-100" type="text" name="name">
        </div>

        <div class="p-2">
            <label>Puslapių skaičius:</label>
            <p></p>
            <input class="shadow-lg bg-gray-100" type="text" name="pageCount">
        </div>

        <div class="p-2">
            <label>Tipas:</label>
            <p></p>
                <select name="fk_typesid" id="" class="shadow-lg bg-gray-100">
                    @foreach($typesData as $type)
                        <option value="{{$type->id_types}}">{{$type->name}}</option>
                    @endforeach
                </select>
        </div>

        <div class="p-2">
            <label>Vardas Pavardė:</label>
            <p></p>
            <select name="fk_authorsid" id="" class="shadow-lg bg-gray-100">
                @foreach($namesData as $name)
                    <option value="{{$name->id_authors}}">{{$name->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="p-2">
            <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Pridėti">
        </div>

    </form>

@endsection

