<h2>Grafici interattivi</h2>
<section>
<ul>
	<li>I<strong> grafici interattivi</strong> ti permettono di <strong>confrontare</strong> fino a 5 titoli.</li>
	<li>Per visualizzare il grafico inserisci i parametri di ricerca ("Indice" o "Titolo") dei titoli che vuoi confrontare.</li>
</ul>
</section>
<section>
	<section class="boxesitoWrap">
	<div class="boxesito attenzione">
		<div class="text">
			<div class="row">
				<div class="col-sm-12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
				et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
				</div>
			</div>
		</div>
	</div>
	</section>
	<div class="tithelp">
	   <div class="flRight"><a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i></a>
	        <br class="clear">
	    </div>
	    <br class="clear">
	</div>
	<form class="formGenerico borderFormRounded" role="form" id="form01">
		<div id="sezioneConfronta" style="display:none">
			<div class="form-group">
				<div class="row">
					<div class="col-sm-4 compLegend">
						<label class="control-label">Visualizza</label>
						<span class="check checkVerde"></span><span>FTSE MIB</span>
					</div>
					<div class="col-sm-8">
						<div class="compLegend">
							<label class="control-label">Confronta con</label>
							<span class="check checkBlue"></span><span>FTSE MIB</span>
							<span class="check checkOrange"></span><span>FTSE MIB</span>
							<span class="check checkLightBlue"></span><span>FTSE MIB</span>
							<span class="check checkRed"></span><span>FTSE MIB</span>
					</div>
					</div>
				</div>
			</div>
		
			<div class="form-group btnWrapper" id="btnConfronta">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary"  id="btnAggiungi">aggiungi per confronto</a>
				</div>
				<div class="btn-align-right">
					<a type="button" class="btn btn-default" id="">elimina</a>
				</div>
				
				<br class="clear">
			</div>
			<script>
			    var parHidden = true;
			    $('#btnAggiungi').click(function(){
			    	$('#sezioneAggiungi').toggle();
			    	parHidden = !parHidden;
			    	if(parHidden){
			    		$('#btnAggiungi').html('aggiungi per confronto')
			    	}
			    	else{
			    		$('#btnAggiungi').html('chiudi')
			    	}
			    	
			    }) 
			</script>
		</div>
   		<div class="form-group" id="sezioneAggiungi">
        <div class="row">
            <div class="col-sm-12">
                <label class="control-label">Ricerca per</label>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="row">
	                        <div class="col-xs-3 col-sm-2">
		                        <div class="radio inline">
		                            <label class="textWrapper">
		                                <input type="radio" name="tipo_ricerca" id="">
		                                <span class="text">Indice</span>
		                            </label>
		                        </div>
                   			</div>
                   			<div class="col-xs-9 col-sm-4">
		                       <select class="form-control">
	                           		<option value="MI.EQCON.I_SPMIB">
											FTSE MIB
										</option>

										<option value="MI.EQCON.I_MIBTEL">
											FTSE Italia All Share
										</option>

										<option value="MI.EQCON.I_ALLSTAR">
											FTSE Italia Star
										</option>

										<option value="NY.EQNY.I_DJI">
											DOW JONES
										</option>

										<option value="NQ.EQNQ.I_NDX">
											NASDAQ 100
										</option>

										<option value="FR.EQXET.I_GDAXI">
											DAX 30
										</option>

										<option value="EUR.EQPA.I_FCHI">
											CAC40
										</option>

										<option value="LON.EQLSE.I_FTSE">
											FTSE 100
										</option>

										<option value="MA.EQIBE.I_IBEX">
											IBEX 35
										</option>

										<option value="EUR.EQAMS.I_AEX">
											AEX
										</option>

										<option value="EUR.EQBRU.I_BFX">
											BEL 20
										</option>

										<option value="EUR.EQPSI.I_PSI">
											PSI20
										</option>

										<option value="NY.EQNY.I_SP500">
											S&amp;P 500
										</option>

										<option value="FR.EQXET.I_SX5E">
											Euro Stoxx 50
										</option>

                       			</select>
                   			</div>
                   		</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="row">
	                        <div class="col-xs-3 col-sm-2">
		                        <div class="radio inline">
		                            <label class="textWrapper">
		                                <input type="radio" name="tipo_ricerca" id="">
		                                <span class="text">Titolo</span>
		                            </label>
		                        </div>
                   			</div>
                   			<div class="col-xs-9 col-sm-3">
		                       <input type="text" class="form-control">
	                         </div>
	                        <div class="col-xs-9 col-sm-4">
		                         <select class="form-control">
	                           			<option>Seleziona il mercato</option>
	                           			<optgroup label="Azioni"> 
<option value="MI|EQCON|B">MTA</option><option value="TLX|ELX|B">EuroTLX</option><option value="FR|EQXET|B">XETRA</option><option value="EUR|EQPA|B">SBF</option><option value="LON|EQLSE|B">FTSE100</option><option value="MA|EQIBE|B">IBEX35</option><option value="EUR|EQAMS|B">AEX25</option><option value="EUR|EQBRU|B">BEL20</option><option value="EUR|EQPSI|B">PSI20</option><option value="NY|EQNY|B">NYSE</option><option value="NQ|EQNQ|B">NASDAQ</option>
										</optgroup>	
										<optgroup label="ETF-ETC">
<option value="MI|EQCON|E">ETFplus</option>
										</optgroup>	
										<optgroup label="CW &amp; CERTIFICATES"> 
<option value="MI|CW|C">SEDEX</option><option value="TLX|ELX|C">EuroTLX</option>
										</optgroup>	
										<optgroup label="DERIVATI">
<option value="MI|DER|D">IDEM</option><option value="FR|EUREX|D">EUREX</option><option value="EUR|LIF|D">EURONEXT - LIFFE</option><option value="CME|CEQFU|D">CME</option><option value="CME|CBOFU|D">eCBOT</option><option value="CME|COMEX|D">COMEX</option><option value="CME|NYMEX|D">NYMEX</option>
										</optgroup>	
										<optgroup label="OBBLIGAZIONI" class="optiongroup">
<option value="MI|MRT|O">MOT - EuroMOT</option><option value="TLX|ELX|O">EuroTLX</option><option value="MI|HIMTF|O">Hi-MTF</option>
										</optgroup>
									</select>
	                         </div>
	                         <div class="col-sm-3 col-xs-12">
								
								<div class="btn-align-left">
									<a type="button" class="btn btn-primary" id="" onclick="$('#sezioneAggiungi').hide();$('#sezioneConfronta').show()">aggiungi</a>
								</div>
							</div>

                   		</div>
                   	
                    </div>
                  </div>
            </div>
        </div>
   	 </div>
	
    </form>
	<section>
	<p style="width:100%;padding:20px;text-align:center;background-color:green;color:white;text-transform:uppercase">PER ORA INCLUDERE IFRAME AS IS </p>
	</section>
  
</section>