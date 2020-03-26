					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
						</div>
					</div>
					
					
					








<script type="text/javascript">
	$(document).ready(function() 
	{
		var value=$('#mostraPasswordParameter').val();
		var bool_value = value == "true" ? true : false
		$('#mostraPassword').attr('checked',bool_value);
		cambiaMostraPassword();
	});
	
	function resetCheckbox(){
		$('#mostraPassword').attr('checked', false);
		cambiaMostraPassword();
	}
	
	function cambiaMostraPassword()
	{
		var value = $('#mostraPassword').is(':checked');
		cambiaValori(value, 'attuale');
		cambiaValori(value, 'nuova');
		cambiaValori(value, 'conferma');
	}
	function cambiaValori(checked, prefix)
	{ 
		if (checked)
		{
			$('#'+prefix+'Pwd').prop('disabled',true);
			$('#'+prefix+'Text').prop('disabled',false);
			var value = $('#'+prefix+'Pwd').val();
			$('#'+prefix+'Pwd').val('');
			$('#'+prefix+'Text').val(value);
			$('#'+prefix+'Pwd').hide();
			$('#'+prefix+'Text').show();
		}
		else
		{
			$('#'+prefix+'Text').prop('disabled',true);
			$('#'+prefix+'Pwd').prop('disabled',false);
			var value = $('#'+prefix+'Text').val();
			$('#'+prefix+'Text').val('');
			$('#'+prefix+'Pwd').val(value);
			$('#'+prefix+'Text').hide();
			$('#'+prefix+'Pwd').show();
		}
	}
	function settaValoreCheckbox()
	{
		var value = $('#mostraPassword').is(':checked');
		$('#mostraPasswordParameter').val(value);
	}
	function suppressNonNumericInput(event)
	{
	    /*  caratteri ammessi: 
	    	8 					--> backspace
	    	46 					--> delete
	    	9 					--> tab
	    	9 + shift			--> shift + tab
	    	>=35 && <=40		--> arrow keys/home/end
	    	>=48 && <=57 		--> numbers on keyboard
	    	>=96 && <=105		--> numbers on keypad
	    */
	    if (event.altKey || event.ctrlKey || (event.shiftKey && !event.keyCode == 9))
	    	 preventDefault(event);
	   	else if (!(event.keyCode == 8  || event.keyCode == 46 || event.keyCode == 9  ||
		         (event.keyCode >= 35 && event.keyCode <= 40 && !event.shiftKey)  ||
		         (event.keyCode >= 48 && event.keyCode <= 57 && !event.shiftKey)  ||
		         (event.keyCode >= 96 && event.keyCode <= 105 && !event.shiftKey))) 
	    	preventDefault(event);
	}
	function preventDefault(event)
	{
	    if(event.preventDefault)
	        event.preventDefault();
	    else
	        event.returnValue = false;
	}
	/*FUNZIONE RICHIAMATA DALLA JSP selezioneCartaMovimentiForm.jsp. NON OCCORRE METTERE DEL CODICE*/
	function cambioCarta(values){}
</script>

	<form id="formCambioPinCarta" method="post" action="/WEBHT/cartaConto/cambioPinCartaConferma.do" class="form-horizontal" onreset="resetCheckbox()"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
<div class="riquadro clearfix">
		
		
		
		




	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
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
		
				
				<div class="hidden-print hidden-xxs flag cambioPin">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
				
 					<span>Cambio PIN carta</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: cambio pin carta&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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

	








	


	

	<div class="section clearfix">
		







 


	



<script type="text/javascript">
	
function movimentiCarteselectionInit(submitOnClick, search, pagination) {
	var contoSelezionato;

	if ($('.tabSelezioneCC table').length > 0) {
		$('.tabSelezioneCC').hide();
		$('.tabSelezioneCC table').dataTable({
			"paging" : pagination,
			"ordering" : true,
			"info" : false,
			"searching" : false,
			"pagingType" : "simple_numbers",
			"lengthMenu" : [ [ 8, 24, 32, -1 ], [ 8, 24, 32, "Tutti" ] ],
			"language" : {
				"lengthMenu" : "Mostra _MENU_ risultati per pagina",
				"zeroRecords" : "Nessun risultato trovato",
				"info" : "Pagina _PAGE_ di _PAGES_",
				"infoEmpty" : "Nessun record trovato",
				"infoFiltered" : "(filtered from _MAX_ total records)",
				"search" : "Cerca",
				"paginate" : {
					"first" : "Prima",
					"last" : "Ultima",
					"next" : "Succ.",
					"previous" : "Prec."
				},
				"aria" : {
					"sortAscending" : ": ordinamento crescente",
					"sortDescending" : ": ordinamento decrescente"
				}
			}
		});

		$('.btnSelezioneCC').click(function() {
			var that = $(this);
			if (!that.hasClass('open'))
				$('.tabSelezioneCC').slideDown(200);
			else
				$('.tabSelezioneCC').slideUp(300);

			that.toggleClass('open');
		});

		$('.tabSelezioneCC table').on('mouseenter', 'tr', function() {
			$(this).addClass('hover');
		});
		$('.tabSelezioneCC table').on('mouseleave', 'tr', function() {
			$(this).removeClass('hover');
		});

		// se non presente la selezione con submit al click
		if (!submitOnClick) {
			$('.tabSelezioneCC table tbody').on(
				'click',
				'tr',
				function() {
	
					var ctx = $(this).parentsUntil('.selezioneCC').parent();
					$('input[type="radio"]', $(this).parent()).removeAttr('checked');
					$('input[type="radio"]', this).attr("checked","checked");
					contoSelezionato = initContoSelezionato(this);
					popolaSelezioneCC(contoSelezionato, ctx);
					cambioCarta($('input[id="par"]', $(this)).val());
					$('.btnSelezioneCC', ctx).removeClass('open');
					$('.tabSelezioneCC', ctx).slideUp(300);
			});
		} else {
			//riga selezionata
			var tr = $("input[name='codContoCorrente']:checked").closest('tr');			
			//popolo con i dati nella riga
			contoSelezionato = initContoSelezionato(tr);
			popolaSelezioneCC(contoSelezionato);

			$('.tabSelezioneCC table tbody').on('click','tr',
				function() {
					$('input[type="radio"]', $(this).parent()).removeAttr('checked');
					$('input[type="radio"]', this).attr("checked","checked");
					$('input[type="radio"]', this).closest("form").submit();
				});
		}
	}
}
	
	
	$(document).ready(function(){

	var submitOnClick = false;
	var str = $('#intestazione').text();
	if($.trim(str).length>26){
		$('#intestazione').removeClass('col-xs-6');
		$('#intestazione').addClass('col-xs-10');
		$('#labelIntestatario').addClass('hide');
	}
	
	//se il conto è gia stato selezionato devo popolarlo via javascript, il default non va bene
		var tr = $("input[name='codContoCorrente']:checked").closest('tr');		
		//popolo con i dati nella riga
		contoSelezionato = initContoSelezionato(tr);
		popolaSelezioneCC(contoSelezionato);
		
	
		
		
			var par = $(tr).find("input#par").val();
			cambioCarta(par);
		
		 
	
		
			movimentiCarteselectionInit(submitOnClick, false, false);
		
		
	
	
		});
</script>


<h3 class="titleSection">
	
	








		
			Seleziona la carta
		
		
		
		


</h3>

<div class="selezioneCC tabellaSelezioneCC"> 
	<div class="CCselezionato clearfix">
		
					

		<div class="col-xs-12">
			<span class="col-sm-2 col-xs-4 clear-paddingImportant" id="labelIntestatario">
				Intestato a:
			</span>
			<span id="intestazione" class="col-xs-6 clear-paddingImportant">
			      		Cognome Nome
			      	</span> 
			<div class="col-sm-6 col-xs-12 clear-paddingImportant">
				<span class="col-xs-4 clear-paddingImportant">
					Tipo carta
				</span>
				<span id="conto" class="col-xs-6 clear-paddingImportant bold">
		      			YouCard
			      	</span>
				<span class="col-xs-4 clear-paddingImportant">
					Filiale 
				</span> 
			    <span id="agenzia" class="col-xs-6 clear-paddingImportant bold">
		         		MILANO&nbsp;-&nbsp;
		         		
		         		
		         			2070
		         		
	         			
	         			
		          	</span>
			</div>
			<div class="col-sm-6 col-xs-12 clear-paddingImportant">
				<span class="col-xs-4 clear-paddingImportant">
					Numero
				</span>
				<span id="numero" class="col-xs-6 clear-paddingImportant">
			      		*0000
			      	</span>
			</div>
		</div>

		
	</div>
	<div class="table-responsive tabSelezioneCC" style="display: none;">
		<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div id="DataTables_Table_10_wrapper" class="dataTables_wrapper no-footer"><table class="table table-striped dataTable no-footer" id="DataTables_Table_10" role="grid">
	
		
			<thead>
				<tr role="row"><th class="hidden sorting_asc" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-sort="ascending" aria-label="&amp;nbsp;: ordinamento decrescente" style="width: 0px;">&nbsp;</th><th headers="tipoRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Tipo carta
					: ordinamento crescente" style="width: 0px;">Tipo carta
					</th><th headers="ccRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Numero
					: ordinamento crescente" style="width: 0px;">Numero
					</th><th headers="filialeRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Filiale
					: ordinamento crescente" style="width: 0px;">Filiale
					</th><th headers="intestazioneRapporto" class="sorting" tabindex="0" aria-controls="DataTables_Table_10" rowspan="1" colspan="1" aria-label="Intestazione
					: ordinamento crescente" style="width: 0px;">Intestazione
					</th></tr>
			</thead>
		
		<tbody>

			
				
			
		<tr role="row" class="odd">
				
					
						
						
							<td class="hidden sorting_1" style="text-align: center">
								<input type="radio" name="codContoCorrente" value="001|0898|089800911819" checked="checked">
								<input id="par" type="hidden" value="false,true,false">
							</td>
						
					

			      	<td headers="tipoRapporto" style="text-align: left;">
		      			YouCard
			      	</td>
			      	<td headers="ccRapporto" style="text-align: center;">
			      		*0000
			      	</td>
			      	<td headers="filialeRapporto" style="text-align: center;">
		         		MILANO&nbsp;-&nbsp;
		         		
		         		
		         			2070
		         		
	         			
	         			
		          	</td>
			      	<td headers="intestazioneRapporto" style="text-align: center">
			      		Cognome Nome
			      	</td>
				</tr></tbody>
	</table></div>
</div>
</div>
</div>
	</div>
	<div class="section clearfix">
		<h3 class="titleSection">
			
			
			
			








		
			Inserisci dati
		
		
		
		
			<span style="width: 16px;">
				




	
	<a href="javascript:OpenHelp('/WEBHT/help/page.do?id=569#inserisciDati')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
	







<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>

			</span>
			<span style="clear: right;">&nbsp;</span>
			


		</h3>
		<div class="form-horizontal">
			<div class="form-group margin-bottom10">
				<div class="form-field-input col-sm-4 col-xs-12">
					<label for="attualePwd" class="control-label">
						PIN originario
							<a href="#" onclick="javascript:ApriPopup('/HT/IMAGES/CARTE/FacSimilePINYouCard.gif',550,350,'popup')" class="hidden-xs">
								<img src="/HT/fe/img/i_dettaglio.gif" height="14" width="14" style="text-align:right" class="margin-left20" title="Dettaglio" alt="Dettaglio">
							</a>
					</label>
					<div class="form-field">
						<input type="password" name="oldPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="attualePwd" style="float:left;margin-right:10px" class="form-control w-auto">
						<input type="text" name="oldPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="attualeText" style="float: left; margin-right: 10px; display: none;" class="form-control w-auto" disabled="">
					</div>
					<div class="form-field" style="clear:both">
						<input type="checkbox" id="mostraPassword" onclick="settaValoreCheckbox();cambiaMostraPassword();" style="vertical-align: middle;">
						Mostra PIN
					</div>
				</div>
				<div class="form-field-input col-sm-4 col-xs-12">
					<div class="form-field">
						<input name="mostraPwd" value="false" type="hidden" id="mostraPasswordParameter">
					</div>
				
					<label for="nuovaPwd" class="control-label"> PIN nuovo </label>
					<div class="form-field">
						<input type="password" name="newPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="nuovaPwd" class="form-control w-auto">
						<input type="text" name="newPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="nuovaText" class="form-control w-auto" disabled="" style="display: none;">
					</div>
					<div class="form-field" style="font-style: italic;clear:both">
						(inserisci solo valori numerici)
					</div>
				</div>
				<div class="form-field-input col-sm-4 col-xs-12">
					<label for="confermaPwd" class="control-label"> Conferma PIN nuovo </label>
					<div class="form-field">
						<input type="password" name="reNewPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="confermaPwd" class="form-control w-auto">
						<input type="text" name="reNewPwd" maxlength="5" size="20" value="" onkeydown="suppressNonNumericInput(event);" id="confermaText" class="form-control w-auto" disabled="" style="display: none;">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="pull-right margin-bottom20">
		
	<input type="reset" name="annulla" value="Annulla" class="btn  btn-primary" alt="Annulla">
	
	<input type="submit" name="conferma" value="Avanti" class="btn  btn-primary" alt="Avanti">
</div>	
</form>