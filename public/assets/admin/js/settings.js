$(document).ready(function () {

    function previewImage(input, previewDiv) {
        let file = input.files[0];

        if (file) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $(previewDiv).html(
                    `<img src="${e.target.result}" class="img-thumbnail mt-2" width="100" alt="Image Preview">`
                );
            };
            reader.readAsDataURL(file);
        } else {
            $(previewDiv).html("");
        }
    }

    $("input[name='logo']").change(function () {
        previewImage(this, "#dis_logo");
    });

    $("input[name='favicon']").change(function () {
        previewImage(this, "#dis_favicon");
    });

    $("#settings_form").validate({
        rules: {
            company_name: {
                required: true,
            },
            address: {
                required: true
            },
            city: {
                required: true
            },
            state: {
                required: true
            },
            zipcode: {
                required: true,
                digits: true,
                minlength: 6,
                maxlength: 6
            },
            gstnu: {
                required: false,
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            email1: {
                required: true,
                email: true
            },
            email2: {
                required: false,
                email: true
            },
            logo: {
                required: function(element) {
                    return $("input[name='logo']").get(0).files.length === 0 && $("#dis_logo img").length === 0;
                },
                extension: "jpg|jpeg|png|gif",
                filesize: 5000000
            },
            favicon: {
                required: function(element) {
                    return $("input[name='favicon']").get(0).files.length === 0 && $("#dis_favicon img").length === 0;
                },
                extension: "jpg|jpeg|png|gif",
                filesize: 2000000
            }
        },
        messages: {
            company_name: {
                required: "Company name is required.",
                minlength: "Company name must be at least 3 characters long."
            },
            address: {
                required: "Address is required."
            },
            city: {
                required: "City is required."
            },
            state: {
                required: "State is required."
            },
            zipcode: {
                required: "Zipcode is required.",
                digits: "Zipcode must be a 6-digit number.",
                minlength: "Zipcode must be exactly 6 digits.",
                maxlength: "Zipcode must be exactly 6 digits."
            },
            phone: {
                required: "Phone number is required.",
                digits: "Phone number must be 10 digits.",
                minlength: "Phone number must be exactly 10 digits.",
                maxlength: "Phone number must be exactly 10 digits."
            },
            email1: {
                required: "Primary email is required.",
                email: "Enter a valid email address."
            },
            email2: {
                email: "Enter a valid email address."
            },
            logo: {
                required: "Company logo is required.",
                extension: "Only JPG, JPEG, PNG, and GIF files are allowed.",
                filesize: "File size must be less than 5MB."
            },
            favicon: {
                required: "Favicon icon is required.",
                extension: "Only JPG, JPEG, PNG, and GIF files are allowed.",
                filesize: "File size must be less than 2MB."
            }
        },
        errorPlacement: function (error, element) {
            error.addClass("text-danger");
            element.closest(".mb-3").append(error);
        },
        submitHandler: function (form) {
            let formData = new FormData(form);

            $.ajax({
                url: "/admin/settings/save",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
                },
                success: function (response) {
                    toastr.success(response.message, "Success", { timeOut: 3000 });
                },
                error: function (xhr) {
                    toastr.error("Something went wrong!", "Error", { timeOut: 3000 });
                }
            });
        }
    });

    $("input[name='logo'], input[name='favicon']").on("change", function() {
        if ($(this).val()) {
            $(this).closest(".mb-3").find("label.error").remove();
        }
    });

    $.validator.addMethod("filesize", function (value, element, param) {
        if (element.files.length === 0) {
            return true;
        }
        return element.files[0].size <= param;
    }, "File size is too large.");

    $.validator.addMethod("extension", function (value, element, param) {
        if (element.files.length === 0) {
            return true;
        }
        return new RegExp(".(" + param + ")$", "i").test(value);
    }, "Please enter a value with a valid extension.");
});

