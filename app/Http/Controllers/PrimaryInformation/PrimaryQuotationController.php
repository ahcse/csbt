<?php

namespace App\Http\Controllers\PrimaryInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\ProjectRepository;
use App\Models\PrimaryInformation\PrimaryQuotation;
use App\Services\DataService;
use DataTables;

class PrimaryQuotationController extends Controller
{
    // public function index(){
    //     return view('primary_information.primary_quotation.index');
    // }

    // public function show(){
    //     return view('primary_information.primary_quotation.show');
    // }


    private $projectRepository;
	private $uploadDirectory;
	
	public function __construct(ProjectRepository $projectRepository)
	{
		$this->projectRepository = $projectRepository;
		$this->uploadDirectory   = 'uploads';
	}
    public function index(Request $request){

    	$filters = $this->projectRepository->getSelectedFilterVariables($request);
        return view('primary_information.primary_quotation.index',
        	[
        		'filters' => $filters
        	]
        );
    }

    public function show(Request $request,$projectId){

    	if($request->get('length')){
            $model = PrimaryQuotation::where('project_id', $projectId);
            if($request->type) {
            	$model = $model->where('type', $request->type);
            }
            return DataTables::eloquent($model)
                ->addColumn('actions', function(PrimaryQuotation $model){
                    $btn1 = "<a href='javascript:;' class='btn btn-success btn-xs modify-btn' data-id='$model->id'><i class='fa fa-pencil-alt'></i></a> ";
                    $btn2 = "<a href='javascript:;' class='btn btn-danger btn-xs delete-btn' data-id='$model->id'><i class='fa fa-trash'></i></a>";
                    return $btn1.$btn2;
                })
                ->rawColumns(['actions'])
                ->make(); 
        }
        $project = $this->projectRepository->getProjectDetails($projectId);
        return view('primary_information.primary_quotation.show', ['project' => $project]);
    }

    public function form(Request $request)
    {
        $model  = NULL;
        if($request->id){
            $model   = PrimaryQuotation::find($request->id);
        }
        $units = DataService::getUnits();
        echo view('primary_information.primary_quotation.form', ['model' => $model, 'type' => $request->type, 'projectId' => $request->project_id, 'units' => $units]);
    }

     public function store(Request $request)
    {
        try{
        	if($request->input('id') > 0){
                $model = PrimaryQuotation::find($request->input('id'));
            }
            else{
                $model = new PrimaryQuotation();
            }

			$model->description = $request->input( 'description' );
			$model->unit        = $request->input( 'unit' );
			$model->quantity    = $request->input( 'quantity' );
			$model->rate        = $request->input( 'rate' );
			$model->project_id  = $request->input( 'project_id' );
			$model->type        = $request->input( 'type' );
			$model->amount      = $model->quantity * $model->rate;

			if($model->save()){
                if($request->input('id') == 0){
                    return response()->json([
                        'message' => 'Saved entry!'
                    ]);
                }
                return response()->json([
                    'message' => 'Updated entry!'
                ]);
            }

            return response()->json([
                'message' => 'Something went wrong!'
            ],500);

        }
        catch(Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ],400);
        }
    }
    
    public function delete(Request $request)
    {
        if($request->delete == 'true') {
            try{
                if(PrimaryQuotation::destroy($request->id)) {
                    return response()->json([
                        'message' => 'Deleted entry!'
                    ]);
                }
                return response()->json([
                    'message' => 'Something went wrong!'
                ],500);

            }
            catch(Exception $e) {
                return response()->json([
                    'message' => $e->getMessage()
                ],400);
            }
        }
        else{
             echo view('common.delete');
        }
    }

}
