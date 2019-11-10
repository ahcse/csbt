<?php

namespace App\Http\Controllers\HumanResource;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index(){
        return view('human_resource.holiday.index');
    }
    public function report(){
        return view('human_resource.holiday.report');
    }
}
