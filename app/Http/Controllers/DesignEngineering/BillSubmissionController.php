<?php

namespace App\Http\Controllers\DesignEngineering;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillSubmissionController extends Controller
{
    public function index(){
        return view('design_engineering.bill_submission.index');
    }

    public function show(){
        return view('design_engineering.bill_submission.show');
    }
}
