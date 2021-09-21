@extends('layouts.layout')

@section('content')
    <section class="container mx-auto p-6 rounded-10">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg px-2 py-2">
            <form action="authors" method="POST">
                <h1 class="p-2">Knygos redagavimas:</h1>
                @csrf
                <div class="p-2">
                    <label class="" for="name">ID:</label>
                    <p></p>
                    <input value="{{$booksData[0] -> id_books}}" class="shadow-lg bg-gray-100" type="text" name="id_books" readonly>
                </div>
                <div class="p-2">
                    <label class="" for="name">Pavadinimas:</label>
                    <p></p>
                    <input value="{{$booksData[0] -> name}}" class="shadow-lg bg-gray-100" type="text" name="name">
                </div>
                <div class="p-2">
                    <label class="" for="name">Puslapių Skaičius:</label>
                    <p></p>
                    <input value="{{$booksData[0] -> pageCount}}" class="shadow-lg bg-gray-100" type="text" name="pageCount">
                </div>
                <div class="p-2">
                    <label>Tipas:</label>
                    <p></p>
                    <select name="fk_typesid" id="" class="shadow-lg bg-gray-100">
                        <option value="{{$booksData[0] -> fk_typesid}}">{{$realNames[0] -> type}}</option>
                        @foreach($typesData as $type)
                            <option value="{{$type->id_types}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="p-2">
                    <label>Autorius:</label>
                    <p></p>
                    <select name="fk_authorsid" id="" class="shadow-lg bg-gray-100">
                        <option value="{{$booksData[0] -> fk_authorsid}}">{{$realNames[0] -> name}}</option>
                        @foreach($namesData as $type)
                            <option value="{{$type->id_authors}}">{{$type->name}}</option>
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
