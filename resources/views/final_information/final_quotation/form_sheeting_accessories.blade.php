<div class="modal fade" id="form_sheeting_accessories">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Sheeting & Accessories Edit Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Description">Description of Item </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="description"  placeholder="Enter Description of Item" data-parsley-required="true"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Unit">Unit </label>
                        <div class="col-md-8 col-sm-8">
                            <select class="form-control selectpicker" name="unit" data-size="10" data-style="btn-white" data-live-search="true" data-parsley-required="true" >
                                <option value="">Please Select</option>
                                <option value="General">Pcs</option>
                                <option value="Priority">Sqm</option>
                                <option value="High Priority">Ltr</option>
                                <option value="High Priority">Kg</option>
                                <option value="High Priority">Ton</option>
                                <option value="High Priority">Cm</option>
                                <option value="High Priority">m<sup>2</sup></option>
                                <option value="High Priority">Ft</option>
                                <option value="High Priority">Gallon</option>
                                <option value="High Priority">m<sup>3</sup></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Quantity">Quantity </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="number" name="qty"  placeholder="Enter Quantity" data-parsley-required="true" />
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Rate">Rate </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="number" name="rate"  placeholder="Enter Quantity" data-parsley-required="true" />
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Amount">Amount </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="number" name="amount"  placeholder="Enter Amount" data-parsley-required="true" />
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
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
