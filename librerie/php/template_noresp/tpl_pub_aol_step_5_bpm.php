<div id="aolcontainer">
	<div id="aolleft">
		<form id="aol" name="aol" action="#" method="post" autocomplete="off">
		<input type="hidden" name="fromPageName" value="wsPUaol5.jsp">
		<div class="aolblock">
			<h3>Tecniche di comunicazione a distanza</h3>
			<div class="aolblockwrapper">
				<p>
					L'<strong>operatività a distanza</strong> caratterizza tutti i servizi offerti da Webank S.p.A. Per poter comunicare con te per <strong>email</strong> o per <strong>telefono</strong> necessitiamo del tuo consenso. In caso contrario, saremo impossibilitati a procedere all'apertura del conto. 
					Con il tuo consenso,  inoltre, dichiari e garantisci che il tuo computer (o altro sistema informatico) permette la stampa, il salvataggio in formato elettronico (supporto durevole) per il recupero della copia integrale e conforme di tutti i documenti inviati  o messi a disposizione da Webank per tutta la durata dei rapporti. 
				</p>
				<div id="divConsDoc" class="fieldblock">
					<fieldset class="fullwidth lastrow">
						<div class="fieldblock" style="width: 167px !important">
							<label><input type="radio" name="consDoc" id="consDoc" value="1" /><span class="optiontext">do il consenso</span></label>
						</div>
						<div class="fieldblock">
							<label onmouseover="javascript:showGreenToolTip(this, 'Se non dai il consenso non è possibile procedere con l\'apertura');" onmouseout="javascript:hideGreenToolTip(this);">
							<input type="radio" name="consDoc" id="consDoc" value="0" /><span class="optiontext">non do consenso</span></label>
							<div class="greentooltip" style="display:none;"><p>Non dando il consenso, non &egrave; possibile procedere con l'apertura del conto.</p></div> 
						</div>
					</fieldset>
				<span class="errortext">Compila</span>
				</div>
			</div>
			<img class="promobottom" src="/img/str_aol_dacompilarebot.gif">
		</div>
		<div class="aolblock">
			<h3>Documentazione contrattuale e di trasparenza</h3>
			<div class="aolblockwrapper">
				<p>
					Leggi la seguente documentazione contrattuale. Ti consigliamo di salvarla sul tuo computer.
				</p>
				<ul class="documentlist">
					<li><a href="/webankpub/aol/InformativaContoWebank.do?BV_UseBVCookie=Yes&type=informativa&DT=1" target="_blank" onclick="setVisitedLink(this);checkDoc(this,false,true);" id="informativa">Documento di sintesi - Foglio informativo</a></li>
					<li><a href="/webankpub/aol/CondizioniBanca.do?BV_UseBVCookie=Yes&type=condizioni" target="_blank" onclick="setVisitedLink(this);checkDoc(this,false,true);" id="condizioni">Condizioni generali - Informativa precontrattuale sui servizi a distanza - Principali diritti del cliente</a></li>
					<li><a href="/webankpub/aol/Contrattualistica.do?BV_UseBVCookie=Yes&type=contratto&CJ=1" target="_blank" onclick="setVisitedLink(this);checkDoc(this,false,true);" id="contratto">Modulo di richiesta Webank - Modulo di richiesta Carta Je@ns</a></li>
					
				</ul>
				<fieldset class="fullwidth check lastrow">
					<label>
						<input type="checkbox" name="trasparenza" id="trasparenza" value="1" title="Prima di procedere, occorre prendere visione di tutti i documenti contrattuali, aprendo i relativi .pdf" disabled="disabled" />
						<span class="optiontextmini">Dichiaro di aver preso visione e salvato sul mio computer i documenti sopra elencati.</span>
					</label>
					<span class="errortext">Prendi visione della documentazione</span>
				</fieldset>
			</div>
			<img class="promobottom" src="/img/str_aol_dacompilarebot.gif">
		</div>
		<!-- Fine documentazione contrattuale e di trasparenza -->
		<!-- Informativa precontrattuale sui contratti e servizi a distanza -->
		<div class="aolblock">
			<h3>Informativa precontrattuale sui contratti e servizi a distanza</h3>
			<div class="aolblockwrapper">
			<ul class="documentlist">
				<li>Leggi la <a href="/doc/nsf/informativa_precontrattuale_art_190.pdf" onclick="setVisitedLink(this);" target="_blank">documentazione sul diritto di recesso</a></li>
			</ul>
			<fieldset class="fullwidth check lastrow">
			
				<label>
					<input type="checkbox" name="servizi_distanza" id="servizi_distanza" value="1" title="Prendi visione della documentazione" />
					<span class="optiontextmini">Prendo atto che ho facolt&agrave; di recedere dal contratto entro 14 giorni dalla sua stipula.</span>
				</label>
				<span class="errortext">Prendi visione della documentazione</span>
				
			</fieldset>
			</div>
			<img class="promobottom" src="/img/str_aol_dacompilarebot.gif">
		</div>
		<!-- Fine Informativa precontrattuale sui contratti e servizi a distanza -->
		<!-- Consensi per il trattamento dei dati personali -->
		<div class="aolblock">
			<h3>Consensi per il trattamento dei dati personali</h3>
			<div class="aolblockwrapper">
				<p class="evident">Con riferimento all'informativa precedentemente resa, chiediamo il tuo consenso al trattamento dei dati personali per finalità non necessarie all'adempimento degli obblighi contrattuali descritti.<br><br>Esprimi la tua preferenza, se desideri o meno che i tuoi dati siano:</p>
				<div id="divConsDatiPersonali" class="fieldblock">
					<fieldset class="fullwidth">
						<p class="subevident">utilizzati per l'invio, da parte della Banca, di comunicazioni che riguardano l'offerta di prodotti o di servizi del Gruppo Bipiemme e per elaborazione di studi e di ricerche di mercato</p>

						<div class="fieldblock" style="width: 167px !important">
							<label><input type="radio" name="consDatiPersonali" value="0"/><span class="optiontext">do il consenso</span></label>
						</div>
						
						<div class="fieldblock">
							<label onmouseover="javascript:showGreenToolTip(this, 'Se non presti il consenso, non sarai aggiornato sulle offerte riservate ai nostri clienti.');" onmouseout="javascript:hideGreenToolTip(this);"><input type="radio" name="consDatiPersonali" value="1" /><span class="optiontext">non do consenso</span></label>
						</div>
					</fieldset>
					<span class="errortext">Compila</span>
				</div>
				<br class="clear">
				<div id="divCons_5" class="fieldblock">
					<fieldset class="fullwidth">
						<p class="subevident">utilizzati per l'invio, da parte della Banca, di comunicazioni che riguardano l'offerta di prodotti o di servizi di soggetti terzi</p>
						
						<div class="fieldblock" style="width: 167px !important">
							<label><input type="radio" name="cons_5" id="cons_5" value="0" /><span class="optiontext">do il consenso</span></label>
						</div>
						
						<div class="fieldblock">
							<label><input type="radio" name="cons_5" id="cons_5" value="1" /><span class="optiontext">non do consenso</span></label>
						</div>
						
					</fieldset>
					<span class="errortext">Compila</span>
				</div>
				<br class="clear">
				<div id="divCons_6" class="fieldblock">
					<fieldset class="fullwidth lastrow">
						<p class="subevident">comunicati a società terze ai fini della promozione di prodotti o di servizi e di ricerche di mercato</p>

						<div class="fieldblock" style="width: 167px !important">
							<label><input type="radio" name="cons_6" id="cons_6" value="0"/><span class="optiontext">do il consenso</span></label>
						</div>
						
						<div class="fieldblock">
							<label><input type="radio" name="cons_6" id="cons_6" value="1"/><span class="optiontext">non do consenso</span></label>
						</div>
						
					</fieldset>
					<span class="errortext">Compila</span>
				</div>
			</div>
			<img class="promobottom" src="/img/str_aol_dacompilarebot.gif">
		</div>
		<div class="filettobutton">
			<a title="modifica i dati" href="#" class="greenbutton"><span>modifica i dati</span></a>
		</div>
<!-- Fine consensi per il trattamento dei dati personali -->
		</form>
	</div>
	<div id="aolright">
	<div class="leftit"><img alt="Il tuo conto" src="/img/tit_tuo_conto.gif"></div>
	
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
			
			
			
			
		</ul>
	</div>
	
	<div class="filettolarge"></div>
	
	
	<div class="leftit">
		<img src="/img/tit_haiaggiunto.gif"  alt="Hai aggiunto" />
	</div>
	<div class="gen">
		<ul class="elencoprodotti">
			<li>
				
				<span>Carta bancomat</span>
				<span>Carta Je@ns</span>
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
	
	<div id="aoldoclist" style="display:none">
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
<link href="/wscmn/css/cmn_datepicker.css" rel="stylesheet"/>
<script src="/wscmn/js/cmn_datepicker.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript">
function valorizzaCalendario(id)
{
	var calendario = $('datepicker'+id);
    calendario.value = "06/06/2013";
    getTimeSlotsList(calendario.value, id);
}
function checkPhoneNumber(id)
{
	var phoneNumber = $("telefono"+id);
	var phoneNumberValue = phoneNumber.value;

	// Check for empty field
	if (phoneNumberValue.length == 0)
	{
		return false;
	}

	// Check for non-numeric values
	var regExp = /\D/;

	if (regExp.exec(phoneNumberValue))
	{
		return false;
	}

	return true;
}

function svuotaSelect(id)
{
	var select = $("orario"+id);
	for (i = select.options.length; i >= 0; i--)
		select.options[i] = null;
}


function getTimeSlotsList(dayIndex, id)
{
	var arrayOfStrings = dayIndex.split('/');
	var year = arrayOfStrings[2];
	var month = arrayOfStrings[1];
	var day = arrayOfStrings[0];
	var daySelect = year + month + day;
	var select = $("orario"+id);
	var d = 20130606;
	var h = 14;
	
	var timeSlots = eval('timeSlots' + year + month + day);
	// Cleanup
	if(select.length > 0)
		svuotaSelect(id);
    
	// Popola combo
	for (j = 0; j < timeSlots.length; j++)
	{
		select.options[j] = timeSlots[j];
	}
	
	if(daySelect == d && (h != 19 && h >= 9))
	{
		select[1].selected = true;
	}
	else
	{
		select[0].selected = true;
	}
}
	

		var timeSlots20130606 = new Array();
			
					timeSlots20130606[0] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130606[1] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130606[2] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130606[3] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130606[4] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130606[5] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130607 = new Array();
			
					timeSlots20130607[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130607[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130607[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130607[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130607[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130607[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130607[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130607[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130607[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130607[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130607[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130608 = new Array();
			
					timeSlots20130608[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130608[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130608[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130608[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130608[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130608[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130608[6] = new Option("15.00-16.00", "15.00-16.00");

		var timeSlots20130610 = new Array();
			
					timeSlots20130610[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130610[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130610[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130610[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130610[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130610[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130610[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130610[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130610[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130610[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130610[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130611 = new Array();
			
					timeSlots20130611[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130611[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130611[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130611[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130611[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130611[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130611[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130611[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130611[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130611[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130611[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130612 = new Array();
			
					timeSlots20130612[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130612[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130612[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130612[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130612[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130612[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130612[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130612[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130612[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130612[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130612[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130613 = new Array();
			
					timeSlots20130613[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130613[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130613[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130613[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130613[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130613[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130613[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130613[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130613[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130613[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130613[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130614 = new Array();
			
					timeSlots20130614[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130614[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130614[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130614[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130614[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130614[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130614[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130614[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130614[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130614[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130614[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130615 = new Array();
			
					timeSlots20130615[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130615[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130615[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130615[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130615[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130615[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130615[6] = new Option("15.00-16.00", "15.00-16.00");

		var timeSlots20130617 = new Array();
			
					timeSlots20130617[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130617[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130617[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130617[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130617[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130617[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130617[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130617[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130617[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130617[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130617[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130618 = new Array();
			
					timeSlots20130618[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130618[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130618[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130618[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130618[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130618[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130618[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130618[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130618[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130618[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130618[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130619 = new Array();
			
					timeSlots20130619[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130619[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130619[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130619[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130619[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130619[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130619[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130619[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130619[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130619[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130619[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130620 = new Array();
			
					timeSlots20130620[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130620[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130620[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130620[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130620[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130620[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130620[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130620[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130620[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130620[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130620[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130621 = new Array();
			
					timeSlots20130621[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130621[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130621[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130621[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130621[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130621[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130621[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130621[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130621[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130621[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130621[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130622 = new Array();
			
					timeSlots20130622[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130622[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130622[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130622[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130622[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130622[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130622[6] = new Option("15.00-16.00", "15.00-16.00");

		var timeSlots20130624 = new Array();
			
					timeSlots20130624[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130624[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130624[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130624[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130624[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130624[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130624[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130624[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130624[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130624[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130624[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130625 = new Array();
			
					timeSlots20130625[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130625[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130625[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130625[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130625[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130625[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130625[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130625[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130625[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130625[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130625[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130626 = new Array();
			
					timeSlots20130626[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130626[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130626[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130626[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130626[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130626[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130626[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130626[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130626[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130626[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130626[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130627 = new Array();
			
					timeSlots20130627[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130627[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130627[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130627[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130627[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130627[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130627[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130627[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130627[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130627[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130627[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130628 = new Array();
			
					timeSlots20130628[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130628[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130628[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130628[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130628[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130628[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130628[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130628[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130628[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130628[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130628[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130629 = new Array();
			
					timeSlots20130629[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130629[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130629[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130629[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130629[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130629[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130629[6] = new Option("15.00-16.00", "15.00-16.00");

		var timeSlots20130701 = new Array();
			
					timeSlots20130701[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130701[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130701[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130701[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130701[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130701[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130701[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130701[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130701[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130701[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130701[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130702 = new Array();
			
					timeSlots20130702[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130702[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130702[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130702[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130702[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130702[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130702[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130702[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130702[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130702[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130702[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130703 = new Array();
			
					timeSlots20130703[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130703[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130703[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130703[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130703[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130703[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130703[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130703[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130703[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130703[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130703[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130704 = new Array();
			
					timeSlots20130704[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130704[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130704[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130704[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130704[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130704[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130704[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130704[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130704[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130704[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130704[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130705 = new Array();
			
					timeSlots20130705[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130705[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130705[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130705[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130705[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130705[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130705[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130705[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130705[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130705[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130705[10] = new Option("19.00-20.00", "19.00-20.00");

		var timeSlots20130706 = new Array();
			
					timeSlots20130706[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130706[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130706[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130706[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130706[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130706[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130706[6] = new Option("15.00-16.00", "15.00-16.00");

		var timeSlots20130708 = new Array();
			
					timeSlots20130708[0] = new Option("09.00-10.00", "09.00-10.00");
			
					timeSlots20130708[1] = new Option("10.00-11.00", "10.00-11.00");
			
					timeSlots20130708[2] = new Option("11.00-12.00", "11.00-12.00");
			
					timeSlots20130708[3] = new Option("12.00-13.00", "12.00-13.00");
			
					timeSlots20130708[4] = new Option("13.00-14.00", "13.00-14.00");
			
					timeSlots20130708[5] = new Option("14.00-15.00", "14.00-15.00");
			
					timeSlots20130708[6] = new Option("15.00-16.00", "15.00-16.00");
			
					timeSlots20130708[7] = new Option("16.00-17.00", "16.00-17.00");
			
					timeSlots20130708[8] = new Option("17.00-18.00", "17.00-18.00");
			
					timeSlots20130708[9] = new Option("18.00-19.00", "18.00-19.00");
			
					timeSlots20130708[10] = new Option("19.00-20.00", "19.00-20.00");


function inviaFormCallMeBackMutui(id)
{
	var param = "";
	if(id == 1)
	{
		document.getElementById('dataForm').value = document.getElementById('datepicker1').value;
		$('bottoneContattami1').innerHTML ='<div id=\"layerBianco\" ><span><img class=\"loading\" src=\"/wscmn/img/ico2inf_loadingpub_small.gif\"></span></div >';
		ajaxFormSubmitCMBAolAsynch('formCallMeBackAOL', param, handleCallMeBackAol,id);
		return;
	}
	else if (id == 2)
	{
		document.getElementById('dataForm2').value = document.getElementById('datepicker2').value;
		$('bottoneContattami2').innerHTML ='<div id=\"layerBianco\" ><span><img class=\"loading\" src=\"/wscmn/img/ico2inf_loadingpub_small.gif\"></span></div >';
		ajaxFormSubmitCMBAolAsynch('formCallMeBackAOL2', param, handleCallMeBackAol,id);
		
	}
	
}	

/* Interrogazione remota asincrona alla action _actionUrl con parametri _actionParams
* che restituisce un stringa/oggetto json transport
* e chiama una funzione _callBack
*/

function ajaxFormSubmitCMBAolAsynch(_formID, _actionParams, _callBack, _id)
{	
	var res;
	
	if (document.getElementById(_formID) != null)
	{
		if (_actionParams == null) {
			_actionParams = {
					cf: Math.random()
			}
		} else {
			if (_actionParams.cf == null) {
				_actionParams['cf'] = Math.random();
			}
		}
		
		$(_formID).request({
			method: 'post',
			asynchronous: true,
			parameters: _actionParams,
			onSuccess: function(transport) {
				var jsonResponse = transport.responseText.evalJSON(true);
				_callBack(jsonResponse, transport, _id);
			},
			onFailure: function(transport) {
			}
		});
	}

	return res;
}

function handleCallMeBackAol(jsonResponse, transport, id)
{
	
	if ( jsonResponse.ESITO && jsonResponse.ESITO == "OK")
	{
		$('formcont').hide();
		$('formInsert').hide();
		$('labelOperatore').innerHTML = 'Grazie per aver richiesto il servizio WEBANK TI RICHIAMA.';
		$('helptxt').hide();
		$('msgtxt'+id).show();
		$('bottoneContattami'+id).innerHTML ='<div class="fieldblocklayer dx\" id=\"bottoneContattami('+id+')\"><a href="javascript:;\" class=\"greenbutton" onclick=\"validateAndSendCMB('+id+');\" ><span>Contattami</span></a></div>';
	}
	else
	{
		var errorClass = "fieldblocklayer middle error";
		
		if(id == 2)
			errorClass = "fieldblocklayer middle bottom error";
			
			
		if(jsonResponse.ESITO_CAPTCHA){
			//errore captcha, genero nuovo captcha e riporto i dati
			generaCaptcha('captcha','https://webanksvi8web.webank.local/webankpub');
			document.getElementById('captchaVerifica'+id).className = errorClass;
			$('bottoneContattami'+id).innerHTML ='<div class="fieldblocklayer dx\" id="bottoneContattami('+id+')\"><a href="javascript:;\" class=\"greenbutton" onclick=\"validateAndSendCMB('+id+');\" ><span>Contattami</span></a></div>';
			
		}else{   // altri errori
			generaCaptcha('captcha','https://webanksvi8web.webank.local/webankpub');
			document.getElementById('captchaVerifica'+id).className = errorClass;
			$('bottoneContattami'+id).innerHTML ='<div class="fieldblocklayer dx\" id="bottoneContattami('+id+')\"><a href="javascript:;\" class=\"greenbutton" onclick=\"validateAndSendCMB('+id+');\" ><span>Contattami</span></a></div>';
		}	 		
	}
}

function verificaErrore(id)
{
	var classeError = "fieldblocklayer middle error";
	var classe = "fieldblocklayer middle";
	if(id == 2)
	{
		classeError = "fieldblocklayer middle bottom error";
		classe = "fieldblocklayer middle bottom";
	}
	
	if( document.getElementById('captchaVerifica'+id).className == classeError )
		document.getElementById('captchaVerifica'+id).className = classe;
}


function validateAndSendCMB(id)
{
	thereisanerror = 0;
	baseclassname = "";
	// check sulle select
	if (!checkPhoneNumber(id))
	{
		document.getElementById('telefono'+id).parentNode.className =  "fieldblocklayer pd13 error";
		thereisanerror = thereisanerror + 1;
	}else{
		document.getElementById('telefono'+id).parentNode.className = "fieldblocklayer pd13" ;
	}	
	
	if (document.getElementById('datepicker'+id).value == "" )
	{
		document.getElementById('calendario'+id).className =  "fieldblocklayer middle error";
		document.getElementById('orario'+id).parentNode.className =  "fieldblocklayer dx error";	
		thereisanerror = thereisanerror + 1;
	}else{
		document.getElementById('calendario'+id).className =  "fieldblocklayer middle";
		document.getElementById('orario'+id).parentNode.className =  "fieldblocklayer dx";
	}
	

	if ( thereisanerror > 0){
		
		return;
	}else{
		
		inviaFormCallMeBackMutui(id);
	}
}


</script>


<div class="overlayer" id ="contattaci">
	<div class="abbandono">
		<div class="overlayertitle">

			
			<a href="javascript:;" onclick="closePopOverLayer('contattaci')"; class="chiudi" id="close"></a>
			<span>Contattaci!</span>
		</div>
		<div class="overlayerbody">
		<span class="sep"></span>
		
			<!-- primo blocco-->
			<div class="contact">
				<img src="/img/str_bg_overlayer_abb_top.gif" alt=""/>

				<div class="contactcont">
					
					<div class="contactText">
						<img src="/img/tit_box_num_verde.gif" alt="numero verde" />
						<div class="num">
							<img src="/img/img_or_nverde.gif" alt="numero verde"/>
							<span>Luned&igrave; - venerd&igrave;: 9.00-20.00<span class="pipe">|</span>sabato: 9.00 - 17.00 </span>
						</div>

						
					</div>
				</div>
				<img src="/img/str_bg_overlayer_abb_bot.gif" alt=""/>
			</div>
			
			<!--fine  primo blocco-->
			
			<!-- secondo blocco-->
			<div class="contact">
				<img src="/img/str_bg_overlayer_abb_top.gif" alt=""/>
				<div class="contactcont">

					
					<div class="contactText">
						<img src="/img/tit_richiama.gif" alt="webank ti richiama" />
						<div class="num">
							<img src="/img/img_or_operatore.gif" alt="webank ti richiama"/><span id="labelOperatore" class="vcenter">Segnalaci il tuo numero e prenota la tua chiamata!</span>
						</div>
					</div>
					<div id="formInsert">
						
						<form action="/webankpub/wb/AolAdesioneCMB.do?cf=0.5652961099871064" method="post" id="formCallMeBackAOL" name="formCallMeBackAOL">
						<input type="hidden" name="JSON" style="display:none;" value="true" />
						<input type="hidden" name="dataForm" id="dataForm" value="" />
							<div class="fieldblocklayer">
								<label>Numero di telefono</label>
								<input type="text" id="telefono1" name="telefono1">
								<br class="clear">
								<span class="error">Verifica</span>
							</div>
							<div class="fieldblocklayer middle" id="calendario1">
								<label>Giorno</label>
								<script type="text/javascript">DatePickerControl.createDp ('datepicker1','20130606|20130607|20130608|20130610|20130611|20130612|20130613|20130614|20130615|20130617|20130618|20130619|20130620|20130621|20130622|20130624|20130625|20130626|20130627|20130628|20130629|20130701|20130702|20130703|20130704|20130705|20130706|20130708', function(){getTimeSlotsList(this.value, 1);});</script>
								<br class="clear">
								<span class="error">Verifica</span>
							</div>
							<div class="fieldblocklayer dx">
								<label>Fascia oraria</label>
								<select id="orario1" name="orario1" style="visibility: visible;"></select>
								<br class="clear">
								<span class="error">Verifica</span>
							</div>
							<br class="clear" />
							
							<div class="fieldblocklayer">
								<label>Codice</label><a class="rightlink" href="javascript:void(0);" onclick="javascript:generaCaptcha('captcha','https://webanksvi8web.webank.local/webankpub');">Crea nuovo codice</a>
								<img class="imgCaptcha" id="captcha" src="https://webanksvi8web.webank.local/webankpub/wb/generaIMG.do" />
							</div>
							<div class="fieldblocklayer middle" id="captchaVerifica1">
								<label>Inserisci codice</label>
								<input type="text" onkeypress="verificaErrore(1);" class="lenghtmiddle" name="j_captcha_response" id="contactUserCaptcha" value="" />
								<br class="clear">
								<span class="error">Verifica</span>
								<br/><br/>
								<div class="pdf"><img src="/img/ico1gr_pdf.gif" class="nobor"><label><a href="/doc/nsf/InformativaTrattamentoDatiPersonali.pdf" target="_blank">Informativa privacy</a></label></div>
							</div>
							<div class="fieldblocklayer dx" id="bottoneContattami1">
							<a href="javascript:;" class="greenbutton" onclick="validateAndSendCMB(1);" ><span>Contattami</span></a>
							</div>
						</form>
					</div>
					
					<div class="txtconf" style="display:none" id="msgtxt1">
							Ti ricontatteremo nel giorno e nell'ora da te indicati. 
					</div>
					
					
				</div>
				<img src="/img/str_bg_overlayer_abb_bot.gif" alt=""/>

				<a class="redirect"  href="javascript:;" id="continua"><span>Continua</span></a>
			</div>
					
		
		</div>
	</div>
	
</div>
	<div id="callmeback" class="overlayer" style="display:none">
				<div class="overlayertitle">

					<a id="close" class="chiudi" ;="" onclick="closePopOverLayer('callmeback')" href="#"></a>
					<span id="helptxt">Hai bisogno di aiuto per completare il form? <br />lasciaci il tuo numero di telefono e ti richiameremo noi quando vuoi tu!</span>
				</div>
				<div class="overlayerbody">
				<span class="sep"></span>
				<form action="/webankpub/wb/AolAdesioneCMB.do?cf=0.5652961099871064" method="post" id="formCallMeBackAOL2" name="formCallMeBackAOL2">
				<input type="hidden" name="CallMeBack" value="16" />
				<input type="hidden" name="JSON" style="display:none;" value="true" />
				<input type="hidden" name="dataForm2" id="dataForm2" value="" />
					<div class="contact">
						<div class="contactcont" id="formcont">
								<div class="fieldblocklayer">
									<label>Numero di telefono</label>
									<input type="text" id="telefono2" name="telefono2">
									<br class="clear">
									<span class="error">Verifica</span>
								</div>
								<div id="calendario2" class="fieldblocklayer middle">
									<label>Giorno</label>
									<script type="text/javascript">DatePickerControl.createDp ('datepicker2','20130606|20130607|20130608|20130610|20130611|20130612|20130613|20130614|20130615|20130617|20130618|20130619|20130620|20130621|20130622|20130624|20130625|20130626|20130627|20130628|20130629|20130701|20130702|20130703|20130704|20130705|20130706|20130708', function(){getTimeSlotsList(this.value, 2);});</script>
									<br class="clear">
									<span class="error">Verifica</span>
								</div>
								<div class="fieldblocklayer dx">
									<label>Fascia oraria</label>
									<select name="orario2" id="orario2" style="visibility: visible;"></select>
									<br class="clear">
									<span class="error">Verifica</span>

								</div>
								<br class="clear">
								<br />
								<br />
								
								<div class="fieldblocklayer">
									<label>Codice</label><a class="rightlink" href="javascript:void(0);" onclick="javascript:generaCaptcha('captcha','https://webanksvi8web.webank.local/webankpub');">Crea nuovo codice</a>
									<img class="imgCaptcha" id="captcha" src="https://webanksvi8web.webank.local/webankpub/wb/generaIMG.do" />
								</div>

								<div class="fieldblocklayer middle bottom" id="captchaVerifica2">
									<label>Inserisci codice</label>
									<input type="text" onkeypress="verificaErrore(2);" class="lenghtmiddle" name="j_captcha_response" id="contactUserCaptcha" value="" />
									<br class="clear">
									<span class="error">Verifica</span>
									
									<br><br>
									
								</div>
								<div class="fieldblocklayer dx" id="bottoneContattami2">
									<a href="javascript:;" class="greenbutton" onclick="validateAndSendCMB(2);" ><span>Contattami</span></a>
								</div>
							</form>
						
							
						
						</div>
						<div class="contactbox small" style="display:none" id="msgtxt2">
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
				</form>
			</div>
</div>