<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceRegisterController extends Controller
{
    public function index()
    {
        return view('human_resource.attendance_register.index');
    }
    public function show(){
        return view('human_resource.attendance_register.show');
    }
    public function report(){
        return view('human_resource.attendance_register.report');
    }
}
