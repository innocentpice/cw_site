<div class="jumbotron">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 text-center">
      <h1>CWGreat Co.,Ltd</h1> 
      <p>ระบบตรวจเช็คสถานะสินค้า</p>
      <form action="<?=URL_Path.'/checkjob'?>" method="POST" class="form-inline">
        <div class="input-group">
          <input type="text" class="form-control" size="50" name="JobNo" value="<?=$_POST['JobNo']?>" onFocus="window.JobNo=$(this).val();$(this).val('')" onBlur="if($(this).val()==''){$(this).val(window.JobNo)}" placeholder="กรอกรหัสสั่งซื้อ เพื่อตรวจสอบสถานะสินค้า" required>
          <div class="input-group-btn">
            <button type="submit" class="btn btn-danger">Check Process</button>
            <a href="<?=URL_Path?>" class="btn btn-primary"><i class="fa fa-home"></i></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
