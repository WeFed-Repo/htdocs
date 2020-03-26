// Inizializzazioni generiche
var ultimiDati,totgiorni;
 
function plotGrafico() {
 
            $("#dbgraphwrapper").addClass("loading dark");
 
            totgiorni = $("#numerogiorni").val();
 
            /* Taglia i dati per il grafico */
            var datiGrafico = new Array();
            /* Pulisce i dati per il grafico  e calcola i totali per il periodo impostato */
            var genSaldo = ultimiDati[ultimiDati.length-1].saldo;
            var genData =  new Date(ultimiDati[ultimiDati.length-1].data);
            var genEntrate = 0;
            var genUscite = 0;
            for (x= (180 - totgiorni);x<180;x++) {
                  datiGrafico.push(ultimiDati[x]);
                  if(ultimiDati[x].entrate) genEntrate += ultimiDati[x].entrate;
                  if(ultimiDati[x].uscite) genUscite += ultimiDati[x].uscite;
            }
 
 
 
            var baloonGraphBase;
            if (totgiorni == 30) {
 
                  datiGraficoReview = new Array();
                  $.each(datiGrafico,function(i,v){
 
                        var elToPush = new Object;
                        elToPush.data = v.data;
				if ( typeof v.saldo != "undefined") {
 
                             elToPush.saldo = v.saldo,
                             elToPush.entrate = v.entrate.toLocaleString('it-IT'),     
                             elToPush.uscite = v.uscite.toLocaleString('it-IT'), 
                             elToPush.moventrate = v.moventrate,
                             elToPush.movuscite = v.movuscite;
                        }
 
                        datiGraficoReview.push(elToPush);
 
                  });
                 
                  baloonGraphBase = "<div id='baloon-wrapper'><div class='saldo'><span class='datosmall'>Saldo al [[category]]</span><span class='dato'>[[value]] EUR</span></div><div class='dettagli'><div class='datablock'><span class='datosmall'>[[moventrate]] movimenti</span><span class='dato entrate'>[[entrate]] EUR</strong></div><div class='datablock datablockright'><span class='datosmall'>[[movuscite]] movimenti</span><span class='dato uscite'>[[uscite]] EUR</strong></div></div></div>";
            }
            else
            {    
                 
                  datiGraficoSettimanale = new Array();
                 
                  /* Ottiene il dato settimanale */
                  for (ind=0;ind<datiGrafico.length;ind++) {
                       
                        // Trasformazione della data
                        var currdate = new Date(datiGrafico[ind].data);
 
				// Check primo giorno della settimana (lunedì) per reset
                        // Ricalcolo data
                        if (ind==0 || currdate.getDay()==1) {
                             // Dati cumulativi
                             baseData = {
                                   data: currdate,
                                   datainizio: currdate
                             }
                             entrate = uscite = moventrate = movuscite = 0;
                        }
                       
 
                        // Al primo saldo inizializza le altre variabili
				if (typeof datiGrafico[ind].saldo  != "undefined") {
                             // Il saldo si aggiorna progressivamente
                             baseData.saldo= datiGrafico[ind].saldo; 
                             entrate = entrate + datiGrafico[ind].entrate;
                             uscite = uscite + datiGrafico[ind].uscite;
                             moventrate = moventrate + datiGrafico[ind].moventrate;
                             movuscite = movuscite + datiGrafico[ind].movuscite;
                        }
 
 
                        // Check ultimo giorno della settimana (domenica) per riporto del dato
                        if (ind==(datiGrafico.length-1) || currdate.getDay()==0) {
 
                             baseData["data"] = dateToText(currdate);
 
					if (typeof baseData.saldo != "undefined") { 
                                   baseData.entrate = entrate.toLocaleString('it-IT');
                                   baseData.uscite = uscite.toLocaleString('it-IT');   
                                   baseData.moventrate = moventrate; 
                                   baseData.movuscite = movuscite;   
                                   baseData.datasaldo = dateToText(currdate,"DD/MM/YYYY");
                             }
 
                             datiGraficoSettimanale.push(baseData)
                        }
 
                  }
 
                  baloonGraphBase = "<div id='baloon-wrapper'><div class='saldo'><span class='datosmall'>Saldo al [[datasaldo]]</span><span class='dato'>[[value]] EUR</span></div><div class='dettagli'><div class='datablock'><span class='datosmall'>[[moventrate]] movimenti</span><span class='dato entrate'>[[entrate]] EUR</strong></div><div class='datablock datablockright'><span class='datosmall'>[[movuscite]] movimenti</span><span class='dato uscite'>[[uscite]] EUR</strong></div></div></div>";
 
 
            }
 
            // Aggiorna i dati "statici" (data, saldo,entrate e uscite)
            $("#saldo .saldoal").html("Saldo al " + dateToText(genData,"DD/MM/YYYY"));
            $("#saldo .cifra").html(genSaldo.toLocaleString("it-IT") + " &euro;");
            $("#saldomovimenti .entrate .cifra").html(genEntrate.toLocaleString("it-IT") + " &euro;");
            $("#saldomovimenti .uscite .cifra").html(genUscite.toLocaleString("it-IT") + " &euro;");
     
            // Rendering del grafico con dati esempio
            dbgraphic = new AmCharts.makeChart("dbgraph",
                  {
                        "type": "serial",
                        "marginTop" : 0,
                        "marginBottom" : 0,
                        "language": "it",
                        "marginLeft" : 0,
                        "marginRight" : 0,
                        "balloonDateFormat": "DD/MM/YYYY",
                        "categoryField": "data",
                        "dataDateFormat": "YYYY-MM-DD",
                        "zoomOutOnDataUpdate": false,
                        "sequencedAnimation": false,
                        "columnSpacing":30,
                        "addClassNames": true,
                        "mouseWheelScrollEnabled": false,
                        "backgroundColor": "#478F7A",
                        "zoomOutText": "",
                        "color": "#FFFFFF",
                        "creditsPosition": "bottom-left",
                        "fontFamily": "bankFont",
                        "panEventsEnabled" : false,
                        "numberFormatter": {
                             "precision": -2,
                        "decimalSeparator": ",",
                        "thousandsSeparator": "."
                  },
                        "fontSize": 14,
                        "categoryAxis": {
                             "dateFormats": [{period:'ff',format:'JJ:NN:SS'},
                                   {period:'ss',format:'JJ:NN:SS'},
                                   {period:'mm',format:'JJ:NN'},
                                   {period:'hh',format:'JJ:NN'},
                                   {period:'DD',format:'DD MMM'},
                                   {period:'WW',format:'DD MMM'},
                                   {period:'MM',format:'MMM YYYY'},
                                   {period:'YYYY',format:'MM YYYY'}],
                             "equalSpacing": false,
                             "autoGridCount": false,
                             "minPeriod":(totgiorni==30)? "DD" : "WW",
                             "centerLabelOnFullPeriod": true,
                             "gridcount": (totgiorni==30)? 30 : 15,
                             "axisAlpha": 0,
                             "axisColor": "#FFFFFF",
                             "gridThickness": 1,
                             "minorGridAlpha": 0.1,
                             "minorGridColor": "#FFFFFF",
                             "minorGridEnabled": true,
                             "color": "#FFFFFF",
                             "fillAlpha": 0.05,
                             "minHorizontalGap":50,
                             "fontSize": 10,
                             "gridAlpha": 0.1,
                             "gridColor": "#FFFFFF",
                             "parseDates": true,
                             "inside": true,
                             "ignoreAxisWidth" : true
                        },
                        "graphs": [
                             {
                                   "balloonText": baloonGraphBase,
                                   "color": "#FFFFFF",
                                   "fillAlphas": 0.2,
                                   "fillColors": "#fff",
                                   "bulletSize": 3,
                                   "id": "AmGraph-1",
                                   "lineColor": "#fff",
                                   "lineThickness": 2.5,
                                   "precision": 2,
                                   "noStepRisers": true,
                                   "minDistance": 1,
                                   "negativeFillAlphas": 0.2,
                                   "negativeFillColors": "#eb4f62",
                                   "negativeLineColor": "#eb4f62",
                                   "title": "Saldo",
                                   "type": "smoothedLine",
                                   "valueField": "saldo"
                             }
                            
                        ],
                        "chartCursor": {
                             "enabled": true,
                             "animationDuration": 0.3,
                             "balloonPointerOrientation": "horizontal",
                             "categoryBalloonEnabled": false,
                             "categoryBalloonDateFormat": "DD/MM/YYYY",
                             "color": "#000000",
                             "cursorAlpha": 0.2,
                             "cursorColor": "#FFFFFF",
                             "fullWidth": true,
                             "selectionAlpha": 0,
                             "valueLineAlpha": 0,
                             "pan":true
                        },
                        "valueAxes": [
                             {
                                   "axisTitleOffset": 0,
                                   "id": "ValueAxis-1",
                                   "autoRotateCount": 0,
                                   "axisAlpha": 0.5,
                                   "axisColor": "#ffffff",
                                   "axisThickness": 0,
                                   "fontSize": 10,
                                   "labelOffset": 0,
                                   "minHorizontalGap": 0,
                                   "offset": 0,
                                   "tickLength": 0,
                                   "title": "",
                                   "titleBold": false,
                                   "titleFontSize": 1,
                                   "inside": true,
                                   "showFirstLabel": false,
                                   "dashLength": 0,
                                   "gridAlpha": 0.1,
                                   "gridColor": "#FFFFFF",
                                   "ignoreAxisWidth" : true,
                                   "minMaxMultiplier": 1.2
                             }
                        ],
                        "chartScrollbar": {
                             "enabled": $(window).width()<768,
                             "resizeEnabled":false,
                             "backgroundColor": "#000",
                             "backgroundAlpha":0.2,
                             "scrollDuration": 0,
                        "updateOnReleaseOnly": true,
                             "backgroundAlpha": 0.3,
                             "graphFillAlpha": 0,
                             "oppositeAxis": false,
                             "scrollbarHeight": 30,
                             "scrollDuration": 0,
                             "selectedBackgroundAlpha": 0.3,
                             "selectedGraphFillAlpha": 0,
                             "addClassNames": true
                        },
                        "listeners": [{
                          "event": "rendered",
                          "method": function(e) {
                               if ($(window).width()<768) {
 
                                          var totDays = (totgiorni==30)? datiGraficoReview.length : datiGraficoSettimanale.length;
                                          e.chart.zoomToIndexes(totDays-10,totDays-1);
                                    }
                               }
                         
                             }],
                        "allLabels": [],
                        "balloon": {},
                        "titles": [],
                        "dataProvider": (totgiorni==30)? datiGraficoReview : datiGraficoSettimanale
                        }
                  );
 
     
      $("#dbgraphwrapper").removeClass("loading dark");
 
}
 
 
var formatToText = function(numero,totcifre) {
      var cifra = numero.toString();
      for(x=0;x<totcifre;x++) {
            cifra = "0" + cifra;        
      }
      return(cifra.substring(cifra.length-totcifre))
}
 
 
var formatValue = function(numero) {
      //Moltiplica il numero per 100
      var fnum = numero
      return fnum;
}
 
var dateToText = function (datadate,format) {
      var formatteddate = "";
      if (format) {
            formatteddate = format;
            formatteddate = formatteddate.replace("YYYY",datadate.getFullYear());
            formatteddate = formatteddate.replace("MM",formatToText(datadate.getMonth()+1,2));
            formatteddate = formatteddate.replace("DD",formatToText(datadate.getDate(),2));
      }
      else
      {
            formatteddate = datadate.getFullYear() + "-" + formatToText(datadate.getMonth()+1,2) + "-" + formatToText(datadate.getDate(),2)
      }
      return formatteddate;
}
 
 
function mostraErroreGrafico () {
            $("#dbgraphconsole .row.riepilogo").css("visibility","hidden");
            $("#dayselector").hide();
            $("#numerogiorniselect").hide();
            var gerr = $("<div>").addClass("erroregrafico").append("<p>Al momento non &egrave; possibile visualizzare i dati.</p>");
            $("#dbgraph").empty().append(gerr);
            $("#dbgraphwrapper").removeClass("loading dark");
}
 
 
function creaGrafico() {
 
 
      $("#dbgraphwrapper").addClass("loading dark");
 
      $.ajax({
            url: "/template/tpl_priv_dashboard_graph_data.php",
            dataType: "json",
            method: "POST",
            data: {
                  "totgiorni": $("#numerogiorni").val(),
                  "rappid": $("#rappid").val()
            },
            success: function(dati) {
                  $("#dbgraphconsole .row.riepilogo").css("visibility","visible");
                  $("#dayselector").show();
                  $("#numerogiorniselect").show();
                  ultimiDati = dati;
                  prova = dati;
                  var orlength = ultimiDati.length;
                  if (orlength < 180)
                  {
                        // Aggiunge le date mancanti (partendo dall'ultima rilevata) fino a raggiungere i 180 giorni totali
                        var splitData = ultimiDati[ultimiDati.length-1]["data"].split("-");
                        var lastdate = new Date(splitData[0], splitData[1]-1 , splitData[2] );
                        for(ind=0;ind < (180 - orlength); ind++ )
                        {
                             lastdate.setDate(lastdate.getDate()-1);
                             ultimiDati[orlength+ind] = {"data" : dateToText(lastdate)} ;
                        }
                  }
 
                  ultimiDati.reverse();
 
                  plotGrafico();
            },
            error: mostraErroreGrafico
 
      });
 
     
 
}
 
/* Inizializzazioni */
$(function(){
 
      /* Creazione grafico di default */
      creaGrafico();   
 
 
      /* Selettore rapporto */
            $("#selrapp a.selector-el").click(function(){
            $("#rappid").val($(this).attr("data-idel"));
            creaGrafico();   
      });
 
      /* Bottone "giorni" */
      $("#dayselector button").click(function(){
            var bt = $(this).addClass("selected");
            var btwrap = bt.parents(".btn-group-wrap");
            btwrap.find("button").not(bt).removeClass("selected");
            btwrap.find("input").val(bt.attr("data-numerogiorni"));
            $("#numerogiorniselect").val(bt.attr("data-numerogiorni"));
            plotGrafico();
           
      });
 
      /* Select alternatva */
      $("#numerogiorniselect").change(function(){
            $("#dayselector button[data-numerogiorni="+ $(this).val()+"]").trigger("click");
      });
     
});