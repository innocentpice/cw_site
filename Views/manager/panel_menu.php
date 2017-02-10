<<<<<<< HEAD
<nav class="nav-side-menu col-sm-3 col-lg-2">
    <div class="brand">
      <a href="<?=URL_Path.'/manager'?>">CWG. Management System</a>
    </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
      <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <a href="<?=URL_Path.'/manager'?>"><li class="primary_nav">
              <i class="fa fa-home fa-lg"></i> HOME
            </li></a>

            <li data-toggle="collapse" data-target="#nav_task" class="collapsed primary_nav">
              <a href="#"><i class="fa fa-money fa-lg"></i> JOB<span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="nav_task">
                <a href="<?=URL_Path.'/manager/tasklist'?>"><li><i class="fa fa-list-ul fa-md"></i>VIEW</li></a>
                <a href="<?=URL_Path.'/manager/createtask'?>"><li><i class="fa fa-plus-square fa-md"></i>CREATE</li></a>
            </ul>
            
            <li data-toggle="collapse" data-target="#nav_supplier" class="collapsed primary_nav">
              <a href="#"><i class="fa fa-truck fa-lg"></i> SUPPLIER<span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="nav_supplier">
                <a href="<?=URL_Path.'/manager/supplier'?>"><li><i class="fa fa-list-ul fa-md"></i>VIEW</li></a>
                <a href="<?=URL_Path.'/manager/addsup'?>"><li><i class="fa fa-plus-square fa-md"></i>ADD</li></a>
            </ul>
            
            <a href="#"><li class="primary_nav">
              <i class="fa fa-book fa-lg"></i> MANUAL 
            </li></a>
            <a href="#"><li class="primary_nav">
              <i class="fa fa-question fa-lg"></i> HELP
            </li></a>
            
            <li  data-toggle="collapse" data-target="#nav_auth" class="collapsed primary_nav">
              <a href="#"><i class="fa fa-gear fa-lg"></i> AUTH<span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="nav_auth">
                <a href="<?=URL_Path.'/manager/logout'?>"><li><i class="fa fa-sign-out fa-md "></i>LOGOUT</li></a>
            </ul>
        </ul>
     </div>
</nav>

<div class="container-fluid clearfix col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2" style="padding-top:3rem;min-height:600px;">
  
=======
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
>>>>>>> 4d39d6b109d4cf45ecabf21a5eeaf2c2e49f5caa
