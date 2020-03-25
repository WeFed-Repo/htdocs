<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chat</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Language" content="it" />
	<meta name="script" http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="script" http-equiv="Content-Style-Type" content="text/css" />
	<meta name="description" content="We@bank - Conosci Conto@me" />
	<meta name="keywords" content="" />
	<meta name="distribution" content="Global" />
<style type="text/css">
body {background-color: #DCDCDC; text-align: center;}
html,body{overflow:hidden}
html,body,img{margin:0;padding:0;border:none;overflow:hidden;font-family:Arial, Helvetica, sans-serif;}
br.clear{display:block;height:0;line-height:0;font-size:0;overflow:hidden;clear:both}
#connesso, #nonconnesso {margin: 0px auto; padding:0; display: block; width: 175px; text-align: left;}
.btn {display: block; cursor: pointer; font-family: verdana; border:0; margin:5px 4px 0; padding:0 0 2px; background:url(img/btn_bg.gif) left top no-repeat; text-align: center; font-size:9px !important;color:#fff;text-decoration:none !important; text-transform:uppercase; height:16px; width: 73px; line-height:13px}
.btndisabled {background:url(img/btndisabled_bg.gif) left top no-repeat; cursor: not-allowed;}
p{font:normal 10px tahoma,sans-serif;color:#333333;margin:0;padding:5px 0 0 0;padding-left:16px}
p.stato span{color:#666; font-weight: bold;}
.status {color:#666; font: bold 10px tahoma,sans-serif; padding:5px 0 0 0;padding-left:16px; float:left;}

textarea{width:160px;height:118px;font:normal 10px tahoma,sans-serif;color:#333333;border:solid 1px #666; margin: 0px 6px 12px 6px;}
.second {height: 40px; margin-bottom:0px;}
</style>

</head>
<body onload="javascript:init(); self.moveTo(40,100); window.resizeTo(185,370);">
<%
username = Request.QueryString("username")
%>
<form>
		<script language="javascript" src="IFM_Global.js"></script>
		<script language="javascript" src="IFM_ScriptControl.js"></script>
		<script language="javascript" src="Client.js"></script>
	<div id="nonconnesso">
			<img src="img/hcic.jpg" />
			<input class="btn" style="float:left;" type="button" id="btnConnect" value="connetti" onclick="javascript:document.getElementById('nonconnesso').style.display='none';document.getElementById('connesso').style.display='block';call('<%=username%>');" runat="server" />
			<input class="btn btndisabled" style="float:right;" type="button" value="invia" runat="server"/>
			<br class="clear" />
			<p class="stato">Stato: <span>Non connesso</span></p>
	</div>
	
	<div style="display:none;background:url(img/hcic2.jpg) left top no-repeat" id="connesso">
		<br /><br /><br />
		 <div id="bkgStorico">
			 <textarea id="txtArea" cols="40" rows="5" class="first" wrap="soft" readonly></textarea>
		 </div>
		 <div id="bkgInsert">
			<textarea id="txtMsg" cols="40" rows="3" class="second" tabindex="1" readonly onkeydown="javascript:checkEnter(event)" onkeyup="javascript:enableSendButton()"></textarea>
		 </div>
		 <div>
			<input class="btn" style="float:left;" type="button" id="btnConnect" value="termina" onclick="javascript:call('<%=username%>');" runat="server" />
			<input class="btn" style="float:right;" type="button" id="btnSend" value="invia" onclick="javascript:send()" runat="server"/>
		 </div>
		 <div id="txtStatus" class="status">
			Connesso
		 </div>
		 
	</div>
</form>
	
</body>
</html>