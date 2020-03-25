<script type="text/javascript"> 
    $(function () {
        $("#radioWrapper").find("input[type=radio]").removeAttr('checked');
        $("#btnInvio").click(function (event) {
            // Check giroconto
            var errors = [],
                campo1 = $("#campo1")
            campo1.find('input').each(function(){
                if($(this).val() === ''){
                     errors.push({ field: campo1, text: "Inserire il campo 'Password di II livello'." });
                }
            })   
            setHasErrors(errors, "#pin2Residenza");
            
            if (errors.length) {
                $(errors[0].field).trigger('focus');
                event.preventDefault();
            }
        });
    });
</script>
<h2>Residenza</h2>

<section>
    <p>Sono riepilogati i dati modificati.</p>
</section>

<section>
    <h4>Dati identificativi</h4>
    <form class="formGenerico borderFormRounded output" role="form" id="">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 requiredField">
                	<label class="control-label-output">NDG</label>
                	<span class="output">36040557</span>
                </div>
                <div class="col-sm-6 requiredField">
                	<label class="control-label-output">User ID</label>
                	<span class="output">0053189</span>
                </div>
            </div>
        </div>
       
    	<div class="form-group">
            <div class="row">
                <div class="col-sm-6 requiredField">
                	<label class="control-label-output">Intestazione</label>
                	<span class="output">PALLONI FRANCO</span>
                </div>
            </div>
        </div>
    </form>
</section>

<section>
    <h4>Indirizzo di residenza</h4>
    <form class="formGenerico borderFormRounded output" role="form" id="">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 requiredField">
                	<label class="control-label-output">Via</label>
                	<span class="output">Lorem ipsum</span>
                </div>
                <div class="col-sm-6 requiredField">
					<label class="control-label-output">Provincia</label>
					<span class="output">SO</span>
                </div>
            </div>
        </div>    
    	
        <div class="form-group">
            <div class="row">
    			<div class="col-sm-6">
    				<div class="requiredField">
    					<label class="control-label-output">Comune</label>
						<span class="output">Sondrio</span>
    				</div>
    			</div>
    			<div class="col-sm-6 requiredField">
    				<label class="control-label-output">Cap</label>
    				<span class="output">23700</span>
    			</div>
            </div>
        </div>
    </form>
</section>

<section>
    <h4>Indirizzo di corrispondenza</h4>
    <form class="formGenerico borderFormRounded output" role="form" id="">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6 requiredField">
                    <label class="control-label-output">Intestazione</label>
                    <span class="output">Lorem ipsum</span>
                </div>
				<div class="col-sm-6 requiredField">
                    <label class="control-label-output">Via</label>
                    <span class="output">Lorem ipsum</span>
                </div>
            </div>
        </div>
         
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <div class="requiredField">
						<label class="control-label-output">Provincia</label>
						<span class="output">SO</span>
                    </div>
                </div>
                <div class="col-sm-6 requiredField">
                    <label class="control-label-output">Comune*</label>
                    <span class="output">Sondrio</span>
                </div>
            </div>
        </div>
       
         <div class="form-group">
            <div class="row">
                <div class="col-sm-6 requiredField">
                    <label class="control-label-output">Cap</label>
                    <span class="output">23700</span>
                </div>
              </div>
        </div>
    </form>
</section>

<section>
    <h4>Password II livello</h4>
    <form class="formGenerico bgPin32 borderFormRounded" role="form" id="pin2Residenza">
        <div class="form-group noMarginBottom">
            <div class="row">           
                
                    <div class="pincode">           
                        <div class="col-sm-8 pintxt">
                            <p class="pin_testo">Inserisci la <strong class="negativo">PRIMA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">12</strong> della tua <strong>Carta Servizi Telematici</strong></p>
                        </div>
                        <div class="col-sm-4 paddform requiredField">                     
                            <div class="form-inline" id="campo1">
                                <div class="input-group margBottSmall">                
                                    <input type="number" class="form-control" maxlength="1">                           
                                    <span>*</span>                     
                                    <input type="number" class="form-control" maxlength="1"> 
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

    <div class="btnWrapper">
        <div class="btn-align-left">
            <a type="button" class="btn btn-default" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_modifica_residenza_1_new.php&liv0=0&liv1=0&liv2=0&liv3=0&responsive=y">indietro</a>
        </div>
        <div class="btn-align-right">
            <a type="button" id="AnnullaPin" class="btn btn-default clearPin">annulla</a>
            <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_modifica_residenza_conferma_1_new	.php&liv0=0&liv1=0&liv2=0&liv3=0&responsive=y">prosegui</a>
        </div>
        <br class="clear">
    </div>
</section>

<section>
    <p class="note">
        I dati inseriti saranno immessi nella banca dati elettronica dell'azienda nel rispetto della legge 196/03 sulla tutela dei dati personali.<br>
        * I campi contrassegnati da un asterisco (*) sono obbligatori.
    </p>
</section>
