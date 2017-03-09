<?php
    echo '<script>';
    function randomGen($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }
    $img = randomGen(1,101,16);
    echo 'window.productImg = {};';for($i=1;$i<=16;$i++){
?>
    window.productImg[<?=$i-1?>] = {};
    window.productImg[<?=$i-1?>].src = "<?=URL_Public.'/img/product/'.$img[$i-1].'.jpg'?>";
    
<?php }echo '</script>';?>

<h3 class="text-center">ตัวอย่างชิ้นงาน</h3>
<div class="row text-center"><a href="<?=URL_Path?>/product/" class="btn btn-md btn-primary">ดูเพิ่มเติม คลิก..!</a></div>
<div id="product" class="container-fluid carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol id="productList-ctrl" class="carousel-indicators">
        
    </ol>

    <!-- Wrapper for slides -->
    <div id="productList-img" class="carousel-inner" role="listbox">
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#product" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#product" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>