<div class="visible-print-block"> 
	<img src="/HT/fe/img/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		  
		10/03/2017	
	</div>
</div>

<script type="text/javascript" language="javascript" src="/HT/JS/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
<link rel="Stylesheet" type="text/css" href="/HT/CSS/ui.slider.extras.css">
<style>	
	.sliderContainer {
		position: relative;
		width: 100%;
		height: 31px;
	    padding-top: 8px;
	}
	.slider {
		margin-left: 45px;
	    margin-right: 45px;
	}
	.slider .ui-slider-handle {
		border-radius: 0 0 0 0;
		box-shadow: 1px 1px 2px #666666;
	    height: 17px;
	    margin-left: -22px;
	    text-align: center;
	    text-decoration: none;
	    top: -5px;
	    width: 45px;
	    font-size:12px
	}
	.slider .ui-slider-handle:hover {
	    text-decoration: none;
	    cursor: e-resize;
	}
	a.meno {
		position: absolute;
	    left: 4px;
	    top: 7px;
	}
	a.piu {
		position: absolute;
	    right: 4px;
	    top: 7px;
	}
	.min {
	    left: 43px;
	    position: absolute;
	    top: 24px;
	    font-weight: bold;
	}
	.max {
	    right: 26px;
	    position: absolute;
	    top: 24px;
	    font-weight: bold;
	}
	
	td.select2slider {
		padding-right: 50px;
	}
	td.select2slider .ui-slider-handle {
		border-radius: 0 0 0 0;
	    box-shadow: 1px 1px 2px #666666;
	    height: 11px;
	    margin-left: -8px;
	    padding: 0 0 6px;
	    text-align: center;
	    text-decoration: none;
	    top: -6px;
	    width: 15px;
	}
	td.select2slider .ui-slider-handle:hover {
	    cursor: e-resize;
	}
	#limitato {
	    float: right;
	    position: relative;
	    right: 68%;
	}
	td.limiteAutoricariche .ui-slider {
	    float: right;
		margin-right: -10px;
   		width: 62%;
	}
	
	td.small .ui-slider {
   		width: 50px;
	}
	
	td.medium .ui-slider {
   		width: 100px;
   		margin: auto;
	}
	
	span.ttContent{
		margin-left: 10px;
	}
</style>
<script>
	 function updateSlider(event, ui, id, funCallBack){
		$('#slider_'+id).children('span').text( formatter( ui.value));
		$('#slider_'+id).siblings(':input').val(ui.value);
		
		if ($.isFunction(funCallBack)) {
		funCallBack(event, ui);
		}
 	} 	
 
  function sliderLimiti(id,valMin,valMax,valStep,funCallBack) {
	$('#slider_'+id).slider({
		value: $("#"+id).val(),
		min: valMin,
		max: valMax, //5000.00,
		range: "min",
		step: valStep,
		slide: function(event, ui) {
			updateSlider(event, ui, id, funCallBack);
			var id_elemento = $(this).closest('.boxContent').attr('id');
			$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
		},
		change: function(event, ui) {
			updateSlider(event, ui, id, funCallBack );
			$('#slider_'+id).closest('.sliderContainer').find('.valSel').text(formatter(ui.value)+' EUR');

			
		}
	});
	$('#slider_'+id+' > a').text(formatter($("#"+id).val()));
	
} 
	
	function formatter(number) {
		return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, '.');
	}
	
	function somma(button) {
		var id_elemento = $(button).closest('.boxContent').attr('id');
		$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
		var slider = $(button).siblings('.slider');
		var val = parseInt( $(button).siblings(':input').val() );
		var max = parseInt( slider.slider('option','max'));
		if(val < max) {
			var step = slider.slider('option', 'step');
			slider.slider("value", val + step)
		}
		return false;
	}
	
	function sottrai(button) {
		var id_elemento = $(button).closest('.boxContent').attr('id');
		$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
		var slider = $(button).siblings('.slider');
		var val = parseInt( $(button).siblings(':input').val() );
		if(val > 0) {
			var step = slider.slider('option', 'step');
			slider.slider("value", val - step)
		}
		return false;
	}
</script>

<div class="riquadro clearfix">
<div class="clearfix">
<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
 					<span>Pannello di controllo</span>
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Pannello di controllo&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	<script>
		$(function() {
			$("#confirm").dialog({
				autoOpen : false,
				width : 300,
				height: 140,
				modal : true,
				open: function(event, ui){
					$('#confirm').removeClass('hide');
				},
				closeOnEscape:true
			});
		});
		
		$(document).ready(function() {
			$("#inputAddebito input[type=radio]").live('click', function(){
				$("#inputAddebito input[type=submit]").removeClass('disabled');
			});
			$("#inputWebsafe").on('click', 'input[type=radio]', function(){
				$("#inputWebsafe input[type=submit]").removeClass('disabled');
			});
			$("#inputWebsafe").on('click', 'input[type=text]', function(){
				$("#inputWebsafe input[type=submit]").removeClass('disabled');
			});
			$('input[name="geosafe"]').live('click' ,function(){
				$("#formPannelloControllo input[type=submit]").removeClass('disabled');
			});
							
			sliderLimiti('massimaleTotMensile',	0, 5000.00, 50);
			sliderLimiti('massimaleTotGiornalieroAtm', 0, 3000.00, 10);
			sliderLimiti('massimaleTotGiornalieroPos', 0, 5000.00, 50);
			sliderLimiti('massimaleTotGiornalieroWeb', 0, 5000.00,	50);
			

			$('<span class="ui-icon ui-icon-grip-dotted-vertical"></span>').appendTo('td.select2slider .ui-slider-handle');
			$('.showCarte > input[type="button"]').click(function() {
				mostraDivModifica("");
				showCarte();
			});
		
			// scroll to div esitoOperazione
			if ($("#esitoOperazione").length) {
				document.getElementById('esitoOperazione').scrollIntoView();
			}
		});

		function mostraDivModifica(id, esito) {
			$.each($('.formPannelloControllo > [id^="input"]').not('#input' + id), function(index, obj) {
				nascondiDivModifica(obj.id.substr(5), esito);
			});
			if (esito != 'KO') {
				$('#messagePanel').hide();
			}
				
			$('#dati' + id).fadeOut('fast', function() {
				$('#input' + id).fadeIn();
				try {
					eval('inizializzaForm' + id + '()');
				} catch (e) {
				}
				;
			});
		}

		function nascondiDivModifica(id, esito) {
			if (esito != 'KO') {
				$('.messagePanel').hide();
			}
				
			if(!$('.formPannelloControllo div[id="input'+id+'"] input[type="submit"]').hasClass('disabled')){
				$('#confirm').dialog('open');
				$('#yes').on('click', function(){
					$('.formPannelloControllo div[id="input'+id+'"]').parent().submit();
					$('.formPannelloControllo div[id="input'+id+'"] input').addClass('disabled')
				});
				$('#no').on('click', function(){
					$('#input' + id).fadeOut('fast', function() {
						$('#dati' + id).fadeIn();
					});
					resetForm(id);
					$('.formPannelloControllo div[id="input'+id+'"] input').addClass('disabled')
					$('.formPannelloControllo div[id="input'+id+'"]').parent()[0].reset();
					$('#confirm').dialog('close');
				});
			}else{
				$('#input' + id).fadeOut('fast', function() {
					$('#dati' + id).fadeIn();
				});
				resetForm(id);
			}
		}

		function resetForm(id) {
			$('.formPannelloControllo')[0].reset();
			$.each($('#formPannelloControllo > div [id^="slider_"]'), function(index, obj) {
				$('#' + obj.id).slider("value", $("#" + obj.id.substr(7)).val());
				$('#' + obj.id + ' > a').text(formatter($("#" + obj.id.substr(7)).val()));
			});
		}
	</script>
	
	
	
	
	

	<div class="section clearfix">
		<form id="formPannelloControllo" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
			
			
			







<script type="text/javascript">
		$(document).ready(function(){
		/* <!-- cartaSelectionInit(); -->
		$('.tabSelezioneCC table').on('mouseenter', 'tr', function() { $(this).addClass('hover'); });
		$('.tabSelezioneCC table').on('mouseleave', 'tr', function() { $(this).removeClass('hover'); });
			$('.btnSelezioneCC').click(function(){
		
		var that = $(this);
		if (!that.hasClass('open'))
			$('.tabSelezioneCC').slideDown(200);
		else
			$('.tabSelezioneCC').slideUp(300);
			
		that.toggleClass('open');
		
		//$('.cartaSelezionata').fadeOut(200, function(){$('.tabSelezioneCarte').slideDown(300);});
		//$('.tabSelezioneCC').slideDown(200);
	});
	
	$('.tabSelezioneCC table tbody').on('click', 'tr', function(){
		$('input[type="radio"]', $(this).parent()).removeAttr('checked');
		$('input[type="radio"]', this).attr("checked", "checked");
		$('input[type="radio"]', this).closest("form").submit();
	}); */
	
	var submitOnClick = false;
	var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-6');
		$('#intestazione').addClass('col-xs-10');
		$('#labelIntestatario').addClass('hide');
	}
	 
	
	    submitOnClick = true;
	
	
		
			CCselectionInit(submitOnClick, false, false);
		
		
	
	
		});
</script>


<h3 class="titleSection">
	
	








		
			Seleziona la carta
		
		
		
		


</h3>


<!-- 		<span class="bottoni_intestazione_tabella" style="margin-top: -22px;"> -->
<!-- 			<span class="rounded_corner">&nbsp;</span> <span class="bottoni"> -->
<!-- 				<input id="toggleCarte" class="button" type="button"> </span> </span> -->








<div class="selezioneCC tabellaSelezioneCC"> 
	<div class="cartaSelezionata clearfix">
		
			
				
							
			
			
		

		<div class="col-xs-12 clear-paddingImportant">
			<span class="col-sm-2 col-xs-4 clear-paddingImportant" id="labelIntestatario">
				Intestato a:
			</span>
			<span id="intestazione" class="col-xs-6 clear-paddingImportant">
				<!-- TALLO MAURO LUCA -->

				
					
						Tallo Mauro Luca
					
					
				
			</span> 
			<div class="col-sm-6 col-xs-12 clear-paddingImportant">
				<span class="col-xs-4 clear-paddingImportant">
					Tipo carta
				</span>
				<span id="tipoCarta" class="col-xs-6 clear-paddingImportant">
					YouCard
				</span>
				<span class="col-xs-4 clear-paddingImportant">
					Filiale 
				</span> 
			    <span id="filiale" class="col-xs-6 clear-paddingImportant">
			    	SEDE DI LODI &nbsp;-&nbsp; 2001
			    </span>
			</div>
			<div class="col-sm-6 col-xs-12 clear-paddingImportant">
				<span class="col-xs-4 clear-paddingImportant">
					Numero
				</span>
				<span id="numero" class="col-xs-6 clear-paddingImportant">
					*6534
				</span>
			</div>
		</div>

		
			<a href="javascript:void(0);" class="btnSelezioneCC" title="selezione rapporto">
				<img src="/HT/fe/img/ico-select.png" id="btnSelezioneRapporto" title="Seleziona" alt="Seleziona">
			</a>
		
	</div>
	<div class="table-responsive tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
	
		
			<thead>
				<tr role="row"><th class="hidden sorting_asc" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente" style="width: 0px;">&nbsp;</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo carta
					: ordinamento crescente" style="width: 0px;">Tipo carta
					</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero
					: ordinamento crescente" style="width: 0px;">Numero
					</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale
					: ordinamento crescente" style="width: 0px;">Filiale
					</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione
					: ordinamento crescente" style="width: 0px;">Intestazione
					</th></tr>
			</thead>
		
		<tbody>
			
				
			
				
			
		<tr role="row" class="odd">
					
						
							<td class="hidden sorting_1" style="text-align: center">
									
										<input type="radio" name="codContoCorrente" value="001|0898|089800115927" checked="checked" onclick="submit()" class="hidden">
									
									
								</td>
						
						
					
					<td>YouCard
					</td>
					<td>*6534
					</td>
					<td>SEDE DI LODI&nbsp;-&nbsp; 2001</td>
					<td>TALLO MAURO LUCA
					</td>
				</tr><tr role="row" class="even">
					
						
							<td class="hidden sorting_1" style="text-align: center">
									
										<input type="radio" name="codContoCorrente" value="001|1896|189600000933" onclick="submit()" class="hidden">
									
									
								</td>
						
						
					
					<td>K2 Black
					</td>
					<td>*2144
					</td>
					<td>SEDE DI LODI&nbsp;-&nbsp; 2001</td>
					<td>TALLO MAURO LUCA
					</td>
				</tr></tbody>
	</table></div>
</div>
</div>
</div>
		</form>
	</div>

	<div class="section clearfix">
		<form id="addebitoCartaForm" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
			<input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
			
				







<script>
	var msgImmediato = "Ti informiamo che l'attivazione della 'Modalità di addebito IMMEDIATO' comporta il pagamento di un canone mensile come riportato sul contratto della tua YouCard.<br><br>Se vuoi procedere con la modifica clicca su CONFERMA, in caso contrario su ANNULLA.";
	var msgFineMese = "Ti informiamo che l'attivazione della 'Modalità di addebito A FINE MESE' comporta il pagamento di un canone mensile come riportato sul contratto della tua YouCard.<br><br>Se vuoi procedere con la modifica clicca su CONFERMA, in caso contrario su ANNULLA.";
	var msgImmediatoFineMese = "Ti informiamo che l'attivazione della 'Modalità di addebito IMMEDIATO/A FINE MESE' comporta il pagamento di un canone mensile come riportato sul contratto della tua YouCard.<br><br>Se vuoi procedere con la modifica clicca su CONFERMA, in caso contrario su ANNULLA.";
	$(document).ready(function() {
		$("#dialog-commissioni").dialog({
			modal : true,
			autoOpen : false
		});
		
	});

	function verificaCommissioni() {
		var almenoUnImmediato = $('#addebitoAtmIMM').is(':checked')
									|| $('#addebitoPosIMM').is(':checked')
									|| $('#addebitoWebIMM').is(':checked');
		var almenoUnDebito = $('#addebitoAtm').is(':checked')
									|| $('#addebitoPos').is(':checked')
									|| $('#addebitoWeb').is(':checked');
		var dialog = (almenoUnImmediato && false)
						|| (almenoUnDebito && true);
		if (dialog) {
			var text = '';
			if (almenoUnImmediato && almenoUnDebito) {
				if (false)
					text = msgImmediatoFineMese;
				else
					text = msgFineMese;
			} else if (almenoUnDebito)
				text = msgFineMese;
			else if (almenoUnImmediato)
				text = msgImmediato;
			$('#dialog-commissioni-text').html(text);
			$('#dialog-commissioni').dialog('open');
		} else
			$('#addebitoCartaForm').submit();
	}
</script>

<h3 class="titleSection">
	
	
	
	








		
			Modalità di addebito
		
		
		
		
			<span style="width: 16px;">
				




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Pannello di controllo&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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

			</span>
			<span style="clear: right;">&nbsp;</span>
			


</h3>
<input type="hidden" name="formModificata" value="Addebito">


<div id="datiAddebito">
	<div class="form-group clearfix">
	<div class="form-field-resume col-xs-11 nopadding">
		<div class="form-field-resume col-sm-4 col-xs-12">
			<label class="control-label">
				Prelievi da ATM 
				<span class="resume importo visible-xs"> 
					<span class="hidden-xxs">Addebito</span> immediato
				</span>
			</label>
 			<span class="resume hidden-xs"> 
				<span class="hidden-xxs">Addebito</span> immediato
			</span> 
		</div>
		<div class="form-field-resume col-sm-4 col-xs-12">
			<label class="control-label">
				Pagamenti in negozi fisici 
				<span class="resume importo visible-xs"> 
					<span class="hidden-xxs">Addebito</span> immediato
				</span>
			</label>
 			<span class="resume hidden-xs"> 
				<span class="hidden-xxs">Addebito</span> immediato
			</span> 
		</div>
		<div class="form-field-resume col-sm-4 col-xs-12">
				<label class="control-label"> 
					Pagamenti su internet  
					<span class="resume importo visible-xs"> 
						<span class="hidden-xxs">Addebito</span> prepagato 
					</span>
				</label> 
				<span class="resume hidden-xs"> 
					<span class="hidden-xxs">Addebito</span> prepagato 
				</span>
			</div>
		</div>
		<div class="col-xs-1">
			
				
				
					<a href="javascript:mostraDivModifica('Addebito')" class="btnSelezioneOpen pull-right" id="btnRicerca"></a>
				
			
		</div>
	</div>
</div>

<div class="clearfix" id="inputAddebito" style="display: none; margin-bottom: 10px;">
	<div class="form-group clearfix">
		<div class="form-field-resume col-xs-11 nopadding">
		<div class="form-field-input col-sm-4 col-xs-11 margin-top-xs-10">
			<label class="control-label">
				Prelievi da ATM 
			</label>
			<div class="col-xs-10 col-xs-offset-1 clear-padding padding-left-xs-20">
				<div>
					<input type="radio" name="addebitoAtm" value="P" id="addebitoAtmPRE" class="sfondoForm">
					<span class="hidden-xxs">Addebito</span> prepagato 
				</div>
				<div class="padding-top-xs-5">
					
						
						
							<input type="radio" name="addebitoAtm" value="D" checked="checked" id="addebitoAtmIMM" class="sfondoForm">
						
					

					<span class="hidden-xxs">Addebito</span> immediato
				</div>
				<div class="padding-top-xs-5">
					
						
							<input type="radio" name="addebitoAtm" value="C" disabled="disabled" id="addebitoAtm" class="sfondoForm">
						
						
					
					<span class="hidden-xxs">Addebito</span> a fine mese
				</div>
			</div>
		</div>
		<div class="form-field-input col-sm-4 col-xs-11 margin-top-xs-10">
			<label class="control-label">
				Pagamenti in negozi fisici 
			</label>
			<div class="col-xs-10 col-xs-offset-1 clear-padding padding-left-xs-20">
				<div>
					<input type="radio" name="addebitoPos" value="P" id="addebitoPosPRE" class="sfondoForm">
					<span class="hidden-xxs">Addebito</span> prepagato 
				</div>
				<div class="padding-top-xs-5">
					
						
						
							<input type="radio" name="addebitoPos" value="D" checked="checked" id="addebitoPosIMM" class="sfondoForm">
						
					
					<span class="hidden-xxs">Addebito</span> immediato
				</div>
				<div class="padding-top-xs-5">
					
						
							<input type="radio" name="addebitoPos" value="C" disabled="disabled" id="addebitoPos" class="sfondoForm">
						
						
					
					<span class="hidden-xxs">Addebito</span> a fine mese
				</div>
			</div>
		</div>
		<div class="form-field-input col-sm-3 col-xs-11 margin-top-xs-10">
			<label class="control-label">
				Pagamenti su internet 
			</label>
			<div class="col-xs-10 col-xs-offset-1 clear-padding padding-left-xs-20">
				<div>
					<input type="radio" name="addebitoWeb" value="P" checked="checked" id="addebitoWebPRE" class="sfondoForm">
					<span class="hidden-xxs">Addebito</span> prepagato 
				</div>
				<div class="padding-top-xs-5">
					
						
						
							<input type="radio" name="addebitoWeb" value="D" id="addebitoWebIMM" class="sfondoForm">
						
					
					<span class="hidden-xxs">Addebito</span> immediato
				</div>
				<div class="padding-top-xs-5">
					
						
							<input type="radio" name="addebitoWeb" value="C" disabled="disabled" id="addebitoWeb" class="sfondoForm">
						
						
					
					<span class="hidden-xxs">Addebito</span> a fine mese
				</div>
			</div>
		</div>
		</div>
		<div class="col-xs-1">
			
				
				
					<a href="javascript:nascondiDivModifica('Addebito')" class="btnSelezioneClose pull-right"></a>
				
			
		</div>
	</div>
	<br>
	
	
	<div class="pull-right">


		<input type="submit" value="Conferma" alt="Conferma" onclick="verificaCommissioni();" class="btn btn-primary execute disabled">
	</div>
</div>
			
		</form>
	</div>
	<hr class="hrSeparatore">
	<div class="section clearfix">
		<form id="formPannelloControllo" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
			<input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
			




<script>
	function inizializzaFormMassimali() {
		var maxMens = 5000.00;
		scalaDivSlider('massimaleTotGiornalieroAtm', maxMens, 3000.00);
		scalaDivSlider('massimaleTotGiornalieroPos', maxMens, 5000.00);
		scalaDivSlider('massimaleTotGiornalieroWeb', maxMens, 5000.00);
	}
	function scalaDivSlider(id, maxMens, val) {
		var element = $('#slider_massimaleTotMensile');
		var dimensioneMassima = $(element).width();
		var nuovaDimensione = (dimensioneMassima / maxMens) * val;
		//right commentate per fare gli slider della stessa dimensione
		//if (nuovaDimensione < 70)
		//	nuovaDimensione = 70;
		//var contenitore = $('#slider_' + id).parent('div').css('width',
		//		nuovaDimensione + 45 + 45);
	}
	
</script>






<input type="hidden" name="limiteTotMensile" value="5000.00">
<input type="hidden" name="limiteTotGiornalieroAtm" value="3000.00">
<input type="hidden" name="limiteTotGiornalieroPos" value="5000.00">
<input type="hidden" name="limiteTotGiornalieroWeb" value="5000.00">

<h3 class="titleSection">
	
	
	
	








		
			Limiti di utilizzo
		
		
		
		
			<span style="width: 16px;">
				




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Pannello di controllo&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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

			</span>
			<span style="clear: right;">&nbsp;</span>
			


</h3>
<input type="hidden" name="formModificata" value="Massimali">


<div id="datiMassimali">
	<div class="form-group clearfix">
		<div class="form-field-resume col-xs-11 nopadding">
			<div class="form-field-resume col-sm-6 col-xs-12 margin-top-xs-5">
				<label class="control-label">Complessivo mensile 
				<span class="resume importo">
					3.000,00 &nbsp;<span class="hidden-xs">EUR</span>
				</span> </label>
			</div>
			<div class="form-field-resume col-sm-6 col-xs-12 margin-top-xs-5">
				<label class="control-label">
					Giornaliero negozi fisici 
				
				<span class="resume importo"> 
					3.000,00 &nbsp;<span class="hidden-xs">EUR</span>
				</span></label>
			</div>
			<div class="form-field-resume col-sm-6 col-xs-12 margin-top-xs-5">
				<label class="control-label">
					Giornaliero internet 
				
				<span class="resume importo"> 
					3.000,00 &nbsp;<span class="hidden-xs">EUR</span>
				</span></label> 
			</div>
			<div class="form-field-resume col-sm-6 col-xs-12 margin-top-xs-5">
				<label class="control-label">Giornaliero per prelievi da ATM
				<span class="resume importo"> 
					1.500,00 &nbsp;<span class="hidden-xs">EUR</span>
				</span> </label>
			</div>
		</div>
		<div class="form-field-resume col-xs-1">
			
				
				
					<a href="javascript:mostraDivModifica('Massimali')" class="btnSelezioneOpen pull-right" id="btnRicerca"></a>
				
			
		</div>
	</div>
</div>
<div class="boxContent" style="display: none; margin-bottom: 10px;" id="inputMassimali">
	
		
		
			<div class="col-xs-11">&nbsp;</div>
			<div class="col-xs-1">
				<a href="javascript:nascondiDivModifica('Massimali')" class="btnSelezioneClose pull-right"></a>
			</div>
		
	
<div class="form-group col-sm-6 col-xs-12">
	<div>
		<label for="massimaleTotMensile">
			Complessivo mensile 
		</label>
	</div>
	<div>
		<div class="sliderContainer sliderValSel">
			    <span class="valSel"></span>

			<span class="min">0</span> 
			<span class="max">
				5.000 
			</span> 
			<a href="#" class="meno" onclick="return sottrai(this)">
				<img src="/HT/fe/img/icon_min.png"  title="Meno" alt="Meno" /><span>50</span>

			</a>
			<div id="slider_massimaleTotMensile" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 60%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span></div>
			<a href="#" class="piu" onclick="return somma(this)">
				<img src="/HT/fe/img/icon_plus.png"  title="Piu" alt="Piu" /><span>50</span>

			</a>
			<input type="text" name="massimaleTotMensile" value="3000" id="massimaleTotMensile" style="display:none;">
		</div>
	</div>
</div>
<div class="form-group col-sm-6 col-xs-12">
	<div>
		<label for="massimaleTotGiornalieroPos">Giornaliero negozi fisici </label>
	</div>
	<div>
		<div class="sliderContainer sliderValSel">
			<span class="valSel"></span>
			<span class="min">0</span> <span class="max">
				5.000 
			</span> 
			<a href="#" class="meno" onclick="return sottrai(this)">
				<img src="/HT/fe/img/icon_min.png"  title="Meno" alt="Meno" /><span>50</span>
			</a>
			<div id="slider_massimaleTotGiornalieroPos" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 60%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span></div>
			<a href="#" class="piu" onclick="return somma(this)">
				<img src="/HT/fe/img/icon_plus.png"  title="Piu" alt="Piu" /><span>50</span>  
			</a>
			<input type="text" name="massimaleTotGiornalieroPos" value="3000" id="massimaleTotGiornalieroPos" style="display:none;">
		</div>
	</div>
</div>
<div class="form-group col-sm-6 col-xs-12">
	<div>
		<label for="massimaleTotGiornalieroWeb">
			Giornaliero internet 
		</label>
	</div>
	<div>
		<div class="sliderContainer sliderValSel">
			<span class="valSel"></span>
			<span class="min">0</span> 
			<span class="max">
				5.000 
			</span> 
			<a href="#" class="meno" onclick="return sottrai(this)">
				<img src="/HT/fe/img/icon_min.png"  title="Meno" alt="Meno" /><span>50</span> 
			</a>
			<div id="slider_massimaleTotGiornalieroWeb" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 60%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 60%;"></span></div>
			<a href="#" class="piu" onclick="return somma(this)">
				<img src="/HT/fe/img/icon_plus.png"  title="Piu" alt="Piu" /><span>50</span>  
			</a>
			<input type="text" name="massimaleTotGiornalieroWeb" value="3000" id="massimaleTotGiornalieroWeb" style="display:none;">
		</div>
	</div>
</div>
<div class="form-group col-sm-6 col-xs-12">
	<div>
		<label for="massimaleTotGiornalieroAtm">
			Giornaliero per prelievi da ATM 
		</label>
	</div>
	<div>
		<div class="sliderContainer  sliderValSel">
			<span class="valSel"></span>
			<span class="min">0</span> 
			<span class="max">
				3.000 
			</span> 
			<a href="#" class="meno" onclick="return sottrai(this)">
				<img src="/HT/fe/img/icon_min.png"  title="Meno" alt="Meno" /><span>50</span> 
			</a>
			<div id="slider_massimaleTotGiornalieroAtm" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 50%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 50%;"></span></div>
			<a href="#" class="piu" onclick="return somma(this)">
				<img src="/HT/fe/img/icon_plus.png"  title="Piu" alt="Piu" /><span>50</span> 
			</a>
			<input type="text" name="massimaleTotGiornalieroAtm" value="1500" id="massimaleTotGiornalieroAtm" style="display:none;">
		</div>
	</div>
</div>
<div class="pull-right margin-top10">
	<div class="actions">
		<input type="submit" value="Conferma" class="btn btn-primary disabled execute" alt="Conferma">
	</div>
</div>
</div>



		</form>
	</div>
	<hr class="hrSeparatore">
	<div class="section clearfix">
		<form id="formPannelloControllo" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
			<input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
			






				
<script type="text/javascript">
	function disabilitaInputFunc() {
		$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
		$('.calendarioDefault').datepicker('disable'); 
	}
	function maxOperazioniFunc() {
		$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
		$('.calendarioDefault').datepicker('disable'); 
		$('#maxOperazioni').removeAttr('disabled');
		$('#maxOperazioni').focus();
	}
	function maxImportoFunc() {
		$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
		$('.calendarioDefault').datepicker('disable'); 
		$('#maxImporto').removeAttr('disabled');
		$('#maxImporto').focus();
	}
	function dataOraAttivitaFunc() {
		$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
		$('.calendarioDefault').removeAttr('disabled');
		$('.calendarioDefault').datepicker('enable');
		$('#dataInizioAttivita').focus();
	}
	function maxOreAttivitaFunc() {
		$('#tableFormWebsafe input:text').attr('disabled', 'disabled');
		$('.calendarioDefault').datepicker('disable'); 
		$('#maxOreAttivita').removeAttr('disabled');
		$('#maxOreAttivita').focus();
	}
	
	$(document).ready(function() {
			$('.calendarioDefault').datepicker({
			minDate: new Date(),
			maxDate: '+1Y',
			buttonImage: '/HT/fe/img/calendar.png',
			beforeShowDay: noWeekendsOrHolidays
		});
	
		
	});
</script>

<input type="hidden" name="plafondMaxCarta" value="10000">
<h3 class="titleSection">
	
	
	
	








		
			WebSafe
		
		
		
		
			<span style="width: 16px;">
				




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Pannello di controllo&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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

			</span>
			<span style="clear: right;">&nbsp;</span>
			


	</h3>
	<input type="hidden" name="formModificata" value="Websafe">
	
 	
	<div id="datiWebsafe">
		<div class="form-group clearfix">
	 		<div class="col-xs-11">
	 		  	La carta è attiva in modo permanente ad effettuare acquisti su internet. 
		  	</div>	
		  		<div class="col-xs-1">
		 		
			 		
			 		
			 			<a href="javascript:mostraDivModifica('Websafe')" class="btnSelezioneOpen pull-right" id="btnRicerca"></a>
			 		
		 		
	 		</div>
		</div>
	</div>
	
	<div class="clearfix" id="inputWebsafe" style="display:none;margin-bottom: 10px;">
	<div id="tableFormWebsafe" class="form-group clearfix">
		<div class="col-xs-11">
	 		<div class="col-xs-12 margin-top5">
				<div class="" style="width:3%;float:left;">
					<input type="radio" name="flagServiziWebsafe" value="0" checked="checked" onclick="disabilitaInputFunc()" id="flagServiziAbilita" class="sfondoForm">
				</div>
				<div class="col-xs-11">
	   				<label for="flagServiziAbilita" class="margin-top0 margin-left-xs-10">Abilita permanentemente ad effettuare acquisti su internet. </label>
	   			</div> 			
		 	</div>
		 	<div class="col-xs-12 margin-top5">
		 		<div class="" style="width:3%;float:left;">
					<input type="radio" name="flagServiziWebsafe" value="1" onclick="disabilitaInputFunc()" id="flagServiziDisabilita" class="sfondoForm">
	   			</div>
	   			<div class="col-xs-11">
	   				<label for="flagServiziDisabilita" class="margin-top0 margin-left-xs-10">Disabilita permanentemente ad effettuare acquisti su internet.</label>
	   			</div> 			
		 	</div>
		 	<div class="col-xs-12 margin-top5">
				<div class="" style="width:3%;float:left;">
 		   			<input type="radio" name="flagServiziWebsafe" value="2" onclick="maxOperazioniFunc()" id="flagServiziMaxOp" class="sfondoForm">
	   			</div>
 				<div class="col-xs-11">
		   			<label for="flagServiziMaxOp" class="margin-top0 margin-left-xs-10">Abilita per n.</label>
		   			<input type="text" name="maxOperazioniWebsafe" maxlength="8" size="8" value="" disabled="disabled" id="maxOperazioni" class="form-control wauto">
		   			<label for="flagServiziMaxOp" class="margin-top0">acquisti su internet.</label>
				</div>
		 	</div>
		 	<div class="col-xs-12 margin-top5">
				<div style="width:3%;float:left;">
					<input type="radio" name="flagServiziWebsafe" value="3" onclick="maxImportoFunc()" id="flagServiziMaxImporto" class="sfondoForm">&nbsp;&nbsp;
	   			</div>
	   			<div class="col-xs-11">
		   			<label for="flagServiziMaxImporto" class="margin-top0 margin-left-xs-10">Abilita ad effettuare acquisti su internet per un importo massimo di </label>
		   			<input type="text" name="maxImportoWebsafe" maxlength="8" size="8" value="" disabled="disabled" id="maxImporto" class="form-control wauto">
		   			<label for="flagServiziMaxImporto" class="margin-top0">Euro.</label>
	   			</div>
		 	</div>
	 		<div class="col-xs-12 margin-top5">
	 			<div style="width:3%;float:left;">
					<input type="radio" name="flagServiziWebsafe" value="4" onclick="dataOraAttivitaFunc()" id="flagServiziDataAtt" class="sfondoForm">&nbsp;&nbsp;
	   			</div>
	   			<div class="col-xs-10">
		   			<label for="flagServiziDataAtt" class="margin-top0 margin-left-xs-10">Abilita ad effettuare acquisti su internet</label>
		   			<label for="flagServiziDataAtt" class="margin-top0">dal</label>
		   			<input type="text" name="dataOraInizioAttivitaWebsafe" maxlength="10" size="9" value="" disabled="disabled" id="dataInizioAttivita" class="calendarioDefault hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
		   			<label for="flagServiziDataAtt" class="margin-top0">al</label>
		   			<input type="text" name="dataOraFineAttivitaWebsafe" maxlength="10" size="9" value="" disabled="disabled" id="dataFineAttivita" class="calendarioDefault hasDatepicker"><img class="ui-datepicker-trigger" src="/HT/fe/img/calendar.png" alt="Calendario" title="Calendario">
		 		</div>
		 	</div>
		 	<div class="col-xs-12 margin-top5">
		 		<div style="width:3%;float:left;">
					<input type="radio" name="flagServiziWebsafe" value="5" onclick="maxOreAttivitaFunc()" id="flagServiziMaxOre" class="sfondoForm">&nbsp;&nbsp;
	   			</div>
	   			<div class="col-xs-10">
		   			<label for="flagServiziMaxOre" class="margin-top0 margin-left-xs-10">Abilita ad effettuare acquisti su internet per</label>
		   			<input type="text" name="maxOreAttivitaWebsafe" maxlength="2" size="5" value="" disabled="disabled" id="maxOreAttivita" class="form-control wauto">
		   			<label for="flagServiziMaxOre" class="margin-top0">ore.</label>
	   			</div>
		 	</div>
		 </div>
		 <div class="col-xs-1">
		 		
			 		
			 		
			 			<a href="javascript:nascondiDivModifica('Websafe')" class="btnSelezioneClose pull-right"></a>
			 		
		 		
	 		</div>
		 </div>

	
	
	<div class="pull-right">

		<input type="submit" value="Conferma" class="btn btn-primary execute disabled" alt="Conferma">
	</div>
	</div>
		</form>
	</div>

<hr class="hrSeparatore">
	
		<div class="section clearfix">
			<form id="formPannelloControllo" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
				<input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
				







<script>
$(document).ready(function (){
	var tipoGeosafe = 'ITA';
	$('#img'+tipoGeosafe).attr('src','/HT/fe/img/geosafe'+tipoGeosafe+'.png');
	$('.labelGeosafe').find('[for="geosafe'+tipoGeosafe+'"]').removeAttr('style');
	
	$('input[name="geosafe"]').click(function(){
		disabilitaRadio();
		var tipoGeosafe = $(this).attr('value');
		$('#img'+tipoGeosafe).attr('src','/HT/fe/img/geosafe'+tipoGeosafe+'.png');
		$('#label'+tipoGeosafe).removeAttr('style');
		
	});
	
	
});
function disabilitaRadio() {
	$('.imgGeosafe').find('span').each(function () {
		$(this).css('color','#888888');
	});
	$('.imgGeosafe').find('div img').each(function (){
		var urlImg=$(this).attr('src');
		if (urlImg.indexOf('Off')<0)
			$(this).attr('src',urlImg.substring(0,urlImg.length-4)+'_Off.png');
	});
}

</script>

<h3 class="titleSection">
	
	
	
	








		
			GeoSafe
		
		
		
		
			<span style="width: 16px;">
				




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Pannello di controllo&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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

			</span>
			<span style="clear: right;">&nbsp;</span>
			


</h3>
<input type="hidden" name="formModificata" value="Geosafe">


<div id="datiGeosafe">
	<div class="form-group clearfix">
		<div class="col-xs-11">
			La carta è abilitata
			Solo in Italia
		</div>
		<div class="col-xs-1">
			
				
				
					<a href="javascript:mostraDivModifica('Geosafe')" class="btnSelezioneOpen pull-right" id="btnRicerca"></a>
				
			
		</div>
	</div>
</div>

<div class="divForm boxContent" id="inputGeosafe" style="display: none; margin-bottom: 10px;">
	<div class="col-xs-11">
		Abilita la carta per gli utilizzi: 
	</div>
		<div class="col-xs-1">
			
				
				
					<a href="javascript:nascondiDivModifica('Geosafe')" class="btnSelezioneClose pull-right"></a>
				
			
		</div>
	<div class="imgGeosafe">
		<div class="col-sm-4 col-xs-12">
			<div class="col-xs-12 pull-left">
				<input type="radio" name="geosafe" value="ITA" checked="checked" id="geosafeITA" style="vertical-align: top;" class="sfondoForm hidden-xs">
			</div>
			<label for="geosafeITA" class="col-xs-10 col-xs-offset-1">
				<img src="/HT/fe/img/geosafeITA.png" id="imgITA" title="Italia" alt="Italia">
			</label>
			<span id="labelITA" class="col-xs-12" style="color: #888888">Solo in Italia</span>
		</div>
		<div class="col-sm-4 col-xs-12">
			<div class="col-xs-12 pull-left">
				<input type="radio" name="geosafe" value="EU" id="geosafeEU" style="vertical-align: top;" class="sfondoForm hidden-xs">
			</div>
			<label for="geosafeEU" class="col-xs-10 col-xs-offset-1">
				<img src="/HT/fe/img/geosafeEU_Off.png" id="imgEU" title="Europa" alt="Europa">
			</label>
			<span id="labelEU" class="col-xs-12" style="color: #888888">In Europa <br> (abilitazione valida per 3 mesi)</span>
		</div>
		<div class="col-sm-4 col-xs-12">
			<div class="col-xs-12 pull-left">
				<input type="radio" name="geosafe" value="MONDO" id="geosafeMONDO" style="vertical-align: top;" class="sfondoForm hidden-xs">&nbsp;&nbsp;
			</div>
			<label for="geosafeMONDO" class="col-xs-10 col-xs-offset-1">
				<img src="/HT/fe/img/geosafeMONDO_Off.png" id="imgMONDO" title="Mondo" alt="Mondo">
			</label>
			<span id="labelMONDO" class="col-xs-12" style="color: #888888">In tutto il mondo <br> (abilitazione valida per 1 mese)</span>
		</div>
	</div>
	<div class="col-xs-12 margin-top10">
		<div>La possibilità di pagare su internet è indipendente dall'abilitazione definita all'interno della sezione GeoSafe. </div>
	</div>
	<div class="otpCheck">
		
	</div>
	<div class="pull-right">
		<input type="submit" value="Conferma" class="btn btn-primary execute disabled" alt="Conferma">
	</div>
</div>
			</form>
		</div>
		<hr class="hrSeparatore">
		<div class="section clearfix">
			<form id="familySafe" method="post" action="/WEBHT/cartaConto/pannelloControlloModifica.do" class="formPannelloControllo"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
				<input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
				






<script>
	function inizializzaFormFamilysafe() {	
		$('#inputFamilysafe div.ui-slider').each(function(){$(this).remove();})
			$('#familySlider0').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
		        	$("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOff(0);}		        	
		        	else if (ui.value==1){attivaOn(0);}
		        }
		    }});
		    var selectedValue = $('#familySlider0').val();
		    if (selectedValue=='S'){attivaOn(0);}
			else if (selectedValue=='N'){attivaOff(0);}
		
			$('#familySlider1').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(1);}		        	
		        	else if (ui.value==1){attivaOff(1);}
		        }
		    }});
		    var selectedValue = $('#familySlider1').val();
		    if (selectedValue=='S'){attivaOn(1);}
			else if (selectedValue=='N'){attivaOff(1);}
		
			$('#familySlider2').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(2);}		        	
		        	else if (ui.value==1){attivaOff(2);}
		        }
		    }});
		    var selectedValue = $('#familySlider2').val();
		    if (selectedValue=='S'){attivaOn(2);}
			else if (selectedValue=='N'){attivaOff(2);}
		
			$('#familySlider3').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(3);}		        	
		        	else if (ui.value==1){attivaOff(3);}
		        }
		    }});
		    var selectedValue = $('#familySlider3').val();
		    if (selectedValue=='S'){attivaOn(3);}
			else if (selectedValue=='N'){attivaOff(3);}
		
			$('#familySlider4').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(4);}		        	
		        	else if (ui.value==1){attivaOff(4);}
		        }
		    }});
		    var selectedValue = $('#familySlider4').val();
		    if (selectedValue=='S'){attivaOn(4);}
			else if (selectedValue=='N'){attivaOff(4);}
		
			$('#familySlider5').selectToUISlider({labelSrc: 'text', sliderOptions: {
		        change: function(event, ui) {
			        $("#familySafe").find("input[type=submit]").removeClass("disabled");
		        	if (ui.value==0){attivaOn(5);}		        	
		        	else if (ui.value==1){attivaOff(5);}
		        }
		    }});
		    var selectedValue = $('#familySlider5').val();
		    if (selectedValue=='S'){attivaOn(5);}
			else if (selectedValue=='N'){attivaOff(5);}
		
	}
	
	function attivaOn(id) {
		var primoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
		//$(primoFiglio).css('color','#003F63').css('font-weight','bold').css('margin-left', '-30px');
		var secondoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
		//$(secondoFiglio).css('color','#666666').css('font-weight','normal').css('margin-left', '-25px');
		$('#familySlider'+id+' option:eq(1)').attr('selected', false);
		$('#familySlider'+id+' option:eq(0)').attr('selected', true);
	}
	
	function attivaOff(id) {
		var primoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
		//$(primoFiglio).css('color','#666666').css('font-weight','normal').css('margin-left', '-30px');;
		var secondoFiglio = $('#handle_familySlider'+id).siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
		//$(secondoFiglio).css('color','#003F63').css('font-weight','bold').css('margin-left', '-25px');
		$('#familySlider'+id+' option:eq(1)').attr('selected', true);
			$('#familySlider'+id+' option:eq(0)').attr('selected', false);
	}
	
</script>
<h3 class="titleSection">
	
	
	
	








		
			Parental Control
		
		
		
		
			<span style="width: 16px;">
				




	
	<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Pannello di controllo&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/fe/img/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







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

			</span>
			<span style="clear: right;">&nbsp;</span>
			


</h3>
<input type="hidden" name="formModificata" value="Familysafe">


<div id="datiFamilysafe">
	<div class="form-group clearfix">
		<div class="col-xs-11">
			
			
				
					
				
			
				
					
				
			
				
					
				
			
				
					
				
			
				
					
				
			
				
					
				
			
			
				
				
					La carta è disabilitata per gli utilizzi nelle seguenti categorie merceologiche: 
				
			
			
				 - <span>Giochi e scommesse </span>
				
			
				 - <span>Alcolici e tabacchi </span>
				
			
				 - <span>Farmaci </span>
				
			
				 - <span>Vendite telefoniche e postali </span>
				
			
				 - <span>Organizzazioni politiche </span>
				
			
				 - <span>Vendite porta a porta </span>
				
			
		</div>
		<div class="col-xs-1">
			
				
				
					<a href="javascript:mostraDivModifica('Familysafe')" class="btnSelezioneOpen pull-right" id="btnRicerca"></a>
				
			
		</div>
	</div>
</div>

<div class="divForm boxContent" id="inputFamilysafe" style="display: none; margin-bottom: 10px;">
	<div class="form-group clearfix">
		<div class="col-xs-11">
			Tramite questa funzione hai la possibilità di inibire l'utilizzo della carta su alcune categorie di esercenti. <br>Seleziona quelle che desideri abilitare/disabilitare:
		</div>
		<div class="col-xs-1">
		<a href="javascript:nascondiDivModifica('Familysafe')" class="btnSelezioneClose pull-right"></a>
		</div>
		
			
	
			<div class="col-sm-4 col-xs-12 right-on-off">
				<div class="col-xs-10 col-xs-offset-1 clear-padding">
					<label class="control-label col-xs-8">Giochi e scommesse</label>
					<div class="col-xs-4" style="margin-top:10px;margin-left:10px;width:50px; height: 50px;">
						<select name="parametriFamilySafe[0].flagAbilitazione" id="familySlider0" style="display: none;">
							<option value="N" selected="selected">Off</option>
							<option value="S" class="attivo">On</option>
						</select>
					</div>
					<input type="hidden" name="parametriFamilySafe[0].codFamiglia" value="01">
					<input type="hidden" name="parametriFamilySafe[0].descFamiglia" value="Giochi e scommesse">
				</div>
			</div>
		
			
	
			<div class="col-sm-4 col-xs-12">
				<div class="col-xs-10 col-xs-offset-1 clear-padding">
					<label class="control-label col-xs-8">Alcolici e tabacchi</label>
					<div class="col-xs-4" style="margin-top:10px;margin-left:10px;width:50px; height: 50px;">
						<select name="parametriFamilySafe[1].flagAbilitazione" id="familySlider1" style="display: none;"><option value="S" class="attivo">On</option>
							<option value="N" selected="selected">Off</option></select>
					</div>
					<input type="hidden" name="parametriFamilySafe[1].codFamiglia" value="02">
					<input type="hidden" name="parametriFamilySafe[1].descFamiglia" value="Alcolici e tabacchi">
				</div>
			</div>
		
			
	
			<div class="col-sm-4 col-xs-12">
				<div class="col-xs-10 col-xs-offset-1 clear-padding">
					<label class="control-label col-xs-8">Farmaci</label>
					<div class="col-xs-4" style="margin-top:10px;margin-left:10px;width:50px; height: 50px;">
						<select name="parametriFamilySafe[2].flagAbilitazione" id="familySlider2" style="display: none;"><option value="S" class="attivo">On</option>
							<option value="N" selected="selected">Off</option></select>
					</div>
					<input type="hidden" name="parametriFamilySafe[2].codFamiglia" value="04">
					<input type="hidden" name="parametriFamilySafe[2].descFamiglia" value="Farmaci">
				</div>
			</div>
		
			
	
			<div class="col-sm-4 col-xs-12">
				<div class="col-xs-10 col-xs-offset-1 clear-padding">
					<label class="control-label col-xs-8">Vendite telefoniche e postali</label>
					<div class="col-xs-4" style="margin-top:10px;margin-left:10px;width:50px; height: 50px;">
						<select name="parametriFamilySafe[3].flagAbilitazione" id="familySlider3" style="display: none;"><option value="S" class="attivo">On</option>
							<option value="N" selected="selected">Off</option></select>
					</div>
					<input type="hidden" name="parametriFamilySafe[3].codFamiglia" value="05">
					<input type="hidden" name="parametriFamilySafe[3].descFamiglia" value="Vendite telefoniche e postali">
				</div>
			</div>
		
			
	
			<div class="col-sm-4 col-xs-12">
				<div class="col-xs-10 col-xs-offset-1 clear-padding">
					<label class="control-label col-xs-8">Organizzazioni politiche</label>
					<div class="col-xs-4" style="margin-top:10px;margin-left:10px;width:50px; height: 50px;">
						<select name="parametriFamilySafe[4].flagAbilitazione" id="familySlider4" style="display: none;"><option value="S" class="attivo">On</option>
							<option value="N" selected="selected">Off</option></select>
					</div>
					<input type="hidden" name="parametriFamilySafe[4].codFamiglia" value="06">
					<input type="hidden" name="parametriFamilySafe[4].descFamiglia" value="Organizzazioni politiche">
				</div>
			</div>
		
			
	
			<div class="col-sm-4 col-xs-12">
				<div class="col-xs-10 col-xs-offset-1 clear-padding">
					<label class="control-label col-xs-8">Vendite porta a porta</label>
					<div class="col-xs-4" style="margin-top:10px;margin-left:10px;width:50px; height: 50px;">
						<select name="parametriFamilySafe[5].flagAbilitazione" id="familySlider5" style="display: none;"><option value="S" class="attivo">On</option>
							<option value="N" selected="selected">Off</option></select>
					</div>
					<input type="hidden" name="parametriFamilySafe[5].codFamiglia" value="07">
					<input type="hidden" name="parametriFamilySafe[5].descFamiglia" value="Vendite porta a porta">
				</div>
			</div>
		
	<div class="col-xs-12">
		Il servizio funziona sulla base della classificazione effettuata dalla banca dell'esercente: eventuali imprecisioni o errori relativi a tale classificazione potrebbero pertanto comprometterne il buon funzionamento.
	</div></div>

	
	<div class="pull-right margin-bottom20">
	<div class="actions">


		<input type="submit" value="Conferma" class="btn btn-primary execute disabled" alt="Conferma">
	</div></div>
</div>
			</form>
		</div>

	
	
</div>