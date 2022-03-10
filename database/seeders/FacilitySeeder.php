<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;
use App\Models\TestCenter;
class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TestCenter::create([
            'name' => 'SKSU ISULAN CAMPUS',
            'address' => 'Isulan Sultan Kudarat',
        ]);
        TestCenter::create([
            'name' => 'SKSU ACCESS CAMPUS',
            'address' => 'AJC, Montilla Tacurong City Sultan Kudarat',
        ]);
         TestCenter::create([
            'name' => 'SKSU TACURONG CAMPUS',
            'address' => 'Tacurong City Sultan Kudarat',
        ]);
    }
}