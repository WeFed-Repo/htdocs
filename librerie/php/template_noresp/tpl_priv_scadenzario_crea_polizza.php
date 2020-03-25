<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>
<script type="text/javascript">	
$(function () {
	$("#datepicker").mask("99/9999");
});
</script>


<h1>LOREM IPSUM</h1>
<p>Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum</p>



<div class="boxesito attenzione">
	<div class="middle"><span class="imgCont"></span>
		<div class="text">
			<div class="row-fluid">
				<div class="span10">
					<p>Al momento non hai polizze salvate.</p>					
				</div>
			</div>
		</div>
	</div>
</div>



<div id="polizzaAgg"></div>


<div id="aggiungiLink">
	<a href="javascript:;" title="" onclick="$('#polizzaEditRicordo').show();$('#aggiungiLink').hide()" class="openDet"><img src="/wscmn/img/ico1gr_indchiuso.gif" style="display:block; float:left;"> <span style="display:block; float:left; margin-left:3px; font-weight:bold; text-decoration:underline; cursor:pointer">Aggiungi un altro beneficiario</span></a>
	<br class="clear"/>
</div>


<div id="polizzaEditRicordo" class="borderFormRounded margBottomLarge margTopSmall" style="display:none">
	<div class="formGeneric">
		<div class="row-fluid">
			<div class="span3">				
				<label class="nomefield colorver">Polizza 1</label>
			</div>			
			<div class="span3">
				<label class="nomefield">Data scadenza*</label>
				<div class="row-fluid noMargbottom">
					<div class="span10">	
						<input type="text" class="" id="datepicker" placeholder="mm/aaaa" value="11/2013">	
					</div>
					<div class="span2">
						&nbsp;
					</div>
				</div>	
			</div>
			<div class="span3">
				<div class="row-fluid noMargbottom">
					<div class="span10">	
						<label class="nomefield">Tipologia veicolo</label>
						<select><option>Seleziona</option><option>lorem</option></select>	
					</div>
					<div class="span2">
						&nbsp;
					</div>
				</div>
			</div>
			<div class="span3">
				<div class="row-fluid ">	
					<div class="span8">
						<label class="nomefield">Targa veicolo</label>
						<input type="text">
					</div>
					<div class="span4">
						&nbsp;
					</div>
				</div>	
			</div>
		</div>		
		<div class="row-fluid noMargbottom">
			<div class="span12">				
				<p><strong>La scadenza della polizza ti verr&eagrave; ricordata:</strong></p>
			</div>	
		</div>
		<div class="row-fluid">	
			<div class="span6">
				<input type="radio" name="bollettino" value=""> Via email<br><strong>pinko@pallo.it</strong>
			</div>			
			<div class="span6">
				<input type="radio" name="bollettino" value=""> Con un sms<br><strong>12345678</strong>
			</div>
		</div>
		<div class="row-fluid">	
			<div class="span12">				
				<div class="boxesito attenzione">
					<div class="middle"><span class="imgCont"></span>
						<div class="text">
							<div class="row-fluid">
								<div class="span10">
									<p><strong>La scadenza delle polizze ti verr&agrave; ricordata via email all'indirizzo pinko@pallo.it<br>
										Se vuoi ricevere gli avvisi via sms, imposta il tuo numero di telefono nella
										<a href="#1">sezione recapiti</a>.<strong></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	
		<div class="row-fluid">	
			<div class="span12">				
				<p><a href="#1">Informazioni sulla Privacy</a></p>
			</div>	
		</div>
		<div class="row-fluid">			
			<div class="span12">
				<div class="aButtonconsRight">
					<span class="btnc"><a class="aButton" href="connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_scadenzario_polizza.php" id=""><span>salva</span></a></span>
				</div>	
			</div>	
		</div>
		</div>		
	</div>
</div>


