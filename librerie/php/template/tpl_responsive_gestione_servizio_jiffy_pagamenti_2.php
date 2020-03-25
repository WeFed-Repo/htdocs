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
	<h4>Dati del pagamento</h4>
		<form class="formGenerico borderFormRounded" role="form" id="">

			<div class="form-group">	 
				<div class="row">	
					<div class="col-sm-12">	
						<section class="boxesitoWrap">
						<div class="boxesito attenzione">
						<i class="icon icon-alert_caution icon-2x"></i>
							<div class="text">
								<div class="row">
									<div class="col-sm-12">
									
									<h4>Attenzione</h4>
									<p>Il beneficiario non aderisce al servizio <strong>Jiffy di SIA.</strong></p>
									<p>Puoi comunque procedere con il pagamento: sarà eseguito solo se il beneficiario attiverà il servizio entro 7 giorni dalla data di inserimento. Oltre tale data l'operazione sarà annullata automaticamente.</p>
									<p>Se lo desideri, puoi inviare un'email di notifica al beneficiario.</p>
									<p>Alla pagina &laquo;Movimenti&raquo; potrai annullare l'operazione.</p>

									</div>
								</div>
							</div>
						</div>
						</section>
					</div>
				</div>
			</div>
			

<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			<label class="control-label">Avvisa il beneficiario via email</label>
	 		<div class="editable-input">
	 			<input type="text" class="form-control clear-x">
	 			<span class="editable-clear-x" style="display: block;">
	 			<i class="icon icon-close icon-1x"></i>
	 			</span>
	 		</div>
		</div>
	</div>
</div>


<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			<label class="control-label">Conto di addebito</label>
			<span class="output">01099 0000085969 EUR</span>
		</div>
		<div class="col-sm-6">
			<label class="control-label">Importo</label>
			<span class="output">5,00 €</span>
		</div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			<label class="control-label">Beneficiario</label>
			<span class="output">Non disponibile</span></div>
		<div class="col-sm-6">
			<label class="control-label">Commissioni</label>
			<span class="output">0,00 €</span></div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-6">
			<label class="control-label">Telefono beneficiario</label>
			<span class="output">3201551475</span></div>
		<div class="col-sm-6">
			<label class="control-label">Importo totale</label>
			<span class="output">5,00 €</span></div>
	</div>
</div>

<div class="form-group">
	<div class="row">
		<div class="col-sm-6">					
			<label class="control-label">Data</label>
			<span class="output">28/11/2016</span></div>
		<div class="col-sm-6">
			<label class="control-label">Causale</label>
			<span class="output">Lorem ipsum dolor sit lorem </span></div>
	</div>
</div>
		     
		</form>


<form class="formGenerico bgPin32 borderFormRounded" role="form">
    <div class="form-group noMarginBottom">
        
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
</form>




		</section>


<section>
	
	<div class="form-group btnWrapper">
		<div class="stepBtn">Step <strong> 2 </strong> di 3</div>
	
	<div class="btn-align-right">
		<a href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_servizio_jiffy_pagamenti_3.php&responsive=y&liv0=1&liv1=1&liv2=1&liv3=1#" type="button" class="btn btn-primary" id="">prosegui</a>
	</div>
	<br class="clear">
</div>



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