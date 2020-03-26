<div class="riquadro clearfix">
  <div class="clearfix">
      <style>
      .imgSrv{
      	float: none;
      }
      </style>
      <h1>
    		<div class="hidden-print hidden-xxs flag info">&nbsp;</div>
    		<span>Viaggi</span>
     	</h1>
  </div>
  <div class="section clearfix">
    <div>
      <img src="/HT/fe/img/ph_banner.jpg" class="img-responsive" style="width:100%">
    </div>
  </div>
  <div class="section clearfix">
    <div>
        <h2 class="titleSection">EUROPE ASSISTANCE</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
    <div class="row">
      <div class="col-sm-3 hidden-xs">
          <img src="/HT/fe/img/ph_banner.jpg" class="img-responsive" style="width:100%">
       </div>
      <div class="col-sm-9">
          <h2 class="titleSection">ASSICURARE I TUOI VANTAGGI PER TE E' SEMPRE SCONTATO?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
          <h2 class="titleSection">LE POLIZZE DEDICATE A TE</h2>
          <ul>
              <li><strong>Lorem ipsum dolor</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</li>
              <li><strong>Lorem ipsum dolor sit amet</strong><br>Lorem ipsum dolort</li>
              <li><strong>Lorem ipsum dolor</strong><br>Lorem ipsum dolor sit amet, consectetur</li>
              <li><strong>Lorem ipsum dolor sit amet</strong><br>Lorem ipsum dolort</li>
              <li><strong>Lorem ipsum dolor</strong><br>Lorem ipsum dolor sit amet, consectetur</li>
              <li><strong>Lorem ipsum dolor</strong><br>Lorem ipsum dolort</li>
          </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
          <h2 class="titleSection">CALCOLA IL TUO PREVENTIVO PERSONALIZZATO</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
          <a href="#" class="btn">Informativa (PDF)</a>
          <div class="form-field">
    				<div class="col-xs-12  margin-bottom20">
    					<input type="checkbox" name="" value="" class="margin-right10" id="checkInformativa">
    					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
    				</div>
			     </div>
      </div>
      <div class="col-sm-12">
        <div class="pull-right margin-bottom20">
          	<input id="calcPrev" type="submit" name="" value="Calcola il preventivo" class="btn btn-primary disabled" alt="Calcola il preventivo" disabled="">
        </div>
      </div>
    </div>
    <hr class="separator" />

      <div class="row">
        <div class="col-sm-12">
            <h2 class="titleSection note">MESSAGGIO PUBBLICITARIO CON FINALITA' PROMOZIONALE</h2>
            <p class="note">lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
  </div>

</div>
<script type="text/javascript">
  $('#checkInformativa').click(function(){
    if($(this).is(':checked'))
    {
        $('#calcPrev').attr('disabled',false).removeClass('disabled');
    }
    else {
        $('#calcPrev').attr('disabled',true).addClass('disabled');
    }
  })
</script>
