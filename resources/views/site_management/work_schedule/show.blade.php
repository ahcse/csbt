@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Site Management</li>
            <li class="breadcrumb-item">Work Schedule</li>
            <li class="breadcrumb-item active">Solar Panel Shed</li>
        </ol>
        <h1 class="page-header">Solar Panel Shed <small><a href="#form" data-toggle="modal"
                                                           class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                        class="fa fa-x fa-plus"></i> Add New</a></small></h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Solar Panel Shed Creation Form</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                               data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                               data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                            <thead>
                            <tr>
                                <th width="1%">SL.</th>
                                <th class="text-nowrap">Activities</th>
                                <th class="text-nowrap">Start Date</th>
                                <th class="text-nowrap">Complete Date</th>
                                <th class="text-nowrap">Days</th>
                                <th class="text-nowrap">Actual Start D.</th>
                                <th class="text-nowrap">Actual Complete D.</th>
                                <th class="text-nowrap">Days</th>
                                <th class="text-nowrap">Remarks</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Grid Line (H01-H04)</td>
                                <td>30/10/2018</td>
                                <td>30/10/2018</td>
                                <td>12</td>
                                <td>30/10/2018</td>
                                <td>30/10/2018</td>
                                <td>30</td>
                                <td>Good Job</td>
                                <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                            class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                            class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Grid Line (H01-H04)</td>
                                <td>30/10/2018</td>
                                <td>30/10/2018</td>
                                <td>12</td>
                                <td>30/10/2018</td>
                                <td>30/10/2018</td>
                                <td>30</td>
                                <td>Great Job</td>
                                <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                            class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                            class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Grid Line (H01-H04)</td>
                                <td>30/10/2018</td>
                                <td>30/10/2018</td>
                                <td>12</td>
                                <td>30/10/2018</td>
                                <td>30/10/2018</td>
                                <td>30</td>
                                <td>Finish ASAP</td>
                                <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                            class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                            class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Grid Line (H01-H04)</td>
                                <td>30/10/2018</td>
                                <td>30/10/2018</td>
                                <td>12</td>
                                <td>30/10/2018</td>
                                <td>30/10/2018</td>
                                <td>30</td>
                                <td>Why Late?</td>
                                <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                            class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                            class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-right"><strong>Total Days</strong></td>
                                <td><strong>55</strong></td>
                                <td colspan="2" class="text-right"><strong>Actual Total Days</strong></td>
                                <td><strong>44</strong></td>
                                <td colspan="2"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('site_management.work_schedule.form');
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
