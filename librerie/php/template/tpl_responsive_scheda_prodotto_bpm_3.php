<h2 class="colorTextAssicurazioniBpm">SCADENZA POLIZZE</h2>

<section>
<span class="txthelp">
	<strong class="closeable" data-title="<strong>Titolo del tooltip</strong><br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." data-toggle="tooltip">
			<img src="/wscmn/fe/img/placeholder_banner.png" class="img-responsive">	
	</strong>
</span>

<p class="fontSmallBpm centerBpmText">
	Il concorso è valido dal 01/05/2015 al 31/12/2015. Estrazione finale entro il 01/01/2016. Montepremi: 1.000 euro. 
	<a href="#" data-toggle="modal" data-target="#layerSepa">Regolamento</a>
</p>	





<h4 class="colorTextAssicurazioniBpm">SEGNALACI LA DATA DI SCADENZA DELLA TUA POLIZZA VEICOLI</h4>

Ti <strong>ricorderemo</strong> in anticipo, via <strong>email</strong> o <strong>sms</strong>, la <strong>scadenza</strong> delle polizze per i veicoli che utilizzi per lavoro o nel tempo libero.
</section>


<section class="boxesitoWrap" id="boxYellow">
	<div class="boxesito attenzione">
		<i class="icon icon-alert_caution icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-sm-12">

					<p>Al momento non hai inserito scadenze di polizze</p>
			
				</div>
			</div>
		</div>
	</div>




<a href="#" id="linkYellow" class="btn-icon">
	<i class="icon icon-1x icon-f-row_expand flLeft colorbank"></i>
	<div class="leftTestoIconBpm">
		<p>Aggiungi altre date di scadenza</p>		
	</div>	
</a>



</section>



<section id="formAss" style="display: none">
<h4 class="colorTextAssicurazioniBpm">Polizza 1</h4>
 <form class="formGenerico borderFormRounded" role="form" >
    <div class="form-group">
        <div class="row">
            <div class="col-sm-4 requiredField">
               	<div class="row">
                    <div class="col-sm-12">
                        <label class="control-label" id="dataacc">Data scadenza*</label>
                        <div class="form-inline">
                            <div class="input-group">
                                <input type="text" id="datepickerEse" placeholder="gg/mm/aaaa" value="05/12/2017" class="form-control clear-x"> <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> 
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
            <div class="col-sm-4">
                <label class="control-label">Tipo veicolo</label>
	 				<select class="form-control">
	 					<option>--seleziona--</option>
	 					<option>Automobile</option>
	 					<option>Ciclomotore</option>
	 					<option>Moto</option>
	 					<option>Camper</option>
	 					<option>Altro</option>
	 				</select>
            </div>
            <div class="col-sm-4 requiredField">
                <label class="control-label">Targa veicolo</label>
        		<input type="text" class="form-control clear-x">
            </div>
        </div>
    </div>

    <div class="form-group">
    	<div class="row">
    		<div class="col-sm-12">
    	 	<label class="control-label">Ricordami la scadenza della polizza</label>
        		<div class="row">
            		<div class="col-sm-6 requiredField">
               			<div class="radio">
       					<label class="textWrapper">
		         			<input type="radio" name="" id="">
		          			<span class="text">Con una email</span>
		          			<p class="control-label">mario.rossi@paperopoli.it</p>
		        		</label>
     					</div>     
            		</div>
            		<div class="col-sm-6 requiredField">
       	 				<div class="radio">
       					<label class="textWrapper">
		         			<input type="radio" name="" id="">
		          			<span class="text">Con un sms</span>
		          			<p class="control-label">333*****89</p>
		        		</label>
     					</div>   
            		</div>
        		</div><a href="http://www.bpm.it/it-com/contatti/richiesta-informazioni/content/0/informativa/InformativaPrivacy_sitoBPM_contatti.pdf" target="_blank" class="btn-icon">Informazioni sulla Privacy</a>
        	</div>
    	</div> 
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group btnWrapper">
					<div class="btn-align-center">
						<a type="button" class="btn btn-primary" id="salvaProsegui">Salva e prosegui</a>
			
					</div>
				</div>
			</div>
		</div>
    </div>




    <div class="form-group" style="display:none" id="formDue">
    	<div class="row">
    		<div class="col-sm-12">
    	 	<label class="control-label">Vuoi partecipare al concorso "la scadenza che ti premia"?</label>
        		<div class="row">
            		<div class="col-sm-6 requiredField">
               			<div class="radio">
       					<label class="textWrapper">
		         			<input type="radio" name="" id="">
		          			<span class="text">Sì, ho letto il regolamento e partecipo</span>
		        		</label>
     					</div>     
            		</div>
            		<div class="col-sm-6 requiredField">
       	 				<div class="radio">
       					<label class="textWrapper">
		         			<input type="radio" name="" id="">
		          			<span class="text">Grazie, non mi interessa</span>
		        		</label>
     					</div>   
            		</div>
        		</div>
        	</div>
    	</div> 
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group btnWrapper">
					<div class="btn-align-center">
						<a type="button" class="btn btn-primary" id="" href="http://libreriebpm.webank.local/connect.php?page=strutt_priv.php&tpl=tpl_responsive_scheda_prodotto_bpm_4.php&responsive=y&liv0=7&liv1=5&liv2=0#">Conferma</a>
						<br class="clear">
					</div>
				</div>
			</div>
		</div>
    </div>
</form>








<script type="text/javascript">


	$("#linkYellow").on("click" , function(){
		$("#boxYellow").hide();
		$("#formAss").show();	
	});


	$("#salvaProsegui").on("click" , function(){
		
		 $("#formDue").toggle();

	if($("#formDue").css('display')=='none'){
		
		
		$("#salvaProsegui").html("Salva e prosegui");
	}
	else{

		$("#salvaProsegui").html("Modifica");
	}

		


	});

	
</script>






<!-- JS per calendario -->

<script type="text/javascript">
    //inizializzazione datepicker
    $(function() {
        //$("#datepickerTool").mask("99/99/9999");
        $("#datepickerEse").datepicker({
            showOtherMonths: true,
            beforeShowDay: highlightDays,
            showOn: "button",
            onSelect: function(){$(this).next('.editable-clear-x').show()},
            prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
            nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
            buttonImage: "/img/ret/pixel_trasp.gif",
            buttonImageOnly: true,
            beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
            onClose: function() {
                $('#datePickerWrapper').modal('hide');
            }
        })
        appendDatePickerIcon('datepickerEse');
    });
</script>
<!--esempio di gestione errore -->
<script type="text/javascript">
    $(function() {
        $("#btnInvio").click(function(event) {
            // Check giroconto
            var errors = [],
                testo1 = $("#datepickerEse")
            if (testo1.val() === '') {
                errors.push({
                    field: testo1,
                    text: "occorre inserire la data"
                });
                event.preventDefault();
            }
            setHasErrors(errors, "#formBonifico");
            return (!errors.length);
        });
    });
</script>



<!-- END  JS per calendario -->







<!-- Overlayer regolamento-->

<div class="modal fade" id="layerSepa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
				<h2 class="modal-title" id="myModalLabel">Regolamento concorso "La scadenza che ti premia"</h2>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
					
							<p>
								
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. nunc. 

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Overlayer regolamento-->



