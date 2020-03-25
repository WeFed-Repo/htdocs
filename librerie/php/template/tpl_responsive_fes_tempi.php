<h2>Tempi e costi</h2>

<!-- Navigatore tab -->
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabbig">
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_tempi.php&responsive=y&liv0=4&liv1=2&liv2=1&liv3=1">tempi</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_costi_commissioni.php&responsive=y&liv0=4&liv1=2&liv2=1&liv3=1">costi e commissioni</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_investimenti_minimi.php&responsive=y&liv0=4&liv1=2&liv2=1&liv3=1">investimenti minimi</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_fes_tassazione.php&responsive=y&liv0=4&liv1=2&liv2=1&liv3=1">tassazione</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>
<!-- Fine navigatore tab -->

<!-- Testo introduttivo -->
<ul>
	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius <strong>mollitia</strong> quae iste numquam eaque assumenda harum, vero pariatur corporis doloribus. Fugit inventore numquam cumque quas molestiae in incidunt, tempore rerum.</li>
	<li>Amet, consectetur adipisicing elit. Eius mollitia quae iste numquam eaque assumenda harum, vero pariatur corporis doloribus. Fugit inventore numquam cumque quas molestiae in incidunt, tempore rerum.</li>
</ul>
<p>Seleziona la società di gestione per visualizzarne le tempistiche operative.</p>
<!-- fine testo introduttivo -->
<form class="formGenerico borderFormRounded" role="form">
	<div class="form-group">
        <div class="row">
            <div class="col-xs-12 requiredField">
                <label class="control-label">Societ&agrave; di gestione</label>
                <select name="" class="form-control">
                  	<option value="190" selected>Algebris Ucits Funds plc</option> 

					<option value="151">Allianz Global Investors Lux.</option> 

					<option value="7017">Amundi Funds</option> 

					<option value="144">Anima Asset Management ltd</option> 

					<option value="888" selected="">Anima Sgr Spa</option> 

					<option value="900">BlackRock (Luxembourg) S.A.</option> 

					<option value="125">Carmignac Gestion</option> 

					<option value="126">Carmignac Portfolio Sicav</option> 

					<option value="380">Morgan Stanley Investment Fund</option> 

					<option value="180">NN(L) Investment Funds</option> 

					<option value="901">Pictet Funds (Europe) S.A.</option> 

					<option value="7014">Pimco Funds Gl.Inv. Series Plc</option> 

					<option value="195">Raiffeisen Capital Management</option> 

					<option value="902">Schroder Int. Selection Fund</option> 
                </select>
            </div>
        </div>
    </div>

<!-- Tabella confronto per desktop -->


<?php
	
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
<table cellspacing="0" cellpadding="0" border="1" >
	<tbody>
	<?php for ($x==1; $x<10; $x++) {?>
	
		<tr>
			<th colspan="2" class="left">FONDO <?php print strtoupper(randomText(4)); ?></th>
		</tr>
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

	<?php
	}
	?>
		</tbody>
	</table>
</div>

</form>