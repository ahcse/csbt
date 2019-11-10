<?php

namespace App\Http\Controllers\SiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErectionProgressController extends Controller
{
    public function index(){
        return view('site_management.erection_progress.index');
    }

    public function show(){
        return view('site_management.erection_progress.show');
    }
}
