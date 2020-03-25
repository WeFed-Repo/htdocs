<div id="contenuti" class="contenuti col-sm-12 col-md-10 resp">

	<script type="text/javascript">
		var larghezza = 980;
		var frames = new Array();
		var principale = new Object();
	
		frames[0] = top;
		frames[1] = top;
	
		function getPrincipale() {
			return principale;
		}

		function setPrincipale(p) {
			principale = p;
			principale.document = p;
			frames[2] = principale;
		}
	</script>

	<h2>Ricariche cellulari</h2>

	<br class="clear">
			

	<div class="navContFirstLev outerTab">
		<div class="innerTab">
			<ul class="tabmedium">

				<li class="on" id="box5tab1"><a href="/webankpri/wbOnetoone/3l/action/banking/WsCellRecharge0.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_ricaric_cell&OBSKEY3=nav_priv_wbx_ricarica" title="nuova ricarica">nuova ricarica</a></li>

			</ul>
		</div>
		<div class="separator"></div>
	</div>

	<div id="box5ctntab1" style="visibility: visible;">










	




	<script type="text/javascript">
		var isToSubmit=true;

		function ControllaValori(parametro) {
			if ( isToSubmit ) {
				var tmp = '';
				var checked = 'false'
	
				if (parametro == 'proseguiScegliTaglio') {
					for (i=0; i<=document.DATI.taglio_ricarica.length-1; i++) {
						if (document.DATI.taglio_ricarica[i].checked) {
							checked = 'true';
						}
					}
					if (checked=='false') {
						alert("E' necessario selezionare un taglio di ricarica prima di proseguire");
						return;
					}
				}

				isToSubmit=false;
				document.DATI.method = 'post';
				document.DATI.submit();
			}
		}
	</script>
			
	











<!-- === org.apache.jsp.banking.errorsSectionResponsive_jsp === { -->

	<div id="errorsSection" style="display: none;">
		<div class="boxesito negativo">
			<i class="icon icon-alert_error icon-2x"></i>
			<div class="text">
				<div class="row">
					<div class="col-sm-10" escape="false">
								

							
						
						<ul id="errorMessages"></ul>
							
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- } === org.apache.jsp.banking.errorsSectionResponsive_jsp === -->
	
	<form method="post" action="WsCellRecharge2.action" name="DATI">
		








<input name="tabId"	type="hidden"	value="nav_priv_wbx_sportello" />
<input name="OBSKEY"	type="hidden"	value="nav_priv_wbx_ricaric_cell" />

<input name="OBSKEY3"	type="hidden"	value="nav_priv_wbx_ricarica" />

<input name="OBSCNT"	type="hidden"	value="" />
<input name="cf"	type="hidden"	value="0.21900521280280438" />
<input name="BV_UseBVCookie"	type="hidden"	value="Yes" />
<input name="siglaAzione"	type="hidden"	value="" />

 

<input type="hidden" name="otp" id="hiddenOtp" value="" />

		<input type="hidden" name="keep" value="Yes" > 
 		
		<div class="tithelp">
			<h4>Riepilogo dati</h4>
		</div>
		<div class="formGenerico borderFormRounded">		 
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<label for="" class="control-label-output">
							Conto di addebito
						</label>
						<span class="output">
							00000 0000000000 EUR

						</span>
					</div>	
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<label for="" class="control-label-output">
							Saldo disponibile ad oggi
						</label>
						<span class="output">
							<a href="/webankpri/wbOnetoone/2l/action/banking/WsAvailableBalanceMultiAction.action?OBSCNT=TAB&tabId=nav_priv_wbx_sportello&OBSKEY=nav_priv_wbx_saldo&OBSKEY3=nav_priv_wbx_saldo&CC=00000 - 0000000000 - EUR">000,20 &euro;</a>
						</span>
					</div>	
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<label for="" class="control-label-output"> Numero  cellulare 
						</label>
						<span class="output">
							0000000000
						</span>
					</div>	
					<div class="col-sm-6">
						<label for="" class="control-label-output">
							 Operatore 
						</label>
						<span class="output">
							VODAFONE
						</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6">
						<label for="" class="control-label-output">
							Intestatario
						</label>
						<span class="output">
							Nome Cognome
						</span>
					</div>	
				</div>
			</div>
		</div>		 
		<!-- End div box1 -->
	
		<!-- div radio -->
		









<div class="tithelp">

		<div class="helpleft">Scegli l'importo della ricarica</div>
	
	</div><br class="clear"/>
		<div class="formGenerico borderFormRounded">	
			
				 
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6 radio">
						<div class="radio inline">
						<label class="textWrapper">
							<input type="radio" name="taglio_ricarica" value="20,00" checked="true" /><span class="text">20,00</span>
						</label>
						<span class="output">
						
						</span>
						</div>	
					</div>
					
					<div class="col-sm-6 radio">
						<div class="radio inline">
						<label class="textWrapper" >
							<input type="radio" name="taglio_ricarica" value="30,00"  /><span class="text">30,00</span>
						</label>
						<span class="output">
						
						</span>
						</div>
					</div>
						
				</div>
			</div>
				 
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6 radio">
						<div class="radio inline">
						<label class="textWrapper">
							<input type="radio" name="taglio_ricarica" value="50,00"  /><span class="text">50,00</span>
						</label>
						<span class="output">
						
						</span>
						</div>	
					</div>
					
					<div class="col-sm-6 radio">
						<div class="radio inline">
						<label class="textWrapper" >
							<input type="radio" name="taglio_ricarica" value="60,00"  /><span class="text">60,00</span>
						</label>
						<span class="output">
						
						</span>
						</div>
					</div>
						
				</div>
			</div>
				 
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6 radio">
						<div class="radio inline">
						<label class="textWrapper">
							<input type="radio" name="taglio_ricarica" value="80,00"  /><span class="text">80,00</span>
						</label>
						<span class="output">
						
						</span>
						</div>	
					</div>
					
					<div class="col-sm-6 radio">
						<div class="radio inline">
						<label class="textWrapper" >
							<input type="radio" name="taglio_ricarica" value="100,00"  /><span class="text">100,00</span>
						</label>
						<span class="output">
						
						</span>
						</div>
					</div>
						
				</div>
			</div>
				 
			<div class="form-group">
				<div class="row">
					<div class="col-sm-6 radio">
						<div class="radio inline">
						<label class="textWrapper">
							<input type="radio" name="taglio_ricarica" value="150,00"  /><span class="text">150,00</span>
						</label>
						<span class="output">
						
						</span>
						</div>	
					</div>
						
				</div>
			</div>
			
		</div>
		<!-- end div radio -->
		
		
	













	
<!-- === org.apache.jsp.banking.webank.ButtonsResponsive_jsp === { -->

		
<div class="form-group btnWrapper">		
		
		<div class="stepBtn">
			
			Step <strong>2</strong> di 3
		
		</div>
		
					<div class="btn-align-left" id="buttLeft0">
			 				
				<div>
					<a type="button"  href="javascript:history.back()" class="btn btn-default">
						indietro
					</a>
				</div>
		 
		</div>	
 	
					<div class="btn-align-right" id="buttRight0">
			 	
				<div>	 
					
							<a type="button"  href="javascript:ControllaValori('proseguiScegliTaglio')" class="btn btn-primary" title="prosegui" id="btnProsegui">
								prosegui
							</a>
					
				</div>
			
		</div>	
 
</div>




	<br class="clear"/>


<!-- } === org.apache.jsp.banking.webank.ButtonsResponsive_jsp === -->


	</form>

	<!-- DIV tolto per schede prodotto con TAB -->
	<!-- </div>-->

</div><!--fine div contenuti -->
						
					</div>
					<!-- FINE WRAPPER DELL'INTERO CONTENUTO DELLA PAGINA -->
			</div>
		</div>
		<!-- /CONTENT -->