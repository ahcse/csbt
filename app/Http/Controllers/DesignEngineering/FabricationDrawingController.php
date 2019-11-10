<?php

namespace App\Http\Controllers\DesignEngineering;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FabricationDrawingController extends Controller
{
    public function index(){
        return view('design_engineering.fabrication_drawing.index');
    }

    public function show(){
        return view('design_engineering.fabrication_drawing.show');
    }
}
