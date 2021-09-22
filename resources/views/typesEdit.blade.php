@extends('layouts.layout')

@section('content')
    <section class="container mx-auto p-6 rounded-10">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg px-2 py-2">
            <form action="types" method="POST">
                <h1 class="p-2">Tipo redagavimas:</h1>
                @csrf
                <div class="p-2">
                    <label class="" for="name">ID:</label>
                    <p></p>
                    <input value="{{$typesData[0] -> id_types}}" class="shadow-lg bg-gray-100" type="text" name="id_types" readonly>
                </div>
                <div class="p-2">
                    <label class="" for="name">Tipo pavadinimas:</label>
                    <p></p>
                    <input value="{{$typesData[0] -> name}}" class="shadow-lg bg-gray-100" type="text" name="name">
                </div>
                <div class="p-2">
                    <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Patvirtinti">
                </div>
            </form>
        </div>
    </section>
@endsection
