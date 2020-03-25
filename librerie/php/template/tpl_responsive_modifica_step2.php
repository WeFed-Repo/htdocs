<h2>Email</h2>

<section>
    <p><strong>Inserisci sotto il codice di autenticazione</strong> che hai ricevuto via email al nuovo indirizzo di posta elettronica e il <strong>codice di controllo</strong> che ti abbiamo inviato tramite sms.</p>
</section>

<section>
    <h4>Modifica email</h4>
    <form class="formGenerico borderFormRounded bgPin32" role="form" id="pin2Mail2">
        <div class="form-group">     
             <div class="row">
                <div class="col-sm-12">
                    <label class="control-label-output">Email da certificare:</label>
                    <span class="output">ADESOC@EMAIL.com</span>  
                </div>
             </div>
        </div>     
        <div class="form-group"> 
             <div class="row">
                <div class="col-sm-6 requiredField">
                    <label class="control-label-output">Codice di autenticazione:</label>
                    <input type="text" class="form-control clear-x noMarginBottom" maxlength="8"> 
                </div>
                <div class="col-sm-6 no-label">
                    <span class="output">inviato tramite email</span>   
                </div>
             </div>
         </div>
        <div class="form-group"> 
             <div class="row">
                <div class="col-sm-6 requiredField">
                    <label class="control-label-output">Codice di controllo:</label>
                    <input type="text" class="form-control clear-x noMarginBottom" maxlength="8"> 
                </div>
                <div class="col-sm-6 no-label">
                   <span class="output">inviato tramite sms</span>      
                </div>
             </div>
         </div>
    </form>
    <div class="btnWrapper">
        <div class="stepBtn">Step <strong> 2 </strong> di 2</div>
        <div class="btn-align-right">
            <a type="button" class="btn btn-primary" id="btnInvio" href="#">certifica e prosegui</a>
        </div>
    </div>
</section>
