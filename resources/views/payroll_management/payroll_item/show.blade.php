@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Payroll Management</li>
            <li class="breadcrumb-item active">Employee Salary</li>
            <li class="breadcrumb-item active">Alamgir Hossen</li>
        </ol>
        <h1 class="page-header">Alamgir Hossen</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
                    <div class="panel-heading p-0">
                        <div class="tab-overflow">
                            <ul class="nav nav-tabs nav-tabs-inverse">
                                <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab" class="nav-link text-primary"><i class="fa fa-arrow-left"></i></a></li>
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Salary Breakup</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Overtime </a></li>
                                <li class="nav-item"><a href="#nav-tab-3" data-toggle="tab" class="nav-link">Deduction </a></li>
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
                            <h5 class="m-t-10">Salary Breakup</h5>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <h5 class="m-t-10">Overtime</h5>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-3">
                            <h5 class="m-t-10">Deduction</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
