@include('partials.head')
<body>
@include('partials.navbar')
<div>
    <section class="container mx-auto p-6 rounded-10">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg px-2 py-2">

            <form action="edits" method="POST">
                <h1>Redagavimas:</h1>
                @csrf
                @foreach ($editsData[0] as $val => $edit)
                    <h1 class="py-2">{{$val}}</h1>
                    <input value="{{$edit}}" class="shadow-lg bg-gray-100" type="text" name="{{$val}}">
                @endforeach
                <div class="py-3">
                    <input class="shadow-lg bg-yellow-300 rounded-full py-1 px-2" type="submit" value="Pridėti">
                </div>
            </form>
        </div>
    </section>
</div>
</body>
