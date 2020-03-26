<style>
	.ui-datepicker td {
	    padding: 1px !important;
	}
	
	.OUT2ColDiff select {
	    color: #003366;
	}
	
	.boxOra {
		/* background-color: white;
	    border: 1px solid #B0B0B0; */
	    padding: 7px;
	    min-height: 195px;
	}
	
	.boxOra a {
		padding: 5px; 
		text-align: center; 
		margin-bottom: 3px;
		cursor: pointer;
		display: block;
	}
	
	.boxOra a:hover {
		text-decoration: none;
	}
	
	.boxOra .gridMsg {
	    padding: 5px;
	    position: absolute;
	}
	.boxOra .gridMsg * {	
		vertical-align: middle;
	}
	.boxOra .gridMsg span.ui-icon {
	    float: left;
	    margin-right: 0.3em;
	}
	textarea {
		height: 75px;
		width:400px;
	}
	
	div.loading {
		display: block;
	    height: 195px;
	    position: relative;
	}
	
	div.loading img {
	    left: 50%;
	    margin-left: -16px;
	    margin-top: -16px;
	    position: relative;
	    top: 50%;
	}
</style>




					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							16/03/2017	
						</div>
					</div>
					
<div class="riquadro clearfix">
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
		<div class="circle ">&nbsp;</div>
		<div class="circle ">&nbsp;</div>
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		<div class="hidden-print hidden-xxs flag appuntamento">&nbsp;</div>
		<span>Richiedi appuntamento</span>
 	</h1>
	
	<div class="col-xs-12 hidden-xs hidden-print">
	
		<div class="contentPagina">
			Tramite questa sezione hai la possibilit&agrave; di prendere un appuntamento con la tua filiale di riferimento e in&nbsp; particolare con il gestore/direttore che ti segue abitualmente.
		</div>
	</div>
		
	
</div>
	
	




<form id="formRichiestaAppuntamento" method="post" action="/WEBHT/serviziPerTe/richiestaAppuntamentoCompilazione.do">
	<input type="hidden" name="cambioFiliale" value="true">
		<div class="section clearfix">
			<h3 class="titleSection">
				Richiedi un appuntamento con
			</h3>
		<div class="bs-example form-horizontal">
			<div class="form-group clearfix">
				<div class="row">
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label">Nome della filiale</label>
						<div class="form-field">
							<select name="codiceFiliale" onchange="this.form.submit()" class="form-control">
								<option value="0004" selected="selected">VERONA AG. 3</option>
								<option value="0001">SEDE DI VERONA</option>
							</select>							
						</div>
					</div>			
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label">Indirizzo della filiale</label>
						<div class="form-field">
							VIA F.R. MORANDO, 17 - 37131 VERONA (VR) 
						</div>
					</div>
					<div class="form-field-input col-sm-4 col-xs-12">
						<label class="control-label">Nome e Cognome</label>
						<div class="form-field">
							Direttore LUCA CAVAZZA
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
	



	<form id="formRichiestaAppuntamento1" method="post" action="/WEBHT/serviziPerTe/richiestaAppuntamentoConferma.do">
		<input type="hidden" name="matricolaRiferimento" value="HO03571">
		<input type="hidden" name="giorno" value="21/03/17" id="giornoAppuntamentoHidden">
		<input type="hidden" name="ora" value="" id="oraAppuntamentoHidden">
		
		<div class="section clearfix">
			<h3 class="titleSection">			
				Richiesta appuntamento
			</h3>
			<div class="bs-example">
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-sm-6 col-xs-12">
							<label class="control-label">
								Seleziona il giorno
							</label>
							<div class="form-field">
								<div id="giornoAppuntamento" class="hasDatepicker"><div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="<Prec"><span class="ui-icon ui-icon-circle-triangle-w">&lt;Prec</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Succ>"><span class="ui-icon ui-icon-circle-triangle-e">Succ&gt;</span></a><div class="ui-datepicker-title"><select class="ui-datepicker-month" data-handler="selectMonth" data-event="change"><option value="2" selected="selected">Mar</option><option value="3">Apr</option><option value="4">Mag</option><option value="5">Giu</option></select><select class="ui-datepicker-year" data-handler="selectYear" data-event="change"><option value="2017" selected="selected">2017</option></select></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col"><span title="Lunedì">Lu</span></th><th scope="col"><span title="Martedì">Ma</span></th><th scope="col"><span title="Mercoledì">Me</span></th><th scope="col"><span title="Giovedì">Gi</span></th><th scope="col"><span title="Venerdì">Ve</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Sabato">Sa</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Domenica">Do</span></th></tr></thead><tbody><tr><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">1</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">2</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">3</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">4</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">5</span></td></tr><tr><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">6</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">7</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">8</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">9</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">10</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">11</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">12</span></td></tr><tr><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">13</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">14</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">15</span></td><td class=" ui-datepicker-unselectable ui-state-disabled  ui-datepicker-today"><span class="ui-state-default">16</span></td><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">17</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">18</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">19</span></td></tr><tr><td class=" ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">20</span></td><td class=" ui-datepicker-days-cell-over  ui-datepicker-current-day" data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default ui-state-active ui-state-hover" href="#">21</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">22</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">23</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">24</a></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">25</span></td><td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled "><span class="ui-state-default">26</span></td></tr><tr><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">27</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">28</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">29</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">30</a></td><td class=" " data-handler="selectDay" data-event="click" data-month="2" data-year="2017"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
							</div>
						</div>

<style type="text/css">
	

</style>

		<div class="form-field-input col-sm-6 col-xs-12">
			<label class="control-label">
				Scegli l'ora
			</label>
			<div class="form-field">
				<div class="boxOra">
					
					<a href="#imposta" class="ui-state-default  " onclick="return impostaOrario(this, '1')">08:30 - 09:30</a>
						
					<a href="#imposta" class="ui-state-default  " onclick="return impostaOrario(this, '2')">09:30 - 10:30</a>
						
					<a href="#imposta" class="ui-state-default  " onclick="return impostaOrario(this, '3')">10:30 - 11:30</a>
						
					<a href="#imposta" class="ui-state-default  " onclick="return impostaOrario(this, '4')">11:30 - 12:30</a>
						
					<a href="#imposta" class="ui-state-default  " onclick="return impostaOrario(this, '5')">12:30 - 13:30</a>
						
					<a href="#imposta" class="ui-state-default  " onclick="return impostaOrario(this, '7')">14:30 - 15:30</a>
						
					<a href="#imposta" class="ui-state-default  " onclick="return impostaOrario(this, '8')">15:30 - 16:30</a>
						
				</div>
			</div>
		</div>
	</div>
					<div class="row">
						<div class="form-field-input col-sm-6 col-xs-12">
							<label class="control-label">
								Motivo richiesta
							</label>
							<div class="form-field">
								<select name="motivo" class="form-control">
									<option value="">Seleziona</option>
									<option value="A">Mutuo</option>
									<option value="B">Prestito personale</option>
									<option value="C">Investimenti</option>
									<option value="D">Conto Corrente</option>
									<option value="E">Carta di Credito</option>
									<option value="F">Altro</option>
								</select>
							</div>
						</div>
						<div class="form-field-input col-sm-6 col-xs-12">
							<label class="control-label">
								Note aggiuntive
							</label>
							<div class="form-field">
								<textarea name="note" cols="80" rows="3" class="form-control"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section clearfix">
			<h3 class="titleSection">					
				Avviso
		</h3>
			<div class="bs-example">
				<div class="form-group">
					<div class="form-field-input col-xs-12">
						<div class="form-field-input col-xs-12">
							<label class="control-label">
								Ti verr&agrave; inviato un avviso il giorno prima dell'evento.
								Tramite quale canale vuoi essere avvisato?
							</label>
						</div>
					
						<div class="form-field-input col-xs-12 col-sm-6">
							<div class="form-field">
								<div class="form-field-input col-xs-5">
									<div class="form-field-input col-xs-1 clear-padding">
										<input type="checkbox" name="flagEmail" value="S" id="flagEmail">
									</div>
									<div class="form-field-input col-xs-11 clear-padding">
										<input type="hidden" name="flagEmail" value="">
										<label  for="flagEmail">E-MAIL</label>
									</div>
								</div>
								
									<div class="form-field-input col-xs-5">
										<div class="form-field-input col-xs-1 clear-padding">
											<input type="checkbox" name="flagSms" value="S" id="flagSms">
										</div>
										<div class="form-field-input col-xs-11 clear-padding">
											<input type="hidden" name="flagSms" value="">
											<label  for="flagSms">SMS</label>
										</div>
									</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section clearfix">
			<h3 class="titleSection">	
				Contatti
			</h3>
			<div class="bs-example">
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-6 col-xs-12">
						<label class="control-label" for="cellulare">
							Numero di cellulare
						</label>
			  	  	  	<div class="form-field">
							<input type="text" name="cellulare" 
							maxlength="60"  
							value="3312344345" 
							readonly="readonly" 
							id="cellulare" 
							class="form-control">
					  	</div>
					</div>

		<div class="form-field-input col-sm-6 col-xs-12">
			<label class="control-label" for="email">
		  		Indirizzo e-mail
		  	</label>
  	  	  	<div class="form-field">
				<input type="text" name="email" 
					maxlength="60"  
					value="nome.cognome@gmail.com" 
					readonly="readonly" id="email" 
					 class="form-control ">
		    <!--input type="button" name="contatti" value="Modifica e-mailaaaa" id="contatti" class="btn"-->
		    	<input type="button" name="contatti" value="&nbsp;" id="contatti" class="btnEdit">
		    </div>
		 </div>

				</div>
			</div>
		</div>


	</form>
</div>
<div class="pull-right margin-bottom20">	
 	
 	<input type="button" name="conferma" value="Avanti" onclick="$('#formRichiestaAppuntamento1').submit()" class="btn btn-primary" alt="Avanti">
 </div>


