$(document).on("click", ".toggle-password", function () {
    let inputid = $(this).prevAll().eq(1).attr("id");
    let input = $("#" + inputid);

    if (input.attr("type") === "password") {
        input.attr("type", "text");
        $(this).removeClass("fa-eye-slash").addClass("fa-eye");
    } else if (input.attr("type") === "text") {
        input.attr("type", "password");
        $(this).removeClass("fa-eye").addClass("fa-eye-slash");
    }
});
