<header class="text-center" style="margin-bottom:2rem;">
    <h1>Supplier Management.</h1>
</header>
<div>
    <form id="FORM_ADDSUP" action="" method="post">
        <div class="form-group col-xs-12 col-md-9 ">
            <label for="SUP_NAME">Company Name</label>
            <input type="text" name="SUP_NAME" class="form-control" placeholder="Company Name">
        </div>
        <div class="form-group col-xs-12 col-md-3">
            <label for="SUP_ABNAME">Abb.</label>
            <input type="text" name="SUP_ABNAME" class="form-control" placeholder="Abb.">
        </div>
        <div class="form-group col-xs-12 col-md-12">
            <label for="SUP_ADDRESS">Company Address.</label>
            <textarea name="SUP_ADDRESS" cols="30" rows="10" class="form-control col-xs-12 col-md-12" placeholder=Company "Address."></textarea>
        </div>
        <div class="form-group col-xs-12 col-md-9">
            <label for="SUP_EMAIL">Email</label>
            <input type="text" name="SUP_EMAIL" class="form-control" placeholder="Email">
        </div>
        <div class="form-group col-xs-12 col-md-3">
            <label for="SUP_TEL">Tel.</label>
            <input type="text" name="SUP_TEL" class="form-control" placeholder="Tel.">
            <input type="hidden" name="ADDSUP" value="true" class="hidden">
        </div>
        <div class="form-group col-xs-12 col-md-12" style="margin-top:3rem;">
            <button type="submit" value="ADDSUP" class="btn btn-lg btn-primary btn-block">
                <i class="fa fa-plus-square fa-md"></i>
                <span>เพิ่ม</span>
            </button>
        </div>
    </form>
</div>


<?php if($this->msgCreate == 'Success'){ ?>
<div id="CREATE_MSG" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="alert alert-info alert-dismissable">
            <a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>
            <strong>Info!</strong> เพิ่มข้อมูลสำเร็จ.
        </div>
    </div>
</div>
<?php } ?>