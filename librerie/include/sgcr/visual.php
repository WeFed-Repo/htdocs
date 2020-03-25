<?php
switch ($pag) 
		{
		case "cartainrete":
		?>
		<div class="cardBigContainer">
			<img src="/prepagate/img/card_inrete.jpg" alt="CartaInRete" title="CartaInRete" border="0" />
		</div>
		<?php
		break;
		
		case "tesseratifoso":
		?>
		<div class="cardBigContainer">
			<img src="/prepagate/img/card_tesseratifoso.jpg" alt="Tessera del tifoso" title="Tessera del tifoso" border="0" />
		</div>
		<?php
		break;
	
		case "cartajeans":
		?>
		<div class="cardBigContainer">
			<img src="/prepagate/img/card_jeans.jpg" alt="CartaJe@ns" title="CartaJe@ns" border="0" />
		</div>
		<?php
		break;
		
		case "firstcard":
		?>
		<div class="cardBigContainer">
			<img src="/prepagate/img/card_first.jpg" alt="FirstCard" title="FirstCard" border="0" />
		</div>
		<?php
		break;
		
		case "bpmcontante":
		?>
		<div class="cardBigContainer">
			<img src="/prepagate/img/card_bpmcontante.jpg" alt="BipiemmeContante" title="BipiemmeContante" border="0" />
		</div>
		<?php
		break;
		
		case "nuovoutente":  case "password":  case "dettagli": 
		?>
		<div class="immaginonaContainer_login">
			<img src="/prepagate/img/immaginona_login.jpg" alt="Login" title="Login" border="0" />
		</div>
		<?php
		break;
		
		case "link":
		?>
		<div class="immaginonaContainer_links">
			<img src="/prepagate/img/immaginona_links.jpg" alt="Numeri utili" title="Numeri utili" border="0" />
		</div>
		<?php
		break;
		
		
		case "faq":
		?>
		<div class="immaginonaContainer_faq">
			<img src="/prepagate/img/immaginona_faq.jpg" alt="FAQ" title="FAQ" border="0" />
		</div>
		<?php
		break;
		
		
		case "numutili":
		?>
		<div class="immaginonaContainer_numeriUtili">
			<img src="/prepagate/img/immaginona_numeriUtili.jpg" alt="Numeri utili" title="Numeri utili" border="0" />
		</div>
		<?php
		break;
		
		
		case "richiedile2":
		?>
		<img src="/prepagate/img/stepSCARICARE.jpg" alt="Richiedile online" title="Richiedile online" border="0"></div>
		<div class="immaginonaContainer_richiedileOnline">
			<img src="/prepagate/img/immaginona_top_richiedileOnline.jpg" alt="Richiedile online" title="Richiedile online" border="0" />
		</div>
		<?php
		break;
		
		
		

		
		default:
	?>
	<div class="immaginonaContainer_links">
		
		<!img border="0" title="Numeri utili" alt="Numeri utili" src="/prepagate/img/immaginona_links.jpg"/>
	</div>
	<?php
		break;
		}
?>