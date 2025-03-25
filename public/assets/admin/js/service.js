$(document).ready(function () {

    fetch();

    $.validator.addMethod("ckeditorRequired", function (value, element) {
        let editorContent = CKEDITOR.instances[element.name].getData().trim();
        return editorContent.length > 0;
    }, "Please enter content.");


    $("#formdata").on("hidden.bs.modal", function () {
        $('#form1').trigger("reset");
        $("#service_id").val("");
        $("#title").val("");
        CKEDITOR.instances.content.setData("");
        $("#form1").validate().resetForm();
    });

    $("#form1").validate({
        ignore: [],
        rules: {
            title: {
                required: true,
                maxlength: 50,
            },
            content: {
                ckeditorRequired: true
            },
            status: { required: true }
        },
        messages: {
            title: {
                required: "Please enter a title.",
                maxlength: "Title must be at most 50 characters.",
            },
            content: {
                ckeditorRequired: "Please enter content."
            },
            status: { required: "Please select a status." }
        },
        errorPlacement: function (error, element) {
            error.addClass("text-danger");
            if (element.attr("name") === "content") {
                error.insertAfter(CKEDITOR.instances.content.container.$);
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {

            if (typeof CKEDITOR !== "undefined") {
                for (let instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
                }
            }

            let formData = new FormData(form);

            $.ajax({
                url: "/admin/services",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.success) {
                        let toastMessage = response.message;
                        showToast("success", toastMessage);
                        $("#formdata").modal("hide");
                        $("#form1")[0].reset();
                        CKEDITOR.instances["content"].setData("");
                        $(".serviceTable").DataTable().ajax.reload();
                    } else {
                        showToast("error", "Something went wrong!");
                    }
                }
            });
        }
    });

    function fetch() {
        $(".serviceTable").DataTable({
            searching: true,
            paging: true,
            pageLength: 10,
            processing: true,
            serverSide: true,
            ajax: {
                url: "/admin/services/fetch",
                type: "GET"
            },
            columns: [
                { data: "id", name: "id" },
                { data: "title", name: "title" },
                { data: "content", name: "content" },
                { data: "status", name: "status" },
                { data: "action", name: "action", orderable: false, searchable: false }
            ]
        });
    }

    $(document).on("click", ".edit", function () {
        let id = $(this).data("id");

        $.ajax({
            url: "/admin/services/" + id + "/edit",
            type: "GET",
            success: function (response) {
                if (response.success) {
                    $("#form1")[0].reset();
                    $("#service_id").val(response.data.id);
                    $("#title").val(response.data.title);
                    CKEDITOR.instances["content"].setData(response.data.content);
                    $('input[name="status"][value="' + response.data.status + '"]').prop("checked", true);
                    $("#formdata").modal("show");
                } else {
                    showToast("error", "Service not found!");
                }
            }
        });
    });

    $(document).on("click", ".delete", function () {
        let id = $(this).data("id");

        showConfirmationToast("Are you sure you want to delete this service?", function () {
            $.ajax({
                url: "/admin/services/" + id,
                type: "DELETE",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.success) {
                        showToast("success", response.message);

                        // Reload DataTable to remove the deleted row
                        $(".serviceTable").DataTable().ajax.reload(null, false);
                    } else {
                        showToast("error", "Error deleting record!");
                    }
                }
            });
        });
    });

    function showToast(type, message) {
        let toastContainer = $("#toastContainer");
        let toastTypeClass = (type === "success") ? "bg-success" : "bg-danger";
        let toastHTML = `
            <div class="toast align-items-center text-white ${toastTypeClass} border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">${message}</div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>`;

        toastContainer.append(toastHTML);
        setTimeout(() => {
            $(".toast").toast("hide");
        }, 3000);
    }


    function showConfirmationToast(message, callback) {
        // Clear existing toast
        $("#toastContainer").html("");

        let toastHTML = `
            <div id="confirmToast" class="toast align-items-center border-0 show" role="alert" style="
                width: 420px;
                padding: 15px;
                background: #2C2C2C; /* Dark Gray */
                color: #FFFFFF; /* White text */
                font-weight: bold;
                border-left: 6px solid #FF9800; /* Orange border for contrast */
                border-radius: 8px;
                box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.3);
            ">
                <div class="toast-body text-center">
                    <p style="font-size: 16px; margin-bottom: 10px;">${message}</p>
                    <div class="mt-2 d-flex justify-content-center">
                        <button type="button" class="btn mx-2 px-4" id="confirmDelete" style="
                            background: #FF5722;
                            color: white;
                            border: none;
                            padding: 8px 16px;
                            border-radius: 5px;
                        ">Yes</button>
                        <button type="button" class="btn mx-2 px-4" id="cancelDelete" style="
                            background: #757575;
                            color: white;
                            border: none;
                            padding: 8px 16px;
                            border-radius: 5px;
                        ">No</button>
                    </div>
                </div>
            </div>`;

        $("#toastContainer").html(toastHTML);

        // Bind click events properly
        $("#confirmDelete").off("click").on("click", function () {
            callback();
            $("#confirmToast").remove(); // Remove toast after action
        });

        $("#cancelDelete").off("click").on("click", function () {
            $("#confirmToast").remove(); // Remove toast on cancel
        });

        $(".toast").toast("show");
    }

});
