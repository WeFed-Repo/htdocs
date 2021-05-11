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
					<li><a href="#" title="" role="button">In corso</a></li>
					<li class="on"><a role="button">Archivio</a></li>
				</ul>
			</div>
			<div class="separator"></div>
		</div>
	</div>
</div>
<!-- Fine tabs -->

<!-- Blocco filtri -->
<script>
    $(function(){
        $(".mobile-switchable-toggler").click(function(){
            var btn = $(this);
            btn.parents(".mobile-switchable").toggleClass("opened")
        })
    })
</script>

<style>
.mobile-switchable-console {display:none;} 
@media (max-width: 1023px) {
    .mobile-switchable .closer {display:none;}
    .mobile-switchable-console {display:block;}
    .mobile-switchable-form {display:none}
    
    .mobile-switchable.opened .closer {display: inline-block}
    .mobile-switchable.opened .opener {display: none;}
    .mobile-switchable.opened .mobile-switchable-form {display:block; padding-right:60px;}
}

/* Bottoni con glifo per VR */
.btn .icon {font-size:20px; font-weight:normal;line-height: 13px; margin-right:5px}
.btn span.icon-text {    font-family: "bankFont" !important;
    font-size: 14px;
    font-weight: bold;
    line-height: 14px;
    display: inline-block;
    position: relative;
    top: -4px;
    text-transform: uppercase;}

/* Bottone icona grande */
.btn-icon-big {background: #0e977f; border-radius:50%; width:34px;height:34px; color:#fff; text-align:center; display:inline-block; margin:0;}
.btn-icon-big i.icon {line-height:32px;}
</style>

<div class="formWrapper mobile-switchable">

    <div class="mobile-switchable-console">
        <div class="row">
            <div class="col-xs-8">
                <h4>Tutte le pratiche</h4>
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
                <div class="form-field-input col-sm-3">
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
                <div class="form-field-input col-sm-3">
                    <label class="control-label">Categoria</label>
                    <select class="form-control">
                        <option selected>Tutte</option>
                        <option>Lorem ipsum</option>
                        <option>Dolor sit</option>
                        <option>Amet consectetur</option>
                    </select>
                </div>
                <div class="form-field-input col-sm-3">
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
                <div class="form-field-input col-sm-3">
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
                    <div class="form-field-input col-sm-2">
                        <label class="control-label">Dal</label>
                        <div class="form-field">
                            <div class="input-group">
                                <input type="text" name="dataDal" size="12" id="dataDal" class="form-control datepicker input-inline clear-x wauto input-required">
                                <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-field-input col-sm-2">
                        <label class="control-label">Al</label>
                        <div class="form-field">
                            <div class="input-group">
                                <input type="text" name="dataAl" size="12" id="dataAl" class="form-control datepicker input-inline clear-x wauto input-required">
                                <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fine blocco selezione date -->
                <div class="col-sm-1">
                    <div class="btn-align-left">
                        <a type="button" href="#" class="btn btn-primary" title="Cerca" id="cerca">Cerca</a>
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

    for($x==0;$x<100;$x++) {
        print (($x>0)? ",":"") ;
        // Dati fake randomizzati 
        ?>{
        pratica: "<?php print scramble("INVESCO GLOBAL FLEXIBLE BOND FUND LOREM DOLOR PLACET IPSUM DOLOR AMET SUMMA CONSECTETUR INVESTING ALLIANCE SICAV",4,6);?>",
        codpratica: "a682002b-db58-4325-ba7d-51166868a68f",
        categoria:"<?php print scramble(["Conti","Carte","Finanziamenti","Investimenti","Assicurazioni"]); ?>",
        avviatada: "<?php print scramble(["Cliente","Filiale","Gestore","Contact Center"]); ?>",
        stato: "<?php print scramble(["SOTTOSCRITTA","SCADUTA","REVOCATA DA GESTORE","RIFIUTATA DA CLIENTE"]); ?>",
        data: "2021-<?php print "0".rand(1,5)."-".rand(11,28); ?>"
    }
    <?php } ?>
];


// Esempio formattazione dati
var tableFormat = {
        "data": function(val) {
            return val.split("-").reverse().join("/");
        },
        "acc": function(val,row) {
            // Assembla l'accordion
            var obj = $("<div>").append(
                $("<a>").addClass("linker").append(
                    $("<span>").addClass("icon icon-arrow_down"),
                    $("<span>").addClass("text underline").html(val),
                    $("<span>").addClass("sub-text").html(row.codpratica)
                ).attr({"onclick":"caricaDocs(this)","data-codpratica":row.codpratica})
            );
            return "<div class='text-with-icon ellips'>"+ obj.html()+"</div>"

        }
    }

// Handler carico dati esterni
var caricaDocs = function(obj){
    var obj = $(obj);
    var codpratica = obj.attr("data-codpratica");
    var tr = obj.parents("tr");
    if (obj.hasClass("opened")){
        // Distrugge il tr appeso ed il suo contenuto
        tr.next().remove();
        
    }
    else
    {
        var contwrapper = $("<div>").addClass("loading");
        var exttr = $("<td>").attr({colspan: tr.find("td").length}).append(contwrapper);
        tr.after($("<tr>").attr({class: "detail-row "+ tr.attr("class")}).append(exttr));
        // Emulazione della chiamata per il dettaglio dei contenuti
        setTimeout(function(){
            // Esempio caricamento dei contenuti
            $.ajax({
                dataType: "json",
                url: "/include/ajax/archivio_documenti_el_pdf.php",    
                success: function(data){
                    contwrapper.append(
                        $("<span>").html(data.docname),
                        $("<div>").addClass("list-icon-wrapper not-inline").append(
                                $.map(data.docs,function(obj){
                                return $("<div>").addClass("text-with-icon ellips").append(
                                    $("<span>").addClass("image image-uread_pdf"),
                                    $("<a>").attr("href",obj.url).html(obj.name)
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

    $("#tableArchivio").bootstrapTable({
        pagination: true,
        pageSize: 50,
        rowStyle: function(r,i) {
            return {classes: (i%2==0)? "odd":"even"}
        },
        columns: [
            {
                field: 'pratica',
                title: 'Pratica',
                sortable: true,
                formatter: tableFormat.acc
            },
            {
                field: 'categoria',
                title: 'Categoria' ,
                sortable:true
            },
            {
                field: 'avviatada',
                title: 'Avviata da',
                sortable:true
            },
            {
                field: 'stato',
                title: 'Stato',
                sortable:true
            },
            {
                field: 'data',
                title: 'Data',
                sortable:true,
                formatter: tableFormat.data
            }
        ],
        data: tData
    }).removeClass("loading");

    // Evento resize
    $(window).on("resize",function(){
        var iscv = $("#tableArchivio .card-view").length>0;
        console.log($(window).width()<=480)
        if (($(window).width()<=480 && !iscv) || iscv) { $("#tableArchivio").bootstrapTable("toggleView")};
        
        
    })
}


// Inizializzazione tabella 
$(function(){
    
    // Emulazione "cerca"
    $("#cerca").click(function(){
        costruisciTabella();
    });
    costruisciTabella();
    
});

</script>
<style>
    /* Stili Bootstrap table non importati */
    .bootstrap-table tbody tr.odd td {background:#eaeded}
    
    .bootstrap-table .th-inner.sortable {cursor: pointer;
    background: url(/HT/fe/img/icon_sort_none.png) 0 3px no-repeat;
    padding-left:15px;
    display:inline-block;
    min-height:20px;
    }
    .bootstrap-table .th-inner.sortable.asc {background-image: url(/HT/fe/img/icon_sort_asc.png)}
    .bootstrap-table tr td {vertical-align:top;}
    .bootstrap-table .th-inner.sortable.desc {background: url(/HT/fe/img/icon_sort_desc.png) 0 12px no-repeat}
    .bootstrap-table .fixed-table-pagination .pagination-detail {display:none}
    .bootstrap-table .fixed-table-pagination .pagination-detail {display:none}
    .pagination-info .label-group {display:none}
    .bootstrap-table .fixed-table-pagination .pagination {width:100%;text-align:center;}
    .bootstrap-table .fixed-table-pagination .pagination ul {display:inline-block;text-align:center;list-style-type:none !important}
    .bootstrap-table .fixed-table-pagination .pagination ul li {text-align:center;margin:0 5px;display:inline-block;}
    .bootstrap-table .fixed-table-pagination .pagination ul li a {display:inline-block;width:20px;height:20px;text-align:center;}
    .bootstrap-table .fixed-table-pagination .pagination ul li.page-number.active a {font-weight:bold;}
    .bootstrap-table .fixed-table-pagination .pagination ul li.page-first a,
    .bootstrap-table .fixed-table-pagination .pagination ul li.page-pre a,
    .bootstrap-table .fixed-table-pagination .pagination ul li.page-next a,
    .bootstrap-table .fixed-table-pagination .pagination ul li.page-last a {border-radius: 50%; background-color: #0E977F; color:#fff; font-size:20px;line-height:20px;vertical-align:center;}
    .bootstrap-table .fixed-table-pagination .pagination ul li.disabled a {background-color:#ccc;opacity:0.5}
    .bootstrap-table .fixed-table-pagination .pagination ul li.page-first, .bootstrap-table .fixed-table-pagination .pagination ul li.page-last {display:none}
    
    
    

</style>
<table class="loading" id="tableArchivio"></table>
<!-- Fine framework tabella -->