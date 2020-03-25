<h2>Anagrafica</h2>


<section>
	<p>
		Di seguito sono elencati i documenti acquisiti in digitale e/o prodotti in formato elettronico.
	</p>
</section>


<section>
<h4>Conti correnti</h4>
<table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
    <thead>
        <tr>
            <th data-field="descrizione"  data-sortable="true" class="left">
            	Descrizione
            </th>
            <th data-field="tipo" data-sortable="true" class="left">
            	Tipo
            </th>
            <th data-field="dataAcquisizione" data-sortable="true" data-sorter="fixDate" class="center">
            	Data acquisizione
            </th>
            <th data-field="canale" data-sortable="false" class="center">
            	Canale
            </th>
            <th data-field="nSvin" data-sortable="false" id="svincola"  class="center nodet">
            	
            </th>
        </tr>
    </thead>
</table>
</section>









<!-- JS per gestire la tabella  -->

<script type="text/javascript">

    var $tableOrdered = $('#tableOrdered');
    $(function () {

    var valori = {  
       "dati":[  
          {  
             "descrizione":"Codice fiscale",
             "tipo":"Documento riconoscimento",
             "dataAcquisizione":"29\/01\/2016",
             "canale":'<i class="colorbank icon icon-2x icon-small-operazionebpm"></i>',
             "nSvin": '<a href="#" class="no-underline btn-icon"  data-toggle="modal" data-target="#layerSepa"><i class="icon icon-2x icon-zoom_small_piu"></i></a>'
          },
          {  
             "descrizione":"Carta Identit&agrave;",
             "tipo":"Documento riconoscimento",
             "dataAcquisizione":"19\/11\/2015",
             "canale":'<i class="colorbank icon icon-2x icon-user_id"></i>',
             "nSvin": '<a href="#" class="no-underline btn-icon"  data-toggle="modal" data-target="#layerSepa"><i class="icon icon-2x icon-zoom_small_piu"></i></a>'
          }
       ]
    }

    $tableOrdered.bootstrapTable({
    	data: valori.dati,
        sortable: true,
        sortName: "idVincolo",
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
<!-- END JS per gestire la tabella -->