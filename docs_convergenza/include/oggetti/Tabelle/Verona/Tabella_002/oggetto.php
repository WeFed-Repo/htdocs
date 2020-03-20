<script>
$(document).ready(function(){
	$("#pagina").val("1");
});
</script>

<section>
	<div class="row IcoAzioni">
		<div class="col-xs-12 col-sm-6">
			<a href="#" title="Esporta tutti i movimenti in Excel" id="excel" class="btnExcel btn-link"><i class="icon icon-2x icon-excel_filled colorVer" title="icona scarica excel"></i> <span>Scarica in Excel</span></a>
			<a href="#" title="Esporta tutti i movimenti in Pdf" id="notaInformativa" class="btnPdf btn-link"><i class="icon icon-2x icon-pdf_circle_filled colorVer" title="icona scarica pdf"></i> <span>Scarica in Pdf</span></a>
		</div>

		<div id="" class="context-buttons col-xs-12 col-sm-6 pull-right">			
			<a title="tabella" href="#"><i class="icon icon-2x icon-view_tabella_filled disabled" title="tabella"></i></a>		
			<a title="grafico" href="#"><i class="icon icon-2x icon-view_grafico_filled" title="grafico"></i></a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped sort" role="grid">
			<thead>
				<tr class="hover">
			        	<th class="oCenter"><input type="checkbox" class="" title="Seleziona tutti" id="tutti"></th>   
			        	<th class="oCenter">&nbsp;</th>
			        	<th class="oCenter">&nbsp;</th>
			        	<th class="sorting">Lorem</th>
			        	<th class="sorting sorting_asc oLeft">Lorem ipsum dolor</th>
			        	<th class="sorting sorting_desc oRight">Lorem</th>
			        	<th class="oLeft">Lorem</th>
			    </tr>
			</thead>
			<tbody>
			   	<tr class="odd">
			        <td class="text-center oCenter"> 
			           <a class="btn visible-xs" id="archivia">archivia</a>
			           <input type="checkbox" name="" value="0" id="" class="hidden-xs">
					 </td>
			        <td class="oCenter">
						<a target="_blank" href="#">
							<i class="icon icon-2x icon-file_pdf_fill colorVer" title="icona scarica pdf"></i>
						</a>
			        </td>
			        <td class="oCenter">
						<a target="_blank" href="#">
							<i class="icon icon-2x icon-documenti colorVer" title="icona ripeti"></i>
						</a>
			        </td>                
			        <td>
			            03/02/2017
				    </td>
			       	<td class="oLeft">	
				         Conto corrente 00000000 &nbsp;Filiale:&nbsp;MILANO&nbsp;-&nbsp;2070&nbsp;intestato a  COGNOME NOME
			         </td>	     
			         <td class="importo positivo oRight">
	            			1999,99
		   			 </td>
					<td>
						<a onclick="leggiPdf(this, '0', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">
							Trasferimento tra conti - ricevuta per beneficiario
						</a>
					</td>
				 </tr>
			    <tr class="even">
			        <td class="text-center"> 
			           <a class="btn visible-xs" id="archivia">archivia</a>
			           <input type="checkbox" name="" value="0" id="" class="hidden-xs">
					 </td>
			        <td class="oCenter">
						<a target="_blank" href="#">
							<i class="icon icon-2x icon-file_pdf_fill colorVer" title="icona scarica pdf"></i>
						</a>
			        </td>
			        <td class="oCenter">
						<a target="_blank" href="#">
							<i class="icon icon-2x icon-documenti colorVer" title="icona ripeti"></i>
						</a>
			        </td>                
			        <td> 03/02/2017</td>
			        <td class="oLeft">Conto corrente 00000000 &nbsp;Filiale:&nbsp;MILANO&nbsp;-&nbsp;2070&nbsp;intestato a  COGNOME NOME</td>	        
				     <td class="importo negativo oRight">
	            			-1999,99
		   			 </td>
					<td><a onclick="leggiPdf(this, '0', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">Trasferimento tra conti - ricevuta per beneficiario</a>
					</td>
				 </tr>
			</tbody>  
		</table>
	</div>
	<div class="row IcoAzioni">
		<div class="col-xs-12 col-sm-6">
			<a href="#" title="Esporta tutti i movimenti in Excel" id="excel" class="btnExcel btn-link"><i class="icon icon-2x icon-excel_filled colorVer" title="icona scarica excel"></i> <span>Scarica in Excel</span></a>
			<a href="#" title="Esporta tutti i movimenti in Pdf" id="notaInformativa" class="btnPdf btn-link"><i class="icon icon-2x icon-pdf_circle_filled colorVer" title="icona scarica pdf"></i> <span>Scarica in Pdf</span></a>
		</div>

		<div id="" class="context-buttons col-xs-12 col-sm-6 pull-right">			
			<i class="icon icon-2x icon-view_tabella_filled disabled" title="tabella"></i>			
			<a title="grafico" href="#">
				<i class="icon icon-2x icon-view_grafico_filled" title="grafico"></i>
			</a>
		</div>
	</div>
</section>

<section>
<div class="row">
	<div class="col-sm-12">
		<ul class="paginationContainer paginationContainerTab">
			<li>
				<a href="#!" class="">
				<span class="paginationArrow paginationDisable">
					<i class="icon icon-arrow_left"></i >
				</span>
				</a>
			</li>
			<li class="pagina">
				<span>
					Pagina
				</span>
			</li>
			<li class="valInpu">
				<input type="text" name="" maxlength="3" size="3" value="1" id="pagina" class="form-control input-inline">
			</li>
			<li>
				<span>
					di
				</span>	
			</li>
			<li>
				<span>
					3
				</span>
			</li>
			<li>
				<a href="#!" class="">
					<span class="paginationArrow">
						<i class="icon icon-arrow_right"></i >
					</span>
				</a>
			</li>
		</ul>
	</div>
</div>
</section>