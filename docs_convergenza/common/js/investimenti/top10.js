
var struts2Contesto = "investywb";	//investimenti
var datiTabellaTopTen = [], datiTopTenJson = {};
var fesCatArr 		= {"all":"all", "azionari":"azionari", "obbligazionari":"obbligazionari",  "flessibili":"flessibili",  "corone5":"corone5"};
var fesCatTitleArr 	= {"all":"", 	"azionari":"AZIONARI","obbligazionari":"OBBLIGAZIONARI", "flessibili":"FLESSIBILI", "corone5":"CON 5 CORONE FIDA"};
var colonneTabTopTen = [
			{
				field   : 'nome',
				title   : 'Nome',
				'class'	: 'left'
			},
			{
				field   : 'nomecategoriabrating',
				title   : 'Categoria BRating',
				'class'	: 'left'
			},
			{
				field   : 'rating',
				title   : 'Rating'
			},
			{
				field   : 'rendimento',
				title   : 'Rend. % a 1 anno',
				'class'	: 'right'
			},
			{
				field   : 'icoOpe',
				title   : ''
			}
		  ];

var datiTabellaTop = [], datiTop = [];
var colonneTab10Migliore = [
	{
		field   : 'migCategoriaBrating',
		title   : 'Migliori categorie BRating',
		'class'	: 'left'
	},
	{
		field   : 'numfondi',
		title   : 'N.<br>Fondi'
	},
	{
		field   : 'rendimento',
		title   : 'Rendimento %a 1 mese',
		'class'	: 'right'
	}
  ];

var datiTabellaFlop = [], datiFlop = [];
var colonneTab10Peggiore = [
	{
		field   : 'pegCategoriaBrating',
		title   : 'Peggiori categorie BRating',
		'class'	: 'left'
	},
	{
		field   : 'numfondi',
		title   : 'N.<br>Fondi'
	},
	{
		field   : 'rendimento',
		title   : 'Rendimento %a 1 mese',
		'class'	: 'right'
	}
  ];

//if (!is4s) {
   fesDataUrl 		 = (!isLib) ? wrp_script_direct + "/investimenti/FlopAndTopJSON.action" 	: "/wscmn/xml/fes_top_10.php";
//   fesDataUrlTopFlop = (!isLib) ? wrp_script_direct + "/investimenti/FlopAndTopJSON.action" 	: "/wscmn/xml/fes_top_flop.php";
//} else {
//   fesDataUrl = (!isLib) ? bpmDispatcher : "/wscmn/xml/fes_top_10.php";
//}


var initializaTopTen = function(){
//	resizeTab('idTabs',0);
	$("#tfTop10Wrap").addClass("loading");
	fondiTop10();
	
	
	initTooltip();
	
	if(fromPage!=undefined && fromPage.indexOf("RicercaFondi")>0 && fromPage.indexOf("fesCategoria")>0){
		$("#idTab1").removeClass("on");
		$("#idTab2").addClass("on");
		$("#idTopTen").hide();
		$("#idTopFlopTen").show();
	}
}

//noresp_priv_fes_top_10.js
var fondiTop10 = function(){
	
	$.ajax({
        url: fesDataUrl,
        dataType: "json",
        method: "POST",
//        data: "fesCollocato=S&orderby=&orderdir=&firstpage=true&fromPage=&descrizione=&codSocieta=&fondoSicav=&macroCat=&codRating=&fesCategoria=&valutaRif=&codArea=&codSettore=&fesRendimento=&fesVolatilita=&invMinimo=&commissione=&dividendi=&bpmpage=fesTabella4s",
        data: {},
        success: function(data) {
        	datiTopTenJson = data.data;
        	
        	$('#idTableTop10').bootstrapTable({
    			data	 : {}, 
    			columns	 : colonneTabTopTen,
    			rowStyle : function(row, index) {
    							if(index % 2 == 0)	{ return {classes: 'dispari'}	}
    							else 				{ return {classes: 'pari'	}	}
    						}			
        	});
        	
        	fondiTop10Update(fesCatArr.all);
        	
        	$('#idBtnTopTenAll').click(function() {
        		$('#idBtnTopTenAll').removeClass("btn-default").addClass("btn-primary");
        		$('#idBtnTopTenAzionari,#idBtnTopTenObbligazionari,#idBtnTopTenFlessibili,#idBtnTopTenCorone5').removeClass("btn-primary").addClass("btn-default");
        		fondiTop10Update(fesCatArr.all);
        	});
        	$('#idBtnTopTenAzionari').click(function() {
        		$('#idBtnTopTenAzionari').removeClass("btn-default").addClass("btn-primary");
        		$('#idBtnTopTenAll,#idBtnTopTenObbligazionari,#idBtnTopTenFlessibili,#idBtnTopTenCorone5').removeClass("btn-primary").addClass("btn-default");
        		fondiTop10Update(fesCatArr.azionari);
        	});
        	$('#idBtnTopTenObbligazionari').click(function() {
        		$('#idBtnTopTenObbligazionari').removeClass("btn-default").addClass("btn-primary");
        		$('#idBtnTopTenAll,#idBtnTopTenAzionari,#idBtnTopTenFlessibili,#idBtnTopTenCorone5').removeClass("btn-primary").addClass("btn-default");
        		fondiTop10Update(fesCatArr.obbligazionari);
        	});
        	$('#idBtnTopTenFlessibili').click(function() {
        		$('#idBtnTopTenFlessibili').removeClass("btn-default").addClass("btn-primary");
        		$('#idBtnTopTenAll,#idBtnTopTenAzionari,#idBtnTopTenObbligazionari,#idBtnTopTenCorone5').removeClass("btn-primary").addClass("btn-default");
        		fondiTop10Update(fesCatArr.flessibili);
        	});
        	$('#idBtnTopTenCorone5').click(function() {
        		$('#idBtnTopTenCorone5').removeClass("btn-default").addClass("btn-primary");
        		$('#idBtnTopTenAll,#idBtnTopTenAzionari,#idBtnTopTenObbligazionari,#idBtnTopTenFlessibili').removeClass("btn-primary").addClass("btn-default");
        		fondiTop10Update(fesCatArr.corone5);
        	});
        	
        	$("#idBtnTopTenStampa").click(function() {
        		window.print();
        	});
        	$("#idBtnTopTenExcel").attr({
        		"href" : wrp_script_direct + "/investimenti/FlopAndTopExcelExport.action"
        	});
        	fondiTopFlop10();
        	
        },
        error: function() {
           // alert("Errore nel ricevimento dei dati - Tabella");
        },
        complete : function() {
        	$("#tfTop10Wrap").removeClass("loading");
        }
    });
	
}

var fondiTop10Update = function(fesCatArrVal){
	$("#idTopTenButtonText").html("TOP 10 FONDI " + fesCatTitleArr[fesCatArrVal] + " A 1 ANNO");
	
	datiTabellaTopTen = [];
	var tData = datiTopTenJson[fesCatArrVal];
	 $.each(tData, function (i, v) {
		var datiJson = {};
		
		var hrefScedaFondo = "../../action/" + struts2Contesto+ "/RicercaFondi.action";	
		hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_sf_migliori";	
		hrefScedaFondo += "&codicesocieta="+v.codicesocieta+"&codicecomparto="+v.codicecomparto+"&fondosicav="+v.fondosicav+"&codicefida="+v.codicefida+"&fondo=true";
		datiJson.nome 	= "<a href=" + hrefScedaFondo +" >" + v.nome + " </a>";
		
		datiJson.nomecategoriabrating = v.nomecategoriabrating;
		
		var rcor = "<div class='rating large'>";
        for (var x = 1; x <= 5; x++) {
            rcor += "<i class='icon icon-corona " + ((v.rating >= x) ? "icon-corona-on" : "") + "'></i>";
        }
        rcor += "</div><div class='rating small rate" + v.rating + "'><div class='bg'></div><span>" + v.rating + "</span></div>";
		datiJson.rating = rcor;
		
		datiJson.rendimento = parseFloat(v.rendimento).toLocaleString("it-IT",{minimumFractionDigits:3,maximumFractionDigits:3});
		
		var fesTrOpeIcoA = "<a class=\"linkVai\" title=\"scegli l'operazione da effettuare\" href=\"javascript:;\" " +
							"codicesocieta=\""+ v.codicesocieta +"\" codicecomparto=\""+ v.codicecomparto +"\" divisa=\""+ 
							v.divisa +"\" fondosicav=\""+v.fondosicav+	"\" data-fundname=\""+ v.nome+
							"\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i></a>"
		
		datiJson.icoOpe = fesTrOpeIcoA;
		datiTabellaTopTen.push(datiJson);
	 });
	
	 $('#idTableTop10').bootstrapTable('load', datiTabellaTopTen);
	 $(".linkVai").click(fesIcoOpeOverlay);
     $("#tfTop10Wrap").show();
}


var fondiTopFlop10 = function(){
	
	$.ajax({
        url: fesDataUrl,
        dataType: "json",
        method: "POST",	//tipoRichiesta=topflop
//        data: "fesCollocato=S&orderby=&orderdir=&firstpage=true&fromPage=&descrizione=&codSocieta=&fondoSicav=&macroCat=&codRating=&fesCategoria=&valutaRif=&codArea=&codSettore=&fesRendimento=&fesVolatilita=&invMinimo=&commissione=&dividendi=&bpmpage=fesTabella4s",
        data: {"tipoRichiesta":"topflop"},
         success: function(data) {
        	datiTabellaTop = data.data.top;
        	datiTabellaFlop = data.data.flop;
        	
        	$('#table10Migliori').bootstrapTable({
    			data	 : {}, 
    			columns	 : colonneTab10Migliore,
    			rowStyle : function(row, index) {
    							if(index % 2 == 0)	{ return {classes: 'dispari'}	}
    							else 				{ return {classes: 'pari'	}	}
    						}			
        	});
        	datiTop = [];
        	$.each(datiTabellaTop, function (i, v) {
        		 var datiJson = {};
        		 datiJson.migCategoriaBrating 	= v.nome;
        		 
        		 var hrefScedaFondo = "../../action/" + struts2Contesto+ "/RicercaFondi.action";
 					hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta";
					hrefScedaFondo += "&fesCategoria="+v.categoriabrating ;
				datiJson.numfondi			= "<a href=" + hrefScedaFondo +" >" + v.numfondi + " </a>";
        		 
        		 datiJson.rendimento 			= parseFloat(v.rendimento).toLocaleString("it-IT",{minimumFractionDigits:3,maximumFractionDigits:3});
        		 datiTop.push(datiJson);
        	 });
        	 $('#table10Migliori').bootstrapTable('load', datiTop);
        	
        	$('#table10Peggiori').bootstrapTable({
    			data	 : {}, 
    			columns	 : colonneTab10Peggiore,
    			rowStyle : function(row, index) {
    							if(index % 2 == 0)	{ return {classes: 'dispari'}	}
    							else 				{ return {classes: 'pari'	}	}
    						}			
        	});
        	datiFlop = [];
        	$.each(datiTabellaFlop, function (i, v) {
	       		 var datiJson = {};
	       		 datiJson.pegCategoriaBrating 	= v.nome;
	       		 
	       		 var hrefScedaFondo = "../../action/" + struts2Contesto+ "/RicercaFondi.action";
					hrefScedaFondo += "?OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_ricerca_confronta";
					hrefScedaFondo += "&fesCategoria="+v.categoriabrating ;
				datiJson.numfondi			= "<a href=" + hrefScedaFondo +" >" + v.numfondi + " </a>";
				
	       		 datiJson.rendimento 			= parseFloat(v.rendimento).toLocaleString("it-IT",{minimumFractionDigits:3,maximumFractionDigits:3});
	       		 datiFlop.push(datiJson);
       	 	});
        	$('#table10Peggiori').bootstrapTable('load', datiFlop);
        },
        error: function() {
        //TODO	
        }
	});
	
}
	