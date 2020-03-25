<h1>LOREM IPSUM</h1>
<ul>
	<li>Lorem ipsum dolor</li>
	<li>Lorem ipsum dolor <span data-tooltip="At vero eos et accusamus et iusto odio dignissimos ducimus" class="txthelp">sequi nesciunt</span>
<span class="uniqTooltipInnerHTML"></li>
</ul>
<div id="bonificoCont">
<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>
<div class="borderFormRounded margBottomLarge">
	<div class="formGeneric">
	<form>
		<div class="row-fluid">
			<div class="span5">
				<div class="row-fluid">
					<div class="span12"><label class="nomefield">lorem ipsum dolor*</label></div>
					<div class="row-fluid">
						<div class="span11">						
							<select class="withIco">
								<option>lorem ipsum</option>
								<option>lorem ipsum</option>
							</select>
						</div>	
						<div class="span1">
							<a href="#" class="flRight"><img src="/img/ico1gr_preferito.gif"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="span5">
				<label class="nomefield">lorem ipsum dolor</label>
				<span class="output">lorem ipsum dolor sit </span>
			</div>
			<div class="span2">&nbsp;</span>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span5">
				<div class="row-fluid">
					<div class="span6">
						<label class="nomefield ico">Numero tessera*</label>
						<span class="iconahelp"><img src="/img/ret/ico2or_help2.gif" class="help"></span>	
					</div>
					<div class="span6">
						<label><input class="labIco" type="checkbox" value="" name="name1"/> Inserisici in rubrica</label>
					</div>
				</div>	
							
				<input type="text" name="">
			</div>
			<div class="span5">
				<label class="nomefield">lorem ipsum dolor</label>
				<input type="text" name="">
			</div>
			<div class="span2">
			<label class="nomefield">lorem</label>
			<img src="/wscmn/img/ret/logo_atm.gif" />
			</div>
		</div>

	</form>
	</div>
</div>
<br class="clear" />


<div id="prezzi" style="display:none;">
	<div class="tithelp"><div class="helpleft">lorem ipsum</div><br class="clear"/></div>
	<p>Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</p>
	<div class="borderFormRounded margBottomLarge">
		<div class="formGeneric">
		<form>
			<div class="row-fluid">
				<div class="span6">
					<input type="radio" value="" name="name1"/> <strong>00,00 &euro;</strong> Lorem ipsum
				</div>
				<div class="span6">
					Lorem ipsum
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<input type="radio" value="" name="name1"/> <strong>00,00 &euro;</strong> Lorem ipsum
				</div>
				<div class="span6">
					Lorem ipsum
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<input type="radio" value="" name="name1"/> <strong>00,00 &euro;</strong> Lorem ipsum
				</div>
				<div class="span6">
					Lorem ipsum
				</div>
			</div>
		</form>
		</div>
	</div>
	<div class="clear"/></div>
</div>

<div class="fooform">		
		<div class="fooformtop">Step <strong>1</strong> di 2</div>
		<div class="fooformright"><div><a id="proseguiBonifico" class="btnformright" href="javascript:;" title="prosegui"><img src="/img/ret/btn_left_ar.gif"><span>prosegui</span><img src="/img/ret/btn_right_ar.gif"></a></div></div>	
</div>
<br class="clear">
<p class="note">I campi contrassegnati da un asterisco (*) sono obbligatori.</p>
</div>

<script type="text/javascript">	
$('#proseguiBonifico').on('click',function()
{	
	$("#prezzi").show();		
	setLoadingOnObject('prezzi','','');
	$("#prezzi").delay(2000).show(function(){
		unsetLoadingOnObject('prezzi');
	});
})

</script>
