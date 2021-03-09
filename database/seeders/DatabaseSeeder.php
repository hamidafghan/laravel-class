<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(Project::count() == 0){
            $this->call(ProjectsTableSeeder::class);
            Project::factory()->count(20)->create();
        } 

        if(Employee::count() == 0){
            $this->call(EmployeesTableSeeder::class);
            Employee::factory()
                ->has(Project::factory()->count(3))
                ->count(30)
                ->create();
        }
    }
}
