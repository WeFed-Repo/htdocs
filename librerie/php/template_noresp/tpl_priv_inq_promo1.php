<script type="text/javascript">
/*Comportamenti premianti*/

// Apre-Chiude accordion comportamenti premianti
function ApriAccordion(obj){
	if(obj.className == 'dettagliOff')
	{
		obj.parentNode.getElementsByTagName('table')[0].style.display='block';
		obj.className = 'dettagliOn';
	}
	else
	{
		obj.parentNode.getElementsByTagName('table')[0].style.display='none';
		obj.className = 'dettagliOff';
	}
}
 
// Apre-Chiude menu option ricariche
function showOptions(obj) 
 {
	var menurid = obj.parentNode.getElementsByTagName('ul')[0];
	if(menurid.style.display=='none') {menurid.style.display='block'}
	else {menurid.style.display='none'}
 }
 
// Attribuisce classe hover al menu per la compatibilità ie6
function setClassIe(obj,clAttr) 
{
	obj.onmouseover = function() {this.className = clAttr;}
	obj.onmouseout  = function() {this.className = '';}

}

</script>


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
<h1>calcola il risparmio sui bolli</h1>
<div class="promobolli">
	<div class="bannerLink">
		<img src="/img/ret/ban_inquBolli.gif" class="bannerLinkContent" alt="Apri conto Webank, bolli congelati per tutto il 2012 sul nuovo deposito titoli">
		<div class="bannerLinkBot"><a href="">regolamento</a></div>
	</div>
	<p>I bolli del tuo deposito titoli sono aumentati per effetto della manovra finanziaria 2011? <br />
	<strong>Nessun problema</strong>, ci pensa Webank. Ti <strong>congeliamo i bolli fino a tutto il 2012</strong>:continuerai a pagare quanto paghi oggi e la differenza te la rimborsiamo noi.
	</p>
	
	<h2>verifica i requisiti</h2>
	<div class="boxPromoBolliContainer">
		<div class="boxPromoBolliTop">
			<table class="form01 nopadd">
				<tr>
					<td class="depwt">Deposito titoli su cui calcolare l'importo dei bolli:</td>
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
						
					</td>
				</tr>
		</table>
		</div>
		
		<div class="boxPromoBolliCont">
				<div class="bianco">
					<div class="sx">
						<div class="promo_bolli_top"></div>
						<div class="promo_bolli_mdl">
							<p><strong>Conto Webank</strong> con questo deposito titoli <strong>richiesto</strong> entro il 31/10/2011</p>
							<a class="dettagliOff" onclick="javascript:ApriAccordion(this);" href="javascript:;">dettagli</a>
							
							<table class="dettHidden" style="display: none;"><tr><td><ul>
								<li>Ricariche di cellulari, Carta Je@ns, Carta Bipiemme Contante Prepagata, Mediaset Premium</li>
								<li>Viene presa in considerazione la data dell’operazione effettuata online</li>
								
						</ul></td></tr></table>
						</div>
						<div class="promo_bolli_bot"></div>	
					</div>
					<div class="dx">
						<div class="esito"><img src="/img/ret/ico2inf_fatto.gif" alt="fatto" /></div>
					</div>
				</div>
				<div class="bianco">
					<div class="promo_bolli_top"></div>
					<div class="promo_bolli_mdl">
						<p><strong>Conto attivato</strong> entro il 30/112011</p>
						<a class="dettagliOff" onclick="javascript:ApriAccordion(this);" href="javascript:;">dettagli</a>
						<div class="esito"><span>Hai inviato i documenti<br /> firmati?</span></div>
						<table class="dettHidden" style="display: none;"><tbody><tr><td><ul>
							<li>Lorem ipsum dolor sit</li>
							<li>Lorem ipsum dolor sit</li>
							
					</ul></td></tr></tbody></table>
					</div>
					<div class="promo_bolli_bot"></div>	
				</div>	
				<div class="bianco button">
					<div class="promo_bolli_top"></div>
					<div class="promo_bolli_mdl">
						<p><strong>Prestito titoli attivato</strong> su questo deposito entro il 15/12/2011</p>
						<a class="dettagliOff" onclick="javascript:ApriAccordion(this);" href="javascript:;">dettagli</a>
						<div class="esito"><a href="#" class="cta">Attiva il prestito titoli</a></div>
						<table class="dettHidden" style="display: none;"><tbody><tr><td><ul>
							<li>Lorem ipsum dolor sit</li>
							<li>Lorem ipsum dolor sit</li>
							
					</ul></td></tr></tbody></table>
					</div>
					<div class="promo_bolli_bot"></div>	
				</div>
				
					<div class="bianco">
					<div class="promo_bolli_top"></div>
					<div class="promo_bolli_mdl">
						<p><strong>Controvalore</strong> di Titoli e Fondi  in portafoglio di almeno <strong>10.000 &euro;</strong> <br /> al<strong>31/12/2011</strong> e al termine di ogni periodo di riferimento</p>
						<div class="esito">
							<span>Controvalore al 99/99/9999</span>
							<span class="importo">52.000 &euro;</span>
						</div>
					</div>
					<div class="promo_bolli_bot"></div>	
				</div>
		</div>
		<div class="boxPromoBolliBot"></div>
	
	</div>
	
	<h2>verifica il risparmio</h2>
	<div class="boxPromoBolliContainer">
		<div class="boxPromoBolliTop">
			
			<div class="text"><img src="/img/ret/ico2inf_spunta.gif" alt="" /><span>I requisiti, per ottenere il congelamento dei bolli, sono stati raggiunti!</span><br /> L'importo che pagherai sar&agrave;:</div>
		</div>
		<div class="boxPromoBolliCont">
				<div class="boxPromoBolliRispTot">
					<ul class="importi">
						<li class="padd"><span class="anno">2012</span><span class="sbarrato">99,99&euro;</span><span class="new">99,99&euro;</span></li>
						<li class="padd"><span class="anno">2012</span><span class="sbarrato"><img src="/img/ret/str_bg_importo_sbarrato.png" alt="" />99,99&euro;</span><span class="new">99,99&euro;</span></li>
						<li><span class="anno">2012</span><span class="sbarrato">99,99&euro;</span><span class="new">99,99&euro;</span></li>
					</ul>
					<br class="clear" />
					<div class="rispTot">risparmio totale <span> 53,99 &euro;</span></div>
				</div>
		</div>
		<div class="boxPromoBolliBot"><span>Per il calcolo effettivo dei bolli far&agrave; fede il controvalore al 31(12/2011 e al termine di ogni periodo di rifeimento del 2012.</span></div>
	</div>
	
	<h2><img src="/img/ret/ico2inf_bubble.gif"alt="" />Guarda quanto pu&ograve; crescere il tuo risparmio, porta i tuoi titoli in Webank</h2>
	<div class="boxPromoBolliContainer">
		<div class="boxPromoBolliTop">
			<div class="label attiva">Controvalore<strong>52.000 &euro;</strong></div>
			<div class="label">Se trasferisci altri<strong>52.000 &euro;</strong></div>
			<div class="label">Se trasferisci altri<strong>52.000 &euro;</strong></div>
			<div class="label">Se trasferisci altri<strong>52.000 &euro;</strong></div>
		</div>
		<div class="boxPromoBolliCont">
			<div class="boxRisparmio">
				<div class="label attiva"><strong>Risparmio totale</strong><strong class="dod">99,99 &euro;</strong><span>fino a 49.999</span></div>
				<div class="label"><strong>Risparmio totale</strong><strong class="qui">99,99 &euro;</strong><span>fino a 49.999</span></div>
				<div class="label"><strong>Risparmio totale</strong><strong class="dic">99,99 &euro;</strong><span>fino a 49.999</span></div>
				<div class="label"><strong>Risparmio totale</strong><strong class="ven">99,99 &euro;</strong><span>fino a 49.999</span></div>
			</div>
		</div>
		<div class="boxPromoBolliBot">controvalore del deposito titoli (&euro;)</div>
	</div>
</div>

