@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Final Information</li>
            <li class="breadcrumb-item">Final Proposal Drawing</li>
            <li class="breadcrumb-item active">Solar Panel Shed</li>
        </ol>
        <h1 class="page-header">Solar Panel Shed <small><a href="#form" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                        class="fa fa-x fa-plus"></i> Add New</a></small></h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Solar Panel Shed Information</h4>
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
                                <th class="text-nowrap">Description</th>
                                <th class="text-nowrap">Remarks</th>
                                <th class="text-nowrap">Date</th>
                                <th class="text-nowrap">Attachment</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Version-1</td>
                                <td>Modify Column Design</td>
                                <td>29/10/2019</td>
                                <td><a href="#">Download</a></td>
                                <td>
                                    <a href="#form" class="label label-success" data-toggle="modal"><i class="fa fa-pencil-alt"></i></a>
                                    <a href="#delete" class="label label-danger" data-toggle="modal"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('final_information.final_proposal_drawing.form');
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
