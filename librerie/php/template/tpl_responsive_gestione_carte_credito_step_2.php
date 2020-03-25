<h2>Gestione carte di credito</h2>

<section>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
			<li class="on"><a href="#">plafond - linea di credito</a></li>
			<li><a href="connect.php?page=strutt_priv.php&amp;tpl=tpl_responsive_banco_sicurezza.php&liv0=2&liv1=0&liv2=1&liv3=0&responsive=y">sicurezza<br> ed estinzione</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
</section>	



<section>
<h4>Riepilogo dati</h4>
<form class="formGenerico borderFormRounded" role="form" id="form01">

	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label-output">Numero carta di credito</label>
				<span class="output">*** *** *** *591</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Conto di addebito</label>
				<span class="output">01099 0000083023 EUR</span>
			</div>
		</div>
	</div>


	<div class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<label class="control-label-output">Richiesta</label>
				<span class="output">modifica plafond prima linea</span>
			</div>
		</div>
	</div>


	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label-output">Tipo di modifica plafond</label>
				<span class="output">temporanea</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Periodo</label>
				<span class="output">dal 29/09/2016 al 11/11/2016</span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="row">
			<div class="col-sm-6">
				<label class="control-label-output">Nuovo importo richiesto</label>
				<span class="output">1000,00 €</span>
			</div>
			<div class="col-sm-6">
				<label class="control-label-output">Note</label>
				<span class="output">test</span>
			</div>
		</div>
	</div>

	</form>



<form class="formGenerico">  
		<div class="form-group">
			 <div class="row">
		    	<div class="col-sm-12">
			   	 	<h4>Informativa precontrattuale</h4>
			   	
			   	 	<div class="textWrapper">
						<p>
							<i class="icon icon-file_pdf"></i>
							<span class="text"><a target="_blank" href="javascript:;" id="openPdf">Informazioni Europee di Base sul Credito ai Consumatori</a></span>
						</p>
					</div>
				 </div>
			</div>
			

			<div class="row">
				<div class="col-sm-12 requiredField">
                    <div class="checkbox">
                        <label id="informative2" class="textWrapper disabledField richiesta-1">
                            <span class="hovfin"></span>
                            <input type="checkbox" name="" id="informativeCheck2" disabled="">
                            <span class="text">Dichiaro di aver preso visione del documento "Informazioni Europee di Base sul Credito ai Consumatori" dopo averlo stampato e/o salvato su supporto durevole.</span>
                        </label>
                      </div>
                  </div>
            </div>
            <script>
                 $('#openPdf').click(function(event){
                    	enableInput('#informative2');
                        window.open('/file.pdf');
                        return false;
                  })
                 $('#informativeCheck2').click(function(event){
                   		$(this).is(':checked') ? $('#btnProseguiOn').show() : $('#btnProseguiOn').hide()
                   		$(this).is(':checked') ? $('#btnProseguiOff').hide() : $('#btnProseguiOff').show()
                    })
            </script>
		</div>
</form>



<div class="form-group btnWrapper">
	<div class="stepBtn">Step <strong> 2 </strong> di 2</div>
	<div class="btn-align-left">
		<a type="button" class="btn btn-default" href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_carte_credito_one.php&responsive=y&liv0=2&liv1=2&liv2=1">modifica</a>
	</div>

	<div class="btn-align-right">
		<a type="button" class="btn btn-primary" href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_gestione_carte_credito_step_3.php&responsive=y&liv0=2&liv1=2&liv2=1">invia la richiesta</a>
	</div>
	<br class="clear">
</div>
	
</section>




