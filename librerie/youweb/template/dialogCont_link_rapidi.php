
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<div id="gridBody">
<div class="contentFull">
	
	
	



<style type="text/css">
#allSections + .ui-slider {
	float: right;
	width:50px;
	height:9px;
	position:relative;
	margin:0;
	/*padding:0 10px;*/
}
</style>
<script>
	$(document).ready(function() {
		$('#allSections').selectToUISlider({labelSrc: 'text', tooltip: false, sliderOptions: {
	        change: function(event, ui) {
	        	if (ui.value==0){attivaOnSections();}		        	
	        	else if (ui.value==1){attivaOffSections();}
	        }
	    }});
	    attivaOnSections();
	
		$('#dialogLinkRapidi').dialog('option', 'title', 'Link rapidi sezione CONTI E DEPOSITI');
	
	});

	function attivaOnSections() {
		var primoFiglio = $('#handle_allSections').siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
		$(primoFiglio).css('color','black').css('font-weight','bold');
		var secondoFiglio = $('#handle_allSections').siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
		$(secondoFiglio).css('color','black').css('font-weight','normal');
	}
	
	function attivaOffSections() {
		var primoFiglio = $('#handle_allSections').siblings().find('span.ui-slider-label.ui-slider-label-show')[0];
		$(primoFiglio).css('color','#666666').css('font-weight','normal');
		var secondoFiglio = $('#handle_allSections').siblings().find('span.ui-slider-label.ui-slider-label-show')[1];
		$(secondoFiglio).css('color','#003F63').css('font-weight','bold');
	}
	
	function saveLinkRapidi() {
		$.ajax({
			async: true,
			dataType: 'html',
			data: $('#formLinkRapidi').serialize(),
 			url: getPathContext() + '/common/linkRapidi/save.do',
			success: function(response) {
				if (response.trim() == "true") {
					$('#dialogLinkRapidi').dialog('close');
					window.location.reload();
				} else {
					$('#errorData').html(response);
				} 
   			}
		 });
	}
</script>	

<div id="errorData" class="padding-top10"></div>

<form id="formLinkRapidi" method="post" action="/WEBHT/common/linkRapidi/save.do" class="form-horizontal"><div style="display:none"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="93ca5cab187566077c17096d75205aff" /></div>
<div class="section clearfix">
	<h3 class="titleSection">
		
		








		
			Personalizza
		
		
		
		


	</h3>
	
	<div class="form-group padding-top20 padding-bottom10">
			<div class="col-xs-6">
				<select name="linkRapidi[0]" id="linkRapido1" class="form-control"><option value="ultime_disposizioni">Ultime disposizioni</option>
				
					<option value="gestione_beneficiari">Gestione beneficiari</option>
				
					<option value="saldo_movimenti">Saldo e movimenti</option>
				
					<option value="bonifico_sepa" selected="selected">Bonifico ordinario</option>
				
					<option value="trasferimento_tra_conti">Trasferimento tra conti</option>
				
					<option value="gestione_patrimoniale">Posizione patrimoniale</option>
				
					<option value="ricariche_cellulare">Ricariche telefoniche</option>
				
					<option value="bollettini_postali">Bollettino postale</option>
				
					<option value="bollettino_mav">Bollettino MAV</option>
				
					<option value="bollettino_rav">Bollettino RAV</option>
				
					<option value="pagamento_f24">Pagamento F24</option>
				
					<option value="carte_movimenti">Movimenti carte</option>
				
					<option value="carte_ricarica">Ricarica Carta</option>
				
					<option value="carte_scarica">Scarica Carta</option>
				
					<option value="carte_cambio_pin">Cambio PIN carta</option>
				
					<option value="carte_pannello_controllo">Pannello controllo carte</option>
				
					<option value="gestione_contatti">Gestione Contatti</option>
				
					<option value="riepilogo_alert">Pannello Alert</option>
				
					<option value="posta_arrivo">Posta in arrivo</option>
				
					<option value="archivio_posta">Archivio posta</option>
				
					<option value="titoli">Titoli preferiti</option>
				
					<option value="titoli_dossier">Il tuo portafoglio</option>
				
					<option value="portafoglio_simulato_titoli">Portafoglio simulato</option>
				
					<option value="indici_mercati">Indici</option>
				
					<option value="youwin">YouWin</option>
				
					<option value="youshop">YouShop</option>
				
					<option value="il_tuo_profilo">Il tuo profilo</option>
				
					<option value="rapporti_predefiniti">Rapporti in primo piano</option>
				
					<option value="coordinate_iban">Coordinate IBAN</option>
				
					<option value="elenco_news">News</option></select>	
			</div>
			<div class="col-xs-6">
				<select name="linkRapidi[3]" id="linkRapido4" class="form-control"><option value="ultime_disposizioni" selected="selected">Ultime disposizioni</option>
				
					<option value="gestione_beneficiari">Gestione beneficiari</option>
				
					<option value="saldo_movimenti">Saldo e movimenti</option>
				
					<option value="bonifico_sepa">Bonifico ordinario</option>
				
					<option value="trasferimento_tra_conti">Trasferimento tra conti</option>
				
					<option value="gestione_patrimoniale">Posizione patrimoniale</option>
				
					<option value="ricariche_cellulare">Ricariche telefoniche</option>
				
					<option value="bollettini_postali">Bollettino postale</option>
				
					<option value="bollettino_mav">Bollettino MAV</option>
				
					<option value="bollettino_rav">Bollettino RAV</option>
				
					<option value="pagamento_f24">Pagamento F24</option>
				
					<option value="carte_movimenti">Movimenti carte</option>
				
					<option value="carte_ricarica">Ricarica Carta</option>
				
					<option value="carte_scarica">Scarica Carta</option>
				
					<option value="carte_cambio_pin">Cambio PIN carta</option>
				
					<option value="carte_pannello_controllo">Pannello controllo carte</option>
				
					<option value="gestione_contatti">Gestione Contatti</option>
				
					<option value="riepilogo_alert">Pannello Alert</option>
				
					<option value="posta_arrivo">Posta in arrivo</option>
				
					<option value="archivio_posta">Archivio posta</option>
				
					<option value="titoli">Titoli preferiti</option>
				
					<option value="titoli_dossier">Il tuo portafoglio</option>
				
					<option value="portafoglio_simulato_titoli">Portafoglio simulato</option>
				
					<option value="indici_mercati">Indici</option>
				
					<option value="youwin">YouWin</option>
				
					<option value="youshop">YouShop</option>
				
					<option value="il_tuo_profilo">Il tuo profilo</option>
				
					<option value="rapporti_predefiniti">Rapporti in primo piano</option>
				
					<option value="coordinate_iban">Coordinate IBAN</option>
				
					<option value="elenco_news">News</option></select>	
			</div>
	</div>
	<div class="form-group padding-bottom10">
		<div class="col-xs-6">
			<select name="linkRapidi[1]" id="linkRapido2" class="form-control"><option value="ultime_disposizioni">Ultime disposizioni</option>
			
				<option value="gestione_beneficiari">Gestione beneficiari</option>
			
				<option value="saldo_movimenti">Saldo e movimenti</option>
			
				<option value="bonifico_sepa">Bonifico ordinario</option>
			
				<option value="trasferimento_tra_conti">Trasferimento tra conti</option>
			
				<option value="gestione_patrimoniale">Posizione patrimoniale</option>
			
				<option value="ricariche_cellulare" selected="selected">Ricariche telefoniche</option>
			
				<option value="bollettini_postali">Bollettino postale</option>
			
				<option value="bollettino_mav">Bollettino MAV</option>
			
				<option value="bollettino_rav">Bollettino RAV</option>
			
				<option value="pagamento_f24">Pagamento F24</option>
			
				<option value="carte_movimenti">Movimenti carte</option>
			
				<option value="carte_ricarica">Ricarica Carta</option>
			
				<option value="carte_scarica">Scarica Carta</option>
			
				<option value="carte_cambio_pin">Cambio PIN carta</option>
			
				<option value="carte_pannello_controllo">Pannello controllo carte</option>
			
				<option value="gestione_contatti">Gestione Contatti</option>
			
				<option value="riepilogo_alert">Pannello Alert</option>
			
				<option value="posta_arrivo">Posta in arrivo</option>
			
				<option value="archivio_posta">Archivio posta</option>
			
				<option value="titoli">Titoli preferiti</option>
			
				<option value="titoli_dossier">Il tuo portafoglio</option>
			
				<option value="portafoglio_simulato_titoli">Portafoglio simulato</option>
			
				<option value="indici_mercati">Indici</option>
			
				<option value="youwin">YouWin</option>
			
				<option value="youshop">YouShop</option>
			
				<option value="il_tuo_profilo">Il tuo profilo</option>
			
				<option value="rapporti_predefiniti">Rapporti in primo piano</option>
			
				<option value="coordinate_iban">Coordinate IBAN</option>
			
				<option value="elenco_news">News</option></select>	
		</div>
		<div class="col-xs-6">
			<select name="linkRapidi[4]" id="linkRapido5" class="form-control"><option value="ultime_disposizioni">Ultime disposizioni</option>
			
				<option value="gestione_beneficiari">Gestione beneficiari</option>
			
				<option value="saldo_movimenti">Saldo e movimenti</option>
			
				<option value="bonifico_sepa">Bonifico ordinario</option>
			
				<option value="trasferimento_tra_conti">Trasferimento tra conti</option>
			
				<option value="gestione_patrimoniale">Posizione patrimoniale</option>
			
				<option value="ricariche_cellulare">Ricariche telefoniche</option>
			
				<option value="bollettini_postali">Bollettino postale</option>
			
				<option value="bollettino_mav">Bollettino MAV</option>
			
				<option value="bollettino_rav">Bollettino RAV</option>
			
				<option value="pagamento_f24">Pagamento F24</option>
			
				<option value="carte_movimenti">Movimenti carte</option>
			
				<option value="carte_ricarica">Ricarica Carta</option>
			
				<option value="carte_scarica">Scarica Carta</option>
			
				<option value="carte_cambio_pin">Cambio PIN carta</option>
			
				<option value="carte_pannello_controllo">Pannello controllo carte</option>
			
				<option value="gestione_contatti">Gestione Contatti</option>
			
				<option value="riepilogo_alert">Pannello Alert</option>
			
				<option value="posta_arrivo">Posta in arrivo</option>
			
				<option value="archivio_posta">Archivio posta</option>
			
				<option value="titoli">Titoli preferiti</option>
			
				<option value="titoli_dossier">Il tuo portafoglio</option>
			
				<option value="portafoglio_simulato_titoli">Portafoglio simulato</option>
			
				<option value="indici_mercati">Indici</option>
			
				<option value="youwin">YouWin</option>
			
				<option value="youshop">YouShop</option>
			
				<option value="il_tuo_profilo" selected="selected">Il tuo profilo</option>
			
				<option value="rapporti_predefiniti">Rapporti in primo piano</option>
			
				<option value="coordinate_iban">Coordinate IBAN</option>
			
				<option value="elenco_news">News</option></select>	
		</div>
	</div>
	<div class="form-group padding-bottom10">
		<div class="col-xs-6">
			<select name="linkRapidi[2]" id="linkRapido3" class="form-control"><option value="ultime_disposizioni">Ultime disposizioni</option>
			
				<option value="gestione_beneficiari">Gestione beneficiari</option>
			
				<option value="saldo_movimenti">Saldo e movimenti</option>
			
				<option value="bonifico_sepa">Bonifico ordinario</option>
			
				<option value="trasferimento_tra_conti">Trasferimento tra conti</option>
			
				<option value="gestione_patrimoniale">Posizione patrimoniale</option>
			
				<option value="ricariche_cellulare">Ricariche telefoniche</option>
			
				<option value="bollettini_postali">Bollettino postale</option>
			
				<option value="bollettino_mav">Bollettino MAV</option>
			
				<option value="bollettino_rav">Bollettino RAV</option>
			
				<option value="pagamento_f24">Pagamento F24</option>
			
				<option value="carte_movimenti">Movimenti carte</option>
			
				<option value="carte_ricarica">Ricarica Carta</option>
			
				<option value="carte_scarica">Scarica Carta</option>
			
				<option value="carte_cambio_pin">Cambio PIN carta</option>
			
				<option value="carte_pannello_controllo">Pannello controllo carte</option>
			
				<option value="gestione_contatti" selected="selected">Gestione Contatti</option>
			
				<option value="riepilogo_alert">Pannello Alert</option>
			
				<option value="posta_arrivo">Posta in arrivo</option>
			
				<option value="archivio_posta">Archivio posta</option>
			
				<option value="titoli">Titoli preferiti</option>
			
				<option value="titoli_dossier">Il tuo portafoglio</option>
			
				<option value="portafoglio_simulato_titoli">Portafoglio simulato</option>
			
				<option value="indici_mercati">Indici</option>
			
				<option value="youwin">YouWin</option>
			
				<option value="youshop">YouShop</option>
			
				<option value="il_tuo_profilo">Il tuo profilo</option>
			
				<option value="rapporti_predefiniti">Rapporti in primo piano</option>
			
				<option value="coordinate_iban">Coordinate IBAN</option>
			
				<option value="elenco_news">News</option></select>	
		</div>
		<div class="col-xs-6">&nbsp;</div>
	</div>
	<div class="form-group padding-top20 padding-bottom10" style="padding-right:30px;">
		<label for="allSections" class="control-label col-xs-12"><strong>Desideri apportare le stesse modifiche a tutte le altre sezioni del tuo YouWeb?</strong>
			<select name="allSections" id="allSections" class="form-control hidden"><option value="S">On</option>
				<option value="N" selected="selected" class="attivo">Off</option></select>
			</label>
	</div>	
</div>
<div class="clearfix pull-right margin-top20">
    	
	<input type="button" name="confermaLinkRapidi" value="Conferma" onclick="saveLinkRapidi()" class="btn btn-primary execute floatl" alt="Conferma" />
</div>
</form>


</div>
</div>