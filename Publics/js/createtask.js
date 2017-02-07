$(document).ready(function(){
    $('#CREATE_MSG').modal("show");
        $('#CREATE_MSG').on('shown.bs.modal', function(){
            setTimeout(function() {
                $('#CREATE_MSG').modal("hide");
            },'1000');
    });
    $("input#JOB_NO").focus();
    $("#createTaskForm").submit((e) =>{
        var target = e.target;
        var data = $( target ).serializeArray();
        for(i=0;i<=5;i++){
            if(data[i].value == '' || data[i].value == undefined){
                var formError = true;
            }
        }
        if(formError == true){
            e.preventDefault();
            alert('กรุณากรอกข้อมูลให้ครบถ้วน');
            return false; 
        }
    });
    
});
