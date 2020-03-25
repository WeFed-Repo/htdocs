 <div class="formWrapper tabber-wrapper">  
  <div class="overlayer-tab-toWrapper">
    <!-- PULSANTI -->
    <div class="form-group">   
      <div class="tab-data row">
        <div class="col-xs-6 tab-data-btn">
          <a id="scegliData" href="javascript:;"><p>Scegli la data</p> <span>(Bonifico standard)</span></a>
        </div>
        <div class="col-xs-6 tab-data-btn">
          <a id="hoFretta" href="javascript:;"><p>Ho fretta!</p> <span> (Bonifico veloce)</span></a>
        </div>
      </div>
    </div>
    <!-- RIQUADRI-->   
    <div id="tabscegliData" class="tab-data-content" style="display:none">
      <span class="tab-arrow"></span> 
      <div class="row">         
        <div class="col-sm-4 col-xs-12 form-field-input">
          <i class="icon icon-bonifico-esecuzione flLeft"></i>
          <div class="flLeft"> 
            <label class="control-label" for="dataEsecuzione">Data esecuzione</label>
            <div class="form-field">            
                <div class="input-group">
                  <input type="text" name="dataEsecuzione" size="12" value="05/04/2019" id="dataEsecuzione" class="form-control datepicker input-inline clear-x wauto" /> 
                    <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a> 
                </div>                    
            </div>  
          </div>              
        </div>   
        <div class="col-sm-4 col-xs-12 form-field-input">
          <i class="icon icon-bonifico-accredito flLeft"></i>
          <div class="flLeft">
            <label class="control-label" for="note">
              Data accredito 
            </label>
            <div class="form-field">                    
              <div class="input-group">
                <span id="dataAccreditoOE" class="output">Entro 2 gg. lavorativi</span><br>
                dalla data di esecuzione
              </div>                            
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12 form-field-input">
          <i class="icon icon-trading_euro flLeft"></i>
          <div class="flLeft">
            <label class="control-label" for="note">
              Commissione 
            </label>
            <div class="form-field">
              <div class="input-group"><span id="commissioneOE" class="output">XX,00 ?</span></div>        
            </div>
          </div>
        </div>  
       </div> 
    </div>
    <div id="tabHoFretta" class="tab-data-content" style="display:none">
        <span class="tab-arrow"></span>
        <div class="row">
          <div class="col-sm-4 col-xs-12 form-field-input">
            <i class="icon icon-bonifico-esecuzione flLeft"></i>
            <div class="flLeft">
              <label class="control-label" for="causale">Data esecuzione</label> 
              <div class="form-field">
                <div class="input-group">
                  <span id="dataEsecuzioneIU" class="output">OGGI</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12 form-field-input">
            <i class="icon icon-bonifico-accredito flLeft"></i>
            <div class="flLeft">
                <label class="control-label" for="causale">Data accredito</label> 
                <div class="form-field">
                  <div class="input-group">
                      <span id="dataAccreditoIU" class="output">ISTANTANEO</span>
                  </div>
                </div>
             </div>
          </div>
          <div class="col-sm-4 col-xs-12 form-field-input">
            <i class="icon icon-trading_euro flLeft"></i>
            <div class="flLeft">
              <label class="control-label" for="causale">Commissione 1</label> 
              <div class="form-field">
                  <div class="input-group">
                  <span id="commissione1IU" class="output">XX,00 ?</span>
                </div>
              </div>
              <label class="control-label" for="causale">Commissione 2</label> 
              <div class="form-field">
                  <div class="input-group">
                  <span id="commissione2IU" class="output">XX,00 ?</span>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>

<!--BOTTONE DI EMULAZIONE COMPORTAMENTO -->
<a href="javascript:;" onclick="unsetLayerObject()">Emulazione comportamento unsetLayer</a>
<script>
  /* funzioni di emulazione dei tab */
  var tabberBonifico = function () {
    var tabberWrapper = $('.tabber-wrapper');
    tabberWrapper.each(function () {
        var btnTab = tabberWrapper.find('.tab-data-btn a'),
            contentTab = tabberWrapper.find('.tab-data-content');
            btnTab.each(function (i) {
            $(this).click(function () {
                btnTab.closest('div').removeClass('selected');
                $(this).closest('div').addClass('selected');
                tabberWrapper.addClass('active');
                contentTab.hide();
                contentTab.eq(i).show();
            });
        });
    });
   
};
var setLayerObject = function () {
    if($('.overlayer-layer').length==0)
    {
      var elToWrap = $('.overlayer-tab-toWrapper');
      elToWrap.wrap('<div class="overlayer-obj-Wrapper">');
      $('<div class="overlayer-layer">').insertAfter(elToWrap);
    }
};

var unsetLayerObject = function () {
    if($('.overlayer-layer').length!=0)
    {
      var elToUnWrap = $('.overlayer-tab-toWrapper');
      elToUnWrap.unwrap('<div class="overlayer-obj-Wrapper">');
      $('.overlayer-layer').remove();
    }
    
};
$(function () {
  setLayerObject();
  tabberBonifico();

})
</script>