<div class="row">
            <div class="col-xl-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Primary Proposal Drawing Creation Form</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger close"
                                data-dismiss="modal"><i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="height">Height</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="height"
                                            placeholder="Enter Height"
                                           data-parsley-required="true" data-parsley-range="[2,100]"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="width">Width</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="width"
                                            placeholder="Enter Width"
                                           data-parsley-required="true" data-parsley-range="[2,100]"/>
                                </div>
                            </div>

                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="length">Length</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="length"
                                            placeholder="Enter Length"
                                           data-parsley-required="true" data-parsley-range="[2,100]"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="brick_wall_height">Brick Wall
                                    Height </label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="brick_wall_height"
                                            placeholder="Enter Brick Wall Height"
                                           data-parsley-required="true" data-parsley-range="[2,100]"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="insulation">Insulation</label>
                                <div class="col-md-8 col-sm-8">
                                    <select class="form-control selectpicker" data-size="10" data-style="btn-white"
                                            data-parsley-required="true">
                                        <option value="">Select Type</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="gate">Gate</label>
                                <div class="col-md-8 col-sm-8">
                                    <select class="form-control selectpicker" data-size="10" data-style="btn-white"
                                            data-parsley-required="true">
                                        <option value="">Select Type</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="canopy">Canopy</label>
                                <div class="col-md-8 col-sm-8">
                                    <select class="form-control selectpicker" data-size="10" data-style="btn-white"
                                            data-parsley-required="true">
                                        <option value="">Select Type</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="roof_monitoring">Roof
                                    Monitoring</label>
                                <div class="col-md-8 col-sm-8">
                                    <select class="form-control selectpicker" data-size="10" data-style="btn-white"
                                            data-parsley-required="true">
                                        <option value="">Select Type</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="live_load">Live Load</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="live_load"
                                            placeholder="Enter Live Load"
                                           data-parsley-required="true" data-parsley-range="[2,100]"/>
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-md-4 col-sm-4 col-form-label" for="seismic_zone">Seismic zone</label>
                                <div class="col-md-8 col-sm-8">
                                    <input class="form-control" type="text" name="seismic_zone"
                                            placeholder="Enter Seismic zone"
                                           data-parsley-required="true" data-parsley-range="[2,100]"/>
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