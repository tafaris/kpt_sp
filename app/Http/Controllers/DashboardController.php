<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmployees = Employee::count();
        $avgSalary = Employee::avg('salary');
        $departments = Employee::distinct('department')->count('department');
        
        return view('dashboard', compact('totalEmployees', 'avgSalary', 'departments'));
    }
}
