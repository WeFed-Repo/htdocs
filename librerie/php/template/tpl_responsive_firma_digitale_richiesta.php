<h2>Richiesta firma digitale</h2>

<section>
	<p>
		Prima di procedere con la richiesta della <strong>firma digitale,</strong> ti chiediamo di controllare e confermare la <strong>correttezza</strong> dei tuoi <strong>dati</strong>.
	</p>	
</section>



<section>	
<div class="boxStato">
	<div class="row noMargin rowStepper">
		<div class="col-xs-10 col-sm-12">
			<div class="row">
				<div class="col-xs-4 ico_boxStato attivo">
					<div class="ico_bg_circle">1</div>
				</div>
				<div class="col-xs-4 ico_boxStato">
					<div class="ico_bg_circle">2</div>
				</div>
				<div class="col-xs-4 ico_boxStato ultima">
					<div class="ico_bg_circle">3</div>
				</div>
			</div>				
			
			<div class="row filPrimo">
				<div class="col-sm-12 linePd">
					<div class="col-xs-4 border-center"></div>
					<div class="col-xs-4 border-center"></div>						
				</div>
			</div>

			<div class="row box_txt_boxStato">
				<div class="col-xs-4 txt_boxStato attivo prima">
					<span>Controlla i tuoi dati</span></div>
				<div class="col-xs-4 txt_boxStato"><span>Richiesta</span></div>
				
				<div class="col-xs-4 txt_boxStato ultima"><span>Il tuo contratto</span></div>
			</div>
		</div>	
	</div>
</div>
</section>

<section>
<form class="formGenerico bgPin32 borderFormRounded output" role="form" id="form02">
	
	<div class="form-group">
		<div class="row">
		 	<div class="col-sm-6">
				<label class="control-label-output">Nome e cognome</label>
				<span class="output">MICHELA SECCI</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Sesso</label>
				<span class="output">Femminile</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
		 	<div class="col-sm-6">
				<label class="control-label-output">Data di nascita</label>
				<span class="output">28/12/1965</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Documento d'identità</label>
				<span class="output">Carta d'identità N. AT9398669</span>
				<span class="output">Rilasciato da Comune</span>
				<span class="output">data di rilascio/ultimo rinnovo 09/10/2012</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
		 	<div class="col-sm-6">
				<label class="control-label-output">Codice fiscale</label>
				<span class="output">SCCMHL65T68F205L</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Stato di nascita</label>
				<span class="output">Italia</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
		 	<div class="col-sm-6">
				<label class="control-label-output">Comune di nascita</label>
				<span class="output">MILANO</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Cittadinanza</label>
				<span class="output">ITALIA</span>
			</div>
		</div>
	</div>

<!-- GESTIONE INDIRIZZO RESIDENZA -->
	<div class="form-group" id="indirizzo">
		<div class="row">
		 	<div class="col-sm-6">
				<label class="control-label-output">Indirizzo di residenza</label>
				<span class="output">VIALE VITTORIO EMANUELE 30, 20123 MILANO (MI)</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">&nbsp;</label>
				<span class="output">
					<a href="#1" class="btn-icon" onClick="$('#indirizzo').hide(); $('#modificaIndirizzo').show();">
						Modifica indirizzo di residenza
					</a>
				</span>
			</div>
		</div>
	</div>

	<!-- INDIRIZZO HIDE -->
	<div class="" id="modificaIndirizzo"  style="display:none; background-color:#FFF">

		<div class="form-group">
			<div class="row">
				<div class="col-sm-12">
					<h4>Modifica indirizzo di residenza</h4>
					<p>Inserisci il nuovo indirizzo</p>
				</div>
			</div>	
			<div class="row">
			 	<div class="col-sm-8">
					<label class="control-label">Indirizzo</label>
					<input id="testo2" type="text" class="form-control clear-x">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-2">
					<label  class="control-label">Provincia</label>
					<select id="select1" class="form-control">
						<option value="">seleziona</option>								
						<option value="AG">AG</option>
						<option value="AL">AL</option>
						<option value="AN">AN</option>
						<option value="AO">AO</option>
						<option value="AP">AP</option>
						<option value="AQ">AQ</option>
					</select>
				</div>
				<div class="col-sm-6">
					<label  class="control-label">Comune</label>
					<select id="select1" class="form-control">
						<option value="">seleziona</option>
						<option value="">ABBIATEGRASSO</option>
						<option value="">ALBAIRATE</option>
						<option value="">ARCONATE</option>
						<option value="">ARESE</option>
					</select>
				</div>
				<div class="col-sm-2">
					<label  class="control-label">Cap</label>
					<select id="select1" class="form-control">
						<option value="">seleziona</option>
						<option value="20121">20121</option>
						<option value="20122">20122</option>
						<option value="20123">20123</option>
						<option value="20124">20124</option>
					</select>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-12">
					<p><strong>Attenzione:</strong> la modifica dei dati ha valore <strong>per tutti i rapporti</strong> con Banca Popolare di Milano e sarà trasmessa all'ente certificatore (<strong>InfoCert</strong>) per l'attivazione della firma digitale.</p>
			 	</div>
			</div>	
		</div>

		<!-- PIN 32 -->
		<div class="form-group borderFormRounded">
	        <div class="row">           
	            <div class="col-sm-12">
	               <p>Inserisci la <strong class="negativo">PRIMA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">12</strong> della tua <strong>Carta Servizi Telematici</strong></p>       
	            </div>
	        </div>

	        <div class="row">
	            <div class="col-sm-12">                  
	                <div class="form-inline form-ipt-pws">
	                    <div class="margBottSmall">                
	                        <input type="number" class="form-control" maxlength="1">                           
	                        <span>*</span>                     
	                        <input type="number" class="form-control" maxlength="1"> 
	                        <span>*</span>
	                        <div class="clearfix"></div>         
	                    </div>
	                </div>                      
	                <div class="form-inline form-ipt-nbr">
	                    <div class=""> 
	                        <span class="note">1</span>
	                        <span class="note">2</span>
	                        <span class="note">3</span>
	                        <span class="note">4</span>   
	                        <div class="clearfix"></div>  
	                    </div>     
	                </div>
	            </div>               
	        </div>           
		</div>  
		<!-- END PIN 32-->

		<div class="form-group">
			<div class="row">           
		    	<div class="col-sm-12">
		    		<div class="form-group btnWrapper">
						<div class="btn-align-left">
							<a type="button" class="btn btn-default" onclick="$('#modificaIndirizzo').hide(); $('#indirizzo').show(); ">Annulla</a>
						</div>
						<div class="btn-align-right">
							<a type="button" class="btn btn-primary" id="">Prosegui</a>
						</div>
					</div>
		    	</div>
			</div>
		</div>

	</div><!-- END INDIRIZZO HIDE-->

<!-- END GESTIONE INDIRIZZO RESIDENZA -->

	<div class="form-group marginBottomNone">
		<div class="row">
		 	<div class="col-sm-12">
				<label class="control-label-output">Recapiti</label>
			</div>
		</div>
	</div>

<!-- GESTIONE CELLULARE -->
	<div class="form-group marginBottomNone" id="telefono">
		<div class="row">
		 	<div class="col-sm-6">
				<span class="output">Telefono cellulare: 333*****97 Tre</span>
			</div>
			<div class="col-sm-6">
				<span class="output">
					<a href="#1" class="btn-icon" onclick="$('#telefono').hide(); $('#modificaTelefono').show();">
						Modifica numero cellulare
					</a>	
				</span>
			</div>
		</div>
	</div>

<!--  CELLULARE HIDE -->
<div class="borderFormRounded" id="modificaTelefono"  style="display:none;">
	
	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<h4>Modifica numero cellulare</h4>
				<p>Inserisci un nuovo numero di telefono e/o un nuovo operatore</p>
			</div>
		</div>		
	</div>

	<div class="form-group">
		<div class="row">
		 	<div class="col-sm-6">
				<label class="control-label">Modifica numero cellulare</label>
			</div>
			<div class="col-sm-6">
				<label class="control-label">Operatore</label>
			</div>
		</div>
		<div class="row">
		 	<div class="col-sm-2">
				<input id="testo2" type="text" class="form-control clear-x">
			</div>
			<div class="col-sm-4">
				<input id="testo2" type="text" class="form-control clear-x">
			</div>
			<div class="col-sm-6">
				<select id="select1" class="form-control">
					<option value="">seleziona</option>
					<option value="">Tim</option>
					<option value="">Vodafone</option>
					<option value="">Wind</option>
					<option value="">tre</option>
				</select>
			</div>
		</div>	
	</div>

	<div class="form-group">		
		<div class="row">
		 	<div class="col-sm-12">
		 		<span class="output">
					<p><strong>Attenzione:</strong> la modifica dei dati ha valore <strong>per tutti i rapporti</strong> con Banca Popolare di Milano e sarà trasmessa all'ente certificatore (<strong>InfoCert</strong>) per l'attivazione della firma digitale.</p>
		 		</span>
		 	</div>
		</div>
		<div class="row">
		 	<div class="col-sm-12">
		 		<div class="form-group btnWrapper">
					<div class="btn-align-left">
						<a type="button" class="btn btn-default" 
						onclick="$('#modificaTelefono').hide(); $('#telefono').show();" >Annulla</a>
					</div>
					<div class="btn-align-right">
						<a type="button" class="btn btn-primary" id="">Prosegui</a>
					</div>
				</div>
		 	</div>
		</div>		
	</div>

</div><!-- END  CELLULARE HIDE -->	

<!-- END GESTIONE CELLULARE -->

<!-- GESTIONE EMAIL -->
	<div class="form-group"  id="email">
		<div class="row">
		 	<div class="col-sm-6">
				<span class="output">Email: marina.carpineti@gmail.com</span>
			</div>
			<div class="col-sm-6">
				<span class="output">
					<a href="#1" class="btn-icon" onclick="$('#email').hide(); $('#modificaEmail').show();">
						Modifica email
					</a>	
				</span>
			</div>
		</div>
	</div>
	<!-- EMAIL HIDE -->
	<div class="borderFormRounded" id="modificaEmail"  style="display:none;">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-12">
					<h4>Modifica email</h4>
					<p>Inserisci un nuovo indirizzo di posta elettronica</p>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
		 		<div class="col-sm-12">
					<label class="control-label">Modifica indirizzo email</label>
				</div>
			</div>
			<div class="row">
		 		<div class="col-sm-6">
					<input id="testo2" type="text" class="form-control clear-x">
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-12">
					<p><strong>Attenzione:</strong> la modifica dei dati ha valore <strong>per tutti i rapporti</strong> con Banca Popolare di Milano e sarà trasmessa all'ente certificatore (<strong>InfoCert</strong>) per l'attivazione della firma digitale.
					</p>
			 	</div>
			</div>
		</div>

	<!-- PIN 32 -->
	<div class="form-group borderFormRounded">
        <div class="row">           
            <div class="col-sm-12">
               <p>Inserisci la <strong class="negativo">PRIMA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">12</strong> della tua <strong>Carta Servizi Telematici</strong></p>       
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">                  
                <div class="form-inline form-ipt-pws">
                    <div class="margBottSmall">                
                        <input type="number" class="form-control" maxlength="1">                           
                        <span>*</span>                     
                        <input type="number" class="form-control" maxlength="1"> 
                        <span>*</span>
                        <div class="clearfix"></div>         
                    </div>
                </div>                      
                <div class="form-inline form-ipt-nbr">
                    <div class=""> 
                        <span class="note">1</span>
                        <span class="note">2</span>
                        <span class="note">3</span>
                        <span class="note">4</span>   
                        <div class="clearfix"></div>  
                    </div>     
                </div>
            </div>               
        </div>           
	</div>  
	<!-- END PIN 32-->
		<div class="form-group">
			<div class="row">
		 		<div class="col-sm-12">
		 			<div class="form-group btnWrapper">
						<div class="btn-align-left">
							<a type="button" class="btn btn-default" 
							onclick="$('#modificaEmail').hide(); $('#email').show();" >Annulla</a>
						</div>
						<div class="btn-align-right">
							<a type="button" class="btn btn-primary" id="">Prosegui</a>
						</div>
					</div>
		 		</div>
			</div>		
		</div>
	</div><!-- END EMAIL HIDE -->
<!-- END GESTIONE EMAIL -->

<div class="form-group">
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group btnWrapper">
				<div class="btn-align-center">
					<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#layerSepa">Prosegui</a>
				</div>
			</div>
		</div>
	</div>
</div>

</form>
</section>


<!-- OVERLAYER-->



<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Vuoi procedere con la richiesta della firma digitale?</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>
								Ti ricordiamo che il servizio è rilasciato da <strong>InfoCert S.p.A.</strong>, ente certificatore per la firma digitale.<br/>
								Proseguendo, sarai indirizzato sui sistemi di InfoCert.
							</p>	
							<div class="form-group btnWrapper">
								<div class="btn-align-right">
	<a type="button" class="btn btn-primary" id="" href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_firma_digitale_richiesta_2.php&responsive=y&liv0=0&liv1=2&liv2=1#1">Prosegui</a>
									<br class="clear">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--END  OVERLAYER-->
