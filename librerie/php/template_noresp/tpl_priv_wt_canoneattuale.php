<h1>IL MIO PROFILO</h1>
  <div id="bodier" class="unica">
    <!-- AREA DI AGGIORNAMENTO PAGINA -->
    
		
    <div class="hr_foot clear"></div>
    
<!--
   vedi template:
      - IntefacciaUtente
      - isCelesticaProfile
      - tabellaCommissioni
      - PulsantieraTerzoLivello
      - GuidaProfili
      - PopUpSubAddendum
-->






<script type="text/javascript" language="JavaScript"><!--


// In promoArray si trovano i codici servizi che se selezionati causano la selezione automatica dei corrispondenti in linkedArray
var promoArray=new Array(4);
var linkedArray=new Array(4);

promoArray[0]='QUOTES_CME';
promoArray[1]='QUOTES_CBOT';
promoArray[2]='QUOTES_EUREX';
promoArray[3]='QUOTES_LIFFE';

linkedArray[0]='QUOTES_BOOK5_CME';
linkedArray[1]='QUOTES_BOOK5_ECBOT';
linkedArray[2]='QUOTES_BOOK5_EUREX';
linkedArray[3]='QUOTES_BOOK5_LIFFE';

function decheck(idservizio) {
   //alert('decheck it was='+document.statoUtente.elements['c' + idservizio].checked );
   document.statoUtente.elements['c' + idservizio].checked = false;
}

function check(idservizio) {
	//alert('check it was='+document.statoUtente.elements['c' + idservizio].checked );
	document.statoUtente.elements['c' + idservizio].checked = true;
}

function isChecked(idservizio) {
   //alert('isChecked it was='+document.statoUtente.elements['c' + idservizio].checked );
   if (document.statoUtente.elements['c' + idservizio].checked == false)
      return true;
   else
      return false;
}


function testCME(idservizio,codiceservizio,valoreAttualeMyprice,valoreDefaultMyprice,canone,allerta) {
	if (isChecked(idservizio))
		scambiaValori(idservizio,codiceservizio,valoreAttualeMyprice,valoreDefaultMyprice,canone,allerta)
	else
	{
			if (confirm('Cliccando OK accetti le condizioni riportate nel Disclaimer accettazione.'))
				scambiaValori(idservizio,codiceservizio,valoreAttualeMyprice,valoreDefaultMyprice,canone,allerta)
			else
				decheck(idservizio);
		}
}

function copySelect(idservizio, codiceservizio) {

 var i;

  with(document.statoUtente) {		//controlla se fa parte dei servizi aventi servizio collegato

	for (i=0;i<promoArray.length;i++) {		
	 //alert(promoArray.length);
		if(promoArray[i] == codiceservizio)
		{
				var codiceServizioCollegato=linkedArray[i];
				var idServizioCollegato;
				//alert('Stringa_1:' +' ' + i + idServizioCollegato + ' ' + codiceServizioCollegato);
				    

						if ('QUOTES_GERMANIA' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=262;
						}

						if ('QUOTES_SBF' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=60;
						}

						if ('QUOTES_NMF' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=61;
						}

						if ('QUOTES_FTSE' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=103;
						}

						if ('QUOTES_IBEX' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=181;
						}

						if ('QUOTES_NASDAQ' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=62;
						}

						if ('QUOTES_NYSE' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=63;
						}

						if ('QUOTES_CME' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=342;
						}

						if ('QUOTES_BOOK5_CME' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave; (6)';
							idServizioCollegato=502;
						}

						if ('QUOTES_EUREX' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=402;
						}

						if ('QUOTES_BOOK5_EUREX' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave; (6)';
							idServizioCollegato=462;
						}

						if ('QUOTES_CBOT' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=543;
						}

						if ('QUOTES_LIFFE' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=522;
						}

						if ('QUOTES_BOOK5_ECBOT' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave;';
							idServizioCollegato=544;
						}

						if ('QUOTES_BOOK5_LIFFE' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave;';
							idServizioCollegato=542;
						}

						if ('ANALISI_FOND' == codiceServizioCollegato)
						{
							descrvalorepar='No (3)';
							idServizioCollegato=184;
						}

						if ('TRADER_MADE_ANALISI_TECNICA' == codiceServizioCollegato)
						{
							descrvalorepar='Si (4)';
							idServizioCollegato=243;
						}

						if ('TRADER_MADE_ANALISI_TECNICA_USA' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave (4)';
							idServizioCollegato=302;
						}

						if ('TRADER_MADE_ANALISI_TECNICA_EUR' == codiceServizioCollegato)
						{
							descrvalorepar='Si (4)';
							idServizioCollegato=382;
						}

						if ('T3' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave; (4)';
							idServizioCollegato=322;
						}

						if ('T3-EVO' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave; (4)';
							idServizioCollegato=442;
						}

						if ('VISUALTRADER' == codiceServizioCollegato)
						{
							descrvalorepar='Pro';
							idServizioCollegato=612;
						}


					//alert('Stringa_2:' +' ' + i + idServizioCollegato + ' ' + codiceServizioCollegato);
					elements['d' +idServizioCollegato].value=elements['d' +idservizio].value;

					//break;
				}
		} // end for
	} // end with
}

function scambiaValori(idservizio, codiceservizio, valoreAttualeMyprice,valoreDefaultMyprice,canone,allerta) {

//alert('id_in_visione:  2099, id_attuale:  2099');

 var i;

 with(document.statoUtente) {

    for (i=0;i<linkedArray.length;i++)
	{
		//controlla se fa parte dei servizi collegati(subalterni di un altro e gratuiti)
		if(linkedArray[i]==codiceservizio)
		{
			//se già selezionato
			if (isChecked(idservizio))
			{
				alert ("L'elemento selezionato e' attualmente in promozione gratuita, per deselezionarlo cliccare sul livello precedente.");
				check(idservizio);
			}
			else //se non selezionato
			{
				alert ("L'elemento selezionato e' attualmente in promozione gratuita, per selezionarlo cliccare sul livello precedente.");
				decheck(idservizio);
			}
			return;
		}
	}

	for (i=0;i<promoArray.length;i++)
	{
		//controlla se fa parte dei servizi aventi servizio collegato

		if(promoArray[i] == codiceservizio)
		{
				var descrvalorepar='';
				var codiceServizioCollegato=linkedArray[i];
				var idServizioCollegato;

				//se già selezionato
				if (isChecked(idservizio))
				{


						if ('BOOK' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave;';
							idServizioCollegato=64;
						}

						if ('NEWS' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave;';
							idServizioCollegato=54;
						}

						if ('PUSH_BOOK' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave;';
							idServizioCollegato=222;
						}

						if ('QUOTES_CW' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=56;
						}

						if ('QUOTES_LIFFE' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=522;
						}

						if ('QUOTES_ELX' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=621;
						}

						if ('QUOTES_CBOT' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=543;
						}

						if ('QUOTES_BOOK5_ECBOT' == codiceServizioCollegato)
						{
							descrvalorepar='No (6)';
							idServizioCollegato=544;
						}

						if ('QUOTES_BOOK5_LIFFE' == codiceServizioCollegato)
						{
							descrvalorepar='No (6)';
							idServizioCollegato=542;
						}

						if ('QUOTES_EUREX' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=402;
						}

						if ('QUOTES_BOOK5_EUREX' == codiceServizioCollegato)
						{
							descrvalorepar='No (6)';
							idServizioCollegato=462;
						}

						if ('QUOTES_CME' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=342;
						}

						if ('QUOTES_BOOK5_CME' == codiceServizioCollegato)
						{
							descrvalorepar='No (6)';
							idServizioCollegato=502;
						}

						if ('QUOTES_IBEX' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=181;
						}

						if ('QUOTES_FTSE' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=103;
						}

						if ('QUOTES_MOT' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=57;
						}

						if ('QUOTES_ITALIA' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=55;
						}

						if ('QUOTES_NASDAQ' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=62;
						}

						if ('QUOTES_NMF' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=61;
						}

						if ('QUOTES_NYSE' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=63;
						}

						if ('QUOTES_SBF' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=60;
						}

						if ('QUOTES_GERMANIA' == codiceServizioCollegato)
						{
							descrvalorepar='Ritardate';
							idServizioCollegato=262;
						}

						if ('TG' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave;';
							idServizioCollegato=65;
						}

					//alert("descrvalorepar: " + descrvalorepar + ", idServizioCollegato: " + idServizioCollegato);
					elements['c' + idServizioCollegato].checked=false;

					if((elements["isModified" + idServizioCollegato].value) == "true")
						elements["isModified" + idServizioCollegato].value = "false";
					else
						elements["isModified" + idServizioCollegato].value = "true";

					if(((descrvalorepar).toLowerCase()).indexOf("s&igrave;")!=-1)
						elements['t' + idServizioCollegato].value=elements['accento'].value;
					else
						elements['t' + idServizioCollegato].value=descrvalorepar;
				}
				else //se non selezionato
				{





						if ('QUOTES_GERMANIA' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=262;
						}


						if ('QUOTES_SBF' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=60;
						}


						if ('QUOTES_NMF' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=61;
						}


						if ('QUOTES_FTSE' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=103;
						}


						if ('QUOTES_IBEX' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=181;
						}


						if ('QUOTES_NASDAQ' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=62;
						}


						if ('QUOTES_NYSE' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=63;
						}


						if ('QUOTES_CME' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo reale';
							idServizioCollegato=342;
						}


						if ('QUOTES_BOOK5_CME' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave; (6)';
							idServizioCollegato=502;
						}


						if ('QUOTES_EUREX' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=402;
						}


						if ('QUOTES_BOOK5_EUREX' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave; (6)';
							idServizioCollegato=462;
						}


						if ('QUOTES_CBOT' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=543;
						}


						if ('QUOTES_LIFFE' == codiceServizioCollegato)
						{
							descrvalorepar='Tempo Reale';
							idServizioCollegato=522;
						}


						if ('QUOTES_BOOK5_ECBOT' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave;';
							idServizioCollegato=544;
						}


						if ('QUOTES_BOOK5_LIFFE' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave;';
							idServizioCollegato=542;
						}


						if ('ANALISI_FOND' == codiceServizioCollegato)
						{
							descrvalorepar='No (3)';
							idServizioCollegato=184;
						}


						if ('TRADER_MADE_ANALISI_TECNICA' == codiceServizioCollegato)
						{
							descrvalorepar='Si (4)';
							idServizioCollegato=243;
						}


						if ('TRADER_MADE_ANALISI_TECNICA_USA' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave (4)';
							idServizioCollegato=302;
						}


						if ('TRADER_MADE_ANALISI_TECNICA_EUR' == codiceServizioCollegato)
						{
							descrvalorepar='Si (4)';
							idServizioCollegato=382;
						}


						if ('T3' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave; (4)';
							idServizioCollegato=322;
						}


						if ('T3-EVO' == codiceServizioCollegato)
						{
							descrvalorepar='S&igrave; (4)';
							idServizioCollegato=442;
						}


						if ('VISUALTRADER' == codiceServizioCollegato)
						{
							descrvalorepar='Pro';
							idServizioCollegato=612;
						}


					//alert("descrvalorepar: " + descrvalorepar + ", idServizioCollegato: " + idServizioCollegato);
					elements['c' +idServizioCollegato].checked=true;

					if((elements["isModified" + idServizioCollegato].value) == "true")
						elements["isModified" + idServizioCollegato].value = "false";
					else
						elements["isModified" + idServizioCollegato].value = "true";

					//alert('((descrvalorepar).toLowerCase()).indexOf("s&igrave;"): '  + ((descrvalorepar).toLowerCase()).indexOf("s&igrave;"));

					if(((descrvalorepar).toLowerCase()).indexOf("s&igrave;")!=-1)
						elements['t' +idServizioCollegato].value=elements['accento'].value;
					else
						elements['t' +idServizioCollegato].value=descrvalorepar;
				}
				break;
		}



	}

    var valoreattuale = elements['t' + idservizio].value;
    //alert("valoreattuale = " + valoreattuale);
    var fcanone = parseFloat(canone);
	//alert(valoreattuale);
    if(elements["isModified" + idservizio].value == "true") elements["isModified" + idservizio].value = "false";
    else elements["isModified" + idservizio].value = "true";

    //alert ( "isModified" + idservizio + ": " + elements["isModified" + idservizio].value );

    if(valoreattuale == valoreAttualeMyprice) {   //il campo contiene il valore di partenza
      elements['t' + idservizio].value = valoreDefaultMyprice;
		//      elements['d' + idservizio].focus();
      canoneTotale.value = parseFloat(canoneTotale.value) + fcanone;
    }
    else {    //il campo contiene il valore come se il myprice fosse attivato
      elements['t'+idservizio].value = valoreAttualeMyprice;
      canoneTotale.value = parseFloat(canoneTotale.value) - fcanone;
      if(allerta) alert("La disattivazione avra' effetto dal prossimo mese");
    }
  }
}


function chiamaModifica() {
   if(confirm("Sei sicuro di volere modificare il tuo profilo?")) {
      document.statoUtente.action = "/wt/pr/inserimentoModificheProfilo";
      document.statoUtente.submit();
   }
}

function richiamaPagina() {
   with(document.statoUtente) {
      var idprofilo = nomiProfili.options[nomiProfili.selectedIndex].value;
      
          isChangeProfile.value = "false";
      
      //alert(isChangeProfile.value)
      submit();
   }
}

function addendum(codice) {
	//alert("cod="+codice);
	if ((codice=="QUOTES_CME")||(codice=="MP_BOOKCME")) {
		window.open('/wt/accettazionedisclaimer/','PopUpSubAddendum','width=400,height=450,scrollbars=yes');
	}
	else if (codice=="MPFTSE")
	{
		window.open('/wt/accettazionedisclaimer/','PopUpSubAddendum','width=400,height=450,scrollbars=yes');
	}
}
//-->
</script>

<div class="text" style="margin-top:10px">
	<div class="classicLinkNoUnder">
	<img src="/img/ret/button_play_medium_OnWhite.jpg" border="0" width="18" height="18" alt="invia" align="absmiddle" />
	<a href='#' onClick="javascript:window.open('/wt/pr/GuidaProfili/','guida','width=800,height=500,scrollbars=yes,top=100,left=100');">
	<strong>Guida alla modifica del mio profilo</strong>
	</a>
	</div>
</div>


<form name="statoUtente" method="post" action="/wt/pr/modificaprofilo/">
<input name="accento" type="hidden" value="S&igrave;">
<input type="hidden" name="itsl_a" value="1653c03_c38d_5c9176_0a101bc1_1286e275c38_b5aa5b9a" >


	  <div class="hr_foot clear"></div>
      <div class="text" style="width:550px;padding-left:10px">
	  <br/>
	   Promuovi il tuo trading con il profilo giusto, che selezioni ora e puoi modificare in qualsiasi momento:
	  <br/>
	  <ul>

        <li><b>Investitore WeTrade</b></li>

        <li><b>Trader T3</b> profilo <b>Fisso</b></li>
        <li><b>Trader T3</b> profilo <b>Variabile</b></li>

      </ul>
      </div>


	Seleziona Il profilo ideale per visualizzare le condizioni complete.<br><br>

		<div class="box_base" style="background-color:#ffffff;border:0">
			<h3 style="height:30px;">
			<div style="margin-top:5px">
				SERVIZI DEL PROFILO:&nbsp;&nbsp;
		              <select name="nomiProfili" onChange="richiamaPagina()" >			


              <option value="49#0.0" >INVESTITORE </option>

              <option value="779#0.0" >Trader T3 Fisso </option>

              <option value="780#0.0" >Trader T3 Variabile </option>

              <option value="2099#0.0" selected>SPECIAL PRO - attuale</option>

            	</select>&nbsp;SU MISURA
            	</div>
	  		</h3>
		</div>



<table border="0" cellspacing="0" cellpadding="0" class="portafoglio_table exp"> 

  
	       
		<tr>
		    <th scope="col" class="primowt" colspan="6">COMMISSIONI</th>
		</tr>
		


  <tr class="light">
  <td class="primowt">&nbsp;Commissioni (5)<br />&nbsp;generate in un mese</td>
  
  <td class="center"><b>da 0<br> a 400 EUR</b></td>
  
  <td class="center"><b>da 400<br> a 800 EUR</b></td>
  
  <td class="center"><b>da 800<br> a 1500 EUR</b></td>
  
  <td class="center"><b>da 1500<br> a 2000 EUR</b></td>
  
  <td class="ultimo center"><b>oltre 2000<br> EUR</b></td>
  </tr>
  
	<tr class="dark">
	  <td class="primowt">AMERICA - Azionario (*) (USD)</td>
	  	          
	  <td class="right" ><b>20</b></td>
	  	          
	  <td class="right"><b>20</b></td>
	  	          
	  <td class="right"><b>16</b></td>
	  	          
	  <td class="right"><b>16</b></td>
	  	          
	  <td class="ultimo right"><b>12</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">CME - Agricultural futures (USD)</td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="ultimo right"><b>12</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">CME - Derivati Esteri (USD)</td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="ultimo right"><b>9</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">CME - E-mini Nasdaq 100 (USD)</td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="ultimo right"><b>6</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">CME - E-mini S&P500 (USD)</td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="ultimo right"><b>6</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">CME - E-MiniS&P MID 400, E-MiniS&P SMCAP 600</td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="ultimo right"><b>6</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">CME - Energy Futures (USD)</td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="ultimo right"><b>12</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">CME - Eur/USD 3Mesi, Eur/USD FX, E-mini Eur/USD FX (USD)</td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="ultimo right"><b>6</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">CME - Metal Futures (USD)</td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="ultimo right"><b>12</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">CME - Mini Dow Jones (USD)</td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="right"><b>6</b></td>
	  	          
	  <td class="ultimo right"><b>6</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">CME - 5/10/30 Years Treasury (USD)</td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="ultimo right"><b>12</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">eCBOT - Metal Futures (USD)</td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="right"><b>12</b></td>
	  	          
	  <td class="ultimo right"><b>12</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">EUREX - Dax Future (EUR)</td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="ultimo right"><b>9</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">EUREX - Derivati Esteri Eurex (EUR)</td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="ultimo right"><b>5</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">EUREX - EuroBobl, EuroBund, EuroSchatz, EuroBTP Future (EUR)</td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="right"><b>9</b></td>
	  	          
	  <td class="ultimo right"><b>9</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">EURONEXT - LIFFE - CAC 40 Index, AEX Index (EUR)</td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="ultimo right"><b>5</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">EURONEXT - LIFFE - FTSE 100, Long Gilt (GBP)</td>
	  	          
	  <td class="right"><b>7</b></td>
	  	          
	  <td class="right"><b>7</b></td>
	  	          
	  <td class="right"><b>7</b></td>
	  	          
	  <td class="right"><b>7</b></td>
	  	          
	  <td class="ultimo right"><b>7</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">EUROPA - Azionario (2) (EUR)</td>
	  	          
	  <td class="right"><b>20</b></td>
	  	          
	  <td class="right"><b>20</b></td>
	  	          
	  <td class="right"><b>16</b></td>
	  	          
	  <td class="right"><b>16</b></td>
	  	          
	  <td class="ultimo right"><b>12</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">IDEM - FTSE Mib fut (EUR)</td>
	  	          
	  <td class="right"><b>8</b></td>
	  	          
	  <td class="right"><b>8</b></td>
	  	          
	  <td class="right"><b>8</b></td>
	  	          
	  <td class="right"><b>8</b></td>
	  	          
	  <td class="ultimo right"><b>8</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">IDEM - FTSE Mib opt (EUR)</td>
	  	          
	  <td class="right"><b>8</b></td>
	  	          
	  <td class="right"><b>8</b></td>
	  	          
	  <td class="right"><b>8</b></td>
	  	          
	  <td class="right"><b>8</b></td>
	  	          
	  <td class="ultimo right"><b>8</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">IDEM - Mini FTSE Mib fut (EUR)</td>
	  	          
	  <td class="right"><b>4</b></td>
	  	          
	  <td class="right"><b>4</b></td>
	  	          
	  <td class="right"><b>4</b></td>
	  	          
	  <td class="right"><b>4</b></td>
	  	          
	  <td class="ultimo right"><b>4</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">IDEM - Opzioni su Azioni (EUR)</td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="right"><b>5</b></td>
	  	          
	  <td class="ultimo right"><b>5</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">IDEM - Stock Future (EUR)</td>
	  	          
	  <td class="right"><b>4</b></td>
	  	          
	  <td class="right"><b>4</b></td>
	  	          
	  <td class="right"><b>4</b></td>
	  	          
	  <td class="right"><b>4</b></td>
	  	          
	  <td class="ultimo right"><b>4</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">ITALIA - Azionario Italia (EUR)</td>
	  	          
	  <td class="right"><b>0,195% (1)</b></td>
	  	          
	  <td class="right"><b>0,175% (1)</b></td>
	  	          
	  <td class="right"><b>0,155% (1)</b></td>
	  	          
	  <td class="right"><b>0,135% (1)</b></td>
	  	          
	  <td class="ultimo right"><b>0,1% (1)</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">ITALIA - EuroTLX</td>
	  	          
	  <td class="right"><b>0,195% (1)</b></td>
	  	          
	  <td class="right"><b>0,175% (1)</b></td>
	  	          
	  <td class="right"><b>0,155% (1)</b></td>
	  	          
	  <td class="right"><b>0,135% (1)</b></td>
	  	          
	  <td class="ultimo right"><b>0,1% (1)</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">ITALIA - Mercato SEDEX Italia (EUR) </td>
	  	          
	  <td class="right"><b>0,195% (1)</b></td>
	  	          
	  <td class="right"><b>0,195% (1)</b></td>
	  	          
	  <td class="right"><b>0,195% (1)</b></td>
	  	          
	  <td class="right"><b>0,195% (1)</b></td>
	  	          
	  <td class="ultimo right"><b>0,195% (1)</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">ITALIA - Obbligazionario EMOT</td>
	  	          
	  <td class="right"><b>0,195% (1)</b></td>
	  	          
	  <td class="right"><b>0,175% (1)</b></td>
	  	          
	  <td class="right"><b>0,155% (1)</b></td>
	  	          
	  <td class="right"><b>0,135% (1)</b></td>
	  	          
	  <td class="ultimo right"><b>0,1% (1)</b></td>
	  
	</tr>
    
	<tr class="light">
	  <td class="primowt">ITALIA - Obbligazionario MOT (EUR)</td>
	  	          
	  <td class="right"><b>0,195% (1)</b></td>
	  	          
	  <td class="right"><b>0,175% (1)</b></td>
	  	          
	  <td class="right"><b>0,155% (1)</b></td>
	  	          
	  <td class="right"><b>0,135% (1)</b></td>
	  	          
	  <td class="ultimo right"><b>0,1% (1)</b></td>
	  
	</tr>
    
	<tr class="dark">
	  <td class="primowt">REGNO UNITO - Azionario (*) (GBP)</td>
	  	          
	  <td class="right"><b>1250</b></td>
	  	          
	  <td class="right"><b>1250</b></td>
	  	          
	  <td class="right"><b>1000</b></td>
	  	          
	  <td class="right"><b>1000</b></td>
	  	          
	  <td class="ultimo right"><b>750</b></td>
	  
	</tr>
    
  

   
  
  <tr class="light">
    <td class="primowt">&nbsp;Gestione Fondi Emessi da Eurizon Capital SGR (7)


    </td>


    		<td class="ultimo" colspan="5">come da prospetto fondo stesso</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Mercato SEDEX - Emittente Banca IMI (e gi&agrave; Banca Caboto) (****)


    </td>


    		<td class="ultimo" colspan="5">Commissioni non applicate</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Operazioni su Fondi Emessi da Eurizon Capital SGR (7)


    </td>


    		<td class="ultimo" colspan="5">come da prospetto fondo stesso</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Short Selling (***)


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Trading telefonico (sito on)


    </td>


    		<td class="ultimo" colspan="5">pi&ugrave; 5 euro</td>

  </tr>




  
  		<tr>
		    <th scope="col" class="primowt" colspan="6">QUOTES & NEWS</th>
		</tr>

  
  
  
  <tr class="dark">
    <td class="primowt">&nbsp;Book a 5 livelli Az. Italia + CW


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;News Italia, Europa, America


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Push book


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni Covered warrants


    </td>


    		<td class="ultimo" colspan="5">Tempo reale</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Quotazioni EURONEXT - LIFFE


    </td>


    <input type="hidden" name="isModified522" value="false">


    <input type="hidden" name="tipoOper522" value="A">
    <td colspan="2" align="center"><input type="text" name="t522" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c522" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(522,'QUOTES_LIFFE','Ritardate','Tempo Reale','20',false)">

			      <select name="d522" onChange="copySelect('522','QUOTES_LIFFE');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni EuroTLX


    </td>


    		<td class="ultimo" colspan="5">Tempo reale</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Quotazioni Futures eCbot


    </td>


    <input type="hidden" name="isModified543" value="false">


    <input type="hidden" name="tipoOper543" value="A">
    <td colspan="2" align="center"><input type="text" name="t543" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c543" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(543,'QUOTES_CBOT','Ritardate','Tempo Reale','20',false)">

			      <select name="d543" onChange="copySelect('543','QUOTES_CBOT');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni Futures eCbot Book a 5 livelli


    </td>


    <input type="hidden" name="isModified544" value="false">


    <input type="hidden" name="tipoOper544" value="A">
    <td colspan="2" align="center"><input type="text" name="t544" size="15" value="No (6)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c544" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(544,'QUOTES_BOOK5_ECBOT','No (6)','S&igrave;','20',false)">

				  <input type="hidden" name="d544" value="1">
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Quotazioni Futures EURONEXT - LIFFE Book a 5 livelli


    </td>


    <input type="hidden" name="isModified542" value="false">


    <input type="hidden" name="tipoOper542" value="A">
    <td colspan="2" align="center"><input type="text" name="t542" size="15" value="No (6)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c542" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(542,'QUOTES_BOOK5_LIFFE','No (6)','S&igrave;','20',false)">

				  <input type="hidden" name="d542" value="1">
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni Futures EUROPA (EUREX)


    </td>


    <input type="hidden" name="isModified402" value="false">


    <input type="hidden" name="tipoOper402" value="A">
    <td colspan="2" align="center"><input type="text" name="t402" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c402" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(402,'QUOTES_EUREX','Ritardate','Tempo Reale','20',false)">

			      <select name="d402" onChange="copySelect('402','QUOTES_EUREX');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Quotazioni Futures EUROPA (EUREX) Book a 5 livelli


    </td>


    <input type="hidden" name="isModified462" value="false">


    <input type="hidden" name="tipoOper462" value="A">
    <td colspan="2" align="center"><input type="text" name="t462" size="15" value="No (6)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c462" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(462,'QUOTES_BOOK5_EUREX','No (6)','S&igrave; (6)','20',false)">

				  <input type="hidden" name="d462" value="1">
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni Futures USA (CME)


      <a href="javascript:addendum('QUOTES_CME');"> <strong>Disclaimer accettazione</strong></a></div>

    </td>


    <input type="hidden" name="isModified342" value="false">


    <input type="hidden" name="tipoOper342" value="A">
    <td colspan="2" align="center"><input type="text" name="t342" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c342" class="SfondoFormRicerca2"

            	onclick="javascript:testCME(342,'QUOTES_CME','Ritardate','Tempo reale','20',false)">

			      <select name="d342" onChange="copySelect('342','QUOTES_CME');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Quotazioni Futures USA (CME) Book a 5 livelli tempo reale


    </td>


    <input type="hidden" name="isModified502" value="false">


    <input type="hidden" name="tipoOper502" value="A">
    <td colspan="2" align="center"><input type="text" name="t502" size="15" value="No (6)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c502" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(502,'QUOTES_BOOK5_CME','No (6)','S&igrave; (6)','20',false)">

				  <input type="hidden" name="d502" value="1">
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni IBEX (**)


    </td>


    <input type="hidden" name="isModified181" value="false">


    <input type="hidden" name="tipoOper181" value="A">
    <td colspan="2" align="center"><input type="text" name="t181" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">10 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c181" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(181,'QUOTES_IBEX','Ritardate','Tempo Reale','10',false)">

			      <select name="d181" onChange="copySelect('181','QUOTES_IBEX');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Quotazioni Londra (LSE) (**)


    </td>


    <input type="hidden" name="isModified103" value="false">


    <input type="hidden" name="tipoOper103" value="A">
    <td colspan="2" align="center"><input type="text" name="t103" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">10 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c103" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(103,'QUOTES_FTSE','Ritardate','Tempo Reale','10',false)">

			      <select name="d103" onChange="copySelect('103','QUOTES_FTSE');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni MOT, Retlots Exchange


    </td>


    		<td class="ultimo" colspan="5">Tempo reale</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Quotazioni MTA + Nuovo Mercato


    </td>


    		<td class="ultimo" colspan="5">Tempo reale</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni NASDAQ (**)


    </td>


    <input type="hidden" name="isModified62" value="false">


    <input type="hidden" name="tipoOper62" value="A">
    <td colspan="2" align="center"><input type="text" name="t62" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">5 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c62" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(62,'QUOTES_NASDAQ','Ritardate','Tempo reale','5',false)">

			      <select name="d62" onChange="copySelect('62','QUOTES_NASDAQ');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Quotazioni Nouveau march&egrave; (**)


    </td>


    <input type="hidden" name="isModified61" value="false">


    <input type="hidden" name="tipoOper61" value="A">
    <td colspan="2" align="center"><input type="text" name="t61" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">10 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c61" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(61,'QUOTES_NMF','Ritardate','Tempo reale','10',false)">

			      <select name="d61" onChange="copySelect('61','QUOTES_NMF');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni NYSE (**)


    </td>


    <input type="hidden" name="isModified63" value="false">


    <input type="hidden" name="tipoOper63" value="A">
    <td colspan="2" align="center"><input type="text" name="t63" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">5 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c63" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(63,'QUOTES_NYSE','Ritardate','Tempo reale','5',false)">

			      <select name="d63" onChange="copySelect('63','QUOTES_NYSE');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Quotazioni SBF, BEL, AEX (**)


    </td>


    <input type="hidden" name="isModified60" value="false">


    <input type="hidden" name="tipoOper60" value="A">
    <td colspan="2" align="center"><input type="text" name="t60" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">10 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c60" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(60,'QUOTES_SBF','Ritardate','Tempo reale','10',false)">

			      <select name="d60" onChange="copySelect('60','QUOTES_SBF');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Quotazioni XETRA Level 1 (**)


    </td>


    <input type="hidden" name="isModified262" value="false">


    <input type="hidden" name="tipoOper262" value="A">
    <td colspan="2" align="center"><input type="text" name="t262" size="15" value="Ritardate" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c262" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(262,'QUOTES_GERMANIA','Ritardate','Tempo reale','20',false)">

			      <select name="d262" onChange="copySelect('262','QUOTES_GERMANIA');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;TG on line (mercati in diretta)


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>






  		<tr>
		    <th scope="col" class="primowt" colspan="6">INFORMATIVA</th>
		</tr>

  
  
  
  <tr class="light">
    <td class="primowt">&nbsp;Analisi Fondamentale, Previsionale, Comparativa


    </td>


    <input type="hidden" name="isModified184" value="false">


    <input type="hidden" name="tipoOper184" value="S">
    <td colspan="2" align="center"><input type="text" name="t184" size="15" value="No (3)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">6 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">

      <input type="checkbox" name="c184" class="SfondoFormRicerca2" onclick="javascript:document.statoUtente.c184.checked=true" checked="checked">

    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Grafici intraday


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Grafici storici


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Profilo Societario


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>




  		<tr>
		    <th scope="col" class="primowt" colspan="6">RICERCA</th>
		</tr>

  
  
  
  <tr class="light">
    <td class="primowt">&nbsp;Analisi Fondamentale Banca Imi


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Analisi Tecnica Banca Imi


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;TraderMade Analisi Tecnica Europa


    </td>


    <input type="hidden" name="isModified382" value="false">


    <input type="hidden" name="tipoOper382" value="A">
    <td colspan="2" align="center"><input type="text" name="t382" size="15" value="No (4)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">3 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c382" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(382,'TRADER_MADE_ANALISI_TECNICA_EUR','No (4)','Si (4)','3',false)">

			      <select name="d382" onChange="copySelect('382','TRADER_MADE_ANALISI_TECNICA_EUR');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;TraderMade analisi tecnica Italia


    </td>


    <input type="hidden" name="isModified243" value="false">


    <input type="hidden" name="tipoOper243" value="A">
    <td colspan="2" align="center"><input type="text" name="t243" size="15" value="No (4)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">3 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c243" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(243,'TRADER_MADE_ANALISI_TECNICA','No (4)','Si (4)','3',false)">

			      <select name="d243" onChange="copySelect('243','TRADER_MADE_ANALISI_TECNICA');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;TraderMade Analisi Tecnica Italia PLUS


    </td>


    		<td class="ultimo" colspan="5">No (4)</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;TraderMade analisi tecnica USA


    </td>


    <input type="hidden" name="isModified302" value="false">


    <input type="hidden" name="tipoOper302" value="A">
    <td colspan="2" align="center"><input type="text" name="t302" size="15" value="No (4)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">3 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c302" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(302,'TRADER_MADE_ANALISI_TECNICA_USA','No (4)','S&igrave (4)','3',false)">

			      <select name="d302" onChange="copySelect('302','TRADER_MADE_ANALISI_TECNICA_USA');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;TraderMade notiziario intraday


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>






		<tr>
		    <th scope="col" class="primowt" colspan="6">TOOLS</th>
		</tr>
  
  
  
  <tr class="dark">
    <td class="primowt">&nbsp;Asset allocation tool


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;<b>T3 EVOlution</b>


    </td>


    <input type="hidden" name="isModified442" value="false">


    <input type="hidden" name="tipoOper442" value="A">
    <td colspan="2" align="center"><input type="text" name="t442" size="15" value="No (4)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">20 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c442" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(442,'T3-EVO','No (4)','S&igrave; (4)','20',false)">

			      <select name="d442" onChange="copySelect('442','T3-EVO');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;<b>Utilizzo piattaforma</b>


    </td>


    <input type="hidden" name="isModified322" value="false">


    <input type="hidden" name="tipoOper322" value="S">
    <td colspan="2" align="center"><input type="text" name="t322" size="15" value="S&igrave; (4)" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">30 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">

      <input type="checkbox" name="c322" class="SfondoFormRicerca2" onclick="javascript:scambiaValori(322,'T3','No (4)','S&igrave; (4)','30',true)" checked="checked">

    </td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Impostazione avvisi su titoli e indici con SMS/mail


    </td>


    		<td class="ultimo" colspan="5">max 10</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Ordini condizionati


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Ordini stop loss e take profit


    </td>


    		<td class="ultimo" colspan="5">S&igrave;</td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;Portafogli simulati personalizzati


    </td>


    		<td class="ultimo" colspan="5">max 10</td>

  </tr>

  <tr class="light">
    <td class="primowt">&nbsp;Visual Trader


    </td>


    <input type="hidden" name="isModified612" value="false">


    <input type="hidden" name="tipoOper612" value="A">
    <td colspan="2" align="center"><input type="text" name="t612" size="15" value="Versione Light" onfocus="javascript:this.blur()" readonly="readonly"></td>
    <td colspan="1" align="center">5 Euro&nbsp;</td>
    <td class="ultimo" colspan="2" valign="middle">
      <input type="checkbox" name="c612" class="SfondoFormRicerca2"

            	onclick="javascript:scambiaValori(612,'VISUALTRADER','Versione Light','Pro','5',false)">

			      <select name="d612" onChange="copySelect('612','VISUALTRADER');">
			        <option value="1">Attiva da subito</option>
			        <option value="0">Attiva da fine mese</option>
			      </select>
			
    </td>

  </tr>

  <tr class="dark">
    <td class="primowt">&nbsp;WatchLists


    </td>


    		<td class="ultimo" colspan="5">Max 10</td>

  </tr>








<tr>
  <th scope="col" class="primowt" colspan="6"></th>
</tr>
<!-- canone -->

		<tr class="dark">
			<td class="primowt"><strong>Canone profilo attuale:</strong></td>
			<td class="ultimo" colspan="5"><strong>30</strong></td>
		</tr>
		 
		<tr class="light">
			<td class="primowt"><strong>Canone nuovo profilo:</strong></td>
			<td class="ultimo" colspan="5"><strong><input type="text" name="canoneTotale" size="3" value="30" onfocus="javascript:this.blur()" readonly="readonly"></strong></td>
		</tr>
        <input type="hidden" name="dataInizioModifica" value="-1">

</table>
     
<div style="padding-top:5px;">
		 		   <div class="movimenti_titoli">
		 		 		 		 <div class="inside" style="height:20px !important;">
		 		 		 		 		 <div id="barraLink">
		 		 		 		 		 		 <div class="classicLink indietro">

		 		 		 		 		 		 		 <a href="/wt/pr/GestioneRapporto">Indietro</a>
		 		 		 		 		 		 </div> 
		 		 		 		 		 		 
		 		 		 		 		 		 <div class="classicLink abbandona">
		 		 		 		 		 		 		 <a href="/wt/pr/GestioneRapporto">Abbandona</a>
		 		 		 		 		 		 </div>
		 		 		 		 		 		 
		 		 		 		 		 		 <div class="avanti">
		 		 		 		 		 		 		 <div class="button_green">
		           		 		 		 		 		 <div style="width:40px;"><a href="javascript:InviaDati();">Esegui</a></div>

		           		   		 		 		 		 <div class="right"></div>
		           		   		 		 		 </div>
		 		 		 		 		 		 </div>
		 		 		    		 		 </div>
		 		 		   		 </div>
		 		 		 </div>		 		   		 
		 		 </div>

<input type="hidden" name="brucia" value="no">

<input type="hidden" name="idProfiloAttuale" value="2099">
<input type="hidden" name="canoneAttuale" value="0.0">
<input type="hidden" name="isVisibileAttuale" value="true">

<input type="hidden" name="isChangeProfile" value="false">
<input type="hidden" name="idNuovoProfilo" value="2099">

<input type="hidden" name="strIDServiziMypriceDelProfilo" value="262-60-61-103-181-62-63-342-502-402-462-543-522-544-542-184-243-302-382-322-442-612-">
<input type="hidden" name="strIDProfiliMypriceDelProfilo" value="679-54-55-298-299-56-57-960-3480-1659-2819-4061-3780-4062-4060-300-659-719-1099-820-3600-4800-">
<input type="hidden" name="strDateInizio" value="522,null-543,null-544,null-542,null-402,null-462,null-342,null-502,null-181,null-103,null-62,null-61,null-63,null-60,null-262,null-184,20010424000000-382,null-243,null-302,null-442,null-322,20040324100714-612,null-">
<input type="hidden" name="strCodiciMypriceDelProfilo" value="QUOTES_GERMANIA-QUOTES_SBF-QUOTES_NMF-QUOTES_FTSE-QUOTES_IBEX-QUOTES_NASDAQ-QUOTES_NYSE-QUOTES_CME-QUOTES_BOOK5_CME-QUOTES_EUREX-QUOTES_BOOK5_EUREX-QUOTES_CBOT-QUOTES_LIFFE-QUOTES_BOOK5_ECBOT-QUOTES_BOOK5_LIFFE-ANALISI_FOND-TRADER_MADE_ANALISI_TECNICA-TRADER_MADE_ANALISI_TECNICA_USA-TRADER_MADE_ANALISI_TECNICA_EUR-T3-T3-EVO-VISUALTRADER-">
</table>
</form>







<p>
<div class="text">

  		 	 (1) - Con Min 2,75 EUR e Max 19,5 EUR. Mercato EuroMot con Min 7,75 EUR e Max 24,5 EUR.
  		 	
  		
  		  <!--  &nbsp;Mercato RetLots Exchange con Min 2,75 EUR.-->
  		
</div>
</p>

<p>
<div class="text">
(2) - Al momento l'operativit&agrave; e la visualizzazione delle quotazioni sono consentite solo sui titoli appartenenti agli indici FTSE100, IBEX 35, BEL20, AEX 25.
</div>
</p>

<p>
<div class="text">
(3) - In promozione gratuita.
</div>
</p>

<p>
<div class="text">
(4) - In promozione gratuita
      		 
      		 per i primi 2 mesi dalla data di anagrafamento.
      		 
</div>
</p>

<p>
<div class="text">
(5) - Si riferiscono alla somma delle commissioni generate su tutti i mercati.
</div>
</p>

<p>
<div class="text">
(6) - In promozione gratuita per i clienti che hanno gi&agrave; acquistato le quotazioni in tempo reale.
</div>
</p>

<p>
<div class="text">

      	(7) - Su tutti i fondi emessi da Eurizon Capital sgr, viene retrocessa a WeTrade una commissione di collocamento compresa fra il 76% ed il 90% della commissione di gestione a seconda della tipologia del fondo &#8722; cos&igrave; come indicato dal prospetto di ogni singolo fondo &#8722;  a titolo di remunerazione per il servizio di collocamento e le connesse attivit&agrave; consistenti nella valorizzazione dell&#8217;investimento, tempo per tempo, e relativa comunicazione.
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Su tutti i fondi emessi da Amex viene retrocessa a WeTrade una commissione di collocamento compresa fra il 40% ed il 60% della commissione di gestione a seconda della tipologia del fondo &#8722; cos&igrave; come indicato dal prospetto di ogni singolo fondo &#8722;  a titolo di remunerazione per il servizio di collocamento e le connesse attivit&agrave; consistenti nella valorizzazione dell&#8217; investimento, tempo per tempo, e relativa comunicazione.</p>
 
</div>
</p>

<p>
<div class="text">
(*) - Da aggiungere Tassa di Borsa 5 per mille su azionario Regno Unito; Il controvalore Euro verr&agrave; calcolato di volta in volta applicando un cambio domanda/offerta (bid/ask) pubblicato sul sito e sulla piattaforma T3 nella sezione portafoglio. 
      		Tale cambio potr&agrave; subire variazioni anche durante la seduta borsistica in caso di forti oscillazioni sul mercato.
</div>
</p>

<p>
<div class="text">
(**) - Maggiorazione di 5 Eur/mese se ususfruite in tecnologia push (utenti con accesso alla piattaforma T&sup3;).</div>
</p>

<p>
<div class="text">
(***) - Penale di 100 EUR per tutti i titoli del mercato Sedex, di 50 EUR per tutti i titoli del mercato MTA che non partecipano alla fase TAH ed ETFplus (ore 17.20) e di 150 EUR (pi&ugrave; il 2 per mille del controvalore) su tutti i titoli dell'MTA che partecipano alla fase TAH, MOT e EuroTLX e per tutti i titoli azionari esteri per mancata chiusura intraday entro l'orario previsto.
</div>
</p>
<p>
<div class="text">
(****) - Su tutti gli strumenti Sedex emessi da Banca IMI su cui non sono applicate le commissioni, WeTrade percepisce dall'emittente un incentivo 
pari a 1 Euro per ciascun ordine trasmesso ed eseguito che abbia un controvalore minimo di 100 Euro.
</div>
</p>
    <div class="hr_foot clear"></div>    
  </div>
  
  <!-- footerwt -->
    <div id="footerwt">
    
    

      <!-- AREA INFORMAZIONI E FEEDBACK -->
      
    </div>

</body>
</html>
