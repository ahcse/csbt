<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientInformation\Project;
use DataTables;

class ProjectController extends Controller
{
    public function index(Request $request)
    {

        if($request->get('length')){
            $model = Project::with('client');

            if($request->selected_project_id) {
                $model = $model->where('id', $request->selected_project_id);
            }
            if($request->selected_status) {
                $model = $model->where('status', $request->selected_status);
            }

            if($request->selected_client_id) {
                $model = $model->where('client_id', $request->selected_client_id);
            }

            return DataTables::of($model)
            ->addColumn('actions', function(Project $model){
                $btn1 = "<a href='javascript:;' class='btn btn-success btn-xs modify-btn' data-id='$model->id'><i class='fa fa-pencil-alt'></i></a> ";
                $btn2 = "<a href='javascript:;' class='btn btn-inverse btn-xs view-btn' data-id='$model->id'><i class='fa fa-eye'></i></a> ";
                $btn3 = "<a href='javascript:;' class='btn btn-danger btn-xs delete-btn' data-id='$model->id'><i class='fa fa-trash'></i></a>";
                return $btn1.$btn2.$btn3;
            })
            ->rawColumns(['actions'])
            ->make(); 
        }
    }
}
