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

	<section class="boxesitoWrap">
	<div class="boxesito positivo">
		<i class="icon icon-alert_ok icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-xs-12">
				<h4>Operazione completata correttamente</h4>
				<p>
					Ti ricordiamo che il beneficiario potrà ricevere il denaro attivando il servizio Jiffy di SIA entro 7 giorni.
				</p>
				<p>	
					Il pagamento rimarrà nello stato &laquo;In attesa&raquo; per 7 giorni, al termine dei quali sarà automaticamente annullato.
				</p>
				<p>	
					Alla pagina &laquo;Movimenti&raquo; puoi vedere lo stato del pagamento.
				</p>	
				</div>
			</div>
		</div>
	</div>
</section>



<section>
	
	<div class="form-group btnWrapper">
		<div class="stepBtn">Step <strong> 3 </strong> di 3</div>
	
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="">Nuovo pagamento</a>
	</div>
	<br class="clear">
</div>

<p class="note">
	


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