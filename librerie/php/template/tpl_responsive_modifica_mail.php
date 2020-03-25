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
			
			setHasErrors(errors, "#pin2Mail");
			
			if (errors.length) {
				$(errors[0].field).trigger('focus');
				event.preventDefault();
			}
			
		});
	});
</script>

<h2>Email</h2>




<section class="boxesitoWrap">
    <div class="boxesito attenzione">
        <i class="icon icon-alert_caution icon-2x"></i>
        <div class="text">
            <div class="row">
                <div class="col-sm-12">
                     <p>Il nuovo indirizzo email che stai per indicarci deve essere certificato.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <h3>Come procedere</h3>
    <p>Dopo aver inserito sotto il nuovo indirizzo email e cliccato il bottone &quot;modifica&quot;, riceverai:</p>
    <ul>
    	<li><strong>un codice di autenticazione</strong> al tuo nuovo indirizzo email</li>
    	<li><strong>un codice di controllo</strong> via SMS al tuo numero di cellulare.</li>
    </ul>
    <p><strong>Devi inserirli entrambi nella successiva pagina del sito. Tieni dunque sotto controllo la tua posta elettronica e acceso il cellulare!</strong></p>
</section>

<section>
    <h4>Modifica email</h4>
     <div class="row">
        <div class="col-xs-12">
            <form class="formGenerico  borderFormRounded" role="form" id="">
            	<div class="form-group" >
        			  <label class="control-label">Email</label>
        			  <input id="" type="email"  class="form-control clear-x" value="prova@.it">
        		</div>
            </form>
        </div>
    </div>




<!-- -->



  <div class="row">
        <div class="col-xs-12">
            <form class="formGenerico  bgPin32 borderFormRounded form-bottom" role="form" id="pin2Mail">
                <div class="form-group-last">
                    <div class="row">           
                        <div class="col-sm-12">
                           <p class="prova" style="margin-bottom:4px">Inserisci la <strong class="negativo">PRIMA</strong> e <strong class="negativo">TERZA</strong> cifra del codice <strong class="negativo">12</strong> della tua <strong>Carta Servizi Telematici</strong></p>       
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">                  
                            <div class="form-inline form-ipt-pws">
                                <div class="margBottSmall">                
                                    <input type="number" class="form-control" maxlength="1">                           
                                    <span>*</span>                     
                                    <input type="number" class="form-control" maxlength="1"> 
                                    <span>*</span>
                                    <div class="clearfix"></div>         
                                 </div>
                            </div>                      
                            <div class="form-inline form-ipt-nbr">
                                <span class="note">1</span>
                                <span class="note">2</span>
                                <span class="note">3</span>
                                <span class="note">4</span>   
                                <div class="clearfix"></div>    
                            </div>
                        </div>               
                    </div>
                </div>
            </form>


            <div class="btnWrapper">
                <div class="stepBtn">Step <strong> 1 </strong> di 2</div>
                <div class="btn-align-right">
                    
                    <a type="button" class="btn btn-primary" id="btnInvio" href="/connect.php?page=strutt_priv.php&tpl=tpl_responsive_modifica_step2.php&liv0=0&liv1=0&liv2=0&liv3=1&responsive=y">prosegui</a>
                </div>
            </div>


        </div>
    </div>



</section>
