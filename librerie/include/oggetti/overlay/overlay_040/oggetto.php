<script type="text/javascript">
	
$(function () {
      var modalRefreshTimeout = null;
      $('body').on('blur', '.modal.in input', function () {
            if (modalRefreshTimeout) {
                  clearTimeout(modalRefreshTimeout);
                  console.log("test1");
            }
            modalRefreshTimeout = setTimeout(function () {
                  $('.modal.in').modal('handleUpdate');
            }, 500);
            console.log("test2");
      });


});

</script>



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#layerTestForm">Apri da pulsante</button>

<div class="modal fade" id="layerTestForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
							<!-- FORM -->
							
							<form class="formGenerico borderFormRounded" role="form" id="form10">
	<div class="form-group">	
		<!--RIGA DIVISA IN QUATTRO CAMPI -->
		<div class="row">
			<div class="col-sm-6 requiredField">
				<label class="control-label">Nome</label>
				<div class="editable-input"><input id="testo1" type="text" class="form-control clear-x"><span class="editable-clear-x" style="display: none;"><i class="icon icon-close icon-1x"></i></span></div>
			</div>
			<div class="col-sm-6 requiredField">
				<label class="control-label">Citt&agrave;</label>
				<select id="select1" class="form-control"><option value="0">Seleziona</option><option value="1">lorem</option><option value="2">lorem</option></select>
			</div>
		</div>
	</div>		
	

</form>
							
							<!-- END FORM-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
