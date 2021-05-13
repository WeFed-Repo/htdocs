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
                    <div class="text-with-icon" id="rimuoviFiltri" style="display:none"><a><i class="icon icon-close_inverted_fill"></i>Rimuovi filtri selezionati</a></div>
                </div>
                <h3 class="titleSection titleForm opened-visible">Cerca pratica</h3>
                
                <!-- fine label dinamica -->
            </div>
            <div class="col-xs-4">
                <div class="btn-align-right mobile-switchable-toggler">
                    <a class="btn btn-primary no-label opener"><i class="icon icon-add"></i><span class="icon-text">Filtri</span></a>
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
                        $("#dataDal, #dataAl").datepicker({
                            buttonImage: '/common/fe/img/pixel_trasp.gif'
                        });
                    });
                </script>
                <div id="dateRange" style="display:none">
                    <div class="col-xs-12 col-sm-6  col-md-4">
                        <div class="row">
                        <div class="form-field-input col-sm-6 col-xs-6">
                        <label class="control-label">Dal</label>
                        <div class="form-field">
                            <div class="input-group">
                                <input type="text" name="dataDal" size="12" id="dataDal" class="form-control datepicker input-inline clear-x wauto input-required">
                                <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-field-input col-sm-6 col-xs-6">
                        <label class="control-label">Al</label>
                        <div class="form-field">
                            <div class="input-group">
                                <input type="text" name="dataAl" size="12" id="dataAl" class="form-control datepicker input-inline clear-x wauto input-required">
                                <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
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
// Tabella
// Blocco dei dati della tabella
var tData = [
    <?php 
    
    // Funzione di randomizzazione
    function scramble($par,$minwords=null,$maxwords=null) {
        $scrambled = "";
        $separator = " ";
        // Se $par e' un numero scrive il numero indicato di parole random
        if (is_numeric($par)){
            for($x=0;$x<$par;$x++) {
                $scrarray = explode(" ","Lorem ipsum dolor sit amet consectetur");
                shuffle($scrarray);
                $scrambled = implode(" ", $scrarray);
            }
        }
        else
        {
            if (!is_array($par)){
               // Trasforma il testo in un array diverso a seconda della presenza o meno degli spazi
               if (strrpos($par," ")<=0) {
                    $separator = "";
               }
               $scrarray = explode( $separator, $par);
               shuffle($scrarray);
               if(is_numeric($minwords)) $scrarray = array_slice($scrarray,0, rand($minwords,$maxwords)-1);
               $scrambled = implode($separator,$scrarray);

            }
            else
            {
                $scrarray = $par;
                $scrambled = $scrarray[rand(0,sizeof($scrarray)-1)];
            }
           
        }
        return $scrambled;
    };

    for($x==0;$x<93;$x++) {
        print (($x>0)? ",":"") ;
        // Dati fake randomizzati 
        ?>{
        pratica: "<?php print scramble("Invesco Global Protect Flexible Conto Carta Prepaid Standard Bond Equivalent Lorem Dolor Summa Cum Laude",4,6);?>",
        codpratica: "a682002b-db58-4325-ba7d-51166868a68f",
        categoria:"<?php print scramble(["Conti","Carte","Finanziamenti","Investimenti","Assicurazioni"]); ?>",
        avviatada: "<?php print scramble(["Cliente","Filiale","Gestore","Contact Center"]); ?>",
        stato: "<?php print scramble(["SOTTOSCRITTA","SCADUTA","REVOCATA DA GESTORE","RIFIUTATA DA CLIENTE"]); ?>",
        data: "2021-<?php print "0".rand(1,5)."-".rand(11,28); ?>"
        <?php if ($x%3==0 && $x!=0) print (', pdfurl : "../pdf/documentopdf.pdf"') ?>
    }
    <?php } ?>
];


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
                formattedval = '<div class="text-with-icon "><a class="linker" href="'+ row.pdfurl +'" target="_blank"><span class="image pdf"></span><span class="text underline">'+val+'</span></a></div>';
            }
            else
            {
                // Assembla l'accordion 
                var obj = $("<div>").append(
                    $("<a>").attr("aria-expanded", "false").addClass("linker").append(
                        $("<i>").addClass("icon icon-arrow_down"),
                        $("<i>").addClass("icon icon-arrow_up"),
                        $("<span>").addClass("text underline").html(val.toUpperCase()),
                        $("<span>").addClass("sub-text").html(row.codpratica)
                    ).attr({"onclick":"caricaDocs(this)","data-codpratica":row.codpratica, "data-nomepratica": val.toUpperCase()})
                );
                formattedval += "<div class='text-with-icon ellips'>"+ obj.html()+"</div>";
            }
            
            return formattedval;
        },

        // Formato "avviatada"
        "avviatada": function(val,row) {
            if (val !=="Cliente") {
                val = '<div class="text-with-icon "><a href="javascript:;" class="no-underline" data-toggle="modal" data-target="#modaleContatti'+ ((val=="Contact Center")? "2":"") +'"><span class="icon icon-assistenza_telefono" title="icon-numeroverde_desktop"></span></a><span>'+val +'</span></div>'
                
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
    }
    else
    {
        var contwrapper = $("<div>").addClass("loading");
        var exttr = $("<td>").addClass("padding-text-with-icon").attr({colspan: tr.find("td").length}).append(contwrapper);
        tr.after($("<tr>").attr({class: "detail-row "+ tr.attr("class")}).append(exttr));
        // Emulazione della chiamata per il dettaglio dei contenuti
        setTimeout(function(){
            // Esempio caricamento dei contenuti
            $.ajax({
                dataType: "json",
                url: "/include/ajax/archivio_documenti_el_pdf.php",    
                success: function(data){
                    contwrapper.append(
                        $("<p>").addClass("paddingBottomSmall").html(nomepratica),
                            $("<div>").addClass("list-icon-wrapper not-inline").append(
                                $.map(data.docs,function(obj){
                                return $("<div>").addClass("text-with-icon").append(
                                    $("<a>").attr("href",obj.url).append(
                                        $("<span>").addClass("image pdf"),
                                        obj.name
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

    
// Costruzione della tabella
var costruisciTabella = function() {

    // Esempio tabella bootstrap wrappata (estensione $("#idoggetto").bst())
    $("#tableArchivio").bst({
        pageSize:10,
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
        data: tData
    });

    
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
    <div class="text-with-icon right-icon"><a data-toggle="modal" data-target="#modaleInfo">Informazioni sugli stati delle pratiche<i class="icon icon-ico_help_filled_tab"></i></a></div>
</section>
<!-- Fine informazioni sullo stato delle pratiche -->
<table class="loading" id="tableArchivio"></table>
<!-- Fine framework tabella -->