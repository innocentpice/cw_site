<h1 class="text-center">ข่าวสารบริษัท</h1><hr>
<?php if(isset($this->ErrorMsg)){?><div class="alert alert-danger text-center"><?=$this->ErrorMsg?></div><?php }?>
<form method="post">
    <div class="form-group row">
        <div class="col-xs-3 col-sm-2 col-lg-1 text-right">
            <label for="news_header" class="control-label">หัวเรื่อง</label>
        </div>
        <div class="col-xs-9 col-sm-10 col-lg-11">
            <input type="text" id="news_header" name="news_header" class="form-control" value="<?=$_POST['news_header']?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-3 col-sm-2 col-lg-1 text-right">
            <label for="news_title" class="control-label">บทนำ</label>
        </div>
        <div class="col-xs-9 col-sm-10 col-lg-11">
            <input type="text" id="news_title" name="news_title" class="form-control" value="<?=$_POST['news_title']?>">
        </div>
    </div>
    <div class="form-group">
      <textarea name="news_content" id="addnews" class="form-control" rows="35"><?=$_POST['news_content']?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">เพิ่มข่าวสาร</button>
    </div>
</form>