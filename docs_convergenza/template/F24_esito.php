<html><head>
    <title>Esito diagnostico sul Modello F24 presentato</title>
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
      <script type="text/javascript" src="/sapef24/f24/javascript/icheck.min.js?t=1583148680468"></script>
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
      <?php if($_REQUEST['bank'] == 'HT') { $stileSito = 'styleYouweb'; }
  					else if($_REQUEST['bank'] == 'WB') { $stileSito = 'styleWebank'; }
  					else if($_REQUEST['bank'] == 'AL') { $stileSito = 'styleAletti'; }
  					if( $stileSito ) { ?>
  						<link media="screen" rel="stylesheet" type="text/css" href="/sapef24/f24/styles/phone/<?php echo $stileSito ?>.css">
  		<?php } ?>

          <script src="/sapef24/f24/javascript/jquery.jspanel.min.js?t=1583148680468"></script>
          <script src="/sapef24/f24/javascript/mobile.js?t=1583148680468"></script>
          <script src="/sapef24/f24/javascript/mobile-detect.js?t=1583148680468"></script>
          <script src="/sapef24/f24/javascript/jquery.tablesorter.js?t=1583148680468"></script>
          <script src="/sapef24/f24/javascript/jquery.tablesorter.pager.js?t=1583148680468"></script>

          <link type="text/css" href="/sapef24/f24/styles/jquery.tablesorter.pager.css?t=1583148680468" rel="stylesheet">

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

  <body onload="window.focus();" style="zoom: 1;">
      <div id="loading_mobile" style="display: none;"></div>
      <script type="text/javascript">
          mostra_loading_mobile();
      </script>
          <div class="container">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="flag pagamentoF24">&nbsp;</div>
                      <h1>Esito diagnostico sul Modello F24 presentato </h1>









  <div class="section clearfix error">
      <h3 class="titleSection">Lista errori</h3>

      <div class="clearfix"></div>

      <div class="bs-example">

              <div class="listaErrori">
                  <div class="table-responsive">
                      <table class="table">
                          <tbody>
                              <tr>
                                  <td class="col-xs-4 fixed"><strong>Sezione:</strong></td>
                                  <td class="col-xs-8"></td>
                              </tr>
                              <tr>
                                  <td><strong>Codice Errore:</strong></td>
                                  <td></td>
                              </tr>
                              <tr>
                                  <td><strong>Descrizione:</strong></td>
                                  <td>
                                      Nessuna sezione valorizzata per il modello

                          </td>
                              </tr>
                              <tr>
                                  <td><strong>Valore Errato:</strong></td>
                                  <td></td>
                              </tr>
                          </tbody>
                      </table>
                  </div><!-- / table-responsive -->
              </div>

      </div><!-- / bs-example -->
  </div><!-- / section clearfix -->



                  </div><!-- /col-sm-12 col-sm-pull-12-->
              </div><!-- /row-->
                <div class="pull-right margin-bottom20">
          <input type="button" id="idButton" class="btn" value="Chiudi">
      </div>

  <script type="text/javascript">

      $(document).ready(function()
      {
          $('#idButton').on('tap touchmove touchstart click focus', function() {
              window.parent.closeModalPopup();
          });
      });

  </script>
            <div class="clearfix"></div>
        </div><!--container-->



  </body></html>
