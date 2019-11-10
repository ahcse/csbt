<?php

namespace App\Http\Controllers\PrimaryInformation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\ProjectRepository;
use App\Models\PrimaryInformation\PrimaryProposalDrawing;
use DataTables;

class PrimaryProposalDrawingController extends Controller
{
	private $projectRepository;
	private $uploadDirectory;
	
	public function __construct(ProjectRepository $projectRepository)
	{
		$this->projectRepository = $projectRepository;
		$this->uploadDirectory   = 'uploads';
	}
    public function index(Request $request){

    	$filters = $this->projectRepository->getSelectedFilterVariables($request);
        return view('primary_information.primary_proposal_drawing.index',
        	[
        		'filters' => $filters
        	]
        );
    }

    public function show(Request $request,$projectId){

    	if($request->get('length')){
            $model = PrimaryProposalDrawing::where('project_id', $projectId);
            return DataTables::eloquent($model)
                ->addColumn('actions', function(PrimaryProposalDrawing $model){
                    $btn1 = "<a href='javascript:;' class='btn btn-success btn-xs modify-btn' data-id='$model->id'><i class='fa fa-pencil-alt'></i></a> ";
                    $btn2 = "<a href='javascript:;' class='btn btn-danger btn-xs delete-btn' data-id='$model->id'><i class='fa fa-trash'></i></a>";
                    return $btn1.$btn2;
                })
                ->rawColumns(['actions'])
                ->make(); 
        }
        $project = $this->projectRepository->getProjectDetails($projectId);
        return view('primary_information.primary_proposal_drawing.show', ['project' => $project]);
    }

    public function form(Request $request)
    {
        $model  = NULL;
        if($request->id){
            $model   = PrimaryProposalDrawing::find($request->id);
        }
        echo view('primary_information.primary_proposal_drawing.form', ['model' => $model, 'projectId' => $request->project_id]);
    }

     public function store(Request $request)
    {
        try{
        	if($request->input('id') > 0){
                $model = PrimaryProposalDrawing::find($request->input('id'));
            }
            else{
                $model = new PrimaryProposalDrawing();
            }

            if($request->file( 'attachment' )) {
            	$file            = $request->file( 'attachment' );
				$destinationPath = $this->uploadDirectory;
				$file->move( $destinationPath, $file->getClientOriginalName() );
				$model->attachment  = '/' . $destinationPath . '/' . $file->getClientOriginalName();
            }

			$model->description = $request->input( 'description' );
			$model->uploaded_at = $request->input( 'uploaded_at' );
			$model->remarks     = $request->input( 'remarks' );
			$model->project_id  = $request->input( 'project_id' );

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
                if(PrimaryProposalDrawing::destroy($request->id)) {
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
