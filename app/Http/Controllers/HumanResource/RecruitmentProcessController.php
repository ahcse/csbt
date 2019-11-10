<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruitmentProcessController extends Controller
{
    public function index()
    {
        return view('human_resource.recruitment_process.index');
    }
    public function show(){
        return view('human_resource.recruitment_process.show');
    }
    public function report(){
        return view('human_resource.recruitment_process.report');
    }
}
