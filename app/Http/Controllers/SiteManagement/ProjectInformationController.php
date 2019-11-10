<?php

namespace App\Http\Controllers\SiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectInformationController extends Controller
{
    public function index(){
        return view('site_management.project_information.index');
    }

    public function show(){
        return view('site_management.project_information.show');
    }
}
