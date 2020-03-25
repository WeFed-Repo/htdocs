<script type="text/javascript">	
	$(function () {
				$("#datepicker").datepicker({
					showOn: "button",
					buttonImage: "/img/btn_pickdate_priv.gif",
					buttonImageOnly: true,
					minDate: 1,
					//MxDate fissata solo come esempio
					maxDate: "+1M +10D",
					//fissare maxDate alla scadenza del certificato
					dateFormat: "dd/mm/yy",
					showOtherMonths: true
					
				});
				$("#datepicker").mask("99-99-9999");
			});
	
</script>
<script>
check = {
  checkFormEx: function() {
	var errors = [],
		inputToCheck01 = $('#inputToCheck01');
		inputToCheck02 = $('#inputToCheck02');
		inputToCheck03 = $('#inputToCheck03');
		inputToCheck04 = $('#inputToCheck04');
	errors.push({ field: inputToCheck01, text: "errore uno" });
	errors.push({ field: inputToCheck02, text: "errore due" });
	errors.push({ field: inputToCheck03, text: "errore tre" });
	errors.push({ field: inputToCheck04, text: "errore quattro" });
	setErrors(errors, '#form01');
  }
}

$(function() {
   $('#demoSetErrorBtn').bind('click',function() {check.checkFormEx()})
});

</script>
<div class="tithelp">
	<div class="helpleft">Titolo di form</div>
	<div align="right" class="BvTableHeaderHelp"><a class="hlp" href="#1">help</a><a href="#1"><img alt="help" src="/img/ret/ico2or_help2.gif"></a><br class="clear"></div>
<br class="clear">
</div>
<br class="clear">
<div class="borderFormRounded">
	<div class="formGeneric">
		<form id="form01">
			
			<!--RIGA DIVISA IN DUE CAMPI -->
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield ico">Label Lorem ipsum dolor sit amet, consectetur</label>
					<span class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif"></span>
					<input type="text" name="" data-error="" id="inputToCheck01">
				</div>
				<div class="span6">
					<label class="nomefield ico">Label Lorem ipsum dolor sit amet, consectetur</label>
					<span class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif"></span>
				<input type="text" name="">
				</div>
			</div>
			
			<!--RIGA DIVISA IN QUATTRO CAMPI -->
			<div class="row-fluid">
				<div class="span3">
					<label class="nomefield">Localit&agrave;</label>
					<input type="text">
				</div>
				<script>
				 
				</script>
				<script>
					$(function() {
					$('#inputToCheck02').bind('change', function(){
						if($(this).val() =='option selezionata con tooltip')
						{
							$(this).attr('data-tooltip','#ttHtmlContId2');
							$(this).focus();
						}
						else
						{
							ttHide();
						}
					})
					});
				</script>
				<div class="span3">
					<label class="nomefield">provincia</label>
					<select id="inputToCheck02" ><option>lorem</option><option>option selezionata con tooltip</option></select>
					<span id="ttHtmlContId2" class="ttHtmlContent">
						<p>Lorem <a href="#2" class="ttLink">dolor</a> sit amet. Consectetur <i>adipiscing</i> elit.<br></p>
					</span>
				</div>
				<div class="span3">
					<label class="nomefield">CAP</label>
					<select><option>lorem</option><option>lorem</option></select>
				</div>
				<div class="span3">
					<label class="nomefield">Lorem</label>
					<input type="text">
				</div>
			</div>
			
			<!--RIGA DIVISA IN QUATTRO CAMPI-->
			<div class="row-fluid">
				<div class="span3 errore">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text">
				</div>
				<div class="span3">
					<label class="nomefield">Lorem ipsum (campo con tooltip)</label>
					<input type="text" data-tooltip="Lorem ipsum dolor sit dolor sit">
				</div>
				<div class="span3">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text">
				</div>
				<div class="span3">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text">
				</div>
			</div>
			
			<!--RIGA DIVISA IN QUATTRO CAMPI-->
			<div class="row-fluid">
				<div class="span3">
					<div class="autoComp">
						<label class="nomefield">Autocomplete</label>
						<input type="text" id="campoAutocomplete">
						<script type="text/javascript">
							$("#campoAutocomplete").autoComplete(["ciccio","riccio"])
						</script>
					</div>
				</div>
				<div class="span3">
					<label class="nomefield">Autocomplete disabilitato</label>
					<input type="text" id="campoAutocomplete2" disabled>
					<script type="text/javascript">
							$("#campoAutocomplete2").autoComplete("disable")
					</script>
				</div>
				<div class="span3">
					<div class="autoComp">
						<label class="nomefield">Autocomplete secondo tipo</label>
						<input type="text" id="campoAutocomplete3">
						<script type="text/javascript">
							$("#campoAutocomplete3").autoComplete(["prova due","lorem"],false,true,5,true);
							$("#campoAutocomplete3").autocomplete().data("ui-autocomplete")._renderItem = stylingResults; //stilizza le iniziali  della ricerca
						</script>
					</div>
				</div>
				<div class="span3">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text">
				</div>
			</div>
			
			<!--RIGA DIVISA IN DUE CAMPI CON SPINNER -->
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text" class="withIco">
					<a href="#" title="Lorem ipsum" class="flRight">
						<img src="/img/ret/frecce.gif" usemap="#map1">
						<map id="map1" name="map1"><area shape="rect" coords="0,0,9,5" href="#" alt="Aumenta di..." title="Aumenta di..."><area shape="rect" coords="0,9,9,14" href="#" alt="Diminuisci di 1000" title="Diminuisci di 1000"></map>
					</a>
				</div>
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text" class="withIco">
					<a href="javascript:;" title="Lorem ipsum" class="flRight"><img  src="/img/ret/ico2or_help2.gif" class="help"></a>
				</div>
			</div>
			<!--RIGA DIVISA IN DUE CAMPI -->
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<input type="text" placeholder="lorem ipsum">
				</div>
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<select><option>lorem ipsum</option><option>lorem ipsum</option></select>
				</div>
			</div>
			
			<!--RIGA DIVISA IN DUE CAMPI DI CUI IL PRIMO A SUA VOLTA DIVISO IN DUE -->
			
			<div class="row-fluid">
				<div class="span3">
					<label class="nomefield">Da</label>
					<input type="text">
				</div>	
				<div class="span3">
					<label class="nomefield">a</label>
					<select><option>lorem</option><option>lorem</option></select>
				</div>
				<div class="span6">
					<label class="nomefield">Lorem ipsum</label>
					<textarea></textarea>
				</div>
			</div>
			
			
			<!--RIGA DIVISA IN DUE CAMPI -->
			<div class="row-fluid">
				<div class="span6">
					<a class="flLeft margRightSmall" href="#1"><img src="/img/ret/pdf.gif"></a>
					<span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <a class="underline" href="#1">laboris nisi ut aliquip ex ea commodo consequat</a></span>
				</div>
				<div class="span6">
					<a class="flLeft margRightSmall" href="#1"><img src="/img/ret/pdf.gif"></a>
					<span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco <a class="underline" href="#1">laboris nisi ut aliquip ex ea commodo consequat</a></span>
				</div>
			</div>
			
			
			<!--RIGA DIVISA IN DUE CAMPI -->
			<div class="row-fluid">
				<div class="span6">
						<label class="nomefield">Label</label>
						<div class="radiocont">
							<label><input id="inputToCheck04" type="radio" value="" name="" data-error="">Lorem ipsum dolor sit amet, consectetur</label><br>
							<label><input type="radio" value="" name="">Lorem ipsum dolor sit amet, consectetur</label><br>
							<label><input type="radio" value="" name="">Lorem ipsum dolor sit amet, consectetur</label><br>
							<label><input type="radio" value="" name="">Lorem ipsum dolor sit amet, consectetur</label><br>
						</div>
				</div>
				<div class="span6">
						<label class="nomefield">Label</label>
						<div class="radiocont">
							<label><input type="checkbox" value="" name=""  data-error="" id="inputToCheck03">Lorem ipsum dolor sit amet, consectetur</label><br>
							<label><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet, consectetur</label><br>
							<label><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet, consectetur</label><br>
							<label><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet, consectetur</label><br>
						</div>
				</div>
			</div>
		
			<!--UNICA RIGA CON FIELDSET CON 4 RADIO-->
			<div>
				<span class="nomefield">Label di tutti i campi</span>
				<div class="row-fluid">
					<div class="span3">
						<label><input type="radio" name="" value="">Lorem ipsum dolor sit amet</label>
					</div>
					<div class="span3">	
						<label><input type="radio" name="" value="">Lorem ipsum dolor sit amet, consectetur </label>
					</div>
					<div class="span3">
						<label><input type="radio" name="" value="">Lorem ipsum dolor sit amet</label>
					</div>
					<div class="span3">
						<label><input type="radio" name="" value="">Lorem ipsum dolor sit amet</label>
					</div>
				</div>
			</div>
			
			
			<!--RIGA DIVISA IN più COLONNE-->
			<div class="row-fluid">				
				<div class="span6">
					<div class="row-fluid noMargbottom">	
						<div class="span5"><label class="nomefield">Num c/c* </label><input type="text"></div>
						<div class="span1"><label class="nomefield">CIN</label><input type="text"></div>
						<div class="span3"><label class="nomefield">ABI*</label><input type="text"></div>
						<div class="span3"><label class="nomefield">CAB*</label><input type="text"></div>
					</div>
				
				</div>
				<div class="span6">
					<!--<label for="inputData" class="nomefield">Data</label>				
					<input type="text" id="datepicker" pattern="[0-9]*" class="withIco">-->
					<div class="row-fluid noMargbottom">	
						<div class="span3"><label class="nomefield">CAP*</label><input type="text"></div>
						<div class="span9"><label class="nomefield">Provincia</label><select><option>lorem ipsum</option></select></div>
					</div>
				</div>
			</div>
			
			<!--RIGA DIVISA IN più COLONNE CON DATA-->
			<div class="row-fluid">				
				<div class="span6">
					<div class="row-fluid noMargbottom">	
						<div class="span1"><label class="nomefield">Lorem</label><input type="text"></div>
						<div class="span5"><label class="nomefield">Lorem</label><input type="text"></div>
						<div class="span2"><label class="nomefield">Lorem</label><input type="text"></div>
						<div class="span4"><label class="nomefield">Lorem</label><input type="text"></div>
					</div>
				
				</div>
				<div class="span6">
					<label class="nomefield">Lorem</label>
					<div class="row-fluid noMargbottom">
						<div class="span4">
							<label>
							<input type="radio" name="" value="">su richiesta
							</label>
						</div>
						<div class="span4">
							<label><input type="radio" name="" value="">fino al giorno</label>             
						</div>
						<div class="span4" id="">
						   <input type="text" class="withIco" id="datepicker" placeholder="" value="22/11/2013">
						 </div>
					</div>
				</div>
			</div>
			
				<!-- UNICA RIGA CON CAMPO-->
			<div class="row-fluid">
				<div class="span12">
					<label class="nomefield">Label Lorem ipsum dolor sit amet, consectetur (100%)</label>
					<input type="text" placeholder="facoltativo" name="">
				</div>
			</div>
			<!--UNICA RIGA CON CAMPO E ICONA -->
			<div class="row-fluid">
				<div class="span12">
					<label class="nomefield">Lorem ipsum</label>
					<select class="withIco">
						<option>lorem</option>
						<option>lorem</option>
					</select>
					<a href="#" title="Lorem ipsum" class="flRight"><img src="/img/ico1gr_preferito.gif" alt="Lorem ipsum"></a>
				</div>
			</div>
			<div class="row-fluid">	
				<div class="span12">
					<label class="nomefield">Lorem ipsum</label>
					<span class="output">Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet Lorem ipsum dolor sit lorem ipsum Lorem ipsum dolor sit amet</span>
				</div>
			</div>
			<!--UNICA RIGA CON 1 FIELDSET CHECK E TESTO-->
			<div class="row-fluid">
				<div class="span12">
					<label class="nomefield">Lorem ipsum</label>
					<label><input type="checkbox" id=""> <span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat </span></label>	
				</div>
			</div>
			
			<!--UNICA RIGA CON 1 FIELDSET CHECK DISABILITATO E TESTO-->
			<div class="row-fluid">
				<div class="span12">
					<span class="nomefield">Label di tutti i campi</span>
					<input type="checkbox" disabled="" id="">
					<span class="text nopadd">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</span>	
				</div>
			</div>
			
			<!-- UNICA RIGA CON PIU SPAN SU PIU RIGHE-->
			<div class="row-fluid">				
				<label class="span3 multiline_margbot"><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet</label>
				<label class="span3 multiline_margbot"><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet</label>
				<label class="span3 multiline_margbot"><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet</label>
				<label class="span3 multiline_margbot"><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet</label>
				<label class="span3 FoR multiline_margbot"><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet</label>
				<label class="span3 multiline_margbot"><input type="checkbox" value="" name="">Lorem ipsum dolor sit amet</label>
			</div>
			
			<!--prove di larghezza campi  -->
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span1">
							<span class="nomefield">span 1</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span12">
							<span class="nomefield">span 1</span>
							la select in questo caso non ha le dimensioni minime per contenere la freccia di selezione
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span2">
							<span class="nomefield">span 2</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span2">
							<span class="nomefield">span 2</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span3">
							<span class="nomefield">span 3</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span3">
							<span class="nomefield">span 3</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span4">
							<span class="nomefield">span 4</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span4">
							<span class="nomefield">span 4</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span5">
							<span class="nomefield">span 5</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span5">
							<span class="nomefield">span 5</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span6">
							<span class="nomefield">span 6</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span6">
							<span class="nomefield">span 6</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span7">
							<span class="nomefield">span 7</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span7">
							<span class="nomefield">span 7</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span8">
							<span class="nomefield">span 8</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span8">
							<span class="nomefield">span 8</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span9">
							<span class="nomefield">span 9</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span9">
							<span class="nomefield">span 9</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span10">
							<span class="nomefield">span 10</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span10">
							<span class="nomefield">span 10</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span11">
							<span class="nomefield">span 11</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span11">
							<span class="nomefield">span 11</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span12">
							<span class="nomefield">span 12</span>
							<input type="text">
						</div>
					</div>
					
				</div>
				<div class="span6">
					<div class="row-fluid">
						<div class="span12">
							<span class="nomefield">span 12</span>
							<select><option>lorem </option></select>
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="btnc aButtoncons"><a href="javascript:;" class="aButton"><span>lorem ipsum</span></a></div>
		
		<!--bottoniera con più bottoni a sinistra e adestra e casistica di bottoni annulla/indietro -->
		<div>
			<div class="aButtonconsLeft">
				<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
			</div>
			<div class="aButtonconsRight">
				<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>lorem ipsum</span></a></span>
			</div>
		</div>
		<br class="clear"><br>
		<!--bottoniera con più bottoni a destra e casistica di bottoni annulla/indietro -->
		<div class="aButtonconsLeft">
			<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
		</div>
		
		<div class="aButtonconsRight">
			<span class="btnc"><a class="aButtonClear" href="javascript:;"><span>lorem ipsum</span></a></span>
			<span class="btnc"><a class="aButton" href="javascript:;" id="demoSetErrorBtn"><span>lorem ipsum</span></a></span>
		</div>
 </div>
</div>
