<!-- Richiesta -->
<h2>Gestione prelievo Cardless</h2>
<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_richiesta.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Richiesta</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_massimali.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Massimali</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_elenco.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Elenco</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_disattivazione.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Disattivazione</a></li>
		</ul>
	</div>
	<div class="separator" style="min-width: 603px;"></div>
</div>
<!-- Blocco dei contenuti -->
<div class="tabindent">
	
	<!--Esempio errore -->
	<section class="boxesitoWrap">
		<div class="boxesito negativo">
			<div class="text">
				<p>Ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
			</div>
		</div>
	</section>
	<!-- Fine esempio errore -->


	<section>
		<div class="tithelp">
		    <h4>Prelievo in corso</h4>
		</div>
		<div class="formGenerico borderFormRounded">
			<div class="form-group">
		        <div class="row">
		            <div class="col-sm-6">
		                <label class="control-label">Conto corrente di addebito</label>
		               	 <span class="output">CC 01077 0000049477 EUR<span>
	                </div>
		        </div>
		    </div>
		    <hr>

		    <div class="form-group">
		        <div class="row">
		            <div class="col-xs-12">
		                 <label class="control-label">Timer</label>
		          		 <span class="output">29:44</span>		               
		            </div>
		        </div>
		    </div>
		    <div class="form-group">
				<div class="row">
		            <div class="col-xs-12">
		                 <label class="control-label">Codice prelievo (OTP)</label>
		          		 <span class="output">123456-12345</span>		               
		            </div>
		        </div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique hic quod, minus, deleniti nisi quae. Reiciendis quasi sunt, saepe est.</p>
			</div>	
			<div class="form-group">
				<div class="row">
		            <div class="col-xs-12">
		                 <label class="control-label">	Importo richiesto</label>
		          		 <span class="output">150,00 &euro;</span>		               
		            </div>
		        </div>
			</div>	
		</div>
		<!-- STEPPER -->


		<!-- Modale ricerca agenzia -->

		<div class="modal fade" id="layerCAB" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					</div>
					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12">
									
									
									<form class="formGenerico borderFormRounded" role="form" id="formSearch">
									<p>Seleziona il comune</p>
									    <div class="form-group">
									        <div class="row">
									            <div class="col-sm-8">
									                <input type="text" id="ricLiberaAutocomplete" class="form-control clear-x">
									            </div>
									            <div class="col-sm-4">
									                <a type="button" class="btn btn-primary" href="#" id="cercaAgency">cerca agenzia</a>
									            </div>
									        </div>
									    </div>
									    </div>
									</form>
									<!-- TABELLA -->

											<div style="display:none" id="tableCity">

											<h4>Tabella con ordinamento e paginazione</h4>
											 <table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
											     <thead>
											        <tr>
											            <th data-field="cap" data-sortable="true" class="hidden-xs">
															Cap
															<span>
																<i class="icon icon-2x icon-accordion_up"></i>
																<i class="icon icon-2x icon-accordion_down"></i>
															</span>
														</th>
											            <th data-field="indirizzo" data-sortable="true" class="hidden-xs">
															indirizzo
															<span>
																<i class="icon icon-2x icon-accordion_up"></i>
																<i class="icon icon-2x icon-accordion_down"></i>
															</span>
														</th>
											            <th data-field="agenzia" data-sortable="true">
															N.agenzia
															<span>
																<i class="icon icon-2x icon-accordion_up"></i>
																<i class="icon icon-2x icon-accordion_down"></i>
															</span>
														</th>
											            <th data-field="cab" data-sortable="true" class="right">
															Cab
															<span>
																<i class="icon icon-2x icon-accordion_up"></i>
																<i class="icon icon-2x icon-accordion_down"></i>
															</span>
														</th>
											            <th data-field="ico2" data-sortable="false" class="center">Inserisci</th>
											        </tr>
											     </thead>
											</table>

											</div>

									<!-- END TABELLA  -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- End Overlayer_10-->




		<!-- Javascript x Tabella in Overlayer  -->



		<script>

		$("#cercaAgency").on('click',function(){
			$("#formSearch").hide();
			$("#tableCity").show();

		});



		    var $tableOrdered = $('#tableOrdered');
		    $(function () {
		        var data = [
			{
				"cap": 22121,
				"indirizzo": "via Roma",
				"agenzia": 00015,
				"cab": 01654,
				"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
			
			},
			{
				"cap": 21123,
				"indirizzo": "via Lombardia",
				"agenzia": 00023,
				"cab": 01675,
				"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
			},
			{
				"cap": 12928,
				"indirizzo": "piazzale Bacone",
				"agenzia": 00019,
				"cab": 01693,
				"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
			},
			{
				"cap": 22331,
				"indirizzo": "via Spontini",
				"agenzia": 00022,
				"cab": 01683,
				"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
			},
			{
				"cap": 33221,
				"indirizzo": "via Donatello",
				"agenzia": 00033,
				"cab": 01622,
				"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-trend_down\"></i ></a>"
			}
			
			];
			// Moltiplico i dati per averne di pi?
			var dataTmp = $.extend(true, {}, data);

			//for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); alert("");  }
		    arrayKey = ['ico1','ico2','cap']; 
		    $tableOrdered.bootstrapTable({
		            data: data,
		            sortable: true,
		            sortName: "cap",
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
			//definisco le colonne da nascondere su mobile
		  	//per ciascuna colonna appendo la classe che la nasconde su mobile
			fixCols();
		   });
		function detailFormatterAccordion(index, row) {
		        
		        var html = [];
		        $.each(row, function (key, value) {
		           
		            if(key=='cap' || key=='ico1' || key=='ico2' || key=='indirizzo')
		            {
		            	html.push('<p class="noMarginBottom"><strong>' + key + ':</strong>' + '</p>' + '<p>' + value + '</p>');
		        	}
		        });
		        return html.join('');
		    }
		$(window).resize(function() {
		  $tableOrdered.bootstrapTable('refreshOptions', {
		         detailView:  isSmallDevice,
		         detailFormatter:"detailFormatterAccordion"
		    });
		 });



		</script>



		<!-- Fine modale ricerca agenzia -->


		<div class="form-group btnWrapper">
			<div class="btn-align-left">
				<p>Lorem ipsum dolor sit <a data-toggle="modal" data-target="#layerCAB">trova agenzia</a></p>
			</div>
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary">annulla prelievo</a>
			</div>
			<br class="clear">
		</div>

		<!-- FINE STEPPER -->


	</section>
</div>
<!-- Fine blocco dei contenuti -->

