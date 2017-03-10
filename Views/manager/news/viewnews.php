<?php if($this->LastPage%10!=0){$lastpage = intval($this->LastPage/10)+1;}else{$lastpage = intval($this->LastPage/10);}?>
<div class="container-fluid">
    <h2>ข่าวสารบริษัท</h2><hr>         
    <table class="table table-striped">
        <thead>
          <tr>
            <th>HEADER</th>
            <th>TITLE</th>
            <th>DATE</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($this->News as $data){?>
          <tr>
            <td><?=$data['HEADER']?></td>
            <td><?=$data['TITLE']?></td>
            <td><?=$data['DATE']?></td>
            <td><a href="<?=URL_Path?>/manager/news/<?=$data['ID']?>" class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a></td>
          </tr>
        <?php }?>
        </tbody>
    </table>
    <div class="row text-center">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li>
                <a href="<?=URL_Path?>/manager/news/page/1" aria-label="Fist">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
                if(intval($lastpage)<=5){
                    for($i=1;$i<=$lastpage;$i++){
                        if($i != $this->CurPage){
                            echo '<li><a href="'.URL_Path.'/manager/news/page/'.$i.'">'.$i.'</a></li>';  
                        }else{
                            echo '<li class="active"><a href="'.URL_Path.'/manager/news/page/'.$i.'" onClick="return false;">'.$i.'</a></li>';  
                        }
                    }
                }else if(($lastpage-$this->CurPage) <= 1){
                    echo '<li><a href="'.URL_Path.'/manager/news/page/'.($this->CurPage-2).'">'.($this->CurPage-2).'</a></li>';
                    echo '<li><a href="'.URL_Path.'/manager/news/page/'.($this->CurPage-1).'">'.($this->CurPage-1).'</a></li>';
                    for($i=$this->CurPage;$i<=$lastpage;$i++){
                        if($i != $this->CurPage){
                            echo '<li><a href="'.URL_Path.'/manager/news/page/'.$i.'">'.$i.'</a></li>';  
                        }else{
                            echo '<li class="active"><a href="'.URL_Path.'/manager/news/page/'.$i.'" onClick="return false;">'.$i.'</a></li>';  
                        }
                    }
                }else if($this->CurPage == 1){
                    echo '<li class="active"><a href="'.URL_Path.'/manager/news/page/1" onClick="return false;">1</a></li>';  
                    echo '<li><a href="'.URL_Path.'/manager/news/page/2">2</a></li>'; 
                    echo '<li><a href="'.URL_Path.'/manager/news/page/3">3</a></li>';  
                    echo '<li><a href="'.URL_Path.'/manager/news/page/4">4</a></li>';
                    echo '<li><a href="'.URL_Path.'/manager/news/page/5">5</a></li>';  
                }else if($this->CurPage == 2){
                    echo '<li><a href="'.URL_Path.'/manager/news/page/1">1</a></li>'; 
                    echo '<li class="active"><a href="'.URL_Path.'/manager/news/page/2" onClick="return false;">2</a></li>';  
                    echo '<li><a href="'.URL_Path.'/manager/news/page/3">3</a></li>';  
                    echo '<li><a href="'.URL_Path.'/manager/news/page/4">4</a></li>';
                    echo '<li><a href="'.URL_Path.'/manager/news/page/5">5</a></li>';  
                }else if($this->CurPage >= 3){
                    echo '<li><a href="'.URL_Path.'/manager/news/page/'.($this->CurPage-2).'">'.($this->CurPage-2).'</a></li>';
                    echo '<li><a href="'.URL_Path.'/manager/news/page/'.($this->CurPage-1).'">'.($this->CurPage-1).'</a></li>';
                    echo '<li class="active"><a href="'.URL_Path.'/manager/news/page/'.$this->CurPage.'" onClick="return false;">'.$this->CurPage.'</a></li>';
                    echo '<li><a href="'.URL_Path.'/manager/news/page/'.($this->CurPage+1).'">'.($this->CurPage+1).'</a></li>';
                    echo '<li><a href="'.URL_Path.'/manager/news/page/'.($this->CurPage+2).'">'.($this->CurPage+2).'</a></li>';
                }
            ?>
            <li>
                <a href="<?=URL_Path?>/manager/news/page/<?=$lastpage?>" aria-label="Last">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
          </ul>
        </nav>
    </div>
</div>