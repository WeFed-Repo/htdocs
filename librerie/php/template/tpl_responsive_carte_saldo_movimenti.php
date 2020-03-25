





<h2>Saldo e movimenti</h2>
<section>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
            <li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_carte_credito_one.php&responsive=y&liv0=2&liv1=1&liv2=1&liv3=0">plafond - linea di credito</a></li>
            <li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_carte_credito_paga_rate.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y">Paga a rate</a></li>
            <li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_carta_sicurezza.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y">sicurezza<br> ed estinzione</a></li>
            <li class="on"><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_carte_saldo_movimenti.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y">Saldo e movimenti</a></li>
            <li><a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_carte_stato_pratica.php&liv0=2&liv1=1&liv2=1&liv3=0&responsive=y">Stato pratica</a></li>
        </ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
</section>	
	


<!-- FORM -->
<section>
    <form class="formGenerico borderFormRounded" role="form" id="formBonifico">

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label class="control-label">Numero carta</label> 
                    <span class="output" id="IbanId_ord">*** *** *** *591</span> 
                </div>
                <div class="col-sm-4">
                    <label class="control-label">Intestatario</label> 
                    <span class="output" id="IbanId_ord">Mario Rossi</span> 
                </div>
                <div class="col-sm-4">
                    <label class="control-label">Conto di addebito</label> 
                    <span class="output" id="IbanId_ord">01099 - 0000083023 - EUR</span> 
                </div>
            </div>
        </div>
       
        <div class="form-group">
            <div class="row">
                <div class="col-sm-4">
                    <label class="control-label">Limite di spesa</label> 
                    <span class="output" id="IbanId_ord">5.000&euro;</span> 
                </div>
                <div class="col-sm-4">
                    <label class="control-label">Totale spese</label> 
                    <span class="output" id="IbanId_ord">200,91&euro;</span> 
                </div>
                <div class="col-sm-4">
                    <label class="control-label">Disponibilit&agrave; residua</label> 
                    <span class="output" id="IbanId_ord">4.716,00&euro;</span> 
                </div>
            </div>
        </div>

    </form>
</section>
<!--END FORM -->

<!-- TESTO -->
<section>
<p>
	Nella tabella sotto, sono elencati <strong>gli ultimi movimenti contabilizzati e successivi alla data di chiusura dell'ultimo estratto conto.</strong> Alcuni recenti movimenti potrebbero non essere inclusi, perché occorrono alcuni giorni per la loro contabilizzazione.
</p>	
</section>
<!-- END TESTO-->



<!-- Tabella -->
<section>



<!-- TABELLA -->
<section>



<span>
	<h4 class="flLeft" style="margin-top:10px";>
		Periodo movimenti
	</h4>



	<span class="flRight">
		<a  href="#" class="iconFormUpdate btn-icon ">
			<i class="icon icon-excel_filled icon-2x "></i>
		</a>
	</span>
	<span class="flRight">
		<a  href="#" class="iconFormUpdate btn-icon ">
			<i class="icon  icon-zoom_piu_big icon-2x "></i>
		</a>
	</span>
</span>









<table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
    <thead>
        <tr>
            <th data-field="idVincolo" data-sortable="true" class="">Numero linea
            	<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
            </th>
            <th data-field="nomeLinea"  data-sortable="true" class="">Nome linea vincolata
            	<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
            </th>
            <th data-field="tassoLordo" data-sortable="true" class="">Tasso lordo
            	<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
            </th>
            <th data-field="durataVincolo" data-sortable="true" class="">Durata linea
            	<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
            </th>
            <th data-field="dataApertura" data-sortable="true" class="">Data apertura
            	<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
            </th>
            <th data-field="dataScadenza" data-sortable="true" class="">Data scadenza
            	<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
            </th>
            <th data-field="importoVincolato" data-sortable="true" class="">Importo iniziale(€)
            	<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
            </th>
            <th data-field="importoAllaScadenza" data-sortable="true" class="">Importo finale(€)
            	<span><i class="icon icon-2x icon-accordion_up"></i><i class="icon icon-2x icon-accordion_down"></i></span>
            </th>
            <th data-field="nSvin" data-sortable="false" id="svincola"  class="center nodet">Svincola</th>
        </tr>
    </thead>
  	<tfoot>
    	<tr class="totali">
        	<td colspan="6"><strong>Totale</strong></td>
        	<td id="totImporto" class="right bgWhite"></td>
        	<td id="totImportoScadenza" class="right bgWhite"></td>
        	<td></td>
    	</tr>
  	</tfoot>
</table>

<!-- BTN -->

<div class="form-group btnWrapper">

  	<div class="btn-align-right">
        <a type="button" class="btn btn-primary" id="" href="#">
            Stampa
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
   "codEsitoCall":"",
   "totImporto":"2.151,00",
   "totImportoScadenza":"2.163,85",
   "dati":[  
      {  
         "idVincolo":"149",
         "durataVincolo":6,
         "importoAllaScadenza":"2,01",
         "importoVincolato":"2,00",
         "dataScadenza":"29\/09\/2016",
         "dataApertura":"31\/03\/2016",
         "tassoLordo":"1,00",
         "nSvin":0
      },
      {  
         "idVincolo":"162",
         "durataVincolo":3,
         "nomeLinea":"gahahs",
         "importoAllaScadenza":"1,00",
         "importoVincolato":"1,00",
         "dataScadenza":"06\/10\/2016",
         "dataApertura":"07\/07\/2016",
         "tassoLordo":"0,75",
         "nSvin":0
      },
      {  
         "idVincolo":"163",
         "durataVincolo":3,
         "nomeLinea":"eri",
         "importoAllaScadenza":"1,00",
         "importoVincolato":"1,00",
         "dataScadenza":"17\/10\/2016",
         "dataApertura":"18\/07\/2016",
         "tassoLordo":"0,75",
         "nSvin":0
      },
     
      {  
         "idVincolo":"133",
         "durataVincolo":12,
         "importoAllaScadenza":"1,01",
         "importoVincolato":"1,00",
         "dataScadenza":"21\/02\/2017",
         "dataApertura":"22\/02\/2016",
         "tassoLordo":"1,20",
         "nSvin":0
      },
      {  
         "idVincolo":"139",
         "durataVincolo":12,
         "importoAllaScadenza":"1,01",
         "importoVincolato":"1,00",
         "dataScadenza":"21\/02\/2017",
         "dataApertura":"22\/02\/2016",
         "tassoLordo":"1,20",
         "nSvin":0
      },
      {  
         "idVincolo":"161",
         "durataVincolo":12,
         "nomeLinea":"test 25 agosto",
         "importoAllaScadenza":"1,02",
         "importoVincolato":"1,00",
         "dataScadenza":"05\/07\/2017",
         "dataApertura":"06\/07\/2016",
         "tassoLordo":"1,20",
         "nSvin":0
      },
      {  
         "idVincolo":"168",
         "durataVincolo":18,
         "nomeLinea":'<a href="#" class="no-underline btn-icon"  data-toggle="modal" data-target="#layerLinea">sono io</a>',
         "importoAllaScadenza":"1.011,12",
         "importoVincolato":"1.000,00",
         "dataScadenza":"24\/02\/2018",
         "dataApertura":"25\/08\/2016",
         "tassoLordo":"1,00",
         "nSvin": '<a href="#" class="no-underline btn-icon"  data-toggle="modal" data-target="#layer"><i class="icon icon-2x icon-sicurezza_desktop"></i></a>'
      }
   ]
}


     //settare Importo iniziale - Importo finale
    var setMovInTable = function(valori) {
        
       	var importo = 0;
        var importoScadenza = 0;
      
        importo = valori.totImporto;
        importoScadenza = valori.totImportoScadenza;
       
          $('#totImporto').html(importo);
          $('#totImportoScadenza').html(importoScadenza);
    }



//Inserire Icona
    var setPdfIcon = function() {      	
     	var hrefLink = '#';
     	$('#svincola').html('<a class="no-underline btn-icon"  href="' + hrefLink + '"' + '>' + '<i class="icon icon-2x icon-sicurezza_desktop"></i >' + '</a>');
     
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

		onPostBody: function() {
            setMovInTable(valori);
            
        },
	});
});

</script>


<!--END  TABELLA-->


	



</section>
<!-- END Tabella-->





<!--IMG + TESTO -->
<section>
	<div class="row">
		<div class="col-sm-2">
			<img src="/img/ret/ico2or_estratto_cont.gif">
		</div>
		<div class="col-sm-10">
			<h4>Estratto conto e altri servizi</h4>
			<p>Per vedere gli estratti conto e accedere alle altre funzioni della tua carta, <a href="#">clicca qui</a></p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<img src="/img/ret/ico2or_non_spesa.gif">
		</div>
		<div class="col-sm-10">
			<h4>Non riconosci una spesa?</h4>
			<p>
				Se nel tuo estratto conto &egrave; indicato un importo che non riconosci, puoi chiederne il rimborso entro 13 mesi dalla data di ricezione dell'estratto conto.
			</p>
			<ul>
				<li>
					Stampa il modulo <a href="#">Fast Claim</a> compilato e firmato in ogni sua parte.
				</li>
				<li>
					Invialo <strong>insieme alla denuncia presentata alle autorità competenti, fax: 02 34884773.</strong>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--END IMG + TESTO -->


	
	</div>
</div>






