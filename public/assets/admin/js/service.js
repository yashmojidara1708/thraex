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
                        toastr.success(response.message, "Success", { timeOut: 3000 });
                        $("#formdata").modal("hide");
                        $("#form1")[0].reset();
                        CKEDITOR.instances["content"].setData("");
                        $(".serviceTable").DataTable().ajax.reload();
                    } else {
                        toastr.error("Something went wrong!", "Error", { timeOut: 3000 });
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
                    toastr.error("Something went wrong!", "Error", { timeOut: 3000 });
                }
            }
        });
    });

    $(document).on("click", ".delete", function () {
        let id = $(this).data("id");

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#FF5722",
            cancelButtonColor: "#757575",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/admin/services/" + id,
                    type: "DELETE",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.success) {
                            Swal.fire("Deleted!", response.message, "success");

                            // Reload DataTable
                            $(".serviceTable").DataTable().ajax.reload(null, false);
                        } else {
                            Swal.fire("Error!", "Something went wrong!", "error");
                        }
                    }
                });
            }
        });
    });

});
