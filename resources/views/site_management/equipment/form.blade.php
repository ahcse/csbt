<div class="modal fade" id="form">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Solar Panel Shed Edit Form </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="description">Tools Category </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="category" placeholder="Enter Category"
                                   data-parsley-required="true"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="upload_date">Equipment Name </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="equipment" placeholder="Enter Equipment"
                                   data-parsley-required="true"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="remarks">Quantity </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="number" name="quantity" placeholder="Enter Quantity"
                                   data-parsley-required="true"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="remarks">Date </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="date" name="date" data-parsley-required="true"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="remarks">Remarks </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="wt_pcs" placeholder="Enter Remarks"
                                   data-parsley-required="true"/>
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
