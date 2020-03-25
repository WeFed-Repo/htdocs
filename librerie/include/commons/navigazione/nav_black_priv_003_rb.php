<?php 
	$liv2 = $_GET["liv2"];
	$liv3 = $_GET["liv3"];
	$liv4 = "".$_GET["liv4"];
?>
<div id="menusxc">
	<?php
	switch($liv2)
	{
		case "1":
		
			switch($liv3)
			{
				case "1":
					?>
					<h1>Risparmio libero e obiettivi</h1>
					<?php 
				break;
				
				case "2":
					?>
					<h1>Archivio obiettivi</h1>
					<div class="menusxcontainer">
						<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_archivio_personali.php&liv1=RB&liv2=1&liv3=2&liv4=1" <?php if ($liv4=="1") {?>class="selected"<?php } ?>><span>Obiettivi personali</span></a>
						<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_archivio_condivisi.php&liv1=RB&liv2=1&liv3=2&liv4=2" <?php if ($liv4=="2") {?>class="selected"<?php } ?>><span>Obiettivi condivisi</span></a>
						<br class="clear" />
					</div>
					<?php
				break;
				
				case "3":
					?>
					<h1>Trasferimenti</h1>
					<div class="menusxcontainer">
						<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_trasferisci.php&liv1=RB&liv2=1&liv3=3&liv4=1" <?php if ($liv4=="1") {?>class="selected"<?php } ?>><span>Trasferisci</span></a>
						<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_elenco_trasferimenti.php&liv1=RB&liv2=1&liv3=3&liv4=2" <?php if ($liv4=="2") {?>class="selected"<?php } ?>><span>Elenco trasferimenti</span></a>
						<br class="clear" />
					</div>
					<?php
				break;
			}
		break;
	
		case "2":
			switch ($liv3)
			{
			case "1":
					?>
					<h1>Crea obiettivo</h1>
					<?php 
			break;
			
			case "2":
					?>
					<h1>Partecipa ad un obiettivo</h1>
					<?php 
			break;
			}
		
		break;
		
			case "3":
			switch ($liv3)
			{
				case "1":
						?>
						<h1>Bazak</h1>
						<?php 
				break;
			}
		
		break;
	
	}
	?>
</div>