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
<h1>bonifico solidale</h1>
<table class="text01">
	<tr>
		<td>
			<ul>
				<li>Lorem ipsum dolor</li>
				<li class="tolltipclick">Lorem ipsum dolor <span class="closed"><span onclick="if(this.parentNode.className=='closed') {createUniqTooltip(event, this, 'medium')} else {removeUniqTooltip(event, this)}" class="uniqTooltipText over fixed" id="documenti2"><span class="uniqTooltipPos"> <a href="javascript:;"><strong> lorem </strong></a></span>
		<span class="uniqTooltipInnerHTML">
		<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
			</p>
		</span></span></span>dolor sit</li>
			</ul>
		</td>
	</tr>
</table>
<div id="bonificoCont">
	<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>
	<div class="borderFormRounded margBottomLarge">
		<div class="formGeneric">
			<form>
				<div class="row-fluid">
					<div class="span6">
						<label class="nomefield">lorem ipsum dolor</label>
						<span class="output">Lorem ipsum dolor</span>
					</div>
					<div class="span6">
						<label class="nomefield">lorem ipsum dolor</label>
						<span class="output">XXXXXXXX</span>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span3">
						<label class="nomefield">lorem</label>
						<span class="output">Lorem ipsum dolor</span>
					</div>
					<div class="span3">
						<label class="nomefield">lorem</label>
						<span class="output">Lorem ipsum dolor</span>
					</div>
					<div class="span3">
						<label class="nomefield">lorem</label>
						<span class="output">XXXXX</span>
					</div>
					<div class="span3">
						<label class="nomefield">lorem ipsum</label>
						<span class="output">MI</span>
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
					<div class="span6">
						<div class="row-fluid">
							<div class="span10">
								<label class="nomefield">lorem ipsum dolor*</label>
								<select class="withIco">
									<option>lorem ipsum</option>
									<option>lorem ipsum</option>
								</select>
								<a class="flRight" href="#"><img src="/img/ico1gr_preferito.gif"></a>
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
								<span class="output">1.000.000€</span>
							</div>
							<div class="span9"><a href="#">modifica</a></div>
						</div>
					</div>
				</div>
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
				<div class="row-fluid">
					<div class="span12">
						<label><input type="checkbox" name="" value=""><strong>Lorem ipsum dolor sit amet, consectetur</strong></label>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<label class="nomefield">Lorem ipsum dolor</label>
						<textarea rows="2" cols="2" name="text" id="textArea1" class="textareabasso"></textarea>
						<br class="clear"/>
						<p class="noPaddbottom"><span id="nMaxCarCounter" class="paddRightSmall"></span><span>caratteri rimanenti</span></p>
						<script type="text/javascript">initCounterTextarea('nMaxCarCounter','textArea1',70)</script>
					</div>
				</div>
			</form>
			
		</div>
	</div>
	<a class="linkInForm" href="javascript:;" onclick="$('#dettagliIntestatario').toggle();">lorem ipsum dolor</a>
	<br class="clear"/><br/>
	<div id="dettagliIntestatario" style="display:none">
		<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>
		<div class="borderFormRounded margBottomLarge">
			<div class="formGeneric">
				<form>
					<div class="row-fluid">
						<div class="span3">
							<label class="nomefield">lorem</label>
							<span class="output">Lorem ipsum dolor</span>
						</div>
						<div class="span3">
							<label class="nomefield">lorem</label>
							<span class="output">Lorem ipsum dolor</span>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span3">
							<label class="nomefield">lorem</label>
							<span class="output">Lorem ipsum dolor</span>
						</div>
						<div class="span3">
							<label class="nomefield">lorem</label>
							<span class="output">Lorem ipsum dolor</span>
						</div>
						<div class="span3">
							<label class="nomefield">lorem</label>
							<span class="output">Lorem ipsum dolor</span>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
							<label class="nomefield">lorem</label>
							<input type="text" value="Lorem ipsum">
						</div>
						<div class="span4">
							<label class="nomefield">lorem</label>
							<input type="text" value="Lorem ipsum">
						</div>
						<div class="span2">
							<label class="nomefield">lorem</label>
							<input type="text" value="Lorem ipsum">
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
							<label class="nomefield">lorem</label>
							<input type="text" value="Lorem ipsum">
						</div>
						<div class="span3">
							<label class="nomefield">lorem</label>
							<input type="text" value="Lorem ipsum">
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="tithelp"><div class="helpleft">LOREM IPSUM DOLOR SIT</div><br class="clear"/></div>
	<div class="borderFormRounded margBottomLarge">
			<div class="formGeneric">
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti</p>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti</p>
				<table class="text01 noMargtop">
					<tr>
						<td>
							<ul>
								<li>Lorem ipsum dolor</li>
								<li>Lorem ipsum dolor dolor sit</li>
							</ul>
						</td>
					</tr>
				</table>
				<form>
					<div class="row-fluid">
						<div class="span2"><label><input type="radio" value="" name="">lorem</label></div>
						<div class="span2"><label><input type="radio" value="" name="">lorem</label></div>
					</div>
					<div class="row-fluid">
						<div class="span12"><label><input type="checkbox" value="" name="">lorem</label></div>
						
					</div>
				</form>
			</div>
	</div>
	<br class="clear" />
		<div class="fooform">		
			<div class="fooformtop">Step <strong>1</strong> di 2</div>
			<div class="fooformright"><div><a id="proseguiBonifico" class="btnformright" href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_solidale_sepa_rie_esi.php" title="prosegui"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div></div>	
		</div>
</div>