<form method="post" action="" id="formCBill">
	<h3 class="titleSection titleForm">Titolo form</h3>
			<div class="formWrapper">
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-6">
							<label class="control-label">Label del campo autocomplete (CBILL)</label>
							<div class="form-field">
								
                <input type="text" id="autocompletamento" size="30" class="placeh form-control ui-autocomplete-input" autocomplete="off" placeholder="Inserisci il nome del beneficiario">
							</div>
						</div>
						<div class="form-field-input col-sm-6 col-xs-12">
								  <?php
                      if ($site == 'youweb') {
                      print '<label class="control-label" for="causale">Label campo input con overlayer <a href="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01\',\'Help: lorem ipsum\')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i></a></label>';
                    }
                   ?>
                   <?php
                      if ($site == 'webank') {
                      print '<label class="control-label txthelp" for="causale" onclick="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01\',\'Help: lorem ipsum\')">Label campo input con overlayer </label>';
                    }
                   ?>
                  <div id="helpDialog" class="modal fade  helpDialog" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div class="modal-body">
                        
                      </div>
                      </div>
                    </div>
                  </div>
								</label>
                
								<div class="form-field">
								  <input id="campo1" type="text" name="" maxlength="" size="" value="" class="form-control clear-x">
								</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="form-field-input col-xs-12 col-sm-6" id="importoWrapper">
              <label class="control-label" for="">Importo</label>
              <div class="form-field">
                <input type="text" name="" maxlength="6" size="6" value="" id="" class="form-control input-inline">
                <span class="fLeft paddingSmall">,</span>
                <input type="text" name="" maxlength="2" size="2" value="00" id="" class="form-control input-inline">
                <span class="fLeft paddingSmall vertical-center eur_nopad_right">EUR</span>
              </div>
            </div>
            <div class="form-field-input col-sm-6 col-xs-12">
              <?php
                      if ($site == 'youweb') {
                      print '<label class="control-label" for="causale">Label campo input con overlayer <a href="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01\',\'Help: lorem ipsum\')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i></a></label>';
                    }
                   ?>
                   <?php
                      if ($site == 'webank') {
                      print '<label class="control-label txthelp" for="causale" onclick="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01\',\'Help: lorem ipsum\')">Label campo input con overlayer </label>';
                    }
                   ?>
              <div class="form-field">
                  <div class="input-group">
                    <input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="form-control datepicker input-inline clear-x wauto" />
                    <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                </div>
              </div>
            </div>
						
					</div>
				</div>
        <div class="form-group">
          <div class="row">
            <div class="form-field-input col-xs-12 col-sm-6">
                <?php
                      if ($site == 'youweb') {
                      print '<label class="control-label" for="">Label campo input con overlayer <a href="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=02\',\'Help: lorem ipsum\')" class="no-underline btn-icon hidden-xs"><i class="icon icon-riepilogo_conto_iban" title="apri immagine di dettaglio"></i></a></label><div class="form-field">
                <input id="campo2" type="text" name="" maxlength="" size="" value="" class="form-control clear-x">
                </div>';
                    }
                   ?>
                   <?php
                      if ($site == 'webank') {
                      print '<label class="control-label txthelp" for="" onclick="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=02\',\'Help: lorem ipsum\')">Label campo input con overlayer </label>
                        <div class="form-field"><input type="text" name="" maxlength="" size="" value="" class="form-control clear-x"></div>
                      ';

                    }
                   ?>
            </div>
          </div>
        </div>
        <!-- CASO BELLETTNO FRECCIA-->
        <div class="form-group">
          <div class="row">
            <div class="col-xs-12 col-sm-10">
                 <div class="form-field">
                    <div class="row">
                         <div class="form-field-input col-xs-12 col-sm-8">
                            <?php
                              if ($site == 'youweb') {
                              print '<label class="control-label" for="">Label campo input con overlayer <a href="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=02\',\'Help: lorem ipsum\')" class="no-underline btn-icon hidden-xs"><i class="icon icon-riepilogo_conto_iban" title="apri immagine di dettaglio"></i><span class="fRight">FACS SIMILE FRECCIA</span></a></label>';
                            }
                           ?>
                           <?php
                              if ($site == 'webank') {
                              print '<label class="control-label txthelp" for="" onclick="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=02\',\'Help: lorem ipsum\')">Label campo input con overlayer </label>';

                            }
                           ?>
                            <div class="form-field">
                              <div class="row">
                                 <div class="form-field-input col-xs-3 col-sm-8">
                                    <input type="text" name="codiceFreccia1" maxlength="5" size="6" value="" id="codiceFreccia1" class="form-control clear-x">
                                  </div>
                                  <div class="form-field-input col-xs-9 col-sm-4">
                                    <input type="text" name="codiceFreccia2" maxlength="16" size="17" value="" id="codiceFreccia2" class="form-control clear-x">
                                  </div>
                              </div>
                            </div>
                        </div>
                         <div class="form-field-input col-xs-12 col-sm-4">
                              <label class="control-label" for="">Importo</label>
                              <div class="form-field">
                                <input type="text" name="" maxlength="6" size="6" value="" id="" class="form-control input-inline">
                                <span class="fLeft paddingSmall">,</span>
                                <input type="text" name="" maxlength="2" size="2" value="00" id="" class="form-control input-inline">
                                <span class="fLeft paddingSmall vertical-center eur_nopad_right">EUR</span>
                              </div>
                        </div>
                    </div>
                  </div>
              </div>
             <div class="form-field-input col-xs-12 col-sm-2">
                <label class="control-label" for="">CIN Importo</label>
                 <input type="text" name="cinImporto" maxlength="1" size="10" value="" id="cinImporto" class="form-control wauto clear-x">
              </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="form-field-input col-xs-12 col-sm-10">
                <label class="control-label" for="">Label</label>
                <input type="text" name="coordinateCreditore" maxlength="27" size="27" value="" id="coordinateCreditore" class="form-control clear-x">
            </div>
             <div class="form-field-input col-xs-12 col-sm-2">
                <label class="control-label" for="">Label</label>
                 <input type="text" name="cinIntermedio" maxlength="1" size="10" value="" id="cinIntermedio" class="form-control wauto clear-x">
              </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="form-field-input col-xs-12 col-sm-10">
                <label class="control-label" for="">Label</label>
                <input type="text" name="note" maxlength="50" size="55" value="Opzionale" id="note" class="form-control placeh clear-x">
            </div>
             <div class="form-field-input col-xs-12 col-sm-2">
                <label class="control-label" for="">Label</label>
                 <input type="text" name="cinComplessivo" maxlength="1" size="10" value="" id="cinComplessivo" class="form-control wauto clear-x">
              </div>
          </div>
        </div>
         <div class="form-group">
          <div class="row">
            <div class="form-field-input col-xs-12 col-sm-10">
                <label class="control-label" for="">Label</label>
                <input type="text" name="note" maxlength="50" size="55" value="Opzionale" id="note" class="form-control placeh clear-x">
            </div>
             <div class="form-field-input col-xs-12 col-sm-2">
                <label class="control-label" for="">Label</label>
                 <input type="text" name="cinComplessivo" maxlength="1" size="10" value="" id="cinComplessivo" class="form-control wauto clear-x">
              </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-12 col-sm-10">
               <div class="form-field">
                    <div class="row">
                          <div class="form-field-input col-sm-6 col-xs-12">
                    <?php
                            if ($site == 'youweb') {
                            print '<label class="control-label" for="causale">Label campo input con overlayer <a href="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01\',\'Help: lorem ipsum\')" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i></a></label>';
                          }
                         ?>
                         <?php
                            if ($site == 'webank') {
                            print '<label class="control-label txthelp" for="causale" onclick="javascript:OpenHelp(\'/template/modale.php?pagTit=Help: lorem ipsum&amp;pagCont=01\',\'Help: lorem ipsum\')">Label campo input con overlayer </label>';
                          }
                         ?>
                  <div class="form-field">
                      <div class="input-group">
                        <input type="text" name="dataEsecuzione" size="12" value="06/04/2017" id="dataEsecuzione" class="form-control datepicker input-inline clear-x wauto" />
                        <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                    </div>
                  </div>
                </div>
                <div class="form-field-input col-sm-6 col-xs-12">   
                    <label class="control-label" for="">Label</label>
                    <input type="text" name="codEsenzione" maxlength="1" size="3" value="" id="codEsenzione" class="form-control clear-x">
                </div>
              </div>
              </div>
            </div>
             <div class="form-field-input col-xs-12 col-sm-2">
                <label class="control-label" for="">Label</label>
                <input type="text" name="codDivisa" maxlength="1" size="10" value="" id="codDivisa" class="form-control wauto clear-x">
              </div>
          </div>
        </div>
         <div class="form-group">
          <div class="row">
            <div class="form-field-input col-xs-12 col-sm-12">
              <label class="control-label">
                Prova stilizzazione option
              </label>
              <div class="form-field">
                <div class="row">
                  <div class="form-field-input col-xs-6 col-sm-6">
                    <select name="" class="form-control" id="">             
                      <option id="" selected="selected" value="AL">Tutti</option>
                      <option value="Attivo" class="txt-strong">Attivo</option>
                      <option value="Inserito">&nbsp;&nbsp;&nbsp;Inserito</option>
                      <option value="Lorem ipsum">Lorem ipsum</option>
                      <option value="Lorem ipsum">Lorem ipsum</option>
                      <option value="Lorem ipsum">Lorem ipsum</option>                                                
                    </select>
                  </div>
                  <div class="form-field-input col-xs-6 col-sm-6">
                      <a href="#" class="btn btn-link">Cerca<i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
         <div class="form-group">
          <div class="row">
            <div class="form-field-input col-xs-12 col-sm-12">
              <label class="control-label">
                Lorem ipsum
              </label>
              <div class="form-field">
                <div class="row">
                  <div class="col-xs-12">
                    <strong>Lorem ipsum</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-12 col-sm-12">
              <label class="control-label">
                Lorem ipsum
              </label>
              <div class="form-field">
                <div class="row">
                    <div class="form-field-input col-xs-12 col-sm-3">
                        <div class="form-field">
                          <select name="" class="form-control" id="">             
                            <option id="" selected="selected" value="AL">Tutti</option>
                            <option value="Lorem ipsum">Lorem ipsum</option>
                            <option value="Lorem ipsum">Lorem ipsum</option>                                                
                          </select>
                        </div>
                    </div>
                    <div class="form-field-input col-xs-12 col-sm-6">
                      <div class="row">
                        <div class="form-field-input col-xs-6 col-sm-6">
                          <div class="form-field">
                               <span class="label-inline">Dal </span>
                               <div class="input-group">
                                  <input type="text" name="dataEsecuzione2" size="12" value="06/04/2017" id="dataEsecuzione2" class="form-control datepicker input-inline clear-x wauto" />
                                  <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                              </div>
                          </div>
                        </div>
                        <div class="form-field-input col-xs-6 col-sm-6">
                          <div class="form-field">
                               <span class="label-inline">Al </span>
                               <div class="input-group">
                                  <input type="text" name="dataEsecuzione2" size="12" value="06/04/2017" id="dataEsecuzione2" class="form-control datepicker input-inline clear-x wauto" />
                                  <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-field-input col-xs-12 col-sm-3">
                       <a href="#" class="btn btn-link">Filtra<i class="icon icon-arrow_right" title="icon-freccia_dx"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="javascript:;" onclick="$('.ui-combobox').find('input, button').prop('disabled', true)">disabilita</a>
        <div class="form-group">
        <div class="row">

          <div class="form-field-input col-xs-12 col-sm-4">
            <label class="control-label">Beneficiario (autocomplete es ric. telefonica)</label>             <div class="form-field">
             <select id="contattoClient" class="form-control" name="contattoClient" onchange="popolaTelefonoResp();"> 
                <option id="nuovoBen"  selected="selected">Nuovo beneficiario</option>
                <option value='|999/9999999|||'>999/9999999 </option>                         
             </select>
            </div>
          </div>
          <div class="form-field-input col-xs-12 col-sm-4" id="nomeBen">
            <label class="control-label">Nome beneficiario:</label>           <div class="form-inline">
                        <div class="input-group">
                            <input type="text" name="nomeBeneficiario" maxlength="35" value="" onblur="formattaStr(this, 35)" id="intestazione_beneficiario" class="form-control clear-x" readonly="readonly">
                            <div class="input-group-addon">
                              <button value="&nbsp;" id="beneficiari" title="Aggiungi/Modifica beneficiario" class="btnAggiungiBeneficiario btn-icon" role="button" aria-pressed="false">
                                <i class="icon icon-r-user_add" style="display:block"></i>
                                <i class="icon icon-r-user_remove" style="display:none"></i>
                                <i class="icon icon-edit_fill" style="display:none"></i>
                                <i class="icon icon-edit_fill-editchecked" style="display:none"></i>
                            </button>
                            </div>
                        </div>
                        <input type="hidden" name="memorizzaBeneficiario" value="false" id="memorizza">
                    </div>
          </div>
          <div class="form-field-input col-xs-12 col-sm-4 nickname">
              <label class="control-label" id="nickNameLabel" style="display:none">Nickname</label>
              <div class="form-field">
                <input type="text" name="nickName" value="" id="nickName" style="display:none" class="form-control">
              </div>
          </div>
        </div>
        <div class="row"> 
          <div class="col-xs-12">
            <input type="checkbox" name="memorizza" value="S" id="memorizza" style="display:none">
            <input type="hidden" name="memorizza" value="N" id="memorizza" style="display:none">
          </div>
        </div>
      </div>
      <div class="form-group">
          <div class="row">
            <div class="form-field-input col-sm-5 col-xs-12">
              <label class="control-label">Numero di telefono:</label>
                <div class="">
                  <input type="text" name="prefTelefono" maxlength="3" size="4" value="" id="prefTelefono" class="form-control wauto floatl-marginr10" title="prefisso telefonico">
                  <input type="text" name="numTelefono" maxlength="7" size="10" value="" id="numTelefono" class="form-control wauto" title="numero telefonico">
                </div>
            </div>
            <div class="form-field-input col-sm-7 col-xs-12">
              <label class="control-label">Gestore Telefonico</label>
            <div class="form-field gestore">
               <label class="imgLabel" for="gestore0">
                  <img class="gestoreNonAttivo" id="gestoreImg0" title="Vodafone" src="/common/fe/img/Vodafone.png" width="65px">
                  <input type="radio" name="nomeGestore" value="Vodafone;1" id="gestore0" class="input_hidden inputGestore">
                </label>
              <label class="imgLabel" for="gestore1">
                <img class="gestoreNonAttivo" id="gestoreImg1" title="Tim" src="/common/fe/img/Tim.png" width="65px">
                <input type="radio" name="nomeGestore" value="Tim;2" id="gestore1" class="input_hidden inputGestore">
              </label>
                  
               <label class="imgLabel" for="gestore2"><img class="gestoreNonAttivo" id="gestoreImg2" title="Wind" src="/common/fe/img/Wind.png" width="65px">
              <input type="radio" name="nomeGestore" value="Wind;3" id="gestore2" class="input_hidden inputGestore">
            </label>
                  
          
            <label class="imgLabel" for="gestore3"><img class="gestoreNonAttivo" id="gestoreImg3" title="Tiscali" src="/common/fe/img/Tiscali.png" width="65px">
              <input type="radio" name="nomeGestore" value="Tiscali;4" id="gestore3" class="input_hidden inputGestore">
            </label>
                  
          
            <label class="imgLabel" for="gestore4"><img class="gestoreNonAttivo" id="gestoreImg4" title="H3G" src="/common/fe/img/H3G.png" width="65px">
              <input type="radio" name="nomeGestore" value="H3G;5" id="gestore4" class="input_hidden inputGestore">
            </label>
                  
          
            <label class="imgLabel" for="gestore5"><img class="gestoreNonAttivo" id="gestoreImg5" title="PosteMobile" src="/common/fe/img/PosteMobile.png" width="65px">
              <input type="radio" name="nomeGestore" value="PosteMobile;8" id="gestore5" class="input_hidden inputGestore">
            </label>
                  
          
            <label class="imgLabel" for="gestore6"><img class="gestoreNonAttivo" id="gestoreImg6" title="CoopVoce" src="/common/fe/img/CoopVoce.png" width="65px">
              <input type="radio" name="nomeGestore" value="CoopVoce;9" id="gestore6" class="input_hidden inputGestore">
            </label>
            
            
               
                  
                              
        </div>  
      </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-12 col-sm-12">
             	<label>
		            <input type="checkbox" name="" id="">Fronte e Retro in un unico file
		          </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-xs-12 col-sm-12">  
              <span class="flLeft width100 paddingLeft">
                Letta l' informativa sul trattamento e la protezione dei dati personali di AIRC.      
              </span>    
              <input type="checkbox" class="flLeft" /> 
              <label class="labelConsenso" >                     
                Presto il consenso all'invio di materiale informativo (opzionale)   
              </label>
            </div>
          </div>
        </div>
        <!-- INPUT CON SPUNTA PER CONFERMA INSERIMENTO/TOGLIERE E AGGIUNGERE LA CLASSE check-visible ALL'OCCORRENZA PER NASCONDERE E VISUALIZZARE LA SPUNTA-->
        <div class="form-group">
          <div class="row ">
              <div class="col-xs-12 col-sm-6">
                <div class="input-checked-wrapper check-visible" id="input-to-check">  
                   <input type="text" class="form-control">
                   <!-- -->
                   <span class="input-checked">
                      <i class="icon icon icon-ico_check"></i>
                   </span>
                 </div>
              </div>
              <!-- EMULAZIONE DI SPUNTA -->
              <div class="col-xs-12 col-sm-6">
                  <a style="text-decoration: underline; cursor pointer;" href="javascript:;" onclick="$('#input-to-check').toggleClass('check-visible')">EMULA LA SPUNTA NEL CAMPO INPUT</a>
              </div>
          </div>              
        </div>
	</div>


  
  <!-- LINK SOLO DI EMULAZIONE; NON COPIARE IN SVILUPPO E PRODUZIONE -->
 <a href="" style="float:right;text-decoration: underline" id="btnInvio" class="blink">LINK PER EMULARE IL COMPORTAMENTO DEL WARNING SUL CAMPO IMPORTO</a>
  <br>

</form>


<!--EMULAZIONE ATTVIVO SU SCELTA OPERATORE TELEFONICO-->
<script type="text/javascript">
function popolaTelefonoResp(){
  codice = $("#contattoClient :selected");
  popolaTelefono(codice);
}

var oldValue = "";




  function popolaTelefono(value){
    
        //reset del form
      $("#intestazione_beneficiario").val('');
      $("#nickName").val('');
      $("#prefTelefono").val('');
      $("#numTelefono").val('');
      $("#memorizza").valTrigger("false");
      $("#beneficiari").removeClass('addchecked').removeClass('editchecked');
      
      resetOperatori();
      var valore = $(value).attr("value");
      var res = valore.split("|");
      var id = $(value).attr("id");
      if(typeof id !== typeof undefined && id !== false && id === "nuovoBen"){
        
      }else if(res.length){
        var gestore = res[0];
              
        var cel = res[1].split("/");
        if(cel.length > 1){
          var pref = cel[0];
          var num = cel[1];
        }
        var nick = res[2];
        var intest = res[3];
        var codice = res[4];
      }
      
    if(gestore){
        //seleziona il radio button
        //var index = gestore-1
      //$('input:radio[name=nomeGestore]')[index].checked = true;
      resetOperatori();
      $(".inputGestore").each(function(idx, elem) {
               var nomeOperatore = $(elem).val();
               var array = nomeOperatore.split(";");
             var codOperatore = array[1];
             $(elem).addClass('gestoreNonAttivo');
             if(codOperatore == gestore){
                $(elem).attr("checked",true);
                var img = $(elem).prev();
          img.addClass('gestoreAttivo').removeClass('gestoreNonAttivo');
                  return false;
             }
             
            });
    }
    if(cel){
      $("#prefTelefono").val(pref);
      $("#numTelefono").val(num);
    }
    if(intest){
      $("#intestazione_beneficiario").val(intest);
    }
    if(nick){
      $("#nickName").val(nick);
    }
    
    if(codice){
      $("input[name='codiceBeneficiario']").val(codice);
    }
    
    }
    
  function resetOperatori(){
    //deseleziona tutte le immagini
    $('.gestore img').each(function(){
      $(this).removeClass('gestoreAttivo').addClass('gestoreNonAttivo');
    });
  }
    





$('.gestore img').click(function(){
  resetOperatori();
  $(this).addClass('gestoreAttivo').removeClass('gestoreNonAttivo');
});


</script>
<!--PLACEHOLDER VIA JS-->
<script>
  $(function () {
    var arrayFields = ['campo1','campo2'];
    var arrayPlaceholders = ['testo placeholder1','testo placeholder2']

    $.each(arrayFields,function(index,campo){
       $('#' + arrayFields[index]).attr('placeholder',arrayPlaceholders[index]);
    })
  })
</script>



<script type="text/javascript">

function popolaTelefonoResp(){
  codice = $("#contattoClient :selected");
  popolaTelefono(codice);
}

var oldValue = "";


$(function( $, undefined ) {
    
   $.widget( "ui.combobox", {

      version: "@VERSION",

      widgetEventPrefix: "combobox",

      uiCombo: null,
      uiInput: null,
      _wasOpen: false,

      _create: function() {

         var self = this,
             select = this.element.hide(),
             input, wrapper;

         input = this.uiInput =
                  $( "<input />" )
                      .insertAfter(select)
                      .addClass("ui-widget ui-widget-content  ui-combobox-input form-control")
                      .val(select.children(':selected').text())
                      .attr('tabindex', select.attr( 'tabindex'))
                      .attr('aria-autocomplete', 'inline')
                      .css('width', '90%');
         wrapper = this.uiCombo = 
            input.wrap( '<span>' )
               .parent()
               .addClass( 'ui-combobox' )
               .insertAfter( select );
               
         input.autocomplete({
             delay: 0,
             minLength: 0,

             appendTo: wrapper,
             source: $.proxy( this, "_linkSelectList" ),
             select: function(event, ui) {
               $(this).attr('title', ui.item.value);
           }
          });
          
          input.focusin(function() {
            oldValue = $(this).val();
            $(this).val("");
          });
          
      input.focusout(function() {
            $(this).val(oldValue);
          });

         $( "<button>" )
            .attr( "tabIndex", -1 )
            .attr( "type", "button" )
            .insertAfter( input )
            .button({
               icons: {
                  primary: "ui-icon-triangle-1-s"
               },
               text: false})
            .append('<i class="icon icon-arrow_down"></i>')
            .removeClass("ui-corner-all")
            .addClass("ui-button-icon ui-combobox-button dropdown-arrow");

         // Our items have HTML tags.  The default rendering uses text()
         // to set the content of the <a> tag.  We need html().
         input.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
               ul.attr('role','listbox')
         .attr('aria-expanded','true');
               
               return $( "<li>" )
                           .attr('class', item.option.className)
                           .attr('role', 'option')
                           .append( $( "<a>" ).html( item.label ) )
                           .appendTo( ul );

    };
         this._on( this._events );
      },

      _linkSelectList: function( request, response ) {
         var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), 'i' );
         response( this.element.children('option:not([style*="display: none"])').map(function() {  
      var text = $( this ).text();
      var value = $(this).attr('value');
      var id = $(this).attr('id');

      if ( this.value && ( !request.term || matcher.test(text) ) ) {
        var optionData = {
            label: text,
            value: text,
            id:id,
            option: this
        };
        if (request.term) {
          optionData.label = text.replace(
            new RegExp(
               "(?![^&;]+;)(?!<[^<>]*)(" +
               $.ui.autocomplete.escapeRegex(request.term) +
               ")(?![^<>]*>)(?![^&;]+;)", "gi"),
               "<strong>$1</strong>");
        }
        return optionData;
      }})
    );
  },

      _events: {
         "autocompletechange input" : function(event, ui) {
            var $el = $(event.currentTarget);
            var changedOption = ui.item ? ui.item.option : null;
            if ( !ui.item ) {
               var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $el.val() ) + "$", "i" ),
               valid = false,
               matchContains = null,
               iContains = 0,
               iSelectCtr = -1,
               iSelected = -1,
               optContains = null;
               if (this.options.autofillsinglematch) {
                  matchContains = new RegExp($.ui.autocomplete.escapeRegex($el.val()), "i");
               }

               this.element.children( "option" ).each(function() {
                     var t = $(this).text();
                     if ( t.match( matcher ) ) {
                        this.selected = valid = true;
                        return false;
                     }
                     if (matchContains) {
                        // look for items containing the value
                        iSelectCtr++;
                        if (t.match(matchContains)) {
                           iContains++;
                           optContains = $(this);
                           iSelected = iSelectCtr;
                        }
                     }
                });

                if ( !valid ) {
                   // autofill option:  if there is just one match, then select the matched option
                   if (iContains == 1) {
                      changedOption = optContains[0];
                      changedOption.selected = true;
                      var t2 = optContains.text();
                      $el.val(t2);
                      $el.data('ui-autocomplete').term = t2;
                      this.element.prop('selectedIndex', iSelected);
                     
                   } else {
                      // remove invalid value, as it didn't match anything
                      $el.val( '' );
                      // Internally, term must change before another search is performed
                      // if the same search is performed again, the menu won't be shown
                      // because the value didn't actually change via a keyboard event
                      $el.data( 'ui-autocomplete' ).term = '';

                      this.element.prop('selectedIndex', -1);
                   }
                }
            }

            this._trigger( "change", event, {
                  item: changedOption
                });
         },

         "autocompleteselect input": function( event, ui ) {
            ui.item.option.selected = true;
            $("input[name='intestazione']").attr('readonly','readonly');
      $("input[name='nickName']").attr('readonly','readonly');
      $("#prefTelefono").attr('readonly','readonly');
      $("#numTelefono").attr('readonly','readonly');
      oldValue = $(ui.item.option).text();
      popolaTelefono(ui.item.option);
            
            if(ui.item.id == "nuovoBen"){             
              $('#beneficiari').removeClass('btnEditCheck').removeClass('editchecked').addClass('btnAggiungiBeneficiario').show();
              $('#beneficiari .icon').hide();
              $('#beneficiari .icon-r-user_add').show();
              $('#beneficiari').attr('title',' Aggiungi beneficiario');
              hideInputNickname();
        $("#memorizza").valTrigger("false");
        $("input[name='intestazione']").attr('readonly','readonly');
        $("#prefTelefono").removeAttr('readonly');
          $("#numTelefono").removeAttr('readonly');
                
            }else{
              $('#beneficiari').removeClass('btnAggiungiBeneficiario').removeClass('addchecked').addClass('btnEditCheck').show();
              $('#beneficiari .icon').hide();
              $('#beneficiari .icon.icon-edit_fill').show();
              $('#beneficiari').attr('title','Modifica beneficiario');
              $("#nickName").show();
              $("#nickNameLabel").show();
              $("#memorizza").valTrigger('false');  
            }
            this._trigger( "select", event, {
                  item: ui.item.option
             });

         },

         "autocompleteopen input": function ( event, ui ) {
            this.uiCombo.children('.ui-autocomplete')
               .outerWidth(this.uiCombo.outerWidth(true));
         },

         "mousedown .ui-combobox-button" : function ( event ) {
            this._wasOpen = this.uiInput.autocomplete("widget").is(":visible");
         },

    // click sul triangolo che apre la combobox 
         "click .ui-combobox-button" : function( event ) {
            this.uiInput.focus();
            // close if already visible
            if (this._wasOpen)
               return;
            // pass empty string as value to search for, displaying all results
            this.uiInput.autocomplete("search", "");
         }
      },

      value: function ( newVal ) {
         var select = this.element,
             valid = false,
             selected;

         if ( !arguments.length ) {
            selected = select.children( ":selected" );
            return selected.length > 0 ? selected.val() : null;
         }

         select.prop('selectedIndex', -1);
         select.children('option').each(function() {
               if ( this.value == newVal ) {
                  this.selected = valid = true;
                  return false;
               }
            });

         if ( valid ) {
            this.uiInput.val(select.children(':selected').text());
            this.uiInput.attr('title', select.children(':selected').text())
         } else {
            this.uiInput.val( "" );
            this.element.prop('selectedIndex', -1);
         }

      },

      _destroy: function () {
         this.element.show();
         this.uiCombo.replaceWith( this.element );
      },

      widget: function () {
         return this.uiCombo;
      },

      _getCreateEventData: function() {
         return {
            select: this.element,
            combo: this.uiCombo,
            input: this.uiInput
         };
      }
    });
    
    $( "#contattoClient" ).combobox();
}(jQuery));

  function popolaTelefono(value){
    
        //reset del form
      $("#intestazione_beneficiario").val('');
      $("#nickName").val('');
      $("#prefTelefono").val('');
      $("#numTelefono").val('');
      $("#memorizza").valTrigger("false");
      $("#beneficiari").removeClass('addchecked').removeClass('editchecked');

      resetOperatori();
      var valore = $(value).attr("value");
      var res = valore.split("|");
      var id = $(value).attr("id");
      if(typeof id !== typeof undefined && id !== false && id === "nuovoBen"){
        
      }else if(res.length){
        var gestore = res[0];
              
        var cel = res[1].split("/");
        if(cel.length > 1){
          var pref = cel[0];
          var num = cel[1];
        }
        var nick = res[2];
        var intest = res[3];
        var codice = res[4];
      }
      
    if(gestore){
        //seleziona il radio button
        //var index = gestore-1
      //$('input:radio[name=nomeGestore]')[index].checked = true;
      resetOperatori();
      $(".inputGestore").each(function(idx, elem) {
               var nomeOperatore = $(elem).val();
               var array = nomeOperatore.split(";");
             var codOperatore = array[1];
             $(elem).addClass('gestoreNonAttivo');
             if(codOperatore == gestore){
                $(elem).attr("checked",true);
                var img = $(elem).prev();
          img.addClass('gestoreAttivo').removeClass('gestoreNonAttivo');
                  return false;
             }
             
            });
    }
    if(cel){
      $("#prefTelefono").val(pref);
      $("#numTelefono").val(num);
    }
    if(intest){
      $("#intestazione_beneficiario").val(intest);
    }
    if(nick){
      $("#nickName").val(nick);
    }
    
    if(codice){
      $("input[name='codiceBeneficiario']").val(codice);
    }
    
    }
    
  function resetOperatori(){
    //deseleziona tutte le immagini
    $('.gestore img').each(function(){
      $(this).removeClass('gestoreAttivo').addClass('gestoreNonAttivo');
    });
  }
    
    function hideInputNickname(){
    $("#nickNameLabel").hide();
    $("#nickName").hide();
    }
    
    function showInputNickname(){
    $("#nickNameLabel").show();
    $("#nickName").show();
    }

  function mostraNuovaRicarica(valore){
    if(isMobile()){
      if(valore){
        $('.ripetiPagamento').hide();
        $('#mainNuovaRicarica').show();
      }else{
        $('.ripetiPagamento').show();
        $('#mainNuovaRicarica').hide();
      
      }
    }
  }
$(document).ready(function(){


  if(isMobile()){$('.ripetiPagamento').show();
        $('#mainNuovaRicarica').hide();}


    //fix ie8 immagini dentro label non cliccabili
    var a = document.querySelectorAll(".imgLabel");
    for(var i=0,j=a.length;i<j;i++){
    if(a[i].hasChildNodes && a[i].childNodes.item(0).tagName == "IMG") {
          a[i].childNodes.item(0).forid = a[i].htmlFor;
          a[i].childNodes.item(0).onclick = function(){
              var e = document.getElementById(this.forid);
              switch(e.type){
                case "radio": e.checked|=1;break;
                case "checkbox": e.checked=!e.checked;break;
                case "text": case "password": case "textarea": e.focus(); break;
              }
          }
        }
    }
 
  //seleziona operatore (es se arrivo da modifica)         
  var nomeGestore = '';
  var memorizzaBeneficiario= 'false';
  var memorizza = false;
      
  if(memorizzaBeneficiario == "true"){
    memorizza = true;
  }
      
  if(nomeGestore != ''){
    $(".inputGestore").each(function(idx, elem) {
      var nomeOperatore = $(elem).val();
      if(nomeGestore == nomeOperatore){
        $($(elem).attr("checked",true));
        var img = $(elem).prev();
        img.addClass('gestoreAttivo').removeClass('gestoreNonAttivo');
        return false;
      }
    });
  }
      
  //TODO seleziona beneficiario nella select(es se arrivo da modifica)
  //leggo nickname
  //seleziono la option nella select che ha res[2]= nickname
  var id =$("#contattoClient").find('option:selected').attr('id');
  
  if(typeof id !== typeof undefined && id !== false && id === "nuovoBen"){
    //init in base al checkbox
    if($('#memorizza').val()=="true"){
      showInputNickname();
      $("#intestazione_beneficiario").removeAttr('readonly');
      $("#nickName").removeAttr('readonly');
      $("#beneficiari").addClass('addchecked');
    }else{
      //non memorizza
      hideInputNickname();
      $("#intestazione_beneficiario").attr('readonly','readonly');
      $("#beneficiari").removeClass('addchecked');

    }
  }else{
    if($('#memorizza').val()=="true"){
      showInputNickname();
      $("#intestazione_beneficiario").removeAttr('readonly');
      $("#nickName").removeAttr('readonly');
      $("#beneficiari").addClass('addchecked');
    }else{
      //non memorizza
      hideInputNickname();
      $("#intestazione_beneficiario").attr('readonly','readonly');
      $("#beneficiari").removeClass('addchecked');
    }      
  }
  
  updateBeneficiariRole($("#memorizza").val().toLowerCase()=="true");
});

//Pulsante/checkbox aggiungi/modifica beneficiario
$("#beneficiari").click(function(e){
  e.preventDefault();   
  var id =$("#contattoClient").find('option:selected').attr('id');
    
  //Se nella select è selezionato nuovo beneficiario 
  if(typeof id !== typeof undefined && id !== false && id === "nuovoBen"){
    //NUOVO BENEFICIARIO 
    //memorizza
    if($('#memorizza').val()=="false"){
      //mostra il nickname
      showInputNickname();
      $("#nickName").removeAttr('readonly');
      //abilita nuovo beneficiario
      $("#intestazione_beneficiario").removeAttr('readonly');
      //il flag memorizza è 'on'
      $("#memorizza").valTrigger('true');
      //mostro immagine con checkbox  checked
      $(this).addClass('addchecked');
    }else{
      //non memorizza
      hideInputNickname();
      //$("#intestazione_beneficiario").val('Opzionale');
      $("#memorizza").valTrigger('false');
      $("#intestazione_beneficiario").attr('readonly','readonly');
      //immagine con checkbox  unchecked
      $(this).removeClass('addchecked');

    }
  }else{ // BENEFICIARIO ESISTENTE
    //modifica
    if($("#memorizza").val()=="false"){
      $("#intestazione_beneficiario").removeAttr('readonly');
      $("#memorizza").valTrigger('true');
      $("#prefTelefono").removeAttr('readonly');
      $("#numTelefono").removeAttr('readonly');
      $(this).addClass('editchecked');
      $('#beneficiari .icon').hide();
      $('#beneficiari .icon-edit_fill-editchecked').show();
    }else{
      popolaTelefono($("#contattoClient").find('option:selected'));
      $("#intestazione_beneficiario").attr('readonly','readonly');
      $("#nickName").attr('readonly','readonly');
      $("#prefTelefono").attr('readonly','readonly');
      $("#numTelefono").attr('readonly','readonly');
      $("#memorizza").valTrigger('false');
      $(this).removeClass('editchecked');
      $('#beneficiari .icon').hide();
      $('#beneficiari .icon-edit_fill').show();
    }
  }
});

$('.gestore img').click(function(){
  resetOperatori();
  $(this).addClass('gestoreAttivo').removeClass('gestoreNonAttivo');
});

// AGGIORNO IL CAMPO BENEFICIARI
$("#memorizza").change(function(){
  updateBeneficiariRole($("#memorizza").val().toLowerCase()=="true");
});
window.updateBeneficiariRole = function(value) {
  var beneficiari = $("#beneficiari");
  $(beneficiari).attr("role", "button");
  if (value) {
    $(beneficiari).attr("aria-pressed", "true");
  }
  else {
    $(beneficiari).attr("aria-pressed", "false");
  }
}
</script> 
<!--
<script type="text/javascript">
  var lista = [];
  
    lista[0] = { label: "Enel Servizi SPA -04B", value: "Enel Servizi SPA -04B", type:"cbill" }; 
    lista[1] = { label: "Enel GAS e Luce SPA -04B", value: "Enel GAS e Luce SPA -04B" , type:"cbill"}; 
    lista[2] = { label: "Enel GAS e Luce SPA -04B", value: "Enel GAS e Luce SPA -04B", type:"cbill"};
    lista[3] = { label: "Scuola media Eneide 52A", value: "Scuola media Eneide 52A", type:"pagopa"}
    lista[4] = { label: "Scuola media Eneide 52A", value: "Scuola media Eneide 52A", type:"pagopa"}
    function __highlight(s, t) {
    var matcher = new RegExp("("+$.ui.autocomplete.escapeRegex(t)+")", "i" );
      return s.label.replace(matcher, "<strong>$1</strong>");
  }
  $(function() {
    var indexItem = 0;
    $("#autocompletamento").autocomplete({
      source: function(req, resp) {
                var re = $.ui.autocomplete.escapeRegex(req.term);
                var matcher = new RegExp( re, "i" );
                var a = $.grep(lista, function(item,index){
                    return matcher.test(item.label);
                });
                
               
                resp($.map(a, function(item) {
                    return {label: __highlight(item, req.term), value: item};
                  }));
            },

          select: function( event, ui ) {
                    $("#autocompletamento").val(ui.item.value.label);  
                    $("#codSia").val(ui.item.value.value);
          event.preventDefault();
            },
        
      focus: function( event, ui )                     $("#autocompletamento").val(ui.item.value.label);  
                    $("#codSia").val(ui.item.value.value);
          event.preventDefault();
            },

      minLength: 1
    })
    .data( "ui-autocomplete" )._renderItem = function( ul, item ) {
                  // only change here was to replace .text() with .html()
                  ul.addClass('suggerimenti');{

                  indexItem = 1;
                  //var classSeparator = 'separator_auto';
                  return $( "<li class=\"" + item.value.type  +  "\"></li>" )
                        .data( "item.autocomplete", item )
                        .append( $( "<a></a>" ).html(item.label) )
                        .appendTo( ul );
        };
  });
  
  $(document).ready(function(){
  
    
    var documenti = $('.imgLnkPdf').html();
    //documenti = documenti.replace(/<br>/g, '');
    $("#documenti").append(documenti);
    $("#ico-documenti").show();
    $("#ico-documenti").click(function(){
      if( $("#documenti").hasClass('active')){
        $("#documenti").hide('slow');
        $("#documenti").removeClass('active');
      }else{
        $("#documenti").show('slow');
        $("#documenti").addClass('active');
      }
    });
    
    $(document).on("click","#documenti.active", function(){
        $("#documenti").hide('slow');
        $("#documenti").removeClass('active');
    })
  
  
  
    var codsia = $("#codSia").val();
    if (codsia != "") {
      var biller = $.grep(lista, function(e){ return e.value == codsia })[0];
      $('#autocompletamento').val(biller.label);
    }

    if ($("#autocompletamento").val() != "") {
      $("#autocompletamento").removeClass("placeh");
    } else {
      $("#autocompletamento").addClass("placeh");
      $("#autocompletamento").attr("", "Inserisci il nome del beneficiario");
    }
  
    $("#autocompletamento").live('focus',function(){
      if($(this).hasClass("placeh")){
        $("#autocompletamento").attr("value", "");
        $("#autocompletamento").removeClass("placeh");
      }
    });
    $("#autocompletamento").live('focusout',function(){
      if($(this).attr("value") == ""){
        $("#autocompletamento").addClass("placeh");
        $("#codSia").val("");
        $("#autocompletamento").attr("value", "Inserisci il nome del beneficiario");
      }
    });
    
  });
  
  
  
</script>
-->



<!--

<script type="text/javascript">
  var lista = [];

  function crea(req, resp) {
    var re = $.ui.autocomplete.escapeRegex(req.term);
        
        resp($.map(lista, function(item) {
          return {label: __highlight(item, req.term), value: item};
        }));
  }
  
  $(function() {
      $("#autocompletamento").autocomplete({
      source: function(req, resp) {
        $.ajax({
          type: "POST",
              url: "/include/cbillFiltraggio.php",
              data: "stringaRicerca="+$("#autocompletamento").val(),      
              dataType: 'json',
              success: function(result){
                lista = result["rows"];
                crea(req, resp);
                $('.suggerimenti').prepend('<li class="suggerimenti">suggerimenti</li>');

            }
          });
        },

      select: function( event, ui ) {
        updateField(ui.item.value);
        event.preventDefault();
      },

          focus: function( event, ui ) {
            updateField(ui.item.value);
        event.preventDefault();
      },

          minLength: 3
        })
      .data( "ui-autocomplete" )._renderItem = function( ul, item ) {
        // only change here was to replace .text() with .html()
        ul.addClass('suggerimenti');
        indexItem = 1;
        var cl = getIcon(item.value); 
        return $( "<li class=\"" + cl + "\"></li>" )
          .data( "item.autocomplete", item )
          .append( $( "<a></a>" ).html(item.label) )
          .appendTo( ul );
      };
  });
  
  function __highlight(s, t) {
    var matcher = new RegExp("("+$.ui.autocomplete.escapeRegex(t)+")", "i" );
      return s.dsbiller.replace(matcher, "<strong>$1</strong>");
  }
  
  function getIcon(value) {
    var cl = "cbill";
    if (value.profilo_biller=="AGID") cl = "pagopa";
    return cl;
  }
  
  function updateField(value) {
    $("#autocompletamento").val(value.dsbiller);  
    $("#codSia").val(value.csetif);
  }
 
  
  /*$(document).ready(function(){
    var codsia = $("#codSia").val();
    if (codsia != "") {
      $.ajax({
        type: "POST",
            url: "/docs_convergenza/include/cbillFiltraggio.php",
            data: "stringaRicerca="+codsia,      
            dataType: 'json',
            success: function(result){
          lista = result["rows"];
          var biller = $.grep(lista, function(e){ return e.value == codsia })[0];
          $('#autocompletamento').val(biller.label);
          }
        });
    }
   
  });*/
  
</script>-->
