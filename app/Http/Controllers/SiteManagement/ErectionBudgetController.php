<?php

namespace App\Http\Controllers\SiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErectionBudgetController extends Controller
{
    public function index(){
        return view('site_management.erection_budget.index');
    }

    public function show(){
        return view('site_management.erection_budget.show');
    }
}
