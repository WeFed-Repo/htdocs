<div class="footer">
       <div>
        <ul>
          <li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_trasparenza.php" title="Trasparenza">Trasparenza</a> |</li>
          <li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_privacy.php" title="Privacy">Privacy</a> |</li>
          <?php if ($bank != 'bm') {?><li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_pattichiari.php" title="PattiChiari">PattiChiari</a> |</li><?php }?>
		  <li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_mappa_sito.php" title="Mappa del sito">Mappa del sito</a> |</li>
          <li><a href="http://<?php print $footerurl; ?>" title="<?php print $footerurl; ?>" target="_blank"><?php print $footerurl; ?></a></li>
        </ul>
        <p><?php print $footertext; ?></p>
      </div>
 </div>