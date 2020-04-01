<?php

  if(!isset($strtype)) $strtype = "";

  $filestruttura = ($strtype==="old")?"_old":"";
?>
<div class="userdata BT3-visible-xs d-block d-sm-none">
  <span class="nome">Mario Rossi</span>
  <div class="userdata-console">
    <a class="ico-btn"><img class="icon icon-autorizza" src="./fe/img/icon/icon-5.svg"><?php // <i class="icon icon-ico_setting"></i> ?></a>
    <a class="ico-btn"><div class="btn-icon-help"></div></a>
    <a href="#" class="ico-btn"><i class="icon icon-ico_logout"></i></a>
  </div>
</div>
<ul>
  <li class="usermenu">
    <a class=" toggle"><span>Menu personale</span></a>
    <ul style="display:none">
      <li><a>Ipsum dolor</a></li>
      <li><a>Ipsum dolor</a></li>
      <li><a>Ipsum dolor</a></li>
    </ul>
  </li>
  <?php
  /* Connessione al menu dinamico */
  $navmenu = json_decode(file_get_contents("./librerie_menu".(($strtype==="old")?"_porting":"").".php"),true);

  if($strtype==="old") $navmenu = $navmenu[3]["voices"];


  foreach ($navmenu as $lev1voice) {

    /* NOTE: Estrae tutte le voci di secondo livello ed attiva il sottomenu' aperto */
    $openedclass = "";
     if(isset($lev1voice["voices"])) {
        foreach ($lev1voice["voices"] as $lev2voice) {
          if(isset($lev2voice["tpl"])) {
            if(is_array($lev2voice["tpl"]) ) {
              foreach ($lev2voice["tpl"] as $t) {
                if($tpl == $t) $openedclass = "opened";
              }
            } else {
              if($tpl == $lev2voice["tpl"]) $openedclass = "opened";
            }
          }
        }
     }
    ?>
    <li class="<?php print $openedclass; ?>">
      <?php if(isset($lev1voice["tpl"])) {
        ?>
          <a href="strutt_priv<?php print $filestruttura; ?>.php?tpl=<?php print $lev1voice["tpl"];?><?php if($strtype==="old") {?>&cantiere=<?php print(isset($lev1voice["cantiere"]))? $lev1voice["cantiere"]: "";?><?php } ?>" class="<?php if ($tpl==$lev1voice["tpl"]) print "on";?>"><?php print ($lev1voice["title"]); ?></a>
      <?php
      }
      else
      {
        if(isset($lev1voice["voices"])) {

          ?>
          <a class="toggle"><span><?php print ($lev1voice["title"]);?></span></a>
          <ul <?php if ($openedclass != "opened") { ?>style="display:none;"<?php } ?>>
            <?php
             foreach ($lev1voice["voices"] as $lev2voice) {
              if (isset($lev2voice["tpl"])){
                if( is_array($lev2voice["tpl"]) ) {
                    $firstTpl = $lev2voice["tpl"][0];
                } else {
                  $firstTpl = $lev2voice["tpl"];
                }
              ?>
              <li><a href="strutt_priv<?php print $filestruttura; ?>.php?tpl=<?php print $firstTpl?><?php if($strtype==="old") {?>&cantiere=<?php print(isset($lev2voice["cantiere"]))? $lev2voice["cantiere"]: "";?><?php } ?>" class="<?php if($tpl == $firstTpl) print "on";?>"><?php print $lev2voice["title"]?></a></li>
              <?php
              }
              else
              {
                ?>
                <li><a class="disabled"><?php print $lev2voice["title"]?></a></li>
                <?php
              }
            }
            ?>
          </ul>
          <?php
        }
        else
        {
          ?>
          <a class="disabled"><?php print ($lev1voice["title"]); ?></a>
          <?php
        }
      }
  }
  ?>
</ul>
