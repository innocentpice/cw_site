<header class="text-center">
    <h1>Supplier Management.</h1>
</header>
<div style="margin-top:4rem;">
    <div class="table-responsive">
      <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>SUP_ABNAME</th>
              <th>SUP_NAME</th>
              <th>SUP_ADDRESS</th>
              <th>SUP_TEL</th>
              <th>SUP_EMAIL</th>
              <th colspan="2">SETTING</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($this->supplier as $supplier){?>
            <tr>
                <td><?=$supplier['NO']?></td>
                <td><?=$supplier['SUP_ABNAME']?></td>
                <td><?=$supplier['SUP_NAME']?></td>
                <td><?=$supplier['SUP_ADDRESS']?></td>
                <td><?=$supplier['SUP_TEL']?></td>
                <td><?=$supplier['SUP_EMAIL']?></td>
                <td><button class="btn btn-sm btn-warning"><i class="fa fa-cog fa-sm"></i></button></td>
                <td><button class="btn btn-sm btn-danger" onClick="DELETESUP_POPUP('<?=$supplier['SUP_ABNAME']?>');" data-toggle="modal" data-target="#DELETESUP"><i class="fa fa-trash-o fa-sm"></i></button></td>
            </tr>
            <?php }?>
          </tbody>
    </table>
    </div>
</div>


<div id="DELETESUP" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">คุณต้องการลบข้อมูลใช่หรือไม่ ?</h4>
      </div>
      <div class="modal-body">
        <p>กรุณากรอกหมายเลข ตัวย่อ บริษัท เพื่อยืนยัน [ <span id="DELETE_Q"></span> ]</p>
        <input id="DELETE_Ans" class="form-control" type="text" name="SUP_ABNAME" placeholder="Ex. CWG"/>&nbsp;
      </div>
      <div class="modal-footer">
        <button type="submit" name="DEL_SUP" value="true" id="DELETE_ENTER" disabled="true" class="btn btn-danger btn-md disabled">ยืนยัน</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php if(isset($this->msgDelete)){ ?>
<div id="DELETE_MSG" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="alert alert-info alert-dismissable">
        <a href="#" class="close" data-dismiss="modal" aria-label="close">&times;</a>
        <strong>Info!</strong> ทำการลบข้อมูลสำเร็จ.
    </div>
  </div>
</div>
<?php } ?>