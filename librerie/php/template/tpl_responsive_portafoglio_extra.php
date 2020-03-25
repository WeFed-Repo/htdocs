<script type="text/javascript">
	/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
	addEvent(window, 'load', function() {
		createSelectRapp('sceltaRapporto', 'sceltaRapportoVal', sceltaRapportoFunc);
		
	});

	function sceltaRapportoFunc (option) {
		// Testo selezione: option.text
		// Valore selezione: option.value
		// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
	}
	/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>

<!--caricamento grafici Prestiti giornalieri -->
<script type="text/javascript" src="/wscmn/fe/assets/amcharts/amcharts.js?b=428"></script>
<script type="text/javascript" src="/wscmn/fe/assets/amcharts/pie.js?b=428"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript">
//GRAFICO A TORTA TABELLA TOP PAGINA
var graficiPrestitiPie = (function() {
 	 var wrapperGr = $('#graficiPrestitiGiornaliero')
 	 	data = [
				{
					"labelPrestito": "in prestito",
					"value": "698661"
				},
				{
					"labelPrestito": "non in prestito",
					"value": "11098"
				}
	   ];
 	  
 	  var isTouchDevice = function() {
    		return true === (/iPhone|iPad|iPod|Android|IEMobile|BlackBerry|Mobile Safari/i.test(navigator.userAgent));
	  };
      var buildTouchFeature = function(event) {
	  	 //funzione che costruisce elementi per touch
	  	   if(isTouchDevice()) {
	  	   		$('<ul class="btnLegend">').insertAfter('#graficiPrestitiGiornaliero');
	  	 		$.each(event.chart.chartData, function(){
	  	 			$('ul.btnLegend').append('<li class="btnLegendIco" style="border-color:' + this.color + '">');
	  	 		});
	  	 		$.each($('.btnLegendIco'), function(index){
	  	 			$(this).click(function(e){
	  	 				e.preventDefault();
        				e.stopPropagation();
	  	 				$('#graficiPrestitiGiornaliero svg text').remove();
	  	 				if ($(this).is("li.selected")) {
	  	 					$('.btnLegend li').removeClass('selected').css('background-color', '#fff');
	  	 					$(this).removeClass('selected').css('background-color', '#fff');
	  	 				}
	  	 				else{
	  	 					var tooltip = event.chart.chartData[index].percents.toFixed(2) + '% ' + event.chart.chartData[index].title;
	  	 					console.log(event.chart.chartData[index]);
	  	 					event.chart.addLabel(20, event.chart.chartData[index].balloonY, tooltip, 'left', '12', '#000');
	  	 					$('.btnLegend li').removeClass('selected').css('background-color', '#fff');
	  	 					$(this).addClass('selected').css('background-color', event.chart.chartData[index].color);
	  	 				}
	  	 			})
	  	 		});
	  	   }
	  	   
	  	 	
	  }
 	  
 	  function setPrestitiGraph() {
 	 	//costruzione garfico a torta prestiti
 	 	var chartPrestiti = AmCharts.makeChart( "graficiPrestitiGiornaliero", {
 	 		"type": "pie",
 	 		"dataProvider": data,
			"valueField": "value",
  			"titleField": "labelPrestito",
			"colors": [
				"#8AB00B",
				"#cccccc"
			],
			"width": '100%',
            "height": '100%',
            "angle": 15,
            "depth3D": 7,
            "balloonText": "[[percents]]% [[labelPrestito]]",
            "labelsEnabled": false,
            "balloonFunction": function(item, graph) {
                if (!isTouchDevice()) {
                    return graph;
                } else {
                return '';
                }
            },
            "listeners": [{
    			"event": "rendered",
    			"method": buildTouchFeature
  			}],
  			"pullOutOnlyOne": false,
            "pullOutRadius": 0,
            "pullOutDuration": 0,
            "startDuration": 0

 	 	});
 	 	

 	 };
 	 return {
 	 	'initGraphPrestiti' : setPrestitiGraph
 	 }
 }());

graficiPrestitiPie.initGraphPrestiti();
//FINE GRAFICO A TORTA TABELLA TOP PAGINA

//COSTRUZIONE RIGHE DI DETTAGLIO TABELLE CON GRAFICI A COLONNE
var graficiPrestitiTable = (function(){
	function appendRowDetail(){
	$('#tableOrdered .td-accordion a').click(function(event){
		var idRow = $(this).attr('href'),
			idGraph = idRow.replace('#','').replace('collapse','graph');
		if ($(idRow).length==0){	
			var trDetail = '<tr id="' + idRow.replace('#','') +'" class="collapse" aria-expanded="false"><td colspan="7"><div class="graphWrapper" id="' + idGraph +'"></div></td></tr>';
			$(trDetail).insertAfter($(this).closest('tr'));
			setPrestitiTableGraph.call(this,idGraph);//costruisco i grafici per ogni riga settando lo il contesto del this
		}
		})
	}

 	function setPrestitiTableGraph(idGraph) {
 	
 		
 		//costruzione garfico a torta prestiti
 	 	//console.log(data);
 	 	 var data = eval($(this).closest('tr').attr('data-graph'));
		 console.log(data)
		 var chartPrestitiTable = AmCharts.makeChart(idGraph, {
			"type": "serial",
			"legend": {
		        "position": "top",
				"switchable": false,
				"autoMargins": false,
				"fontSize":10
				
		    },
		    "dataProvider": data,
		    "valueAxes": [{
		        "stackType": "regular",
		        "axisAlpha": 0,
		        "gridAlpha": 0.15,
		        "autoGridCount": false,
                "gridCount": 4,
                "gridAlpha": 0.15,
                "stackType": "regular",
                "labelsEnabled": true
			 }],
			"graphs": [{
		        "balloonText": "<b>[[value]]</b>",
		        "fillAlphas": 0.8,
		        "labelText": "[[value]]",
		        "lineAlpha": 0,
		        "title": "N. titoli remunerati allo 0.15%",
		        "type": "column",
				"color": "#000000",
				"fillColors": "#8AB00B",
		        "valueField": "Ntitoli1"

		    	}, {
		        "balloonText": "<b>[[value]]</b>",
		        "fillAlphas": 0.8,
		        "labelText": "[[value]]",
		        "lineAlpha": 0,
		        "title": "N. titoli remunerati allo 0.625%",
		        "type": "column",
				"color": "#000000",
				"fillColors": "#000",
				"valueField": "Ntitoli2"
			    }, {
		        "balloonText": "<b>[[value]]</b>",
		        "fillAlphas": 0.8,
		        "labelText": "[[value]]",
		        "lineAlpha": 0,
		         "title": "N. titoli non in prestito",
		        "type": "column",
				"color": "#000000",
				"fillColors": "#ccc",
		        "valueField": "Ntitoli3"
	    }
	    ],
	    "categoryField": "giorno",
	    "categoryAxis": {
                    "dashLength": 1,
                    "startOnAxis": false,
                    "autoGridCount": false,
                    "gridCount": 31,
                    "gridAlpha": 0,
                    "gridPosition": 'start',
                    "axisAlpha": 0
                   
                },

	    "export": {
	    	"enabled": true
	     }

 	 	})

 	}


	return {
			'initGraphPrestitiHtml': appendRowDetail
	}
}());
//al load costruisco la bootstrapTable poi inizializzo i grafici nelle righe dinamiche della stessa
$(function(){
	$('#tableOrdered').bootstrapTable({
		onPostBody: function() {
			graficiPrestitiTable.initGraphPrestitiHtml();
		}
	})
})

//COSTRUZIONE RIGHE DI DETTAGLIO TABELLE CON GRAFICI A COLONNE


</script>
<style>
	.btnLegend{text-align:center;margin-left:0;margin-top:20px;}
	#graficiPrestitiGiornaliero{width:90%;diplay:block;height:180px;}
	.graphWrapper{width:100%;display:block;height:180px;}
</style>
<h2>Portagoglio extra</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">

			<li class="on" id="box5tab1"><a href="#" title="stato">stato</a></li>

			<li class="off" id="box5tab2"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_portafoglio_extra_storico.php&responsive=y&liv0=3&liv1=0&liv2=0&liv3=4#" title="storico">storico</a></li>

		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
		<p>Tieni d'occhio i <strong>rendimenti</strong> del servizio Portafoglio Extra. Puoi verificare <strong>giorno per giorno</strong> i compensi maturati in occasione dei tuoi <a href="#" data-toggle="modal" data-target="#layerPrestiti">prestiti titoli.</a></p>
		<!--selettore rapporto-->
		<form class="formGenerico borderFormRounded output" role="form" id="form02">
			  <!--caso con selettore rapporto -->
			<div class="form-group">
				<div class="row">
					<div class="col-xs-12 col-sm-5">
						<label class="control-label-output">Deposito titoli</label>
						<div id="sceltaRapporto" class="selectRapp">
						<input id="sceltaRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>
						<a href="javascript:;" class="inputOption inputSx form-control">
							<span class="inputDx">
								<span class="input">
									xxx/aaaaaa
								</span>
							</span>
						</a>
						<div class="selector" style="display: none;">
							<span class="group">
								<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
								<strong>xxx/aaaaaa</strong><br/>
								Nome Nome Cognome Cognome1</a>
							</span>
							<span class="group">
								<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
								<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
								<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">
								<strong>xxx/bbbbbb/0</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
								<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
								<strong>xxx/bbbbbb/1</strong><br/>
								Nome Nome Cognome Cognome1</a>
								<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions">
								<strong>xxx/bbbbbb/2</strong><br/>
								Nome Nome Cognome Cognome2</a>
							</span>
							<span class="group">
								<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc</strong><br/>
									Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
									Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
									Nome Nome Cognome Cognome5</a>
								<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/0</strong><br/>
									Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
									Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
									Nome Nome Cognome Cognome5</a>
								<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/1</strong><br/>
									Nome Nome Cognome Cognome1</a>
								<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/2</strong><br/>
									Nome Nome Cognome Cognome2</a>
								<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/3</strong><br/>
									Nome Nome Cognome Cognome3</a>
								<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/4</strong><br/>
									Nome Nome Cognome Cognome4</a>
								<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
									<strong>xxx/cccccc/5</strong><br/>
									Nome Nome Cognome Cognome5</a>
							</span>
						</div>
					</div>

					</div>
					
				</div>
			</div>
		</form>
		<h4>Situazione odierna - 10/03/2017</h4>
		<div class="borderFormRounded">
			<form class="formGenerico output">
				<div class="row">
					<div class="form-group last">
						<!--RIGA DIVISA IN QUATTRO CAMPI -->
						<div class="row">
						 	<div class="col-sm-6">	
								<label class="control-label-output">Totale controvalore titoli prestabili</label>
								<span class="output">709.760,12&euro;</span>
							</div>
							<div class="col-sm-6">	
								<label class="control-label-output">Controvalore titoli in prestito</label>
								<span class="output">698.661,93&euro;</span>
							</div>			
						</div>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-sm-8">
					<h4>TOP 5 in prestito</h4>
					<table cellpadding="0" cellspacing="0" data-toggle="table" id="table1">
						<thead>
							<tr>
					            <th class="left" data-field="Titolo">Titolo</th>
					            <th class="center" data-field="Mewcato">Mercato</th>
					            <th class="right" data-field="Ctv">Ctv. in prestito</th>
					            <th class="center" data-field="Percentuale">% in prestito	</th>
					            <th class="center" data-field="Tasso">Tasso annuo</th>
					            <th class="right" data-field="Garanzia">Garanzia</th>
					        </tr>
						</thead>
						<tbody>
							<tr>
								<td class="left">ENEL</td>
								<td class="center">MTA</td>
								<td class="right">251.768,79</td>
								<td class="center">100,00</td>
								<td class"center">0,18%</td>
								<td class="right">264.357,23</td>
							</tr>
							<tr>
								<td class="left">UNICREDITO</td>
								<td class="center">MTA</td>
								<td class="right">113.811,55</td>
								<td class="center">100,00</td>
								<td class"center">0,15%</td>
								<td class="right">119.502,13</td>
							</tr>
							<tr>
								<td class="left">TELECOM ITALIA SPA RISPARMIO P...</td>
								<td class="center">MTA</td>
								<td class="right">97.098,65</td>
								<td class="center">97,71</td>
								<td class="center">0,15%</td>
								<td class="right">101.953,58</td>
							</tr>
							<tr>
								<td class="left">INTESA SANPAOLO</td>
								<td class="center">MTA</td>
								<td class="right">69.548,12</td>
								<td class="center">100,00</td>
								<td class="center"0,16%</td>
								<td class="right">73.025,52</td>
							</tr>
							<tr>
								<td class="left">TELECOM ITALIA</td>
								<td class="center">MTA</td>
								<td class="right">41.528,59</td>
								<td class="center">96,56</td>
								<td class="center">0,15%</td>
								<td class="right">43.605,02</td>
							</tr>
						</tbody>
						
					</table>
				</div>
				<div class="col-sm-4">
					<div id="graficiPrestitiGiornaliero">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<h4>Titoli in prestito nel mese in corso - <span>MARZO</span></h4>
		 <table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable" data-sortable="true" data-sort-order="asc" data-sort-name="titolo">
		     <thead>
		        <tr>
		            <th data-field="oggiPrestito" data-sortable="true">Oggi in prestito</th>
		            <th class="left" data-field="titolo" data-sortable="true">Titolo</th>
		            <th class="left" data-field="isin" data-sortable="true">ISIN</th>
		            <th class="left" data-field="mercato" data-sortable="true">Mercato</th>
		            <th class="right" data-field="proventiTot" data-sortable="true" data-sorter="fixQuant">% proventi sul totale</th>
		            <th class="right" data-field="garanzia" data-sortable="true" data-sorter="fixQuant">Garanzia</th>
		            <th class="center td-accordion hidden-xs" width="20"></th>
				 </tr>
		     </thead>
		     <tbody>
	     		<tr data-graph="[{'giorno' : 1,'Ntitoli1': 58416,'Ntitoli2': 3835,'Ntitoli3': 0}, {'giorno' : 2,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 3,'Ntitoli1': 32416,'Ntitoli2': 4322,'Ntitoli3': 12},{'giorno' : 4,'Ntitoli1': 22416,'Ntitoli2': 5835,'Ntitoli3': 0},{'giorno' : 5,'Ntitoli1': 5416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 6,'Ntitoli1': 57446,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 7,'Ntitoli1':22416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 8,'Ntitoli1': 12716,'Ntitoli2': 5835,'Ntitoli3': 0},{'giorno' : 9,'Ntitoli1': 57416,'Ntitoli2': 5835,'Ntitoli3': 0},{'giorno' : 10,'Ntitoli1': 37416,'Ntitoli2': 7835,'Ntitoli3': 0},{'giorno' : 11,'Ntitoli1': 7416,'Ntitoli2': 15835,'Ntitoli3': 1233},{'giorno' : 12,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 13,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 14,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 15,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 16,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 17,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 18,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 19,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 20,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 21,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 22,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 23,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 24,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 25,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 26,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 27,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 28,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 29,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 30,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 31,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0}];">
	     			<td class="center"><i class="icon icon-checkbox stato-ok"></i></td>
	     			<td>CNH INDUSTRIAL N.V.</td>
	     			<td>NL0010545661</td>
	     			<td>MTA</td>
	     			<td>4,77%</td>
	     			<td>36.919,10</td>
	     			<td class="td-accordion hidden-xs"><a data-toggle="collapse" href="#collapserow1" aria-expanded="false" aria-controls="collapse" href="#1" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
	     		</tr>
	     		<tr data-graph="[{'giorno' : 1,'Ntitoli1': 10000,'Ntitoli2': 3835,'Ntitoli3': 0}, {'giorno' : 2,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 3,'Ntitoli1': 32416,'Ntitoli2': 4322,'Ntitoli3': 12},{'giorno' : 4,'Ntitoli1': 22416,'Ntitoli2': 5835,'Ntitoli3': 0},{'giorno' : 5,'Ntitoli1': 5416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 6,'Ntitoli1': 57446,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 7,'Ntitoli1':22416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 8,'Ntitoli1': 12716,'Ntitoli2': 5835,'Ntitoli3': 0},{'giorno' : 9,'Ntitoli1': 57416,'Ntitoli2': 5835,'Ntitoli3': 0},{'giorno' : 10,'Ntitoli1': 37416,'Ntitoli2': 7835,'Ntitoli3': 0},{'giorno' : 11,'Ntitoli1': 7416,'Ntitoli2': 15835,'Ntitoli3': 1233},{'giorno' : 12,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 13,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 14,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 15,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 16,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 17,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 18,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 19,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 20,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 21,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 22,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 23,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 24,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 25,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 26,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 27,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 28,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 29,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 30,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 31,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0}];">
	     			<td class="center"><i class="icon icon-checkbox stato-ok"></i></td>
	     			<td>ENEL</td>
	     			<td>IT0003128367</td>
	     			<td>MTA</td>
	     			<td>39,86%</td>
	     			<td>293.224,72</td>
	     			<td class="td-accordion hidden-xs"><a data-toggle="collapse" href="#collapserow2" aria-expanded="false" aria-controls="collapse" href="#1" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
	     		</tr>
	     		<tr data-graph="[{'giorno' : 1,'Ntitoli1': 534534,'Ntitoli2': 3835,'Ntitoli3': 0}, {'giorno' : 2,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 3,'Ntitoli1': 32416,'Ntitoli2': 4322,'Ntitoli3': 12},{'giorno' : 4,'Ntitoli1': 22416,'Ntitoli2': 5835,'Ntitoli3': 0},{'giorno' : 5,'Ntitoli1': 5416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 6,'Ntitoli1': 57446,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 7,'Ntitoli1':22416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 8,'Ntitoli1': 12716,'Ntitoli2': 5835,'Ntitoli3': 0},{'giorno' : 9,'Ntitoli1': 57416,'Ntitoli2': 5835,'Ntitoli3': 0},{'giorno' : 10,'Ntitoli1': 37416,'Ntitoli2': 7835,'Ntitoli3': 0},{'giorno' : 11,'Ntitoli1': 7416,'Ntitoli2': 15835,'Ntitoli3': 1233},{'giorno' : 12,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 13,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 14,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 15,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 16,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 17,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 18,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 19,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 20,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 21,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 22,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 23,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 24,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 25,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 26,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 27,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 28,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 29,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 30,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0},{'giorno' : 31,'Ntitoli1': 57416,'Ntitoli2': 1835,'Ntitoli3': 0}];">
	     			<td class="center"><i class="icon icon-checkbox stato-ok"></i></td>
	     			<td>ENEL</td>
	     			<td>IT0003128367</td>
	     			<td>MTA</td>
	     			<td>39,86%</td>
	     			<td>293.224,72</td>
	     			<td class="td-accordion hidden-xs"><a data-toggle="collapse" href="#collapserow2" aria-expanded="false" aria-controls="collapse" href="#1" class="no-underline btn-icon collapsed"><i class="icon icon-2x icon-row_expand"></i><i class="icon icon-2x icon-row_contract"></i></a></td>
	     		</tr>
	     	</tbody>
			<tfoot>
				<tr class="totali">
					<td colspan="5"><strong>Rendimento lordo totale (EUR)</strong></td>
					<td class="right bgWhite">9.999,99</td>
					<td class="bgWhite brdWhite"></td>
				</tr>
			</tfoot>
		</table>
		<div class="flRight pulsantiera">
	      <a href="javascript:;" class="no-underline btn-icon"><i class="icon icon-2x icon-excel_filled"></i></a>
	      <a href="javascript:;" class="no-underline btn-icon"><i class="icon icon-2x icon-pdf_circle_filled"></i></a>
	    </div>
	</section>
	</div>
</div>

<div class="modal fade" id="layerPrestiti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
						<h3>Come funziona Portafoglio Extra?</h3>
						<p>Aderendo a Portafoglio Extra, il servizio di &quot;prestito titoli&quot; di Webank, il cliente si rende disponibile a prestare i titoli presenti nel proprio portafoglio, ricevendo in cambio una <strong>remunerazione giornaliera</strong>r in caso di utilizzo degli stessi da parte della banca. In questo caso, in base al controvalore dei titoli effettivamente prestati, Webank ti riconosce un compenso alla fine del mese sul tuo conto, <strong>senza alcun vincolo sulla tua operativit&agrave;</strong>. 
						<br>
						Con l'attivazione del servizio, la banca <strong>potr&agrave; prendere in prestito</strong> i titoli nel tuo portafoglio per darli a broker o utilizzarli per operazioni di copertura. Nei giorni in cui i tuoi titoli sono effettivamente presi in prestito (cosa che dipende dalla domanda degli investitori) <strong>maturi un certo rendimento</strong>, che puoi <strong>verificare e tenere sotto controllo</strong> direttamente su Webank.</p>

						<h3>Quanto rende?</h3>
						<p>Il rendimento dei tuoi titoli pu&ograve; variare da prestito a prestito in funzione delle condizioni di mercato. Tutti i prestiti hanno una durata <strong>pari a un giorno</strong>. Ogni giorno di utilizzo dei tuoi titoli (compresi i giorni festivi) riceverai una remunerazione che sar&agrave; <strong>liquidata direttamente sul tuo conto corrente alla fine del mese</strong>. La remunerazione derivante dal prestito titoli viene tassata con aliquota fiscale del 20%.
						In ogni momento puoi <strong>verificare</strong> le operazioni di prestito effettuate nell'arco della giornata, <strong>consultare il rendimento</strong> del tuo portafoglio con i dettagli di ogni titolo, il riepilogo dei prestiti del mese in corso e lo <strong>storico</strong> dei tre mesi precedenti.</p>

						<h3>Disponibilit&agrave; dei titoli e operativit&agrave;</h3>
						<p>Webank ha elaborato un meccanismo di ripartizione per consentire a <strong>tutti i clienti</strong> di ottenere una <strong>remunerazione proporzionale</strong> alle quantit&agrave; messe a disposizione: il rapporto tra quantità prestata e quantità disponibile è quindi uguale per tutti i clienti.
						Anche autorizzando la banca a prendere in prestito i tuoi titoli, questi <strong>rimangono nella tua piena disponibilit&agrave;</strong>: l'operativit&agrave; non cambia in nulla, potrai continuare a <strong>vendere i titoli</strong> in ogni momento e <strong>incassare i dividendi</strong>. Nel caso in cui Webank prenda in prestito strumenti finanziari di societ&agrave; che abbiano deliberato lo stacco di cedole o il pagamento di dividendi, la banca effettuerà a favore del cliente un pagamento sostitutivo del dividendo al netto della ritenuta di cui agli artt. 27 e 27-ter DPR n. 600/1973 e successive modifiche e integrazioni.
						<br>La restituzione potrebbe avere ad oggetto strumenti finanziari privi di qualsivoglia valore, e ciò a causa dell'andamento dell'emittente e/o del mercato. In tutti i casi in cui la restituzione dei titoli presi a prestito sia divenuta impossibile o anche solo difficile per causa non imputabile a Webank (a titolo esemplificativo e non esaustivo a causa dello scarso flottante dello strumento sul mercato), la banca sarà liberata dalle proprie obbligazioni corrispondendo al cliente un importo in denaro al posto degli strumenti finanziari. Detto importo sarà pari al valore di mercato dei titoli alla data prevista per la restituzione o al valore di presumibile realizzo, così come definito contrattualmente.</p>

						<h3>Garanzia a tutela delle operazioni di prestito</h3>
						<p>Sui prestiti attivi, la banca ti riconosce una <strong>garanzia</strong>, cio&egrave; un importo a <strong>tutela delle operazioni di prestito</strong>. Questo importo pu&ograve; variare, da un minimo di 100% a un massimo di 105% rispetto al controvalore dei titoli presi a prestito. 
						L'importo della garanzia &egrave; visibile sul sito web nello &quot;stato&quot; e tramite l'esportazione in excel e in pdf nello stato e storico del Portafoglio Extra.</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
