<?php

namespace App\Http\Controllers\FinalInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinalProposalDrawingController extends Controller
{
    public function index(){
        return view('final_information.final_proposal_drawing.index');
    }

    public function show(){
        return view('final_information.final_proposal_drawing.show');
    }
}
