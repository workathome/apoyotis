$(document).ready(function() {
    $("#fotoconsultor").fileinput({
        showUpload: false,
        showPreview: false,
        browseLabel: "",
        browseIcon: '<i class="fa fa-folder-open"></i>',
        removeClass: "btn btn-danger",
        removeLabel: "",
        removeIcon: '<i class="fa fa-trash"></i>',
        allowedFileExtensions: ["jpg", "jpeg", "png"],
        msgInvalidFileExtension: "Extension no valida",
        msgValidationError: "Extension no valida"
    });
});
