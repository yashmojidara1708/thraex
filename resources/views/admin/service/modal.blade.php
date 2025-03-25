<div class="modal fade" id="formdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modaltitle">Add New Entry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form1" method="POST" onsubmit="return false" class="p-3">
                @csrf
                <input type="hidden" name="id" id="service_id">

                <div class="modal-body">
                    <!-- Title Field -->
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold text-lg fs-5">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                    </div>

                    <!-- Content Field (CKEditor) -->
                    <div class="mb-3">
                        <label for="content" class="form-label fw-bold fs-5">Content:</label>
                        <textarea name="content" id="content" class="form-control" rows="5" ckeditor="true" placeholder="Enter content"></textarea>
                    </div>

                    <!-- Status Field -->
                    <div class="mb-3">
                        <label class="form-label fw-bold fs-5">Status:</label>
                        <div class="d-flex gap-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="status" id="active" value="1" checked>
                                <label for="active" class="form-check-label">Active</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" name="status" id="inactive" value="0">
                                <label for="inactive" class="form-check-label">Inactive</label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>



