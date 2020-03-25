<h2>Gestione servizio</h2>

<div class="navfrontPage outerTab">
	<div class="innerTab">
		<ul class="newLabel">
			<li>
				<a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Movimenti</a>
			</li>
			<li class="on"><a href="#">Invia pagamento</a></li>
			<li><a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_colletta.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#">Colletta</a></li>
			<li><a href="#">Impostazioni</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
	
		<section>
			<p>Effettuare un pagamento &egrave; semplice:</p>
			<ul>
				<li>scegli un beneficiario tra i contatti della rubrica, oppure digita il numero di cellulare</li>
				<li>inserisci importo e causale</li>
				<li>conferma l'operazione</li>
			</ul>
			<p>
				Se il contatto ha già aderito al servizio <strong>Jiffi di SIA</strong> riceve il denaro all'istante, altrimenti potr&agrave; riceverlo attivando il servizio entro 7 giorni.
			</p>
		</section>
	
	<section>
	<h4>Dati del pagamento</h4>
		<form class="formGenerico borderFormRounded" role="form" id="">
			<div class="form-group">	 
				<div class="row">
					<div class="col-sm-6">
						<label class="control-label">Conto di addebito*</label>
						<div class="form-inline">		 
							<div class="input-group">
					    	<select class="form-control" name="" id="">
								<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
								<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
							</select>
						        <div class="input-group-addon">
						    	<a class="no-underline btn-icon" data-toggle="modal" data-target="#starAlert1">
						         	<i class="icon icon-star_fill" title="icon-star_fill"></i>
						    	</a>
						        </div>
					       </div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">	 
				<div class="row">	
					<div class="col-sm-4">	
						<label class="control-label-output">Saldo</label>
						<span class="output">33000,22€</span>
					</div>
					<div class="col-sm-4">	
						<label class="control-label-output">Residuo mensile</label>
						<span class="output">1400,29€</span>
					</div>
					<div class="col-sm-4">	
						<label class="control-label-output">Residuo giornaliero</label>
						<span class="output">1500,32€</span>
					</div>
				</div>
			</div>
				
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<label class="control-label">Telefono beneficiario*</label>
   	 				<!-- -->
   	 					<select name="" class="form-control" id="tooltipOnSelect">
							<option>Pancera Maria - 3201551475</option>
							<option>Massironi Fabio - 3288649632</option>
							<option>Massironi Alessandro - 3355799290</option>
   	 					</select>	
					<!-- -->
					<!-- -->
						<div class="editable-input" id="nuovoBenef" style="display: none">
							<input  type="text" class="form-control clear-x">
							<span class="editable-clear-x" style="display: block;">
								<i class="icon icon-close icon-1x"></i>
							</span>
						</div>
					<!-- -->
							

	   	 			</div>
	   	 			<div class="col-sm-6" style="height: 56px; padding-top: 25px;">
	   	 			<a href="#1" class="btn-icon">
	   	 				<span id="textBenef">
	   	 					inserisci nuovo beneficiario
	   	 				</span>
	   	 			</a>	
	   	 			</div>
				</div>
			</div>	

			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
    				<label class="control-label">Importo(max 120,00€)*</label>
    					<div class="editable-input">
						<input type="text" name="" class="form-control clear-x">
							<span class="editable-clear-x" style="display: block;">
								<i class="icon icon-close icon-1x"></i>
							</span>
						</div>
	   	 			</div>
	   	 			<div class="col-sm-6">
	   	 			<label class="control-label">Causale</label>
	    				<div class="editable-input">
						<input type="text" name="" class="form-control clear-x">
							<span class="editable-clear-x" style="display: block;">
								<i class="icon icon-close icon-1x"></i>
							</span>
						</div>
	   	 			</div>
				</div>
			</div>	

<div class="form-group" style="display:none" id="benefRubrica">
	<div class="row">
		<div class="col-sm-6">

			<div class="checkbox">
					<label class="textWrapper">
     					<input type="checkbox" name="" id="checkbox">
      					<span class="text">Inserisci beneficiario in rubrica</span>
    				</label>
				</div>
				<div class="editable-input" style="display: none" id="nomeBeneficiario">
				<input type="text" name="" class="form-control clear-x">
					<span class="editable-clear-x" style="display: block;">
						<i class="icon icon-close icon-1x"></i>
					</span>
			</div>
 			</div>
 			<div class="col-sm-6">
		
 			</div>
	</div>
</div>	
		     
		</form>

		</section>


<section>
	
	<div class="form-group btnWrapper">
		<div class="stepBtn">Step <strong> 1 </strong> di 3</div>
	
	<div class="btn-align-right">
		<a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_pagamenti_2.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#" type="button" class="btn btn-primary" id="">prosegui</a>
	</div>
	<br class="clear">
</div>

<p class="note">
	
I campi contrassegnati da un asterisco (*) sono obbligatori.

</p>

	<hr class="marginBottomNone">
	<img src="/wscmn/img/ret/logo_jiffy.gif" class="img-responsive flRight">


</section>

		

	







	

	</div> <!--END panel-nofill -->
</div><!-- END navfrontPage outerTab -->





<script type="text/javascript">
	
$(function(){

	$('#textBenef').click(function(){

		if ($("#nuovoBenef").is(":visible")) { 

			$("#nuovoBenef").hide();
			$("#tooltipOnSelect").show();
			$("#benefRubrica").hide();
			$("#textBenef").text("").text("inserisci nuovo beneficiario");
			

		}
		else{
			$("#nuovoBenef").show();
			$("#tooltipOnSelect").hide();	
			$("#benefRubrica").show();
			$("#textBenef").text("").text("aggiungi da rubrica");
		}
	});

	


    $('input').on('click',function () {
        if ( $('#checkbox').is(':checked')) {
            $("#nomeBeneficiario").show();
        } else {
            $("#nomeBeneficiario").hide();
        }
    });




});


</script>