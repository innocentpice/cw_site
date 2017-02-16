<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_nav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#home">CWG</a>
    </div>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#services">บริการของเรา</a></li>
        <li><a href="#about">เกี่ยวกับบริษัท</a></li>
        <li><a href="#portfolio">ผลงานของเรา</a></li>
        <li><a href="#contact">ติดต่อเรา</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>CWGreat Co.,Ltd</h1> 
  <p>รับผลิตชิ้นงานตามแบบ</p> 
  <form action="<?=URL_Path.'/checkjob'?>" method="POST" class="form-inline">
    <div class="input-group">
      <input type="text" class="form-control" size="50" name="JobNo" placeholder="กรอกรหัสสั่งซื้อ เพื่อตรวจสอบสถานะสินค้า" required>
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger">Check Process</button>
      </div>
    </div>
  </form>
</div>


<div id="services" class="container-fluid text-center">
  <h2>บริการของเรา</h2>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon logo-small fa-stack fa-lg ">
        <i class="fa fa-cubes fa-stack-2x"></i>
      </span>
      <h4>Built By Order</h4>
      <p>งานผลิตชิ้นงานตามแบบ</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon logo-small fa-stack fa-lg ">
        <i class="fa fa-cog fa-stack-2x fa-fw"></i>
        <i class="fa fa-wrench fa-stack-1x" style="color:red;"></i>
      </span>
      <h4>Fix & Repair</h4>
      <p>งานปรับปรุงซ่อมแซม</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon logo-small fa-stack fa-lg ">
        <i class="fa fa-search fa-stack-2x fa-flip-horizontal"></i>
      </span>
      <h4>Search By Order</h4>
      <p>งานจัดหาอุปกรณ์หรือชิ้นงานตามสั่ง</p>
    </div>
  </div>
</div>

<div id="about" class="container-fluid bg-grey">
  <div class="row text-center">
    <span class="glyphicon glyphicon-globe logo slideanim"></span>
  </div>
  <div class="row" style="margin-top:4rem;">
    <div class="col-md-6 text-center slideanim">
      <h2>บริษัท ซีดับบลิวเกรซ จำกัด.<br><small>ผู้นำด้านการผลิตชิ้นงานตามแบบ</small></h2>
      <h4><strong>Info:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="col-md-6 text-center slideanim">
      <h2>ประวัติและความเป็นมาของบริษัท<br><small>เรามุ่งมันพัฒนาตั้งแต่อดีตถึงบัจจุบัน</small></h2>
      <h4><strong>Info:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<div id="portfolio" class="container-fluid text-center">
  <h2>ลูกค้าของเรา</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br>
  
  <h2>คำพูดจากลูกค้า</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div id="contact" class="container-fluid bg-grey slideanim">
  <h2 class="text-center">
    สำนักงานใหญ่<br>
    <small>บริษัท ซีดับบลิวเกรซ จำกัด.</small>
  </h2>
  <div class="row">
      <div id="googleMap" style="height:400px;width:100%;"></div>
  </div>
  <div class="row text-center" style="margin-top:2rem;">
    <p>
      เลขที่ 29/2 หมู่ 1 ต.นาตาขวัญ อ.เมืองระยอง จ.ระยอง 21000<br>
      29/2 MOO 1 Natakhwan Muangrayong Rayong, 21000
    </p>
    <p><span class="glyphicon glyphicon-map-marker"></span> Rayong, TH</p>
    <p>
      <span class="glyphicon glyphicon-earphone"></span> Tel: 038-948-340 , 
      <span class="glyphicon glyphicon-phone"></span> Mobile: 081-430-9217
    </p>
    <p><i class="fa fa-fax"></i> Fax: 038948341</p>
    <p><span class="glyphicon glyphicon-envelope"></span> chiwat@mmps.co.th , chaiwat1977@gmail.com</p>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#home" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright © 2016 - 2017 CWGREAT Co.,Ltd All rights reserved.</p>
</footer>