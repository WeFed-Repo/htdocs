<h2>Sepa Direct Debit</h2>
<section>
	<div class="navContFirstLev outerTab">
		<div class="innerTab">
			<ul class="tabmedium">
				<li><a href="#"  href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_sdd.php&responsive=y&liv0=1&liv1=1&liv2=10&liv3=1#">inserisci nuovo mandato</a></li>
				<li class="on"><a href="#">gestione mandati</a></li>
			</ul>
		</div>
		<div class="separator"></div>
		<div class="panel-nofill">
			<section>
				<p>In questa pagina puoi visualizzare:</p>
				<ul>
					<li>i <strong>nuovi</strong> <span class="closeable txthelp" data-toggle="tooltip" data-title="Il mandato è l'accordo mediante il quale il debitore autorizza il creditore a disporre addebiti sul proprio conto corrente.">mandati</span> Sepa Direct Debit da autorizzare</li>
					<li>il <strong>dettaglio</strong> dei mandati (attivi, revocati, sospesi)</li>
					<li><strong>la lista degli addebiti</strong> associati al mandato.</li>
				</ul>
				Per saperne di pi&ugrave; leggi la <a href="#" data-toggle="modal" data-target="#modalRid">Dal Rid al SDD: cosa cambia</a>
			</section>
			<form class="formGenerico" role="form" id="form02">
			<section>
				
					<div class="borderFormRounded">
						<div class="form-group marginBottomNone">
						<!-- UNICA RIGA CON CAMPO-->
							<div class="row">
			 					<div class="col-sm-12">
			 						<label class="control-label-output">Domiciliazioni attive sul conto corrente</label>
			 						<span class="output">CC 01077 0000015804 EUR</span>
			 					</div>
			 				</div>
			 			</div>
					</div>
				
			</section>
			<section>
				<h4>Tutti i mandati</h4>
				<div class="borderFormRounded formGenerico">
						<div class="form-group marginBottomNone">
						<!-- UNICA RIGA CON CAMPO-->
							<div class="row">
			 					<div class="col-sm-6">
			 						<label class="control-label">Stato del mandato</label>
			 						<select class="form-control">
			 							<option>Tutti</option>
			 							<option>Attivo</option>
			 							<option>Inserito</option>
			 						</select>
			 					</div>
			 					<div class="col-sm-3 col-xs-12 no-label">
									<div class="btn-align-left">
										<a type="button" class="btn btn-primary" id="">Cerca</a>
									</div>
								</div>
			 				</div>
			 			</div>
					</div>
					<table id="gestioneMandati">
						<thead>
							<tr>
								<th data-field="azienda" rowspan="2" class="left">Nome azienda</th>
								<th data-field="id" rowspan="2">Id mandato</th>
								<th data-field="stato" rowspan="2">Stato</th>
								<th data-field="inserito" rowspan="2">Inserito da</th>
								<th data-field="opera" colspan="4">Operativit&agrave;</th>
						 	</tr>
						 	<tr>
								<th data-field="ico1" class="center">Dettaglio</th>
								<th data-field="ico2" class="center">Lista<br> addebiti</th>
								<th data-field="ico3" class="center">Modifica<br> c/c di <br>addebito</th>
								<th data-field="ico4" class="center">Revoca</th>
						 	</tr>
						</thead>
					</table>
				</section>
			</form>
		</div>
	</div>
</section>
<script>
    var $tableOrdered = $('#gestioneMandati');
    $(function () {
        var data = [
	{
		"azienda": "ENEL",
		"id": "O563611005676951",
		"stato": 'Attivo',
		"inserito": 'Creditore',
		"ico1": "<a href=\"/connect.php?page=strutt_priv.php&tpl=tpl_responsive_sdd_dett.php&responsive=y&liv0=1&liv1=1&liv2=10&liv3=1\" class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-zoom_piu_filled\"></i ></a>",
		"ico2": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-documenti\"></i ></a>",
		"ico3": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-2x icon-edit_fill\"></i ></a>",
		"ico4": "<a href=\"#1\"class=\"no-underline btn-icon\"><i class=\"icon icon-alert_error_fill\"></i ></a>"
	}
	
	];
	// Moltiplico i dati per averne di pi�
	var dataTmp = $.extend(true, {}, data);
	for (var i = 0; i < 5; ++i) { $.merge(data, $.extend(true, {}, dataTmp)); }
    arrayKey = ['ico1','ico2','descrizione']; 
    $tableOrdered.bootstrapTable({
            data: data,
            sortable: true,
            sortName: "descrizione",
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
			   }
           
		});
	
   });




</script>
			<!--OVERLAYER GUIDA SDD -->
<div class="modal fade" id="modalRid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Guida</h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                         <!-- accordion guida -->
                    	<div class="panel-group" id="accordionGuida" role="tablist" aria-multiselectable="true">
	  						<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingOne">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordionGuida" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							          Che cos'&egrave; l'addebito diretto Sepa (SDD)<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      								<div class="panel-body">
      									<p>L'addebito diretto SEPA (S.D.D - Sepa Direct Debit -) &egrave; - come il Rid nazionale - un <strong>servizio di incasso</strong> a livello europeo che prevede la sottoscrizione da parte del pagatore di un'<strong>autorizzazione ad addebitare</strong> direttamente il conto corrente.
											Questa autorizzazione viene definita mandato. Il <strong>mandato</strong> &egrave; sottoscritto dal debitore e deve essere sempre rilasciato al creditore che ha il compito di conservarlo per eventuali contestazioni da parte del cliente.
										</p>
										<p>Il <strong>vantaggio</strong> &egrave; quello di poter effettuare pagamenti in euro nell'area europea tramite addebito diretto del tuo conto corrente senza dover gestire un conto all'estero e senza costi aggiuntivi. I pagamenti in valuta euro possono essere singoli oppure ricorrenti anche di importo variabile.</p>
      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="headingTwo">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							          Cosa cambia<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      								<div class="panel-body">
      									<p>Dal <strong>1&deg; maggio 2014 gli addebiti diretti nazionali</strong> (Rid) sono stati <strong>dismessi</strong> e <strong>sostituiti</strong> integralmente dagli <strong>addebiti diretti SEPA</strong>.
										<p>Dal <strong>11&deg; febbraio 2016 anche i Rid finanziari e Rid a importo fisso sono sostituiti dagli addebiti SEPA.</strong></p>
										<p>I Rid in essere sul tuo conto corrente saranno <strong>trasformati</strong> in addebiti diretti SEPA.</p>
										<p>Webank eseguir&agrave; l'addebito nella nuova modalit&agrave; di pagamento e attiver&agrave; un nuovo mandato.<br>
										Tuttavia, in alcuni casi, ti sar&agrave; richiesto di autorizzare il nuovo mandato e sarai avvisato via email.</p>
      								</div>
								</div>
							</div>
							
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="heading3">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
							          Come attivare un nuovo mandato<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
      								<div class="panel-body">
      									<p>L'addebito diretto SEPA &egrave; <strong>attivato dall'impresa</strong> che, a seguito del mandato firmato dal proprio cliente, avvia la riscossione delle somme dovute attraverso la presentazione di addebiti diretti SEPA presso la banca.
										<br>Ogni volta che un'impresa ci richieder&agrave; l'autorizzazione a addebitare il tuo conto corrente riceverai una <strong>notifica via email/Sms</strong>. All'interno della tua area privata <strong>dovrai confermare</strong> oppure rifiutare il mandato. Senza la tua conferma non riceverai gli addebiti sul conto.</p>
										<p>Tuttavia, in alcuni casi, l'impresa creditrice potrà chiederti di inserire in autonomia la richiesta di autorizzazione all'addebito presso la tua banca. In questo caso ti basterà inserire la richiesta dalla pagina "inserisci nuovo mandato".</p>
      								</div>
								</div>
							</div>
							
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="heading4">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
							          Gestione dei mandati<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
      								<div class="panel-body">
      									<p>Alla pagina &quot;gestione mandati&quot; trovi:</p>
										<ul>
											<li>i mandati SEPA trasformati da deleghe Rid gi&agrave; esistenti</li>
											<li>i nuovi mandati da autorizzare.</li>
										</ul>
										<p>Di ogni mandato &egrave; possibile visualizzare:</p>
										<ul>
											<li>il dettaglio dei mandati SDD (attivi, revocati, sospesi)</li>
											<li>la lista degli addebiti associati al mandato.</li>
										</ul>
      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="heading5">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
							         Gestione dei Rid<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
      								<div class="panel-body">
      									<p>Alla pagina &quot;gestione Rid&quot; trovi tutte le deleghe Rid attive sul conto corrente.</p>
      									<p>Di ogni delega puoi:</p>
      									<ul>
											<li>vedere i dettagli</li>
											<li>modificare l'intestazione o il conto corrente di addebito</li>
											<li>annullare il Rid gi&agrave; attivo.</li>
      									</ul>
      								</div>
								</div>
							</div>
							<div class="panel panel-default">
							    <div class="panel-heading" role="tab" id="heading6">
							      <h4 class="panel-title">
							        <a class="collapsed" data-toggle="collapse" data-parent="#accordionGuida" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
							         Tempi di storno<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
							        </a>
							      </h4>
							    </div>
								<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
      								<div class="panel-body">
      									<p>Chiamando il numero verde 800 060 070, hai la possibilit&agrave; di <strong>revocare</strong> un <strong>singolo addebito</strong> entro il giorno lavorativo precedente la data di pagamento.</p>
      									<p>Lo storno di un addebito gi&agrave; effettuato, invece, pu&ograve; essere richiesto <strong>entro 8 settimane</strong> dalla data di pagamento entro i termini che hai deciso con l'azienda creditrice, ma non oltre i 13 mesi dalla data di pagamento, nel caso di mandato non autorizzato o non corretto.</p>
      									<p>Per i <strong>mandati finanziari</strong> e a <strong>importo fisso</strong> non &egrave; previsto lo storno di un addebito.</p>
      								</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>