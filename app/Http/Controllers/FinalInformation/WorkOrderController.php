<?php

namespace App\Http\Controllers\FinalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    public function index(){
        return view('final_information.work_order.index');
    }

    public function show(){
        return view('final_information.work_order.show');
    }
}
