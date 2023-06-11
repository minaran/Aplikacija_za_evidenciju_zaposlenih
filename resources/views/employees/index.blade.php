@extends('employees.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <form class="d-flex" role="search" type="get" action="{{ url('/search') }}">
                <input class="form-control me-2" name="query" type="search" placeholder="Pretraga po imenu ili prezimenu ili šifri odseka" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pretraži</button>
              </form>
            </div>
        </nav>
        <hr>
        <div class="pull-left">
            <h4>Prikaz zaposlenih u organizaciji</h4>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('dashboard') }}">Nazad na Admin/Dashboard</a>
            </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('employees.create') }}">Kreirajte novog zaposlenog</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

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

{{ $employees->links() }}

<hr>

<!-- Departments / Službe / svaki Odsek ima dodeljenu šifru koju unosimo -->
<div class="card mb-4">
    <div class="card-header"> Prilikom unosa podataka voditi računa da se unese pravilna šifra za svaki odsek !!!  </div>
    <div class="card-body">
        <ul>
        <li> 1 - HR department / HR odsek</li>
        <li> 2 - Accounting department / Računovodstveni odsek</li>
        <li> 3 - Purchasing department / Odsek nabavke</li>
        <li> 4 - Sales department / Odsek prodaja</li>
        <li> 5 - IT department / IT odsek</li>
        <li> 6 - Marketing department / Marketing odsek</li>
        </ul>                        
    </div>
</div>

@endsection