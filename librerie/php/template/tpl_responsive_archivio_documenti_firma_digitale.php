<h2>Firma digitale</h2>
<section>
	<p>
		Di seguito sono elencati i documenti acquisiti in digitale e/o prodotti in formato elettronico.
	</p>
</section>

<section>
<h4>Servizio Prelievo Cardless</h4>
<table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
    <thead>
        <tr>
            <th data-field="tipo" data-sortable="true" class="left">
            	Tipo
            </th>
            <th data-field="dataEmissione" data-sortable="true" data-sorter="fixDate" class="center">
            	Data emissione
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
         "tipo":"Adesione Firma digitale",
         "dataEmissione":"29\/01\/2016",
         "canale":'<i class="colorbank icon icon-2x icon-user_id"></i>',
         "nSvin": '<a href="#" class="no-underline btn-icon" ><i class="icon icon-2x icon-zoom_small_piu"></i></a>'
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