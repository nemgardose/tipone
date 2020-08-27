
<div class="modal fade" id="editCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
            <input type="hidden" class="form-control" value="" name="edit_company_id" id="edit_company_id">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="text-center">
                            <img src="img/placeholder-image.jpg" alt="logo" class="mr-3 img-responsive img-fluid" id="editShowPhoto" style="height:200px;">
                            <input type="file" style="display:none;" name="logo" id="photo_edit" accept="image/x-png, image/png, image/jpg, image/jpeg" required>
                            <input type="button" name="browse_file" id="browse_file_edit" class="form-control btn-browse" value="SELECT COMPANY LOGO" style="border:0;margin-top:10px;margin-bottom:10px;color:#224abe;" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-building"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Company Name" name="name" id="edit_company_name" aria-label="Company Name">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="email" class="form-control" placeholder="Email Address" name="email" id="edit_company_email" aria-label="Email Address">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-window-restore"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Website" name="website" id="edit_company_website" aria-label="Website">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>