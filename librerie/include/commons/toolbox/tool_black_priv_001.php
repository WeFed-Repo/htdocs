<!-- NUOVO STILE TOOLBOX -->
<!-- TOOLBOX -->
<div id="fixedtools">
	<div class="console" id="toolconsole" onmouseout="if (thisMovie('flash_toolbox')) thisMovie('flash_toolbox').userOut();" onmouseover="if (thisMovie('flash_toolbox')) thisMovie('flash_toolbox').userOver();">
		<!-- VERSIONE PER BROWSER SENZA PLUGIN: LASCIO I LINK -->
		<!-- <a id="toolbutton1" href="javascript:;" onclick="opentool(1,'enlarged')" class="label tool1" title="" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span><strong>Paolo</strong>,<br />l'assistente virtuale</span></span></a>-->
		<a id="toolbutton1" href="javascript:;" onclick="vaOpen()" class="label tool1" title="" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span><strong>Paolo</strong>,<br />l'assistente virtuale</span></span></a>
		<a id="toolbutton2" href="javascript:;" onclick="opentool(2)" class="label tool2 label2" title="Help Center" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span><strong>Help Center</strong><br />ti richiama</span></span></a>		
		<a id="toolbutton4" href="javascript:;" onclick="openChat(1)" class="label tool4" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span><strong>Help Center</strong><br />in chat</span></span></a>
		<a id="toolbutton3" href="#1" class="label tool3" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span>Manda una e-mail</span></span></a>
		<a id="toolbutton6" href="javascript:;" onclick="opentool(6)" class="label tool6" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span>FAQ</span></span></a>
		<a id="toolbutton7" href="javascript:;" onclick="opentool(7)" class="label tool7" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span>Glossario</span></span></a>
		<a href="javascript:;" class="label sicurezza" onmouseout="hideTooltip(this);" onmouseover="showTooltip(this,event);"><span style="margin-top:0; top:0; left:-211px; visibility: hidden;" class="tooltip"><span>Sicurezza</span></span><br><br></a>
		<!-- FINE VERSIONE PER BROWSER SENZA PLUGIN: LASCIO I LINK ORIGINALI -->
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
	
	<?php
	
	switch ($bank) 
	{
		case "webank":
			$paolocolor = "0x8AB10B";
			break;
		case "bpm":
			$paolocolor = "0x007A63";
			break;
		case "bl":
			$paolocolor = "0x1C5E91";
			break;
		case "cra":
			$paolocolor = "0x00A651";
			break;
		case "bm":
			$paolocolor = "0x6B0B18";
			break;
	}
	?>
	//SWFObject console
	//se non e' IE 5
	if (!(navigator.appVersion.indexOf("MSIE 5")>=0))
	{
		var tool_bar = new SWFObject ("/wscmn/swf/toolbar.swf", "flash_toolbox", "65", "466", "8", "#dedede");
		tool_bar.addParam("wmode", "transparent");
		tool_bar.addParam("allowScriptAccess","always");
		tool_bar.addParam("quality", "high");
		tool_bar.addParam("FlashVars","xmlfile=/wscmn/swf/xml/toolbar_actions.xml&bgPaolo=<?php print($paolocolor); ?>");
		tool_bar.write("toolconsole");
	}
	</script>
	
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
					<span id="vaTitle"><img src="/wscmn/img/ret/va_title.gif"></span>
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
					<form autocomplete="off" id="vaFormTag" onsubmit="vaAsking(vaDomanda.value)" action="javascript:;" method="post">
					<div id="vaForm">
						<input type="text" id="vaDom" maxlength="200" name="campo" class="waiting" value="fammi una domanda...">
						<a title="Lorem ipsum" class="btnformright" href="javascript:;" id="vaAsking"><img alt="Chiedi" src="/img/ret/btn_left_ar.gif"><span>chiedi</span><img alt="" src="/img/ret/btn_right_ar.gif"></a>
					</div>
					</form>
					<br class="clear">
				</div>
				<div class="vaBottom"></div>
			</div>
		</div>
		<script type="text/javascript" src="/wscmn/js/ret/priv_va.js"></script>
		<!-- / ASSISTENTE VIRTUALE 3D -->
		
		<!-- TOOL 2 -->
		<div class="tool" id="tool2">
			<div class="toolhead" title="Lorem ipsum dolor sit amet consectetur adipiscing elit. Summa cum laude.">
				<span class="tooltit handle">Help center ti richiama</span><img src="/wscmn/img/ret/xtool.gif" onclick="closetools()" class="close" alt="Chiudi" title="Chiudi"/>
			</div>
			<div>
				<p class="operatori">Gli operatori del Customer Care ti richiamano quando vuoi tu.</p>
				<form class="formoperatori" method="" action="">
					<p><label>Tel.</label><input type="text" size="4" maxlength="4"/><input type="text" maxlength="16" size="16"/></p>
					<p><label>Giorno</label><select class="txtgiorno" name="giorno"><option selected="selected" value="uno">12/07/2007 - gio.</option><option value="due">13/07/2007 - ven.</option><option value="tre">16/07/2007 - lun.</option></select></p>
					<p><label>Fascia oraria</label><select class="txtfascia" name="fascia"><option selected="selected" value="uno">09.00 - 10.00</option><option value="due">10.00 - 11.00</option><option value="tre">11.00 - 12.00</option></select></p>
					<p><label>Psw chiamata</label><input type="text" class="txtpswchiamata" maxlength="12" size="14"/></p>
					<p class="txtsoloperinfo">( solo per info sul c/c )</p>
					<div style="float:right;padding-right:8px"><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>Invia</span><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div>
				</form>
			</div>
			<br /><br /><br />
			<br class="clear" />
		</div>
		
		<!-- TOOL 3 e 4 OGGI INESISTENTI 
		<div class="tool" id="tool3">
			<div class="dx handle"></div>
			<div class="sx"><p class="tooltit">Manda una email </p><div><form method="" action=""><p class="txttiporich"><label>Tipo di richiesta o segnalazione</label></p><select name="siti"><option selected="selected" value="uno">Ass.za procedure finanziarie</option><option value="due">Ass.za procedure bancarie</option><option value="tre">Assistenza tecnica</option><option value="quattro">Informazioni commerciali</option><option value="cinque">Suggerimenti/reclami</option><option value="tre">Altro</option></select><br/><br/><label class="txtscrivimess">Scrivi il messaggio</label><textarea></textarea><br /><br /><div style="padding-left:8px"><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>Cancella</span><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div><div style="float:right;padding-right:8px"><a href="#1" class="btnevid1" title="Lorem ipsum"><img src="/img/ret/btn_left_sm1.gif" alt="" /><span>Invia</span><img src="/img/ret/btn_right_sm1.gif" alt="" /></a></div></form></div>
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
	        <p><a class="altre" href="#1"><img src="/img/ret/bullet1.gif"/> Altre Faq</a></p>
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
			<div><form class="boxtools7form" method="" action="">
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
		
		<!-- TOOL 8 -->
		<style type="text/css">

  .vivocha_chatMessages_top, .vivocha_chatMessages_bottom, .vivocha_chatMessages_top_dis, .vivocha_chatMessages_bottom_dis {
   background: url(/chat/img/box_chat_body_top.gif) no-repeat 0px 0px;
   width:252px;
   height:7px;
   float:left;
  }
  *html .vivocha_chatMessages_top, .vivocha_chatMessages_top_dis {
   overflow:hidden;
  }
  
  .vivocha_chatMessages_bottom {
   background: url(/chat/img/box_chat_body_bottom.gif) no-repeat 0px 0px;
  }
  
  .vivocha_chatMessages_top_dis {
   background: url(/chat/img/box_chat_body_top_disabled.gif) no-repeat 0px 0px;
   }
   
   .vivocha_chatMessages_bottom_dis {
   background: url(/chat/img/box_chat_body_bottom_disabled.gif) no-repeat 0px 0px;
   }
  
  .vivocha_chatMessages_cont {
   width:252px;
   float:left;
   background:url("/chat/img/box_chat_body.gif") no-repeat scroll 0 0 transparent;
   }
  
  .space {
  height:5px;
  float:left;
  width:190px;
  overflow:hidden;
  }
  .spacetxt {
  height:10px;
  float:left;
  width:190px;
   overflow:hidden;
  }
  

  .vvc_lang {
   display: none
  }
 
  #vivocha_chatWrapper {
   z-index: 10000000;
   position: fixed;
   padding:0;
   margin:0;
   width: 100%;
   bottom: 0px;
   height: 1px;
   left: 0px
   }
  #vivocha_chatContainer {
   position: absolute;
   bottom: 0px;
   text-align: left;
   width: 280px;
   font-family:Tahoma,tahoma,Arial,Sans serif;
   font-size: 11px;
   background: transparent 0px 0px;
   color: #000;
  
   }
  *html #vivocha_chatContainer {
 
  overflow:hidden;
  
  }
  #vivocha_chatHeader {
   height: 54px;
   background: url(/chat/img/box_chat_top.png) no-repeat 0 0;
   /*background-color:transparent;*/
  }

  *html #vivocha_chatHeader {
    background: url(/chat/img/box_chat_top.gif) no-repeat 0 0;
    background-color:none !important;
  }
 #vivocha_chatBody 
  {
   margin: 0;
   padding:0 14px;
   background: url(/chat/img/box_chat_middle.gif) repeat-x 0 0 #eeeeee;
   width:250px;
   border-left:1px solid #d5d5d5;
   border-right:1px solid #d5d5d5;
   float:left;
  
  }
  *html #vivocha_chatBody {
  padding:0 13px;
  }
   *html #vivocha_chatWait {
  padding:0 13px;
 
  }
  
  #vivocha_chatBye {
   MARGIN: 10px
  }
  #vivocha_chatError, #vivocha_chatQuestionario {
   MARGIN: 10px
  }
  #vivocha_chatWait, #vivocha_chatError, #vivocha_chatBye, #vivocha_chatQuestionario {
  text-align: center;
  width:250px;
  padding:0 14px;
  background:url("/chat/img/box_chat_middle.gif") repeat-x scroll 0 0 #EEEEEE;
  border-right:1px solid #D5D5D5;
  border-left:1px solid #D5D5D5;
  float:left;
  margin:0;
  }
 #vivocha_chatQuestionario {
	text-align: left;
 }
 #vivocha_chatBye {
   TEXT-ALIGN: center;
   MIN-HEIGHT: 160px
  }
  
  #vivocha_chatWait img {
   height: 48px
  }
  .vivocha_chatBodyMessage p {
   margin: 2px 0px;
   font: 11px TTahoma,tahoma,Arial,Sans serif;
   color: #9f9e9e;
  }
  #vivocha_chatFooter {
   background: url(/chat/img/box_chat_bottom.png) no-repeat 0 0;
   width: 280px;
   height: 12px;
   float:left;
  }
 *html #vivocha_chatFooter {
   background: url(/chat/img/box_chat_bottom.gif) no-repeat 0 0;
   overflow:hidden;
   position:relative;
   margin-top:-6px;
   }

  
  .vivocha_chatClose {
   position: relative;
   margin: 19px 0px 0px;
   width: 9px;
   height: 9px;
   background: url(/chat/img/chat_close.gif) no-repeat center center;
   float: right;
   cursor: pointer;
   right: 20px
  }
 
  .vivocha_chatWriting {
   position: relative;
   width: 16px;
   height: 10px;
   top: 2px;
   left: 8px
  }
  .vivocha_writingDot {
   POSITION: relative;
   MARGIN: 2px;
   WIDTH: 8px;
   BACKGROUND: url(https://www.vivocha.com/vivocha_templates/img/dot_writing.gif) no-repeat;
   FLOAT: left;
   HEIGHT: 8px;
   opacity: .33
  }
 
  .vivocha_chatMessages 
  {
	padding:0;
	margin:0;
	padding:0 5px 0 8px;
    height: 182px;
    overflow: auto;
    width:233px;
   }
  
  .vivocha_chatBodyMessage {
   width:233px;
   padding:47px 5px 0 8px;
   float:left;
   background:url("/chat/img/box_chat_body.gif") no-repeat scroll 0 0 transparent;
   margin:0;
   height:135px;
   overflow: auto;
   }
  
   #vivocha_chatQuestionario .vivocha_chatBodyMessage {
   padding:3px 5px 0 21px;
   height:255px;
	}
  .vivocha_chatTextarea, .vivocha_chatTextarea_dis {
   clear:left;
   padding:0;
   position: relative;
   margin:0;
   float:left;
   background:url("/chat/img/box_chat_body.gif") no-repeat scroll 0 0 transparent;
   padding:0 5px 0 8px;
   width:239px;
  }
  
  .vivocha_chatTextarea_dis {
   background:url("/chat/img/box_chat_body_dis.gif") repeat-y scroll 0 0 transparent;
  }
  
  .vivocha_chatTextarea textarea, .vivocha_chatTextarea_dis  textarea{
   font-family:Tahoma,tahoma,Arial,Sans serif;
   font-size:11px;
   padding:0;
  /*position: absolute;
   top: 0px;
   left:0;*/
   border:0 !important;
   margin: 0px;
   width: 238px;
   height: 53px;
   overflow:auto;
   background: transparent;
  
  }
  .vivocha_chatSendBtn, .vivocha_chatSendBtn_dis {
   text-align: center;
   margin: 11px 0 0 0;
   cursor: pointer;
   float:left;
   width:252px;
   padding-bottom:2px;
   background-color:#eee;
   overflow:hidden;
  
  }
  *html .vivocha_chatSendBtn, *html .vivocha_chatSendBtn_dis {
  margin: 5px 0 0 0;
  
  }
  .vivocha_chatSendBtn BUTTON {
   WIDTH: 60px
  }
  .vivocha_routePoint {
   color:#808080;
   font-weight: normal;
   font-family:Tahoma,tahoma,Arial,Sans serif;
   font-size:11px;  
   border-bottom: 1px solid #ececec;  
   display:block;
   padding-bottom:9px;   
  }
  .vivocha_chatAgent {
   font-weight: bold;
   font-family:Tahoma,tahoma,Arial,Sans serif;
   font-size:11px;
   color:#6f8f0a;
   clear:left;
  }
  .vivocha_chatCustomer {
   font-weight: bold;
   font-family:Tahoma,tahoma,Arial,Sans serif;
   color: #000;
   font-size:11px;
   clear:left;
  }
  
  #vivocha_chatError .vivocha_chatClose, #vivocha_chatBye .vivocha_chatClose, #vivocha_chatQuestionario .vivocha_chatClose {
   background: none;
   width:auto;
   height:21px;
   font-weight:normal;
   color: #6f8f0a;
   font-family:Tahoma,tahoma,Arial,Sans serif;
   font-size:11px;
   padding:5px 0 0 0;
   text-decoration: underline;
   margin:0 auto;
   float:none;
   right:0;
  }
  
  .vivocha_button {
   background: url(/chat/img/btn_invia_bg.gif) no-repeat 0 0;
   width:67px;
   height:21px;
   font-weight:bold;
   color: #fff;
   font-family:Tahoma,tahoma,Arial,Sans serif;
   font-size:11px;
   padding:5px 0 0 0;
   text-decoration: none;
   margin:0 auto;
  }
  .vivocha_chatSendBtn_dis .vivocha_button {
   background: url(/chat/img/btn_invia_bg_dis.gif) no-repeat 0 0;
   color:#eeeeee;
   }
   .vivocha_chatSendBtn_dis .vivocha_button:hover {
   cursor:default;
   }
  .vvc_lang {
   display: none;
  }
  .inputRow  input{
   margin:0 0 0 8px;
   padding:0;
   width:15px;
   height:15px;
  }
  .inputRow {
  width:210px;
  margin-bottom:10px;
  padding-top:6px;
  height:20px;
  }
  .inputRow.ottima {
   background: url(/chat/img/input_ottima.gif) no-repeat 0 0;
   color:#eeeeee;
 
  }
   .inputRow.buona {
   background: url(/chat/img/input_buona.gif) no-repeat 0 0;
   color:#eeeeee;
 
  }
   .inputRow.sufficiente {
   background: url(/chat/img/input_sufficiente.gif) no-repeat 0 0;
   color:#eeeeee;
  
  }
   .inputRow.insufficiente {
   background: url(/chat/img/input_insufficiente.gif) no-repeat 0 0;
   color:#eeeeee;
  
  }
   .inputRow.norisp 
   {
   background: url(/chat/img/input_norisp.gif) no-repeat 0 0;
   color:#eeeeee;
   
   }
   #vivocha_chatQuestionario form
   {
  float:left;
   }
   #vivocha_chatQuestionario .vivocha_chatMessages_cont p {line-height:13px;}
  p.bottom {padding-top:3px; padding-bottom:9px;}
  #vivocha_chatQuestionario .vivocha_chatSendBtn {padding-bottom:0px;}
  *html #vivocha_chatQuestionario .vivocha_chatSendBtn {height:35px;}
 </style>
		
		
		
		<div class="tool" id="tool7" style="width:280px">
			<div id="vivocha_chatWrapper">
				<div id="vivocha_chatContainer">
					<div id="vivocha_chatHeader">
						<span class="vivocha_chatClose"></span>
					</div>
					
					<!--blocco loading -->
					<div style="display: block" id="vivocha_chatWait" class="vivocha_chatBody">
						<div class="vivocha_chatMessages_top"></div>
						<div class="vivocha_chatMessages_cont">	
							<div class="vivocha_chatBodyMessage">
								<img alt="" src="/chat/img/loading.gif" /> 
								<p style="display: block" lang="IT" class="vvc_lang">
									Loading
								</p>
							</div>
						</div>
						<div class="vivocha_chatMessages_bottom"></div>
						<div class="space"></div>
						<div class="vivocha_chatMessages_top_dis"></div>
						<div class="vivocha_chatTextarea_dis">
							<textarea id="vivocha_chatTextarea" style="" readonly="readonly">	 </textarea> 
						</div>
						<div class="vivocha_chatMessages_bottom_dis"></div>
						<div class="vivocha_chatSendBtn_dis">
							<span style="display: block" lang="IT" class="vivocha_button vvc_lang">Invia</span> <SPAN lang="EN" class="vivocha_button vvc_lang">Send</SPAN> 
						</div>
					</div>
					<!--fine blocco loading -->
					
					
					<!--blocco di conversazione -->
					<div style="display: none" id="vivocha_chatBody" class="vivocha_chatBody">
						<div class="vivocha_chatMessages_top"></div>
						<div class="vivocha_chatMessages_cont">	
							<div class="vivocha_chatMessages">
								<span class="vivocha_routePoint"><strong>Grazie per l'attesa,</strong> a breve sarà in contatto con un nostro operatore.</span>
								<span class="space"></span>
							</div>
						</div>
						<div class="vivocha_chatMessages_bottom"></div>
						<div class="space"></div>
						<div class="vivocha_chatMessages_top"></div>
						<div class="vivocha_chatTextarea">
							<textarea style="background: transaprent" id="vivocha_chatTextarea">
							</textarea> 
						</div>
						<div class="vivocha_chatMessages_bottom"></div>
						<div class="vivocha_chatWriting">
							<img src="img/matita_animazione.gif" alt=""/>
						</div>
						<div class="vivocha_chatSendBtn">
							<span style="display: block" lang="IT" class="vivocha_button vvc_lang">invia</span>
						</div>
					</div>
					<!--fine blocco di conversazione -->
					<div id="vivocha_chatFooter"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FINE TOOLBOX -->