@extends('layouts.layout')

@section('content')
    <div class="grid3text">
        <table class="displayTable">
            <tr>
                <th>Paėmimo data</th>
                <th>Pridavimo data</th>
                <th>Paėmusio vardas</th>
                <th>Paėmusio pavardė</th>
                <th>Knyga</th>
            </tr>

            @foreach ($borrowsData as $borrow)
                <tr>
                    <td>{{ $borrow->takenDate }}</td>
                    <td>{{ $borrow->broughtDate }}</td>
                    <td>{{ $borrow->name }}</td>
                    <td>{{ $borrow->surname }}</td>
                    <td>{{ $borrow->title}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
