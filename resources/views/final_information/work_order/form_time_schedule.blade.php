<div class="modal fade" id="form_time_schedule">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Time Schedule Edit Form</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="activities_particulars">Activities / Particulars</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="text" name="activities_particulars"  placeholder="Enter Activities / Particulars" data-parsley-required="true" data-parsley-range="[2,100]"/>
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label"for="start_date">Start Date</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="date" name="start_date"  placeholder="Enter Start Date" data-parsley-required="true" />
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="complete_date">Complete Date</label>
                        <div class="col-md-8 col-sm-8">
                            <input class="form-control" type="date" name="complete_date"  placeholder="Enter Complete Date" data-parsley-required="true" />
                        </div>
                    </div>
                    <div class="form-group row m-b-15">
                        <label class="col-md-4 col-sm-4 col-form-label" for="remarks">Remarks </label>
                        <div class="col-md-8 col-sm-8">
                            <textarea class="form-control" name="remarks" rows="1"  placeholder="Enter Remarks" ></textarea>
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
