<?php /*
Order NO : <?=$this->task[1]?>
Buyer : <?=$this->task[2]?>
Duration : <?=$this->task[6]?> to <?=$this->task[7]?> 
Description :<textarea readonly="" class="col-xs-12" rows="10"><?=$this->task[3]?></textarea>
Status : <?php if($this->task[8] == 1){}?> // 1=O, 2=P, 3=S
          
Task Log : <?php foreach ($this->taskLog as $taskLog) { ?>
  <?=substr($taskLog['DATE'],0,-3)?><?=$taskLog['DESCRIPTION']?>
<?php }?>

*/?>

<div id="timeline" class="container-fluid">
  <section id="Steps" class="steps-section">
    <h2 class="steps-header">
      <strong>กำหนดการส่งมอบชิ้นงาน</strong>
    </h2>
    <div class="steps-timeline">
      <div class="steps-one complete">
        <div class="steps-img text-center">
          <i class="fa fa-check fa-2x" aria-hidden="true"></i>
        </div>
        <h3 class="steps-name">
          Order Received
        </h3>
        <p class="steps-description">
          <strong><?=$this->task[6]?></strong><br>
          รับคำสั่งซื้อ
        </p>
      </div>

      <div class="steps-two <?php if($this->task[8] == 2){echo 'process';}else if($this->task[8] > 2){echo 'complete';}?>">
        <div class="steps-img text-center">
          <i class="fa fa-check fa-2x" aria-hidden="true"></i>
        </div>
        <h3 class="steps-name">
          Processing
        </h3>
        <p class="steps-description">
          <strong>xxxx-xx-xx</strong><br>
          กำลังผลิตสินค้า
        </p>
      </div>

      <div class="steps-three <?php if($this->task[8] == 3){echo 'process';}else if($this->task[8] > 3){echo 'complete';}?>">
        <div class="steps-img text-center">
          <i class="fa fa-check fa-2x" aria-hidden="true"></i>
        </div>
        <h3 class="steps-name">
          Delivery
        </h3>
        <p class="steps-description">
          <strong><?=$this->task[7]?></strong><br>
          ส่งมอบงาน
        </p>
      </div>
    </div>
  </section>
</div>

<div class="row">
  <div class="container-fluid col-md-6 col-sm-12" style="padding-bottom:3rem;">
  <header class="clearfix text-center" style="padding-bottom:3rem;">
    <h3><strong>รายละเอียดชิ้นงาน</strong></h3>
  </header>
  <div class="col-sm-8 col-sm-offset-2 clearfix">
    <p>
      หมายเลขคำสั่งซื้อ:
      <strong> <?=$this->task[1]?></strong>
    </p>
    <p>
      ผู้สั่งซื้อ:
      <strong> <?=$this->task[2]?></strong>
    </p>
    <p>
      รายละเอียดงาน: 
      <textarea readonly="" class="col-xs-12" rows="10"><?=$this->task[3]?></textarea>
    </p>
  </div>
  </div>
  <div class="container-fluid col-md-6 col-sm-12 t_line" style="padding-bottom:3rem;min-height:50rem;">
    <header class="clearfix text-center" style="padding-bottom:3rem;">
      <h3><strong>สถานะสินค้าบัจจุบัน</strong></h3>
    </header>
    <div class="col-sm-8 col-sm-offset-2 clearfix">
    <ul style="list-style: none;padding:0px;margin:0px;">
    <?php foreach ($this->taskLog as $taskLog) { ?>
      <li class="thumbnail info" style="padding:1rem;border-radius:1rem;">
          <?php
            $time = strtotime($taskLog['DATE']);
            $d = ceil((time() - $time)/60/60/24);
            if($d>0){
              $UPDATE = '<span class="label label-update">UPDATE</span>';
            }else{
              $UPDATE = null;
            }
          ?>
          <p>
            <span class="label label-success"><i class="fa fa-clock-o"></i>&nbsp;<?=date('d M Y h:i',$time)?></span>
            <?=$UPDATE?>
          </p>
          <p>
            <strong style="color:#6C7A89;"><?=$taskLog['DESCRIPTION']?></strong>
          </p>
      </li>
    <?php }?>
    </ul>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="padding-top:3rem;">
  <a href="#checkjob" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Copyright © 2016 - 2017 CWGREAT Co.,Ltd All rights reserved.</p>
</footer>