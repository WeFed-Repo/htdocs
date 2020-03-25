<form autocomplete="off">
<div id="confrCarte" class="confrCarte">
	<div class="icoCartafirst icoCarta">
		<div class="icoCartaJeans"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span class="singlerow">CARTA JEANS</span>
	</div>
	<div class="icoCarta">
		<div class="icoCartaImpOne"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span>CARTIMPRONTA ONE</span>
	</div>
	<!--
	<div class="icoCarta">
		<div class="icoCartaGreen"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span class="singlerow">AMEX GREEN</span>
	</div>
	<div class="icoCarta">
		<div class="icoCartaGold"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span class="singlerow">AMEX GOLD</span>
	</div>
	-->
	<div class="icoCarta">
		<div class="icoCartaImpGold"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span>CARTIMPRONTA GOLD PLUS</span>
	</div>	
	<br class="clear" />
	<div class="btnConfr"><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>confronta carte</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
</div>
</form>
<br /><br /><br />
<form autocomplete="off">
<div id="confrCarte" class="confrCarte">
	<div class="icoCartafirst icoCarta">
		<div class="icoCartaJeans"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span class="singlerow">CARTA JEANS</span>
	</div>
	<div class="icoCarta">
		<div class="icoCartaImpOne"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span>CARTIMPRONTA ONE</span>
	</div>
	<!--
	<div class="icoCarta">
		<div class="icoCartaGreen"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span class="singlerow">AMEX GREEN</span>
	</div>
	<div class="icoCarta">
		<div class="icoCartaGold"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span class="singlerow">AMEX GOLD</span>
	</div>
	-->
	<div class="icoCarta">
		<div class="icoCartaBancomat"></div>
		<input type="checkbox" class="nobor3" value="" name="" /><br class="clear" />
		<span>BANCOMAT</span>
	</div>	
	<br class="clear" />
	<div class="btnConfr"><a title="lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>confronta carte</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div>
</div>
</form>

<script type="text/javascript">
$('#confrCarte').find('input[type=checkbox]').click (function (){
		var cbx = $(this);
		if (cbx[0].checked) {cbx.parent(".icoCarta").addClass('selected');}
		else { cbx.parent(".icoCarta").removeClass('selected');}
	});
</script>