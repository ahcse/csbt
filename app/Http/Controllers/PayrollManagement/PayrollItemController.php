<?php

namespace App\Http\Controllers\PayrollManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayrollItemController extends Controller
{
    public function index(){
        return view('payroll_management.payroll_item.index');
    }
    public function show(){
        return view('payroll_management.payroll_item.show');
    }
    public function report(){
        return view('payroll_management.payroll_item.report');
    }
}
