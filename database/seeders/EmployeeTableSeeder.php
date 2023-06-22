<?php

namespace Database\Seeders;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'employee_name'=>'jaya',
            'place'=>'calict',
            'email'=>'jaya@gmail.com',
        ]);
        Employee::create([
            'employee_name'=>'siya',
            'place'=>'palazhi',
            'email'=>'siya@gmail.com',
        ]);
        Employee::create([
            'employee_name'=>'gaya',
            'place'=>'pottammel',
            'email'=>'gaya@gmail.com',
        ]);
        Employee::create([
            'employee_name'=>'niya',
            'place'=>'kollam',
            'email'=>'niya@gmail.com',
        ]);
        Employee::create([
            'employee_name'=>'maya',
            'place'=>'kotooli',
            'email'=>'maya@gmail.com',
        ]);



    }
}
