<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'name' => 'John Doe',
                'department' => 'Engineering',
                'salary' => 65000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'department' => 'Marketing',
                'salary' => 55000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mike Johnson',
                'department' => 'Sales',
                'salary' => 48000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sarah Wilson',
                'department' => 'HR',
                'salary' => 52000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Brown',
                'department' => 'Engineering',
                'salary' => 70000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lisa Garcia',
                'department' => 'Finance',
                'salary' => 58000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
