<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerformanceAppraisalController extends Controller
{
    public function index()
    {
        return view('human_resource.performance_appraisal.index');
    }
    public function show(){
        return view('human_resource.performance_appraisal.show');
    }
    public function report(){
        return view('human_resource.performance_appraisal.report');
    }
}
