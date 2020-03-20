<!-- BOTTONE USATO IN STEP DISPOSITIVE-->
<section>
  <div class="form-group btnWrapper clearfix">
    <?php
    if ($site == 'webank') {
      print '<div class="stepBtn">Step <strong>x</strong> di x</div>';
      }
    ?>
     
      
  		<div class="btn-align-right">
  		 	<div>
				<a type="button" href="#" class="btn btn-default disabled" title="prosegui">disabilitato</a>
  				<a type="button" href="#" class="btn btn-primary" title="prosegui">prosegui</a>
  			</div>
      </div>
      <div class="btn-align-back">
          <div>
            <a type="button" href="javascript:vai('back')" class="btn btn-default">indietro</a>
          </div>
      </div>
  </div>
</section>
