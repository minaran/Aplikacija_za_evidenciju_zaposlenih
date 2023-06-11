<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'date_of_joining',
        'neto_salary',
        'annual_leave',
        'qualifications',
        'department_id'
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}