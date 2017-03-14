<?php $news = $this->News;?>
<?php $this->render('index/navbar');?>

<div class="container" style="margin-top:5rem;padding-top:2rem;">
    <h1>ข่าวสารบริษัท</h1>
    <ol class="breadcrumb">
      <li><a href="<?=URL_Path?>/news">News</a></li>
      <li class="active">[<?=$news['ID']?>] <?php if(strlen($news['HEADER']) > 55){ echo substr_replace($news['HEADER'], ' ...', 55); }else{ echo $news['HEADER']; }?></li>
    </ol>
    <hr>
    <div>
        <h2><strong><?=$news['HEADER']?></strong></h2>
        <h3><?=$news['TITLE']?></h3>
        <div>
            <?=$news['CONTENT']?>
        </div>
        <p class="text-right"><i class="fa fa-clock-o"></i>&nbsp;<?=$news['DATE']?></p>
    </div>
    <hr>
</div>

<?php $this->render('index/index_footer');?>