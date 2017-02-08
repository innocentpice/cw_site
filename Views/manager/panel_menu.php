<nav class="nav-side-menu col-sm-3">
    <div class="brand">
      <a href="<?=URL_Path.'/manager'?>">Management System</a>
    </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
      <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <li>
              <a href="#">
              <i class="fa fa-home fa-lg"></i> HOME
              </a>
            </li>

            <li  data-toggle="collapse" data-target="#nav_task" class="collapsed">
              <a href="#"><i class="fa fa-money fa-lg"></i> JOB Manage <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="nav_task">
                <li><a href="<?=URL_Path.'/manager/tasklist'?>">JOB VIEW</a></li>
                <li><a href="<?=URL_Path.'/manager/createtask'?>">CREATE JOB</a></li>
            </ul>
            
            <li  data-toggle="collapse" data-target="#nav_supplier" class="collapsed">
              <a href="#"><i class="fa fa-truck fa-lg"></i> SUPPLIER Manage <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="nav_supplier">
                <li><a href="<?=URL_Path.'/manager/supplier'?>">SUPPLIER VIEW</a></li>
            </ul>
        </ul>
     </div>
</nav>

<div class="container-fluid clearfix col-sm-9 col-sm-offset-3" style="padding-top:5%;min-height:600px;">
  