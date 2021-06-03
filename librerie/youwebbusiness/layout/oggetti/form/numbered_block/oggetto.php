<section class="no-margin-section">
  <div class="bordered">
    <section>
      <h4>Suddividi la tua spesa</h4>
      <div class="sub-title-block">
        <div class="row">
            <div class="col-12 col-md-8">
              <span class="sub-title-block-left">Potrai suddividere l'importo con un massimo di 5 transazioni</span>
            </div>
           <div class="col-12 col-md-4 text-md-right">
              <span class="sub-title-block-right">
                    Importo:
                    <span class="float-right">0,00 EUR</span>
              </span>
            </div>
        </div>
      </div>
    </section>
    <section>
     <div class="numbered-block">
        <div class="block-number"><span data-number="1">1</span></div>
          <a href="#" class="block-number-title">Movimento <span data-number="1">1</span></a>
          <div class="numbered-block-inner">
              <form class="form-grid">
                <div class="form-row">
                    <div class="form-group col-6 col-md-2">
                        <label class="control-label">Data</label>
                        <div class="input-group datepicker">
                          <input disabled="" type="text" class="input-group-addon form-control hasTimepicker" placeholder="00:00" data-timepicker="">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="icon icon-ico_calendario"></i>
                            </span>
                          </div>
                        </div>
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <label class="control-label">Categoria</label>
                        <select class="form-control" id="">
                          <option selected="">Lorem</option>
                          <option>Ipsum</option>
                        </select>
                    </div>
                    <div class="form-group col-6 col-md-3">
                        <label class="control-label">Sottocategoria</label>
                        <select class="form-control" id="">
                          <option selected="">Lorem</option>
                          <option>Ipsum</option>
                        </select>
                    </div>
                    <div class="form-group col-6 col-md-2">
                        <label class="control-label">Hashtag</label>
                        <input type="text" class="form-control" placeholder="Text" id="" value="Text">
                    </div>
                    <div class="form-group col-6 col-md-2">
                        <label class="control-label">Importo</label>
                        <input type="text" class="form-control" placeholder="Text" id="" value="Text">
                    </div>
                </div>
              </form>
          </div>
        </div>
     </section>
  </div>
</section>
    
    
    
    
    
    
    
    
    <!--html del blocco da duplicare--->
    <div id="templateDividiSpesa" style="display:none">
          
    </div>



<script>
 var counterBoxDividiSpesa = 1,
     wrapperDividiSpesa = $("#templateDividiSpesa")
     templateDividiSpesa =$.trim($("#templateDividiSpesa").html());
 console.log(templateDividiSpesa);
 
</script>