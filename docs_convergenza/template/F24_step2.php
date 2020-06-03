<html><head>
    <title>F24 Semplificato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    












<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript" src="/sapef24/f24/javascript/jquery-1.9.0.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/scroll.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/jquery-migrate-1.0.0.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="/sapef24/f24/javascript/ie10-viewport-bug-workaround.js"></script>


<!--<script type="text/javascript" src='./sapef24/f24/javascript/jquery.tablesorter.js'></script>-->
<script type="text/javascript" src="/sapef24/f24/javascript/jquery-ui.min.js"></script>

<!--nostro-->
  <script type="text/javascript" src="/sapef24/f24/javascript/jquery.ui.touch-punch.min.js"></script>
<!-- * -->
<script type="text/javascript" src="/sapef24/f24/javascript/swfobject.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/funzioniHT.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/funzioniHB.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/jquery.blockUI.js"></script>

<script type="text/javascript" src="/sapef24/f24/javascript/jquery.dataTables.min.js"></script>    


<!--nostro-->
  
  <link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/blue.css">
  <script type="text/javascript" src="/sapef24/f24/javascript/icheck.min.js?t=1582906007487"></script>
  <script type="text/javascript" src="/sapef24/f24/javascript/helpModal.js"></script>
  




  
<script type="text/javascript">
  
      function getPathImages() { return './sapef24/f24/images/';}
  
</script>
<script type="text/javascript" src="/sapef24/f24/javascript/controlli.js"></script>
<script type="text/javascript" src="/sapef24/f24/javascript/doubleClickPrevention.js"></script>
  
<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/jquery-ui.css">
<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/bootstrap.min.css">
<link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/essentials.css">
  
      <link media="screen,print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/header-default.css">
      <link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/styleNew.css">
      
      <!--NUOVA GRAFICA-->
          
  <link media="print" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/stylePrint.css">
  
        <link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/stylePhone.css">
    <?php if($_REQUEST['bank'] == 'HT') { ?>
        <link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/phone/styleYouweb.css">
	<?php } else if($_REQUEST['bank'] == 'WB') { ?>
		<link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/phone/styleWebank.css">
	<?php } ?>
      
      
      

      <script src="/sapef24/f24/javascript/jquery.jspanel.min.js?t=1582906007487"></script>
      <script src="/sapef24/f24/javascript/mobile.js?t=1582906007487"></script>
      <script src="/sapef24/f24/javascript/mobile-detect.js?t=1582906007487"></script>
      <script src="/sapef24/f24/javascript/jquery.tablesorter.js?t=1582906007487"></script>
      <script src="/sapef24/f24/javascript/jquery.tablesorter.pager.js?t=1582906007487"></script>
  
      <link type="text/css" href="/sapef24/f24/styles/jquery.tablesorter.pager.css?t=1582906007487" rel="stylesheet">

      <script type="text/javascript">
      (function(){   
        if (window.addEventListener)
        {
          window.addEventListener("load", nascondi_loading_mobile, false);
        }else{
          window.attachEvent("onload", nascondi_loading_mobile);
        }
      })();
      function mostra_loading_mobile()
      {
        document.getElementById("loading_mobile").style.display = 'block';
      }
      function nascondi_loading_mobile()
      {
        document.getElementById("loading_mobile").style.display = 'none';
      }
      </script>
      

  

















  <script type="text/javascript">
      
      function noBack(){
          window.history.forward();
      }
      
      noBack();
      
      window.onload = noBack;
      window.onpageshow = function(evt) {
          if (evt.persisted) {
              noBack();
          }
      }
      
      window.onunload = function() {
          void(0);
      }
  
  </script>



<script type="text/javascript">

  if (window.opera) {
      window.opera.setOverrideHistoryNavigationMode('compatible');
      
      if (history.navigationMode) {
          history.navigationMode = 'compatible';
      }
  }
  
</script>
  
  

<!--[if lt IE 9]>
    <script type="text/javascript" src='./sapef24/f24/javascript/respond.min.js'></script>
    <script type="text/javascript" src='./sapef24/f24/javascript/html5.js'></script>
<![endif]-->
<script type="text/javascript" src="/sapef24/f24/javascript/alten.js"></script>

<style id="style-1-cropbar-clipper">
  /* Copyright 2014 Evernote Corporation. All rights reserved. */
  
  .en-markup-crop-options {
      top: 18px !important;
      left: 50% !important;
      margin-left: -100px !important;
      width: 200px !important;
      border: 2px rgba(255,255,255,.38) solid !important;
      border-radius: 4px !important;
  }
  .en-markup-crop-options div div:first-of-type {
      margin-left: 0px !important;
  }
</style>


<style type="text/css">
  #loading_mobile, #loading_screen{  
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: #fff url(./sapef24/f24/images/phone/loading.gif) 50% no-repeat;
      opacity: 0.5;
      filter: alpha(opacity=50);
  }
  
      #loading_screen{  
          background: url(./sapef24/f24/images/loading.gif) 50% no-repeat;
      }
  
</style>
  





        
          
      


</head>
<body onload="

  

visualizzaSegnalazione();" onclick="deselezionaTutti();" marginwidth="0" marginheight="0" style="zoom: 1;">
<div id="loading_mobile" style="display: none;"></div>
<script type="text/javascript">
mostra_loading_mobile();
</script>

  








  <input type="hidden" name="DelegaUniqueToken" value="MTU4MjkwNjAzNTcxMg==">
  <input type="hidden" name="_control.identificativoDelega" value="">



  
  <input type="hidden" name="_control.reload" value="false">

    <script type="text/javascript">
        function visualizzaSegnalazione() {
        
        }
    </script>
    

      

      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <div class="flag pagamentoF24">&nbsp;</div>
                  <h1>F24 Semplificato</h1>	
                  
                      
                          <div class="pager clearfix pull-right">
                              <div class="circle_line">&nbsp;</div>
                              <div class="circle
                                  
                              ">&nbsp;</div>
                              <div class="circle
                                  
                                      current_page
                                  
                              ">&nbsp;</div>
                              <div class="circle
                                  
                              ">&nbsp;</div>
                              <div class="circle
                                  
                              ">&nbsp;</div>
                              <div class="circle
                                  
                              ">&nbsp;</div>
                          </div>
                      
                    
          
                  



                  <form name="f24MainForm" method="post" action="/sapef24/f24/inserisciNuovoModelloPhone.do" class="form-horizontal"><input type="hidden" name="org.apache.struts.taglib.html.TOKEN" value="be8c41a88f532b6bb4dd28469feb98cf">
                        














  

  
      
      
      
          
          
          
      
  
  











                     
                        







  








  
      
  













                    

                    

                      <input type="hidden" name="DelegaUniqueToken" value="MTU4MjkwNjAzNTcxMg==">
                      <input type="hidden" name="_control.tipo" value="S">
                      <input type="hidden" name="_control.direction" value="forward">

                      
                      
                          















<!-- Inizio sezione Semplificato -->

<div class="section clearfix">
  <div class="riquadro clearfix">
      <h4>RAPPORTO DI ADDEBITO</h4>
          <div class="phone">
              <div class="col-xs-12">
                  <span class="col-xs-5">Conto corrente:</span>
                  <span class="col-xs-7"><strong>
                      
                          000000581427
                      
                      
                  </strong></span>
              </div>
              <div class="col-xs-12">
                  <span class="col-xs-5">Intestato a:</span>
                  <span class="col-xs-7"><strong>
                  
                          Venturelli Alessandro
                  
                  </strong></span>
              </div>
              <div class="col-xs-12">
                  <span class="col-xs-5">Filiale:</span>
                  <span class="col-xs-7"><strong>
                      
                          VALEGGIO SUL MINCIO - 0092
                      
                      
                  </strong></span>
              </div>
              <div class="col-xs-12">
                  <span class="col-xs-5">Saldo disponibile:</span>
                  <span class="col-xs-7"><strong>
                      
                          
                          58.147,03€
                      
                      
                  </strong></span>
              </div>
      </div><!-- /phone -->
  </div><!-- /riquadro clearfix-->
  <div class="riquadro clearfix">
      <h4>CONTRIBUENTE</h4>
          <div class="phone">
              <div class="col-xs-12">
                  <span class="col-xs-5">
                      
                          Nome Cognome:
                      
                      
                  </span>
                  <span class="col-xs-7"><strong>
                      
                          ALESSANDRO&nbsp;VENTURELLI
                      
                      
                  </strong></span>
              </div>

              <div class="col-xs-12">
                  <span class="col-xs-5">
                      
                          Cod.fiscale:
                      
                      
                  </span>
                  <span class="col-xs-7"><strong>VNTLSN85R03E349S</strong></span>
              </div>

          
              <div class="col-xs-12">
                  <span class="col-xs-5">Luogo Nascita:</span>
                  <span class="col-xs-7"><strong>ISOLA DELLA SCALA (VR)</strong></span>
              </div>
          

          
              <div class="col-xs-12">
                  <span class="col-xs-5">Data Nascita:</span>
                  <span class="col-xs-7"><strong>03/10/1985</strong></span>
              </div>
          
      </div><!-- /phone -->
  </div><!-- /riquadro clearfix-->
</div><!-- /section clearfix-->

<div class="section clearfix">
  <div class="section clearfix">
      <h3 class="titleSectionLong">Codici aggiuntivi</h3>
      <div class="clearfix pull-right"><a href="javascript:helpSemplificatoPhone('./sapef24/f24/phone/moduloF24/common/help/contenitoreImmagineStep2.jsp');"><img title="aiuto per la compilazione" src="/sapef24/f24/images/i_help.png" class="imgSrv" alt="Help On Line"></a></div>
      <div class="bs-example">
          <div class="form-group">
              <label>Codice fiscale coobbligato (se valorizzato):</label>
              <input type="text" name="contribuente.secCodFis" tabindex="1" maxlength="16" class="form-control" id="idCfCob">
          </div>
          <div class="form-group">
          
              <label>Codice identificativo (se valorizzato):</label>
              <div class="col-xs-11">
                  <input type="text" name="contribuente.codIde" tabindex="2" maxlength="2" class="form-control" id="idCodIdeCob">
              </div>
              <div class="col-xs-1 pull-right">
                  <a href="javascript: void(0);" title="Seleziona il codice identificativo (coobbligato)">
                      <img border="0" src="/sapef24/f24/images/ico-filter.png" name="contribuente.codIde.image" onclick="ricercaTributoPhone(this, 'codiceIdentificativoCoobbligato', './sapef24/f24/showHelpPhone.do');" alt="help codici">
                  </a>
              </div>
              
          </div>
          
          <div class="form-group">
              <label>Identificativo operazione (se valorizzato):</label>
              <input type="text" name="sezione(f24Semplificato2012).identificativoOperazione" tabindex="3" maxlength="18" class="form-control" id="idOpe">
          </div>
          <div class="form-group">
              <label>Codice ufficio (se valorizzato):</label>
              <div class="col-xs-11">
                  <input type="text" name="sezione(f24Semplificato2012).codiceUfficio" tabindex="4" maxlength="3" class="form-control" id="idCodUfficio">
              </div>
              <div class="col-xs-1 pull-right">
                  <a href="javascript: void(0);" title="Seleziona il codice ufficio">
                      <img border="0" src="/sapef24/f24/images/ico-filter.png" name="sezione(f24Semplificato2012).codiceUfficio.image" onclick="ricercaTributoPhone(this, 'ufficioErario', './sapef24/f24/showHelpPhone.do');" alt="help codici">
                  </a>
              </div>
          </div>
              
      
          <div class="form-group">
              <label>Codice atto (se valorizzato):</label>
              <input type="text" name="sezione(f24Semplificato2012).codiceAtto" tabindex="5" maxlength="11" class="form-control" id="idCodAtto">
          </div>
          
      </div>
  </div>


  

<!-- Fine sezione Erario -->






                      

                      

                      

                                              
                  
              </div></form><!-- /col-sm-12 col-sm-pull-12-->
          </div><!-- /row-->
              












<script type="text/javascript">

  var indiceConto =0;
  var indiceContribuente=0;
  
  $('#myCarousel').on('slid.bs.carousel', function () {
      indiceConto = $(this).find(".active").index();
   })
           
   $('#myCarouselRubrica').on('slid.bs.carousel', function () {
      indiceContribuente = $(this).find(".active").index();
   })		
           
        
        
            
            
            
            
                function salva() {
                    mostra_loading_mobile();
                          if (!getSubmitted()) {
                            document.f24MainForm.action = './sapef24/f24/salvaModello.do?id_chiamata=1582906001015_01IHF24_H8kKc4I4m3ynWoXH&_control.returnTo=modelloSalvato';
                            document.f24MainForm.submit();
                          }
                }
      
                function invia() {
                    mostra_loading_mobile();
                  if (!getSubmitted()) {
                     document.f24MainForm.action = './sapef24/f24/controllaModello.do?id_chiamata=1582906001015_01IHF24_H8kKc4I4m3ynWoXH&';
                     document.f24MainForm.submit();
                  }
                }
            
            
            
        
  
        function stampa() {
           window.print();
        }
  
        function nuovoModello() {
            mostra_loading_mobile();
            if (!getSubmitted()) {
                    document.f24MainForm.action = './sapef24/f24/inserisciNuovoModelloPhone.do?id_chiamata=1582906001015_01IHF24_H8kKc4I4m3ynWoXH&_control.tipo=S';
                    document.f24MainForm.submit();
            }
        }
  
        function annulla() {
            if (!isAlreadySubmitted()) {
                if (confirm('Sei sicuro?')) {
                    nuovoModello();
                }
          }
        }

        function inserisciNuovoModelloStepForward() {
            mostra_loading_mobile();
            if (!getSubmitted()) {
                document.f24MainForm.elements['_control.direction'].value = 'forward';
                document.f24MainForm.action = './sapef24/f24/inserisciNuovoModelloStepPhone.do?id_chiamata=1582906001015_01IHF24_H8kKc4I4m3ynWoXH&_control.tipo=S&indiceConto='+indiceConto+'&indiceContribuente='+indiceContribuente;
                document.f24MainForm.submit();
            }
        }

        function inserisciNuovoModelloStepBack() {
            mostra_loading_mobile();
            if (!getSubmitted()) {
                document.f24MainForm.elements['_control.direction'].value = 'back';
                document.f24MainForm.action = './sapef24/f24/inserisciNuovoModelloStepPhone.do?id_chiamata=1582906001015_01IHF24_H8kKc4I4m3ynWoXH&_control.tipo=S';
                document.f24MainForm.submit();
            }
        }


        function riepilogoButton() {
            mostra_loading_mobile();
            if (!getSubmitted()) {
                document.f24MainForm.elements['_control.direction'].value = 'forward';
                //document.f24MainForm.action ='./sape2/f24/findDeleghePhone.do';
                document.f24MainForm.action ='./sapef24/f24/findDeleghePhone.do';      
                document.f24MainForm.submit();
            }
        }



        function home() {
            mostra_loading_mobile();
            if (!getSubmitted()) {
                document.f24MainForm.action ='./sapef24/f24/findDeleghePhone.do';
                document.f24MainForm.submit();
            }
        }
        




      
        
    
</script>

<div class="margin-bottom20">
  
  
  
  
      <input type="button" class="btn btn-primary" value="Indietro" onclick="javascript: inserisciNuovoModelloStepBack();">
      <input type="button" class="btn btn-primary pull-right" value="Avanti" onclick="javascript: inserisciNuovoModelloStepForward();">
  
  
  
  
  
  
  
  

  </div>





              <div class="clearfix"></div>
</div><!--container-->

   




















</div></body></html>