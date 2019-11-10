<?php

namespace App\Http\Controllers\ClientInformation;

use App\Http\Controllers\Controller;
use App\Models\ClientInformation\Client;
use App\Models\ClientInformation\Project;
use App\Services\DataService;
use Illuminate\Http\Request;
use DataTables;


class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $model = Project::with('client');
        if($request->get('length')){
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
        return view('client_information.project.index');
    }

    public function store(Request $request)
    {
        try{
            if($request->input('id') > 0){
                $model = Project::find($request->input('id'));
            }
            else{
                $model = new Project();
            }
            $model->name      = $request->input('name');
            $model->type      = $request->input('type');
            $model->address   = $request->input('address');
            $model->status    = $request->input('status');
            $model->client_id = $request->input('client_id');

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

    public function show(Request $request)
    {
        $model = NULL;
        if($request->id){
            $model = Project::find($request->id);
        }
        echo view('client_information.project.show', ['model' => $model,'statuses' => $this->getStatuses()]);
    }

    public function form(Request $request)
    {
        $model  = NULL;
        $clients = DataService::getClientList();
        if($request->id){
            $model   = Project::with('client')->find($request->id);
        }
        echo view('client_information.project.form', ['model' => $model,'statuses' => $this->getStatuses(), 'clients' => $clients]);
    }

    public function getStatuses()
    {
        $statuses = [
            '' => 'Not Set',
            'pending' => 'Pending',
            'accepted' => 'Accepted'
        ];

        return $statuses;
    }

    public function delete(Request $request)
    {
        if($request->delete == 'true') {
            try{
                if(Project::destroy($request->id)) {
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
