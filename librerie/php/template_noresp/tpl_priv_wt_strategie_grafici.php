<h1>Grafici Interattivi</h1>
<div id="bodier" class="grafici">
    <!-- AREA DI AGGIORNAMENTO PAGINA -->     
    			



		
    <div class="hr_foot clear2"></div>
      
      







 
<div id="graficiInterattivi" class="">

    <div id="boxSX" class="box_base">
    <h3>PERSONALIZZA UN GRAFICO</h3>
	<div style="width:210px; float:left;" >
    	<form NAME="saveForm" METHOD="post" ACTION="/wt/strategie/grafici">
    	<!-- tabella sx -->
	    
		<div style="width:210px; height:10px; float:left;">&nbsp;</div>
		
		<!-- prima riga -->
				    
		    <div style="width:60px; height:10px; float:left;">&nbsp;</div>
  			<div style="float:left;">
  	  			<div class="button_green">
			      <div><a href="javascript:ApriPopUp(1)">cerca titolo</a></div>
			      <div class="right"></div>
			    </div>
  	  		</div>
  	  		<div style="width:210px; height:10px; float:left;">&nbsp;</div>
	  			
		
    		
    		<!-- seconda riga -->
    		<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="width:80px; float:left; font-weight:normal;">&nbsp;Periodo:</div>
  			<div style=" float: right; padding-right:5px; width:107px">
  				<select name="Intervallo" onChange="javascript:valorizzaDate(1)">
				  <option value="1S" >1 settimana</option>
				  <option value="2S" >2 settimane</option>
				  <option value="1M" >1 mese</option>
				  <option value="6M" SELECTED>6 mesi</option>
				  <option value="1A" >1 anno</option>
				  <option value="IA" >da inizio anno</option>
				  <option value="SE" >seleziona le date</option>
				</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- terza riga -->
			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="float: left; font-weight: normal; width: 40px;">&nbsp;Dal:</div>
  			<div style="float: right; padding-right:5px;">
  				<select name="GGstart" onFocus="javascript:SelezioneDate(1)">
		 			<option value='01' >01</option>
		 			<option value='02' >02</option>
		 			<option value='03' >03</option>
		 			<option value='04' >04</option>
		 			<option value='05' >05</option>
		 			<option value='06' SELECTED>06</option>
		 			<option value='07' >07</option>
		 			<option value='08' >08</option>
		 			<option value='09' >09</option>
		 			<option value='10' >10</option>
		 			<option value='11' >11</option>
		 			<option value='12' >12</option>
		 			<option value='13' >13</option>
		 			<option value='14' >14</option>
		 			<option value='15' >15</option>
		 			<option value='16' >16</option>
		 			<option value='17' >17</option>
		 			<option value='18' >18</option>
		 			<option value='19' >19</option>
		 			<option value='20' >20</option>
		 			<option value='21' >21</option>
		 			<option value='22' >22</option>
		 			<option value='23' >23</option>
		 			<option value='24' >24</option>
		 			<option value='25' >25</option>
		 			<option value='26' >26</option>
		 			<option value='27' >27</option>
		 			<option value='28' >28</option>
		 			<option value='29' >29</option>
		 			<option value='30' >30</option>
		 			<option value='31' >31</option> 
		 		</select>
				&nbsp;
				<select name="MMstart" onFocus="javascript:SelezioneDate(1)">
		 			<option value='01' >Gen</option>
		 			<option value='02' >Feb</option>
		 			<option value='03' >Mar</option>
		 			<option value='04' >Apr</option>
		 			<option value='05' >Mag</option>
		 			<option value='06' >Giu</option>
		 			<option value='07' >Lug</option>
		 			<option value='08' >Ago</option>
		 			<option value='09' >Set</option>
		 			<option value='10' >Ott</option>
		 			<option value='11' SELECTED>Nov</option>
		 			<option value='12' >Dic</option> 
		 		</select>
				&nbsp;
				<select name="AAstart" onFocus="javascript:SelezioneDate(1)">
				
		 			<option value="1995" >1995</option> 
		 		
		 			<option value="1996" >1996</option> 
		 		
		 			<option value="1997" >1997</option> 
		 		
		 			<option value="1998" >1998</option> 
		 		
		 			<option value="1999" >1999</option> 
		 		
		 			<option value="2000" >2000</option> 
		 		
		 			<option value="2001" >2001</option> 
		 		
		 			<option value="2002" >2002</option> 
		 		
		 			<option value="2003" >2003</option> 
		 		
		 			<option value="2004" >2004</option> 
		 		
		 			<option value="2005" >2005</option> 
		 		
		 			<option value="2006" >2006</option> 
		 		
		 			<option value="2007" >2007</option> 
		 		
		 			<option value="2008" >2008</option> 
		 		
		 			<option value="2009" selected>2009</option> 
		 		
		 			<option value="2010" >2010</option> 
		 		
		 		</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- quarta riga -->
			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="float: left; font-weight: normal; width: 40px;">&nbsp;Al:</div>
  			<div style="float: right; padding-right:5px;">  			
				<select name="GGend" onFocus="javascript:SelezioneDate(1)">
		 			<option value='01' >01</option>
		 			<option value='02' >02</option>
		 			<option value='03' >03</option>
		 			<option value='04' >04</option>
		 			<option value='05' >05</option>
		 			<option value='06' SELECTED>06</option>
		 			<option value='07' >07</option>
		 			<option value='08' >08</option>
		 			<option value='09' >09</option>
		 			<option value='10' >10</option>
		 			<option value='11' >11</option>
		 			<option value='12' >12</option>
		 			<option value='13' >13</option>
		 			<option value='14' >14</option>
		 			<option value='15' >15</option>
		 			<option value='16' >16</option>
		 			<option value='17' >17</option>
		 			<option value='18' >18</option>
		 			<option value='19' >19</option>
		 			<option value='20' >20</option>
		 			<option value='21' >21</option>
		 			<option value='22' >22</option>
		 			<option value='23' >23</option>
		 			<option value='24' >24</option>
		 			<option value='25' >25</option>
		 			<option value='26' >26</option>
		 			<option value='27' >27</option>
		 			<option value='28' >28</option>
		 			<option value='29' >29</option>
		 			<option value='30' >30</option>
		 			<option value='31' >31</option>
		 		</select>
				&nbsp;
				<select name="MMend" onFocus="javascript:SelezioneDate(1)">
		 			<option value='01' >Gen</option>
		 			<option value='02' >Feb</option>
		 			<option value='03' >Mar</option>
		 			<option value='04' >Apr</option>
		 			<option value='05' SELECTED>Mag</option>
		 			<option value='06' >Giu</option>
		 			<option value='07' >Lug</option>
		 			<option value='08' >Ago</option>
		 			<option value='09' >Set</option>
		 			<option value='10' >Ott</option>
		 			<option value='11' >Nov</option>
		 			<option value='12' >Dic</option>
		 		</select>
				&nbsp;
				<select name="AAend" onFocus="javascript:SelezioneDate(1)">
		 		
		 			<option value='1995' >1995</option> 
		 		
		 			<option value='1996' >1996</option> 
		 		
		 			<option value='1997' >1997</option> 
		 		
		 			<option value='1998' >1998</option> 
		 		
		 			<option value='1999' >1999</option> 
		 		
		 			<option value='2000' >2000</option> 
		 		
		 			<option value='2001' >2001</option> 
		 		
		 			<option value='2002' >2002</option> 
		 		
		 			<option value='2003' >2003</option> 
		 		
		 			<option value='2004' >2004</option> 
		 		
		 			<option value='2005' >2005</option> 
		 		
		 			<option value='2006' >2006</option> 
		 		
		 			<option value='2007' >2007</option> 
		 		
		 			<option value='2008' >2008</option> 
		 		
		 			<option value='2009' >2009</option> 
		 		
		 			<option value='2010' SELECTED>2010</option> 
		 		 
		 		</select>
  			</div>
  			<div class="filettoform ">&nbsp;</div>
  			
  			<!-- quinta riga -->
    		<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="width:80px; float:left; font-weight:normal;">&nbsp;Frequenza:</div>
  			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style=" float: right; padding-right:5px; width:105px">
  				<select name="Frequenza" onChange="javascript:valorizzaFrequenza(1)" class="singleline">
				  <option value="B" SELECTED>giornaliera</option>
				  <option value="W" >settimanale</option>
				  <option value="M" >mensile</option>
				</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- sesta riga -->
    		<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="width:80px; float:left; font-weight:normal;">&nbsp;Tipo grafico:</div>
  			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="float: right; padding-right:5px; width:105px">
  				<select name="TipoDiGrafico" class="singleline">
				  <option value="1" >lineare</option>
				  <option value="16" >a barre</option>
				  <option value="4" >a candele</option>
				  <option value="2" >istog.</option>
				  <option value="8" >bullets</option>
				  <option value="64" >filled</option>
				  <option value="512" >ist. trasp.</option>
				</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- settima riga -->
    		<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="width:80px; float:left; font-weight:normal;">&nbsp;Media Mobile 1:</div>
  			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="float: right; padding-right:5px; width:105px">
  				<select name="MediaMobile" onChange="javascript:document.saveForm.TipoMediaMobile[0].checked = 1" class="singleline">
				  <option value="0" SELECTED>disabilitate</option>
				  <option value="5" >5 giorni</option>
				  <option value="21" >21 giorni</option>
				  <option value="55" >55 giorni</option>
				  <option value="200" >200 giorni</option>
				</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- ottava riga -->
    		<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="width:80px; float:left; font-weight:normal;">&nbsp;Tipo MM1:</div>
  			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="float: right; padding-right:5px; width:105px">
  				<select name="TipoMediaMobile" class="singleline">
			  		<option value="0" SELECTED>Semplice</option>
			  	</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- nona riga -->
    		<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="width:80px; float:left; font-weight:normal;">&nbsp;Media Mobile 2:</div>
  			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="float: right; padding-right:5px; width:105px">
  				<select name="MediaMobile2" onChange="javascript:document.saveForm.TipoMediaMobile2[0].checked = 1" class="singleline">
			  		<option value="0" SELECTED>disabilitate</option>
			  		<option value="5" >5 giorni</option>
			  		<option value="21" >21 giorni</option>
			  		<option value="55" >55 giorni</option>
			  		<option value="200" >200 giorni</option>
				</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- decima riga -->
    		<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="width:80px; float:left; font-weight:normal;">&nbsp;Tipo MM2:</div>
  			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="float: right; padding-right:5px; width:105px">
  				<select name="TipoMediaMobile2" class="singleline">
			  		<option value="0" SELECTED>Semplice</option>
		  		</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- undicesima riga -->
    		<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="width:80px; float:left; font-weight:normal;">&nbsp;Indicatore 1:</div>
  			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="float: right; padding-right:5px; width:105px">
  				<select name="Indicatore1" class="singleline">
				  <option value="0" SELECTED>disabilitato</option>
				  <option value="1" >Med.Mob. Lin</option>
				  <option value="2" >Med.Mob. Ari</option>
				  <option value="3" >Med.Mob. Exp</option>
				  <option value="4" >RSI Straight</option>
				  <option value="5" >RSI Blended</option>
				  <option value="6" >Diff.Tit.Med.</option>
				  <option value="7" >D_Mom.(diff)</option>
				  <option value="8" >R_Mom.(rati)</option>
				  <option value="9" >P_Mom.(perc)</option>
				  <option value="10" >ExpSmooth.</option>
				  <option value="11" >MACD</option>
				  <option value="12" >Stoca.</option>
				  <option value="13" >OBV</option>
				  <option value="14" >Boll.Band(hi)</option>
				  <option value="15" >Boll.Band(lw)</option>
				  <option value="16" >PERCB</option>
				  <option value="17" >Vol. %</option>
				</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- dodicesima riga -->
    		<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="width:80px; float:left; font-weight:normal;">&nbsp;Indicatore 2:</div>
  			<div style="width:10px; float:left;">&nbsp;</div>
  			<div style="float: right; padding-right:5px; width:105px">
  				<select name="Indicatore2" class="singleline"> <!-- OnChange="javascript:VolumiVSindicatore2('2')";  -->
				  <option value="0" SELECTED>disabilitato</option>
				  <option value="1" >Med.Mob. Lin</option>
				  <option value="2" >Med.Mob. Ari</option>
				  <option value="3" >Med.Mob. Exp</option>
				  <option value="4" >RSI Straight</option>
				  <option value="5" >RSI Blended</option>
				  <option value="6" >Diff.Tit.Med.</option>
				  <option value="7" >D_Mom.(diff)</option>
				  <option value="8" >R_Mom.(rati)</option>
				  <option value="9" >P_Mom.(perc)</option>
				  <option value="10" >ExpSmooth.</option>
				  <option value="11" >MACD</option>
				  <option value="12" >Stoca.</option>
				  <option value="13" >OBV</option>
				  <option value="14" >Boll.Band(hi)</option>
				  <option value="15" >Boll.Band(lw)</option>
				  <option value="16" >PERCB</option>
				  <option value="17" >Vol. %</option>
				</select>
			</div>
			<div class="filettoform ">&nbsp;</div>
			
			<!-- tredicesima riga -->
			<div style="width:100px; height:10px; float:left;">&nbsp;</div>
  			<div style="float: right; padding-right:5px; width:105px">
  	  			<div class="button_green" id="floatRight">
			      <div><a href="javascript:VisualizzaParametriSingoloGrafico();">esegui</a></div>
			      <div class="right"></div>
			    </div>
  	  		</div>
  	  		<div style="width:210px; height:10px; float:left;">&nbsp;</div>
  	  		<INPUT TYPE=HIDDEN NAME="FormSelezionato" size="1" value="">
			
			
				<input type="hidden" name="borsa1" value="">
				<input type="hidden" name="mercato1" value="">
				<input type="hidden" name="stockcode1" value="">
			
		
    
    
    </form> 
	</div>
	
	</div>
	
	<div id="boxDX">
	<h4><div>GRAFICO INTERATTIVO</div></h4>
	<div class="box_base" style="float:left;margin-bottom:0;border: 1px solid #6F8F0A;">
    
         <!-- tabella dx -->
	    
		 <div style="margin:10px 0;">
			 
				<img src="/img/ret/no_grafico.gif"  border="0">
			 
		</div>
		
		<!-- Almeno un titolo -->
		<form name="saveForm3" method="post" action="/wt/strategie/grafici">
		
		
		
		<INPUT TYPE=HIDDEN NAME="contatore" size="1" value="0">
		<INPUT TYPE=HIDDEN NAME="FormSelezionato" size="100" value="">
		
		<INPUT TYPE=HIDDEN NAME="Intervallo" size="20" value="6M">
		<INPUT TYPE=HIDDEN NAME="GGstart" size="20" value="06">
		<INPUT TYPE=HIDDEN NAME="MMstart" size="20" value="11">
		<INPUT TYPE=HIDDEN NAME="AAstart" size="20" value="2009">
		<INPUT TYPE=HIDDEN NAME="GGend" size="20" value="06">
		<INPUT TYPE=HIDDEN NAME="MMend" size="20" value="05">
		<INPUT TYPE=HIDDEN NAME="AAend" size="20" value="2010">
		<INPUT TYPE=HIDDEN NAME="Frequenza" size="20" value="B">
	   </form>
	   
	</div>
	
	<div class="clear"></div>
	<div class="box_base" style="float:left;width:476px;">
	 	<h3>CONFRONTA I TITOLI</h3>
	
		<form NAME="saveForm2" METHOD="post" ACTION="/wt/strategie/grafici">

		<div style="padding: 15px 0pt 5px 5px; float: left;">
			<div style="width:60px; float:left;">Periodo:</div>
			<div style="width:160px; float:left;">
			  <select name="Intervallo" onChange="javascript:valorizzaDate(2);" style="width:165px;">
		  		<option value="1S" >1 settimana</option>
			  	<option value="2S" >2 settimane</option>
			  	<option value="1M" >1 mese</option>
			  	<option value="6M" SELECTED>6 mesi</option>
			  	<option value="1A" >1 anno</option>
			  	<option value="IA" >da inizio anno</option>
			  	<option value="SE" >seleziona le date</option>
			  </select>
			</div>
	
			<div style="width: 70px; float: left; margin-left: 10px;">Frequenza:</div>
			<div style="width:160px; float:left;">
			  <select name="Frequenza" onChange="javascript:valorizzaFrequenza(2);" style="width:165px;">
				<option value="B" SELECTED>giornaliera</option>
				<option value="W" >settimanale</option>
				<option value="M" >mensile</option>
			  </select>
			</div>
		</div>
		
		<div style="padding: 5px 0pt 5px 5px; float: left;">
			<div style="width:60px; float:left;">Dal:</div>
			<div style="width:160px; float:left;">
			  <select name="GGstart" onFocus="javascript:SelezioneDate(2);">
	 			<option value='01' >01</option>
	 			<option value='02' >02</option>
	 			<option value='03' >03</option>
	 			<option value='04' >04</option>
	 			<option value='05' >05</option>
	 			<option value='06' SELECTED>06</option>
	 			<option value='07' >07</option>
	 			<option value='08' >08</option>
	 			<option value='09' >09</option>
	 			<option value='10' >10</option>
	 			<option value='11' >11</option>
	 			<option value='12' >12</option>
	 			<option value='13' >13</option>
	 			<option value='14' >14</option>
	 			<option value='15' >15</option>
	 			<option value='16' >16</option>
	 			<option value='17' >17</option>
	 			<option value='18' >18</option>
	 			<option value='19' >19</option>
	 			<option value='20' >20</option>
	 			<option value='21' >21</option>
	 			<option value='22' >22</option>
	 			<option value='23' >23</option>
	 			<option value='24' >24</option>
	 			<option value='25' >25</option>
	 			<option value='26' >26</option>
	 			<option value='27' >27</option>
	 			<option value='28' >28</option>
	 			<option value='29' >29</option>
	 			<option value='30' >30</option>
	 			<option value='31' >31</option> 
	 		  </select>
			  &nbsp;
			  <select name="MMstart" onFocus="javascript:SelezioneDate(2);">
	 			<option value='01' >Gen</option>
	 			<option value='02' >Feb</option>
	 			<option value='03' >Mar</option>
	 			<option value='04' >Apr</option>
	 			<option value='05' >Mag</option>
	 			<option value='06' >Giu</option>
	 			<option value='07' >Lug</option>
	 			<option value='08' >Ago</option>
	 			<option value='09' >Set</option>
	 			<option value='10' >Ott</option>
	 			<option value='11' SELECTED>Nov</option>
	 			<option value='12' >Dic</option> 
	 		  </select>
			  &nbsp;
			  <select name="AAstart" onFocus="javascript:SelezioneDate(2);">
	 			
	 					<option value="1995"  > 1995 </option> 
	 			
	 					<option value="1996"  > 1996 </option> 
	 			
	 					<option value="1997"  > 1997 </option> 
	 			
	 					<option value="1998"  > 1998 </option> 
	 			
	 					<option value="1999"  > 1999 </option> 
	 			
	 					<option value="2000"  > 2000 </option> 
	 			
	 					<option value="2001"  > 2001 </option> 
	 			
	 					<option value="2002"  > 2002 </option> 
	 			
	 					<option value="2003"  > 2003 </option> 
	 			
	 					<option value="2004"  > 2004 </option> 
	 			
	 					<option value="2005"  > 2005 </option> 
	 			
	 					<option value="2006"  > 2006 </option> 
	 			
	 					<option value="2007"  > 2007 </option> 
	 			
	 					<option value="2008"  > 2008 </option> 
	 			
	 					<option value="2009"  selected> 2009 </option> 
	 			
	 					<option value="2010"  > 2010 </option> 
	 			 
	 		  </select>
			</div>
									
			<div style="width:70px; float:left;margin-left:10px;">Al:</div>
			<div style="width:160px; float:left;">
			  <select name="GGend" onFocus="javascript:SelezioneDate(2);">
				<option value='01' >01</option>
	 			<option value='02' >02</option>
	 			<option value='03' >03</option>
	 			<option value='04' >04</option>
	 			<option value='05' >05</option>
	 			<option value='06' SELECTED>06</option>
	 			<option value='07' >07</option>
	 			<option value='08' >08</option>
	 			<option value='09' >09</option>
	 			<option value='10' >10</option>
	 			<option value='11' >11</option>
	 			<option value='12' >12</option>
	 			<option value='13' >13</option>
	 			<option value='14' >14</option>
	 			<option value='15' >15</option>
	 			<option value='16' >16</option>
	 			<option value='17' >17</option>
	 			<option value='18' >18</option>
	 			<option value='19' >19</option>
	 			<option value='20' >20</option>
	 			<option value='21' >21</option>
	 			<option value='22' >22</option>
	 			<option value='23' >23</option>
	 			<option value='24' >24</option>
	 			<option value='25' >25</option>
	 			<option value='26' >26</option>
	 			<option value='27' >27</option>
	 			<option value='28' >28</option>
	 			<option value='29' >29</option>
	 			<option value='30' >30</option>
	 			<option value='31' >31</option> 
			  </select>
			  &nbsp;
			  <select name="MMend" onFocus="javascript:SelezioneDate(2);">
				<option value='01' >Gen</option>
	 			<option value='02' >Feb</option>
	 			<option value='03' >Mar</option>
	 			<option value='04' >Apr</option>
	 			<option value='05' SELECTED>Mag</option>
	 			<option value='06' >Giu</option>
	 			<option value='07' >Lug</option>
	 			<option value='08' >Ago</option>
	 			<option value='09' >Set</option>
	 			<option value='10' >Ott</option>
	 			<option value='11' >Nov</option>
	 			<option value='12' >Dic</option> 
			  </select>
			  &nbsp;
			  <select name="AAend" onFocus="javascript:SelezioneDate(2);">
			  
	 			<option value='1995' >1995</option> 
	 		  
	 			<option value='1996' >1996</option> 
	 		  
	 			<option value='1997' >1997</option> 
	 		  
	 			<option value='1998' >1998</option> 
	 		  
	 			<option value='1999' >1999</option> 
	 		  
	 			<option value='2000' >2000</option> 
	 		  
	 			<option value='2001' >2001</option> 
	 		  
	 			<option value='2002' >2002</option> 
	 		  
	 			<option value='2003' >2003</option> 
	 		  
	 			<option value='2004' >2004</option> 
	 		  
	 			<option value='2005' >2005</option> 
	 		  
	 			<option value='2006' >2006</option> 
	 		  
	 			<option value='2007' >2007</option> 
	 		  
	 			<option value='2008' >2008</option> 
	 		  
	 			<option value='2009' >2009</option> 
	 		  
	 			<option value='2010' SELECTED>2010</option> 
	 		   
			  </select>
			</div>
		</div>
		
		  <div class="button_green" style="float: right;margin: 10px 15px;">
			<div>
			  
			    <a href="javascript:ApriPopUp(2);">
			  									
			    cerca titolo</a></div>
			<div class="right"></div>
		  </div>

		
			<INPUT TYPE=hidden NAME="borsa0" VALUE="">
			<INPUT TYPE=hidden NAME="mercato0" VALUE="">
			<INPUT TYPE=hidden NAME="stockcode0" VALUE="">
		
			<INPUT TYPE=hidden NAME="borsa1" VALUE="">
			<INPUT TYPE=hidden NAME="mercato1" VALUE="">
			<INPUT TYPE=hidden NAME="stockcode1" VALUE="">
		
			<INPUT TYPE=hidden NAME="borsa2" VALUE="">
			<INPUT TYPE=hidden NAME="mercato2" VALUE="">
			<INPUT TYPE=hidden NAME="stockcode2" VALUE="">
		
			<INPUT TYPE=hidden NAME="borsa3" VALUE="">
			<INPUT TYPE=hidden NAME="mercato3" VALUE="">
			<INPUT TYPE=hidden NAME="stockcode3" VALUE="">
		
			<INPUT TYPE=hidden NAME="borsa4" VALUE="">
			<INPUT TYPE=hidden NAME="mercato4" VALUE="">
			<INPUT TYPE=hidden NAME="stockcode4" VALUE="">
		
			<INPUT TYPE=hidden NAME="borsa5" VALUE="">
			<INPUT TYPE=hidden NAME="mercato5" VALUE="">
			<INPUT TYPE=hidden NAME="stockcode5" VALUE="">
		
				  
					
			<INPUT TYPE=hidden NAME="FormSelezionato" size="1" value="">
		</form>
		
	</div>
	</div>
</div>

			
<script language="Javascript">
	function vaiScheda(b,m,i) {
	
		document.forms.schedatitolo.Borsa.value = b;
		document.forms.schedatitolo.Mercato.value = m;
		document.forms.schedatitolo.ID_Strumento.value = i;
		document.forms.schedatitolo.submit();
	}
</script>

<form name="schedatitolo" action="/wt/pr/portafoglio/collegamenti/" method="POST">
<input type="hidden" name="Borsa"/>  
<input type="hidden" name="Mercato"/>
<input type="hidden" name="ID_Strumento"/>
<input type="hidden" name="Destinazione" value="1"/>
</form>   

<script language="Javascript">
	/*allinea le 2 boxes grigie*/
	var box1 = document.getElementById('boxSX');
	var box2 = document.getElementById('boxDX');
	var container = box1.parentNode;
	if (box1 && box2){
		var h1 = box1.offsetHeight;
		var h2 = box2.offsetHeight;
		if (h1>h2)
			container.style.height = h1+"px";
		else
			container.style.height = h2+"px";
		
	}
	
	/*gestione x ie6*/
	var version=parseFloat(navigator.appVersion.substring(navigator.appVersion.lastIndexOf('MSIE')+5));
	if (navigator.appName=='Microsoft Internet Explorer' && version<7){
		container.style.width="773px";
		container.style.margin="0";
	}
</script>

      
      <div class="hr_foot clear"></div>
    </div>
	
	
	
	
	<div id="footerwt">
      <!-- BOX INFORMATIVI -->
      <div class="box"><strong>Attenzione:</strong> le quotazioni sull' indice FTSE 100 sono ritardate di 15 minuti.</div>
<div class="box">
  <B>In questa pagina puoi:</B>
  <BR>
  <UL>
   <LI>inserire i parametri sulla base dei quali creare il grafico interattivo;</LI>
   <LI>confrontare il grafico da te creato con il grafico di un indice/titolo a cui sei interessato.</LI>
 </UL>
</div>
      



<div class="box">  

Per ulteriori informazioni clicca su <a href="javascript:openHelp('PR_RS_AN_GRA01_1')">
<img src="/img/ret/button_question.gif" width=15 height=14 align=absbottom border=0></a>

</div>
      <!-- AREA INFORMAZIONI E FEEDBACK -->
      
</div>