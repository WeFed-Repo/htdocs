<?php 
	if ($site == "youweb") 
	{
		?>		
<section>   
    <div class="assicurazioneAutoMoto">
        <div class="borderFormRoundedWrapper paddingMedium"> 
            <div class="row displayTable paddingLeftMedium">
                <div class="col-sm-12 displayTableRow">               							
                    <span class="icon-wrapper-assic_auto displayTableCell">
                        <i class="icon icon-assic_veicoli fontSize70" ></i>
                    </span>                
                    <h3 class="noMargin displayTableCell paddingLeftMedium verticalAlignMiddle">
                    AUTOPIÙSICURA E AUTOPIÙSICURA CONNECT
                    </h3>	              
                </div> 
            </div>
        </div>
        <div class=" box-blu"> 
            <form>		
                <div class="formWrapper">
                    <div class="form-group">
                        
                        <h3 class=" paddingLarge noPaddingBottom colorWhite noMargin noUppercase" >Inserisci i dati richiesti</h3>     
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 ">	
                                <label class="colorWhite paddingTopMedium paddingLeftLarge">
                                    <input type="radio" class="whiteRadioBotton" name="autoMoto" checked="checked">
                                    Auto
                                </label>
                                <label class="colorWhite paddingTopMedium paddingLeftLarge">
                                    <input type="radio" class="whiteRadioBotton" name="autoMoto">
                                    Moto
                                </label>
                            </div>  
                        </div>        
                        
                        <div class="row">
                            <div class="paddingLeftLarge paddingRightLarge">
                                <div class="col-xs-12 col-sm-3 ">						
                                    <div class="form-field paddingTopMedium">			
                                        <label class="control-label colorWhite " for="">Targa</label>					
                                        <input type="text" size="10" class="placeh form-control ui-autocomplete-input"  placeholder="Targa">
                                    </div>                       
                                </div>
                                <div class="col-xs-12 col-sm-3 ">						
                                    <div class="form-field paddingTopMedium">	
                                        <label class="control-label colorWhite" for="">Data di nascita</label>								
                                        <input type="text" size="10" class="placeh form-control ui-autocomplete-input" placeholder="Data di nascita">
                                    </div>                       
                                </div>
                                <div class="col-xs-12 col-sm-3">	
                                    <div class="spsel-height spsel-noIcon paddingTopMedium">			
                                        <label class="control-label colorWhite " for="">Filiale di riferimento</label>
                                                                    
                                    <script type="text/javascript">
                                            /* Esempio inizializzazione */
                                            $(function(){
                                                // Inizializza la special-select tipo "default" (esempio di callback)
                                                $("#assicAutoMotoFilialeDiRif").spSel(
                                                    function(){console.log($("input[name=assicAutoMotoFilialeDiRif]").val())}
                                                );
                                            });
                                        </script>
                                        
                                        <div class="spsel nosel borderColorDADEE1" id="assicAutoMotoFilialeDiRif"  placeholder="Seleziona...">
                                            <!-- <input type="hidden" name="assicAutoMotoFilialeDiRif">  -->
                                        <div class="spsel-options">
                                                <?php for($i=0;$i<=20;$i++) { ?>
                                                <div class="spsel-option" data-value="<?php print($i);?>">
                                                    <a class="spsel-option-el ">Elemento <?php print($i);?> lorem ipsum dolor sit amet<span class="only-detail">
                                                        <br>Lorem <strong>ipsum</strong> dolor<br><strong>333.333,31</strong> EUR</span>
                                                    </a>
                                                </div>
                                                <?php } ?>						
                                            </div>
                                        </div>
                                    </div>  
                                </div> 
                                <div class="col-xs-12 col-sm-3 assicurazioniBtnCalcola positionRelative">		
                                    <a type="button" href="#" class="btn btn-primary noMargin positionAbsolute" >CALCOLA*</a>					                             
                                </div>
                             </div>
                        </div>
                        <div class="row">
                            <div class=" col-xs-12 col-sm-12 colorWhite alignRight ">	
                                <span class=" marginRightLarge marginTopMedium">					
                                    *Verrai reindirizzato sul sito della compagnia		
                                </span>                             
                            </div>
                        </div>
                        
                    </div>
                </div> 
            </form>                              
        </div>
     </div>
</section>
<?php
}?>	


	
