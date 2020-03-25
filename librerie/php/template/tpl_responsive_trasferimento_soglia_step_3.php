<section>
	<h2>A soglia</h2>	

</section>


<section>





</section>




<section class="boxesitoWrap">
	<div class="boxesito positivo">
		<i class="icon icon-alert_ok icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-xs-12">
					<div class="tithelp" style="padding:10px 0 20px 20px;">
						<h4>
							<span class="flLeft">Soglia impostata</span> 
							<a href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_trasferimento_soglia.php&responsive=y&liv0=4&liv1=1&liv2=0&liv3=1#" class="iconFormUpdate btn-icon">
							<i class="icon icon-edit_fill icon-2x"></i>
							</a>
						</h4>														
						<br class="clear">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<!-- BTN-->
<div class="form-group btnWrapper">
	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" id="" data-toggle="modal" data-target="#layerSepa"
		href="#">Elimina soglia</a>
	</div>
	<br class="clear">
</div>
<!-- BTN-->








<!-- Overlayer-->


<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Elimina soglia</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h3></h3>
							<p>
								Sei sicuro di voler eliminare questa soglia ? 
							</p>
							
								<!-- FORM -->
								<form class="formGenerico borderFormRounded" role="form" id="form01">
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-6">
												<label class="control-label-output">Conto corrente deposito</label>
												<span class="output">CC 01099 0000083891 EUR+DEP</span>
											</div>
									   	</div>
									</div>
									<div class="form-group">
									    <div class="row">
											<div class="col-sm-6">
												<label class="control-label-output">Importo massimo sul conto</label>
												<span class="output">150,00</span>
											</div>
											<div class="col-sm-6">
												<label class="control-label-output">Importo minimo sul conto</label>
												<span class="output">20,00</span>
											</div>
									   	</div>
									</div>
						
								</form>
								<!-- FORM -->	

								<!-- BTN-->
								<div class="form-group btnWrapper">
									<div class="btn-align-right">
										<a type="button" class="btn btn-primary" id="" 
										href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_trasferimento_soglia.php&responsive=y&liv0=4&liv1=1&liv2=0&liv3=2">Elimina soglia</a>
									</div>
									<br class="clear">
								</div>
								<!-- BTN-->


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Overlayer-->
