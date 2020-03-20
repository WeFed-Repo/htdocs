<?php

virtual ("/core/functions.php");
	
	for($tempi = 2;$tempi<=7; $tempi++) {
?>
<h3>Acquisto</h3>

<div class="row">
	<div class="col-xs-12">
		<div class="tempi orizzontale tempi<?php print ($tempi);?>">
			<div class="tempo">
				<div class="milestone"><span class="dot"></span><span>Oggi</span></div>
				<div class="contenuto">
					<div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
					<ul>
						<li>data valuta</li>
						<li>calcolo valore quota/NAV</li>
					</ul>
				</div>
			</div>
			<?php

			for ($milestone =2; $milestone<=$tempi; $milestone++ ) {

			?>
			<div class="tempo">
			    <div class="milestone"><span class="dot"></span><span>+<?php print $milestone ?> GG</span></div>
			    <div class="contenuto">
			        <div class="titolo">Stato ordine: <strong>Loremipsum</strong></div>
			        <ul>
			            <li>Lorem ipsum</li>
			            <li>Dolor sit amet consectetur</li>
			        </ul>
			    </div>
			</div>
						<?php

			}

			?>
		</div>
	</div>
</div>

<?php

	}

?>
<!-- Testi integrativi -->
<ul>
	<li><?php print randomText(30) ?></li>
	<li><?php print randomText(30) ?></li>
	<li><?php print randomText(30) ?></li>
	<li><?php print randomText(30) ?></li>
</ul>
<!-- Fine testi integrativi -->
<hr>
<!-- Tempistiche integrative fondo -->
<h3>Tempistiche specifiche</h3>
	<div class="tempistiche-specifiche">
	<?php for ($x==1; $x<10; $x++) {?>
	<div class="text-accordion">
	  <a class="text-term"><i class="icon icon-row_expand"></i><i class="icon icon-row_contract"></i>FONDO <?php print strToUpper(randomText(4)) ?></a>
	  <div class="text-definition">
	  	<table cellspacing="0" cellpadding="0" border="1" >
			<tbody id="tbody-panel<?php print $x; ?>" role="tabpanel">
				<tr>
					<td>NAV</td>
					<td>Settimanale tutti i venerd&igrave;</td>
				</tr>
				<tr>
					<td>NAV fisso</td>
					<td>5€ limitatamente alle prime 2 settimane del periodo iniziale di collocamento</td>
				</tr>
				<tr>
					<td>Sottoscrizione</td>
					<td>da lunedì 25 settembre 2017 a giovedì 14 dicembre 2017</td>
				</tr>
				<tr>
					<td>Data scadenza</td>
					<td>venerdì 28 giugno 2024</td>
				</tr>
			</tbody>
		</table>
	  </div>
	</div>
	<?php
	}
	?>
</div>
