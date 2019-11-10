<?php
use App\Services\DataService;
$clients  = DataService::getClientList();
$statuses = DataService::getProjectStatuses();
$projects = DataService::getProjecttList();
$selctedClient = $selectedStatus = $selectedProject = '';

if(isset($selected_client_id)) {
    $selctedClient = $selected_client_id;
}

if(isset($selected_status)) {
    $selectedStatus = $selected_status;
}

if(isset($selected_project_id)) {
    $selectedProject = $selected_project_id;
}
?>

<div class="theme-panel theme-panel-lg"><a href="javascript:;" data-click="theme-panel-expand"
                                           class="theme-collapse-btn"><i class="fa fa-eye"></i></a>
    <div class="theme-panel-content">
        <h4 class="slide-title"><i class="fa fa-circle fa-fw text-white mr-2 f-s-8"></i> Client Information</h4>
        <div action="#" class="form-horizontal filter-project"
              data-parsley-validate="true" name="demo-form">
            <div class="form-group">
                <label>Client Name</label>
                {!! Form::select('client_id', $clients, $selctedClient,
                     ['class'=>'form-control selectpicker','required'=>'required',  'data-live-search'=>"true",
                     'data-parsley-required' => "true", 'data-style' => 'btn-white'
                     ]) 
                !!}
            </div>
            <div class="form-group">
                <label>Project Name</label>
                {!! Form::select('project_id', $projects, $selectedProject,
                     ['class'=>'form-control selectpicker','required'=>'required',  'data-live-search'=>"true",
                     'data-parsley-required' => "true", 'data-style' => 'btn-white'
                     ]) 
                !!}
            </div>
            <div class="form-group">
                <label>Project Status</label>
                {!! Form::select('status', $statuses, $selectedStatus,
                     ['class'=>'form-control selectpicker','required'=>'required',  'data-live-search'=>"true",
                     'data-parsley-required' => "true", 'data-style' => 'btn-white'
                     ]) 
                !!}
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-success" id="filter-project">Submit</button>
            </div>
        </div>
    </div>
</div>
