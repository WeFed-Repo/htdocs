<?php
	$site = $_GET['site'];
?>
<section>
	<div class="table-responsive">
		<table class="table table-striped sort" role="grid">
			<thead>
				<tr class="hover">
			        	<th class="oCenter"><input type="checkbox" class="" title="Seleziona tutti" id="tutti"></th>
					<?php if($site == 'youweb') { ?>
						<th class="oCenter">&nbsp;</th>
					<?php } ?>
			        	<th class="oCenter">&nbsp;</th>
			        	<th class="sorting">Lorem</th>
			        	<th class="sorting sorting_asc oLeft">Lorem ipsum dolor</th>
					<?php if($site == 'youweb') { ?>
			        	<th class="oCenter">Lorem</th>
					<?php } ?>
			        	<th class="sorting sorting_desc oRight">Lorem</th>
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
				<?php if($site == 'youweb') { ?>
					<td class="alignCenter">
						<span class="icon-check_ok"></span>
					</td>
				<?php } ?>
			        <td class="alignCenter">
						<a target="_blank" href="#">
							<i class="icon icon-file_pdf_fill" title="icona posta_arrivo"></i>
						</a>
			        </td>                
			        <td>
			            03/02/2017
				    </td>
			       	<td class="oLeft">	
				         Conto corrente 00000000 &nbsp;Filiale:&nbsp;MILANO&nbsp;-&nbsp;2070&nbsp;intestato a COGNOME NOME
			        </td>
				<?php if($site == 'youweb') { ?>
					<td class="alignCenter">
						<span class="icon-ico_rapporti_predefiniti"></span>
					</td>
				<?php } ?>
			        <td class="importo positivo oRight">
	            			1999,99
		   			</td>   
				    <td class="alignCenter">
				     	<i class="icon icon-mail_closed" title="icona posta_arrivo"></i>
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
				<?php if($site == 'youweb') { ?>
					<td class="alignCenter">
						<span class="icon-close_inverted_fill1"></span>
					</td>
				<?php } ?>
			        <td>
						<a target="_blank" href="#">
							<i class="icon icon-file_pdf_fill" title="icona posta_arrivo"></i>
						</a>
			        </td>                
			        <td> 03/02/2017</td>
			        <td class="oLeft">Conto corrente 00000000 &nbsp;Filiale:&nbsp;MILANO&nbsp;-&nbsp;2070&nbsp;intestato a COGNOME NOME</td>	        
				<?php if($site == 'youweb') { ?>
					<td class="alignCenter">
						<span class="icon-rapporti_fill"></span>
					</td>
				<?php } ?>
				    <td class="importo negativo oRight">
	            			-1999,99
		   			</td>  
				    <td class="alignCenter">
				     	<i class="icon icon-mail_closed" title="icona posta_arrivo"></i>
					</td>
					<td><a onclick="leggiPdf(this, '0', 'false', '/HT/fe/img/busta_ricevuta.png'); return false;" class="testoSmallLink" href="#">Trasferimento tra conti - ricevuta per beneficiario</a>
					</td>
				</tr>
			</tbody>  
		</table>
	<?php if($site == 'youweb') { ?>
		<div class="row mr-0">
			<div class="col-xs-12">
				<a href="#" class="text-underline">Lorem ipsum dolor sit amet.</a><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;<span class="icon-delete_table"></span></a>
			</div>
		</div>
	<?php } ?>
	</div>
</section>