<div class="container" style="padding-top:10rem;">
    <h1 class="text-center">ตัวอย่างสินค้า</h1><hr>
    <div class="text-center">
        <?php $i=1;while($i<=31){?>
        <div class="col-xs-12 col-sm-6 col-md-4 text-center" style="padding:1rem;">
            <div class="thumbnail" style="padding:1rem;">
                <img src="<?=URL_Public?>/img/product/<?=$i?>.jpg" style="width:400px;height:300px;">
            </div>
        </div>
        <?php $i++;}?>
    </div>
</div>