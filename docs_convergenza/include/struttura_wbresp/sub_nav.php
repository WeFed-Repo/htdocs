<?php
    if (isset($subnav)) {
?>
<?php switch ($subnav) { 
        case "aol": 

        // Identifica lo step "corrente" dal TPL e crea il componente

        preg_match_all('!\d+!', $tpl, $matches);
        $aolstep = (int)implode(tpl, $matches[0]);
        // Array con nomi step
        $aolsteps = array("Apertura conto","Dati personali","Verifiche","Personalizza","Identificati","Adempimenti legali","Conferma dati","Informative","Riepilogo");
        ?>
		<ul class="aol-stepper">
		<?php
			$index = 0;
			foreach ($aolsteps as $step) {
				$cclass =  "";
				if ($index < $aolstep)  $cclass = "completed";
				if ($index == $aolstep) $cclass = "active";
				print("<li class='".$cclass."'><span class='stepwrap'><span class='step'><span></span></span></span><span class='namewrap'><span class='number'>".($index+1)."</span><span class='stepname'>".$step."</span></span></li>");
				$index++;
			}
		?>
		</ul>
		<?php break; 

 		// Caso tracking
 		case "tracking": 
 		?>
        
		<ul class="stepper">
			<li class="completed">In attesa invio contratto</li>
			<li class="active">Contratto ricevuto</li>
			<li>Esito richiesta</li>
		</ul>
		<?php break; 


		default: ?>
		<ul class="submenu">		
			<li><a href="#s1">LOREM ISPUM</a></li>
			<li><a href="#s2">LOREM ISPUM</a></li>
			<li><a href="#s3">LOREM ISPUM DOLOR</a></li>
			<li><a href="#s4">LOREM ISPUM DOLOR SIT</a></li>
			<li><a href="#s5">LOREM ISPUM DOLOR SIT</a></li>
			<li><a href="#s6">LOREM ISPUM DOLOR SIT LOREM ISPUM</a></li>
		</ul>
		<?php break; 
	} 
}
?>
