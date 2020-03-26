
					<div class="visible-print-block"> 
						<img src="/HT/IMAGES/nGrafica/logo.png" title="Torna all'homepage" alt="Torna all'homepage">
						<div class="pull-right">
							  
							26/05/2017	
						</div>
					</div>
					
					
					



<!-- This Page Is Valid XHTML 1.0 Transitional --> 
<div class="riquadro">
	
	
		
	 
	



<style>
.imgSrv{
	float: none;
}
</style>


	<h1>
		
				
				<div class="hidden-print hidden-xxs flag gestioneCategorie">&nbsp;</div>
			
			
		
		
			
		
		
			
		
			
			
				
				
 					<span>Gestione categorie</span>
 					
				
			
			
		
	</h1>
	
		
			
		
		
		





<a href="javascript:OpenHelp('/template/modale.php?pagTit=Help: gestione categorie&pagCont=testo02')" class="general-help help-icon hidden-xs"><img src="/HT/IMAGES/nGrafica/i_help.png" class="imgSrv" title="Help On Line" alt="Help On Line"></a>






<div id="helpDialog" class="modal fade bs-example-modal-lg helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header clearfix">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
			
		</div>
    </div>
  </div>
</div>



		
	
	


	
	
	<div class="divForm">				
		<form id="formGestioneCategorie" method="post" action="/WEBHT/cc/associazioneCategorie.do">
			
			<input type="hidden" name="azioneAss" id="azioneAss">
			
			<div class="section clearfix">
				<h3 class="titleSection">
					








		
			Seleziona categorie
		
		
		
		

 
				</h3>
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-5 col-xs-12">
						<label class="control-label" for="tipoCategoriaSel">
							Tipo Categoria
						</label>
						<div class="form-field">
							<select name="tipoCategoriaSel" onchange="popolaTipoCat(this.id,'categoriaSel','causAssociate','causAssociabili');" id="tipoCategoriaSel" class="formCampo form-control"><option value="">Seleziona...</option>
								<option value="E" selected="selected">Entrate</option>
								<option value="U">Uscite</option></select>
		   		   		</div>
					</div>
					<div class="form-field-input col-sm-1 hidden-xs">
					</div>
					<div class="form-field-input col-sm-5 col-xs-12">
						<label class="control-label" for="categoriaSel">
							Categoria personalizzata
						</label>
						<div class="form-field">
							<select name="categoriaSel" onchange="popolaCat('tipoCategoriaSel','categoriaSel','causAssociate','causAssociabili');" id="categoriaSel" class="formCampo form-control"><option value="">Seleziona...</option><option value="Prova">Prova</option></select>
			    		</div>
					</div>
				</div>
			</div>
	
			<div class="section clearfix">
				<h3 class="titleSection">
					
					








		
			Associa categorie 
		
		
		
		

 
				</h3>
				<div class="form-group clearfix">
					<div class="form-field-input col-sm-5 col-xs-12">
						<label class="control-label">
							Causali Associabili
						</label>
						<div class="form-field">
							<select id="causAssociabili" class="form-control" style="height: auto;" name="causAssociabili" size="10">
							<option value="064">ACC.DIS.INC.CONSOREL -- ALTRI INTROITI</option><option value="300">ACC.EFFETTI AL SBF -- ALTRI INTROITI</option><option value="271">ACC.EMOLUM.(STP.PEN) -- RETRIBUZIONI</option><option value="270">ACC.EMOLUM.(STP.PEN) -- RETRIBUZIONI</option><option value="487">ACC.FINANZ.CARTOLIZZ -- ALTRI INTROITI</option><option value="302">ACC.NETT.EFF.SBF.EST -- ALTRI INTROITI</option><option value="303">ACC.SBF ELETTRONICO -- ALTRI INTROITI</option><option value="630">ACC.SC.EFF.DIRETTI -- ALTRI INTROITI</option><option value="470">ACC.UTIL.CREDIT. (I) -- ALTRI INTROITI</option><option value="810">ACCENS. RIPORTO TIT. -- REDDITI DA INVESTIMENTI</option><option value="063">ACCR.DISP.INC.BANCHE -- ALTRI INTROITI</option><option value="Z81">ACCR.MAV DOPO INC. -- ALTRI INTROITI</option><option value="060">ACCR.PER INC.PREAUT. -- ALTRI INTROITI</option><option value="066">ACCR.PREMI ASSICUR. -- ALTRI INTROITI</option><option value="062">ACCR.PREMI ASSICUR. -- ALTRI INTROITI</option><option value="061">ACCR.RID DOPO INC. -- ALTRI INTROITI</option><option value="991">ACCR.RIMB.C/FISCALE -- ALTRI INTROITI</option><option value="Z71">ACCR.SDD/RID DOPO INC -- ALTRI INTROITI</option><option value="292">ACCRED.DISP.ELET.SBF -- ALTRI INTROITI</option><option value="Z80">ACCREDITO MAV -- ALTRI INTROITI</option><option value="Z70">ACCREDITO SDD/RID -- ALTRI INTROITI</option><option value="700">ACQ.VEN.TIT.OPZ. -- REDDITI DA INVESTIMENTI</option><option value="701">ACQ.VEN.TIT.OPZ. -- REDDITI DA INVESTIMENTI</option><option value="280">ACQ.VEND.DIV.ESTERE -- ALTRI INTROITI</option><option value="281">ACQ.VER.ASS.SBF.EST -- ALTRI INTROITI</option><option value="622">ADD/ACC EST.ALTRE OP -- ALTRI INTROITI</option><option value="305">ANT.PORTAF.SBF -- ALTRI INTROITI</option><option value="870">ANTCIP. EXPORT -- ALTRI INTROITI</option><option value="304">ANTIC.SU FATT.ITALIA -- ALTRI INTROITI</option><option value="782">ASS. CIRCOLARI -- VERSAMENTI</option><option value="Z32">ASS. CIRCOLARI BANCHE -- ALTRI INTROITI</option><option value="783">ASS. CIRCOLARI NOSTRA BANCA -- VERSAMENTI</option><option value="78B">ASS. CIRCOLARI SBF -- VERSAMENTI</option><option value="Z20">ASS.BANCARI BPVN -- VERSAMENTI</option><option value="011">ASS.BANCARI BPVN -- VERSAMENTI</option><option value="Z23">ASS.BANCHE F/PROV. -- VERSAMENTI</option><option value="021">ASS.BANCHE F/PROV. -- VERSAMENTI</option><option value="Z22">ASS.BANCHE SU PROV. -- VERSAMENTI</option><option value="020">ASS.BANCHE SU PROV. -- VERSAMENTI</option><option value="Z30">ASS.CIRCOLARI BANCHE -- VERSAMENTI</option><option value="Z31">ASS.CIRCOLARI BANCHE -- VERSAMENTI</option><option value="789">ASS.CIRCOLARI BANCHE -- VERSAMENTI</option><option value="012">ASS.NS.BANCA S/SP -- VERSAMENTI</option><option value="022">ASS.POSTALI NON ST. -- VERSAMENTI</option><option value="Z40">ASS.POSTALI NON ST. -- VERSAMENTI</option><option value="013">ASS.SBF NS.BANCA -- VERSAMENTI</option><option value="Z21">ASS.SBF NS.BANCA -- VERSAMENTI</option><option value="34A">AUTORICARICA -- RICARICA</option><option value="34C">AUTORICARICA -- RICARICA</option><option value="34D">AUTORICARICA -- RICARICA</option><option value="621">AZZERAMENTO SALDO -- ALTRI INTROITI</option><option value="34E">ACCENSIONE OPERAZIONE DI PROROGA/DILAZIONE DI PAGAMENTO -- ALTRI INTROITI</option><option value="486">BONIF. VS. FAVORE -- ALTRI INTROITI</option><option value="480">BONIF. VS. FAVORE -- ALTRI INTROITI</option><option value="48D">BONIF. VS. FAVORE -- ALTRI INTROITI</option><option value="488">BONIF. VS. FAVORE -- ALTRI INTROITI</option><option value="485">BONIF. VS. FAVORE -- ALTRI INTROITI</option><option value="484">BONIF. VS. FAVORE -- ALTRI INTROITI</option><option value="901">BONIF.EST.VS. FAVORE -- ALTRI INTROITI</option><option value="481">BONIF.EST.VS. FAVORE -- ALTRI INTROITI</option><option value="48C">BONIF.RIT.DL78/10(REG.FORFETARIO DEI MINIMI) -- ALTRI INTROITI</option><option value="489">BONIFICO AZIMUT -- ALTRI INTROITI</option><option value="ZI0">BONIFICO DALL`ESTERO -- ALTRI INTROITI</option><option value="284">BONIFICO NS BANCA -- VARIE</option><option value="48A">CARICAMENTO CARTA -- ALTRI INTROITI</option><option value="XXX">CAUSALE NON PRESENTE -- ALTRE ENTRATE</option><option value="140">CEDOLE DIVID. PREMI -- REDDITI DA INVESTIMENTI</option><option value="16G">COMMISSIONI -- SPESE BANCARIE</option><option value="182">COMP. CONTI ANTICIPI -- ALTRI INTROITI</option><option value="185">COMP. CONTO INCASSI -- ALTRI INTROITI</option><option value="181">COMP.ESTIN.RAPPORTO -- ALTRI INTROITI</option><option value="183">COMP.RAPP.TRASFERITO -- ALTRI INTROITI</option><option value="800">COMPRAV.TERMINE TIT. -- REDDITI DA INVESTIMENTI</option><option value="78A">CONTANTE SELF SERVICE -- VARIE</option><option value="791">DIS.GIROCONTO BANCHE -- ALTRI INTROITI</option><option value="790">DIS.GIROCONTO BANCHE -- ALTRI INTROITI</option><option value="340">DISP.GIRO CONTO -- ALTRI INTROITI</option><option value="343">DISPOSIZIONE GIRO AUTOMATICO -- ALTRI INTROITI</option><option value="640">EFF.PRESENT.ALLO SC. -- ALTRI INTROITI</option><option value="709">EMISSIONE/ESTINZ. CD -- VARIE</option><option value="ZS0">EROGAZ.FINANZIAMENTI -- ALTRI INTROITI</option><option value="482">EROGAZIONE FINANZ. -- ALTRI INTROITI</option><option value="34H">EVIDENZA MOVIMENTO -- AUTORICARICA</option><option value="68E">EVIDENZA STORNO -- ALTRI INTROITI</option><option value="68G">EVIDENZA STORNO -- ALTRI INTROITI</option><option value="860">FINANZ. IMPORT -- ALTRI INTROITI</option><option value="Z10">GIRO CASH POOLING -- ALTRI INTROITI</option><option value="Z11">GIRO CASH POOLING -- ALTRI INTROITI</option><option value="Z12">GIRO CASH POOLING -- ALTRI INTROITI</option><option value="301">GIRO CONTO SBF -- ALTRI INTROITI</option><option value="341">GIRO CONTO TESOR. -- ALTRI INTROITI</option><option value="344">GIRO RESIDUO ANT/FAT -- ALTRI INTROITI</option><option value="345">GIRO SALDO SPORT.AUT -- ALTRI INTROITI</option><option value="346">GIROCONTO G.P.M. -- ALTRI INTROITI</option><option value="ZT1">INC.BOLLETTINO BANC. -- ALTRI INTROITI</option><option value="ZB2">INC.CERT.CONFORMITA&amp;#039; -- ALTRI INTROITI</option><option value="ZB1">INC.CERT.CONFORMITA` -- VARIE</option><option value="ZB0">INC.CERT.CONFORMITA` -- ALTRI INTROITI</option><option value="093">INC.POS CARTE C-LESS -- ALTRI INTROITI</option><option value="092">INC.POS CARTE CREDIT -- ALTRI INTROITI</option><option value="090">INCAS. TRAMITE P.O.S -- ALTRI INTROITI</option><option value="48E">INCASSI DIVERSI -- ALTRI INTROITI</option><option value="094">INCASSI P.O.S. -- ALTRI INTROITI</option><option value="272">INCASSO PENSIONE -- RETRIBUZIONI</option><option value="141">INT. NETTI DA CD -- VARIE</option><option value="180">INT.COMP.(C.C. DEP.) -- ALTRI INTROITI</option><option value="187">INTERESSI ANTICIPATI -- REDDITI DA INVESTIMENTI</option><option value="184">INTERESSI E COMP. -- ALTRI INTROITI</option><option value="186">INTERESSI PRESTITO ROTATIVO -- INVESTIMENTI</option><option value="18A">INT. E COMP. -- ALTRI INTROITI</option><option value="483">LIQUIDAZ.CONTRIBUTI -- ALTRI INTROITI</option><option value="ZH3">LIQUIDAZIONE PROVENTI OICR -- REDDITI DA INVESTIMENTI</option><option value="170">LOCAZIONI -- ALTRI INTROITI</option><option value="ZN0">NEGOZ.ASS. SU ESTERO -- ALTRI INTROITI</option><option value="902">NEGOZIAZIONE SBF EFFETTI ELETTRONICI ESTERO -- ALTRI INTROITI</option><option value="850">OPERAZ. SOCIETARIE -- REDDITI DA INVESTIMENTI</option><option value="802">OPERAZ. SU DERIVATI -- REDDITI DA INVESTIMENTI</option><option value="66A">OTP CARD SERVIZI BY -- SPESE BANCARIE</option><option value="240">PAG.INC.DOC.ITALIA -- ALTRI INTROITI</option><option value="175">PREMIO ASSICURATIVO -- ALTRI INTROITI</option><option value="992">PREN BONIFICI -- VARIE</option><option value="993">PREN BONIFICI -- VARIE</option><option value="990">PREN BONIFICI -- VARIE</option><option value="805">PRODOTTI DERIVATI -- REDDITI DA INVESTIMENTI</option><option value="ZG0">PRODOTTI DERIVATI -- REDDITI DA INVESTIMENTI</option><option value="703">PRODOTTI DERIVATI -- INVESTIMENTI</option><option value="ZG1">PRODOTTI DERIVATI -- REDDITI DA INVESTIMENTI</option><option value="142">REMUNERAZIONE OPERAZIONI DI PRESTITO TITOLI -- REDDITI DA INVESTIMENTI</option><option value="601">RETT.VALUTA PROROGA -- ALTRI INTROITI</option><option value="684">RETTIFICA ANTIC/FATT -- ALTRI INTROITI</option><option value="686">RETTIFICA SCRITTURE -- ALTRI INTROITI</option><option value="600">RETTIFICA VALUTA -- ALTRI INTROITI</option><option value="580">REVERS. D`INCASSO -- ALTRI INTROITI</option><option value="571">RIACCREDITO ASSEGNO -- ALTRI INTROITI</option><option value="293">RIC.DISP.ELET.AL D.I -- ALTRI INTROITI</option><option value="348">RICARICA -- RICARICA</option><option value="78D">RICARICA CARTA - ATM -- VERSAMENTI</option><option value="78C">RICARICA CARTA - CONTANTI -- VERSAMENTI</option><option value="560">RICAVO EFF.ASS./D.I. -- ALTRI INTROITI</option><option value="291">RICAVO RI.BA.AL D.I. -- ALTRI INTROITI</option><option value="841">RIMB.AUTOM.C.LIQUID. -- REDDITI DA INVESTIMENTI</option><option value="ZH1">RIMB.AUTOM.C/LIQUID. -- REDDITI DA INVESTIMENTI</option><option value="ZH2">RIMB.MANUALE ARCA MM -- REDDITI DA INVESTIMENTI</option><option value="842">RIMB.MANUALI ARCA MM -- REDDITI DA INVESTIMENTI</option><option value="843">RIMB.TITOLI/FONDI -- INVESTIMENTI</option><option value="ZH0">RIMB.TITOLI/FONDI -- REDDITI DA INVESTIMENTI</option><option value="900">RIMESSE DA PER ESTER -- ALTRI INTROITI</option><option value="801">RIT.FIS.CAPITAL GAIN -- ALTRI INTROITI</option><option value="809">RITENUTA FISCALE TRASFERIMENTO FONDI -- ALTRI INTROITI</option><option value="34F">RIMBORSO OPERAZIONE DI PROROGA/DILAZIONE DI PAGAMENTO -- ALTRI INTROITI</option><option value="685">SCARICO ANTIC/FATT. -- ALTRI INTROITI</option><option value="ZM0">SCONTO EFF.SU ESTERO -- ALTRI INTROITI</option><option value="830">SOTT.FONDI C./TITOLI -- REDDITI DA INVESTIMENTI</option><option value="804">SPESE/IMPOSTA SOST. -- ALTRI INTROITI</option><option value="687">STORNI FINANZ.CARTOL -- ALTRI INTROITI</option><option value="682">STORNO COMM. POS -- ALTRI INTROITI</option><option value="351">STORNO DISP.ELETTR. -- ALTRI INTROITI</option><option value="091">STORNO OPERAZ. P.O.S -- ALTRI INTROITI</option><option value="350">STORNO RI.BA. -- ALTRI INTROITI</option><option value="681">STORNO SBF ELETTR. -- ALTRI INTROITI</option><option value="680">STORNO SCRITTURE -- ALTRI INTROITI</option><option value="688">STORNO SCRITTURE -- VARIE</option><option value="68A">STORNO SCRITTURE -- ALTRI INTROITI</option><option value="68B">STORNO SCRITTURE -- ALTRI INTROITI</option><option value="68C">STORNO SCRITTURE -- ALTRI INTROITI</option><option value="68D">STORNO SCRITTURE -- ALTRI INTROITI</option><option value="683">STORNO VS.DISPOSIZ. -- ALTRI INTROITI</option><option value="603">SVINCOLO IMPORTI -- VARIE</option><option value="803">TASSAZ.PROV.DEP.GAR. -- ALTRI INTROITI</option><option value="840">TIT.SCAD.E ESTRATTI -- REDDITI DA INVESTIMENTI</option><option value="342">TRASF. A SOFFERENZE -- ALTRI INTROITI</option><option value="48M">TRASFERIM.TRA CONTI -- ALTRI INTROITI</option><option value="34M">TRASFERIM.TRA CONTI -- ALTRI INTROITI</option><option value="48B">TRASFERIMENTO A VOSTRO FAVORE AL NETTO RIT. D.L.78/2010 -- ALTRI INTROITI</option><option value="880">UTILIZZO C.TO VAL. -- ALTRI INTROITI</option><option value="786">VERS. ALTRA OP. -- VERSAMENTI</option><option value="010">VERS. ASS. SBF S.P. -- VERSAMENTI</option><option value="780">VERS. CONTANTI -- VERSAMENTI</option><option value="78E">VERS. CONTANTI GDO -- VERSAMENTI</option><option value="785">VERS. VOUCHERS -- VERSAMENTI</option><option value="78G">VERS.CONTANTI YOUCASH -- VERSAMENTI</option><option value="781">VERS.IN QUAL.GARANTE -- VERSAMENTI</option><option value="784">VERS.REALIZ.GARANZIA -- VERSAMENTI</option><option value="023">VERSAMENTO ASSEGNI S.B.F. -- VERSAMENTI</option><option value="78F">VERSAMENTO CONTANTE DA ALTRA OPERAZIONE -- VERSAMENTI</option><option value="788">VERSAMENTO VOUCHERS AMEX -- VERSAMENTI</option><option value="787">VOUCHERS DINERS -- VERSAMENTI</option></select>
						</div>
					</div>
					<div class="form-field-input col-sm-1 col-xs-12">
						<label class="control-label hidden-xs">
							&nbsp;
						</label>
						<div id="divFrecce" class="form-field" style="padding: 30px;text-align: center;">
							<a href="#">
								<img src="/HT/IMAGES/FrecciaDx.gif" id="btnAssocia" class="margin-bottom10" title="Associa" alt="Associa" onclick="eseguiAssocia();">
							</a><br class="hidden-xs">
							<a href="#">
								<img src="/HT/IMAGES/FrecciaSx.gif" id="btnDissocia" title="Dissocia" alt="Dissocia" onclick="eseguiDissocia();">
							</a>
						</div>
					</div>
					<div class="form-field-input col-sm-5 col-xs-12">
						<label class="control-label">
							Causali associate alla categoria prescelta
						</label>
						<div class="form-field">
							<select id="causAssociate" class="form-control" style="height:auto" name="causAssociate" size="10">
								
							<option value="290">ACC. RI.BA. AL SBF</option><option value="720">ACC.CREDITO ESTERO</option></select>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	
	<script type="text/javascript">
		//caricaCategorie();
		if (isMobile()) {
			$("#causAssociabili").removeAttr("size");
			$("#causAssociate").removeAttr("size");
			$('#divFrecce').css('padding', '15px');
			$('#btnAssocia').css('transform', 'rotate(90deg)');
			$('#btnDissocia').css('transform', 'rotate(90deg)').parent().css('padding-left', '20px');
		}
	</script>
	
	



</div>
					
