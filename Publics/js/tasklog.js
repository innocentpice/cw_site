function deletetasklog(NO){
    $('#DELETE_VALUE').val(NO);
    $('#DELETETASK').submit();
}

$(document).ready(function(){
    $('#FORM_ADDLOG').submit((e)=>{
        var target = e.target;
        var data = $( target ).serializeArray();
        if(data[0].value == '' || data[0].value == undefined){
            alert('Please Enter Value.');
            target.getElementsByTagName('input')[0].focus();
            this.false;
        }
    });
    $('.ansPresent').click((e)=>{
        e.preventDefault();
        $('input[name="ADDTASKLOG"]').val((e.target).innerHTML);
    });
});