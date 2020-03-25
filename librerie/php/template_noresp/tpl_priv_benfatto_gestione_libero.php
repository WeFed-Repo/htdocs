<h1>Risparmio libero e obiettivi</h1>
<p>Controlla lo stato di avanzamento del tuo obiettivo: a che punto siete e quanti giorni mancano alla scadenza.</p>
<script type="text/javascript" src="/wscmn/js/ret/priv_widgets.js"></script>
<script type="text/javascript">
/* Inizializzazione oggetti interattivi in pagina*/
 $(function(){
	
	// Inizializzazione interattivita'
	bfShowPeriodici = $(".vediPeriodici");
	bfTipoAlimentazione = $("#tipoAlimentazione");
	
	// Tab
	$(".tabGeneric li").click(function(){
		$(".tabGeneric li").removeClass("active");
		$(this).addClass("active");
		$(".tabContent").hide();
		$("#form" + $(this).attr("id").replace("tab","")).show();
		$("#dettPeriodico").hide();
	});
	
	
	// Select tipo di trasferimento
	bfTipoAlimentazione.change(function(){
		inpVal = $(this).val();
		$(".trasf").hide();		
		switch (inpVal)
		{
			case "1":
				$(".trasf.singolo").show();		
			break;
			
			case "2":
				$(".trasf.periodico").show();		
			break;
			
			case "3":
				$(".trasf.soglia").show();		
			break;
		}
	});
	
	// Alla compilazione del campo abilita il trasferimento (inserire qui eventuali controlli in linea)
	$("#inputImporto").on("keyup",function(){
		if ($(this).val() != "")
			{$("#btnTrasferisci").removeClass("buttDis")}
		else
			{$("#btnTrasferisci").addClass("buttDis")}
	
	}) 
	$("#btnTrasferisci").click(function(){
		if (!$(this).hasClass("buttDis"))
		{
			// Effettua il submit del dato
			alert("trasferimenton e refresh dei dati");
		}
	});
	
	// Datepicker 
	$("#periodicoDal").datepicker({
		showOn: "button",
		buttonImage: "/img/btn_pickdate_priv.gif",
		buttonImageOnly: true,
		minDate: 1,
		//MxDate fissata solo come esempio
		maxDate: "+1M +10D",
		//fissare maxDate alla scadenza del certificato
		dateFormat: "dd/mm/yy",
		showOtherMonths: true
		
	});
	$("#datepicker").mask("99-99-9999");
	
	// Visualizza dettagli periodico
	bfShowPeriodici.click(function(){
		$("#formAlimenta").toggle();
		$("#dettPeriodico").toggle();
	});
	
	// Conferma utilizzo
	$("#utilizzaConf").click(function(){
		$(".utilizzaStep1").hide();
		$(".utilizzaStep2").show();
	});
 });

</script>
<style>

</style>
<div class="bfRisparmiato">
	<span class="titoletto">Risparmio libero</span>
	<span>Hai gi&agrave; risparmiato <strong>9999.99&euro;</strong></span>
</div>
<ul class="tabGeneric">
	<li class="active" id="tabAlimenta">
		<span class="tabBorder">
			<span class="tabGradient">
				<a href="javascript:;" title="scheda prodotto">Alimenta</a>
			</span>
		</span>
	</li>
	<li class="" id="tabUtilizza">
		<span class="tabBorder">
			<span class="tabGradient">
				<a href="javascript:;" title="richiesta">Utilizza</a>
			</span>
		</span>
	</li>
</ul>

<!-- CONTENUTO DEL TAB ALIMENTA -->
<div class="formGeneric tabContent" id="formAlimenta">
	<p>Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude.</p>
	<form>
		<div class="row-fluid">
			<div class="span4">
				<label class="nomefield">Tipo di trasferimento:</label>
				<select id="tipoAlimentazione">
					<option value="1">Singolo</option>
					<option value="2">Periodico</option>
					<option value="3">A soglia</option>
				</select>
			</div>
			
			<!-- VARIANTI DESTRA TIPO TRASFERIMENTO -->
			<div class="span8">
				
				<!-- SINGOLO -->
				<div class="row-fluid trasf singolo">
					<div class="span4">
						<label class="nomefield">Disponibilità</label>
						<span class="output paddTopSmall">5.000,00€</span>
					</div>
					<div class="span4">
						<label class="nomefield">Importo</label>
						<input type="text" class="withIco" id="inputImporto"><span class="intertext">€</span>
					</div>
					<div class="span4">
						<div class="aButtonconsRight">
							<div class="btnc"><a class="aButton buttDis" href="javascript:;" id="btnTrasferisci"><span>trasferisci</span></a></div>
						</div>
					</div>
				</div>
				<!-- FINE SINGOLO -->
				
				<!-- PERIODICO -->
				<div class="row-fluid trasf periodico">
					<div class="span12 paddTopLarge">
						<a href="javascript:;" class="vediPeriodici">Vedi tutti i trasferimenti periodici gi&agrave; impostati</a>
					</div>
				</div>
				<!-- FINE PERIODICO -->
				
				<!-- A SOGLIA -->
				<div class="row-fluid trasf soglia">
					<div class="span12">
						<a href="#"></a>
					</div>
				</div>
				<!-- FINE PERIODICO -->
			</div>
		</div>
		
		
		<!-- BLOCCHI INTERFACCIA DI TRASFERIMENTO -->
		
		<!-- TRASFERIMENTO PERIODICO -->
		<div class="row-fluid trasf periodico">
			<div class="span3">
				<label class="nomefield">Frequenza</label>
				<select>
					<option>Settimanale</option>
				</select>
			</div>
			<div class="span3">
				<label class="nomefield">A partire da</label>
				 <input type="text" class="withIco" id="periodicoDal" placeholder="" value="22/11/2014">
			</div>
			<div class="span6">
				<label class="nomefield">Scadenza</label>
				<div class="row-fluid">
					<div class="span3">
						<label class="paddTopMedium"><input type="radio">su richiesta</label>
					</div>
					<div class="span9">
						<label class="paddTopMedium"><input type="radio">automaticamente dopo <input type="text" class="inline mini"/> trasferimenti</label>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid trasf periodico">
			<div class="span3">
				<label class="nomefield">Importo</label>
				<input type="text" class="withIco" id="inputImporto"><span class="intertext">€</span>
			</div>
			<div class="span9">
				<div class="aButtonconsRight">
					<div class="btnc">
						<a class="aButton" href="javascript:;"><span>imposta</span></a>
					</div>
				</div>
			</div>
		</div>
		<!-- FINE TRASFERIMENTO PERIODICO -->
		
		<!-- TRASFERIMENTO A SOGLIA -->
		<div class="row-fluid trasf soglia">
			<div class="span12">
				<p>Lorem ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit  ipsum dolor sit .</p>
			</div>
		</div>
		<div class="row-fluid trasf soglia">
			<div class="span4">
				<label for="importoTREvof" id="labelImportoTREvo" class="nomefield">Soglia minima</label>
				<div class="row-fluid">
					<div class="span6">
						<input type="text" name="" id="">
					</div>
					<div class="span1">
						<a class="flRight" href="javascript:;" data-tooltip="Se il saldo del conto corrente scende sotto la soglia minima, sarà effettuato un trasferimento da Risparmio Ben Fatto al conto."><img class="" src="/img/ret/ico2or_help2.gif"></a>
					</div>
					<div class="span5">&nbsp;</div>
				</div>
			</div>
			<div class="span4">
				<label for="importoTREvof" id="labelImportoTREvo" class="nomefield">Soglia massima</label>
				<div class="row-fluid">
					<div class="span6"><input type="text" name="" id="" ></div>
					<div class="span1"><a class="flRight" href="javascript:;" data-tooltip="Se il saldo del conto corrente supera la soglia massima, sarà effettuato un trasferimento dal conto a Risparmio Ben Fatto."><img class="" src="/img/ret/ico2or_help2.gif"></a></div>
					<div class="span5">&nbsp;</div>
				</div>	
			</div>
			<div class="span4">
				<div class="aButtonconsRight">
					<div class="btnc">
						<a class="aButton" href="javascript:;"><span>imposta</span></a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- FINE TRASFERIMENTO A SOGLIA -->
		
		<!-- FINE BLOCCHI INTERFACCIA DI TRASFERIMENTO -->
		
	</form>
</div>
<!-- FINE TAB ALIMENTA -->
<div class="formGeneric tabContent" id="dettPeriodico" style="display:none">
<p>Hai attivato i seguenti trasferimenti periodici. <a href="javascript:;" class="vediPeriodici">Imposta nuovo</a></p>
<table class="dettTable">
	<tr>
		<th>Importo</th>
		<th>Frequenza</th>
		<th>Attivo dal</th>
		<th>Scadenza</th>
		<th>Annulla</th>
	</tr>
	<tr>
		<td class="right">9.999&euro;</td>
		<td class="left">Lorem ipsum</td>
		<td class="left">22/12/2012</td>
		<td class="left">lorem dolor amet</td>
		<td class="center"><a href="#"><img src="/img/ret/ico1gr_revoca.gif"></a></td>
	</tr>
	<tr>
		<td class="right">9.999&euro;</td>
		<td class="left">Lorem ipsum</td>
		<td class="left">22/12/2012</td>
		<td class="left">lorem dolor amet</td>
		<td class="center"><a href="#"><img src="/img/ret/ico1gr_revoca.gif"></a></td>
	</tr>
	<tr>
		<td class="right">9.999&euro;</td>
		<td class="left">Lorem ipsum</td>
		<td class="left">22/12/2012</td>
		<td class="left">lorem dolor amet</td>
		<td class="center"><a href="#"><img src="/img/ret/ico1gr_revoca.gif"></a></td>
	</tr>
	<tr>
		<td class="right">9.999&euro;</td>
		<td class="left">Lorem ipsum</td>
		<td class="left">22/12/2012</td>
		<td class="left">lorem dolor amet</td>
		<td class="center"><a href="#"><img src="/img/ret/ico1gr_revoca.gif"></a></td>
	</tr>
</table>
</div>


<!-- CONTENUTO DEL TAB ALIMENTA -->
<div class="formGeneric tabContent" id="formUtilizza" style="display:none">
	<div class="row-fluid utilizzaStep1">
		<div class="span10">
		<p>
			Hai deciso di utilizzare il risparmio accumulato: <strong>Ben Fatto</strong>!<br><br>
			Cliccando su "Conferma" l'importo sarà da subito utilizzabile sul tuo conto corrente, per i tuoi acquisti.<br>
		</p>
		</div>
		<div class="span2">
			<img src="/img/ret/ico2inf_ob_raggiunto.gif" alt="" class="flRight paddRightMedium">
		</div>
	</div>
	<div class="row-fluid paddTopLarge utilizzaStep1">
		<div class="span12">
			<div class="aButtonconsRight">
				<div class="btnc">
					<a class="aButton" href="javascript:;" id="utilizzaConf"><span>conferma</span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid utilizzaStep2" style="display:none">
		<div class="span12">
			<p><strong>Scegli come utilizzare il tuo risparmio.</strong><br>
			<br> 
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id nulla a sapien pellentesque dignissim. Aliquam at lorem nis est.</p>
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
					<a href="javascript:;"  title="Acquista su Bazak">
						<img src="/img/ret/link_obt_bazak.png" alt="Acquista su Bazak">
					</a>
				</div>
				<div class="boxRealizza" id="boxBazak">
					<a href="javascript:;" title="">
						<img src="/img/ret/link_obt_giroconto.png" alt="">
					</a>
				</div>
				<br class="clear">
			</div>
		</div>
	</div>
</div>
<!-- FINE TAB UA -->
