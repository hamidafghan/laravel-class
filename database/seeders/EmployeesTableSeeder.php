<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
        	'name' => 'Ali',
        	'email' => 'ali@email.com',
        ]);

        Employee::create([
        	'name' => 'Jamal',
        	'email' => 'jamal@email.com',
        ]);

        Employee::create([
        	'name' => 'Kamal',
        	'email' => 'kamal@email.com',
        ]);

        Employee::create([
        	'name' => 'Mohammad',
        	'email' => 'Mohammad@email.com',
        ]);
    }
}
