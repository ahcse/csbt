<?php

namespace App\Http\Controllers\SiteManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index(){
        return view('site_management.equipment.index');
    }

    public function show(){
        return view('site_management.equipment.show');
    }
}
