@extends('layouts.layout')

@section('content')
<section class="container mx-auto p-6 rounded-10">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg px-2 py-2">
        <form action="authors" method="POST">
            @csrf
            <h1>Autoriaus redagavimas:</h1>
            <h2>ID:</h2>
            <input value="{{$authorsData[0] -> id_authors}}" class="shadow-lg bg-gray-100" type="text" name="id_authors" readonly>
            <h2>Vardas Pavardė:</h2>
            <input value="{{$authorsData[0] -> name}}" class="shadow-lg bg-gray-100" type="text" name="name">
            <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Patvirtinti">
        </form>
    </div>
</section>
@endsection
