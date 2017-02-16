<div id="checkjob" class="header-img">
  <div class="texture">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="<?=URL_Path?>/#home">CWG</a>
        </div>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=URL_Path?>/#services">บริการของเรา</a></li>
            <li><a href="<?=URL_Path?>/#about">เกี่ยวกับบริษัท</a></li>
            <li><a href="<?=URL_Path?>/#portfolio">ผลงานของเรา</a></li>
            <li><a href="<?=URL_Path?>/#contact">ติดต่อเรา</a></li>
          </ul>
        </div>
      </div>
    </nav>
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
  </div>
</div>
