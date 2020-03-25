<h1>MERCATO ITALIANO</h1>

<div id="bodier" class="home">
    <!-- AREA DI AGGIORNAMENTO PAGINA -->     
    

				



		
    <div class="hr_foot clear"></div>
      <!-- BOX DI LOGIN -->
      <div id="home1d3">                
        



        
        


 
	
	
      <div class="box_news" id="notizieJS">
        <h3>Notizie di oggi</h3>
        <div>    
          <ul>    
		
	


            <li class="light">
              <div class="top"> <strong>Non esistono notizie</strong></div>
            </li>	

          </ul>
          
          <div class="button_green" style=" margin:10px 10px 10px 10px;">
            <div><a href="/wt/News/ElencoNotizieOggi" >Tutte le notizie</a></div>
            <div class="right"></div>
          </div>
          </div>
        
      </div>

   
        <div class="blackboxBig" style="height:auto">
          






<script language="javascript">
   function setDestinazione() {
     var mercato = document.forms.FormGlossario.Mercato;
	 var selezione = mercato.options[mercato.selectedIndex].value;
	 var descrizione = mercato.options[mercato.selectedIndex].text;
	 
	 document.forms.FormGlossario.segmento.value="";
	 //window.alert('selezione ' + selezione); 
	 if (selezione == '24-TLX-TLX' || selezione == '32-TLX-ELX') {
		document.forms.FormGlossario.destinazione.value = "/schedatitolo/tlx/schedagenerica/";
	} else 
	if (selezione == '21-MI-CW' || selezione == '22-MI-CWTAH' ) {
	    document.forms.FormGlossario.destinazione.value = "/schedatitolo/cw/schedacw";
	 } else if (selezione == '12-MI-MRT') {
	    document.forms.FormGlossario.destinazione.value = "/schedatitolo/obbligazioni/schedaobbligazioni";
	 } else if (selezione == '34-REX-OBREX') {
	    document.forms.FormGlossario.destinazione.value = "/schedatitolo/rex/schedarex";
	 } else if (selezione == 'XF-MI-FON') {
	    document.forms.FormGlossario.destinazione.value = "/mercati/fondi/tabellafondi";
	 } else if (selezione.indexOf('-MI-')>0) {
	    document.forms.FormGlossario.destinazione.value = "/schedatitolo/schedaazioni";
	     
	    if (descrizione.indexOf('International')>0) {
	    	document.forms.FormGlossario.segmento.value='INTERNATIONAL';
	    } else if (descrizione.indexOf('ETF')>0) {
	        document.forms.FormGlossario.segmento.value='ETF';
	    }
	    
	 } else {
	    document.forms.FormGlossario.destinazione.value = "/schedatitolo/estere/schedaazioniestere";
	 }
	 //alert('destinazione ' + document.forms.Testata.destinazione.value);
   }
   
   
   //ch1017
   function sistemaSegmentoGlossario() {
     var mercato = document.forms.FormGlossario.Mercato;
	 var selezione = mercato.options[mercato.selectedIndex].value;
	 var descrizione = mercato.options[mercato.selectedIndex].text;
	 if (selezione.indexOf('-MI-')>0) {
	    if (descrizione.indexOf('International')>0) {
	    	document.forms.FormGlossario.segmento.value='INTERNATIONAL';
	    } else if (descrizione.indexOf('ETF')>0) {
	        document.forms.FormGlossario.segmento.value='ETF';
	    }
	    }
	  document.saveForm.Mercato.selectedIndex = document.FormGlossario.Mercato.selectedIndex;
	  mercato = document.forms.saveForm.Mercato;
	  selezione = mercato.options[mercato.selectedIndex].value;
	  descrizione = mercato.options[mercato.selectedIndex].text;
	   if (selezione.indexOf('-MI-')>0) {
	    if (descrizione.indexOf('International')>0) {
	    	document.forms.saveForm.segmento.value='INTERNATIONAL';
	    } else if (descrizione.indexOf('ETF')>0) {
	        document.forms.saveForm.segmento.value='ETF';
	    }
	    } 
	    //alert(document.forms.saveForm.segmento.value);
   }
</script>

<div style="text-align:left;" >
<FORM NAME="FormGlossario" METHOD="POST" ACTION="/wt/pr/mercati/elencoazioni"> 		
<input type="hidden" name="destinazione">		
<input type="hidden" name="segmento" value=""/>
 				<h3>RICERCA ALFABETICA</h3>
 				<select id="selectToHide" style="width: 110px; margin-left:10px;" name="Mercato"    onchange="ModificaMercato('FormGlossario');sistemaSegmentoGlossario()" >
		  
           			<option value="11-MI-EQCON"  >MTA</option>
		  			
           			<option value="11-MI-EQCON"  >MTA INT</option>
		  			
           			<option value="11-MI-EQCON"  >ETFplus</option>
		  			
		  </select>
		  <br/><br/>
 		<div style="width:135px;">
 		<div style="width:50px;float:left;margin-left:10px;">
 			<select  id="selectToHide" name="Titolo">
			   			<option value=A>A</option><option value=B>B</option><option value=C>C</option><option value=D>D</option><option value=E>E</option><option value=F>F</option><option value=G>G</option><option value=H>H</option><option value=I>I</option><option value=J>J</option><option value=K>K</option><option value=L>L</option><option value=M>M</option><option value=N>N</option><option value=O>O</option><option value=P>P</option><option value=Q>Q</option><option value=R>R</option><option value=S>S</option><option value=T>T</option><option value=U>U</option><option value=V>V</option><option value=W>W</option><option value=X>X</option><option value=Y>Y</option><option value=Z>Z</option> <option value="all">#</option>
					</select>
 		</div>
 		<div style="width:65px;float:right;text-align:left;">
 			<div class="button_green_dark" id="floatLeft">
				<div>
					<a href="javascript:document.FormGlossario.submit();" >VAI</a>
				</div>
				<div class="right"></div>
			</div>
 		</div>
 		</div>
 		
 		
				
			<input type="hidden" name="alfabetica" value="Y">
			</form>
</div>
<br/>			
<script language="javascript">
	setDestinazione();
</script>

	
	
<div id="filler" >&nbsp;</div>
 <script language="javascript">
 try{
	var filler = document.getElementById('filler');
	if (document.all) //==> IE
		filler.style.height="5px";
	else
		filler.style.height="23px";
	}
	catch(e){}
</script>

        </div>
        <div class="blackboxBig" style="border-top-width:0; height: auto; background-image: none;background-color:#5C5C5C;margin-top:5px; padding: 5px 10px; 0 10px">
            






<div>
	<div class="classicLink">
		Utilizza il nostro
		
			<a href='/wt/pr/screeningtool' class=""> 
		 Screening tool</a> e 
		
			<a href='/wt/pr/strategie/comparatore' class=""> 
		 il comparatore</a><br> per una ricerca approfondita</a></font>
	</div>
	<div style="height:10px;">&nbsp;</div>
</div>
        </div>
        <br/>
        


   <div>	     
	 <div style="float:left;">
	 <img src="/img/ret/list_play_green_OnWhite.jpg">
	</div>
	 
	 <div class="textIndici">
   	   <a href="#" onClick="javascript:window.open('/wt/mercati/guidamercati/mta','GuidaMercato','width=480,height=510,scrollbars=yes,top=100,left=150');" ><b>Guida al Mercato MTA</b></a>
     </div>
   </div>
   <br>
   <div>	     
	 <div style="float:left;">
	 <img src="/img/ret/list_play_green_OnWhite.jpg">
     </div>
	 
	 <div class="textIndici">
   	   <a href="#" onClick="javascript:window.open('/wt/mercati/guidamercati/tah','GuidaMercato','width=480,height=510,scrollbars=yes,top=100,left=150');"><b>Guida al Mercato MTA AH</b></a>
     </div>
   </div>

	
       
      </div>
      <div id="home2d3">        
        




<div class="box_base" style="width:260px;">
	<h3>
		
		<a href='/wt/pr/ufficio/tradermade/'>
		
		  Analisi Tecnica
		</a>
	</h3>
	<div class="text eqpad">
	I migliori analisti sono a tua disposizione. <br>Da questo link accederai ad un'unica sezione in cui sono raccolti 
	i dati di analisi tecnica pi&#249; rilevanti: composizione indici, titoli caldi, special reports e molto altro ancora.
	</div>
</div>
        






 
<script language="javascript" src="/js/FunzioniJavaScript.js"></script>
<script language="javascript">


function ConvalidaForm (caller) {
  var err = 0;
  if(!ConvalidaNomi(document.saveForm.StrDaRicercare.value)){
  	err = 1;
  	msg = "MSG-00102";
  }
    
  //if((!err) && (document.saveForm.TipoRicerca[1].checked == true) && (!ValidLength(document.saveForm.StrDaRicercare.value,3))) {
  //  err = 1;
  //}
  if(!err) {
    if(caller) return true;
    else document.saveForm.submit();
  }
  else {
    it_item_error(document.saveForm.StrDaRicercare,msg);
    if (caller) return false;
  }
} 


function sistemaMercatoRicercaGenerica() {
     document.FormGlossario.Mercato.selectedIndex = document.saveForm.Mercato.selectedIndex;
     document.forms.saveForm.segmento.value="";
     var mercato = document.forms.saveForm.Mercato;
	 var selezione = mercato.options[mercato.selectedIndex].value;
	 var descrizione = mercato.options[mercato.selectedIndex].text;
	 if (selezione.indexOf('-MI-')>0) {
	    if (descrizione.indexOf('International')>0) {
	    	document.forms.saveForm.segmento.value='INTERNATIONAL';
	    } else if (descrizione.indexOf('ETF')>0) {
	        document.forms.saveForm.segmento.value='ETF';
	    }
	    }
	    
	 var mercato = document.forms.FormGlossario.Mercato;
	 var selezione = mercato.options[mercato.selectedIndex].value;
	 var descrizione = mercato.options[mercato.selectedIndex].text;
	 if (selezione.indexOf('-MI-')>0) {
	    if (descrizione.indexOf('International')>0) {
	    	document.forms.FormGlossario.segmento.value='INTERNATIONAL';
	    } else if (descrizione.indexOf('ETF')>0) {
	        document.forms.FormGlossario.segmento.value='ETF';
	    }
	    }
	    
	 
}


</script>




<FORM NAME="saveForm" METHOD="post" ACTION="/wt/pr/mercati/elencoazioni" onSubmit="javascript:return ConvalidaForm(1);">
<input type="hidden" name="segmento" value=""/>
	 <div class="box_base" style="width:260px;">
		<h3>SCEGLI IL TITOLO</h3>
		<div class="halignmultidivs nomarg">
			<div class="labelMI">Titolo:</div>
			<div class="input doublesize">
				<input type="text" name="StrDaRicercare" size="8" />
				
				<input type="hidden" name="RicercaDaGlossario" value="0">
			</div>
		</div>
		
		<div class="halignmultidivs nomarg">
			<div class="labelMI">Mercato:</div>
			<div class="input">
				<select name="Mercato" size="1" onChange ="javascript:sistemaMercatoRicercaGenerica()">			
				
		          <option value="11-MI-EQCON" >MTA</option>
				  
		          <option value="11-MI-EQCON" >MTA INT</option>
				  
		          <option value="11-MI-EQCON" >ETFplus</option>
				  
	
			  </select>
			</div>
		</div>
		
		<div class="halignmultidivs nomarg">
			<div class="labelMI">Sezione:</div>
			<div class="input">
				<select name="SezioneSchedaRiskGrafici" style="width:120px">
				
					<option value='/wt/schedatitolo/schedaazioni' selected>Quotazioni</option>
					
		 				<option value='/wt/schedatitolo/multex/schedaprofilo'>Profilo</option>
		 			  
		 			
						<option value='/wt/schedatitolo/multex/schedaprosp/&TipoDati=PROSP'>Previsioni</option>
						<option value='/wt/schedatitolo/multex/schedaconsensus/&TipoDati=CONSENSUS'>Raccomandazioni</option>
						<option value='/wt/schedatitolo/multex/schedakeyratio/&TipoDati=KEYRATIO'>Indicatori Finanziari</option>
	 					<option value='/wt/schedatitolo/multex/schedaratiocomp/&TipoDati=RATIOCOMP'>Confronti</option>
					
					
		  				<option value='/wt/strategie/grafici'>Grafici interattivi</option>  
		  			
		  			
		  				<option value='/wt/pr/strategie/riskgrade/&anType=AZIONI'>Risk Monitor</option>
		  			
		  		
		  	</select>
			</div>
			<div class="input" style="float:right;width: 50px;">
				<div>
					<div class="button_green" >
					  <div><a href="javascript:ConvalidaForm(0);" >vai</a></div>
					    <div class="right"></div>
				    </div>
				  </div>
			</div>
		</div>
	</div>
</form>
        







<FORM NAME="FormCercaTitolo" METHOD="post" ACTION='/wt/pr/screeningtool/risultati'>
			
	<div class="box_base" style="width:260px; ">
		<h3>RICERCA AVANZATA</h3>

		<div class="halignmultidivs nomarg">
			<div class="input margleft" >Mercato:</div>
			<div class="input">
				<select name="PMercato">			
								
		            	<option value="11-MI-EQCON" >MTA</option>
		     <!-- 	<option value="99-MI-EQNM" >Italia-techSTAR-NM</option>
		             -->
		            
			    </select>
			</div>
		</div>
		
		<div class="halignmultidivs nomarg">
			<div class="input margleft" >Settore:</div>
			<div class="input doublesize">
				<select name="PSettore" size="1" STYLE="width:170px">
				  <option value="">&nbsp;</option>
				  
				  <option value="Airlines" >Airlines</option>
				  
				  <option value="Apparel" >Apparel</option>
				  
				  <option value="Auto Manufacturers" >Auto Manufacturers</option>
				  
				  <option value="Auto Parts&Equipment" >Auto Parts&Equipment</option>
				  
				  <option value="Banks" >Banks</option>
				  
				  <option value="Beverages" >Beverages</option>
				  
				  <option value="Biotechnology" >Biotechnology</option>
				  
				  <option value="Building Materials" >Building Materials</option>
				  
				  <option value="Chemicals" >Chemicals</option>
				  
				  <option value="Computers" >Computers</option>
				  
				  <option value="Cosmetics/Personal Care" >Cosmetics/Personal Care</option>
				  
				  <option value="Distribution/Wholesale" >Distribution/Wholesale</option>
				  
				  <option value="Diversified Finan Serv" >Diversified Finan Serv</option>
				  
				  <option value="Electric" >Electric</option>
				  
				  <option value="Electrical Compo&Equip" >Electrical Compo&Equip</option>
				  
				  <option value="Electronics" >Electronics</option>
				  
				  <option value="Engineering&Construction" >Engineering&Construction</option>
				  
				  <option value="Entertainment" >Entertainment</option>
				  
				  <option value="Food" >Food</option>
				  
				  <option value="Gas" >Gas</option>
				  
				  <option value="Hand/Machine Tools" >Hand/Machine Tools</option>
				  
				  <option value="Healthcare-Products" >Healthcare-Products</option>
				  
				  <option value="Holding Companies-Divers" >Holding Companies-Divers</option>
				  
				  <option value="Home Builders" >Home Builders</option>
				  
				  <option value="Home Furnishings" >Home Furnishings</option>
				  
				  <option value="Housewares" >Housewares</option>
				  
				  <option value="Insurance" >Insurance</option>
				  
				  <option value="Internet" >Internet</option>
				  
				  <option value="Investment Companies" >Investment Companies</option>
				  
				  <option value="Iron/Steel" >Iron/Steel</option>
				  
				  <option value="Leisure Time" >Leisure Time</option>
				  
				  <option value="Lodging" >Lodging</option>
				  
				  <option value="Machinery-Diversified" >Machinery-Diversified</option>
				  
				  <option value="Media" >Media</option>
				  
				  <option value="Miscellaneous Manufactur" >Miscellaneous Manufactur</option>
				  
				  <option value="Oil&Gas" >Oil&Gas</option>
				  
				  <option value="Oil&Gas Services" >Oil&Gas Services</option>
				  
				  <option value="Real Estate" >Real Estate</option>
				  
				  <option value="Retail" >Retail</option>
				  
				  <option value="Software" >Software</option>
				  
				  <option value="Telecommunications" >Telecommunications</option>
				  
				  <option value="Transportation" >Transportation</option>
				  
			    </select>
			</div>
		</div>
		
		<div class="halignmultidivs nomarg">
			<div class="input margleft" >Performance %<br />1 mese</div>
			<div class="input doublesize">
				<select name="PConfrontoPerformance1Mese" size="1">
				  <option  value='>='>>=</option><option  value='<='><=</option>
		        </select>&nbsp;<input type="text" size="11" maxlength="11" name="PPerformance1Mese" value="" />
			</div>
		</div>
		
		<div class="halignmultidivs nomarg">
			<div class="input margleft" >Performance %<br />1 anno</div>
			<div class="input doublesize">
				<select name="PConfrontoPerformance1Anno" size="1">
				  <option  value='>='>>=</option><option  value='<='><=</option>
			    </select>&nbsp;<input type="text" size="11" maxlength="11" name="PPerformance1Anno" value="" />
			</div>
		</div>
		
		<div class="halignmultidivs nomarg">
			<div class="input margleft" >Performance %<br />da inizio anno</div>
			<div class="input doublesize">
				<select name="PConfrontoPerformanceDaInizioAnno" size="1">
				  <option  value='>='>>=</option><option  value='<='><=</option>
			    </select>&nbsp;<input type="text" size="11" maxlength="11" name="PPerformanceDaInizioAnno" value="" />
			</div>
		</div>
		
		<div class="halignmultidivs nomarg">
			<div class="input margleft classicLink" ><a href="javascript:mtx_help('L3','CAPMKT');" style="font-weight:normal;">Capitalizzazione <br />di Mercato</a>**</div>
			<div class="input doublesize">
				<select name="PCapitalizzazioneMercato" size="1">
				  <option  value='' selected ></option>
				  <option  value='<500'>Meno di 500</option>
				  <option  value='between 500 and 1000'>Da 500 a 1000</option>
				  <option  value='between 1000 and 5000'>Da 1000 a 5000</option>
				  <option  value='between 5000 and 10000'>Da 5000 a 10000</option>
				  <option  value='> 10000'>oltre 10000</option>
			    </select>
			</div>
		</div>
		
		<div class="halignmultidivs nomarg">
			<div style="padding-top:5px;">
				
				** Valore espresso in Milioni di Euro per i titoli europei
				
				
				
			</div>
		</div>
		
		<div class="halignmultidivs nomarg">
			<div class="input doublesize margleft">&nbsp;</div>
			<div class="input">
				<div style="float:right;">
					<div class="button_green" style="padding-left:10px;">
					  <div>
					  
						<a href="javascript: InviaDati();">
						
						esegui</a>
					  </div>
					  <div class="right"></div>
				    </div>
				  </div>
			</div>
		</div>
		
		<!-- 
		<div style="float:left;">		 
		  <div style="width:95px; float:left;" class="classicLink">  
		    &nbsp;<a href="javascript:mtx_help('L3','RISKGRADE');">Riskgrade</a>
		  </div> 
		  <div style="width:195px; float:left;"> 
		    <select name="PRiskGrade" size="1">
			  <option  value='' selected ></option>
			  <option  value='between 0 and 100'>Da 0 a 100</option>
			  <option  value='between 100 and 300'>Da 100 a 300</option>
			  <option  value='between 300 and 500'>Da 300 a 500</option>
			  <option  value='between 500 and 700'>Da 500 a 700</option>
			  <option  value='between 700 and 1000'>Da 700 a 1000</option>
			  <option  value='> 1000'>oltre 1000</option>
		    </select>
		  </div> 
		</div>
		 -->
   </div>
  	</FORM> 
        
      </div> 
      <div id="home3d3">
        





<div class="box_base" style="width:260px;">
	<h3>
			
			<a href='/wt/ufficio/demotradermade&ricerca=Testi&mrkt=I'>
		      Titoli Caldi
		    </a>
			
	</h3>
	<div class="text eqpad">
	Tutti i giorni prima dell'apertura della Borsa vengono segnalate le migliori operazioni sul mercato azionario 
	italiano in una ottica di breve periodo. Per ogni titolo prescelto vengono indicati il livello di entrata, 
	di profit e stop loss. Tutte le posizioni aperte sono, poi, gestite fino alla loro chiusura.
	</div>
</div>
        









<link href="/css/box_grafico.css" rel="stylesheet" type="text/css" />








<form NAME="formlinkgrafici" METHOD="post" action="/wt/strategie/grafici">
<input type="hidden" name="borsa1">
<input type="hidden" name="mercato1">
<input type="hidden" name="stockcode1">
</form>



<form NAME="popupgraficigrandi" METHOD="post" action="/wt/grafici/visualizzagraficogrande">
<input type="hidden" name="borsa" value="MI">
<input type="hidden" name="mercato" value="EQCON"> 
<input type="hidden" name="idStrumento" value="I_SPMIB">
<input type="hidden" name="descrizione" value="FTSE MIB">
</form>

<script language="Javascript">
  function visualizzaGraficoGrande() {
     
	  document.forms.popupgraficigrandi.target = 'popGraficiGrandi';
      window.open('','popGraficiGrandi','width=580,height=580,scrollbars=NO,toolbar=NO');
      document.forms.popupgraficigrandi.submit();
   }
</script>



<form name="formgrafici" method="post">

<!--<table width=290 border=0 cellspacing=0 cellpadding=5 bgcolor=#EBEBEB>-->
                  <div class="box_grafico" style="width:290;">

<h3>Grafico Intraday</h3>
                    
	<div align="center"><img alt="Clicca qui per il grafico multiday"  STYLE="cursor: hand;" src="http://www.wetrade.svil:80/graf/cgi-bin/chart?cfg=itradepnov&grf_0_0=MI.EQCON.I_SPMIB&n_giorni=1&type_0_0=65&cprs_0_0=300&grf_1_0=volumi&cprs_1_0=900&cprs_0_1=300&prd_0_1=20&ticker_type=I" width="240" border="0" height="187" name= "Grafici" onclick="javascript:visualizzaGraficoGrande();" />
	<div style="margin:0 40px 0 10px; text-align:right; height:22px;">
	
	
	<select name="graficoscelto" size="1" style="float:left;" onChange="javascript:VerificaIndiceSel();">
                        
							<option value="MI.EQCON.I_SPMIB">FTSE MIB</option>
							
                      </select>
				<p id="statoMercato">
					<strong id="txtStatoMercato">
						
								APERTO
							
					</strong>
				</p>	
			</div>
 		</div>
	</div>
</form>



            
        













<style>
		.qtup {color:#009900;}
		.qtdw {color:#FF6633;}
		.qtnd {color:#000000;}
	</style><table border="0" cellspacing="0" cellpadding="0" class="table_indici">
   <tr>
      <th height="20" width="45%">Indici</th>
      <th width="30%">Valore</th>
      <th style="padding-right:10px;" width="20%">Var %</th>
   </tr>
   <tr align="center" class="light">
      <td height="20" align="left"><a href="/wt/pr/mercati/composizionepanieri&amp;id=1" class="lnkte">FTSE MIB</a></td>
      <td class="right">19.236,14</td>
      <td class="negLast right">
         -5,48%
      </td>
   </tr>
   <tr align="center" class="dark">
      <td height="20" align="left"><a href="/wt/pr/mercati/composizionepanieri&amp;id=3" class="lnkte">FTSE Italia All Share</a></td>
      <td class="right">19.928,88</td>
      <td class="negLast right">
         -5,03%
      </td>
   </tr>
   <tr align="center" class="light">
      <td height="20" align="left"><a href="/wt/pr/mercati/composizionepanieri&amp;id=4" class="lnkte">FTSE Italia Mid Cap</a></td>
      <td class="right">22.851,85</td>
      <td class="negLast right">
        -3,24%
      </td>
   </tr>
   <tr align="center" class="dark">
      <td height="20" align="left"><a href="/wt/pr/mercati/composizionepanieri&amp;id=26" class="lnkte">FTSE Italia Star</a></td>
      <td class="right">10.608,41</td>
      <td class="negLast right">
         -2,66%
      </td>
   </tr>
   <tr align="center" class="light">
      <td height="20" align="left"><a href="/wt/pr/mercati/composizionepanieri&amp;id=16" class="lnkte">FTSE MIB-TAH</a></td>
      <td class="right">n.d.</td>
      <div>
         <td class="ndLast right">n.d.</td>
      </div>
   </tr>
</table>
               


      </div> 
      <div class="hr_foot clear"></div>
    </div>
	
	
	
	
	
	
	
	
	<div id="footerwt">
      <!-- BOX INFORMATIVI -->
      <div class="box">
    <strong>Attenzione:</strong> le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). 
    Se non ti sei ancora registrato il ritardo &egrave; di 20 minuti anche sui mercati italiani.
    Desideri le quotazioni in tempo reale sui mercati di tuo interesse? Aderisci all'opzione <b>Su Misura</b>. 
</div>

<div class="box">
  <b>In questa pagina puoi:<br/></b>
  <ul>
    <li>
      ricercare un titolo del mercato azionario italiano di cui conosci il simbolo o il nome;
    </li>
    <li>
      accedere alla sezione di <b>Ricerca alfabetica</b> dove puoi ricercare un titolo del mercato azionario italiano per iniziale alfabetica;
    </li>
    <li>
      procedere alla ricerca dei titoli azionari combinando diversi criteri di ricerca;
    </li>
    <li>
      procedere alla ricerca di un elenco di titoli che presentano le maggiori oscillazioni in termini di prezzo e volume e conoscerne le principali caratteristiche;
    </li>
    <li>
      conoscere quali titoli del mercato azionario italiano presentano i maggiori scostamenti (in negativo o in positivo) rispetto ai prezzi di riferimento del giorno precedente (sezioni <b>Maggiori rialzi</b>, <b>Maggiori ribassi</b>);
    </li>
    <li>
      conoscere il valore e la variazione percentuale dei principali indici della borsa italiana;
    </li>
    <li>
      consultare in sintesi le ultime notizie dei principali mercati finanziari e accedere alla sezione dove puoi trovarne il dettaglio.
    </li>
  </ul>
</div>

      



<div class="box">  

Per ulteriori informazioni clicca su <a href="javascript:openHelp('PR_QM_AZ_ITA01_1')">
<img src="/img/ret/button_question.gif" width=15 height=14 align=absbottom border=0></a>

</div>
</div>