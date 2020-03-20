<!-- Blocco intestazione -->
<div class="titolo">
    <h1>
        <div class="row">
            <div class="col-sm-<?php print ($site=="youweb")? "8": "12";?>">
                <span>Il tuo profilo assicurativo</span>
            </div>
            <?php if($site=="youweb") {
            ?>
            <!-- Stepper YouWeb-->
            <div class="col-sm-4">
                <div class="pager pull-right">
                    <div class="circle current_page">1</div>
                    <div class="circle ">2</div>
                </div>
            </div>
            <!-- Fine stepper YouWeb-->
            <?php
            }
            ?>
        </div>
    </h1>
</div>
<!-- Fine blocco intestazione -->

<br class="clear">

<!-- Esempio di domanda -->
<form action="#" id="qForm" class="formWrapper">
    <?php
        
        function domanda($indice=null,$titolo=null,$tipo="checkbox",$risposte) {
            ?>
            <section class="clearfix">    
                <h3 class="titleSection titleForm"><?php print $indice.". ".$titolo; ?></h3>
                <?php if($tipo==="checkbox") {?><p>Risposta multipla</p><?php }?>
                <?php 
                    $ind=0;
                    foreach ($risposte as $risposta) {
                    ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-12">
                                <label class="input-rcb-inline">
                                    <input type="<?php print $tipo; ?>" name="risposta-<?php print $indice;?>" value="<?php print $ind; ?>">
                                    <span class="input-rcb-text"><?php print $risposta;?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <?php
                    $ind++;
                    }
                ?>
                    
            </section>
            <?php
        }

    ?>
    <?php

        for($x=2;$x<=13;$x++) {
            // Parametri casuali
            $qdom = rand(2,6);
            $doms = array();
            for($y=1;$y<=$qdom;$y++){
                array_push($doms, randomText(5));
            }

            domanda($x, randomText(11)."?",(rand(1,2)==1)? "checkbox" : "radio",$doms);

        }
    

    ?>
    <section>
	<div id="otp">
		<h3 class="titleSection titleForm">Lorem ispum</h3>
		<div class="formWrapper">
			<div class="form-group">
				<div class="row">
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field">
							<label class="control-label">
								Confermo di aver preso visione della documentazione elencata nella finestra DOCUMENTI presente in questa videata e, per proseguire con la disposizione, inserisco la <b>Password usa e getta</b> riportata sul display del dispositivo di sicurezza Servizi You.
							</label>
						</div>
					</div>
					<div class="form-field-input col-xs-12 col-sm-6">
						<div class="form-field-input">
							<img src="/<?php print ($site==="youweb")? "HT" : "WB";?>/fe/img/OTPWHV.png">
							<input type="text" id="codiceOTP" value="" size="10" maxlength="6" name="codiceOTP" autocomplete="off" tabindex="1" class="form-control wauto" style="margin-top:5px"> 
							<a href="#" class="no-underline btn-icon hidden-xs"><i class="icon icon-info_fill icon-2x"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</form>


<section>
    <div class="form-group btnWrapper clearfix">
        <?php if ($site==="webank") { ?><!-- Stepper Webank --><div class="stepBtn">Step <strong>1</strong> di 2</div><!-- Fine stepper Webank --><?php }?>
        <div class="btn-align-left">
          <div>
            <a type="button" href="#" class="btn btn-default">Indietro</a>
          </div>
        </div>
        <div class="btn-align-right">
          <div>
            <a type="button" class="btn btn-primary">Avanti</a>
          </div>
        </div>
    </div>
 </section>
<!-- Fine pulsantiera -->