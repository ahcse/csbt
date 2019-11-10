
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Confirmation</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" style="padding-bottom: 1px;">
                    <p>Are you sure?</p>
                </div>
            </div>
            @csrf
            <div class="modal-footer">
                <a href="javascript:;" class="btn btn-white" data-dismiss="modal">No</a>
                <a href="javascript:;" class="btn btn-danger delete-confirm" data-dismiss="modal">Yes</a>
            </div>
        </div>

