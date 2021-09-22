@extends('layouts.layoutTables')

@section('tableNames')
    <th class="px-4 py-3 text-center">Paėmimo data</th>
    <th class="px-4 py-3 text-center">Pridavimo data</th>
    <th class="px-4 py-3 text-center">Paėmusio vardas pavardė</th>
    <th class="px-4 py-3 text-center">Knyga</th>
    <th class="px-4 py-3 text-center">Veiksmai</th>
@endsection

@section('tableData')
    @foreach ($borrowsData as $borrow)
        <tr class="text-gray-700">
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $borrow->takenDate }}</td>
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $borrow->broughtDate }}</td>
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $borrow->name }}</td>
            <td class="px-4 py-3 text-ms font-semibold border text-center">{{ $borrow->title }}</td>
            <td class="px-4 text-ms font-semibold border text-center ">
                <a class="shadow-lg bg-red-300 rounded-full py-2 px-2  " href="borrows/{{$borrow->id_borrows}}">TRINTI</a>
                <a class="shadow-lg bg-yellow-300 rounded-full py-2 px-2" href="borrows/edit/{{$borrow->id_borrows}}">REDAGUOTI</a>
            </td>
        </tr>
    @endforeach
@endsection

@section('inputFields')
    <form action="borrows" method="POST">
        <h1 class="p-2">Paėmimo pridėjimas:</h1>
        @csrf
        <div class="p-2">
            <label>Paėmimo data:</label>
            <p></p>
            <input class="shadow-lg bg-gray-100" type="text" name="takenDate">
        </div>
        <div class="p-2">
            <label>Pridavimo data:</label>
            <p></p>
            <input class="shadow-lg bg-gray-100" type="text" name="broughtDate">
        </div>
        <div class="p-2">
            <label>Paėmusio vardas pavardė:</label>
            <p></p>
            <select name="fk_studentsid" id="" class="shadow-lg bg-gray-100">
                @foreach($studentsData as $student)
                    <option value="{{$student->id_students}}">{{$student->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="p-2">
            <label>Knyga:</label>
            <p></p>
            <select name="fk_booksid" id="" class="shadow-lg bg-gray-100">
                @foreach($booksData as $books)
                    <option value="{{$books->id_books}}">{{$books->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="p-2">
            <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Pridėti">
        </div>
    </form>

@endsection


