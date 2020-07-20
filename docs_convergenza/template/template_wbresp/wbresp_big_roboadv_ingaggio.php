<div class="row">
	<div class="col-xs-12">
		<!-- Banner in testa -->
		<img src="/wbresp/img/roboadv_landing_banner.jpg" class="img-responsive heroimg" alt="Cogli tutte le occasioni dei mercati!">
		<!-- Fine banner in testa -->
	</div>	
</div>
<div class="row">
	<div class="col-md-12">
	  	<div class="bcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
			<span property="itemListElement" typeof="ListItem"> <a property="item" typeof="WebPage" href="#"><span property="name">Home</span></a><meta property="position" content="1"></span>
			<span class="symb">&gt;</span>
			<span property="itemListElement" typeof="ListItem"> <a property="item" typeof="WebPage" href="#"><span property="name">Investimenti</span></a><meta property="position" content="2"> </span>
			<span class="symb">&gt;</span>
			<span class="lastleaf">Scopri che investitore sei</span>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
	 	<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
	 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium a voluptates tempore, rem? Deleniti culpa quos, fuga id similique blanditiis inventore. Eius dicta, quas veritatis ad nam incidunt libero praesentium reprehenderit amet facilis, molestiae blanditiis dolore nihil sunt aliquid aperiam!</p>
	</div>
</div>
<!-- Semplice accesso -->
<div class="borderedBox">
	<div class="row">
		<div class="col-md-8 col-xs-12">
			<h3>Hai gi&agrave; fatto la simulazione?</h3>
		</div>
		<div class="col-md-4 col-xs-12">
			<a class="btn-grlit btn-grlit-arrow fright uppercase inlineB nomargtop" title="Accedi">Accedi</a>
		</div>
	</div>
</div>
<!-- fine semplice accesso -->
<!-- Selettore interattivo multistep -->
<script type="text/javascript">

	// Inizializzazioni profilazioni 
	var profili = {
		"Il calcio" : {
			"Portiere" : {immagine: "/wbresp/img/roboadv/profilo_calcio_portiere.png", valore: "1",descrizione: "La difesa del risultato &egrave; il tuo  unico obiettivo e per questo non vuoi correre nessun rischio."},
			"Difensore" : {immagine: "/wbresp/img/roboadv/profilo_calcio_difensore.png", valore: "2",descrizione: "Contenere le incursioni degli avversari &egrave; la tua missione, ma sei presente se l'azione lo richiede."},
			"Centrocampista" : {immagine: "/wbresp/img/roboadv/profilo_calcio_centrocampista.png", valore: "3",descrizione: "Sostenere l'attacco e proteggere la difesa &egrave; il delicato equilibrio che cerchi sempre di raggiungere."},
			"Trequartista" : {immagine: "/wbresp/img/roboadv/profilo_calcio_trequartista.png", valore: "4",descrizione: "Sei il playmaker della squadra, costruire le azioni di attacco &egrave; la tua specialit&agrave;."},
			"Attaccante" : {immagine: "/wbresp/img/roboadv/profilo_calcio_attaccante.png", valore: "5",descrizione: "Finalizzare ogni azione &egrave; il tuo unico obiettivo anche a costo di sbilanciare la squadra se ne vale la pena."}
		},
		"La danza" : {
			"Classica" : {immagine: "/wbresp/img/roboadv/profilo_danza_classica.png", valore: "1",descrizione: "Scegli la tranquillit&agrave; per andare sul sicuro. Altri ritmi non ti interessano."},
			"Valzer" : {immagine: "/wbresp/img/roboadv/profilo_danza_valzer.png", valore: "2",descrizione: "Segui il ritmo della tradizione, un passo sicuro con regole ben definite. Qualche tourbillon &egrave; pur concesso."},
			"Tango" : {immagine: "/wbresp/img/roboadv/profilo_danza_tango.png", valore: "3",descrizione: "Preferisci la perfetta armonia dell'alternanza tra passi lenti e veloci con qualche casqu&egrave;."},
			"Latino americano" : {immagine: "/wbresp/img/roboadv/profilo_danza_latino.png", valore: "4",descrizione: "Prediligi ritmi sempre incalzanti e coinvolgenti che trasmettono emozioni anche intense."},
			"Hip-hop" : {immagine: "/wbresp/img/roboadv/profilo_danza_hiphop.png", valore: "5",descrizione: "Cerchi a tutti i costi il divertimento senza essere inquadrato in schemi rigidi."}
		},
		"Gli animali" : {
			"Tartaruga" : {immagine: "/wbresp/img/roboadv/profilo_animali_tartaruga.png", valore: "1",descrizione: "Rischi? No grazie. Ti rifugi nel tuo guscio protettivo per evitarli del tutto."},
			"Scoiattolo" : {immagine: "/wbresp/img/roboadv/profilo_animali_scoiattolo.png", valore: "2",descrizione: "Rischi? Il minimo indispensabile. Accumuli  provviste per l'inverno e le tieni al sicuro."},
			"Delfino" : {immagine: "/wbresp/img/roboadv/profilo_animali_delfino.png", valore: "3",descrizione: "Rischi? Si ma ben dosati. Ti muovi con destrezza tra le onde per sfruttarle a tuo favore."},
			"Lepre" : {immagine: "/wbresp/img/roboadv/profilo_animali_lepre.png", valore: "4",descrizione: "Rischi? Se servono per raggiungere i  tuoi obiettivi, perch&egrave; no?"},
			"Ghepardo" : {immagine: "/wbresp/img/roboadv/profilo_animali_ghepardo.png", valore: "5",descrizione: "Rischi? Assolutamente si. Sono indispensabili per massimizzare i tuoi obiettivi."}
		}
	}


	// Automazioni del selettore
	$(function(){

		// Input associato a 2 campi diversi (controllare gli attributi data-value)
		var inpMetafora = $("input[name=metafora]"),
			inpProfilo = $("input[name=profilo]"),
			tMetafora = $("#testMetafora"),
			tProfilo = $("#testProfilo"),
			tstep1 = $("#testStep1"),
			tstep2 = $("#testStep2");
			iniziabtn = $("#btnIniziaTest");

		// Inizializzazioni selettore profilo
		var profTitle = $("#titoloProfilo")


		
		// Creazione delle profilazioni
		var getProfili = function(profilo) {
			pdata = profili[profilo];
			profTitle.html(profilo);
			var profSelBox = tProfilo.find(".selector-box");
			var profSelBoxSmall = $("#profiliCarousel").find(".item");
			var pindex = 0;
			// Popola i selettori
			$.each(pdata,function(k,v) {

				var selCont = $("<div>").append(
					$("<div>").addClass("imgwrap").append($("<img>").attr("src",v.immagine)),
					$("<h4>").html(k),
					$("<p>").html(v.descrizione),
					$("<a>").addClass("btn-grlit btn-grlit-arrow btn-adaptive btn-fs14 uppercase fright hidden-sm hidden-lg hidden-md").html("Scegli").attr("data-value",v.valore)
				);

				profSelBox.eq(pindex).empty().attr("data-value",v.valore).append(selCont);
				profSelBoxSmall.eq(pindex).empty().attr("data-value",v.valore).append(selCont.clone());
				pindex++;
			})

			/* Click profilo su smartphone */
			$("#profiliCarousel .btn-grlit").click(function(){
				$("#profiliCarousel .item").removeClass("selected");
				var item = $(this).parents(".item").addClass("selected");
				inpProfilo.val(item.attr("data-value"));
				iniziabtn.removeClass("disabled");
			});

		}	

		/* Selezione della metafora */
		tMetafora.find(".item .btn-grlit").click(function(){
			var pval = $(this).attr("data-metafora");
			inpMetafora.val(pval);
			tMetafora.hide();
			getProfili(pval);
			tProfilo.fadeIn();
			// Mostra il profilo prescelto
			$("#profiliSport").show();
			tstep2.addClass("active");
		});

		/* Reset del form */
		tstep1.click(function(){
			tstep2.removeClass("active");
			iniziabtn.addClass("disabled");
			inpMetafora.val("");
			inpProfilo.val("");
			tProfilo.hide().find("input").val();
			tProfilo.find(".selector-box").removeClass("selected");
			tMetafora.fadeIn();
			$("#profiliCarousel .item").removeClass("selected");
		});

		/* Click sul profilo */
		tProfilo.find(".selector-box").click(function(){
			inpProfilo.val($(this).attr("data-value"));
			iniziabtn.removeClass("disabled");
		});

		/* Inizia il test */
		iniziabtn.click(function(){

			if(!$(this).hasClass("disabled")) {
			// Inserire qui l'azione
				alert("post del form ed inizio del questionario (login)?")
			}
		});

	});

</script>
<div class="borderedBox">
	<div class="row">
		<!-- Presentazione -->
		<div class="col-xs-12">
			<h3>Non hai ancora fatto la simulazione?</h3>
		</div>
	</div>
	<!-- Fine presentazione -->
	<form id="form-profilo">
		<div class="testProfile">
			<input type="hidden" name="metafora" value="">
			<input type="hidden" name="profilo" value="">
			<!-- Stepper -->
			<div class="row">
					<div class="col-xs-12">
						<div id="testStep" class="step-hor">
							<ul>
								<li><a id="testStep1" class="active"><span class="number" >1</span> <span class="text">Scegli la tua ambientazione</span></a></li>
								<li><a id="testStep2"><span class="number">2</span> <span class="text">Scegli la tua immagine</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Fine stepper -->
			<!-- Carousel metafore -->
			<div id="testMetafora">
				<div class="row">
					<div class="col-xs-12">
						<div id="metaforaCarousel" class="carousel slide greenarrows trading" data-ride="carousel"  data-interval="false">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#metaforaCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#metaforaCarousel" data-slide-to="1"></li>
						    <li data-target="#metaforaCarousel" data-slide-to="2"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">
							  	<!-- Metafora sport -->
							    <div class="item active item01">
							    	<div class="row">
										<div class="col-sm-5 col-xs-12">
											<img src="/wbresp/img/roboadv/profili_calcio.jpg" class="img100">
										</div>	
										<div class="col-sm-7 col-xs-12">
											<h4>Il calcio</h4>
									    	<p>Qual &egrave; il tuo ruolo in una squadra di calcio? In che posizione riesci a dare il meglio di te sul campo?</p>
									    	<a href="javascript:;" class="btn-grlit btn-grlit-arrow btn-adaptive btn-fs14 uppercase fright" title="Scegli ambientazione calcio" data-metafora="Il calcio">Scegli</a>
							    		</div>
							    	</div>
							    	
							    </div>
							    <!-- Fine metafora sport -->

							    <!-- Metafora ballo -->
							    <div class="item item02">
							    	<div class="row">
										<div class="col-sm-5 col-xs-12">
											<img src="/wbresp/img/roboadv/profili_danza.jpg" class="img100">
										</div>	
										<div class="col-sm-7 col-xs-12">
											<h4>Il ballo</h4>
									    	<p>Qual &egrave; i il tuo ballo preferito? Quale ritmo ti coinvolge di più?</p>
									    	<a href="javascript:;" class="btn-grlit btn-grlit-arrow btn-adaptive btn-fs14  uppercase fright" title="Scegli metafora calcio" data-metafora="La danza">Scegli</a>
							    		</div>
							    	</div>
							    	
							    </div>
							    <!-- Fine metafora ballo -->


							    <!-- Metafora animali -->
							    <div class="item item03">
							    	<div class="row">
										<div class="col-sm-5 col-xs-12">
											<img src="/wbresp/img/roboadv/profili_animali.jpg" class="img100">
										</div>	
										<div class="col-sm-7 col-xs-12">
											<h4>Gli animali</h4>
									    	<p>Quale animale ti assomiglia di pi&ugrave;? Quale sua abitudine ti ricorda alcuni dei tuoi atteggiamenti?</p>
									    	<a href="javascript:;" class="btn-grlit btn-grlit-arrow btn-adaptive btn-fs14  uppercase fright" title="Scegli metafora calcio" data-metafora="Gli animali">Scegli</a>
							    		</div>
							    	</div>
							    	
							    </div>
							    <!-- Fine metafora animali -->
							</div>
						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#" role="button" data-target="#metaforaCarousel" data-slide="prev">
						    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#" role="button" data-target="#metaforaCarousel" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
			</div>
			<!-- fine carousel metafore -->
			<div id="testProfilo" style="display:none">
				<div class="row">
					<div class="col-xs-12">
						<!-- Profilo sport -->
						<div id="profiliSport" style="display:none">
						<h4 id="titoloProfilo"></h4>
						
						<!-- Selettore "standard" --> 
						<div class="selector-wrap hidden-sm hidden-xs" data-input-type="radio" data-input-name="profiloSelezionato">
			                <input name="profiloSelezionato" type="hidden" value="">
			                <div class="custom-row custom-5 ">
			                	<div class="custom-col">
			                		<div class="selector-box">
			                		</div>
			                	</div>
			                	<div class="custom-col">
									<div class="selector-box">
			                		</div>
			                	</div>
			                	<div class="custom-col">
									<div class="selector-box">
			                		</div>
			                	</div>
			                	<div class="custom-col">
	  								<div class="selector-box">
			                		</div>
			                	</div>
			                	<div class="custom-col">
									<div class="selector-box">
			                		</div>
			                	</div>
			                </div>
			            </div>
			            <!-- Fine selettore standard -->
						
						<!-- Selettore per smartphone -->
						<div class="carousel slide greenarrows hidden-lg hidden-md trading" data-ride="carousel" data-interval="false" id="profiliCarousel">
							<input name="profiloSelezionatoSmall" type="hidden" value="">
							  <!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#profiliCarousel" data-slide-to="0" class="active"></li>
							    <li data-target="#profiliCarousel" data-slide-to="1"></li>
							    <li data-target="#profiliCarousel" data-slide-to="2"></li>
							    <li data-target="#profiliCarousel" data-slide-to="3"></li>
							    <li data-target="#profiliCarousel" data-slide-to="4"></li>
							  </ol>
		 						<div class="carousel-inner" role="listbox">
					                <div class="item active"></div>
				                	<div class="item"></div>
				                	<div class="item"></div>
				                	<div class="item"></div>
				                	<div class="item"></div>
					            </div>
					              <a class="left carousel-control" href="#" role="button" data-target="#profiliCarousel" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								  </a>
								  <a class="right carousel-control" href="#" role="button" data-target="#profiliCarousel" data-slide="next">
								    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								    <span class="sr-only">Next</span>
								  </a>
					    </div>
			            <!-- Fine selettore per smartphone -->

					</div>
					<!-- Fine profilo sport --> 
				
				</div>
			</div>
		</div>
	</form>
	<!-- CTA -->
	<div class="row">
		<div class="col-xs-12">
			<a class="btn-grlit btn-grlit-arrow fright uppercase inlineB nomargtop disabled" title="Inizia il test" id="btnIniziaTest">Inizia</a>
		</div>
	</div>
	<!-- FINE CTA -->
</div>

<!-- Fine selettore interattivo multistep-->