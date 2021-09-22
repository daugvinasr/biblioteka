@extends('layouts.layout')

@section('content')
    <section class="container mx-auto p-6 rounded-10">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg px-2 py-2">
            <form action="students" method="POST">
                <h1 class="p-2">Autoriaus redagavimas:</h1>
                @csrf
                <div class="p-2">
                    <label class="" for="name">ID:</label>
                    <p></p>
                    <input value="{{$studentsData[0] -> id_students}}" class="shadow-lg bg-gray-100" type="text" name="id_students" readonly>
                </div>
                <div class="p-2">
                    <label class="" for="name">Vardas Pavardė:</label>
                    <p></p>
                    <input value="{{$studentsData[0] -> name}}" class="shadow-lg bg-gray-100" type="text" name="name">
                </div>
                <div class="p-2">
                    <label class="" for="name">Gimimo diena:</label>
                    <p></p>
                    <input value="{{$studentsData[0] -> birthdate}}" class="shadow-lg bg-gray-100" type="text" name="birthdate">
                </div>
                <div class="p-2">
                    <label class="" for="name">Studiju programa:</label>
                    <p></p>
                    <input value="{{$studentsData[0] -> studyProgramme}}" class="shadow-lg bg-gray-100" type="text" name="studyProgramme">
                </div>
                <div class="p-2">
                    <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Patvirtinti">
                </div>
            </form>
        </div>
    </section>
@endsection
