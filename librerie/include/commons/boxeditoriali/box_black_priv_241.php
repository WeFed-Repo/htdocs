		<div class="preventivatore">
			<div><img src="/img/ret/img_preventivatore_top.gif"></div>
			<div class="preventivatoreMiddle">
				<div class="conto"><span class="fr">Conto corrente</span>
					<!-- === org.apache.jsp.banking.accountsListSelect_jsp === { -->
					<strong>CC 01099 0000023296 EUR</strong><input name="contoCorrente" type="hidden" id="contoCorrente" value="01099 - 0000023296 - EUR">
					<!-- } === org.apache.jsp.banking.accountsListSelect_jsp === -->
				</div>
					<div class="saldo">Saldo disponibile 
						<span class="saldover">
							1.142,06 &euro;
							<input type="hidden" id="saldoContabile" value="1142,1">
						</span>
					</div>
					<div class="filetto"></div>
					<div class="conto"><span class="fr2">Scegli il capitale da assicurare</span> 
						<span onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this); nascondi('lampa5');" onmouseout="removeUniqTooltip(event,this); vedi('lampa5');" class="uniqTooltipText nodotted" id="tooltip5">
							<span class="uniqTooltipPos"><img src="/img/ret/lampa_off.gif" id="lampa5" class="lampa"></span>
							<span class="uniqTooltipInnerHTML">
								Testo help capitale da assicurare
							</span>
						</span>
					</div>
					<br class="clear">

					<div id="prevenSlider" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
						<div id="prevenHandle" class="handle"></div>
						<a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
					</div>
					<div class="sliderVal svFirst sliderValOn">50.000 &euro;</div>	
					<div class="sliderVal svMid">100.000 &euro;</div>
					<div class="sliderVal svMid">150.000 &euro;</div>
					<div class="sliderVal svMid">200.000 &euro;</div>
					<div class="sliderVal svLast">250.000 &euro;</div>

					<div class="filetto"></div>

					<div class="conto"><span class="fr2">Durata della polizza</span> 
						<span onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this); nascondi('lampa5b');" onmouseout="removeUniqTooltip(event,this); vedi('lampa5b');" class="uniqTooltipText nodotted" id="tooltip5b">
							<span class="uniqTooltipPos"><img src="/img/ret/lampa_off.gif" id="lampa5b" class="lampa"></span>
							<span class="uniqTooltipInnerHTML">
								Testo help durata della polizza
							</span>
						</span>
					</div>
					<br class="clear">

					<div id="prevenSlider2" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
						<div id="prevenHandle" class="handle"></div>
						<a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"><span id="prevenVal2"></span></a>
					</div>
					<div class="sliderVal svFirst2">5</div>
					<div class="sliderVal svLast2"></div>
				
					<div class="filetto"></div>


					<div class="conto"><span class="fr2">Fumi?</span> 
						<span onmousemove="createUniqTooltip(event, this)" onmouseover="createUniqTooltip(event, this); nascondi('lampa5c');" onmouseout="removeUniqTooltip(event,this); vedi('lampa5c');" class="uniqTooltipText nodotted" id="tooltip5c">
							<span class="uniqTooltipPos"><img src="/img/ret/lampa_off.gif" id="lampa5c" class="lampa"></span>
							<span class="uniqTooltipInnerHTML">
								Testo help fumatore
							</span>
						</span>
					</div>
					<br class="clear"><br>

					<input type="hidden" id="fumatore" name="fumatore" value="">		
					<div class="validaz">
						<a id="fumatoreNo" href="javascript:;"><img src="/img/ret/btn_preventivatore_off.gif">&nbsp;&nbsp;Non Fumo</a>
						<a id="fumatore20" href="javascript:;"><img src="/img/ret/btn_preventivatore_off.gif">&nbsp;&nbsp;Fino a 20 sigarette al giorno</a>
						<a id="fumatore99" href="javascript:;"><img src="/img/ret/btn_preventivatore_off.gif">&nbsp;&nbsp;Pi&ugrave; di 20 sigarette al giorno</a>
					</div>
					<br class="clear">
					<br>
				
					<div class="filetto"></div>
					<div id="calcolaWrap" class="aButtoncons formCenteredBtn">
						<a id="calcola" href="javascript:;" class="aButton buttDis"><span>calcola</span></a>
					</div>
					<br class="clear">
				</div>
			<div><img src="/img/ret/img_preventivatore_bottom.gif"></div>
		</div>
		<div id="prevenLinguettaTop" class="preventivatoreSubTop"><img src="/img/ret/img_preventivatoreSub_top.gif"></div>
		<div id="prevenLinguettaContent" class="preventivatoreSubMiddle" style="display:none">
			<div>
				<div id="subLeft" class="subLeft">	
					<span class="impRata"><span class="valRata">---</span>&nbsp;&euro;</span>&nbsp;<span class="perRata">/&nbsp;mese</span>
					<a class="full" href="javascript:showPremiPdf()">Visualizza l'importo dei premi per gli anni successivi</a>				
					<p id="diversaSoluz" class="nopadd">Se vuoi una soluzione diversa, cambia il capitale<br>
						assicurato per scoprire un nuovo preventivo.</p>
					<div class="clear"></div>				
					<div class="filetto"></div>	
					<div class="clear"></div>				
					<img src="/img/ret/img_or_cellulare.gif">
						<p>Tieni a portata di mano il tuo cellulare,<br> 
							ti servir&agrave; per confermare l'acquisto.
						</p>
					<div class="clear"></div>
				</div>
				<div class="subRight">
					<div class="filetto"></div>	
					<br class="clear">	
					<div class="boxPrev">
						<div><img src="/img/ret/str_prev_bgboxRight.gif"></div>
						<div class="boxPrevMdl">
							<ul>
								<li><span id="capitaleAssicuratoHtml"></span>&nbsp;&euro; capitale assicurato</li>
								<li>Acquisto con addebito diretto in c/c</li>	
								<li>Pagamento per l'intero anno</li>
							</ul>
							<ul class="right">
								<li>Prezzo bloccato</li>
								<li>Importo detraibile al 19%</li>
							</ul>
							<div class="clear"></div>	
						</div>
						<div><img src="/img/ret/str_prev_bgboxRight_bot.gif"></div>
					</div>
					<br class="clear">
					<div class="btnPrev">
						<div class="btnCont">
							<div id="pagMese"><p>Pagamento <strong>mensile</strong><br>
								<strong>(<span class="btnMese">---</span>&nbsp;&euro;/mese)</strong></p>
								<a id="pagMeseBtn" title="procedi" href="javascript:;">
									<img class="btnProcedi" src="/img/ret/btn_scegli_wecare.gif" alt="">
								</a>
							</div>
							<div style="width:86px; float:left; height:40px;"></div>
							<div id="pagAnno"><p>Pagamento <strong>annuale</strong><br>
								<strong>(<span class="btnAnno">---</span>&nbsp;&euro;/anno)</strong></p>
								<a id="pagAnnoBtn" title="procedi" href="javascript:;">
									<img class="btnProcedi" src="/img/ret/btn_scegli_wecare.gif" alt="">
								</a>
							</div>
							<div class="clear"></div>
						</div>
					</div>	
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="preventivatoreSubBottom"></div>
