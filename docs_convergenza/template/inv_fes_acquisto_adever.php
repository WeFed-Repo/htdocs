<?php if ($site == "youweb") { ?>
<!-- Paginatore YouWeb -->
<div class="pager clearfix pull-right">
	<div class="circle current_page">1b</div>
	<div class="circle ">2</div>
	<div class="circle ">3</div>
</div>
<!-- Fine paginatore YouWeb -->
<?php } ?>
<h2>Acquisto</h2>

<!-- Selettore deposito -->
<h4>Normativa antiriciclaggio</h4>
<p>Per questa normativa sei tenuto a fornire alla banca alcune <span class="txthelp" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus quas ea veritatis assumenda consequatur nobis.">informazioni obbligatorie</span>.</p>
<section>
	
	<form class="formGenerico borderFormRounded">

	<div class="form-group">
	    <div class="row">
	        <div class="col-sm-6 col-xs-12">
	                <label class="control-label">Natura e scopo prevalente del rapporto</label>
	                <select class="form-control">
	                    <option selected>Risparmio</option>
	                    <option>lorem</option>
	                    <option>lorem</option>
	                </select>
	        </div>
	    </div>
	</div>



	<!-- Accordion Adever -->
	<div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
	    <!-- Intestatario principale -->
	    <div class="panel panel-default">
	        <div class="panel-heading" role="tab" id="headint1">
	            <h4 class="panel-title">
	              <a data-toggle="collapse" href="#int1" aria-expanded="true" aria-controls="int1">
	               	<span class="collapse-title-detail">
	               		<span class="title">Attilio Mario Castellini</span>
	               		<span class="detail">Intestatario principale</span>
	               	</span>	
	               	<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
	              </a>
	            </h4>
	        </div>
	        <div id="int1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headint1">
	            <div class="panel-body">
	            	<?php include ("parts/form_adever.php"); ?>
	            </div>
	        </div>
	    </div>
	    <!-- Fine intestatario principale -->
	    <!-- Altro intestatario -->
	    <div class="panel panel-default">
	        <div class="panel-heading" role="tab" id="headint2">
	            <h4 class="panel-title">
	              <a class="collapsed" data-toggle="collapse" href="#int2" aria-expanded="false" aria-controls="int2">
	               	<span class="collapse-title-detail">
	               		<span class="title">Manuela Mainardi</span>
	               		<span class="detail">Primo cointestatario</span>
	               	</span>	
	               	<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
	              </a>
	            </h4>
	        </div>
	        <div id="int2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headint2">
	            <div class="panel-body">
	            	<?php include ("parts/form_adever.php"); ?>
	            </div>
	        </div>
	    </div>
	    <!-- Fine altro intestatario -->
	</div>


	<!-- Fine accordion adever -->
	</form>

	<!-- Pulsantiera -->
	<div class="form-group btnWrapper">
		<?php if($site == "webank") { ?>
		<div class="stepBtn">Step <strong> 1b </strong> di 3</div>
		<?php } ?>
	    <div class="btn-align-right">
	        <a type="button" class="btn btn-primary" id="btnInvio" href="/template/strutt_<?php print $site; ?>.php?html=mi&tpl=inv_fes_acquisto_informazioni.php&liv1=investimenti&liv2=fondi_e_sicav&liv3=compravendita&liv4=acquisto#">Conferma dati</a>
	    </div>

	</div>
	<!-- Fine pulsantiera -->
	<br class="clear">
</section>
<!-- Fine modalita' di acquisto -->



