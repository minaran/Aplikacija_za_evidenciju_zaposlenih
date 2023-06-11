@extends('employees.layout')

@section('content')

<div class="pull-right">
    <a class="btn btn-primary" href="{{ route('employees.index') }}">Nazad</a>
</div>

<table class="table table-bordered">
    <tr>
       <th>ID</th>
       <th>Ime</th>
       <th>Prezime</th>
       <th>Stručna sprema</th>
       <th>Datum prijave</th>
       <th>Odsek</th>
       <th width="280px">Akcija</th>
    </tr>
    @foreach ($employees as $employee)
    </tr>
        <td>{{ $employee->id }}</td>
        <td>{{ $employee->first_name }}</td>
        <td>{{ $employee->last_name }}</td>
        <td>{{ $employee->qualifications }}</td>
        <td>{{ $employee->date_of_joining }}</td>
        <td>{{ $employee->department_id }}. {{$employee->department->name}}</td>
        <td>
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('employees.show', $employee->id) }}">Prikaži</a>
                <a class="btn btn-primary" href="{{ route('employees.edit', $employee->id) }}">Učitaj</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Obriši</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>




@endsection