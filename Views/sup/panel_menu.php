<nav class="nav-side-menu col-sm-3 col-lg-2">
    <div class="brand">
      <a href="<?=URL_Path.'/sup'?>">Supplier System</a>
    </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
      <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
            <a href="<?=URL_Path.'/sup'?>"><li class="primary_nav">
              <i class="fa fa-home fa-lg"></i> HOME
            </li></a>

            <li data-toggle="collapse" data-target="#nav_task" class="collapsed primary_nav">
              <a href="#"><i class="fa fa-money fa-lg"></i> JOB<span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="nav_task">
                <a href="<?=URL_Path.'/sup/job'?>"><li><i class="fa fa-list-ul fa-md"></i>MY JOB</li></a>
                <a href="<?=URL_Path.'/sup/jobdone'?>"><li><i class="fa fa-check fa-md"></i>JOB DONE</li></a>
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
                <a href="<?=URL_Path.'/sup/logout'?>"><li><i class="fa fa-sign-out fa-md "></i>LOGOUT</li></a>
            </ul>
        </ul>
     </div>
</nav>

<div class="container-fluid clearfix col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2" style="padding-top:3rem;min-height:600px;">
  