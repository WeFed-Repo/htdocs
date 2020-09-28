<!--TITOLO -->
<section>
    <div class="titolo">
	    <h1>
            <div class="row">
                <div class="col-sm-8">
                    <!-- TITOLO -->
                        <span>Consulenza</span>
                    <!-- /TITOLO -->
                 </div>
                <!-- NUMERO PAGINA -->
                <!-- /NUMERO PAGINA -->
            </div>
	    </h1>
    </div>
</section>
<div class="wrapper-app-style">
	<!--TESTO INTRODUTTIVO -->
	<section>
		<p>Il <strong>Servizio di Consulenza</strong> &egrave; prestato da Banca Aletti&nbsp;sulla base delle informazioni che ci hai fornito e della tua situazione finanziaria<br>
		In questa sezione potrai prendere visione delle <strong>Proposte di Investimento</strong> predisposte dal tuo Private Banker.<br>
		In pochi e semplici passaggi potrai consultare la relativa documentazione e sottoscrivere le Proposte, conferendo contestualmente l'ordine di esecuzione delle operazioni raccomandate</p>
	</section>

	<!--BOX -->
	<section>
		<div class="formWrapper">
			<div class="form-group">
				<div class="border-output">
					<div class="row ">
						<!-- PROPOSTE DA CONFERMARE -->
						<div class="col-sm-6 col-xs-12 boxDefault pos-relative">
							<div class="row">
								<div class="col-xs-12">
									<h3 class="titleSection titleForm">Proposte da confermare</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<div class="col-xs-9">
											Numero proposte di consulenza che devi ancora <strong>visualizzare</strong> o che stai valutando
										</div>
										<div class="col-xs-3 alignRight">
											<strong class="result-number">1</strong>
										</div>
									</div>
								</div>
							</div>
							
							<form id="formProposta" method="post" action="/WEBHT/investimenti/consulenza/proposteDaConfermare.do">
								<div class="btnWrapper">
									<div class="btn-align-right">
										<input type="submit" value="Accedi" class="btn btn-primary btn-align-right" title="Accedi">
									</div>
								</div>
							</form>
							
						</div>
						<!-- PROPOSTE CONFERMATE -->
						<div class="col-sm-6 col-xs-12 boxDefault pos-relative">
							<div class="row">
								<div class="col-xs-12">
									<h3 class="titleSection titleForm">Proposte confermate</h3>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<div class="col-xs-9">Numero proposte di consulenza <strong>che hai confermato</strong></div>
										<div class="col-xs-3 alignRight"><strong class="result-number">2</strong></div>
									</div>	
								</div>
							</div>
							<form id="formProposta" method="post" action="/WEBHT/investimenti/consulenza/proposteConfermate.do">
								<div class="btnWrapper">
									<div class="btn-align-right">
										<input type="submit" value="Visualizza" class="btn btn-primary btn-align-right" title="Visualizza">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- ARCHIVIO PROPOSTE -->
			<form id="confermaCPForm" method="post" action="/WEBHT/postaPersonale/contrattiProposte.do">
				<div class="form-group">
					<div class="row">
						<div class="col-xs-12">
							<h3 class="titleSection titleForm">Archivio proposte</h3>
						</div>
						<div class="col-xs-12">
							Per visualizzare le tue proposte e verificarne lo stato accedi alla sezione "Contratti e proposte" tramite il pulsante qui riportato.
						</div>
					</div>
				</div>
				<div class="form-group btnWrapper clearfix">
					<div class="btn-align-right">
						<input type="submit" value="Contratti e Proposte" class="btn btn-primary btn-align-right" title="Contratti e Proposte">
					</div>
				</div>
			</form>
		</div>
	</section>
</div>
