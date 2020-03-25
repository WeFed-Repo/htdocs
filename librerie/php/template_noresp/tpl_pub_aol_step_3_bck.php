<div id="aolcontainer">
<!-- CONTENITORE PRINCIPALE -->
	<div id="aolleft">
		<!-- ESEMPIO GESTIONE ERRORI NON COPIARE -->
		<script type="text/javascript">
			//Esempio di setting di alcuni errori
			errori = false;
			function esempioErrori()
			{
				if (errori)
				{
					parent.location.href = "/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_4.php";
					return 0;
				}
				setError('professione','Lorem');
				setError('settore','Lorem');
				setError('lavoro','Lorem');
				setError('altro','Lorem');
				setError('identificazioneCont','Lorem');
				
				//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
				errori = true;
			}
		</script>

		
		<!-- FINE ESEMPIO GESTIONE ERRORI NON COPIARE -->
		
		<script type="text/javascript">
		function showDett(obj) 
		 { 
			var radioId =obj.up(2).select('input.identificazione');
			if($$('.btnCont')) {$$('.btnCont')[0].hide()};
			for(i = 0; i<radioId.length; i++) 
				{
					if(radioId[i].up(1).hasClassName('opened'))
					
					var contHidden = radioId[i].up(1).removeClassName('opened');
					
				}
			obj.up(1).addClassName('opened');
		 }
		
		<!-- ESEMPIO DI COME DEVONO COMPARIRE I BLOCCHI DEL SECONDO INTESTATARIO -->
		//la funzione che segue è solo esemplificativa per mostrare i diversi blocchi nel secondo intestatario
		function showBlock()
		{ 
			var inputId = $$('input[name="identificazione"]');
			for(i=0; i<inputId.length;i++)
			{
				if(inputId[i].checked) {
				var indice = inputId[i].value; 
				if(indice=='bonifico')
					{
						$('bonifico').show();
						if(!($('conto').hasClassName('opened'))) {$('bonifico').addClassName('opened');
						$('bonifico').select('input[name="identificazione2"]')[0].checked ='checked';}
						
						$('agenzia').hide();
						
					}
				else if(indice=='agenzia')
					{
						$('bonifico').hide();
						$('agenzia').show();
						if(!($('conto').hasClassName('opened'))) {$('agenzia').addClassName('opened');
						$('agenzia').select('input[name="identificazione2"]')[0].checked ='checked';}
					
					}
				else if (indice=='conto')
					{
						$('bonifico').show();
						$('agenzia').show();
						if(($('bonifico').hasClassName('opened'))) {$('bonifico').removeClassName('opened');
						$('bonifico').select('input[name="identificazione2"]')[0].checked ='';
						}
						if(($('agenzia').hasClassName('opened'))) {$('agenzia').removeClassName('opened');
						$('agenzia').select('input[name="identificazione2"]')[0].checked ='';
						}
						
					}
				}
			}
			
		 }
		</script>
		<form name="step3">
		<div class="aolAcc expanded">
			
			<div class="aolAccTop">
				<a class="aolAccTitle" id="intestatario1" onclick="switchExp(this,true);" href="javascript:;" >
					<span class="titoloAcc">Intestatario 1 - Lorem ipsum dolor sit amet </span>
					<span href="javascript:;" class="accButt" ></span>
					<span class="errortext"></span>
				</a>
			</div>
			
			<div class="aolAccContent">
			<!-- INFORMAZIONI PER PROCEDURA DI IDENTIFICAZIONE -->
			
			
			<!-- fine INFORMAZIONI PER PROCEDURA DI IDENTIFICAZIONE -->
				<div class="aolblock">
					<h3>PROCEDURA DI IDENTIFICAZIONE</h3>
					<p>La normativa antiriciclaggio(D.Lgs 231/07) prevede che la banca verifichi l'identit&agrave; delle persone che aprono per la prima volta un conto Webank.<br />Tutti i nuovi clienti devono quindi scegliere una modalit&agrave; di identificazione tra quelle previste.</p>
					<strong>MARIO GIORDANO</strong><p>ha dichiarato di essere gi&agrave; cliente Webank, quindi non dovr&agrave;  effettuare la procedura di identificazione.

Gli altri intestatari devono scegliere una modalità di identificazione tra quelle indicate.</p>
					<fieldset class="fullwidthradio lastrow identificazioneCont" id="identificazioneCont">
					<div class="blockradio">
						<label>
							<input type="radio"  onclick="showDett(this);" class="identificazione" title="Lorem ipsum dolor sit amet" name="identificazione" value="bonifico">
							<span class="optiontextmini">tramite bonifico (consigliato da Webank) <p class="minitext nobottpad">
							Ogni intestatario deve effettuare un bonifico di 100 &euro; da un conto corrente intestato a suo nome o cointestato. Accrediteremo la somma versata sul tuo conto corrente dopo l'apertura. Sono accettati anche i bonifici da conti BancoPosta. 
							</p></span>
						</label>
						<span class="dett" >
								<strong>MARIO GIORDANO</strong>
								<p class="minitext">
								Inserisci l'iBAN del conto corrente dal quale farai il bonifico.
								</p>
								<fieldset>
									<span class="label">IBAN*</span>
									<input type="text"  id="iban" maxlength="27">
									<script defer="defer" type="text/javascript">setCounterOnField("iban",27);</script>
								<span class="errortext">lorem</span>
								</fieldset>
						</span>
					</div>
					<div class="blockradio">
						<label>
							<input type="radio" onclick="showDett(this);" class="identificazione" title="Lorem ipsum dolor sit amet" name="identificazione" value="agenzia">
							<span class="optiontextmini">in un'agenzia del Gruppo Bipiemme <p class="minitext nobottpad">
							Gli intestatari dovranno recarsi in un'agenzia del Gruppo Bipiemme(Banca poplare di Milano; Banca di Legnano; Banca Popolare di Mantova) a firmare i documenti di apertura conto davanti ad un nostro incaricato. 
							</p></span>
							
						</label>
						
						<a href="javascript:;" onclick ="$('listagenzia').show();" class="openpop">vuoi sapere qual'è l'agenzia pi&ugrave; vicina a te?</a>
						<div id="listagenzia" style="display:none;" class="btnCont">
								<fieldset class="lastrow">
									<span class="label">Comune</span>
									<input type="text" name="" value="">
									<span class="errortext">Lorem</span>
								</fieldset>
								<fieldset class="btn lastrow">
									<a class="greenbutton" href="javascript:;" title="cerca" onclick="javascript:window.open('connect.php?page=str_pub_pop_agenzia.php','main1','width=250,height=410,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes')"><span>cerca</span></a>
								</fieldset>
						</div>
						
						
					</div>
				
					<span class="errortext">lorem</span>
				</fieldset>
				</div>
				<div class="aolblock">
					<h3>INFORMAZIONI SUI PRODOTTI SCELTI</h3>
					<p>Per la  normativa antiriciclaggio devi specificare il tipo di utilizzo che farai dei prodotti scelti  insieme al conto.</p>
					<p class="grey">Utilizzo del deposito titoli</p>
					<fieldset class="fullwidth" style="min-height:20px">
						<label>
							<input type="radio" name="depositoTitoli"><span class="optiontext">per esigenze di investimento</span>
						</label>
					</fieldset>
					<fieldset class="fullwidth" style="min-height:20px">
						<label>
							<input type="radio" name="depositoTitoli"><span class="optiontext">per attivit&agrave; di trading </span>
						</label>
					</fieldset>
					<p class="grey">Utilizzo della carta ricaricabile CartaJe@ns</p>
					<fieldset class="fullwidth" style="min-height:20px">
						<label>
							<input type="radio" name="cartaRicaricabile"><span class="optiontext">per esigenze familiari</span>
						</label>
					</fieldset>
					<fieldset class=" fullwidth" style="min-height:20px">
						<label>
							<input type="radio" name="cartaRicaricabile"><span class="optiontext">per esigenze professionali</span>
						</label>
					</fieldset>
					<p>Per fornire dichiarazioni diverse dalle scelte indicate, contattaci.</p>
				</div>
			
			
			<!-- BLOCCO PER 1 INTESTATARIO -->
			<!-- Informazioni su attività economica -->
				<div class="aolblock">
					<h3>Informazioni su attivit&agrave; economica</h3>
					<fieldset>
						<span class="label">Professione*</span>
						<select id="professione">
							<option selected value="1">seleziona</option>
							<option value="2">lorem ipsum</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Settore*</span>
						<select id="settore">
							<option selected value="1">seleziona</option>
							<option value="2">lorem ipsum</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Stato svolgimento*</span>
						<select>
							<option selected value="1">seleziona</option>
							<option value="2">lorem ipsum</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Provincia di svolgimento*</span>
						<!-- ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
						<style>
							#aolcontainer form fieldset div.suggestions {position:absolute;z-index:99;border:solid 1px #999; background-color: #fff; padding: 3px}
							#aolcontainer form fieldset div.suggestions a {float:left; clear:left; width: 232px; padding: 3px; color: #666; text-decoration:none}
							#aolcontainer form fieldset div.suggestions a:hover {background-color: #dedede}
						</style>
						<input type="text" id="suggestionField" onclick = "$('suggestionSample').show(); addEvent(this,'blur',function(){setTimeout(function(){$('suggestionSample').fade({duration:0.3});},50);})" />
						<div class="suggestions" id="suggestionSample" style="display:none">
							<a href="javascript:;" onclick="$('suggestionField').focus()" ><strong>Lo</strong>rei</a>
							<a href="javascript:;" onclick="$('suggestionField').focus()"><strong>Lo</strong>rem ipsum</a>
							<a href="javascript:;" onclick="$('suggestionField').focus()">Gorex ipsuma</a>
							<a href="javascript:;" onclick="$('suggestionField').focus()">Worey</a>
						</div>
						<!-- FINE ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Reddito annuo netto*</span>
						<select>
							<option selected value="1">seleziona</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					
					<fieldset class="fullwidth lastrow check">
						<span class="label">Origine del patrimonio*</span>
						<span class="column">
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id="lavoro"><span class="optiontextmini">Reddito da lavoro</span>
								
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id="investimenti"><span class="optiontextmini">Rendite da investimenti</span>
								
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id="vendite"><span class="optiontextmini">Vendita beni immobili</span>
								
							</label>
						</span>
						<span class="column">
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id="eredità"><span class="optiontextmini">Eredit&agrave;/donazione</span>
								
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id="altro"><span class="optiontextmini">Altro</span>
								
							</label>
							
						</span>
						<span class="errortext">Lorem</span>
					</fieldset>
				</div>
			<!-- fine Informazioni personali -->
			
			<div class="aolblock">
				<h3>Informazioni aggiuntive (opzionali)</h3>
				
				<fieldset style="width: 160px;">
					<span class="label">Componenti nucleo familiare</span>
					<div class="fieldblock">
						<select style="width:116px" id="selectComponenti"/>
							<option selected value="">lorem</option>
							<option value="1">Lorem ipsum</option>
						</select>
						<span class="errortext">Seleziona</span>
					</div>
				</fieldset>
				<fieldset style="width:127px">
					<span class="label" style="width: 90px;">Amministratore patrimonio familiare</span>
					<label style="width:40px;"><input type="radio" name="amministratore" id=""><span class="optiontext">Si</span></label>
					<label style="width:40px;"><input type="radio" name="amministratore" ><span class="optiontext">No</span></label>
					<span class="errortext">Compila</span>
				</fieldset>
				<fieldset>
					<span class="label">Abitazione</span>
					<div class="fieldblock">
						<select  id="abitazione"/>
							<option selected value="">lorem</option>
							<option value="1">Lorem ipsum</option>
						</select>
						<span class="errortext">Seleziona</span>
					</div>
				</fieldset>
				<br class="clear">
					<fieldset class="fullwidth lastrow check error">
						<span class="label">Prodotti gi&agrave; posseduti</span>
						<span class="column">
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Conto corrente/conto di deposito</span>
								
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Azioni/Obbligazioni</span>
								
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Fondi comuni</span>
								
							</label>
						</span>
						<span class="column">
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Derivati</span>
								
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Prodotti assicurativi</span>
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Carte di credito</span>
							</label>
						</span>
						<span class="errortext">Lorem</span>
					</fieldset>
			</div>
			<!-- fine blocco anagrafici -->
			
			<!-- fine Documento identita' -->
	
			<!-- FINE BLOCCO PER 1 SOLO INTESTATARIO -->
			</div>
		</div>
		<!-- BLOCCO PER 2 INTESTATARIO -->
			<!-- Informazioni su attività economica -->
		<div class="aolAcc">
			
			<div class="aolAccTop">
				<a class="aolAccTitle" id="intestatario2" onclick="switchExp(this,true); showBlock()" title="Espandi">
					<span class="titoloAcc">Intestatario 2 - Lorem ipsum dolor sit amet</span>
					<span href="javascript:;" class="accButt" ></span>
					<span class="errortext"></span>
				</a>
			</div>
			
			
			<div class="aolAccContent">
				
					
				<div class="aolblock">
					<h3>Informazioni su attivit&agrave; economica</h3>
					<fieldset>
						<span class="label">Professione*</span>
						<select>
							<option selected value="1">seleziona</option>
							<option value="2">lorem ipsum</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Settore*</span>
						<select id="">
							<option selected value="1">seleziona</option>
							<option value="2">lorem ipsum</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Stato svolgimento*</span>
						<select>
							<option selected value="1">seleziona</option>
							<option value="2">lorem ipsum</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Provincia di svolgimento*</span>
						<!-- ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
						<style>
							#aolcontainer form fieldset div.suggestions {position:absolute;z-index:99;border:solid 1px #999; background-color: #fff; padding: 3px}
							#aolcontainer form fieldset div.suggestions a {float:left; clear:left; width: 232px; padding: 3px; color: #666; text-decoration:none}
							#aolcontainer form fieldset div.suggestions a:hover {background-color: #dedede}
						</style>
						<input type="text" id="suggestionField2" onclick = "$('suggestionSample2').show(); addEvent(this,'blur',function(){setTimeout(function(){$('suggestionSample2').fade({duration:0.3});},50);})" />
						<div class="suggestions" id="suggestionSample2" style="display:none">
							<a href="javascript:;" onclick="$('suggestionField2').focus()" ><strong>Lo</strong>rei</a>
							<a href="javascript:;" onclick="$('suggestionField2').focus()"><strong>Lo</strong>rem ipsum</a>
							<a href="javascript:;" onclick="$('suggestionField2').focus()">Gorex ipsuma</a>
							<a href="javascript:;" onclick="$('suggestionField2').focus()">Worey</a>
						</div>
						<!-- FINE ATTENZIONE! LE FUNZIONI GOOGLE-LIKE SONO SOLO ESEMPLIFICATIVE -->
						<span class="errortext">Lorem</span>
					</fieldset>
					<fieldset>
						<span class="label">Reddito annuo netto*</span>
						<select>
							<option selected value="1">seleziona</option>
						</select>
						<span class="errortext">Lorem</span>
					</fieldset>
					
					<fieldset class="fullwidth lastrow check">
						<span class="label">Origine del patrimonio*</span>
						<span class="column">
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Reddito da lavoro</span>
								
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Rendite da investimenti</span>
								
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Vendita beni immobili</span>
								
							</label>
						</span>
						<span class="column">
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Eredit&agrave;/donazione</span>
								
							</label>
							<label>
								<input type="checkbox" title="Lorem ipsum dolor sit amet" id=""><span class="optiontextmini">Altro</span>
								
							</label>
							
						</span>
						<span class="errortext">Lorem</span>
					</fieldset>
				</div>
			<!-- fine Informazioni personali -->
				
			
			<div class="aolblock">
					<h3>INFORMAZIONI PER PROCEDURA DI IDENTIFICAZIONE</h3>
					<p>La banca deve verificare l’identità delle persone che aprono per la prima volta un conto Webank. Ogni nuovo 
					cliente deve quindi scegliere una modalità di identificazione tra quelle previste. Se sei già un cliente Webank 
					non dovrai seguire alcuna procedura di identificazione.</p>
					
					<!--caso in cui primo intestatario ha scelto bonifico -->
					<fieldset class="fullwidthradio lastrow identificazioneCont" >
							<div class="blockradio" id="bonifico">
								<label>
									<input type="radio"  name="identificazione2" title="Lorem ipsum dolor sit amet"  onclick="showDett(this)" class="identificazione">
									<span class="optiontextmini">tramite bonifico (consigliato da Webank) <p class="minitext nobottpad">
									Ogni intestatario fa un bonifico di 100 € da un conto corrente intestato a suo nome. Accrediteremo la somma sul 
									Conto Webank dopo l'apertura. Sono accettati anche i bonifici da conti BancoPosta.
									</p></span>
								</label>
								<span class="dett">
										<p class="minitext">
										Inserisci l'iBAN del conto corrente dal quale farai il bonifico.
										</p>
										<fieldset>
											<span class="label">IBAN*</span>
											<input type="text"  id="iban2" maxlength="27">
											<script defer="defer" type="text/javascript">setCounterOnField("iban2",27);</script>
										<span class="errortext">lorem</span>
										</fieldset>
								</span>
							</div>
						
					
					<!--caso in cui primo intestatario ha scelto agenzia -->
					
						<div class="blockradio" id="agenzia">
							
						<label>
							<input type="radio"  onclick="showDett(this)" class="identificazione" title="Lorem ipsum dolor sit amet" name="identificazione2" value="agenzia" >
							<span class="optiontextmini">in un'agenzia del Gruppo Bipiemme <p class="minitext nobottpad">
							Gli intestatari vanno in un'agenzia del Gruppo Bipiemme a firmare i documenti di apertura del conto davanti al nostro incaricato.
							</p></span>
						</label>
						<span class="dett" >
							<p class="minitext black">Devi fare il riconoscimento presso <strong>Banca di Legnano</strong></p>
						</span>	
						
						</div>
						<div class="blockradio" id="conto">
								<label class="nobottpad">
									<input type="radio" onclick="showDett(this)" class="identificazione" name="identificazione2" title="Lorem ipsum dolor sit amet" onclick="showDett(this)">
									<span class="optiontextmini">ho gi&agrave; un Conto Webank <p class="minitext nobottpad">
									Dichiarando di essere già cliente Webank non dovrai seguire alcuna procedura di identificazione. 
			Verificheremo i tuoi dati con quelli nei nostri archivi.
									</p></span>
								</label>
								<span class="dett" >
									<fieldset class="nominh">
										<span class="label">Numero conto corrente Webank*</span>
										<input type="text" name="" value="">
									
									</fieldset>
								</span>
							</div>
					</fieldset>
					
			
			</div>
			
			
			</div>
		</div>
		<!--blocco disabilitato -->
		
		<div class="aolAcc disabled">
			<div class="aolAccTop">
				<a title="Espandi" href="javascript:;"  id="intestatario3" class="aolAccTitle" onmouseover="showGreenToolTip(this, 'lorem');" onmousemove="showGreenToolTip(this, 'lorem',event);" onmouseout="hideGreenToolTip();">
					<span class="titoloAcc">Intestatario 3 - Lorem ipsum dolor sit amet</span>
					<span class="accButt" href="javascript:;"></span>
					<span class="errortext"></span>
				</a>
			</div>
		</div>
		
		
		<div class="filettobutton">
			<a title="indietro" href="/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_2.php" class="greybutton"><span>indietro</span></a>
			<a onclick="javascript:esempioErrori();" title="avanti" href="javascript:;" class="greenbutton"><span>avanti</span></a>
			<a onclick="javascript;" title="salva in bozze" href="javascript:;" class="greenbutton"><span>salva in bozze</span></a>
		</div>
		</form>
	</div>
<!-- PANNELLO DI DESTRA -->	
	<div id="aolright">
		<!-- caso A -->
		<div class="leftit">
		<img src="/img/tit_tuo_conto.gif"  alt="Il tuo conto" />
		</div>
		<div class="gen">
			<ul class="elencoprodotti">
				<li>
					<span class="productname">Conto corrente</span>
					<span>Zero canone</span>
					<span>Zero commissioni bancarie</span>
				</li>
				<li>
					<span class="productname">Deposito e linee vincolate</span>
					<span>1,10% tasso base</span>
					<span>Accreditamento trimestrale interessi</span>
					<span class="boxedgreen">
						<span><strong>3,5%</strong> sui depositi a 12 mesi</span>
					</span>
				</li>
				<li>
					<span class="productname">Sportello telefonico</span>
					<span>Servizio gratuito</span>
				</li>
				<li>
					<span class="promogreen">
						<span>In più per te <strong>120 &euro;</strong> di buoni acquisto MediaWorld!</span>
					</span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_haiaggiunto.gif"  alt="Hai aggiunto" />
		</div>
		<div class="gen">
			<ul class="elencoprodotti" id="prodottiAggiunti">
				<li>
					<span class="productname">Bancomat</span>
				</li>
				<li>
					<span class="productname">Carta di credito</span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_serve_aiuto.gif"  alt="Ti serve aiuto?" />
		</div>
		<div class="gen">
			<ul class="elencosimple">	
				<li><img alt="numero verde" src="/img/img_or_nverde_dx.gif" /><p>Luned&igrave; - venerd&igrave;: 9.00 - 20.00 sabato: 9.00 - 17.00</p></li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="gen">
			<ul class="elencosimple callmeback">
			<li><img alt="Webank ti richiama" src="/img/img_or_operatore_sm.gif" /><a href="javascript:;" onclick="openPopOverLayer('callmeback', 'floating');">Webank ti richiama</a>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<a href="javascript:;" onclick="switchAolDoclist(this);"><img src="/img/tit_documentazione_closed.gif"  alt="Documentazione" /></a>
		</div>
		<div id="aoldoclist" style="display:none">
				<ul>
					<li><a href="#1" target="blank" onclick="setVisitedLink(this)">Foglio Informativo</a></li>
					<li><a href="#2" target="blank" onclick="setVisitedLink(this)">Condizioni generali</a></li>
					<li><a href="#3" target="blank" onclick="setVisitedLink(this)">Modulo richiesta</a></li>
					<li><a href="#4" target="blank" onclick="setVisitedLink(this)">Documento di sintesi</a></li>
					<li><a href="#5" target="blank" onclick="setVisitedLink(this)">Informativa precontrattuale servizi a distanza</a></li>
					<li><a href="#6" target="blank" onclick="setVisitedLink(this)">Principali diritti del cliente</a></li>
					<li><a href="#7" target="blank" onclick="setVisitedLink(this)">Guida pratica al conto</a></li>
					<li><a href="#8" target="blank" onclick="setVisitedLink(this)">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
				</ul>
				<h4>Per  apertura deposito titoli</h4>
				<ul>
					<li><a href="#9" target="blank" onclick="setVisitedLink(this)">Richiesta deposito titoli</a></li>
					<li><a href="#10" target="blank" onclick="setVisitedLink(this)">Condizioni generali</a></li>
					<li><a href="#11" target="blank" onclick="setVisitedLink(this)">Documentidi sintesi</a></li>
					<li><a href="#12" target="blank" onclick="setVisitedLink(this)">Informativa Mifid</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- OVERLAY PER CALLMEBACK -->
			<div id="callmeback" class="overlayer" style="display:none">
				<div class="overlayertitle">
					<a id="close" class="chiudi" ;="" onclick="closePopOverLayer('callmeback')" href="#"></a>
					<span id="helptxt">Hai bisogno di aiuto per completare il form? <br />lasciaci il tuo numero di telefono e ti richiameremo noi quando vuoi tu!</span>
				</div>
				<div class="overlayerbody">
				<span class="sep"></span>
					<!-- secondo blocco-->
					<div class="contact">
						
						<div class="contactcont" id="formcont">
							<form action="#" method="post">
								<div class="fieldblocklayer error">
									<label>Numero di telefono</label>
									<input type="text" isdatepicker="true">
									<br class="clear">
									<span class="error">Lorem</span>
								</div>
								<div id="calendario" class="fieldblocklayer middle error">
									<label>Giorno</label>
									<script type="text/javascript">DatePickerControl.createDp ('datepicker1',"20110517|20110518|20110519");</script>
									
									<br class="clear">
									<span class="error">Lorem</span>
								</div>
								<div class="fieldblocklayer dx error">
									<label>Fascia oraria</label>
									<select name="orario" id="orario" style="visibility: visible;"><option value="09.00-10.00">09.00-10.00</option><option value="10.00-11.00">10.00-11.00</option><option value="11.00-12.00">11.00-12.00</option><option value="12.00-13.00">12.00-13.00</option><option value="13.00-14.00">13.00-14.00</option><option value="14.00-15.00">14.00-15.00</option><option value="15.00-16.00">15.00-16.00</option><option value="16.00-17.00">16.00-17.00</option><option value="17.00-18.00">17.00-18.00</option><option value="18.00-19.00">18.00-19.00</option><option value="19.00-20.00">19.00-20.00</option></select>
									<br class="clear">
									<span class="error">Lorem</span>
								</div>
								<br class="clear">
								<br />
								<br />
								<div class="fieldblocklayer">
									<label>Codice</label><a class="rightlink" href="#">Crea nuovo codice</a>
									<img class="imgCaptcha" src="/img/bg_captcha3.gif">
									
								</div>
								<div class="fieldblocklayer middle bottom error">
									<label>Inserisci codice</label>
									<input type="text" class="lenghtmiddle" isdatepicker="true">
									<br class="clear">
									<span class="error">Lorem</span>
									
									<br><br>
									
								</div>
								<div class="fieldblocklayer dx">
									<a onclick="this.parentNode.parentNode.parentNode.style.display='none'; document.getElementById('helptxt').style.display='none'; document.getElementById('msgtxt').style.display='block'" class="greenbutton" href="javascript:;"><span>Contattami</span></a>
								</div>
							</form>
						
							
						
						</div>
						<div class="contactbox small" style="display:none" id="msgtxt">
							<img alt="" src="/img/str_bg_overlayer_abb_top_sm.gif">
							<div class="contactcont">
									
								<div class="contactText">
										Abbiamo ricevuto la tua richiesta di contatto, <br />ti richiameremo nel giorno e nell'ora da te indicati.
										
								</div>
							</div>
							<img alt="" src="/img/str_bg_overlayer_abb_bot_sm.gif">
						</div>
						
					</div>
				</div>
			</div>
			<!-- FINE OVERLAY PER CALLMEBACK -->