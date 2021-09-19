@extends('layouts.layout')

@section('content')
    <div class="grid3text">
        <table>
            <tr>
                <th>ID</th>
                <th>Pavadinimas</th>
            </tr>

            @foreach ($typesData as $type)
                <tr>
                    <td>{{ $type->id_types }}</td>
                    <td>{{ $type->name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
