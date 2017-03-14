<h1 class="text-center">ข่าวสารบริษัท</h1>
<ol class="breadcrumb">
  <li><a href="<?=URL_Path?>/manager/news">News</a></li>
  <li class="active">[<?=$this->KEYNEWS?>] <?=$this->News['HEADER']?></li>
</ol><hr>
<?php if(isset($this->ErrorMsg)){?><div class="alert alert-danger text-center"><?=$this->ErrorMsg?></div><?php }?>
<form method="post" onSubmit="return confirm('ต้องการแก้ไขหรือไม่ ?');">
    <div class="form-group row">
        <div class="col-xs-3 col-sm-2 col-lg-1 text-right">
            <label for="news_header" class="control-label">หัวเรื่อง</label>
        </div>
        <div class="col-xs-9 col-sm-10 col-lg-11">
            <input type="text" id="news_header" name="news_header" class="form-control" value="<?=$this->News['HEADER']?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-3 col-sm-2 col-lg-1 text-right">
            <label for="news_title" class="control-label">บทนำ</label>
        </div>
        <div class="col-xs-9 col-sm-10 col-lg-11">
            <input type="text" id="news_title" name="news_title" class="form-control" value="<?=$this->News['TITLE']?>">
        </div>
    </div>
    <div class="form-group">
      <textarea name="news_content" id="editnews" class="form-control" rows="35"><?=$this->News['CONTENT']?></textarea>
    </div>
    <div class="form-group">
        <input name="news_edit" value="true" type="hidden">
        <button type="submit" class="btn btn-primary btn-block">แก้ไข</button>
    </div>
</form>