<h2>Libretto assegni</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_assegni.php&responsive=y&liv0=1&liv1=1&liv2=9&liv3=0">richiesta</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_assegni2.php&responsive=y&liv0=1&liv1=1&liv2=9&liv3=0">attivazione</a></li>
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_assegni3.php&responsive=y&liv0=1&liv1=1&liv2=9&liv3=0">situazione assegni</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_assegni4.php&responsive=y&liv0=1&liv1=1&liv2=9&liv3=0">furto e smarrimento</a></li>
		</ul>
	</div>
	<div class="separator"></div>
</div>
<div id="box5ctntab3" style="visibility: visible;">
		<div class="fooform" id="id_aggiorna_tab" style="display:none;"></div>

	
	













  


     <section>
     	<div class="tithelp">
			<h4>Risultati ricerca</h4>
			<div class="flRight"><a href="#1" class="no-underline btn-icon" data-toggle="modal" data-target="#helpAssegni">
				<i class="icon icon-info_fill icon-2x"></i></a><br class="clear">
			</div>
		</div>

 		<div id="idtabAssegni">
			<table id="tb-paniere" cellspacing="0" cellpadding="0" data-toggle="table" class="table table-hover">
				<thead>
					<tr>
						<th data-field="libretto" class="left">N&deg; Libretto</th>
						<th data-field="valuta" class="left">Valuta</th>				
						<th data-field="dataAssegno" class="center">Data</th>
				
                  			<th data-field="ass0" class="center">1</th>
              	
                  			<th data-field="ass1" class="center">2</th>
              	
                  			<th data-field="ass2" class="center">3</th>
              	
                  			<th data-field="ass3" class="center">4</th>
              	
                  			<th data-field="ass4" class="center">5</th>
              	
                  			<th data-field="ass5" class="center">6</th>
              	
                  			<th data-field="ass6" class="center">7</th>
              	
                  			<th data-field="ass7" class="center">8</th>
              	
                  			<th data-field="ass8" class="center">9</th>
              	
                  			<th data-field="ass9" class="center">0</th>
              	
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>	
	
		<script type="text/javascript">

		var dataED = [
			
		    	{
		    	"libretto": "111111111"
		    	,"valuta": "Euro"
		    	,"dataAssegno": "16/03/2015"
		    	    		
		    		,"ass0": "Lib"

		    	    		
		    		,"ass1": "Pag"

		    	    		
		    		,"ass2": "Ferm"

		    	    		
		    		,"ass3": "Imp"

		    	    		
		    		,"ass4": "Canc"

		    	    		
		    		,"ass5": "Da att"

		    	    		
		    		,"ass6": "Smarr"

		    	    		
		    		,"ass7": "Rev"

		    	    		
		    		,"ass8": "Prot"

		    	    		
		    		,"ass9": "Al pro"

		    
		    	}   
		    	,
		
		    	{
		    	"libretto": "222222222"
		    	,"valuta": "Euro"
		    	,"dataAssegno": "16/11/2012"
		    	    		
		    		,"ass0": "Smarr"

		    	    		
		    		,"ass1": "Smarr"

		    	    		
		    		,"ass2": "Smarr"

		    	    		
		    		,"ass3": "Smarr"

		    	    		
		    		,"ass4": "Smarr"

		    	    		
		    		,"ass5": "Smarr"

		    	    		
		    		,"ass6": "Smarr"

		    	    		
		    		,"ass7": "Smarr"

		    	    		
		    		,"ass8": "Smarr"

		    	    		
		    		,"ass9": "Smarr"

		    
		    	}   
		    	,
		
		    	{
		    	"libretto": "333333333"
		    	,"valuta": "Euro"
		    	,"dataAssegno": "26/03/2008"
		    	    		
		    		,"ass0": "Impa"

		    	    		
		    		,"ass1": "Impa"

		    	    		
		    		,"ass2": "Impa"

		    	    		
		    		,"ass3": "Impa"

		    	    		
		    		,"ass4": "Impa"

		    	    		
		    		,"ass5": "Impa"

		    	    		
		    		,"ass6": "Impa"

		    	    		
		    		,"ass7": "Impa"

		    	    		
		    		,"ass8": "Impa"

		    	    		
		    		,"ass9": "Impa"

		    
		    	}   
		    	,
		
		    	{
		    	"libretto": "444444444"
		    	,"valuta": "Euro"
		    	,"dataAssegno": "26/03/2008"
		    	    		
		    		,"ass0": "Pag"

		    	    		
		    		,"ass1": "Pag"

		    	    		
		    		,"ass2": "Pag"

		    	    		
		    		,"ass3": "Pag"

		    	    		
		    		,"ass4": "Pag"

		    	    		
		    		,"ass5": "Pag"

		    	    		
		    		,"ass6": "Pag"

		    	    		
		    		,"ass7": "Pag"

		    	    		
		    		,"ass8": "Pag"

		    	    		
		    		,"ass9": "Lib"

		    
		    	}   
		    	,
		
		];

//		Crea la tabella paginabile
		$(function () {
			$tabED = $('#tb-paniere');
        	$tabED.bootstrapTable('destroy');
        	$tabED.bootstrapTable({
        		data: dataED,
				pagination : "true",
				pageSize: 15,
				pageList: [15, 30, 60, 'tutti'],
				rowStyle: function(row, index) {
        				
					if(index % 2 == 0)	{
						return {
	        				classes: 'dispari'
	        			}
	        		}
	        		else {
	        			return {
	        				classes: 'pari'
	        			}
	        		}
				}
        	});
		});
</script> 
		</div>
	</section>     
	


	<section>
		<div class="form-group btnWrapper">
	        <div class="btn-align-right">
	            <button class="btn btn-primary" type="button" onclick="javascript:history.back();">nuova ricerca</button>
	        </div>
	        <div class="clear"></div>
	    </div>
	</section>  

	
<div class="modal fade" id="helpAssegni" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Situazione assegni</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">		
							Tramite questa funzione puoi visualizzare lo stato dei tuoi assegni.<br>
							Nella lista assegni sono evidenziate le seguenti informazioni:
							<ul>
								<li>N&deg; Libretto: numero del libretto assegni</li>
								<li>Valuta: valuta del conto corrente di appoggio</li>
								<li>Data: data di emissione del libretto assegni</li>
								<li>Stato assegni: pu&ograve; presentare &nbsp;le seguenti opzioni</li>
							</ul>
							<br>
							- <strong>LIBERO</strong>: l'assegno &egrave; ancora utilizzabile;<br>
							- <strong>PAGATO</strong>: l'assegno &egrave; gi&agrave; stato utilizzato e incassato dal beneficiario;<br>
							- <strong>FERMATO</strong>: l'assegno &egrave; stato bloccato per cui non pu&ograve; essere incassato;<br>
							- <strong>IMPEGNATO</strong>: l'assegno &egrave; in attesa di essere incassato dall'agenzia del creditore;<br>
							- <strong>CANCELLATO</strong>: l'assegno &egrave; stato annullato per cui non &egrave; pi&ugrave; in circolazione;<br>
							
							- <strong>DA ATTIVARE</strong>: l'assegno &egrave; in attesa di essere attivato;<br>
							- <strong>SMARRITO/SOTTRATTO</strong>: l'assegno &egrave; stato smarrito o sottratto;<br>
							- <strong>REVOCA</strong>: l'assegno &egrave; stato revocato;<br>
							- <strong>PROTESTATO</strong>: l'assegno &egrave; stato protestato;<br>
							- <strong>AL PROTESTO</strong>: l'assegno &egrave; stato inviato al protesto;<br>
							- <strong>IMPAGATO</strong>: l'assegno &egrave; stato emesso senza copertura sul conto  e/o presenta dati errati.

							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	  