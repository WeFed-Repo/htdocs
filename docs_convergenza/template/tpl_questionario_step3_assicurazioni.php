<!-- titolo di pagina -->
<section>
    <div class="titolo">
        <h1>
            <div class="row">
                <div class="col-sm-12">
                    <span>Il tuo profilo assicurativo<br><span>Rispondi alle domande</span></span>
                </div>
            </div>
        </h1>
    </div>
</section>

<!-- step secondo del questionario -->
<form method="post" action="" id="">
    <div class=""> <h3><span>Area di bisogno:</span> AREA_DI_BISOGNO_1</h3></div>
    <h3 class="titleSection titleForm">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod</h3>
      <div class="form-group">
            <div class="row">
               <div class="form-field-input col-xs-6 col-sm-2">
                  <label><input type="radio" name="quest1" value="S" onclick="$('#quest2').show();">S&igrave;</label>
               </div>
              <div class="form-field-input col-xs-6 col-sm-2">
                 <label><input type="radio" name="quest1" value="N"> No</label>
               </div>
            </div>
      </div>
      <div id="quest2" style="display:none">
        <h3 class="titleSection titleForm">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod</h3>
        <div class="form-group">
              <div class="row">
                  <div class="form-field-input col-xs-6 col-sm-2">
                      <label>
                        <input type="radio" name="quest2" value="S" onclick="$('#quest3').show();">
                        Sì
                      </label>
                  </div>
                  <div class="form-field-input col-xs-6 col-sm-2">
                    <label>
                        <input type="radio" name="quest2" value="N">
                        No
                      </label>
                  </div>
              </div>
         </div>
      </div>
      <div id="quest3" style="display:none">
        <h3>AREA_DI_BISOGNO_2</h3>
        <h3 class="titleSection titleForm">2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod</h3>
        <div class="form-group">
              <div class="row">
                  <div class="form-field-input col-xs-6 col-sm-2">
                      <label>
                        <input type="radio" name="quest3" value="S" onclick="$('#quest4').show();">
                        Sì
                      </label>
                  </div>
                  <div class="form-field-input col-xs-6 col-sm-2">
                    <label>
                        <input type="radio" name="quest3" value="N">
                        No
                      </label>
                  </div>
              </div>
         </div>
      </div>
      <div id="quest4" style="display:none">
        <h3 class="titleSection titleForm">2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod</h3>
        <div class="form-group">
              <div class="row">
                  <div class="form-field-input col-xs-6 col-sm-2">
                      <label>
                        <input type="radio" name="quest4" value="S">
                        Sì
                      </label>
                  </div>
                  <div class="form-field-input col-xs-6 col-sm-2">
                    <label>
                        <input type="radio" name="quest4" value="N">
                        No
                      </label>
                  </div>
              </div>
         </div>
      </div>
</form>
<!-- step primo del questionario -->
<section>
<div class="form-group btnWrapper clearfix">
        <div class="btn-align-right">
  		 	<div>
           <a type="button" href="#" class="btn btn-default" title="prosegui">indietro</a> 
           <a type="button" href="#" class="btn btn-primary" title="prosegui">prosegui</a>
  			</div>
      </div>
  </div>
</section>
<!-- fine pulsanti operativi -->