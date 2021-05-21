<!-- titolo -->
<section>
    <div class="titolo">
	    <h1>
            <div class="row">
                <div class="col-sm-8">
                    <!-- TITOLO -->
                        <span>Contratti e proposte</span>
                    <!-- /TITOLO -->
                 </div>
                <!-- NUMERO PAGINA -->
                <!-- /NUMERO PAGINA -->
            </div>
	    </h1>
    </div>
</section>
<!-- fine titolo -->

<!-- Tabs -->
<div class="section outerWrapperTab no-backgr">
	<div class="row">
		<div class="col-xs-12">
			<div class="innerWrapperTab">
				<ul>
					<li><a href="/template/strutt_<?php print ($site); ?>.php?html=vr&tpl=tpl_documenti_stati_e_casistiche.php" title="" role="button">In corso</a></li>
					<li class="on"><a role="button">Archivio</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>
<!-- Fine tabs -->


<div class="formWrapper mobile-switchable">
    <h3 class="titleSection titleForm hidden-xs">Cerca pratica</h3>
    <div class="mobile-switchable-console">
        <div class="row">
            <div class="col-xs-8">
                <!-- label dinamica -->
                <div class="opened-hidden">
                    <h3 class="titleSection titleForm" id="tutteLePratiche">Tutte le pratiche</h3>
                    <div class="text-with-icon" id="rimuoviFiltri" style="display:none"><a><i class="icon icon-close_inverted_fill"></i><span class="text">Rimuovi filtri selezionati</span></a></div>
                </div>
                <h3 class="titleSection titleForm opened-visible">Cerca pratica</h3>
                
                <!-- fine label dinamica -->
            </div>
            <div class="col-xs-4">
                <div class="btn-align-right mobile-switchable-toggler">
                    <a class="btn btn-primary no-label opener"><i class="icon icon-filter"></i><span class="icon-text">Filtri</span></a>
                    <a class="btn-icon btn-icon-big closer"><i class="icon icon-close"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="mobile-switchable-form">
        <div class="form-group">
            <div class="row">
                <div class="form-field-input col-sm-4 col-xs-12">
                    <label class="control-label">Stato</label>
                    <div class="form-field">
                        <select class="form-control">
                            <option selected>Tutti</option>
                            <option>Lorem ipsum</option>
                            <option>Dolor sit</option>
                            <option>Amet consectetur</option>
                        </select>
                    </div>
                </div>
                <div class="form-field-input col-sm-4 col-xs-12">
                    <label class="control-label">Categoria</label>
                    <select class="form-control">
                        <option selected>Tutte</option>
                        <option>Lorem ipsum</option>
                        <option>Dolor sit</option>
                        <option>Amet consectetur</option>
                    </select>
                </div>
                <div class="form-field-input col-sm-4 col-xs-12">
                    <label class="control-label">Avviata da</label>
                    <select class="form-control">
                        <option selected>Tutti</option>
                        <option>Lorem ipsum</option>
                        <option>Dolor sit</option>
                        <option>Amet consectetur</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-field-input col-sm-4 col-xs-12">
                    <label class="control-label">Periodo</label>
                    <select class="form-control" onchange="$('#dateRange').toggle($(this).val()=='scegli')">
                        <option selected>Ultimi 12 mesi</option>
                        <option>Lorem ipsum</option>
                        <option>Dolor sit</option>
                        <option value="scegli">Scegli date</option>
                    </select>
                </div>
                <!-- Blocco selezione date -->
                <script type="text/javascript">
                    // Inizializzazione datepickers
                    $(function(){
                        $("#dataDal, #dataAl").datepicker();
                    });
                </script>
                <div id="dateRange" style="display:none">
                    <div class="col-xs-12 col-sm-6  col-md-4">
                        <div class="row">
                        <div class="form-field-input col-sm-6 col-xs-6">
                        <label class="control-label">Dal</label>
                        <div class="form-field">
                            <div class="datepicker-inline">
                                <input type="text" name="dataDal" id="dataDal" maxlength="10" class="form-control datepicker">
                            </div>
                        </div>
                    </div>
                    <div class="form-field-input col-sm-6 col-xs-6">
                        <label class="control-label">Al</label>
                        <div class="form-field">
                            <div class="datepicker-inline">
                                <input type="text" name="dataAl" id="dataAl" maxlength="10" class="form-control datepicker">
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                        
                </div>
                <!-- Fine blocco selezione date -->
                <div class="col-sm-2 col-xs-12">

                    <div class="form-group btnWrapper ">
				        <div class="btn-align-left">
				            <a type="button" class="btn btn-primary btn-inline btn-no-label" title="Cerca" id="cerca">Cerca</a>
				        </div>
				    </div>

                </div>
            </div>

        </div>
        
    </div>
</div>
<!-- Fine blocco filtri -->

<!-- Framework tabella -->
<script type="text/javascript">

// Esempio formattazione dei dati delle colonne
var tableFormat = {

        // Formato data
        "data": function(val) {
            return val.split("-").reverse().join("/");
        },

        // Formato link/accordion
        "acc": function(val,row) {

            var formattedval = "";

            // Se e' un singolo PDF...
            if (row.pdfurl) {
                formattedval = '<div class="text-with-icon"><a href="'+ row.pdfurl +'" target="_blank"><span class="image-icon pdf"></span><span class="text dark">'+val+'</span></a></div>';
            }
            else
            {
                // Assembla l'accordion 
                var obj = $("<div>").append(
                    $("<a>").attr("aria-expanded", "false").append(
                        $("<i>").addClass("icon icon-arrow_down"),
                        $("<i>").addClass("icon icon-arrow_up"),
                        $("<span>").addClass("text dark ellipsis").append($("<b>").html(val.toUpperCase())),
                        $("<span>").addClass("sub-text ellipsis").html(row.codpratica)
                    ).attr({"onclick":"caricaDocs(this)","data-codpratica":row.codpratica, "data-nomepratica": val.toUpperCase()})
                );
                formattedval += "<div class='text-with-icon'>"+ obj.html()+"</div>";
            }
            
            return formattedval;
        },

        // Formato "avviatada"
        "avviatada": function(val,row) {
            if (val !=="Cliente") {
                val = '<div class="text-with-icon"><a onclick="apriModaleContatti(\''+val+ '\')"><span class="icon icon-assistenza_telefono v-centered" title="icon-numeroverde_desktop"></span><span class="text dark no-underline">'+val+'</span></a></div>'
            }
            return val;
        },

        // Stato
        "stato": function (val) {
            return "<b>" + val.toUpperCase() +"</b>";
        }
    }

// Handler carico dati esterni
var caricaDocs = function(obj){
    var obj = $(obj);
    var codpratica = obj.attr("data-codpratica");
    var nomepratica = obj.attr("data-nomepratica");
    var tr = obj.parents("tr");
    // Cambio classe
    obj.attr("aria-expanded",obj.attr("aria-expanded")==="false"? "true" : "false" );

    if (obj.hasClass("opened")){
        // Distrugge il tr appeso ed il suo contenuto
        tr.next().remove();
        tr.removeClass("detail-view-opened")
    }
    else
    {
        var contwrapper = $("<div>").addClass("loading");
        var exttr = $("<td>").addClass("padding-text-with-icon").attr({colspan: tr.find("td").length}).append(contwrapper);
        tr.addClass("detail-view-opened").after($("<tr>").attr({class: "detail-row "+ tr.attr("class")}).append(exttr));
        // Emulazione della chiamata per il dettaglio dei contenuti
        setTimeout(function(){
            // Esempio caricamento dei contenuti
            $.ajax({
                dataType: "json",
                url: "/include/ajax/archivio_documenti_el_pdf.php",    
                success: function(data){
                    contwrapper.append(
                        $("<p>").addClass("accordion-title").html(nomepratica),
                            $("<div>").addClass("list-icon-wrapper not-inline").append(
                                $.map(data.docs,function(obj){
                                return $("<div>").addClass("text-with-icon").append(
                                    $("<a>").attr("href",obj.url).append(
                                        $("<span>").addClass("image-icon pdf"),
                                        $("<span>").addClass("text dark").html(obj.name)
                                    )
                                )
                            }))
                        ).removeClass("loading");
                }
            })
        },500)
    }
    obj.toggleClass("opened");
}

// Esempio handler modale con contenuto dinamico
var apriModaleContatti = function(tipo){
    getAjaxModal({
        url: "parts/modali_contenuti_contatti.php",
        method: "POST",
        title: "Contattaci",
        class: "modal-footer-fixed",
        data: {
            tipocontatto: (tipo=="Contact Center") ? "cc":"fg"
        }
    });
}

    
// Costruzione della tabella
var costruisciTabella = function() {

    // Caricamento dati esterni via AJAX (esempio) ma potrebbe essere anche un oggetto in pagina
    $.ajax({
        url: "/include/ajax/documenti_archivio_data.php",
        dataType: "json",
        success: function (data) {
            // Esempio tabella bootstrap wrappata (estensione $("#idoggetto").bst())
            $("#tableArchivio").bst({
                pageSize:50,
                mobileCardView: true,
                mobileCardWidth: 767,
                // Formattazione dell'header
                columns: [
                    {
                        field: 'pratica',
                        title: 'Pratica',
                        sortable: true,
                        class: "padding-text-with-icon",
                        formatter: tableFormat.acc,
                        cardClass: 'card-view-full card-view-notitle'
                    },
                    {
                        field: 'categoria',
                        title: 'Categoria' ,
                        sortable:true,
                        cardClass: 'padding-text-with-icon'
                    },
                    {
                        field: 'avviatada',
                        title: 'Avviata da',
                        formatter: tableFormat.avviatada,
                        sortable:true
                    },
                    {
                        field: 'stato',
                        title: 'Stato <a class="inline-icon hidden-xs" onclick="$(\'#modaleInfo\').modal(\'show\');event.stopPropagation()"><i class="icon icon-ico_help_filled_tab"></i></a>',
                        formatter: tableFormat.stato,
                        headerformatter: function(){return "maurizio"},
                        sortable:true,
                        cardClass: 'padding-text-with-icon'
                    },
                    {
                        field: 'data',
                        title: 'Data',
                        sortable:true,
                        class: 'center',
                        formatter: tableFormat.data
                    }
                ],
                data: data.pratiche
            });
        }
    })

    

    
}


// Inizializzazione tabella 
$(function(){
    
    // Emulazione gestione filtri su Mobile
    $("#rimuoviFiltri").click(function(){
        $("#tutteLePratiche").show();
        $(this).hide();
        costruisciTabella();
    })

    // Emulazione "cerca" (con comportamenti mobile per gestione filtri)
    $("#cerca").click(function(){
        $("#tutteLePratiche").hide();
        $("#rimuoviFiltri").show();
        $(this).parents(".mobile-switchable").removeClass("opened");

        costruisciTabella();
    });
    costruisciTabella();
    
});

</script>
<!-- Modali -->
<?php include ("parts/documenti_modali.php"); ?>
<!-- Fine modali -->

<!-- Informazioni sullo stato delle pratiche -->
<section class="visible-xs">
    <div class="text-with-icon right-icon"><a data-toggle="modal" data-target="#modaleInfo"><span class="text">Informazioni sugli stati delle pratiche</span><i class="icon icon-ico_help_filled_tab"></i></a></div>
</section>
<!-- Fine informazioni sullo stato delle pratiche -->
<table class="loading" id="tableArchivio"></table>
<!-- Fine framework tabella -->