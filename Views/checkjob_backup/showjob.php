<div class="header-img">
  <div class="texture">
    <div class="ui alternate stripe vertical segment">
      <div class="ui center aligned grid container">
        <div class="column">
          <h1 class="ui inverted header">
            <u>ระบบตรวจสอบสถานะสินค้า</u>
          </h1>
          <form class="ui form" method="post">
            <div class="field">
              <div class="ui large input">
                <input type="text" name="JobNo" maxlength="9" placeholder="( J-000000 )" value="<?=$_POST['JobNo']?>" onFocus="$(this).val('')">
              </div>
            </div>
            <div class="field">
              <div class="ui">
                <button type="submit" value="Subscribe" class="ui large secondary submit inverted button">
                    <i class="icon search"></i> ค้นหา
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>

<div class="container">
  <h4 class="ui horizontal divider header">
    <i class="info icon"></i>
    info
  </h4>
  
  <div class="col-xs-12 col-sm-4">
    Order NO : <?=$this->task[1]?>
  </div>
  <div class="col-xs-12 col-sm-4">
    <i class="user icon"></i>
    Buyer : <?=$this->task[2]?>
  </div>
  <div class="col-xs-12 col-sm-4">
    <i class="calendar icon"></i>
    Duration : <?=$this->task[6]?> to <?=$this->task[7]?> 
  </div>
  <div class="col-xs-12">
    <br/>
    <h4 class="ui horizontal divider header">
      <i class="tag icon"></i>
      Description
    </h4>
    <textarea readonly="" class="col-xs-12" rows="10"><?=$this->task[3]?></textarea>
  </div>
  <div class="col-xs-12">
    <br/>
    <h4 class="ui horizontal divider header">
      <i class="bar chart icon"></i>
      Status
    </h4>
    <div class="col-xs-12 ui center aligned segment">
      <div class="ui tablet stackable steps">
        <div class="<?php if($this->task[8] == 1){?>active <?php }?>step">
          <i class="cart icon"></i>
          <div class="content">
            <div class="title">Order Received</div>
            <div class="description">ขั้นตอนการสั่งซื้อ</div>
          </div>
        </div>
        <div class="<?php if($this->task[8] == 1){?>disabled <?php }?><?php if($this->task[8] == 2){?>active <?php }?>step">
          <i class="wrench icon"></i>
          <div class="content">
            <div class="title">Processing</div>
            <div class="description">ขั้นตอนการผลิต</div>
          </div>
        </div>
        <div class="<?php if($this->task[8] < 3){?>disabled <?php }?><?php if($this->task[8] == 3){?>active <?php }?>step">
          <i class="truck circle icon"></i>
          <div class="content">
            <div class="title">Shipping</div>
            <div class="description">ขั้นตอนการจัดส่ง</div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-xs-12 ui segment">
      <div class="ui relaxed divided list">
        <?php foreach ($this->taskLog as $taskLog) { ?>
        <div class="item">
          <i class="large checkmark middle aligned icon"></i>
          <div class="content">
            <a class="header"><?=substr($taskLog['DATE'],0,-3)?> <i class="time icon"></i></a>
            <div class="description"><?=$taskLog['DESCRIPTION']?></div>
          </div>
        </div>
        
        <?php }?>
      </div>
    </div>
    
  </div>
</div>
