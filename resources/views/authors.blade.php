@extends('layouts.layout')

@section('content')
<div class="grid3text">
    <table>
        <tr>
            <th>ID</th>
            <th>Vardas</th>
            <th>Pavardė</th>
        </tr>

        @foreach($authorsData as $author)
        <tr>
            <td>{{$author-> id_authors}}</td>
            <td>{{$author-> name}}</td>
            <td>{{$author-> surname}}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
