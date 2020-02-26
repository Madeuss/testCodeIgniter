const BASE_URL = "localhost/testCodeIgniter/";

function clearErrors() {
    $(".has-error").removeClass("has-error");
    $(".help-block").html("");
}

function showError(error_list) {
    clearErrors();

    $.each(error_list, function(id, message) {
        $(id).parent().parent().addClass("has-error");
        $(id).parent().siblings(".alert-danger").html(message);
    })
}

function loadindImg(message="") {
    return "<i class='fa fa-circle-o-notch fa-spin'></i>&nbsp;" + message;
}