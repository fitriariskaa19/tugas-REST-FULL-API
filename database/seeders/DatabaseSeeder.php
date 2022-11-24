<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
            'level' => 'admin',
        ]);

        Employee::factory()->create([
            'employee_number' => 'EMP-2039',
            'full_name' => 'Kahfi',
            'address' => 'Jl. Sumatera',
            'gender' => 'Laki-Laki',
            'position' => 'Developer'
        ]);
        Employee::factory()->create([
            'employee_number' => 'EMP-2044',
            'full_name' => 'Yogi',
            'address' => 'Jl. Jakarta',
            'gender' => 'Laki-Laki',
            'position' => 'HRD'
        ]);
        Employee::factory()->create([
            'employee_number' => 'EMP-2067',
            'full_name' => 'Rahman',
            'address' => 'Jl. Surabaya',
            'gender' => 'Laki-Laki',
            'position' => 'Tester'
        ]);
        Employee::factory()->create([
            'employee_number' => 'EMP-2013',
            'full_name' => 'Rayhan',
            'address' => 'Jl. Sumatera',
            'gender' => 'Laki-Laki',
            'position' => 'Tester'
        ]);
    }
}
