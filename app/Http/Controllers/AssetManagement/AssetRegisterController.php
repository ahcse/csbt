<?php

namespace App\Http\Controllers\AssetManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetRegisterController extends Controller
{
    public function index(){
        return view('asset_management.asset_register.index');
    }
    public function show(){
        return view('asset_management.asset_register.show');
    }
    public function report(){
        return view('asset_management.asset_register.report');
    }
}
