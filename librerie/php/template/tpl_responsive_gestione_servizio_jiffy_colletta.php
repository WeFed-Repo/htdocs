<h2>Gestione servizio</h2>

<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li>
				<a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Movimenti</a>
			</li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_pagamenti.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Invia pagamento</a></li>
			<li class="on"><a href="#">Colletta</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_jiffy_impostazioni.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Impostazioni</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">

<section>
	<p>
		In questa pagina puoi creare una colletta, ovvero una raccolta di denaro online tra un gruppo di persone.
	</p>
	<ul>
		<li>
			<strong>Definisci</strong> l'obiettivo della colletta: l'<strong>importo</strong> da raggiungere e il nome
		</li>
		<li>
			<strong>Invita</strong> amici, familiari e conoscenti a partecipare versando la loro quota (massimo 20 partecipanti)
		</li>
		<li>
			Tieni sotto controllo e aggiorna l'<strong>andamento</strong> della colletta.
		</li>
	</ul>
</section>

<!-- FORM CREA UNA COLLETTA -->
<section>
	<h4>Crea una colletta</h4>
	<form class="formGenerico borderFormRounded" role="form" id="">
	<div class="form-group">			
		
		<div class="row">
			<div class="col-sm-12">
				<h4>Scegli un obiettivo</h4>
			</div>
		</div>


		<div class="row">
			<div class="col-sm-6">
				<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="L'importo totale sar&agrave; diviso in parti uguali secondo il numero dei partecipanti" data-original-title="" title="">Importo*</label>
				<div class="editable-input">
					<input type="text" name="" class="form-control clear-x">
						<span class="editable-clear-x" style="display: block;">
							<i class="icon icon-close icon-1x"></i>
						</span>
				</div>
			</div>
			<div class="col-sm-6">
				<label class="control-label">Nome*</label>
				<div class="editable-input">
					<input type="text" name="" class="form-control clear-x">
						<span class="editable-clear-x" style="display: block;">
							<i class="icon icon-close icon-1x"></i>
						</span>
				</div>
			</div>
		</div>

	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<div class="checkbox">
   					<label class="textWrapper">
	         			<input type="checkbox" name="" id="">
	          			<span class="text">Includi me stesso nella colletta</span>
	        		</label>
 				</div>
			</div>
		</div>
	</div>
	
	<!-- SEZIONE CHE VIENE REPLICATA -->	
	
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<h4>Partecipanti</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Nome partecipante*</label>
   	 				<select name="" class="form-control" id="">
						<option>Franco Rossi</option>
						<option>Topolino</option>
						<option>Pluto</option>
   	 				</select>	
			</div>
		</div>
	</div>
		
	<div class="form-group">	
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Telefono partecipante</label>
				<div class="editable-input">
					<input type="text" name="" class="form-control clear-x">
						<span class="editable-clear-x" style="display: block;">
							<i class="icon icon-close icon-1x"></i>
						</span>
				</div>
			</div>
			<div class="col-sm-6">
				<label class="control-label">Email partecipante</label>
				<div class="editable-input">
					<input type="text" name="" class="form-control clear-x">
						<span class="editable-clear-x" style="display: block;">
							<i class="icon icon-close icon-1x"></i>
						</span>
				</div>
			</div>
		</div>
	</div>

<!-- -->
<span id="aggiungi" style="display:none">
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<h4>Partecipanti</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Nome partecipante*</label>
   	 				<select name="" class="form-control" id="">
						<option>Franco Rossi</option>
						<option>Topolino</option>
						<option>Pluto</option>
   	 				</select>	
			</div>
			<div class="col-sm-6" style="margin-top: 25px; height:30px">
				<a href="#1" class="btn-icon" onclick="$('#aggiungi').hide();">elimina partecipante</a>
			</div>
		</div>
	</div>
		
	<div class="form-group">	
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Telefono partecipante</label>
				<div class="editable-input">
					<input type="text" name="" class="form-control clear-x">
						<span class="editable-clear-x" style="display: block;">
							<i class="icon icon-close icon-1x"></i>
						</span>
				</div>
			</div>
			<div class="col-sm-6">
				<label class="control-label">Email partecipante</label>
				<div class="editable-input">
					<input type="text" name="" class="form-control clear-x">
						<span class="editable-clear-x" style="display: block;">
							<i class="icon icon-close icon-1x"></i>
						</span>
				</div>
			</div>
		</div>
	</div>
</span>
<!-- -->



	<!-- END SEZIONE CHE VIENE REPLICATA-->	



	<div class="form-group">	
		<div class="row">
			<div class="col-sm-6">
				<a href="#1" class="btn-icon" onclick="$('#aggiungi').show();">Aggiungi partecipante</a>
			</div>
			<div class="col-sm-6">
				

			<div class="btn-align-right">
				<a type="button" class="btn btn-primary" id="" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_colletta_2.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#1">prosegui</a>
			</div>

			</div>
		</div>
	</div>



	</form>
</section>
<!--END  FORM CREA UNA COLLETTA -->




<!-- FORM LE TUE COLLETTE -->
<section>
	<h4>Le tue collette</h4>
		<form class="formGenerico borderFormRounded" role="form" id="">
		
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<label class="control-label">Periodo</label>
   	 				<select name="" class="form-control" id="">
						<option>Mese in corso</option>
						<option>Ultimi 3 mesi</option>
						<option>Ultimi 6 mesi</option>
   	 				</select>	
	   	 		</div>
	   	 		<div class="col-sm-6">
	   	 			<label class="control-label">Stato</label>
   	 				<select name="" class="form-control" id="">
						<option>Tutti</option>
						<option>In attesa</option>
						<option>Completata</option>
	 				</select>	
	   	 		</div>
			</div>
		</div>

		<div class="form-group btnWrapper">
			<div class="btn-align-center">
				<a type="button" class="btn btn-primary" id="">Cerca</a>
				<br class="clear">
			</div>
		</div>
		</form>
</section>	
<!-- END FORM LE TUE COLLETTE -->

		
<!-- TABELLA -->
<section>

	<span class="flRight">
		<a  href="#" class="iconFormUpdate btn-icon ">
			<i class="icon icon-excel_filled icon-2x "></i>
		</a>
	</span>

	<table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
	    <thead>
	        <tr>
	            <th data-field="data" data-sortable="true" class="">Data creazione</th>
	            <th data-field="ncolletta"  data-sortable="true" class="">Nome colletta</th>
	            <th data-field="npartecipanti" data-sortable="true" class="">N. partecipanti</th>
	            <th data-field="importodaricevere" data-sortable="true" class="">Importo da ricevere</th>
	            <th data-field="importototale" data-sortable="true" class="">Importo totale</th>
	            <th data-field="stato" data-sortable="true" class="">Stato</th>
	            <th data-field="fee" data-sortable="false" class="center"></th>
	            <th data-field="del" data-sortable="false" class="center"></th>
	        </tr>
	    </thead>
	</table>

</section>
<!--END TABELLA -->







<section>
	
	<div class="form-group btnWrapper">
		<div class="stepBtn">Step <strong> 1 </strong> di 3</div>
		<br class="clear">
	</div>

	<p class="note">
		I campi contrassegnati da un asterisco (*) sono obbligatori.
	</p>

	<hr class="marginBottomNone">
	<img src="/wscmn/img/ret/logo_jiffy.gif" class="img-responsive flRight">

</section>


	







	

	</div> <!--END panel-nofill -->
</div><!-- END navfrontPage outerTab -->







<!-- Gestione tabella -->



<script>
    var $tableOrdered = $('#tableOrdered');
    $(function () {



var valori = {  
  
   "listaCollette":[  
      {  
         "data":"21/11/2016",
         "ncolletta":"<a href='http://libreriewebank.webank.local/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_colletta_3.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#' class='btn-icon'>pippo</a>",
         "npartecipanti":"3",
         "importodaricevere":"test",
         "importototale":"50.00 €",
         "stato":"<span class='nega'>in attesa</span>",
         "fee":"<input type='checkbox'>",
         "del":"<a href='#!' data-toggle='modal' data-target='#layerSepa'><i class='icon icon-f-row_canc'></i></a>"
      },
        {  
         "data":"21/11/2016",
         "ncolletta":"<a href='http://libreriewebank.webank.local/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_colletta_3.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#' class='btn-icon'>pluto</a>",
         "npartecipanti":"2",
         "importodaricevere":"prova",
         "importototale":"450.00 €",
         "stato":"<span class='posi'>Completata</span>",
         "fee":"<input type='checkbox'>",
         "del":"<a href='#!' data-toggle='modal' data-target='#layerSepa'><i class='icon icon-f-row_canc'></i></a>"
      },
   ],
   
}


    

    $tableOrdered.bootstrapTable({
    	data: valori.listaCollette,
        sortable: true,
        sortName: "data",
        sortOrder: "desc",



		rowStyle: function(row, index) {
			if(index % 2 == 0)
			{
				return {
							classes: 'dispari'
						}
			}
			else {
					return {
							classes: 'pari'
					}
				}
			},
		});
	});

</script>


<!-- END GESTIONA TABELLA -->		




<!-- Overlayer Delete record-->


   


<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Elimina colletta</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h3></h3>
							<p>
								Confermi di voler eliminare la colletta?
							</p>

					
						<div class="form-group btnWrapper">
							<div class="btn-align-left">
								<a type="button" class="btn btn-default">Annulla</a>
							</div>
							<div class="btn-align-right">
								<a type="button" class="btn btn-primary" id="">Conferma</a>
							</div>
							<br class="clear">
						</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- END Overlayer Delete record-->
