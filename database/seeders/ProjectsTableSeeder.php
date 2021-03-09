<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Project a
    	Project::create([
    		'name' => 'Project A',
    		'location' => 'Kabul'
    	]);

    	// Project b
    	Project::create([
    		'name' => 'Project B',
    		'location' => 'Herat'
    	]);

    	// Project c
    	Project::create([
    		'name' => 'Project C',
    		'location' => 'Balkh'
    	]);
    }
}
