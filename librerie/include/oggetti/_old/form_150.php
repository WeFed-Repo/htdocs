<h4>Codice OTP</h4>
<!-- overlay informativo Token -->
<script type="text/javascript">
	$(function(){
		$("#infoOtpOpener").click(function(){$("#infoOtp").modal("show")});
	});
</script>
<div class="modal fade" id="infoOtp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Titolo</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h3>Sottotitolo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
								debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
								quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quam, nobis eligendi omnis nulla. Eligendi ad magni pariatur numquam illum velit sit aliquam. Distinctio excepturi, debitis autem temporibus inventore rerum.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
								debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
								quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quam, nobis eligendi omnis nulla. Eligendi ad magni pariatur numquam illum velit sit aliquam. Distinctio excepturi, debitis autem temporibus inventore rerum.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
								debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
								quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quam, nobis eligendi omnis nulla. Eligendi ad magni pariatur numquam illum velit sit aliquam. Distinctio excepturi, debitis autem temporibus inventore rerum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- fine overlay informativo Token -->
<div class="formGenerico borderFormRounded">
	<div class="formGeneric">
		<form id="formEsempio" role="form">			
			<!--RIGA DIVISA IN QUATTRO CAMPI -->
			<div class="row otpdesc">
				<div class="col-xs-12 col-sm-4">
					<span class="introtext"><strong>1.</strong> Sblocca il token con il <span data-toggle="tooltip" title="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice PIN</span></span>
					<div class="center hidden-xs"><img src="/wscmn/fe/img/token_info_1.png"></div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<span class="introtext"><strong>2.</strong> Premi il tasto 1 del token per generare il <span data-toggle="tooltip" title="Lorem ipsum dolor sit amet consectetur adipiscing elit" class="txthelp">codice OTP</span></span>
					<div class="center hidden-xs"><img src="/wscmn/fe/img/token_info_2.png"></div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<span class="introtext"><strong>3.</strong> Inserisci il codice OTP generato dal token qua sotto</span>
					<div class="center"><img src="/wscmn/fe/img/token_info_3.png"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<a href="javascript:;" class="openinfo" id="infoOtpOpener"><i class="icon icon-info_fill icon-2x"></i><span>Problemi con l'operazione?</span></a>
				</div>
				<div class="col-sm-4 col-xs-12 otpGroup">
					<label class="control-label" for="codiceotp">Codice OTP</label>
					<input type="number" name="codiceotp" id="codiceotp" class="form-control clear-x" min="0" max="99999999999">
				</div>
			</div>
		</form>
	 </div>
</div>
<!-- Fine controllo TOKEN -->