<?php

namespace App\Http\Controllers\PrimaryInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\ProjectRepository;


class  PrimaryDataCollectionController extends Controller
{
	private $projectRepository;
	public function __construct(ProjectRepository $projectRepository)
	{
		$this->projectRepository = $projectRepository;
	}
    public function index(Request $request){

    	$filters = $this->projectRepository->getSelectedFilterVariables($request);
        return view('primary_information.primary_data_collection.index',
        	[
        		'filters' => $filters
        	]
        );
    }

    public function form(){
        echo view('primary_information.primary_data_collection.form');
    }

    public function show(){
        echo view('primary_information.primary_data_collection.show');
    }
}
