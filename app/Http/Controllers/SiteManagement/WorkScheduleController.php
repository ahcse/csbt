<?php

namespace App\Http\Controllers\SiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkScheduleController extends Controller
{
    public function index(){
        return view('site_management.work_schedule.index');
    }

    public function show(){
        return view('site_management.work_schedule.show');
    }
}
