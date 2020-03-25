<?php
switch ($submenumode)
	{
		case "tpl_pub_help_center_strumenti":
?>
<ul class="context_nav">
	<li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_strumenti_di_supporto_trova_agenzia.php" <?php if ($tpl=="tpl_pub_help_center_strumenti_di_supporto_trova_agenzia.php") { ?>class="selected_item"<?php } ?> title="Trova agenzia">Trova agenzia</a> |</li>
	<li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_strumenti_di_supporto_domande_frequenti.php" <?php if ($tpl=="tpl_pub_help_center_strumenti_di_supporto_domande_frequenti.php") { ?>class="selected_item"<?php } ?> title="Domande frequenti">Domande frequenti</a> |</li>
	<li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_strumenti_glossario.php" <?php if ($tpl=="tpl_pub_help_center_strumenti_glossario.php") { ?>class="selected_item"<?php } ?> title="Glossario">Glossario</a></li>
</ul>
<?php
		break;
		
		case "tpl_pub_sicurezza_online_sicurezza_servizio":
?>
<ul class="context_nav">
   <li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_sicurezza_online_sicurezza_servizio_operare_in_sicurezza.php" <?php if ($tpl=="tpl_pub_sicurezza_online_sicurezza_servizio_operare_in_sicurezza.php") { ?>class="selected_item"<?php } ?> title="Operare in sicurezza">Operare in sicurezza</a> |</li>
   <li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_sicurezza_online_sicurezza_servizio_la_protezione_del_servizio.php" <?php if ($tpl=="tpl_pub_sicurezza_online_sicurezza_servizio_la_protezione_del_servizio.php") { ?>class="selected_item"<?php } ?> title="La protezione del servizio">La protezione del servizio</a></li>
</ul>
<?php		
		break;
		
		case "tpl_pub_sicurezza_online_come_proteggersi":
?>
 <ul class="context_nav">
      <li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_sicurezza_online_come_proteggersi_le_minacce_del_web.php" <?php if ($tpl=="tpl_pub_sicurezza_online_come_proteggersi_le_minacce_del_web.php") { ?>class="selected_item"<?php } ?> title="Le minacce del web">Le minacce del web</a> |</li>
      <li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_sicurezza_online_come_proteggersi_le_situazioni_sospette.php" <?php if ($tpl=="tpl_pub_sicurezza_online_come_proteggersi_le_situazioni_sospette.php") { ?>class="selected_item"<?php } ?> title="Le situazioni sospette">Le situazioni sospette</a></li>
</ul>
<?php		
		break;
	}

?>