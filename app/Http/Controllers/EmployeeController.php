<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::first()->paginate(5);
        return view('employees.index', compact('employees'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate input + kreirati novog zaposlenog u bazi + prenaputiti korisnika i poslati poruku

        $request->validate([
            'first_name'=> 'required',
            'last_name'=> 'required',
            'date_of_birth'=> 'required',
            'date_of_joining'=> 'required',
            'neto_salary'=> 'required',
            'annual_leave'=> 'required',
            'qualifications'=> 'required',
            'department_id'=> 'required'
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Uspešno je kreiran novi zaposleni!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        
// koristimo kao kod store:  
// validate input unos podataka 

$request->validate([
    'first_name'=> 'required',
    'last_name'=> 'required',
    'date_of_birth'=> 'required',
    'date_of_joining'=> 'required',
    'neto_salary'=> 'required',
    'annual_leave'=> 'required',
    'qualifications'=> 'required',
    'department_id'=> 'required'
]);

// pozivamo zaposlene iz baze 
$employee->update($request->all());

// prenaputiti korisnika i poslati poruku da je ažuriran zaposleni
return redirect()->route('employees.index')->with('success', 'Uspešno ažurirano !');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        // brisanje zaposlenog
        $employee->delete();
        // redirekcija administratora i prikaz poruke da je uspesno obrisan
        return redirect()->route('employees.index')->with('success', 'Uspešno obrisan !');
    }


    // napravljena f-ja, za preteagu zaposlenog po imenu ili po prezimenu, ili po šifri odseka
    public function search()
    {
        $search_name = $_GET['query'];
        $employees = Employee::where ('first_name', 'LIKE', '%'.$search_name.'%')
        ->orWhere('last_name', 'LIKE', '%'.$search_name.'%')
        ->orWhere('department_id', 'LIKE', $search_name)
        ->get();

        return view('employees.search', compact('employees'));
    }

}