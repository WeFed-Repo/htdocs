<a href="#" data-toggle="modal" data-target="#layerOrizzontale">secondo Overlayer da sinistra</a>
<div class="modal fade" id="layerOrizzontale" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Titolo</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h3>Sottotitolo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
								debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
								quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?</p>
								<a class="close-left" data-dismiss="modal" data-target="#layerRight" data-toggle="modal">Layer right</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade slide-right" id="layerRight" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Titolo 2</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h3>Sottotitolo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
								debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
								quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?</p>
								<a class="close-left" data-dismiss="modal" data-target="#layerRight2" data-toggle="modal">Layer2 right</a>
								<a class="close close-right btn-icon" data-dismiss="modal" data-target="#layerOrizzontale" data-toggle="modal" aria-label="Close"><i class="icon icon-arrow_left"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade slide-right" id="layerRight2" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Titolo 3</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<h3>Sottotitolo</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
								debitis voluptas autem dolore ipsam odit iusto voluptate ducimus,
								quis ratione ipsa sunt asperiores eum, esse animi magni sint deserunt vero?</p>
								<a class="close close-right btn-icon" data-dismiss="modal" data-target="#layerRight" data-toggle="modal" aria-label="Close"><i class="icon icon-arrow_left"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
setModalLeft('#layerOrizzontale')
</script>