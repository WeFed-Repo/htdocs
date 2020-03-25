<script type="text/javascript">	
$(function () {
	$("#datepickerPag").datepicker({
		showOn: "button",
		buttonImage: "/img/btn_pickdate_priv.gif",
		buttonImageOnly: true,
		minDate: 1,
		//MxDate fissata solo come esempio
		maxDate: "+1M +10D",
		//fissare maxDate alla scadenza del certificato
		dateFormat: "dd/mm/yy",
		showOtherMonths: true
		
	}).next(".ui-datepicker-trigger");
	$("#datepickerPag").mask("99/99/9999");
});

</script>

<h1>Prenota un appuntamento in agenzia</h1>
<div class="paddBottomLarge">
	<div>
		<div class="flLeft"><img src="/img/ret/img_helpcenter_agenzia.jpg" alt="lorem ipsum"></div>
		<div class="paddLeftBoxIcoLarge">
			<p class="noPaddbottom">Lorem ipsum <strong>dolor sit</strong> amease nsectetur adipisicing eliteasdi eiusmod tempor incididunsadt labore et dolore magna alass Ut enim ad minim veniamasai	nostrud exercitation ullamdsi.</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="formCenteredwrapper no-desktop">
	<form class="formGeneric formCentered paddBottomMedium" autocomplete="off">
		<h2 class="noMargtop">lorem ipsum dolor sit</h2>
		<div class="row-fluid">
			<label class="nomefield">Lorem ipsum:</label>
			<input type="text" name="" />			
		</div>
		
		<div class="row-fluid">
			<div class="span4">
				<label class="nomefield">Lorem ipsum:</label>
				<input type="text" class="withIco" id="datepickerPag" placeholder="gg/mm/aaaa">
			</div>
		</div>
		
		<div class="row-fluid">
			<label class="nomefield">Lorem ipsum:</label>
			<select>
				<option>seleziona</option>
				<option>Num.0000000000-00/Num. 0000000000-00</option>
				<option>Num. 0000000000-00</option>
			</select>
		</div>
		<div class="row-fluid">
			<label class="nomefield">Lorem ipsum:</label>
			0000000000-00
		</div>
		<div class="row-fluid">
			<label class="nomefield">Lorem ipsum:</label>
			<select>
				<option>seleziona</option>
				<option>Num.0000000000-00/Num. 0000000000-00</option>
				<option>Num. 0000000000-00</option>
			</select>
		</div>
	</form>
	<div id="" class="aButtoncons"><a href="javascript:;" class="nextstep first aButton"><span>prenota</span></a></div>		
</div>


		



