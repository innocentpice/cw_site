<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=URL_Path.'/manager'?>">Management System</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=URL_Path.'/manager/manual'?>">Manual</a></li>
        <li><a href="<?=URL_Path.'/manager/help'?>">Help</a></li>
        <li>
          <a href="<?=URL_Path?>/manager/logout" style="display:inline;">
            <button class="btn btn-danger btn-sm navbar-btn">
            LOG OFF&nbsp;<span class="glyphicon glyphicon-log-out"></span>
            </button>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid clearfix">
  <div claas="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar bg-info">
        <li class="active"><a>TASK MENU</a></li>
        <li><a href="<?=URL_Path.'/manager/tasklist'?>">|- TASKLIST</a></li>
        <li><a href="<?=URL_Path.'/manager/createtask'?>">|- CREATE TASK</a></li>
      </ul>
      <ul class="nav nav-sidebar bg-info">
        <li class="active"><a>Supplier MENU</a></li>
        <li><a href="<?=URL_Path.'/manager/supplier'?>">|- Supplier</a></li>
      </ul>
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="padding-top:5%;min-height:600px;">