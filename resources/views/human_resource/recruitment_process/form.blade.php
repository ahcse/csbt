@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Employee Data</li>
            <li class="breadcrumb-item active">New Employee</li>
        </ol>
        <h1 class="page-header">New Employee</h1>
        <div class="row">
            <div class="col-xl-6">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">New Employee Creation Form</h4>
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
                        <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="Employee Name">Employee Name </label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="employee_name"
                                           placeholder="Enter Employee Name"
                                           data-parsley-required="true"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="Designation">Designation </label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="designation"
                                           placeholder="Enter Designation"
                                           data-parsley-required="true"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="email">Mobile </label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="number" name="mobile" placeholder="Enter Mobile" data-parsley-required="true"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="mobile">Department </label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="department" placeholder="Enter Department" data-parsley-required="true"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="phone">Phone </label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="number" name="phone"
                                           placeholder="Enter phone no"
                                           data-parsley-required="true"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="fax">Fax</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="number" name="fax"
                                           placeholder="Enter Fax" data-parsley-required="true"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label">Status</label>
                                <div class="col-md-8 col-sm-8">
                                    <select class="form-control selectpicker" data-live-search="true" data-size="10" data-style="btn-white" data-parsley-required="true">
                                        <option value="">Select Type</option>
                                        <option value="0">All Status</option>
                                        <option value="1">Ongoing</option>
                                        <option value="2">Pending</option>
                                        <option value="3">Completed</option>
                                        <option value="3">Cancel</option>
                                        <option value="3">Interested</option>
                                        <option value="3">Not Interested</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row m-b-0">
                                <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                                <div class="col-md-8 col-sm-8">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('partials.sidebar');
