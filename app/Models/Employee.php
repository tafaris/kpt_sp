<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    protected $table = 'employees';
    
    protected $fillable = [
        'name',
        'department', 
        'salary'
    ];

    protected $casts = [
        'salary' => 'decimal:2',
    ];

    /**
     * Execute stored procedure to increase salary
     */
public static function increaseSalary($employeeId = null)
{
    try {
        if ($employeeId) {
            DB::statement('CALL sp_raise_salary(?)', [$employeeId]);
        } else {
            DB::statement('CALL sp_increase_all_salaries()');
        }
        return true;
    } catch (\Exception $e) {
        \Log::error('Salary increase failed: ' . $e->getMessage());
        return false;
    }
}
}
