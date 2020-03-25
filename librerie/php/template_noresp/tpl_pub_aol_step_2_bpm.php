<div id="aolcontainer">
	<div id="aolleft">
		<form id="aol" name="aol" action="" method="post" autocomplete="off">
			<input type="hidden" name="fromPageName" value="wsPUaol2.jsp">
			<h2>Il tuo conto comprende:</h2>
			<div class="aolblock">
				<h3>Conto BPM Next</h3>
				<p>&Egrave; un conto corrente online, offerto esclusivamente ai nuovi clienti del Gruppo Bipiemme.</p>
				<p><strong>Con Conto BPM Next</strong> (TBD nome prodotto) puoi gestire il tuo conto corrente a distanza utilizzando i canali di banca telematica resi disponibili (sito web, call center, app per smartphone, tablet, ecc.).</p>
				<p>Grazie alla funzione di <strong>Risparmio Ben Fatto</strong> puoi destinare delle somme per i tuoi obiettivi di spesa.</p>
			</div>
			<div class="aolblock">
				<h3>estratto conto e contabili online</h3>
				<p>Estratto conto e contabili sono disponibili <strong>gratuitamente</strong> online.</p>
				<p>Ti saranno inviate trimestralmente; se vuoi modificarne la frequenza contatta il nostro <Strong>Servizio Clienti.</strong></p>
			</div>
			
			<!-- ACCORDION DEPOSITO TITOLI --><!-- 1 MODIFICA HTML NO DEPOSITO TITOLI SOSTITUITO CON BANCOMAT CHE NON E' INVECE TRA I PRODOTTI -- NON CI SONO LE PARTI COMMENTATE -->
			<div class="aolblock">
				<!--<div id="aolDeposito" class="opened">-->
					<div class="divSmall">
						<h3>Bancomat</h3>
						<p>&Egrave; gratuito e lo puoi utilizzare ovunque senza canone per <strong>effettuare pagamenti e prelevare gratis</strong> in tutta l'area Euro (TBD Frase)..</p>
					</div>
					<img src="/img/aol_bancomat.png" alt="Bancomat" class="divSmallImg"/>
					<!--<div class="aolDepositotop">
						<span class="title" title="Dati per l'apertura del deposito titoli"></span>
						<fieldset>
							<label><input type="checkbox" name="ct" value="1" onclick="openCloseDt();" id="ct"><span class="optiontextmini">Non voglio richiedere adesso il deposito titoli</span></label>
						</fieldset>
					</div>
					<div id="aolDepositoCont">
						<div class="aolDepositoBody">
							<!-- CONTENUTO DEI CAMPI 
							<h4 class="primo">Regime fiscale</h4>
							<p>
								Ai sensi dell'art.6 del D. lgs. 21 novembre 1997 n. 461, e successive modifiche, il Cliente può esprimere la sua scelta per l'applicazione dell'imposizione sostitutiva sulle plusvalenze, differenziali e/o proventi dei Servizi Amministrati.
							</p>
							<div id="regime" class="fieldblock">
								<fieldset class="fullwidth">
									<label>
										<input type="radio" name="ct_regimenew" value="1" checked="checked" id="ct_regimenew">
										<span class="optiontext"><strong>Regime fiscale amministrato (consigliato)</strong></span>
										<span class="dettaglio">Il cliente che sceglie questo regime delega alla Banca il calcolo dell'imposta sostitutiva sulle plusvalenze realizzate (Capital Gain). Questo regime renderà più semplice la compilazione della dichiarazione dei redditi. Il Cliente dichiara di essere a conoscenza che la scelta effettuata sul regime fiscale verrà applicata anche all'operatività in Fondi Comuni di Investimento.</span>	
									</label>
								</fieldset>
								<fieldset class="fullwidth">
									<label>
										<input type="radio" name="ct_regimenew" value="0" id="ct_regimenew">
										<span class="optiontext"><strong>Regime fiscale dichiarativo</strong></span>
										<span class="dettaglio">Il cliente dichiara di essere a conoscenza degli obblighi personali di natura dichiarativa in materia fiscale e solleva la Banca da qualsiasi responsabilità al riguardo. L'intermediario non applicherà nessuna ritenuta sul Capital Gain, il cliente sarà tenuto al regime ordinario di tassazione e dovrà, quindi, adempiere agli obblighi impositivi. Scegliendo il regime fiscale dichiarativo, il Cliente rinuncia espressamente all'applicazione del regime fiscale amministrato sui fondi.</span>
									</label>
								</fieldset>
								<span class="errortext">Seleziona</span>
							</div>
							<h4>Tipo di commissione</h4>
							<p>Scegli il tipo di commissione che ti verrà applicata sugli ordini di trading, in base al volume di operatività che ritieni di effettuare.</p>
							<div id="commissioni" class="fieldblock">
								<fieldset class="lastrow" style="width:160px">
									<label><input type="radio" name="ng_commissioni" value="1" id="ng_commissioni"><span class="optiontext">profilo fisso</span></label>
								</fieldset>
								<fieldset class="lastrow" style="width: 150px;">
									<label><input type="radio" name="ng_commissioni" value="0" id="ng_commissioni"><span class="optiontext">profilo variabile</span></label>
								</fieldset>
								<span class="errortext">Seleziona</span>
							</div>
							<a href="javascript:;" onclick="cstPopup('/webankpub/wb/cstPopup/do/aol/gpdettaglioCommissioni.do?BV_UseBVCookie=Yes','Dettaglio Commissioni','600','530','yes');" class="floating">Dettagli commissioni</a>
							<h4>Estratto conto e contabili del deposito titoli</h4>
							<p>Scegli come ricevere l'estratto conto e le contabili del tuo deposito titoli.</p>
							<div id="contabiliCt" class="fieldblock">
								<fieldset class="lastrow" style="width: 160px">
									<label><input type="radio" name="colCt" value="1"><span class="optiontext">online<br>servizio gratuito</span></label>
								</fieldset>
								<fieldset class="lastrow" style="width: 300px">
									<label><input type="radio" name="colCt" value="0"><span class="optiontext">cartacee<br>servizio a pagamento: 1,35&euro; per ciascun documento</span></label>
								</fieldset>
								<span class="errortext">Seleziona</span>
							</div>
							<h4>ABILITAZIONE LONG OVERNIGHT</h4>
							<p>La negoziazione in modalità Long overnight è un tipo di operatività marginata, con cui puoi acquistare titoli utilizzando soltanto una parte della liquidità necessaria.</p>
							<fieldset class="fullwidth check lastrow" style="min-height: 20px;">
								<label>
									<input type="checkbox" name="longOv" value="1" id="longOv">
									<span class="optiontext optiontextb">Desidero ricevere il modulo per l'abilitazione al servizio Long Overnight</span>
								</label>
								<span class="errortext">Compila</span>
							</fieldset>
							<!-- FINE CONTENUTO DEI CAMPI 
						</div>
					</div>
					<div class="aolDepositoBottom"> </div>-->
				<!--</div>-->
			</div>
			<!-- FINE ACCORDION DEPOSITO TITOLI -->
			
			
			<!-- BLOCCO SELEZIONE PRODOTTI --> <!-- 2 MODIFICA HTML-- AGGIUNTE CLASSI aolblock a product -- sostituita bancomat con risparmio -->
			<div class="productPush aolblock">
				
				<span class="pushTitolo">  <!-- 3 MODIFICA HTML commentato immagine-->
					Richiedi ora i prodotti che preferisci
					<!--<img alt="Richiedi ora i prodotti gratuiti che preferisci" src="/img/tit_richiedi_ora_prodotti.gif">-->
				</span>
				
				<div class="product bancomat aolblock">
					<fieldset>
						<label><input type="checkbox" name="cb" value="1" onclick="attivaProdotti();" id="cb"><span class="large">Risparmio ben fatto</span></label>
					</fieldset>
					<div class="upperLeft">
						<p>
							&Egrave; gratuito e lo puoi utilizzare ovunque senza canone per effettuare pagamenti e prelevare gratis in tutta l'area Euro.<br>
							In qualunque momento, puoi <strong>modificare online</strong> il <strong>massimale</strong><br>per soddisfare anche le tue esigenze di spesa più elevate.<br>
						</p>
					</div>
				</div>
				<div class="product carta">
					<fieldset>
						<label><input type="checkbox" name="cj" value="1" onclick="attivaProdotti();" id="cj"><span class="large">La carta ricaricabile</span></label>
					</fieldset>
					<div class="upperLeft">
						<p>
							Carta Je@ns è la prepagata ricaricabile <strong>gratuita, semplice e utile per tutti i tuoi acquisti in tutto il mondo!</strong><br>
							<strong>Non hai commissioni sui pagamenti in area Euro</strong>.<br>
							Puoi <strong>ricaricare fino a 2.500 Euro online</strong>, presso i bancomat del circuito QuiMultibanca, ricevitorie Sisal e sportello telefonico Webank.
							
						</p>
					</div>
				</div>
			</div>	
			<!-- FINE BLOCCO SELEZIONE PRODOTTI -->
			<div class="aolblock">
				<h3>Informativa precontrattuale</h3>
				<div class="aolblockwrapper">
					<p>
						Ti ricordiamo che è tuo diritto ricevere copia di tutta la documentazione contrattuale, idonea per la stipula e per una ponderata valutazione del contenuto:
					</p>
					<ul class="bulletSfumato">
						<li>questo diritto non può essere sottoposto a termini e condizioni</li>
						<li>l'esercizio di tale diritto non impegna le parti a stipulare il contratto</li>
					</ul>
					<fieldset class="fullwidth check" style="min-height: 20px">
						<label>
							<input type="checkbox" name="info_precontrattuale" value="1" id="info_precontrattuale">
							<span class="optiontextmini">Dichiaro di avvalermi di questo diritto e riconosco di aver stampato o salvato copia completa della documentazione precontrattuale*</span>
						</label>
						<span class="errortext">Seleziona</span>
					</fieldset>
					<fieldset class="fullwidth check lastrow">
						<label>
							<input type="checkbox" name="mod_precontratti" value="1" id="mod_precontratti">
							<span class="optiontextmini">Dichiaro di aver preso visione e di aver acquisito su supporto durevole copia dell'informativa precontrattuale disponibile qui a fianco*</span>
						</label>
						<span class="errortext">Seleziona</span>
					</fieldset>
				</div>
				<img class="promobottom" src="/img/str_aol_dacompilarebot.gif">
			</div>
			<div class="filettobutton linked">
				<a href="#" title="indietro" class="backLinked">indietro</a>
				<a href="#" title="Vuoi continuare pi&ugrave; tardi?" class="bozzaLinked"><span>Vuoi continuare pi&ugrave; tardi?</span></a>
				<a href="javascript:valida(1, false);" title="avanti" class="greenbutton"><span>avanti</span></a>
			</div>
		</form>
	</div>
	<div id="aolright">
		<div class="leftit"><img alt="Il tuo conto" src="/img/tit_tuo_conto.gif" /></div>
		<div class="gen">
			<ul class="elencoprodotti">
				<li>
					<span class="productname">Conto corrente</span>
					<span>Zero canone e zero commissioni.</span>
				</li>
				<li>
					<span class="productname">Deposito di risparmio</span>
					<span>Ottieni un rendimento più alto sui tuoi risparmi con le linee vincolate a 3, 6 o 12 mesi</span>
					<span class="boxedgreen"><span>Tasso 3.50 su tutte le linee vincolate</span></span>
				</li>
				<li id="promoDT">
					<span class="productname">Deposito titoli</span>
					<span>Puoi aprire un deposito titoli e fare operazioni di trading e investimenti.</span>
					<span class="boxedgreen"><span>Bolli gratis su deposito titoli</span></span>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_haiaggiunto.gif"  alt="Hai aggiunto" />
		</div>
		<div class="gen">
			<ul class="elencoprodotti">
				<li>
					<div id="prodottiAttivi"></div>
				</li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<img src="/img/tit_serve_aiuto.gif"  alt="Ti serve aiuto?" />
		</div>
		<div class="gen">
			<ul class="elencosimple">	
				<li><img alt="numero verde" src="/img/img_or_nverde_dx.gif" /><p>Luned&igrave; - venerd&igrave;: 8.30 - 20.30 sabato: 9.00 - 17.00</p></li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="gen">
			<ul class="elencosimple callmeback">
				<li><img alt="Webank ti richiama" src="/img/img_or_operatore_sm.gif" /><a href="javascript:;" onclick="openPopOverLayer('callmeback', 'floating'); valorizzaCalendario(2)">Webank ti richiama</a></li>
			</ul>
		</div>
		<div class="filettolarge"></div>
		<div class="leftit">
			<a href="javascript:;" onclick="switchAolDoclist(this);"><img src="/img/tit_documentazione_closed.gif"  alt="Documentazione" /></a>
		</div>
		<div id="aoldoclist"style="display:none">
			<ul>
				<li><a href="/webankpub/aol/wbPDFFoglioInformativo.do?BV_UseBVCookie=Yes&cod=1.02.0" onclick="setVisitedLink(this);" target="blank">Foglio Informativo</a></li>
				<li><a href="/doc/COND_GENERALI_BANCA.pdf" onclick="setVisitedLink(this);" target="blank">Condizioni generali</a></li>
				<li><a href="/wbx/res/doc/contratto_webank_fs.pdf" onclick="setVisitedLink(this);" target="blank">Modulo richiesta</a></li>
				<li><a href="/doc/DDSContoWebank.pdf" onclick="setVisitedLink(this);" target="blank">Documento di sintesi</a></li>
				<li><a href="/doc/nsf/informativa_precontrattuale_art_190.pdf" onclick="setVisitedLink(this);" target="blank">Informativa precontrattuale servizi a distanza</a></li>
				<li><a href="/wbx/res/doc/Principali_diritti_cliente_Webank.pdf" onclick="setVisitedLink(this);" target="blank">Principali diritti del cliente</a></li>
				<li><a href="/doc/GuidaConto_WEB.pdf" onclick="setVisitedLink(this);" target="blank">Guida pratica al conto</a></li>
				<li><a href="/doc/Guida_arbitro_finanziario.pdf" onclick="setVisitedLink(this);" target="blank">Guida pratica e modulo per ricorrere all'Arbitro</a></li>
				<li><a href="/doc/contratto_carta_jeans_FS.pdf" onclick="setVisitedLink(this);" target="blank">Modulo di richiesta Carta Je@ns</a></li>
				<li><a href="/webankpub/aol/wbPDFFoglioInformativo.do?BV_UseBVCookie=Yes&cod=4.15.0" onclick="setVisitedLink(this);" onclick="setVisitedLink(this);" target="blank">Foglio informativo Carta Je@ns</a></li>
			</ul>
			<h4>Per  apertura deposito titoli</h4>
			<ul>
				<li><a href="/doc/nsf/ModuloRichiestaDT_fs.pdf" onclick="setVisitedLink(this);" target="blank">Richiesta deposito titoli</a></li>
				<li><a href="/doc/nsf/CondizioniGeneraliSI_fs.pdf" onclick="setVisitedLink(this);" target="blank">Condizioni generali</a></li>
				<li><a href="/doc/DDSDepositoTitoli.pdf" onclick="setVisitedLink(this);" target="blank">Documento di sintesi</a></li>
				<li><a href="/doc/nsf/Mifid.pdf" onclick="setVisitedLink(this);" target="blank">Informativa Mifid</a></li>
				<li><a href="/doc/Consob_Guida_alla_Conciliazione.pdf" onclick="setVisitedLink(this);" target="blank">Guida Camera di Conciliazione della CONSOB</a></li>
			</ul>
		</div>
	</div>

</div>