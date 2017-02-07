<div class="col-xs-8 col-xs-offset-2" style="margin-top:20%;">
    <header><h1 class="text-center">CWGREAT PANEL</h1></header><hr/>
    <form class="form-horizontal" method="POST">
        <?php if(isset($this->msgLogin)){?>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2 alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>LOGIN FAILED!</strong> <?=$this->msgLogin?>
                </div>
            </dib>
        <?php }?>
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default btn-lg" name="auth" value="true">LOGIN</button>
            </div>
         </div>
    </form>
</div>
<div class="clearfix"></div>