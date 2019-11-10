<?php

namespace App\Http\Controllers\PayrollManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayrollController extends Controller
{
    public function index(){
        return view('payroll_management.payroll.index');
    }
    public function show(){
        return view('payroll_management.payroll.show');
    }
    public function report(){
        return view('payroll_management.payroll.report');
    }
}
