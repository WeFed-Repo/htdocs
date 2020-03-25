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
					parent.location.href = "/connect.php?page=str_aol_pub_wb.php&tpl=tpl_pub_aol_step_3.php";
					return 0;
				}
				setError('estrattoRadio','Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude');
				//Per togliere gli errori utilizzare unsetError con gli stessi parametri (id del campo)
				errori = true;
			}
		</script>
		<!-- FINE ESEMPIO GESTIONE ERRORI NON COPIARE -->
		<form>
		<span class="elencostepPre">trasferisci tutto sul conto webank</span>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
		</p>
		<br />
		<span class="elencostepPre">cosa fare</span>
		<ul class="bulletSfumato">
			<li><strong>VERIFICA E CONFERMA</strong> i dati presenti nel form sotto </li>
			<li><strong>INVIACI</strong> per posta la documentazione richiesta</li>
			
		</ul>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
		<br />
		<p>Stai aprendo conto Webank con il seguente deposito titoli:</p>
		
			<fieldset style="width: 336px;">
				<span class="label">Deposito titoli</span>
				<select>
					<option value="1" selected="">xxxx-xxx</option>
					<option value="2">xxxx-xxx</option>
					<option value="2" disabled>xxxx-xxx richiesta in corso</option>
					<option value="2">xxxx-xxx</option>
				</select>
				<span class="errortext">Lorem</span>
			</fieldset>
			<fieldset style="width: 220px;">
			
				<div class="depRightBlock">
					<div class="totLiquidita">Liquidit&agrave; disponibile</div>
					<div class="importoDeposito">
						
						<span id="tooltip1" class="uniqTooltipText" onmouseout="removeUniqTooltip(event,this);"  onmouseover="createUniqTooltip(event, this)">
							<span class="uniqTooltipPos"><strong>x.xxx.xxx,xx &euro;</strong> al gg/mm/aaaa</span>
							<span class="uniqTooltipInnerHTML">31/12/2009: <strong>x.xxx.xxx,xx &euro;</strong><br />
								01/01/2010: <strong>x.xxx,xx &euro;</strong><br />
								02/01/2010: <strong>x,xx &euro;</strong></span>
						</span>
						
					</div>
				</div>
				
			
			</fieldset>
			
			
			<div class="aolblock bancarizza ">
				<h3>dati intestatari</h3>
				<div class="outputblock">
				<fieldset class="output" style="width: 320px;">
					<span class="label">Nome</span>
					<span class="output">Mario Lorem</span>
					<input type="hidden" value="" name="" class="hidden">
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="label">Cognome</span>
					<span class="output">Ipsum dolor sit</span>
				</fieldset>
				</div>
			</div>
			<div class="aolblock bancarizza ">
				
				<div class="outputblock">
				<fieldset class="output" style="width: 320px;">
					<span class="label">Nome</span>
					<span class="output">Mario Lorem</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="label">Cognome</span>
					<span class="output">Ipsum dolor sit</span>
				</fieldset>
				</div>
			</div>
			
			<div class="aolblock bancarizza ">
			<h3>caratteristiche</h3>
				<div class="outputblock">
				<fieldset class="output" style="width: 160px;">
					<span class="label">Regime fiscale</span>
					<span class="output">amministrato</span>
				</fieldset>
				<fieldset class="output" style="width: 160px;">
					<span class="label">Tipo di commissioni</span>
					<span class="output">profilo fisso</span>
				</fieldset>
				<fieldset style="width: 220px;" class="output">
					<span class="label">Estratti conti e contabili</span>
					<span class="output">online, servizio gratuito</span>
				</fieldset>
				</div>
			</div>
			
			<div class="aolblock bancarizza ">
			<h3>servizi e piattaforme attive</h3>
			
				<fieldset class="output" style="width: 320px;">
					<span class="output">Prestito titoli</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Piatatforma T3 open</span>
				</fieldset>
				<fieldset class="output" style="width: 320px;">
					<span class="output">Short selling overnight</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Visual trader</span>
				</fieldset>
				<fieldset class="output" style="width: 540px;">
					<span class="output">Long overnight</span>
				</fieldset>
				<fieldset class="output" style="width: 540px;">
					<span class="output">Derivati idem</span>
				</fieldset>
				<p>Nota:Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
			
			
			</div>
			
			<div class="aolblock bancarizza ">
			<h3>informative e strumenti di analisi attivi (pi&ugrave; intestatari)</h3>
			
				<fieldset class="output" style="width: 320px;">
					<span class="label">&nbsp; </span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="label">Attivato da:</span>
				</fieldset>
				<fieldset class="output" style="width: 320px;">
					<span class="output">Quotazioni FUTURES Euronext LIFFE Book a 5 livelli</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					
					<span class="output">Mario Rossi</span>
				</fieldset>
				<fieldset class="output" style="width: 320px;">
					<span class="output">Quotazioni FUTURES USA eCBOT</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Mario Bianco</span>
				</fieldset>
				<fieldset class="output" style="width: 320px;">
					<span class="output">Quotazioni Nasdaq</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Mario Rossi</span>
				</fieldset>
				<fieldset class="output" style="width: 320px;">
					<span class="output">Lorem ipsum</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Mario Bianco</span>
				</fieldset>
				</fieldset>
				<fieldset class="output lastrow" style="width: 320px;">
					<span class="output">Lorem ipsum</span>
				</fieldset>
				<fieldset class="output lastrow" style="width: 220px;">
					<span class="output">Mario Rossi</span>
				</fieldset>
			
			</div>
			<div class="aolblock bancarizza ">
			<h3>informative e strumenti di analisi attivi (un intestatario)</h3>
			  
				<fieldset class="output" style="width: 320px;">
					<span class="output">Quotazioni FUTURES Euronext LIFFE Book a 5 livelli</span>
				</fieldset>
				<fieldset class="output" style="width: 220px;">
					<span class="output">Analisi tecnica TraderMade Italia PLUS</span>
				</fieldset>
				<fieldset class="output" style="width: 320px;">
					<span class="output">Quotazioni FUTURES USA eCBOT</span>
				</fieldset>
				<fieldset class="output lastrow" style="width: 220px;">
					<span class="output">Analisi tecnica TraderMAde USA</span>
				</fieldset>
				<fieldset class="output lastrow" style="width: 540px;">
					<span class="output">Quotazioni Nasdaq</span>
				</fieldset>
			
			
			</div>
			<div class="aolblock bancarizza">
			<h3>questionario e profilo MIFID</h3>
				<div class="outputblock">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<p class="evident">
					Come definirebbe la sua conoscenza degli strumenti finzanziari?
				</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<p class="evident">
					Ha gi&agrave; operato con una certa frequenza in titoli di investimento e/o in strumenti finanziari?
				</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<p class="evident">
					Ha effettuato studi specifici, segue per passione i mercati o ha esperienza diretta nel settore?
				</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
				<fieldset class="output" style="width: 160px;">
					<span class="label">Tipo cliente</span>
					<span class="output">Persona fisica</span>
				</fieldset>
				<fieldset class="output" style="width: 160px;">
					<span class="label">Esperienza</span>
					<span class="output">Medio-alta</span>
				</fieldset>
				<fieldset style="width: 220px;" class="output">
					<span class="label">Tipo profilo</span>
					<span class="output">Completo </span>
				</fieldset>
				</div>
				
			</div>
			<br class="clear" />
			<p>Potrai modificare i dati su indicati dopo aver completato al richiesta di apertura conto</p><br />
			<div class="filettobutton">
			
			<a title="conferma i dati e prosegui" href="javascript:;" class="greenbutton"><span>conferma i dati e prosegui</span></a><br class="clear" />
			</div>
			<!--bottone disabilitato -->
			<div class="filettobutton">
				<a title="richiesta apertura conto in corso" href="javascript:;" class="disabledbutton"><span>richiesta apertura conto in corso</span></a><br class="clear" />
			</div>
			
			
			<p class="linkBottom"><img alt="Vuoi aprire conto Webank con altri dati?" src="/img/ret/lampa_on.gif"><span>Vuoi aprire conto Webank con altri dati? <a href="#" title="Fai qui la tua richiesta">Fai qui la tua richiesta</a></span></p>

		</form>
	</div>
<!-- PANNELLO DI DESTRA -->	
	<div id="aolright">
			<div class="gen">
			<div class="boxpromoright paddbott" style="z-index: 0;">
					<a href="#"><img alt="congeliamo i bolli" src="/img/ban_promosm_conc.gif"></a>
					<span class="promoopen white">
						<a  onmouseover="showCond(this)" onmouseout="hideCond(this)" title="verifica le condizioni" href="javascript:;" class="">Verifica le condizioni</a>
						<span style="display: none;" class="condizionidetails">
							<p>Con l'iniziativa &quot;Congela il Bollo&quot;, 
							Webank ti rimborsa, per il secondo 
							semestre 2011 e per tutto il 2012, 
							La differenza dell'imposta di bollo 
							sul deposito titoli introdotta dalla 
							nuova Finanziaria (Legge 15 luglio 
							2011 n. 111).</p><p>Per aderire:</p>

							<ul>
								<li><strong>richiedi</strong> l'apertura di Conto 
   Webank e il nuovo deposito titoli 
   entro il 30/09/11;</li>
							<li><strong>perfeziona</strong> l'apertura del conto 
   corrente e del deposito titoli entro 
   31/10/11, inviando tutta la 
   documentazione firmata;</li>
								<li><strong> attiva il Servizio di Prestito 
   Titoli</strong>  entro il il 15/11/11;
</li>
<li><strong>verifica</strong> che sul <strong>deposito titoli</strong> 
   sia presente, al 31/12/11 e nel 2012 
   al termine del Periodo di 
   Riferimento, un <strong>controvalore di 
   Titoli e Fondi</strong>  pari ad almeno 
10.000 euro.</li>
							</ul>
						</span>
						<img alt="" src="/img/str_promoopenbottom_white.gif">
					</span>
				</div>
			
			</div>
		</div>
	</div>
</div>
