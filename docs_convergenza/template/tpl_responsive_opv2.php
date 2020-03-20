<script type="text/javascript">
//inizializzazione datepicker
$(function() {
	   setSpinner({
        idInput: '#spinnerId'
     });
    
   });  
</script>
<h2>Operazioni sul capitale</h2>

<section>
<div class="testoIcona emphasis">
	<i class="icon icon-2x icon-arrow_emphasis flLeft"></i>
	<div class="leftTesto">
		<p>Offerta Pubblica di Vendita e di Sottoscrizione di azioni ordinarie:<br>		
		<strong>PIRELLI</strong><br>
		Offerta riservata ad un pubblico indistinto</p>
	</div>	
</div>
</section>

<section>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		<div class="form-group">
			<!-- UNICA RIGA CON CAMPO-->
			 <div class="row">
			 	<div class="col-sm-6">
					<label class="control-label-output">Il tuo codice fiscale &egrave;</label>
					<span class="output">DLMDVD63H25I690F</span>
				</div>
				<div class="col-sm-6">
				  <label class="control-label">Conto di addebito*</label>
					<select class="form-control" name="" id="">
						<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
						<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
					</select>
         		</div>
			</div>
		</div>
	
		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-12">
					<label class="control-label-output">Titolo</label>
					<span class="output">Pirelli</span>
				</div>
			</div>
		</div>
	
		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-6">
					<label class="control-label-output">Settore</label>
					<span class="output">Commercio</span>
				</div>
				<div class="col-sm-6">
					<label class="control-label-output">Mercato</label>
					<span class="output">Azionario</span>
				</div>
			</div>
		</div>
	    <div class="form-group">
			<div class="row">
			 	<div class="col-sm-6">
					<label class="control-label-output">Inizio collocamento</label>
					<span class="output">12/10/17</span>
				</div>
				<div class="col-sm-6">
					<label class="control-label-output">Fine collocamento</label>
					<span class="output">31/12/17</span>
				</div>
			</div>
		</div>
		 <div class="form-group">
			<div class="row">
			 	<div class="col-sm-6">
					<label class="control-label-output">Data negoziazione</label>
					<span class="output">12/10/17</span>
				</div>
				<div class="col-sm-6">
					<label class="control-label-output">Data pagamento</label>
					<span class="output">31/12/17</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-6">
					<label class="control-label-output">Prezzo minimo</label>
					<span class="output">5</span>
				</div>
				<div class="col-sm-6">
					<label class="control-label-output">Prezzo massimo</label>
					<span class="output">6</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-12">
					<label class="control-label-output">Quantit&agrave; lotto minimo</label>
					<span class="output">500</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-6">
			 		<div class="row">
			 			<div class="col-sm-6">
							<label class="control-label">N. lotti</label>
                			<input id="spinnerId" type="text" name="spinnerId" class="form-control spinner" value="1">
                		</div>	
                	</div>	
            	</div>	
				<div class="col-sm-6">
					<label class="control-label-output">N. lotti minimo</label>
					<span class="output">6</span>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
			 	<div class="col-sm-12">
					<label class="control-label">Prima dell'adesione &egrave; obbligatorio leggere la Documentazione Informativa sotto elencata:</label>
					<div class="row">
			            <div class="col-sm-12">
			                <div class="textWrapper">
			                    <i class="icon icon-file_pdf"></i>
			                    <span class="text"> <a class="underline" href="#1" onclick="enableInput('#opv1');enableInput('#opv2')">Documentazione OPV IBRD 2026 Step U</a></span>
			                </div>
			            </div>
			         </div>
  				</div>
			</div>
		</div>
		<div class="form-group">
	        <div class="row">
	            <div class="col-sm-12 requiredField">
	               <div class="checkbox">
	                    <label id="opv1" class="textWrapper disabledField richiesta-1">              
	                        <input type="checkbox" name="" id="contratto2" disabled="">
	                        <span class="text">Dichiaro sotto la mia responsabilità di essere residente in Italia, di non essere domiciliato e di non trovarmi attualmente negli Stati Uniti o altrove (ad eccezione che in Italia), di non essere una US Person come definita nella Regulation S dello United States Securities Act del 1933.</span>
	                    </label>
	                </div>
	            </div>
	        </div>
		</div>
		<div class="form-group">
	        <div class="row">
	            <div class="col-sm-12 requiredField">
	               <div class="checkbox">
	                    <label id="opv2" class="textWrapper disabledField richiesta-1">              
	                        <input type="checkbox" name="" id="contratto2" disabled="">
	                        <span class="text">Ho preso visione del prospetto informativo e della documentazione relativa all'offeta e dichiaro di averne compreso il contenuto ed acquisito copia su supporto duraturo. Dichiaro di accettare le condizioni ed i contenuti presenti nella Documentazione Informativa.</span>
	                    </label>
	                </div>
	            </div>
	        </div>
		</div>
	</form>
</section>
<section>	
	<div class="form-group btnWrapper">
	    <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
	    <div class="btn-align-right">
	        <a type="button" class="btn btn-primary" id=""  href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_responsive_opv3.php&liv1=trading&liv2=compravendita&liv3=inserimento_ordini&liv4=operazioni_sul_capitale">prosegui</a>
	    </div>
	    <div class="clear"></div>
	</div>
</section>
