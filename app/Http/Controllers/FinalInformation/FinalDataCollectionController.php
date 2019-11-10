<?php

namespace App\Http\Controllers\FinalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinalDataCollectionController extends Controller
{
    public function index(){
        return view('final_information.final_data_collection.index');
    }

    public function form(){
        return view('final_information.final_data_collection.form');
    }

    public function show(){
        return view('final_information.final_data_collection.show');
    }
}
