<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
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
				$("#datepicker").mask("99/99/9999");
			});
	
</script>
<style type="text/css">
		@import url(/wscmn/css/priv_calendar.css);
</style>
<h1>LOREM IPSUM</h1>
<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form>
			<div>
				<span class="nomefield">lorem ipsum dolor</span>
				<div class="row-fluid">
					<div class="span2">
						<label><input type="radio" value="" name="name1" checked>Lorem ipsum</label>
					</div>
					<div class="span3">
						<label class="flLeft"><input type="radio" value="" name="name1"><span class="flLeft">Lorem ipsum</span><span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim" class="iconahelp flLeft"><img class="help" src="/img/ret/ico2or_help2.gif"></span></label>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span10">
							<label class="nomefield">lorem ipsum dolor*</label>
							<select class="withIco">
								<option>lorem ipsum</option>
								<option>lorem ipsum</option>
							</select>
							<a href="#" class="flRight"><img src="/img/ico1gr_preferito.gif"></a>
						</div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">lorem ipsum dolor</label>
					<span class="output">lorem ipsum dolor sit </span>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span4">
							<label class="nomefield">lorem*</label>
							<input type="text">
						</div>
						<div class="span8">
							<label class="nomefield">&nbsp;</label>
							<span class="text">EUR</span>
						</div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">lorem ipsum dolor</label>
					<div class="row-fluid">
						<div class="span3">
							<span class="output">1.000.000&euro;</span>
						</div>
						<div class="span9"><a href="#">modifica</a></div>
					</div>
				</div>
			</div>
			
			<div class="row-fluid">
				<div class="span6">
					<div class="row-fluid">
						<div class="span4">
							<label class="nomefield">lorem*</label>
							<input type="text">
						</div>
						<div class="span8">
							<label class="nomefield">lorem ipsum</label>
							<select><option>lorem ipsum</option><option>lorem ipsum</option><option>NOK - CORONA NORVEGESE</option></select>
						</div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">lorem ipsum dolor</label>
					<div class="row-fluid">
						<div class="span3">
							<span class="output">1.000.000&euro;</span>
						</div>
						<div class="span9"><a href="#">modifica</a></div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
				<span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim" class="txthelp flLeft">Controvalore indicativo in Euro</span>: <span>15.452,45</span>
				</div>
				<div class="span6"></div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<label class="nomefield ico">Lorem ipsum*</label>
					<span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim"><img src="/img/ret/ico2or_help2.gif" class="help"></span>
					<div class="row-fluid">
						<div class="span4">
							<input type="text" class="withIco" id="datepicker" placeholder="gg/mm/aaaa" value="22/11/2013">
					    </div>
					</div>
				</div>
				<div class="span6">
					<label class="nomefield">Lorem ipsum dolor</label>
					<span class="output"><a href="#">1.000.000&euro;</a></span>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<label class="nomefield ico">Lorem ipsum*</label>
					<input type="text">
				</div>
			</div>
		</form>
	</div>
</div>

<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>

<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form>
			<div class="row-fluid">
				<div class="autoComp">
					<div class="span6">
						<label class="nomefield">Lorem ipsum</label>
						<input type="text" id="campoAutocomplete">
						<script type="text/javascript">
							$("#campoAutocomplete").autoComplete(
							 ["ciccio","riccio"]
							);
							$("#campoAutocomplete").autocomplete(
							{
							select: function(event, ui) {$('#hiddenContent').show()}
							}
							);
							
						</script>
					 </div>
					 <div class="span6">
						<label class="nomefield">&nbsp;</label>	
						<div>
							<a href="#">nuovo beneficiario</a>
						</div>					
					</div>
				 </div>
			</div>
			<div id="hiddenContent" style="display:none">
				<div class="row-fluid">	
					<div class="span12">
						<label class="nomefield" id="">Iban Beneficiario*</label>
						<span class="output">XXXXXXXXXXXXXXX</span>
					</div>
				</div>
				<div class="row-fluid">	
					<div class="span6">
						<label class="nomefield">Lorem ipsum dolor</label>
						<select><option>Lorem ipsum </option></select>
					</div>
				</div>
				<div class="row-fluid">	
					<div class="span6">
						<label class="nomefield">Lorem ipsum</label>
						<input type="text">
					</div>
					<div class="span6">
						<label class="nomefield">Lorem ipsum</label>
						<input type="text">
					</div>
				</div>
				<div class="row-fluid">	
					<div class="span6">
						<label class="nomefield">Lorem ipsum</label>
						<input type="text" placeholder="Lorem ipsum dolor">
					</div>
				</div>
		    </div>
		</form>
	</div>
</div>
<div class="fooform">		
		<div class="fooformtop">Step <strong>1</strong> di 2</div>
		<div class="fooformright"><div><a title="prosegui" class="btnformright" href="#"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div></div>	
</div>
<br class="clear">
<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
