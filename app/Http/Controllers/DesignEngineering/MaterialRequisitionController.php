<?php

namespace App\Http\Controllers\DesignEngineering;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialRequisitionController extends Controller
{
    public function index(){
        return view('design_engineering.material_requisition.index');
    }

    public function show(){
        return view('design_engineering.material_requisition.show');
    }
}
