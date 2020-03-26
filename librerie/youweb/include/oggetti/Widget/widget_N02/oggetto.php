<!-- MODALE DI CONFIGURAZIONE -->
<div id="configuraLinkRapidi" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="configuraLinkRapidiLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
    		<h4 class="modal-title" id="configuraLinkRapidiLabel">Link rapidi: personalizza</h4>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="sm">&times;</span><span class="xs">chiudi</span></span></button>
        </div>
        <div class="modal-body">
			<form class="lrconf">
				<div class="row">

					<div class="col-sm-6 col-xs-12">
						<label>1.</label>
						<select class="form-control">
							<option selected>Bonifico ordinario</option>
							<option>Ricariche telefoniche</option>
							<option>Gestione contatti</option>
							<option>Ultime disposizioni</option>
							<option>Posizione patrimoniale</option>
						</select>
					</div>
					<div class="col-sm-6 col-xs-12">
						<label>2.</label>
						<select class="form-control">
							<option>Bonifico ordinario</option>
							<option selected>Ricariche telefoniche</option>
							<option>Gestione contatti</option>
							<option>Ultime disposizioni</option>
							<option>Posizione patrimoniale</option>
						</select>
					</div>
				</div>

				<div class="row">

					<div class="col-sm-6 col-xs-12">
						<label>3.</label>
						<select class="form-control">
							<option>Bonifico ordinario</option>
							<option>Ricariche telefoniche</option>
							<option selected>Gestione contatti</option>
							<option>Ultime disposizioni</option>
							<option>Posizione patrimoniale</option>
						</select>
					</div>
					<div class="col-sm-6 col-xs-12">
						<label>4.</label>
						<select class="form-control">
							<option>Bonifico ordinario</option>
							<option>Ricariche telefoniche</option>
							<option>Gestione contatti</option>
							<option selected>Ultime disposizioni</option>
							<option>Posizione patrimoniale</option>
						</select>
					</div>
				</div>

				<div class="row">

					<div class="col-sm-6 col-xs-12">
						<label>5.</label>
						<select class="form-control">
							<option>Bonifico ordinario</option>
							<option>Ricariche telefoniche</option>
							<option>Gestione contatti</option>
							<option>Ultime disposizioni</option>
							<option selected>Posizione patrimoniale</option>
						</select>
					</div>
					
				</div>

				<div class="row">
					<div class="col-xs-12">
						<input type="button" name="conferma" value="Conferma"  class="btn btn-primary pull-right" alt="Conferma">
					</div>
				</div>
			
			</form>
		</div>
    </div>
  </div>
</div>
<!-- FINE MODALE DI CONFIGURAZIONE -->
<div class="widget widget-top" id="linkRapidi">
	<h2><a href="javascript:;" data-toggle="modal" data-target="#configuraLinkRapidi">Link preferiti</a></h2>
	<ul>
		<!-- Primi 5 link rapidi -->
		<li>
			<a href="#" title="Bonifico ordinario"><span class="icon icon-ico_bonifico_sepa"></span>Bonifico ordinario</a>
		</li>
		<li>
			<a href="#" title="Ricariche telefoniche"><span class="icon icon-ico_ricariche_cellulare"></span>Ricariche telefoniche</a>
		</li>
		<li>
			<a href="#" title="Gestione contatti"><span class="icon icon-ico_gestione_contatti"></span>Gestione contatti</a>
		</li>
		<li>
			<a href="#" title="Ultime disposizioni"><span class="icon icon-ico_ultime_disposizioni"></span>Ultime disposizioni</a>
		</li>
		<li>
			<a href="#" title="Posizione patrimoniale"><span class="icon icon-ico_gestione_patrimoniale"></span>Posizione patrimoniale</a>
		</li>

		<!-- Fine prime 5 link rapidi -->
		<?php if ($_GET["linkrapidi"] == "tutti") {   ?>
		<li><a href="#" title="Archivio posta"><span class="icon icon-ico_il_tuo_profilo"></span>Il tuo profilo</a></li>
		<li><a href="#" title="Archivio posta"><span class="icon icon-ico_archivio_posta"></span>Archivio posta</a></li>
		<li><a href="#" title="Bollettini postali"><span class="icon icon-ico_bollettini_postali"></span>Bollettini postali</a></li>
		<li><a href="#" title="Bollettino mav"><span class="icon icon-ico_bollettino_mav"></span>Bollettino mav</a></li>
		<li><a href="#" title="Bollettino rav"><span class="icon icon-ico_bollettino_rav"></span>Bollettino rav</a></li>
		<li><a href="#" title="Bollo auto"><span class="icon icon-ico_bollo_auto"></span>Bollo auto</a></li>
		<li><a href="#" title="Carte cambio pin"><span class="icon icon-ico_carte_cambio_pin"></span>Carte cambio pin</a></li>
		<li><a href="#" title="Carte movimenti"><span class="icon icon-ico_carte_movimenti"></span>Carte movimenti</a></li>
		<li><a href="#" title="Carte pannello controllo"><span class="icon icon-ico_carte_pannello_controllo"></span>Carte pannello controllo</a></li>
		<li><a href="#" title="Carte ricarica"><span class="icon icon-ico_carte_ricarica"></span>Carte ricarica</a></li>
		<li><a href="#" title="Carte scarica"><span class="icon icon-ico_carte_scarica"></span>Carte scarica</a></li>
		<li><a href="#" title="Coordinate iban"><span class="icon icon-ico_coordinate_iban"></span>Coordinate iban</a></li>
		<li><a href="#" title="Domiciliazioni"><span class="icon icon-ico_domiciliazioni"></span>Domiciliazioni</a></li>
		<li><a href="#" title="Elenco news"><span class="icon icon-ico_elenco_news"></span>Elenco news</a></li>
		<li><a href="#" title="Finanziamenti"><span class="icon icon-ico_finanziamenti"></span>Finanziamenti</a></li>
		<li><a href="#" title="Gestione beneficiari"><span class="icon icon-ico_gestione_beneficiari"></span>Gestione beneficiari</a></li>
		<li><a href="#" title="Indici mercati"><span class="icon icon-ico_indici_mercati"></span>Indici mercati</a></li>
		<li><a href="#" title="Ordini movimenti titoli"><span class="icon icon-ico_ordini_movimenti_titoli"></span>Ordini movimenti titoli</a></li>
		<li><a href="#" title="Pagamento f24"><span class="icon icon-ico_pagamento_f24"></span>Pagamento f24</a></li>
		<li><a href="#" title="Portafoglio simulato titoli"><span class="icon icon-ico_portafoglio_simulato_titoli"></span>Portafoglio simulato titoli</a></li>
		<li><a href="#" title="Posta arrivo"><span class="icon icon-ico_posta_arrivo"></span>Posta arrivo</a></li>
		<li><a href="#" title="Rapporti predefiniti"><span class="icon icon-ico_rapporti_predefiniti"></span>Rapporti predefiniti</a></li>
		<li><a href="#" title="Riepilogo alert"><span class="icon icon-ico_riepilogo_alert"></span>Riepilogo alert</a></li>
		<li><a href="#" title="Saldo a data"><span class="icon icon-ico_saldo_a_data"></span>Saldo a data</a></li>
		<li><a href="#" title="Saldo movimenti"><span class="icon icon-ico_saldo_movimenti"></span>Saldo movimenti</a></li>
		<li><a href="#" title="Titoli dossier"><span class="icon icon-ico_titoli_dossier"></span>Titoli dossier</a></li>
		<li><a href="#" title="Titoli"><span class="icon icon-ico_titoli"></span>Titoli</a></li>
		<li><a href="#" title="Trasferimento tra conti"><span class="icon icon-ico_trasferimento_tra_conti"></span>Trasferimento tra conti</a></li>
		<li><a href="#" title="Tuoi vincoli conto dep2"><span class="icon icon-ico_i_tuoi_vincoli"></span>Tuoi vincoli conto dep2</a></li>
		<li><a href="#" title="Vincola partite conto dep2"><span class="icon icon-ico_vincola_partite"></span>Vincola partite conto dep2</a></li>
		<li><a href="#" title="YouShop"><span class="icon icon-ico_youwin"></span>YouWin</a></li>
		<li><a href="#" title="YouShop"><span class="icon icon-ico_youshop"></span>YouShop</a></li>
		<?php
		}
		?>
		<!-- FINE ELENCO DEI LINK RAPIDI -->
	</ul>
</div>	