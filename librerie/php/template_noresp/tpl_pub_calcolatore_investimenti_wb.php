<?php 
	virtual ("/librerie/php/str_left_pub_wb.php");
?>
<div id="maincontent">
	<div class="maincontenttopper"></div>

	<!-- titolo -->
	<h2 class="title">Calcolatore investimenti</h2>
	<!--fine  titolo -->
	
	<!-- visual dinamico -->
	<div class="maincontentobject">
		<div id="maincontentobjectarea">
			<!-- PRIMA AREA -->
				<div class="objectarea" id="simula" style="display:block;">
				<!-- BLOCCO SIMULA -->
					<script type="text/javascript" src="/js/pub_calcolatore_investimenti.js"></script>
					<style>
					
						#calcinv_home {float:left; display:block; margin:0; padding:0; width: 382px; height: 241px; background: #f6f6f6 url(/img/calcinv_home_bg.gif) no-repeat 0 0}
						#calcinv_console {clear: both;display: block;float: right;height: 41px;width: 232px; padding:0;}
						#calcinv_home .contbox{margin:0; padding:0; float:left; width: 382px; clear:left;}
						.contbox #labelLin {float:left; width: 80px; margin: 80px 0 0 19px; font-weight: bold; text-decoration:none}
						/* .contbox a:hover span img {padding-left: 5px !important} */
						.contbox #labelPct {float:left; width: 80px; margin: 29px 0 0 19px; font-weight: bold; text-decoration:none}
						#calcinv_lin, #calcinv_pct {display: block;float: right;height: 57px;margin: 65px 0 0;width: 282px;}					
						*:first-child+html #contlin {margin-top: 41px;}
						* html #contlin {margin-top: 41px !important}
						#calcinv_pct {margin: 15px 0 0}
						#calcinv_console a {margin-right: 5px; text-decoration:none !important; background: url(/img/calcinv_field_meno.gif) no-repeat scroll 0 0 #eee; display: block; float: left;height: 24px;margin-top: 17px; width: 24px}
						#calcinv_console a.plus {background-image: url(/img/calcinv_field_piu.gif); margin-right: 0; margin-left: 5px !important;}
						#calcinv_console a.disabled {background-position: 0 -24px}
						#calcolaInveField {width: 140px; border: solid 1px #bababa; float:left; font-weight: bold; color: #6f8f0a; margin-top:17px; height: 22px; line-height: 20px; padding: 0 5px; text-align: right; background: #fff url(/img/calcinv_field_bg.gif) repeat-x 0 0}
						div.invbox {line-height: 10px;text-align:center; width: 58px; height:57px; display;block; float:left; margin: 0 4px 0; background: #f6f6f6 url(/img/calcinv_invbox_bg.gif); cursor: hand;cursor: pointer;}
						div.invbox.disabled, div.invbox.disabled:hover {background-position: 0 -56px; cursor: default !important}
						div.invbox:hover {background-position: 0 -114px;}
						div.invbox .netto, div.invbox .lordo, div.invbox .calcnetto, div.invbox .calcolo,div.invbox .dettagli {display:block; float:left;cursor: hand;cursor: pointer;width: 58px; height:57px;}
						div.invbox .netto, div.invbox .lordo,div.invbox .calcolo,div.invbox .dettagli  {font-size: 10px; color: #666}
						div.invbox .netto, div.invbox .lordo, div.invbox .calcolo, div.invbox .dettagli {display:none}
						div.invbox .netto {display:block}
						div.invbox:hover .lordo {display:block}
						div.invbox:hover .lordo {display:block}
						div.invbox:hover .netto {display:none}
						div.invbox.active:hover .lordo, div.invbox.active .netto, div.invbox.active .netto {display:none} {display:none}
						div.invbox.active .calcolo {display:block}
						div.invbox.active:hover .calcolo {display:none}
						div.invbox.active:hover .dettagli {display:block}
						div.invbox.active .calcolo span {font-size: 11px; font-family: Arial, Helvetica MS, Serif; letter-spacing: -0.5px; padding: 13px 0 0}
						div.invbox span {font-size: 14px; font-family: Arial, Helvetica MS, Serif; display: block; clear:both; color: #6f8f0a; font-weight: bold; padding: 17px 0 0}
						div.invbox .super, div.invbox .sub {clear: left;float: left;height: 28px;margin: 0 0 0 1px;width: 56px}
						div.invbox .super {border-bottom: solid 1px #dedede}
						div.invbox .super span, div.invbox .sub span {padding:0; font-size: 11px; line-height: 10px}
						div.invbox .super span {padding:5px 0 0}
						div.invbox .sub span {padding:3px 0 0}
						.calcdettagli {float: left;display: block;height:241px; margin: 0;padding: 0;width: 382px; background: #f6f6f6 url(/img/calcinv_dettagli_bg.gif) no-repeat 0 0}
						.calcdettagli .chiudibutton { background: #f6f6f6 url(/img/calcinv_chiudidett.gif) no-repeat 0 0; height: 30px; width: 32px; float:right; text-decoration:none !important}
						.calcdettagli h2 {margin:0 !important; padding: 0 0 0 18px; clear: left;float: left !important;font-size: 26px !important;font-weight: normal !important;height: 46px; line-height: 43px !important;text-transform: none !important;width: 323px !important}
						.calcdettagli h2 img {float: left;padding-top: 12px;}
						.calcdettagli .tablecont {clear: left; float: left;height: 63px;margin: 0 0 0 18px;width: 342px}
						.calcdettagli .tablecont table {float: left;margin: 5px 10px;width: 320px !important;}
						* html .calcdettagli .tablecont table td, * html .calcdettagli .tablecont table th {padding: 3px !important; }
						* html .calcdettagli .tablecont table {margin: 3px 0 0 -2px !important}
						.calcdettagli .tablecont table.valuta {margin-top: 8px}
						.calcdettagli .tablecont table th {padding: 2px 5px; text-align:center; border-left: solid 1px #cacaca; font-weight: normal; color: #999}
						.calcdettagli .tablecont table td {border-top: solid 1px #d0d0d0; padding: 2px 5px; text-align:center; border-left: solid 1px #d0d0d0; color: #6f8f0a; font-weight: bold}
						.calcdettagli .tablecont table .first {border-left: none !important; font-weight: bold; color: #666; text-align: left;}
						.calcdettagli .tablecont table.valuta .first {width: 90px} 
						.calcdettagli .corpo {clear: left;display: block;float: left;height: 95px;width: 382px;}
						#maincontent .calcdettagli .corpo p {padding: 13px 19px 0}
						#maincontent .calcdettagli .filettobutton {background: url("/img/str_filettoservizi.gif") repeat-x scroll 0 15px transparent; float: left; margin: 0 0 0 18px !important;padding: 0; width: 342px}
						#maincontent .calcdettagli .filettobutton .greenbutton {margin-right: 7px}
					
					</style>
					<div id="calcinv_pre">
						<img src="/img/calcinv_front.jpg" usemap="#fpmap">
						<map id="fpmap" name ="fpmap">
							<area shape="rect" coords="130,186,322,225" href="javascript:;" alt="Calcola subito" title="Calcola subito" onclick="calcinvStart();" />
						</map>
						</img>
					</div>
					<div id="calcinv" style="display: none">
						<div id="calcinv_home">
							<form autocomplete="off" action="javascript:;">
							<div id="calcinv_console">
								<a href="javascript:;" onclick="plusMin(this)" class="minus disabled" id="plusminmin" title="Lorem ipsum">&nbsp;</a>
								<input type="" name="" onchange="calcolaInve();" onkeyup="checkIntero(this); checkPlusMin(this.value); calcolaInve();" id="calcolaInveField" maxlength="7">
								<a href="javascript:;" class="plus" onclick="plusMin(this)"id="plusminplus" title="Lorem ipsum">&nbsp;</a>
							</div>
							</form>
							<div id="contlin" class="contbox">
								<a href="javascript:;" id="labelLin" onclick="calcInv_home.hide();calcTables (); calcInv_dett_lin.show();" title="Lorem ipsum"><span>Linee vincolate <img src="/img/ico2or_freccia.gif"></span></a>
								<div id="calcinv_lin">
									<div class="invbox" style="display:none" id="boxlin_03"></div>
									<div class="invbox" style="display:none" id="boxlin_06"></div>
									<div class="invbox" style="display:none" id="boxlin_09"></div>
									<div class="invbox" style="display:none" id="boxlin_12"></div>
								</div>
							</div>
							<div id="contpct" class="contbox">
								<a href="javascript:;" id="labelPct" onclick="calcInv_home.hide();calcTables (); calcInv_dett_pct.show();" title="Lorem ipsum"><span>Pronti contro termine <img src="/img/ico2or_freccia.gif"></span></a>
								<div id="calcinv_pct">
									<div class="invbox" style="display:none" id="boxpct_03"></div>
									<div class="invbox" style="display:none" id="boxpct_06"></div>
									<div class="invbox" style="display:none" id="boxpct_09"></div>
									<div class="invbox" style="display:none" id="boxpct_12"></div>
								</div>
							</div>
						</div>
						<!-- DETTAGLIO LINEE -->
						<div id="calcinv_dett_lin" class="calcdettagli" style="display:none">
							<h2><img src="/img/calcinv_tit_lin.gif" alt="Linee vincolate"></h2>
							<a href="javascript:;" onclick="calcInv_dett_lin.hide(); calcInv_home.show();" class="chiudibutton">&nbsp;</a>
							<div class="tablecont">
								<table class="base interessi" cellspacing="0" cellpadding="0" id="calcint_lin_table">
									<tr>
										<th class="first">&nbsp;</th>
										<th id="calcint_lin_th_3">3 mesi</th>
										<th id="calcint_lin_th_6">6 mesi</th>
										<th id="calcint_lin_th_9">9 mesi</th>
										<th id="calcint_lin_th_12">12 mesi</th>
									</tr>
									<tr>
										<td class="first">Interesse netto</td>
										<td id="calcint_lin_netto_tr_3">-</td>
										<td id="calcint_lin_netto_tr_6">-</td>
										<td id="calcint_lin_netto_tr_9">-</td>
										<td id="calcint_lin_netto_tr_12">-</td>
									</tr>
									<tr>
										<td class="first">Interesse lordo</td>
										<td id="calcint_lin_lordo_tr_3">-</td>
										<td id="calcint_lin_lordo_tr_6">-</td>
										<td id="calcint_lin_lordo_tr_9">-</td>
										<td id="calcint_lin_lordo_tr_12">-</td>
									</tr>
								</table>
								
								<table class="base valuta" cellspacing="0" cellpadding="0" id="calcint_lin_value" style="display:none">
									<tr>
										<th class="first">Valore investimento</th>
										<th id="calcint_lin_th_val_3">3 mesi</th>
										<th id="calcint_lin_th_val_6">6 mesi</th>
										<th id="calcint_lin_th_val_9">9 mesi</th>
										<th id="calcint_lin_th_val_12">12 mesi</th>
									</tr>
									<tr>
										<td class="first" id="calcint_lin_value_tr">-</td>
										<td id="calcint_lin_value_td_3">-</td>
										<td id="calcint_lin_value_td_6">-</td>
										<td id="calcint_lin_value_td_9">-</td>
										<td id="calcint_lin_value_td_12">-</td>
									</tr>
								</table>
							</div>
							<div class="corpo">
							<p>
								Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. 
							</p>
							</div>
							<div class="filettobutton">
								<a class="greenbutton" href="#" alt="vai alla sezione"><span>vai alla sezione</span></a>
							</div>
						</div>
						<!-- DETTAGLIO PCT -->
						<div id="calcinv_dett_pct" class="calcdettagli" style="display:none">
							<h2><img src="/img/calcinv_tit_pct.gif" alt="Pronti contro termine"></h2>
							<a href="javascript:;" onclick="calcInv_dett_pct.hide(); calcInv_home.show();" class="chiudibutton">&nbsp;</a>
							<div class="tablecont">
								<table class="base interessi" cellspacing="0" cellpadding="0" id="calcint_pct_table">
									<tr>
										<th class="first">&nbsp;</th>
										<th id="calcint_pct_th_3">3 mesi</th>
										<th id="calcint_pct_th_6">6 mesi</th>
										<th id="calcint_pct_th_9">9 mesi</th>
										<th id="calcint_pct_th_12">12 mesi</th>
									</tr>
									<tr>
										<td class="first">Interesse netto</td>
										<td id="calcint_pct_netto_tr_3">-</td>
										<td id="calcint_pct_netto_tr_6">-</td>
										<td id="calcint_pct_netto_tr_9">-</td>
										<td id="calcint_pct_netto_tr_12">-</td>
									</tr>
									<tr>
										<td class="first">Interesse lordo</td>
										<td id="calcint_pct_lordo_tr_3">-</td>
										<td id="calcint_pct_lordo_tr_6">-</td>
										<td id="calcint_pct_lordo_tr_9">-</td>
										<td id="calcint_pct_lordo_tr_12">-</td>
									</tr>
								</table>
								<table class="base valuta" cellspacing="0" cellpadding="0" id="calcint_pct_value" style="display:none">
									<tr>
										<th class="first">Valore investimento</th>
										<th id="calcint_pct_th_val_3">3 mesi</th>
										<th id="calcint_pct_th_val_6">6 mesi</th>
										<th id="calcint_pct_th_val_9">9 mesi</th>
										<th id="calcint_pct_th_val_12">12 mesi</th>
									</tr>
									<tr>
										<td class="first" id="calcint_pct_value_tr">-</td>
										<td id="calcint_pct_value_td_3">-</td>
										<td id="calcint_pct_value_td_6">-</td>
										<td id="calcint_pct_value_td_9">-</td>
										<td id="calcint_pct_value_td_12">-</td>
									</tr>
								</table>
							</div>
							<div class="corpo">
							<p>
								Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude. 
							</p>
							</div>
							<div class="filettobutton">
								<a class="greenbutton" href="#" alt="vai alla sezione"><span>vai alla sezione</span></a>
							</div>
						</div>					</div>
				<!-- FINE BLOCCO SIMULA -->
				</div>
		</div>
		<div id="maincontentobjectmenu"></div>
	</div>
	<!-- /visual dinamico -->
	<p>
		Lorem ipsum dolor sit amet consectetur adipiscing elit summa cum laude.
	</p>
	<!-- OGGETTO TABBED -->
	<style>
		
		#specialboxTab {float:left; clear:left; margin: 0 13px 20px; display:block}
		* html #specialboxTab {margin-left: 6px}
		#specialboxTab .upTab {float:left; display:block; clear:left; width: 402px; height: 23px; background: transparent url(/img/specialtab_tabbg.gif) no-repeat 0 0}
		#specialboxTab .upTab a {margin-right: -7px; float:left; display:block; width: 145px; height: 23px; line-height: 23px; text-decoration:none !important; font-weight:bold}
		#specialboxTab .upTab a span {padding: 0 11px; text-decoration: none !important; color: #999}
		#specialboxTab .upTab a.selected {background: transparent url(/img/specialtab_tabbg_selected.gif) no-repeat 0 0}
		#specialboxTab .upTab a.selected span {color: #6f8f0a}
		#specialboxTab .specialboxContent {float:left; clear:left;}
		#specialboxTab .specialboxContent .cont {padding: 15px 0 0; background: transparent url(/img/specialtab_bg.gif) no-repeat 0 0; float:left; display:block; width: 406px}
		#specialboxTab .specialboxContent .cont p {padding: 0 11px 11px}
		#specialboxTab .specialboxContent .bottom {background: transparent url(/img/specialtab_bottom.gif) no-repeat 0 0; float:left; display:block; width: 406px; height: 20px}
		#specialboxTab .specialboxContent .bottom a {float:right; margin-right:30px}
		* html #specialboxTab .specialboxContent .bottom a {float:right; margin-right:15px !important}
		#specialboxTab .specialboxContent .cont h4 {float: left; display:block; padding: 20px 15px 10px; clear:left}
		#specialboxTab .specialboxContent .cont .onleft, #specialboxTab .specialboxContent .cont .onright {float:left; display:block; padding-bottom: 10px}
		
	</style>
	<div id="specialboxTab">
		<div class="upTab">
			<a href="javascript:;" onclick="specialTabSelect(this);" class="selected" title="Portafogli modello"><span>Portafogli modello</span></a>
			<a href="javascript:;" onclick="specialTabSelect(this);" title="Top selection"><span>Top selection</span></a>
		</div>
		<div class="specialboxContent">
			<div class="specialboxContenuto" id="">
				<div class="cont">
					<p>
						Vuoi costruire un portafoglio investendo su <strong>più fondi</strong>? Scopri i <strong>Portafogli Modello</strong>!<br>
						<br>
						E' la <strong>soluzione</strong> per chi desidera <strong>costruire</strong> e <strong>gestire</strong> un <strong>portafoglio diversificato</strong>, scegliendo tra <strong>cinque profili oggettivi d'investimento</strong>. 
					</p>
					<div class="onleft" style="padding: 0 0 0 20px">
						<img src="/img/specialtab_img_grafico.jpg">
					</div>
					<div class="onright" style="width:255px">
						<p>
							In base ai profili, hai a disposizione <strong>cinque Portafogli Modello</strong> da movimentare con la massima autonomia. 
 						</p>
						<ul class="flaglist">
							<li>I Portafogli Modello sono ripartiti su <strong>diverse asset class</strong> (azionario, obbligazionario e monetario) e aree geografiche;</li>
							<li>il livello di rischio dei portafogli &egrave; <strong>costantemente monitorato</strong> in funzione dell'andamento dei mercati;</li>
							<li>le revisioni periodiche tengono sotto controllo il <strong>rischio complessivo</strong> di portafoglio e tendono a <strong>ottimizzare il rendimento</strong>;</li>
						</ul>
					</div>
				</div>
				<div class="bottom">
					<a class="greenbutton" href="#"><span>vai alla sezione</span></a>
				</div>
			</div>
			<div class="specialboxContenuto" style="display:none" id="">
				<div class="cont">
					<div class="onleft" style="width:145px; padding-bottom:0">
					<p>
						Vuoi investire in <strong>un solo fondo</strong>?<br>
						<br>
						Scopri la <strong>Top Selection</strong>.<br>
						<br>
						E' la <strong>soluzione</strong> adatta a chi desidera investire <strpong>piccoli importi</strong>, operare poco frequentemente e minimizzare la complessit&agrave; del portafoglio, senza rinunciare alla <strong>gestione attiva</strong> e alla <strong>diversificazione</strong>. <br>
					</p>
					</div>
					<div class="onright" style="padding: 0 5px 0 0">
						<img src="/img/specialtab_img_topsel.jpg">
					</div>
					<ul class="flaglist">
						<li>Hai a disposizione la selezione dei <strong>migliori fondi</strong> e comparti di Sicav <strong>collocati da Webank</strong>;</li>
						<li>I fondi che costituiscono la Top Selection sono <strong>ordinati per livello di rischio/rendimento</strong>;</li>
						<li>I fondi selezionati consentono di realizzare un'<strong>asset allocation diversificata</strong>.</li>
					</ul>
				</div>
				<div class="bottom">
					<a class="greenbutton" href="#" title="vai alla sezione"><span>vai alla sezione</span></a>
				</div>
			</div>
		</div>
	</div>
	<br class="clear">
	<!-- FINE OGGETTO TAB -->
</div>
<?php 
	virtual ("/librerie/php/str_right_pub_wb.php");
?>
