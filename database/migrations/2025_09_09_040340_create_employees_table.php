<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('department');
                    $table->float('salary', 10, 2);
                    $table->timestamps();
                });

        // Insert sample employees
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
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');

        
    }
};
