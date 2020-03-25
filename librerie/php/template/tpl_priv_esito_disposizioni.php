<section>
    <h2>Esito disposizioni</h2>
    <p>Puoi annullare disposizioni fino alle ore 19:30 del giorno precedente la data di pagamento inserita. Gli F23 e gli F24 possono essere annullati finché si trovano nello stato &quot;prenotato&quot;.</p>
</section>
<section>
	<div class="tithelp">
		<h4>Ricerca</h4>
		<div class="flRight"><a href="#1" class="btn-icon" data-toggle="modal" data-target="#layerEsito"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
		<br class="clear">
	</div>
	<form class="formGenerico borderFormRounded searchFilter" role="form" id="">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<label class="control-label">Lorem ipsum</label>
					<select class="form-control">
						<option>lorem</option>
						<option>lorem</option>
						<option>lorem</option>
					</select>
				</div>
				<div class="col-sm-6">
					<label class="control-label">Lorem ipsum</label>
					<span class="output">Lorem ipsum dolo</span>
				</div>
			</div>
		</div>	
		<div class="form-group">	
			<div class="row">
				<div class="col-sm-4">
					<label class="control-label">Periodo</label>
					<select class="form-control">
						<option>Ultimo mese</option>
						<option>Ultimi 3 mesi</option>
						<option>Ultimi 6 mesi</option>
						<option>Ultimo anno</option>
					</select>
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-6">
							<label class="control-label">Importo da</label>
							<div class="form-inline">
								 <div class="form-group">
									  <div class="input-group">
									     <input type="text" class="form-control clear-x"> 
									     <div class="input-group-addon date">EUR</div>
									  </div>
								</div>
							</div> 
						</div> 
						<div class="col-sm-6">
							<label class="control-label">A</label>
							<div class="form-inline">
							  <div class="form-group">
								  <div class="input-group">
								     <input type="text" class="form-control clear-x"> 
								     <div class="input-group-addon date">EUR</div>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-2 no-label">
					<div class="btn-align-left">
						<a type="button" class="btn btn-primary" id="">lorem</a>
						<br class="clear">
					</div>
				</div>
			</div>
		</div>
	</form>	
</section>
<section>
<table id="tableEsitoDispo" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
     <thead>
        <tr>
            <th data-field="data" data-sorter="fixDate" data-sortable="true" class="center">Data<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span></th>
            <th data-field="tipo" data-sortable="true">Tipologia<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span></th>
            <th data-field="desc" data-sortable="true" class="hidden-xs">Descrizione<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span></th>
            <th data-field="stato" data-sortable="true" class="hidden-xs">Stato<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span></th>
            <th data-field="importo" data-sortable="true" class="right hidden-xs">Importo<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span></th>
            <th data-field="dettaglio" data-sortable="false" class="center hidden-xs">Dett.</th>
            <th data-field="copia" data-sortable="false" class="center hidden-xs">Copia</th>
            <th data-field="annulla" data-sortable="false"class="center hidden-xs">Ann.</th>
        </tr>
     </thead>
</table>
<script>
    var $tableOrdered = $('#tableEsitoDispo');
    
    $(function () {
	        
	$.ajax({
       url: '/librerie/include/commons/ajax/esitoDispo.php',
       dataType: 'json',
       success: function(data) {
           $tableOrdered.bootstrapTable({
              data: data.esitiRicerca,
              onPostBody: function() {fixCols() },
              sortable: true,
              sortName: "data",
              sortOrder: "desc",
              pagination : "true",
              pageSize: 15,
              pageList: [15, 30, 60, 'tutti'],
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
              detailView:  isSmallDevice, //se sono su  mobile innesco il meccanismo per costruire riga accordion
			  detailFormatter:"detailFormatterAccordion" //costruisce la riga di dettaglio su mobile
           });
       },
       error: function(e) {
          console.log(e.responseText);
		}
      });
	  

     });

    function detailFormatterAccordion(index, row) {
        
        var html = [];
        $.each(row, function (key, value) {
           
            if(key=='desc' || key=='stato' || key=='dettaglio' || key=='copia' || key=='annulla' || key=='importo' || key=='tipologia')
            {
            	html.push('<p><strong>' + key + ':</strong>' + '</p>' + '<p class="value-hidden">' + value + '</p>');
        	}
        });
        return html.join('');
    }

    $(window).resize(function() {
	  
	  $tableOrdered.bootstrapTable('refreshOptions', {
	         detailView:  isSmallDevice,
	         detailFormatter:"detailFormatterAccordion"
	    });
	  fixCols();
 	});
	
</script>
</section>

<div class="modal fade" id="layerEsito" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Esito Disposizioni</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<ul>
								<li>Dalla voce &quot;Tutte le disposizioni&quot; sono escluse le Riba.</li>
								<li>I trasferimenti singoli da deposito a conto (e viceversa) sono visibili con la funzione &quot;movimenti&quot;.</li>
								<li>Per le deleghe F24 la quietanza &egrave; disponibile entro 4 giorni lavorativi dalla data di pagamento della delega.</li>
								<li>Per le deleghe F23 la ricevuta di pagamento &egrave; disponibile entro 3 giorni lavorativi.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>