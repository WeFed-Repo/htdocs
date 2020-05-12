// Fix trim per IE <= 8
if (typeof String.prototype.trim !== 'function') {
	String.prototype.trim = function() {
		return this.replace(/^\s+|\s+$/g, '');   
	} 
}

/* SWF Object */
if(typeof deconcept=="undefined"){var deconcept=new Object();}if(typeof deconcept.util=="undefined"){deconcept.util=new Object();}if(typeof deconcept.SWFObjectUtil=="undefined"){deconcept.SWFObjectUtil=new Object();}deconcept.SWFObject=function(_1,id,w,h,_5,c,_7,_8,_9,_a){if(!document.getElementById){return;}this.DETECT_KEY=_a?_a:"detectflash";this.skipDetect=deconcept.util.getRequestParameter(this.DETECT_KEY);this.params=new Object();this.variables=new Object();this.attributes=new Array();if(_1){this.setAttribute("swf",_1);}if(id){this.setAttribute("id",id);}if(w){this.setAttribute("width",w);}if(h){this.setAttribute("height",h);}if(_5){this.setAttribute("version",new deconcept.PlayerVersion(_5.toString().split(".")));}this.installedVer=deconcept.SWFObjectUtil.getPlayerVersion();if(!window.opera&&document.all&&this.installedVer.major>7){deconcept.SWFObject.doPrepUnload=true;}if(c){this.addParam("bgcolor",c);}var q=_7?_7:"high";this.addParam("quality",q);this.setAttribute("useExpressInstall",false);this.setAttribute("doExpressInstall",false);var _c=(_8)?_8:window.location;this.setAttribute("xiRedirectUrl",_c);this.setAttribute("redirectUrl","");if(_9){this.setAttribute("redirectUrl",_9);}};deconcept.SWFObject.prototype={useExpressInstall:function(_d){this.xiSWFPath=!_d?"expressinstall.swf":_d;this.setAttribute("useExpressInstall",true);},setAttribute:function(_e,_f){this.attributes[_e]=_f;},getAttribute:function(_10){return this.attributes[_10];},addParam:function(_11,_12){this.params[_11]=_12;},getParams:function(){return this.params;},addVariable:function(_13,_14){this.variables[_13]=_14;},getVariable:function(_15){return this.variables[_15];},getVariables:function(){return this.variables;},getVariablePairs:function(){var _16=new Array();var key;var _18=this.getVariables();for(key in _18){_16[_16.length]=key+"="+_18[key];}return _16;},getSWFHTML:function(){var _19="";if(navigator.plugins&&navigator.mimeTypes&&navigator.mimeTypes.length){if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","PlugIn");this.setAttribute("swf",this.xiSWFPath);}_19="<embed type=\"application/x-shockwave-flash\" src=\""+this.getAttribute("swf")+"\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\"";_19+=" id=\""+this.getAttribute("id")+"\" name=\""+this.getAttribute("id")+"\" ";var _1a=this.getParams();for(var key in _1a){_19+=[key]+"=\""+_1a[key]+"\" ";}var _1c=this.getVariablePairs().join("&");if(_1c.length>0){_19+="flashvars=\""+_1c+"\"";}_19+="/>";}else{if(this.getAttribute("doExpressInstall")){this.addVariable("MMplayerType","ActiveX");this.setAttribute("swf",this.xiSWFPath);}_19="<object id=\""+this.getAttribute("id")+"\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\""+this.getAttribute("width")+"\" height=\""+this.getAttribute("height")+"\" style=\""+this.getAttribute("style")+"\">";_19+="<param name=\"movie\" value=\""+this.getAttribute("swf")+"\" />";var _1d=this.getParams();for(var key in _1d){_19+="<param name=\""+key+"\" value=\""+_1d[key]+"\" />";}var _1f=this.getVariablePairs().join("&");if(_1f.length>0){_19+="<param name=\"flashvars\" value=\""+_1f+"\" />";}_19+="</object>";}return _19;},write:function(_20){if(this.getAttribute("useExpressInstall")){var _21=new deconcept.PlayerVersion([6,0,65]);if(this.installedVer.versionIsValid(_21)&&!this.installedVer.versionIsValid(this.getAttribute("version"))){this.setAttribute("doExpressInstall",true);this.addVariable("MMredirectURL",escape(this.getAttribute("xiRedirectUrl")));document.title=document.title.slice(0,47)+" - Flash Player Installation";this.addVariable("MMdoctitle",document.title);}}if(this.skipDetect||this.getAttribute("doExpressInstall")||this.installedVer.versionIsValid(this.getAttribute("version"))){var n=(typeof _20=="string")?document.getElementById(_20):_20;n.innerHTML=this.getSWFHTML();return true;}else{if(this.getAttribute("redirectUrl")!=""){document.location.replace(this.getAttribute("redirectUrl"));}}return false;}};deconcept.SWFObjectUtil.getPlayerVersion=function(){var _23=new deconcept.PlayerVersion([0,0,0]);if(navigator.plugins&&navigator.mimeTypes.length){var x=navigator.plugins["Shockwave Flash"];if(x&&x.description){_23=new deconcept.PlayerVersion(x.description.replace(/([a-zA-Z]|\s)+/,"").replace(/(\s+r|\s+b[0-9]+)/,".").split("."));}}else{if(navigator.userAgent&&navigator.userAgent.indexOf("Windows CE")>=0){var axo=1;var _26=3;while(axo){try{_26++;axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash."+_26);_23=new deconcept.PlayerVersion([_26,0,0]);}catch(e){axo=null;}}}else{try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");}catch(e){try{var axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");_23=new deconcept.PlayerVersion([6,0,21]);axo.AllowScriptAccess="always";}catch(e){if(_23.major==6){return _23;}}try{axo=new ActiveXObject("ShockwaveFlash.ShockwaveFlash");}catch(e){}}if(axo!=null){_23=new deconcept.PlayerVersion(axo.GetVariable("$version").split(" ")[1].split(","));}}}return _23;};deconcept.PlayerVersion=function(_29){this.major=_29[0]!=null?parseInt(_29[0]):0;this.minor=_29[1]!=null?parseInt(_29[1]):0;this.rev=_29[2]!=null?parseInt(_29[2]):0;};deconcept.PlayerVersion.prototype.versionIsValid=function(fv){if(this.major<fv.major){return false;}if(this.major>fv.major){return true;}if(this.minor<fv.minor){return false;}if(this.minor>fv.minor){return true;}if(this.rev<fv.rev){return false;}return true;};deconcept.util={getRequestParameter:function(_2b){var q=document.location.search||document.location.hash;if(_2b==null){return q;}if(q){var _2d=q.substring(1).split("&");for(var i=0;i<_2d.length;i++){if(_2d[i].substring(0,_2d[i].indexOf("="))==_2b){return _2d[i].substring((_2d[i].indexOf("=")+1));}}}return "";}};deconcept.SWFObjectUtil.cleanupSWFs=function(){var _2f=document.getElementsByTagName("OBJECT");for(var i=_2f.length-1;i>=0;i--){_2f[i].style.display="none";for(var x in _2f[i]){if(typeof _2f[i][x]=="function"){_2f[i][x]=function(){};}}}};if(deconcept.SWFObject.doPrepUnload){if(!deconcept.unloadSet){deconcept.SWFObjectUtil.prepUnload=function(){__flash_unloadHandler=function(){};__flash_savedUnloadHandler=function(){};window.attachEvent("onunload",deconcept.SWFObjectUtil.cleanupSWFs);};window.attachEvent("onbeforeunload",deconcept.SWFObjectUtil.prepUnload);deconcept.unloadSet=true;}}if(!document.getElementById&&document.all){document.getElementById=function(id){return document.all[id];};}var getQueryParamValue=deconcept.util.getRequestParameter;var FlashObject=deconcept.SWFObject;var SWFObject=deconcept.SWFObject;
/* Fine SWF Object */

var hasFlash=function(){var a=6;if(navigator.appVersion.indexOf("MSIE")!=-1&&navigator.appVersion.indexOf("Windows")>-1){document.write('<script language="VBScript"\> \non error resume next \nhasFlash = (IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash." & '+a+'))) \n</script\> \n');if(window.hasFlash!=null)return window.hasFlash}if(navigator.mimeTypes&&navigator.mimeTypes["application/x-shockwave-flash"]&&navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin){var b=(navigator.plugins["Shockwave Flash 2.0"]||navigator.plugins["Shockwave Flash"]).description;return parseInt(b.substr(b.indexOf(".")-2,2),10)>=a}return false}();String.prototype.normalize=function(){return this.replace(/\s+/g," ")};if(Array.prototype.push==null){Array.prototype.push=function(){var i=0,a=this.length,b=arguments.length;while(i<b){this[a++]=arguments[i++]}return this.length}}if(!Function.prototype.apply){Function.prototype.apply=function(a,b){var c=[];var d,e;if(!a)a=window;if(!b)b=[];for(var i=0;i<b.length;i++){c[i]="b["+i+"]"}e="a.__applyTemp__("+c.join(",")+");";a.__applyTemp__=this;d=eval(e);a.__applyTemp__=null;return d}}function named(a){return new named.Arguments(a)}named.Arguments=function(a){this.oArgs=a};named.Arguments.prototype.constructor=named.Arguments;named.extract=function(a,b){var c,d;var i=a.length;while(i--){d=a[i];if(d!=null&&d.constructor!=null&&d.constructor==named.Arguments){c=a[i].oArgs;break}}if(c==null)return;for(e in c)if(b[e]!=null)b[e](c[e]);return};var parseSelector=function(){var a=/^([^#.>`]*)(#|\.|\>|\`)(.+)$/;function r(s,t){var u=s.split(/\s*\,\s*/);var v=[];for(var i=0;i<u.length;i++)v=v.concat(b(u[i],t));return v}function b(c,d,e){c=c.normalize().replace(" ","`");var f=c.match(a);var g,h,i,j,k,n;var l=[];if(f==null)f=[c,c];if(f[1]=="")f[1]="*";if(e==null)e="`";if(d==null)d=document;switch(f[2]){case "#":k=f[3].match(a);if(k==null)k=[null,f[3]];g=document.getElementById(k[1]);if(g==null||(f[1]!="*"&&!o(g,f[1])))return l;if(k.length==2){l.push(g);return l}return b(k[3],g,k[2]);case ".":if(e!=">")h=m(d,f[1]);else h=d.childNodes;for(i=0,n=h.length;i<n;i++){g=h[i];if(g.nodeType!=1)continue;k=f[3].match(a);if(k!=null){if(g.className==null||g.className.match("(\\s|^)"+k[1]+"(\\s|$)")==null)continue;j=b(k[3],g,k[2]);l=l.concat(j)}else if(g.className!=null&&g.className.match("(\\s|^)"+f[3]+"(\\s|$)")!=null)l.push(g)}return l;case ">":if(e!=">")h=m(d,f[1]);else h=d.childNodes;for(i=0,n=h.length;i<n;i++){g=h[i];if(g.nodeType!=1)continue;if(!o(g,f[1]))continue;j=b(f[3],g,">");l=l.concat(j)}return l;case "`":h=m(d,f[1]);for(i=0,n=h.length;i<n;i++){g=h[i];j=b(f[3],g,"`");l=l.concat(j)}return l;default:if(e!=">")h=m(d,f[1]);else h=d.childNodes;for(i=0,n=h.length;i<n;i++){g=h[i];if(g.nodeType!=1)continue;if(!o(g,f[1]))continue;l.push(g)}return l}}function m(d,o){if(o=="*"&&d.all!=null)return d.all;return d.getElementsByTagName(o)}function o(p,q){return q=="*"?true:p.nodeName.toLowerCase().replace("html:", "")==q.toLowerCase()}return r}();var sIFR=function(){var a="http://www.w3.org/1999/xhtml";var b=false;var c=false;var d;var ah=[];var al=document;var ak=al.documentElement;var am=window;var au=al.addEventListener;var av=am.addEventListener;var f=function(){var g=navigator.userAgent.toLowerCase();var f={a:g.indexOf("applewebkit")>-1,b:g.indexOf("safari")>-1,c:navigator.product!=null&&navigator.product.toLowerCase().indexOf("konqueror")>-1,d:g.indexOf("opera")>-1,e:al.contentType!=null&&al.contentType.indexOf("xml")>-1,f:true,g:true,h:null,i:null,j:null,k:null};f.l=f.a||f.c;f.m=!f.a&&navigator.product!=null&&navigator.product.toLowerCase()=="gecko";if(f.m&&g.match(/.*gecko\/(\d{8}).*/))f.j=new Number(g.match(/.*gecko\/(\d{8}).*/)[1]);f.n=g.indexOf("msie")>-1&&!f.d&&!f.l&&!f.m;f.o=f.n&&g.match(/.*mac.*/)!=null;if(f.d&&g.match(/.*opera(\s|\/)(\d+\.\d+)/))f.i=new Number(g.match(/.*opera(\s|\/)(\d+\.\d+)/)[2]);if(f.n||(f.d&&f.i<7.6))f.g=false;if(f.a&&g.match(/.*applewebkit\/(\d+).*/))f.k=new Number(g.match(/.*applewebkit\/(\d+).*/)[1]);if(am.hasFlash&&(!f.n||f.o)){var aj=(navigator.plugins["Shockwave Flash 2.0"]||navigator.plugins["Shockwave Flash"]).description;f.h=parseInt(aj.substr(aj.indexOf(".")-2,2),10)}if(g.match(/.*(windows|mac).*/)==null||f.o||f.c||(f.d&&(g.match(/.*mac.*/)!=null||f.i<7.6))||(f.b&&f.h<7)||(!f.b&&f.a&&f.k<312)||(f.m&&f.j<20020523))f.f=false;if(!f.o&&!f.m&&al.createElementNS)try{al.createElementNS(a,"i").innerHTML=""}catch(e){f.e=true}f.p=f.c||(f.a&&f.k<312);return f}();function at(){return{bIsWebKit:f.a,bIsSafari:f.b,bIsKonq:f.c,bIsOpera:f.d,bIsXML:f.e,bHasTransparencySupport:f.f,bUseDOM:f.g,nFlashVersion:f.h,nOperaVersion:f.i,nGeckoBuildDate:f.j,nWebKitVersion:f.k,bIsKHTML:f.l,bIsGecko:f.m,bIsIE:f.n,bIsIEMac:f.o,bUseInnerHTMLHack:f.p}}if(am.hasFlash==false||!al.getElementsByTagName||!al.getElementById||(f.e&&(f.p||f.n)))return{UA:at()};function af(e){if((!k.bAutoInit&&(am.event||e)!=null)||!l(e))return;b=true;for(var i=0,h=ah.length;i<h;i++)j.apply(null,ah[i]);ah=[]}var k=af;function l(e){if(c==false||k.bIsDisabled==true||((f.e&&f.m||f.l)&&e==null&&b==false)||al.getElementsByTagName("body").length==0)return false;return true}function m(n){if(f.n)return n.replace(new RegExp("%\d{0}","g"),"%25");return n.replace(new RegExp("%(?!\d)","g"),"%25")}function as(p,q){return q=="*"?true:p.nodeName.toLowerCase().replace("html:", "")==q.toLowerCase()}function o(p,q,r,s,t){var u="";var v=p.firstChild;var w,x,y,z;if(s==null)s=0;if(t==null)t="";while(v){if(v.nodeType==3){z=v.nodeValue.replace("<","&lt;");switch(r){case "lower":u+=z.toLowerCase();break;case "upper":u+=z.toUpperCase();break;default:u+=z}}else if(v.nodeType==1){if(as(v,"a")&&!v.getAttribute("href")==false){if(v.getAttribute("target"))t+="&sifr_url_"+s+"_target="+v.getAttribute("target");t+="&sifr_url_"+s+"="+m(v.getAttribute("href")).replace(/&/g,"%26");u+='<a href="asfunction:_root.launchURL,'+s+'">';s++}else if(as(v,"br"))u+="<br/>";if(v.hasChildNodes()){y=o(v,null,r,s,t);u+=y.u;s=y.s;t=y.t}if(as(v,"a"))u+="</a>"}w=v;v=v.nextSibling;if(q!=null){x=w.parentNode.removeChild(w);q.appendChild(x)}}return{"u":u,"s":s,"t":t}}function A(B){if(al.createElementNS&&f.g)return al.createElementNS(a,B);return al.createElement(B)}function C(D,E,z){var p=A("param");p.setAttribute("name",E);p.setAttribute("value",z);D.appendChild(p)}function F(p,G){var H=p.className;if(H==null)H=G;else H=H.normalize()+(H==""?"":" ")+G;p.className=H}function aq(ar){var a=ak;if(k.bHideBrowserText==false)a=al.getElementsByTagName("body")[0];if((k.bHideBrowserText==false||ar)&&a)if(a.className==null||a.className.match(/\bsIFR\-hasFlash\b/)==null)F(a, "sIFR-hasFlash")}function j(I,J,K,L,M,N,O,P,Q,R,S,r,T){if(!l())return ah.push(arguments);aq();named.extract(arguments,{sSelector:function(ap){I=ap},sFlashSrc:function(ap){J=ap},sColor:function(ap){K=ap},sLinkColor:function(ap){L=ap},sHoverColor:function(ap){M=ap},sBgColor:function(ap){N=ap},nPaddingTop:function(ap){O=ap},nPaddingRight:function(ap){P=ap},nPaddingBottom:function(ap){Q=ap},nPaddingLeft:function(ap){R=ap},sFlashVars:function(ap){S=ap},sCase:function(ap){r=ap},sWmode:function(ap){T=ap}});var U=parseSelector(I);if(U.length==0)return false;if(S!=null)S="&"+S.normalize();else S="";if(K!=null)S+="&textcolor="+K;if(M!=null)S+="&hovercolor="+M;if(M!=null||L!=null)S+="&linkcolor="+(L||K);if(O==null)O=0;if(P==null)P=0;if(Q==null)Q=0;if(R==null)R=0;if(N==null)N="#FFFFFF";if(T=="transparent")if(!f.f)T="opaque";else N="transparent";if(T==null)T="";var p,V,W,X,Y,Z,aa,ab,ac;var ad=null;for(var i=0,h=U.length;i<h;i++){p=U[i];if(p.className!=null&&p.className.match(/\bsIFR\-replaced\b/)!=null)continue;V=p.offsetWidth-R-P;W=p.offsetHeight-O-Q;aa=A("span");aa.className="sIFR-alternate";ac=o(p,aa,r);Z="txt="+m(ac.u).replace(/\+/g,"%2B").replace(/&/g,"%26").replace(/\"/g, "%22").normalize() + S + "&w=" + V + "&h=" + W + ac.t;F(p,"sIFR-replaced");if(ad==null||!f.g){if(!f.g){if(!f.n)p.innerHTML=['<embed class="sIFR-flash" type="application/x-shockwave-flash" src="',J,'" quality="best" wmode="',T,'" bgcolor="',N,'" flashvars="',Z,'" width="',V,'" height="',W,'" sifr="true"></embed>'].join("");else p.innerHTML=['<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" sifr="true" width="',V,'" height="',W,'" class="sIFR-flash"><param name="movie" value="',J,'"></param><param name="flashvars" value="',Z,'"></param><param name="quality" value="best"></param><param name="wmode" value="',T,'"></param><param name="bgcolor" value="',N,'"></param> </object>'].join('')}else{if(f.d){ab=A("object");ab.setAttribute("data",J);C(ab,"quality","best");C(ab,"wmode",T);C(ab,"bgcolor",N)}else{ab=A("embed");ab.setAttribute("src",J);ab.setAttribute("quality","best");ab.setAttribute("flashvars",Z);ab.setAttribute("wmode",T);ab.setAttribute("bgcolor",N)}ab.setAttribute("sifr","true");ab.setAttribute("type","application/x-shockwave-flash");ab.className="sIFR-flash";if(!f.l||!f.e)ad=ab.cloneNode(true)}}else ab=ad.cloneNode(true);if(f.g){if(f.d)C(ab,"flashvars",Z);else ab.setAttribute("flashvars",Z);ab.setAttribute("width",V);ab.setAttribute("height",W);ab.style.width=V+"px";ab.style.height=W+"px";p.appendChild(ab)}p.appendChild(aa);if(f.p)p.innerHTML+=""}if(f.n&&k.bFixFragIdBug)setTimeout(function(){al.title=d},0)}function ai(){d=al.title}function ae(){if(k.bIsDisabled==true)return;c=true;if(k.bHideBrowserText)aq(true);if(am.attachEvent)am.attachEvent("onload",af);else if(!f.c&&(al.addEventListener||am.addEventListener)){if(f.a&&f.k>=132&&am.addEventListener)am.addEventListener("load",function(){setTimeout("sIFR({})",1)},false);else{if(al.addEventListener)al.addEventListener("load",af,false);if(am.addEventListener)am.addEventListener("load",af,false)}}else if(typeof am.onload=="function"){var ag=am.onload;am.onload=function(){ag();af()}}else am.onload=af;if(!f.n||am.location.hash=="")k.bFixFragIdBug=false;else ai()}k.UA=at();k.bAutoInit=true;k.bFixFragIdBug=true;k.replaceElement=j;k.updateDocumentTitle=ai;k.appendToClassName=F;k.setup=ae;k.debug=function(){aq(true)};k.debug.replaceNow=function(){ae();k()};k.bIsDisabled=false;k.bHideBrowserText=true;return k}();
/* Funzione di addizione/rimozione generica eventi */
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

// Restituisce il nome della banca
function getBank()
{
	var bankname = "";
	var bankNames = ["Webank","Bpm","Bl","Bm"];
	for(x=0;x<bankNames.length;x++)
		{
			if (location.href.indexOf(bankNames[x].toLowerCase())>=0) {
				bankname = (bankNames[x]!=="Webank")? bankNames[x].toUpperCase() + " Banking" :bankNames[x];
			};
		}
	return bankname;
}

/*** FUNZIONE CHECK E CONVERSIONE SOLO L' ID PER JQUERY SE NECESSARIO ***/
function jqc(element)
{
	var returnVal = element;
	if (jQuery.type(element) === "string")
	{
		//Se non comincia con # o punto mette il #
		returnVal = (element.indexOf("#") !== 0)? "#" + element : element;
	}
	return returnVal;
}
// --------- Framework per overlayer e alert ------------//
// Rileva il massimo z-index in tutto il documento corrente
function getNextHighestZindex()
{
	var highestIndex = 0;
	var currentIndex = 0;
	var elArray = Array();
	if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
	{
		elArray = document.all;
	}
	else
	{
		elArray = document.getElementsByTagName('*');
	}

	for(var i=0; i < elArray.length; i++){
		if(window.getComputedStyle){
			currentIndex = parseFloat(document.defaultView.getComputedStyle(elArray[i],null).getPropertyValue('z-index'));
			if(!isNaN(currentIndex) && currentIndex >= highestIndex && currentIndex < 16777271){highestIndex = currentIndex;}
		}
		if (elArray[i].currentStyle){
			//stile dell'elemento
			currentIndex = parseFloat(elArray[i].currentStyle['zIndex']);
			if(!isNaN(currentIndex) && currentIndex >= highestIndex && currentIndex < 16777271){highestIndex = currentIndex;}
		}
		if (elArray[i].style.zIndex){
			//stile dell'elemento
			currentIndex = parseFloat(elArray[i].style.zIndex);
			if(!isNaN(currentIndex) && currentIndex >= highestIndex && currentIndex < 16777271){highestIndex = currentIndex;}
		}
	}
	return(highestIndex+1);
}

//identifica la meta' orizzontale della pagina$
function getPageWidth ()
{
	if (navigator.appName != "Microsoft Internet Explorer")
	{
		return document.body.clientWidth;
	} 
	else 
	{
		if(navigator.userAgent.indexOf("MSIE 5.5") > -1)
		{
			return document.body.offsetWidth;
		}
		else
		{
			return document.documentElement.clientWidth;
		}
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
		if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
		{
			return document.body.offsetHeight;
		}
		else
		{
			return document.documentElement.clientHeight;
		}

	}
}

//scrolling amount
function getScrollY() {
	if(navigator.appName != "Microsoft Internet Explorer"){
		return window.pageYOffset;
	}
	else
	{
		if (navigator.userAgent.indexOf("MSIE 5.5") > -1)
		{
			return document.body.scrollTop;
		}
		else
		{
			return document.documentElement.scrollTop;
		}
	}
}

//oscura tutto
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
	if (window.attachEvent)
	{
		window.detachEvent("onresize",obscurateresize);
		window.detachEvent("onscroll", obscuratescroll);
	}
	else
	{
		window.removeEventListener("scroll", obscuratescroll, false);
		window.removeEventListener("DOMMouseScroll", obscuratescroll, false);
		window.removeEventListener("resize",obscurateresize, false);
	}		
	document.body.removeChild(document.getElementById('layerpop'));
}

//funzione che rende invisibili le tendine tranne quelle contenute nel div che risulta essere attivo (e nei suoi figli)
function arrangeSelect (idElement)
{
	if (idElement)
	{
		var x = document.getElementsByTagName("select").length;	
		x = document.getElementsByTagName("select");
		for (i = x.length; i; x[--i].style.visibility='hidden');
		var y = document.getElementById(idElement).getElementsByTagName('select');
		for (i = y.length; i; x[--i].style.visibility='visible');
	}
	else
	{
		x = document.getElementsByTagName("select");
		for (i = x.length; i; x[--i].style.visibility='visible');
	}
}


//funzione che apre un popup con overlayer
//mode = 'fixed' overlayer con margin-top fisso da css
//mode = 'floating' overlayer sempre centrato nella pagina
function openPopOverLayer (idElement, mode, opacitylevel)
{
	if (opacitylevel) {obscurateAll(opacitylevel)}
	else {obscurateAll()}
	
	document.body.insertBefore(document.getElementById(idElement), document.body.getElementsByTagName('div')[0]);
	document.getElementById(idElement).style.display='block';
	
	
	//allocazione funzioni scrolling e resizing
	popfixedalertresize = new Function ('document.getElementById(\''+ idElement + '\').style.marginLeft = Math.round((getPageWidth() - document.getElementById(\''+ idElement + '\').offsetWidth)/2) + \'px\';');
	popalertscroll = new Function ('document.getElementById(\''+ idElement + '\').style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(\''+ idElement + '\').offsetHeight)/2) + \'px\';');
	popalertresize = new Function ('document.getElementById(\''+ idElement + '\').style.marginLeft = Math.round((getPageWidth() - document.getElementById(\''+ idElement + '\').offsetWidth)/2) + \'px\';document.getElementById(\''+ idElement + '\').style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(\''+ idElement + '\').offsetHeight)/2) + \'px\';');
	
	//controlla se deve fissare la X o renderla dinamica
	if (mode == 'fixed')
	{
		document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';
		//riallinea l'oggetto orizzontalmente sul resize
		if (window.attachEvent)
		{
			window.attachEvent("onresize", popfixedalertresize);
		}
		else
		{
			window.addEventListener("resize", popfixedalertresize, false);
		}
	}
	else
	{
		if(document.getElementById(idElement).offsetHeight < getPageHeight ())
		{
			document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';
			document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';
			//riallinea l'oggetto sia verticalmente che orizzontalmente
			if (window.attachEvent)
			{
				window.attachEvent("onscroll", popalertscroll);
				window.attachEvent("onresize", popalertresize);
			}
			else
			{
				window.addEventListener("scroll", popalertscroll, false);
				window.addEventListener("resize", popalertresize , false);
			}
		}
		else
		{
			document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';
			if (getScrollY() + getPageHeight() - document.getElementById(idElement).offsetHeight < 0)
			{
				document.getElementById(idElement).style.marginTop = '0px';
			}
			else
			{
				document.getElementById(idElement).style.marginTop = getScrollY() + getPageHeight() - document.getElementById(idElement).offsetHeight  + 'px';
			}
		}
	}
	arrangeSelect(idElement);
	//Becca lo zIndex dell'overlay coprente
	document.getElementById(idElement).style.zIndex = getNextHighestZindex();
	$('#' + idElement).css('max-height', $(window).height())
}

//chiude l'overlayer + l'oscuratore
function closePopOverLayer (idElement)
{
	if (window.attachEvent)
		{
			if (popfixedalertresize) window.detachEvent("onresize", popfixedalertresize);
			if (popalertscroll) window.detachEvent("onscroll", popalertscroll);
			if (popalertresize) window.detachEvent("onresize", popalertresize);
		}
		else
		{
			if (popfixedalertresize) window.removeEventListener("resize", popfixedalertresize, false);
			if (popalertscroll) window.removeEventListener("scroll", popalertscroll, false);
			if (popalertresize) window.removeEventListener("resize", popalertresize , false);
		}

	document.getElementById(idElement).style.display='none';
	arrangeSelect();
	unobscurateAll ();
}

//apre una popup fissa da css o style nella pagina
//elemento ancora opzionale e serve per agganciare il layer ad un altro elemento di qualsiasi natura (i parametri TOP e LEFT sono configurabili nello stile  per posizionare l'elemento rispetto a questo)
function openFixedAlert (idElement, anchorElement)
{
	arrangeSelect (idElement);
	document.body.insertBefore( document.getElementById(idElement), document.body.getElementsByTagName('div')[0] );
	
	anchoralertresize = new Function ('document.getElementById(\''+ idElement + '\').style.marginTop = anchorElement.offsetTop + \'px\';document.getElementById(\''+ idElement + '\').style.marginLeft = anchorElement.offsetLeft + \'px\';');
	fixedalertresize =  new Function ('document.getElementById(\''+ idElement + '\').style.marginLeft = Math.round((getPageWidth() - document.getElementById(\''+ idElement + '\').offsetWidth)/2) + \'px\';');
	
	if (anchorElement)
	{
		document.getElementById(idElement).style.marginTop = anchorElement.offsetTop + 'px';
		document.getElementById(idElement).style.marginLeft = anchorElement.offsetLeft + 'px';
		//ancora in resize della finestra
		if (window.attachEvent)
		{
			window.attachEvent("onresize", anchoralertresize);
		}
		else
		{
			window.addEventListener("resize", anchoralertresize, false);
		}
	}
	else
	{
		document.getElementById(idElement).style.marginLeft = Math.round((getPageWidth() - document.getElementById(idElement).offsetWidth)/2) + 'px';
		if (window.attachEvent)
		{
			window.attachEvent("onresize", fixedalertresize);
		}
		else
		{
			window.addEventListener("resize", fixedalertresize, false);
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
	
	if (document.getElementById(idElement).offsetHeight < getPageHeight ())
	{
		document.getElementById(idElement).style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(idElement).offsetHeight)/2) + 'px';
		
		alertscroll = new Function('document.getElementById(\''+ idElement + '\').style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(\''+ idElement + '\').offsetHeight)/2) + \'px\';');
		alertresize = new Function('document.getElementById(\''+ idElement + '\').style.marginLeft = Math.round ( (getPageWidth() - document.getElementById(\''+ idElement + '\').offsetWidth )/2) + \'px\'; document.getElementById(\''+ idElement + '\').style.marginTop = getScrollY() + Math.round((getPageHeight() - document.getElementById(\''+ idElement + '\').offsetHeight)/2) + \'px\';');
		
		if (window.attachEvent)
		{
			window.attachEvent("onresize", alertresize);
			window.attachEvent("onscroll", alertscroll);
		}
		else
		{
			window.addEventListener("resize", alertresize, false);
			window.addEventListener("scroll", alertscroll, false);
		}
	}
	else
	{
			if (getScrollY() + getPageHeight() - document.getElementById(idElement).offsetHeight < 0)
			{
				document.getElementById(idElement).style.marginTop = '0px';
			}
			else
			{
				document.getElementById(idElement).style.marginTop = getScrollY() + getPageHeight() - document.getElementById(idElement).offsetHeight  + 'px';
			}
	}
	
}

//chiude un alert qualsiasi (occorre indicarlo se esiste un overlayer o un padre altrimenti si puo' omettere e saranno riabilitate tutte le select nella pagina)
function closeAlert (idElement,idFather)
{
	document.getElementById(idElement).style.display = 'none';
	
	//rimuove tutti gli eventi associati agli alert
	if (window.attachEvent)
	{
		if (typeof(alertresize) != 'undefined' ) window.detachEvent("onresize", alertresize);
		if (typeof(alertscroll) != 'undefined' ) window.detachEvent("onscroll", alertscroll);
		if (typeof(anchoralertresize) != 'undefined' ) window.detachEvent("onresize", anchoralertresize);
		if (typeof(fixedalertresize) != 'undefined' ) window.detachEvent("onresize", fixedalertresize);
	}
	else
	{
		if (typeof(alertresize) != 'undefined' ) window.removeEventListener("resize", alertresize, false);
		if (typeof(alertscroll) != 'undefined' ) window.removeEventListener("scroll", alertscroll, false);
		if (typeof(anchoralertresize) != 'undefined' ) window.removeEventListener("resize", anchoralertresize, false);
		if (typeof(fixedalertresize) != 'undefined' ) window.removeEventListener("resize", fixedalertresize, false);
	}
	if (idFather)
	{
		arrangeSelect (idFather);
	}
	else
	{
		arrangeSelect ();
	}
}

//chiude tutti gli alert aperti
function closeAllAlert()
{
	allDivs = document.getElementsByTagName('DIV');
	for (i=0; i<allDivs.length; i++)
	{
		if (allDivs[i].className.indexOf("layeralert")>-1)
		{
			document.getElementById(allDivs[i].id).style.display = 'none';
		}
	}
}

function focusPrint(divId)
{
	//catch di tutti gli elementi della pagina
	var wholedivs = document.getElementsByTagName('DIV');
	//appende a tutti gli elementi la classe "noprint"
	for (i=0; i<wholedivs.length; i++)
	{
		if (wholedivs[i].className)
		{
			wholedivs[i].className = wholedivs[i].className + ' noprint';
		}
		else
		{
			wholedivs[i].className = 'noprint';
		}
	}
	//toglie anche la classe di "non stampa" da id e "sottoelementi"
	document.getElementById(divId).className = document.getElementById(divId).className.replace('noprint','');
	var subdivs = document.getElementById(divId).getElementsByTagName('DIV');
	for (i=0; i<subdivs.length; i++)
	{
		if (subdivs[i].className)	
		{
			subdivs[i].className = subdivs[i].className.replace('noprint','');
		}
	}
}

function unFocusPrint()
{
	var wholedivs = document.getElementsByTagName('DIV');
	for (i=0; i<wholedivs.length; i++)
	{
		if (wholedivs[i].className)
		{
			wholedivs[i].className = wholedivs[i].className.replace('noprint','');
		}
	}
}

/* Fine Framework Overlayer e Alert */

/* Funzioni condivisibili */

/* Toglie tutti gli embed temporaneamente*/
function deFlashize ()
{
	allswf = document.getElementsByTagName('EMBED');
	for (i=0; i<allswf.length; i++)
	{
		allswf[i].style.visibility = 'hidden';
	}
}

/* Toglie tutti gli embed temporaneamente*/
function reFlashize ()
{
	allswf = document.getElementsByTagName('EMBED');
	for (i=0; i<allswf.length; i++)
	{
		allswf[i].style.visibility = 'visible';
	}
}
/* Fine funzioni condivisibili*/

/* Funzione per aprire/chiudere i box media  */
function openMedia(ahref)
		{
			var allmediadivs = ahref.parentNode.parentNode.parentNode.getElementsByTagName('DIV');
			for (i=0; i<allmediadivs.length; i++)
			{
				if (allmediadivs[i].className == 'bottom' ) allmediadivs[i].style.display ='none';
				if (allmediadivs[i].className == 'mediacontainer' ) allmediadivs[i].style.display ='block';
			}
			autoSizeMaincontent();
		}
		
function closeMedia(ahref)
		{
			var allmediadivs = ahref.parentNode.parentNode.getElementsByTagName('DIV');
			for (i=0; i<allmediadivs.length; i++)
			{
				if (allmediadivs[i].className == 'mediacontainer' ) allmediadivs[i].style.display ='none';
				if (allmediadivs[i].className == 'bottom' ) allmediadivs[i].style.display ='block';
			}
		}


/* FUNZIONI AL LOADING PER IE 6 */
function setMenuAnimation()
{
	if (document.getElementById('menu_product') && document.getElementById('menu_productCatalog'))
	{
		var menuitem = document.getElementById('menu_product').getElementsByTagName('A')[0];
		menuitem.onclick = function()
		{
			
			if (menuitem.parentNode.getElementsByTagName('DIV')[0].style.visibility != 'visible')
			{
				if(isSwfLayerable()) deFlashize();
				menuitem.parentNode.getElementsByTagName('DIV')[0].style.visibility='visible';
				menuitem.style.backgroundImage = 'url(/img/ico1bt_menu_open_on.gif)';
			}
			else
			{
				if(isSwfLayerable()) reFlashize();
				menuitem.parentNode.getElementsByTagName('DIV')[0].style.visibility='hidden';
				menuitem.style.backgroundImage = 'url(/img/ico1bt_menu_open.gif)';
			}
			
		}
		setMenuHeight();
	}
}

/* FUNZIONI PER TUTTI I BROWSER */
function setMenuElementHeight (menuelements, classname)
{
	elementmaxheight = 0;
	
	for (i=0; i < menuelements.length; i++)
	{
		if (menuelements[i].className == classname)
		{
			if (menuelements[i].offsetHeight >= elementmaxheight)
			{
				elementmaxheight = menuelements[i].offsetHeight;
			}
		}
	}
	for (i=0; i < menuelements.length; i++)
	{
		if (menuelements[i].className == classname)
		{
				menuelements[i].style.height = elementmaxheight + 'px';
		}
	}
}


/* Tooltip */
function showTooltip (anchor,e)
{
	var tooltip = anchor.getElementsByTagName('SPAN')[0];
	base = 0;

	if (getStyle(anchor, 'display') == 'block')
		{
		tooltip.style.marginTop = (base - tooltip.offsetHeight - 5) + 'px'
		}
	else
			{
			if (navigator.appVersion.indexOf('MSIE 7')>0 || navigator.appVersion.indexOf('MSIE 6')>0) base = 14;
			tooltip.style.marginTop = (base - tooltip.offsetHeight) - (anchor.offsetHeight) + 'px'
			}
	
	// Margin laterale
	margin = 25;
	if (navigator.appVersion.indexOf('MSIE')>0) margin = 30;
	
	tooltip.style.left = e.clientX - margin + 'px';
	tooltip.style.visibility = 'visible';
}

function hideTooltip (anchor)
{
	anchor.getElementsByTagName('SPAN')[0].style.visibility = 'hidden';
}	


/*
	-- Get the rendered style of an element --
	
	Example call of the function:	
	getStyle(document.getElementById("container"), "font-size");
*/
function getStyle(oElm, strCssRule){
	var strValue = "";
	
	if(document.defaultView && document.defaultView.getComputedStyle){
		strValue = document.defaultView.getComputedStyle(oElm, "").getPropertyValue(strCssRule);
	}
	else if(oElm.currentStyle){
		try{
			strCssRule = strCssRule.replace(/\-(\w)/g, function (strMatch, p1){
				return p1.toUpperCase();
			});
			strValue = oElm.currentStyle[strCssRule];
		}
		catch(e){
			// Used to prevent an error in IE 5.0
		}
	}
	
	return strValue;
}


/* Ricalcolo altezza del menu */
function setMenuHeight()
{
	//rileva le altezze maggiori
	setMenuElementHeight (document.getElementById('menu_productCatalog').getElementsByTagName('UL'),'productdetails');
	//setMenuElementHeight (document.getElementById('menu_productCatalog').getElementsByTagName('DIV'),'primopianobody');
	
	//altezza dei separatori 
	separators = document.getElementById('menu_productCatalog').getElementsByTagName('DIV');
	for (i=0; i < separators.length; i++)
	{
		if (separators[i].className == 'productcatalogseparator')
		{
			if (navigator.userAgent.indexOf('MSIE 6')>0 || navigator.userAgent.indexOf('MSIE 5')>0)
			{
				separators[i].style.height = separators[i].parentNode.offsetHeight - 10 + 'px';
			}
			else
			{
				separators[i].style.height = separators[i].parentNode.offsetHeight + 'px';
			}
		}
	}
}


/* Toolbox */
function closealltools ()
{
	document.getElementById('tool_seguici').getElementsByTagName('DIV')[0].style.display = 'none';
	document.getElementById('tool_seguici').getElementsByTagName('A')[0].style.backgroundImage = 'url(/img/ico1bt_tool_seguici.gif)';
	document.getElementById('tool_partecipa').getElementsByTagName('DIV')[0].style.display = 'none';
	document.getElementById('tool_partecipa').getElementsByTagName('A')[0].style.backgroundImage = 'url(/img/ico1bt_tool_partecipa.gif)';
	document.getElementById('tool_condividi').getElementsByTagName('DIV')[0].style.display = 'none';
	document.getElementById('tool_condividi').getElementsByTagName('A')[0].style.backgroundImage = 'url(/img/ico1bt_tool_condividi.gif)';
}

function toolchangestatus(element,elementid)
{
	if (element.getElementsByTagName('DIV')[0].style.display != 'block')
		{
			//chiude tutti i tool aperti
			closealltools();
			element.getElementsByTagName('DIV')[0].style.display='block';
			element.getElementsByTagName('A')[0].style.backgroundImage = 'url(/img/ico1bt_' + elementid + '_on.gif)';
		}
		else
		{
			element.getElementsByTagName('DIV')[0].style.display = 'none';
			element.getElementsByTagName('A')[0].style.backgroundImage = 'url(/img/ico1bt_' + elementid + '.gif)';
		}
}

function setToolAnimation(toolname)
{
	var tool = document.getElementById (toolname);
	tool.getElementsByTagName('A')[0].onclick = function()	{toolchangestatus (tool,toolname)}
	tool.getElementsByTagName('A')[1].onclick = function()	{toolchangestatus (tool,toolname)}
	
	tool.getElementsByTagName('A')[0].onmouseover = function() 
	{
		tool.getElementsByTagName('A')[0].style.backgroundImage =  'url(/img/ico1bt_' + toolname + '_on.gif)';
	}
	 tool.getElementsByTagName('A')[0].onmouseout =  function() 
	{
		if (tool.getElementsByTagName('A')[0].parentNode.getElementsByTagName('DIV')[0].style.display != 'block') 
		{
			tool.getElementsByTagName('A')[0].style.backgroundImage =  'url(/img/ico1bt_' + toolname + '.gif)';
		}
	}	
	
}

/* Funzione per resize automatico < 800x600 */
function setWindowPage()
{
	if (document.getElementById('mainleft'))
	{
		if (document.documentElement.clientWidth)
		{
			if (document.documentElement.clientWidth < 890)
			{
				document.getElementById('mainleft').style.display = 'none';
			}
		window.onresize = function()
		{
			if (document.documentElement.clientWidth < 890)
				{
				document.getElementById('mainleft').style.display = 'none';
				}
			else
				{
				document.getElementById('mainleft').style.display = 'block';
				}
			}
		}
	}
}

/* ridimensionamento del contenitore principale */
function autoSizeMaincontent()
{
	var mce = document.getElementById('maincontent');
	var ce = document.getElementById('content');
	//var re = document.getElementById('right');
	
	if (mce && ce)
		{
		if (document.getElementById('printconsole')) mce.style.paddingBottom = '29px';
		ce.style.height = 'auto';
		mce.style.height = 'auto';
		if (mce.offsetHeight + 14 < ce.offsetHeight)
			{
			if (document.getElementById('fullpromo'))
				{
				mce.style.height = ce.offsetHeight - document.getElementById('fullpromo').offsetHeight - 14 + 'px';
				}
			else
				{
				mce.style.height = ce.offsetHeight - 14 + 'px';
	
			// controlla altezza pagina + se esiste paginazione e aumenta altezza pagina 
				if (document.getElementById('pagconsole') && ce.offsetHeight < 470) mce.style.height = ce.offsetHeight + 84 + 'px'; 
			}
		}
	}

}

/* SWF altezza in menu spalla */
function setFlashHeight(flashHeight)
	{
		document.getElementById('sidebanner').height = flashHeight;
	}	


/* Hover menu spalla */
function initializeSideMenu()
{
	var sidemenuLinks = new Array();
	if ( document.getElementById('sidemenu') )
	{
		//inserisce 
		allLinks = document.getElementById('sidemenu').getElementsByTagName('A');
		for (i=0; i<allLinks.length; i++)
		{
			if (allLinks[i].className.indexOf('sidemenu_link') >= 0)
			{
				sidemenuLinks.push (allLinks[i]);
			}
		}
		
		sideMenuTest = sidemenuLinks[0].getElementsByTagName('IMG')[0];
		if (sidemenuLinks.length > 0 && sideMenuTest)
		{
			for (i=0; i<sidemenuLinks.length; i++)
			{
				if (sidemenuLinks[i].className == 'sidemenu_link selected')
				{
					if (sidemenuLinks[i].getElementsByTagName('IMG')[0].src.indexOf('_on.gif')<0)
					{
						//voce selezionata
						sidemenuLinks[i].getElementsByTagName('IMG')[0].src = sidemenuLinks[i].getElementsByTagName('IMG')[0].src.replace('.gif','_on.gif');
					}
				}
				else
				{
						//voci hoverizzabili
						sidemenuLinks[i].onmouseover = function ()
						{
							this.getElementsByTagName('IMG')[0].src = this.getElementsByTagName('IMG')[0].src.replace('.gif','_on.gif');
						}
						sidemenuLinks[i].onmouseout = function ()
						{
							this.getElementsByTagName('IMG')[0].src = this.getElementsByTagName('IMG')[0].src.replace('_on.gif','.gif');
						}
				}
			}
		}
	}
}

/* apertura dei tab via indice */
function tabActivate ( tabber )
{
	tabber.className='active';
	tabcontents = new Array();
	//tabbercontainer
	for (i=0;i<document.getElementById('maincontent').getElementsByTagName('DIV').length; i++)
	{
		if (document.getElementById('maincontent').getElementsByTagName('DIV')[i].className == 'tabblercontainer')
		{
			tabcontents.push (document.getElementById('maincontent').getElementsByTagName('DIV')[i]);
		}
	}
	
	for ( i=0; i<tabbers.length; i++ )
	{
		
		if (tabbers[i] == tabber)
		{
			tabcontents[i].style.display = 'block';
			tabbers[i].className ='active';
		}
		else
		{
			tabcontents[i].style.display ='none';
			tabbers[i].className ='disactive';
		}
	}
	autoSizeMaincontent();
}

/* Eventuale attivazione tabbler */
function initializeTabbler()
{
	if ( document.getElementById('tabbler') )
	{
		tabbers = document.getElementById('tabbler').getElementsByTagName('a');
		for (i=0;i<tabbers.length; i++)
		{
			tabbers[i].onclick = function () {tabActivate( this )};
		}
		
		//nasconde gli altri tab
		nofirst = false;
		for (i=0;i<document.getElementById('maincontent').getElementsByTagName('DIV').length; i++)
		{
			if (document.getElementById('maincontent').getElementsByTagName('DIV')[i].className == 'tabblercontainer')
			{
				if (nofirst)
				{
					document.getElementById('maincontent').getElementsByTagName('DIV')[i].style.display = 'none';
				}
				nofirst = true;
			}
		}
		autoSizeMaincontent();
	}
}


/* indicizza oggetto swf */
function thisMovie(movieName) 
{
    if (navigator.appName.indexOf("Microsoft") != -1) 
	{
    	return window[movieName];
    } 
	else 
	{
    	return document[movieName];
	}
}

/* oggetto complesso */
function mainContentObjectOpen(maincontentobjectId)
{
	//interrompe la riproduzione degli oggetti attivi
	try {thisMovie('flashguarda').stopPlayback_Video()} catch(e){}
	try {thisMovie('flashascolta').stopPlayback_Audio()} catch(e){}
	
	for (i=0; i<maincontentobjectButtons.length; i++)
	{
		if (document.getElementById(maincontentobjectButtons[i]))
		{
			document.getElementById(maincontentobjectButtons[i]).style.display = 'none';
			document.getElementById('tab' + maincontentobjectButtons[i]).className = document.getElementById('tab' + maincontentobjectButtons[i]).className.replace(" selected","");
			document.getElementById('tab' + maincontentobjectButtons[i]).className = document.getElementById('tab' + maincontentobjectButtons[i]).className.replace("selected","");
		}
	}	
	//stoppa tutto
	document.getElementById(maincontentobjectId).style.display = 'block';
	if (document.getElementById('tab' + maincontentobjectId).className.length>0)
	{
		document.getElementById('tab' + maincontentobjectId).className = document.getElementById('tab' + maincontentobjectId).className + " selected";
	}
	else
	{
		document.getElementById('tab' + maincontentobjectId).className = 'selected';
	}
	
}


function mainContentObjectFire ()
	{
		if(document.getElementById('maincontentobjectmenu'))
		{
			maincontentobjectButtons = Array('guarda','ascolta','simula');
			for (i=0; i<maincontentobjectButtons.length; i++)
			{
				//applicazione dei bottoni 
				if (document.getElementById(maincontentobjectButtons[i]))
					{
						classappend = "";
						classappend = ' class = \"' + document.getElementById(maincontentobjectButtons[i]).className.replace("objectarea ","");
						if (document.getElementById(maincontentobjectButtons[i]).style.display != 'none')
						{
							classappend = classappend + ' selected';
						}
						classappend = classappend + "\"";
						document.getElementById('maincontentobjectmenu').innerHTML = document.getElementById('maincontentobjectmenu').innerHTML + '<a href=\"javascript:;\" alt=\"'+ maincontentobjectButtons[i] +'\" ' + classappend + ' onclick=\"mainContentObjectOpen(\''+ maincontentobjectButtons[i] + '\');" id ="tab'+ maincontentobjectButtons[i] +'"></a>'
					}
				else
					{
						document.getElementById('maincontentobjectmenu').innerHTML = document.getElementById('maincontentobjectmenu').innerHTML + '<span class="disabled"></span>'
					}
			}
			
			// controlla se esiste almeno un tab aperto ed eventualmente innesca il primo 
			// per sicurezza se ci si dimentica nel codice di togliere il DISPLAY = NONE
			var moa = $("#maincontentobjectarea .objectarea");
			var notdisp = true;
			$.each(moa,function(i,v) {if ($(v).css("display") != "none" && notdisp == true) notdisp = false;});
			if (notdisp)
			{
				mainContentObjectOpen(document.getElementById('maincontentobjectmenu').getElementsByTagName('A')[0].id.replace('tab',''));
			}
		}
	}

// titoli (h3) su di una riga sola centrati con immagine	
function titolize()
{
	titles = document.getElementsByTagName('H3');
	for (i=0; i<titles.length; i++)
	{
		if (titles[i].parentNode.className == 'titimg' && titles[i].parentNode.getElementsByTagName('img')[0] && !titles[i].parentNode.getElementsByTagName('h4')[0])
		{
			titles[i].className = 'title senzaimg';
		}	
		if (titles[i].parentNode.className == 'titimg servizi' && titles[i].parentNode.getElementsByTagName('img')[0] && !titles[i].parentNode.getElementsByTagName('h4')[0])
		{
			titles[i].className = 'title servizinoh4';
		}
	}
}	
	
// Apertura/chiusura box laterale numeri verdi
function openVerdi ()
{ 
	document.getElementById('numeriverdidetails').style.display = 'block';
	document.getElementById('openverdi').style.display = 'none';
	autoSizeMaincontent();
}

function closeVerdi ()
{
	document.getElementById('numeriverdidetails').style.display = 'none';
	document.getElementById('openverdi').style.display = 'block';
	autoSizeMaincontent();
}	


/* Funzioni Contributi */
function showContributo(ahref)
	{
	if (ahref.parentNode.parentNode.parentNode.getElementsByTagName('DIV')[1].style.display == 'none')
		{
		ahref.innerHTML = 'Riduci'
		ahref.parentNode.parentNode.parentNode.className = 'itemcontainer extended';
		ahref.parentNode.parentNode.parentNode.getElementsByTagName('DIV')[1].style.display = '';
		ahref.parentNode.parentNode.parentNode.getElementsByTagName('DIV')[2].style.display = 'none';
		}
	else
		{
		ahref.innerHTML = 'Espandi'
		ahref.parentNode.parentNode.parentNode.className = 'itemcontainer';
		ahref.parentNode.parentNode.parentNode.getElementsByTagName('DIV')[2].style.display = '';
		ahref.parentNode.parentNode.parentNode.getElementsByTagName('DIV')[1].style.display = 'none';
		}
	 autoSizeMaincontent();	
	}

/*funzione trim*/
function trim(stringToTrim) {
	return stringToTrim.replace(/^\s+|\s+$/g,"");
}
/*fine trim*/

function initializeContributi()
	{
	arraycontributi = new Array();
	if (document.getElementById('contributi'))
		{
		for(i=0; i<document.getElementById('contributi').childNodes.length; i++)
			{
			if (document.getElementById('contributi').childNodes[i].className == 'itemcontainer')
				{
				arraycontributi.push(document.getElementById('contributi').childNodes[i]);
				}	
			}
	
		for(i=0; i<arraycontributi.length; i++)
			{
			var aEspandi= 0;
			arraycontributi[i].className = 'itemcontainer';
			arraycontributi[i].getElementsByTagName('DIV')[1].style.display = 'none';
			var abstracta = document.createElement("div");
			abstracta.className = 'itemtext';
			var abstracttext = '';
			var testoreale = arraycontributi[i].getElementsByTagName('DIV')[1].innerHTML;
			testoreale = testoreale.replace("<!-- commento di webank -->","");
			testoreale = testoreale.replace("<!-- fine commento di webank -->","");
			testoreale = trim(testoreale);
			arraycontributi[i].getElementsByTagName('DIV')[1].innerHTML = testoreale;
			
			/* se il contributo ha una lunghezza < 143 caratteri mostra il box espanso e senza link di espansione*/
			if (arraycontributi[i].getElementsByTagName('DIV')[1].innerHTML.length<=143)
				{
				/*nuovo*/
				if (arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[0] && arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[0].className == "clspiace")
				 		{
				 		aEspandi++; /*variabile del numero di "a" all'interno dell'array nello stesso div per espandi e riduci*/
				 		}
				 if (arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[1] && arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[1].className == "clspiace2")
				 		{
				 		aEspandi++; /*variabile del numero di "a" all'interno dell'array nello stesso div per espandi e riduci*/
				 		}
				 		arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[aEspandi].parentNode.innerHTML = '';
				 		arraycontributi[i].className = 'itemcontainer extended';
						arraycontributi[i].getElementsByTagName('DIV')[1].style.display = '';
				 		
				 
				}
			/* fine < 143 */
			
			/* se contributo > 143 caratteri */
			
			/* controllo se esiste commento di webank per espandere il box e inserire link 'riduci'*/
			else if (arraycontributi[i].getElementsByTagName('DIV')[1].getElementsByTagName('P')[0].getElementsByTagName('STRONG')[0] && arraycontributi[i].getElementsByTagName('DIV')[1].getElementsByTagName('P')[0].getElementsByTagName('STRONG')[0].className == "commwb")
				{
				 if (arraycontributi[i].getElementsByTagName('DIV')[1].style.display == 'none')
				 	{
				 	if (arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[0] && arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[0].className == "clspiace")
				 		{
				 		aEspandi++; /*variabile del numero di "a" all'interno dell'array nello stesso div per espandi e riduci*/
				 		}
				 if (arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[1] && arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[1].className == "clspiace2")
				 		{
				 		aEspandi++; /*variabile del numero di "a" all'interno dell'array nello stesso div per espandi e riduci*/
				 		}
					arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[aEspandi].innerHTML = 'Riduci'
					arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[aEspandi].href = 'javascript:;';
					arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[aEspandi].onclick = function() {showContributo(this)};
					arraycontributi[i].className = 'itemcontainer extended';
					arraycontributi[i].getElementsByTagName('DIV')[1].style.display = '';
					abstracttext = arraycontributi[i].getElementsByTagName('DIV')[1].innerHTML.substring(0,140) + '...</p>';
					abstracta.innerHTML = abstracttext;
					arraycontributi[i].appendChild(abstracta);
					arraycontributi[i].getElementsByTagName('DIV')[2].style.display = 'none';
					}
				}
			/* fine commento webank */
			
			/* se >143 caratteri e non commento webank*/
			else
				{
				if (arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[0] && arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[0].className == "clspiace")
				 		{
				 		aEspandi++; /*variabile del numero di "a" all'interno dell'array nello stesso div per espandi e riduci*/
				 		}
				 if (arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[1] && arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[1].className == "clspiace2")
				 		{
				 		aEspandi++; /*variabile del numero di "a" all'interno dell'array nello stesso div per espandi e riduci*/
				 		}
				 	
				abstracttext = arraycontributi[i].getElementsByTagName('DIV')[1].innerHTML.substring(0,140) + '...</p>';
				abstracta.innerHTML = abstracttext;
				arraycontributi[i].appendChild(abstracta);
				arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[aEspandi].href = 'javascript:;';
				arraycontributi[i].getElementsByTagName('DIV')[0].getElementsByTagName('A')[aEspandi].onclick = function() {showContributo(this)};
				}
			}
		}
	/* fine > 143 */
	autoSizeMaincontent();
	}

/* Animazione accordion */
function expandaccordion (button)
{
	if (button.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display != 'none')
	{
		button.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = 'none';
		button.innerHTML = 'Espandi';
		button.className = '';
	}
	else
	{
		button.parentNode.parentNode.getElementsByTagName('DIV')[0].style.display = '';
		button.innerHTML = 'Riduci';
		button.className = 'extended';
	}
	autoSizeMaincontent();
}
	
/* JS Rilevazione flash in primo piano (true = normale) */	
function isSwfLayerable ()
	{
	if (navigator.platform.substr(0,3) == "Lin") return false;
	if (navigator.appVersion.indexOf("Safari/4")>=0) return false; 
	return true;
	}

function visualizzaInt(){
	if(document.getElementById('secondoform').style.display=="none"){
	document.getElementById('secondoform').style.display="block"
	document.getElementById('btnadd').innerHTML = 'Rimuovi secondo intestatario';
	}
	else {
	document.getElementById('secondoform').style.display="none"
	document.getElementById('btnadd').innerHTML = 'Aggiungi secondo intestatario';
	}
}

function initializeVisualizzaInt(){
	if(document.getElementById('btnadd')) {
	document.getElementById('secondoform').style.display='none';
	document.getElementById('btnadd').onclick =  function () {visualizzaInt();};
	}
}


function checkUserAndPwd(user,ut1,pwd,admin) {
	var check = true;
	
	if (user.id == 'idCl') 	{
		if ((user.value.length == 0)
				|| (user.value == "User ID"))
			check = false;
	}
	else {
		if ( (user.value.length == 0) ||(user.value == "Codice cliente")
				|| ((!admin.checked) && (ut1.value.length == 0) || (ut1.value == "Codice utente")))
			check = false;
	}
	
	check = check && !( (pwd.value.length == 0) || (pwd.value == "Password"));
	
	return check;
}


/*** Gestione dei cookies in login ***/
function setLoginCookie (value)
{
	//setta lo stato con expiry date di 1 anno (fino alla fine dell'anno successivo)
	var dataOggi = new Date();
	document.cookie = "openedLogin="+ value + "; expires= Thu, 31-Dec-"+ dataOggi.getFullYear()+1 +" 23:59:59 GMT";
}

function checkLoginCookie ()
{
	//Setta la durata del cookie in giorni, se non è una macchina unix based
	if (!(navigator.appVersion.indexOf("X11") != -1))
	{
		var isCookieToSet = true;
		if (document.cookie.length > 0) 
		{
			var allCookies = document.cookie.split(";")
			for (i=0;i<allCookies.length;i++)
			{
				if (allCookies[i].split("=")[0].replace(" ","") == "openedLogin")
				{
					if (allCookies[i].split("=")[1].replace(" ","") == "true")
					{
						switchLogin ();
					}
					isCookieToSet = false;
				}
			}
		}
		
		if (isCookieToSet) setLoginCookie ("false");
	}
}



/* BLOCCO DEL BUSINESS */
loadBlockBusiness = function(){
	$("#toplogin input[name=service]").click(function(){
		$(".loginMessage").remove();
		if($(this).val()=="INLINEANET") {
			// Blocco dell'interfaccia e svuotamento campi
			$("#toplogin input[name=username],#toplogin input[name=password]").val("").addClass("disabled"); 
			$("#toplogin input").attr("disabled","disabled");
			$("#toplogin label,#toplogin input,#buttonentra").addClass("disabled");
			$("#toplogin .doubleoption label, #toplogin .doubleoption input").removeClass("disabled").removeAttr("disabled"); 
			
			// Messaggio ad espansione
			
			busMsgCont = $("<div>").addClass("loginMessage").append(
			$("<span>").addClass("imgCont"),
			"<p>Gentile Cliente,<br>come gi&agrave; comunicato, l'offerta di conto corrente business e tutti i servizi web, di pagamento e di incasso, <strong>non sono pi&ugrave; attivi</strong>.<br><br>Ti invitiamo a recarti presso un'agenzia BPM, dove un gestore &egrave; a tua disposizione per trovare la soluzione pi&ugrave; adatta alle tue esigenze.</p>"
			).hide();
			$(".formLogin").prepend(busMsgCont);
			busMsgCont.slideDown();
			
		}
		else
		{
			// Sblocco dell'interfaccia
			$("#toplogin input").removeAttr("disabled");
			$("#toplogin label,#toplogin input,#buttonentra").removeClass("disabled");
			// Rimozione del messaggio
		}
		
	});

}

// CAMPAGNA MESSAGGIO ACCETTAZIONE COOKIES
loadCookieCheck = function() {
	
	if (!wStore.read("fascioneCookie") && location.href.indexOf("/mgmFacebook")<0) {
	
		fascioneCookie = $("<div>").attr("id","cookieCheck").hide();
		fascioneCookieClose = $("<a>").attr("href","javascript:;").addClass("button").html("ok").click(function(){
			// Setta la variabile di cookie accettato
			wStore.write("fascioneCookie","true")
			// Chiude il fascione
			fascioneCookie.fadeOut();
		}).hide();
		fascioneCont = $("<div>").addClass("fascioneCont").append(
			$("<p>").html("Questo sito utilizza cookie di profilazione anche di terze parti per inviare materiale informativo in linea con le tue preferenze.<br><br>Per maggiori informazioni e per negare il consenso al loro utilizzo <a href=\"http://www.gruppobpm.it/it-ist/cookies.html\" target=\"_blank\">clicca qui</a>. Proseguendo la navigazione acconsenti all'uso dei cookie."),
			fascioneCookieClose.delay(300).fadeIn()
		);
		$("body").append(fascioneCookie.append(fascioneCont).fadeIn());

	}
}

/* JS UNOBTRUSIVE AZIONI HOME */
addEvent(window, 'load', function() {
	
	//SELECT REPLACE COMMENTATO PER CREAZIONE NUOVA LOGIN
	if (document.getElementById('toplogin')) checkLoginCookie();
	
	/* macro layout - h.pagina, dimensioni contenuti */
	setWindowPage();
	autoSizeMaincontent();
	
	// Blocco dell'accesso business
	loadBlockBusiness();
	
	/* layout */
	titolize ();
	mainContentObjectFire ();
		
	/* innesco funzioni */
	setMenuAnimation();

	//Messaggio conferma cookie
	loadCookieCheck();
	
	/* Check per elementi condizionali */
	// Funzione da rimuovere con il font replacement spalla sinistra
	//initializeSideMenu();
	initializeTabbler();
	initializeContributi();
	initializeVisualizzaInt();
	//Barra dei social
	initSocialBar();
});

function generaImg(inputCaptcha)
	{
	document.getElementById(inputCaptcha).src='./generaIMG.do?a='+Math.random();
	}

//capcha usato nel callMeBack dell'abbandono dell'AOL
function generaCaptcha(inputCaptcha, path)
{
	document.getElementById(inputCaptcha).src = path+'/wb/generaIMG.do?a='+Math.random();
}


// Funzioni per autoadattamento della pagina rispetto all'altezza del flash del calcolatore dei mutui
function setCalcolatoreHeight(altezza)
{
	var cm = $("#calcolatore_mutui");
	var ce = $("#content");
	var lc = $("#leftcontent");
	var rc = $("#right");
	cm.css("height",altezza + "px");
	if (rc.height() < lc.height())
	{
		if (altezza < 400)
		{
			ce.css("height",450 +'px');
			lc.css("height",450 +'px');
		}
		else
		{
			ce.css("height", altezza + 50+'px');
			lc.css("height", altezza + 50+'px');
		}
	}
	else
	{
		lc.css("height",rc.height() + "px");
	}
}


function pop_up_int(url,titolo,size)
	{
	var s_width = screen.width;
	var s_height = screen.height;
	var sizeL = 330;

	if (s_width >= 1024 && s_height >= 768)
		sizeL = 560;
	//alert("sizeL="+sizeL);

	if (size=='small')
		window.open(cgi_script + '/wb/contents/condizioni/pop_template.jsp?link='+url+'&titolo='+titolo+'','main','width=500,height=500,top=0,left='+sizeL+',status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');
	else
		window.open(cgi_script + '/wb/contents/condizioni/pop_template.jsp?link='+url+'&titolo='+titolo+'','main','width=780,height=500,top=0,left='+sizeL+',status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');
	}

/* Apre una pagina (esterna) in box popup
 * @param url
 * @param titolo
 * @param size Può essere <tt>small</tt>, altro.
 */
	function pop_up_est(url, titolo, size) {
		var s_width = screen.width;
		var s_height = screen.height;
		var sizeL = 330;

		if (s_width >= 1024 && s_height >= 768)
			sizeL = 560;

		if (size == 'small' )
			window.open(url, titolo, 'width=500,height=500,top=0,left='+sizeL+',status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');
		else
			window.open(url, titolo, 'width=780,height=500,top=0,left='+sizeL+',status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=yes');
	}

 /* LOADING OVERLAY */
/*
 Setta il loading overlay
 - L'oggetto overlay ha sempre l'id uguale a quello dell'oggetto origine con append di "_loadingoverlay".
 - obj e' l'oggetto da ricoprire
 - Il parametro opzionale objlowerlimit contiene un eventuale altro id oggetto al quale far "arrivare" l'overlay
 - Il parametro opzionale coloroverlay contiene un eventuale altro colore di sfondo da attribuire all'overlay
 */

function setLoadingOnObject (idobj,idobjlowerlimit, coloroverlay, imgBck) 
{
	var obj = $(jqc(idobj)),
		idobj = "#" + obj.attr('id'),
		objlowerlimit = $(idobjlowerlimit);
	//assegna l'oggetto ad una variabile
	//crea un nuovo div necessario a nascondere tutto con l'id ricavato
	var overlay = $("<div>", {
		'id':  obj.attr('id') + "_loadingoverlay",
		'class': "loadingOverlay"
	});
	if (coloroverlay) {
		overlay.css('backgroundColor', 'coloroverlay');
	}
	if (imgBck) {
		overlay.css('backgroundImage', 'imgBck').addClass('img');
	}
	$('body').append(overlay);
	
	//Proprieta' overlay impostate via JS 
	overlay.css({
		height: obj.height() - 1 + 'px',
		zIndex: getNextHighestZindex(),
		top: obj.offset().top + 'px',
		width: obj.width() + 'px', 
		left: obj.offset().left + 'px'
	});

	//Riassegna le proprieta' in caso di TR
	if (obj.is("tr")) {
		overlay.css({ width: obj.width() - 2 + 'px', left: obj.offset().left + 1 + 'px'	});
	}
	//Reimposta altezza e larghezza se esiste objlowerlimit
	if (objlowerlimit.length) {
		lowerobject = objlowerlimit;
		overlay.height(lowerobject.offset().top - obj.offset().top + lowerobject.height() + 'px');
		overlay.width(lowerobject.offset().left - obj.offset().left + lowerobject.width() + 'px');
		if (lowerobject[0].tagName.toLowerCase() === 'tr') {
			overlay.width(lowerobject.offset().left - obj.offset().left + lowerobject.width() - 2 + 'px');
		}
	} 
	
	//inserisce la chiocciola di caricamento
	var loadingimage = $("<img>");
	//seleziona il da farsi in base alla grandezza dell' overlay
	//determina il padding-top dell'immagine all'interno dell'oggetto loader 
	if (overlay.height() < 37) {
		//chiocciola piccola
		loadingimage.attr('src', '/wscmn/img/ico2inf_loading.gif');
		if (overlay.height() > 16) { loadingimage.css('paddingTop', (overlay.height() / 2) - 8 + 'px'); }	
		else { loadingimage.height(loadingimage.width(overlay.height() - 2 + 'px')); }
	}
	else {
	    // chiocciola grande
		loadingimage.attr('src', '/wscmn/img/ico2inf_loadingbig.gif');
		if (overlay.height() / 2 > 16) {   
		    loadingimage.css('paddingTop', (overlay.height() / 2) - 16 + 'px');
		}
	}
	
	if (overlay.attr('class') == 'loadingOverlay' + ' ' + 'img') {
		//chiocciola piccola
		loadingimage.attr('src', '/img/ret/ico2inf_loading_green.gif');
		if (overlay.height() > 16) { loadingimage.css('paddingTop', (overlay.height() / 2) - 8 + 'px'); }	
		else {
			loadingimage.height((overlay.height() - 2) + 'px');
			loadingimage.width((overlay.height() - 2) + 'px');
		}
	}
	overlay.append(loadingimage);
	
	//Controlla la grandezza dell'overlayer e, qualora superasse lo schermo, mette la chiocciola nella prima posizione verticale in alto visibile
	//L'oggetto esce dallo schermo nella parte superiore
	
	if ((obj.offset().top - $(window).scrollTop()) < 0) {
		//Se l'oggetto sta nello schermo...
		if ((obj.offset().top + overlay.height() - $(window).scrollTop()) > 0) {
			loadingimage.css('paddingTop', ($(window).scrollTop() - obj.offset().top  + 1 + 'px'));
		}
	}
	// L'oggetto esce dallo schermo nella parte inferiore
	else if ((obj.offset().top + overlay.height()) - ($(window).scrollTop() + $(window).height()) > 0) {
		//Se l'oggetto sta nello schermo...
		if ((obj.offset().top) - ($(window).scrollTop() + $(window).height() ) < 0) {
			loadingimage.css('paddingTop', '1px');
		}
	}
	// Addiziona l'evento onresize per tutti gli elementi loading in overlay se la funzione non e' definita
	$(window).on("resize", loadinglayersResize);
}

 /*
	Rileva il loading overlay dall'id di obj e lo distrugge
*/
function unsetLoadingOnObject (idobj) {
    idobj = jqc(idobj);
	var overlay = $(idobj + '_loadingoverlay');
	if (overlay.length) overlay.remove();
	
	// Se non sono piu' visibili loading overlay rimuove la funzione onresize
	if (!$('div.loadingOverlay').length) { $(window).off("resize", loadinglayersResize); }
}

/*
	Se si ridimensiona lo schermo...
*/
function loadinglayersResize () 
{
var loadinglayers = $('div.loadingOverlay');
for (i=0; i<loadinglayers.length; i++)
	{
	var obj = $('#' + loadinglayers[i].id.replace('_loadingoverlay','')).eq(0);
	loadinglayers[i].style.left = obj.offset().left + 'px';
	if (obj.attr('tagName').toLowerCase() == 'tr')
		{
		loadinglayers[i].style.left = obj.offset().left + 1 + 'px';
		}
	}
 }


 /* FINE LOADING OVERLAY */
/*** AJAX - Utility per fare chiamate AJAX ***
 *
 * @author      Andrea Colanicchia
 */

// Funzione per fare il parsing del JSON di risposta di una chiamata AJAX
function parseJSON (json) {
	var data = null;
	
	try	{
		data = json.evalJSON();
	}
	catch (e) {
		data = null;
	}
	
	return data;
}

/*	method: 'get' o 'post'
	url: url della chiamata
	successFunc: funzione da chiamare in caso di success
	failureFunc: funzione da chiamare in caso di failure
	parameters: oggetto JS per i parametri da passare, es. {par1: 'aaa', par2: 'bbb'}
	
	--------------------------------------------------------------------------------------------------
	Nel caso si voglia passare una funzione con dei parametri, la procedura sarà simile alla seguente:
	
	Prendiamo la seguente funzione:
	replaceWithAjaxResponse(data, id)
	
	Dovremo chiamarla in questo modo:
	function (data) { replaceWithAjaxResponse(data, idKeyValue); }
	
	- "replaceWithAjaxResponse" è la funzione da chiamare
	- "window" è il contesto in cui eseguire la funzione: in genere non va cambiato
	- "idKeyValue" è il parametro che vogliamo passare
	- "transport", invece, verrà passato in automatico dalla funzione AJAX, e conterrà il risultato della chiamata
	--------------------------------------------------------------------------------------------------------------
*/
function AJAXGenericCall(method, url, successFunc, failureFunc, parameters, type) {
	if (!type) type = "json"; 
	if (url.indexOf(cgi_script) !== 0) { url = cgi_script + url; }
	jqAJAXCall(method, type, url, successFunc, failureFunc, parameters);
}

 function replaceWithAjaxResponse(data, id) {
	$('#' + id).html(data);
}

function failureFromAjaxResponse(e) {
	if (typeof console !== 'undefined') { console.debug(e); }
}

function generateAjaxCall(urlString, idKeyValue, selectedIndex) {
	var parameters = {idKey: idKeyValue, urlString: urlString, selIndex: selectedIndex};
	AJAXGenericCall('post', urlString, function (data) { replaceWithAjaxResponse(data, idKeyValue) }, failureFromAjaxResponse, parameters, "html");
}

function renewAjaxCall(idKey, urlString, selectedIndex, delay) {
	setLoadingOnObject(idKey);
	setTimeout(function() { unsetLoadingOnObject(idKey); }, delay);
	generateAjaxCall(urlString, idKey, selectedIndex);
}
/*** |FINE| AJAX - Utility per fare chiamate AJAX ***/


/* Nuova funzione apertura login */
function switchLogin()
{
	loginDiv = document.getElementById("toplogin").parentNode.parentNode;
	var formLogin = document.getElementById("toplogin");
	var radioContainer = formLogin.getElementsByTagName('fieldset')[1];
	var radioContainerDiv = radioContainer.getElementsByTagName('div')[0];
	var radioClient = radioContainerDiv.getElementsByTagName('input');
	var radioContainerProfilo = formLogin.getElementsByTagName('fieldset')[2];
	var radioContainerDivProfilo = radioContainerProfilo.getElementsByTagName('div')[0];
	var radioConsultare = radioContainerDivProfilo.getElementsByTagName('input')[1];
	var radioConsultareDisp =radioContainerDivProfilo.getElementsByTagName('input')[0];
	var labelConsultare = radioContainerDivProfilo.getElementsByTagName('label')[1];
	if (loginDiv.className == "headerLogin") 
		{
			if (!isSwfLayerable ()) deFlashize();
			loginDiv.className = "headerLogin opened";
			setLoginCookie ("true");
			document.getElementById('idCl').focus();
			
			/* disabilitazione option consultare per business */
			if(window.attachEvent) {radioClient[0].attachEvent ('onclick', function(){disabilitaRadio(false)}); radioClient[1].attachEvent ('onclick', function(){disabilitaRadio(true)});}
			else {radioClient[0].addEventListener ('click', function(){disabilitaRadio(false)},false); radioClient[1].addEventListener ('click', function(){disabilitaRadio(true)},false);}
		} 
	else 
		{ 
			if (!isSwfLayerable ()) reFlashize();
			loginDiv.className = "headerLogin";
			setLoginCookie ("false");
		}
	function disabilitaRadio(state)
			{
				if(state==true)
				{
					radioConsultare.disabled=true;
					labelConsultare.className='disabled';
					radioConsultareDisp.checked =true;
					
				}
				else 
				{
					radioConsultare.removeAttribute('disabled');
					labelConsultare.className='';
				}
			
			}
	
}

/* riposizionamento box condividi */

if ((navigator.userAgent.indexOf("MSIE 7.0") != -1) || ((document.documentMode && document.documentMode !='8') ))
	{	
		var addthis_config = 
			{
			ui_offset_top: -230,
			ui_offset_left: -180,
			ui_click: true
			}
	}
else if (navigator.userAgent.indexOf("MSIE 6.0") != -1) 
	{
		var addthis_config = 
			{
			ui_offset_top: -240,
			ui_offset_left: -190,
			ui_click: true
			}
		}
		
		
else {
		var addthis_config = 
			{
			ui_offset_top: -210,
			ui_offset_left: -180,
			ui_click: true
			}
		}


/* TABELLA AD ESPANSIONE */
function activetabledetail (button)
{
	var rigaorigine = button.parentNode.parentNode;
	var tuttelerighe = rigaorigine.parentNode.getElementsByTagName("TR");
	if (rigaorigine.className == "opened")
	{
		//chiude
		rigaorigine.className = "";
		classasis = "detailrow";
		classtobe = "closed"; 
	}
	else
	{
		//apre
		rigaorigine.className = "opened";
		classasis = "closed";
		classtobe = "detailrow";
	}
	for (i=0;i<tuttelerighe.length;i++)
		{
			if (tuttelerighe[i] == rigaorigine)
			{
				if (tuttelerighe[i+1])
				{
					x = i + 1;
					stop = true;
					do
					{
						if (tuttelerighe[x].className == classasis) tuttelerighe[x].className = classtobe;
						x++;
						if (tuttelerighe[x])
						{
							if (tuttelerighe[x].className != classasis) stop = false;
						}
						else
						{
							stop = false;
						}
					} while (stop);
				}
			}
		}
autoSizeMaincontent();
}
/* FINE TABELLA AD ESPANSIONE */

/* Funzioni Facebook "Mi piace" */
function setFBLike ()
{
	var iframeBox = document.getElementById("fbLike");
	var pageUrl = document.location.href.split("&").join("%26amp;").toString();
	iframeBox.innerHTML = "<iframe src=\"https://www.facebook.com/plugins/like.php?href=" + pageUrl + "&locale=en_US&layout=button_count&show_faces=false&width=100&action=like&font=tahoma&colorscheme=light&height=21\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:100px; height:21px;\" allowTransparency=\"true\"></iframe>";
} 

function loadFBLike()
{
	addEvent(window,"load", setFBLike)
}

/* condividi nel footer*/
//numero icone e dimensione parametri passati
function openShareTool(ico,larg) 
{
	var toolCnt = document.getElementById("condividiID");
	var toolbtn = toolCnt.getElementsByTagName("a");
	for(i=0; i<toolbtn.length; i++) 
		{
			if(toolbtn[i].className == "condividibtn") {
				var tools = toolbtn[i].parentNode.getElementsByTagName("div")[0];
				var imgLarg = tools.getElementsByTagName("img")[0]
				if(tools.style.display == "none") 
				{
					tools.style.display="block";
					//moltiplica il numero icone per la dimensione di ognuna , agiunge il padding e il margine
					tools.getElementsByTagName("div")[0].style.width=((ico*larg) + (4*(ico-1)) + 12 + 'px'); 
				}
				else{
					tools.style.display="none";
				}
			}
		}
	}
	
// Inizializza la barra dei Social Network
// Attribuisce i link (se non sono ancora inizializzati) 
function initSocialBar()					
{					
	if(document.getElementById("condividiTool"))
	{
		//Trova url della pagina
		var pageUrl = document.location.href.split("&").join("%26");
		//Attribuisce i link ai social network
		document.getElementById("cond_fb").href = "http://www.facebook.com/sharer.php?u=" + pageUrl;
		document.getElementById("cond_digg").href = "http://digg.com/submit?url="+ pageUrl;
		document.getElementById("cond_del").href = "http://delicious.com/post?url="+ pageUrl;
		document.getElementById("cond_tw").href = "http://twitter.com/share?url="+ pageUrl;
		document.getElementById("cond_ok").href = "http://oknotizie.alice.it/post?url="+ pageUrl;
		document.getElementById("cond_mail").href = "mailto:?Subject=Ti segnalo questa pagina di Webank&Body="+ pageUrl;
	}	
}

// questionario - gestione errori - text area - radio button

//Nuovo tabGraf
function tabGrafSelect (aelement)
{
	var allelements = aelement.parentNode.getElementsByTagName("A");
	for (i=0; i<allelements.length; i++)
	{
		if (allelements[i] == aelement)
		{
			allelements[i].className = "selected";
			document.getElementById("tabGrafCont" + i).style.display = "block";
		}
		else
		{
			allelements[i].className = "";
			document.getElementById("tabGrafCont" + i).style.display = "none";
		}
	}
}


function simulaSwitch (){ 
	if (document.getElementById('simula01').style.display == 'block'){ 
	document.getElementById('simula02').style.display = 'block';
	document.getElementById('simula01').style.display = 'none';
	} else { 
	document.getElementById('simula02').style.display = 'none';
	document.getElementById('simula01').style.display = 'block';
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
	autoSizeMaincontent();
}


//Popup aucap
function openPopAucap(aucapUrl)
{
	window.open(aucapUrl,'aucap','width=463,height=610,top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');
}

/*transizione front page eventi */
/* Funzione acquisizione "root" XML */
function getXMLRoot(xmlPath)
{
	if (window.XMLHttpRequest)
		 {
		 // Browser "nuovi" che supportano XHTTPRequest
		 var xmlhttp = new XMLHttpRequest();
		 }
	else
		 {
		 // Browser vecchi
		 xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		 }
	xmlhttp.open ("GET", xmlPath, false);
	xmlhttp.send();
	xmlDocument = xmlhttp.responseXML;
	//Indice del primo nodo, sui vari Browser
	if (/MSIE (\d+\.\d+);/.test(navigator.userAgent))
	{
		firstIndex = 1;
	}
	else
	{
		firstIndex = 0;
	}
	return xmlDocument.childNodes[firstIndex]; 
}
/* Fine acquisizione di una "root" XML*/

function slideEventiSwitch(cindex)
{
	clearTimeout(slideEventiEvent);
	$(slideEventiDiv[slideEventiIndex]).animate({'margin-left':'-382px','opacity': '0'},300);
	$(slideEventiDiv[slideEventiIndex]).next().animate({'margin-left':'0px','opacity': '0'},300);//riporta a margine zero
	$(slideEventiDiv[slideEventiIndex]).prev().animate({'margin-left':'0px','opacity': '0'},300);//riporta a margine zero
	if (cindex >= 0)
	{	
		slideEventiIndex = cindex;
	}
	else
	{
		slideEventiIndex = slideEventiIndex + 1;
		if (slideEventiIndex >= slideEventiA.length) slideEventiIndex = 0;
	}
	
	$(slideEventiDiv[slideEventiIndex]).fadeIn(100);
	
	$(slideEventiDiv[slideEventiIndex]).animate({'opacity': '100'})
	
	
    slideEventiEvent = setTimeout(function(){slideEventiSwitch()}, 6000);
}


function slideEventiInit()
{
	//Acquisizione delle cellette via XML
	var xmlslideEventi = getXMLRoot(xmlPath);
	var slideEventiLink = xmlslideEventi.getElementsByTagName("link");
	var slideEventiId = xmlslideEventi.getElementsByTagName("eventid");
	var slideEventiImage = xmlslideEventi.getElementsByTagName("image");
	var slideEventicont_HTML = "";
	displayslideEventi = "";
	for (x=0; x < slideEventiLink.length; x++)
	{
		slideEventicont_HTML = slideEventicont_HTML + '<div class="slideCont"' + displayslideEventi + '>' + '<img src="' + slideEventiImage[x].firstChild.nodeValue + '"/>' +  '<a class= "greenbutton" href="' + slideEventiLink[x].firstChild.nodeValue + '&amp;openedEvent=' + slideEventiId[x].firstChild.nodeValue + '" title="Vedi i dettagli dell\'evento">' + '<span>dettagli</span>' + '</a>' + '</div>';
		displayslideEventi = ' style=\"display:none;margin-left:0\"';
	}
	$('#intslideEventi').css('overflow','hidden');
	$('#intslideEventi').html(function() {return slideEventicont_HTML });
	slideEventiDiv = $('#intslideEventi div');
	slideEventiA = $('#intslideEventi a');
	slideEventiIndex = 0;
	slideEventiEvent = setTimeout(function() {slideEventiSwitch()},6000);
}
function slideEventiInt()
{
	var slideEventi = $('#intslideEventi');
	xmlPath = "/xml/slideEventi.xml";
	addEvent(window,"load",slideEventiInit);
	
}

/* Area eventi cicli */
function initEventList(openedEvent)
{
	var eventLists =  $('.eventList'),
		totalRows =  eventLists.find('.eventRow'),
		eventDets =  eventLists.find('.eventDetail'),
		eventHovers = eventLists.find('.eventHover'),
		eventWraps = eventLists.find('.eventWrap');
	
	// Una volta cliccato un "iscriviti" blocca le animazioni
	eClickNav = false;
	
	eHover = function()
	{
		var eR = $(this).parent();
		var eH = $(eR).find(".eventHover").get(0);
		var eW = $(eR).find(".eventWrap").get(0);
		$(eW).attr('class','eventWrap hover');
		$(eH).fadeIn(300);
	}
	
	eOut = function ()
	{
		var eR = $(this).parent();
		var eH = $(eR).find(".eventHover").get(0);
		$(eH).fadeOut(100);
		var eW = $(eR).find(".eventWrap").get(0);
		$(eW).attr('class','eventWrap');
	}
	
	eClick = function(idToOpen)
	{
		if (!eClickNav)
		{
			rowToOpen = $(idToOpen); 
			
			var eventDet = $(rowToOpen).find('.eventDetail').get(0);
			var eventTitle = $(rowToOpen).find(".eventRowLeft a").get(0);
			$("#maincontent").css('height', 'auto');
			if (!$(rowToOpen).hasClass('opened'))
			{
				//Lo apre
				totalRows.removeClass('opened'); //resetto le classi su alte righe
				$(rowToOpen).addClass('opened');
				// Mette il Title al posto dell'InnerHTML
				 eventDets.hide();
				 setTimeout(function(){eventWraps.removeClass('hover');eventHovers.hide()}, 300);
				//chiudo tutte le altre schede
				$(eventDet).slideDown(300);
				
			}
			else
			{
				//Lo chiude
				(rowToOpen).removeClass('opened');
				$(eventDet).hide();
			}
			setTimeout(autoSizeMaincontent,300);
			var eventT = $(eventTitle).html();
			$(eventTitle).html($(eventTitle).attr('title'));
			$(eventTitle).attr('title',eventT);
		}
	}
	
	eLockClick = function()
	{
		eClickNav = true;
	}
	
	
	startEventList = function()
	{
		eRows = $("#maincontent div.eventWrap");
		
		$(eRows).each(function(index){
			$(this).bind('mouseenter', eHover); 
			$(this).bind('mouseleave', eOut);
			$(this).bind('click', function(){eClick($(this).parent())}); 
			//Pulsante insert associato
			var eRowsIscriviti = $(this).find(".rightButt").get(0);
			if (eRowsIscriviti)  $(eRowsIscriviti).bind('click', eLockClick); 
		})
	}
	addEvent(window,"load",startEventList);
	
	if (openedEvent)
	{
		
		//Simula il click, ovvero apre l'accordion
		addEvent(window,"load",eval("eClick(\"" + openedEvent + "\");"));
		//Si sposta sull'evento
		var offsetopenedEvent = $('#' + openedEvent).offset()
		$('html, body').animate({scrollTop:offsetopenedEvent.top}, 'slow');
	}
	
}

/* WRAPPER PER EX Generic Call*/
function jqAJAXCall(method, type, url, successFunc, failureFunc, parameters) {
	var ajaxOptions = { type: method, url: url };
	// 'json', 'xml', 'html'
	if (type) { ajaxOptions.dataType = type; }
	if (successFunc) { ajaxOptions.success = successFunc; }
	if (failureFunc) { ajaxOptions.failure = failureFunc; }
	if (parameters) { ajaxOptions.data = parameters}
	$.ajax(ajaxOptions);
}
/* Wrapper per Ajax Request */

function cstPopup(url, title, width, height)
{
	// Defaults
	width = width || 500;
	height = height || 300;
	window.open(url + '&title=' + title, 'popup', 'width=' + width + ',height=' + height + ',top=0,left=0,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=yes');
}

// Scrittura/lettura dati su localStorage o cookie statico
var wStore = (function(){
	// true se il browser non utilizza localHost (lo inizializza una volta sola)
	var checkStorage = (("localStorage" in window) && window["localStorage"] !== null),

	write = function (key,value,expdays) 
	{
		if(checkStorage)
		{
			// utilizza localStorage
			localStorage.setItem(key, value);
		}
		else
		{
			// Scrive nel cookie
			var expdate=new Date();
			if (typeof expdays == "undefined")
				{			
					expdays= 365;
				}
			expdate.setDate(expdate.getDate() + expdays);
			document.cookie = key + "=" + escape(value) + "; expires=" + expdate.toUTCString();
		}
	},
	
	read = function(key)
	{
		if(checkStorage)
		{
			// legge da localStorage
			return localStorage.getItem(key);
		}
		else
		{
			// Legge dal cookie
			var valToReturn = null;
			$.each(document.cookie.split(";"), function(i, v) {
				if (v.split("=")[0] == key) {
					valToReturn = unescape(v.split("=")[1]);
				}
			});
			return valToReturn;
		}
	}

	return {write: write, read: read}
}());