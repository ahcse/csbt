@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item">Site Management</li>
            <li class="breadcrumb-item">Project Information</li>
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
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">General
                                        Information</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Contact
                                        Information</a></li>
                                <li class="nav-item"><a href="#nav-tab-3" data-toggle="tab"
                                                        class="nav-link">Consultant</a></li>
                                <li class="nav-item"><a href="#nav-tab-4" data-toggle="tab" class="nav-link">Scope
                                        Baseline & Milestone</a></li>
                                <li class="nav-item"><a href="#nav-tab-5" data-toggle="tab" class="nav-link">Stakeholders</a>
                                </li>
                                <li class="nav-item"><a href="#nav-tab-6" data-toggle="tab" class="nav-link">Purpose of
                                        Project</a></li>
                                <li class="nav-item"><a href="#nav-tab-7" data-toggle="tab" class="nav-link">Project
                                        Success Criteria</a></li>
                                <li class="nav-item"><a href="#nav-tab-8" data-toggle="tab"
                                                        class="nav-link">Deliverable</a></li>
                                <li class="nav-item"><a href="#nav-tab-9" data-toggle="tab" class="nav-link">Erection
                                        Sequence</a></li>
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
                            <h5 class="m-t-10"><small><a href="#form_general_information"
                                                                             data-toggle="modal"
                                                                             class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Particular</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Client</td>
                                    <td>2xcovered Store	</td>
                                    <td><a href="#form_general_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Client</td>
                                    <td>2xcovered Store	</td>
                                    <td><a href="#form_general_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Client</td>
                                    <td>2xcovered Store	</td>
                                    <td><a href="#form_general_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Client</td>
                                    <td>2xcovered Store	</td>
                                    <td><a href="#form_general_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <h5 class="m-t-10"><small><a href="#form_contact_information"
                                                                             data-toggle="modal"
                                                                             class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Name</th>
                                    <th class="text-nowrap">Designation</th>
                                    <th class="text-nowrap">Mobile</th>
                                    <th class="text-nowrap">Email</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Worker</td>
                                    <td>+880-1918-059932</td>
                                    <td>alamgir58cse@gmail.com</td>
                                    <td><a href="#form_contact_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Worker</td>
                                    <td>+880-1918-059932</td>
                                    <td>alamgir58cse@gmail.com</td>
                                    <td><a href="#form_contact_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Worker</td>
                                    <td>+880-1918-059932</td>
                                    <td>alamgir58cse@gmail.com</td>
                                    <td><a href="#form_contact_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Worker</td>
                                    <td>+880-1918-059932</td>
                                    <td>alamgir58cse@gmail.com</td>
                                    <td><a href="#form_contact_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-3">
                            <h5 class="m-t-10"><small><a href="#form_consultant" data-toggle="modal"
                                                                    class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Name</th>
                                    <th class="text-nowrap">Designation</th>
                                    <th class="text-nowrap">Mobile</th>
                                    <th class="text-nowrap">Email</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Worker</td>
                                    <td>+880-1918-059932</td>
                                    <td>alamgir58cse@gmail.com</td>
                                    <td><a href="#form_contact_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Worker</td>
                                    <td>+880-1918-059932</td>
                                    <td>alamgir58cse@gmail.com</td>
                                    <td><a href="#form_contact_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Worker</td>
                                    <td>+880-1918-059932</td>
                                    <td>alamgir58cse@gmail.com</td>
                                    <td><a href="#form_contact_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Worker</td>
                                    <td>+880-1918-059932</td>
                                    <td>alamgir58cse@gmail.com</td>
                                    <td><a href="#form_contact_information" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-4">
                            <h5 class="m-t-10"><small><a
                                        href="#form_scope_baseline_milestone"
                                        data-toggle="modal"
                                        class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Scope Baseline</th>
                                    <th class="text-nowrap">Initial Milestone</th>
                                    <th class="text-nowrap">Achieved Milestone</th>
                                    <th class="text-nowrap">Days</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Suply of Anchor Bolt</td>
                                    <td>25/12/2014</td>
                                    <td>25/12/2014</td>
                                    <td>20</td>
                                    <td>Text</td>
                                    <td><a href="#form_scope_baseline_milestone" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Suply of Anchor Bolt</td>
                                    <td>25/12/2014</td>
                                    <td>25/12/2014</td>
                                    <td>20</td>
                                    <td>Text</td>
                                    <td><a href="#form_scope_baseline_milestone" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Suply of Anchor Bolt</td>
                                    <td>25/12/2014</td>
                                    <td>25/12/2014</td>
                                    <td>20</td>
                                    <td>Text</td>
                                    <td><a href="#form_scope_baseline_milestone" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Suply of Anchor Bolt</td>
                                    <td>25/12/2014</td>
                                    <td>25/12/2014</td>
                                    <td>20</td>
                                    <td>Text</td>
                                    <td><a href="#form_scope_baseline_milestone" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-5">
                            <h5 class="m-t-10"><small><a href="#form_stakeholders" data-toggle="modal"
                                                                      class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Stake Holder</th>
                                    <th class="text-nowrap">Stakeholder Managing</th>
                                    <th class="text-nowrap">Responsible Person</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Required Fund for site</td>
                                    <td>Preparing Fund Requisition & Budgetd</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Fund Requisition</td>
                                    <td><a href="#form_stakeholders" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Required Fund for site</td>
                                    <td>Preparing Fund Requisition & Budgetd</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Fund Requisition</td>
                                    <td><a href="#form_stakeholders" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Required Fund for site</td>
                                    <td>Preparing Fund Requisition & Budgetd</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Fund Requisition</td>
                                    <td><a href="#form_stakeholders" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Required Fund for site</td>
                                    <td>Preparing Fund Requisition & Budgetd</td>
                                    <td>Alamgir Hossen</td>
                                    <td>Fund Requisition</td>
                                    <td><a href="#form_stakeholders" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-6">
                            <h5 class="m-t-10"><small><a href="#form_purpose_project"
                                                                            data-toggle="modal"
                                                                            class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Purpose</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>To save intact material from environment</td>
                                    <td>Satety Precaution Very Urgent</td>
                                    <td><a href="#form_purpose_project" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>To save intact material from environment</td>
                                    <td>Satety Precaution Very Urgent</td>
                                    <td><a href="#form_purpose_project" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>To save intact material from environment</td>
                                    <td>Satety Precaution Very Urgent</td>
                                    <td><a href="#form_purpose_project" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>To save intact material from environment</td>
                                    <td>Satety Precaution Very Urgent</td>
                                    <td><a href="#form_purpose_project" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-7">
                            <h5 class="m-t-10"><small><a href="#form_project_success_criteria"
                                                                                  data-toggle="modal"
                                                                                  class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Criteria</th>
                                    <th class="text-nowrap">Description</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Proper Documentation</td>
                                    <td>Successful FInancial Transition	</td>
                                    <td>-</td>
                                    <td><a href="#form_project_success_criteria" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Proper Documentation</td>
                                    <td>Successful FInancial Transition	</td>
                                    <td>-</td>
                                    <td><a href="#form_project_success_criteria" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Proper Documentation</td>
                                    <td>Successful FInancial Transition	</td>
                                    <td>-</td>
                                    <td><a href="#form_project_success_criteria" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Proper Documentation</td>
                                    <td>Successful FInancial Transition	</td>
                                    <td>-</td>
                                    <td><a href="#form_project_success_criteria" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-8">
                            <h5 class="m-t-10"><small><a href="#form_deliverable" data-toggle="modal"
                                                                     class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i
                                            class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Deliverable</th>
                                    <th class="text-nowrap">Detail</th>
                                    <th class="text-nowrap">Submission Date</th>
                                    <th class="text-nowrap">Remarks</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Delivery Sequence</td>
                                    <td>Detail</td>
                                    <td>20/12/2015</td>
                                    <td>Make sure the delivery is according to the sequence	</td>
                                    <td><a href="#form_deliverable" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Delivery Sequence</td>
                                    <td>Detail</td>
                                    <td>20/12/2015</td>
                                    <td>Make sure the delivery is according to the sequence	</td>
                                    <td><a href="#form_deliverable" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Delivery Sequence</td>
                                    <td>Detail</td>
                                    <td>20/12/2015</td>
                                    <td>Make sure the delivery is according to the sequence	</td>
                                    <td><a href="#form_deliverable" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Delivery Sequence</td>
                                    <td>Detail</td>
                                    <td>20/12/2015</td>
                                    <td>Make sure the delivery is according to the sequence	</td>
                                    <td><a href="#form_deliverable" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-9">
                            <h5 class="m-t-10"><small><a href="#form_erection_sequence" data-toggle="modal" class="btn btn-default btn-sm m-r-5 m-b-5 btn-danger"><i class="fa fa-x fa-plus"></i> Add New</a></small></h5>
                            <table class="table table-striped table-bordered table-td-valign-middle data-table-responsive">
                                <thead>
                                <tr>
                                    <th width="1%">SL.</th>
                                    <th class="text-nowrap">Material Type</th>
                                    <th class="text-nowrap">Name of the Material</th>
                                    <th class="text-nowrap">Grid Line</th>
                                    <th class="text-nowrap">Nos.</th>
                                    <th class="text-nowrap">Part Mark</th>
                                    <th class="text-nowrap">Phase</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Anchor Bolt	</td>
                                    <td>Column</td>
                                    <td>V11-(H5)</td>
                                    <td>11</td>
                                    <td>C201</td>
                                    <td>01</td>
                                    <td><a href="#form_erection_sequence" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Anchor Bolt	</td>
                                    <td>Column</td>
                                    <td>V11-(H5)</td>
                                    <td>11</td>
                                    <td>C201</td>
                                    <td>01</td>
                                    <td><a href="#form_erection_sequence" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Anchor Bolt	</td>
                                    <td>Column</td>
                                    <td>V11-(H5)</td>
                                    <td>11</td>
                                    <td>C201</td>
                                    <td>01</td>
                                    <td><a href="#form_erection_sequence" data-toggle="modal" class="label label-info"><i
                                                class="fa fa-edit"></i></a> <a href="#delete" data-toggle="modal"><span
                                                class="label label-danger"><i class="fa fa-times"></i></span></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Anchor Bolt	</td>
                                    <td>Column</td>
                                    <td>V11-(H5)</td>
                                    <td>11</td>
                                    <td>C201</td>
                                    <td>01</td>
                                    <td><a href="#form_erection_sequence" data-toggle="modal" class="label label-info"><i
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
    @include('site_management.project_information.form_general_information');
    @include('site_management.project_information.form_contact_information');
    @include('site_management.project_information.form_consultant');
    @include('site_management.project_information.form_scope_baseline_milestone');
    @include('site_management.project_information.form_stakeholders');
    @include('site_management.project_information.form_purpose_project');
    @include('site_management.project_information.form_project_success_criteria');
    @include('site_management.project_information.form_deliverable');
    @include('site_management.project_information.form_erection_sequence');
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
