<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Riepilogo F23</title>
</head>
	<body>
	<div class="wrapper"> 
	<form name="f23MainForm" method="post" action="/sapef23/f23/spedisciModello.do"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="e6404c5fbcdd9599c40ea0fa9dc4b7d2">

	
	
		<div style="height: 7px; box-shadow: inset 0px 8px 8px -7px rgba(0,0,0,0.5)">&nbsp;</div>
		<div class="container">
			<ol class="breadcrumb	pull-right">					  		  
			  
			  		<li>Pagamenti</li>
						<li>Riepilogo F23</li>
							
			</ol>
		</div>
	
		<div class="main row">
			<div class="container">
				<div id="mainContent" class="center	col-xs-12	col-sm-12	col-md-12	col-lg-12">
					<div class="riquadro clearfix">						
							<div class="clearfix">
								<div class="flag pagamentoF23">&nbsp;</div>
								<h1>Riepilogo	F23</h1>
							</div>

							














	  

	  

	  

	  

	  
							








							










	<script type="text/javascript">        
	    function focusDate(campo) {
	    	if (campo.value == 'gg/mm/aaaa') {
	    		campo.value = '';
	    	}
	    }
	    
	    function blurDate(campo) {
	      if (campo.value == '') {
	    		campo.value = 'gg/mm/aaaa';
	    	}
	    }    
	</script>

	<input type="hidden" name="aziendaSelezionata" value="0">
	<input type="hidden" name="tipoRiepilogo" value="riepilogo_f23_deleghe">
	






	


	







	<input type="hidden" name="erroreRiepilogo">


	
















<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker({ dateFormat: 'dd/mm/yy', minDate: '-10y', maxDate: '+364D', buttonImage: getPathImages() +'calendar.png'});
		$('.inviaF23riepilogo, .eliminaF23riepilogo, .revocaF23riepilogo').attr("disabled","disabled");
	});
</script>
<script type="text/javascript">

      function cercaModelli() {
    	  cercaModelliRiepilogoJS('/sapef23/f23/findDeleghe.do');
      }

      function getDelega(idx) {
          var action = '/sapef23/f23/impostaAzienda.do?id_chiamata=1568750534036_01IWF23_3YMBkyGEljatEvlr&idx=' + idx + '&openedFrom=listaDeleghe';
    	  getDelegaRiepilogoJS(action);
      }
      
      function getPdfDelega(idx, importo) {
    	  	 $('<form method="post" action="/sapef23/PdfStampaServlet">' +
    	  	   '<input type="hidden" name="tipoRiepilogo" value="riepilogo_f23_deleghe"/>' +
    	  	   '<input type="hidden" name="id" value="' + idx + '"/>' +
    	  	   '<input type="hidden" name="importoLetterePdf" value="' + digitation(importo,false) + '"/>' +
    	  	   '</form>').appendTo('body').submit();
      }

      function checkRadioFunctions(oppositeClass) {
    	  checkRadioFunctionsRiepilogoJS(oppositeClass);
  	  }
 
 </script>
 	<div class="section clearfix">
		<h3 class="titleSection">
			Criteri di ricerca
		</h3>
		
		<input type="hidden" name="id_chiamata" value="1568750534036_01IWF23_3YMBkyGEljatEvlr">

		<div class="bs-example">
			<div class="form-group">
					<div class="form-field-input col-md-2 col-lg-2 col-sm-2 col-xs-2">
						<label class="control-label">Data</label>
						<div class="form-field">
							<select name="tipoData" class="form-control"><option value="tipo_ricerca_inserimento">inserimento</option>
	              <option value="tipo_ricerca_scadenza" selected="selected">scadenza</option></select>
						</div>
					</div>
					<div class="form-field-input col-lg-4 col-md-5 col-sm-5 col-xs-5">
							<label class="control-label noPrint">&nbsp;</label>
						<div class="form-field">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								dal&nbsp;&nbsp;
								<input type="text" name="dataDa" maxlength="10" size="10" value="01/01/2019" onblur="blurDate(this);" onfocus="focusDate(this);" class="datepicker form-control dataRiep hasDatepicker" id="dp1568750666694"><img class="ui-datepicker-trigger" src="/librerie/youwebbusiness/sapef23/f23/images/calendar.png" alt="Calendario" title="Calendario">
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								al&nbsp;&nbsp;
								<input type="text" name="dataA" maxlength="10" size="10" value="30/09/2019" onblur="blurDate(this);" onfocus="focusDate(this);" class="datepicker form-control dataRiep hasDatepicker" id="dp1568750666695"><img class="ui-datepicker-trigger" src="/librerie/youwebbusiness/sapef23/f23/images/calendar.png" alt="Calendario" title="Calendario">
							</div>
						</div>
					</div>
					<div class="form-field-input col-md-4 col-lg-3 col-sm-4 col-xs-4">
						<label class="control-label">Stato</label>
						<div class="form-field">
							<div class="col-lg-7 col-md-8 col-sm-8 col-xs-8">
		            <select name="statoSelezionato" class="form-control"><option value="X" selected="selected">Tutti</option>
			            <option value="1">Delega da inviare</option>
			            <option value="0">Errata
/Da completare</option>
						<option value="3">Revocata da Cliente</option>
						<option value="7">Revocato da Banca</option>
						<option value="4">In pagamento</option>
						<option value="2">Trasmessa a Banca</option>
						<option value="6">Non contabilizzata</option>
						<option value="5">Contabilizzata</option>
						<option value="8">Respinta</option></select>
	          	</div>	       		
    				</div>
					</div>
					<div class="clearfix"></div>
				</div><!--form-group-->
			</div><!--bs-example-->
		</div><!--section clearfix-->
	</div><!--riquadro clearfix-->
	
	<div class="pull-right margin-bottom20">
		<input type="button" class="btn btn-primary" value="Ricerca" onclick="javascript: cercaModelli();">
	</div>
	<div class="clearfix"></div>
		
	  <input type="hidden" name="selectedRevoca">
	  <div style="display: none">
	  <input type="checkbox" name="checkedItems" style="display: none">
		</div>
	  
   	  
			
			
			
			



	








			
	<div class="riquadro clearfix">		
		<div class="section clearfix">
			<h3 class="titleSection">
				Risultato ricerca
			</h3>
			<div class="bs-example">
				<div class="tablePanel clearfix">
					<div class="table-responsive">
						<table class="table table-striped" role="grid">
							<tbody>
					        

				      		   <tr class="odd" role="row">
				      		    
						        		<td class="text-center">
						          		
							    	    </td>
							         	<td class="text-center">
					          		 		 
					          		  	  		<input name="checkedRevoca" class="radioRevocaInLista" type="radio" value="0" id="selRev_0" onclick="javascript: checkRadioFunctions('radioSelInLista');">
					          		 		<script>
					          		  		  $("input#selRev_0").on('ifChanged click', function(){
					          		  	   		document.f23MainForm.selectedRevoca.value='602';
					          		  		  });
					          		  	  </script>
						          		  	
						          		  	
								        </td>
						        	
						          <td class="text-center"><a href="javascript: getDelega(602);" title="Dettaglio">602</a></td>
						          <td>
						            <a href="javascript: getDelega(602);" title=" PROVA DEMO UNO DUE TREC                                     "> PROVA DEMO UNO DUE TREC                                     </a>
						          </td>
						          <td class="text-center">00503971202     </td>
						          <td class="text-center">
								        
									      	31-07-2019
									    	
						    	  	</td>
						          <td class="text-right">400.00</td>
						          <td class="text-center">13-03-2018</td>
								 			<td>
		  					       
		  					        
												
													Trasmessa a Banca

												
												
								        
							        	
										  </td>
						          <td class="text-center">
							          
										  </td>
								    </tr>
					        
									</tbody>
									<thead>
						        <tr role="row">
						          
							          <th>Sel.</th>
							          <th>Revoca</th>
						          
						          <th>ID</th>
						          <th>Contribuente</th>
						          <th>Codice fiscale P.I</th>
						          <th>Scadenza</th>
						          <th>Saldo</th>
						          <th>Inserimento</th>
						          <th>Stato</th>
						          <th>PDF</th>
						        </tr>
									</thead>
								</table>
								</div>
						 </div>
			 		</div>
			 </div>
 			














	</div><!--riquadro clearfix-->


      
	  


<script type="text/javascript">

	var selectedDelegaArray = document.f23MainForm.checkedItems;


function mostraErroriDelega(idx) {
	window.open('/sapef23/f23/impostaAzienda.do?id_chiamata=1568750534036_01IWF23_3YMBkyGEljatEvlr&popup=true&show=errors&idx=' + idx, 'erroriDelega' , 'width=700, height=200, resizable, scrollbars, toolbar=no , menubar=no, top=180, left=240');
}

function selezionaRevoca(idx) {
	document.f23MainForm.selectedRevoca.value = 'X';
}

function isAlmenoUnaDelegaSelezionata() {
	
		for (var i=0; i<selectedDelegaArray.length; i++) {
			if (selectedDelegaArray[i].checked) {
				return true;
			}
		}
	
	return false;
}

</script>









						
							
								 	
										















<script type="text/javascript">

	  function elimina() {
		  eliminaDaRiepilogoJS('/sapef23/f23/cancellaDelega.do?idDel=');
	  }

			
	      function invia() {
	    	  funzioniRiepilogoJS('/sapef23/f23/spedisciRiepilogo.do');
	      }
	
		  function revoca() {
			  revocaRiepilogoJS('/sapef23/f23/revocaModelli.do');
		  }
	

</script>

		<div class="pull-right margin-bottom20">
		  <input type="button" class="btn btn-primary eliminaF23riepilogo" value="Elimina" href="#" onclick="javascript: elimina();" disabled="disabled">
	    &nbsp;
	    
		    <input type="button" class="btn btn-primary inviaF23riepilogo" value="Invia" href="#" onclick="javascript: invia();" disabled="disabled">
				
					&nbsp;
					<input type="button" class="btn btn-primary revocaF23riepilogo" value="Revoca" href="#" onclick="javascript: revoca();" disabled="disabled">
		    
	    
	  </div>





								 
							
						
					
						
					</div><!--riquadro clearfix-->
				</div><!--center	col-xs-12	col-sm-12	col-md-12	col-lg-12-->
			</div><!--container-->
		</form></div><!--main row-->
</body>
</html>