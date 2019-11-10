<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;

class LeaveManagementController extends Controller
{
    public function index()
    {
        return view('human_resource.leave_management.index');
    }

    public function show(){
        return view('human_resource.leave_management.show');
    }
    public function report(){
        return view('human_resource.leave_management.report');
    }
}
