<?php

namespace App\Http\Controllers\SiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FundFollowController extends Controller
{
    public function index(){
        return view('site_management.fund_follow.index');
    }

    public function show(){
        return view('site_management.fund_follow.show');
    }
}
