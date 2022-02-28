<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class InitialAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'role'=>'admin',
            'name'=>'System Administrator',
            'email'=>'systemadmin@gmail.com',
            'password'=>bcrypt('password12345'),
        ];
        User::create($admin);
    }
}