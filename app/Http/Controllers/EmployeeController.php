<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        
        return view('employees.index', compact('employees'));
    }

public function increaseSalary(Request $request)
{
    $success = Employee::increaseSalary(); // No ID = all employees
    
    if ($success) {
        return redirect()->route('employees.index')
            ->with('success', 'All salaries have been increased successfully!');
    } else {
        return redirect()->route('employees.index')
            ->with('error', 'Failed to increase salaries. Please try again.');
    }
}
}
