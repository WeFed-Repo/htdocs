<footer class="footerFixed">
	<div class="footermenu">
		<div class="wrapper">
			<ul>
				<?php 
				if ($bank=="webank"){
				?>
				<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_trasparenza.php&responsive=y&liv0=8&liv1=0" title="Qui informazioni sulla trasparenza"><img src="/img/ret/img_trasparenza_menu_footer.png" alt="Qui informazioni sulla trasparenza"></a></li>
				<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_eventi.php&responsive=y&liv0=8&liv1=0" title="Eventi e corsi">Eventi e corsi</a></li>				
				<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fogli_informativi.php&responsive=y&liv0=8&liv1=0" title="Fogli Informativi">Fogli informativi</a></li>
				<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_privacy.php&responsive=y&liv0=8&liv2=1" title="Privacy">Privacy</a></li>
				<li><a href="#" title="Reclami">Reclami</a></li>	
				<li><strong><a target="_blank" href="http://www.faresolidale.it/" title="Solidarietà">Solidariet&agrave;</a></strong></li>						
				<?php
				}
				else
				{?>
				<li><a href="#1" title="Sede legale">Sede legale</a></li>
				<li><a href="#1" title="Trasparenza">Trasparenza</a></li>
				<li><a href="#1" title="Privacy">Privacy</a></li>
				<li><a href="#1" title="PattiChiari">PattiChiari</a></li>
				<li><strong><a href="#1" title="Solidarietà">Solidarietà</a></strong></li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>	
	<div class="wrapper">
		<p><?php
			if ($bank=="webank"){
				print("Banca Popolare di Milano Societ&agrave; Cooperativa a r.l. Piazza F. Meda, 4 - 20121 Milano - tel. 02 77001<br> P. IVA 00715120150 Gruppo Bipiemme. Tutti i diritti riservati.");
			}
			else {
				print("Banca Popolare di Milano Societ&agrave; Cooperativa a r.l. - P.IVA 00715120150 - Gruppo Bipiemme - <a href=\"#1\" title=\"Lorem ispum\">Lorem ispum</a>");
			}
		?>
		</p>
	</div>
</footer>