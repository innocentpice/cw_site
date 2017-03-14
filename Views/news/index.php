<?php if($this->LastPage%10!=0){$lastpage = intval($this->LastPage/10)+1;}else{$lastpage = intval($this->LastPage/10);}?>
<?php $this->render('index/navbar');?>

<div class="container" style="margin-top:5rem;padding-top:2rem;">
    <h1>ข่าวสารบริษัท</h1>
    <div class="row">
        <?php foreach($this->News as $news){?>
        <div class="col-xs-12 col-sm-6 col-md-3" style="padding:2rem;">
          <div class="thumbnail">
            <img src="http://placehold.it/500x250/EEE" style="width:250px;height:125px;">
            <div class="caption">
                <h4><?php if(strlen($news['HEADER']) > 200){ echo substr_replace($news['HEADER'], ' ...', 200); }else{ echo $news['HEADER']; }?></h4>
                <p><?php if(strlen($news['TITLE']) > 350){ echo substr_replace($news['TITLE'], ' ...', 350); }else{ echo $news['TITLE']; }?></p>
                <p class="text-right"><i class="fa fa-clock-o"></i>&nbsp;<?=$news['DATE']?></p>
                <p class="text-right"><a href="<?=URL_Path?>/news/id/<?=$news['ID']?>" class="btn btn-default btn-xs" role="button"><i class="glyphicon glyphicon-click"></i>อ่านเพิ่มเติม</a></p>
            </div>
          </div>
        </div>
        <?php }?>
    </div>
    <div class="row text-center">
    <nav aria-label="Page navigation">
      <ul class="pagination">
        <li>
            <a href="<?=URL_Path?>/news/page/1" aria-label="Fist">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <?php
            if(intval($lastpage)<=5){
                for($i=1;$i<=$lastpage;$i++){
                    if($i != $this->CurPage){
                        echo '<li><a href="'.URL_Path.'/news/page/'.$i.'">'.$i.'</a></li>';  
                    }else{
                        echo '<li class="active"><a href="'.URL_Path.'/news/page/'.$i.'" onClick="return false;">'.$i.'</a></li>';  
                    }
                }
            }else if(($lastpage-$this->CurPage) <= 1){
                echo '<li><a href="'.URL_Path.'/news/page/'.($this->CurPage-2).'">'.($this->CurPage-2).'</a></li>';
                echo '<li><a href="'.URL_Path.'/news/page/'.($this->CurPage-1).'">'.($this->CurPage-1).'</a></li>';
                for($i=$this->CurPage;$i<=$lastpage;$i++){
                    if($i != $this->CurPage){
                        echo '<li><a href="'.URL_Path.'/news/page/'.$i.'">'.$i.'</a></li>';  
                    }else{
                        echo '<li class="active"><a href="'.URL_Path.'/news/page/'.$i.'" onClick="return false;">'.$i.'</a></li>';  
                    }
                }
            }else if($this->CurPage == 1){
                echo '<li class="active"><a href="'.URL_Path.'/news/page/1" onClick="return false;">1</a></li>';  
                echo '<li><a href="'.URL_Path.'/news/page/2">2</a></li>'; 
                echo '<li><a href="'.URL_Path.'/news/page/3">3</a></li>';  
                echo '<li><a href="'.URL_Path.'/news/page/4">4</a></li>';
                echo '<li><a href="'.URL_Path.'/news/page/5">5</a></li>';  
            }else if($this->CurPage == 2){
                echo '<li><a href="'.URL_Path.'/news/page/1">1</a></li>'; 
                echo '<li class="active"><a href="'.URL_Path.'/news/page/2" onClick="return false;">2</a></li>';  
                echo '<li><a href="'.URL_Path.'/news/page/3">3</a></li>';  
                echo '<li><a href="'.URL_Path.'/news/page/4">4</a></li>';
                echo '<li><a href="'.URL_Path.'/news/page/5">5</a></li>';  
            }else if($this->CurPage >= 3){
                echo '<li><a href="'.URL_Path.'/news/page/'.($this->CurPage-2).'">'.($this->CurPage-2).'</a></li>';
                echo '<li><a href="'.URL_Path.'/news/page/'.($this->CurPage-1).'">'.($this->CurPage-1).'</a></li>';
                echo '<li class="active"><a href="'.URL_Path.'/news/page/'.$this->CurPage.'" onClick="return false;">'.$this->CurPage.'</a></li>';
                echo '<li><a href="'.URL_Path.'/news/page/'.($this->CurPage+1).'">'.($this->CurPage+1).'</a></li>';
                echo '<li><a href="'.URL_Path.'/news/page/'.($this->CurPage+2).'">'.($this->CurPage+2).'</a></li>';
            }
        ?>
        <li>
            <a href="<?=URL_Path?>/news/page/<?=$lastpage?>" aria-label="Last">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
      </ul>
    </nav>
</div>
</div>

<?php $this->render('index/index_footer');?>