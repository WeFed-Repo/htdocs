<?php 
	if ($site == "youweb") 
	{
		?>		
<section>   
    <div class="assicurazioneCasa">
        <div class="borderFormRoundedWrapper paddingMedium"> 
            <div class="row displayTable paddingLeftMedium">
                <div class="col-sm-12 displayTableRow">               							
                    <span class="icon-wrapper-assic_auto displayTableCell">
                        <i class="icon icon-assic_casa_generica fontSize70" ></i>
                    </span>                
                    <h3 class="noMargin displayTableCell paddingLeftMedium noUppercase verticalAlignMiddle" >
                        CASApiùFAMIGLIA
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
                            <div class="paddingLeftLarge paddingRightLarge">
                                <div class="col-xs-6 col-sm-2 ">						
                                    <div class="form-field paddingTopMedium">			
                                        <label class="control-label colorWhite" for="">Mq</label>					
                                        <input type="text" class="placeh form-control"  placeholder="Mq">
                                    </div>                                                        
                                </div>

                                <div class="col-xs-6 col-sm-2 ">	
                                    <div class="form-field paddingTopMedium ">	
                                        <label class="control-label colorWhite" for="">CAP</label>								
                                        <input type="text" class="placeh form-control" placeholder="CAP">
                                    </div>                       
                                </div>
                                <div class="col-xs-12 col-sm-4">						
                                    <div class="form-field paddingTopMedium">			
                                        <label class="control-label colorWhite " for="">Tipologia cliente</label>
                                        <select name="" class="form-control" id="tipologiaCliente">             
                                            <option id="" selected="selected" value="">Seleziona</option>
                                            <option value="Comune1">Tipologia1</option>
                                            <option value="Comune2">Tipologia2</option>
                                            <option value="Comune3">Tipologia3</option>
                                        </select>									
                                    </div>                    
                                </div>    
                                
                                <div class="col-xs-12 col-sm-4">	
                                    <div class="spsel-height paddingTopMedium">			
                                        <label class="control-label colorWhite " for="">Filiale di riferimento</label>
                                                                    
                                        <script type="text/javascript">
                                            /* Esempio inizializzazione */
                                            $(function(){
                                                // Inizializza la special-select tipo "default" (esempio di callback)
                                                $("#assicCasaFilialeDiRif").spSel(
                                                    function(){console.log($("input[name=assicCasaFilialeDiRif]").val())}
                                                );
                                            });
                                        </script>
                                        
                                        <div class="spsel nosel borderColorDADEE1" id="assicCasaFilialeDiRif"  placeholder="Seleziona...">
                                            <!-- <input type="hidden" name="assicCasaFilialeDiRif">  -->
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
                            </div>
                        </div>

                         <div class="row">
                            <div class="paddingLeftLarge paddingRightLarge">
                                <div class="col-xs-12 col-sm-12 assicurazioniBtnCalcola positionRelative">		
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


	
