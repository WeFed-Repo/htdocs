<h1>Risparmio libero e obiettivi</h1>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit. </p>
<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
<script type="text/javascript">
// Inizializzazione interattivita' interfaccia
$(function(){
	
	// Oggetti "globali"
	bfLibero = $("#bfDettLibero");
	bfObiettivi = $("#bfDettObiettivi");
	
	// Selettore rapporto
	$("#selRapporto").on("change",function(){});
	
	// Radio filtri visualizzazione
	$("input[name=radioView]").click(function(){
		var inpVal = $(this).val();
		bfLibero.hide();
		bfObiettivi.hide();
		if (inpVal !=3) bfLibero.show();
		if (inpVal !=2) bfObiettivi.show();
	});
	
	// Barra avanzamento obiettivo e relativi legenda e testi
	progressObiettivo = progressbar({
		container: $('#container-obiettivo'),
		legend: $('#legend-obiettivo'),
		text: $('#text-obiettivo'),
		tot: 500,
		value: 10
	});
	
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
		<div class="span2">
			&nbsp;
		</div>
		<div class="span6">
			<label class="nomefield">Visualizza:</label>
			<div class="row-fluid paddTopSmall">
				<div class="span4"><label><input type="radio" name="radioView" value="1" checked>Tutti</label></div>
				<div class="span4"><label><input type="radio" name="radioView" value="2">Risparmio libero</label></div>
				<div class="span4"><label><input type="radio" name="radioView" value="3">obiettivi</label></div>
			</div>
		</div>
	</div>
</div>
<!-- FINE SELETTORE RAPPORTO E FILTRI -->

<!-- RISPARMIO LIBERO -->
<div id="bfDettLibero">


</div>
<!-- FINE RISPARMIO LIBERO -->
<style>
.bfProgressConsole span{font-size: 13px;font-weight:bold}
.bfProgressConsole span.lev1 {padding-left:0}
.bfProgressConsole span.lev2{padding-left:20px}
.bfProgressConsole span.lev3 {padding-left:40px}
</style>
<!-- OBIETTIVI -->
<div id="bfDettObiettivi">
	<div class="row-fluid margBottomLarge paddTopLarge">
		<div class="progressBar" data-progress="71"></div>
		<div class="bfProgressConsole margBottomLarge">
			<div class="row-fluid">
				<div class="span6"><span class="lev1">Avete risparmiato</span></div>
				<div class="span6 txtAlLeft"><span>99.999&euro;</span></div>
			</div>
			<div class="row-fluid">
				<div class="span6"><span class="lev2">Effettivi</span></div>
				<div class="span6 txtAlLeft"><span>99.999&euro;</span></div>
			</div>
			<div class="row-fluid">
				<div class="span6"><span class="lev3">Hai risparmiato</span></div>
				<div class="span6 txtAlLeft"><span>99.999&euro;</span></div>
			</div>
			<div class="row-fluid">
				
			</div>
		</div>
		
		
		<div class="progressBar" data-progress="100"></div>
		<div class="progressBar" data-progress="1"></div>
		<div class="progressBar" data-progress="99"></div>
		<div class="progressBar" data-progress="50"></div>
		
		
	</div>				
</div>
<!-- FINE OBIETTIVI -->