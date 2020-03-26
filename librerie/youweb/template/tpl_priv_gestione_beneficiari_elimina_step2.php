<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">06/04/2017</div>
</div>

<form id="formGestioneBeneficiari" method="post" action="/strutt_priv.php?pag=gestione_beneficiari_nuovo&lev1=pagamenti&wdg=06|02">
	<div class="riquadro clearfix">
<style>
.imgSrv{float: none;}
</style>
		<h1>
			<div class="hidden-print hidden-xxs flag gestioneBeneficiari">&nbsp;</div>
			<span>Gestione beneficiari</span>
		</h1>
		<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: gestione beneficiari&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>
		<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header clearfix">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
					</div>
				</div>
			</div>
		</div>

		<div class="messagePanel success" style="display: block;">
			<h3 class="titleSection">Messaggio al cliente</h3>
			<div><p>Operazione eseguita con successo</p></div>
			<p>Il beneficiario &egrave; stato eliminato correttamente.</p>
		</div>

		<input type="hidden" name="azioneBen" value="inserisci"> 
		<input type="hidden" name="selBeneficiario" value="">

		<div class="section clearfix" style="padding-top:10px">	
			<div class="col-xs-12 col-sm-12">	
				<button class="btn btn-primary pull-right">Nuovo <span class="hidden-xs">beneficiario</span></button>
			</div>
		</div>

<!-- 	<div class="section clearfix"> -->
<!-- 	<div class="bs-example"> -->
<!-- 	 <div class="tablePanel clearfix"> -->
<!-- 		<div class="table-responsive"> -->
<!-- 	 </div></div></div></div> -->
	</div>	
</form>