
<!--requiredField classe per il controllo errori-->
<script type="text/javascript" src="/wscmn/js/ui.datepicker-it.js"></script>

<script type="text/javascript">	
//inizializzazione datepicker

$(function () {
	
	$("#datepickerToolPin2").mask("99/99/9999");
	$("#datepickerToolPin2").datepicker({
	minDate: 1,
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
    onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
    appendDatePickerIcon('datepickerToolPin2');
    
	});
</script>
<h4>Data di nascita</h4>
<form class="formGenerico borderFormRounded" role="form">
	<div class="form-group">
		<div class="row"> 
			<div class="pincode">           
                    <div class="col-sm-8 pintxt">
                        <p class="pin_testo">Inserisci la tua data di nascita</p>
                    </div>
                    <div class="col-sm-4 paddform">                     
                        <div class="form-inline">
	                       <div class="input-group">
			       	 				<input type="text" id="datepickerToolPin2" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
			       	 				<div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
			       	 		</div>
			       	 	 </div>
                    </div>  
                    <div class="clearfix"></div>         
                </div>
		</div>
	</div>
</form>

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
<div class="form-group btnWrapper">
    <div class="btn-align-left">
        <a type="button" class="btn btn-default" href="#">indietro</a>
    </div>
    <div class="btn-align-right">
        <a type="button" id="AnnullaPin" class="btn btn-default clearPin">annulla</a>
        <a type="button" class="btn btn-primary" id="btnInvio" href="#">prosegui</a>
    </div>
</div>
