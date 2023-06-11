@extends('employees.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h4>Kreiraj novog zaposlenog</h4>
        </div>

        <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('employees.index') }}">Nazad</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Oprez!</strong> Postoji problem sa unosom podataka.<br><br>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>   
@endif

<form action="{{ route('employees.store') }}" method="POST">
    @csrf

<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Ime</strong>
                <input type="text" name="first_name" class="form-control" placeholder="Ime">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Prezime</strong>
                <input type="text" name="last_name" class="form-control" placeholder="Prezime">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Datum rođenja</strong>
                <input type="data" name="date_of_birth" id="date_of_birth" class="form-control" placeholder="yyyy-mm-dd">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Datum prijave</strong>
                <input type="data" name="date_of_joining" id="date_of_joining" class="form-control" placeholder="yyyy-mm-dd">
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Neto plata</strong>
                <input type="text" name="neto_salary" class="form-control" placeholder="Neto plata u EUR">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Broj dana odmora</strong>
                <input type="text" name="annual_leave" class="form-control" placeholder="Broj dana odmora">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Kvalifikacija</strong>
                <input type="text" name="qualifications" class="form-control" placeholder="Kvalifikacija">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-8">
            <div class="form-group">
                <strong>Department</strong>
                <input type="text" name="department_id" class="form-control" placeholder="1-HR, 2-Accounting, 3-Purchasing, 4-Sales, 5-IT, 6-Marketing">
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Kreiraj</button>
        </div>
</div>

</form>
@endsection