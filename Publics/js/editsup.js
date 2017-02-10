$(document).ready(function(){
    $('#CREATE_MSG').modal("show");
        $('#CREATE_MSG').on('shown.bs.modal', function(){
            setTimeout(function() {
                $('#CREATE_MSG').modal("hide");
            },'1000');
    });
    $("input[name=SUP_NAME]").focus();
    $(".has-error>input").focus();
    $("#FORM_ADDSUP").submit((e) =>{
        var target = e.target;
        var data = $( target ).serializeArray();
        for(i=5;i>=0;i--){
            if(data[i].value == '' || data[i].value == undefined){
                var formError = true;
                var input = $(target).children('div')[i]
                if(i==2){
                    $(input).children('textarea').focus();
                }else{
                    $(input).children('input').focus();
                }
            }
        }
        if(formError == true){
            e.preventDefault();
            alert('กรุณากรอกข้อมูลให้ครบถ้วน');
            return false; 
        }
    });
});
