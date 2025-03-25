$(document).ready(function () {

    $("#phone").on("input", function () {
        this.value = this.value.replace(/\D/g, '').slice(0, 10); // Remove non-digits and limit to 10 digits
    });

    // Initialize jQuery Validation
    $("#contact-form").validate({
        rules: {
           name: { required: true},
           email: { required: true, email: true},
           phone: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 10
           },
           subject: { required: true},
           message: { required: true},
        },
        messages: {
            name: "Name is required",
            email: "Email is required",
            phone: "Phone is required",
            subject: "Subject is required",
            message: "Message is required",
        },

        submitHandler: function (form) {
            $(".error").text(""); // Clear previous errors

            var formData = new FormData(form);

            $.ajax({
                url: "/contact-submit",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.success) {
                        $("#contact-form")[0].reset(); // Reset form

                        toastr.success(response.message, "Success", {
                            positionClass: "toast-top-right",
                            timeOut: 3000
                        });
                    }
                },
                error: function (xhr) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        $("#" + key).after('<span class="error" style="color:red;">' + value[0] + '</span>');
                    });

                    toastr.error("Please fix the errors and try again.", "Error", {
                        positionClass: "toast-top-right",
                        timeOut: 3000
                    });
                }
            });
        }
    });
});

