@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Primary Information</li>
            <li class="breadcrumb-item active">Work Order</li>
        </ol>
        <h1 class="page-header">Work Order</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Work Order</h4>
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
                                <th width="1%">SL</th>
                                <th class="text-nowrap">Project Name</th>
                                <th class="text-nowrap">Client Name</th>
                                <th class="text-nowrap">Location</th>
                                <th class="text-nowrap">Amount</th>
                                <th class="text-nowrap">Days</th>
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Solar Panel Shed</td>
                                <td>Super Star Group</td>
                                <td>Savar, Dhaka</td>
                                <td>3,00,00,000</td>
                                <td>55</td>
                                <td>Ongoing</td>
                                <td>
                                    <a href="/work-order/show" class="label label-inverse"><i
                                            class="fa fa-folder-open"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Car Parking Shed</td>
                                <td>Comfit Composite Knite Ltd.</td>
                                <td>Savar, Dhaka</td>
                                <td>3,00,00,000</td>
                                <td>55</td>
                                <td>Ongoing</td>
                                <td>
                                    <a href="/work-order/show" class="label label-inverse"><i
                                            class="fa fa-folder-open"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Material Ware House-5</td>
                                <td>Great Wall Ceramic Limited</td>
                                <td>Savar, Dhaka</td>
                                <td>3,00,00,000</td>
                                <td>55</td>
                                <td>Ongoing</td>
                                <td>
                                    <a href="/work-order/show" class="label label-inverse"><i
                                            class="fa fa-folder-open"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Roof Top Shed</td>
                                <td>Shornadip Foundation Hospital</td>
                                <td>Savar, Dhaka</td>
                                <td>3,00,00,000</td>
                                <td>55</td>
                                <td>Ongoing</td>
                                <td>
                                    <a href="/work-order/show" class="label label-inverse"><i
                                            class="fa fa-folder-open"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Solar Panel Shed</td>
                                <td>Super Star Group</td>
                                <td>Savar, Dhaka</td>
                                <td>3,00,00,000</td>
                                <td>55</td>
                                <td>Ongoing</td>
                                <td>
                                    <a href="/work-order/show" class="label label-inverse"><i
                                            class="fa fa-folder-open"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
