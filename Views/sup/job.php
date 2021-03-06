<header class="text-center" style="margin-bottom:2rem;">
    <h1>MY JOB</h1>
</header>
<?php
    
    echo '<div class="table-responsive"><table class="table table-striped table-hover table-bordered">';
    $thead_title = ['NO.','JOB NO.','NAME','Detail','Quantity','START','DEADLINE'];
    $thead_status[0] = 'STATUS => Order Received';
    $thead_status[1] = 'STATUS => Processing';
    $thead_status[2] = 'STATUS => Shipping';
    for($j=0;$j<=2;$j++){
    echo '<thead class="bg-info">';
    echo '<tr><th class="bg-primary text-center" colspan="12">' 
    . $thead_status[$j] 
    . '</th></tr>';
    echo '<tr>';
    for($i=1;$i<7;$i++){
        echo '<th>' . $thead_title["$i"] . '</th>';
    }
    echo '<th>SUPPILER</th><th>STAFF</th>';
    echo '<th colspan="3">CUSTOM</th>';
    echo '</tr></thead>';
    echo '<tbody>';
    if(empty($this->list_data[$j])){
      echo '<tr><td class="text-center bg-success" colspan="9">ไม่มีข้อมูล</td></tr>';
    }
    foreach($this->list_data[$j] as $data){
        echo '<tr>';
        for($i=1;$i<8;$i++){
            if($i==4){
              echo '<td>' . $data[$i] . '&nbsp;' . $data[++$i] . '</td>';
            }else if($i==3){
              echo '<td>';
              if(strlen($data[$i]) > 50){
                echo substr_replace($data[$i], ' ...', 50);
              }else{
                echo $data[$i];
              }
              echo '</td>';
            }else{
              if($i==0){
                echo '<td scope="row">';
              }else{
                echo '<td>';
              }
              echo $data[$i] . '</td>';
            }
        }
        echo '<td class="text-center">';
        echo $data['SUP_NAME']== '' ? '-' :$data['SUP_NAME'];
        echo '</td>';
        echo '<td class="text-center">';
        echo $data['STAFF_NAME']=='' ? '-' :$data['STAFF_NAME'];
        echo '</td>';
        echo '<td class="text-center">'.
            '<a href="'.URL_Path.'/sup/job/'.$data[1].'" class="btn btn-info btn-md">'.
            '<i class="glyphicon glyphicon-zoom-in"></i></a></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    }
    echo '</table></div>';
?>

<div id="DELETETASK" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">คุณต้องการลบข้อมูลใช่หรือไม่ ?</h4>
      </div>
      <div class="modal-body">
        <p>กรุณากรอกหมายเลย JOB NO. เพื่อยืนยัน [ <span id="DELETE_Q"></span> ]</p>
        <input id="DELETE_Ans" class="form-control" type="text" name="JOB_NO" placeholder="Ex. J-00000"/>&nbsp;
      </div>
      <div class="modal-footer">
        <button type="submit" name="DELETETASK" value="true" id="DELETE_ENTER" disabled="true" class="btn btn-danger btn-md disabled">ยืนยัน</button>
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
