<!-- overlay richiesta token push -->
<script type="text/javascript">
  // Emulazione overlay richiesta autorizzazione push
  $(function(){
      
      $("#btnProsegui").click( function(){
        $("#autorizzazionePush").modal("show");  
      });
      
  });
</script>
<div class="modal fade" id="autorizzazionePush" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="myModalLabel">Autorizzazione</h2>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12">
                <?php
                  virtual("/librerie/include/oggetti/form/form_150/oggetto.php");
                ?>
            </div>
            <!-- pulsante per annullare (singolo)-->
            <div class="col-xs-12">
              <div class="form-group btnWrapper">
                <div class="btn-align-left">
                  <a type="button" class="btn btn-default">Torna a token online</a>
                </div>
                <div class="btn-align-right">
                  <a type="button" class="btn btn-default" data-dismiss="modal">Annulla</a>
                  <a type="button" class="btn btn-primary" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_bonifico_step3.php&liv0=1&liv1=1&liv2=0&liv3=0&responsive=y">Lorem ipsum</a>
                </div>
                <br class="clear">
              </div>
            </div>
            <!-- pulsante per annullare (singolo) -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- fine overlay richiesta token push -->

<h2>Bonifico Ordinario</h2>
<h4>Riepilogo dati</h4>
<form class="formGenerico borderFormRounded output" role="form" id="form02">
    <div class="form-group">
        <!-- UNICA RIGA CON CAMPO-->
         <div class="row">
            <div class="col-sm-12">
                <label for="" class="control-label-output">Destinazione bonifico</label>
                <span class="output">Italia</span>
            </div>
         </div>
    </div>
     <div class="form-group">      
          <div class="row">
            <div class="col-sm-6">
                <label for="" class="control-label-output">Conto di addebito</label>
                <span class="output">01077 0000049477 EUR EUR</span>
            </div>
            <div class="col-sm-6">
                <label for="" class="control-label-output">Iban ordinante</label>
                <span class="output">IT79A0558401799000000081080</span>
            </div>
         </div>
    </div>
    <div class="form-group">
         <div class="row">
            <div class="col-sm-12">
                <label for="" class="control-label-output">Importo</label>
                <span class="output">100,00 EUR</span>
            </div>
         </div>
     </div>    
      <div class="form-group">    
         <div class="row">
            <div class="col-sm-12">
                <label for="" class="control-label-output">Causale</label>
                <span class="output">versamento canone</span>
            </div>
         </div>
      </div>    
      <div class="form-group">     
          <div class="row">
            <div class="col-sm-6">
                <label for="" class="control-label-output">Data Esecuzione</label>
                <span class="output">18/09/2015</span>
            </div>
          <div class="col-sm-6">
                <label for="" class="control-label-output">Saldo disponibile al 11/09/2015</label>
                <span class="output">4.604,07 EUR</span>
            </div>

         </div>
     </div> 
     <div class="form-group">     
          <div class="row">
            <div class="col-sm-6">
                <label for="" class="control-label-output">Nome beneficiario</label>
                <span class="output">mario Rossi</span>
            </div>
            <div class="col-sm-6">
                <label for="" class="control-label-output">Nazione di residenza</label>
                <span class="output">Italia</span>
            </div>
         </div>
      </div>   
      <div class="form-group">   
         <div class="row">
            <div class="col-sm-6">
                <label for="" class="control-label-output">Iban beneficiario</label>
                <span class="output">IT38K05584017990000000XXXXX</span>
            </div>
            <div class="col-sm-6">
                <label for="" class="control-label-output">Bic</label>
                <span class="output">BPMIITMMXXX</span>
            </div>
         </div>
     </div>    
      <div class="form-group">     
         <div class="row">
            <div class="col-sm-12">
                <label for="" class="control-label-output">Banca</label>
                <span class="output">BANCA POPOLARE DI MILANO</span>
            </div>
         </div>
    </div>
</form>
 <h4>Vuoi avvisare il beneficiario via email?</h4>
 <form class="formGenerico borderFormRounded" role="form" id="form02">
 <div class="form-group">
    <div class="row">
       <div class="col-xs-3 col-sm-1">
            <div class="radio inline">
                 <label class="textWrapper">
                    <input type="radio" name="mailto" id="mailto" onclick="$('#formMailTo').show()">
                    <span class="text">Si</span>
                </label>
            </div>
        </div>
        <div class="col-xs-3 col-sm-1">
            <div class="radio inline">
                  <label class="textWrapper">
                    <input type="radio" name="mailto" id="mailto" onclick="$('#formMailTo').hide()">
                    <span class="text">No</span>
                </label>
            </div>
        </div>
    </div>
  </div>
    <div class="form-group" id="formMailTo" style="display:none">
        <div class="row">
            <div class="col-sm-12">
                <label for="" class="control-label">Indirizzo email beneficiario</label>
                 <input id="" value="" type="email" name="" class="form-control clear-x">
            </div>
        </div>
    </div>

</form>


<!--

  EX - PIN II

<h4>Password II livello</h4>
<form class="formGenerico bgPin32 borderFormRounded" role="form">
    <div class="form-group noMarginBottom">
        <div class="row">           
            
                <div class="pincode">           
                    <div class="col-sm-8 pintxt">
                        <p class="pin_testo">Inserisci la <strong class="negativo">PRIMA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">12</strong> della tua <strong>Carta Servizi Telematici</strong></p>
                    </div>
                    <div class="col-sm-4 paddform">                     
                        <div class="form-inline">
                            <div class="input-group margBottSmall">                
                                <input type="number" class="form-control" maxlength="1"/>                           
                                <span>*</span>                     
                                <input type="number" class="form-control" maxlength="1"/> 
                                <span>*</span>
                                <div class="clearfix"></div>         
                            </div>
                        </div>                      
                        <div class="form-inline" style="text-align:center">
                            <div class="input-group"> 
                                <span class="note">1</span>
                                <span class="note">2</span>
                                <span class="note">3</span>
                                <span class="note">4</span>   
                                <div class="clearfix"></div>  
                            </div>     
                        </div>
                    </div>  
                    <div class="clearfix"></div>         
                </div>
                     
        </div>
    </div>  
</form>

-->

<!-- CONTROLLO OTP TOKEN -->
<?php
  virtual("/librerie/include/oggetti/form/form_121/oggetto.php");
?>
<!-- FINE CONTROLLO OTP TOKEN -->

<div class="form-group btnWrapper">
    <div class="stepBtn">Step <strong> 2 </strong> di 2</div>
    <div class="btn-align-left">
        <a type="button" class="btn btn-default" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_bonifico.php&liv0=1&liv1=1&liv2=0&liv3=0&responsive=y">indietro</a>
    </div>
    <div class="btn-align-right">
        <a type="button" id="AnnullaPin" class="btn btn-default clearPin">annulla</a>
        <a type="button" class="btn btn-primary" id="btnProsegui">prosegui</a>
    </div>
</div>