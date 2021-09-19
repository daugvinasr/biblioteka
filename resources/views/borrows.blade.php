@extends('layouts.layout')

@section('content')
    <div class="grid3text">
        <table class="displayTable">
            <tr>
                <th>ID</th>
                <th>Paėmimo data</th>
                <th>Pridavimo data</th>
                <th>Studentas</th>
                <th>Knyga</th>
            </tr>

            @foreach ($borrowsData as $borrow)
                <tr>
                    <td>{{ $borrow->id_borrows }}</td>
                    <td>{{ $borrow->takenDate }}</td>
                    <td>{{ $borrow->broughtDate }}</td>
                    <td>{{ $borrow->fk_studentsid }}</td>
                    <td>{{ $borrow->fk_booksid }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
