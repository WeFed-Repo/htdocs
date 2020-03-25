<section>
	<h2>Giroconto</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe mollitia nesciunt voluptates commodi quam, hic explicabo non, et. At maxime distinctio alias dolores necessitatibus temporibus perferendis ab quidem deserunt rerum!</p>
	<ul>
		<li>Consectetur adipisicing elit. Sed, aperiam!</li>
		<li>Lorem ipsum dolor sit amet.</li>
	</ul>
</section>
<!-- Box feedback (positivo, negativo, attenzione ) -->
<section class="boxesitoWrap">
	<div class="boxesito attenzione">
		<i class="icon icon-alert_caution icon-2x"></i>
		<div class="text">
			<div class="row">
				<div class="col-sm-12">
					<p><strong>Lorem ipsum dolor sit amet adipiscig</strong><br>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
				et quas molestias excepturi sint occaecati cupiditate non provident, similiq</p>
			</div>
		</div>
	</div>
</section>


<!-- Fine box feedback -->

<!-- Form raccolta dati giroconto -->
<form role="form" id="formRicaricaPostepay">
	<section>
		<h4>Conto di addebito</h4>
		<div class="formGenerico borderFormRounded" >
	    	<div class="form-group">
	    	  	<div class="row">
	                <div class="col-xs-12">
						<label for="" class="control-label">Conto di addebito</label>
	                    <select class="form-control">
							<option selected value="">CC 1098210932180931093821 - Lorem ipsum dolor sit</option>
							<option selected value="">CC 1098213333380931093824 - Dolor sit amet</option>
						</select>
	                </div>
	          	</div>
	        </div>

			<div class="form-group">
	    	  	<div class="row">
	                <div class="col-xs-12">
						<label for="" class="control-label-output">Saldo disponibile</label>
	                  	<a class="output">999.000,00</a> &euro;
	                </div>
	          	</div>
	        </div>
			<div class="form-group">
	    	  	<div class="row">
	                <div class="col-sm-6 col-xs-12">
						<label for="" class="control-label">Importo</label>
	                  	<input maxlength="16" value="" type="number" class="form-control clear-x">
	                </div>
	        	</div>
	       </div>
	       <div class="form-group">
	    	  	<div class="row">
	                <div class="col-xs-12">
						<label for="" class="control-label">Causale</label>
	                  	<input class="form-control clear-x" type="text">
	                </div>
	          	</div>
	        </div>
	    </div>
	</section>
	
	<section>
		<h4>Conto di accredito</h4>
	    <div class="formGenerico borderFormRounded" >
	       <div class="form-group">
	            <div class="row">
	                <div class="col-xs-12">
	                    <label for="" class="control-label">Conto di accredito</label>
	                    <select class="form-control">
							<option selected value="">CC 1098210932180931093821 - Lorem ipsum dolor sit</option>
							<option selected value="">CC 1098213333380931093824 - Dolor sit amet</option>
						</select>
                    </div>
	            </div>
	        </div>
	    </div>
	</section>
</form>
<!-- Form pin 2 -->
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
<!-- Fine form pin2 -->
<section>
    <div class="form-group btnWrapper">
        <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="#">prosegui</a>
        </div>
        <div class="clear"></div>
    </div>
</section>
