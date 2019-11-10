<?php

namespace App\Http\Controllers\FinalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinalQuotationController extends Controller
{
    public function index(){
        return view('final_information.final_quotation.index');
    }

    public function show(){
        return view('final_information.final_quotation.show');
    }
}
