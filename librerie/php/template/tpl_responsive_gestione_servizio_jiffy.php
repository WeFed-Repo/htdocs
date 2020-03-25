<h2>Gestione servizio</h2>

<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li class="on"><a href="#">Movimenti</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_pagamenti.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Invia pagamento</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_colletta.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Colletta</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_jiffy_impostazioni.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Impostazioni</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
	
		<section>
			<h3>Ricerca movimenti</h3>
			<p>In questa pagina puoi ricercare tutti i <strong>pagamenti inviati e ricevuti.</strong></p>
			<p>I pagamenti nello stato &laquo;In attesa &raquo; possono essere <strong>annullati.</strong></p>
		</section>
	
	

		<section>
		<form class="formGenerico borderFormRounded" role="form" id="">
			<div class="form-group">	 
				<div class="row">
					<div class="col-sm-8">
						<label class="control-label">Conto di addebito*</label>
						<div class="form-inline">		 
							<div class="input-group">
					    	<select class="form-control" name="" id="">
								<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
								<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
							</select>
						        <div class="input-group-addon">
						    	<a class="no-underline btn-icon" data-toggle="modal" data-target="#starAlert1">
						         	<i class="icon icon-star_fill" title="icon-star_fill"></i>
						    	</a>
						        </div>
					       </div>
						</div>
					</div>
					<div class="col-sm-4">
	   	 				<label class="control-label">Periodo</label>
	   	 				<select name="" class="form-control" id="tooltipOnSelect">
							<option>Mese in corso</option>
							<option>Ultimi 3 mesi</option>
							<option>Ultimi 6 mesi</option>
	   	 				</select>
   	 				</div>
				</div>
			</div>
				
			<div class="form-group">
				<div class="row">
					<div class="col-sm-4">
	   	 			<label class="control-label">Importo da</label>
		   	 			<div class="editable-input">
		   	 				<input type="text" name="" class="form-control clear-x" value="">
		   	 				<span class="editable-clear-x" style="display: block;">
		   	 					<i class="icon icon-close icon-1x"></i>
		   	 				</span>
		   	 			</div>
	   	 			</div>
	   	 			<div class="col-sm-4">
	   	 			<label class="control-label">A</label>
		   	 			<div class="editable-input">
		   	 				<input type="text" name="" class="form-control clear-x" value="">
		   	 				<span class="editable-clear-x" style="display: block;">
		   	 					<i class="icon icon-close icon-1x"></i>
		   	 				</span>
		   	 			</div>
	   	 			</div>
	   	 			<div class="col-sm-4">
	   	 				<label class="control-label">Tipo di movimento</label>
	   	 				<select name="" class="form-control" id="tooltipOnSelect">
							<option>Tutti</option>
							<option>Entrata</option>
							<option>Uscita</option>
	   	 				</select>
   	 				</div>
				</div>
			</div>	

			<div class="form-group">
				<div class="row">
					<div class="col-sm-4">
						<label class="control-label">Stato</label>
						<select name="" class="form-control" id="tooltipOnSelect">
							<option>Tutti</option>
							<option>In attesa</option>
							<option>Eseguito</option>
							<option>Annullato</option>
	   	 				</select>
					</div>
				</div>
			</div>	

			<div class="form-group">
				<div class="btn-align-center">
					<a type="button" class="btn btn-primary" id="btnInvio">Cerca</a>
					<br class="clear">
				</div>
			</div>			     
		</form>
		</section>

	
		
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
            <th data-field="data" data-sortable="true" data-sorter="fixDate" class="center">Data inserimento</th>
            <th data-field="esecuzione"  data-sortable="true" data-sorter="fixDate" class="center">Data esecuzione</th>
            <th data-field="benmit" data-sortable="true" class="">Beneficiario / Mittente</th>
            <th data-field="descrizione" data-sortable="true" class="left">Causale</th>
            <th data-field="importo" data-sortable="true" class="right">Importo</th>
            <th data-field="stato" data-sortable="true" class="left">Stato</th>
            <th data-field="fee" data-sortable="false" class="center"></th>
            <th data-field="del" data-sortable="false" class="center"></th>
            <th data-field="mail" data-sortable="false" id="svincola"  class="center"></th>
        </tr>
    </thead>
</table>


</section>


<script>
    var $tableOrdered = $('#tableOrdered');
    $(function () {



var valori = {  
  
   "listaTransazioni":[  
      {  
         "idPagamento":278965,
         "data":"21/11/2016",
         "esecuzione":"-",
         "benmit":"+3934*******332",
         "descrizione":"test",
         "importo":"-50.00 €",
         "importoInApp":"-100,00",
         "fee":"<input type=\"checkbox\" class=\"cbxP2P\" name=\"listaExcel\" value=\"278965\"",
         "statoInApp":"In attesa",
         "stato":"<span class=\"nega\">In attesa<\/span>",
         "del":"<a href='#' data-toggle='modal' data-target='#layerElimina' ><i class='icon icon-f-row_canc'></i ></a>",
         "mail":"<a href='#' data-toggle='modal' data-target='#layerEmail' ><i class='icon icon-mail_ria_outline'></i >"
      },
      {  
         "idPagamento":278964,
         "data":"21/11/2016",
         "esecuzione":"-",
         "benmit":"+3934*******332",
         "descrizione":"test",
         "importo":"-2.00 €",
         "importoInApp":"-2,00",
         "fee":"<input type=\"checkbox\" class=\"cbxP2P\" name=\"listaExcel\" value=\"278964\"",
         "statoInApp":"In attesa",
         "stato":"<span class='nega'>In attesa</span>",
         "del":"<a href='#' data-toggle='modal' data-target='#layerElimina'><i class='icon icon-f-row_canc'></i ></a>",
         "mail":"<a href='#' data-toggle='modal' data-target='#layerEmail'><i class='icon icon-mail_ria_outline'></i >"
      },
      {  
         "idPagamento":278956,
         "data":"18/11/2016",
         "esecuzione":"18/11/2016",
         "benmit":"BECCARIA TERENZIO",
         "descrizione":"thy",
         "importo":"-1.00 €",
         "importoInApp":"-1,00",
         "fee":"<input type=\"checkbox\" class=\"cbxP2P\" name=\"listaExcel\" value=\"278956\"",
         "statoInApp":"Eseguito",
         "stato":"<span class=\"posi\">Eseguito<\/span>",
         "del":"&nbsp;",
         "mail":"&nbsp;"
      },
      {  
         "idPagamento":278895,
         "data":"16/11/2016",
         "esecuzione":"23/11/2016",
         "benmit":"+3934*******114",
         "descrizione":"",
         "importo":"-1.00 €",
         "importoInApp":"-1,00",
         "fee":"<input type=\"checkbox\" class=\"cbxP2P\" name=\"listaExcel\" value=\"278895\"",
         "statoInApp":"Annullato",
         "stato":"<span>Annullato<\/span>",
         "del":"&nbsp;",
         "mail":"&nbsp;"
      },
      {  
         "idPagamento":278894,
         "data":"16/11/2016",
         "esecuzione":"17/11/2016",
         "benmit":"+3933*******974",
         "descrizione":"ggf",
         "importo":"-1.00 €",
         "importoInApp":"-1,00",
         "fee":"<input type=\"checkbox\" class=\"cbxP2P\" name=\"listaExcel\" value=\"278894\"",
         "statoInApp":"Annullato",
         "stato":"<span>Annullato<\/span>",
         "del":"&nbsp;",
         "mail":"&nbsp;"
      },
      {  
         "idPagamento":278873,
         "data":"16/11/2016",
         "esecuzione":"16/11/2016",
         "benmit":"ROCCHINI ADELAIDE",
         "descrizione":"prova altro conto",
         "importo":"-1.00 €",
         "importoInApp":"-1,00",
         "fee":"<input type=\"checkbox\" class=\"cbxP2P\" name=\"listaExcel\" value=\"278873\"",
         "statoInApp":"Eseguito",
         "stato":"<span class=\"posi\">Eseguito<\/span>",
         "del":"&nbsp;",
         "mail":"&nbsp;"
      }
   ],
   "conto":"01099 0000086803 EUR",
   "saldo":"631.416,26",
   "periodo":"M1",
   "impMin":"",
   "impMax":"",
   "categoria":"TUTTI",
   "stato":"TUTTI",
   "esito":"ok"
}









    

    $tableOrdered.bootstrapTable({
    	data: valori.listaTransazioni,
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


	<!--END TABELLA -->



<section>
	<hr class="marginBottomNone">
	<img src="/wscmn/img/ret/logo_jiffy.gif" class="img-responsive flRight">
</section>



	</div>

	

	</div> <!--END panel-nofill -->
</div><!-- END navfrontPage outerTab -->



<!-- OVERLAYER EMAIL -->
<div class="modal fade" id="layerEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Attenzione</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h3></h3>
							<p>
								Il beneficiario non aderisce al servizio <strong>Jiffy di SIA:</strong> il pagamento sarà comunque eseguito se il beneficiario attiverà il servizio entro 7 giorni dalla data di inserimento. Da qui puoi inviargli un'email di notifica.
							</p>
						</div>
					</div>
				
					<form class="formGenerico borderFormRounded" role="form" id="">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-8">
	   	 							<label class="control-label">Indirizzo email</label>
		   	 							<div class="editable-input">
		   	 							<input type="text" name="" class="form-control clear-x" value="">
		   	 								<span class="editable-clear-x" style="display: block;">
		   	 									<i class="icon icon-close icon-1x"></i>
		   	 								</span>
		   	 							</div>
	   	 						</div>
							</div>
						</div>	
					</form>

			     <div class="form-group btnWrapper">
					<div class="btn-align-left">
						<a type="button" class="btn btn-default">Annulla</a>
					</div>
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary" id="">Invia</a>
					</div>
				</div>
						
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END OVERLAYER EMAIL-->



<!-- OVERLAYER ELIMINA -->
<div class="modal fade" id="layerElimina" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel"></h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					
				<section class="boxesitoWrap">
					<div class="boxesito positivo">
						<i class="icon icon-alert_ok icon-2x"></i>
						<div class="text">
							<div class="row">
								<div class="col-xs-12">
								<h4>Operazione completata correttamente</h4>
									<p>
										Il pagamento &egrave; stato annullato. L'operazione potrebbe richiedere alcuni minuti.
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END OVERLAYER ELIMINA -->