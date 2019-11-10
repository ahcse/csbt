@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Site Management</li>
            <li class="breadcrumb-item">Erection Progress</li>
            <li class="breadcrumb-item active">Solar Panel Shed</li>
        </ol>
        <h1 class="page-header">Solar Panel Shed</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
                    <div class="panel-heading p-0">
                        <div class="tab-overflow">
                            <ul class="nav nav-tabs nav-tabs-inverse">
                                <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab"
                                                                    class="nav-link text-primary"><i
                                            class="fa fa-arrow-left"></i></a></li>
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Erection
                                        Status</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Manpower
                                        Statement</a></li>
                                <li class="nav-item"><a href="#nav-tab-3" data-toggle="tab" class="nav-link">Equipment
                                        Statement</a></li>
                                <li class="nav-item"><a href="#nav-tab-4" data-toggle="tab" class="nav-link">Material
                                        Received Status</a></li>
                                <li class="nav-item"><a href="#nav-tab-5" data-toggle="tab" class="nav-link">Tonnage
                                        Erection</a></li>
                                <li class="nav-item"><a href="#nav-tab-6" data-toggle="tab" class="nav-link">Material
                                        Purchase</a></li>
                                <li class="nav-item"><a href="#nav-tab-7" data-toggle="tab" class="nav-link">Work In
                                        Progress</a></li>
                                <li class="nav-item next-button"><a href="javascript:;" data-click="next-tab"
                                                                    class="nav-link text-primary"><i
                                            class="fa fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-heading-btn mr-2 ml-2 d-flex">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-secondary"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="panel-body tab-content">
                        <div class="tab-pane fade active show" id="nav-tab-1">
                            <h5 class="m-t-10"><small><a href="#form_erection_status"
                                                         data-toggle="modal"
                                                         class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL</th>
                                    <th class="text-nowrap">Phase No</th>
                                    <th class="text-nowrap">Material Name</th>
                                    <th class="text-nowrap">Grid Line</th>
                                    <th class="text-nowrap">Part Mark</th>
                                    <th class="text-nowrap">Total</th>
                                    <th class="text-nowrap">Used</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>C202</td>
                                    <td>Anchor Bolt</td>
                                    <td>Column</td>
                                    <td>V11-(H5)</td>
                                    <td>5</td>
                                    <td>Used</td>
                                    <td><a href="#form_erection_status" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <h5 class="m-t-10"><small><a href="#form_manpower_statement"
                                                         data-toggle="modal"
                                                         class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Manpower Projected</th>
                                    <th class="text-nowrap">Total Manpower</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Description</td>
                                    <td>50</td>
                                    <td>100</td>
                                    <td>Remarks</td>
                                    <td><a href="#form_manpower_statement" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-3">
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Tools Category</th>
                                    <th class="text-nowrap">Tools Name</th>
                                    <th class="text-nowrap">Qty</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fire Feighting</td>
                                    <td>Water Pump</td>
                                    <td>2</td>
                                    <td>30/10/2019</td>
                                    <td>Remarks</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete"
                                                                               data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-4">
                            <h5 class="m-t-10"><small><a href="#form_material_received_status"
                                                         data-toggle="modal"
                                                         class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL</th>
                                    <th class="text-nowrap">Time</th>
                                    <th class="text-nowrap">Chalan No</th>
                                    <th class="text-nowrap">Material Type</th>
                                    <th class="text-nowrap">Total Qty.</th>
                                    <th class="text-nowrap">TW (kg)</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>10:30</td>
                                    <td>Ch-12102015</td>
                                    <td>XYZ</td>
                                    <td>1000</td>
                                    <td>40000</td>
                                    <td>Remarks</td>
                                    <td><a href="#form_material_received_status" data-toggle="modal"
                                           class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-5">
                            <h5 class="m-t-10"><small><a href="#form_tonnage_erection"
                                                         data-toggle="modal"
                                                         class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL</th>
                                    <th class="text-nowrap">Material Description</th>
                                    <th class="text-nowrap">Part Mark</th>
                                    <th class="text-nowrap">Qty</th>
                                    <th class="text-nowrap">Weight (kg)</th>
                                    <th class="text-nowrap">TW (kg)</th>
                                    <th class="text-nowrap">Cumulative (kg)</th>
                                    <th class="text-nowrap">Total Erection (kg)</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>XYZ</td>
                                    <td>C202</td>
                                    <td>10</td>
                                    <td>100</td>
                                    <td>1000</td>
                                    <td>500</td>
                                    <td>2000</td>
                                    <td><a href="#form_tonnage_erection" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-6">
                            <h5 class="m-t-10"><small><a href="#form_material_purchase" data-toggle="modal"
                                                         class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Tools Category</th>
                                    <th class="text-nowrap">Tools Name</th>
                                    <th class="text-nowrap">Qty</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Fire Feighting</td>
                                    <td>Water Pump</td>
                                    <td>2</td>
                                    <td>30/10/2019</td>
                                    <td>Remarks</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete"
                                                                               data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-7">
                            <h5 class="m-t-10"><small><a href="#form_work_in_progress" data-toggle="modal"
                                                         class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Time</th>
                                    <th class="text-nowrap">File Name</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>XYZ</td>
                                    <td>10:40</td>
                                    <td>abc.pdf</td>
                                    <td><a href="#form_work_in_progress" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete"
                                                                               data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('site_management.erection_progress.form_erection_status');
    @include('site_management.erection_progress.form_manpower_statement');
    @include('site_management.erection_progress.form_equipment_statement');
    @include('site_management.erection_progress.form_material_received_status');
    @include('site_management.erection_progress.form_tonnage_erection');
    @include('site_management.erection_progress.form_material_purchase');
    @include('site_management.erection_progress.form_work_in_progress');
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
