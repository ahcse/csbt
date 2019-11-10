<?php

namespace App\Http\Controllers\PayrollManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaySlipController extends Controller
{
    public function index(){
        return view('payroll_management.pay_slip.index');
    }
    public function show(){
        return view('payroll_management.pay_slip.show');
    }
    public function report(){
        return view('payroll_management.pay_slip.report');
    }
}
