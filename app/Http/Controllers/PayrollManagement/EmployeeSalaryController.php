<?php

namespace App\Http\Controllers\PayrollManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
{
    public function index(){
        return view('payroll_management.employee_salary.index');
    }
    public function show(){
        return view('payroll_management.employee_salary.show');
    }
    public function report(){
        return view('payroll_management.employee_salary.report');
    }
}
