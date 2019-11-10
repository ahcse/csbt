@extends('layouts.dashboard')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb pull-right hidden-xs">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item">Site Management</li>
            <li class="breadcrumb-item">Work Order</li>
            <li class="breadcrumb-item">{{$project->project_name}}</li>
        </ol>
        <h3 class="page-header">{{$project->project_name}}</h3>
        <div class="row">
            <div class="col-lg-9">
                <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
                    <div class="panel-heading p-0">
                        <div class="panel-heading-btn m-r-10 m-t-10">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                               data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        </div>
                        <div class="tab-overflow">
                            <ul class="nav nav-tabs nav-tabs-inverse">
                                <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab"
                                                                    class="nav-link text-success"><i
                                                class="fa fa-arrow-left"></i></a></li>
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Time
                                        Schedule</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Payment
                                        Schedule</a></li>
                                <li class="nav-item next-button"><a href="javascript:;" data-click="next-tab"
                                                                    class="nav-link text-success"><i
                                                class="fa fa-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="nav-tab-1">
                            <h4 class="m-t-10">Time Schedule
                                <small><a href="javascript:;"
                                          class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger create-modal"
                                          data-type='create-time'><i class="fa fa-x fa-plus"></i> Add New</a></small>
                            </h4>
                            <div class="table-responsive">
                                <table id="time-schedule" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        @for ($i = 0; $i < count($timeHeaders); $i++)
                                            <th>{{$timeHeaders[$i]}}</th>
                                        @endfor
                                    </tr>
                                    </thead>
                                </table>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <h4 class="m-t-10">Payment Schedule
                                <small><a href="javascript:;"
                                          class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger create-modal"
                                          data-type='create-payment'><i class="fa fa-x fa-plus"></i> Add New</a></small>
                            </h4>
                            <div class="table-responsive">
                                <table id="payment-schedule" class="table table-striped table-bordered"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        @for ($i = 0; $i < count($paymentHeaders); $i++)
                                            <th>{{$paymentHeaders[$i]}}</th>
                                        @endfor
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="csbt-modal">
        <div class="modal-dialog">
            <div class="modal-content"></div>
        </div>
    </div>

    <div class="theme-panel theme-panel-lg"><a href="javascript:;" data-click="theme-panel-expand"
                                               class="theme-collapse-btn"><i class="fa fa-eye"></i></a>
        <div class="theme-panel-content">
            <div class="panel panel-default panel-with-tabs" data-sortable-id="ui-unlimited-tabs-2">
                <div class="panel-heading p-0">
                    <div class="panel-heading-btn m-r-10 m-t-10">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse"
                           data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    </div>
                    <div class="tab-overflow">
                        <ul class="nav nav-tabs">
                            <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab"
                                                                class="text-inverse nav-link"><i
                                            class="fa fa-arrow-left"></i></a></li>
                            <li class="nav-item"><a href="#nav-tab2-1" data-toggle="tab"
                                                    class="nav-link active"><strong>Information</strong></a></li>
                            <li class="nav-item"><a href="#nav-tab2-2" data-toggle="tab" class="nav-link"><strong>Download</strong></a>
                            </li>
                            <li class="nav-item next-button"><a href="javascript:;" data-click="next-tab"
                                                                class="text-inverse nav-link"><i
                                            class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" style="padding: 15px 0;">
                    <div class="tab-pane fade active show" id="nav-tab2-1">
                        @include('partials.client_info', [ 'projectId' => Request::segment(2)])
                        <div class="form-group">
                            <label>Project Status</label>
                            <select class="form-control selectpicker" required data-size="10" data-style="btn-white"
                                    data-parsley-required="true">
                                <option value="">Please Select Status</option>
                                <option value="1">All Status</option>
                                <option value="2" selected>On Going</option>
                                <option value="3">Completed</option>
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-tab2-2">
                        <div action="#" target="_blank" class="form-horizontal" data-parsley-validate="true"
                             name="demo-form">
                            <div class="form-group">
                                <label>Project Status</label>
                                <select class="form-control selectpicker" required data-size="10" data-style="btn-white"
                                        data-parsley-required="true">
                                    <option value="">Please Select Status</option>
                                    <option value="1">All Status</option>
                                    <option value="1">On Going</option>
                                    <option value="2">Completed</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <a class="btn btn-info" href="?download=true" class="btn btn-success">Export Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-script')
    <script type="text/javascript">
        $(document).on('click', '.edit-modal', function () {
            $('#csbt-modal').modal({show: true});
            var type = $(this).data().type;

            if (type == 'edit-time') {
                $('.modal-content').load('/work-order/form-time', {
                        project_id: "{{ Request::segment(2) }}",
                        id: $(this).data().id,
                        _token: '{{csrf_token()}}'
                    }, function () {
                        $.getScript("/assets/js/parsley.js", function (data, status, jqxhr) {
                        });
                    }
                );
            }

            if (type == 'edit-payment') {
                $('.modal-content').load('/work-order/form-payment', {
                        project_id: "{{ Request::segment(2) }}",
                        id: $(this).data().id,
                        _token: '{{csrf_token()}}'
                    }, function () {
                        $.getScript("/assets/js/parsley.js", function (data, status, jqxhr) {
                        });
                    }
                );
            }
        });
        $(document).on('click', '.create-modal', function () {
            var type = $(this).data().type;
            if (type == 'create-time') {
                $('#csbt-modal').modal({show: true});
                $('.modal-content').load('/work-order/form-time', {
                        project_id: "{{ Request::segment(2) }}",
                        id: $(this).data().id,
                        _token: '{{csrf_token()}}'
                    }, function () {
                        $.getScript("/assets/js/parsley.js", function (data, status, jqxhr) {
                        });
                    }
                );
            }

            if (type == 'create-payment') {
                $('#csbt-modal').modal({show: true});
                $('.modal-content').load('/work-order/form-payment', {
                        project_id: "{{ Request::segment(2) }}",
                        id: $(this).data().id,
                        _token: '{{csrf_token()}}'
                    }, function () {
                        $.getScript("/assets/js/parsley.js", function (data, status, jqxhr) {
                        });
                    }
                );
            }
        });
    </script>
    <script type="text/javascript">
        var timeTable = function () {
            "use strict";
            $("#time-schedule").DataTable({
                    responsive: !0,
                    ajax: '/project-work-order/' + "{{ Request::segment(2) }}" + "?time=true",
                    serverSide: true,
                    processing: true,
                    "columns": [
                        {"data": "id", "orderable": true, "searchable": true},
                        {"data": "particular", "orderable": true, "searchable": true},
                        {"data": "start_date", "orderable": true, "searchable": true},
                        {"data": "complete_date", "orderable": true, "searchable": true},
                        {"data": "remarks", "orderable": true, "searchable": true},
                        {"data": "action", "orderable": false, "searchable": false},
                    ]
                }
            )
        }
        var paymentTable = function () {
                "use strict";
                $("#payment-schedule").DataTable({
                        responsive: !0,
                        ajax: '/project-work-order/' + "{{ Request::segment(2) }}" + "?payment=true",
                        serverSide: true,
                        processing: true,
                        "columns": [
                            {"data": "id", "orderable": true, "searchable": true},
                            {"data": "percent", "orderable": true, "searchable": true},
                            {"data": "particular", "orderable": true, "searchable": true},
                            {"data": "amount", "orderable": true, "searchable": true},
                            {"data": "remarks", "orderable": true, "searchable": true},
                            {"data": "action", "orderable": false, "searchable": false},
                        ]
                    }
                )
            }
            ,
            TableManageButtons = function () {
                "use strict";
                return {
                    init: function () {
                        timeTable();
                        paymentTable();
                    }
                }
            }

            ();
    </script>

@endsection