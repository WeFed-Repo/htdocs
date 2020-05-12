chkza="small";
getCookie("fontSize");

function setCookie(name, value) {
	dataScadenza = new Date();
	dataScadenza.setMonth(dataScadenza.getMonth() + 2);
	var domain="";
	var temp=location.hostname;
	domain=temp;
	var curCookie = name + "=" + escape(value)+ "; expires=" + dataScadenza.toGMTString() + "; path=/; domain="+domain+";";
	document.cookie = curCookie;
	location.reload(true);
}

function getCookie(Name) {
	var search = Name + "=";
	if (document.cookie.length > 0) {
		// if there are any cookies
		offset = document.cookie.indexOf(search);
		if (offset != -1) { 
			// if cookie exists
			offset += search.length;
			// set index of beginning of value
			end = document.cookie.indexOf(";", offset);
			// set index of end of cookie value
			if (end == -1) {
				end = document.cookie.length;
			}
			chkza=unescape(document.cookie.substring(offset, end));
		}
	}
}

if(chkza == "big") {
	document.write("<style>* {font-size:1.05em}</style>");
} else if(chkza == "medium") {
	document.write("<style>* {font-size:1.02em}</style>");
}

function open_primoPiano() {
	sealWin = window.open("primo_piano_popup.html","win","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=560,height=445");
}


function openCloseStory(a) {
	//cambio immagine
	if(a.parentNode.parentNode.className == 'open') {
		a.parentNode.parentNode.className = 'close';
		b = a.parentNode.parentNode;
		var aabb = b.getElementsByTagName('div');
		aabb[2].style.display = 'none';	
	} else {
		a.parentNode.parentNode.className = 'open';
		b = a.parentNode.parentNode;
		var aabb = b.getElementsByTagName('div');
		aabb[2].style.display = 'block';
	}
}

function apriChiudiDiv(d,t) {
	if(document.getElementById(d).style.display=='block') {
		document.getElementById(d).style.display='none';
			
			if(t.firstChild.src.indexOf("_up.gif")!= -1){
				img = t.firstChild.src.split("_up.gif");
			}
			else if(t.firstChild.src.indexOf("_up_on.gif")!= -1){
				img = t.firstChild.src.split("_up_on.gif");
			}
			else if(t.firstChild.src.indexOf("_on.gif")!= -1){
				img = t.firstChild.src.split("_on.gif");
			}
			else{
				img = t.firstChild.src.split(".gif");
			}
			
		t.firstChild.src=img[0]+"_on.gif";
	} else {
		document.getElementById(d).style.display='block';
		
			if(t.firstChild.src.indexOf("_up.gif")!= -1){
				img = t.firstChild.src.split("_up.gif");
			}
			else if(t.firstChild.src.indexOf("_up_on.gif")!= -1){
				img = t.firstChild.src.split("_up_on.gif");
			}
			else if(t.firstChild.src.indexOf("_on.gif")!= -1){
				img = t.firstChild.src.split("_on.gif");
			}
			else{
				img = t.firstChild.src.split(".gif");
			}
			
		t.firstChild.src=img[0]+"_up_on.gif";
	}
}

function changeImage(element,typeName,action) {
	if(typeName == 'firstLevel'){
		if(action=='over'){
			if(element.src.indexOf("_on.gif")!= -1){
				img = element.src.split("_on.gif");
			}
			else{
				img = element.src.split("_off.gif");
			}
			
				element.src=img[0]+"_on.gif";
		
		}
		else{
		
			if(element.src.indexOf("_on.gif")!= -1){
				img = element.src.split("_on.gif");
			}
			else{
				img = element.src.split("_off.gif");
			}
			

			element.src=img[0]+"_off.gif";
		}
	}
	else{
		getCookie('fontSize');
		
		if(action=='over' && (chkza != typeName)){
			img = element.src.split("_off.gif");
			element.src=img[0]+"_on.gif";
		}
		else if(chkza != typeName){
			img = element.src.split("_on.gif");
			element.src=img[0]+"_off.gif";
		}
		else if(chkza == typeName){
			img = element.src.split("_on.gif");
			element.src=img[0]+"_on.gif";
		}
	}
}


function closePopup(){
	window.close();
}

function openPopup(url,id,width,height,resizable){
	if(resizable=='no') newwindow=window.open(url,id,'height='+height+',width='+width+', scrollbars=yes');
	else newwindow=window.open(url,id,'height='+height+',width='+width+', resizable=yes, scrollbars=yes');
	if (window.focus) {newwindow.focus()}
	return false;
}

function addToBookmarks(){
	var ua=navigator.userAgent;
	if (window.opera){
		//Opera 6+
		document.getElementById("bm_OP").style.display="inline";
	}else if (document.all && ua.indexOf("Mac")==-1){
		//Internet Explorer 5+
		if(document.getElementById) document.getElementById("bm_IE").style.display="inline";
		else document.all.bm_DISABLED.style.display="inline";
	}else if ((typeof window.sidebar == "object") && (typeof window.sidebar.addPanel == "function")){
		//Netscape 6+, Mozilla, Firefox, (Gecko)
		document.getElementById("bm_MZ").style.display="inline";
	}else if( ua.indexOf("Mac")!=-1 && (document.all || ua.indexOf("Safari")!=-1) ){
		//Internet Explorer MAC, Safari, altri
		document.getElementById("bm_DISABLED").style.display="inline";
	}
}
function disabledBookmarks(){
	var ua=navigator.userAgent;
	if(document.all)alert("Per aggiungere questa pagina ai preferiti usa [APPLE] + [D]")
	else if (ua.indexOf("Safari")!=-1)alert("Per aggiungere questa pagina ai preferiti usa [APPLE] + [D]\noppure trascina il link sulla barra dei preferiti")
	else alert("Il browser consente questa funzione.\nUsa il menu del browser.")
}
function ChiudiNav(){
	objs=document.getElementById('nav').childNodes;
	for(i=0;i<objs.length;i++){			
		objs[i].className='off';
	}
}
function ChiudiApriNav(obj){
	ChiudiNav();
	obj.className="on";
}

function ApriChiudiLogin(){		
	if(document.getElementById('login_cont').style.display!='block')
		{			
			document.getElementById('login_img').style.display='none';
			document.getElementById('login_cont').style.display='block';
	}else{			
			document.getElementById('login_img').style.display='block';
			document.getElementById('login_cont').style.display='none';
			}
}

function checkEMail(email)
{
	if ((email == '')
		|| (email.indexOf('@') == -1)
		|| (email.indexOf('.') == -1 ))
	{
		alert("Indirizzo e-mail non corretto!!");
		return false;
	}
	else
		return true;
}

function check_EMail(newEmail, oldEmail)
{
	if (checkEMail(newEmail))
	{
		if ((newEmail.toUpperCase().indexOf('@WEBANK.IT') != -1)
			|| (newEmail.toUpperCase().indexOf('PROVVISORIO@') != -1))
		{
			alert("Indirizzo e-mail non corretto!!");
			return false;
		}

		// controllo differenza tra i due indirizzi
		if (newEmail == oldEmail)
		{
			alert("Indirizzo e-mail uguale a quello precedente!!");
			return false;
		}
		else
			return true;
	}
	else
		return false;
}

function openDemo(pathDemo)
{
	px = (screen.width - 780) / 2;
	py = (screen.height - 450) / 2;
	win = window.open(pathDemo, 'Demo', 'scrollbars=no,resizable=no,width=780,height=450,status=no,location=no,toolbar=no,left=' + px + ',top=' + py + '');
}

/* InitEnterPrevention e resetta */
var oldUser1='';
var oldPwd1='';
var refNo = /(^[mMlL])[0-9]{7}/;

function check1()
{
	if (oldUser1==document.login_form.username.value
			|| oldPwd1==document.login_form.password.value)
	{
		return false;
	}
	else
	{
		oldUser1=document.login_form.username.value;
		oldPwd1=document.login_form.password.value;
		return true;
	}
}

function resettaDblClick()
{
	oldUser1='';
	oldPwd1='';
}

function addEvent(o, n, h)
{
    // alert(o);
    if (o.attachEvent)
    {
        // alert("attachEvent");
        o.attachEvent("on" + n, h);
    }
    else
    {
        // alert("addEventListener " + n + h);
        o.addEventListener(n, h, false);
    }
}

function removeEvent(o, n, h)
{
    // alert(o);
    if (o.attachEvent)
    {
        // alert("attachEvent");
        o.detachEvent("on" + n, h);
    }
    else
    {
        // alert("addEventListener " + n + h);
        o.removeEventListener(n, h, false);
    }
}

function openClose(ID)
{
	var el = document.getElementById(ID);

	if (el.parentNode.className == 'open')
	{
		el.parentNode.className = 'close';
		var ps = el.parentNode.getElementsByTagName('div');
		ps[0].style.display = 'none';	
	}
	else
	{
		el.parentNode.className = 'open';
		var ps = el.parentNode.getElementsByTagName('div');
		ps[0].style.display = 'block';
	}
}


var requiredMajorVersion = 7;
var requiredMinorVersion = 0;
var requiredRevision = 0;
var jsVersion = 1.0;

var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
jsVersion = 1.1;
function JSGetSwfVer(i){
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
      		var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			descArray = flashDescription.split(" ");
			tempArrayMajor = descArray[2].split(".");
			versionMajor = tempArrayMajor[0];
			versionMinor = tempArrayMajor[1];
			if ( descArray[3] != "" ) {
				tempArrayMinor = descArray[3].split("r");
			} else {
				tempArrayMinor = descArray[4].split("r");
			}
      		versionRevision = tempArrayMinor[1] > 0 ? tempArrayMinor[1] : 0;
            flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
      	} else {
			flashVer = -1;
		}
	}
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	else {
		
		flashVer = -1;
	}
	return flashVer;
} 

function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision) 
{
	reqVer = parseFloat(reqMajorVer + "." + reqRevision);
	for (i=25;i>0;i--) {	
		if (isIE && isWin && !isOpera) {
			versionStr = VBGetSwfVer(i);
		} else {
			versionStr = JSGetSwfVer(i);		
		}
		if (versionStr == -1 ) { 
			return false;
		} else if (versionStr != 0) {
			if(isIE && isWin && !isOpera) {
				tempArray         = versionStr.split(" ");
				tempString        = tempArray[1];
				versionArray      = tempString .split(",");				
			} else {
				versionArray      = versionStr.split(".");
			}
			versionMajor      = versionArray[0];
			versionMinor      = versionArray[1];
			versionRevision   = versionArray[2];
			
			versionString     = versionMajor + "." + versionRevision;   // 7.0r24 == 7.24
			versionNum        = parseFloat(versionString);
			
			if ( (versionMajor > reqMajorVer) && (versionNum >= reqVer) ) {
				return true;
			} else {
				return ((versionNum >= reqVer && versionMinor >= reqMinorVer) ? true : false );	
			}
		}
	}	
	return (reqVer ? false : 0.0);
}

/**
 * SWFObject v1.5: Flash Player detection and embed - http://blog.deconcept.com/swfobject/
 *
 * SWFObject is (c) 2007 Geoff Stearns and is released under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 *
 */
if(typeof deconcept=="undefined"){var deconcept=new Object();}if(typeof deconcept.util=="undefined"){deconcept.util=new Object();}if(typeof deconcept.SWFObjectUtil=="undefined"){deconcept.SWFObjectUtil=new Object();}deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a){if(!document.getElementById){return;}this.DETECT_KEY=_a?_a:"detectflash";this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);this.params=new Object();this.variables=new Object();this.attributes=new Array();if(_1){this.setAttribute("swf",_1);}if(id){this.setAttribute("id",id);}if(w){this.setAttribute("width",w);}if(h){this.setAttribute("height",h);}if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();if(!window.opera&&document.all&&this.installedVer.major>7){deconcept.SWFObject.doPrepUnload=true;}if(c){this.addParam("bgcolor",c);}var q=_7?_7:"high";this.addParam("quality",q);this.setAttribute("useExpressInstall",false);this.setAttribute("doExpressInstall",false);var _c=(_8)?_8:window.location;this.setAttribute("xiRedirectUrl",_c);this.setAttribute("redirectUrl","");if(_9){this.setAttribute("redirectUrl",_9);}};deconcept.SWFObject.prototype={useExpressInstall:function(_d){this.xiSWFPath=!_d?"expressinstall.swf":_d;this.setAttribute("useExpressInstall",true);},setAttribute:function(_e,_f){this.attributes[_e]=_f;},getAttribute:function(_10){return this.attributes[_10];},addParam:function(_11,_12){this.params[_11]=_12;},getParams:function(){return this.params;},addVariable:function(_13,_14){this.variables[_13]=_14;},getVariable:function(_15){return this.variables[_15];},getVariables:function(){return this.variables;},getVariablePairs:function(){var _16=new Array();var key;var _18=this.getVariables();for(key in _18){_16[_16.length]=key+"="+_18[key];}return _16;},getSWFHTML:function(){var _19="";if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","PlugIn");this.setAttribute("swf",this.xiSWFPath);}_19="<embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\"";_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";var _1a=this.getParams();for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}var _1c=this.getVariablePairs().join("&");if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");this.setAttribute("swf",this.xiSWFPath);}_19="<object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\">";_19+="<param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";var _1d=this.getParams();for(var key in _1d){_19+="<param name=\""+key+"\" value=\""+_1d[key]+"\" />";}var _1f=this.getVariablePairs().join("&");if(_1f.length>0){_19+="<param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="</object>";}return _19;},write:function(_20){if(this.getAttribute("useExpressInstall")){var _21=new deconcept.PlayerVersion([6,0,65]);if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){this.setAttribute("doExpressInstall",true);this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));document.title=document.title.slice(0,47)+" - Flash Player Installation";this.addVariable("MMdoctitle",document.title);}}if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){var n=(typeof _20=="string")?document.getElementById(_20):_20;n.innerHTML=this.getSWFHTML();return true;}else{if(this.getAttribute("redirectUrl")!=""){document.location.replace(this.getAttribute("redirectUrl"));}}return false;}};deconcept.SWFObjectUtil.getPlayerVersion=function(){var _23=new deconcept.PlayerVersion([0,0,0]);if(navigator.plugins&&navigator.mimeTypes.length){var x=navigator.plugins["Shockwave Flash"];if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}}else{if(navigator.userAgent&&navigator.userAgent.indexOf("Windows CE")>=0){var axo=1;var _26=3;while(axo){try{_26++;axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+_26);_23=new deconcept.PlayerVersion([_26,0,0]);}catch(e){axo=null;}}}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}catch(e){if(_23.major==6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}catch(e){}}if(axo!=null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}}return _23;};deconcept.PlayerVersion=function(_29){this.major=_29[0]!=null?parseInt(_29[0]):0;this.minor=_29[1]!=null?parseInt(_29[1]):0;this.rev=_29[2]!=null?parseInt(_29[2]):0;};deconcept.PlayerVersion.prototype.versionIsValid=function(fv){if(this.major<fv.major){return false;}if(this.major>fv.major){return true;}if(this.minor<fv.minor){return false;}if(this.minor>fv.minor){return true;}if(this.rev<fv.rev){return false;}return true;};deconcept.util={getRequestParameter:function(_2b){var q=document.location.search||document.location.hash;if(_2b==null){return q;}if(q){var _2d=q.substring(1).split("&");for(var i=0;i<_2d.length;i++){if(_2d[i].substring(0,_2d[i].indexOf("="))==_2b){return _2d[i].substring((_2d[i].indexOf("=")+1));}}}return "";}};deconcept.SWFObjectUtil.cleanupSWFs=function(){var _2f=document.getElementsByTagName("OBJECT");for(var i=_2f.length-1;i>=0;i--){_2f[i].style.display="none";for(var x in _2f[i]){if(typeof _2f[i][x]=="function"){_2f[i][x]=function(){};}}}};if(deconcept.SWFObject.doPrepUnload){if(!deconcept.unloadSet){deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};__flash_savedUnloadHandler=function(){};window.attachEvent("onunload",deconcept.SWFObjectUtil.cleanupSWFs);};window.attachEvent("onbeforeunload",deconcept.SWFObjectUtil.prepUnload);deconcept.unloadSet=true;}}if(!document.getElementById&&document.all){document.getElementById=function(id){return document.all[id];};}var getQueryParamValue=deconcept.util.getRequestParameter;var FlashObject=deconcept.SWFObject;var SWFObject=deconcept.SWFObject;



// Gruppo di azioni eseguite al termine del load della pagina
function inizio(){
// login
if(document.getElementById('contentDx')){
	if(! window.partner){
		document.getElementById('contentDx').innerHTML = boxHome;
	}
};
// Wishlist
if (document.getElementById('wish'))
{
	getAndSetWhish(true);
	Droppables.add('wish', {onDrop: function(element) {addval(element);}});
};

// Drag&Drop Wishlist
if (document.getElementById('conto')){
	new Draggable('conto', {revert:true});
};

/*
// Wishlist checkout
if ($('allProd')){
	contrWish();
};
*/

// Drag&Drop Wishlist Doppio
if (document.getElementById('contoSx')){
	new Draggable('contoSx', {revert:true})
};
if (document.getElementById('contoDx')){
	new Draggable('contoDx', {revert:true})
};
if (document.getElementById('ind')){
	filtra('tutti');checkProd('p')
};

if (document.getElementById('boxDati1')){
	apriBoxDati(1);
};
/* aggiunto boxdati2 */
if (document.getElementById('boxDati2')){
	chiudiBoxDati(2);
};
/* aggiunto boxdati3 */
if (document.getElementById('boxDati3')){
	chiudiBoxDati(3);
};
if (document.getElementById('supplementoDati')){
	settaBonificoDati();
};

/* Inizio Open Close Object */
if(document.getElementById('story')){ /* STORIA */
	listItem('story','1');
	}; 
if(document.getElementById('archivioRSS')){ /* Archivio RSS */
	listItem('archivioRSS','1');
};
if(document.getElementById('podcast')){/* Podcast */
	listItem('podcast','1');
};
/* Fine Open Close Object */


};//end onload
addEvent(window, 'load', inizio);



/*Menu*/

function mmenu(ID) {
var menu = document.getElementById(ID);
var display = menu.style.display;
menu.style.display = (display == "block") ? "none" : "block";

	if(document.getElementById(ID+ "link").className=="current"){
		document.getElementById(ID+ "link").className="";
	}else{
		document.getElementById(ID+ "link").className="current";
	}
}


/*Login*/
function MM_findObj(n, d) { 
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function MM_showHideLayers() { 
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v='hide')?'hidden':v; }
    obj.visibility=v; }
}

function showBoxLoginHp(number)
{
	MM_showHideLayers('loginhp'+number,'','show');
}

function hideBoxLoginHp(number)
{
	MM_showHideLayers('loginhp'+number,'','hide');
}

function showBoxLogin(number)
{
	MM_showHideLayers('login'+number,'','show');
}

function hideBoxLogin(number)
{
	MM_showHideLayers('login'+number,'','hide');
}

function showLogin(ID) {
var login = document.getElementById(ID);
var display = login.style.display;
login.style.display = (display == "block") ? "none" : "block";
	if (login.style.display == "none"){
		document.getElementById("accedi").src='/INLINEANET/iln/img/label_accedi_open.jpg';
	}else{
		document.getElementById("accedi").src='/INLINEANET/iln/img/label_accedi_close.jpg';
	}
}

/*Apri e chiudi*/
function openClose(ID) {
var el = document.getElementById(ID);
var display = el.style.display;
el.style.display = (display == "block") ? "none" : "block";
	if (el.style.display == "block"){
		document.getElementById(ID+ "tit").className= "open";
	}else{
		document.getElementById(ID+ "tit").className= "";
	}
}

/*Switch tab sportello/gestione*/
function showTabGestione()
{
	MM_showHideLayers('nav_priv_iln_gest_finanz','','show');
	MM_showHideLayers('nav_priv_iln_sportello','','hide');
	document.getElementById("tab").src='/INLINEANET/iln/img/tab_gestione_on.gif';
}

function hideTabGestione()
{
	MM_showHideLayers('nav_priv_iln_sportello','','show');
	MM_showHideLayers('nav_priv_iln_gest_finanz','','hide');
	document.getElementById("tab").src='/INLINEANET/iln/img/tab_sportello_on.gif';
}


/*Switch tab scopri/confronta*/
function showTabScopri()
{
	MM_showHideLayers('scopri','','show');
	MM_showHideLayers('confronta','','hide');
	document.getElementById("tab").src='/INLINEANET/iln/img/tab_scopri.gif';
}

function showTabConfronta()
{
	MM_showHideLayers('scopri','','hide');
	MM_showHideLayers('confronta','','show');
	document.getElementById("tab").src='/INLINEANET/iln/img/tab_confronta.gif';
}
/*InitEnterPrevention e resetta */
var oldUser1='';
var oldPwd1='';
var refNo = /(^[mMlL])[0-9]{7}/;
function check1(){
	if (oldUser1==document.login_form.username.value
	|| oldPwd1==document.login_form.password.value){
		return false;
	} else {
		oldUser1=document.login_form.username.value;
		if(refNo.test(oldUser1)){
			alert ("Il nuovo sito inLineaNet non richiede la digitazione della lettera M o L iniziale nel campo \"codice cliente\". Accedere al servizio inserendo solo il codice numerico.");
			document.login_form.username.value = oldUser1.substring(1,oldUser1.length);
			oldUser1 = document.login_form.username.value;
		}
		oldPwd1=document.login_form.password.value;
		return true;
	}
}

var oldUser2='';
var oldPwd2='';

function check2(){
        if (oldUser2==document.login_form2.username.value
        || oldPwd2==document.login_form2.password.value){
                return false;
        } else {
                oldUser2=document.login_form2.username.value;
                oldPwd2=document.login_form2.password.value;
                return true;
        }
}

var oldUser3='';
var oldPwd3='';
var oldUtente3='';

function check3(){
	if (oldUser3==document.login_form3.username.value 
	|| oldPwd3==document.login_form3.password.value
	|| oldUtente3==document.login_form3.utente.value){
		return false;
	} else {
		oldUser3=document.login_form3.username.value;
		oldPwd3=document.login_form3.password.value;
		oldUtente3=document.login_form3.utente.value;
		return true;
	}
}

function resettaDblClick(){
	oldUser1='';
	oldPwd1='';
	oldUser2='';
	oldPwd2='';
	oldUtente2='';
	oldUser3='';
	oldPwd3='';
}

function addEvent(o, n, h) {
    // alert(o);
    if (o.attachEvent){
	// alert("attachEvent");
        o.attachEvent("on" + n, h);
    } else {
	// alert("addEventListener " + n + h);
        o.addEventListener(n, h, false);
    }
}

//*Glossario
function apriGlossario(url){
	window.open(url,'','width=430,height=420,toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,top=10,left=10');
	}

// DEMO
function apriDemo(str) {
	px = (screen.width-780)/2;
	py = (screen.height-450)/2;
	searchWin = window.open(str,'pannello','scrollbars=no,resizable=no,width=780,height=450,status=no,location=no,toolbar=no,left='+px+',top='+py+'');
}

// callJSP
function callJSP(path,target,param)
{
	link=cgi_script+path+"?BV_UseBVCookie=Yes&cf="+Math.random()+param;
	
	if (target=="_self")
	{	
		var ifr = document.getElementById("funzione");
		if(ifr != null ){
		ifr.src=link;
	} else 
	{
		document.location=link;
	}
	}
	else if (target=="_monoFrame")
	{
		document.location=link;
	}
}

// apri-chiudi box1colr

function ApriChiudibox1colr(obj){
	function get_previoussibling(n){
		var x=n.previousSibling;
		while (x.nodeType!=1)
		{
		x=x.previousSibling;
		}
		return x;
	}
	if(obj.parentNode.className!='on'){
			if(obj.parentNode.nextSibling.nodeType==3) {
			nextsibling=obj.parentNode.nextSibling.nextSibling; // Moz. Opera
		} else {
			nextsibling=obj.parentNode.nextSibling; // IE
		}
		nextsibling.style.display='block';
		obj.parentNode.style.display='none';
	}else{
		get_previoussibling(obj.parentNode).style.display='block';
		obj.parentNode.style.display='none';
	}
}
// apri-chiudi box2colf

function ApriChiudibox2colf(obj){
	function get_previoussibling(n){
		var x=n.previousSibling;
		while (x.nodeType!=1)
		{
		x=x.previousSibling;
		}
		return x;
	}
	if(obj.parentNode.className!='on'){
			if(obj.parentNode.nextSibling.nodeType==3) {
			nextsibling=obj.parentNode.nextSibling.nextSibling; // Moz. Opera
		} else {
			nextsibling=obj.parentNode.nextSibling; // IE
		}
		nextsibling.style.display='block';
		obj.parentNode.style.display='none';
	}else{
		get_previoussibling(obj.parentNode).style.display='block';
		obj.parentNode.style.display='none';
	}
}
/* area carte */
/*Switch tab*/
function showBox1Tab1()
{
	MM_showHideLayers('box1ctntab1','','show');
	MM_showHideLayers('box1ctntab2','','hide');
	MM_showHideLayers('box1ctntab3','','hide');
	document.getElementById("box1tab1").className='on first';
	document.getElementById("box1tab2").className='off';
	document.getElementById("box1tab3").className='off last';
}

function showBox1Tab2()
{
	MM_showHideLayers('box1ctntab2','','show');
	MM_showHideLayers('box1ctntab1','','hide');
	MM_showHideLayers('box1ctntab3','','hide');
	document.getElementById("box1tab1").className='off first';
	document.getElementById("box1tab2").className='on';
	document.getElementById("box1tab3").className='off last';
}

function showBox1Tab3()
{
	MM_showHideLayers('box1ctntab3','','show');
	MM_showHideLayers('box1ctntab1','','hide');
	MM_showHideLayers('box1ctntab2','','hide');
	document.getElementById("box1tab1").className='off first';
	document.getElementById("box1tab2").className='off';
	document.getElementById("box1tab3").className='on last';
}


function showBox3Tab1()
{
	MM_showHideLayers('box3ctntab1','','show');
	MM_showHideLayers('box3ctntab2','','hide');
	MM_showHideLayers('box3ctntab3','','hide');
	document.getElementById("box3tab1").className='onpush first';
	document.getElementById("box3tab2").className='off';
	document.getElementById("box3tab3").className='off last';
}

function showBox3Tab2()
{
	MM_showHideLayers('box3ctntab2','','show');
	MM_showHideLayers('box3ctntab1','','hide');
	MM_showHideLayers('box3ctntab3','','hide');
	document.getElementById("box3tab1").className='off first';
	document.getElementById("box3tab2").className='onpush';
	document.getElementById("box3tab3").className='off last';
}

function showBox3Tab3()
{
	MM_showHideLayers('box3ctntab3','','show');
	MM_showHideLayers('box3ctntab1','','hide');
	MM_showHideLayers('box3ctntab2','','hide');
	document.getElementById("box3tab1").className='off first';
	document.getElementById("box3tab2").className='off';
	document.getElementById("box3tab3").className='onpush last';
}

function showBox4Tab1()
{
	MM_showHideLayers('box4ctntab1','','show');
	MM_showHideLayers('box4ctntab2','','hide');
	MM_showHideLayers('box4ctntab3','','hide');
	document.getElementById("box4tab1").className='on first';
	document.getElementById("box4tab2").className='off';
	document.getElementById("box4tab3").className='off last';
}

function showBox4Tab2()
{
	MM_showHideLayers('box4ctntab2','','show');
	MM_showHideLayers('box4ctntab1','','hide');
	MM_showHideLayers('box4ctntab3','','hide');
	document.getElementById("box4tab1").className='off first';
	document.getElementById("box4tab2").className='on';
	document.getElementById("box4tab3").className='off last';
}

function showBox4Tab3()
{
	MM_showHideLayers('box4ctntab3','','show');
	MM_showHideLayers('box4ctntab1','','hide');
	MM_showHideLayers('box4ctntab2','','hide');
	document.getElementById("box4tab1").className='off first';
	document.getElementById("box4tab2").className='off';
	document.getElementById("box4tab3").className='on last';
}

function showEdit(num)
{
	MM_showHideLayers('edit' + num,'','show');
	obj=document.getElementById('funz' + num );
	if(obj) {
		obj.style.backgroundColor='#fd7b0b';
		obj.style.color='#ffffff';
		obj.style.backgroundImage='url(/wbx-pri/img/bullet2.gif)';
	}
}

function hideEdit(num)
{
	MM_showHideLayers('edit' + num,'','hide');
	obj=document.getElementById('funz' + num );	
	if(obj) {
		obj.style.backgroundColor='#ffffff';
		obj.style.color='#fd7b0b';
		obj.style.backgroundImage='url(/wbx-pri/img/bullet1.gif)';
	}
}


function hideAll (livello){
	var tutti = 4;
	
	for(i=1; i<tutti; i++){
		//alert(document.getElementById("level"+i).style.display);
		if(livello != 'level1_'+i){
			document.getElementById("level1_"+i).style.display = "none";
		}
	}
}


// box 5

function showBox5Tab1()
{
	MM_showHideLayers('box5ctntab1','','show');
	MM_showHideLayers('box5ctntab2','','hide');
	MM_showHideLayers('box5ctntab3','','hide');
	MM_showHideLayers('box5ctntab4','','hide');
	MM_showHideLayers('box5ctntab5','','hide');
	document.getElementById("box5tab1").className='on first';
	document.getElementById("box5tab2").className='off';
	document.getElementById("box5tab3").className='off';
	document.getElementById("box5tab4").className='off';
	document.getElementById("box5tab5").className='off last';	
}

function showBox5Tab2()
{
	MM_showHideLayers('box5ctntab1','','hide');
	MM_showHideLayers('box5ctntab2','','show');
	MM_showHideLayers('box5ctntab3','','hide');
	MM_showHideLayers('box5ctntab4','','hide');
	MM_showHideLayers('box5ctntab5','','hide');
	document.getElementById("box5tab1").className='off first';
	document.getElementById("box5tab2").className='on';
	document.getElementById("box5tab3").className='off';
	document.getElementById("box5tab4").className='off';
	document.getElementById("box5tab5").className='off last';	
}

function showBox5Tab3()
{
	MM_showHideLayers('box5ctntab1','','hide');
	MM_showHideLayers('box5ctntab2','','hide');
	MM_showHideLayers('box5ctntab3','','show');
	MM_showHideLayers('box5ctntab4','','hide');
	MM_showHideLayers('box5ctntab5','','hide');
	document.getElementById("box5tab1").className='off first';
	document.getElementById("box5tab2").className='off';
	document.getElementById("box5tab3").className='on';
	document.getElementById("box5tab4").className='off';
	document.getElementById("box5tab5").className='off last';	
}

function showBox5Tab4()
{
	MM_showHideLayers('box5ctntab1','','hide');
	MM_showHideLayers('box5ctntab2','','hide');
	MM_showHideLayers('box5ctntab3','','hide');
	MM_showHideLayers('box5ctntab4','','show');
	MM_showHideLayers('box5ctntab5','','hide');
	document.getElementById("box5tab1").className='off first';
	document.getElementById("box5tab2").className='off';
	document.getElementById("box5tab3").className='off';
	document.getElementById("box5tab4").className='on';
	document.getElementById("box5tab5").className='off last';	
}

function showBox5Tab5()
{
	MM_showHideLayers('box5ctntab1','','hide');
	MM_showHideLayers('box5ctntab2','','hide');
	MM_showHideLayers('box5ctntab3','','hide');
	MM_showHideLayers('box5ctntab4','','hide');
	MM_showHideLayers('box5ctntab5','','show');
	document.getElementById("box5tab1").className='off first';
	document.getElementById("box5tab2").className='off';
	document.getElementById("box5tab3").className='off';
	document.getElementById("box5tab4").className='off';
	document.getElementById("box5tab5").className='on last';	
}


function addEvent(o, n, h) {
    // alert(o);
    if (o.attachEvent){
	// alert("attachEvent");
        o.attachEvent("on" + n, h);
    } else {
	// alert("addEventListener " + n + h);
        o.addEventListener(n, h, false);
    }
}
function removeEvent(o, n, h) {
    // alert(o);
    if (o.attachEvent){
	// alert("attachEvent");
        o.detachEvent("on" + n, h);
    } else {
	// alert("addEventListener " + n + h);
        o.removeEventListener(n, h, false);
    }
}


function getPageOffset()
	{
		var offset = 0;
		if(window.pageYOffset)
		offset = window.pageYOffset;
		else if(document.documentElement && document.documentElement.scrollTop)
		offset = document.documentElement.scrollTop;
		else if(document.body && document.body.scrollTop)
		offset = document.body.scrollTop;
		return offset;
	}

function hideallselect()
{
	x = document.getElementsByTagName("select")
	for (var i = x.length; i; x[--i].style.visibility='hidden');
}

function showallselect()
{
	x = document.getElementsByTagName("select")
	for (var i = x.length; i; x[--i].style.visibility='visible');
}	


function switchConditionalData(idLayerToOpen, imageToSwitch)
				{
					if (document.getElementById(idLayerToOpen).style.display == 'none')
					{
						document.getElementById(idLayerToOpen).style.display = 'block';
						document.getElementById(imageToSwitch).src = '/img/ret/ico1gr_indAOLaperto.gif'
					}
					else
					{
						document.getElementById(idLayerToOpen).style.display = 'none';
						document.getElementById(imageToSwitch).src = '/img/ret/ico1gr_indAOLchiuso.gif'
					}
				}

				
// --------- Framework per overlayer e alert ------------//
// Rileva il massimo z-index in tutto il documento corrente
function getNextHighestZindex()
{
   	var highestIndex = 0;
   	var currentIndex = 0;
   	var elArray = Array();
   	elArray = document.getElementsByTagName('*');
   	for(var i=0; i < elArray.length; i++){
		  if(window.getComputedStyle){
         	currentIndex = parseFloat(document.defaultView.getComputedStyle(elArray[i],null).getPropertyValue('z-index'));
			if(!isNaN(currentIndex) && currentIndex >= highestIndex){highestIndex = currentIndex;}
		  }
		  if (elArray[i].currentStyle){
		   //stile dell'elemento
      	   currentIndex = parseFloat(elArray[i].currentStyle['zIndex']);
		   if(!isNaN(currentIndex) && currentIndex >= highestIndex){highestIndex = currentIndex;}
		  }
		  if (elArray[i].style.zIndex){
		   //stile dell'elemento
      	   currentIndex = parseFloat(elArray[i].style.zIndex);
		   if(!isNaN(currentIndex) && currentIndex >= highestIndex){highestIndex = currentIndex;}
		  }
   	}
   	return(highestIndex+1);
}

//identifica la metà orizzontale della pagina
function getPageWidth ()
{
	if (navigator.appName != "Microsoft Internet Explorer")
	{
		return document.body.clientWidth;
	} 
	else 
	{
		return document.documentElement.clientWidth;
	}
}

function getPageHeight ()
{
	if (navigator.appName != "Microsoft Internet Explorer")
	{
		return window.innerHeight;
	} 
	else 
	{
		return document.documentElement.clientHeight;
	}
}

//scrolling amount
function getScrollY() {
	if(navigator.appName != "Microsoft Internet Explorer"){
		return window.pageYOffset;
	}
	else
	{
		return document.documentElement.scrollTop;
	}
}

// oscura tutto
function obscurateAll (opacitylevel)
{
	//controlla che tutto non sia già oscurato da qualcosa
	if (!document.getElementById('layerpop'))
	{
		var layerpop = document.createElement('DIV');
		layerpop.id='layerpop';
		document.body.appendChild(layerpop);
		if (document.getElementById('overlayerLight')) 
			{ 
				document.getElementById('layerpop').className = "overlayerchiaro"; 
			}
				
		//document.body.appendChild(layerpop);
		//imposta l'oscuratore layerpop al massimo dei livelli
		document.getElementById('layerpop').style.zIndex = getNextHighestZindex();

		//imposta l'altezza di layerpop a tutto schermo e appende le funzioni di scrolling e resizing all'oscuratore
		if(navigator.appName != "Microsoft Internet Explorer")
		{ 
			document.getElementById('layerpop').style.height = window.height + 'px'; 
			document.getElementById('layerpop').style.marginTop = getScrollY() + 'px';
		} 
		else 
		{ 
			document.getElementById('layerpop').style.height = getPageHeight() + 'px';  
			document.getElementById('layerpop').style.marginTop = getScrollY() + 'px';
		} 
		
		obscuratescroll = new Function ('document.getElementById(\'layerpop\').style.marginTop = getScrollY() + \'px\';');
		obscurateresize = new Function ('document.getElementById(\'layerpop\').style.height = getPageHeight() + \'px\';');
		
		if (window.attachEvent)
		{
			window.attachEvent("onresize", obscurateresize);
			window.attachEvent("onscroll", obscuratescroll);
		}
		else
		{
			window.addEventListener("scroll",obscuratescroll, false);
			window.addEventListener("DOMMouseScroll", obscuratescroll, false);
			window.addEventListener("resize", obscurateresize, false);
		}		
		
		if (opacitylevel)
		{
			layerpop.style.opacity = opacitylevel/10;
			layerpop.style.filter = 'alpha(opacity=' + opacitylevel * 10 + ')';
		}
	}
}

function unobscurateAll ()
{
	document.body.removeChild(document.getElementById('layerpop')); 
}

//funzione che rende invisibili le tendine tranne quelle contenute nel div che risulta essere attivo (e nei suoi figli)
function arrangeSelect(idElement)
{
	if (idElement)
		{
		var x = document.getElementsByTagName("select").length	
		x = document.getElementsByTagName("select")
		for (i = x.length; i; x[--i].style.visibility='hidden');
		var y = document.getElementById(idElement).getElementsByTagName('select')
		for (i = y.length; i; x[--i].style.visibility='visible');
		}
	else
		{
		x = document.getElementsByTagName("select")
		for (i = x.length; i; x[--i].style.visibility='visible');
		}
}

//funzione che apre un popup con overlayer
// mode = 'fixed' overlayer con margin-top fisso da css
// mode = 'floating' overlayer sempre centrato nella pagina
function openPopOverLayer (idElement, mode)
{
	obscurateAll();
	document.body.insertBefore(document.getElementById(idElement), document.body.getElementsByTagName('div')[0]);
	document.getElementById(idElement).style.display='block';
	//controlla se deve fissare la X o renderla dinamica
	if (mode == 'fixed')
	{
		document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';
		
		//riallinea l'oggetto orizzontalmente sul resize
		if (window.attachEvent)
		{
			window.attachEvent("onresize", function(){document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';});
		
		}
		else
		{
			window.addEventListener("resize", function(){document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';}, false);
		}
	}
	else
	{
		document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';
		document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';
		//riallinea l'oggetto sia verticalmente che orizzontalmente
		if (window.attachEvent)
		{
			window.attachEvent("onresize", function(){document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px'; document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';});
			window.attachEvent("onscroll", function(){document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';});
		}
		else
		{
			window.addEventListener("resize", function(){document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';}, false);
			window.addEventListener("scroll", function(){document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';}, false);
			
		}
	}
	arrangeSelect(idElement);
	document.getElementById(idElement).style.zIndex = getNextHighestZindex();
}

//chiude l'overlayer + l'oscuratore
function closePopOverLayer (idElement)
{
	document.getElementById(idElement).style.display='none';
	arrangeSelect();
	unobscurateAll ();
}

//apre una popup fissa da css o style nella pagina
//elemento ancora è opzionale e serve per agganciare il layer ad un altro elemento di qualsiasi natura (i parametri TOP e LEFT sono configurabili nello stile  per posizionare l'elemento rispetto a questo)
function openFixedAlert (idElement,anchorElement)
{
	arrangeSelect (idElement);
	document.body.insertBefore(document.getElementById(idElement), document.body.getElementsByTagName('div')[0]);
	if (anchorElement)
	{
		document.getElementById(idElement).style.marginTop = anchorElement.offsetTop + 'px';
		document.getElementById(idElement).style.marginLeft = anchorElement.offsetLeft + 'px';
		//ancora in resize della finestra
		if (window.attachEvent)
		{
			window.attachEvent("onresize", function(){document.getElementById(idElement).style.marginTop = anchorElement.offsetTop + 'px';document.getElementById(idElement).style.marginLeft = anchorElement.offsetLeft + 'px';});
		}
		else
		{
			window.addEventListener("resize", function(){document.getElementById(idElement).style.marginTop = anchorElement.offsetTop + 'px';document.getElementById(idElement).style.marginLeft = anchorElement.offsetLeft + 'px';}, false);
		}
	}
	document.getElementById(idElement).style.display = 'block';
	document.getElementById(idElement).style.zIndex = getNextHighestZindex();
	
}

//apre una popup sempre centrata nella pagina
function openAlert (idElement)
{
	arrangeSelect (idElement);
	//appende il layer direttamente al body
	document.body.insertBefore(document.getElementById(idElement), document.body.getElementsByTagName('div')[0]);
	document.getElementById(idElement).style.display = 'block';
	document.getElementById(idElement).style.zIndex = getNextHighestZindex();
	document.getElementById(idElement).style.top = '0px';
	document.getElementById(idElement).style.left = '0px';
	document.getElementById(idElement).style.marginLeft = Math.round ( (getPageWidth() - document.getElementById(idElement).offsetWidth )/2) + 'px'; 
	document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';
	if (window.attachEvent)
		{
			window.attachEvent("onresize", function(){document.getElementById(idElement).style.marginLeft = Math.round ( (getPageWidth() - document.getElementById(idElement).offsetWidth )/2) + 'px'; document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';});
			window.attachEvent("onscroll", function(){document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';});
		}
	else
		{
			window.addEventListener("resize", function(){document.getElementById(idElement).style.marginLeft = Math.round ( (getPageWidth() - document.getElementById(idElement).offsetWidth )/2) + 'px'; document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';}, false);
			window.addEventListener("scroll", function(){document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';}, false);
		}
}

//chiude un alert qualsiasi (occorre indicarlo se esiste un overlayer o un padre altrimenti si puo' omettere e saranno riabilitate tutte le select nella pagina)
function closeAlert (idElement,idFather)
{
	document.getElementById(idElement).style.display = 'none';
	if (idFather)
	{
		arrangeSelect (idFather);
	}
	else
	{
		arrangeSelect ();
	}
}








//WORKAROUND FLASH PER IE (activx)
function addFlash(path,larghezza,altezza,transp,variabili,name)
{
	document.write('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="'+larghezza+'" height="'+altezza+'" id="'+name+'">');
	document.write('<param name="bgcolor" value="#EDEDED">');
	document.write('<param name="movie" value="'+path+'">');
	document.write('<param name="quality" value="high">');

	if (transp=='yes')
	{
		document.write('<param name="wmode" value="transparent">');
	}
	
	if (variabili!='')
	{
		document.write('<param name="flashvars" value="'+variabili+'">');
	}

	document.write('<embed src="'+path+'" quality="high" width="'+larghezza+'" height="'+altezza+'" name="'+name+'" type="application/x-shockwave-flash"  ');

	if (transp=='yes')
	{
		document.write('wmode="transparent" ');
	}

	if (variabili!='')
	{
		document.write('flashvars="'+variabili+'" ');
	}		   

	document.write('pluginspace="https://www.macromedia.com/go/getflashplayer"></embed></object>');
};//end addFlash


//CONTROLLO DELLA CHECKBOX USER/ADMIN
function checkBox()
{
	if($('user').checked){
		document.loginBusiness.ut.value=CodUt;
		if (CodUt=='') $('utenteB').style.display = 'inline';
		else $('ut').style.display = 'inline';
	};

	if($('admin').checked){
		CodUt=$('ut').value;
		document.loginBusiness.ut.value='';
		$('utenteB').style.display = 'none';
		$('ut').style.display = 'none';
	};
}

function callJSP(action, tabId, obsKey, key4)
{
	var url = '/wb/' + action + '?tabId=' + tabId + '&OBS_KEY=' + obsKey;
	
	if ((key4 != null) && (key4.length > 0))
		url += '&KEY4=' + key4;
	
	document.location = cgi_script + url;
}

function filtra(type)
{
	if (type == 'tutti')
	{
		checkProd('p');
		$('main').className = 'orange';
		$('privat').style.backgroundImage='url(/img/ret/checkOff.gif)';
		$('busine').style.backgroundImage='url(/img/ret/checkOff.gif)';
		$('all').style.backgroundImage='url(/img/ret/checkOn.gif)';
		$('ind').style.backgroundImage='url(/img/ret/ind_sx.gif)';
		$('sx').style.visibility = "visible";
		$('dx').style.visibility = "visible";
		new Effect.Fade('sx',{from:0.0001,to:1});
		new Effect.Fade('dx',{from:0.0001,to:0.5});
		$('textSx').style.visibility = 'visible';
		$('contoSx').style.visibility = 'visible';
		$('textDx').style.visibility = 'hidden';
		$('contoDx').style.visibility = 'visible';
	}
	else
	{	
		if (type == 'priv')
		{
			checkProd('p');
			$('main').className = 'orange';
			$('privat').style.backgroundImage='url(/img/ret/checkOn.gif)';
			$('busine').style.backgroundImage='url(/img/ret/checkOff.gif)';
			$('all').style.backgroundImage='url(/img/ret/checkOff.gif)';
			$('ind').style.backgroundImage='url(/img/ret/ind_sx.gif)';
			$('sx').style.visibility = "visible";
			$('dx').style.visibility = "hidden";
			new Effect.Fade('sx',{from:0.0001,to:1});
			new Effect.Fade('dx',{from:0.5,to:0.0001});
			$('textSx').style.visibility = "visible";
			$('contoSx').style.visibility = "visible";
			$('textDx').style.visibility = "hidden";
			$('contoDx').style.visibility = "hidden";
		}
		else
		{
			if (type == 'busi')
			{
				$('main').className = 'blue';
				checkProd('b');
				$('privat').style.backgroundImage='url(/img/ret/checkOff.gif)';
				$('busine').style.backgroundImage='url(/img/ret/checkOn.gif)';
				$('all').style.backgroundImage='url(/img/ret/checkOff.gif)';
				$('ind').style.backgroundImage='url(/img/ret/ind_dx.gif)';
				$('dx').style.visibility = "visible";
				$('sx').style.visibility = "hidden";
				new Effect.Appear('dx');
				new Effect.Fade('sx',{to:0.0001});
				$('textSx').style.visibility = "hidden";
				$('contoSx').style.visibility = "hidden";
				$('textDx').style.visibility = "visible";
				$('contoDx').style.visibility = "visible";
			};
		};
	};
};//end filtra
				
function checkProd(id){
	if(id=='p'){
		$('privato').style.display = 'block';
		$('business').style.display = 'none';
		};
	if(id=='b'){
		$('business').style.display = 'block';
		$('privato').style.display = 'none';
		};
};

function mostra(id1,id2)
{
	new Effect.Appear(id1);
	new Effect.Fade(id2,{to:0.5});
	if(id1=='sx'){
		$('main').className = 'orange';
		$('ind').style.backgroundImage='url(/img/ret/ind_sx.gif)';
		$('textSx').style.visibility = 'visible';
		$('textDx').style.visibility = 'hidden';
		checkProd('p');
		};
	if(id1=='dx'){
		$('main').className = 'blue';
		$('ind').style.backgroundImage='url(/img/ret/ind_dx.gif)';
		$('textDx').style.visibility = 'visible';
		$('textSx').style.visibility = 'hidden';
		checkProd('b');
		};
};

function homePriv(type){
		if(type=='d'){var col = '_dark'; var text = 'd';};
		if(type=='b'){var col = '_blue'; var text = 'b';};
		if(type=='g'){var col = '_grey'; var text = 'g';};
		if(type=='n'){var col = ''; var text = 'n';};
		$('contentDx').innerHTML = getBoxPrivati();
		$('priv').href = "javascript:goHome('"+text+"');";
		$('busi').href = "javascript:privBusi('"+text+"');";
		$('contentDx').style.display = 'none';
		$('contentDx').style.height = '90px';
		$('btnLogin').style.backgroundImage = 'url(/img/ret/bg_login'+col+'_btn_priv.gif)';
		$('priv').style.color = '#FFFFFF';
		$('busi').style.color = '#999999';
		new Effect.BlindDown('contentDx',{scaleFrom:43,duration:0.6,
			afterFinishInternal: function() {
				$('contentDx').style.display = 'block';
				}});
};
function homeBusi(type){
		if(type=='d'){var col = '_dark'; var text = 'd';};
		if(type=='b'){var col = '_blue'; var text = 'b';};
		if(type=='g'){var col = '_grey'; var text = 'g';};
		if(type=='n'){var col = ''; var text = 'n';};
		$('contentDx').innerHTML = getBoxBusiness();
		$('priv').href = "javascript:busiPriv('"+text+"');";
		$('busi').href = "javascript:goHome('"+text+"');";
		$('contentDx').style.display = 'none';
		$('utenteB').style.display = 'none';
		$('contentDx').style.height = '90px';
		$('btnLogin').style.backgroundImage = 'url(/img/ret/bg_login'+col+'_btn_busi.gif)';
		$('priv').style.color = '#999999';
		$('busi').style.color = '#FFFFFF';
		new Effect.BlindDown('contentDx',{scaleFrom:43,duration:0.6,
			afterFinishInternal: function() {
				$('contentDx').style.display = 'block';
				}});
};
function goHome(type){
		if(type=='d'){var col = '_dark'; var text = 'd';};
		if(type=='b'){var col = '_blue'; var text = 'b';};
		if(type=='g'){var col = '_grey'; var text = 'g';};
		if(type=='n'){var col = ''; var text = 'n';};
		new Effect.SlideUp('contentDx',{
			scaleFrom:100,
			scaleTo:43,
			duration:0.6,
			afterFinishInternal: function() {
				$('contentDx').style.height = '38px';
				$('contentDx').style.display = 'block';
				$('contentDx').innerHTML = boxHome;
				}});
		$('btnLogin').style.backgroundImage = 'url(/img/ret/bg_login'+col+'_btn.gif)';
		$('priv').style.color = '#FF6600';
		$('busi').style.color = '#3366CC';
		$('priv').href = "javascript:homePriv('"+text+"');";
		$('busi').href = "javascript:homeBusi('"+text+"');";
}

function privBusi(type){
		if(type=='d'){var col = '_dark'; var text = 'd';};
		if(type=='b'){var col = '_blue'; var text = 'b';};
		if(type=='g'){var col = '_grey'; var text = 'g';};
		if(type=='n'){var col = ''; var text = 'n';}
		$('contentDx').innerHTML = getBoxBusiness();
		$('utenteB').style.display = 'none';
		$('priv').href = "javascript:busiPriv('"+text+"');";
		$('busi').href = "javascript:goHome('"+text+"');";
		$('btnLogin').style.backgroundImage = 'url(/img/ret/bg_login'+col+'_btn_busi.gif)';
		$('priv').style.color = '#999999';
		$('busi').style.color = '#FFFFFF';
}
function busiPriv(type){
		if(type=='d'){var col = '_dark'; var text = 'd';};
		if(type=='b'){var col = '_blue'; var text = 'b';};
		if(type=='g'){var col = '_grey'; var text = 'g';};
		if(type=='n'){var col = ''; var text = 'n';};
		$('contentDx').innerHTML = getBoxPrivati();
		$('priv').href = "javascript:goHome('"+text+"');";
		$('busi').href = "javascript:privBusi('"+text+"');";
		$('btnLogin').style.backgroundImage = 'url(/img/ret/bg_login'+col+'_btn_priv.gif)';
		$('priv').style.color = '#FFFFFF';
		$('busi').style.color = '#999999';
}
/*--- Inizio Open Close Object ---*/
function listItem(id,num)
{
	
	var item = document.getElementsByClassName('item');
	for(var i=0 ; i<item.length ; i++){
		var opened = num-1;
		if(i==opened){
			var subItem = item[i].getElementsByClassName('desc');
			
			subItem[0].style.display = "none";
			var links = item[i].getElementsByClassName('ft')[0].getElementsByTagName('A')[0];
			var titLink = item[i].getElementsByTagName('A')[0];
			links.style.cursor = titLink.style.cursor = "pointer";
			links.onclick = function(){	openListItem(this.parentNode.parentNode); };
			titLink.onclick = function() { openListItem(this.parentNode); };
			openListItem(links.parentNode.parentNode);
			
		}else{
				var subItem = item[i].getElementsByClassName('desc');
				subItem[0].style.display = "none";
				var links = item[i].getElementsByClassName('ft')[0].getElementsByTagName('A')[0];
				var titLink = item[i].getElementsByTagName('A')[0];
				links.style.cursor = titLink.style.cursor = "pointer";
				links.onclick = function(){	openListItem(this.parentNode.parentNode); };
				titLink.onclick = function() { openListItem(this.parentNode); };
			}
		}
}


function openListItem(obj)
{
	obj.getElementsByClassName('ft')[0].getElementsByTagName('A')[0].firstChild.src="/img/ret/arr_Up.gif";
	new Effect.BlindDown(obj.getElementsByClassName('desc')[0],{duration:0.5});
	var links = obj.getElementsByClassName('ft')[0].getElementsByTagName('A')[0];
	var titLink = obj.getElementsByTagName('A')[0];
	links.onclick = function(){	closeListItem(obj); };
	titLink.onclick = function() { closeListItem(obj); };
}

function closeListItem(obj)
{
	obj.getElementsByClassName('ft')[0].getElementsByTagName('A')[0].firstChild.src="/img/ret/arr_Down.gif";
	new Effect.BlindUp(obj.getElementsByClassName('desc')[0],{duration:0.5});
	var links = obj.getElementsByClassName('ft')[0].getElementsByTagName('A')[0];
	var titLink = obj.getElementsByTagName('A')[0];
	links.onclick = function(){ openListItem(obj); };
	titLink.onclick = function() { openListItem(obj); };
}

function pop_up_int(url,titolo,size)
{
	var s_width = screen.width;
	var s_height = screen.height;
	var sizeL = 330;

	if (s_width >= 1024 && s_height >= 768)
		sizeL = 560;

	if (size=='small')
		window.open(cgi_script + '/wb/contents/condizioni/pop_template.jsp?link='+url+'&titolo='+titolo+'','main','width=500,height=500,top=0,left='+sizeL+',status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');
	else
		window.open(cgi_script + '/wb/contents/condizioni/pop_template.jsp?link='+url+'&titolo='+titolo+'','main','width=780,height=500,top=0,left='+sizeL+',status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');
}

function updateIndciHome(t)
{
	setLoading('quote', 'indexContainer', 'tabQuote');

	var r = new Ajax.Request(cgi_script + '/wb/jsp/indici.jsp', {
		method: 'get',
		onSuccess: function(transport) {stopLoading('quote', 'indexContainer', 'tabQuote');paintIndici(transport, t);},
		onFailure: function(transport) {stopLoading('quote', 'indexContainer', 'tabQuote');}
		}
	);
}

function paintIndici(transport, t)
{
	var quoteDom = transport.responseXML;
	var tag = 'indici';

	if (t != null)
		tag = t;
	
	var indiciDom = quoteDom.getElementsByTagName(tag)[0];
	var table = $('tabQuote');
	
	for(var i = 0; i < table.rows.length;){
		table.deleteRow(i);
	}
	
	var items = indiciDom.childNodes;
	var q = 0;
	
	for(var i = 0; i < items.length && q < 4; i++)
	{
		if (items[i].nodeType == 1)
		{
			var valore = getAttributesByName( items[i].attributes, 'valore').nodeValue;
			var newR = table.insertRow(q++);
			newR.className = q%2 != 0 ? 'chiaro' : 'scuro';
			var c0 = newR.insertCell(0);
			c0.className = 'nome';
			c0.innerHTML =  getAttributesByName(items[i].attributes, 'nome').nodeValue;
			var c1 = newR.insertCell(1);
			c1.innerHTML = getAttributesByName(items[i].attributes, 'prezzo').nodeValue;
			var c2 = newR.insertCell(2);
			c2.className = 'num';
			c2.innerHTML = valore;
			var c3 = newR.insertCell(3);
			c3.className = 'img';
			c3.appendChild(Builder.node('img', {src: valore > 0 ? '/img/ret/su.gif' : '/img/ret/giu.gif'}, null));
		}
	}
}

function getAttributesByName(attrs, name)
{
	for (var i = 0; i < attrs.length ; i++)
	{
		if (attrs[i].nodeName == name)
			return attrs[i];
	}

	return null;
}

var loading = new Array();
var startLoading = new Array();

function setLoading(i, c, s)
{
	var key = 'loading';

	if (i != null)
		key = i;

	loading[key] = true;
	startLoading[key] = new Date();
	setTimeout(showLoading, 500, i, c, s);
}

function showLoading(i, c, s)
{
	var key = 'loading';
	var cont = 'contWish';
	var show = 'slider';

	if(i != null) key = i;
	if(c != null) cont = c;
	if(s != null) show = s;

	if(loading[key])
	{
		var myImg = Builder.node('img', {src: imgPath + 'ajax-loader.gif',
						alt: 'loading',
						id: key,
						style: 'margin: 10px 0px 0px 90px'});

		$(cont).appendChild(myImg);
		$(show).style.display = 'none';
	}
}

function stopLoading(i, c, s)
{

	var key = 'loading';
	var cont = 'contWish';
	var show = 'slider';

	if(i != null) key = i;
	if(c != null) cont = c;
	if(s != null) show = s;

	loading[key] = false;
	if($(key)){
		$(cont).removeChild($(key));
		$(show).style.display = 'block';
	}
}
var draggabile = {
	startDrag: function(d, event){
		d.cloned = d.element.cloneNode(true);
		d.cloned.src = d.cloned.getAttribute('colorType');
		d.cloned.style.width = '32px';
		d.cloned.style.height = '32px';
		d.element.style.display = 'none';
		d.cloned.id = d.element.id + 'clone';
		d.cloned.style.position = 'absolute';
		d.cloned.style.zIndex = 100000;
		d.cloned.originalRef = d.element.id;
		d.originalElement = d.element;
		document.body.appendChild(d.cloned);
		d.cloned.style.width = '32px';
		d.cloned.style.height = '32px';
		d.element = d.cloned;
	},

	onDrag: function(d, event) {
		if (window.getSelection) {
			txt = window.getSelection();
		} else if (document.getSelection) {
			txt = document.getSelection();
		} else if (document.selection) {
			txt = document.selection.createRange().text;
		}
	},

	stopDrag: function(d, event){
		Element.remove(d.element);
		d.element = d.originalElement;
		d.originalElement.style.display = 'block'
		// d.originalElement.style.background = 'url(img/btn_addFilms.gif) no-repeat 5px 4px';
	}
}
function addEvent(o, n, h) {
    // alert(o);
    if (o.attachEvent){
	// alert("attachEvent");
        o.attachEvent("on" + n, h);
    } else {
	// alert("addEventListener " + n + h);
        o.addEventListener(n, h, false);
    }
}
function removeEvent(o, n, h) {
    // alert(o);
    if (o.attachEvent){
	// alert("attachEvent");
        o.detachEvent("on" + n, h);
    } else {
	// alert("addEventListener " + n + h);
        o.removeEventListener(n, h, false);
    }
}
function cambiaTabIndici(tab,tabs){
	for (var i = 0; i < tabs.length; i++){
		$(tabs[i]).src=$(tabs[i]).src.replace('_on','_off');
	}
	$(tab).src=$(tab).src.replace('_off','_on');
}

function changeImage(element,typeName,action) {
	if(typeName == 'firstLevel'){
		if(action=='over'){
			if(element.src.indexOf("_on.gif")!= -1){
				img = element.src.split("_on.gif");
			}
			else{
				img = element.src.split("_off.gif");
			}
			
				element.src=img[0]+"_on.gif";
		
		}
		else{
		
			if(element.src.indexOf("_on.gif")!= -1){
				img = element.src.split("_on.gif");
			}
			else{
				img = element.src.split("_off.gif");
			}
			

			element.src=img[0]+"_off.gif";
		}
	}
	else{
		getCookie('fontSize');
		
		if(action=='over' && (chkza != typeName)){
			img = element.src.split("_off.gif");
			element.src=img[0]+"_on.gif";
		}
		else if(chkza != typeName){
			img = element.src.split("_on.gif");
			element.src=img[0]+"_off.gif";
		}
		else if(chkza == typeName){
			img = element.src.split("_on.gif");
			element.src=img[0]+"_on.gif";
		}
	}
}


// ------------ script per il controllo del menu ---------------------
	
//over per il primo livello
	function menufirstover (menuvoice)
	{
		menuvoice.getElementsByTagName('img')[0].src = menuvoice.getElementsByTagName('img')[0].src.replace('normal','over');
	}
	
//out per il primo livello
	function menufirstout (menuvoice)
	{
		menuvoice.getElementsByTagName('img')[0].src = menuvoice.getElementsByTagName('img')[0].src.replace('over','normal');
	}
	
//funzione mouseover su secondo livello
	function menusecondover (menudiv)
	{
		if (menudiv.className == 'level2voice' || menudiv.className == 'level2voice last' || menudiv.className == 'level2voice first')
		{
			menudiv.className = menudiv.className.replace ('level2voice', 'level2voice over');
		}
	}
	
//funzione out secondo livello generica
function menusecondout (menudiv)
	{
		if (menudiv.className == 'level2voice over' || menudiv.className == 'level2voice over last' || menudiv.className == 'level2voice over first')
			{
				menudiv.className = menudiv.className.replace ('level2voice over', 'level2voice');
			}
	}

//Paragrafi espandibili
function expandArgument (title)
{
	if(	title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display != 'none')
	{
		title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = 'none';
		title.firstChild.src = '/wscmn/img/ico1gr_indchiuso.gif';
	}
	else
	{
		title.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = '';
		title.firstChild.src = '/wscmn/img/ico1gr_indaperto.gif';
	}
}

//Popup aucap
function openPopAucap(aucapUrl)
{
	window.open(aucapUrl,'aucap','width=463,height=610,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');
}

function cstPopup(url, title, width, height)
{
	// Defaults
	width = width || 500;
	height = height || 300;
	window.open(url + '&title=' + title, 'popup', 'width=' + width + ',height=' + height + ',top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');
}