<section>
	<div class="row">
		<div class="col-xs-12">
			<div class="quest-profilo">
				<div class="profilo-wrap">
					<div class="scelto">
						<span class="title">avevi scelto</span>
						<div class="bollo">
							<img src="/wbresp/img/roboadv/profilo_animali_lepre.png" class="">
						</div>
						<span class="title nome">Latino americano</span>
					</div>
					<span class="title">Ecco il tuo profilo:</span>
					<div class="reale">
						<div class="output animali">
							<img src="/wbresp/img/roboadv/output_animali_ghepardo.png" class="reale">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12">
			<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quas voluptates, sunt beatae!</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptas similique, corporis explicabo nostrum nobis odit, blanditiis minima totam ab quam dignissimos amet. Assumenda, veniam doloribus dicta velit incidunt obcaecati quam dolores!</p>
		</div>
	</div>
</section>
<section>
	<!-- GRAFICO -->
	<!-- Librerie per erogazione grafici -->
	<script type="text/javascript" src="/wscmn/fe/assets/amcharts/amcharts.js?a=1"></script>
	<script type="text/javascript" src="/wscmn/fe/assets/amcharts/pie.js?a=1"></script>
	<!-- Fine librerie -->
	<script type="text/javascript">

		// Inizializzazioni
		var pg, pgl;

		// Dati per il grafico
		var gData = [{
				    "nome": "Azionario",
				    "perc": 50,
				    "color": "#BC0D0D",
				    "composizione": [
				    	{"nome":"Azionario paesi emergenti","color": "#ce3820","perc":18.40 },
						{"nome":"Azionario Italia","color": "#f15e48","perc":12.26 },
						{"nome":"Azionario Pacifico Ex Giappone","color": "#f87c66","perc":18.40 },
						{"nome":"Azionario Giappone","color": "#fc9a83","perc":9.20 },
						{"nome":"Azionario Nord America","color": "#fdb5a4","perc":6.13 },
						{"nome":"Azionario Europa Ex Italia","color": "#fdd0c4","perc":24.53 },
						{"nome":"Azionario + 01","color": "#fce3dc","perc":11.042}
				    ]
				  },
				  {
				    "nome": "Obbligazionario",
				    "perc": 30,
				    "color": "#063854",
				    "composizione": [{
				    	"nome": "Fondo 1",
				    	"perc": 43.33,
				    	"color": "#66CDAA"
					    },
						{
				    	"nome": "Fondo 2",
				    	"perc": 33.33,
				    	"color": "#008080"
					    },
					    {
				    	"nome": "Fondo 3",
				    	"perc": 23.33,
				    	"color": "#87CEEB"
				   		}
				    	]
				  },
				  {
				    "nome": "Monetario",
				    "perc": 20,
				    "color": "#009933",
				    "composizione": [{
				    	"nome": "Fondo 1",
				    	"perc": 43.33,
				    	"color": "#66CDAA"
					    },
						{
				    	"nome": "Fondo 2",
				    	"perc": 33.33,
				    	"color": "#008080"
					    },
					    {
				    	"nome": "Fondo 3",
				    	"perc": 23.33,
				    	"color": "#87CEEB"
				   		}
				    	]
				  }];


	</script>

	<script type="text/javascript">
		
		// Costruzione del grafico onload
		$(function(){
			// Arricchimento dei dati del grafico e produzione della legenda interattiva
			pgl = $("#profileGraphLegenda");
			pgw = $("#gwProfile");
			pgBuild();

			// Inizializzazioni controlli del grafico
			$("#profileBack").click(function(){pgBuild()});
		
		});

		var pgLabelClick = function() {
			if(!pgw.hasClass("detail")) {
				pgBuild($(this).attr("data-nome"));
			}
		}

		var pgBuild = function (categoria) {

			pgw.addClass("loading");
			graphTitle = "Macroasset\nchart view";
			// Filtra i dati
			var datiGrafico = gData;
			if (categoria) {
				graphTitle = categoria;
				$.each(gData,function(i,v){
					if (v.nome == categoria) datiGrafico = v.composizione;
				});
				pgw.addClass("detail");
			}
			else
			{
				datiGrafico = gData;
				pgw.removeClass("detail");
			}

			// Creazione del grafico e dei comandi ad esso associati
			$("#profileGraph").empty();
			pg = AmCharts.makeChart("profileGraph", {
				  "type": "pie",
				  "startduration":0.2,
				  "dataProvider": datiGrafico,
				  "addClassNames": true, 
				  "titleField": "nome",
				  "valueField": "perc",
				  "pullOutRadius": "0%",
				  "labelRadius": 5,
				  "groupPercent": 2,
				  "maxLabelWidth": 100,
				  "colorField": "color",
				  "startDuration": 0,
				  "fontFamily":"ralewayMedium, arial",
				  "radius": "35%",
				  "panEventsEnabled": false,
				  "innerRadius": "80%",
				  "labelRadius": 20,
				  "labelText": "[[nome]] ([[perc]]%)",
				  "balloonText" : "[[nome]] - <b>[[perc]]%</b>",
				  "allLabels": [{
				    "y": "45%",
				    "align": "center",
				    "size": 18,
				    "text": graphTitle.toUpperCase(),
				    "color": "#666"
				  }],
				  "balloon": {
				    "adjustBorderColor": false,
				    "color": "#fff",
				    "cornerRadius": 5,
				    "fontSize": 14,
				    "cornerRadius": 10,
				    "fillAlpha":1
				  }
			});

			if (!categoria) {
				// add slice click handler
				pg.addListener("clickSlice", function (event) {
					pgBuild(event.dataItem.dataContext.nome);
				});
			}

			// Build etichette/controlli
			pgl.empty();
			$.each(datiGrafico,function(i,v){
				var labelink = $("<span>").addClass("labelegend").attr("data-nome",v.nome).append(
					$("<span>").addClass("dot").css("background-color",v.color),$("<span>").addClass("title").append(v.nome + " - <span>"+v.perc+"%</span>")
				).click(pgLabelClick);
				pgl.append(labelink);
			});

			pgw.removeClass("loading");
		}

	</script>
	<div id="gwProfile" class="graphwrapper loading">
		<h3>Il tuo portafoglio ideale &egrave;</h3>
		<div class="row">
			<div class="col-sm-8 col-xs-12">
				<p class="note">Validità portafoglio oggi 27/09/2016</p>
				<a id="profileBack" href="javascript:;" class="drillup">
					Torna alle macroasset class
				</a>
				<div id="profileGraph" class="graphcontainer">
					
				</div>	
			</div>
			<div class="col-sm-4 col-xs-12">
				<h4>Dettaglio</h4>
				<div id="profileGraphLegenda" class="graphLegenda">
					
				</div>
			</div>
		</div>
	<div class="graph">
</section>

<script type="text/javascript">
// Simulazioni con dati
var rendData = {
	"1" : {"peggiore": "1.33","media":"5.3","migliore":"11.56"},
	"3" : {"peggiore": "0.78","media":"7.33","migliore":"14.61"},
	"5" : {"peggiore": "0.33","media":"10.91","migliore":"13.53"},
}

$(function(){

	var r1 = $("#rend1"), 
		r2 = $("#rend2"), 
		r3 = $("#rend3");

	$("#renditaTempi").change(function(){
		$(".rendite .baloon").hide();
		var dati = rendData[$(this).val()];
		r1.fadeIn(500).html(dati.peggiore+"%");
		r2.delay(600).fadeIn(500).html(dati.media+"%");
		r3.delay(1200).fadeIn(500).html(dati.migliore+"%");
	
	}).trigger("change");

});

</script>
<!-- RENDITA -->
<section>
	<div class="rendite">
		<h3>E potrebbe rendere nell'arco di&nbsp;<select id="renditaTempi">
			<option selected value="1">1 anno</option>
			<option value="3">3 anni</option>
			<option value="5">5 anni</option>
		</select></h3>
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="rendita">
					<span class="title">Nello scenario<br>peggiore</span>
					<div class="baloon" id="rend1"></div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="rendita big">
					<span class="title">In media</span>
					<div class="baloon" id="rend2"></div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="rendita">
					<span class="title">Nello scenario<br>migliore</span>
					<div class="baloon" id="rend3"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- FINE RENDITA -->
<!-- PULSANTIERA -->
<section>
<div class="doublebutton">
	<div class="row">
		<div class="col-sm-4 col-xs-12">
			<h4>Questo profilo non ti si addice?</h4>
		    <a class="btn-whlit btn-hover-white alignCenter" href="#" title="Ricomincio da zero">Ricomincio da zero</a>
		</div>
		<div class="col-sm-4 hidden-xs">
		</div>
		<div class="col-sm-4 col-xs-12">
			<h4>Ti piace questo scenario?</h4>
	        <a class="btn-grlit btn-hover-white alignCenter" href="#" title="Apri Conto Webank">Apri Conto Webank</a>
		</div>
	</div>
</div>
<br class="clear">
</section>
<!-- FINE PULSANTIERA -->
<section>
	<div class="row">
		<div class="col-xs-12">
			<p class="note">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore vero id dignissimos quae quibusdam officiis sunt nobis provident, quisquam sed eligendi maiores cupiditate blanditiis quod enim eveniet, quaerat esse iste ab quis consequuntur in saepe. Cum tempore, ex fugit omnis iure quidem hic possimus commodi et eum enim impedit odio atque architecto eos earum sint similique saepe fuga laudantium nostrum?</p>
		</div>
	</div>
</section>