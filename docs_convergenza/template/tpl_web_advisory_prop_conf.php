


<section>
<div class="titolo">
	<h1>
		<div class="row">
			<div class="col-sm-8">
				<!-- TITOLO -->
				<span>Consulenza &gt; proposte da confermare</span>
				<!-- /TITOLO -->
		    </div>
        </div>
	</h1>
</div>
</section>
<section>
   <p>Seleziona il servizio di consulenza sul quale sono presenti proposte e  accedi all’iter di accettazione cliccando sulla lente di ingrandimento</p>
</section>
<!-- FILTRO RICERCA PER RAPPORTO DI CONSULENZA -->
<section>
    <form id="formProposta" method="post" action="/WEBHT/investimenti/consulenza/proposteDaConfermare.do">	
        <section>
            <h3 class="titleSection titleForm">Seleziona il servizio di consulenza</h3>
            <div class="table-responsive">
                <table class="table table-striped dataTable no-footer" role="grid">
                    <colgroup>
                        <col width="5%">
                        <col width="25%">
                        <col width="10%"> 
                        <col width="40%">
                        <col width="20%">
                    </colgroup>
                    <thead class="hover" role="row">
                        <tr>
                            <th class="text sorting_disabled"></th>
                            <th class="text sorting_disabled">Tipo rapporto</th>
                            <th class="text sorting_disabled">Numero</th>  
                            <th class="text sorting_disabled">Intestazione</th>
                            <th class="text sorting_disabled">Numero proposte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td><input type="radio" name="filtroRapportoProposta" value="ALL" checked="checked"></td>
                            <td colspan="4">Tutti</td>
                        </tr>
                            
                            
                            
                            
                            
                                
                                    
                                
                                
                            
                            <tr class="even">
                                <td class="oCenter"><input type="radio" name="filtroRapportoProposta" value="03102|0310200006800924"></td>
                                <td> Servizio di 
                                    
                                        
                                        
                                            Consulenza Base
                                        
                                        
                                    
                                </td>
                                <td class="oCenter">
                                    
                                </td>
                                <td class="oCenter">SCLAVO MAURO/ZWIRNER MARIA EMMA</td>
                                <td class="oCenter">1</td>
                            </tr>
                        
                    </tbody>
                </table>
            </div>
            <div class="formWrapper">
                <div class="form-group btnWrapper clearfix">
                    <div class="btn-align-right">
                        <input type="submit" value="Ricerca" class="btn btn-primary btn-align-right" title="Ricerca">
                    </div>
                </div>
            </div>
    </form>
</section>
<!-- VISUALIZZAZIONE DELLE PROPOSTE FILTRATE PER RAPPORTO DI CONSULENZA SELEZIONATO -->
<form id="dettaglioSubmit" method="post" action="/WEBHT/investimenti/consulenza/propostaConferma.do">	
	<input type="hidden" name="numeroIdentificativoPropostaConferma" value="" id="propostaDettaglio">
</form>
<form id="goBack" method="post" action="/WEBHT/investimenti/consulenza.do"></form>
<section>
    <div class="table-responsive"> 
		<table class="table table-striped dataTable no-footer" role="grid">
			<colgroup>
				<col width="10%">
				<col width="40%">
				<col width="10%">
				<col width="15%">
				<col width="15%">
				<col width="10%">
			</colgroup>
			<thead>
				<tr>
					<th></th>
					<th>Servizio</th>
					<th>Numero proposta</th>
					<th class="oCenter">Data proposta</th>
					<th class="oCenter">Data scadenza</th>
					<th class="oCenter">Stato</th>
				</tr>
			</thead>
			
				
					
						
					
					
				
				<tbody><tr class="odd">
					<td class="oCenter">
						<a role="button" aria-pressed="false" href="javascript:void(0)" id="loadDettaglio" data-details="360736">
							<i class="icon icon-zoom_filled colorVer"></i> 
						</a>
					</td>
					<td>
						
							
							
								Consulenza Base - SCLAVO MAURO/ZWIRNER MARIA EMMA
							
							
						
					</td>
					<td class="oCenter">85</td>
					<td class="oCenter">03/08/2020</td>
					<td class="oCenter">07/08/2020</td>
					<td class="oCenter">
						 
							<i class="icon icon-mail_opened" title="In Valutazione"></i>
						 
					</td>
				</tr>
			
		</tbody></table>
	</div>
	<div class="formWrapper">
			<div class="form-group btnWrapper clearfix">
				<div class="btn-align-right">
					
					<input class="btn btn-default" type="button" id="indietro" title="Indietro" name="Indietro" value="Indietro">
			</div>
		</div>
	</div>
    <script>
    $(document).ready(function(){
        
        $('#loadDettaglio').click(function(){
            $('#propostaDettaglio').val($(this).data('details'));
            $('#dettaglioSubmit').submit();
        });
        
        $('#indietro').click(function(){
            $('#goBack').submit();
        })
        
    });
    </script>
</section>