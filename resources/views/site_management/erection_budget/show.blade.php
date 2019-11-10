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
                                <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab" class="nav-link text-primary"><i class="fa fa-arrow-left"></i></a></li>
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">General Information</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Mobilization</a></li>
                                <li class="nav-item"><a href="#nav-tab-3" data-toggle="tab" class="nav-link">Site Wages</a></li>
                                <li class="nav-item"><a href="#nav-tab-4" data-toggle="tab" class="nav-link">Safety Measures</a></li>
                                <li class="nav-item"><a href="#nav-tab-5" data-toggle="tab" class="nav-link">Rental</a></li>
                                <li class="nav-item"><a href="#nav-tab-6" data-toggle="tab" class="nav-link">Equipment Cost</a></li>
                                <li class="nav-item"><a href="#nav-tab-7" data-toggle="tab" class="nav-link">Consumable Cost</a></li>
                                <li class="nav-item"><a href="#nav-tab-8" data-toggle="tab" class="nav-link">Medical</a></li>
                                <li class="nav-item"><a href="#nav-tab-9" data-toggle="tab" class="nav-link">Refreshment</a></li>
                                <li class="nav-item"><a href="#nav-tab-10" data-toggle="tab" class="nav-link">Accommodation</a></li>
                                <li class="nav-item"><a href="#nav-tab-11" data-toggle="tab" class="nav-link">Erector</a></li>
                                <li class="nav-item"><a href="#nav-tab-12" data-toggle="tab" class="nav-link">Painter</a></li>
                                <li class="nav-item"><a href="#nav-tab-13" data-toggle="tab" class="nav-link">Anchor Bolt Checkup</a></li>
                                <li class="nav-item"><a href="#nav-tab-14" data-toggle="tab" class="nav-link">Digital Survey</a></li>
                                <li class="nav-item"><a href="#nav-tab-15" data-toggle="tab" class="nav-link">Contingencies</a></li>
                                <li class="nav-item"><a href="#nav-tab-16" data-toggle="tab" class="nav-link">Management Reserve</a></li>
                                <li class="nav-item"><a href="#nav-tab-17" data-toggle="tab" class="nav-link">Other Costing</a></li>
                                <li class="nav-item"><a href="#nav-tab-18" data-toggle="tab" class="nav-link">Special Notes</a></li>
                                <li class="nav-item next-button"><a href="javascript:;" data-click="next-tab" class="nav-link text-primary"><i class="fa fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="panel-heading-btn mr-2 ml-2 d-flex">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-secondary"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="panel-body tab-content">
                        <div class="tab-pane fade active show" id="nav-tab-1">
                            <h5 class="m-t-10"><small><a href="#form_general_information" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <h5 class="m-t-10"> <small><a href="#form_mobilization" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-3">
                            <h5 class="m-t-10"><small><a href="#form_site_wages" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-4">
                            <h5 class="m-t-10"><small><a href="#form_safety_measures" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-5">
                            <h5 class="m-t-10"><small><a href="#form_rental" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-6">
                            <h5 class="m-t-10"><small><a href="#form_equipment_cost" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-7">
                            <h5 class="m-t-10"><small><a href="#form_consumable_cost" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-8">
                            <h5 class="m-t-10">Medical <small><a href="#form_medical" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-9">
                            <h5 class="m-t-10"><small><a href="#form_refreshment" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-10">
                            <h5 class="m-t-10"><small><a href="#form_accommodation" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-11">
                            <h5 class="m-t-10"><small><a href="#form_erector" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-12">
                            <h5 class="m-t-10"><small><a href="#form_painter" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-13">
                            <h5 class="m-t-10"><small><a href="#form_anchor_bolt_checkup" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-14">
                            <h5 class="m-t-10"><small><a href="#form_digital_survey" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-15">
                            <h5 class="m-t-10"><small><a href="#form_contingencies" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-16">
                            <h5 class="m-t-10"><small><a href="#form_management_reserve" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-17">
                            <h5 class="m-t-10"><small><a href="#form_other_costing" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-18">
                            <h5 class="m-t-10"><small><a href="#form_special_notes" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table
                                class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th class="text-nowrap">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Date</th>
                                    <th class="text-nowrap">File Attach</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>JOB-QB-ACI001-01-0102106</td>
                                    <td>Funded for basement and roof top</td>
                                    <td>5,00,000.00</td>
                                    <td>06/06/2019</td>
                                    <td><a target="_blank" href="../uploads/design.pdf">Download</a></td>
                                    <td>-</td>
                                    <td><a href="#form" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
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
    @include('site_management.erection_budget.form_general_information');`
    @include('site_management.erection_budget.form_mobilization');
    @include('site_management.erection_budget.form_site_wages');
    @include('site_management.erection_budget.form_safety_measures');
    @include('site_management.erection_budget.form_rental');
    @include('site_management.erection_budget.form_equipment_cost');
    @include('site_management.erection_budget.form_consumable_cost');
    @include('site_management.erection_budget.form_medical');
    @include('site_management.erection_budget.form_refreshment');
    @include('site_management.erection_budget.form_accommodation');
    @include('site_management.erection_budget.form_erector');
    @include('site_management.erection_budget.form_painter');
    @include('site_management.erection_budget.form_anchor_bolt_checkup');
    @include('site_management.erection_budget.form_digital_survey');
    @include('site_management.erection_budget.form_contingencies');
    @include('site_management.erection_budget.form_management_reserve');
    @include('site_management.erection_budget.form_other_costing');
    @include('site_management.erection_budget.form_special_notes');
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
