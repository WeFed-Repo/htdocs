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

<h1>modifica importo massimo</h1>
<?php include("../librerie/include/responsive/boxedit/box01.php"); ?>
<table class="text01">
<tr>
	<td>
		<ul>
			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <strong>incididunt ut labore</strong> et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l</li>
			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l</li>
		</ul>
	</td>
</tr>
</table>
<table cellspacing="0" cellpadding="0" border="0" class="dettRendiTable">
	<tr class="heading">
		<td class="first">
			<p>Conto :<strong><strong>CC XXXXX XXXXXXXXXX EUR +DEP</strong></strong><br>intestato a: <strong>LOREM IPSUM</strong></p>
		</td>
	</tr>
	<tr>
		<td class="filpieno">
			<table cellspacing="0" cellpadding="0" border="0" class="rowsRendiTable">
				<tr>
					<td width="25%"><strong>Attuale importo massimo</strong></td>
					<td  width="75%"><strong>Durata</strong></td>
				</tr>
				<tr>
					<td width="25%">50.000 &euro;</td>
					<td width="75%">permanente</td>
				</tr>
			</table>
			<table cellspacing="0" cellpadding="0" border="0" class="rowsRendiTable">
				<tr><td width="25%" colspan="2"></td></tr>
				<tr>
					<td width="25%"><strong>Nuovo importo massimo</strong></td>
					<td  width="75%"><strong>Durata</strong></td>
				</tr>
				<tr>
					<td width="25%"><input type="text" class="margRightMedium"><span>&euro;</span></td>
					<td width="75%">
						<div class="nobor3"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3 flLeft" onclick="$('#derogaDate').hide();"><span>permanente</span></div>
						<div class="nobor3"><input type="radio" name="radiobutton" value="radiobutton" class="nobor3 flLeft" onclick="$('#derogaDate').show();"><span>fino al giorno</span></div>
						<div class="nobor3" style="display:none" id="derogaDate"><input type="text" class="withIco flLeft" id="datepicker" placeholder="gg/mm/aaaa" value="22/11/2013"></div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<div id="otpHidden" style="display:none"><?php include("../librerie/include/commons/form/form_110_priv.php"); ?></div>
<div class="fooform">
	<div class="fooformtop"></div>
	<div class="fooformleft">
		<div><a title="lorem ipsum" class="btnformleft" href="javascript:;" onclick="$('#otpHidden').hide()"><img alt="" src="/img/ret/btn_left_bi.gif"><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_bi.gif"></a></div>	
	</div>
	<div class="fooformright"><div><a title="lorem ipsum" class="btnformright" href="javascript:;" onclick="$('#otpHidden').show()"><img alt="" src="/img/ret/btn_left_ar.gif"><span>lorem ipsum</span><img alt="" src="/img/ret/btn_right_ar.gif"></a></div></div>
</div>

