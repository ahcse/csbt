@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Final Information</li>
            <li class="breadcrumb-item">Final Data Collection</li>
            <li class="breadcrumb-item active">Solar Panel Shed</li>
        </ol>
        <h1 class="page-header">Solar Panel Shed</h1>
        <div class="row">
            <div class="col-xl-4">
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
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th width="40%">Title</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Height</td>
                                <td>100 (m)</td>
                            </tr>
                            <tr>
                                <td>Width</td>
                                <td>100 (m)</td>
                            </tr>
                            <tr>
                                <td>Length</td>
                                <td>200 (m)</td>
                            </tr>
                            <tr>
                                <td>Back Wall Height</td>
                                <td>50 (m)</td>
                            </tr>
                            <tr>
                                <td>Insulation</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Gate</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Camopy</td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Roof Monitoring</td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td>Line Load</td>
                                <td>100 (m)</td>
                            </tr>
                            <tr>
                                <td>Cismic Zone</td>
                                <td>01</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar');
@endsection
