$(document).ready(function () {

    $("#loginForm").validate({
        rules: {
            email: {
                required: true,
                email: true,
            },
            password: {
                required: true,
            }
        },
        messages: {
            email: {
                required: "Please enter an email.",
                email: "Please enter a valid email address.",
            },
            password: {
                required: "Please enter a password.",
            }
        },
        errorPlacement: function (error, element) {
            error.addClass("text-danger");
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            let formData = new FormData(form);

            $.ajax({
                url: "/admin/login",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                header: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.success) {
                        localStorage.setItem("user", JSON.stringify(response.user));
                        sessionStorage.setItem("user", JSON.stringify(response.user));
                        // toastr.success(response.message, "Success", { timeOut: 3000 });
                        window.location.href = response.redirect;
                    } else {
                        $("#errorMessage").text(response.message).removeClass("hidden");
                    }
                },
            });
        }
    })
});
