<div class="breadcrumb">
	<span>Investimenti</span>
	<span>Fondi</span></div>
<div class="visible-print-block"> 
	<img src="/HT/fe/img/logo_bancobpm@2x.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		14/07/2017	
	</div>
</div>
<div class="riquadro clearfix">
<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
			<div class="circle current_page">&nbsp;</div>
			<div class="circle ">&nbsp;</div>
			<div class="circle ">&nbsp;</div>
			<div class="circle ">&nbsp;</div>
</div>
<div class="clearfix">
	<style>
	.imgSrv{
		float: none;
	}
	</style>
	<h1>
		<div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div>
			<span>Sottoscrizione</span>
	</h1>
</div>
<input type="hidden" name="picpac" value="PIC" id="picpac">
<script type="text/javascript">
	var codAreaFinanza = '42898810';
	$(function() {
		// graficoPerformance
		$('<iframe>', {
			id : 'PERF_LINE',
			style : "width:100%;height:250px;",
			frameborder : 0,
			src : "/WEBHB/investimenti/fondiGrafico.do" + "?chartType=PERF_LINE&codeType=BO&instrumentList=" + codAreaFinanza
		}).appendTo("#graficoPerformance");
	});
</script>
<form id="fondiSottoscrizioneForm" method="post" action="/WEBHB/investimenti/fondiSottoscrizioneFondo.do"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="53c1765aa7ca8766289870685f66f0f1"></div>
	<input type="hidden" name="cambioDossier" value="S">
	<div class="section clearfix">
		<script type="text/javascript">	
			$(function(){
				var submitOnClick = false;

			    submitOnClick = true;


				CCselectionInit(submitOnClick, false, false);

				var str = $('#intestazione').text();
				if($.trim(str).length>26){
					$('#intestazione').removeClass('col-xs-4');
					$('#intestazione').addClass('col-xs-8');
					$('#labelIntestatario').addClass('hide');
				}
			});
			function isDossierInformativo() {return ;}
		</script>
		<h3 class="titleSection">Seleziona Dossier</h3>
		<div class="selezioneCC tabellaSelezioneCC">
			<div class="cartaSelezionata clearfix">
				<div class="col-xs-12">
					<div class="col-xs-6 clear-paddingImportant">
						<span class="col-sm-4 col-xs-12 clear-paddingImportant" id="labelIntestatario">
							Intestazione:
						</span> 
						<span id="intestazione" class="col-xs-6 clear-paddingImportant"> 
							Tallo Mauro Luca
						</span>
						<span class="col-sm-4 col-xs-12 clear-paddingImportant"> 
							Filiale
					  	</span> 
					  	<span id="filiale" class="col-sm-6 col-xs-12 clear-paddingImportant">
							SEDE DI LODI - 2001
						</span> 
						<span class="col-sm-4 col-xs-12 clear-paddingImportant"> C/C </span> 
						<span class="col-sm-6 col-xs-12 bold clear-paddingImportant"> 
							00174456
	 					</span>
					</div>
					<div class="col-xs-6 clear-paddingImportant">
						<span class="col-sm-4 col-xs-12 clear-paddingImportant">
							Dossier </span> 
							<span id="numero" class="col-sm-8 col-xs-12 clear-paddingImportant bold oRight">
								<span class="negativo">000000106440</span>
							</span> 
							<span class="col-sm-4 col-xs-12 clear-paddingImportant"> 
								Saldo al
							</span> 
							<span class=" col-sm-8 col-xs-12 clear-paddingImportant">
						 		<select class="form-control">
									
										<option value="14/07/2017">
											14/07/2017&nbsp;&nbsp;&nbsp;&nbsp;-455.011.625,01&nbsp;&euro;
										</option>
									
										<option value="17/07/2017">
											17/07/2017&nbsp;&nbsp;&nbsp;&nbsp;-455.011.625,01&nbsp;&euro;
										</option>
									
										<option value="18/07/2017">
											18/07/2017&nbsp;&nbsp;&nbsp;&nbsp;-455.011.625,01&nbsp;&euro;
										</option>
									
										<option value="19/07/2017">
											19/07/2017&nbsp;&nbsp;&nbsp;&nbsp;-455.011.625,01&nbsp;&euro;
										</option>
									
										<option value="20/07/2017">
											20/07/2017&nbsp;&nbsp;&nbsp;&nbsp;-455.011.625,01&nbsp;&euro;
										</option>
									
								</select> 
							</span>
					</div>
				</div>
				<a href="javascript:void(0);" class="btnSelezioneCC">
					<img src="/HT/IMAGES/nGrafica/ico-select.png" id="btnSelezioneRapporto" title="Seleziona" alt="Seleziona">
				</a>
			</div>
			<div class="table-responsive tabSelezioneCC" style="display: none;">
				<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
					<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer">
						<table class="table table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
						<thead>
							<tr role="row"><th class="hidden sorting_asc" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente" style="width: 0px;">&nbsp;</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Dossier: ordinamento crescente" style="width: 0px;">Dossier</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale: ordinamento crescente" style="width: 0px;">Filiale</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione: ordinamento crescente" style="width: 0px;">Intestazione</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="C/C: ordinamento crescente" style="width: 0px;">C/C</th></tr>
						</thead>
						<tbody>
						<tr role="row" class="odd">
							<td class="hidden sorting_1"><input type="radio" name="chiaveDossier" value="007|2001|000000106440" checked="checked" onclick="submit()" id="chiaveDossier"></td>
							<td>000000106440</td>
							<td>SEDE DI LODI - 2001</td>
							<td>TALLO MAURO LUCA</td>
							<td>00174456</td>
						</tr>
						<tr role="row" class="even">
							<td class="hidden sorting_1"><input type="radio" name="chiaveDossier" value="007|2001|000008318876" onclick="submit()" id="chiaveDossier"></td>
							<td>000008318876</td>
							<td>SEDE DI LODI - 2001</td>
							<td>TALLO MAURO LUCA TALLO GIUSEPPINA</td>
							<td>00003610</td>
						</tr></tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<form id="fondiSottoscrizioneForm" method="post" action="/WEBHB/investimenti/fondiSottoscrizioneNormativaFondo.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="53c1765aa7ca8766289870685f66f0f1"></div>
	<!-- DATI OPERAZIONE -->
	<div class="section clearfix OUT2ColDiff">
		<h3 class="titleSection">Dati fondo</h3>
		<div class="bs-example">
			<div class="col-xs-12 col-sm-6">
				<div class="boxDefault inside inside-full-height" style="min-height:0">
					<div class="row">
						<label class="control-label dBlock">Fondo di acquisto </label> 
						<span class="resume dBlock">BGF ASIA PACIFIC EQUITY INCOME FUND-SICAV CL E2 EUR ACC (ISIN:LU0628613399)</span>
					</div>
					<div class="row">
						<label class="control-label">Tipologia Strumento: </label> 
						<span class="resume">FONDI PIR <a href="javascript:OpenHelp('/template/modale_pir.html')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a></span>
					</div>
					<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header clearfix">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="boxDefault inside inside-full-height" style="min-height:0">
					<div class="row">
						<label class="control-label">Quote fondo presenti in dossier </label>
						<span class="resume">0,0 </span>
					</div>
					<div class="row">
						<label class="control-label">Controvalore in Euro </label>
						<span class="resume">0,0 </span>
					</div>
					<div class="row">
						<label>Commissioni di sottoscrizione: </label>
						<span class="resume negativo"> 3,00% per ordini Online </span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section clearfix OUT2ColDiff">
		<div class="clearfix margin-bottom20">
			<div class="col-xs-12 col-sm-3">
				<label class="control-label"><strong>Ultima quota/NAV</strong></label> 
				<span>15,18 EUR</span>
			</div>
			<div class="col-xs-12 col-sm-3">
				<label class="control-label"><strong>Data quota/NAV</strong></label> 
				<span>13/07/2017</span>
			</div>
		</div>
		<div class="clearfix margin-bottom20">
		<div class="col-xs-12 col-sm-12 hidden-xs">
			<!--<div id="graficoPerformance" class="margin-bottom20"><iframe id="PERF_LINE" style="width:100%;height:250px;" frameborder="0" src="/WEBHB/investimenti/fondiGrafico.do?chartType=PERF_LINE&amp;codeType=BO&amp;instrumentList=42898810"></iframe></div>-->
			<img src="/HT/fe/img/ph_grafico.png" style="width:100%">
		</div>
	</div>
	</div>
	<!--
			<div class="bs-example">
				<div class="row">
					<div class="col-xs-6 col-sm-6 hidden-xs">
						<div id="graficoPerformance" class="margin-bottom20"><iframe id="PERF_LINE" style="width:100%;height:250px;" frameborder="0" src="/WEBHB/investimenti/fondiGrafico.do?chartType=PERF_LINE&amp;codeType=BO&amp;instrumentList=42898810"></iframe></div>
					</div>
					<div class="form-field-resume col-xs-12 col-sm-6" style="margin-top: 70px; padding-left: 40px;">
						<label class="control-label">Ultima quota/NAV</label> 
						<span class="resume">15,18 EUR</span>
						<label class="control-label" style="margin-top: 40px;">Data quota/NAV</label> 
						<span class="resume">13/07/2017</span>
					</div> 
				</div>
			</div>
	</div>-->
		<div class="section clearfix">
			<div class="bs-example">
				<h3 class="titleSection">
				Sottoscrivi il tuo piano
				</h3>
				<div class="row">
					<div class="col-xs-6 col-md-4 col-lg-4">
						<label style="float:left; margin-top: 3px; margin-right: 10px;">Intestatario</label>
						<select name="posizioneSottoscrivente" style="width:70%" class="form-control wauto"><option value="0" selected="selected">0 - TALLO MAURO LUCA</option></select> 
					</div>
					<div class="col-xs-6 col-md-4 col-lg-4 margin-top30">
						<label style="float:left;margin-top: 3px;margin-right: 10px; margin-left:20px;"> Acquisto unico (PIC)</label>
						<input type="radio" name="tipoAcquisto" value="PIC" checked="checked" id="tipoAcquisto" style="float:left" class="control-label">
					</div>
					<div class="col-xs-6 col-md-4 col-lg-4 margin-top30 padding-lr0">
						 <label style="float:left;margin-top: 3px;margin-right: 10px; margin-left:20px;">Piano di accumulo(PAC)</label>
						 <input type="radio" name="tipoAcquisto" value="PAC"  id="tipoAcquisto" style="float:left" class="control-label">
					</div>
					
				</div>
				
				<!-- start: caso radio PIC -->
				<div id="sceltaPic" class="clearfix">
					<div class="row">
						<div class="col-xs-12">
							<div class="msgBox iconInfo">
								<div class="clearfix padding-left20">
									<div class="col-xs-12 col-sm-12">
										<div class="col-xs-6 col-sm-3">
											<label class="control-label">Minimo prima sottoscrizione:</label>
										</div>
										<div class="col-xs-6 col-sm-2">
											<span class="resume">2.000,00 EUR</span>
										</div>
										<div class="col-xs-6 col-sm-4">
											<label class="control-label">Minimo sottoscrizioni successive</label>
										</div>
										<div class="col-xs-6 col-sm-2">
											<span class="resume">1.000,00 EUR</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>	
					<div class="row">		
						<div class="col-xs-12 col-sm-6">
							<label for="importoSottoscrizioneInt">Importo da sottoscrivere: </label>
							<div class="form-field" style="margin-top: 5px;">
								<input type="text" name="importoSottoscrizioneInt" size="8" value="" id="importoSottoscrizioneInt" style="width:auto;text-align: right" class="form-control">
								&nbsp; , &nbsp;
								<input type="text" name="importoSottoscrizioneDec" maxlength="2" size="2" value="" style="width:auto" class="form-control">
								&nbsp;
								euro
							</div>
												
						</div>
					</div>
				</div>
				<!-- end: caso radio PIC -->
				
				<!-- start: caso radio PAC -->
				<div id="sceltaPac" class="clearfix" style="display: none;">
					<div class="row">
						<div class="col-xs-12">
							<div class="msgBox iconInfo">
								<div class="clearfix padding-left20">
									<div class="col-xs-12 col-sm-12">
										<div class="col-xs-6 col-sm-3">
											<label class="control-label">Importo minimo rata:</label>
										</div>
										<div class="col-xs-6 col-sm-2">
											<span class="resume">2.000,00 EUR</span>
										</div>
										<div class="col-xs-6 col-sm-4">
											<label class="control-label">Versamento minimo iniziale</label>
										</div>
										<div class="col-xs-6 col-sm-2">
											<span class="resume">1.000,00 EUR</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- varibili hidden per formato importo -->
					<input type="hidden" name="divisaEUR" value="{0} EUR" id="divisaEUR">
					<div class="row" style="margin-top: 20px;">
						<div class="col-xs-12 col-sm-4">
							<label class="control-label col-xs-6">Importo rata </label>
							<input type="text" name="importoRata" size="8" value="0" id="importoRata" class="form-control">
						</div>
						<div class="col-xs-12 col-sm-4">
							<label class="control-label col-xs-6">Durata del piano </label>
							<select name="durataPiano" id="durataPiano" class="fixed-size form-control"><option value="0" selected="selected">-</option></select>
						</div>
						<div class="col-xs-12 col-sm-4">
							<label class="control-label">Investimento iniziale </label>
  							<p id="investimentoInizialeView" style="margin-top: 8px; font-weight: bold;">0,00 EUR</p>
							<input type="hidden" name="investimentoIniziale" value="0" id="investimentoIniziale"> 
						</div>
					</div>
					<div class="row" style="margin-top: 20px;">
						<div class="col-xs-12 col-sm-4">
							<label class="control-label">Numero versamenti iniziali </label>
							<input type="text" name="numeroVersamentiIniziali" size="8" value="0" id="numeroVersamentiIniziali" class="form-control">
						</div>
						<div class="col-xs-12 col-sm-4">
							<label class="control-label col-xs-6">Periodicit&agrave; </label>
							<select name="periodicita" id="periodicita" class="fixed-size form-control"><option value="0" selected="selected">-</option></select>
						</div>
						<div class="col-xs-12 col-sm-4">
							<label class="control-label">InvestimentoTotale </label>
							<p id="investimentoTotaleView" style="margin-top: 8px; font-weight: bold;">0,00 EUR</p>
							<input type="hidden" name="investimentoTotale" value="0" id="investimentoTotale">
						</div>
					</div>
					
				</div>
				<!-- end: caso radio PAC -->
				<h3 class="titleSection">Scegli la modalit&agrave; di distribuzione dei proventi:</h3>
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<input type="radio" name="modalitaDistribuzioneProventi" value="accredito" id="accredito" style="float:left;margin-top:0" class="control-label">
						<label> Accredito in conto</label>
						
					</div>
					<div class="col-xs-12 col-sm-6">
						<input type="radio" name="modalitaDistribuzioneProventi" value="reinvestimento" id="reinvestimento" style="float:left;margin-top:0" class="control-label">
						<label> Reinvestimento nel fondo/comparto</label>
					</div>
				</div>
				
				<div class="row" style="margin-top: 10px;">
					<div class="col-xs-12 col-sm-12 margin-top10">
						<div class="actions pull-right ">
							<a href="/WEBHB/investimenti/fondiDettaglioFondo.do?codAreaFinanza=42898810" class="button btn btn-primary">Dettaglio fondo</a>
							<input type="submit" name="controlli" value="Sottoscrivi" class="button btn btn-primary">
						</div>
					</div>
				</div>

			</div>
		</div>
	</form>
</div>





<div class="riquadro clearfix">
	<div class="col-xs-12 col-sm-12 clear-padding" style="padding: 8px;">
		<p style="font-size:0.8em">I dati e le notizie pubblicati hanno carattere puramente informativo non sono da intendersi quali raccomandazioni personalizzate e non costituiscono sollecitazione al pubblico risparmio, n&egrave; attivit&agrave; di promozione o di consulenza in materia di strumenti finanziari e/o di servizi di investimento. Non costituiscono, pertanto, consulenza o parere della Banca sul merito di una particolare operazione o strategia di investimento con riguardo al profilo del singolo Cliente. Eventuali decisioni relative a investimenti e disinvestimenti sono assunte dall'investitore in piena autonomia.<br> Laddove non diversamente indicato performance ed indicatori sono calcolati in euro. <br> Gli indicatori di volatilit&agrave; / rendimento sono calcolati da Deus Technology.<br> I rendimenti utilizzati per la ricerca sono storici e non garantiscono analoghi risultati nel futuro. I rendimenti vanno inoltre valutati confrontandoli con i parametri di mercato. Il valore delle quote / azioni dei fondi / comparti e i relativi rendimenti sono da considerarsi al lordo dell'imposizione fiscale. I rendimenti dei fondi / comparti a distribuzione sono calcolati ipotizzando il reinvestimento dei dividendi. I rendimenti storici dei fondi / comparti non costituiscono l'unico parametro di valutazione. <br> Prima dell'adesione leggere il prospetto informativo disponibile nell'area riservata del nostro sito nonch&egrave; sul sito internet dell'offerente le quote/azioni dei Fondi/Sicav. <br></p>
		<div class="col-xs-6 col-sm-6 margin-top10 margin-bottom10">
			<span><strong>Dati forniti da:</strong></span>
			<img src="/HT/IMAGES/FONDICOMUNI/telekurs.png" width="160px">
		</div>
		<div class="col-xs-6 col-sm-6 margin-top10 margin-bottom10">
			<div class="col-xs-12 col-sm-12" style="text-align: right;">
				<span><strong>Dati elaborati da:</strong></span>
				<img src="/HT/IMAGES/FONDICOMUNI/deus.png" width="160px">
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function() {
	var sceltaPac = $('#sceltaPac');
	var sceltaPic = $('#sceltaPic');
	
	if($('#picpac').val() == null || $('#picpac').val() == "PIC")	{
		sceltaPac.hide();	
	}   else	{
		sceltaPic.hide();	
	}  
	
	
	$("input:radio").live('click', function() {
        var value = $(this).attr("value");
        if (value == "PIC") {
            sceltaPic.show();
            sceltaPac.hide();
        } else if (value == "PAC") {
        	sceltaPac.show();
            sceltaPic.hide();
        }
    });
});

/* calcolo dei campi INVESTIMENTO INIZIALE E TOTALE */
$(document).ready(function() {
	var importoRata = $('#importoRata').val();
	var numVersamenti = $('#numeroVersamentiIniziali').val();
	var durata = $('#durataPiano').val();
	var periodicita = $('#periodicita').val();
	
	var range = /^[0-9]{1,50}$/;
	
	/* stampa iniziale */
	$('#investimentoInizialeView').text(formato(parseInt(importoRata)*parseInt(numVersamenti))).css("font-weight","Bold");
	$('#investimentoTotaleView').text(formato(parseInt(importoRata)*parseInt(periodicita)*parseInt(durata)+parseInt(numVersamenti)*parseInt(importoRata))).css("font-weight","Bold");
	
 	$("input:text").live('change', function() {
 		var id = $(this).attr("id");
 		var prop = $(this).val();
        if (id == "importoRata") {
        	if(!prop.match(range))	{
        		importoRata = 0;
        		$(this).val(0);
        	} else 	{
        		importoRata = prop;
        	} 
            $('#investimentoIniziale').val(parseInt(importoRata)*parseInt(numVersamenti));
            $('#investimentoInizialeView').text(formato(parseInt(importoRata)*parseInt(numVersamenti))).css("font-weight","Bold"); 
            
         	$('#investimentoTotale').val(parseInt(importoRata)*parseInt(periodicita)*parseInt(durata)+parseInt(numVersamenti)*parseInt(importoRata));
            $('#investimentoTotaleView').text(formato(parseInt(importoRata)*parseInt(periodicita)*parseInt(durata)+parseInt(numVersamenti)*parseInt(importoRata))).css("font-weight","Bold");
        } 
    });
	
	$("input:text").live('change', function() {
		var id = $(this).attr("id");
 		var prop = $(this).val();
        if (id == "numeroVersamentiIniziali") {
        	if(!prop.match(range))	{
        		numVersamenti = 0;
        		$(this).val(0);
        	} else 	{
        		numVersamenti = prop;
        	}
        	$('#investimentoIniziale').val(parseInt(importoRata)*parseInt(numVersamenti));
         	$('#investimentoInizialeView').text(formato(parseInt(importoRata)*parseInt(numVersamenti))).css("font-weight","Bold");
        	
         	$('#investimentoTotale').val(parseInt(importoRata)*parseInt(periodicita)*parseInt(durata)+parseInt(numVersamenti)*parseInt(importoRata));
        	$('#investimentoTotaleView').text(formato(parseInt(importoRata)*parseInt(periodicita)*parseInt(durata)+parseInt(numVersamenti)*parseInt(importoRata))).css("font-weight","Bold");
      	}
    });
	
	$("select").on('change', function() {
		var id = $(this).attr("id");
 		var prop = $(this).val();
        if (id == "periodicita") {
        	periodicita = prop;
        	
         	$('#investimentoTotale').val(parseInt(importoRata)*parseInt(periodicita)*parseInt(durata)+parseInt(numVersamenti)*parseInt(importoRata));
        	$('#investimentoTotaleView').text(formato(parseInt(importoRata)*parseInt(periodicita)*parseInt(durata)+parseInt(numVersamenti)*parseInt(importoRata))).css("font-weight","Bold");
        }
    });
	
	$("select").on('change',function() {
		var id = $(this).attr("id");
 		var prop = $(this).val();
        if (id == "durataPiano") {
        	durata = prop;
        	
         	$('#investimentoTotale').val(parseInt(importoRata)*parseInt(periodicita)*parseInt(durata)+parseInt(numVersamenti)*parseInt(importoRata));
        	$('#investimentoTotaleView').text(formato(parseInt(importoRata)*parseInt(periodicita)*parseInt(durata)+parseInt(numVersamenti)*parseInt(importoRata))).css("font-weight","Bold");
        }
    });
});

function formato(importo)	{
	var divisaEUR = $('#divisaEUR').val();
	
	importo = importo+",00";
	importo = divisaEUR.replace("{0}",importo);
	
	return importo;
};

</script>
