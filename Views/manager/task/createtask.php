<header class="text-center" style="margin-bottom:2rem;">
    <h1>JOB Management.</h1>
</header>
<div>
    <form id="createTaskForm" name="createTaskForm" class="form-horizontal" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="JOB_NO">JOB NO.</label>
            <div class="col-sm-5 <?php if($this->msgCreate == 'Available'){?> has-error has-feedback <?php } ?>">
                <input type="text" class="form-control" id="JOB_NO" name="JOB_NO" placeholder="Ex. J-0000000" value="<?=$this->DataCreate[0]?>">
                <?php if($this->msgCreate == 'Available'){?>
                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                <span class="help-block">มีหมายเลขนี้อยู่ในระบบแล้ว</span>
                <?php } ?>
            </div>
            <label class="control-label col-sm-2" for="JOB_DEAD">กำหนดเวลางาน</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="JOB_DEAD" name="JOB_DEAD" value="<?=$this->DataCreate[5]?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="JOB_NAME">ชื่อลูกค้า</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="JOB_NAME" name="JOB_NAME" placeholder="กรอกชื่อลูกค้า" value="<?=$this->DataCreate[1]?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="JOB_DES">รายละเอียด</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="JOB_DES" rows="8" name="JOB_DES" placeholder="กรอกรายละเอียดงาน"><?=$this->DataCreate[2]?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="JOB_QTY">จำนวน</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="JOB_QTY" name="JOB_QTY" placeholder="กรอกจำนวน" value="<?=$this->DataCreate[3]?>">
            </div>
            <label class="control-label col-sm-2" for="JOB_TYPE">หน่วยนับ</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="JOB_TYPE" name="JOB_TYPE" placeholder="PC , SET , EA" value="<?=$this->DataCreate[4]?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="CREATE" value="true" class="btn btn-default btn-lg">เพิ่ม</button>
            </div>
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
