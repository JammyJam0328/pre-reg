<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;
class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facility::create([
            'name' => 'Facility 1',
            'description' => 'Facility 1 description',
        ]);
        Facility::create([
            'name' => 'Facility 2',
            'description' => 'Facility 2 description',
        ]);
        Facility::create([
            'name' => 'Facility 3',
            'description' => 'Facility 3 description',
        ]);

        Facility::create([
            'name' => 'Facility 4',
            'description' => 'Facility 4 description',
        ]);

        
        Facility::create([
            'name' => 'Facility 5',
            'description' => 'Facility 5 description',
        ]);

        Facility::create([
            'name' => 'Facility 6',
            'description' => 'Facility 6 description',
        ]);

    }
}