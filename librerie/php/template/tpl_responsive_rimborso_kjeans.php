<h2>Carta Kjeans</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<!--<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_attivazione_kjeans.php&liv0=2&liv1=3&liv2=1&liv3=0&responsive=y&fdeb=<?php print $fdeb;?>">attivazione</a></li>-->
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_ricariche_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">ricarica</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_saldo_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">saldo e movimenti</a></li>
			<li class="on"><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_rimborso_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">rimborso</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_stato_pratica_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">stato pratica</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_pannello_kjeans.php&liv0=2&liv1=2&liv2=1&liv3=0&responsive=y">Pannello di controllo</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
			<ul>
				<li>Puoi ottenere <strong>direttamente online</strong>, il rimborso totale del credito residuo della tua Carta Je@ns.</li>
				<li>Con il <strong>rimborso totale</strong> del credito residuo, la carta <strong>sarà estinta</strong>.</li>
				<li>Per richiedere il rimborso di una <strong>carta non presente in elenco contatta il Numero Verde 800 060 070</strong>.</li>		
		     </ul>
		</section>

	     <section>
<div class="formGenerico borderFormRounded">
	
	<!-- numero carta -->
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label" id="selectedCard">Numero carta*</label>
				<div class="form-inline">
					<div class="input-group">
						
						  	<input id="selector" data-status="ACTIVE" name="selectedCard" type="hidden" value=""><strong></strong>
						
					</div>
				</div>
			</div>
			<!-- saldo disp -->
			<div class="col-sm-6">
				<label class="control-label" id="labelSaldo">Saldo disponibile</label>
				<div class="form-inline">
					<div class="input-group">
						<div id="loadingSaldo" style="display: none;">
							<span><img src="/img/ret/ico2inf_loading.gif"></span>
						</div>	
						<div id="visualSaldo" style="display: block;">
							<div id="balanceRep"><span><strong>non disponibile</strong></span></div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- mod di rimborso -->
	
	<!-- Per la carta jeans non deve più esistere il rimborso parziale -->
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label" id="repaymentType">Modalità di rimborso*</label>
				<div class="row">
					<div class="col-sm-6">
						<div class="radio inline">
							<label class="textWrapper">
								<input type="radio" name="repaymentType" value="RM" checked="" disabled="">
								<span class="txthelp">
					          		<span class="closeable inited" data-title="Il  rimborso totale del credito residuo comporta l'estinzione  automatica della carta. " data-toggle="tooltip" data-original-title="">Totale</span>
					          	</span>
							</label>	
						</div>
					</div>
				</div>	
			</div>		
			<input type="hidden" name="amount">
		</div>
	</div>
	
	
	<!-- Conto di accredito -->
	<div class="form-group">
		<div class="row" id="row_accounts" style="display: none;">
			<div class="col-sm-12">
				<label class="control-label" id="conto_accredito">Conto di accredito*</label>
				<div class="form-inline">
					<div class="input-group">
						





<!-- === org.apache.jsp.banking.resp.accountsListSelect_jsp === { -->
	
	
		<select class="form-control" size="1" name="selectedAccount" onchange="updateStarStatus(this, 'selectedAccount_star')">
		<option value="01077 - 0000059370 - EUR" accountid="01077 - 0000059370 - EUR" accountidtoshow="CC 01077 0000059370 EUR">
				CC 01077 0000059370 EUR
		</option>
		<option value="01099 - 0000077737 - EUR" selected="selected" accountid="01099 - 0000077737 - EUR" accountidtoshow="CC 01099 0000077737 EUR">
				CC 01099 0000077737 EUR
		</option>
	</select>


	<div class="input-group-addon">
	<a title="La stella indica il conto che hai impostato come preferito" class="btn-icon" href="javascript:openStarAlert2('01099 - 0000077737 - EUR', 'CC 01099 0000077737 EUR')" data-animation="false" id="selectedAccount_star_el">
		<i class="icon icon-star_fill" id="selectedAccount_star_img"></i>
	</a>
</div>

<div class="modal fade" id="starAlert1" tabindex="-1" role="dialog" style="width: 1280px;">
	<div class="modal-dialog modal-sm" role="document" style="width: 1240px;">
		<div class="modal-content" style="max-height: 507.6px; overflow-y: auto; overflow-x: visible;">
			<div class="modal-body">
				Vuoi impostare il conto <strong id="accountIdToShow_1">CC 01099 0000077737 EUR</strong> come preferito?
			</div>
			<div class="modal-footer">
				<div class="btn-align-left">
					<button type="button" class="btn btn-default" data-dismiss="modal">Annulla</button>
				</div>
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" id="btn_setPreferred" href="javascript:setPreferredAccount('01099 - 0000077737 - EUR', 'CC 01099 0000077737 EUR', 'selectedAccount_star');">Conferma</a>
				</div>
			</div>
			<br class="clear">
		</div>
	</div>
</div>

<div class="modal fade in" id="starAlert1Ok" tabindex="-1" role="dialog" style="width: 1280px;">
	<div class="modal-dialog modal-sm" role="document" style="width: 1240px;">
		<div class="modal-content" style="max-height: 507.6px; overflow-y: auto; overflow-x: visible;">
		   <div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
           </div>
			<div class="modal-body">
				Il conto <strong id="accountIdToShow_1ok">CC 01099 0000077737 EUR</strong> È impostato come preferito. Da questo momento sarà preselezionato per tutte le operazioni.<br>
				Per impostare un altro conto preferito oppure scegliere o cambiare nickname clicca su "<a href="/wetools/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_myhome&amp;OBSKEY=nav_priv_wbx_conto_pref_nickname&amp;OBSKEY3=nav_priv_wbx_conto_pref_nickname">Impostazioni preferenze</a>".
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="starAlert1Ko" tabindex="-1" role="dialog" style="width: 1280px;">
	<div class="modal-dialog modal-sm" role="document" style="width: 1240px;">
		<div class="modal-content" style="max-height: 507.6px; overflow-y: auto; overflow-x: visible;">
		 	<div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
           	</div>
			<div class="modal-body">
				Per motivi tecnici, le modifiche richieste non sono state eseguite. Ti invitiamo a riprovare. Grazie<br>
				<a href="/wetools/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_myhome&amp;OBSKEY=nav_priv_wbx_conto_pref_nickname&amp;OBSKEY3=nav_priv_wbx_conto_pref_nickname">Impostazioni preferenze</a>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="starAlert2" tabindex="-1" role="dialog" style="width: 1280px;">
	<div class="modal-dialog modal-sm" role="document" style="width: 1240px;">
		<div class="modal-content" style="max-height: 507.6px; overflow-y: auto; overflow-x: visible;">
		 	<div class="modal-header"><a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
           	</div>
			<div class="modal-body">
				Il conto <strong id="accountIdToShow_2">CC 01099 0000077737 EUR</strong> È già impostato come preferito. Per impostare un altro conto preferito oppure scegliere o cambiare nickname clicca su "<a href="/wetools/wbOnetoone/2l/do/bnkg/accountprefs.do?OBSCNT=TAB&amp;tabId=nav_priv_wbx_myhome&amp;OBSKEY=nav_priv_wbx_conto_pref_nickname&amp;OBSKEY3=nav_priv_wbx_conto_pref_nickname">Impostazioni preferenze</a>".
			</div>
		</div>
	</div>
</div>

<!-- } === org.apache.jsp.banking.resp.accountsListSelect_jsp === -->


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section>
<div class="form-group btnWrapper" id="buttonNo" style="display: block;">		
	<div class="fooformtop">
		Step 1 di 3				
	</div>
	<div class="btn-align-right">
		<a type="button" class="btn btn-default" title="tasto prosegui disabilitato" id="btnProsegui">
			prosegui
		</a>
	</div>	
</div>
</section>
	</div>
</div>