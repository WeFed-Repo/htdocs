<!-- titolo e stepper oggetti già esistenti-->
<section>
	<div class="titolo">
		<h1>
			<div class="row">
				<div class="col-sm-8">
					<span>Bonifico ordinario/veloce</span>
				</div>
                <?php 
					if ($site == "youweb") 
				
					{
				?>
                <div class="col-sm-4">	
			 		<div class="pager pull-right">
						<div class="circle">1</div>
						<div class="circle current_page">2</div>
						<div class="circle">3</div>
                        <div class="circle">4</div>
					</div>
				</div>
                <?php
					}
				?>
			</div>
		</h1>
	</div>
</section>
<!-- BOX DI SCELTA BONIFICO
servono tre classi: available, active, not-available-->
<section>
  <div class="row flex-desktop has-bottom-tip"> <!-- la classe has-bottom-tip appenderla solo se c'è il tip di suggerimento-->
        <div class="col-xs-12 col-sm-4 ">
            <div class="box-type available">
                 <div class="box-type-header">
                     <div class="ordinario">
                         <h3>Ordinario</h3>
                         <span>Scelgo la data…</span>
                </div>
                 </div>
                 <div class="box-type-body">
                   						
					    <div class="row">
						    <div class="col-xs-6 col-sm-12 col-lg-6 field-space noPaddingRight">
                                <label class="control-label" for="causale">Data esecuzione</label>
                                <div class="form-field">
                                    <div class="datepicker-inline">
                                        <input type="text" name="dataesecuzione" id="dataesecuzione" maxlength="10" class="form-control datepicker">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-12 col-lg-6 field-space">
                                <label class="control-label" for="causale">Data accredito</label>
                                <div>
                                    <a href="#" class="text-link"><strong>Tempi di esecuzione</strong></a>
                                </div>
                            </div>
                        </div>
                   
                    
                        <div class="row">
                            <div class="col-xs-6 col-sm-12 col-lg-6 field-space">
                                <label class="control-label" for="causale">Commissione</label>
                                <div class="form-field">
                                   <span class="field-output">0,51 EUR</span>
                                </div>
                            </div>
                        </div>
                    
                 </div>
                 <div class="box-type-footer">SCEGLI</div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="box-type not-available">
                <div class="box-type-header"> 
                     <div class="urgente">
                        <h3>Urgente</h3>
                        <span>Ho fretta.</span>
                    </div>
                 </div>
                 <div class="box-type-body"><p><strong>NON DISPONIBILE</strong><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p></div>
                 
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="box-type available">
                 <div class="box-type-header">
                    <div class="istantaneo">
                         <h3>Istantaneo</h3>
                         <span>Ho molta fretta!</span>
                    </div>
                 </div>
                 <div class="box-type-body">
                    <div class="row">
                        <div class="col-xs-6 col-sm-12 col-lg-6 field-space noPaddingRight">
                            <label class="control-label" for="causale">Data esecuzione</label>
                            <div class="form-field">
                                <span class="field-output">15/04/2021</span>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-12 col-lg-6 field-space">
                            <label class="control-label" for="causale">Data accredito</label>
                            <div class="form-field">
                                <span class="field-output">10 SECONDI</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-12 col-lg-6 field-space">
                            <label class="control-label" for="causale">Commissione</label>
                            <div class="form-field">
                                <span class="field-output">1,00 EUR</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-type-footer">SCEGLI</div>
                <!--elemento tip -->
               
                <div class="tip bottom">
                    <div class="tip-arrow"></div>
                    <div class="tip-text w-align-right">Scegli il bonifico istantaneo, è conveniente!</div>
                </div>
               
            </div>
        </div>
   </div>                
</section>
<section>
    <div class="form-group btnWrapper clearfix">
        <div class="btn-align-left">
          <div>
            <a type="button" href="#" class="btn btn-default" title="prosegui" id="btnInvio">lorem ipsum</a>
          </div>
        </div>
        <div class="btn-align-right">
          <div>
            <a type="button" href="#" class="btn btn-default" title="prosegui" id="btnInvio">lorem ipsum</a>
          </div>
        </div>
    </div>
 </section>
<script type="text/javascript">
// Inizializzazione datepicker
$(function(){
    $("#dataesecuzione").datepicker().datepicker("setDate",new Date());
    
    var toggleSelected= function(el,classToappend) {
       $(el).each(function(index) {
            $(this).on("click", function(){
                $(el).removeClass(classToappend);
                $(this).addClass(classToappend);
        })
        })
    }
    toggleSelected('.box-type.available',"selected");
});
</script>