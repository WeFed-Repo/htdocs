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
/* Esempio */
</script>
<div class="formWrapper">
    <div class="form-group">
        <div class="row">
            <div class="form-field-input col-sm-3">
                <label class="control-label">Stato</label>
                <select class="form-control">
                    <option selected>Tutti</option>
                    <option>Lorem ipsum</option>
                    <option>Dolor sit</option>
                    <option>Amet consectetur</option>
                </select>
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
                <a type="button" href="#" class="btn btn-primary" title="Filtra" id="filtra">Filtra</a>
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
    var extcont = $("<td>").addClass("loading").attr({colspan: tr.find("td").length});
    tr.after(
        $("<tr>").attr({class: "detail-row "+ tr.attr("class")}).append(
            extcont
        )
    );

    // Emulazione della chiamata per il dettaglio dei contenuti
    setTimeout(function(){
        // Esempio caricamento dei contenuti
        extcont.html("ipp").removeClass("loading");
    },500)
    

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
}


// Inizializzazione tabella 
$(function(){
    
    // Emulazione "Filtra"
    $("#filtra").click(function(){
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