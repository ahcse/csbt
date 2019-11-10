@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Human Resource</li>
            <li class="breadcrumb-item active">Performance Appraisal</li>
        </ol>
        <h1 class="page-header">Performance Appraisal</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Performance Appraisal List</h4>
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
                                <th class="text-nowrap">Employee ID</th>
                                <th class="text-nowrap">Employee Name</th>
                                <th class="text-nowrap">Designation</th>
                                <th class="text-nowrap">Department</th>
                                <th class="text-nowrap">Rating</th>
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>20191022001</td>
                                <td>Alamgir Hossen</td>
                                <td>Software Engineer</td>
                                <td>Software Engineering</td>
                                <td>Good</td>
                                <td>Ongoing</td>
                                <td>
                                    <a href="/performance-appraisal/show" class="label label-inverse"><i
                                            class="fa fa-folder-open"></i></a>
                                    <a href="/performance-appraisal/report" class="label label-success"><i
                                            class="fa fa-print"></i></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.performance_appraisal');
@endsection
