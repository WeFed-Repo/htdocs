<h2>Situazione PAC</h2>

<form action="" name="situazionePacForm" method="POST">

<!-- SELETTORE DEPOSITO -->
<section>	
	<div class="tithelp">
	    <h4>Dati ordine</h4>
	    <div class="flRight"><a data-toggle="modal" data-target="#layerInfoOrdine" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a>
	        <br class="clear">
	    </div>
	    <br class="clear">
	</div>
	
	<div class="modal fade" id="layerInfoOrdine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="myModalLabel">Situazione PAC</h2>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<h3>Stato</h3>
								<p>
								   <strong>Attivo (rata automatica)</strong>: il Pac è automatico e alla scadenza mensile il sistema in automatico effettua il versamento addebitando contemporaneamente il conto corrente. 
								   <br><strong>Attivo (rata manuale)</strong>: il Pac è attivo ma è sospeso l'automatismo della rata. Quindi, alla scadenza mensile il sistema non effettua in automatico il versamento. Se si vuole effettuare il versamento di rate aggiuntive occorre operare tramite la funzione "Versamenti aggiuntivi Pac". 
								   <br><strong>Estinto</strong>: il Pac è estinto quando tutte le rate previste sono state versate o il piano è stato chiuso anticipatamente. 
								</p>
								<h3>Rata</h3>
								<p>L'importo del singolo versamento. </p>
								<h3>N. rate tot/durata </h3>
								<p>E' il numero di rate totali previste dal piano. Il numero di rate determina anche la durata che è espressa in anni. Es: 60 rate mensili determinano una durata di 5 anni. </p>
								<h3>Versamenti effettuati</h3>
								<p>Sono i versamenti del piano d'accumulo che sono già stati effettuati. </p>
								<h3>Rate residue</h3>
								<p>E' la differenza tra il numero di rate totali previste dal piano e il numero di rate versate. </p>
								<h3>Prossimo versamento</h3>
								<p>E' la data in cui è previsto il successivo versamento. </p>
								<h3>N. quote/controv. EUR </h3>
								<p>E' il numero di quote (nel caso di un fondo) o azioni (nel caso di una sicav) possedute. 
								   <br>Il controvalore del fondo o sicav in portafoglio è calcolato moltiplicando il numero di quote/azioni per il Valore Quota/NAV di ognuna di esse. Il controvalore è espresso nella valuta di denominazione del fondo. 
								   <br>Per esempio, se il valore della singola quota o azione è di 100 € e il numero di quote o azioni è di 250, il controvalore corrispondente sarà di 25.000 €. 
								</p>
								<h3>Contratto n. </h3>
								<p>E' il numero identificativo del Pac.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>

		// Esempio interattivita' funzione "loadfondi"
		var loadFondi = function() {
			$("#resultWrap").addClass("loading");

			// Nasconde errori, alert e spazio "tabella"
			$("#erroreForm, #fondi").hide();

			// Mostra la tabella
			// Carica i dati dall'esterno (sono mere emulazioni)
			$.ajax({ 
				url: "/librerie/include/commons/ajax/situazione_pac_table_data.php",
				dataType: "json",
				method: "post",
				data: {
					"deposito": $("#deposito").val() 
				},
				success: function(data) {
					// Mostra i dati
					$('#tableFondi').bootstrapTable('load',data);
					$("#fondi").show();
					$("#resultWrap").removeClass("loading");
				},
				error: function () {
					// Mostra un errore
					$("#messaggio").html("Si &egrave; verificato un errore nel caricamento dei dati")
					$("#erroreForm").show();
					$("#resultWrap").removeClass("loading");
				}

			});

		}

		// Inizializzazioni
		$(function(){
			
			// Inizializzazione tabella bootstrap
			$("#tableFondi").bootstrapTable({
				sortable: true,
		        sortName: "nome",
		        sortOrder: "asc",
			});
		
			// Emulazione caricamento "rallentato" ed inizializzazioni
			setTimeout(loadFondi,1000)
		});

	</script>
	<div class="formGenerico borderFormRounded" role="form" id="form01">
    	<div class="row">
        	<div class="col-xs-12 col-sm-6">
				<label class="control-label">Deposito</label>
        		<select name="deposito" id="deposito" onchange="javascript:loadFondi();" class="form-control">
                    <option value="1">1099/535379/0 C/C 01099 - 0000072608 - EUR </option>
					<option value="2">1099/535379/1 C/C 01099 - Errore</option>
					<option value="3">1099/535379/2 C/C 01099 - Nessun PAC</option>
                </select>
        	</div>
    	</div>
   	</div>
</section>
<!-- FINE SELETTORE CONTO -->


<!-- TABELLA -->


<section id = "resultWrap" class="loading">

	<!-- ESEMPIO ERRORI (da integrare nella eventuale funzione) -->
	<div class="boxesito negativo" id="erroreForm" style="display:none">
		<div class="text">
			<p id="messaggio"><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
		</div>
	</div>
	<!-- FINE ERRORE ESEMPIO -->

	<div id="fondi" style="display:none">
		<!-- Campi nascosti -->
		<input type="hidden" name="messaggioErrore" value="OK">
		<input type="hidden" value="13" name="numeroFondi">
		<!-- fine campi nascosti -->

	
		<h4>Elenco situazione Pac</h4>

		<!-- TABELLA -->
		<table id="tableFondi" cellspacing="0" cellpadding="0" border="0" class="sortableTable fix-OuterTable">
		     <thead>
		        <tr>
		            <th data-field="nome" data-sortable="true">Nome</th>
					<th data-field="stato" class="center" data-sortable="true">Stato</th>
					<th data-field="rata" class="center" data-sortable="true">Rata</th>
					<th data-field="ratetotali"  class="right">N.rate tot<br>Durata</th>
					<th data-field="versamenti" class="right" data-sortable="true">Versamenti<br>effettuati</th>
					<th data-field="rateresidue" class="right" data-sortable="true">Rate residue</th>
					<th data-field="prossimoivers" class="center" data-sortable="true">Prox versam.</th>
					<th data-field="nquote" class="right" data-sortable="true">N. quote<br>Controv. EUR</th>
					<th data-field="ncontratto"class="right">Contratto n.</th>
					<th data-field="versa"class="center">Versa</th>
		        </tr>
		     </thead>
		</table>
		<!-- FINE TABELLA -->
	</div>
</section>

<!-- FINE TABELLA -->

	<!-- PULSANTIERA -->
	<div class="form-group btnWrapper">
	    <div class="btn-align-left">
	        <a type="button" class="btn btn-default" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_vers_agg_pac.php&responsive=y&liv0=4&liv1=2&liv2=5&liv3=3" title="Indietro">Indietro</a>
	    </div>
	    <br class="clear">
	</div>
	<!-- FINE PULSANTIERA -->

</form>