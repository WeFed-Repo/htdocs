					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							<fmt:formatdate type="date" value="${now}" pattern="${fmtdate}">	
						</fmt:formatdate></div>
					</div>
	 				<div class="riquadro clearfix"> 				  
						
						
						
						<!-- compraVendiConferma -->








	







	
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				
			
				<div class="circle current_page">&nbsp;</div>
			
		
			
			
			
				<div class="circle ">&nbsp;</div>
			
		
	</div>






<div class="clearfix">
	
		
		
				



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag investimenti">&nbsp;</div>
			
			
		
		
			
		
		
			
				
 					<span>Gestione ordine</span>
 					
				
				
				
				
					
				
			
			
			
		
	</h1>
	
	


		
	
	
	
		
		
			<div class="col-xs-12 hidden-xs hidden-print">
				









			</div>
		
	
</div>
<!-- riquadro tabella riassuntiva ordine -->
<div class="divSinistra col-xs-6">
	<div>
		
			
			
				<!-- tabellaConfermaOrdine -->






<script type="text/javascript">
function annullaOrdine(){
	var isin = $('#formCompraVendi').find('input[name="isin"]').val();
	var codMercatoInfo = $('#formCompraVendi').find('input[name="codMercatoInfo"]').val();
	var codAreaFinanza = $('#formCompraVendi').find('input[name="codAreaFinanza"]').val();
	var orderFrom = $('#formCompraVendi').find('input[name="orderFrom"]').val();
	if(orderFrom === 'pagina')
		goToPage('/investimenti/compraVendiTitolo.do','isin',isin,'codMercatoInfo',codMercatoInfo,'codAreaFinanza',codAreaFinanza);
	else
		goToPage('/investimenti/bookOrdina.do','isin',isin,'codMercatoInfo',codMercatoInfo,'codAreaFinanza',codAreaFinanza);
}
function submitCompraVendi() {
	var value=$('#avvertenza').prop('checked');
	if (value) {
		$('#pulsantiConferma').children().prop('disabled',true);
		setTimeout(function(){$('#formCompraVendi').submit();},1);
	}
	else
		alert('Per eseguire &egrave; necessario valorizzare il flag di presa visione.'); 	
} 
</script>
	<div class="OUT2ColDiff section clearfix form-horizontal">
	
		
	<h3 class="titleSection">








		
			Ordine
		
		
		

</h3>
	
	

	
	<!-- formattazioni -->
	
	
	
	
	
		<div class="bs-example">		
			<div class="form-group">
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Ordinante</label>
					<span class="resume">TALLO MAURO LUCA              </span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Dossier</label>
					<span class="resume">000000106440 - TALLO MAURO LUCA</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Intestatario</label>
					<span class="resume">TALLO MAURO LUCA              </span>				
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Operazione</label>
					<span class="resume">Acquisto</span>
				</div>
				<div class="form-field-resume col-xs-6">
				<label class="control-label">Titolo</label>
					<span class="resume">A2A</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">ISIN</label>
					<span class="resume">IT0001233417</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Divisa Emissione</label>
					<span class="resume">EUR</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Divisa Trattazione</label>
					<span class="resume">EUR</span>
				</div>
			<div class="form-field-resume col-xs-6">
				<label class="control-label"> Mercato</label>
					<span class="resume"><font style="text-transform:capitalize;">BEST EXECUTION DINAM</font></span>
				</div>
			<div class="form-field-resume col-xs-6">
					<label class="control-label">Quantit&agrave;</label>
					<span class="resume">1 titoli</span>
				</div>			
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Prezzo di Mercato</label>
					<span class="resume">
						1,4780
					</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Tipo ordine</label>
					<span class="resume">Limitato</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Prezzo limite</label>
					<span class="resume">				
						
						Limitato
							1,0000 EUR
						
					</span>
				</div>
				
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Validit&agrave;</label>
					<span class="resume">Val. per la seduta</span>	
				</div>
				
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Data Validit&agrave;</label>
					<span class="resume">17/05/2017</span>
				</div>
				
				
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Fase</label>
					<span class="resume">Corrente</span>
				</div>
				<div class="form-field-resume col-xs-6">
					<label class="control-label">CTV teorico</label>
					<span class="resume">1,0000 EUR</span>
				</div>
				
				<div class="form-field-resume col-xs-6">
					<label class="control-label">Data Ora</label>
					<span class="resume">17/05/2017 13:38</span>
				</div>
				
			</div>
		</div>
	 </div>

<!-- tabellaConfermaOrdine END-->

			
		
	</div>
</div>
<!-- Riquadro Book -->
<div class="divDestra col-xs-6">
	<div class="contentInterno section clearfix">
		
		<h3 class="titleSection">Book</h3>
		<!-- BookLightStream.jsp -->
		<form id="formBook" method="post" action="/WEBHT/investimenti/bookJson.do">
			<input type="hidden" name="isin" value="IT0001233417">
			<input type="hidden" name="codMercatoInfo" value="MTA">
			<input type="hidden" name="symbol" value="A2A">
		</form>
<div class="contentInterno">



			<div class="tappo"></div>
	<div id="divBook">
	<table cellspacing="0" cellpadding="0">
	<colgroup>
		<col width="9%">
		<col width="20%">
		<col width="19%">
		<col width="2%">
		<col width="19%">
		<col width="20%">
		<col width="9%">
		<col width="2%">
	</colgroup>
	<thead>
		<tr>
			<th colspan="3">Proposte in acquisto</th>
			<th></th>
			<th colspan="3">Proposte in vendita</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="bkSottotitolo">N.prop.</td>
			<td class="bkSottotitolo">Q.t&agrave;</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">&nbsp;</td>
			<td class="bkSottotitolo">Prezzo</td>
			<td class="bkSottotitolo">Q.t&agrave;</td>
			<td class="bkSottotitolo">N.prop.</td>
			<td class="bkSottotitolo">&nbsp;</td>
		</tr>
		
		<tr class="odd">
			<td style="background-color: white"></td>
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BIDSIZE_CAH" frmtype="D0" class="bkChanged">2.271</div></td>
			
				
				
					<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BID_CAH" frmtype="D4" class="bkChanged">1,4770</div></td>
					<td class="bkBestOffer"></td>
					<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASK_CAH" frmtype="D4" class="bkChanged">1,4790</div></td>
				
			
			<td class="bkBestOffer"><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="ASKSIZE_CAH" frmtype="D0" class="bkChanged">15.000</div></td>
			<td style="background-color: white"></td>
			<td style="background-color: white">&nbsp;</td>
		</tr>
		
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_1_CAH" frmtype="T" class="bkChanged">16</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ1_CAH" frmtype="D0" class="bkChanged">51.880</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID1_CAH" frmtype="D4" class="bkChanged">1,4770</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK1_CAH" frmtype="D4" class="bkChanged">1,4790</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ1_CAH" frmtype="D0" class="bkChanged">90.517</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_1_CAH" frmtype="T" class="bkChanged">11</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_2_CAH" frmtype="T" class="bkChanged">15</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ2_CAH" frmtype="D0" class="bkChanged">73.723</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID2_CAH" frmtype="D4" class="bkChanged">1,4760</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK2_CAH" frmtype="D4" class="bkChanged">1,4800</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ2_CAH" frmtype="D0" class="bkChanged">167.558</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_2_CAH" frmtype="T" class="bkChanged">20</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_3_CAH" frmtype="T" class="bkChanged">13</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ3_CAH" frmtype="D0" class="bkChanged">78.656</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID3_CAH" frmtype="D4" class="bkChanged">1,4750</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK3_CAH" frmtype="D4" class="bkChanged">1,4810</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ3_CAH" frmtype="D0" class="bkChanged">42.746</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_3_CAH" frmtype="T" class="bkChanged">10</div></td>
		</tr>
		<tr class="odd">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_4_CAH" frmtype="T" class="bkChanged">10</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ4_CAH" frmtype="D0" class="bkChanged">50.434</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID4_CAH" frmtype="D4" class="bkChanged">1,4740</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK4_CAH" frmtype="D4" class="bkChanged">1,4820</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ4_CAH" frmtype="D0" class="bkChanged">219.738</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_4_CAH" frmtype="T" class="bkChanged">10</div></td>
		</tr>
		<tr class="even">
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROACQ_5_CAH" frmtype="T" class="bkChanged">10</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BSIZ5_CAH" frmtype="D0" class="bkChanged">48.392</div></td>
			
				
				
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_BID5_CAH" frmtype="D4" class="bkChanged">1,4730</div></td>
					<td></td>
					<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASK5_CAH" frmtype="D4" class="bkChanged">1,4830</div></td>
				
			
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="BEST_ASIZ5_CAH" frmtype="D0" class="bkChanged">31.744</div></td>
			<td><div data-source="lightstreamer" data-grid="bookTab" data-item="1" data-field="NPROVEN_5_CAH" frmtype="T" class="bkChanged">9</div></td>
		</tr>
		
		</tbody>
	</table>
	</div></div>
<script type="text/javascript"><!--
	var url = $('#formBook').attr('action');
	var isin = $('#formBook').find('input[name="isin"]').val();
	var codMercatoInfo = $('#formBook').find('input[name="codMercatoInfo"]').val();
	var symbol = $('#formBook').find('input[name="symbol"]').val();
	
	
	
	//chiamata LibInvestimenti per recuperare dati iniziali
	$.getJSON(url, { isin: isin, codMercatoInfo: codMercatoInfo, symbol:symbol}, 
			function(json) {
			if(json['error'] != 'true' && json['warning'] != 'true'){
					var righe = json['righe'];
					var den;
					var let;
					for(i = 0; i<righe.length; i++){
						den = righe[i]['denaro'];
						let = righe[i]['lettera'];
						setAndChange($('div [data-field="NPROACQ_'+(i+1)+'_CAH"]'),den.ordini);
						setAndChange($('div [data-field="BEST_BSIZ'+(i+1)+'_CAH"]'),den.quantita);
						setAndChange($('div [data-field="BEST_BID'+(i+1)+'_CAH"]'),den.prezzo,true);
						setAndChange($('div [data-field="BEST_ASK'+(i+1)+'_CAH"]'),let.prezzo,true);
						setAndChange($('div [data-field="BEST_ASIZ'+(i+1)+'_CAH"]'),let.quantita);
						setAndChange($('div [data-field="NPROVEN_'+(i+1)+'_CAH"]'),let.ordini);
					}
					var best = json['miglioreOfferta'];
					if(best != null ){
						setAndChange($('div [data-field="BIDSIZE_CAH"]'),best['denaro'].quantita);
						setAndChange($('div [data-field="BID_CAH"]'),best['denaro'].prezzo,true);
						setAndChange($('div [data-field="ASK_CAH"]'),best['lettera'].prezzo,true);
						setAndChange($('div [data-field="ASKSIZE_CAH"]'),best['lettera'].quantita);
					}
				}
			});
			
	function setAndChange(elem, val, prz){
		val = formatCell(elem.attr('frmType'),val);
 		if(elem.data('oldval') != val) {
			elem.addClass('bkChanged');
		}
		if(prz != null && prz == true){
			
				
				
					elem.text(val);
				
			
		}else
			elem.text(val);
			
		elem.data('oldval',val);
	}

	//connessione Lightstreamer			
	startStream("https://collpush.intranet.servizi", codMercatoInfo,symbol,"bookTab",true, "bFTzbDT8KRO5LRAyKDSyKRfwLA%3D%3D");


--></script>

	</div>
</div>


<!-- MIFID-->
<div class="clearfix"></div>
<div class="row">
	<div class="col-sm-6 listato-note">
		<h3 class="titleSection">Informatica costi, oneri e incentivi</h3>
		<div class="row">
			<div class="col-xs-6">
				<span class="listato-label">Strumento finanziario:</span>
			</div>
			<div class="col-xs-6">
				<span class="listato-label pull-right">XXX</span>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6">
				<span class="listato-label">Controvalore delle operazioni</span>
			</div>
			<div class="col-xs-6">
				<span class="listato-label pull-right">50.000,00 &euro;</span>
			</div>
		</div>
		<h2>Legenda</h2>
		<p>
			I costi e oneri di seguito riportati rappresentano le commissioni massime
			applicabili e non tengono conto di eventuali sconti concordati.<br>
			<strong>Costi per Prodotto:</strong> tutti i costi e gli oneri associati alla realizzazione e
			gestione degli strumenti finanziari.<br>
			<strong>Costi per Servizio:</strong> tutti i costi e gli oneri connessi applicati dalla Banca
			relativi ai servizi di investimento e/o servizi accessori prestati al cliente.<br>
			<strong>Incentivi:</strong> retrocessione che la Banca percepisce dalle Società prodotto
			sotto forma di quota parte dei costi sostenuti dal cliente o come prestazioni
			non monetarie.
		</p>
		<table class="table table-striped table-small">
			<thead>
				<tr>
					<th>Costi e oneri su base annua</th>
					<th class="oRight">Valore &euro;</th>
					<th class="oRight">Valore %</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="tot">Costi del servizio</td>
					<td class="tot oRight">1.000,00 &euro;</td>
					<td class="tot oRight">2,00 %</td>	
				</tr>
				<tr class="tr-dark">
					<td>Spese una tantum - ingresso</td>
					<td class="oRight">1.000,00 &euro;</td>
					<td class="oRight">2,00 %</td>	
				</tr>
				<tr class="tr-light">
					<td>Spese correnti</td>
					<td class="oRight">0,00 &euro;</td>
					<td class="oRight">0,00 %</td>	
				</tr>
				<tr class="tr-dark">
					<td>Spese per operazioni</td>
					<td class="oRight">0,00 &euro;</td>
					<td class="oRight">0,00 %</td>	
				</tr>
				<tr class="tr-light">
					<td>Costi accessori</td>
					<td class="oRight">0,00 &euro;</td>
					<td class="oRight">0,00 %</td>	
				</tr>
				<tr class="tr-dark">
					<td>Spese per servizi accessori</td>
					<td class="oRight">0,00 &euro;</td>
					<td class="oRight">0,00 %</td>	
				</tr>
				<tr>
					<td class="tot">Costi del prodotto</td>
					<td class="tot oRight">2.250,00 &euro;</td>
					<td class="tot oRight">4,50 %</td>	
				</tr>
				<tr class="tr-dark">
					<td>Spese per una tantum-ingresso</td>
					<td class="oRight">0,00 &euro;</td>
					<td class="oRight">0,00 %</td>	
				</tr>
				<tr class="tr-light">
					<td>Spese correnti</td>
					<td class="oRight">1.500,00  &euro;</td>
					<td class="oRight">3,00 %</td>	
				</tr>
				<tr class="tr-dark">
					<td>Spese per operazione</td>
					<td class="oRight">750,00 &euro;</td>
					<td class="oRight">1,50 %</td>	
				</tr>
				<tr class="tr-light">
					<td>iCosti accessori</td>
					<td class="oRight">0,00 &euro;</td>
					<td class="oRight">0,00 %</td>	
				</tr>
				<tr>
					<td class="tot">Totale</td>
					<td class="tot oRight">3.250,00 &euro;</td>
					<td class="tot oRight">6,50 %</td>	
				</tr>
			</tbody>
		</table>
		<table class="table table-striped table-small">
		
		<thead>
				<tr>
					<th>Costi e oneri su base annua</th>
					<th class="oRight">Valore &euro;</th>
					<th class="oRight">Valore %</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="tot">Costi del servizio</td>
					<td class="tot oRight"></td>
					<td class="tot oRight"></td>	
				</tr>
				<tr class="tr-dark">
					<td>Spese una tantum - uscita</td>
					<td class="oRight">0,00 &euro;</td>
					<td class="oRight">0,00 %</td>	
				</tr>
				<tr>
					<td class="tot">Costo del prodotto</td>
					<td class="tot oRight">3.250,00 &euro;</td>
					<td class="tot oRight">6,50 %</td>	
				</tr>
				<tr class="tr-dark">
					<td>Spese uan tantum -Uscita*</td>
					<td class="oRight">1.500,00 &euro;</td>
					<td class="oRight">3,00 %</td>	
				</tr>
			</tbody>
		</table>
		<p>* Le commissioni di uscita esposte sono le massime che potranno essere applicate in caso di uscita dall’investimento durante il primo anno.
		Per una pi&ugrave; dettagliata descrizione si rimanda al contratto e al KID</p>
		<table class="table table-striped table-small">
		<thead>
				<tr>
					<th>Incentivi su base annuale</th>
					<th class="oRight">Valore &euro;</th>
					<th class="oRight">Valore %</th>
				</tr>
			</thead>
			<tbody>
				<tr class="tr-dark">
					<td>Una tantum</td>
					<td class="oRight">2000,00 &euro;</td>
					<td class="oRight">4,00 %</td>	
				</tr>
				<tr class="tr-light">
					<td>Ricorrenti</td>
					<td class="oRight">900,00 &euro;</td>
					<td class="oRight">1,80 %</td>	
				</tr>
				<tr>
					<td class="tot">TOTALE</td>
					<td class="tot oRight">2900,0</td>
					<td class="tot oRight">5,80 %</td>	
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-sm-6 listato-note">
		<h3 class="titleSection">Impatto dei costi sul rendimento</h3>
		<p>La tabella rappresenta un’illustrazione dell’effetto dei costi monetari sul rendimento degli strumenti, in ipotesi di rendimento
zero. Pertanto il Controvalore (Ctv) netto è ottenuto come differenza algebrica tra Controvalore lordo e i costi monetari
applicabili.</p>
		<table class="table table-striped table-small">
			<tbody>
				<tr>
					<td class="tot">Controvalore lordo investito</td>
					<td class="tot oRight">50.000,00 &euro;</td>
					<td class="tot oRight">100,00 %</td>	
				</tr>
				<tr class="tr-dark">
					<td>Commissioni di uscita*</td>
					<td class="oRight">-1.500,00 &euro;</td>
					<td class="oRight">- 3,00 %</td>	
				</tr>
				<tr class="tr-light">
					<td>Commissioni di ingresso </td>
					<td class="oRight">-1.000,00 &euro;</td>
					<td class="oRight">-2,00 %</td>	
				</tr>
				<tr class="tr-dark">
					<td>Altre commissioni</td>
					<td class="oRight">-2.250,00  &euro;</td>
					<td class="oRight">-4,50 %</td>	
				</tr>
				<tr>
					<td class="tot">TOTALE</td>
					<td class="tot oRight">45.250,00 &euro;</td>
					<td class="tot oRight">90,50  %</td>	
				</tr>
			</tbody>
		</table>
		<p>* Le commissioni di uscita esposte sono le massime che potranno essere applicate in caso di uscita dall’investimento durante il primo anno.
		Per una pi&ugrave; dettagliata descrizione si rimanda al contratto e al KID</p>
	</div>
</div>
<!--FINE MIFID -->


<!--ATTENZIONE -->
	<h1>Attenzione</h1>
	<div class="clearfix"></div>
	<p>Con riferimento al contratto con Voi in essere, Vi incarico di trattare l'ordine che precede, relativo ai prodotti/strumenti finanziari indicati, in relazione al quale prendo espressamente atto delle seguenti avvertenze:</p>
	<ul>
		
			<li>L'OPERAZIONE POTREBBE COMPORTARE LA TASSAZIONE PER FTT ITALIANA       </li>
		
			<li>INDICATORE CONOSCENZA SCADUTO O NON RACCOLTO</li>
		
	</ul>
	






<div class="divForm">	
	<form id="formCompraVendi" method="post" action="/WEBHT/investimenti/compraVendiTitoloConfermaOrdine.do">
	<input type="hidden" name="isin" value="IT0001233417">
	<input type="hidden" name="codMercatoInfo" value="MTA">
	<input type="hidden" name="codAreaFinanza" value="00001233410">
	<input type="hidden" name="orderFrom" value="pagina">
	<input type="hidden" name="tokenTol" value="01b537afa8f4be84e6ce615708457a4e">
	<input type="hidden" name="prezzoFisMob" value="F">
	<input type="hidden" name="comboFisso" value="">
	<input type="hidden" name="textPrezzoFis" value="">
	<input type="hidden" name="comboMobile" value="">
	<input type="hidden" name="percPrezzoMob" value="">
	
	
				
		
			<p>
			  <b>Dichiaro di aver preso atto delle avvertenze ricevute </b>&nbsp;
			  <input type="checkbox" name="ckConf" value="S" id="avvertenza">
			</p>
			<br>
			  
			  <div class="oRight" id="pulsantiConferma" style="padding: 4px 0px">
			  	<input type="button" name="" value="Annulla" onclick="annullaOrdine()" class="btn btn-primary">
			  	<input type="button" name="" value="Esegui" onclick="submitCompraVendi()" class="btn btn-primary execute">
			  </div>
		
	
</form>
</div>

<!-- compraVendiConferma END-->

	 				</div>	
	 				<div class="toldisclaimer col-xs-12">
						<span>Fonte dati: Borsa Italiana</span>
						 
					</div>