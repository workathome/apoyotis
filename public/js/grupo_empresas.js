$(document).ready(function() {
    $(".dropdown-item").click(function(event) {
        $('#hitoForm .modal-body .row input[name=idhito]').val(event.target.id);
    });

});
