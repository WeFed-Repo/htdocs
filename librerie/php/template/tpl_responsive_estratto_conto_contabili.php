<style>
div.box01_col {
  background: #6F8F0A;
  border-radius: 10px;
  float: left;
}

div.box01_col ul {
  background: #fff;
  border-radius: 10px;
  margin:15px 5px 5px 5px;
  padding:10px;
}

ul.col01 li {
  list-style-type: none!important;
  padding: 0 0 1px 0!important;
}

</style>

<script>
$(function(){
   $("#nasc").hide();
 $("#listnasc").bind('change',function(){
   $("#nasc").show();
  });
});





</script>


<h1 id="id_label">Estratto conto e contabili</h1>



<div class="row">
	<div class="col-sm-7">
	<table class="dettTable responsive" cellpadding="0" cellspacing="0">
      <tr class="tabcarttit">          
		  	<th colspan="3" class="tabcartleft"><span>Documenti 2015</span></th>
		  </tr>
      <tr class="tabcarttit2"> 
        <th>Tipo documento</th>
        <th>Tutti i doc.</th>
        <th>Doc. non letti</th>
      </tr>                 

      <tr class="dispari">
        <td class="tabcart3left" style="padding:0px 3px">Estratti conto</td>            
        <td class="tabcart3center" style="text-align:right;">            
           <div id="esttotload" style="display: none;"><img src="/img/ret/ico2inf_loading.gif"></div>
			     <div id="esttot0" style="display: none">0</div>
			     <div id="esttot" style=""><a href="/webankpri/wbOnetoone/3l/do/col/WsSearchECAction.do?cf=0.07984570640385158&amp;keep=Yes&amp;statoDocumenti=T&amp;tipoOrdinamento=DD&amp;tipoRicerca=N&amp;nomeRicerca=WsSearchECAction&amp;annoincorso=2015&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_col_ABIL&amp;OBSKEY3=nav_priv_wbx_archivio_doc&amp;storico=" class="tipo4">1</a></div>                     
		    </td> 
        <td class="tabcart3right" style="text-align:right;padding:0px 4px">                      
           <div id="estnlload" style="display: none;"><img src="/img/ret/ico2inf_loading.gif"></div>
			     <div id="estnl0" style="display: none">0</div>
			     <div id="estnl" style=""><a href="/webankpri/wbOnetoone/3l/do/col/WsSearchECAction.do?cf=0.08715779603388107&amp;keep=Yes&amp;statoDocumenti=N&amp;tipoOrdinamento=DD&amp;tipoRicerca=N&amp;nomeRicerca=WsSearchECAction&amp;annoincorso=2015&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_col_ABIL&amp;OBSKEY3=nav_priv_wbx_archivio_doc&amp;storico=" class="tipo4">1</a></div>                    
		    </td> 
      </tr>

                         
         <tr class="pari"> 
            <td class="tabcart3left" style="padding:0px 3px">Contabili</td>     
            <td class="tabcart3center" style="text-align:right;">            
              <div id="rictotload" style="display: none;"><img src="/img/ret/ico2inf_loading.gif"></div>
				      <div id="rictot0" style="display: none">0</div>
				      <div id="rictot" style=""><a href="/webankpri/wbOnetoone/3l/do/col/WsSearchLastReceiptsAction.do?cf=0.4436696187619996&amp;keep=Yes&amp;statoDocumenti=T&amp;tipoOrdinamento=DD&amp;filtroMese=no&amp;ultimeDieci=no&amp;tipoRicerca=N&amp;nomeRicerca=WsSearchLastReceiptsAction&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_col_ABIL&amp;OBSKEY3=nav_priv_wbx_archivio_doc&amp;storico=" class="tipo4">2</a></div></td> 
            <td class="tabcart3right" style="text-align:right;padding:0px 4px">            
              <div id="ricnlload" style="display: none;"><img src="/img/ret/ico2inf_loading.gif"></div>
				      <div id="ricnl0" style="display: none">0</div>
				      <div id="ricnl" style=""><a href="/webankpri/wbOnetoone/3l/do/col/WsSearchLastReceiptsAction.do?cf=0.02900354217360057&amp;keep=Yes&amp;statoDocumenti=N&amp;tipoOrdinamento=DD&amp;filtroMese=no&amp;ultimeDieci=no&amp;tipoRicerca=N&amp;nomeRicerca=WsSearchLastReceiptsAction&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_col_ABIL&amp;OBSKEY3=nav_priv_wbx_archivio_doc&amp;storico=" class="tipo4">2</a></div>
            </td> 
		    </tr>
         <tr class="dispari"> 
            <td class="tabcart3left" style="padding:0px 3px">Documenti di sintesi/informativi</td>     
            <td class="tabcart3center" style="text-align:right;">            
              <div id="sintotload" style="display: none;"><img src="/img/ret/ico2inf_loading.gif"></div>
				      <div id="sintot0" style="display: none">0</div>
				      <div id="sintot" style=""><a href="/webankpri/wbOnetoone/3l/do/col/WsSearchDocSintesiAction.do?cf=0.19087020534260835&amp;keep=Yes&amp;statoDocumenti=T&amp;tipoOrdinamento=DD&amp;tipoRicerca=N&amp;nomeRicerca=WsSearchDocSintesiAction&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_col_ABIL&amp;OBSKEY3=nav_priv_wbx_archivio_doc&amp;storico=" class="tipo4">1</a></div>
			      </td> 
            <td class="tabcart3right" style="text-align:right;padding:0px 4px">                        
              <div id="sinnlload" style="display: none;"><img src="/img/ret/ico2inf_loading.gif"></div>
				      <div id="sinnl0" style="display: none">0</div>
				      <div id="sinnl" style=""><a href="/webankpri/wbOnetoone/3l/do/col/WsSearchDocSintesiAction.do?cf=0.715866706591152&amp;keep=Yes&amp;statoDocumenti=N&amp;tipoOrdinamento=DD&amp;tipoRicerca=N&amp;nomeRicerca=WsSearchDocSintesiAction&amp;OBSCNT=TAB&amp;tabId=nav_priv_wbx_sportello&amp;OBSKEY=nav_priv_wbx_col_ABIL&amp;OBSKEY3=nav_priv_wbx_archivio_doc&amp;storico=" class="tipo4">1</a></div>
            </td> 
          </tr>
   	  </table>
  </div>
  <div class="col-sm-5">
    <div class="box01_col">
      <ul class="col01">
        <li><img alt="" src="/img/ret/bullet1.gif"> <a class="tipod" href="#">Ultimo estratto conto</a></li>
        <li><img alt="" src="/img/ret/bullet1.gif"> <a class="tipod" href="#"> Ultime 10 contabili - 2015</a></li>
        <li><img alt="" src="/img/ret/bullet1.gif"> <a class="tipod" href="#">Tutti i documenti non letti - 2015</a></li>
           
      </ul>
    </div>
  </div>  

</div>


<div class="tithelp">
  <div class="helpleft"></div>
  <div class="BvTableHeaderHelp" align="right">
    <a class="hlp" href="javascript:;" onclick="openPopGuida(cgi_script+'/banking/webank/helpStatoDisp.jsp?tabbed=false');" title="help">help</a>
    <a href="javascript:;" onclick="openPopGuida(cgi_script+'/banking/webank/helpStatoDisp.jsp');">
      <img alt="help" src="/img/ret//ico2or_help2.gif">
    </a>
    <br class="clear">
  </div>
  <br class="clear">
</div>




<div class="borderFormRounded searchFilter margBottomLarge">
  <div class="formGeneric">
      <div class="row">  
        <div class="col-sm-6">
          <label class="nomefield">Rapporto</label>  
          <select name="numeroRapporto" size="1" onchange="fixStar(this);" class="tipoc">        
            <option value="1099-00000000081500" class="staroff%01099 - 0000081500 - EUR!01099 - 0000081500 - EUR">CC 01099 0000081500 EUR</option>
            <option value="---" disabled="disabled">---</option>
            <option value="Tutti" class="nostar">Tutti</option>
          </select>
        </div>
        <div class="col-sm-6">

        </div>        
      </div>
      <div class="row">  
        <div class="col-sm-6">
          <label class="nomefield">Categoria documenti</label>  
          <select name="categoria" size="1" class="tipoc" id="listnasc">        
            <option value="ESTRATTI C/C">Estratti Conto Corrente</option>            
            <option value="ESTRATTO CT">Estratti deposito Titoli</option>            
            <option value="ESTRATTO CG">Estratti Capital Gain</option>            
            <option value="RENDICONTO DER">Rendicontazione Derivati</option>            
            <option value="DOC. DI SINTESI">Documenti di sintesi/informativi</option>            
            <option value="COMUNICAZIONI">Comunicazioni contrattuali</option>            
            <option value="LETTERE">Lettera avviso sconfinamento</option>            
            <option value="TITOLI">Titoli</option>            
            <option value="ENTRATE">Accrediti</option>            
            <option value="USCITE">Addebiti</option>            
            <option value="PAGAMENTI">Pagamento effetti/Portafoglio</option>            
            <option value="INCASSI">Incassi</option>            
            <option value="---" disabled="disabled">---</option>        
            <option value="">Tutti</option>
          </select>
        </div>
         <div class="col-sm-6">
            <div id="nasc">
            <label class="nomefield">Tipo documento</label>  
            <select name="categoria" size="1" class="tipoc" >        
             <option value="PARENT">Estratti Conto Corrente</option>
             <option value="SCALARE">Riassunto a scalare</option>
             <option value="">Tutti i documenti</option>
            </select>
          </div> 
        </div>        
      </div>
      <div class="row">  
        <div class="col-sm-6">
          <label class="nomefield">Stato</label>  
          <select name="statoDocumenti" size="1" class="tipoc">
            <option value="">-- seleziona --</option>
            <option value="L">Letto</option>
            <option value="N">Non
            letto</option>
            <option value="T">Tutti</option>
          </select>
        </div>
         <div class="col-sm-6">
         
        </div>        
      </div>
       <div class="row">  
        <div class="col-sm-12">
          <label class="nomefield">Periodo</label>  
            <div class="row">  
              <div class="col-sm-4"><label class="nomefield">anno:</label>
              <select name="anno" size="1" class="tipoc">
                <option value="2015" selected="">2015</option>                
                <option value="2014">2014</option>                
                <option value="2013">2013</option>                
                <option value="2012">2012</option>                
                <option value="2011">2011</option>                
                <option value="2010">2010</option>                
                <option value="2009">2009</option>                
                <option value="2008">2008</option>                
                <option value="2007">2007</option>                
                <option value="2006">2006</option>                
                <option value="2005">2005</option>                
              </select> 
              </div>
               <div class="col-sm-4"><label class="nomefield">mese: da</label>
                <select name="dalMM" size="1" class="tipoc">
                  <option value="" selected="">-- seleziona --</option>                  
                  <option value="01">Gennaio</option>                  
                  <option value="02">Febbraio</option>                  
                  <option value="03">Marzo</option>                  
                  <option value="04">Aprile</option>                  
                  <option value="05">Maggio</option>                  
                  <option value="06">Giugno</option>                  
                  <option value="07">Luglio</option>                  
                  <option value="08">Agosto</option>                  
                  <option value="09">Settembre</option>                  
                  <option value="10">Ottobre</option>                  
                  <option value="11">Novembre</option>                  
                  <option value="12">Dicembre</option>                  
                </select>
              </div>
               <div class="col-sm-4"><label class="nomefield">mese: a</label>
                <select name="alMM" size="1" class="tipoc">
                  <option value="" selected="">-- seleziona --</option>                  
                  <option value="01">Gennaio</option>                  
                  <option value="02">Febbraio</option>                  
                  <option value="03">Marzo</option>                  
                  <option value="04">Aprile</option>                  
                  <option value="05">Maggio</option>                  
                  <option value="06">Giugno</option>                  
                  <option value="07">Luglio</option>                  
                  <option value="08">Agosto</option>                  
                  <option value="09">Settembre</option>                  
                  <option value="10">Ottobre</option>                  
                  <option value="11">Novembre</option>                  
                  <option value="12">Dicembre</option>                  
                </select>
               </div>
            </div>
        </div>              
      </div>

  
  
    
  <div class="btnc aButtoncons"><a class="aButton" href="javascript:prosegui();"><span>cerca</span></a></div>

  </div>
</div>