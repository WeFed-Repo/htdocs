
<form method="post" action="">
	<h3 class="titleSection titleForm">Titolo form</h3>
      <div class="formWrapper">
        <div class="form-group">
          <div class="row">
            <div class="form-field-input col-xs-12 col-sm-6">
                <p>
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium, et
                lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet ex id erat pretium, et
                </p>
            </div>
            <div class="form-field-input col-xs-12 col-sm-6">
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
                      <input type="text" name="email" maxlength="60" value="NOMECOGNOME@DOMINIO.IT" readonly="readonly" id="email" class="form-control clear-x">
                      <div class="input-group-addon">
                        <a href="javascript:;" id="contatti"><i class="icon icon-edit_fill"></i ></a>
                       </div>
                  </div>
                </div>
             </div>
          </div>
        </div>
      </div>
 
</form>



