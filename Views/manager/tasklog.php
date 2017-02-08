<div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-12 col-md-6 inline">
                    ORDER NO. : <?=$this->taskID?>
                </div>
                <div class="col-xs-7 col-md-4 inline">
                    STATUS : 
                    <?php 
                        if($this->taskStatus == 1){
                            $S1 = 'disabled';
                        }else if($this->taskStatus == 2){
                            $S2 = 'disabled';
                        }else if($this->taskStatus == 3){
                            $S3 = 'disabled';
                        }
                    ?>
                    <a href="<?=URL_Path.'/manager/tasklog/?JOB_NO='.$this->taskID?>&CHANGESTATUS=1" class="btn btn-sm btn-default <?=$S1?>">O</a>
                    <a href="<?=URL_Path.'/manager/tasklog/?JOB_NO='.$this->taskID?>&CHANGESTATUS=2" class="btn btn-sm btn-default <?=$S2?>">P</a>
                    <a href="<?=URL_Path.'/manager/tasklog/?JOB_NO='.$this->taskID?>&CHANGESTATUS=3" class="btn btn-sm btn-default <?=$S3?>">S</a>
                </div>
                <div class="col-xs-5 col-md-2 inline text-right">
                    <button role="button" data-toggle="collapse" href="#ADDTASKLOG" aria-expanded="false" aria-controls="ADDTASKLOG" 
                    class="btn btn-md btn-default"><i class="glyphicon glyphicon-plus"></i> ADDLOG</button>
                </div>
            </div>
        </div>
        <div class="panel-body collapse" id="ADDTASKLOG">
            <div class="well">
                <form class="form-inline" method="post" id="FORM_ADDLOG">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></div>
                      <input type="text" class="form-control" name="ADDTASKLOG" placeholder="กรอกรายละเอียด">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> ADD</button>
                  <input type="hidden" class="hidden" name="STATUS" value="<?=$this->taskStatus?>">
                </form>
                <div class="clearfix"></div>
                <div><h3>คำที่ใช้บ่อย : </h3>
                <?php foreach($this->ansTask as $ans){ ?><button class="btn btn-xs tag label label-info ansPresent" style="padding:3px;margin-right:3px;"><?=$ans[0]?></button><?php }?>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th># DATE_TIME</th>
                        <th>DESCRIPTION</th>
                        <th>STATUS => Order Received</th>
                        <th class="text-right">
                            <a role="button" data-toggle="collapse" data-parent="#LogOne" href="#LogOne" aria-expanded="true" aria-controls="LogOne">
                              <i class="glyphicon glyphicon-menu-hamburger"></i>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody id="LogOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <?php foreach($this->taskLog[0] as $taskLog){ ?>
                    <tr>
                        <th scope="row"><?=substr($taskLog['DATE'],0,-3)?></th>
                        <td colspan="2"><?=$taskLog['DESCRIPTION']?></td>
                        <td class="text-right"><a href="#" class="btn btn-sm btn-danger" onClick="deletetasklog(<?=$taskLog['NO']?>);"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <thead>
                    <tr>
                        <th># DATE_TIME</th>
                        <th>DESCRIPTION</th>
                        <th>STATUS => Processing</th>
                        <th class="text-right">
                            <a role="button" data-toggle="collapse" data-parent="#LogTwo" href="#LogTwo" aria-expanded="true" aria-controls="LogTwo">
                              <i class="glyphicon glyphicon-menu-hamburger"></i>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody id="LogTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                    <?php foreach($this->taskLog[1] as $taskLog){ ?>
                    <tr>
                        <th scope="row"><?=substr($taskLog['DATE'],0,-3)?></th>
                        <td colspan="2"><?=$taskLog['DESCRIPTION']?></td>
                        <td class="text-right"><a href="#" class="btn btn-sm btn-danger" onClick="deletetasklog(<?=$taskLog['NO']?>);"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                <thead>
                    <tr>
                        <th># DATE_TIME</th>
                        <th>DESCRIPTION</th>
                        <th>STATUS => Shipping</th>
                        <th class="text-right">
                            <a role="button" data-toggle="collapse" data-parent="#LogThree" href="#LogThree" aria-expanded="true" aria-controls="LogThree">
                              <i class="glyphicon glyphicon-menu-hamburger"></i>
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody id="LogThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                    <?php foreach($this->taskLog[2] as $taskLog){ ?>
                    <tr>
                        <th scope="row"><?=substr($taskLog['DATE'],0,-3)?></th>
                        <td colspan="2"><?=$taskLog['DESCRIPTION']?></td>
                        <td class="text-right"><a href="#" class="btn btn-sm btn-danger" onClick="deletetasklog(<?=$taskLog['NO']?>);"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>


<div class="hidden">
    <form id="DELETETASK" method="post" onSubmit="return confirm('คุณต้องการลบใช่หรือไม่ ?')">
        <input type="number" id="DELETE_VALUE" name="DELETETASK">
    </form>    
</div>