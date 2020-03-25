<h2>Imposta alert 2 Test</h2>



<!-- TABELLA SALDO -->
<div class="headerContainerNoBootS">
    <div class="tableContainerNoBootS">
<h4>Definisci gli alert del saldo</h4>
<table id="tableSmsAlert_1">
    <thead>
        <tr>
            <th class="left" style="width:50%">Tipologia</th>
            <th class="center wTd10">Sms</th>
            <th class="center wTd10">Email (Gratis)</th>
            <th class="center wTd10">Push (Gratis)</th>
        </tr>
    </thead>
    <tbody>
        <tr  class="dispari">
            <td>
               <span>
                    <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_1" >
                        <i class="icon icon-2x icon-row_expand" id="switchIcon_1"></i>
                    </a> 
                </span>
                <div class="lenghtTdAlert titoloCampo">
                    Saldo
                </div>
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr  class="dispari nascondi" id="control_1">
            <td class="borderTopNo  pad_top_0">
            <!--SALDO -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="radio marginTopMedium">
                        <label class="textWrapper">
                            <input type="radio" name="saldo" id="settimanale" value="settimanale">
                            <span class="text">Settimanale</span>
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="radio marginTopMedium" >
                        <label class="textWrapper">
                            <input type="radio" name="saldo" id="giornaliero" value="giornaliero">
                            <span class="text">Giornaliero</span>
                        </label>    
                    </div>
                </div>
                <div class="col-sm-3 orarioAlert" id="hideDay">
                <span id="giorno">
                    <label class="control-label">Giorno</label>
                        <select class="form-control">
                            <option>luned&igrave;</option>
                            <option>marted&igrave;</option>
                            <option>mercoled&igrave;</option>
                            <option>gioved&igrave;</option>
                            <option>venerd&igrave;</option>
                            <option>sabato</option>
                            <option>domenica</option>
                        </select>
                </span>     
                </div>
                <div class="col-sm-3  orarioAlert">
                    <span id="orario">  
                        <label class="control-label">Orario</label>
                        <select class="form-control">
                            <option>6:00</option>
                            <option>7:00</option>
                            <option>8:00</option>
                            <option>9:00</option>
                            <option>10:00</option>
                            <option>11:00</option>
                            <option>12:00</option>
                            <option>13:00</option>
                            <option>14:00</option>
                            <option>15:00</option>
                            <option>16:00</option>
                            <option>17:00</option>
                            <option>18:00</option>
                            <option>19:00</option>
                            <option>20:00</option>
                            <option>21:00</option>
                            <option>22:00</option>
                        </select>
                    </span>
                </div>
            </div>
                <!--END SALDO -->
            </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
        <tr class="pari">
            <td class="titoloCampo">
                Saldo contabile negativo
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">Gratis</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari">
            <td>
                <span>
                    <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_2" >
                       <i class="icon icon-2x icon-row_expand" id="switchIcon_2"></i>
                    </a>
                </span>
                <div class="lenghtTdAlert titoloCampo">
                    Saldo contabile inferiore a
                </div>    
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari nascondi" id="control_2">
            <td class="borderTopNo">
                <!-- -->
                    <div class="floating-box sizeInputAlert">
                        <input type="text" class="form-control clear-x">
                    </div>
                    <div class="floating-box">
                     ,00   
                    </div>
                <!-- -->
            </td>
            <td class="borderTopNo"> </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
        <tr class="pari">
            <td class="titoloCampo">
                Saldo disponibile negativo
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">Gratis</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari">
            <td>
               <span> 
                <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_3" >
                    <i class="icon icon-2x icon-row_expand" id="switchIcon_3"></i>
                </a>     
                </span>
                <div class="lenghtTdAlert titoloCampo">
                    Saldo disponibile inferiore a
                </div>
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr  class="dispari nascondi" id="control_3">
            <td class="borderTopNo">
                <!-- -->
                    <div class="floating-box sizeInputAlert">
                        <input type="text" class="form-control clear-x">
                    </div>
                    <div class="floating-box">
                     ,00   
                    </div>
                <!-- -->
            </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
    </tbody>
</table>
</div>
    </div>
<!-- END TABELLA SALDO -->


<!-- GESTIONE DELLA SOTTOTABELLA SEZIONE SALDO  -->
    <script type="text/javascript">
<!-- Apertura e chiusura sottotabelle-->
        $(function() {
            $('#controlSwitchIcon_1').click(function() {
                $('#control_1').toggle();
                if($('#control_1').is(":visible")){
                    
                    $('#switchIcon_1').removeClass('icon-row_expand');
                    $('#switchIcon_1').addClass('icon-row_contract');
  
                }else{
                    $('#switchIcon_1').removeClass('icon-row_contract');
                    $('#switchIcon_1').addClass('icon-row_expand');
                }
            });


            $('#controlSwitchIcon_2').click(function() {
                $('#control_2').toggle();
                if($('#control_2').is(":visible")){
                    
                    $('#switchIcon_2').removeClass('icon-row_expand');
                    $('#switchIcon_2').addClass('icon-row_contract');
  
                }else{
                    $('#switchIcon_2').removeClass('icon-row_contract');
                    $('#switchIcon_2').addClass('icon-row_expand');
                }
            });


            $('#controlSwitchIcon_3').click(function() {
                $('#control_3').toggle();
                if($('#control_3').is(":visible")){
                    
                    $('#switchIcon_3').removeClass('icon-row_expand');
                    $('#switchIcon_3').addClass('icon-row_contract');
  
                }else{
                    $('#switchIcon_3').removeClass('icon-row_contract');
                    $('#switchIcon_3').addClass('icon-row_expand');
                }
                
            });

        });
    </script>



<script type="text/javascript">
//VALUTA SE SI HA selezionato SALDO settimanale oppure giornaliero  


    $("#giorno").hide().removeClass();;
    $("#orario").hide().removeClass();;
$('input[name="saldo"]').on('click' , function(){

    if( $(this).val() === "settimanale"){
        $("#giorno").show().addClass();
        $("#orario").show().addClass();
        $("#hideDay").css("display","block");
    }

    else if( $(this).val() === "giornaliero"){
        $("#orario").show().addClass();
        $("#giorno").hide().removeClass();
        $("#hideDay").css("display","none");
    }
    });

</script>

<!-- END GESTIONE DELLA SOTTOTABELLA SEZIONE SALDO  -->





<!-- TABELLA ACCREDITI/ADDEBITI -->

<div class="headerContainerNoBootS">
    <div class="tableContainerNoBootS">
<h4>Accrediti/Addebiti</h4>
<table id="tableSmsAlert_1">
    <thead>
        <tr>
            <th class="left" style="width:50%">Tipologia</th>
            <th class="center wTd10">Sms</th>
            <th class="center wTd10">Email (Gratis)</th>
            <th class="center wTd10">Push (Gratis)</th>
        </tr>
    </thead>
    <tbody>
        <tr class="pari">
            <td class="titoloCampo">
                Accredito stipendio
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari">
            <td>
                <span>
                    <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_4">
                       <i class="icon icon-2x icon-row_expand" id="switchIcon_4"></i>
                    </a>
                </span>
                <div class="lenghtTdAlert titoloCampo">
                    Accrediti superiori a
                </div>    
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr class="dispari nascondi" id="control_4">
            <td class="borderTopNo">
                <!-- -->
                    <div class="floating-box sizeInputAlert">
                        <input type="text" class="form-control clear-x">
                    </div>
                    <div class="floating-box">
                     ,00   
                    </div>
                <!-- -->
            </td>
            <td class="borderTopNo"> </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
        <tr class="dispari">
            <td>
               <span> 
                <a href="#1" class="btn-icon flLeft hideIcoAlert" id="controlSwitchIcon_5" >
                    <i class="icon icon-2x icon-row_expand" id="switchIcon_5"></i>
                </a>     
                </span>
                <div class="lenghtTdAlert titoloCampo">
                    Addebiti superiori a
                </div>
            </td>
            <td class="center"> 
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
        <tr  class="dispari nascondi" id="control_5">
            <td class="borderTopNo">
                <!-- -->
                    <div class="floating-box sizeInputAlert">
                        <input type="text" class="form-control clear-x">
                    </div>
                    <div class="floating-box">
                     ,00   
                    </div>
                <!-- -->
            </td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
            <td class="borderTopNo"></td>
        </tr>
        <tr class="pari">
            <td class="titoloCampo">
                Addebiti direct debit
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                        <span class="text">0,26&euro;</span>
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
            <td class="center">
                <div class="checkbox">
                    <label class="textWrapper">
                        <input type="checkbox" name="" id="">
                    </label>
                </div>
            </td>
        </tr>
    </tbody>
</table>
</div>
    </div>

<!-- END TABELLA ACCREDITI/ADDEBITI -->




<!-- GESTIONE DELLA SOTTOTABELLA SEZIONE ACCREDITI/ADDEBITI  -->
    <script type="text/javascript">
 //Apertura e chiusura sottotabelle 
        $(function() {
            $('#controlSwitchIcon_4').click(function() {
                $('#control_4').toggle();
                if($('#control_4').is(":visible")){
                    
                    $('#switchIcon_4').removeClass('icon-row_expand');
                    $('#switchIcon_4').addClass('icon-row_contract');
  
                }else{
                    $('#switchIcon_4').removeClass('icon-row_contract');
                    $('#switchIcon_4').addClass('icon-row_expand');
                }
            });


            $('#controlSwitchIcon_5').click(function() {
                $('#control_5').toggle();
                if($('#control_5').is(":visible")){
                    
                    $('#switchIcon_5').removeClass('icon-row_expand');
                    $('#switchIcon_5').addClass('icon-row_contract');
  
                }else{
                    $('#switchIcon_5').removeClass('icon-row_contract');
                    $('#switchIcon_5').addClass('icon-row_expand');
                }
            });

        });

    </script>


<!-- END GESTIONE DELLA SOTTOTABELLA ACCREDITI/ADDEBITI -->










<style>


.visibile{
    display: none;
}


.borderTopNo{
    
    border-top: none;
    
}

.sizeInputAlert{
    width: 25%;
}

.floating-box {
    display: inline-block;
    margin: 3px;
}

  .hideIcoAlert{
        display:none !important;
    }



@media screen and (max-width: 767px)  {
    
    .hideIcoAlert{
        display:block !important;
        margin-top:3px;
    }

    .sizeInputAlert{
        width: 60%;
    }

    
   .lenghtTdAlert {
         width: 120px; 
         margin-left: 40px;
    }


    .nascondi{
        display: none;
    }

}

.titoloCampo{
    font-weight: 600;
}

    
  

</style>












