	<script type="text/javascript">
		var larghezza = 980;
		var frames = new Array();
		var principale = new Object();
	
		frames[0] = top;
		frames[1] = top;
	
		function getPrincipale() {
			return principale;
		}

		function setPrincipale(p) {
			principale = p;
			principale.document = p;
			frames[2] = principale;
		}
	</script>

<!-- Richiesta -->
<h2>Gestione prelievo Cardless</h2>
<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_richiesta.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Richiesta</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_massimali.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Massimali</a></li>
			<li class="on"><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_elenco.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Elenco</a></li>
			<li class=""><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_prel_cardless_disattivazione.php&responsive=y&liv0=1&liv1=2&liv2=3&liv3=1">Disattivazione</a></li>
		</ul>
	</div>
	<div class="separator" style="min-width: 603px;"></div>
</div>
<!-- Blocco dei contenuti -->
<div class="tabindent">

	<div id="box5ctntab1" style="visibility: visible;">
		<div class="fooform" id="id_aggiorna_tab" style="display:none;"></div>

























 



























				 








	












<!-- === org.apache.jsp.banking.errorsSectionResponsive_jsp === { -->

	<div id="errorsSection" style="display: none;">
		<div class="boxesito negativo">
			<i class="icon icon-alert_error icon-2x"></i>
			<div class="text">
				<div class="row">
					<div class="col-sm-10" escape="false">
								

							
						
						<ul id="errorMessages"></ul>
							
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- } === org.apache.jsp.banking.errorsSectionResponsive_jsp === -->

<form name="DATI" action="WsCardlessHistoryRequest.action" method="post">









<input name="tabId"	type="hidden"	value="nav_priv_wbx_sportello" />
<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_gestione_cardless" />

<input name="OBSKEY3"	type="hidden"	value="nav_priv_wbx_elenco_prelievi_cardless" />

<input name="OBSCNT"	type="hidden"	value="" />
<input name="cf"	type="hidden"	value="0.7224719338363605" />
<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
<input name="siglaAzione"	type="hidden"	value="" />

 

<input type="hidden" name="otp" id="hiddenOtp" value="" />

<input type="hidden" name="search" value="Y">
	<div class="formGenerico borderFormRounded" id="datiBox">
		<div class="form-group" id="formGeneric">
		   <div class="row">
			   <div id="conto" class="col-sm-6">
			   		<label class="control-label">Conto di appoggio</label>
					<div class="form-inline">
						<div class="input-group">	
							





<!-- === org.apache.jsp.banking.resp.accountsListSelect_jsp === { -->
	
	
		<select class="form-control" size="1" name="idConto"  id="idconto" onchange="updateStarStatus(this, 'idconto_star'); javascript:document.DATI.submit();" >
		<option value="01099 - 0000072608 - EUR" selected="selected" accountId="01099 - 0000072608 - EUR" accountIdToShow="CC 01099 0000072608 EUR">
				CC 01099 0000072608 EUR
		</option>
		<option value="01099 - 0000078689 - EUR"  accountId="01099 - 0000078689 - EUR" accountIdToShow="CC 01099 0000078689 EUR">
				CC 01099 0000078689 EUR
		</option>
	</select>

	<script type="text/javascript">
		function  updateStarStatus(selectEl, starId) {
			var  accountId = selectEl.options[selectEl.selectedIndex].getAttribute('accountId');
			var  accountIdToShow = selectEl.options[selectEl.selectedIndex].getAttribute('accountIdToShow');
			updateStar(accountId, accountIdToShow, starId);
		}
	</script>
	<div class="input-group-addon">
	<a title="La stella indica il conto che hai impostato come preferito" class="btn-icon" href="javascript:openStarAlert2('01099 - 0000072608 - EUR', 'CC 01099 0000072608 EUR')" data-animation="false" id="idconto_star_el" >
		<i class="icon icon-star_fill" id="idconto_star_img"></i>
	</a>
</div>
<script src="/wscmn/js/Star.js"></script>
<script type="text/javascript">
	var  preferredAccountId = '01099 - 0000072608 - EUR';

	if (typeof(StarsManager.getStar('idconto_star')) == 'undefined') {
		StarsManager.putStar('idconto_star', 'ON', '01099 - 0000072608 - EUR', 'CC 01099 0000072608 EUR');
	}

	function  updateStar(newAccountId, newAccountIdToShow, starId) {
		if (starId == null)
			starId = 'star';

		var newStatus; {
			if (newAccountId == null || newAccountId == '')
				newStatus = StarStatus.INACTIVE;
			else if (newAccountId == preferredAccountId)
				newStatus = StarStatus.ON;
			else
				newStatus = StarStatus.OFF;
		}

		var star = StarsManager.getStar(starId);
		star.setStatus(newStatus);
		star.setAccountId(newAccountId);
		star.setAccountIdToShow(newAccountIdToShow);

		if (newStatus == StarStatus.INACTIVE)
			hideStar(starId);
		else
			changeStarAttr(newStatus, starId, newAccountId, newAccountIdToShow);
	}
	
	function openStarAlert1(starId, accountId, accountIdToShow) {
		$('#accountIdToShow_1').html(accountIdToShow);
		$('#starAlert1').modal("show");
		$('#btn_setPreferred').attr('href', ('javascript:setPreferredAccount(\'' + accountId + '\', \'' + accountIdToShow + '\', \'' + starId + '\');'));
	}
	
	function  hideStar(starId) {
		$('#' + starId + '_el').hide();
	}
	
	function changeStarAttr(newStatus, starId, accountId, accountIdToShow) {
		$('#' + starId + '_el')
			.attr('title', (newStatus == StarStatus.ON ?
						  'La stella indica il conto che hai impostato come preferito'
						: 'Se desideri, puoi indicare questo conto come preferito'
					))
			.attr('href', ( newStatus == StarStatus.ON ?
					  'javascript:openStarAlert2(\''+accountId+'\', \''+accountIdToShow+'\')'
					: 'javascript:openStarAlert1(\''+starId+'\', \''+accountId+'\', \''+accountIdToShow+'\')'
				))
		var classToRemove = newStatus == StarStatus.ON ? "icon icon-star" : "icon icon-star_fill";
		var classToAdd = newStatus == StarStatus.ON ? "icon icon-star_fill" : "icon icon-star";
		$('#' + starId + '_img').removeClass(classToRemove).addClass(classToAdd);
		$('#' + starId + '_el').show();
	}

	function  setPreferredAccount(accountId, accountIdToShow, starId) {
		var  url = '/webankpri/wbOnetoone/wbblack/commons/setPreferito.jsp';
		var  method = 'post';
		var  parms = {accountId: accountId, accountIdToShow: accountIdToShow, starId: starId};
		var  onSuccess = checkEsitoSetPreferred;
		jqAJAXCall('POST', 'json', url, function (esito) {checkEsitoSetPreferred(esito, parms);}, null, parms);
	}

	function checkEsitoSetPreferred(esito, parms) {
		if (esito.esito != 'ok') {
			$('#starAlert1').modal("hide");
			$('#starAlert1Ko').modal("show");
		}
		else {
			preferredAccountId = parms.accountId;
			if (typeof impostaPreferito == 'function'){ 
				impostaPreferito();
			}
			updateAllStars();

			$('#accountIdToShow_1ok').html(parms.accountIdToShow);
			$('#starAlert1').modal("hide");
			$('#starAlert1Ok').modal("show");
		}
	}
	function updateAllStars() {
		var stars = StarsManager.getStars();
		for(starId in stars) {
			var star = StarsManager.getStar(starId);
			updateStar(star.getAccountId(), star.getAccountIdToShow(), star.getId());
		}
	}
	
	function openStarAlert2(accountId, accountIdToShow) {
		$('#accountIdToShow_2').html(accountIdToShow);
		$('#starAlert2').modal("show");
	}

</script>
<div class="modal fade" id="starAlert1" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-body">
				Vuoi impostare il conto <strong id="accountIdToShow_1">CC 01099 0000072608 EUR</strong> come preferito?
			</div>
			<div class="modal-footer">
				<div class="btn-align-left">
					<button type="button" class="btn btn-default" data-dismiss="modal">Annulla</button>
				</div>
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" id="btn_setPreferred" href="javascript:setPreferredAccount('01099 - 0000072608 - EUR', 'CC 01099 0000072608 EUR', 'idconto_star');">Conferma</a>
				</div>
			</div>
			<br class="clear">
		</div>
	</div>
</div>

<div class="modal fade in" id="starAlert1Ok" tabindex="-1" role="dialog" >
	<div class="modal-dialog modal-sm" role="document" >
		<div class="modal-content">
		   <div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
           </div>
			<div class="modal-body">
				Il conto <strong id="accountIdToShow_1ok">CC 01099 0000072608 EUR</strong> &Egrave; impostato come preferito. Da questo momento sar&agrave; preselezionato per tutte le operazioni.<br/>
				Per impostare un altro conto preferito oppure scegliere o cambiare nickname clicca su "<a href="/webankpri/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_conto_pref_nickname&OBSKEY3=nav_priv_wbx_conto_pref_nickname">Impostazioni preferenze</a>".
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="starAlert1Ko" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		 	<div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
           	</div>
			<div class="modal-body">
				Per motivi tecnici, le modifiche richieste non sono state eseguite. Ti invitiamo a riprovare. Grazie<br>
				<a href="/webankpri/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_conto_pref_nickname&OBSKEY3=nav_priv_wbx_conto_pref_nickname">Impostazioni preferenze</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="starAlert2" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		 	<div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
           	</div>
			<div class="modal-body">
				Il conto <strong id="accountIdToShow_2">CC 01099 0000072608 EUR</strong> &Egrave; gi&agrave; impostato come preferito. Per impostare un altro conto preferito oppure scegliere o cambiare nickname clicca su "<a href="/webankpri/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&tabId=nav_priv_wbx_myhome&OBSKEY=nav_priv_wbx_conto_pref_nickname&OBSKEY3=nav_priv_wbx_conto_pref_nickname">Impostazioni preferenze</a>".
			</div>
		</div>
	</div>
</div>

<!-- } === org.apache.jsp.banking.resp.accountsListSelect_jsp === -->


						</div>
					</div>
			   </div>
			   
				
			   <div id="intestazione" class="col-sm-6">
				   <label class="control-label">Conto intestato a</label>
				   <span class="output">MAINARDI MANUELA, CASTELLINI ATTILIO MARIO</span>
			   </div>
		   </div>
	   </div>
	   
	   <div class="form-group">
		   <div class="row">
			   <div id="limiteSpesa" class="col-sm-4">
					<label class="control-label txthelp" data-toggle="tooltip" data-title="In caso di conto corrente cointestato, il limite di prelievo si intende unico.">Limite di prelievo</label>
					<span class="output">450,00€</span>
			   </div>
			   <div id="totaleSpese" class="col-sm-4">
					<label class="control-label txthelp" data-toggle="tooltip" data-title="In caso di conto corrente cointestato, il totale dei prelievi corrisponde a quelli effettuati da tutti i cointestatari abilitati al servizio.">Prelievi - Novembre </label>				   
					<span class="output">0,00€</span>
			   </div>
			   <div id="residuo" class="col-sm-4">
				   <label class="control-label">Disponibilit&agrave; - Novembre</label>
				   <span class="output colorver">450,00€</span>
			   </div>
		   </div>
		</div>
	</div>
	
	<p>
		Nella tabella sotto, <strong>puoi consultare i prelievi</strong> da te effettuati tramite il servizio Prelievo Cardless negli <strong>ultimi 6 mesi</strong>.
	</p>
	
	<!-- Box bottoni interazione con i risultati -->
	<div class="formGenerico">
		<div class="tithelp">
		    <h4>Periodo movimenti</h4>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<select name="periodo" class="form-control clear-x" onchange="document.DATI.submit();">
						<option value="M1" selected='selected'>Mese in corso</option>
						<option value="M2" >Ultimi 2 mesi</option>
						<option value="M3" >Ultimi 3 mesi</option>
						<option value="M6" >Ultimi 6 mesi</option>
					</select>
				</div>
				<div class="col-sm-6">
					
				</div>
			</div>
		</div>
	
		
		
	</div>
		

	<section class="boxesitoWrap">
	    <div class="boxesito attenzione">
	        <i class="icon icon-alert_caution icon-2x"></i>
	        <div class="text">
	            <div class="row">
	                <div class="col-sm-12">
	                    <p>
	                        Nessun prelievo fatto nel periodo selezionato.
	                    </p>
	                </div>
	           </div>
	       </div>
	    </div>
	</section>

	<section>
	  <div class="row">
	         <div class="col-sm-2">
	                <img src="/img/ret/ico2or_non_spesa.gif">
	         </div>
	         <div class="col-sm-10">
	             <h4>Non riconosci un prelievo?</h4>
	             <p>
	                   Stampa il <a href="/webankpri/nsf/CardlessRefundPrint.action?isPDF=true&" target="_blank">modulo di rimborso</a> e invialo in una delle seguenti modalit&agrave;:
	             </p>
	             <ul>
	                   <li>
	                        via posta all'indirizzo "Ufficio Reclami BPM - Piazza F. Meda 4 20121 Milano"
	                   </li>
	                   <li>
	                        via email all'indirizzo reclami@bpm.it
	                   </li>
	                   <li>
	                        via fax al numero 02 7700 2799.
	                   </li>
	             </ul>
	         </div>
	    </div>
	</section>
</form>


<!-- === org.apache.jsp.banking.resp.addActionMessages_jsp === { -->
	<script type="text/javascript">	
	$(function() {
        var errors = [];
        resetErrors('#');

            setHasErrors(errors, "#");
            return (!errors.length);
    });
	</script>

</div><!--fine div contenuti -->
</div>
