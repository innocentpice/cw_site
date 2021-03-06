<header class="text-center" style="margin-bottom:2rem;">
    <h1>JOB Management.</h1>
</header>
<div>
    <form class="form-horizontal" method="post" onSubmit="if(!confirm('ต้องการบันทึกข้อมูลหรือไม่ ?')){return false;}">
        <div class="form-group">
            <label class="control-label col-sm-2" for="JOB_NO">JOB NO.</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="JOB_NO" name="JOB_NO" placeholder="Ex. J-0000000" value="<?=$this->JobData['JOB_NO']?>" readonly="true">
            </div>
            <label class="control-label col-sm-2" for="JOB_DEAD">กำหนดเวลางาน</label>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="JOB_DEAD" name="JOB_DEAD" value="<?=$this->JobData['DEADLINE_TIME']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="JOB_NAME">ชื่อลูกค้า</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="JOB_NAME" name="JOB_NAME" placeholder="กรอกชื่อลูกค้า" value="<?=$this->JobData['C_NAME']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="JOB_DES">รายละเอียด</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="JOB_DES" rows="8" name="JOB_DES" placeholder="กรอกรายละเอียดงาน"><?=$this->JobData['DESCRIPTION']?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="JOB_QTY">จำนวน</label>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="JOB_QTY" name="JOB_QTY" placeholder="กรอกจำนวน" value="<?=$this->JobData['QUANTITY']?>">
            </div>
            <label class="control-label col-sm-2" for="JOB_TYPE">หน่วยนับ</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" id="JOB_TYPE" name="JOB_TYPE" placeholder="PC , SET , EA" value="<?=$this->JobData['TYPE']?>">
            </div>
        </div>
        <hr class="hr">
        <div class="form-group">
            <label class="control-label col-sm-2" for="SUP_NO">SUPPLIER :</label>
            <div class="col-sm-5">
                <select class="form-control" id="SUP_NO" name="SUP_NO">
                    <option value="NULL">-</option>
                    <?php foreach($this->SELECT_SUP as $SELECT_SUP){?>
                    <option value="<?=$SELECT_SUP['NO']?>" <?php if($this->JobData['SUP_NO']==$SELECT_SUP['NO']){echo 'selected="selected"';}?>>
                        <?=$SELECT_SUP['SUP_ABNAME']?>
                    </option>
                    <?php }?>
                </select>
            </div>
            <label class="control-label col-sm-2" for="STAFF_NO">STAFF :</label>
            <div class="col-sm-3">
                <!--<input type="text" class="form-control" id="STAFF_NO" name="STAFF_NO" placeholder="STAFF NO." value="<?=$this->JobData['STAFF_NO']?>">-->
                <select class="form-control" id="STAFF_NO" name="STAFF_NO">
                    <option value="NULL">-</option>
                    <?php foreach($this->SELECT_STAFF as $SELECT_STAFF){?>
                    <option value="<?=$SELECT_STAFF['NO']?>" <?php if($this->JobData['STAFF_NO']==$SELECT_STAFF['NO']){echo 'selected="selected"';}?>>
                        <?=$SELECT_STAFF['USERNAME']?>
                    </option>
                    <?php }?>
                </select>
            </div>
        </div>
        <hr class="hr">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="EDITTASK" value="true" class="btn btn-default btn-lg">SAVE</button>
                <a href="<?=URL_Path?>/manager/tasklist" class="btn btn-default btn-lg">CANCEL</a>
            </div>
        </div>
    </form>
</div>

<?php if(isset($this->msgEdit)){ ?>
<div id="EDITE_MSG" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="alert alert-info alert-dismissable">
        <a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>
        <strong>Info!</strong> แก้ไขข้อมูลเรียบร้อย.
    </div>
  </div>
</div>
<?php } ?>