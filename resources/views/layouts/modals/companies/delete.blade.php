<div class="modal fade" id="deleteCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" method="POST" id="deleteCompanyForm">
                @csrf
                {{ method_field('DELETE') }}
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are your sure you want to delete?</p>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" onclick="formSubmit()">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>