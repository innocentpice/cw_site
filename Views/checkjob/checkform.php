<div class="container clearfix">
<div class="col-xs-8 col-xs-offset-2 clearfix" style="margin-top:20%;">
    <header><h1 class="text-center">ระบบตรวจสอบสถานะสินค้า</h1></header><hr/>
    <form class="form-horizontal" method="POST">
        <?php if(isset($this->tStatus)){?>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2 alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>ขออภัย !</strong> ไม่มีหมายเลขที่ท่านค้นหา
                </div>
            </dib>
        <?php }?>
        <div class="form-group">
            <label class="control-label col-sm-2" for="jobNo">JOB NO:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jobNo" name="JobNo" placeholder="Ex. J-0000000">
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="col-xs-5 btn btn-default btn-lg" name="auth" value="true">Search</button>
                <a href="<?=URL_Path?>" class="col-xs-offset-2 col-xs-5 btn btn-default btn-lg">CANCEL</a>
            </div>
         </div>
    </form>
</div>
</div>