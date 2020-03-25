<h1>Obiettivi condivisi</h1>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. </p>
<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
<script type="text/javascript">
// Inizializzazione interattivita' interfaccia
$(function(){
	
	// Oggetti "globali"
	nodiCreato = $(".voiceGroup .bfCreato");
	nodiPartecipato = $(".voiceGroup .bfPartecipato");
	
	// Selettore rapporto
	$("#selRapporto").on("change",function(){});
	
	// Radio filtri visualizzazione
	$("input[name=radioView]").click(function(){
		var inpVal = $(this).val();
		$(".voiceGroup .bfCreato,.voiceGroup .bfPartecipato").hide();
		if (inpVal== "1" || inpVal == "2") nodiCreato.show();
		if (inpVal == "1" || inpVal == "3") nodiPartecipato.show();
		
		
	});
	
	// Apertura overlay di realizzazione

	
});
</script>
<!-- OVERLAY REALIZZA OBIETTIVO -->
<div class="layeralert3" id="layeralert03" style="display:none">
		<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert3').dragHandle = new Draggable('layeralert3',{handle: 'handle'}, { scroll: window });" style="cursor: move;"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="this.parentNode.parentNode.style.display='none'"></div>
		<div class="body">
			<p class="small">
				<br>
				<strong>Scegli come realizzare il tuo obiettivo</strong>
				<br>
				<br>
			</p>
			<div class="boxRealizzaWrapper">
				<div class="boxRealizza" title="Esegui bonifico">
					<a href="" id="linkBon">
						<img src="/img/ret/link_obt_bonifico.png" alt="Esegui bonifico">
					</a>
				</div>
				<div class="boxRealizza" title="Ricarica Carta Je@ns">
					<a href="" id="linkRic">
						<img src="/img/ret/link_obt_ricarica.png" alt="Ricarica Carta Je@ns">
					</a>
				</div>
				<div class="boxRealizza" id="boxBazak">
					<a href="javascript:;" onclick="();" title="Acquista su Bazak">
						<img src="/img/ret/link_obt_bazak.png" alt="Acquista su Bazak">
					</a>
				</div>
				<div class="boxRealizza" id="boxBazak">
					<a href="javascript:;" onclick="();" title="">
						<img src="/img/ret/link_obt_giroconto.png" alt="">
					</a>
				</div>
				<br class="clear">
			</div>
		</div>	
	<div class="foot"></div>
</div>
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
		<div class="span2">
			&nbsp;
		</div>
		<div class="span6">
			<label class="nomefield">Visualizza:</label>
			<div class="row-fluid paddTopSmall">
				<div class="span3"><label><input type="radio" name="radioView" value="1" checked>Tutti</label></div>
				<div class="span4"><label><input type="radio" name="radioView" value="2">creati da te</label></div>
				<div class="span5"><label><input type="radio" name="radioView" value="3">cui hai partecipato</label></div>
			</div>
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
				<li class="obCondiviso">50</li>
				<li class="creatore">Norberto Felenfoli</li>
				<li class="target">1.000.000&euro;</li>
				<li class="scadenza">09/12/2014</li>
			</ul>
			<div class="progressBar" data-progress="73"></div>
			<div class="bfProgressConsole margBottomLarge">
					<div class="row-fluid">
						<div class="span6"><span class="lev1">Avete risparmiato</span></div>
						<div class="span6 txtAlRight"><span>99.999&euro;</span></div>
					</div>
					<div class="row-fluid">
						<div class="span6"><span class="lev2">Effettivi</span></div>
						<div class="span6 txtAlRight"><span>99.999&euro;</span></div>
					</div>
					<div class="row-fluid">
						<div class="span6"><span class="lev3">Hai risparmiato</span></div>
						<div class="span6 txtAlRight"><span>99.999&euro;</span></div>
					</div>
				</div>
		</div>
		<div class="span4 paddTopMedium">
			<div class="aButtonconsRight paddTopLarge">
				<a href="javascript:;" onclick="openAlert('layeralert03')" class="bpm-btn big  margTopLarge" id="lnkAppuntamento">Realizza obiettivo</a>
			</div>
		</div>
	</div>
	<!-- FINE OBIETTIVO -->	
	
	<!-- OBIETTIVO -->	
	<div class="row-fluid paddBottomMedium paddTopMedium  bfPartecipato">
		<div class="span8">
			<h4>Ipsum Dolor Sit</h4>
			<ul class="bfConsole">
				<li class="obCondiviso">2</li>
				<li class="creatore">Eleuterio Spannafina</li>
				<li class="target">2.000&euro;</li>
				<li class="scadenza">09/12/2014</li>
			</ul>
			<div class="progressBar" data-progress="73"></div>
			<div class="bfProgressConsole margBottomLarge">
					<div class="row-fluid">
						<div class="span6"><span class="lev1">Avete risparmiato</span></div>
						<div class="span6 txtAlRight"><span>99.999&euro;</span></div>
					</div>
					<div class="row-fluid">
						<div class="span6"><span class="lev2">Effettivi</span></div>
						<div class="span6 txtAlRight"><span>99.999&euro;</span></div>
					</div>
				</div>
		</div>
		<div class="span4 paddTopMedium">
			<div class="aButtonconsRight paddTopLarge">
				<a href="#" class="bpm-btn big  margTopLarge" id="lnkAppuntamento">Devi ancora versare?</a>
			</div>
		</div>
	</div>
	<!-- FINE OBIETTIVO -->	
<?php
}
?>	
</div>
<!-- FINE OBIETTIVI -->