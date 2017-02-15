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
    $('#frm_username>input').change(function(e){
        var username = $(e.currentTarget).val();
        var url = window.URL_Path+"/api/sup_username/"+username;
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json'
        }).done((res)=>{
            if(res){
                $('#frm_username').removeClass('has-error has-feedback');
                $('#frm_username').addClass('has-success has-feedback');
                $('#frm_username>span').html(
                    'สามารถใช้ Username นี้ได้ '+
                    '<span class="glyphicon glyphicon-ok"><span>'
                );
            }else{
                $('#frm_username').removeClass('has-success has-feedback');
                $('#frm_username').addClass('has-error has-feedback');
                $('#frm_username>span').html(
                    'Username ซ้ำ! ไม่สามารถใช้ได้ '+
                    '<span class="glyphicon glyphicon-remove"><span>'
                );
            }
        });
        e.preventDefault();
    });
});
