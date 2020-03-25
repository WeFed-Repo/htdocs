<?php
//VARI TIPI DI MENU
switch ($menumode)
{
	case "privati":
?>
<ul class="main_nav item_5">
   <li class="first_menu_item double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_privati_vantaggi.php" <?php if ($tpl=="tpl_pub_privati_vantaggi.php") {?>class="selected_item"<?php } ?> title="Vantaggi del servizio">Vantaggi<br>del servizio</a></li>
   <li class="double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_privati_funzioni_disponibili.php" <?php if ($tpl=="tpl_pub_privati_funzioni_disponibili.php") {?>class="selected_item"<?php } ?> title="Funzioni disponibili">Funzioni<br />disponibili</a></li>
   <li class="double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_privati_sportello.php" <?php if ($tpl=="tpl_pub_privati_sportello.php") {?>class="selected_item"<?php } ?> title="Sportello telefonico">Sportello<br />telefonico</a></li>
   <li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_privati_profili.php" <?php if ($tpl=="tpl_pub_privati_profili.php") { ?>class="selected_item"<?php } ?> title="Profili">Profili</a></li>
   <li class="last_menu_item double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_privati_programma_punti.php" <?php if ($tpl=="tpl_pub_privati_programma_punti.php") { ?>class="selected_item"<?php } ?> title="Programma punti">Programma<br />punti</a></li>
</ul>
<?php
		break;
	
	case "imprese";
	?>
<ul class="main_nav item_3">
    <li class="first_menu_item double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_imprese_vantaggi.php" <?php if ($tpl=="tpl_pub_imprese_vantaggi.php") { ?>class="selected_item"<?php } ?> title="Vantaggi del servizio">Vantaggi<br>del servizio</a></li>
    <li><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_imprese_versioni_disponibili.php" <?php if ($tpl=="tpl_pub_imprese_versioni_disponibili.php") { ?>class="selected_item"<?php } ?> title="Versioni disponibili">Versioni disponibili</a></li>
    <li class="last_menu_item"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_imprese_confronta_le_versioni.php" <?php if ($tpl=="tpl_pub_imprese_confronta_le_versioni.php") { ?>class="selected_item"<?php } ?> title="Confronta le versioni">Confronta le versioni</a></li>
</ul>
	<?php
		break;
	
	case "help":
	?>
<ul class="main_nav item_5">
   <li class="first_menu_item double_row"> <a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_strumenti_di_supporto.php" <?php if ($tpl=="tpl_pub_help_center_strumenti_di_supporto.php" || $tpl=="tpl_pub_help_center_strumenti_di_supporto_domande_frequenti.php" || $tpl=="tpl_pub_help_center_strumenti_di_supporto_trova_agenzia.php" || $tpl == "tpl_pub_help_center_strumenti_glossario.php") { ?>class="selected_item"<?php } ?> title="Strumenti di supporto">Strumenti<br />di supporto</a></li>
   <li class="double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_blocco_carte.php" <?php if ($tpl=="tpl_pub_help_center_blocco_carte.php") { ?>class="selected_item"<?php } ?> title="Blocco carte">Blocco<br />carte</a></li>
   <li class="double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_primo_accesso.php" <?php if ($tpl=="tpl_pub_help_center_primo_accesso.php") { ?>class="selected_item"<?php } ?> title="Primo accesso">Primo<br />accesso</a></li>
   <li class="double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_problemi_password.php" <?php if ($tpl=="tpl_pub_help_center_problemi_password.php") { ?>class="selected_item"<?php } ?> title="Problemi password">Problemi<br />password</a></li>
   <li class="last_menu_item double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_help_center_requisiti_tecnici.php" <?php if ($tpl=="tpl_pub_help_center_requisiti_tecnici.php") { ?>class="selected_item"<?php } ?> title="Requisiti tecnici">Requisiti<br />tecnici</a></li>
</ul>
	<?php
		break;
	
	
	case "sicurezza":
	?>
 <ul class="main_nav item_3">
   <li class="first_menu_item double_row"> <a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_sicurezza_online_sicurezza_servizio.php" <?php if ($tpl=="tpl_pub_sicurezza_online_sicurezza_servizio.php" || $tpl=="tpl_pub_sicurezza_online_sicurezza_servizio_operare_in_sicurezza.php" || $tpl=="tpl_pub_sicurezza_online_sicurezza_servizio_la_protezione_del_servizio.php") { ?>class="selected_item"<?php } ?> title="Sicurezza del servizio">Sicurezza <br />del servizio</a></li>
   <li class="double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_sicurezza_online_come_proteggersi.php" <?php if ($tpl=="tpl_pub_sicurezza_online_come_proteggersi.php" || $tpl=="tpl_pub_sicurezza_online_come_proteggersi_le_situazioni_sospette.php" || $tpl=="tpl_pub_sicurezza_online_come_proteggersi_le_minacce_del_web.php") { ?>class="selected_item"<?php } ?> title="Come puoi proteggerti">Come puoi<br>proteggerti</a></li>
   <li class="last_menu_item double_row"><a href="/connect.php?page=str_interna_pub.php&tpl=tpl_pub_sicurezza_online_aspetti_operativi.php" <?php if ($tpl=="tpl_pub_sicurezza_online_aspetti_operativi.php") { ?>class="selected_item"<?php } ?> title="Gli aspetti operativi">Gli aspetti<br>operativi</a></li>
</ul>	
	<?php	
		break;
}	
?>