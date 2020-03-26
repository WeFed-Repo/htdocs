					





						 
						<div class="visible-print-block"> 
							<img src="/HT/fe/img/logo_bancobpm@2x.png" title="Torna all'homepage" alt="Torna all'homepage">
							<div class="pull-right">
								  
								14/07/2017	
							</div>
						</div>
						

						

						



<div class="riquadro clearfix">
	
	









<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
			
			
				<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
			
		
		
			
		
		
			
		
			
				
 					<span>Ricarica automatica</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/WEBHB/help/page.do?id=609')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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



		
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
	
	







	



	<div class="section clearfix">
		<form id="formAutoricarica" method="post" action="/WEBHB/cartaConto/autoricarica.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d1f0dd0cb8a331b2e9d1aa254ec41941"></div>
				
				
				







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
	//	$('#labelIntestatario').addClass('hide');
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
					
						
						
							<td class="hidden sorting_1">&nbsp;</td>
						
					
					<td>YouCard
					</td>
					<td>*6534
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




<div class="col-sm-6 col-xs-12 clearfix margin-top10">	
<form id="formAutoricaricaTempo" method="post" action="/WEBHB/cartaConto/autoricaricaTempo.do" class="form-horizontal">
	<div style="display:none">
		<input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="d1f0dd0cb8a331b2e9d1aa254ec41941">
	</div>
	<input type="hidden" name="codContoCorrente" value="001|0898|089800115927">
	<input type="hidden" name="importo" value="10">
	<input type="hidden" name="frequenza" value="M">
	<input type="hidden" name="giornoRicarica" value="10">
	<div class="innerBoxWhite clearfix col-xs-12" style="height: 200px;">
		<h1 class="boxTitle txt_center">
			Ricarica a tempo
			<input type="image" name="modifica" src="/HT/fe/img/i_modifica.gif" class="imgBlock pull-right" title="Modifica autoricarica" alt="Modifica autoricarica"> 
			<input type="image" name="cancella" src="/HT/fe/img/i_cancella.gif" class="imgBlock pull-right" title="Cancella autoricarica" alt="Cancella autoricarica">
		</h1>
		
			
		<div style="min-height:150px;">
			<div class="col-xs-12">
				Hai scelto di effettuare una ricarica:
			</div>
			<div class="col-xs-12">
				<div style="margin-top:10px;line-height: 1.5em;">
					di importo pari a
					<span class="sm-float-r"><b>10,00 EUR</b></span>
					<br>
					con una frequenza
					<span class="sm-float-r"><b>Mensile</b></span>
					<br>
					ogni
					<span class="sm-float-r"><b>Dieci del mese</b></span>
				</div>	
			</div>
		</div>
			
			
		

							
		<div class="row bottom">
			<div class="form-field-resume">
				<label class="control-label">
					Conto di addebito:
				</label>
				<span class="resume">
					00174456 - SEDE DI LODI - 2001 intestato a TALLO MAURO LUCA
				</span>
			</div>
		</div>
			
			
		

	</div>
</form>
</div>
<div class="col-sm-6 col-xs-12 clearfix margin-top10">	
<form id="formAutoricaricaSoglia" method="post" action="/WEBHB/cartaConto/autoricaricaSoglia.do" class="form-horizontal">
	<input type="hidden" name="codContoCorrente" value="001|0898|089800115927">
	<input type="hidden" name="importoSoglia" value="10">
	<input type="hidden" name="importoTarget" value="40">
	<input type="hidden" name="tipoLimite" value="S">
	<input type="hidden" name="numeroAutoricariche" value="4">
	<div class="innerBoxWhite margin-right10 clearfix col-xs-12" style="height: 200px;">
		<div class="col-xs-12 clearfix">	
			<h1 class="boxTitle txt_center">
				
				








		
			Ricarica a soglia
		
		
		
		


	 			
		 			<input type="image" name="modifica" src="/HT/fe/img/i_modifica.gif" class="imgBlock pull-right" title="Modifica autoricarica" alt="Modifica autoricarica"> 
					<input type="image" name="cancella" src="/HT/fe/img/i_cancella.gif" class="imgBlock pull-right" title="Cancella autoricarica" alt="Cancella autoricarica">
				
			</h1>
			
				
	<div style="min-height:180px;">
		<div class="col-xs-12">
			Hai scelto di effettuare una ricarica:
		</div>
		<div class="col-xs-12">
			<div style="margin-top:10px;line-height: 1.5em;">
				quando il saldo scende sotto
				<span class="sm-float-r"><b>10,00</b></span>
				<br>
				per riportare il saldo a
				<span class="sm-float-r"><b>40,00</b></span>
				<br>
				Nel mese verranno effettuate al massimo <strong>4</strong> ricariche				
			</div>
		</div>
 	</div>
				
				
			
</div>
			
				
<div class="row bottom">
	<div class="form-field-resume">
		<label class="control-label">
			Conto di addebito:
		</label>
		<span class="resume">
			00174456 - SEDE DI LODI - 2001 intestato a TALLO MAURO LUCA
		</span>
	</div>
</div>
		    	
		    	
		    
	</div>
</form>
</div>
</div>
</div>


<script type="text/javascript">

$(document).ready(function(){
	var height = 200 , width = 0;
	
	$('.innerBoxWhite').each(function(){
		if($(this).height()>height){
			height = $(this).height();
		}
		if($(this).width()>width){
			width = $(this).width();
		}
	});
	
	$('.innerBoxWhite').each(function(){
		/*$(this).width(width);*/
		$(this).height(height);
	});
});
</script>

						
