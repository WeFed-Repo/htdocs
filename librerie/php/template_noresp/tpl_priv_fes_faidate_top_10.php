<!-- FINE ACQUISIZIONE DEI DATI ESTERNI -->
<h1>Migliori e Peggiori</h1>
<!-- TABS -->

<!-- ******* WRAPPER PAGINA RICERCA (TAB COMPRESI) ******* -->
<div id="fesRicWrap">
    <ul class="tabGeneric">
        <li id="tabTop10" class="tablink active">
            <span class="tabBorder"><span class="tabGradient"><a href="#!">Top 10 Fondi</a></span></span>
        </li>
        <li id="tabTopFlop" class="tablink">
            <span class="tabBorder"><span class="tabGradient"><a href="/connect.php?page=strutt_priv.php&amp;liv0=0&amp;liv1=0&amp;liv2=0&amp;responsive=n&amp;tpl=../template_noresp/tpl_priv_fes_faidate_top_flop.php" class="leftelement">Categorie migliori e peggiori</a></span></span>
        </li>
    </ul>
    <!-- FINE TABS -->

    <!-- WRAPPER -->
    <div id="fesTop10Cont" class="tabCont" style="display:none">
    	<div class="paddMedium">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt doloremque neque, quia aliquam, consequuntur dolore in eveniet unde ab, nesciunt asperiores vitae beatae ratione sapiente consectetur libero nam exercitationem iusto.</p>
			<h2>Top 10 fondi a un anno*</h2>
			<br>
			<div id="fesTop10Btns" class="row-fluid">
				<div class="span2"><label>Visualizza:</label></div>
				<div class="span10">
					<a class="aButton" href="#!">Tutti</a>
					<a class="aButton buttSelect" href="#!">Azionari</a>
					<a class="aButton buttSelect" href="#!">Obbligazionari</a>
					<a class="aButton buttSelect" href="#!">Flessibili</a>
					<a class="aButton buttSelect" href="#!">5 Corone</a>
				</div>
			</div>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt doloremque neque, quia aliquam, consequuntur dolore in eveniet unde ab, nesciunt asperiores vitae beatae ratione sapiente consectetur libero nam exercitationem iusto.</p>

	        <!-- FINE WRAPPER -->
	        <div id="fesTop10Results" class="fesResults">
	        	<table id="fesTop10Table" class="dettTable sortable">
				    <thead>
				        <tr class="festTableHead">
				            <th>
				            	<a class="sortDir" href="#!" fieldname="nome">Nome</a>
				            </th>
				            <th>
				            	<a class="sortDir" href="#!" fieldname="nomecategoriabrating">Categoria<br>BRating</a></th>
				            <th>
				            	<a class="sortDir" href="#!" fieldname="rating">Rating</a>
				            </th>
				            <th>
				            	<a class="sortDir" href="#!" fieldname="rendimento">Rendimento<br>a 1 anno*</a>
				            </th>
				        </tr>
				    </thead>
				    <tbody>
				    </tbody>
				</table>
		        <table class="condiz2Mov">
					<tbody>
						<tr>
							<td class="flLeft"><!--a href="#!" title="confronta selezionati">confronta selezionati</a-->&nbsp;</td>
							<td class="txtAlRight"><a id="btnMSmoneyMov" class="formms" href="#!" title="Formato Excel" target="_blank">Formato Excel</a>
								<a id="btnStampaPaginaMov" class="print noPaddright" href="#!" title="Stampa pagina">Stampa pagina</a></td>
						</tr>
					</tbody>
				</table>
	        </div>
	        <br class="clear">
			<br>
			<!-- note -->
			<div class="filettoGenericoOrizzontale02 margBottomSmall"></div>
			<p class="note">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec quis tellus. </p>
			<p class="note">* Praesent at ipsum. Integer vitae eros. <strong>Aliquam egestas dapibus tellus</strong>. Ut vel mi eu purus feugiat porta. Praesent at ipsum. <a href="" title="Integer vitae eros">Integer vitae eros</a>. Aliquam egestas dapibus tellus. Ut vel mi eu purus feugiat porta.</p>
			<!-- fine note -->
    	</div>
    </div>
</div>
<!-- ******* FINE WRAPPER PAGINA RICERCA (TAB COMPRESI) ******* -->

<script type="text/javascript">
var isLibrerie = true;
</script>

<!-- INCLUSIONI ESTERNE -->
<script type="text/javascript" src="/wscmn/js/amcharts/amcharts.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/priv_fes.js"></script>
<script type="text/javascript" src="/wscmn/fe/js/noresp_priv_fes_top_10.js"></script>
<script type="text/javascript" src="/wscmn/js/ret/priv_fes_fondo.js"></script>
<!-- FINE INCLUSIONI ESTERNE -->

<!-- ACQUISIZIONE DEI DATI ESTERNI ED INNESCHI VARI -->
<script type="text/javascript">
<?php
// Se non viene specificato un fondo, carica la tabella dei top 10
$fondo = $_GET["fondo"];
if (empty($fondo)) {
?>
	// Inizializza la ricerca da zero
	$(fondiTop10.start);
<?php
} else {
?>
	// Attiva direttamente la scheda fondo
	fesFondoStart({"codicesocieta": "09123","codicecomparto": "09132","divisa": "189312", "fondosicav":"03129"});
<?php
}
?>
</script>
