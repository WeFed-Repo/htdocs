<h2>Imposta alert di mercato</h2>
<section>
	<ul>
		<li>In questa pagina puoi inserire e verificare <b>alert di mercato</b>. Si tratta di alert che ti avvisano quando si verifica una determinata condizione di mercato legata a un titolo o a un indice di Borsa.</li><br>
		<li>Se desideri, puoi <a href="#">ricevere anche via Sms o email</a> l'alert che hai impostato in questa pagina.</li>
	</ul>
</section>
<section>
	<h4>Alert di mercato su un titolo</h4>
	<form class="formGenerico borderFormRounded" role="form" id="" autocomple="off">
		<div class="form-group">
        	<label class="control-label">Titolo</label>
        	<div class="row">
            	<div class="col-sm-6">
                	<div class="row">
                		<div class="col-sm-3 col-xs-4">
		                	<div class="radio">
			                    <label class="textWrapper">
			                        <input type="radio" name="" id="">
			                        <span class="text" name="titolo">Nome</span>
			                    </label>
              				  </div>
		                 </div>
		                 <div class="col-sm-8 col-xs-8">
		                 	 <input  id="" value="" type="text" name="" class="form-control clear-x" data-toggle="tooltip" data-title="puoi cercare sia per simbolo che per nome titolo.">
		                 </div>
	                 </div>
                </div>
                <div class="col-sm-6">
                	<div class="row">
                		<div class="col-sm-3 col-xs-4">
		                	<div class="radio">
			                    <label class="textWrapper">
			                        <input type="radio" name="" id="">
			                        <span class="text" name="titolo">Iniziale</span>
			                    </label>
              				  </div>
		                 </div>
		                 <div class="col-sm-3 col-xs-3">
		                 	 <select name="" class="form-control" id="tooltipOnSelect">
                    			<option>A</option>
                    			<option>B</option>
                    			<option>C</option>
                    			<option>D</option>
                			</select>
		                 </div>
	                 </div>
                </div>
            </div>
        </div>
        <div class="form-group">
        	<div class="row">
            	<div class="col-sm-6">
                	<label class="control-label">Mercato</label>
                	<select name="" class="form-control">
            			<option>Lorem ipsum</option>
            			<option>Lorem ipsum</option>
            			<option>Lorem ipsum</option>
            			<option>Lorem ipsum</option>
        			</select>
		         </div>
		         <div class="col-sm-6">
		         	<div class="form-group btnWrapper">
			          <div class="btn-align-left">
			                  <a type="button" class="btn btn-primary" id="btnCerca">prosegui</a>
			            </div>
	            		<br class="clear">
	        	  </div>
	        	</div>
            </div>
        </div>
       
	</form>
</section>
<section>
	<h4>Alert di mercato su indice</h4>
	<form class="formGenerico borderFormRounded" role="form" id="" autocomple="off">
		<div class="form-group">
        	<div class="row">
            	<div class="col-sm-6">
            		<label class="control-label">Indice</label>
                	<select name="" class="form-control">
            			<option>Lorem ipsum</option>
            			<option>Lorem ipsum</option>
            			<option>Lorem ipsum</option>
            			<option>Lorem ipsum</option>
        			</select>
            	</div>
            	<div class="col-sm-6">
		         	<div class="form-group btnWrapper">
			          <div class="btn-align-left">
			                  <a type="button" class="btn btn-primary" id="btnCerca" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert_mercato_step2.php&responsive=y&liv0=3&liv1=3&liv2=1&liv3=1">prosegui</a>
			            </div>
	            		<br class="clear">
	        	  </div>
	        	</div>
            </div>
        </div>
    </form>
</section>

<!--overlayer tabella saldi -->
<div class="modal fade" id="layerProsegue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Risultati della ricerca</h2>
			</div>
			<div class="modal-body">
				<!-- WRAPPER DI TUTTO IL FORM DI RICERCA (per loading lock) -->
				<div id="tableRicercaCont">
					<!-- WRAPPER DELLA TABELLA CON I RISULTATI -->
					<div id="tableRicercaWrap"></div>
					<!-- FINE DEL WRAPPER DELLA TABELLA CON I RISULTATI -->
					<div class="form-group btnWrapper">
			          <div class="btn-align-right">
			                  <a type="button" class="btn btn-primary" id="btnRicercaProsegui">prosegui</a>
			            </div>
	            		<br class="clear">
		        	 </div>
	        	</div>
	        	<!-- FINE DEL WRAPPER DI TUTTO IL FORM DI RICERCA (per loading lock) -->
			</div>
		</div>
	</div>
</div>

<script>

/* Inizializzazione della tabella */
$('#btnCerca').click(function(index){

	$('#layerProsegue').modal('show');
	$('#layerProsegue .modal-body').addClass("loading");
	$("#btnRicercaProsegui").addClass("btn-disabled");

	// Esempio tempistica di loading (questo wrapper non serve)
	setTimeout(function(){

		// Funzione da eseguire direttamente

		/* Acquisisce i  dati esterni via HTML (eventualmente rivedere come JSON) */
		$.ajax({
			url: "/librerie/include/commons/ajax/imposta_alert.php",
			dataType: "html",
			success: function(html) {

				$('#layerProsegue').empty().append(html);

				// Inizializza la tabella
				$('#tableOrdered').bootstrapTable({
					data: data,
					pagination: true,
					pageSize: 5,
					pageList: "All"	
				});

				// Inizializza i radio button
				$("#tableOrdered input[type=radio]").click(function(){
					$("#btnRicercaProsegui").removeClass("btn-disabled");
				});

				$('#layerProsegue .modal-body').removeClass("loading");
			}

		});
		// Fine funzione da eseguire direttamente

	},500);
	// Fine tempistica di loading (questo wrapper non serve)

});



/* Esempio di click sul "prosegui" */
/*
$("#btnRicercaProsegui").click(function(){
	var radioval = $("input[name=radioRicercaTitolo]:checked").val();
	alert(radioval);
});
*/

var selezionaTitolo = function() {
	alert($(this).val());
}

</script>