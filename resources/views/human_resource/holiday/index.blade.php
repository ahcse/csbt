@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Human Resource</li>
            <li class="breadcrumb-item active">Holiday</li>
        </ol>
        <h1 class="page-header">Holiday <small><a href="#form" data-toggle="modal"
                                                  class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                        class="fa fa-x fa-plus"></i> Add New</a></small></h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Holiday List</h4>
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
                                <th class="text-nowrap">Holiday Title</th>
                                <th class="text-nowrap">Holiday From</th>
                                <th class="text-nowrap">Holiday To</th>
                                <th class="text-nowrap">Day</th>
                                <th class="text-nowrap">Days</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>New Year</td>
                                <td>30/12/2019</td>
                                <td>31/12/2019</td>
                                <td>Sunday-Monday</td>
                                <td>2</td>
                                <td>
                                    <a href="#form" class="label label-success" data-toggle="modal"><i
                                            class="fa fa-pencil-alt"></i></a>
                                    <a href="#delete" class="label label-danger" data-toggle="modal"><i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>New Year</td>
                                <td>30/12/2019</td>
                                <td>31/12/2019</td>
                                <td>Sunday-Monday</td>
                                <td>2</td>
                                <td>
                                    <a href="#form" class="label label-success" data-toggle="modal"><i
                                            class="fa fa-pencil-alt"></i></a>
                                    <a href="#delete" class="label label-danger" data-toggle="modal"><i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td><strong>40</strong></td>
                                <td>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('human_resource.holiday.form');
    @include('partials.holiday');
    @include('partials.delete');
@endsection
