@extends('layouts.app')
@section('content')
    <div id="content" class="content">
        <ol class="breadcrumb float-xl-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item"><a href="/asset-register"> Asset Management</a></li>
            <li class="breadcrumb-item active">Work Order</li>
            <li class="breadcrumb-item active">Solar Panel Shed</li>
        </ol>
        <h1 class="page-header">Air Condition</h1>
        <div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse panel-with-tabs" data-sortable-id="ui-unlimited-tabs-1">
                    <div class="panel-heading p-0">
                        <div class="tab-overflow">
                            <ul class="nav nav-tabs nav-tabs-inverse">
                                <li class="nav-item prev-button"><a href="javascript:;" data-click="prev-tab" class="nav-link text-primary"><i class="fa fa-arrow-left"></i></a></li>
                                <li class="nav-item"><a href="#nav-tab-1" data-toggle="tab" class="nav-link active">Asset Information</a></li>
                                <li class="nav-item"><a href="#nav-tab-2" data-toggle="tab" class="nav-link">Accountability</a></li>
                                <li class="nav-item"><a href="#nav-tab-3" data-toggle="tab" class="nav-link">Documents</a></li>
                                <li class="nav-item"><a href="#nav-tab-4" data-toggle="tab" class="nav-link">Accounting</a></li>
                                <li class="nav-item"><a href="#nav-tab-5" data-toggle="tab" class="nav-link">Asset Performance</a></li>
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
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_number">Asset Number</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_number"
                                               placeholder="Ex: 001"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_name">Asset Name </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_name"
                                               placeholder="Ex: Air Condition"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="short_name">Short Name </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="short_name"
                                               placeholder="Ex: AC"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Model">Model </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="model"
                                               placeholder="Ex: General"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Supplier">Supplier </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="supplier"
                                               placeholder="Ex: Car Vision"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Purchase Order No">Purchase Order No </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="order_no"
                                               placeholder="Ex: CSBT-001"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Invoice Number">Invoice Number </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="invoice_number"
                                               placeholder="Ex: CSBT-2019-10-20"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Purchase Date">Purchase Date </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="purchase_date"
                                               placeholder="Ex: 20/10/2019"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Asset Cost">Asset Cost </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_cost"
                                               placeholder="Ex: 100.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Other Cost">Other Cost </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="other_cost"
                                               placeholder="Ex: 50.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Total Value">Total Value </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="total_value"
                                               placeholder="Ex: 150.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Remarks">Remarks </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="remarks"
                                               placeholder="Ex: Remarks"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-0">
                                    <label class="col-md-2 col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-2">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_number">Asset Number</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_number"
                                               placeholder="Ex: 001"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Asset Custodian">Asset Custodian</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_custodian"
                                               placeholder="Ex: Air Condition"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="short_name">Location </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="short_name"
                                               placeholder="Ex: AC"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Cost Center">Cost Center</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="cost_center" placeholder="Ex: Cost Center" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="License Number">License Number </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="license_number" placeholder="Ex: 120-321-18" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="License Expiry Date">License Expiry Date</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="date" name="expire_date" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Remarks">Remarks </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="remarks" placeholder="Ex: Remarks" data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-0">
                                    <label class="col-md-2 col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-3">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_number">Asset Number</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_number"
                                               placeholder="Ex: 001"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_name">Asset Name </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_name"
                                               placeholder="Ex: Air Condition"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="short_name">Short Name </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="short_name"
                                               placeholder="Ex: AC"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Model">Model </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="model"
                                               placeholder="Ex: General"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Supplier">Supplier </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="supplier"
                                               placeholder="Ex: Car Vision"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Purchase Order No">Purchase Order No </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="order_no"
                                               placeholder="Ex: CSBT-001"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Invoice Number">Invoice Number </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="invoice_number"
                                               placeholder="Ex: CSBT-2019-10-20"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Purchase Date">Purchase Date </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="purchase_date"
                                               placeholder="Ex: 20/10/2019"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Asset Cost">Asset Cost </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_cost"
                                               placeholder="Ex: 100.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Other Cost">Other Cost </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="other_cost"
                                               placeholder="Ex: 50.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Total Value">Total Value </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="total_value"
                                               placeholder="Ex: 150.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Remarks">Remarks </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="remarks"
                                               placeholder="Ex: Remarks"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-0">
                                    <label class="col-md-2 col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-4">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_number">Asset Number</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_number"
                                               placeholder="Ex: 001"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_name">Asset Name </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_name"
                                               placeholder="Ex: Air Condition"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="short_name">Short Name </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="short_name"
                                               placeholder="Ex: AC"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Model">Model </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="model"
                                               placeholder="Ex: General"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Supplier">Supplier </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="supplier"
                                               placeholder="Ex: Car Vision"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Purchase Order No">Purchase Order No </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="order_no"
                                               placeholder="Ex: CSBT-001"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Invoice Number">Invoice Number </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="invoice_number"
                                               placeholder="Ex: CSBT-2019-10-20"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Purchase Date">Purchase Date </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="purchase_date"
                                               placeholder="Ex: 20/10/2019"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Asset Cost">Asset Cost </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_cost"
                                               placeholder="Ex: 100.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Other Cost">Other Cost </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="other_cost"
                                               placeholder="Ex: 50.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Total Value">Total Value </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="total_value"
                                               placeholder="Ex: 150.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Remarks">Remarks </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="remarks"
                                               placeholder="Ex: Remarks"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-0">
                                    <label class="col-md-2 col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-5">
                            <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_number">Asset Number</label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_number"
                                               placeholder="Ex: 001"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="asset_name">Asset Name </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_name"
                                               placeholder="Ex: Air Condition"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="short_name">Short Name </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="short_name"
                                               placeholder="Ex: AC"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Model">Model </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="model"
                                               placeholder="Ex: General"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Supplier">Supplier </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="supplier"
                                               placeholder="Ex: Car Vision"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Purchase Order No">Purchase Order No </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="order_no"
                                               placeholder="Ex: CSBT-001"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Invoice Number">Invoice Number </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="invoice_number"
                                               placeholder="Ex: CSBT-2019-10-20"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Purchase Date">Purchase Date </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="purchase_date"
                                               placeholder="Ex: 20/10/2019"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Asset Cost">Asset Cost </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="asset_cost"
                                               placeholder="Ex: 100.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Other Cost">Other Cost </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="other_cost"
                                               placeholder="Ex: 50.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Total Value">Total Value </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="total_value"
                                               placeholder="Ex: 150.00"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-2 col-sm-2 col-form-label" for="Remarks">Remarks </label>
                                    <div class="col-md-3 col-sm-3">
                                        <input class="form-control" type="text" name="remarks"
                                               placeholder="Ex: Remarks"
                                               data-parsley-required="true"/>
                                    </div>
                                </div>
                                <div class="form-group row m-b-0">
                                    <label class="col-md-2 col-sm-2 col-form-label">&nbsp;</label>
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar');
    @include('partials.delete');
@endsection
