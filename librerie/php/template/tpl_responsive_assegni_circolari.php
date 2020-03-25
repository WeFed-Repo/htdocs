<h2>Assegni circolari</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">nuova richiesta</a></li>
			<li><a href="#">annulla richiesta</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<form>
			<section>
				<p>In questa pagina &egrave; possibile richiedere l'emissione di assegni circolari.<br>
				Potrai:</p>
				<ul>
					<li>riceverli tramite corriere al tuo indirizzo di spedizione</li>
					<li>ritirarli presso un’agenzia del Gruppo Bipiemme.</li>
				</ul>
			
					<div class="formGenerico">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<div class="radio inline">
				       					 <label class="textWrapper">
				         					 <input type="radio" name="tipoConsegna" id="" checked onclick="$('#introTxtAge,#ritiroAge,#recTel').hide();$('#introTxtCor,#ritiroCor,#urg').show()">
				          					 <span class="text">consegna tramite corriere</span>
				        				</label>
		     						</div>
								</div>
								<div class="col-sm-6">
									<div class="radio inline">
				       					 <label class="textWrapper">
				         					 <input type="radio" name="tipoConsegna" id="" onclick="$('#introTxtAge,#ritiroAge,#recTel').show();$('#introTxtCor,#ritiroCor,#urg').hide()">
				          					 <span class="text">ritiro in agenzia</span>
				        				</label>
		     						</div>
								</div>
							</div>
						</div>
					</div>
					<div id="introTxtCor">
						<p>Tramite corriere, <strong>riceverai</strong> gli assegni circolari richiesti <strong>all'indirizzo che ti &egrave; pi&ugrave; comodo e che puoi indicare sotto.</strong>
						Per le richieste inserite entro le ore 12:00 &egrave; possibile richiedere l'emissione in data odierna.
						La <strong>consegna</strong> avverr&agrave; <strong>entro 48 ore dalla data di emissione</strong>. Per i casi più <strong>urgenti</strong> puoi anche scegliere la consegna <strong>entro le ore 12:00 del giorno lavorativo successivo</strong>.</p>
					</div>
					<div id="introTxtAge" style="display:none">
						<ul>
							<li>L'emissione di assegni circolari di importo pari o superiore a 5.000 &euro; con ritiro in agenzia rientra tra le &quot;operazioni occasionali per cassa&quot; per le quali &egrave; previsto il pagamento dell'imposta di bollo di 16,00 &euro;.
									Lo pagherai in agenzia ma ti sar&agrave; rimborsato da Webank chiamando il numero verde 800 060 070.</li>
							<li>&Egrave; <strong>necessario indicare il numero di un assegno bancario</strong> non trasferibile che utilizzerai per il ritiro e stampare la ricevuta della richiesta di prenotazione che dovrai consegnare in agenzia unitamente all'assegno bancario.</li>
						</ul>
					</div>
					<div class="tithelp">
						<h4>Dati richiesta</h4>
					</div>
					<div class="formGenerico borderFormRounded">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label class="control-label">Conto corrente</label>
									<span class="output">CC 01099 0000049199 EUR</span>
								</div>
								<!--div class="col-sm-6">
									<div class="row">
										<div class="col-sm-6">
											<label class="control-label" id="ritiroCor">Data emissione</label>
											<label class="control-label" id="ritiroAge" style="display:none">Data emissione e ritiro in agenzia</label>
											<select class="form-control"><option>25/11/2016</option><option>26/11/2016</option></select>
										</div>
									</div>
								</div-->
<!-- CORREZIONE X APP -->
<div class="col-sm-6">
	<label class="control-label" id="ritiroCor">Data emissione</label>
	<label class="control-label" id="ritiroAge" style="display:none">Data emissione e ritiro in agenzia</label>
	<div class="row">
		<div class="col-sm-6">
			<select class="form-control"><option>25/11/2016</option><option>26/11/2016</option></select>
		</div>
	</div>
</div>
<!-- END CORREZIONE PER APP-->

							</div>
						</div>
						<div class="form-group" id="urg">
							<div class="row">
								<div class="col-sm-12">
									<label class="control-label">Consegna urgente</label>
									<div class="radio">
					   					 <label class="textWrapper">
						         			<input type="radio" name="" id="">
						          			<span class="text">S&Igrave;, consegna entro le ore 12:00 del giorno lavorativo successivo alla data di emissione. Costo del servizio: 15,00 &euro;</span>
						        		</label>
					     			</div>
					     			<div class="radio">
					   					 <label class="textWrapper">
						         			<input type="radio" name="" id="">
						          			<span class="text">NO, consegna entro 48 lavorative dalla data di emissione</span>
						        		</label>
					     			</div>
		     					</div>
							</div>
						</div>
						<div class="form-group" id="recTel" style="display:none">
							<div class="row">
								<div class="col-sm-6">
									<div class="row">
										<div class="col-xs-10 col-sm-6">
											<label class="control-label">Numero assegno bancario</label>
											<select class="form-control"><option>701823841</option><option>701823841</option></select>
										</div>
										<div class="col-xs-1 no-label">
											<span class="closeable" data-toggle="tooltip" data-title="Per richiedere assegni circolari da ritirare in agenzia, devi disporre di un assegno bancario non trasferibile da presentare al momento del ritiro. 
							Per questa richiesta &egrave; quindi necessario indicare il numero dell'assegno bancario che consegnerai in agenzia"><a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a></span>
										</div>
									</div>
		     					</div>
		     					
							</div>
						</div>
					</div>
					<div class="headerContainerNoBootS formGenerico">
	       				<div class="tableContainerNoBootS">
	       					<table cellpadding="0" cellspacing="0" border="0">
	       						<thead>
	       							<tr>
	       								<th class="left" width="50%">Beneficiario</th>
	       								<th class="center" width="20%">Valuta</th>
	       								<th class="right">Importo</th>
	       							</tr>
	       						</thead>
	       						<tbody>
	       							<tr>
	       								<td><input type="text" class="form-control clear-x"></td>
	       								<td class="center">EUR</td>
	       								<td>
	       									<div class="row">
	       										<div class="col-sm-1">
	       										</div>
	       										<div class="col-sm-6">
	       											<input type="text" class="form-control clear-x" maxlength="10">
	       											
	       										</div>
	       										<div class="col-sm-1 no-gutter">
	       											<div class="floating-box">,</div>
	       										</div>
	       										<div class="col-sm-4 pad_left_0">
	       											<input type="text" class="form-control clear-x" maxlength="2">
	       										</div>
	       									</div>
	       									
	       								</td>
	       							</tr>
	       							<tr>
	       								<td><input type="text" class="form-control clear-x"></td>
	       								<td class="center">EUR</td>
	       								<td>
	       									<div class="row">
	       										<div class="col-sm-1">
	       										</div>
	       										<div class="col-sm-6">
	       											<input type="text" class="form-control clear-x" maxlength="10">
	       											
	       										</div>
	       										<div class="col-sm-1 no-gutter">
	       											<div class="floating-box">,</div>
	       										</div>
	       										<div class="col-sm-4 pad_left_0">
	       											<input type="text" class="form-control clear-x" maxlength="2">
	       										</div>
	       									</div>
	       									
	       								</td>
	       							</tr>
	       							<tr>
	       								<td><input type="text" class="form-control clear-x"></td>
	       								<td class="center">EUR</td>
	       								<td>
	       									<div class="row">
	       										<div class="col-sm-1">
	       										</div>
	       										<div class="col-sm-6">
	       											<input type="text" class="form-control clear-x" maxlength="10">
	       											
	       										</div>
	       										<div class="col-sm-1 no-gutter">
	       											<div class="floating-box">,</div>
	       										</div>
	       										<div class="col-sm-4 pad_left_0">
	       											<input type="text" class="form-control clear-x" maxlength="2">
	       										</div>
	       									</div>
	       									
	       								</td>
	       							</tr>
	       							<tr>
	       								<td><input type="text" class="form-control clear-x"></td>
	       								<td class="center">EUR</td>
	       								<td>
	       									<div class="row">
	       										<div class="col-sm-1">
	       										</div>
	       										<div class="col-sm-6">
	       											<input type="text" class="form-control clear-x" maxlength="10">
	       											
	       										</div>
	       										<div class="col-sm-1 no-gutter">
	       											<div class="floating-box">,</div>
	       										</div>
	       										<div class="col-sm-4 pad_left_0">
	       											<input type="text" class="form-control clear-x" maxlength="2">
	       										</div>
	       									</div>
	       									
	       								</td>
	       							</tr>
	       							<tr>
	       								<td><input type="text" class="form-control clear-x"></td>
	       								<td class="center">EUR</td>
	       								<td>
	       									<div class="row">
	       										<div class="col-sm-1">
	       										</div>
	       										<div class="col-sm-6">
	       											<input type="text" class="form-control clear-x" maxlength="10">
	       											
	       										</div>
	       										<div class="col-sm-1 no-gutter">
	       											<div class="floating-box">,</div>
	       										</div>
	       										<div class="col-sm-4 pad_left_0">
	       											<input type="text" class="form-control clear-x" maxlength="2">
	       										</div>
	       									</div>
	       									
	       								</td>
	       							</tr>
	       						</tbody>
	       						<tfoot>
	    							<tr class="totali">
	    								<td><strong>Totale</strong></td>
	    								<td class="center bgWhite"><strong>n&deg; 1 assegno</strong></td>
	    								<td class="right bgWhite"><strong>1.111.111.111,76</strong></td>
	    							</tr>
	    						</tfoodt>
	       					</table>
	       				</div>
	       			</div>
			</section>
		 	<section>
				<div class="tithelp">
					<h4>Recapiti di consegna</h4>
				</div>
				<p>Gli assegni circolari saranno consegnati all'indirizzo di corrispondenza presente in archivio.
				Se vuoi ricevere gli assegni a un indirizzo diverso dove sei sicuro di essere presente (per esempio in ufficio) puoi modificare* direttamente i dati qui di seguito. </p>
		 		<div class="formGenerico borderFormRounded">
					<div class="form-group">
	    				<div class="row">
	    					<div class="col-sm-6">
	    						<label class="control-label">Presso*</label>
	    						<input type="text" name="" class="form-control clear-x" value="Mario Rossi">
	    					</div>
	    					<div class="col-sm-6">
	    						<label class="control-label">Indirizzo*</label>
	    						<input type="text" name="" class="form-control clear-x" value="Via Maiorana 60-62">
	    					</div>
	    				</div>
	    			</div>
	    			<div class="form-group">
	    				<div class="row">
	    					<div class="col-sm-6">
	    						<label class="control-label">Cap*</label>
	    						<input type="text" name="" class="form-control clear-x" value="20700">
	    					</div>
	    					<div class="col-sm-6">
	    						<label class="control-label">Localit&agrave;*</label>
	    						<input type="text" name="" class="form-control clear-x" value="Vertemate">
	    					</div>
	    				</div>
	    			</div>
	    			<div class="form-group">
	    				<div class="row">
	    					<div class="col-sm-6">
	    						<label class="control-label">Comune*</label>
	    						<input type="text" name="" class="form-control clear-x" value="Milano">
	    					</div>
	    					<div class="col-sm-6">
	    						<label class="control-label">Provincia*</label>
	    						<input type="text" name="" class="form-control clear-x" value="MI">
	    					</div>
	    				</div>
	    			</div>
	    			<div class="form-group">
	    				<div class="row">
	    					<div class="col-sm-6">
	    						<label class="control-label">Telefono*</label>
	    						<input type="text" name="" class="form-control clear-x" value="3497643214">
	    					</div>
	    					<div class="col-xs-1 no-label">
									<span class="closeable" data-toggle="tooltip" data-title="Il recapito telefonico pu&ograve; servire al corriere per contattarti in caso di contrattempi nella consegna."><a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a></span>
							</div>
	    				</div>
	    			</div>
	    		
				
	    		</div>
				<div class="form-group btnWrapper">
				<div class="stepBtn">Step <strong> 1 </strong> di 2</div>
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary" id="">prosegui</a>
					</div>
				<br class="clear">
				</div>
				<p class="note">*La modifica &egrave; valida soltanto per questa richiesta e non implica il cambio dell'indirizzo presente in archivio. Se vuoi modificare l’indirizzo presente nella tua scheda anagrafica, vai alla sezione recapiti. </p>
<p>
<p class="note">I campi contrassegnati da un asterisco(*) sono obbligatori.</p>
<p class="note">Ti ricordiamo che, per effetto del <strong>D. Lgs.21 novembre 2007 n.231</strong>, gli assegni emessi a partire dal <strong>30 aprile 2008</strong> sono esclusivamente <strong>&quot;non trasferibili&quot;</strong>.
	    		</p>
		 	</section>

		 </form>
		
	</div>
</div>
