<?php

namespace App\Http\Controllers\ClientInformation;
use App\Http\Controllers\Controller;
use App\Models\ClientInformation\Client;
use Illuminate\Http\Request;
use DataTables;

class ClientController extends Controller
{

    public function __construct()
    {
    }

    public function index(Request $request)
    {
        if($request->get('length')){
            $model = Client::query();
            return DataTables::eloquent($model)
                ->addColumn('actions', function(Client $model){
                    $btn1 = "<a href='javascript:;' class='btn btn-success btn-xs modify-btn' data-id='$model->id'><i class='fa fa-pencil-alt'></i></a> ";
                    $btn2 = "<a href='javascript:;' class='btn btn-inverse btn-xs view-btn' data-id='$model->id'><i class='fa fa-eye'></i></a>";
                    return $btn1.$btn2;
                })
                ->rawColumns(['actions'])
                ->make(); 
        }
        return view('client_information.client.index');
    }


    public function form(Request $request)
    {
        $model = NULL;
        if($request->id){
            $model = Client::find($request->id);
        }
        echo view('client_information.client.form',['model' => $model,'statuses' => $this->getStatuses()]);
    }


    public function show(Request $request)
    {
        $model = NULL;
        if($request->id){
            $model = Client::find($request->id);
        }
        echo view('client_information.client.show',['model' => $model,'statuses' => $this->getStatuses()]);
    }

    public function store(Request $request)
    {
        try{
            if($request->input('id') > 0){
                $model = Client::find($request->input('id'));
            }
            else{
                $model = new Client();
            }
            $model->name               = $request->input('name');
            $model->responsible        = $request->input('responsible');
            $model->email              = $request->input('email');
            $model->mobile             = $request->input('mobile');
            $model->phone              = $request->input('phone');
            $model->fax                = $request->input('fax');
            $model->office_address     = $request->input('office_address');
            $model->status             = $request->input('status');

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

    public function getStatuses()
    {
        $statuses = [
            '' => 'Not Set',
            'pending' => 'Pending',
            'accepted' => 'Accepted'
        ];

        return $statuses;
    }

}

