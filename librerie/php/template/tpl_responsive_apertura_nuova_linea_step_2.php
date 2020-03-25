
	<h2>Apertura nuova linea</h2>




	

<!-- FORM -->
<section>

<!-- -->
	<div class="tithelp">
	<h4>Riepilogo dati</h4>
	<div class="flRight">
		<a href="#" class="no-underline btn-icon" data-toggle="modal" data-target="#layerSepa">
			<i class="icon icon-help_filled icon-2x"></i>
		</a>
		<br class="clear">
	</div>
	<br class="clear">
</div>
<!-- -->
	<form class="formGenerico borderFormRounded" role="form" id="form01">

	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label-output">Deposito</label>
				<span class="output">01096 - 0000085969 - EUR</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output"></label>
				<span class="output"></span>
			</div>
		</div>
	</div>	

	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label-output">Tasso lordo</label>
				<span class="output">0,75%</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Durata vincolo</label>
				<span class="output">3 mesi</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label-output">Data inizio</label>
				<span class="output">24/08/2016</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Data fine</label>
				<span class="output">23/11/2016</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label-output">Importo da vincolare</label>
				<span class="output">55,00€</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Importo a scadenza</label>
				<span class="output">55,07€</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label">Nome linea vincolata (opzionale)</label>
	   	 		<input type="text" name="" class="form-control clear-x">
			</div>
			<div class="col-sm-6">
				
			</div>
		</div>
	</div>	
	
	</form>


<!-- BTN STEP -->
    <div class="form-group btnWrapper">
            <div class="stepBtn">Step <strong> 2 </strong> di 2</div>
           		<div class="btn-align-left">
					<a type="button" class="btn btn-default"  href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_apertura_nuova_linea.php&liv0=4&liv1=1&liv2=1&liv3=0&responsive=y">modifica</a>
				</div>
        		<div class="btn-align-right">
            		<a type="button" class="btn btn-primary" id="btnInvio" href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_apertura_nuova_linea_step_3.php&liv0=4&liv1=1&liv2=1&liv3=0&responsive=y">
            		vincola</a>	
        		</div>
        <div class="clear"></div>
    </div>
<!--END  BTN STEP -->

</section>






<!-- Overlayer-->


<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Apertura linea di vincolo</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p><strong>Apertura nuova linea</strong><br/>
								Di seguito la spiegazione delle voci presenti in tabella:</p>
								<ul>
									<li>
										<strong>deposito:</strong> &egrave; la linea su cui viene aperto il vincolo.
									</li>
									<li><strong>importo da vincolare:</strong> &egrave; l'importo della linea di vincolo.</li>
									<li><strong>tasso d'interesse:</strong> &egrave; il tasso lordo a cui vengono liquidati gli interessi alla scadenza del vincolo</li>
									<li><strong>durata vincolo:</strong> &egrave; la durata del vincolo</li>
									<li><strong>data inizio:</strong> &egrave; la data di apertura della linea vincolata</li>
									<li><strong>data fine:</strong> &egrave; la data di chiusura della linea vincolata. </li>
								</ul>
 

  



						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- End Overlayer-->