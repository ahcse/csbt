<?php

namespace App\Http\Controllers\AssetManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SparePartsController extends Controller
{
    public function index(){
        return view('asset_management.spare_parts.index');
    }
    public function report(){
        return view('asset_management.spare_parts.report');
    }
}
