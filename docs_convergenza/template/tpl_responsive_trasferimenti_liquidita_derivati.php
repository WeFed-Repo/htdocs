<h2>Trasferimenti liquidit&agrave; derivati</h2>


<!-- 
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
	**************************************************************************************************

	**** *** *** *** *** *** *** *** *** *** *** LEGGERE *** *** *** *** *** *** *** *** *** *** ***** 
	NB: In caso di utente non attivato sui derivati, viene visualizzato lo STEP 1 altrimenti lo STEP 2
	****** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ******
	
	**************************************************************************************************
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
-->

<!-- STEP 1 -->
<section>
	<p>
		Per operare in derivati, occorre aver attivato online il relativo servizio.<br/>
		Premi il pulsante per attivarlo.
	</p>
	<div class="btn-align-right">
	    <a type="button" class="btn btn-primary" id="" href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_attivazione_altri_servizi.php&responsive=y&liv0=3&liv1=3&liv2=0&liv3=2">
	        Attiva il servizio
	    </a>	
	</div>
</section>
<!-- END STEP 1 -->

<br/><br/>
<hr/><hr/><hr/><hr/>
<br/>

<!-- STEP 2 -->

<section>
	<p>		
		In questa pagina puoi effettuare trasferimenti dal conto corrente alla liquidità dei derivati e viceversa. Entrambi i saldi si aggiornano immediatamente.
	</p>
</section>

<section>
	<form class="formGenerico borderFormRounded" role="form" id="form03">
	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Seleziona il conto</label>
				<div class="form-inline">		 
				  	<div class="input-group">
      				<select class="form-control" name="" id="">
						<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
						<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
					</select>
     				<div class="input-group-addon">
     				 	<a class="btn-icon" data-toggle="modal" data-target="#starAlert1">
     				 		<i class="icon icon-star_fill" title="icon-star_fill"></i>
     				 	</a>
     				</div>
    			  	</div>
    			</div>
			</div>
		</div>
	</div>
	</form>
</section>

<section>
	<h4>Alimenta la liquidit&agrave; dei derivati</h4>
	<form class="formGenerico borderFormRounded" role="form" id="form03">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
	    			<label class="control-label" id="dataacc">Disponibilit&agrave; per il trasferimento</label> 
					<span class="output" id="balanceValue" value="4.604,07">
						<strong><a href="#" class="btn-icon">4.604,07 €</a></strong>
					</span> 
				</div>
				<div class="col-sm-6">
				<label class="control-label" id="importo">Importo trasferimento</label>
					<div class="form-inline">
						<div class="requiredField">
							<div class="input-group" id="italyCurrency">
								<div class="editable-input">
									<input maxlength="10" id="importoField" value="" type="number" name="importo" class="form-control clear-x">
								</div>
								<div class="input-group-addon">EUR</div>
                        	</div>
                    	</div> 
                	</div>
        		</div>
    		</div>
		</div>
		<div class="form-group">      
    		<div class="row">
            	<div class="col-sm-6">
                	<label for="" class="control-label-output">
                		Il saldo disponible ad oggi del conto corrente diventa	
                	</label>
                	<span class="output">865.488,33</span>
            	</div>
            	<div class="col-sm-6">
                	<label for="" class="control-label-output">
                		Il saldo disponible ad oggi della liquidità derivati diventa
                	</label>
                	<span class="output">69.894,32</span>
            	</div>
         	</div>
    	</div>
	</form>
<div class="form-group">
	<div class="row">
		<div class="col-xs-12">
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary" id="" href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_trasferimenti_liquidita_derivati_step_2.php&liv0=3&liv1=0&liv2=1&liv3=0&responsive=y#!">Prosegui</a>
			</div>
		</div>
	</div>
</div>
</section>


<section>
	<h4>Alimenta il conto</h4>
	<form class="formGenerico borderFormRounded" role="form" id="form03">
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
	    			<label class="control-label" id="dataacc">Disponibilit&agrave; per il trasferimento</label> 
					<span class="output" id="balanceValue" value="4.604,07">
						<strong><a href="#" class="btn-icon">4.604,07 €</a></strong>
					</span> 
				</div>
				<div class="col-sm-6">
				<label class="control-label" id="importo">Importo trasferimento</label>
					<div class="form-inline">
						<div class="requiredField">
							<div class="input-group" id="italyCurrency">
								<div class="editable-input">
									<input maxlength="10" id="importoField" value="" type="number" name="importo" class="form-control clear-x">
								</div>
								<div class="input-group-addon">EUR</div>
                        	</div>
                    	</div> 
                	</div>
        		</div>
    		</div>
		</div>
		<div class="form-group">      
    		<div class="row">
            	<div class="col-sm-6">
                	<label for="" class="control-label-output">
                		Il saldo disponible ad oggi della liquidità derivati diventa	
                	</label>
                	<span class="output">865.488,33</span>
            	</div>
            	<div class="col-sm-6">
                	<label for="" class="control-label-output">
                		Il saldo disponible ad oggi del conto corrente diventa
                	</label>
                	<span class="output">69.894,32</span>
            	</div>
         	</div>
    	</div>
	</form>
	<div class="form-group">
		<div class="row">
			<div class="col-xs-12">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" id="">Prosegui</a>
				</div>
			</div>
		</div>
	</div>
</section>



