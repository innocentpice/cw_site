<?php 
    $data = $this->supplier[0];
?>
<header class="text-center" style="margin-bottom:2rem;">
    <h1>Supplier Management.</h1>
</header>
<div>
    <form id="FORM_EDITSUP" action="" method="post">
        <div class="form-group col-xs-12 col-md-9 ">
            <label for="SUP_NAME">Company Name</label>
            <input type="text" name="SUP_NAME" class="form-control" value="<?=$data['SUP_NAME']?>" placeholder="Company Name">
        </div>
        <div class="form-group col-xs-12 col-md-3">
            <label for="SUP_ABNAME">Abb.</label>
            <div class="<?php if($this->msgUpdate == 'Available'){?> has-error has-feedback <?php } ?>">
                <input type="text" name="SUP_ABNAME" class="form-control" value="<?=$data['SUP_ABNAME']?>" placeholder="Abb.">
                <?php if($this->msgUpdate == 'Available'){?>
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">มีชื่อนี้อยู่ในระบบแล้ว</span>
                <?php }?>
            </div>
        </div>
        <div class="form-group col-xs-12 col-md-12">
            <label for="SUP_ADDRESS">Company Address.</label>
            <textarea name="SUP_ADDRESS" cols="30" rows="10" class="form-control col-xs-12 col-md-12" placeholder=Company "Address."><?=$data['SUP_ADDRESS']?></textarea>
        </div>
        <div class="form-group col-xs-12 col-md-9">
            <label for="SUP_EMAIL">Email</label>
            <input type="text" name="SUP_EMAIL" class="form-control" value="<?=$data['SUP_EMAIL']?>" placeholder="Email">
        </div>
        <div class="form-group col-xs-12 col-md-3">
            <label for="SUP_TEL">Tel.</label>
            <input type="text" name="SUP_TEL" class="form-control" value="<?=$data['SUP_TEL']?>" placeholder="Tel.">
            <input type="hidden" name="EDITSUP" value="true" class="hidden">
        </div>
        <div class="form-group col-xs-12 col-md-12" style="margin-top:3rem;">
            <button type="submit" class="btn btn-lg btn-primary btn-block">
                <i class="fa fa-save fa-md"></i>
                <span>SAVE</span>
            </button>
        </div>
    </form>
</div>


<?php if($this->msgUpdate == 'Success'){ ?>
<div id="CREATE_MSG" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="alert alert-info alert-dismissable">
            <a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>
            <strong>Info!</strong> บันทึกข้อมูลเรียบร้อย
        </div>
    </div>
</div>
<?php } ?>