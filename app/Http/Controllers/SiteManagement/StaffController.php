<?php

namespace App\Http\Controllers\SiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        return view('site_management.staff.index');
    }

    public function show(){
        return view('site_management.staff.show');
    }
}
