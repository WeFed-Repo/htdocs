<h2>Investimenti</h2>

<section>
	<p>
		In questa pagina trovi i documenti che hai <strong>sottoscritto con la banca</strong> tramite <strong>Firma Elettronica Avanzata</strong> oppure con <strong>Firma Digitale Remota.</strong>
	</p>
</section>

<section>
<h4>Certificati di Deposito</h4>
<table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
    <thead>
        <tr>
            <th data-field="intestato" data-sortable="true" class="left">
            	Intestato a
            </th>
            <th data-field="descrizione"  data-sortable="true" class="left">
            	Descrizione
            </th>
            <th data-field="tipo" data-sortable="true" class="left">
            	Tipo
            </th>
            <th data-field="dataEmissione" data-sortable="true" data-sorter="fixDate" class="center">
            	Data emissione
            </th>
            <th data-field="rapporto" data-sortable="true" class="right">
            	Rapporto	
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
<script>
    var $tableOrdered = $('#tableOrdered');
    $(function () {

var valori = {  
   "dati":[  
      {  
         "intestato":"Rossetti Luigino",
         "descrizione":"CARDLESS",
         "tipo":"Contrattuale",
         "dataEmissione":"29\/01\/2016",
         "rapporto":"01099 - 0000003501 - EUR",
         "canale":'<i class="colorbank icon icon-2x icon-user_id"></i>',
         "nSvin": '<a href="#" class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_small_piu"></i></a>'
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
