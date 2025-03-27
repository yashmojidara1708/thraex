$(document).ready(function () {

    fetch();

    function fetch() {
        $(".contact_usTabl").DataTable({
            searching: true,
            paging: true,
            pageLength: 10,
            processing: false,
            serverSide: true,
            ajax: {
                url: "/admin/contact_us/fetch",
                type: "GET"
            },
            columns: [
                { data: "id", name: "id" },
                { data: "name", name: "name" },
                { data: "email", name: "email" },
                { data: "phone", name: "phone" },
                { data: "subject", name: "subject" },
                { data: "message", name: "message" }
            ]
        });
    }
});
