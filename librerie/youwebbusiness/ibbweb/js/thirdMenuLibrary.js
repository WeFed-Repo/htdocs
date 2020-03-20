/*
==================== Libreria utilizzata per la gestione del menu di terzo livello ==========================

Cedac software S.R.L.
*/

// == Valorizzazione delle variabili con tipo Browser e Versione 
var tipoBrowser = navigator.appName;
var versioneBrowser = navigator.appVersion;

//
// roba da esaminare bene prima di usare

var isIE45= document.all;
var isNav6= 0;
var isNav4= document.layers;

if (document.getElementById && !isIE45){
	isNav6=true;
}

No3 = (parseInt(navigator.appVersion) > 3) ? 1:0;
layer = (isIE45 && No3) ? "document.all[menu].style" : (isNav4 && No3) ? "document.layers[menu]" :(isNav6 && No3) ? "document.getElementById(menu).style" : 0;
var timer=100;

function show(){ 
	if(layer){
		if(timer) clearTimeout(timer);
		for(menu=0; menu<layer.length; menu++){ 
			if(layer[menu])	eval(layer).visibility = "hidden";
		}
		for(i=0; i<arguments.length; i++){ 
			menu=arguments[i]; 
			eval(layer).visibility = "visible"; 
		}
	}
}

// fine roba da esaminare prima di usare
//
function showLayer(nomeLayer,nOfMenu,relativePos){
// Questa funzione mostra un layer hidden
// == ESEMPIO:
// ==========	showLayer('menu1')
// == Visualizza il layer con id 'menu1'
// == Nel caso in cui il browser sia Explorer viene eseguita anche la funzione
// == 'hideElement' che nasconde i '<SELECT>' che vanno a sovrapporsi al layer
// == per evitare il bug di Explorer che "mangia" i layer se sovrapposti a SELECT
// == in più nel caso di explorer viene settato nello style del layer la 
// == proprietà 'filter', che serve per dare la trasparenza, parametro 
// == 'Opacity' Max = 100 Non trasparente Min = 0 Invisibile
	if (tipoBrowser == "Microsoft Internet Explorer"){
		if(parent.main.document.all[nomeLayer] != null){
			hideElement("SELECT",nOfMenu,relativePos);
			parent.main.document.all[nomeLayer].style.visibility = 'visible';
			parent.main.document.all[nomeLayer].style.filter = filtroDelLayer;
		}else{
			//alert("Menu Error!");//Il div non è presente nella pagina principale
		}
	}else{
		if(parent.main.document.getElementById(nomeLayer) != null){
			parent.main.document.getElementById(nomeLayer).style.visibility = 'visible';
		}else{
			//alert("Menu Error!");//Il div non è presente nella pagina principale
		}
	}
}
function hideLayer(nomeLayer){
// == Questa funzione nasconde il layer passato
// == ESEMPIO:
// ==========	hideLayer('menu1')
// == Nasconde il Layer che si chiama menu1
// == Nel caso in cui il browser sia Explorer viene eseguita anche la funzione
// == 'showElement' che ripristina i '<SELECT>' eventualmente nascosti
// == durante la chiamata della funzione 'showLayer'
	if (tipoBrowser == "Microsoft Internet Explorer")
		showElement("SELECT");
	//document.getElementById(nomeLayer).style.visibility = 'hidden';
	if(parent.main.document.getElementById("menu1") != null){
		parent.main.document.getElementById("menu1").style.visibility = 'hidden';
	}else{
		//alert("Menu Error!")//Il div non è presente nella pagina principale
	}
	if(parent.main.document.getElementById("menu2") != null){
		parent.main.document.getElementById("menu2").style.visibility = 'hidden';
	}else{
		//alert("Menu Error!");//Il div non è presente nella pagina principale
	}	
}

function hideLayerMenu2(nomeLayer){
// == Questa funzione nasconde il layer passato
// == ESEMPIO:
// ==========	hideLayer('menu1')
// == Nasconde il Layer che si chiama menu1
// == Nel caso in cui il browser sia Explorer viene eseguita anche la funzione
// == 'showElement' che ripristina i '<SELECT>' eventualmente nascosti
// == durante la chiamata della funzione 'showLayer'
	//if (tipoBrowser == "Microsoft Internet Explorer")
		//showElement("SELECT");
	//document.getElementById(nomeLayer).style.visibility = 'hidden';
	//parent.main.document.getElementById("menu1").style.visibility = 'hidden';
	if(parent.main.document.getElementById("menu2")){
		parent.main.document.getElementById("menu2").style.visibility = 'hidden';
	}else{
		//alert("Menu Error!");//Il div non è presente nella pagina principale
	}
}

var timeVar;
function layerTimeOut(nomeLayer,act){
// == Questa funzione permette di nascondere i layer
// == Esempio:
// ==========	layerTimeOut('menu1','onmouseoutDalLayer')
// == imposta il timeOut sul Layer chiamato 'menu1'
// == il secondo parametro che viene passato, è la descrizione dell'azione
// == che chiama questa funzione, nell'esempio sopra 'onmouseoutDalLayer'
// == ha il significato dell'evento onMouseOut specificato sul layer
// == queste descrizioni, sono decise arbitrariamente nello switch della funzione
// == e hanno lo scopo di parametrizzare il tempo del timeout
	switch(act){
		case 'onmouseoutDalLayer'://In questo caso viene settato il tempo per il timeout, nell'evento onmouseout dal layer
			timeVar = setTimeout("hideLayer('" + nomeLayer + "')",5);
			break;
		case 'onclick'://In questo caso viene settato il tempo per il timeout, nell'evento onclick
			timeVar = setTimeout("hideLayer('" + nomeLayer + "')",0);
			break;
		default:
			timeVar = setTimeout("hideLayer('" + nomeLayer + "')",1000);
	}		
}

// == Questa funzione azzera il timeOut "timeVar"
function clearTimeOut(){
	clearTimeout(timeVar);
}


function hideElement(elmID,k,relativePos)
{
	//alert("k: " + k)
// == Questa funzione permette di nascondere un elemento html, quando il menu risulta sovrapposto
// == in questo caso sarà sempre il "<SELECT>" perchè per via di un bug di explorer, questo risulta
// == sempre in primo piano rispetto al Layer.
// == Esempio:
// ==========	hideElement("SELECT")
// == Nasconde tutti i select che si vanno a sovrapporre al div chiamato "menu1"
/*	for(var k=1; k <= nOfMenus; k++){// loop tra tutti i layer presenti

		if(eval("parent.main.document.all['menu" + k + "']")){
			var y = eval("parent.main.menu" + k + ".offsetHeight") + document.body.scrollTop;
			var x = eval("parent.main.menu" + k  + ".offsetLeft");
		}
		if(parent.main.document.all['inizioMenumenu' + k]) var x2 = parent.main.document.all['fineMenumenu' + k].offsetLeft;
		for (var i = 0; i < parent.main.document.all.tags(elmID).length; i++)
		{
			obj = parent.main.document.all.tags(elmID)[i];
			if (! obj || ! obj.offsetParent) continue;
			with(obj){
				objLeft   = offsetLeft;
				objWidth  = offsetWidth
				objTop    = offsetTop;
				objParent = offsetParent;
			}
			while (objParent.tagName.toUpperCase() != "BODY")
			{
				with(objParent){
					objLeft  += offsetLeft;
					objTop   += offsetTop;
					objParent = offsetParent;
				}
			}
			if((y >= objTop) && !((objLeft <= x && (objLeft+objWidth) <=  x) || (objLeft >= (x+x2)))) obj.style.visibility = "hidden";
		}
		
	}*/
	//for(var k=1; k <= nOfMenus; k++){// loop tra tutti i layer presenti
		if(eval("parent.main.document.all['inizioMenumenu" + k + "']")){
			var y = eval("parent.main.menu" + k + ".offsetHeight") + parent.main.document.body.scrollTop + relativePos;
			var x = eval("parent.main.menu" + k  + ".offsetLeft");
			//var x = eval("parent.main.document.all['inizioMenumenu" + k  + "'].offsetLeft");
		}
		
		if(parent.main.document.all['inizioMenumenu' + k]) var x2 = parent.main.document.all['fineMenumenu' + k].offsetLeft;
		x2 += x;
		
			//alert("y: " + y + " - x: " + x + " - x2: " + x2);
		
		//alert("x " + x + "x2 " + x2)
		arrSelect = parent.main.document.getElementsByTagName("SELECT");
		for(i=0;i<arrSelect.length;i++)
		{
			selx=0;
			sely=0;
			var selp;
			if(arrSelect[i].offsetParent)
			{
				selp=arrSelect[i]; 
				while(selp.offsetParent){
					selp=selp.offsetParent;
					selx+=selp.offsetLeft;
					sely+=selp.offsetTop;
				}
			}
			selx+=arrSelect[i].offsetLeft;
			sely+=arrSelect[i].offsetTop;
			selw=arrSelect[i].offsetWidth;
			selh=arrSelect[i].offsetHeight;
			//alert("sely: " + sely + " - selh: " + selh + " - y: " + y)
			//if(k == 2){
				//alert("(" + y + ">= (" + (sely-selh) + ")) : " + (y >= (sely-selh)))
				//alert("(" + x + " <= " + selx + " && " + x2 +" >= " + selx + "):" + (x <= selx && x2 >= selx) + " (" + x + "<= (" + (selx+selw) + ") && " + x2 + ">= (" + (selx+selw) +")): " + (x <= (selx+selw) && x2 >= (selx+selw)) + "(" + y + ">= (" + (sely-selh) + ")) : " + (y >= (sely-selh)));
			//}
			if (((x <= selx && x2 >= selx) || (x <= (selx+selw) && x2 >= (selx+selw)) || (x >= selx && x2 <= (selx+selw))) && (y >= (sely-selh)))
				arrSelect[i].style.visibility = "hidden";
		}
	//}
}
function showElement(elmID)
{
// == Questa funzione ripristina la visibilità su un determinato tipo di elementi
// == Esempio:
// ==========	showElement("SELECT")
// == Ripristina la visibilità su tutti i select.
	for (i = 0; i < parent.main.document.all.tags(elmID).length; i++)
	{
		obj = parent.main.document.all.tags(elmID)[i];
		if (! obj || ! obj.offsetParent)
			continue;
		obj.style.visibility = "";
	}
}


// ====================================================================================================================================

function visualizzaMenu(nLink,menuSelezionato,e){
// ================= La seguente funzione permette la visualizzazione del menu =========================================================
// ================= Dove:
// ====================== nLink: 			è l'id del menu di Secondo Livello, serve per visualizzare solo i link del menù di terzo livello correlati ad esso
// ====================== menuSelezionato: 	viene passato come parametro l'array contenente il menu
// ====================== e:				è l'evento, in questo caso click del mouse, serve per ricavare la posizione orizzontale dove aprire il div
		if(nLink=='' || parent.main.document.body == null){
			//alert("parent.main?");
			return false;//Se il Non esiste un menu associato, non viene visualizzato niente, esce dalla funzione.
		}
		
		var htmlGenerato;
		var menu = menuSelezionato;
		var idMenuSelezionato = document.formino.menuSelezionato.value;//Serve per cambiare classe alla voce del Menu selezionato
		if (document.all){//In questo caso il browser utilizzato e' ie
			y = parent.main.document.body.scrollTop;
			xtable = document.getElementById('mainTable').offsetLeft;
			xtd = document.getElementById('td' + nLink).offsetLeft;
			x = xtable + xtd + horizontalOffset;
		}else if (document.getElementById){//In questo caso il browser utilizzato è netscape
			y = parent.main.document.body.scrollTop;
			xtable = document.getElementById('mainTable').offsetLeft;
			xtd = document.getElementById('td' + nLink).offsetLeft;
			x = xtable + xtd + horizontalOffset;
		}
		
		// =========== Questa parte di codice stabilisce il posizionamento del div all'interno del frame 'main' in accordo con quanto ricavato sopra sopra (posizione del mouse)
		if(document.all){
			if(parent.main.document.all['menu1']!=null){
				parent.main.document.all['menu1'].style.posLeft = x;
				parent.main.document.all['menu1'].style.posTop = y;
			}else{
				//alert("Menu Error");//Il div non è presente nella pagina principale
			}
		}else if (parent.main.document.getElementById && parent.main.document.getElementById('menu1') != null) {
			if(parent.main.document.getElementById('menu1')){
				parent.main.document.getElementById('menu1').style.left = x;
				parent.main.document.getElementById('menu1').style.top = y;
			}else{
				//alert("Menu Error");//Il div non è presente nella pagina principale
			}
		}
		// ====================================================================================================================================
		// =============================== Inizia la formattazione del codice HTML da inserire nel div =============================
		//htmlGenerato = "<table border='0' cellpadding='0' cellspacing='0' onclick='layerTimeOut(\"menu1\",\"onclick\")'>";//===== layerTymeOut è definita in "thirdMenuLibrary.js" per il significato dei parametri fare riferimento a suddetto file.
		htmlGenerato = "<table border='0' cellpadding='0' cellspacing='0'><tr><td><table border='0' cellpadding='0' cellspacing='0'>";
		htmlGenerato += "<tr>";
		//cambio colore bordo
		htmlGenerato += "<td bgcolor='#B6B6B6' rowspan='4' width='2'></td>";
		
							if (background2Liv.src == '' || background2Liv.src == null)
								htmlGenerato += "<td class='" + class2Liv + "'>";
							else
								htmlGenerato += "<td background='" + background2Liv.src + "'>";
								//htmlGenerato += "<img src='" + dummyImage.src + "' border='0'></td><td>";
							if (background2Liv.src == '' || background2Liv.src == null)
								htmlGenerato += "<table border='0' cellpadding='0' cellspacing='" + spaziaturaMenu2Liv + "' class='" + class2Liv + "'>";
							else
								htmlGenerato += "<table border='0' cellpadding='0' cellspacing='" + spaziaturaMenu2Liv + "' background='" + background2Liv.src + "'>";
								
								// begin loop to build the table menu Layer
								for(i=0;i < menu.length;i++){// ===== Questo ciclo for scorre interamente l'array contenente il menu di Terzo livello
									if(menu[i].idMenu == nLink){// === Vengono visualizzate solamente le voci che riguardano la voce del menu di secondo livello selezionata
										htmlGenerato += "<tr>";
											htmlGenerato += "<td>&nbsp;</td>"
											var class4Menu = new String();// store the right class to be used;
											if(idMenuSelezionato != menu[i].id){// === Questo if serve per cambiare classe all'ultimo menu di terzo livello selezionato, anche se il layer è stato chiuso
												class4Menu = menuClass2Liv;
											}else{
												class4Menu = menuSelezionatoClass2Liv;
											}
											if(menu[i].idFiglio!=-1){
												htmlGenerato += "<td class='" + class4Menu + "' id='posMenu" + i + "' onmouseover='parent.middle.visualizzaEnnesimoMenu("+menu[i].idFiglio+",1010," + x + "," + y + ",document.getElementById(\"posMenu" + i + "\").offsetTop)'><a href='#' class='" + class4Menu + "'>" + menu[i].descrizione + "&nbsp;</a></td><td><img src='" + immagineFreccia2Liv.src + "' border='0'></td>";
											}
											else
											{
												/*
													Rappresenta un caso particolare:
													Si tratta del menu ASSISTENZA.
													bisogna gestire l'apertura dei link in maniera differente.
												*/
												if (menu[i].id == 10000)// =============== guida
												{
													htmlGenerato += "<td class='" + class4Menu + "' onmouseover='parent.middle.hideLayerMenu2(\"menu2\")'><a href='#' onclick='" + menu[i].collegamento + "' class='" + class4Menu + "'>" + menu[i].descrizione + "</a></td><td></td>";
												}
												else if (menu[i].id == 10001)// =============== Aiuto
												{
													htmlGenerato += "<td class='" + class4Menu + "' onmouseover='parent.middle.hideLayerMenu2(\"menu2\")'><a href='#' onclick='" + menu[i].collegamento + "' class='" + class4Menu + "'>" + menu[i].descrizione + "</a></td><td></td>";
												}
												else if (menu[i].id == 10002)// =============== Contattaci
												{
													htmlGenerato += "<td class='" + class4Menu + "' onmouseover='parent.middle.hideLayerMenu2(\"menu2\")'><a href='" + menu[i].collegamento + "' class='" + class4Menu + "'>" + menu[i].descrizione + "</a></td><td></td>";
												}
												else
												{
													if (parent.topframe.isSignOnEnabled)
														htmlGenerato += "<td class='" + class4Menu + "' onmouseover='parent.middle.hideLayerMenu2(\"menu2\")'><a href='javascript:parent.middle.document.formino.menuSelezionato.value=" + menu[i].id + ";parent.parent.tm_top.writeUserStatus(\"menu1\",\"" + menu[i].area + "\");parent.parent.tm_top.writeUserStatus(\"menu2\",\"" + menu[i].descrizione + "\");parent.parent.tm_top.writeUserStatus(\"menu3\",\"\");parent.middle.callServlet(\"" + menu[i].collegamento + "\");parent.topframe.setMenuMaster(\"" + menu[i].areaName + "\");parent.topframe.setMenuDetail(\"" + menu[i].collegamento + "\");' class='" + class4Menu + "'>" + menu[i].descrizione + "</a></td><td></td>";
													else
														htmlGenerato += "<td class='" + class4Menu + "' onmouseover='parent.middle.hideLayerMenu2(\"menu2\")'><a href='javascript:parent.middle.document.formino.menuSelezionato.value=" + menu[i].id + ";parent.middle.callServlet(\"" + menu[i].collegamento + "\");parent.topframe.setMenuMaster(\"" + menu[i].areaName + "\");parent.topframe.setMenuDetail(\"" + menu[i].collegamento + "\");' class='" + class4Menu + "'>" + menu[i].descrizione + "</a></td><td></td>";
												}
											}
										htmlGenerato += "</tr>";										
										if(spessoreLineaSeparatrice2Liv !=0)
										{
											if (menu[i+1])
											{
												if (menu[i+1].areaName == menu[i].areaName)
													htmlGenerato += "<tr><td></td><td colspan='2'><table width='100%' cellpadding='0' cellspacing='0'><tr><td class='" + classLineaSeparatrice2LivScura + "' colspan='2'></td></tr><tr><td class='" + classLineaSeparatrice2Liv + "'></td></tr></table></td></tr>";
											}
										}
									}
								}
								// begin loop to build the table menu Layer
								
								htmlGenerato += "</table></td>";
							if (background2Liv.src == '' || background2Liv.src == null)	
								//cambio colore bordi
								htmlGenerato += "<td bgcolor='#003365' rowspan='4' width='2'>";
							else
								htmlGenerato += "<td background='" + background2Liv.src + "'>";
									//htmlGenerato += "<img src='" + dummyImage.src + "' border='0'></td></tr>"
							htmlGenerato += "<tr><td class='" + menuClass2Liv + "' height='4'></td></tr>";
							//colore linee cambiato
							htmlGenerato += "<tr><td bgcolor='#003365' height='2'></tr>";
							if(smussatura2Liv || ombra2Liv)
							{
								htmlGenerato += "<tr>"
									htmlGenerato += "<td><img src='" + angoloSinistroMenu2Liv.src + "' border='0'></td>";
								if (background2Liv.src == '' || background2Liv.src == null)	
									htmlGenerato += "<td class='" + class2Liv + "'>";
								else
									htmlGenerato += "<td background='" + background2Liv.src + "'></td>";
								if(ombra2Liv){
									htmlGenerato += "<td align='right'><img src='" + angoloDestroMenu2Liv.src + "' border='0'></td>";
								}
								else{
									htmlGenerato += "<td align='right'><img src='" + angoloDestroMenu2Liv.src + "' border='0'></td>";
								}
								htmlGenerato += "</tr>";
							}
					htmlGenerato += "</table>";
				htmlGenerato += "</td>";
				if(ombra2Liv){
					htmlGenerato += "<td width='7'>";
						//htmlGenerato += "<img src='" + dummyImage.src + "' border='0' width='7'>";
					htmlGenerato +=  "</td>";
				}
			htmlGenerato +=  "</tr>";
			if(ombra2Liv){
				htmlGenerato +=  "<tr>";
					htmlGenerato += "<td>";
						htmlGenerato += "<table width='100%' cellpadding='0' cellspacing='0' border='0'>";
							htmlGenerato += "<tr>";
								htmlGenerato += "<td width='20' align='right' style='filter:" + filtroOmbraDelLayer + "' id='inizioMenumenu1'>";
									htmlGenerato += "<img src='" + angoloSinistroOmbraMenu2Liv.src + "' border='0' width='10' height='10'>";
								htmlGenerato += "</td>";
								htmlGenerato += "<td>";
									//htmlGenerato += "<img src='" + dummyImage.src + "' border='0' width='30' height='10'>";
								htmlGenerato += "</td>";
							htmlGenerato += "</tr>";
						htmlGenerato += "</table>";
					htmlGenerato += "</td>";
					htmlGenerato += "<td width='10' id='fineMenumenu1'>";
						htmlGenerato += "<img src='" + angoloDestroOmbraMenu2Liv.src + "' border='0' width='10' height='10'>";
					htmlGenerato += "</td>";
				htmlGenerato += "</tr>";
			}
			else
			{
				htmlGenerato +=  "<tr>";
					htmlGenerato += "<td id='inizioMenumenu1'>"
						//htmlGenerato += "<img src='" + dummyImage.src + "' border='0' width='30' height='1'>";
					htmlGenerato += "</td>"
					htmlGenerato += "<td width='10' id='fineMenumenu1'>";
						//htmlGenerato += "<img src='" + dummyImage.src + "' border='0' width='30' height='1'>";
					htmlGenerato += "</td>";
				htmlGenerato += "</tr>";
			}
		
		htmlGenerato += "</table>";
		if(parent.main.document.getElementById('menu1')!= null){
			parent.main.document.getElementById('menu1').innerHTML = htmlGenerato;
			parent.main.document.close();
		}else{
			//alert("Menu Error!");//Il div non è presente nella pagina principale
		}
		showLayer('menu1',1,0);
}


// ====================================================================================================================================

// ================= La seguente funzione permette la visualizzazione dei menu di secondo livello =====================================
// ================= Dove:
// ====================== nLink: 			è l'id del menu di Secondo Livello, serve per visualizzare solo i link del menù di terzo livello correlati ad esso
// ====================== menuSelezionato: 	viene passato come parametro l'array contenente il menu
// ====================== x,y				sono le coordinate del menu di primo livello che ha chiamato questa funzione.
function visualizzaEnnesimoMenu(nLink,menuSelezionato,x,y,posizioneVerticale){
		var htmlGenerato
		var menu = parent.middle.arrayMenu;//menuSelezionato
		var idMenuSelezionato = document.formino.menuSelezionato.value;//Serve per cambiare classe alla voce del Menu selezionato
		// =============================== Inizia la formattazione del codice HTML da inserire nel div =============================
		htmlGenerato = "<table border='0' cellpadding='0' cellspacing='0'>";
		//Cambio colore linee
			htmlGenerato += "<tr><td bgcolor='#B6B6B6' rowspan='2' width='2'></td><td bgcolor='#B6B6B6' height='2'></td></tr>"
			htmlGenerato += "<tr><td><table border='0' cellpadding='0' cellspacing='0'>"
							if(smussatura3Liv || ombra3Liv)
							{
								htmlGenerato += "<tr>"
									htmlGenerato += "<td><img src='" + angoloSinistroSopraMenu3Liv.src + "' border='0'></td>";
								if (background3Liv.src == '' || background2Liv.src == null)	
									htmlGenerato += "<td class='" + class3Liv + "'>";
								else
									htmlGenerato += "<td background='" + background3Liv.src + "'>";
									htmlGenerato += " ";
									htmlGenerato += "</td>";
									htmlGenerato += "<td align='right'>";
										htmlGenerato += "<img src='" + angoloDestroSopraMenu3Liv.src + "' border='0'>";
									htmlGenerato += "</td>";
									htmlGenerato +=  "</tr>";
							}
							htmlGenerato += "<tr>";
							if (background3Liv.src == '' || background2Liv.src == null)
								htmlGenerato += "<td class='" + class3Liv + "'>";
							else
								htmlGenerato += "<td background='" + background3Liv.src + "'>";
									//htmlGenerato += "<img src='" + dummyImage.src + "' border='0'>";
							htmlGenerato += "</td>";
							htmlGenerato += "<td>";
								if (background3Liv.src == '' || background2Liv.src == null)
									htmlGenerato += "<table border='0' cellpadding='0' cellspacing='" + spaziaturaMenu3Liv + "' class='" + class3Liv + "'>";
								else
									htmlGenerato += "<table border='0' cellpadding='0' cellspacing='" + spaziaturaMenu3Liv + "' background='" + background3Liv.src + "'>";
								
								
								// begin loop to build the table menu Layer
								var class4Menu = new String();// store the right class to be used;
								var urlPagina  = new String();
								
								for(i=0;i < menu.length;i++){// ===== Questo ciclo for scorre interamente l'array contenente il menu di Terzo livello
									if(menu[i].idMenu == nLink){// === Vengono visualizzate solamente le voci che riguardano la voce del menu di secondo livello selezionata
										if(idMenuSelezionato != menu[i].id){// === Questo if serve per cambiare classe all'ultimo menu di terzo livello selezionato, anche se il layer è stato chiuso
											class4Menu = menuClass3Liv;
										}else{
											class4Menu = menuSelezionatoClass3Liv;
										}
										urlPagina = menu[i].collegamento;										
										htmlGenerato += "<tr>";
											htmlGenerato += "<td>&nbsp;</td>";
											if (parent.topframe.isSignOnEnabled)
												htmlGenerato += "<td><a href='javascript:parent.middle.document.formino.menuSelezionato.value=" + menu[i].id + ";parent.parent.tm_top.writeUserStatus(\"menu1\",\"" + menu[i].area + "\");parent.parent.tm_top.writeUserStatus(\"menu2\",\"" + menu[i].menuPadre + "\");parent.parent.tm_top.writeUserStatus(\"menu3\",\"" + menu[i].descrizione + "\");parent.middle.callServlet(\"" + urlPagina + "\");parent.topframe.setMenuMaster(\"" + menu[i].areaName + "\");parent.topframe.setMenuDetail(\"" + menu[i].collegamento + "\");' class='" + class4Menu + "'>" + menu[i].descrizione + "</a></td></tr>";
											else
												htmlGenerato += "<td><a href='javascript:parent.middle.document.formino.menuSelezionato.value=" + menu[i].id + ";parent.middle.callServlet(\"" + urlPagina + "\");parent.topframe.setMenuMaster(\"" + menu[i].areaName + "\");parent.topframe.setMenuDetail(\"" + menu[i].collegamento + "\");' class='" + class4Menu + "'>" + menu[i].descrizione + "</a></td></tr>";
										if(spessoreLineaSeparatrice3Liv !=0)
										{
											if(menu[i+1])
											{
												if ((menu[i].gruppo != menu[i+1].gruppo) && menu[i+1].gruppo != 0)
													htmlGenerato += "<tr><td></td><td colspan='2'><table width='100%' cellpadding='0' cellspacing='0'><tr><td class='" + classLineaSeparatrice3LivScura + "' colspan='2'></td></tr><tr><td class='" + classLineaSeparatrice3Liv + "'></td></tr></table></td></tr>";
											}
										}
									}
								}
								// end loop to build the table menu Layer
								htmlGenerato += "</table>";
							htmlGenerato += "</td>";
							if (background3Liv.src == '' || background2Liv.src == null)	
								//htmlGenerato += "<td class='" + class3Liv + "'>";
								//colore bordi cambiato
								htmlGenerato += "<td bgcolor='#003365' rowspan='3' width='2'>";
							else
								htmlGenerato += "<td background='" + background3Liv.src + "'>";
									//htmlGenerato += "<img src='" + dummyImage.src + "' border='0'></td></tr>";
							htmlGenerato += "<tr><td class='" + menuClass3Liv + "' colspan='2' height='4'></td></tr>";
							//colore bordi cambiato
							htmlGenerato += "<tr><td bgcolor='#003365' height='2' colspan='2'></td></tr>";
						if(smussatura3Liv || ombra3Liv)
						{
							htmlGenerato += "<tr>"
								htmlGenerato += "<td><img src='" + angoloSinistroMenu3Liv.src + "' border='0'></td>";
							if (background3Liv.src == '' || background2Liv.src == null)	
								htmlGenerato += "<td class='" + class3Liv + "'>";
							else
								htmlGenerato += "<td background='" + background3Liv.src + "'>";
								htmlGenerato += " ";
							htmlGenerato += "</td>";
							if(ombra3Liv)
							{
								htmlGenerato += "<td align='right' bgcolor='" + coloreOmbra3Liv + "'>";
									htmlGenerato += "<img src='" + angoloDestroMenu3Liv.src + "' border='0'>";
								htmlGenerato += "</td>";
							}
							else
							{
								htmlGenerato += "<td align='right'>";
									htmlGenerato += "<img src='" + angoloDestroMenu3Liv.src + "' border='0'>";
								htmlGenerato += "</td>";
							}
							htmlGenerato +=  "</tr>";
							
						}
					htmlGenerato += "</table>";
				htmlGenerato += "</td>";
				if(ombra3Liv)
				{
					htmlGenerato += "<td>";
						//htmlGenerato += "<img src='" + dummyImage.src + "' border='0' width='7'>";
					htmlGenerato += "</td>";
				}
			htmlGenerato += "</tr>";
			if(ombra3Liv)
			{
				htmlGenerato += "<tr>";
					htmlGenerato += "<td>";
						htmlGenerato += "<table width='100%' cellpadding='0' cellspacing='0' border='0'>";
							htmlGenerato += "<tr>";
								htmlGenerato += "<td width='20' align='right' style='filter:" + filtroOmbraDelLayer + "' id='inizioMenumenu2'>";
									htmlGenerato += "<img src='" + angoloSinistroOmbraMenu3Liv.src + "' border='0' width='10' height='10'>";
								htmlGenerato += "</td>";
								htmlGenerato += "<td background='" + ombraOrizzontaleMenu3Liv.src + "' height='7' style='filter:" + filtroOmbraDelLayer + "'>";
									//htmlGenerato += "<img src='" + dummyImage.src + "' border='0' width='30' height='10'>";
								htmlGenerato += "</td>";
							htmlGenerato += "</tr>";
						htmlGenerato += "</table>";
					htmlGenerato += "</td>";
					htmlGenerato += "<td width='10' id='fineMenumenu2'>";
						htmlGenerato += "<img src='" + angoloDestroOmbraMenu3Liv.src + "' border='0' width='10' height='10'>";
					htmlGenerato += "</td>";
				htmlGenerato += "</tr>";
			}
			else
			{
				//htmlGenerato += "<tr><td bgcolor='#e67e07' height='2' colspan='2'></td><td bgcolor='#e67e07' rowspan='3' width='2'></td></tr>";
				htmlGenerato +=  "<tr>";
					htmlGenerato += "<td id='inizioMenumenu2' colspan='2'>"
						//htmlGenerato += "<img src='" + dummyImage.src + "' border='0' width='30' height='1'>";
					htmlGenerato += "</td>"
					htmlGenerato += "<td width='10' id='fineMenumenu2'>";
						//htmlGenerato += "<img src='" + dummyImage.src + "' border='0' width='30' height='1'>";
					htmlGenerato += "</td>";
				htmlGenerato += "</tr>";
			}
		htmlGenerato += "</table>";
		if(parent.main.document.getElementById('menu2')!=null){
			parent.main.document.getElementById('menu2').innerHTML = htmlGenerato;
		}else{
			//alert("Menu Error!");//Il div non è presente nella pagina principale
		}
		//parent.main.document.pippo.textarea1.value=htmlGenerato;
		
		
		// ricalcolo le coordinate
		//alert("larghezzaPagina: " + larghezzaPagina)
		if(x<=(larghezzaPagina-400))
			x += parent.main.document.getElementById('fineMenumenu1').offsetLeft - 4;
		else
			x += parent.main.document.getElementById('inizioMenumenu1').offsetLeft - (parent.main.document.getElementById('fineMenumenu2').offsetLeft-parent.main.document.getElementById('inizioMenumenu2').offsetLeft) + 10;
		y += posizioneVerticale + offsetMenu3Liv; 
		
		
		
		// =========== Questa parte di codice stabilisce il posizionamento del div all'interno del frame 'main' in accordo con quanto ricavato sopra sopra (posizione del mouse)
		if(document.all){
			if(parent.main.document.all['menu2']!=null){
				parent.main.document.all['menu2'].style.posLeft = x;
				parent.main.document.all['menu2'].style.posTop = y;
			}else{
				//alert("Menu Error!");//Il div non è presente nella pagina principale
			}
		}else if (parent.main.document.getElementById && parent.main.document.getElementById('menu2') != null) {
			if(parent.main.document.getElementById('menu2')!= null){
				parent.main.document.getElementById('menu2').style.left = x;
				parent.main.document.getElementById('menu2').style.top = y;
			}else{
				//alert("Menu Error!");//Il div non è presente nella pagina principale
			}
		}
		showLayer('menu2',2,y);
}

function calcolaLarghezza(){
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    larghezzaPagina = window.innerWidth;
  } else {
    if( document.documentElement && document.documentElement.clientWidth) {
      //IE 6+ in 'standards compliant mode'
	  larghezzaPagina = document.documentElement.clientWidth;
    } else {
      if( document.body && document.body.clientWidth) {
        //IE 4 compatible
		larghezzaPagina = document.body.clientWidth;
      }
    }
  }
}