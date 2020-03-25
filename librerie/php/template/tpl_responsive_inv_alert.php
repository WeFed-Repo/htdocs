<script type="text/javascript" src="/wscmn/fe/js/priv_fes_resp.js"></script>
<h2>Alert</h2>
<p>Nella tabella sotto sono elencati gli alert che hai impostato.</p>
<!-- Riepilogo dati contatto -->

<form class="formGenerico borderFormRounded output" role="form">
	<div class="form-group">
		<!-- UNICA RIGA CON CAMPO-->
		 <div class="row">
		 	<div class="col-sm-4">
				<label class="control-label-output">Canale di notifica</label>
				<span class="output">nessuno</span>
			</div>
			<div class="col-sm-4">
				<label class="control-label-output">E-mail</label>
				<span class="output">lorem.impsum@gmail.com</span>
			</div>
			<div class="col-sm-4">
				<label class="control-label-output">Cellulare</label>
				<span class="output">335*****91</span>
			</div>
		</div>
	</div>
	<div class="form-group">
		 <div class="row">
		 	<div class="col-xs-12">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_imposta_alert.php&responsive=y&liv0=0&liv1=1&liv2=0&liv3=1">modifica</a>
					<br class="clear">
				</div>
			</div>
		</div>
	</div>
</form>	


<h4 >Lista alert</h4>


<?php
	if ($_GET["esito"]=="ok") {
?>
<section class="boxesitoWrap">
	<div class="boxesito positivo">
		<div class="text">
			<div class="row">
				<div class="col-xs-12">
					<p><strong>Nuovo Alert inserito</strong><br>Nella lista &egrave; presente il nuovo alert inserito</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	}
?>

	<!-- TABELLA -->
 	<table id="tableAlert" cellspacing="0" cellpadding="0" border="0" class="fondialert sortableTable" data-toggle="table">
	    <thead>
	        <tr>
	            <th data-field="nome" data-sortable="true"  class="sortableTh sortedTh">Nome</th>
	            <th data-field="val" class="center">Val</th>
	            <th data-field="przultimo" class="right">Ultimo<br>prezzo</th>
	            <th data-field="varultgiorno" class="right">Var %<br>ultimo giorno</th>
	            <th data-field="varytd" class="right">Var %<br>YTD</th>
	            <th data-field="stato" data-sortable="true" class="sortableTh center">Stato</th>
	            <th data-field="ico1" class="icopad center"></th>
	        </tr>
	    </thead>
	    <tbody>
	    </tbody>
	</table>

	<!-- Dati per la tabella di bootstrap -->
	<script type="text/javascript">

	var dataAlert = [
		{"ico1":"<a class=\"linkVai\" codicecomparto=\"H0188\" title=\"scegli l'operazione da effettuare\" data-fundname=\"HSBC GIF Euroland Eq Smaller Companies E EUR\" href=\"javascript:;\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i>","val":"EUR","stato":"IN ATTESA","przultimo":"<=50<br>","varytd":"-","nome":"HSBC GIF Euroland Eq Smaller Companies E EUR","url":"http:\/\/www.example.org","varultgiorno":"-"},
		{"ico1":"<a class=\"linkVai\" codicecomparto=\"H0188\" title=\"scegli l'operazione da effettuare\" data-fundname=\"HSBC GIF Euroland Eq Smaller Companies E EUR\" href=\"javascript:;\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i>","val":"EUR","stato":"IN ATTESA","przultimo":"<=1<br>>=100","varytd":"-","nome":"HSBC GIF Euroland Eq Smaller Companies E EUR","url":"http:\/\/www.example.org","varultgiorno":"-"},
		{"ico1":"<a class=\"linkVai\" codicecomparto=\"H0188\" title=\"scegli l'operazione da effettuare\" data-fundname=\"HSBC GIF Euroland Eq Smaller Companies E EUR\" href=\"javascript:;\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i>","val":"EUR","stato":"IN ATTESA","przultimo":"<=10<br>>=150","varytd":"-","nome":"Allianz Euro Investment Grade Bond Stra. A Dis EUR","url":"http:\/\/www.example.org","varultgiorno":"-"},
		{"ico1":"<a class=\"linkVai\" codicecomparto=\"H0188\" title=\"scegli l'operazione da effettuare\" data-fundname=\"HSBC GIF Euroland Eq Smaller Companies E EUR\" href=\"javascript:;\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i>","val":"EUR","stato":"IN ATTESA","przultimo":"<=10<br>","varytd":"-","nome":"Anima Alto Potenziale Globale A EUR","url":"http:\/\/www.example.org","varultgiorno":"-"},
		{"ico1":"<a class=\"linkVai\" codicecomparto=\"H0188\" title=\"scegli l'operazione da effettuare\" data-fundname=\"HSBC GIF Euroland Eq Smaller Companies E EUR\" href=\"javascript:;\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i>","val":"EUR","stato":"IN ATTESA","przultimo":"<=1<br>","varytd":"-","nome":"Carmignac Capital Cube A EUR Acc","url":"http:\/\/www.example.org","varultgiorno":"-"},
		{"ico1":"<a class=\"linkVai\" codicecomparto=\"H0188\" title=\"scegli l'operazione da effettuare\" data-fundname=\"HSBC GIF Euroland Eq Smaller Companies E EUR\" href=\"javascript:;\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i>","val":"EUR","stato":"IN ATTESA","przultimo":"<=1<br>","varytd":"-","nome":"Allianz Euro Investment Grade Bond Stra. A Dis EUR","url":"http:\/\/www.example.org","varultgiorno":"-"},
		{"ico1":"<a class=\"linkVai\" codicecomparto=\"H0188\" title=\"scegli l'operazione da effettuare\" data-fundname=\"HSBC GIF Euroland Eq Smaller Companies E EUR\" href=\"javascript:;\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i>","val":"EUR","stato":"IN ATTESA","przultimo":"-","varytd":"-","nome":"HSBC GIF Euroland Eq Smaller Companies E EUR","url":"http:\/\/www.example.org","varultgiorno":">=1"},
		{"ico1":"<a class=\"linkVai\" codicecomparto=\"H0188\" title=\"scegli l'operazione da effettuare\" data-fundname=\"HSBC GIF Euroland Eq Smaller Companies E EUR\" href=\"javascript:;\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i>","val":"EUR","stato":"IN ATTESA","przultimo":"-","varytd":">=1","nome":"HSBC GIF Euroland Eq Smaller Companies E EUR","url":"http:\/\/www.example.org","varultgiorno":"-"},
		{"ico1":"<a class=\"linkVai\" codicecomparto=\"H0188\" idalert=\"p91289021\" title=\"scegli l'operazione da effettuare\" data-fundname=\"HSBC GIF Euroland Eq Smaller Companies E EUR\" href=\"javascript:;\"><i class=\"icon icon-2x icon-ico_azioni02A\"></i>","val":"EUR","stato":"IN ATTESA","przultimo":"-","varytd":">=1","nome":"Allianz Euro Investment Grade Bond Stra. A Dis EUR","url":"http:\/\/www.example.org","varultgiorno":"-"}
	];

	$tableAlert = $('#tableAlert').bootstrapTable({
	            sortable: true,
	            sortName: "nome",
	            sortOrder: "asc",
	            pagination : "true",
	            data: dataAlert,
	            pageSize: 15,
	            pageList: [15, 30, 60, 'tutti'],
				rowStyle: function(row, index) {
					if(index % 2 == 0)
					{
						return {
							classes: 'dispari'
						}
					}
					else {
						return {
							classes: 'pari'
						}
					}
				}

			});

	// Automazione icona operativa
	$(".linkVai").click(fesIcoOpeOverlay);
	$tableAlert.on("post-body.bs.table", function(){ $(".linkVai").click(fesIcoOpeOverlay);});

	</script>

	<!-- Fine dati per la tabella -->
	
	<!-- Pulsantiera per aggiunte -->
	<div class="form-group">
		 <div class="row">
		 	<div class="col-xs-12">
				<div class="btn-align-right">
					<a type="button" class="btn btn-primary" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_inv_alert_imposta.php&responsive=y&liv0=4&liv1=2&liv2=3&liv3=4">aggiungi alert</a>
					<br class="clear">
				</div>
			</div>
		</div>
	</div> 

	<!-- Fine pulsantiera -->


<!-- Fine riepilogo dati contatto -->
