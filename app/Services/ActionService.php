<?php
namespace App\Services;
class ActionService{
	public static function getClientAtions($model, $baseView)
    {
        $editUrl = "$baseView/edit/"."$model->id";
        $action = "<a href='/$baseView/$model->id'><span class='label label-success'><i class='fa fa-eye'></i></span></a> <a href='/$editUrl' class='label label-info'><i class='fa fa-edit'></i></a> <a href='#modal-alert' data-toggle='modal'><span class='label label-danger'><i class='fa fa-times'></i></span></a>";
        return $action;
    }

    public static  function getPrimaryDataCollectionAtions($model, $baseView)
    {
        $editUrl = "$baseView/create/new?client_id=$model->id";
        if($model->primary_data_collection){
            $id = $model->primary_data_collection->id;
            $editUrl = "$baseView/edit/"."$id";
        }
        $action = "<a href='/$baseView/$model->id'><span class='label label-success'><i class='fa fa-eye'></i></span></a> <a href='/$editUrl' class='label label-info'><i class='fa fa-edit'></i></a>";
        return $action;
    }


    public static  function getPrimaryProposalAtions($model, $baseView)
    {
        $editUrl    = "$baseView/create/new?client_id=$model->id";
        $viewButton = "";
        $editButton = " <a href='/$editUrl' class='label label-info'><i class='fa fa-plus'></i></a>";
        if($model->proposal_drawing){
            $id         = $model->proposal_drawing->id;
            $editUrl    = "$baseView/edit/"."$id";
            $viewButton = "<a href='/$baseView/$id'><span class='label label-success'><i class='fa fa-eye'></i></span></a>";
            $editButton = " <a href='/$editUrl' class='label label-info'><i class='fa fa-edit'></i></a>";
        }
        return "$viewButton$editButton";
    }

    public static  function getPrimaryQuatationAtions($model, $baseView)
    {
        $editUrl = "$baseView/edit/$model->id";
        $action = "<a href='/$baseView/show/$model->id'><span class='label label-success'><i class='fa fa-eye'></i></span></a> <a href='/$editUrl' class='label label-info'><i class='fa fa-edit'></i></a>";
        return $action;
    }

    public static  function getPrimaryQuatationDetailsAtions($model, $baseView)
    {
        $editUrl = "$baseView/edit/$model->id";
        $action = "<button data-target='#edit-modal' class='label label-info open-edit-modal' data-server-data='$model'><i class='fa fa-edit'></i></button>";
        return $action;
    }

    public static function getFinalDataCollectionAtions($model, $baseView)
    {
        $editUrl = "$baseView/create/new?client_id=$model->id";
        if($model->final_data_collection){
            $id = $model->final_data_collection->id;
            $editUrl = "$baseView/edit/"."$id";
        }
        $action = "<a href='/$baseView/$model->id'><span class='label label-success'><i class='fa fa-eye'></i></span></a> <a href='/$editUrl' class='label label-info'><i class='fa fa-edit'></i></a>";
        return $action;	
    }

    public static  function getFinalProposalAtions($model, $baseView)
    {
        $editUrl    = "$baseView/create/new?client_id=$model->id";
        $viewButton = "";
        $editButton = " <a href='/$editUrl' class='label label-info'><i class='fa fa-plus'></i></a>";
        if($model->proposal_drawing){
            $id         = $model->proposal_drawing->id;
            $editUrl    = "$baseView/edit/"."$id";
            $viewButton = "<a href='/$baseView/$id'><span class='label label-success'><i class='fa fa-eye'></i></span></a>";
            $editButton = " <a href='/$editUrl' class='label label-info'><i class='fa fa-edit'></i></a>";
        }
        return "$viewButton$editButton";
    }

    public static  function getFinalEstimationAtions($model, $baseView)
    {
        $editUrl    = "$baseView/show?client_id=$model->id";
        $viewButton = "";
        $editButton = " <a href='/$editUrl' class='label label-info'><i class='fa fa-plus'></i></a>";
        if($model->final_estimation){
            $id         = $model->final_estimation->id;
            $editUrl    = "$baseView/edit/"."$id";
            $viewButton = "<a href='/$baseView/$id'><span class='label label-success'><i class='fa fa-eye'></i></span></a>";
            $editButton = " <a href='/$editUrl' class='label label-info'><i class='fa fa-edit'></i></a>";
        }
        return "$viewButton$editButton";
    }

    public static  function getFinalEstimationDetailsAtions($model, $baseView)
    {
        $editUrl    = "$baseView/show?client_id=$model->id";
        $viewButton = "";
        $editButton = " <a href='/$editUrl' class='label label-info'><i class='fa fa-edit'></i></a>";
        $deleteButton = '<a href="javascript:;" class="label label-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>';
        return "$editButton $deleteButton";
    }

}
?>