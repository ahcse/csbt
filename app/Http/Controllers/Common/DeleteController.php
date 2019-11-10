<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function openDeleteModal(Request $request)
    {
        echo view('partials.delete', ['id' => $request->id, 'model' => $request->model]);
    }
    

    public function delete(Request $request)
    {
        $model =  $model::find($request->id);
        if($model){
            $model->delete();
            return response()->json([
                'message' => 'Deleted entry!'
            ]);
        }
        return response()->json([
            'message' => 'Something went wrong!'
        ],400);
    }
}
