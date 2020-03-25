
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
<script type="text/javascript">
	/* CREAZIONE - Codice per creare delle select fittizie stilizzate uguale ad as is */
	addEvent(window, 'load', function() {
		createSelectRapp('sceltaSottoRapporto', 'sceltaSottoRapportoVal', sceltaSottoRapportoFunc);
	});

	function sceltaSottoRapportoFunc (option) {
		// Testo selezione: option.text
		// Valore selezione: option.value
		// alert('Hai selezionato: ' + option.text + ' (' + option.value + ')')
	}
	/* |FINE| CREAZIONE - Codice per creare delle select fittizie stilizzate */
</script>
<div class="tithelp">
	<h4>Titolo di form</h4>
	<div class="flRight"><a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill icon-2x"></i ></a><br class="clear"></div>
	<br class="clear">
</div>
<form class="formGenerico borderFormRounded" role="form" id="form01">
	<div class="form-group">
	    <div class="row">
	   	 	
	   	 	<div class="col-xs-6 requiredField">
	   	 		<label class="control-label" class="txthelp">Lorem ipsum</label>
	   	 		<input type="text" name="" class="form-control clear-x">
	   	 	</div>
	   	 	<div class="col-xs-6 requiredField">
	   	 		<label class="control-label txthelp closeable" data-toggle="tooltip" data-title="">Lorem ipsum*</label>
	   	 		<div class="htmlTooltip"><img src='/wscmn/img/img_codice_bollettino.jpg' alt='Codice bollettino'></div>
				<input type="text" name="" class="form-control clear-x">
	   	 	</div>
	   	</div>
	</div>
	<div class="form-group">
	    <div class="row">
	    	<div class="col-sm-3 requiredField">
	   	 		<label class="control-label">Spinner</label>
	   	 		<input id="spinnerId"  type="text" name="spinnerId" class="form-control spinner">

	   	 	</div>
	   	 	<div class="col-sm-3 requiredField">
	   	 		<label class="control-label">Lorem*</label>
	   	 		<script>
				$(function() {
					$('#tooltipOnSelect').bind('change', function(){
						
						if($(this).val() =='option selezionata con tooltip')
						{
							$(this).attr({
								'data-toggle': 'tooltip',
								'data-title': 'Lorem ipsum dolor sit amet'
							});
							initTooltip();
							
						}
						else
						{
							 $('.tooltip').tooltip('hide');
							 $(this).removeClass('textToolTipElement');
							 $(this).removeAttr('data-toggle');
							 $(this).removeAttr('data-title');
						}
						
					})
					});
				</script>
	   	 		<select name="" class="form-control"  id="tooltipOnSelect">
					<option>seleziona</option>
					<option>option selezionata con tooltip</option>
	   	 		</select>
	   	 	</div>
	   	 	<div class="col-sm-3 requiredField">
	   	 		<label class="control-label">Lorem*</label>
	   	 		<select name="" class="form-control"  id="tooltipOnSelect">
					<option>seleziona</option>
					<option>lorem ipsum</option>
	   	 		</select>
   	 		</div>
   	 		<div class="col-sm-3">
	   	 		<label class="control-label">Lorem</label>
	   	 		<input type="text" name="" class="form-control clear-x">
   	 		</div>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="row">
	    	<div class="col-sm-3 requiredField has-error">
	    		<label class="control-label">Lorem*</label>
	    		<input type="text" name="" class="form-control clear-x">
	    		<span class="help-block with-errors">mesaggio di errore</span>
	    	</div>
	    	<div class="col-sm-3 requiredField">
	    		<label class="control-label">Lorem ipsum (campo con tooltip)</label>
	    		<input type="text" name="" class="form-control clear-x"  data-toggle="tooltip" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ">
	    	</div>
	    	<div class="col-sm-3">
	    		<label class="control-label">Lorem</label>
	    		<input type="text" name="" class="form-control clear-x">
	    	</div>
	    	<div class="col-sm-3">
	    		<label class="control-label">Lorem ipsum</label>
	    		<input type="text" name="" class="form-control clear-x">
	    	</div>
	    </div>
	   </div>
	   <div class="form-group">
			<div class="row">
				<div class="col-sm-3">
	       	 		<label  class="control-label">Autocomplete</label>
					<div class="form-inline">
	       	 			<div class="input-group">
							<input type="text" id="campoAutocomplete" class="form-control clear-x">
						<script type="text/javascript">
							$("#campoAutocomplete").autoComplete( ["prova due","lorem ipsum"], {
								selectable: false,
								clearable: true,
								filter: 'beginning'
							});
						$("#campoAutocomplete").autocomplete().data("ui-autocomplete")._renderItem = stylingResults;
						</script>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
	       	 		<label  class="control-label">Autocomplete disabilitato</label>
					<div class="form-inline">
	       	 			<div class="input-group">
							<input type="text" id="campoAutocomplete2" class="form-control clear-x" disabled>
							<script type="text/javascript">
									$("#campoAutocomplete2").autoComplete( ["prova due","lorem ipsum"], {
										selectable: false
									});
									$("#campoAutocomplete2").autoComplete("disable")
							</script>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<label class="control-label">Autocomplete</label>
					<input type="text" id="campoAutocomplete3" class="form-control clear-x">
						<script type="text/javascript">
							$("#campoAutocomplete3").autoComplete( ["prova due","lorem"], {
								selectable: false,
								clearable: true,
								numResults: 5,
								filter: 'beginning'
							});
						$("#campoAutocomplete3").autocomplete().data("ui-autocomplete")._renderItem = stylingResults;
						</script>
				</div>
				<div class="col-sm-3">
	    			<label class="control-label">Lorem ipsum</label>
	    			<input type="text" name="" class="form-control clear-x">
	    		</div>

			


			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<label class="control-label">Lorem ipsum</label>
					<div class="form-inline">
	       	 			<div class="input-group">
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
	       	 			</div>
	       	 		</div>
				</div>
				<div class="col-sm-6">
					<label class="control-label">Icona che apre overlayer</label>
					<div class="form-inline">
	       	 			<div class="input-group">
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
	       	 				<div class="input-group-addon"><a href="#1" class="no-underline btn-icon"><i class="icon icon-info_fill"></i ></a></div>
						</div>
	       	 		</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-xs-6 col-sm-6">
					<label class="control-label">Lorem ipsum</label>
					<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x" placeholder="lorem ipsum dolor">
	       	 	</div>
				<div class="col-xs-6 col-sm-6">
					<label class="control-label">Selettore rapporto (usato nel trading)</label>
					<div id="sceltaSottoRapporto" class="selectRapp">
					<input id="sceltaSottoRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>
					<a href="javascript:;" class="inputOption inputSx form-control">
						<span class="inputDx">
							<span class="input">
								xxx/aaaaaa
							</span>
						</span>
					</a>
					<div class="selector" style="display: none;">
						<span class="group">
							<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
							<strong>xxx/aaaaaa</strong><br/>
							Nome Nome Cognome Cognome1</a>
						</span>
						<span class="group">
							<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/0</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/1</strong><br/>
							Nome Nome Cognome Cognome1</a>
							<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/2</strong><br/>
							Nome Nome Cognome Cognome2</a>
						</span>
						<span class="group">
							<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/0</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/1</strong><br/>
								Nome Nome Cognome Cognome1</a>
							<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/2</strong><br/>
								Nome Nome Cognome Cognome2</a>
							<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/3</strong><br/>
								Nome Nome Cognome Cognome3</a>
							<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/4</strong><br/>
								Nome Nome Cognome Cognome4</a>
							<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/5</strong><br/>
								Nome Nome Cognome Cognome5</a>
						</span>
					</div>
				</div>
	       	 	</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-6 col-sm-6">
							<label class="control-label">Da</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x" placeholder="lorem ipsum dolor">
			       	 	</div>
						<div class="col-xs-6 col-sm-6">
							<label class="control-label">A</label>
							<select class="form-control"><option>seleziona</option><option>lorem ipsum</option></select>
			       	 	</div>
			       	 </div>
		       	 </div>
		       	<div class="col-sm-6">
					<label class="control-label">lorem ipsum</label>
					<textarea class="form-control" rows="3"></textarea>
			    </div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">	
				<div class="col-sm-6">
					<div class="textWrapper">
						<i class="icon icon-file_pdf"></i>
						<span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <a class="underline" href="#1">laboris nisi ut aliquip ex ea commodo consequat</a></span>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="textWrapper">
						<i class="icon icon-file_pdf"></i>
						<span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <a class="underline" href="#1">laboris nisi ut aliquip ex ea commodo consequat</a></span>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">	
				<div class="col-sm-6">
					<label class="control-label">Lorem ipsum</label>
					<div class="radio">
       					 <label class="textWrapper">
		         			<input type="radio" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
     				<div class="radio">
       					<label class="textWrapper">
		         			<input type="radio" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
     				<div class="radio">
       					 <label class="textWrapper">
		         			<input type="radio" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
				</div>
				<div class="col-sm-6">
					<label class="control-label">Lorem ipsum</label>
					<div class="checkbox">
       					<label class="textWrapper">
		         			<input type="checkbox" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
     				<div class="checkbox">
       					<label class="textWrapper">
		         			<input type="checkbox" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
     				<div class="checkbox">
       					<label class="textWrapper">
		         			<input type="checkbox" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
				</div>
				
			</div>
		</div>
		<div class="form-group">
			<div class="row">	
				<div class="col-sm-12">
					<label class="control-label">Label di tutti i campi</label>
					<div class="row">
						<div class="col-xs-6 col-sm-3">
							<div class="radio inline">
		       					 <label class="textWrapper">
		         					 <input type="radio" name="" id="">
		          					  <span class="text">Lorem ipsum dolor sit amet</span>
		        				</label>
     						</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="radio inline">
		       					  <label class="textWrapper">
		         					 <input type="radio" name="" id="">
		          					  <span class="text">Lorem ipsum dolor sit amet</span>
		        				</label>
     						</div>
						</div>
						<div class="col-xs-6 col-sm-3">
							<div class="radio inline">
		       					 <label class="textWrapper">
		         					 <input type="radio" name="" id="">
		          					  <span class="text">Lorem ipsum dolor sit amet</span>
		        				</label>
     						</div>
						</div>
						<div class=" col-xs-6 col-sm-3">
							<div class="radio inline">
		       					  <label class="textWrapper">
		         					 <input type="radio" name="" id="">
		          					  <span class="text">Lorem ipsum dolor sit amet</span>
		        				</label>
     						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">	
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-6 col-sm-4 requiredField">
							<label class="control-label">Num c/c*</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
						</div>
						<div class="col-xs-6 col-sm-2 requiredField">
							<label class="control-label">CIN*</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
						</div>
						<div class="col-xs-6 col-sm-3 requiredField">
							<label class="control-label">ABI*</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
						</div>
						<div class="col-xs-6 col-sm-3 requiredField">
							<label class="control-label">CAB*</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-3 requiredField">
							<label class="control-label">lorem</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
						</div>
						<div class="col-sm-9 requiredField">
							<label class="control-label">lorem</label>
							<select class="form-control">
							<option>seleziona</option>
							<option>lorem</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">	
				<div class="col-sm-6">
					<div class="row">
						<div class="col-xs-6 col-sm-2 requiredField">
							<label class="control-label">Lorem</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
						</div>
						<div class="col-xs-6 col-sm-4 requiredField">
							<label class="control-label">Lorem</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
						</div>
						<div class="col-xs-6 col-sm-2 requiredField">
							<label class="control-label">Lorem</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
						</div>
						<div class="col-xs-6 col-sm-4 requiredField">
							<label class="control-label">Lorem</label>
							<input maxlength="" id="" value="" type="text" name="" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<label class="control-label">Lorem</label>
					<div class="row">
						<div class="col-xs-6 col-sm-4">
							<div class="radio">
		       					 <label>
		         					 <input type="radio" name="" id="">
		          					su richiesta
     						</div>
						</div>
						<div class="col-sm-4">
							<div class="radio">
		       					 <label>
		         					 <input type="radio" name="" id="">
		          					fino al giorno
     						</div>
						</div>           
						<div class="col-sm-4">
						   <div class="form-inline">
		       	 			<div class="input-group">
		       	 				<input type="text" id="datepickerTool" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
		       	 				<div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
		       	 			</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="form-group">
			<div class="row">	
				<div class="col-sm-12">
					<label class="control-label">Label Lorem ipsum dolor sit amet, consectetur (100%)</label>
					<input type="text" placeholder="facoltativo" name="" class="form-control clear-x">
				</div>
			</div>
		</div>
		 <div class="form-group">	 
      	 <div class="row">
       	 	<div class="col-sm-12">
				  <label class="control-label">Conto di addebito*</label>
					<div class="form-inline">		 
					  <div class="input-group">
          					<select class="form-control" name="" id="">
								<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
								<option value="01077 - 0000049477 - EUR" accountid="01077 - 0000049477 - EUR" accountidtoshow="CC 01077 0000049477 EUR">CC 01077 0000049477 EUR</option>
						 	</select>
         				 <div class="input-group-addon">
         				 	<a class="no-underline btn-icon" data-toggle="modal" data-target="#starAlert1">
         				 		<i class="icon icon-star_fill" title="icon-star_fill"></i>
         				 		<!--<i class="icon icon-star" title="icon-star"></i>-->
         				 	</a>
         				 </div>
        			  </div>
        			</div>
			</div>
       	 </div>
    	</div>
		 <div class="form-group">
    		<div class="row">	
				<div class="col-sm-12">
					<label class="control-label-output">Lorem ipsum</label>
					<span class="output">Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet</span>
				</div>
			</div>
		</div>
		 <div class="form-group">
    		<div class="row">	
				<div class="col-sm-12">
					<label class="control-label-output">Lorem ipsum</label>
					<div class="checkbox inline">
       					 <label class="textWrapper">
         					 
         					 <input type="checkbox" name="" id="">
          					<span class="text">Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet</span>
        				</label>
     				</div>
				</div>
			</div>
		</div>
		 <div class="form-group">
    		<div class="row">	
				<div class="col-sm-12">
					<label class="control-label-output">Lorem ipsum</label>
					<div class="checkbox inline">
       					 <label class="textWrapper">
         					 <input type="checkbox" name="" id="" disabled>
          					<span class="text">Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet</span>
        				</label>
     				</div>
				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-sm-3">
					<div class="checkbox inline">
       					<label class="textWrapper">
		         			<input type="checkbox" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
				</div>
				<div class="col-sm-3">
					<div class="checkbox inline">
       					<label class="textWrapper">
		         			<input type="checkbox" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
				</div>
				<div class="col-sm-3">
					<div class="checkbox inline">
       					<label class="textWrapper">
		         			<input type="checkbox" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
				</div>
				<div class="col-sm-3">
					<div class="checkbox inline">
       					<label class="textWrapper">
		         			<input type="checkbox" name="" id="">
		          			<span class="text">Lorem ipsum dolor sit amet</span>
		        		</label>
     				</div>
				</div>
    		</div>
    	</div>	

    	<!--prove di larghezza campi  -->
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-1 col-md-1 col-sm-1</label>
					<div class="row">
						<div class="col-xs-1 col-md-1 col-sm-1 col-lg-1">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
					
  				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-1 col-md-1 col-sm-1</label>
					<div class="row">
						<div class="col-sm-12">
							la select in questo caso non ha le dimensioni minime per contenere la freccia di selezione
						</div>
					</div>
					
  				</div>

			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-2 col-md-2 col-sm-2</label>
					<div class="row">
						<div class="col-xs-2 col-md-2 col-sm-2 col-lg-2">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-2 col-md-2 col-sm-2</label>
					<div class="row">
						<div class="col-xs-2 col-md-2 col-sm-2 col-lg-2">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>

			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-3 col-md-3 col-sm-3</label>
					<div class="row">
						<div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-3 col-md-3 col-sm-3</label>
					<div class="row">
						<div class="col-xs-3 col-md-3 col-sm-3 col-lg-3">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-4 col-md-4 col-sm-4</label>
					<div class="row">
						<div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-4 col-md-4 col-sm-4</label>
					<div class="row">
						<div class="col-xs-4 col-md-4 col-sm-4 col-lg-4">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-5 col-md-5 col-sm-5</label>
					<div class="row">
						<div class="col-xs-5 col-md-5 col-sm-5 col-lg-5">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-5 col-md-5 col-sm-5</label>
					<div class="row">
						<div class="col-xs-5 col-md-5 col-sm-5 col-lg-5">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-6 col-md-6 col-sm-6</label>
					<div class="row">
						<div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-6 col-md-6 col-sm-6</label>
					<div class="row">
						<div class="col-xs-6 col-md-6 col-sm-6 col-lg-6">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-7 col-md-7 col-sm-7</label>
					<div class="row">
						<div class="col-xs-7 col-md-7 col-sm-7 col-lg-7">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-7 col-md-7 col-sm-7</label>
					<div class="row">
						<div class="col-xs-7 col-md-7 col-sm-7 col-lg-7">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-8 col-md-8 col-sm-8</label>
					<div class="row">
						<div class="col-xs-8 col-md-8 col-sm-8 col-lg-8">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-8 col-md-8 col-sm-8</label>
					<div class="row">
						<div class="col-xs-8 col-md-8 col-sm-8 col-lg-8">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-9 col-md-9 col-sm-9</label>
					<div class="row">
						<div class="col-xs-9 col-md-9 col-sm-9 col-lg-9">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-9 col-md-9 col-sm-9</label>
					<div class="row">
						<div class="col-xs-9 col-md-9 col-sm-9 col-lg-9">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-10 col-md-10 col-sm-10</label>
					<div class="row">
						<div class="col-xs-10 col-md-10 col-sm-10 col-lg-10">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-10 col-md-10 col-sm-10</label>
					<div class="row">
						<div class="col-xs-10 col-md-10 col-sm-10 col-lg-10">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-11 col-md-11 col-sm-11</label>
					<div class="row">
						<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-11 col-md-11 col-sm-11</label>
					<div class="row">
						<div class="col-xs-11 col-md-11 col-sm-11 col-lg-11">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
		<div class="form-group">
    		<div class="row">
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-12 col-md-12 col-sm-12</label>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
							<input type="text" class="form-control clear-x">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<label class="control-label">col-xs-12 col-md-12 col-sm-12</label>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
							<select class="form-control"><option>seleziona</option></select>
						</div>
					</div>
					
  				</div>
			</div>
		</div>
    	<!--FINE prove di larghezza campi  -->
    	<div class="form-group btnWrapper">
			<div class="btn-align-center">
				<a type="button" class="btn btn-primary" id="">lorem</a>
				<br class="clear">
			</div>
		</div>
    	<div class="form-group btnWrapper">
			<div class="btn-align-left">
				<a type="button" class="btn btn-default">lorem</a>
			</div>
			<div class="btn-align-right">
				<a type="button" class="btn btn-primary" id="">lorem</a>
			</div>
			<br class="clear">
		</div>
		<br>
		<div class="form-group btnWrapper">
			<div class="btn-align-left">
				<a type="button" class="btn btn-default">lorem</a>
			</div>
			<div class="btn-align-right">
				<a type="button" class="btn btn-default">lorem</a>
				<a type="button" class="btn btn-primary" id="">lorem</a>
			</div>
			<br class="clear">
		</div>
</form>

