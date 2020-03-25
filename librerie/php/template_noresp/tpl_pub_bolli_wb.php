<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<div id="maincontent">
	<div class="maincontenttopper"></div>

	<!-- titolo -->
	<h2 class="title">Bolli rimborsati per tutto il 2013</h2>
	<!--fine  titolo -->
	
	<!-- visual dinamico -->
	<div class="maincontentobject">
		<div id="maincontentobjectarea">
			<!-- PRIMA AREA -->
				<div class="objectarea" id="simula" style="display:block;">
				<!-- BLOCCO CONTENUTI SIMULA -->
				<script type="text/javascript">
					
					simulaBolloInit = false;
					var percRisp2012 = 0.10;
					var percRisp2013 = 0.15;
					
					function formattaVirgola (valore)
					{
						var formattaVirgola = "";
						if (valore>0)
							{
								formattaVirgola = (Math.round(valore * 100)).toString();
								if (formattaVirgola.length<2) formattaVirgola = "0" + formattaVirgola;
								var formattaValDec = formattaVirgola.substring(formattaVirgola.length-2,formattaVirgola.length);
								var formattaValInt = formattaVirgola.substring(0,formattaVirgola.length-2);
								if (formattaValInt == "") formattaValInt = "0";
								formattaVirgola = formattaValInt + "," + formattaValDec;
							}
						else
							{
								formattaVirgola = "0";
							}
						return formattaVirgola;

					}
					
					
					function simulaBolloInitialize()
					{
						v2012 = $("v_2012");
						v2013 = $("v_2013");
						vTotal = $("v_total");
						simulaBolloErr = $("simulaBolloErrore");
						simulaBolloResult = $("simulaBolloRes");
						simulaBolloPMeno = $("simulaBolloMeno");
						simulaBolloInit = true;
						
					}
					
					function simulaBolloClean(valore)
					{
						var trustedVal = "";
						var carattere = "";
						var allowed = "01234567890";
						for (x=0;x<valore.length;x++)
						{
							carattere = valore.substring(x,x+1);
							if (allowed.indexOf(carattere) >=0)
							{
								trustedVal = trustedVal + carattere;
							}
						}
						return trustedVal;
					}
					
					function simulaBollo()
					{
						campo = $("simulaBolloValore");
						var displayError = false;
						if (!simulaBolloInit) simulaBolloInitialize();
						trustedVal = simulaBolloClean(campo.value);
						campo.value = trustedVal;
						var menoLock = true;
						if (trustedVal.length > 0)
						{
							var valore = parseInt(trustedVal);
							
							calcRisp2012 = parseInt(valore*percRisp2012, 10)/100;
							calcRisp2013 = parseInt(valore*percRisp2013, 10)/100;
							
							if (calcRisp2012 <= 34.20) risp2012 = 34.20;
							else if (calcRisp2012 > 34.20 && calcRisp2012 < 1200) risp2012 = calcRisp2012;
							else if (calcRisp2012>=1200) risp2012 = 1200.00;
							v2012.innerHTML = formattaVirgola(risp2012);
							
							if (calcRisp2013 <= 34.20) risp2013 = 34.20;
							else if (calcRisp2013 > 34.20 && calcRisp2013 < 1200) risp2013 = calcRisp2013;
							else if (calcRisp2013>=1200) risp2013 = 1200.00;
							v2013.innerHTML = formattaVirgola(risp2013);
							vTotal.innerHTML = formattaVirgola((risp2012 * 100 + risp2013 * 100)/100) + " &euro;";
							
							if (valore<10000)
							{
								displayError = true;	
							}
							if (valore>10000) menoLock = false;
						}
						else
						{
							displayError = true;
						}
						
						if (displayError)
						{
							simulaBolloErr.style.display = "block";
							simulaBolloResult.style.display = "none";
						}
						else
						{
							simulaBolloErr.style.display = "none";
							simulaBolloResult.style.display = "block";
						}
						
						if (menoLock) 
							{
								simulaBolloPMeno.className = "disabled";
							}
						else 
							{
								simulaBolloPMeno.className = "";
							}
					}
					
					function simulaBolloSet (dir)
					{
						var valore = $("simulaBolloValore").value;
						if (valore.length > 0)
						{
							valoreInt = parseInt(valore);
							if (dir == "-") valueToAdd = -1000;
							else valueToAdd = +1000;
							valore = parseInt((valoreInt + valueToAdd)/1000) * 1000; 
							if (valore < 10000) 
								{
									valore = "10000";
								}
						}
						else
						{
							valore = "10000";
						}
						$("simulaBolloValore").value = valore;
						simulaBollo();
					}
					
				</script>
				<style>
					#simulatoreBollo {display:block; float: left;margin: 0;height: 241px;overflow-x: hidden;padding: 0;width: 382px; padding:0; background: #fff url(/img/img_simulaBollo_promo.gif) no-repeat 0 0}
					#simulatoreBollo form {float:left;padding: 12px 0 12px 154px; margin:0;}
					a#simulaBolloMeno, a#simulaBolloPiu {margin-right: 5px;display:block;float:left; width:24px; height: 24px; text-decoration: none; background:transparent url(/img/img_simulaBollo_piu.gif) no-repeat 0 0}
					a#simulaBolloMeno {background-image: url(/img/img_simulaBollo_meno.gif);}
					a#simulaBolloMeno.disabled {background-position: 0 -24px}
					#simulaBolloValore {display: block;float: left;height: 20px;margin-right: 5px;width: 147px; text-align: right; color: #6f8f0a; font-weight: bold; line-height: 20px; font-size:16px; font-family: Arial, serif; background: #fff url(/img/img_simulaBollo_bgf.gif) repeat-x 0 0; border: solid 1px #bababa;}
					#simulaBolloMid {display: block;float: left; margin: 0;padding:60px 0 22px; clear:left; width: 370px}
					#simulaBolloMid span {font-size:10px; float:left; display:block; width:80px; height: 22px; text-align:center; font-size: 14px; font-family: Arial, Serif; line-height: 22px; font-weight: bold; color: #333}
					#v_2011{margin:0 0 0 20px}
					* html #v_2011{margin:0 0 0 10px}
					#v_2012{margin:0 0 0 172px}
					* html #v_2012{margin:0 0 0 86px}
					#v_2013{margin:0 0 0 33px}
					* html #v_2013{margin:0 0 0 32px}
					#simulaBolloRes span {color: #8AB10B;display: block;float: left;font-family: Arial,Serif;font-size: 41px;font-weight: bold;line-height: 41px;padding-top: 36px;text-align: center; width: 385px;}
					#simulaBolloErrore {float:left; display:block; width: 385px; background-color: #fff; height:60px;}
					* html #simulaBolloErrore {padding-top: 18px}
					#simulaBolloErrore p {color: #9C9C9C;font-size: 12px;font-weight: bold;padding: 26px 30px 0;text-align: center;}
				</style>

				<div id="simulatoreBolloIntro">
					<img src="/img/img_simulaBollo_intro.jpg" usemap="#simulaMap">
					<map id="simulaMap" name="simulaMap">
						<area shape="rect" coords="46,186,335,222" href="javascript:;" onclick="$('simulatoreBollo').show();$('simulatoreBolloIntro').hide();" alt="Calcola quanto risparmi" title="Calcola quanto risparmi" />
					</map>
				</div>
				<div id="simulatoreBollo" style="display:none">
					<form autocomplete="off" action="javascript:;">
						<a href="javascript:;" id="simulaBolloMeno" onclick="simulaBolloSet('-');" class="disabled" title="Diminuisci di 1000 &euro;">&nbsp;</a>

						<input type="text" maxlength="15" onkeyup = "simulaBollo();" value="10000" id="simulaBolloValore"></input>
						<a href="javascript:;" id="simulaBolloPiu" onclick="simulaBolloSet('+');" title="Aumenta di 1000 &euro;">&nbsp;</a>
					</form>
					<div id="simulaBolloMid">
						<span id="v_2012">34,20</span>
						<span id="v_2013">34,20</span>
					</div>
					<div id="simulaBolloErrore" style="display:none;">
						<p>Per importi inferiori a 10.000 euro non &egrave; possibile applicare la promozione sui bolli del deposito titoli</p>
					</div>
					<div id="simulaBolloRes" style="display:block;">
						<span id="v_total">85,50 &euro;</span>
					</div>
				</div>
				<!-- TERMINE BLOCCO CONTENUTI SIMULA -->
			</div>
		</div>
		<div id="maincontentobjectmenu"></div>
	</div>
	<!-- /visual dinamico -->

	
	<p class="note" style="color:#000;font-size:11px">
		Il rimborso &egrave; calcolato in base a quanto indicato dalla normativa vigente. Tale importo potrebbe variare in seguito a modifiche normative o  all'entrata in vigore di regolamenti attuativi.
	</p>
	
	<!-- inzio wbntit001-->	
<div class="titimg">
<h3 class="title"><b>FAI LA TUA MANOVRA!<br />SPOSTA I TITOLI IN WEBANK<br /></b></h3>
</div> 
<!-- fine wbntit001 -->

<!-- inzio wbntxt003-->	
<p class="nospace">
La<strong> manovra finanziaria</strong> approvata il 18 luglio ha dato il via all&#39;aumento dell&#39;imposta di bollo sul <strong>deposito titoli</strong>.<br /><br />Il bollo, infatti, sar&agrave; applicato in misura fissa a tutti i depositi con un valore sotto i 50.000 euro e, in misura proporzionale, per quelli con valore superiore a 50.000 euro.<br /><br />Ma per te la manovra pu&ograve; aspettare!<br />Webank <strong>ti rimborsa</strong> l&rsquo;<strong>imposta di bollo</strong> relativa al <strong>deposito titoli</strong> <strong>per </strong>il <strong>secondo semestre 2011</strong>, <strong>per </strong>il<strong> 2012</strong> e <strong>per il 2013</strong>.<br /><br />Un&#39;<strong>opportunit&agrave; concreta</strong> che ti permetter&agrave; di <strong>ottimizzare</strong> la <strong>gestione</strong> del tuo <strong>deposito titoli</strong>.<br /><br />La tabella mostra il calcolo dell&#39;imposta di bollo sul deposito titoli:<br /><br />	

</p>
<ul class="flaglist">
</ul>
<!-- fine wbntxt003 -->	






	<table cellpadding="4px" cellspacing="0" class="activetable activetablepub"> <tr>  <th class="first">Valore deposito titoli (Euro)</th>  <th>Bolli 2&ordm; sem 2011</th>  <th>Bolli 2012</th>  <th>Bolli 2013</th>  <th>Risparmio totale</th> </tr> <tr>  <td class="first">fino a 50.000</td>  <td class="right">17,10</td>  <td class="right">34,20</td>  <td class="right">34,20</td>  <td class="last right">85,50</td> </tr> <tr>  <td class="first">da 50.001 a 150.000</td>  <td class="right">35,00</td>  <td class="right">70,00</td>  <td class="right">230,00</td>  <td class="last right">335,00</td> </tr> <tr>  <td class="first">da 150.001 a 500.000</td>  <td class="right">120,00</td>  <td class="right">240,00</td>  <td class="right">780,00</td>  <td class="last right">1.140,00</td> </tr> <tr>  <td class="first">oltre 500.000</td>  <td class="right">340,00</td>  <td class="right">680,00</td>  <td class="right">1.100,00</td>  <td class="lastb right">2.100,00</td> </tr> </table>

<!-- FILETTO -->
	<div class="filetto"></div>
<!-- / FILETTO -->

<!-- inzio wbntit001-->	
<div class="titimg">
<h3 class="title"><b>APRI CONTO E DEPOSITO TITOLI</b><br /></h3>
</div> 
<!-- fine wbntit001 -->
<!-- inzio wbntxt003-->	
<p class="nospace">
Per approfittare di questa <strong>promozione esclusiva </strong>non devi fare altro che:<br />	

</p>
<ul class="flaglist">
      <li><strong>Aprire</strong> il <strong>Conto Webank</strong> e il <strong>deposito titoli</strong> entro il <strong>30 settembre 2011.</strong><br />Il deposito titoli &egrave; <strong>gratuito</strong> e ti permette di operare su tutti i mercati italiani e i principali mercati internazionali.<br /><br /></li>

      <li><strong>Inviare</strong> tutta la <strong>documentazione firmata </strong>entro il <strong>31 ottobre 2011</strong>.<br /><br /></li>
      <li><strong>Attivare</strong> entro il <strong>15 novembre 2011</strong>  il <strong>Prestito Titoli</strong> e mantenerlo attivo per ogni periodo di riferimento di il calcolo dell&#39;imposta.<br />Il Servizio Prestito Titoli ti permette di avere un <strong>rendimento aggiuntivo</strong> sui titoli presenti in portafoglio.<br /><br /></li>

      <li><strong>Portare titoli </strong>e <strong>fondi</strong> sul tuo deposito, per un controvalore minimo di 10.000 euro, entro il <strong>31 dicembre 2011; </strong>per il 2012 e per il 2013 tale controvalore minimo dovr&agrave; essere presente al termine di ogni periodo di riferimento per il calcolo dell&rsquo;imposta.<br /><br /></li>
</ul>
<!-- fine wbntxt003 -->	





<!-- inzio wbntxt003-->	
<p class="nospace">
<br />Cosa aspetti? Approfitta di questa <strong>promozione esclusiva</strong>!<br />Per tutti i dettagli <a href="www.webank.it/doc/REGOLAMENTO_Fai_la_tua_manovra.pdf" target="_blank" title="Regolamento">leggi il regolamento</a>.	

</p>
<ul class="flaglist">
</ul>
<!-- fine wbntxt003 -->	

	<!-- bottone senza filetto orizzontale-->
	<?php virtual("/librerie/include/commons/bottoni/pub_wb_int_btn_002.php"); ?>
	<!-- fine  bottone senza filetto orizzontale -->
	</div>

</div>
<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
