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
<h1>giroconti</h1>
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
<!-- CASO DI ERRORE PER UN SOLO CONTO-->
<div class="boxesito attenzione">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span12">
					<p><strong>Attenzione</strong><br>Sei titolare di <strong>1 solo conto</strong><br>Non &egrave; possibile effettuare un giroconto (operazione tra <strong>2 conti</strong> correnti)</p>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- FINE CASO DI ERRORE PER UN SOLO CONTO-->
<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"></div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form>
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
				<?php if ($bank == "webank"){?>
				<div class="span6">
						<label class="nomefield">Lorem ipsum dolor</label>
						<span class="output"><a href="#">1.000.000€</a></span>
				</div>
				<?php } ?>
			</div>
			<?php if ($bank != "webank"){?>
			<div class="row-fluid">
					<div class="span6">
						<label class="nomefield ico">Lorem ipsum*</label>
						<span data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim" class="iconahelp"><img class="help" src="/img/ret/ico2or_help2.gif"></span>
						<div class="row-fluid">
							<div class="span4">
								<input type="text" class="withIco" id="datepicker" placeholder="gg/mm/aaaa" value="22/11/2013">
							</div>
						</div>
					</div>
					<div class="span6">
						<label class="nomefield">Lorem ipsum dolor</label>
						<span class="output"><a href="#">1.000.000€</a></span>
					</div>
			</div>
			<?php } ?>
			<div class="row-fluid">
				<div class="span12">
					<label class="nomefield">Lorem ipsum dolor*</label>
					<input type="text">
				</div>
			</div>
		</form>
	</div>
</div>
<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"></div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
		<form>
			<div class="row-fluid">
				<label class="nomefield">Lorem ipsum dolor*</label>
				<select><option>XX XXXXX XXXXXXXXXX EUR LOREM IPSUM</option></select>
			</div>
		</form>
	</div>
</div>
<?php if ($bank == "webank"){?>
	<?php include("../librerie/include/commons/form/form_black_001_priv.html"); ?>
<?php } ?>
<div class="fooform">		
			<div class="fooformtop">Step <strong>1</strong> di 2</div>
			<div class="fooformright"><div><a title="prosegui" href="connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_solidale_sepa_rie_esi.php" class="btnformright" id="proseguiBonifico"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div></div>	
		</div>
<p class="note">Lorem ipsum </p>