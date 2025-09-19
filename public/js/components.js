// ================= INPUT FLOAT LABEL =================
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

// ================= BUTTON =================
function startButtonLoading(button) {
    button.prop("disabled", true).css({
        cursor: "not-allowed",
        backgroundColor: "#005fcc80",
    });

    button.find(".button-text").hide();
    button.find(".button-loader").show();
}

function endButtonLoading(button) {
    button.prop("disabled", false).css({
        cursor: "pointer",
        backgroundColor: "#005fcc",
    });

    button.find(".button-text").show();
    button.find(".button-loader").hide();
}

function buttonShake(button) {
    button.addClass("button-error");

    setTimeout(function () {
        button.removeClass("button-error");
    }, 1000);
}

function inputError(input) {
    input.addClass("input-error");
    input.next().addClass("input-error-label");
    input.next().next().addClass("input-error-icon");

    setTimeout(function () {
        input.removeClass("input-error");
        input.next().removeClass("input-error-label");
        input.next().next().removeClass("input-error-icon");
    }, 2000);
}
