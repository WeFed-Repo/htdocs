<!-- Intro -->
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

</script>
<!--sezione grafici inclusa in  movimenti .js che non è ancora responsive PASSIBILE DI MODIFICHE FUTURE -->
<!--<script src="/wscmn/js/amcharts/amcharts.js?b=420" type="text/javascript"></script>-->

<script type="text/javascript" src="/wscmn/fe/assets/amcharts/amcharts.js?a="></script>
<script type="text/javascript" src="/wscmn/fe/assets/amcharts/serial.js?a="></script>
<script type="text/javascript" src="/wscmn/fe/assets/amcharts/pie.js?a="></script>


<script src="/wscmn/fe/js/movimenti_grafici.js" type="text/javascript"></script>


<div class="modal fade" id="layergrafici" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Grafici movimenti</h2>
			</div>
			<div class="modal-body">
			<div class="layerboxgrafici_resp">
				<div class="layerboxgraficitop align-center"><a href="javascript:;" class="slidelayerleft_resp"><i class="icon icon-2x icon-arrow_left"></i ></a><h3>&nbsp;</h3><a href="javascript:;" class="slidelayerright_resp"><i class="icon icon-2x icon-arrow_right"></i ></a><a class="helpContestuale" href="javascript:;"></a></div>
				<div class="layerboxgraficimdl_resp row">
					<div class="mdlleft_resp col-sm-5"><h4><span>Totale entrate:</span> <span class="posi">XX.XXX.XXX,XX &euro;</span></h4><br class="clear"/>
						<div class="graficospko" title="Non sono presenti movimenti in entrata" alt="Non sono presenti movimenti in entrata"></div>
						<div id="graficosp1" class="graficosp"></div>
						<div class="legendaspCont">
							<a href="javascript:;" class="slideup"></a>
							<ul class="btnLegend"></ul>
							<div class="legendasp hidden-xs">
								<div>
									<ul>
									</ul>
								</div>
							</div>
							<a href="javascript:;" class="slidedown"></a>
						</div>
					</div>
					<div class="mdlcenter_resp col-sm-2"><h4><span>Differenza</span><br class="clear" /><span class="differenza">-XX.XXX.XXX,XX &euro;</span></h4></div>
					<div class="mdlright_resp col-sm-5"><h4><span>Totale uscite:</span><span class="nega">-XX.XXX.XXX,XX &euro;</span></h4>
						<br class="clear">
						<div class="graficospko" title="Non sono presenti movimenti in uscita" alt="Non sono presenti movimenti in uscita"></div>
						<div id="graficosp2" class="graficosp"></div>
						<div class="legendaspCont">
							<a href="javascript:;" class="slideup"></a>
							<ul class="btnLegend"></ul>
							<div class="legendasp hidden-xs">
								<div>
									<ul>
									</ul>
								</div>
							</div>
							<a href="javascript:;" class="slidedown"></a>
						</div>
					</div>
					<div class="col-sm-12">
						<h3>Andamento saldo contabile</h3>
						<ul class="legendabottom">
							<li><span class="entrataLb"></span><span>Entrata</span></li>
							<li><span class="entrateLb"></span><span title="Sono tutte le entrate contabilizzate nella giornata indicata">Pi&ugrave; entrate</span></li>
							<li><span class="uscitaLb"></span><span>Uscita</span></li>
							<li><span class="usciteLb"></span><span title="Sono tutte le uscite contabilizzate nella giornata indicata">Pi&ugrave; uscite</span></li>
							<li><span class="saldoLb"></span><span>Saldo contabile</span></li>
						</ul>
						<div style="width:100%; overflow:auto"><div id="chartmov"></div></div>
						<div id="dettagliMovimentiWrap" style="display:none">
							<h4><span id="ggSel"></span></h4>
							<table cellpadding="0" cellspacing="0" width="100%" class="dettagliMovimenti">
								<tr>
									<td><span>N.Entrate: &nbsp;</span><strong id="nEntrate"></strong></td>
									<td><span>Tot. Entrate: &nbsp;</span><strong id="tEntrate"></strong></td>
								</tr>
								<tr>
									<td><span>N. Uscite: &nbsp;</span><strong id="nUscite"></strong></td>
									<td><span>Tot. uscite: &nbsp;</span><strong id="tUscite"></strong></td>
								</tr>
								<tr>
									<td colspan="2"><span>Saldo Contabile: &nbsp;</span><strong id="saldoG"></strong></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="layerboxgraficibottom"></div>
			</div>
	
			</div>
		</div>
	</div>
</div>








<section>
	<h2>Movimenti</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus <strong>sint odio</strong> distinctio itaque quas corporis dolores accusantium, accusamus sapiente necessitatibus nemo voluptatum dolor fugiat optio et! Reiciendis, dolorum rerum dolor?</p>
	<ul>
		<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, omnis.</li>
		<li>Lorem sit amet, consectetur adipisicing elit.</li>
		<li>Quod et illum esse <strong>sequi corporis</strong>, sint consequatur voluptates nesciunt expedita quibusdam!</li>
	</ul>
</section>
<!-- Fine intro -->
<section>
	<div class="tithelp">
		<h4>Riepilogo Dati</h4>
		<div class="flRight"><a href="#1" data-toggle="modal" data-target="#layerGuida" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
		<br class="clear">
	</div>
	<form class="formGenerico borderFormRounded" role="form">
	    <div class="form-group">
	        <div class="row">
	            <div class="col-sm-6">
	            	<label class="control-label-output">Conto</label>
	            	<select class="form-control" id="boxEsitoMovementsAccSel"><option>CC 01099 0000049199 EUR</option><option>CC 096546 0000049199 EUR</option></select>
	            </div>
	            
	            <div class="col-sm-6">
	            	<label class="control-label-output">Saldo contabile</label>
	            	<span class="output">4000 &euro;</span>
	            </div>
	        
	        </div>
	    </div>
	    <div class="form-group">
	        <div class="row">
	            <div class="col-sm-6">
	            	<label class="control-label-output">Intestato a </label>
	            	<span class="output" id="intest">IOLE TOLVE</span>
	            </div>
	            <div class="col-sm-6">
	            	<label class="control-label-output">Saldo disponibile</label>
	            	<span class="output txthelp closeable" data-toggle="tooltip" data-title=""><span id="saldoDisp">4.000&euro;</span></span>
	            	<div class="htmlTooltip" id="saldoDetail">
					<div id="saldoText">
						<span class="CCdataT1"></span><span class="spacer">: </span><strong class="CCsaldoT1"><span class="loadingDet">caricamento in corso...</span></strong>&nbsp;<br>
						<span class="CCdataT2"></span><span class="spacer">: </span><strong class="CCsaldoT2"></strong>&nbsp;<br>
						<span class="CCdataT3"></span><span class="spacer">: </span><strong class="CCsaldoT3"></strong>&nbsp;
					</div>
					</div>
	            </div>
	        </div>
	    </div>
	    <hr>
	    <div class="row">
	    	<div class="col-xs-12">
				<p class="note">Aggiornato alle 00:00:00 del 00/00/0000</p>
	    	</div>
	    </div>		
	</form>	
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" id="linkGrafMov">lorem ipsum dolor sit</a>
				</div>
			</div>
		</div>
	</div>

</section>

<script type="text/javascript">
	/* Inizializzazioni */
	$(function(){
		/* Emulazione interattivita' in pagina*/
		$("#ricercaSwitch").click(function(){
			var rSem = $("#ricercaSemplice"),
			rAva= $("#ricercaAvanzata"),
			rSwi = $(this);
			if (rSwi.hasClass("avanzata")) {
				rSwi.removeClass("avanzata").html("ricerca avanzata");
				rAva.hide();
				rSem.show();
			}
			else
			{
				rSwi.addClass("avanzata").html("ricerca semplice");
				rAva.show();
				rSem.hide();
			}
		});
		$("#ricercaSwitch2").click(function(){
			$('#ricercaSwitch').trigger('click');
			$("html, body").animate({scrollTop: $('#ricercaAncora').eq(0).offset().top})
		});
		
		$("#datepickerToolTo").mask("99/99/9994");
		$("#datepickerToolTo").datepicker({
			minDate: 1,
			showOtherMonths: true,
			showOn: "button",
			prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
			nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
			buttonImage: "/img/ret/pixel_trasp.gif",
			buttonImageOnly:true,
			beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
		    onClose: function(){
		    	$('#datePickerWrapper').modal('hide');
		    }
	    })
	    appendDatePickerIcon('datepickerToolTo');


		/*inizializzazione datePicker */
	 	$("#datepickerToolFrom").mask("99/99/9999");
	 	$("#datepickerToolFrom").datepicker({
			minDate: 1,
			showOtherMonths: true,
			showOn: "button",
			prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
			nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
			buttonImage: "/img/ret/pixel_trasp.gif",
			buttonImageOnly:true,
			beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
		    onClose: function(){
		    	$('#datePickerWrapper').modal('hide');
		    }
	    })
	    appendDatePickerIcon('datepickerToolFrom');
    	/*tootlip saldi */
	    formatDataString = function (dataString) {
			return dataString.substr(0, 2) + '/' + dataString.substr(2, 2) + '/' + dataString.substr(4, 4);
		};

	    $('#saldoDisp').click(function(eRif, elRif) 
	    {
			$.ajax({
			url: '/librerie/include/commons/ajax/movimenti/situazioneConti.php',
        	dataType: 'json',
        	success: function (data, eRif, elRif) {
				$('.loadingDet').hide();
				$('#saldoText .spacer').show();
				var saldiDetailText = $('#saldoText');
				saldiDetailText.find('.CCdataT1:first').html(formatDataString(data.dataT1));
				saldiDetailText.find('.CCdataT2:first').html(formatDataString(data.dataT2));
				saldiDetailText.find('.CCdataT3:first').html(formatDataString(data.dataT3));
				
				saldiDetailText.find('.CCsaldoT1:first').html(format2DecNum(moveToInteger(data.margineT1)));
				saldiDetailText.find('.CCsaldoT2:first').html(format2DecNum(moveToInteger(data.margineT2)));
				saldiDetailText.find('.CCsaldoT3:first').html(format2DecNum(moveToInteger(data.margineT3)));
			},
			error: function(e) {
				$('#saldoText .spacer').hide();
         		console.log(e.responseText);
		  	}
        	})
        })
	    })

</script>
<section id="ricercaAncora">
	<div class="row">
		<div class="col-xs-6">
			<h4>Ricerca</h4>
		</div>
		<div class="col-xs-6 align-right">
			<a href="javascript:;" id="ricercaSwitch">ricerca avanzata</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<form class="formGenerico borderFormRounded searchFilter" role="form">
				<!-- Ricerca semplice -->
				<div id="ricercaSemplice">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-3 col-xs-12">
								<select class="form-control">
									<option>lorem</option>
									<option>lorem</option>
									<option>lorem</option>
								</select>
							</div>
							<div class="col-sm-3 col-xs-12">
								<select class="form-control">
									<option>lorem</option>
									<option>lorem</option>
									<option>lorem</option>
								</select>
							</div>							
							<div class="col-sm-3 col-xs-12">
								<div class="btn-align-left">
									<a type="button" class="btn btn-primary" id="">Cerca</a>
								</div>
							</div>								
						</div>
					</div>
				</div>
				<!-- Fine ricerca semplice -->

				<!-- Ricerca avanzata -->
				<div id="ricercaAvanzata" style="display:none">
					<div class="row">						
						<div class="col-sm-3 col-xs-12">
							<label class="control-label">Periodo dal</label>
							<div class="form-inline">
								<div class="form-group">
								  <div class="input-group">
									 <input type="text" id="datepickerToolFrom" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
									 <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
								  </div>
								</div>
							</div> 
						</div>  
						<div class="col-sm-3 col-xs-12">
							<label class="control-label">Al</label>
							<div class="form-inline">
								 <div class="form-group">
								  <div class="input-group">
									 <input type="text" id="datepickerToolTo" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
									 <div class="input-group-addon date"><i class="icon icon-calendar"></i ></div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-12">
							<label class="control-label">Da</label>
							<input type="text" class="form-control clear-x" placeholder="importo minimo" id="minImport1"> 
						</div> 
						<div class="col-sm-3 col-xs-12">
							<label class="control-label">a</label>
							<input type="text" class="form-control clear-x" placeholder="importo massimo" id="maxImport1"> 
						</div>						
						
					</div>
					<div class="row">
						<div class="col-sm-4 col-xs-12 no-label">
							<select class="form-control">
								<option>Entrate e Uscite</option>
								<option>Entrate</option>
								<option>Uscite</option>
							</select>
						</div>
						<div class="col-sm-5 col-xs-12 no-label">
							<select class="form-control">
								<option>tutti</option>
								<optgroup label="Uscite">
									<option>lorem ipsum dolor sit</option>
									<option>Operativit&agrave; overnight e prestito titoli</option>
									<option>Lorem</option>
								</optgroup>
							</select>
						</div>
						
					</div>
					<div class="row">
					<div class="col-sm-7 col-xs-12 no-label">
							<div class="checkbox inline">
								<label class="textWrapper">
				 					  <input type="checkbox" name="" id="">
				  					  <span class="text">escludi movimento tra conto e deposito di risparmio</span>
								</label>
							</div>
					</div>
					<div class="col-sm-2 col-xs-12 no-label">
							<div class="btn-align-left flRight">
								<a type="button" class="btn btn-primary no-margin-right" id="">Cerca</a>
							</div>
						</div>	
					</div>
				</div>
				<!-- Fine ricerca avanzata -->
				
				
			</form>
		</div>
	</div>
	

	
	
	
</section>
<section class="formGenerico">
	<?php virtual("/librerie/include/oggetti/tabelle/tabella_080/oggetto.php") ?>
</section>
<section>
<!--sesione ricarica movimenti e form ricerca -->
<h4>Sono mostrati <strong>x</strong> di <strong>x</strong> movimenti</h4>
<a href="#" onclick="addMov()">Aggiungi movimenti</a>
<form class="formGenerico borderFormRounded" role="form" id="">
	<div class="form-group">
		<div class="row">
	 		<div class="col-sm-8">
	 			<select class="form-control">
					<option>Aggiungi alla ricerca altri 15 movimenti precedenti</option>
					<option>Aggiungi alla ricerca altri 30 movimenti precedenti</option>
					<option>Aggiungi alla ricerca altri 50 movimenti precedenti</option>
				</select>
	 		</div>
	 		<div class="col-sm-4 col-xs-12">
				<div class="btn-align-left">
					<a href="#" class="no-underline btn-icon link-ancora" id="ricercaSwitch2"><strong><span>Vai alla ricerca</span><i class="icon icon-arrow_up"></i></strong></a>
					<!--<a type="button" class="btn btn-primary no-margin-right" id="ricercaSwitch2">Nuova ricerca</a>-->
				</div>
	 		</div>
	 	</div>
	</div>
</form>
<!--
<form class="formGenerico borderFormRounded" id="ricercaAvanzata2" style="display: none;">
	<div class="row">						
		<div class="col-sm-3 col-xs-12">
			<label class="control-label">Periodo dal</label>
			<div class="form-inline">
				<div class="form-group">
				  <div class="input-group">
					 <div class="editable-input"><input type="text" id="datepickerTool3" placeholder="gg/mm/aaaa" class="form-control clear-x hasDatepicker"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div> 
					 <div class="input-group-addon date"><i class="icon icon-calendar"></i><img class="ui-datepicker-trigger" src="/img/ret/pixel_trasp.gif" alt="..." title="..."></div>
				  </div>
				</div>
			</div> 
		</div>  
		<div class="col-sm-3 col-xs-12">
			<label class="control-label">Al</label>
			<div class="form-inline">
				  <div class="form-group">
				  <div class="input-group">
					<div class="editable-input"><input type="text" id="datepickerTool4" placeholder="gg/mm/aaaa" class="form-control clear-x hasDatepicker"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div> 
					 <div class="input-group-addon date"><i class="icon icon-calendar"></i><img class="ui-datepicker-trigger" src="/img/ret/pixel_trasp.gif" alt="..." title="..."></div>
				  </div>
				</div>
			</div>
		</div>
		<div class="col-sm-3 col-xs-12">
			<label class="control-label">Da</label>
			<div class="editable-input"><input type="text" id="" class="form-control clear-x" placeholder="importo minimo"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div> 
		</div> 
		<div class="col-sm-3 col-xs-12">
			<label class="control-label">a</label>
			<div class="editable-input"><input type="text" id="" class="form-control clear-x" placeholder="importo massimo"><span class="editable-clear-x" style="display: none"><i class="icon icon-close icon-1x"></i></span></div> 
		</div>						
	</div>
	<div class="row">
		<div class="col-sm-4 col-xs-12 no-label">
			<select class="form-control">
				<option>Entrate e Uscite</option>
				<option>Entrate</option>
				<option>Uscite</option>
			</select>
		</div>
		<div class="col-sm-5 col-xs-12 no-label">
			<select class="form-control">
				<option>tutti</option>
				<optgroup label="Uscite">
					<option>lorem ipsum dolor sit</option>
					<option>Operatività overnight e prestito titoli</option>
					<option>Lorem</option>
				</optgroup>
			</select>
		</div>
		
	</div>
	<div class="row">
		<div class="col-sm-7 col-xs-12 no-label">
				<div class="checkbox inline">
					<label class="textWrapper">
	 					  <input type="checkbox" name="" id="">
	  					  <span class="text">escludi movimento tra conto e deposito di risparmio</span>
					</label>
				</div>
		</div>
		<div class="col-sm-2 col-xs-12 no-label">
			<div class="btn-align-left flRight">
				<a type="button" class="btn btn-primary no-margin-right" id="">Cerca</a>
			</div>
		</div>	
	</div>

</form>-->
</section>

<!--OVERLAYER GUIDA -->
<div class="modal fade" id="layerGuida" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Guida</h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                         <!-- accordion guida -->
                    	<div class="panel-group" id="accordionGuida" role="tablist" aria-multiselectable="true">
	  						<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingOne">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordionGuida" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							          Ricerca movimenti<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      								<div class="panel-body">
      									<strong>La pagina &quot;movimenti&quot; ti propone gli ultimi 15 movimenti</strong> contabilizzati.
      									Puoi ricercare altri movimenti, fino a un massimo di <strong>6 mesi precedenti</strong>, utilizzando la ricerca <strong>semplice</strong> o <strong>avanzata</strong>.
										<br><br>
										<strong>Ricerca semplice</strong>
										<ul>
											<li>Per <strong>periodo</strong>: selezionando l'arco temporale proposto attraverso il menu a tendina</li>
											<li>Per <strong>tipo di movimenti</strong>: scegliendo tra le categorie di movimenti a disposizione</li>
										</ul>
										<strong>Ricerca avanzata</strong><br>
										Rispetto alla ricerca semplice, prevede la possibilit&agrave; di filtrare anche per <strong>entrate, uscite e importo dei movimenti</strong>.

      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingTwo">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							          Grafici<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      								<div class="panel-body">
      									<p>I grafici ti permettono di controllare le entrate, le uscite e l'andamento del tuo saldo <strong>MESE PER MESE</strong>.</p>
										
										<div class="testoIcona">
											<img src="/img/ret/str_esempio_grafico_torta.png" class="flRight"/>	
											<div class="rightTesto">
												<strong>Grafici a torta</strong>
												<p> due grafici a torta rappresentano il totale delle entrate e delle uscite del mese in corso.
Ogni fetta rappresenta una tipologia di movimenti: per vedere il dettaglio cliccaci.</p>		
												<hr>
											</div>
											
										</div>
										<div class="testoIcona">
											<img src="/img/ret/str_esempio_grafico_linea.png" class="flRight"/>
											<div class="rightTesto">
												<strong>Grafico a linea</strong>
												<p>La linea rappresenta <strong>l'andamento del saldo contabile</strong> del mese in corso.
Le barre, di diversi colori, indicano se nella stessa giornata è stato effettuato uno o più movimenti. Selezionando una barra puoi leggere il dettaglio del movimento o dei movimenti.</p>		
												
											</div>	
											
										</div>
      								</div>
								</div>
							</div>
							
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="heading3">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
							          Significato delle icone<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
      								<div class="panel-body">
      									<p>Cliccando le icone presenti sopra e sotto la tabella dei movimenti puoi compiere le seguenti azioni:</p>
										
										<div class="testoIcona">
											<a class="no-underline btn-icon"><i class="icon icon-2x icon-pdf_circle_filled flLeft"></i></a>
											<div class="leftTesto">
												<p><strong>Scarica:</strong> per vedere le ricevute di tutti i movimenti che hai ricercato oppure solo quelli selezionati</p>		
												<hr>
											</div>
											
										</div>
										<div class="testoIcona">
											<a class="no-underline btn-icon"><i class="icon icon-2x icon-excel_filled flLeft"></i></a>
											<div class="leftTesto">
												<p><strong>Esporta:</strong> per salvare i movimenti sul tuo computer in formato Excel</p>	
												<hr>
											</div>	
										</div>
										<div class="testoIcona">
											<a class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled flLeft"></i></a>
											<div class="leftTesto">
												<p><strong>Vedi dettagli:</strong> per vedere i dettagli di tutti i movimenti oppure solo di quelli selezionati</p>	
												<hr>
											</div>	
										</div>
										<div class="testoIcona">
											<a class="no-underline btn-icon"><i class="icon icon-2x  icon-filtra_filled flLeft"></i></a>
											<div class="leftTesto">
												<p><strong>Mostra:</strong>  per visualizzare solo i movimenti che hai selezionato in precedenza</p>	
											</div>	
										</div>
      								
      									<p>Cliccando invece sull'icona  Pdf, che trovi all'interno della lista movimenti, puoi vedere e scaricare la ricevuta di ogni singolo movimento in formato Pdf.</p>

      								</div>
								</div>
							</div>
							
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="heading4">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
							          Dettagli dei movimenti<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
      								<div class="panel-body">
      									<p>La lista dei movimenti presenta i risultati della ricerca ordinati <strong>per &quot;data valuta&quot; in ordine cronologico a partire dal pi&ugrave; recente.</strong></p>
										<p>Cliccando sull'intestazione di ogni colonna puoi riordinare i movimenti nel seguente modo:</p>
										<ul>
											<li>Per <strong>data</strong> contabile: dal pi&ugrave; al meno recente e viceversa</li>
											<li>Per <strong>descrizione</strong>: in ordine alfabetico crescente o decrescente</li>
											<li>Per <strong>entrate o uscite</strong>: dall'importo più piccolo al pi&ugrave; grande e viceversa</li>
										</ul>
      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="heading5">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
							          Data contabile e data valuta<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
      								<div class="panel-body">
      									<p>La <strong>data contabile</strong> rappresenta il momento in cui viene effettivamente eseguita dalla banca la registrazione di ogni accredito o addebito.</p>
										<p>La <strong>data valuta</strong> &egrave; la data da cui decorrono eventuali interessi sull'importo dell'operazione.</p>
      								</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
