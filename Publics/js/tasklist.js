function DELETETASK_POPUP(job_no){
    $('#DELETE_Ans').removeAttr('disabled');
    $('#DELETE_Ans').val('');
    $('#DELETE_Q').html(job_no);
}

$(document).ready(function(){
    $('#DELETE_MSG').modal("show");
    $('#DELETE_MSG').on('shown.bs.modal', function(){
        setTimeout(function() {
            $('#DELETE_MSG').modal("hide");
        },'1000');
    });
    $('#DELETE_Ans').keypress(function(){
        setTimeout(function(){
            var ANS = $('#DELETE_Ans').val();
            var QUEST = $('#DELETE_Q').html();
            if(ANS == QUEST){
                $('#DELETE_ENTER').removeClass('disabled');
                $('#DELETE_ENTER').removeAttr('disabled');
                $('#DELETE_Ans').attr('disabled',true);
            }else{
                $('#DELETE_ENTER').addClass('disabled');
                $('#DELETE_ENTER').attr('disabled');
                $('#DELETE_Ans').removeAttr('disabled');
            }
        },'500')
    });
    $('#DELETE_ENTER').click(function(){
        $('#DELETE_Ans').removeAttr('disabled');
    });
});