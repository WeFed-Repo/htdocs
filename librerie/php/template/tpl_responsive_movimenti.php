<input type="hidden" id="requestIdInPage" name="requestIdInPage" value="1329476625294">
<!-- CODICE HTML LIBRERIE -->
	<style type="text/css">
		@import url(/wscmn/css/priv_datepicker.css);
	</style>
	<script src="/wscmn/js/priv_datepicker.js" type="text/javascript"></script>
	<script type="text/javascript" >
	var librerie = true,
		pathLibrerie = '/librerie/include/commons/ajax',
		pathMovimenti = '/movimenti',
		cgi_script = '/webankpri',
		today = new Date(),
		sixMonthsAgo = new Date().addMonths(-6),
		dpFilter = sixMonthsAgo.format('yyyymmdd')+'|'+today.format('yyyymmdd'),
		initPeriodo = '',
		initCategory = '';
	
	function controlloConto (el) {
		if (movimentiFunction) { movimentiFunction.controlloConto(el); }
	}

	function loadSaldiDetail (e, el) {
		if (movimentiFunction) { movimentiFunction.loadSaldiDetail(e, el); }
	}
	
	function clearMov () {
		var url = '/WsClearMovements.do',
			AjaxUrl = (!librerie)? cgi_script + '/banking' + url : pathLibrerie + pathMovimenti + url.replace(/\.do(\?)?/i, '.php$1'),
			parameters = {};
		jqAJAXCall('post', null, AjaxUrl, null, null, parameters);
	}
	// Cancella i movimenti in sessione quando si esce dalla pagina
	$(window).on('unload', clearMov);
	</script>
<section>
	<h2>Movimenti</h2>
	<ul>
		<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, omnis.</li>
		<li>Lorem sit amet, consectetur adipisicing elit.</li>
		<li>Quod et illum esse <strong>sequi corporis</strong>, sint consequatur voluptates nesciunt expedita quibusdam!</li>
	</ul>
</section>
<div class="movimentiCont">
	<section>
		<div class="tithelp">
			<h4>Riepilogo dati</h4>
			<div class="flRight"><a href="javascript:;" class="no-underline btn-icon" onclick="openPopGuida('/connect.php?page=tpl_popup_priv_book_guida.php');" title="Scopri come funziona la ricerca movimenti"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
			<br class="clear">
		</div>
		<form class="formGenerico borderFormRounded output" role="form" id="form01">
				<!-- Select conti -->
				<div class="form-group">
		    		<div class="row">
				   	 	<div class="col-xs-6 requiredField">
							<label class="control-label">Conto</label>
							<select class="form-control" name="contonum" id="boxEsitoMovementsAccSel" onchange="controlloConto(event, this);">
								<option value="00599 - 0000081080 - EUR" selected="selected" accountid="00599 - 0000081080 - EUR" accountidtoshow="CC 00599 0000081080 EUR">CC 00599 0000081080 EUR</option>
								<option value="00596 - 0000081080 - EUR" accountid="00599 - 0000081080 - EUR" accountidtoshow="CC 00599 0000081080 EUR">DEP 00596 0000081080 EUR</option>
							</select>
						</div>
						<div class="col-xs-6">
							<label class="control-label">Saldo contabile</label>
							<span class="output" id="saldoCont"></span>
						</div>
					</div>
				</div>
				<!-- Dati conto -->
				<div class="form-group">
		    		<div class="row">
				   	 	<div class="col-xs-6">
							<label class="control-label">Intestato a</label>
							<span class="output" id="intest"></span>
				   	 	</div>
				   	 	<div class="col-xs-6">
				   	 		<label class="control-label">Saldo disponibile</label>
				   	 		<a id="saldiDetail" class="closeable" data-title="<div class='CCsaldiLoading'>caricamento in corso...</div>" data-toggle="tooltip" onclick="loadSaldiDetail(event, this)"  id="liquiditaDep">
								<strong id="saldoDisp"></strong>
							</a>
							<span id="noSaldoDetail" style="display:none">n.d.</span>
							<div class="textTooltip" style="display:none">
								<div class='CCsaldiText'>
									<span class='CCdataT1'></span>: <strong class='CCsaldoT1'></strong>&nbsp;<br>
									<span class='CCdataT2'></span>: <strong class='CCsaldoT2'></strong>&nbsp;<br>
									<span class='CCdataT3'></span>: <strong class='CCsaldoT3'></strong>&nbsp;
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<hr>
			    <div class="row">
			    	<div class="col-xs-12">
						<p class="note right">Aggiornato alle 00:00:00 del 00/00/0000</p>
			    	</div>
			    </div>
			 </form>
			 <!-- Link al grafico dei movimenti ---fare htl overlayer -->	
			  <div class="form-group">
					<div class="row">
						<div class="col-xs-12">
							<div class="btn-align-right" id="linkGrafMov">
								<a type="button" class="btn btn-primary" id="" title="Grafici, i tuoi movimenti in un colpo d'occhio">lorem ipsum dolor sit</a>
							</div>
						</div>
					</div>
			   </div>
		</section>	
		<section>	

			<!-- Box di errore compilazione form di ricerca ancora da sistemare-->
			<div id="errorsSection1" style="display:none;">
				<div class="boxtop"><img src="/img/ret/box_msgtop.jpg" border="0" alt=""></div>
				<div class="boxtxt">
					<p class="box_mess">
						<img src="/img/ret/img_or_form.gif" border="0" alt="" class="dx"/>
						<img src="/img/ret/box_attenzione.jpg" border="0" alt=""/>
						<strong id="error_box"><font color="white"> </font></strong>				
						<br/>
					</p>
					<br/>
					<ul class="alert" id="errorMessages1">
						<li>La data inserita non &egrave; corretta.</li>
						<li>La data iniziale della ricerca non pu&ograve; essere successiva a quella finale.</li>
						<li>Errore caricamento dati</li>
					</ul>
			
					<br class="clear"/>
				</div>
				<div class="boxbottom"><img src="/img/ret/box_msgbottom.jpg" border="0" alt=""></div>
				<br class="clear"/>
			</div>
		<!-- Form di ricerca -->
		<div class="wrapper-search">
			<div class="tithelp">
				<h4>Ricerca</h4>
				<div class="flRight"><a id="openAdv1" href="javascript:;" class="openDet no-underline btn-icon">ricerca avanzata</a><br class="clear"></div>
				<br class="clear">
			</div>
			<form class="formGenerico borderFormRounded" role="form" id="form02">
				<div class="form-group advsearch">
		    		<div class="row">
		   	 			<div class="col-xs-5 requiredField">
		   	 				<select id="period" name="period" class="form-control">
								<option value="15">Ultimi 15 movimenti</option>
								<option value="o">Oggi</option>
								<option value="s">Settimana in corso</option>
								<option value="m">Mese in corso</option>
								<option value="m3">Ultimi 3 mesi</option>
								<option value="m6">Ultimi 6 mesi</option>
							</select>
		   	 			</div>
		   	 			<div class="col-xs-5 requiredField">
							<select id="category1" name="category" class="form-control">
								<option value="">Tutti</option>
								<option value="1">Stipendio/Pensione</option>
								<option value="2">Versamenti</option>
								<option value="3">Bonifici e giroconti</option>
								<option value="4">- Fondi e Sicav</option>
								<option value="5">- Compravendita titoli</option>
								<option value="6">- Cedole e dividendi</option>
								<option value="7">- Spese ed eventi amministrativi</option>
								<option value="8">Totale movimenti in titoli</option>
								<option value="11">Trasferimenti da deposito</option>
								<option value="49">Operatività overnight e prestito titoli</option>
								<option value="-2">Altri accrediti</option>
								<option value="23">Addebito assegni</option>
								<option value="24">Pagamenti</option>
								<option value="25">Bonifici e giroconti</option>
								<option value="26">RID e utenze</option>
								<option value="27">- Fondi e Sicav</option>
								<option value="28">- Compravendita titoli</option>
								<option value="29">- Cedole e dividendi</option>
								<option value="30">- Spese ed eventi amministrativi</option>
								<option value="31">Totale movimenti in titoli</option>
								<option value="32">Addebito carte di credito</option>
								<option value="33">Prelievi</option>
								<option value="34">- Pagamenti</option>
								<option value="35">- Bancomat</option>
								<option value="36">Canone piattaforma trading</option>
								<option value="37">Ricariche</option>
								<option value="38">Mutui e prestiti</option>
								<option value="39">Trasferimenti verso deposito</option>
								<option value="48">Operatività overnight e prestito titoli</option>
								<option value="-1">Altri addebiti</option>
							</select>
		   	 			</div>
		   	 			<div class="col-xs-2 requiredField">
		   	 				<div class="btn-align-left">
								<a type="button" class="btn btn-primary" id="btnSearchMov">Cerca</a>
							</div>			
		   	 			</div>
		   	 		</div>
		   	 	</div>
				<!--ricerrca avanzata -->
				<div class="form-group advsearch" style="display: none;">
					<div class="row">						
						<div class="col-sm-3 col-xs-12">
								<label class="control-label" id="lblDataDa1">Periodo dal</label>
								<div class="form-inline">
									<div class="form-group">
									  <div class="input-group">
										 <input type="text" id="datepickerTool1" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
										 <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
									  </div>
									</div>
								</div> 
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>

<script src="/wscmn/js/amcharts/amcharts.js?b=<%= revision %>" type="text/javascript"></script>
<script src="/wscmn/fe/js/movimenti.js?a=1" type="text/javascript"></script>
