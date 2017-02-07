$(document).ready(function(){
    $('#EDITE_MSG').modal("show");
    $('#EDITE_MSG').on('shown.bs.modal', function(){
        setTimeout(function() {
            $('#EDITE_MSG').modal("hide");
        },'1000');
    });
});