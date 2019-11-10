<?php

namespace App\Http\Controllers\DesignEngineering;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErectionDrawingController extends Controller
{
    public function index(){
        return view('design_engineering.erection_drawing.index');
    }

    public function show(){
        return view('design_engineering.erection_drawing.show');
    }
}
