@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Design & Engineering</li>
            <li class="breadcrumb-item active">Work Order</li>
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
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Salary Breakup</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link"> </a></li>
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
                            <h5 class="m-t-10"><small><a href="#form_basic_building" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Description of Item</th>
                                    <th class="text-nowrap">Unit</th>
                                    <th class="text-nowrap">Qty</th>
                                    <th class="text-nowrap">Rate</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Gable Frame-Plate</td>
                                    <td>kg</td>
                                    <td>82.00</td>
                                    <td>2,000.00</td>
                                    <td>12,00,000</td>
                                    <td>
                                        <a href="#form_basic_building" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <h5 class="m-t-10"><small><a href="#form_sheeting_accessories" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Description of Item</th>
                                    <th class="text-nowrap">Unit</th>
                                    <th class="text-nowrap">Qty</th>
                                    <th class="text-nowrap">Rate</th>
                                    <th class="text-nowrap">Amount</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Gable Frame-Plate</td>
                                    <td>kg</td>
                                    <td>100</td>
                                    <td>82.00</td>
                                    <td>2,000.00</td>
                                    <td>
                                        <a href="#form_sheeting_accessories" data-toggle="modal" class="label label-info"><i
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
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
