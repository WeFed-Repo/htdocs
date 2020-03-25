<!-- NUOVO STILE TOOLBOX -->
<!-- TOOLBOX -->
<div id="fixedtools" class="fixedconsoletools">
	<div class="console" id="toolconsole">
		<!-- TOOLTIP -->
		<div class="contTool" style="display:none;">
			<span class="consoletooltip"><span></span><img src="/img/ret/str_console_tooltip_right.gif" alt="" /></span>
		</div>
		<!-- TOOLTIP -->
		
		<?php if ($bank != "bm" && $bank == "webank")
				{
				?>
		<a href="javascript:;" onclick="vaOpen()" class="tooltcons toolassistente"></a>
		<?php } ?>
		
		<?php if ($bank != "bm" && $bank != "webank")
				{
				?>
		<a href="javascript:;" onclick="vaOpen()" class="tooltcons toolassistente"></a>
		<?php } ?>
		
		
		<?php if ($bank == "webank")
				{
				?>
		<a href="javascript:;" class="tooltcons toolhelpwb toolhelp"></a>
		<?php } else { ?>		
		<a href="javascript:;" class="tooltcons toolhelp"></a>
		<?php } ?>

		<?php if ($bank == "webank")
				{
				?>
		<a href="javascript:;" onclick="opentool(2)" class="tooltcons toolrecallwb toolrecall"></a>
		<?php } else { ?>		
		<a href="javascript:;" onclick="opentool(2)" class="tooltcons toolrecall"></a>
		<?php } ?>			
		
		
		<?php if ($bank == "webank")
				{
				?>
		<div id="c2mToolbar"></div>
		<?php } 
		 if ($bank == "bpm")
				{
				?>
				<div id="vvcButton"></div>
				<script type="text/javascript" src="/js/priv_vivocha.js"></script>
		<?php }
		?>
		
		<?php if ($bank == "bm")
				{
				?><img src="/wscmn/img/str_toolbox_chat_bus.gif" class="consoletoolTop" />
		<?php } ?>		
		
		<?php if ($bank == "webank")
				{
				?>
				<a href="javascript:;" onclick="opentool(3)" class="tooltcons toolmailpec toolmail">
				<span class="" style="">999</span>
				</a>
		<?php } else { ?>		
				<a href="#1" class="tooltcons toolmail"></a>
		<?php } ?>		
		
		<?php if ($bank == "bpm")
				{
				?>
				<a href="javascript:;" onclick="opentool(9)" class="tooltcons toolagenzia"></a>
				<!--a class="tooltcons toolagenzia" onclick="window.open('connect.php?page=tpl_priv_popup2.php','winname','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=400,height=350');"></a-->
				
				<!--<a class="tooltcons toolagenzia" onclick="openPopUp('medium','connect.php?page=tpl_priv_popup.php')"></a>-->
			
		<?php } ?>	
		<span class="tooltcons toolbottom"></span>
	</div>
	
	<script type="text/javascript">
	function openChat(x)
	{
		if (x == 1)
		{
		//window.open('/nocommit/chat_chiusa.html', 'Chat', 'width=180,height=260,resizable=false');
		window.open('/librerie/include/chat/Client.htm', 'Chat', 'width=180,height=260,resizable=false');
		}
		else if (x == 2)
		{
		window.open('/librerie/include/chat/client_new.html', 'Chat', 'width=186,height=323,resizable=false');
		}
		else
		{
		window.open('/Clientchat2.html', 'Chat2', 'width=180,height=260,resizable=false');
		}
	}
	</script>
	<div class="toolcontainer">
		<!-- ASSISTENTE VIRTUALE OLD -->
		<div class="tool toollarge" id="tool1">
			<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle">Paolo, l'assistente virtuale</span><img src="/wscmn/img/ret/xtool.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
			</div>
			<div class="paolo">
				<iframe frameborder="0" src="/librerie/include/commons/toolbox/paolo.html" scrolling="no" style="width:344px; height: 140px; overflow: hidden !important; border:none; margin:0; padding:0;" class="paolo" id="paoloframe" name="paoloframe">Paolo</iframe>
			</div>
			<br class="clear" /><a href="javascript:;" onclick="restrictPaolo();" class="paoloswitch" id="paolocontrai"></a><a href="javascript:;" onclick="enlargePaolo();" class="paoloswitch" id="paoloespandi"></a>
		</div>
		<!-- / ASSISTENTE VIRTUALE OLD -->
		
		<!-- ASSISTENTE VIRTUALE 3D -->
		<div id="virtAss" style="display:none">
			<div id="vaExtended" style="display:none">
				<div class="vaExtTop">
					<a href="javascript:;" id="vaLinguetta" title="Espandi"></a>
				</div>
				<div id="vaExtConsole" style="display:none">
				</div>
				<div class="vaExtBody"></div>
			</div>
			<div class="vaContainer">
				<div class="vaTop">
					<span id="vaTitle">Paolo, l'assistente virtuale</span>
					<a href="javascript:;" class="vaChiudi" title="Chiudi">&nbsp;</a>
					<a href="javascript:;" class="vaWindow" title="Espandi/Riduci">&nbsp;</a>
				</div>
				<div class="vaFiletto" style="display:none"></div>
				<div class="vaBody">
					<div id="vaSpace"></div>
					<div class="vaConsole">
						<a href="javascript:;" class="vaAudio" title="Mute on/off"></a>
						<div id="vaSlider">
							<a href="javascript:;" id="vaSliderCursor" title="Volume"> </a>
						</div>
						<a id="vaTextControl" href="javascript:;"></a>
					</div>
					<div id="vaDialog">
					</div>
					<form autocomplete="off" id="vaFormTag" onsubmit="vaAsking(vaDomanda.val())" action="javascript:;" method="post">
					<div id="vaForm">
						<input type="text" id="vaDom" maxlength="200" name="campo" class="waiting" value="fammi una domanda..."/>
						<a title="Lorem ipsum" class="btnformright" href="javascript:;" id="vaAsking"><img alt="Chiedi" src="/img/ret/btn_left_ar.gif"/><span>chiedi</span><img alt="" src="/img/ret/btn_right_ar.gif"/></a>
					</div>
					</form>
					<br class="clear"/>
				</div>
				<div class="vaBottom"></div>
			</div>
		</div>
		<script type="text/javascript" src="/wscmn/js/ret/priv_va.js"></script>
		<!-- / ASSISTENTE VIRTUALE 3D -->
		
		<!-- TOOL 2 -->
		<div class="tool" id="tool2">
			<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle"></span><img src="/wscmn/img/ret/xtool2.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
			</div>
			<div class="toolmiddle" id="formtbxCallMeBack" style="min-height:314px;height:auto">
				<p class="operatori"><strong>Gli operatori del Customer Care ti richiamano quando vuoi tu.</strong></p>
				
				
				<form class="formoperatori" method="post" action="" id="tbxCallMeBack">
					<p><label>Tel.</label>
					<span class="alRgFields"><input type="text" size="4" maxlength="4" onclick="this.focus()"/><input type="text" maxlength="16" size="16" style="" onclick="this.focus()" /></span>
					</p>
					<p><label>Giorno</label>
					<span class="alRgFields"><select class="txtgiorno" name="giorno"><option selected="selected" value="uno">12/07/2007 - gio.</option><option value="due">13/07/2007 - ven.</option><option value="tre">16/07/2007 - lun.</option></select></span>					
					</p>
					<p><label>Fascia oraria</label>
					<span class="alRgFields"><select class="txtfascia" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select></span>					
					</p>
					<p><label><strong>Argomento</strong></label><br/>
						<input type="radio" value="1" class="rd" name="canale"/> 
						<span class="rdtxt">sportello e carte</span><br class="clear"/>
						<input type="radio" value="2" class="rd" name="canale"/> 
						<span class="rdtxt">trading</span><br class="clear"/>
						<input type="radio" value="3" class="rd" name="canale"/> 
						<span class="rdtxt">altro</span><br class="clear"/>
					</p>
					<p class="pswchiamata"><label><strong>Password chiamata</strong></label><br/>
						<input type="text" class="txtpswchiamata" maxlength="12" size="14" value="" id="password" name="password" onclick="this.focus()"/><br/>
						<span>(solo per info sul conto o sul deposito titoli)</span>
					</p>					
					<a href="javascript:;" onclick="setLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack'); setInterval(function(){stopLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack')},3000);" class="btnformright posiz" title="Invia"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>Invia</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a>
				
				</form>
			
			</div>
			<div class="toolfooter"></div>
			<br class="clear" />
		</div>
		
		<!-- TOOL 3 e 4 OGGI INESISTENTI 
		<div class="tool" id="tool3">
			<div class="dx handle"></div>
			<div class="sx"><p class="tooltit">Manda una email </p><div><form method="post" action=""><p class="txttiporich"><label>Tipo di richiesta o segnalazione</label></p><select name="siti"><option selected="selected" value="uno">Ass.za procedure finanziarie</option><option value="due">Ass.za procedure bancarie</option><option value="tre">Assistenza tecnica</option><option value="quattro">Informazioni commerciali</option><option value="cinque">Suggerimenti/reclami</option><option value="tre">Altro</option></select><br/><br/><label class="txtscrivimess">Scrivi il messaggio</label><textarea></textarea><br /><br /><div style="padding-left:8px"><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>Cancella</span><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div><div style="float:right;padding-right:8px"><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>Invia</span><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div></form></div>
		<br /><br /><br />
		</div>
			<br class="clear" />
		</div>
		
		
		<div class="tool" id="tool4">
			<div class="dx handle"><img src="/img/ret/xtool.gif" onclick="closetools()" class="close" /></div>
			<div class="sx"><div><iframe frameborder="0" style="margin:0;padding:0;border:none" src="Clientchat2.html">Chat</iframe>
				</div>
			</div>
			<br class="clear" />
		</div>
		 -->
		 
		 
		 <div class="tool toolmail" id="tool3">
			<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="handle tooltit">Lorem ipsum lorem ipsum</span><img src="/wscmn/img/ret/xtool2.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
			</div>
			<div class="toolmiddle">
				<a href=""><img src="/img/ret/btn_tool_pec.gif" alt="" /></a>
				<a href=""><img src="/img/ret/btn_tool_scrivi.gif" alt="" /></a>
			</div>
			<div class="toolfooter"></div>
			<br class="clear" />
		</div>
		 
		
		<!-- TOOL 6 -->
		<div class="tool" id="tool6">
			
				<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle">Faq</span>
				<img src="/wscmn/img/ret/xtool.gif" onclick="closetools()" class="close"  alt="Chiudi" title="Chiudi"/>
				</div>
			<div> 
			<div class="dxboxtools6b"> 
	        <p class="txtdxboxtools6"><b>Titolo</b></p>
			<div class="faq">
	        <div class="faqoff"> 
	          <p onclick="this.parentNode.className=(this.parentNode.className=='faqoff')?'faqon':'faqoff'" class="clic"><a href="#1">Domanda della prima FAQ?</a></p>
	          <div class="faqcont">Testo della faq esploso Testo della faq esploso Testo 
	            della faq esploso Testo della faq esploso Testo della faq esploso <br />
	            Testo della faq esploso
	            <ul>
								<li>la classe CU di Bonus Malus (sia di provenienza, sia di assegnazione)</li> 
								<li>i sinistri avvenuti negli ultimi 5 anni "pagati" (quindi di tua responsabilità) e "riservati" (ancora in fase di definizione sulla responsabilità).</li> 
							</ul>
						</div>
	        </div>
	        <div class="faqoff"> 
	          <p onclick="this.parentNode.className=(this.parentNode.className=='faqoff')?'faqon':'faqoff'" class="clic"><a href="#1">Domanda 
	            della seconda FAQ? Domanda della seconda FAQ? Domanda della seconda 
	            FAQ?</a></p>
	          <p class="faqcont">Testo della faq esploso Testo della faq esploso Testo 
	            della faq esploso Testo della faq esploso Testo della faq esploso 
	            Testo della faq esploso</p>
	        </div>
	        <div class="faqoff"> 
	          <p onclick="this.parentNode.className=(this.parentNode.className=='faqoff')?'faqon':'faqoff'" class="clic"><a href="#1">Domanda 
	            della terza FAQ?</a></p>
	          <p class="faqcont">Testo della faq esploso Testo della faq esploso Testo 
	            della faq esploso Testo della faq esploso Testo della faq esploso 
	            Testo della faq esploso</p>
	        </div>
			</div>
	        <p><a class="altre" href="#1"><img src="/img/ret/bullet1.gif" alt=""/> Altre Faq</a></p>
	      </div>
				</div>
			
			<br class="clear" />
		</div>
		
		<!-- TOOL 7 -->
		<div class="tool" id="tool7b">
			<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle">Glossario</span>
				<img src="/wscmn/img/ret/xtool.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
			</div>
			<div><form class="boxtools7form" method="post" action="">
	        <p class="boxtools7form2">
	          <input type="text" class="boxtools7form3"/>
	          <a title="Lorem ipsum" class="btnevid1" href="#1"><img alt="" src="/img/ret/btn_left_sm1.gif"/><span>Invia</span><img alt="" src="/img/ret/btn_right_sm1.gif"/></a><br class="clear" /></p>
	      </form>
	      <br/>
		  
	      <div class="boxtools7form6">
	        <p><b>Lorem ipsum</b></p><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse 
	          sagittis ligula nec nisl. Vivamus a tortor. Maecenas adipiscing condimentum 
	          lectus. Mauris congue sapien semper turpis. Suspendisse dapibus. Integer 
	          quis tortor. Nunc at velit non mi rutrum sollicitudin. Mauris tellus. 
	          Aenean et est. Donec neque nulla, sodales eu, tincidunt id, egestas 
	          id, mi. Maecenas risus leo, nonummy ac, eleifend vel, vulputate sed, 
	          libero. Suspendisse viverra nibh nec sem.</p>    
		  		</div>
				</div>
			<br class="clear" />
		</div>
		
		<!-- TOOL 9 -->
		<div class="tool" id="tool9">
			<div class="toolhead toolhead9" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle tooltit9"></span><img src="/wscmn/img/ret/xtool2.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
			</div>
			<div class="toolmiddle" id="formtbxCallMeBack" style="min-height:274px;height:auto">
				<p class="operatori">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
				
				 
				
				<form class="formoperatori" method="post" action="" id="tbxCallMeBack">
				<script type="text/javascript">	$(function () {
				$("#datepickerTool").datepicker({
				showOn: "button",
				buttonImage: "/img/btn_pickdate_priv.gif",buttonImageOnly: 
				true,minDate: 1,
				//MxDate fissata solo come esempiomaxDate: "+1M +10D",
				//fissare maxDate alla scadenza del certificatodateFormat: "dd/mm/yy",
				showOtherMonths: true,
				beforeShow: function() {setTimeout(function() {$(".ui-datepicker").css("z-index", getNextHighestZindex());}, 10); }
				
				}).next(".ui-datepicker-trigger").css("float", "left");
				$("#datepickerTool").mask("99/99/9999");});
				</script>
					<p><label><strong>Numero cellulare</strong></label>
					<span class="alRgFields"><input type="text" maxlength="16" size="14" style="" onclick="this.focus()"/></span>				
					</p>
					<p style="float:left"><label style="float:left"><strong>Giorno</strong></label>
					<span class="alRgFields"><input type="text" class="withIco" id="datepickerTool" placeholder="gg/mm/aaaa" value="22/11/2013" style="float:left;margin:-2px 0 0 5px;width:70px;margin-left:5px"></span>					
					</p>
					<p><label><strong>Fascia oraria</strong></label>
					<span class="alRgFields"><select class="txtfascia" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select></span>
					</p>
					<p><label><strong>Agenzia</strong></label> &nbsp; Nome e Numero Agenzia</p>
					<p><label><strong>Agenzia</strong></label>
					<span class="alRgFields"><select class="txtagenzia" name="fascia"><option selected="selected" value="Lorem_ipsum">Lorem ipsum dolor 1</option><option value="Lorem_ipsum">Lorem ipsum dolor 2</option><option value="Lorem_ipsum">Lorem ipsum dolor 3</option></select></span>			
					</p>
					<p><label><strong>Argomento</strong></label>
					<span class="alRgFields"><select class="txtargomento" name="fascia"><option selected="selected" value="Lorem_ipsum">Lorem ipsum 1</option><option value="Lorem_ipsum">Lorem ipsum 2</option><option value="Lorem_ipsum">Lorem ipsum 3</option></select></span>					
					</p>
					<a href="javascript:;" onclick="setLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack'); setInterval(function(){stopLoading('tool2Img', 'formtbxCallMeBack', 'tbxCallMeBack')},3000);" class="btnformright posiz" title="Invia"><img src="/img/ret/btn_left_ar.gif" alt="" /><span>Lorem ipsum</span><img src="/img/ret/btn_right_ar.gif" alt="" /></a>
				</form>
			</div>
			<div class="toolfooter"></div>
			<br class="clear" />
		</div>
	</div>
</div>
<!-- FINE TOOLBOX -->