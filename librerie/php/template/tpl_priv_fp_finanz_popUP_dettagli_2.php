<h2>Piano ammortamento</h2>
<section>
<p>
	Per ogni rata del finanziamento sono evidenziati la quota di capitale effettivamente restituita alla banca, la quota di interessi, lo stato della rata (da pagare, pagata, ecc.).
</p>
</section>

<section>
	<h4>Riepilogo dati</h4>
<form class="formGenerico borderFormRounded output" role="form" id="form02">

	<div class="form-group">
		<div class="row">
		 	<div class="col-sm-6">	
				<label class="control-label-output">Conto corrente</label>
				<span class="output">01099 - 0000057022 - EUR</span>
			</div>
			<div class="col-sm-6">	
				<label class="control-label-output">Finanziamento</label>
				<span class="output">00230-3506633 Mutuo Webank Fisso</span>
			</div>	
		</div>	
	</div>

</form>
</section>


<!-- TABELLA -->
<section>

<h4>Piano di ammortamento</h4>

<table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
    <thead>
        <tr>
            <th data-field="rata" data-sortable="true" class="">
            	Rata
            </th>
            <th data-field="scadenza"  data-sortable="true" class="">
            	Scadenza
            </th>
            <th data-field="quotaCapitale" data-sortable="true" class="right">
            	Quota capitale €
            </th>
            <th data-field="quotaInteressi" data-sortable="true" class="right">
            	Quota interessi €
            </th>
            <th data-field="importoRata" data-sortable="true" class="right">
            	Importo rata €
            </th>
            <th data-field="statoRata" data-sortable="true" class="center">
            	Stato rata
            </th>
        </tr>
    </thead>
  	<tfoot>
    	<tr class="totali">
        	<td colspan="2"><strong>Totale</strong></td>
        	<td id="qCapitale" class="right bgWhite"></td>
        	<td id="qInteressi" class="right bgWhite"></td>
        	<td id="iRata" class="right bgWhite"></td>
        	<td></td>
    	</tr>
  	</tfoot>
</table>

<!-- BTN -->

<div class="form-group btnWrapper">

  	<div class="btn-align-right">
        <a type="button" class="btn btn-primary" id="" href="#">
            stampa pagina
        </a>	
    </div>
        <div class="clear"></div>

</div>

</section>
<!-- END BTN-->

<script>
    var $tableOrdered = $('#tableOrdered');
    $(function () {
var valori = {  
   "esitoCall":"true",
   "msgEsitoCall":"",
   "rata":"3.000,00",
   "capitale":"22.151,00",
   "interessi":"663,85",
   "dati":[  
      {  
         "rata":"1",
         "scadenza":"29\/09\/2016",
         "quotaCapitale":"160,11",
         "quotaInteressi":"203,85",
         "importoRata":"363,96",
         "statoRata":"Scaduta pagata totalmente"
      },
      {  
         "rata":"2",
         "scadenza":"10\/01\/2016",
         "quotaCapitale":"167,11",
         "quotaInteressi":"253,85",
         "importoRata":"366,96",
         "statoRata":"Calcolata e non pagata"
      },
      {  
         "rata":"3",
         "scadenza":"29\/09\/2016",
         "quotaCapitale":"160,11",
         "quotaInteressi":"203,85",
         "importoRata":"363,96",
         "statoRata":"Scaduta pagata totalmente"
      },
      {  
         "rata":"4",
         "scadenza":"10\/01\/2016",
         "quotaCapitale":"167,11",
         "quotaInteressi":"253,85",
         "importoRata":"366,96",
         "statoRata":"Calcolata e non pagata"
      }
   ]
}


     //settare Importo iniziale - Importo finale
    var setMovInTable = function(valori) {
        
       	var qCapitale = 0;
        var qInteressi = 0;
        var iRata = 0;
      
        qCapitale = valori.capitale;
        qInteressi = valori.interessi;
       	iRata = valori.rata;

          $('#qCapitale').html(qCapitale);
          $('#qInteressi').html(qInteressi);
          $('#iRata').html(iRata);
    }




    $tableOrdered.bootstrapTable({
    	data: valori.dati,
        
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

		onPostBody: function() {
            setMovInTable(valori);
            
        },
	});
});

</script>





