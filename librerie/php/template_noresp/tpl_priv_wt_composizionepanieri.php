<h1>MERCATI</h1>
<div id="bodier" class="mercati">
    <!-- AREA DI AGGIORNAMENTO PAGINA -->     
    	



		
    <div class="hr_foot clear"></div>
      <!-- BOX DI LOGIN -->
      <div id="home1d3" style="margin-top:16px;">
        
        





 




 

	<div class="box_base">
      <h3>Composizione indici</h3>
      <div class="text">
        <ul>
        

				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=1" >FTSE MIB</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=3" >FTSE Italia All Share</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=4" >FTSE Italia Mid Cap</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=26" >FTSE Italia Star</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=25" >MTA International</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=7" >DOW JONES</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=8" >NASDAQ 100</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=9" >DAX100</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=10" >CAC40</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=11" >FTSE 100</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=12" >IBEX 35</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=13" >AEX</a>
	         </div>		     
	       </li>
		        
		
				
		   <li>
		     <div class="textIndici">
	          <a  href="/wt/pr/mercati/composizionepanieri&id=14" >BEL 20</a>
	         </div>		     
	       </li>
		        
		
		</ul>
      </div>
    </div>


	

    <div class="box_base">
      <h3>ETF</h3>
      <div class="text">
        <ul>
          
		
          <li>
            <div class="textIndici">
              <a  href="/wt/pr/mercati/composizionepanieri&id=15" >MTF-MTA</a>
            </div>
          </li>
        
		
        </ul>
      </div>
    </div>


    
    <div class="box_base">
      <h3>AFTER HOURS</h3>
      <div class="text">
        <ul>
          
		
          
          <li>
            <div class="textIndici">
              <a  href="/wt/pr/mercati/composizionepanieri&id=16" >FTSE MIB-TAH</a>
            </div>
          </li>
       
		
          
          <li>
            <div class="textIndici">
              <a  href="/wt/pr/mercati/composizionepanieri&id=17" >FTSE Italia Mid Cap-TAH</a>
            </div>
          </li>
       
		
		</ul>
      </div>
    </div>




          <div class="button_green" style=" margin:10px;">
            <div><a href="../../mercati/guidamercati/">Guida ai Mercati</a></div>
            <div class="right"></div>
          </div>
                    
      </div>
      <div class="inside2d2">      
          








<link href="/css/wetrade/portafoglio_nolinks.css" rel="stylesheet" type="text/css" />
<!--  NUOVE LIBRERIE LIGHTSTREAMER -->
<script language="JavaScript" src="/ls44/lscommons.js"></script>
<script language="JavaScript" src="/ls44/lspushpage.js"></script>

<script>
var LS_UTIL = {
    doFade :true,
    maxFields : 100,
    colors : {
        red :'#F8B87A',
        green :'#6FE16F'
    },
    onLsItemUpdate : function(item, updateInfo) {
        if (updateInfo == null) {
            return;
        }
        var oldLast = updateInfo.getOldValue(1);
        var newColor;
        var fieldNum = LS_UTIL.maxFields;
        if (oldLast == null) { /* first update for this item */
            updateInfo.addField(fieldNum + 1, LS_UTIL.colors.green, true);
            /* no fade for snapshot */
            if (LS_UTIL.doFade) {
                updateInfo.addField(fieldNum + 2, 'OFF', true);
            }
        } else if (updateInfo.isValueChanged(1)) {
            /* at least second update */
            if (oldLast > updateInfo.getNewValue(1)) {
                updateInfo.addField(fieldNum + 1, LS_UTIL.colors.red, true);
            } else {
                updateInfo.addField(fieldNum + 1, LS_UTIL.colors.green, true);
            }
            if (LS_UTIL.doFade) {
                updateInfo.addField(fieldNum + 2, 'ON', true);
            }
        }
    },
    onLsChangingValues : function(item, itemUpdate) {
        if (itemUpdate == null) {
            return;
        }
        var fieldNum = LS_UTIL.maxFields;
        if (LS_UTIL.doFade) {
            if (itemUpdate.getServerValue(fieldNum + 2) == 'ON') {
                itemUpdate.setHotToColdTime(300);
            }
        }
        itemUpdate.setHotTime(600);
        var backH = itemUpdate.getServerValue(fieldNum + 1);
        for ( var i = 1; i <= fieldNum; i++) {
            var backC = (parseInt(item, 10) % 2 == 0 ? '#eeeeee' : '#FFFFFF');
            itemUpdate.setRowAttribute(backH, backC, 'backgroundColor');
            var newValue = itemUpdate.getFormattedValue(i);
            if (newValue == null) {
                continue;
            }
            if (newValue == 'n.d.') {
                itemUpdate.setFormattedValue(i, '-');
                continue;
            }
            /* qui implementare eventuale formattazione del dato: */
            var formattedVal = newValue;
            itemUpdate.setFormattedValue(i, formattedVal);
        }
    }
}
</script>





<script language="javascript">
function vaiQM (parametro) {
        arrayOfStrings = parametro.split('.');
        document.formqm.borsa.value=arrayOfStrings[0];
        document.formqm.mercato.value=arrayOfStrings[1];
        document.formqm.stock_code.value=arrayOfStrings[2];
        document.formqm.submit();
}

function vaiCV (parametro) {
        var arrayOfStrings = parametro.split('.');
        document.formcv.borsa.value=arrayOfStrings[0];
        document.formcv.mercato.value=arrayOfStrings[1];
        document.formcv.stock_code.value=arrayOfStrings[2];
        document.formcv.submit();
}

function vaiBook (parametro) {
        var arrayOfStrings = parametro.split('.');
        document.formBook.borsa.value=arrayOfStrings[0];
        document.formBook.mercato.value=arrayOfStrings[1];
        document.formBook.stock_code.value=arrayOfStrings[2];
        window.open('',arrayOfStrings[2],'width=430,height=410,scrollbars=NO,toolbar=NO,location=NO,menubar=NO');
        //window.open('',arrayOfStrings[2],'width=430,height=430,resizable=YES,scrollbars=YES,toolbar=YES,location=YES,menubar=YES');
        document.formBook.target = arrayOfStrings[2];
        
        	document.formBook.action = '/wt/pr/book/';
        
        
        document.formBook.submit();
        
        window.name="padre";
}

function sistemaForm (parametro,isin) {
        arrayOfStrings = parametro.split('.');
        document.formBook.borsa.value=arrayOfStrings[0];
        document.formBook.mercato.value=arrayOfStrings[1];
        document.formBook.stock_code.value=arrayOfStrings[2];
        document.tradermade.IsinTitolo.value=isin;
        document.tradermade.borsa.value=arrayOfStrings[0];
        document.tradermade.mercato.value=arrayOfStrings[1];
        document.tradermade.stock_code.value=arrayOfStrings[2];
        document.tradermade.submit();
}

function vaiPush() {
        document.forms.push.ispush.value = "Y";
        document.forms.push.submit();
} 

function vaiPushOff() {
    document.forms.push.action = "/wt" + "/pr/mercati/composizionepanieri/";
        document.forms.push.ispush.value = "N";
        document.forms.push.submit();
}
</script>

<form name="formqm" method="post" action="/wt/schedatitolo/schedaazioni"  >
        <input type="hidden" name="borsa" value="">
        <input type="hidden" name="mercato" value="">
        <input type="hidden" name="stock_code" value="">
</form>

<form name="formcv" method="post" action="/wt/pr/compravendi/ordineitalia/"    >
        <input type="hidden" name="borsa" value="">
        <input type="hidden" name="mercato" value="">
        <input type="hidden" name="stock_code" value="">
</form>

<FORM NAME="formBook" METHOD=post>
<input type="hidden" name="borsa" value="">
<input type="hidden" name="mercato" value="">
<input type="hidden" name="stock_code" value="">
</FORM>

<form name="tradermade" method="post" action="/wt/pr/ufficio/schedatradermade/"  >
                <input type="hidden" name="IsinTitolo" value=""/>
                <input type="hidden" name="TipoRicerca" value="TITOLO"/>
                <input type="hidden" name="stock_code" value=""/>
                <input type="hidden" name="borsa" value=""/>
                <input type="hidden" name="mercato" value=""/>
</form>

<form name="push" method="post" action="/wt/push/framepanieri/"  >
 <input type="hidden" name="id" value="1"/>
 <input type="hidden" name="ispush" value="N"/>
</form>





<div style="font-size:11px;margin-left:0;width:540px;color:#6F8F0A;">
   <div style="float:left; padding-top:0px; height:17px;"><strong>&nbsp;COMPOSIZIONE Indice FTSE MIB&nbsp;&nbsp;&nbsp;</strong></div>
   <div style="float:right; padding-top:0px; height:17px;"><strong>FTSE MIB</strong> Val: <strong>19237.46</strong> Var: <strong style="color:#ff0000">-5.48%</strong></div>
</div>
<table border="0" cellspacing="0" cellpadding="0" class="portafoglio_table" style="width:540px;">
   <tr>
      <th scope="col" class="primowt">Simb.</th>
      <th scope="col">
         <div style="padding-left:6px; text-align:center">Titolo</div>
      </th>
      <th scope="col">
         <div>Ult.Prezzo</div>
      </th>
      <th scope="col" style="padding:0 2px;">
         <div>Var.%</div>
      </th>
      <th scope="col">
         <div>Prezzo Min.</div>
      </th>
      <th scope="col">
         <div>Prezzo Max.</div>
      </th>
      <th scope="col">
         <div>Ora</div>
      </th>
      <th scope="col">
         <div>Vai</div>
      </th>
   </tr>  <tr class="light">    
   <td class="primowt">A2A</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.1061')">A2A</a></td>
   <td class="right">1.206</td>
   <td class="neg right">-3.21%
      	
   </td>
   <td class="right">1.201</td>
   <td class="right">1.256</td>
   <td>17:12:10</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links6(1)">&gt;&gt;</a></div>
      <div id="links6" class="sezioneLinks" onMouseover="links6(1)" onMouseout="links6(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.1061" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.1061')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.1061')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">STS</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.115585')">ANSALDO STS</a></td>
   <td class="right">13.52</td>
   <td class="neg right">-2.03%
      	
   </td>
   <td class="right">13.5</td>
   <td class="right">13.88</td>
   <td>17:11:15</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links7(1)">&gt;&gt;</a></div>
      <div id="links7" class="sezioneLinks" onMouseover="links7(1)" onMouseout="links7(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.115585" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.115585')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.115585')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">ATL</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.69421')">ATLANTIA</a></td>
   <td class="right">14.91</td>
   <td class="neg right">-3.93%
      	
   </td>
   <td class="right">14.89</td>
   <td class="right">15.67</td>
   <td>17:12:12</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links8(1)">&gt;&gt;</a></div>
      <div id="links8" class="sezioneLinks" onMouseover="links8(1)" onMouseout="links8(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.69421" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.69421')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.69421')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">AGL</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.818')">AUTOGRILL SPA</a></td>
   <td class="right">8.545</td>
   <td class="neg right">-1.5%
      	
   </td>
   <td class="right">8.48</td>
   <td class="right">8.88</td>
   <td>17:12:09</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links9(1)">&gt;&gt;</a></div>
      <div id="links9" class="sezioneLinks" onMouseover="links9(1)" onMouseout="links9(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.818" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.818')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.818')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">AZM</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.82516')">AZIMUT</a></td>
   <td class="right">7.9</td>
   <td class="neg right">-0.06%
      	
   </td>
   <td class="right">7.7</td>
   <td class="right">8.13</td>
   <td>17:12:10</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links10(1)">&gt;&gt;</a></div>
      <div id="links10" class="sezioneLinks" onMouseover="links10(1)" onMouseout="links10(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.82516" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.82516')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.82516')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">BP</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.136039')">BANCO POPOLARE</a></td>
   <td class="right">4.09</td>
   <td class="neg right">-7.26%
      	
   </td>
   <td class="right">4.08</td>
   <td class="right">4.4675</td>
   <td >17:11:36</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links11(1)">&gt;&gt;</a></div>
      <div id="links11" class="sezioneLinks" onMouseover="links11(1)" onMouseout="links11(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.136039" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.136039')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.136039')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">BMPS</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.2069')">BCA MPS</a></td>
   <td class="right">0.882</td>
   <td class="neg right">-7.45%
      	
   </td>
   <td class="right">0.88</td>
   <td class="right">0.965</td>
   <td>17:12:11</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links12(1)">&gt;&gt;</a></div>
      <div id="links12" class="sezioneLinks" onMouseover="links12(1)" onMouseout="links12(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.2069" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.2069')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.2069')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">PMI</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.20')">BCA POP MILANO</a></td>
   <td class="right">3.61</td>
   <td class="neg right">-7.73%
      	
   </td>
   <td class="right">3.6</td>
   <td class="right">3.9375</td>
   <td>17:12:10</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links13(1)">&gt;&gt;</a></div>
      <div id="links13" class="sezioneLinks" onMouseover="links13(1)" onMouseout="links13(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.20" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.20')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.20')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">BUL</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.769')">BULGARI            .</a></td>
   <td class="right">6.145</td>
   <td class="pos&#xA right">0.66%
      	
   </td>
   <td class="right">6.05</td>
   <td class="right">6.265</td>
   <td>17:12:13</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links14(1)">&gt;&gt;</a></div>
      <div id="links14" class="sezioneLinks" onMouseover="links14(1)" onMouseout="links14(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.769" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.769')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.769')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">BZU</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.2735')">BUZZI UNICEM</a></td>
   <td class="right">9.85</td>
   <td class="neg right">-3.9%
      	
   </td>
   <td class="right">9.83</td>
   <td class="right">10.43</td>
   <td>17:12:10</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links15(1)">&gt;&gt;</a></div>
      <div id="links15" class="sezioneLinks" onMouseover="links15(1)" onMouseout="links15(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.2735" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.2735')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.2735')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">CPR</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.99679')">CAMPARI            .</a></td>
   <td class="right">7.61</td>
   <td class="neg right">-1.04%
      	
   </td>
   <td class="right">7.615</td>
   <td class="right">7.75</td>
   <td class="right">17:12:09</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links16(1)">&gt;&gt;</a></div>
      <div id="links16" class="sezioneLinks" onMouseover="links16(1)" onMouseout="links16(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.99679" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.99679')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.99679')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">CIR</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.89')">CIR-COMP IND RIUNITE</a></td>
   <td class="right">1.48</td>
   <td class="neg right">-2.18%
      	
   </td>
   <td class="right">1.475</td>
   <td class="right"> 1.537</td>
   <td>17:11:56</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links17(1)">&gt;&gt;</a></div>
      <div id="links17" class="sezioneLinks" onMouseover="links17(1)" onMouseout="links17(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.89" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.89')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.89')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">ENEL</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.33152')">ENEL               .</a></td>
   <td class="right">3.6675</td>
   <td class="neg right">-3.04%
      	
   </td>
   <td class="right">3.66</td>
   <td class="right">3.8075</td>
   <td>17:12:12</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links18(1)">&gt;&gt;</a></div>
      <div id="links18" class="sezioneLinks" onMouseover="links18(1)" onMouseout="links18(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.33152" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.33152')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.33152')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">ENI</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.32108')">ENI                .</a></td>
   <td class="right">15.84</td>
   <td class="neg right">-3.77%
      	
   </td>
   <td class="right">15.82</td>
   <td class="right">16.35</td>
   <td>17:12:12</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links19(1)">&gt;&gt;</a></div>
      <div id="links19" class="sezioneLinks" onMouseover="links19(1)" onMouseout="links19(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.32108" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.32108')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.32108')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">EXO</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.212412')">EXOR</a></td>
   <td class="right">12.59</td>
   <td class="neg right">-3.89%
      	
   </td>
   <td class="right">12.6</td>
   <td class="right">13.28</td>
   <td>17:11:15</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links20(1)">&gt;&gt;</a></div>
      <div id="links20" class="sezioneLinks" onMouseover="links20(1)" onMouseout="links20(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.212412" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.212412')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.212412')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">F</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.2552')">FIAT               .</a></td>
   <td class="right">8.83</td>
   <td class="neg right">-2.54%
      	
   </td>
   <td class="right">8.8</td>
   <td class="right">9.36</td>
   <td>17:12:10</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links21(1)">&gt;&gt;</a></div>
      <div id="links21" class="sezioneLinks" onMouseover="links21(1)" onMouseout="links21(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.2552" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.2552')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.2552')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">FNC</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.103164')">FINMECCANICA</a></td>
   <td class="right">8.83</td>
   <td class="neg right">-1.67%
      	
   </td>
   <td class="right">8.815</td>
   <td class="right">9.165</td>
   <td>17:12:12</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links22(1)">&gt;&gt;</a></div>
      <div id="links22" class="sezioneLinks" onMouseover="links22(1)" onMouseout="links22(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.103164" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.103164')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.103164')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">FSA</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.13319')">FONDIARIA-SAI</a></td>
   <td class="right">9.05</td>
   <td class="neg right">-6.02%
      	
   </td>
   <td class="right">9.02</td>
   <td class="right">9.695</td>
   <td>17:11:54</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links23(1)">&gt;&gt;</a></div>
      <div id="links23" class="sezioneLinks" onMouseover="links23(1)" onMouseout="links23(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.13319" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.13319')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.13319')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">G</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.1')">GENERALI ASS</a></td>
   <td class="right">14.01</td>
   <td class="neg right">-6.6%
      	
   </td>
   <td class="right">14.01</td>
   <td class="right">15.0</td>
   <td>17:12:12</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links24(1)">&gt;&gt;</a></div>
      <div id="links24" class="sezioneLinks" onMouseover="links24(1)" onMouseout="links24(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.1" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.1')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.1')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">GEO</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.88211')">GEOX</a></td>
   <td class="right">4.605</td>
   <td class="neg right">-1.02%
      	
   </td>
   <td class="right">4.5875</td>
   <td class="right">4.7625</td>
   <td >17:11:12</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links25(1)">&gt;&gt;</a></div>
      <div id="links25" class="sezioneLinks" onMouseover="links25(1)" onMouseout="links25(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.88211" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.88211')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.88211')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">IPG</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.100517')">IMPREGILO          .</a></td>
   <td class="right">2.085</td>
   <td class="neg right">-5.44%
      	
   </td>
   <td class="right">2.0825</td>
   <td class="right">2.25</td>
   <td>17:11:38</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links26(1)">&gt;&gt;</a></div>
      <div id="links26" class="sezioneLinks" onMouseover="links26(1)" onMouseout="links26(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.100517" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.100517')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.100517')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">ISP</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.894')">INTESA SANPAOLO</a></td>
   <td class="right">2.01</td>
   <td class="neg right">-10.04%
      	
   </td>
   <td class="right">2.01</td>
   <td class="right">2.3075</td>
   <td>17:05:28</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links27(1)">&gt;&gt;</a></div>
      <div id="links27" class="sezioneLinks" onMouseover="links27(1)" onMouseout="links27(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.894" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.894')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.894')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">IT</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.13317')">ITALCEMENTI</a></td>
   <td class="right">7.68</td>
   <td class="neg right">-2.17%
      	
   </td>
   <td class="right">7.675</td>
   <td class="right">8.04</td>
   <td>17:11:30</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links28(1)">&gt;&gt;</a></div>
      <div id="links28" class="sezioneLinks" onMouseover="links28(1)" onMouseout="links28(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.13317" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.13317')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.13317')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">LTO</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.110254')">LOTTOMATICA</a></td>
   <td class="right">12.86</td>
   <td class="neg right">-0.92%
      	
   </td>
   <td class="right">12.79</td>
   <td class="right">13.15</td>
   <td >17:11:54</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links29(1)">&gt;&gt;</a></div>
      <div id="links29" class="sezioneLinks" onMouseover="links29(1)" onMouseout="links29(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.110254" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.110254')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.110254')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">LUX</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.23961')">LUXOTTICA GROUP</a></td>
   <td class="right">19.84</td>
   <td class="neg right">-0.15%
      	
   </td>
   <td class="right">19.33</td>
   <td class="right">20.08</td>
   <td>17:11:53</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links30(1)">&gt;&gt;</a></div>
      <div id="links30" class="sezioneLinks" onMouseover="links30(1)" onMouseout="links30(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.23961" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.23961')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.23961')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">MS</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.611')">MEDIASET S.P.A</a></td>
   <td class="right">5.465</td>
   <td class="neg right">-1.71%
      	
   </td>
   <td class="right">5.45</td>
   <td class="right">5.625</td>
   <td>17:12:10</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links31(1)">&gt;&gt;</a></div>
      <div id="links31" class="sezioneLinks" onMouseover="links31(1)" onMouseout="links31(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.611" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.611')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.611')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">MB</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.131')">MEDIOBANCA         .</a></td>
   <td class="right">6.035</td>
   <td class="neg right">-8%
      	
   </td>
   <td class="right">6.075</td>
   <td class="right">6.625</td>
   <td>17:12:13</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links32(1)">&gt;&gt;</a></div>
      <div id="links32" class="sezioneLinks" onMouseover="links32(1)" onMouseout="links32(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.131" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.131')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.131')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">MED</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.1272')">MEDIOLANUM         .</a></td>
   <td class="right">3.48</td>
   <td class="neg right">-3.73%
      	
   </td>
   <td class="right">3.4875</td>
   <td class="right">3.65</td>
   <td>17:12:09</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links33(1)">&gt;&gt;</a></div>
      <div id="links33" class="sezioneLinks" onMouseover="links33(1)" onMouseout="links33(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.1272" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.1272')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.1272')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">PLT</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.106739')">PARMALAT</a></td>
   <td class="right">1.927</td>
   <td class="neg right">-0.46%
      	
   </td>
   <td class="right">1.898</td>
   <td class="right">1.961</td>
   <td>17:11:47</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links34(1)">&gt;&gt;</a></div>
      <div id="links34" class="sezioneLinks" onMouseover="links34(1)" onMouseout="links34(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.106739" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.106739')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.106739')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">PC</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.63')">PIRELLI E C</a></td>
   <td class="right">0.4265</td>
   <td class="neg right">-0.12%
      	
   </td>
   <td class="right">0.42</td>
   <td class="right">0.4495</td>
   <td>17:12:08</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links35(1)">&gt;&gt;</a></div>
      <div id="links35" class="sezioneLinks" onMouseover="links35(1)" onMouseout="links35(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.63" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.63')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.63')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">PRY</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.129243')">PRYSMIAN</a></td>
   <td class="right">12.26</td>
   <td class="neg right">-1.68%
      	
   </td>
   <td class="right">12.25</td>
   <td class="right">12.64</td>
   <td>17:12:11</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links36(1)">&gt;&gt;</a></div>
      <div id="links36" class="sezioneLinks" onMouseover="links36(1)" onMouseout="links36(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.129243" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.129243')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.129243')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">SPM</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.45')">SAIPEM</a></td>
   <td class="right">26.49</td>
   <td class="neg right">-2.54%
      	
   </td>
   <td class="right">26.4</td>
   <td class="right">27.34</td>
   <td>17:12:11</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links37(1)">&gt;&gt;</a></div>
      <div id="links37" class="sezioneLinks" onMouseover="links37(1)" onMouseout="links37(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.45" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.45')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.45')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">SRG</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.39576')">SNAM RETE GAS</a></td>
   <td class="right">3.445</td>
   <td class="neg right">-1.85%
      	
   </td>
   <td class="right">3.44</td>
   <td class="right">3.52</td>
   <td>17:12:10</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links38(1)">&gt;&gt;</a></div>
      <div id="links38" class="sezioneLinks" onMouseover="links38(1)" onMouseout="links38(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.39576" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.39576')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.39576')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">STM</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.559')">STMICROELECTRONICS</a></td>
   <td class="right">6.605</td>
   <td class="neg right">-0.9%
      	
   </td>
   <td class="right">6.515</td>
   <td class="right">6.775</td>
   <td>17:12:13</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links39(1)">&gt;&gt;</a></div>
      <div id="links39" class="sezioneLinks" onMouseover="links39(1)" onMouseout="links39(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.559" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.559')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.559')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">TIT</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.67874')">TELECOM ITALIA</a></td>
   <td class="right">0.9315</td>
   <td class="neg right">-7.22%
      	
   </td>
   <td class="right">0.931</td>
   <td class="right">0.9955</td>
   <td class="right">17:12:12</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links40(1)">&gt;&gt;</a></div>
      <div id="links40" class="sezioneLinks" onMouseover="links40(1)" onMouseout="links40(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.67874" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.67874')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.67874')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">TEN</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.56468')">TENARIS</a></td>
   <td class="right">14.83</td>
   <td class="neg right">-1.07%
      	
   </td>
   <td class="right">14.82</td>
   <td class="right">15.22</td>
   <td>17:12:10</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links41(1)">&gt;&gt;</a></div>
      <div id="links41" class="sezioneLinks" onMouseover="links41(1)" onMouseout="links41(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.56468" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.56468')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.56468')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">TRN</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.81658')">TERNA</a></td>
   <td class="right">2.96</td>
   <td class="neg right">-2.07%
      	
   </td>
   <td class="right">2.9625</td>
   <td class="right">3.0225</td>
   <td>17:12:10</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links42(1)">&gt;&gt;</a></div>
      <div id="links42" class="sezioneLinks" onMouseover="links42(1)" onMouseout="links42(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.81658" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.81658')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.81658')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">UBI</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.66834')">UBI BANCA</a></td>
   <td class="right">7.975</td>
   <td class="neg right">-7.48%
      	
   </td>
   <td class="right">7.91</td>
   <td class="right">8.665</td>
   <td>17:12:06</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links43(1)">&gt;&gt;</a></div>
      <div id="links43" class="sezioneLinks" onMouseover="links43(1)" onMouseout="links43(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.66834" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.66834')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.66834')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="light">    
   <td class="primowt">UCG</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.27')">UNICREDIT</a></td>
   <td class="right">1.641</td>
   <td class="neg right">-9.84%
      	
   </td>
   <td class="right">1.62</td>
   <td class="right">1.873</td>
   <td>17:12:12</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links44(1)">&gt;&gt;</a></div>
      <div id="links44" class="sezioneLinks" onMouseover="links44(1)" onMouseout="links44(0)">
         <!--ul>
            <li class=""><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.27" title="Analisi Tecnica">AT</a></li>
            <li class=""><a href="javascript:vaiBook('MI.EQCON.27')" title="Book">Book</a></li>
            <li class=" ultimo"><a href="javascript:vaiCV('MI.EQCON.27')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>      <tr class="dark">    
   <td class="primowt">UNI</td>
   <td class="primowt"><a href="javascript:vaiQM('MI.EQCON.636')">UNIPOL             .</a></td>
   <td class="right">0.7</td>
   <td class="neg right">-5.34%
      	
   </td>
   <td class="right">0.703</td>
   <td class="right">0.7485</td>
   <td>17:12:09</td>
   <td class="ultimo">
      <div style="padding-right:5px;"><a style="text-decoration:none; cursor: pointer; cursor: hand;" onClick="links45(1)">&gt;&gt;</a></div>
      <div id="links45" class="sezioneLinks" onMouseover="links45(1)" onMouseout="links45(0)">
         <!--ul>
            <li class="dark"><a href="/wt/ufficio/demotradermade&amp;ricerca=TitoloPaniere&amp;mrkt=MI.EQCON.636" title="Analisi Tecnica">AT</a></li>
            <li class="dark"><a href="javascript:vaiBook('MI.EQCON.636')" title="Book">Book</a></li>
            <li class="dark ultimo"><a href="javascript:vaiCV('MI.EQCON.636')" title="Compra/Vendi">C/V </a></li>
         </ul-->
      </div>
   </td>  </tr>    
</table>





	<script language="javascript">
		
		document.getElementById("links6").style.top = (document.getElementById("links6").offsetTop - 19) + 'px';
		
		function links6 (act){
			var element  = document.getElementById("links6");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links7").style.top = (document.getElementById("links7").offsetTop - 19) + 'px';
		
		function links7 (act){
			var element  = document.getElementById("links7");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links8").style.top = (document.getElementById("links8").offsetTop - 19) + 'px';
		
		function links8 (act){
			var element  = document.getElementById("links8");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links9").style.top = (document.getElementById("links9").offsetTop - 19) + 'px';
		
		function links9 (act){
			var element  = document.getElementById("links9");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links10").style.top = (document.getElementById("links10").offsetTop - 19) + 'px';
		
		function links10 (act){
			var element  = document.getElementById("links10");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links11").style.top = (document.getElementById("links11").offsetTop - 19) + 'px';
		
		function links11 (act){
			var element  = document.getElementById("links11");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links12").style.top = (document.getElementById("links12").offsetTop - 19) + 'px';
		
		function links12 (act){
			var element  = document.getElementById("links12");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links13").style.top = (document.getElementById("links13").offsetTop - 19) + 'px';
		
		function links13 (act){
			var element  = document.getElementById("links13");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links14").style.top = (document.getElementById("links14").offsetTop - 19) + 'px';
		
		function links14 (act){
			var element  = document.getElementById("links14");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links15").style.top = (document.getElementById("links15").offsetTop - 19) + 'px';
		
		function links15 (act){
			var element  = document.getElementById("links15");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links16").style.top = (document.getElementById("links16").offsetTop - 19) + 'px';
		
		function links16 (act){
			var element  = document.getElementById("links16");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links17").style.top = (document.getElementById("links17").offsetTop - 19) + 'px';
		
		function links17 (act){
			var element  = document.getElementById("links17");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links18").style.top = (document.getElementById("links18").offsetTop - 19) + 'px';
		
		function links18 (act){
			var element  = document.getElementById("links18");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links19").style.top = (document.getElementById("links19").offsetTop - 19) + 'px';
		
		function links19 (act){
			var element  = document.getElementById("links19");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links20").style.top = (document.getElementById("links20").offsetTop - 19) + 'px';
		
		function links20 (act){
			var element  = document.getElementById("links20");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links21").style.top = (document.getElementById("links21").offsetTop - 19) + 'px';
		
		function links21 (act){
			var element  = document.getElementById("links21");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links22").style.top = (document.getElementById("links22").offsetTop - 19) + 'px';
		
		function links22 (act){
			var element  = document.getElementById("links22");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links23").style.top = (document.getElementById("links23").offsetTop - 19) + 'px';
		
		function links23 (act){
			var element  = document.getElementById("links23");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links24").style.top = (document.getElementById("links24").offsetTop - 19) + 'px';
		
		function links24 (act){
			var element  = document.getElementById("links24");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links25").style.top = (document.getElementById("links25").offsetTop - 19) + 'px';
		
		function links25 (act){
			var element  = document.getElementById("links25");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links26").style.top = (document.getElementById("links26").offsetTop - 19) + 'px';
		
		function links26 (act){
			var element  = document.getElementById("links26");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links27").style.top = (document.getElementById("links27").offsetTop - 19) + 'px';
		
		function links27 (act){
			var element  = document.getElementById("links27");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links28").style.top = (document.getElementById("links28").offsetTop - 19) + 'px';
		
		function links28 (act){
			var element  = document.getElementById("links28");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links29").style.top = (document.getElementById("links29").offsetTop - 19) + 'px';
		
		function links29 (act){
			var element  = document.getElementById("links29");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links30").style.top = (document.getElementById("links30").offsetTop - 19) + 'px';
		
		function links30 (act){
			var element  = document.getElementById("links30");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links31").style.top = (document.getElementById("links31").offsetTop - 19) + 'px';
		
		function links31 (act){
			var element  = document.getElementById("links31");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links32").style.top = (document.getElementById("links32").offsetTop - 19) + 'px';
		
		function links32 (act){
			var element  = document.getElementById("links32");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links33").style.top = (document.getElementById("links33").offsetTop - 19) + 'px';
		
		function links33 (act){
			var element  = document.getElementById("links33");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links34").style.top = (document.getElementById("links34").offsetTop - 19) + 'px';
		
		function links34 (act){
			var element  = document.getElementById("links34");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links35").style.top = (document.getElementById("links35").offsetTop - 19) + 'px';
		
		function links35 (act){
			var element  = document.getElementById("links35");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links36").style.top = (document.getElementById("links36").offsetTop - 19) + 'px';
		
		function links36 (act){
			var element  = document.getElementById("links36");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links37").style.top = (document.getElementById("links37").offsetTop - 19) + 'px';
		
		function links37 (act){
			var element  = document.getElementById("links37");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links38").style.top = (document.getElementById("links38").offsetTop - 19) + 'px';
		
		function links38 (act){
			var element  = document.getElementById("links38");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links39").style.top = (document.getElementById("links39").offsetTop - 19) + 'px';
		
		function links39 (act){
			var element  = document.getElementById("links39");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links40").style.top = (document.getElementById("links40").offsetTop - 19) + 'px';
		
		function links40 (act){
			var element  = document.getElementById("links40");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links41").style.top = (document.getElementById("links41").offsetTop - 19) + 'px';
		
		function links41 (act){
			var element  = document.getElementById("links41");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links42").style.top = (document.getElementById("links42").offsetTop - 19) + 'px';
		
		function links42 (act){
			var element  = document.getElementById("links42");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links43").style.top = (document.getElementById("links43").offsetTop - 19) + 'px';
		
		function links43 (act){
			var element  = document.getElementById("links43");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links44").style.top = (document.getElementById("links44").offsetTop - 19) + 'px';
		
		function links44 (act){
			var element  = document.getElementById("links44");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

	<script language="javascript">
		
		document.getElementById("links45").style.top = (document.getElementById("links45").offsetTop - 19) + 'px';
		
		function links45 (act){
			var element  = document.getElementById("links45");
			var elem_body = document.getElementById("container");
			if (act==0) {
				element.style.visibility = "hidden"; 
			} else {
				element.style.left = (elem_body.offsetLeft + elem_body.offsetWidth - element.offsetWidth - 30) + 'px';
				element.style.visibility = "visible";
			}			
			return true;
		}
	</script>	

    
          





 
<script language="Javascript">
	function vaiRicerca(codice) {
		document.forms.vai_ricerca.NumMercato.value = codice;
		document.forms.vai_ricerca.submit();
	}
</script>

<div style="width:540px; float:left;">

<form name="vai_ricerca" action="/wt/pr/mercati/mercatoitaliano" method="post" >
	<input type="hidden" name="ms" value="1">
	<input type="hidden" name="NumMercato" value="">
</form>
	  <div class="button_green" style="margin-top:10px; float:left;">
        <div><a href="javascript:history.go(-1)">Indietro</a></div>
        <div class="right"></div>
      </div>
	
		
		   	
		   	  <div class="button_green" style="margin-top:10px; float:right;">
			    <div>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:vaiRicerca('11-MI-EQCON');">Mercato Italiano</a> &nbsp;</div>
			    <div class="right"></div>
			  </div>
			
			  
		   
	
</div>


      </div> 
      
      <div class="hr_foot clear"></div>
    </div>
	
	
	<div id="footerwt">
      <!-- BOX INFORMATIVI -->
      <div class="box">
    <strong>Attenzione:</strong> le quotazioni dei mercati esteri sono ritardate di 15 minuti (20 minuti per Nyse, Nikkei e FTSE). Se non ti sei ancora registrato il ritardo &egrave; di 20 minuti anche sui mercati italiani.
Desideri le quotazioni in tempo reale sui mercati di tuo interesse? Aderisci all'opzione <b>Su Misura</b>. 
</div>

<div class="box">
    <strong>NYSE Disclaimer:</strong> As your agreement for the receipt and use of market data provides, the securities markets reserve all rights to the market data that they make available; do not to guarantee that data; and shall not be liable for any loss due either to their negligence or to any cause beyond their reasonable control. 
</div>

<div class="box">
<b>In questa pagina puoi:<br/></b>

<ul>
  <li>
   consultare l'elenco e le principali caratteristiche dei titoli che compongono l'indice di borsa da te selezionato;
  </li>
  <li>
    accedere alla sezione Mercato Italiano o Mercato Estero dove puoi ottenere informazioni di dettaglio sul titolo che ti interessa.
  </li>
</ul>
</div>
 
      



<div class="box">  

Per ulteriori informazioni clicca su <a href="javascript:openHelp('PR_QM_MERCATI02_1')">
<img src="/img/ret/button_question.gif" width=15 height=14 align=absbottom border=0></a>

</div>
      <!-- AREA INFORMAZIONI E FEEDBACK -->
      
    </div>