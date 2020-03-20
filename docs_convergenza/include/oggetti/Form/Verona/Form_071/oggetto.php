<?php 
    if ($site == "youweb") 
    {
        ?>        
<section>
    <div class="titButton paddingSmall paddingLeftLarge paddingRightLarge polizzeAttive">      
        <div class="polizzeAttive">
            <div class="row"> 
                <div class="col-sm-6 col-xs-12 alignItemCenter">  
                    
                    <span class="icon-wrapper-assic_auto ">
                        <i class="icon icon-assic_auto fontSize70" ></i>               
                    </span>   
                    <h3 class="flLeft noUppercase">Nome prodotto <br> N. polizza 987654321</h3>
                </div>

                <div class="col-sm-6 col-xs-12 marginTop5px alignItemCenter ">                      
                    <div class="paddingRight9px widthFillAvailable">
                        <span>In validità* </span>
                        
                        <a class="no-underline btn-icon" href="javascript:;" >
                            <i class="icon icon-info_fill icon-2x" data-toggle="tooltip" title="Testo Testo Testo Testo Testo Testo"></i>                                                  
                           
                        </a>
                    </div> 

                    <div class="widthFillAvailable alignRight"> 
                        <a target="_blank" href="#" class="colorVerde">
                            <i class="icon icon-file_pdf_fill colVer" title=""></i> 
                            Contratto 
                        </a>
                    </div>                   
                </div>
                
            </div>
         </div>
    </div>
    <form class="formGenerico forcedBorderFormRounded output skin-colonne marginBottom5px" role="form">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Compagnia:</label>
                    <span class="output">Coveà</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Data emissione:</label>
                    <span class="output">00/00/0000</span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label class="control-label-output">Premio pagato:</label>
                    <span class="output">000.00,00 &euro;</span>
                </div>
                <div class="col-sm-6">
                    <label class="control-label-output">Data scadenza:</label>
                    <span class="output">00/00/0000</span>
                </div>
            </div>
        </div>
        <div class="">
            <div class="row">
                <div class="form-field-input col-xs-12 col-sm-6 ">
                    <a class="link-text btn-show" href="javascript:;" id="accordionPlus">
                        <i class="icon icon-row_expand" style="display: inline-block;"></i>
                        <i class="icon icon-row_contract" style="display: none;"></i>
                         Dettagli polizza
                    </a>
                    <script>
                        $('#accordionPlus').on('click', function(){
                            var contHidden = $('#dataAdd');
                            contHidden.toggle();
                            if(contHidden.is(':visible')) {
                                $('.icon-row_expand').hide();
                                $('.icon-row_contract').show();
                            }
                            else {
                                $('.icon-row_expand').show();
                                $('.icon-row_contract').hide();
                            }
                        })
		            </script>
                </div>
            </div>
            
            <div class="border-output" style="display:none" id="dataAdd">
                <div class="form-group">
                    <div class="row">      
                        <div class="col-sm-6">
                            <label class="control-label-output">Label:</label>
                            <span class="output">Dato</span>
                        </div>
                    <div class="col-sm-6">
                            <label class="control-label-output">Label:</label>
                            <span class="output">Dato</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">      
                        <div class="col-sm-6">
                            <label class="control-label-output">Label:</label>
                            <span class="output">Dato</span>
                        </div>
                        <div class="col-sm-6">
                            <label class="control-label-output">Label:</label>
                            <span class="output">Dato</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </form>
   <div class="note">
       * Per rinnovare la tua polizza contatta o recati nella tua filiale.
    </div> 
</section>
<?php
}?> 

<?php 
    if ($site == "webank") 
    {
        ?>
        PER WEBANK CASISTICA NON CONTEPLATA
<?php
}?> 