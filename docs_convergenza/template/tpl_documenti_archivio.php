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
    function scramble($par) {
        $scrambled = "";
        // Se $par e' un numero scrive il numero indicato di parole random
        if (is_numeric($par)){
            for($x=0;$x<$par;$x++) {

            }
        }
        else
        {
            if (is_array($par)){
                // Altrimenti randomizza l'array ricevuto
                $scrambled = $par[rand(0,sizeof($par)-1)];
            }
            else{
                // Randomizza il testo ricevuto: se ha spazi taglia sugli spazi altrimenti per singola lettera
                if (strrpos($par," ")>0) {
                    $scrambled = "aaaa";
                }
                else
                {
                    $scrambled = "bbb";
                }
            }
            
        }
        return $scrambled;
    };

    for($x==0;$x<100;$x++) {
        print (($x>0)? ",":"") ;
        // Dati fake randomizzati 
        ?>{
        pratica: "INVESCO GLOBAL FLEXIBLE BOND FUND",
        codpratica: "INV-0014",
        categoria:"<?php print scramble(["Conti","Carte","Finanziamenti","Investimenti","Assicurazioni"]); ?>",
        avviatada: "<?php print scramble(["Cliente","Filiale","Gestore","Contact Center"]); ?>",
        stato: "<?php print scramble(["SOTTOSCRITTA","SCADUTA","REVOCATA DA GESTORE","RIFIUTATA DA CLIENTE"]); ?>",
        data: "2021-<?php print "0".rand(1,5)."-".rand(11,28); ?>"
    }
    <?php } ?>
];


// Esempio formattazione dati
var tableFormat = {
        "data": function(obj) {
            return obj.split("-").reverse().join("/");
        }
    }

    
// Costruzione della tabella
var costruisciTabella = function() {

    $("#tableArchivio").bootstrapTable({
        pagination: true,
        pageSize: 50,
        columns: [
            {
                field: 'pratica',
                title: 'Pratica',
                sortable:true
            },
            {
                field: 'categoria',
                title: 'Categoria',
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
    .bootstrap-table tbody tr:nth-child(odd) td {background:#eaeded}
    
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
    .bootstrap-table .fixed-table-pagination .pagination ul li.disabled {display:none;}
    
    
    
    
    

</style>
<table class="loading" id="tableArchivio"></table>
<!-- Fine framework tabella -->