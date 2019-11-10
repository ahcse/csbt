<div class="modal fade" id="form_deliverable">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Deliverable Edit Form </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Deliverable">Deliverable</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="deliverable" placeholder="Enter Deliverable" data-parsley-required="true"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Description">Description </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="description" placeholder="Enter Description" data-parsley-required="true"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Submission Date">Submission Date </label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="date" name="submission_date" data-parsley-required="true"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="Remarks">Remarks</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="remarks" placeholder="Enter Remarks" data-parsley-required="true"/>
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
