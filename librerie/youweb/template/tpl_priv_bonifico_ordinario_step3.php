<div class="visible-print-block"> 
	<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
	<div class="pull-right">
		05/04/2017	
	</div>
</div>
<div class="riquadro clearfix">
	<div class="pager clearfix pull-right">
		<div class="circle_line">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
		<div class="circle current_page">&nbsp;</div>
	</div>
	
	<div class="clearfix">
<style>
.imgSrv{float: none;}
</style>

		<h1>
			<div class="hidden-print hidden-xxs flag disposizioneBonifico">&nbsp;</div>
			<span>Bonifico ordinario</span>
			<span class="hidden-xs">:&nbsp; conferma</span>
		</h1>
		<div class="col-xs-12 hidden-xs hidden-print"></div>
	</div>

	<div class="col-xs-12 messagePanel success hidden-print" style="display: block;">
		<h3 class="titleSection hidden-print">Esito operazione</h3>
		<div>
			<p>Operazione correttamente inserita con data di esecuzione 28/04/2017.</p>
		</div>
		<p>Ti ricordiamo che &egrave; possibile revocare la disposizione entro le ore&nbsp;23:59 del&nbsp;27/04/2017. 
			L'operazione verr&agrave; regolarmente effettuata come da indicazioni ricevute solo in caso di presenza di fondi disponibili 
			il giorno dell'esecuzione sul conto di addebito</p>
	</div>

	<div class="section clearfix">
		<div class="row-height">
			<div class="col-sm-6 col-xs-12 col-prt-12 col-height margin-bottom-xs-10 margin-top-xs-10">
				<div class="boxDefault inside inside-full-height">
					<h3>Ordinante</h3>
					<div>
						<div class="row">
							<label class="control-label">Intestato a:</label>
							<span class="resume">COGNOME NOME</span>
						</div>					
						<div class="row">
							<label class="control-label">Conto di addebito:</label>
							<input type="hidden" name="codContoCorrente" value="001|0000|000000000000">
							<span class="resume">00000000</span>
						</div>					
						<div class="row">
							<label class="control-label">	Filiale:</label>
							<span class="resume">MILANO - 0000</span>
						</div>	

						<div class="row hidden-print">
							<label class="control-label">Email Ordinante</label>
							<span class="resume overflowEllipsis">NOMECOGNOME@DOMINIO.IT</span>
						</div>					
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-xs-12  col-height margin-bottom-xs-10">
				<div class="boxDefault inside inside-full-height">
					<h3>Beneficiario</h3>
					<div>
						<div class="row">
							<label>Intestato a:</label>
							<span>NOME COGNOME</span>
						</div>					
						<div class="row">
							<label>IBAN:</label>
							<span>IT99B00000000000000000000000</span>
						</div>
						<div class="row">
							<label>Banca beneficiario:</label>
							<span>BANCA POPOLARE DI SONDRIO&nbsp;-&nbsp;BANCA AGENZIA 0000</span>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<div class="row-height margin-bottom10">
			<div class="col-sm-6 col-xs-12 col-height margin-bottom-xs-10">
				<div class="boxDefault inside inside-full-height">
					<h3>Dati bonifico</h3>
					<div>
						<div class="row">
							<label>Importo:</label>
							<span class="oRight">1,00</span>
						</div>					
						<div class="row">
							<label>Commissioni:</label>
							<span class="oRight">0,00</span>
						</div>					
						<div class="row">
							<label>Totale:</label>
							<span class="oRight">1,00</span>
						</div>		
						<div class="row">
							<label>Causale:</label>
							<span>BONIFICO DI PROVA</span>
						</div>		
						
						<div class="row">
							<label>Codice CRO/TRN:</label>
							<span>0000000000000000000000000000IT</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 col-height">
				<div class="boxDefault inside inside-full-height">
					<h3>Dati esecuzione</h3>
					<div>
						<div class="row">
							<label>Data esecuzione:</label>
							<span>05/04/2017</span>
						</div>					
						<div class="row">
							<label>Data e ora inserimento:</label>
							<span>05/04/2017&nbsp;-&nbsp;11:10</span>
						</div>					
						<div class="row">
							<label>Valuta ordinante:</label>
							<span>05/04/2017</span>						
						</div>					
						<div class="row">
							<label>Valuta beneficiario:</label>
							<span>06/04/2017</span>
						</div>	
						<div class="row">
							<label>Stato e descrizione:</label>
							<span>In attesa</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="pull-right margin-bottom20">
	<form id="ritorna" method="post" action="/strutt_priv.php?pag=bonifico_ordinario&lev1=pagamenti&wdg=06|02">
		<input type="hidden" name="codContoCorrente" value="001|2070|207000001788" id="codContoCorrente">
	</form>

	<form id="revoca" method="post" action="/strutt_priv.php?pag=bonifico_ordinario_revoca&lev1=pagamenti&wdg=06|02">
		<input type="hidden" name="codContoCorrente" value="001|2070|207000001788" id="codContoCorrente">
		<input type="hidden" name="codice" value="IH7095095427" id="codiceOperazione">
		<input type="hidden" name="stato" value="IN" id="statoOperazione">
		<input type="hidden" name="tipoOperazione" value="revoca" id="tipoOperazione">
	</form>

	<form id="ultimeDisposizioni" method="post" action="/WEBHT/pagamenti/ultimeDisposizioniConferma.do">
		<input type="hidden" name="page" value="esitoDisp">
		<input type="hidden" name="codContoCorrente" value="001|2070|207000001788" id="codContoCorrente">
	</form>
	
	<div class="actions">
		<input type="button" name="ritorna" value="Torna a bonifici" onclick="$('#ritorna').submit();" class="btn btn-primary" alt="Torna a bonifici ">
		<input type="button" name="revoca" value="Revoca" onclick="$('#revoca').submit();" class="btn btn-primary" alt="Revoca">
		<input type="button" name="ultimeDisposizioni" value="Ultime disposizioni" onclick="$('#ultimeDisposizioni').submit();" class="btn btn-primary" alt="Ultime disposizioni">
	</div>
</div>