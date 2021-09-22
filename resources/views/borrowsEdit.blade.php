@extends('layouts.layout')

@section('content')
    <section class="container mx-auto p-6 rounded-10">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg px-2 py-2">
            <form action="borrows" method="POST">
                <h1 class="p-2">Paėmimo redagavimas:</h1>
                @csrf
                <div class="p-2">
                    <label class="" for="name">ID:</label>
                    <p></p>
                    <input value="{{$fillInData[0] -> id_borrows}}" class="shadow-lg bg-gray-100" type="text" name="id_borrows" readonly>
                </div>
                <div class="p-2">
                    <label class="" for="name">Paėmimo data:</label>
                    <p></p>
                    <input value="{{$fillInData[0] -> takenDate}}" class="shadow-lg bg-gray-100" type="text" name="takenDate">
                </div>
                <div class="p-2">
                    <label class="" for="name">Pridavimo data</label>
                    <p></p>
                    <input value="{{$fillInData[0] -> broughtDate}}" class="shadow-lg bg-gray-100" type="text" name="broughtDate">
                </div>
                <div class="p-2">
                    <label>Paėmusio vardas pavardė:</label>
                    <p></p>
                    <select name="fk_studentsid" id="" class="shadow-lg bg-gray-100">
                        <option value="{{$fillInData[0] -> fk_studentsid}}">{{$firstDropDown[0] -> name}}</option>
                        @foreach($StudentNamesDropDownNoRepeat as $type)
                            <option value="{{$type->id_students}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="p-2">
                    <label>Knygos pavadinimas:</label>
                    <p></p>
                    <select name="fk_booksid" id="" class="shadow-lg bg-gray-100">
                        <option value="{{$fillInData[0] -> fk_booksid}}">{{$firstDropDown[0] -> title}}</option>
                        @foreach($BookNamesDropDownNoRepeat as $type)
                            <option value="{{$type->id_books}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="p-2">
                    <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Patvirtinti">
                </div>
            </form>
        </div>
    </section>
@endsection
