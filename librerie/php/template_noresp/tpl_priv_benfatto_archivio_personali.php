<h1>Obiettivi personali</h1>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. </p>
<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
<script type="text/javascript">
// Inizializzazione interattivita' interfaccia
$(function(){
	
	// Selettore rapporto
	$("#selRapporto").on("change",function(){});
	
	
});
</script>
<!-- SELETTORE RAPPORTO E FILTRI -->
<div class="formGeneric borderFormRounded margBottomMedium">
	<div class="row-fluid">
		<div class="span4">
			<label class="nomefield">Conto n.</label>
			<!-- Multiselettore -->
			<select class="withIco" id="selRapporto">
				<option value="00000 - 0000005060 - EUR" selected>12378129308/210</option>
				<option value="12378129308">12378129308/211</option>
			</select>
			<a href="#" title="Lorem ipsum" class="flRight"><img src="/img/ico1gr_preferito.gif" alt="Lorem ipsum"></a>
			<!-- Fine multiselettore -->
			<!-- SELEZIONE UNICO CONTO (OUTPUT)--
			<span class="output">00000 - 0000005060 - EUR</span><input type="hidden" value="00000 - 0000005060 - EUR">
			-- FINE SELEZIONE UNICO CONTO (OUTPUT)-->
		</div>
		<div class="span8">
			&nbsp;
		</div>
	</div>
</div>
<!-- FINE SELETTORE RAPPORTO E FILTRI -->
<style>

</style>
<!-- OBIETTIVI -->
<div class="voiceGroup libero">
	<!-- LA CLASSE ADDITTIVA DI OGNI ROW-FLUID SERVE COME FILTRO -->
<?php 
for ($i = 1; $i <= 10; $i++) {
?>	
	<!-- OBIETTIVO -->	
	<div class="row-fluid paddBottomMedium paddTopMedium  bfCreato">
		<div class="span8">
			<h4>Lorem Ipsum Dolor Sit</h4>
			<ul class="bfConsole">
				<li class="importo">1.000.000&euro;</li>
				<li class="target">09/12/2014</li>
			</ul>
			<div class="progressBar" data-progress="73"></div>
			<div class="bfProgressConsole margBottomLarge">
				<div class="row-fluid">
					<div class="span6"><span class="lev1">Hai risparmiato</span></div>
					<div class="span6 txtAlRight"><span>99.999&euro;</span></div>
				</div>
			</div>
		</div>
		<div class="span4 paddTopMedium">
			<div class="aButtonconsRight paddTopLarge">
				<a href="#" class="bpm-btn big  margTopLarge" id="lnkAppuntamento">Realizza obiettivo</a>
			</div>
		</div>
	</div>
	<!-- FINE OBIETTIVO -->	
	
	<!-- OBIETTIVO -->	
	<div class="row-fluid paddBottomMedium paddTopMedium  bfPartecipato">
		<div class="span8">
			<h4>Ipsum ipsum Dolor Sit</h4>
			<ul class="bfConsole">
				<li class="importo">2.000&euro;</li>
				<li class="target">09/11/2013</li>
			</ul>
			<div class="progressBar" data-progress="100"></div>
			<div class="bfProgressConsole margBottomLarge">
				<div class="row-fluid">
					<div class="span6"><span class="lev1">Hai risparmiato</span></div>
					<div class="span6 txtAlRight"><span>1.999&euro;</span></div>
				</div>
			</div>
		</div>
		<div class="span4 paddTopMedium">
			<div class="aButtonconsRight paddTopLarge">
				<a href="#" class="bpm-btn big margTopLarge disabled" id="lnkAppuntamento">Realizza obiettivo</a>
			</div>
		</div>
	</div>
	<!-- FINE OBIETTIVO -->	
	<?php
}
?>	
</div>
<!-- FINE OBIETTIVI -->