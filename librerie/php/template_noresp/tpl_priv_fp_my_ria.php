<?php
	$permettiCreaPiano = false;
	$permettiDispositive = true;
	$isWebank = ($bank == "webank");
	$isBpm = ($bank == "bpm");
	$abilOroCap = false;
	switch ($bank) {
		case 'bl' : $sitoBanking = 'BLBANKING'; break;
		case 'bm' : $sitoBanking = 'BMBANKING'; break;
		case 'bpm' : $sitoBanking = 'BPMBANKING'; break;
		case 'ca' : $sitoBanking = 'CRABANKING'; break;
		default : $sitoBanking = 'WEBANK'; $abilOroCap = true;
	}
	if ($isWebank) {
		$contoLabelLongSingLow = 'conto corrente';
		$contoLabelLongPlurLow = 'conti correnti';
		$contoLabelLongSingUp = 'Conto corrente';
		$contoLabelLongPlurUp = 'Conti correnti';
		$contoLabelShortSingLow = 'conto';
		$contoLabelShortPlurLow = 'conti';
		$contoLabelShortSingUp = 'Conto';
		$contoLabelShortPlurUp = 'Conti';
	} else {
		$contoLabelLongSingLow = 'rapporto';
		$contoLabelLongPlurLow = 'rapporti';
		$contoLabelLongSingUp = 'Rapporto';
		$contoLabelLongPlurUp = 'Rapporti';
		$contoLabelShortSingLow = 'rapporto';
		$contoLabelShortPlurLow = 'rapporti';
		$contoLabelShortSingUp = 'Rapporto';
		$contoLabelShortPlurUp = 'Rapporti';

	}
?>

<?php 

	$otpbox = $_GET["otpbox"];
	if ($otpbox == "show") {
?>
<script type="text/javascript">
$(function(){
	/* Emulazioni interattivita' (pulsante "chiudi") */
	/* Radio Button */
	/* Pulsante "prosegui" con emulazione errore (campo vuoto) */
	$("#tokenAttChiudi").click(function(){
		$("#tokenAtt").hide();
	
	});

});
</script>


	
<div class="boxesito attenzione margBottomLarge" id="tokenAtt">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
					et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
					<ul class="listafrec">
						<li><a href="#1" title="#">Lorem ipsum dolor sit amet, consectetuer</a></li>
					</ul>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="aButtoncons paddTopMedium">
						<div class="aButtonconsRight">
							<span class="btnc"><a class="aButton" href="javascript:;" id="tokenAttChiudi"><span>Chiudi</span></a></span>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<?php

	}

?>


<?php 

	$pabox = $_GET["pabox"];
	if ($pabox == "show") {
?>
<script type="text/javascript">
$(function(){
	/* Emulazioni interattivita' (con errore) */
	/* Radio Button */
	var radioPC = $("#radioPostazioneCont"),
	radioPCSi = $("#radioPostazioneSi"),
	radioPCNo = $("#radioPostazioneNo");
	$("input[name=radioPostazione]").change(function(){
		var fv = $(this).val();
		if (fv == "Si") {
			radioPCSi.show();
		}
		if (fv == "No") {
			radioPCNo.show();
		}
		radioPC.hide();
	});

	$("select[name=selectPostazione]").change(function(){
		var fv = $(this).val();
		if (fv == "Si") {
			radioPCSi.show();
		}
		else
		{
			radioPCSi.hide();
		}
		$("#selectPostazioneCont").hide();
	});


	/* Pulsante annulla */
	$("#postAutorizzata .postAnnulla").click(function(){
		radioPC.show().find("input[type=radio]").attr("checked",false);
		radioPCSi.hide();
		radioPCNo.hide();
	});

	/* Pulsante "prosegui" con emulazione errore (campo vuoto) */
	$("#postSaveBtn").click(function(){
		var postField = radioPCSi.find("input[name=nomePostazione]");
		if(postField.val() == "") {
			setError(postField,"Lorem ipsum dolor sit amet.");
			getFirstError(postField.parent());
		}
		else
		{
			// Ev. chiamata in Ajax
			setLoadingOn("#postAutorizzata");
		
			// Esempio esito
		}
	});

});
</script>
<div class="boxGeneric paddLarge paddBottomMedium margBottomLarge" id="postAutorizzata">
	<form name="xxx" class="formGeneric">
		<div class="row-fluid">
			<div class="span12">
				<div class="paddBottomMedium">
					<h2 class="titGeneric02 noPadd noMarg">Postazione autorizzata</h3>
					<h3 class="noMarg noPadd">Lorem ipsum dolor sit amet consectetur adipiscing summa cum laude.</h3>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, aspernatur repudiandae dolore harum voluptate earum et sit consectetur quis, accusamus rerum vel quidem quaerat iste, totam dolorum ab aliquam culpa.<br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem culpa iste sint repellendus. Similique, <a href="#" target="_blank">omnis dolorum</a>.
				</p>
				<!--
				<div class="row-fluid paddTopMedium" id="radioPostazioneCont">
					<div class="span6">
						<label><input type="radio" name="radioPostazione" value="Si">Si</label>
					</div>
					<div class="span6">	
						<label><input type="radio" name="radioPostazione" value="N<o">No</label>
					</div>
				</div>
				-->
				<div class="row-fluid paddTopMedium" id="selectPostazioneCont">
					<div class="span6 paddBottomMedium">
						<select name="selectPostazione">
							<option value="">Seleziona...</option>
							<option value="Si">Si</option>
							<option value="No">Non adesso</option>
							<option value="Nonpiu">Non ricordarmelo mai pi&ugrave;</option>
						</select>			
					</div>
				</div>
				
				<div id="radioPostazioneSi" style="display:none">
					<h3>Come desideri salvare la nuova postazione?</h3>
					<p>Descrivi il tipo di postazione da cui fai l' accesso es: casa, lavoro per agevolarti nella gestione delle postazioni</p>
					<div class="row-fluid paddTopMedium">
						<div class="span6">
							<label class="nomefield">Descrizione postazione</label>
							<input type="text" maxlenght="30" name="nomePostazione">
						</div>
					</div>
					<div class="row-fluid paddTopMedium">
						<div class="aButtonconsLeft">
							<span class="btnc"><a class="aButtonClear postAnnulla" href="javascript:;"><span>Annulla</span></a></span>
						</div>
						<div class="aButtonconsRight">
							<span class="btnc"><a class="aButton" href="javascript:;" id="postSaveBtn"><span>Salva postazione</span></a></span>
						</div>
					</div>

					<!-- ATTENZIONE: MESSAGGIO ALTERNATIVO -->
					<h3>Hai gi&agrave; salvato 5 postazioni autorizzate.</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eum amet aperiam deleniti quos consectetur, blanditiis ab vel, officiis at eos sapiente voluptatem excepturi assumenda perspiciatis distinctio minus molestias incidunt.</p>
						<br><a href="#1" title="#">Area gestione PA</a>
					<!-- FINE MESSAGGIO ALTERNATIVO -->

				</div>

				<div id="radioPostazioneNo" style="display:none">
					<h3>Desideri non salvare la nuova postazione?</h3>
					<div class="row-fluid paddTopMedium">
						<div class="aButtonconsLeft">
							<span class="btnc"><a class="aButtonClear postAnnulla" href="javascript:;"><span>Annulla</span></a></span>
						</div>
						<div class="aButtonconsRight">
							<span class="btnc"><a class="aButton" href="javascript:;"><span>Non salvare postazione</span></a></span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</form>
</div>

<?php
	}
?>


<?php if ($bank == "webank" && empty($otpbox) && empty($pabox)) { ?>
<!--<div class="boxstepCont">	
	<div class="boxstep">
		<div class="top"><span class="angololeft"></span><span class="angoloright"></span></div>
		<div class="middle">
			<div class="text">
				<a href="javascript:;" class="flRight closeBoxAlert"><img src="/img/ico1gr_close_green.gif"></a>
				<h3>Deposito titoli</h3>
				<div class="row-fluid">
					<div class="span8">
						<p>Hai prenotato nella procedura d'apertura conto il deposito  titoli. Clicca sul bottone per procedere nella richiesta oppure scoprine i vantaggi nella <a href="#">scheda prodotto</a></p>
					</div>
					<div class="span4">
						<div class="aButtoncons">
							<a href="javascript:;" class="aButton"><span>apri il deposito adesso</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom">
			<span class="angololeft"></span>
			<span class="angoloright"></span>
		</div><br class="clear">
	</div>
</div>-->
<div class="banner">
	<img src="/img/ret/banner_deposito_aol.jpg" alt="Apri il tuo deposito titoli" usemap="#map_deposito_aol"/>
	<map name="map_deposito_aol" id="map_deposito_aol">
				<area title="Scopri" href="#" shape="rect" coords="15,50,55,72" style="outline:none;" />
				<area title="Apri il tuo deposito titoli" href="#" shape="rect" coords="448,23,630,59" style="outline:none;" />
	</map>
</div>

<?php 
} 
?>
<?php
	//virtual("/librerie/include/commons/boxeditoriali/box_black_priv_330.php");
	virtual("/librerie/include/commons/boxeditoriali/box_black_priv_FP_050c.php");
	if ($bank == "webank") {
		//virtual("/librerie/include/commons/boxeditoriali/box_black_priv_326.php");
	}
?>

<!-- UPPER BANNER -->
<div class="topbanner">
<?php if ($bank == "webank") { ?>
	<a id="cdbanner" href="javascript:callJSP('/wbOnetoone/2l/do/wbOnetoone/schedaPrivata.do', null,'&tabId=nav_priv_wbx_myhome&OBSKEY=LANDINGPAGE-1397639359708&OBSCNT=LANDING&OBSCEL=CELLBANNERWBBLACK-1397827584962')" target="_self" title=""><img src="/img/ret/banner_alert_sms_mail_645.gif"></a>
<?php 
} else { 
?>
	<a href="http://bpm.it/it-com/privati-e-famiglie/assicurazioni/casa/multiprotezione-casa.html" target="_blank" title=""><img src="https://www.bpmbanking.it/wscmn/wbx/upload/cellette/BPM_ProtezCasaBanner_giu14.jpg"></a>
<?php 
} 
?>
</div>
<div class="clear"></div>
<!-- FINE UPPER BANNER -->		
<div class="tabber">
	<div class="tablistcellc">
		<a href="javascript:;" onclick="opentab(this)" class="active">I miei conti</a>
		<a href="javascript:;" onclick="opentab(this)">Le mie carte</a>
		<a href="javascript:;" onclick="opentab(this)">Il mio portafoglio</a>
		<a href="javascript:;" onclick="opentab(this)">I miei finanziamenti</a>
		<span class="accesso flRight">Ultimo accesso<br/>03/04/2013 h. 10:25</span>
	</div>
	<div class="boxcontainer">
		<div class="riacontainer">
			<?php
			virtual("/librerie/include/commons/ria/ria.php");
			?>
		</div>

		<div id="conto2">
			<div id="idSezCarte0">
		<!-- OVERLAY EUROPA -->
			<div id="overGb" class="overdett gbdett" style="display:none;"> 
				<div class="top">
					<p>
						Bancomat internazionale Webank n. <span>**022</span><br>
						Profilo internazionale: <span>Europa</span>
					</p>
					<span class="cardstate"><img alt="" src="/wscmn/img/ico2inf_ok.gif" alt="Non attiva"/> Carta attiva</span>
					<a onclick="$('overGb').hide();" href="#1"><img class="chiudi" title="Chiudi" alt="Chiudi" src="/img/ret/btn_popup_chiudi.gif"/></a> 
				</div>
				<div class="dett">
					<span class="title">Ecco l'elenco dei Paesi dove puoi utilizzare il tuo bancomat:</span>
					<p>
						Albania, Andorra, Antartide, Armenia,<br>
						Austria, Azerbaijan, Bielorussia, Belgio,<br>
						Bosnia Erzegovina, Bulgaria, Cipro, Croazia,<br> 
						Danimarca, Estonia, Finlandia, Francia,<br>
						Georgia, Germania, Gibilterra, Gran Bretagna,<br>
						Grecia, Groenlandia, Guadalupe, Irlanda,<br>
						Islanda, Israele, Italia, Kazakistan, Kyrgyzstan,<br>
						Lettonia, Liechtenstein, Lituania, Lussemburgo,<br>
						Macedonia, Malta, Martinica, Moldavia,<br>
						Principato di Monaco, Olanda, Norvegia, Polonia,<br>
						Portogallo, Rep. Ceca, Romania, Russia,<br>
						San Marino, Serbia - Montenegro - Kosovo,<br>
						Slovacchia, Slovenia, Spagna, Svezia, Svizzera,<br>
						Stato della Città del Vaticano, Tajikistan,<br>
						Turchia, Turkmenistan, Ucraina, Ungheria.
					</p>
					<p>	
						Se devi recarti in un paese diverso da quelli elencati, <a href="#">modifica il tuo profilo</a>.
					</p>
				</div>
			</div>
			<!-- FINE OVERLAY EUROPA -->
			
		<table class="tab50 tab50b" width="645" cellpadding="0" cellspacing="0">
			<tr>
				<th class="tit sx" colspan="8" width="645">BANCOMAT</th>
			</tr>
			<tr class="br">
				<th class="sx first" width="81">Carta</th>
				<th class="sx" width="30">Stato</th>
				<th class="sx" width="44">Numero</th>
				<th class="sx" width="158">Conto corrente</th>
				<th class="sx" width="111">Maxi prelievo</th>
				<th class="sx" width="111">Utilizzo all'estero</th>
				<th class="center" width="56">Massimali</th>
				<th class="center last" width="40">Movim. su c/c</th>
			</tr>
			<!-- ES. RIGA EVIDENTE -->
			<tr class="evident">
				<td class="feature" colspan = "8">
					<a href="#">Lorem ipsum dolor sit amet consectetur >></a>
				</td>
			</tr>
			</tr>
			<!-- FINE ES. RIGA EVIDENTE -->
			
			<tr class="b">
				<td class="sx first" width="70">Bancomat Internazionale Webank</td>
				<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivalo"></td>
				<td class="sx">***00XX</td>
				<td class="sx nowr">00599-00000XXXXX-EUR</td>
				<td class="sx"><span class="noTooltip"><img title="Attivalo" alt="Attivalo" src="/wscmn/img/ico2inf_attivalo.gif"/></span>
				<span class="imgTooltip"><a href="">Attivalo</a></span></td>
				<td class="dx"><a href="javascript:;" title="Mondo" onclick="showDettTable(this,'overDett','idSezCarte0')"><img title="Mondo" alt="Mondo" src="/img/ret/ico1gr_modifica.gif"/>Mondo</a></td>
				<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>				
			</tr>
			<tr class="b">
				<td class="sx first" width="70">Bancomat Internazionale Webank</td>
				<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
				<td class="sx">***00XX</td>
				<td class="sx  nowr">00599-00000XXXXX-EUR</td>
				<td class="sx"><span id="liquiditaDep2" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
						<span class="uniqTooltipPos"><img title="Attiva" alt="Attiva" src="/wscmn/img/ico2inf_corso.gif"/></span>
						<span class="uniqTooltipInnerHTML">lorem ipsum</span>
					</span>
				<span class="imgTooltip">Attivazione<br />in corso</span></td>
				<td class="dx"><a href="javascript:;" onclick="showDettTable(this,'overGb','idSezCarte0')" title="Europa"><img title="Lorem" alt="Lorem" src="/img/ret/ico1gr_modifica.gif"/>Europa</a></td>
				<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
			</tr>
			<tr class="b">
				<td class="sx first" width="70">Bancomat Internazionale Webank</td>
				<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
				<td class="sx">***00XX</td>
				<td class="sx nowr">00599-00000XXXXX-EUR</td>
				<td class="sx"><span id="liquiditaDep2" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
						<span class="uniqTooltipPos"><img title="In corso" alt="In corso" src="/wscmn/img/ico2inf_ok.gif"/></span>
						<span class="uniqTooltipInnerHTML">lorem ipsum</span>
					</span>
				<span class="imgTooltip">Attivo</span></td>
				<td class="dx"><a href="javascript:;" onclick="showDettTable(this,'overGb','idSezCarte0')" title="Europa"><img title="Lorem" alt="Lorem" src="/img/ret/ico1gr_modifica.gif"/>Europa</a></td>
				<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
			</tr>
			<tr class="b">
				<td class="sx first" width="70">Bancomat Internazionale Webank</td>
				<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
				<td class="sx">***00XX</td>
				<td class="sx nowr">00599-00000XXXXX-EUR</td>
				<td class="sx"><span class="noTooltip"><img title="Gi&agrave; utilizzato" alt="Gi&agrave; utilizzato" src="/wscmn/img/ico2inf_utilizzo.gif"/></span>
				<span class="imgTooltip">Gi&agrave;<br />utilizzato</span></td>
				<td class="dx"><a href="#" title="Non disponibile"><img title="Modifica in corso" alt="Modifica in corso" src="/img/ret/ico2inf_nondisp.gif"/>Modifica in corso</a></td>
				<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
			</tr>
			<tr class="b">
				<td class="sx first" width="70">Bancomat Internazionale Webank</td>
				<td class="center"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
				<td class="sx">***00XX</td>
				<td class="sx nowr">00599-00000XXXXX-EUR</td>
				<td class="sx"><span class="noTooltip"><img title="Attivalo" alt="Attivalo" src="/wscmn/img/ico2inf_attivalo.gif"/></span>
				<span class="imgTooltip"><a href="">Attivalo</a></span></td>
				<td class="dx"><a href="javascript:;" onclick="showDettTable(this,'overGb','idSezCarte0')" title="Europa"><img title="Lorem" alt="Lorem" src="/img/ret/ico1gr_modifica.gif"/>Europa</a></td>
				<td class="center"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td class="center last"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
			</tr>
			<tr class="b">
				<td class="sx first lastrow" width="70">Bancomat Internazionale Webank (geoblock dis)</td>
				<td class="center lastrow"><img src="/wscmn/img/ico2inf_ok.gif" title="Attivo"></td>
				<td class="sx lastrow">***00XX</td>
				<td class="sx lastrow nowr">00599-00000XXXXX-EUR</td>
				<td class="sx lastrow"><span class="noTooltip"><img title="Attivalo" alt="Attivalo" src="/wscmn/img/ico2inf_attivalo.gif"/></span>
				<span class="imgTooltip"><a href="">Attivalo</a></span></td>
				<td class="dx lastrow"><a href="javascript:;" title="Mondo" onclick="showDettTable(this,'overDett','idSezCarte0')"><img title="Lorem" alt="Lorem" src="/wscmn/img/ico1gr_modifica.gif"/>Mondo</a>
				<!-- OVERLAY MONDO -->
				<div id="overDett" class="overdett" style="display:none;"> 
					<div class="cardstatus">
						<p>Bancomat internazionale n° <b>123456</b></p>
						<span class="cardstate"><img alt="" src="/wscmn/img/ico2inf_ok.gif" alt="Non attiva" />  Carta attiva</span>
					</div>
					<a onclick="$('overDett').hide();" href="#1"><img class="chiudi" title="Chiudi" alt="Chiudi" src="/img/ret/btn_popup_chiudi.gif"/></a> 
					<h3>Profilo mondo</h3>
					<p>Con questo profilo puoi utilizzare il tuo bancomat <strong>ovunque</strong>.<p>
					<table class="form01 out">
						<tr>
							<td class="uno" width="105">Data attivazione</td>
							<td><strong>gg/mm/aaaa</strong></td>
							<td class="uno" width="105">Data scadenza</td>
							<td><strong>gg/mm/aaaa</strong></td>
						</tr>
					</table>
					<p><strong>RICORDA</strong>: in alcuni paesi gli standar di sicurezza sono <strong>meno restrittivi</strong> che in altri. Ti consigliamo di <strong>mantenere il profilo Europa</strong> a meno che non prevedi di recarti in un paese non incluso in tale profilo.</p>
					<div class="fooformright">
						<div><a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
					<br class="clear">
					</div>
				</div>
				<!-- FINE OVERLAY MONDO -->
				</td>
				<td class="center lastrow"><a href="#" onclick="javascript:detailBancomat('0','0','0','Bancomat Internazionale Webank','000000xx','carte1');MM_showHideLayers('carte1','','show');" alt="Massimali carta"><img src="/img/ret/ico1gr_dettaglio.gif"></a></td>
				<td class="center last lastrow"><a href="#" alt="Movimenti su conto corrente"><img src="/img/ret/ico1gr_mov-su-cc.gif"></a></td>
			</tr>
		</table>
		<br /><br />
		

		<table class="tab50" cellpadding="0" cellspacing="0">
			<tr>
				<th class="tit sx" colspan="8">CARTE DI CREDITO</th>
			</tr>
			<tr class="br">
				<th class="sx first">Carta</th>
				<th class="sx">Stato</th>
				<th class="sx">Numero</th>
				<th class="sx">Conto corrente</th>
				<th class="center">Scadenza</th>
				<th class="center">Servizio alert</th>
				<th class="center">Dati Carta</th>
				<th class="center last">Movimenti</th>
			</tr>

			<tr class="b">
				<td class="sx first lastrow">
				Cartimpronta
				</td>
				<td class="center lastrow">
					<img src="/wscmn/img/ico2inf_ok.gif" title="Attivo">
				</td>
				<td class="sx lastrow">***9999</td>
				<td class="sx lastrow">
					  00599-00000XXXXX-EUR  
				</td>
				<td class="center lastrow" >31/12/2011</td>
				<td class="sx lastrow"><span class="noTooltip"><img src="/img/ret/ico1gr_sms.gif" alt="Attivalo" title="Attivalo"></span>
			<span class="imgTooltip"><a href="">Vai</a></span></td>
				<td class="center lastrow">
					<a href="javascript:;" onclick="openPopOverLayer('layeralert1', 'floating', 2)">
						<img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli carta"></a>
				</td>
				<td class="center last lastrow">
					<a href="/webankpri/banking/WsImprontaExternalMovements.do" target="_blank">
						<img src="/img/ret/ico1gr_compravendi.gif" alt="Movimenti Carta"></a>
				</td>
			</tr> 
		</table>

		
	</div>
	
		</div>
		<div id="conto3">
				<?php if ($bank == "bpm") { 
					?>
				<!-- contenuto bpm Conto Profamily-->
				<div id="selezb">
					<table cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td>Conto corrente</td>
							<td><select name="select"><option>CC 00599 - 0000004215</option><option>CC 00599 - 0000004216 </option></select>
							<a class="preferito" title="Lorem ipsum" href="#"><img alt="Lorem ipsum" src="/img/ico1gr_preferito.gif"></a>
							</td>
						</tr>
					</table>
				</div>
				<table cellspacing="0" cellpadding="0" class="tab17 tab17nob tab17bottomspaced">
					<tr> 
						<th style="width: 410px;">Finanziamento</th>
						<th class="nopad" style="width: 158px;">Data attivazione</th>            
						<th style="width: 100px;">Importo EUR</th>
						<th style="width: 38px;">Ammort.</th>
						<th class="ultimo" style="width: 38px;">Dett.</th>
					</tr>
					<tr class="b bb"> 
						<td class="sx">12345-1234567890123 - EUR / PRESTITI PERSONALI</td>
						<td>00/00/0000</td>
						<td class="dx"><b>10.000,00</b></td>              
						<td><a href="javascript:;" class="iconaDettaglio" title="piano di ammortamento" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/tpl_priv_profamily_popup.php&amp;flg=WT&amp;sid=priv');"><img alt="Piano di ammortamento" src="/img/ret/ico1gr_documento.gif"></a></td>
						<td class="ultimo"><a title="Dettagli finanziamento" href="#1"><img alt="Dettagli finanziamento" src="/img/ret/ico1gr_dettaglio.gif"></a></td>
					</tr>
					<tr class="c bb"> 
						<td class="sx">12345-1234567890123 - EUR / PRESTITI PERSONALI</td>
						<td>00/00/0000</td>
						<td class="dx"><b>10.000,00</b></td>              
						<td><a title="Piano di ammortamento" href="#1"><img alt="Piano di ammortamento" src="/img/ret/ico1gr_documento.gif"></a></td>
						<td class="ultimo"><a title="Dettagli finanziamento" href="#1"><img alt="Dettagli finanziamento" src="/img/ret/ico1gr_dettaglio.gif"></a></td>
					</tr>
				
				</table>
				<?php 
				}
				else
				{
				?>
				
				<!-- PORTAFOGLIO -->
				
				<div class="tabContainertab2liv">
					<div class="tabOn2liv">
						<div class="tab2livLeft"></div>
						<div onclick="javascript: if (document.getElementById('contenttab1').style.display == 'none'){document.getElementById('contenttab1').style.display = 'block'; document.getElementById('contenttab2').style.display = 'none'; document.getElementById('tab1livCont').parentNode.className = 'tabOn2liv'; document.getElementById('tab2livCont').parentNode.className = 'tabOff2liv';  }" id="tab1livCont" class="tab2livCont">Portafoglio trading</div>	
						<div class="tab2livRight"></div>
					</div>
					<div class="tabOff2liv">
						<div class="tab2livLeft"></div>
						<div onclick="javascript: if (document.getElementById('contenttab2').style.display == 'none'){document.getElementById('contenttab2').style.display = 'block'; document.getElementById('contenttab1').style.display = 'none'; document.getElementById('tab2livCont').parentNode.className = 'tabOn2liv'; document.getElementById('tab1livCont').parentNode.className = 'tabOff2liv';  }" id="tab2livCont" class="tab2livCont">Portafoglio investimenti</div>	
						<div class="tab2livRight"></div>
					</div>
					<div class="clear"></div>			
				</div>
				<div class="line"> </div>
				
				<!-- TAB1 -->
				<div id="contenttab1" class="contenttabOn">
					
					<script type="text/javascript">
					/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
					addEvent(window, 'load', function() {
						createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
						createSelectRapp('sceltaSottoRapporto', 'sceltaSottoRapportoVal', sceltaSottoRapportoFunc);
					});

					function sceltaRapportoFunc (option) {
						// Testo selezione: option.text
						// Valore selezione: option.value
						// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
					}

					function sceltaSottoRapportoFunc (option) {
						// Testo selezione: option.text
						// Valore selezione: option.value
						// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
					}
					/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
					</script>

					<table class="form01 nopadd">
					<tr>

						<td class="depwt">Deposito titoli</td>
						<td class="rappWt">
							<div id="sceltaRapporto" class="selectRapp">
								<input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
								<a href="javascript:;" class="inputOption inputSx">
									<span class="inputDx">
										<span class="input">
											xxx/aaaaaa
										</span>

									</span>
								</a>
								<div class="selectorSpacer" style="display: none;"></div>
								<div class="selector" style="display: none;">
									<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
										<strong>xxx/aaaaaa</strong><br/>
										Nome Nome Cognome Cognome1</a>
									<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">

										<strong>xxx/bbbbbb</strong><br/>
										Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
									<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
										<strong>xxx/cccccc</strong><br/>
										Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
										Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
										Nome Nome Cognome Cognome5</a>
								</div>
							</div>

							<div class="depRightBlock">
								<div class="importoDeposito">
									<span id="liquiditaDep" class="uniqTooltipText" onmouseout="removeUniqTooltip(event,this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
										<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>
										<span class="uniqTooltipInnerHTML">
											31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />

											01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
											02/01/2010: <strong>x,xx &euro;</strong>
										</span>
									</span>
								</div>
								<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&amp;flg=WT&amp;sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
							</div>

							<div class="totLiquidita">Totale liquidit&agrave;</div>
						</td>
					</tr>
					</table>

					<table cellspacing="0" cellpadding="0" width="" class="tab17 tab17nob tab17nobot">
						<tr> 
							<th>Tipologia</th>
							<th class="uno nocap">Controvalore EUR<br>attuale</th>
							<th class="uno nocap">Controvalore EUR<br>investito</th>            
							<th>Var assol.</th>
							<th>Var %</th>
							<th class="ultimo">Dett.</th>
						</tr>
						<tr class="b bb"> 
							<td class="sx nocap">Azioni Italia</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Azioni Italia"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Azioni Italia"></a></td>
						</tr>
						<tr class="c bb"> 
							<td class="sx nocap">Azioni Estero</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx r">-xx,xx</td> 
							<td class="dx r">-xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Azioni Estero"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Azioni Estero"></a></td>
						</tr>
						<tr class="b bb"> 
							<td class="sx nocap">Obbligazioni</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Obbligazioni"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Obbligazioni"></a></td>
						</tr>
						<tr class="c bb"> 
							<td class="sx nocap">Derivati</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx r">-xx,xx</td> 
							<td class="dx r">-xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Derivati"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Derivati"></a></td>
						</tr>
						<tr class="b bb"> 
							<td class="sx nocap">Coverred Warrant/Certificates</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Coverred Warrant/Certificates"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Coverred Warrant/Certificates"></a></td>
						</tr>
						<tr class="c bb"> 
							<td class="sx nocap">ETF</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli ETF"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli ETF"></a></td>
						</tr>
						<tr class="b bb"> 
							<td class="sx nocap">Marginazione</td>
							<td class="dx">xxx,xx</td>
							<td class="dx">xxx,xx</td> 
							<td class="dx v">xx,xx</td> 
							<td class="dx v">xx,xx</td>
							<td class="ultimo"><a href="#1" title="Dettagli Marginazione"><img src="/img/ret/ico1gr_dettaglio.gif" alt="Dettagli Marginazione"></a></td>
						</tr>
						<tr class="b"> 
							<td class="sx lastrow lastrowdb"><b>TOTALE</b></td>
							<td class="lastrow lastrownobot"><b>xxx,xx</b></td>
							<td class="dx lastrow lastrowdb"><b>xxx,xx</b></td> 
							<td class="dx vb lastrow lastrowdb">xx,xx</td> 
							<td class="dx vb lastrow lastrowdb">xx,xx</td> 
							<td class="dx ultimo lastrow lastrowdb">&nbsp;</td>
						</tr>
					</table>
					
					<div id="graficoControvalore">
						<div id="flashcontainerwt"><embed width="206" height="156" flashvars="dataURL=/swf/chart/graficoWetrade.xml&amp;chartWidth=206&amp;chartHeight=156" wmode="transparent" quality="high" bgcolor="#FFFFFF" name="home_test" id="home_test" style="undefined" src="/swf/chart/MultiLevelPie.swf" type="application/x-shockwave-flash"></div>
						<div id="legendaControvalore">
							<div class="ie6DoubleMarginFix" id="titoloControvalore">Grafico relativo al controvalore EUR attuale / alla scadenza</div>
							<div class="labelControvalore ie6DoubleMarginFix" id="label1Controvalore">Legenda:</div>
							<div class="labelControvalore" id="label2Controvalore">
								<span class="boxControvalore" id="box1Controvalore">Azioni Italia</span>
							</div>
							<div class="labelControvalore" id="label3Controvalore">
								<span class="boxControvalore" id="box2Controvalore">Azioni Estere</span>
							</div>
							<div class="labelControvalore" id="label4Controvalore">
								<span class="boxControvalore" id="box1Controvalore">Obbligazioni</span>
							</div>
							<div class="labelControvalore" id="label5Controvalore">
								<span class="boxControvalore" id="box1Controvalore">Derivati</span>
							</div>
							<div class="labelControvalore" id="label6Controvalore">
								<span class="boxControvalore" id="box2Controvalore">Coverred warrant/Certificates</span>
							</div>
							<div class="labelControvalore" id="label7Controvalore">
								<span class="boxControvalore" id="box1Controvalore">ETF</span>
							</div>
							<div class="labelControvalore" id="label8Controvalore">
								<span class="boxControvalore" id="box1Controvalore">Marginazione</span>
							</div>
							
						
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="fooform">
						<div class="fooformright">
							<div><a href="#1" class="btnformright" title="lorem ipsum"><img src="/img/ret/btn_left_ar.gif" alt=""><span>portafoglio</span><img src="/img/ret/btn_right_ar.gif" alt=""></a></div>
						<br class="clear">
						</div>	
						<br class="clear">
					</div>
					
				</div>
				<!-- FINE TAB1 -->
				
				<div style="display:none" id="contenttab2" class="contenttabOn">
					<script type="text/javascript">
					/* CREAZIONE - Codice per creare delle select fittizie stilizzate */
					addEvent(window, 'load', function() {
						createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
						createSelectRapp('sceltaSottoRapporto', 'sceltaSottoRapportoVal', sceltaSottoRapportoFunc);
					});

					function sceltaRapportoFunc (option) {
						// Testo selezione: option.text
						// Valore selezione: option.value
						// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
					}

					function sceltaSottoRapportoFunc (option) {
						// Testo selezione: option.text
						// Valore selezione: option.value
						// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
					}
					/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
					</script>

					<table class="form01 nopadd">
						<tbody>
							<tr>

								<td class="depwt">Deposito titoli</td>
								<td class="rappWt">
									<div id="sceltaRapporto" class="selectRapp">
										<input id="sceltaRapportoVal" type="hidden" class="value" name="rapporto" value="xxxaaaaaa"/>
										<a href="javascript:;" class="inputOption inputSx">
											<span class="inputDx">
												<span class="input">
													xxx/aaaaaa
												</span>

											</span>
										</a>
										<div class="selectorSpacer" style="display: none;"></div>
										<div class="selector" style="display: none;">
											<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
												<strong>xxx/aaaaaa</strong><br/>
												Nome Nome Cognome Cognome1</a>
											<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">

												<strong>xxx/bbbbbb</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
											<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
												Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
												Nome Nome Cognome Cognome5</a>
										</div>
									</div>

									<div class="depRightBlock">
										<div class="importoDeposito">
											<span id="liquiditaDep" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
												<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>
												<span class="uniqTooltipInnerHTML">
													31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />

													01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
													02/01/2010: <strong>x,xx &euro;</strong>
												</span>
											</span>
										</div>
										<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&amp;flg=WT&amp;sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
									</div>

									<div class="totLiquidita">Totale liquidit&agrave;</div>
								</td>
							</tr>
							<tr>
								<td class="depwt">Deposito titoli</td>
								<td class="rappWt">
									<div id="sceltaSottoRapporto" class="selectRapp">
										<input id="sceltaSottoRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>

										<a href="javascript:;" class="inputOption inputSx">
											<span class="inputDx">
												<span class="input">
													xxx/aaaaaa
												</span>
											</span>
										</a>
										<div class="selectorSpacer" style="display: none;"></div>
										<div class="selector" style="display: none;">

											<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions between first selected">
												<strong>xxx/aaaaaa</strong><br/>
												Nome Nome Cognome Cognome1</a>
											<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
												<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
											<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">

												<strong>xxx/bbbbbb/0</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
											<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
												<strong>xxx/bbbbbb/1</strong><br/>
												Nome Nome Cognome Cognome1</a>
											<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions between">
												<strong>xxx/bbbbbb/2</strong><br/>

												Nome Nome Cognome Cognome2</a>
											<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
												Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
												Nome Nome Cognome Cognome5</a>
											<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/0</strong><br/>
												Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
												Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
												Nome Nome Cognome Cognome5</a>

											<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/1</strong><br/>
												Nome Nome Cognome Cognome1</a>
											<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/2</strong><br/>
												Nome Nome Cognome Cognome2</a>
											<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">

												<strong>xxx/cccccc/3</strong><br/>
												Nome Nome Cognome Cognome3</a>
											<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/4</strong><br/>
												Nome Nome Cognome Cognome4</a>
											<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
												<strong>xxx/cccccc/5</strong><br/>

												Nome Nome Cognome Cognome5</a>
										</div>
									</div>
									<div class="depRightBlock">
										<div class="importoDeposito">
											<span id="liquiditaSottoDep" class="uniqTooltipText" onmouseout="removeUniqTooltip(event, this);" onmouseover="createUniqTooltip(event, this)" onmousemove="createUniqTooltip(event, this)">
												<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>

												<span class="uniqTooltipInnerHTML">
													31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />
													01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
													02/01/2010: <strong>x,xx &euro;</strong>
												</span>
											</span>

										</div>
										<a href="javascript:;" class="iconaDettaglio" onclick="openPopUp('large', 'connect.php?page=str_popup_wb.php&amp;tpl=/wetrade/tpl_priv_lib_wt_saldo_liquidita_popup.php&amp;flg=WT&amp;sid=priv');"><img src="/img/ret/ico1gr_dettaglio.gif" /></a>
									</div>
									<div class="totLiquidita">Totale liquidit&agrave;</div>
								</td>
							</tr>
						</tbody>
					</table><table cellspacing="0" cellpadding="0" width="" class="tab17 tab17nob tab17nobot">
					<tr> 
						<th>Tipologia</th>

						<th class="uno">Controvalore<br/>attuale/alla scadenza</th>
						<th>Controvalore<br/>investito</th>            
						<th class="nocap">Var assol.</th>
						<th class="nocap">Var %</th>
						<th class="ultimo">Dett.</th>
					</tr>

					<tr class="b bb"> 
						<td class="sx">Fondi e Sicav</td>
						<td class="dx">xxx,xx</td>
						<td class="dx">xxx,xx</td> 
						<td class="dx v">xx,xx</td> 
						<td class="dx v">xx,xx</td>
						<td  class="ultimo"><a title="Dettagli Fondi e Sicav" href="#1"><img alt="Dettagli Fondi e Sicav" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
					</tr>
					<tr class="c bb"> 
						<td class="sx nocap">PCT<br/><span class="note"><span class="grigio">(per i PCT il controvalore è calcolato alla scadenza)</span></span></td>

						<td class="dx">xxx,xx</td>
						<td class="dx">xxx,xx</td> 
						<td class="dx v">xx,xx</td> 
						<td class="dx v">xx,xx</td>
						<td  class="ultimo"><a title="Dettagli PCT" href="#1"><img alt="Dettagli PCT" src="/img/ret/ico1gr_dettaglio.gif"/></a></td>
					</tr>
					<tr class="b"> 
						<td class="sx lastrow lastrowdb"><b>TOTALE</b></td>
						<td class="lastrow lastrownobot"><b>xxx,xx</b></td>

						<td class="dx lastrow lastrowdb"><b>xxx,xx</b></td> 
						<td class="dx vb lastrow lastrowdb">xx,xx</td> 
						<td class="dx vb lastrow lastrowdb">xx,xx</td> 
						<td class="dx ultimo lastrow lastrowdb">&nbsp;</td>
					</tr>
					</table>

					<div id="graficoControvalore">
						<div id="flashcontainerwt"><embed width="206" height="156" flashvars="dataURL=/swf/chart/graficoWetrade.xml&amp;chartWidth=206&amp;chartHeight=156" wmode="transparent" quality="high" bgcolor="#FFFFFF" name="home_test" id="home_test" style="undefined" src="/swf/chart/MultiLevelPie.swf" type="application/x-shockwave-flash"></div>
						<div id="legendaControvalore">
							<div id="titoloControvalore" class="ie6DoubleMarginFix">Grafico relativo al controvalore EUR attuale / alla scadenza</div>
							<div id="label1Controvalore" class="labelControvalore ie6DoubleMarginFix">Legenda:</div>
							<div id="label2Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">Azioni Italia</span>
							</div>
							<div id="label3Controvalore" class="labelControvalore">
								<span id="box2Controvalore" class="boxControvalore">Azioni Estere</span>
							</div>
							<div id="label4Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">Obbligazioni</span>
							</div>
							<div id="label5Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">Derivati</span>
							</div>
							<div id="label6Controvalore" class="labelControvalore">
								<span id="box2Controvalore" class="boxControvalore">Coverred warrant/Certificates</span>
							</div>
							<div id="label7Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">ETF</span>
							</div>
							<div id="label8Controvalore" class="labelControvalore">
								<span id="box1Controvalore" class="boxControvalore">Marginazione</span>
							</div>
							
						
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="fooform">
						<div class="fooformright">
							<div><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>portafoglio operativo</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
						<br class="clear">
						</div>	

					<br class="clear">
					</div>
					<br class="clear" /><br/>
				</div>
				
				<!-- FINE PORTAFOGLIO -->
				<?php
				}
				?>
				<br class="clear">
			</div>
			
			<div id="conto4">
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
		
		</div>	
	<br class="clear">
</div>
<?php if ($bank == "bpm")
		{
			?>
		

<br class="clear">
<a href="#" title="PROPOSTE CONTRATTUALI">
<div class="propostaOad">
	<div class="propostaOadIcoNum">
		<div>8</div>		
	</div>	
	<div class="propostaOadTxt"><span>PROPOSTE CONTRATTUALI</span> <i class="icon-angle-right icon-after"></i><br class="clear">
		Controlla le proposte contrattuali a te riservate!<br>Grazie alla firma digitale puoi sottoscrivere online il contratto.
	</div>	
	<div class="clear"></div>			
</div>	
</a>
<br>

<br class="clear">

<div class="propostaOad newOad">
	<div class="propostaOadIcoNum">
		<div>8</div>		
	</div>	
	<div class="propostaOadTxt"><span>PROPOSTE CONTRATTUALI</span><br class="clear">
		Se sei stato contattato dal nostro <strong>staff commerciale</strong>, clicca sul pulsante sotto per <strong>visualizzare 
		la proposta</strong> e concludere l'acquisto del prodotto richiesto.<br><br>
		Se <strong>non hai ancora ricevuto proposte</strong>, puoi intanto scoprire <strong>la firma digitale</strong>, lo strumento necessario 
		per sottoscrivere online i nostri prodotti.<br class="clear">
		<div class="flRight">
			<a href="javascript:;" class="linkWhite">Lorem ipsum <i class="icon-angle-right icon-after"></i></a>
		</div>
	</div>	
	<div class="clear"></div>			
</div>	

<br>

<br class="clear">
<a href="#" title="PROPOSTE CONTRATTUALI">
<div class="propostaOad">
	<div class="propostaOadIcoCarr">
		<div>8</div>		
	</div>	
	<div class="propostaOadTxt"><span>PROPOSTE CONTRATTUALI</span> <i class="icon-angle-right icon-after"></i><br class="clear">
		Al momento non sono presenti proposte a te riservate.
	</div>	
	<div class="clear"></div>			
</div>	
</a>


<?php
	}
?>


<div class="layeralert2" id="layeralert1" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert1').dragHandle = new Draggable('layeralert1',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert1')"/></div>
	<div class="body">
	<div class="important">
	<div id="contcont">
				<h2>Lorem ipsum lorem ipsum</h2>
				<table cellpadding="0" cellspacing="0" class="condiz">
				<tr class="pari">
					<td class="primo">Lorem ipsum lorem ipsum</td>
					<td class="tipo fontBold">Lorem ipsum lorem ipsum</td>					
				</tr>
				<tr class="dispari">
					<td class="primo">Lorem ipsum lorem ipsum</td>
					<td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
				</tr>
				<tr class="pari">
					<td class="primo">Lorem ipsum lorem ipsum</td>
					<td class="tipo fontBold">Lorem ipsum lorem ipsum</td>					
				</tr>
				<tr class="dispari">
					<td class="primo">Lorem ipsum lorem ipsum</td>
					<td class="tipo fontBold">Lorem ipsum lorem ipsum</td>
				</tr>
				<tr class="pari">
					<td class="primo">Lorem ipsum lorem ipsum</td>
					<td class="tipo fontBold">Lorem ipsum lorem ipsum</td>					
				</tr>			
				</table>
				</div>

	
	</div>
	<br class="clear"/>

	</div>
	<div class="foot"></div>
</div>
<script type="text/javascript">
	var srvTs = '<?php print time() * 1000; ?>';
</script>
<script type="text/javascript">
function layerconti(conto,intestatari) {
	openPopOverLayer('layeralertconti','float', 1);
	$('contenuto')
		.innerHTML = '<div><p>Per operare sul conto corrente indicato, &egrave; necessario che <strong>tutti gli intestatari</strong> richiedano '+
						'l\'\<strong>abilitazione</strong> al servizio <strong><%=wsVisitorInfo.getShortSiteName()%></strong> presso la propria <strong>agenzia <%=wsVisitorInfo.getShortBankName()%></strong>.</p>'+
					'</div>'+	
					'<div class="row-fluid">'+
						'<div class="span4">'+
							'<label class="nomefield"><strong>Conto corrente n°</strong></label><br>'+
							'<span class="output">'+conto+'</span>'+
						'</div>'+
						'<div class="span8">'+
							'<label class="nomefield"><strong>Intestato a</strong></label><br>'+
							'<span class="output">'+intestatari+'</span>'+
						'</div>'+
					'</div>';
}
</script>
<script type="text/javascript">$.getScript("/js/priv_myhome_promo.js");</script>