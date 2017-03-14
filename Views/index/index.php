<div class="header-img">
  <div class="texture">
    <?php $this->render('index/navbar');?>
    <div class="jumbotron text-center">
      <h1>
        CW GREAT COMPANY LIMITED<br>
        <small>Quality is Our Job</small>
      </h1> 
      <p>บริการผลิตชิ้นงานตามแบบทุกชนิด</p> 
      <form action="<?=URL_Path.'/checkjob'?>" method="POST" class="form-inline">
        <div class="input-group">
          <input id="checkstatus_text" type="text" class="form-control" size="50" name="JobNo" placeholder="กรอกรหัสสั่งซื้อ เพื่อตรวจสอบสถานะสินค้า" required>
          <div class="input-group-btn">
            <button id="checkstatus_btn" type="submit" class="btn btn-danger">Check Process</button>
            <a id="checkstatus_help" class="btn btn-success"><i class="fa fa-book fa-sm"></i></a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="news" class="container">
  <h2 class="text-center">ข่าวสารบริษัท</h2>
  <div class="row">
    <?php foreach($this->news as $news){?>
    <div class="col-xs-12 col-sm-6 col-md-3" style="padding:2rem;">
      <div class="thumbnail">
        <img src="<?php if(empty($news['IMG_URL'])){ echo URL_Public.'/img/news/default.jpg';}else{echo $news['IMG_URL'];}?>" style="width:250px;height:125px">
        <div class="caption">
            <div style="height:15rem;">
              <h4 style="height:4rem;"><?php if(strlen($news['HEADER']) > 100){ echo substr_replace($news['HEADER'], ' ...', 100); }else{ echo $news['HEADER']; }?></h4>
              <p><?php if(strlen($news['TITLE']) > 200){ echo substr_replace($news['TITLE'], ' ...', 200); }else{ echo $news['TITLE']; }?></p>
            </div>
            <p class="text-right"><i class="fa fa-clock-o"></i>&nbsp;<?=$news['DATE']?></p>
            <p class="text-right"><a href="<?=URL_Path?>/news/id/<?=$news['ID']?>" class="btn btn-default btn-xs" role="button"><i class="glyphicon glyphicon-click"></i>อ่านเพิ่มเติม</a></p>
        </div>
      </div>
    </div>
    <?php }?>
  </div>
  <div class="row" style="padding-top:2rem;">
    <p class="text-center"><a href="<?=URL_Path?>/news" class="btn btn-primary btn-md">ดูทั้งหมด คลิก..!</a></p>  
  </div>
</div>

<div id="services" class="container-fluid text-center">
  <h2>บริการของเรา</h2>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon logo-small fa-stack fa-lg slideanim">
        <i class="fa fa-cubes fa-stack-2x"></i>
      </span>
      <h4>Built By Order</h4>
      <p>งานผลิตชิ้นงานตามแบบ</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon logo-small fa-stack fa-lg slideanim">
        <i class="fa fa-cog fa-stack-2x fa-fw"></i>
        <i class="fa fa-wrench fa-stack-1x" style="color:red;"></i>
      </span>
      <h4>Fix & Repair</h4>
      <p>งานปรับปรุงซ่อมแซม</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon logo-small fa-stack fa-lg slideanim">
        <i class="fa fa-search fa-stack-2x fa-flip-horizontal"></i>
      </span>
      <h4>Search By Order</h4>
      <p>งานจัดหาอุปกรณ์หรือชิ้นงานตามสั่ง</p>
    </div>
  </div>
</div>

<?php $this->render('index/product');?>

<div id="about" class="container-fluid bg-grey">
  <div class="row text-center">
    <span class="glyphicon glyphicon-globe logo slideanim" style="color:#3498db;"></span>
  </div>
  <div class="container">
    <div class="row" style="margin-top:4rem;">
      <div class="col-xs-12 text-center">
        <h2>บริษัท ซีดับบลิว เกรท จำกัด.<br><small>ผู้นำด้านการผลิตชิ้นงานตามแบบ</small></h2>
        <h4>
          <strong>บริษัท ซีดับบลิว เกรท จำกัด.</strong>
          ตั้งอยู่เลขที่ 29/2 หมู่ 1 ตําบลนาตาขวัญ อําเภอเมือง จังหวัดระยอง 21000 บนเนื้อที่จํานวน 5 ไร่ เป็นบริษัทของคนไทย ก่อตั้งโดย คุณชัยวัฒน์ เอกธันยวงศ์  ในปี พ.ศ. 2550 ทุนจดทะเบียน 2,000,000 บาท </h4><br>
        <h4>
          ให้บริการผลิตชิ้นงานตามแบบทุกชนิด เช่น งานผลิตชิ้นส่วนด้วยเครื่อง CNC ชิ้นส่วนอะไหล่เครื่องจักรกล ชิ้นส่วนรถยนต์และรถมอเตอร์ไซค์ รวมถึง งานกลึง งานกัด งานไส งานปาด งานคว้าน งานมิลลิ่ง งานเจียร งานเจาะรู งานต๊าปเกลียว และงานเชื่อมประกอบ
        </h4>
      </div>
    </div>
  </div>
</div>

<div id="portfolio" class="text-center">
  <h2>My Customer</h2><br>
  <h4>ลูกค้าเรา</h4>
  <div class="row container-fluid text-center">
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="slideanim" src="<?=URL_Public?>/img/customer/sys.png" alt="SYS" style="width:400px;height:200px;">
        <p>
          <strong>SIAM YAMATO STEEL COMPANY LIMITED</strong>
        </p>
        <p>บริษัท เหล็กสยามยามาโตะ จํากัด</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="slideanim" src="<?=URL_Public?>/img/customer/ter.jpg" alt="TOKAI" style="width:400px;height:200px;">
        <p><strong>TOKAI EASTERN RUBBER (THAILAND), LTD.</strong></p>
        <p>โตไก อิสเทิร์น รับเบอร์ (ประเทศไทย) จํากัด</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="slideanim" src="data:image/jpeg;base64,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" alt="SOMBOON" style="width:400px;height:200px;">
        <p><strong>Somboon Advance Technology Public Company Limited</strong></p>
        <p>บริษัท สมบูรณ์ แอ๊ดวานซ์ เทคโนโลยี จำกัด (มหาชน)</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="thumbnail">
        <img class="slideanim" src="<?=URL_Public?>/img/customer/logo-sta.png" alt="SOMBOON" style="width:400px;height:200px;">
        <p><strong>Sri Trang Agro-Industry Public Company Limited</strong></p>
        <p>บริษัท ศรีตรังแอโกรอินดัสทรี จำกัด (มหาชน)</p>
      </div>
    </div>
  </div><br>
  
  <h2>นโยบายผู้บริหาร</h2>
  <div id="myCarousel" class="container-fluid carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>
          <strong>" สร้างความมั่นใจให้ลูกค้า "</strong><br>
          <span style="font-style:normal;">เพื่อให้มั่นใจว่า จะได้รับสินค้าที่มีคุณภาพ ราคายุติธรรม ส่งมอบสินค้าตรงเวลา</span>
        </h4>
      </div>
      <div class="item">
        <h4>
          <strong>" มีมาตรฐานการผลิต "</strong><br>
          <span style="font-style:normal;">กําหนดมาตรฐานการผลิตที่มีระบบควบคุมคุณภาพ และสามารถตรวจสอบได้ทุกขั้นตอน</span>
        </h4>
      </div>
      <div class="item">
        <h4>
          <strong>" พัฒนางานบริการอย่างต่อเนื่อง "</strong><br>
          <span style="font-style:normal;">เพื่อตอบสนองให้ตรงกับความต้องการ และความพึงพอใจของลูกค้า</span>
        </h4>
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

<div id="contact" class="container-fluid bg-grey" style="padding-top:5rem;">
  <h2 class="text-center">
    สำนักงานใหญ่<br>
    <small>บริษัท ซีดับบลิว เกรท จำกัด.</small>
  </h2>
  <div class="row slideanim">
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
      <span class="glyphicon glyphicon-phone"></span> Mobile: 081-430-9217, 086-978-8038
    </p>
    <p><i class="fa fa-fax"></i> Fax: 038-948-341</p>
    <p><i class="fa"><img src="<?=URL_Public?>/img/icon/LINE_ICON.png" style="width:25px;height:25px;"></i> LINE ID: 0814309217</p>
    <p><i class="fa fa-facebook-square"></i> Facebook: <a href="http://www.facebook.com/cwgreat" target="blank" style="text-decoration:none;">www.facebook.com/cwgreat</a></p>
    <p>
      <span class="glyphicon glyphicon-envelope"></span> 
      <a href="mailto:sales@cwgreat.co.th" style="text-decoration:none;">sales@cwgreat.co.th</a>,&nbsp;
      <a href="mailto:chaiwat@cwgreat.co.th" style="text-decoration:none;">chaiwat@cwgreat.co.th</a>
    </p>
  </div>
</div>

<?php $this->render('index/index_footer');?>