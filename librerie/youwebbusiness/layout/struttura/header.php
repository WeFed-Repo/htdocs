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

          <ul class="navbar-nav flex-row d-none d-lg-flex align-items-center">
        <li class="nav-item"> Postazione: <span class="nav-info">P92183912</span> </li>
        <li class="nav-item d-none d-lg-block"> Versione: <span class="nav-info">Extra</span> </li>
        <!-- questo elemento è tornato nel menu di SX e non più vicino alle icone -->
        <li class="nav-item d-flex align-items-center pr-2 pr-sm-3">
            <a class="nav-link">
              <span class="d-none d-xl-block mr-3">
                Ultimo accesso: <span class="nav-info">22/10/2019</span>
              </span>
            </a>
          </li>

      </ul>

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
          <!-- la classe nav-icon-divider inserisce la riga grigia verticale -->
          <!-- le icone che seguono non hanno la classe .d-flex bensì .d-none .d-sm-flex poichè non vanno mostrate in mobile -->
          <!-- la classe nav-icon-divider inserisce la riga grigia verticale -->
          <li class="nav-item-divider nav-item d-flex align-items-center pr-2 pr-sm-3">
            <a href="strutt_priv.php?tpl=tpl_login.php" class="nav-link ico-btn">
              <img class="not-redraw" src="./fe/img/icon/user.svg">
              <span class="ico-label">Mario Rossi</span>
            </a>
          </li>
          <li class="nav-item d-flex align-items-center pl-2 pl-sm-3 pr-0 pr-sm-3">
            <a class="nav-link ico-btn ">
              <img class="not-redraw" src="./fe/img/icon/notifiche.svg">
              <span class="ico-label">Posta</span>
              <span class="ico-badge">2</span>
            </a>
          </li>
          <!-- le icone che seguono non hanno la classe .d-flex bensì .d-none .d-sm-flex poichè non vanno mostrate in mobile -->
          <li class="nav-item d-none d-sm-flex align-items-center pl-2 pl-sm-3 pr-0 pr-sm-3">
            <a href="tpl_home_configurator.html" class="nav-link ico-btn ">
              <img class="not-redraw" src="./fe/img/icon/icon-5.svg">
              <span class="ico-label">Configura</span>
            </a>
          </li>
            <!--a href="strutt_priv.php?tpl=tpl_configura.php" class="nav-link ico-btn ">
              <img class="not-redraw" src="./fe/img/icon/icon-5.svg">
              <span class="ico-label">Configura</span>
            </a-->
          <li class="nav-item d-none d-sm-flex align-items-center">
            <a class="nav-link ico-btn d-flex align-items-center">
              <img class="not-redraw" src="./fe/img/icon/help.svg">
              <span class="ico-label">Tutorial</span>
            </a>
          </li>
            <!--a class="nav-link ico-btn d-flex align-items-center">
              <img class="not-redraw" src="./fe/img/icon/help.svg">
              <span class="ico-label">Help</span>
            </a-->
          <li class="nav-item d-none d-sm-flex align-items-center">
            <a class="nav-link ico-btn d-flex pr-1">
              <img class="not-redraw" src="./fe/img/icon/logout.svg">
              <span class="ico-label">Logout</span>
            </a>
          </li>
      </ul>

  </nav>
</div>
