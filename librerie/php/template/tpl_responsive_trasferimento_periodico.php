
	<h2>Periodico</h2>
<section>	
	<ul>
		<li>
			Con il trasferimento periodico alimenti automaticamente il tuo deposito, definendo la periodicit&agrave; e l'importo del trasferimento dal tuo conto corrente al tuo deposito.
		</li>
		<li>
			Lo imposti una sola volta senza alcun costo e non devi pi&ugrave; pensarci: il tuo deposito "crescer&agrave;" da solo!
		</li>
	</ul>
</section>




<!-- DataPicher-->
<script type="text/javascript">	
//inizializzazione datepicker
$(function () {
	$("#datepickerTool3").mask("99/99/9999");
	$("#datepickerTool3").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper3').modal('hide');
    }
    })
   appendDatePickerIcon('datepickerTool3');
    
	});
</script>
<!--End  DataPicher-->





<!-- FORM -->
<section>

<div class="tithelp">
	<h4>Imposta il trasferimento</h4>
	<br class="clear">
</div>

<form class="formGenerico borderFormRounded" role="form" id="form01">

	<div class="form-group">
	    <div class="row">
			<div class="col-sm-6">
				<label class="control-label">Conto corrente - deposito</label>
		 		<span class="output">CC 01099 0000083891 EUR +DEP</span>
			</div>	 	
			<div class="col-sm-6"> 
		 		<label class="control-label" id="importo">Importo trasferimento*</label>
                <div class="form-inline">
                    <div class="requiredField">
                        <div class="input-group" id="italyCurrency">
                            <input maxlength="7" id="importoField" value="" type="number" name="importo" class="form-control clear-x">
                            <div class="input-group-addon">EUR</div>
                        </div>
                    </div>
                </div>
			</div>
	   	</div>
	</div>


	<div class="form-group">
	    <div class="row">
	   		<div class="col-sm-6">
	   			<label class="control-label" id="periodo">Periodicit&agrave;*</label>
				<select  class="form-control">
					<option selected="selected">-- seleziona --</option>
					<option value="G">giornaliera</option>
					<option value="W">settimanale</option>
					<option value="M">mensile</option>
					<option value="B">bimestrale</option>
					<option value="T">trimestrale</option>
					<option value="4">quadrimestrale</option>
					<option value="S">semestrale</option>
					<option value="A">annuale</option>
				</select>
		 	</div>	
		 	<div class="col-sm-4">
				<label class="control-label">Data primo trasferimento*</label>
					<div class="form-inline">
				  		<div class="input-group">
				     			<input type="text" id="datepickerTool3" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
				     			<div class="input-group-addon date">
				     				<i class="icon icon-calendar"></i >
				     			</div>
				  		</div>
					</div>
		 	</div>	
		</div>
	</div>






<div class="form-group">
	<div class="row">
		<div class="col-sm-3">	
			<label class="control-label" id="scadenza">Scadenza*</label>	
			<div class="radio inline">
       			<label class="textWrapper">
		        <input type="radio" value="false" name="item[trasferimento]" id="item_shipping_false" checked="checked">
		          	<span class="text">Su richiesta</span>
		        </label>
     		</div>
		</div>
		<div class="col-sm-3">
		<label class="control-label hidden-xs" id="scadenza">&nbsp;</label>	
			<div class="radio inline">
       			<label class="textWrapper">
		       <input type="radio" value="true" name="item[trasferimento]" id="item_shipping_true">
		          	<span class="text">Dopo aver effettuato</span>
		        </label>
			</div>
		</div>
		<div class="col-sm-2">
		
		<label class="control-label">Trasferimenti</label>
	   	 		<input id="spinnerId"  type="text" name="spinnerId" class="form-control spinner">
			
     	</div>

	</div>
</div>	







<!-- Select Radio-->
<script type="text/javascript">
	$('input[name="item[trasferimento]"]').on('click', function() {
    if ($(this).val() === 'true') {
        $('#item_shipping_cost').removeProp("disabled");
    }
    else {
        $('#item_shipping_cost').prop("disabled", "disabled");
    }
});

</script>
<!-- End Select Radio-->


</form>




    <div class="form-group btnWrapper">
            <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="connect.php?page=strutt_priv.php&tpl=tpl_responsive_trasferimento_periodico_step_2.php&responsive=y&liv0=4&liv1=1&liv2=0&liv3=1#">
            prosegui</a>	
        </div>

        <div class="clear"></div>
    </div>


</section>


<!-- END FORM -->



<p class="note">
	
	I campi contrassegnati da un asterisco (*) sono obbligatori.

</p>

<!-- La parte di seguito viene visualizzata nel caso in cui sono già presenti dei periodici-->

<br/><br/><br/><br/>
<hr/>
<hr/>
	<p><strong>NB:.</strong> per chi deve sviluppare la pagina:</p>
	<p><strong>SE SONO PRESENTI DEI PERIODICI QUESTA E' LA PAGINA</strong></p>
<hr/>
<hr/>




<section>
<ul>
	<li>
		Nella tabella sono elencati i trasferimenti periodici attualmente impostati.	
	</li>
	<li>
		Puoi eliminare ciascun trasferimento o impostarne uno nuovo.		
	</li>
</ul>
	
<div class="row">
	<div class="col-sm-3">
		<p>Conto corrente - deposito</p>
	</div>
	<div class="col-sm-9">
		<p><strong>CC 01099 0000083891 EUR +DEP</strong></p>
	</div>
</div>
</section>


<section>

<h4>Trasferimenti periodici impostati</h4>
<table cellspacing="0" cellpadding="0" border="0" data-toggle="table">
    <thead>
        <tr>
            <th class="right">Importo</th>
            <th class="left">Periodicit&agrave;</th>
            <th class="center">Attivo dal</th>
            <th class="center">Scadenza</th>
            <th class="left">Stato</th>
            <th class="center">Gestione</th>
        </tr>
    </thead>
    <tbody>
        <tr class="dispari">
            <td class="right">10,00 &euro;</td>
            <td class="left">Bimestrale</td>
            <td class="center">21/01/30</td>
            <td class="center">su richiesta</td>
            <td class="left">Annullato</td>
            <td class="center">
              <i class="icon icon-2x icon-f-row_canc btn-align-center btn-icon btn-disabled"></i>
            </td>
        </tr>
        <tr class="pari">
            <td class="right">22,00 &euro;</td>
            <td class="left">Settimanale</td>
            <td class="center">11/11/16</td>
            <td class="center">18/11/16</td>
            <td class="left">Attivo</td>
            <td class="center">
            	<a href="#" class="btn-align-center  btn-icon">
                  <i class="icon icon-2x icon-f-row_canc"></i></a>
            </td>
        </tr>
    </tbody>
</table>



    <div class="form-group btnWrapper">    
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="#">
            imposta nuovo trasferimento periodico</a>	
        </div>

        <div class="clear"></div>
    </div>
</section>




<hr/>

<!-- -->
<script type="text/javascript">	
//inizializzazione datepicker


$(function () {
	$("#datepickerTool").mask("99/99/9999");
	$("#datepickerTool").datepicker({
	beforeShowDay: highlightDays,
	//beforeShowDay: noHolidays,  //si applica se si vuole che i fine sttimana e festivi non siano delezionabili
	minDate: 0,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"mese precedente\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"mese successivo\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
    appendDatePickerIcon('datepickerTool');

    setSpinner
    ({
			idInput :'#spinnerId',
			start: function() {
				spinnerVal = $('#spinnerId').val();
				getspinnerVal();
			}
	});
   //esempio di dinamisto step
    function getspinnerVal(){
    		step = spinnerVal <= 5 ? 1 : 2;
    	    $('#spinnerId').spinner('option','step',step);
    }
   
});
</script>








