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
      กำหนดการส่งมอบชิ้นงาน
    </h2>
    <div class="steps-timeline">
      <div class="steps-one">
        <img class="steps-img" src="http://placehold.it/50/3498DB/FFFFFF" alt="" />
        <h3 class="steps-name">
          Order Received
        </h3>
        <p class="steps-description">
          <strong><?=$this->task[6]?></strong><br>
          รับคำสั่งซื้อ
        </p>
      </div>

      <div class="steps-two">
        <img class="steps-img" src="http://placehold.it/50/3498DB/FFFFFF" alt="" />
        <h3 class="steps-name">
          Processing
        </h3>
        <p class="steps-description">
          <strong>xxxx-xx-xx</strong><br>
          กำลังผลิตสินค้า
        </p>
      </div>

      <div class="steps-three">
        <img class="steps-img" src="http://placehold.it/50/3498DB/FFFFFF" alt="" />
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
