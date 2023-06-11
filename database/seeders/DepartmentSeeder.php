<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'HR department',
                'created_at' => now(),
            ],
            [
                'name' => 'Accounting department',
                'created_at' => now(),
            ],
            [
                'name' => 'Purshasing department',
                'created_at' => now(),
            ],
            [
                'name' => 'Sales department',
                'created_at' => now(),
            ],
            [
                'name' => 'IT department',
                'created_at' => now(),
            ],
            [
                'name' => 'Marketing department',
                'created_at' => now(),
            ],
        ];
        Department::insert($data);
    
    }
}
