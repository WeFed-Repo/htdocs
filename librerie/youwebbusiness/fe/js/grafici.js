var Graph = {

    amroot: $('script[src*="/grafici.js"]').eq(0).attr("src").replace("js/grafici.js","assets/amcharts/"),

    activelibs: [],

    plot : function(params) {

        var gCont = $("#" + params.idcontainer).empty().addClass("loading");

        // A seconda del tipo di grafico, importa le librerie necessarie, se non ancora importate e rilancia il plotting
        var libsok = true,
            libs = ["amcharts.js"];
            
            libs.push({
                "histogram": "serial.js",
                "piles": "serial.js",
                "donut": "pie.js"
                }[params.graphtype]);

        // Controlla il set di librerie e se ne dovessero mancare rilancia il plot a valle dell'importazione
        $.each(libs, function(index,lib){
            if (Graph.activelibs.indexOf(lib)<0 && libsok) {
                libsok = false;
                $.getScript(Graph.amroot + lib, function(){
                    Graph.activelibs.push(lib);
                    Graph.plot(params);
                });
            }
        });

        // Se tutte le librerie sono state importate lancia il vero e proprio "plot"
        if (libsok) {

            //Oggetto di configurazione di default istogramma
            var graphconf = {
                "serial" : {
                    type: "serial",
                    decimalSeparator:",",
                    thousandsSeparator: "",
                    fontFamily: "roboto, sans-serif",
                    columnSpacing:0,
                    fontSize: 12,
                    color: "#737373",
                    addClassNames:true,
                    panEventsEnabled: false,
                    valueAxes: ( params.valueAxis ? [ $.extend(true, {
                        dashLength:0,
                        axisAlpha:0,
                        labelOffset:10,
                        stackType: (params.graphtype=="piles" ? "regular" : "none")
                    }, params.valueAxis)] : params.valueAxes),
                    balloon: {
                        adjustBorderColor: true,
                        borderThickness:0,
                        color: "#fff",
                        borderColor: "#000",
                        fillColor: "#000",
                        pointerWidth: 5,
                        verticalPadding:10,
                        horizontalPadding:15,
                        offsetY:5
                    },
                    categoryAxis: {
                        gridAlpha: 0,
                        minHorizontalGap:1,
                        tickLength:0,
                        labelOffset:10,
                        axisColor: "#eee"
                    }
                },
                "donut" : {
                    type    : "pie",
                    titleField  : "label",
                    valueField  : "value",
                    labelsEnabled: false,
                    showBalloon: false,
                    colorField: "color",
                    radius:"49%",
                    startDuration: 0,
                    innerRadius: "75%",
                    listeners: []
                }
            }[(params.graphtype==="donut"? "donut" : "serial")];

            // Appende eventuali listener per il rendering di default (es: labels, legenda personalizzata, ecc...)
            // Es. titolo del donut
            if (params.graphtype === "donut" && params.donutLabel) {
                graphconf.listeners.push( {
                    "event": "rendered",
                    "method": function(){
                            $("#" + params.idcontainer).append($("<div>").addClass("donut-title").append(
                                (params.donutLabel.title ? $("<span>").addClass("label").html(params.donutLabel.title) : ""),
                                (params.donutLabel.value? $("<span>").addClass("value").html(params.donutLabel.value): "")
                            ))
                    }
                })
            }

            // Costruzione del grafico
            AmCharts.makeChart( params.idcontainer, $.extend(true, graphconf, params));
            gCont.removeClass("loading");

        }

    }

}