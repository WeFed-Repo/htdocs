<?php 
 // var_dump( $isPublicPage ); die;
 if (!isset($isPublicPage)) $isPublicPage = false;
?>

<div class="wrapper">
  <nav class="navbar navbar-expand-lg rounded">
    <div class="navbar-brand d-flex align-items-center">
      <a href="javascript:void(0)"><div class="d-block" id="menutoggle"><i class="icon icon-menu"></i></div></a>
      <a href="#" class="logo"><img src="./fe/img/logo.png"></a>
    </div>
    
    <?php if(!$isPublicPage) { ?>
      <ul class="navbar-nav flex-row d-none d-lg-flex align-items-center">
        <li class="nav-item"> Postazione: <span class="nav-info">P92183912</span> </li>
        <li class="nav-item d-none d-lg-block"> Versione: <span class="nav-info">Extra</span> </li>
      </ul>
    <?php } ?>

    <?php if(!$isPublicPage) { ?>
      <ul class="navbar-nav flex-row ml-md-auto d-flex align-items-center">
          <li class="nav-item d-flex align-items-center pl-0 pl-sm-3 pr-0 pr-sm-3">
            <div class="dropdown">
              <a class="nav-link skin-btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Skin
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Lorem ipsum</a>
                <a class="dropdown-item" href="#">Dolor sit amet</a>
              </div>
            </div>
          </li>
          <li class="nav-item d-flex align-items-center pr-2 pr-sm-3">
            <a class="nav-link ico-btn">
              <span class="d-none d-xl-block mr-3">
                Ultimo accesso: <span class="nav-info">22/10/2019</span>
              </span>
          </a></li>
          <li class="nav-item d-flex align-items-center pr-2 pr-sm-3">
            <a class="nav-link ico-btn" href="strutt_priv.php?tpl=tpl_login.php">
              <span class="nominativo d-none d-md-block mr-3">Mario Rossi</span>
              <i class="icon icon-user"></i>
          </a></li>
          <!--<li class="nav-item d-flex align-items-center pr-2 pr-sm-3">
            <a class="nav-link ico-btn flagged userinfo">
            <i class="icon icon-ico_posta_arrivo"></i><span>99</span>
          </a> </li>-->
          <li class="nav-item d-none d-sm-flex align-items-center pl-2 pl-sm-3 pr-0 pr-sm-3">
            <a href="strutt_priv.php?tpl=tpl_home_configurator.php" class="nav-link ico-btn ">
              <img class="icon icon-autorizza" src="./fe/img/icon/icon-5.svg"><?php // <i class="icon icon-ico_setting"></i> ?>
            </a> </li>
          <li class="nav-item d-none d-sm-flex align-items-center">
            <a class="nav-link ico-btn d-flex align-items-center"> <i class="icon icon-ico_ultime_disposizioni"></i>
            </a> </li>
          <li class="nav-item d-none d-sm-flex align-items-center">
            <a class="nav-link ico-btn d-flex pr-1"> <i class="icon icon-ico_logout"></i>
            </a> </li>
      </ul>
    <?php } ?>

  </nav>
</div>
