<?php

namespace App\Http\Controllers\AssetManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleManagementController extends Controller
{
    public function index(){
        return view('asset_management.vehicle_management.index');
    }
    public function report(){
        return view('asset_management.vehicle_management.report');
    }
}
