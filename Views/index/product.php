<?php
    require_once './.faker/src/autoload.php';
    $faker = Faker\Factory::create();
    echo '<script>';echo 'window.productImg = {};';for($i=0;($i+1)<=16;$i++){
?>
    window.productImg[<?=$i?>] = {};
    window.productImg[<?=$i?>].src = "<?=$faker->imageUrl(200, 200, 'technics');?>";
<?php }echo '</script>';?>

<h3 class="text-center">ตัวอย่างชิ้นงาน</h3>
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