<script type="text/javascript">
/*PEC carousel */ 
//funzione che richiama XML in pagina al load  da personalizzare con percorso e elemento da aprire
initAjaxCar = function(){
   setLoadingOnObject('#carouselMail');
   //recuperare testo mail dinamicamente qui lo fisso in maniera statica:
   var testoMail = $('#htmlEsempio').html();
   //var testoMail = '<p>Gentile Mario Rossi,<br>Carlo Bianchi, cliente del nostro servizio di internet banking, le comunica di aver ordinato un bonifico a suo favore.<br clear="all"><br>Carlo Bianchi le invia anche il seguente messaggio:   <br>Nunc vel sem. Nullam pulvinar, leo non tincidunt convallis, dolor sapien consequat dui, a dignissim nibh felis eget nulla. Suspendisse potenti. Sed urna ligula, volutpat ac, lacinia non; placerat a,. </p><p>Un saluto cordiale.<br>Webank</p><table cellspacing="0" cellpadding="0" border="0" style="font: normal 9.5pt helvetica,verdana,sans-serif;color:#000;width:100%;margin-top:20px;"><tbody><tr><td style="background: #6F8E0A;color:#fff;font-weight:bold;padding: 0 4px;">MACRO ASSET CLASS</td><td style="background: #666666;" class="testata">Peso</td><td style="background: #666666;" class="testata">Asset Class</td><td style="background: #666666;" class="testata">Peso</td>       </tr><tr><td style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important" class="celle" rowspan="3">MACRO ASSET CLASS	10</td><td style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right" class="celle">9</td><td style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;" class="celle">Asset Class</td><td style="border:1px solid #666666;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right" class="celle">10,51</td></tr></tbody></table><div class="mutuitrasp"><div class="filettoGenericoOrizzontale02"></div><ul><li><a href="#">Lorem ipsum</a></li><li><a href="#">Lorem ipsum</a></li></ul><div class="filettoGenericoOrizzontale02"></div></div>'
   var url = 'http://libreriewebank/xml/inbox.xml',
   AjaxUrl = url,
   parameters = {
   };
   jqAJAXCall('post', 'xml', AjaxUrl, function (data) {writeTextMail(data,'elementToSwitch10',testoMail);FillSlide(data,'elementToSwitch10');}, loadDataFailure, parameters);
}
loadDataFailure  = function(){
}
updateAjaxCar = function(currentPosition){
   
   //recuperare testo mail dinamicamente qui lo fisso in maniera statica:
   var url = 'http://libreriewebank/xml/inbox.xml',
   AjaxUrl = url,
   parameters = {
   };
   setLoadingOnObject('#carouselMail');
   jqAJAXCall('post', 'xml', AjaxUrl, function (data) {
   pecUid=$(data).find('pecUid').eq(currentPosition-1).text(); 
   var testoMail = '<p>testo <strong>mail'+ pecUid +'</strong></p>';
   writeTextMail(data,$(data).find('item').eq(currentPosition-1).attr('id'),testoMail);FillSlide(data,$(data).find('item').eq(currentPosition-1).attr('id')) }, loadDataFailure, parameters);
}
//funzione di sola simulazione chiama l'xml 3 
writeTextMail = function (data,IdMail,testoMail){
 mailToOpen = $(data).find('#'+IdMail);
  if(mailToOpen.length) 
	{
		  $(mailToOpen).find('testoMail').text(testoMail);
	}
}
</script>
<div id="htmlEsempio" style="display:none">
 <p>Gentile Mario Rossi,<br>Carlo Bianchi, cliente del nostro servizio di internet banking, le comunica di aver ordinato un bonifico a suo favore.<br clear="all"><br>Carlo Bianchi le invia anche il seguente messaggio:   <br>Nunc vel sem. Nullam pulvinar, leo non tincidunt convallis, dolor sapien consequat dui, a dignissim nibh felis eget nulla. Suspendisse potenti. Sed urna ligula, volutpat ac, lacinia non; placerat a,. </p><p>Un saluto cordiale.<br>Webank</p>
 <table border="0" style="width:100%;border-collapse:collapse;margin-top:20px;">
<tbody><tr><td style="background:#6F8E0A;height:14px;line-height:14pt;font-weight:bold;padding: 0 4px;color:#fff" colspan="2">LOREM IPSUM LOREM</td></tr>
<tr><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
<tr><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:none !important;width:88px">Lorem ipsum</td><td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-right:none !important">Lorem ipsum</td></tr>
</tbody></table>
<table cellspacing="0" cellpadding="0" border="0" style="width:100%;margin-top:20px;">
     <tbody><tr>
        <td style="background:#6F8E0A;height:14px;line-height:14pt;font-weight:bold;padding: 0 4px;color:#fff">MACRO ASSET CLASS</td>
        <td style="background:#6F8E0A;height:14px;line-height:11pt;font-weight:bold;padding: 0 4px;color:#fff">Peso</td>
        <td style="background:#6F8E0A;height:14px;line-height:11pt;font-weight:bold;padding: 0 4px;color:#fff">Asset Class</td>
        <td style="background:#6F8E0A;height:14px;line-height:11pt;font-weight:bold;padding: 0 4px;color:#fff">Peso</td>       

        
    </tr>
  	<tr>
        <td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-bottom:0!important" rowspan="3">MACRO ASSET CLASS	10</td>
         <td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">9</td>
        <td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">Asset Class</td>
        <td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">10,51</td>
       
    </tr>
    <tr>
         <td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right;">10</td>
		<td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">Lorem ispum dolor sit</td>
        <td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">xxx</td>
       
    </tr>
    <tr>
         <td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important; text-align:right;border-bottom:0!important">10</td>
		<td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important">Lorem ispum dolor sit</td>
        <td style="border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important; text-align:right;border-bottom:0!important">xxx</td>
        
    </tr>
	<tr>
        <td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;" rowspan="3">MACRO ASSET CLASS	10</td>
         <td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">9</td>
        <td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;">Asset Class</td>
        <td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right">10,51</td>
       
    </tr>
    <tr>
         <td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right" class="celle">10</td>
		<td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important;" class="celle">Lorem ispum dolor sit</td>
        <td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;border-bottom:0!important; text-align:right" class="celle">xxx</td>
       
    </tr>
    <tr>
         <td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important; text-align:right" class="celle">10</td>
		<td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important;" class="celle">Lorem ispum dolor sit</td>
        <td style="background-color:#EFEFEF;border:1px solid #6F8E0A;margin:0;padding:0 4px;height:14px;line-height:14pt;border-left:0!important; text-align:right" class="celle">xxx</td>
        
    </tr>
</tbody></table>
<table border="0" style="width:100%;border-collapse:collapse;margin-top:20px;">
<tr>
<td style="background:#6F8E0A;height:14px;line-height:14pt;font-weight:bold;padding: 0 4px;color:#fff">LOREM IPSUM LOREM</td></tr>
<tr>
	<td style="border:1px solid #6F8E0A;margin:0;padding:7px 4px;height:14px;line-height:14pt;border-left:none !important;border-right:none !important" class="celle">
		<ul>
		<li>asdasdasdasd 
		<a style="color:#FFFFFF!important;background-color:#6F8E0A;padding:2px 8px" href="#">sadasdasdas</a> 
		sadasdasdas asdasdasdasd sadasdasdas asdasdasdasd <strong>sadasdasdas asdasdasdasd</strong> sadasdasdas</li>
		<li>asdasdasdasd <a style="color:#6F8E0A;" href="#">sadasdasdas</a></li>
		</ul>
	</td>
</tr>
</table>

<br/>
 <div class="mutuitrasp">
 <div class="filettoGenericoOrizzontale02"></div>
 <ul><li><a href="#">Lorem ipsum</a></li><li><a href="#">Lorem ipsum</a></li></ul><div class="filettoGenericoOrizzontale02"></div></div>
</div>
<h1>Inbox</h1>
<div class="divtabellalist">

<table border="0" class="tabellalist">
	<tr>
		<td class="on first"><a href="#1" title="Lorem ipsum">Posta in arrivo</a></td>
		<td class="off"><a href="#1" title="Lorem ipsum lorem">Posta inviata</a></td>
		<td class="off"><a href="#1" title="Lorem ipsum">Scrivi a webank</a></td>
		<td class="end">&nbsp;</td>
	</tr>
</table>
</div>


<div class="mailContent contCarousel" id="carouselMail">
	<div class="mailCons">
		<div class="left"><a href="connect.php?page=str_interna_priv.php&tpl=tpl_priv_pec_inbox_ricevuta.php" class="btnMailin verde">Torna all'elenco messaggi</a></div>
		<div class="counterMail right"><span>Email <span class="currentMail"></span> di <span class="totaleMail"></span></span>
		<a href="javascript:;" class="arrowLeft"></a>
		<a href="javascript:;" class="arrowRight"></a>
		</div>
	</div>
	<div class="testoCarousel toread">
		<!--HTML VUOTO PER TESTO MAIL -->
		<div class="elementToSwitch visible">
			<div class="headerMail">
				<span class="attrToAdd">
					<span class="oggetto"><span class="spanAllegati"></span></span>
					<span class="spanAllegati"></span>
				</span>
				<br class="clear" />
				<img src="/img/ret/ico2inf_inbox.gif"  class="iconamail"/>
				<div class="dett">Da:<span> </span><br/>Data: <span></span></div>
				<div class="headercons"><a href="#"><img src="/img/ico1gr_stampa.gif" alt="stampa"/></a><a href="#"><img src="/img/ico1gr_rispondi.gif" alt="rispondi"/></a></div>
			</div>
			<div class="corpoMail">
				<div class="testoMail">
				</div>
				<br class="clear" />
				<div class="bottoniera">
					<div class="right"><a class="btnMailin verde" href=""><span>Stampa</span><img src="/img/ico1gr_stampa.gif"></a>
					<a class="btnMailin verde" href="connect.php?page=str_interna_priv.php&amp;tpl=tpl_priv_pec_scrivi.php"><span>Rispondi</span><img src="/img/ico1gr_rispondi.gif"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/js/priv_ret_pec.js" type="text/javascript"></script>
	<script type="text/javascript">initCar()</script>
</div>
