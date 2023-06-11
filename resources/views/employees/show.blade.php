@extends('employees.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        
        <div class="pull-left">
            <h4>Podaci o zaposlenom:</h4>
            <br>
        </div>
    
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('employees.index') }}">Nazad</a>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ime i prezime:</strong>
            {{ $employee->first_name . " " . $employee->last_name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Datum rođenja:</strong>
            {{ $employee->date_of_birth }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Datum zaposlenja:</strong>
            {{ $employee->date_of_joining }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Stručna sprema:</strong>
            {{ $employee->qualifications }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Odsek:</strong>
            {{ $employee->department_id }}. {{ $employee->department->name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Broj dana godišnjeg odmora:</strong>
            {{ $employee->annual_leave }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Neto plata u valuti EUR:</strong>
            {{ $employee->neto_salary }}
        </div>
    </div>

<!-- Ovo je samo hipotetički primer i ažurirani su tako podaci, da svaki zaposleni ima -->
<!-- diplomu fakulteta i VII stepen stručne spreme, pa se neto plata množi koeficijentom 1.33 -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Bruto plata u valuti EUR:</strong>
            {{ $employee->neto_salary * 1.33 }}   
        </div>
    </div>

</div>

@endsection