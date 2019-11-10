@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Client Information</li>
            <li class="breadcrumb-item active">Great Wall Ceramic Industries Ltd</li>
        </ol>
        <h1 class="page-header">Great Wall Ceramic Industries Ltd</h1>
        <div class="row">
            <div class="col-xl-6">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Client Information</h4>
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
                        <table class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Employee ID</td>
                                <td>20191029001</td>
                            </tr>
                            <tr>
                                <td>Full Name</td>
                                <td>Md. Alamgir Hossen</td>
                            </tr>
                            <tr>
                                <td>Designation</td>
                                <td>alamgir58cse@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>+880-1918-059932</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>+880-2-059932</td>
                            </tr>
                            <tr>
                                <td>Fax</td>
                                <td>+880-2-059932</td>
                            </tr>
                            <tr>
                                <td>Office Address</td>
                                <td>House #447, Flat# B-2, Road# 6-A, Mirpur DOHS, Dhaka-1216</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Active</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

