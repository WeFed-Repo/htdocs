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

	
});
</script>
<!-- OVERLAY SELEZIONE REALIZZA -->



<!-- FINE OVERLAY SELEZIONE REALIZZA -->

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
<div id="bfDettLibero" class="voiceGroup">
	<div class="heading"><h3>Il tuo risparmio libero</h3></div>
	<div class="row-fluid">
		<div class="span8">
			<p>Hai gi&agrave; risparmiato <strong id="bfRisparmiato">9999.99 &euro;</strong><br>
			<br>
			Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude  ipsum dolor sit amet consectetur adipiscing elit summa cum laude.
			<p>
		</div>
		<div class="span4">
			<div class="aButtonconsRight paddTopLarge">
				<a href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_gestione_libero.php&liv1=RB&liv2=1&liv3=1" class="bpm-btn big  margTopLarge" id="lnkAppuntamento">Gestisci risparmio<i class="icon-angle-right icon-after"></i></a>
			</div>
		</div>
	</div>
</div>
<!-- FINE RISPARMIO LIBERO -->
<!-- OBIETTIVI -->
<div id="bfDettObiettivi"  class="voiceGroup">
	<h3>I tuoi obiettivi</h3>
	<div class="row-fluid paddBottomLarge paddTopLarge">
		<div class="span3">
			<a class="bBig" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_gestione_obiettivo.php&liv1=RB&liv2=1&liv3=1">
				<img src="/img/ret/vetrina/0015/ldpi.png">
				<span>Gestisci obiettivo</span>
			</a>
		</div>
		<div class="span9">
			<h4>Lorem Ipsum</h4>
			<ul class="bfConsole">
				<li class="obPersonale"></li>
				<li class="target">1.000.000&euro;</li>
				<li class="scadenza">09/12/2014</li>
				<li class="scaduto">Scaduto</li>
			</ul>
			<div class="progressBar" data-progress="73"></div>
		</div>
	</div> 
	<div class="row-fluid paddBottomLarge paddTopLarge">
		<div class="span3">
			<a class="bBig" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_gestione_obiettivo.php&liv1=RB&liv2=1&liv3=1">
				<img src="/img/ret/vetrina/0025/ldpi.png" style="width:100%">
				<span>Gestisci obiettivo</span>
			</a>
		</div>
		<div class="span9">
			<h4>Lorem Ipsum</h4>
			<ul class="bfConsole">
				<li class="obCondiviso">4</li>
				<li class="target">1.000.000&euro;</li>
				<li class="scadenza">09/12/2014</li>
				<li class="inCorso">In corso</li>
			</ul>
			<div class="progressBar" data-progress="5"></div>
		</div>
	</div> 	
	<div class="row-fluid paddBottomLarge paddTopLarge">
		<div class="span3">
			<a class="bBig" href="/connect.php?page=str_interna_priv.php&tpl=tpl_priv_benfatto_gestione_obiettivo.php&liv1=RB&liv2=1&liv3=1">
				<img src="/img/ret/vetrina/0041/ldpi.png" style="width:100%">
				<span>Gestisci obiettivo</span>
			</a>
		</div>
		<div class="span9">
			<h4>Lorem Ipsum</h4>
			<ul class="bfConsole">
				<li class="obCondiviso">4</li>
				<li class="creatore" data-textcut="12">Duilio Paolo Coccoluto panna</li>
				<li class="target">1.000.000&euro;</li>
				<li class="scadenza">09/12/2014</li>
				<li class="scaduto">Scaduto</li>
			</ul>
			<div class="progressBar" data-progress="130"></div>
		</div>
	</div> 
</div>
<!-- FINE OBIETTIVI -->