<script type="text/javascript">	
$(function () {
	$("#datepickerObiettivo").datepicker({
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
	$("#datepickerObiettivo").mask("99/99/9999");
});

</script>


<div class="layeralert3" id="layeralert3" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralert3').dragHandle = new Draggable('layeralert3',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralert3')"/></div>
	<div class="body">
		<h2>Lorem ipsum</h2>
		<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. </p>
		
		<!--blocco important -->
		<div class="formGeneric">
			<form id="formrichiesta3">
			<div class="row-fluid">
				<div class="span6 paddMedium widthVetrinaLayer">
					<div class="boxImgVetrina boxImgVetrinaLayer">
						<label onclick="closePopOverLayer('layeralert3');$('#modificaOverlayer').show();$('#radioVetrinaLayerId').show();$('#linkAggiungi').css('background-image','url(/img/ret/vetrina/0010/ldpi.png)')"><div class="radioVetrinaLayer"><input type="radio" name="a" value="" >Lorem ipsum dolor sit amet</div>
						<img src="/img/ret/vetrina/0010/ldpi.png"></label>
					</div>
				</div>
				
				<div class="span6 paddMedium widthVetrinaLayer">
					<div class="boxImgVetrina boxImgVetrinaLayer">
						<label onclick="closePopOverLayer('layeralert3');$('#modificaOverlayer').show()"><div class="radioVetrinaLayer"><input type="radio" name="a" value="" >Lorem ipsum dolor sit amet</div>
						<img src="/img/ret/vetrina/0010/ldpi.png"></label>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6 paddMedium widthVetrinaLayer">
					<div class="boxImgVetrina boxImgVetrinaLayer">
						<label onclick="closePopOverLayer('layeralert3');$('#modificaOverlayer').show()"><div class="radioVetrinaLayer"><input type="radio" name="a" value="" >Lorem ipsum dolor sit amet</div>
						<img src="/img/ret/vetrina/0010/ldpi.png"></label>
					</div>
				</div>
				
				<div class="span6 paddMedium widthVetrinaLayer">
					<div class="boxImgVetrina boxImgVetrinaLayer">
						<label onclick="closePopOverLayer('layeralert3');$('#modificaOverlayer').show()"><div class="radioVetrinaLayer"><input type="radio" name="a" value="" >Lorem ipsum dolor sit amet</div>
						<img src="/img/ret/vetrina/0010/ldpi.png"></label>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6 paddMedium widthVetrinaLayer">
					<div class="boxImgVetrina boxImgVetrinaLayer">
						<label onclick="closePopOverLayer('layeralert3');$('#modificaOverlayer').show()"><div class="radioVetrinaLayer"><input type="radio" name="a" value="" >Lorem ipsum dolor sit amet</div>
						<img src="/img/ret/vetrina/0010/ldpi.png"></label>
					</div>
				</div>
				
				<div class="span6 paddMedium widthVetrinaLayer">
					<div class="boxImgVetrina boxImgVetrinaLayer">
						<label onclick="closePopOverLayer('layeralert3');$('#modificaOverlayer').show()"><div class="radioVetrinaLayer"><input type="radio" name="a" value="" >Lorem ipsum dolor sit amet</div>
						<img src="/img/ret/vetrina/0010/ldpi.png"></label>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span6 paddMedium widthVetrinaLayer">
					<div class="boxImgVetrina boxImgVetrinaLayer">
						<label onclick="closePopOverLayer('layeralert3');$('#modificaOverlayer').show()"><div class="radioVetrinaLayer"><input type="radio" name="a" value="" >Lorem ipsum dolor sit amet</div>
						<img src="/img/ret/vetrina/0010/ldpi.png"></label>
					</div>
				</div>
				
				<div class="span6 paddMedium widthVetrinaLayer">
					<div class="boxImgVetrina boxImgVetrinaLayer">
						<label onclick="closePopOverLayer('layeralert3');$('#modificaOverlayer').show()"><div class="radioVetrinaLayer"><input type="radio" name="a" value="" >Lorem ipsum dolor sit amet</div>
						<img src="/img/ret/vetrina/0010/ldpi.png"></label>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
	<div class="foot"></div>
</div>

<div id="layeralertElimina" class="layeralert2" style="display: none;">
	<div class="head handle" onmouseover="this.style.cursor='move'; $('layeralertElimina').dragHandle = new Draggable('layeralertElimina',{handle: 'handle'}, { scroll: window });"><img src="/img/ret/layeralert_x.gif" alt="chiudi" onclick="closePopOverLayer('layeralertElimina')"/></div>
		<div class="body flLeft">
			<p>Eliminando questo obiettivo potrari crearne uno nuovo.<br>
Sei sicuo di volerlo eliminare?</p>

		<a title="Lorem ipsum" class="btnformright" href="#1"><img alt="" src="/img/ret/btn_left_ar.gif"><span>Elimina obiettivo</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
		<a title="Lorem ipsum" class="btnformleft flRight" href="javascript:;" onclick="closePopOverLayer('layeralertElimina')"><img alt="" src="/img/ret/btn_left_bi.gif"><span>Annulla</span><img alt="" src="/img/ret/btn_right_bi.gif"></a>
	
		</div>
		<br class="clear">
	<div class="foot"></div>
</div>

<h1>Lorem ipsum</h1>
<p>Sed ut <strong>perspiciatis</strong> unde omnis iste natus error sit voluptatem  unde omnis iste natus error sit voluptatem unde omnis iste natus error sit voluptatem unde omnis iste natus error sit voluptatem unde omnis iste natus error sit voluptatem<br>
Sed ut <strong>perspiciatis</strong> unde omnis iste natus error sit voluptatem  unde omnis iste natus error sit.</p>
<p>Sed ut <strong>perspiciatis</strong> unde omnis iste natus error sit voluptatem  unde omnis iste natus error sit voluptatem unde omnis iste natus error<br>
Sed ut <strong>perspiciatis</strong> unde omnis iste natus error sit voluptatem  unde omnis iste natus error sit.</p>
<br>
<div class="tithelp">
	<div align="right" class="BvTableHeaderHelp"><a class="hlp" href="#1">Lorem ipsum</a><br class="clear"></div>
<br class="clear">
</div>
<div class="boxrichiesta">
 <div class="steprichiesta on">
    <div class="steprichiestatit">
		<img src="/img/ret/str_tit_uno_on.gif" alt="Lorem ipsum" />
		<h2 class="richiestaTit">Lorem ipsum</h2>
		<span class="icospunta" style="display:none"><img src="/img/ret/ico2inf_spunta.png" /></span>
		<span style="display:none"><a onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();stepRichiesta(this);disableForm(this,'contformrichiesta')" class="backstep second modifica" href="javascript:;">modifica</a></span>
    </div>
	<!--STEP 1 INPUT-->
	<div class="formGeneric steprichiestacont" style="padding-left:60px;padding-right:60px;*width:579px">
		<div id="contformrichiesta" class="row-fluid">
			<ul class="listaAlign">
				<li>Lorem ipsum dolor sit</li>
				<li>Lorem ipsum dolor sit</li>
			</ul>
			<form id="formrichiesta1">
				<div class="row-fluid">
					<div class="span6 paddRightLarge" style="*width:43.66%">
						<label class="nomefield">Lorem ipsum</label>
						<select><option>lorem ipsum dolor 1</option><option>lorem ipsum dolor 2</option></select>
					</div>

					<div class="span6 paddLeftLarge" style="*width:43.66%">
						<label class="nomefield">Lorem ipsum</label>
						<select><option>lorem ipsum dolor 1</option><option>lorem ipsum dolor 2</option></select>
					</div>
				</div>
			</form>
		</div>
	<!--STEP 1 INPUT FINE-->

	<!--STEP 1 OUPUT-->
		<div id="contformrichiestaoutput" style="display:none">
			<ul class="listaAlign">
				<li>Lorem ipsum dolor sit</li>
				<li>Lorem ipsum dolor sit</li>
			</ul>
			<form id="formrichiesta1">
				<div class="row-fluid">
					<div class="span6 paddRightLarge" style="*width:43.66%">
						<label class="nomefield">Lorem ipsum</label>
						<span class="output">lorem ipsum dolor 1</span>
					</div>

					<div class="span6 paddLeftLarge" style="*width:43.66%">
						<label class="nomefield">Lorem ipsum</label>
						<span class="output">lorem ipsum dolor 2</span>
					</div>
				</div>
			</form>
		</div>
	<!--STEP 1 OUPUT FINE-->
		<div class="btnc aButtoncons" id="btnProsegui1"><a href="javascript:;" class="nextstep first aButton" onclick="$('#btnModifica1').show();$('#btnProsegui1').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>prosegui</span></a></div>
		<div class="btnc aButtoncons" style="display:none" id="btnModifica1"><a href="javascript:;" class="backstep second modifica" onclick="$('#btnModifica1').hide();$('#btnProsegui1').show();disableForm(this,'contformrichiesta');stepRichiesta(this);"><span>modifica</span></a></div>
		<br class="clear" />
	</div>
    
	<!--contenuto da caricare come risposta di output visualizzazione e comparsa solo simulate-->
			
 </div>
	<div class="steprichiesta off last">
		<div class="steprichiestatit">
			<img src="/img/ret/str_tit_due_off.png" alt="Dolor sit" />
			<h2 class="richiestaTit">Dolor sit</h2>
			<span style="display:none" class="icospunta"><img src="/img/ret/ico2inf_spunta.png"></span>
		</div>
		<div class="formGeneric steprichiestacont" style="padding-left:60px;padding-right:60px;*width:579px">
	<!--STEP 2 INPUT FINE-->
			<div style="display:none" id="contformrichiesta2">
				<form>
					<div class="row-fluid">
						<div class="span6 paddRightLarge" style="*width:43.66%">
							<label class="nomefield">Categoria</label>
							<div class="boxImgVetrina" >
								<div id="radioVetrinaLayerId" class="radioVetrinaLayer" style="display:none">Lorem ipsum dolor sit amet</div><a href="#1" id="linkAggiungi" onclick="openPopOverLayer('layeralert3', 'floating', 1);" class="aggDaVetrina"><img src="/img/btn_aggobiettivo.png" class="aggObiettivo"></a>
							</div>
							<a id="modificaOverlayer" href="javascript:;" onclick="openPopOverLayer('layeralert3', 'floating', 1)" class="flRight paddTopSmall" style="display:none">Modifica</a>
						</div>
						
						<div class="span6 paddLeftLarge" style="*width:43.66%">
							<div class="row-fluid paddBottomMedium">
								<div class="span12">
									<label class="nomefield">Lorem ipsum</label>
									<input type="text" value="lorem">
								</div>
							</div>
							<div class="row-fluid paddBottomMedium">
								<div class="span7">
									<label class="nomefield">lorem*</label>
									<input type="text">
								</div>
								<div class="span2">
									<label class="nomefield">&nbsp;</label>
									<span class="text txtAlRight">EUR</span>
								</div>
							</div>
							<div class="row-fluid">
								<label class="nomefield">Lorem ipsum</label>
								<div class="row-fluid">
									<div class="span5">
										<input type="text" class="withIco" id="datepickerObiettivo" placeholder="gg/mm/aaaa" value="22/11/2013" style="width:80px">
									</div>
								</div>
							</div>
						</div>
					</div>
					<br><br>
					<!--box traserisci sull'obiettivo -->
					<div class="tithelp">
						<div class="helpleft">Titolo di form</div>
						<br class="clear">
					</div>
					<div class="row-fluid">
						<div class="borderFormRounded">
							<div class="formGeneric">
								<form>
									<div class="row-fluid">
										<div class="span6">
											<label class="nomefield">Label Lorem</label>
											<span class="output">Lorem ipsum</span>
										</div>
										<div class="span6 paddBottomMedium">
											<div class="row-fluid">
												<div class="span10">
													<label class="nomefield">Quanto vuoi assegnare all'obiettivo?</label>
													<div class="row-fluid">
														<div class="span7">
															<input type="text">
														</div>
														<div class="span2">
															<span class="text txtAlRight">EUR</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<img src="/img/ret/ico2or_creaobiettivo.jpg" class="flLeft"><p style="margin:20px 0 0 0">Lorem ipsum dolor sit placet lorem ipsum dolor sit placet <span class="importoConf">XXX &euro;</span> lorem ipsum dolor.</p>
						</div>
					</div>
					<br><br>
					<div class="row-fluid">
						<div class="span12">
							<label class="nomefield ico">Label Lorem ipsum</label>
							<span class="iconahelp" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipisicing elit"><img class="help" src="/img/ret/ico2or_help2.gif"></span><br class="clear">
							<label><input type="checkbox" id=""> <span class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat </span></label>	
						</div>
					</div>
				</form>
	
			<!--STEP 1 INPUT FINE-->
				<div class="btnc aButtoncons" id="btnProsegui1"><a href="javascript:;" class="nextstep first aButton" onclick="stepRichiesta(this,true);$('#btnModifica1').hide();$('#btnProsegui1').hide();disableForm(this,'contformrichiesta');stepRichiesta(this);$('#contformrichiesta').hide();$('#contformrichiestaoutput').show();$('#contformrichiesta2').hide();$('#contformrichiesta2output').show()"><span>crea obiettivo</span></a></div>
			</div>
			
			<!--STEP 2 OUPUT-->
			<div style="display:none" id="contformrichiesta2output">
				<br>
				<div class="boxesito positivo">
					<div class="middle">
						<span class="imgCont"></span>
						<div class="text">
							<div class="row-fluid">
								<div class="span12">
									<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
									et quas molestias excepturi <a href="#">sint occaecati cupiditate non provident</a>, similiq</p>
									<br>
									
									<div class="row-fluid paddBottomMedium">
										<div class="span5">
											<label class="nomefield">Lorem ipsum</label>
											<span class="output">lorem ipsum dolor</span>
										</div>
										<div class="span5">
											<label class="nomefield">Lorem ipsum</label>
											<span class="output">lorem ipsum dolor</span>
										</div>
										<div class="span2 txtAlRight">
											<img src="/img/ret/logo_bazak.jpg" style="margin:0 20px 0 0">
										</div>
									</div>
									<div class="row-fluid paddBottomMedium">
										<div class="span5">
											<label class="nomefield">Lorem ipsum</label>
											<span class="output">lorem ipsum dolor</span>
										</div>
										<div class="span7">
											<label class="nomefield">Lorem ipsum</label>
											<span class="output">lorem ipsum dolor</span>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span9 outputevid">
											<span class="output"><strong>Lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor lorem ipsum dolor</strong></span>
										</div>
										<div class="span3">
											<div class="row-fluid txtAlRight">
												<a href="javascript:;" onclick="openPopOverLayer('layeralertElimina', 'floating', 1)">Elimina obiettivo</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br>
				<p><strong>LOREM IPSUM?</strong></p>
				<div class="row-fluid">
					<div class="span12">
						<p style="margin:10px 0 0 0"><strong>Lorem ipsum</strong><br>Nella pagina di gestione obiettivo potrai controllare l'andamento del tuo obiettivo. Una volta raggiunto lorem ipsum dolor sit amet</p>
						<div class="btnc"><a class="aButton flRight" href="javascript:;"><span>gestisci obiettivo</span></a></div>
					</div>
				</div>
				<br><br>
				<div class="row-fluid">
					<div class="span12">
						<p style="margin:10px 0 0 0">Scaricando l'app potrai impostare un importo fisso per il trasferimento.</p>
						<div class="flRight">
							<a href="#" title="Download on the App Store"><img src="/wscmn/img/btn_apple_store_download.png" alt="Download on the App Store"></a>
							<a href="#" title="Android App on Google play"><img src="/wscmn/img/btn_android_store.png" alt="Android App on Google play"></a>
							<a href="#" title="Android App on Samsung Store"><img src="/wscmn/img/btn_samsung_store.png" alt="Android App on Samsung Store"></a>
						</div>
					</div>
				</div>
			</div>
			<!--STEP 2 OUPUT FINE-->
		</div>
	</div>

 <div class="stepbottom"></div>
</div>
