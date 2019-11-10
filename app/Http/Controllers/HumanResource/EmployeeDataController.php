<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeDataController extends Controller
{
    public function index()
    {
        return view('human_resource.employee_data.index');
    }
    public function show(){
        return view('human_resource.employee_data.show');
    }
    public function report(){
        return view('human_resource.employee_data.report');
    }
}
