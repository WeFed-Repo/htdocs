					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							10/03/2017	
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
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: Ricarica automatica YouCard&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






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
		<form id="formAutoricarica" method="post" action="/WEBHT/cartaConto/autoricarica.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
				
				
				







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
				<!-- COGNOME NOME -->

				
					
						Cognome Nome
					
					
				
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
			    	MILANO &nbsp;-&nbsp; 2070
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
					<td>*9130
					</td>
					<td>MILANO&nbsp;-&nbsp; 2070</td>
					<td>COGNOME NOME
					</td>
				</tr></tbody>
	</table></div>
</div>
</div>
</div>
		</form>
<div class="col-sm-6 col-xs-12 clearfix margin-top10">	
<form id="formAutoricaricaTempo" method="post" action="/WEBHT/cartaConto/autoricaricaTempo.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
	<input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
	<input type="hidden" name="importo" value="">
	<input type="hidden" name="frequenza" value="">
	<input type="hidden" name="giornoRicarica" value="">
	<div class="innerBoxWhite clearfix col-xs-12" style="height: 210px;">
		<h1 class="boxTitle txt_center">
			
			








		
			Ricarica a tempo
		
		
		
		


 			
		</h1>
		
			
			
				<div style="min-height:150px;">
					<div class="col-xs-9">
						Nessuna ricarica automatica a tempo impostata
					</div>
					<div class="col-xs-3">
						<img src="/HT/IMAGES/nGrafica/ricarica-tempo.png" class="col-xs-12" title="Ricarica a tempo" alt="Ricarica a tempo">
					</div>
				</div>
			
		
		
			
			
				<div class="col-xs-12 oCenter margin-bottom20 bottom right5">
					
					<input type="submit" name="compilazione" value="Imposta" class="btn btn-primary" alt="Imposta">
				</div>
			
		

	</div>
</form>
</div>
<div class="col-sm-6 col-xs-12 clearfix margin-top10">	
<form id="formAutoricaricaSoglia" method="post" action="/WEBHT/cartaConto/autoricaricaSoglia.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="da6fe0a2c65f399b924b1fb0b4765f06"></div>
	<input type="hidden" name="codContoCorrente" value="001|0898|089800911819">
	<input type="hidden" name="importoSoglia" value="">
	<input type="hidden" name="importoTarget" value="">
	<input type="hidden" name="tipoLimite" value="">
	<input type="hidden" name="numeroAutoricariche" value="">
	<div class="innerBoxWhite margin-right10 clearfix col-xs-12" style="height: 210px;">
		<div class="col-xs-12 clearfix">	
			<h1 class="boxTitle txt_center">
				
				








		
			Ricarica a soglia
		
		
		
		


	 			
			</h1>
			
				
				
					<div style="min-height:150px;">
					<div class="col-xs-9">
						Nessuna ricarica automatica a soglia impostata
					</div>
					<div class="col-xs-3">
						<img src="/HT/IMAGES/nGrafica/ricarica-soglia.png" class="col-xs-12" title="Ricarica a soglia" alt="Ricarica a soglia">
					</div>
					</div>
				
			
		</div>
			
				
		    	
		    		<div class="col-xs-12 oCenter margin-bottom20 bottom right5">
						
						<input type="submit" value="Imposta" class="btn btn-primary" alt="Imposta">
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