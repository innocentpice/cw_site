<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php if(isset($this->PageTitle)){echo $this->PageTitle;}else{echo 'CWGREAT Co.,Ltd.';}?></title>
        
        <?php 
            if(isset($this->clearBOOSTRAP)){
        ?>
            <link rel="stylesheet" href="<?=URL_Public.'/css/bootstrap.min.css'?>">
            <link rel="stylesheet" href="<?=URL_Public.'/css/bootstrap-theme.min.css'?>">
            <link rel="stylesheet" href="<?=URL_Public.'/css/semantic.min.css'?>">
        <?php }else{?>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <?php }?>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="<?=URL_Public.'/css/custom.css'?>">
        <?php
            if(isset($this->CSSInject)){
                foreach ($this->CSSInject as $CSS) {
                    echo '<link rel="stylesheet" href="';
                    echo $CSS;
                    echo '">';
                }
            }
        ?>
        
    </head>
    <body>
        <?php
            if(isset($this->clearBOOSTRAP)){
        ?>
            <div class="ui large menu">
                <div class="ui container">
                    <div class="header item">
                        <a href="<?=URL_Path?>"><b>CWGreat</b><small>&nbsp;Co.,Ltd.</small></a>
                    </div>
                    <div class="left menu hidden-xs">
                        <a class="item">
                            Product
                        </a>
                        <a class="item" href="<?=URL_Path?>/checkjob">
                            <i class="checkmark box icon"></i>
                            Check Status
                        </a>
                        <a class="item">
                            Jobs
                        </a>
                        <a class="item">
                            <i class="marker icon"></i>
                            Contacts
                        </a>
                    </div>
                    <div class="right menu hidden-sm hidden-md hidden-lg">
                        <a class="item" onClick="slide_toggle();">
                            <i class="content icon"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div id="menu-sidebar" class="ui right sidebar inverted vertical menu">
                <a class="item">
                    Product
                </a>
                <a class="item" href="<?=URL_Path?>/checkjob">
                    <i class="checkmark box icon"></i>
                    Check Status
                </a>
                <a class="item">
                    Jobs
                </a>
                <a class="item">
                    <i class="marker icon"></i>
                    Contacts
                </a>
            </div>
        <?php }?>
