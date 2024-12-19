$(document).ready(function () {
    $("#submitBtn").click(function (e) {
        const name = $("#name").val();
        const email = $("#email").val();
        const phone = $("#phone").val();
        const message = $("#message").val();

        if (!name || !email || !phone || !message) {
            alert("Please fill in all the fields.");
            e.preventDefault();
        }
    });
});


