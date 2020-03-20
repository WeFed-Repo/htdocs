<script>
	$(document).ready(function() {        
    	$('#animaleDataNascita').mask("99/9999");

		$('#animaleDataNascita').datepicker({           
            showOtherMonths: true,
            selectOtherMonths: true,
            dateFormat: 'MM yy',
			buttonImage: 'common/fe/img/pixel_trasp.gif',
            beforeShow: function () {
                $("#ui-datepicker-div").addClass("removeCalendar"); 
            },
			onChangeMonthYear: function(year, month, inst){					
				$(this).unmask();				
				$(this).val(month + "/" + year);					  
  			},
            onClose: function(){	
				$("#ui-datepicker-div").removeClass("removeCalendar");					  
  			},
		});

		$("#animaleDataNascita").keyup(function() {
			if(!$(this).val()) {
				$(this).mask("99/9999");
			}  			
		});		
 	});
</script>	

<section>   
    <div class="assicurazioneAnimali">
        <div class="borderFormRoundedWrapper paddingMedium"> 
            <div class="row displayTable paddingLeftMedium">
                <div class="col-sm-12 displayTableRow">               							
                    <span class="icon-wrapper-assic_auto displayTableCell">
                        <i class="icon icon-assic_pet fontSize70" ></i>
                    </span>                
                    <h3 class="displayTableCell noMargin noUppercase paddingLeftMedium verticalAlignMiddle" >
                        ANIMALIpiùAMATI
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
                                <div class="col-xs-12 col-sm-3">						
                                    <div class="form-field paddingTopMedium">			
                                        <label class="control-label colorWhite " for="">Tipologia animale</label>
                                        <select name="" class="form-control" id="tipologiaCliente">             
                                            <option id="" selected="selected" value="">Seleziona</option>
                                            <option value="Comune1">Tipologia1</option>
                                            <option value="Comune2">Tipologia2</option>
                                            <option value="Comune3">Tipologia3</option>
                                        </select>									
                                    </div>                    
                                </div>     

                                <div class="col-xs-12 col-sm-3">
                                    <div class=" form-field paddingTopMedium">
                                        <label class="control-label colorWhite" for="">Data di nascita</label>
                                        <div class="form-field">
                                            <div class="input-group calcWidth">
                                                <div class="editable-input"><input type="text" name="animaleDataNascita" placeholder="mm/aaaa" id="animaleDataNascita" class=" datepicker clear-x form-control">
                                                    <span class="editable-clear-x" style="display: none">
                                                        <i class="icon icon-close icon-1x"></i>
                                                    </span>
                                                </div>
                                                <a class="input-group-addon date btn-icon" href="#"><i class="icon icon-calendar_filled"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="col-xs-12 col-sm-3">	
                                    <div class="spsel-height paddingTopMedium">			
                                        <label class="control-label colorWhite " for="">Filiale di riferimento</label>
                                                                    
                                    <script type="text/javascript">
                                            /* Esempio inizializzazione */
                                            $(function(){
                                                // Inizializza la special-select tipo "default" (esempio di callback)
                                                $("#assicAnimaliFilialeDiRif").spSel(
                                                    function(){console.log($("input[name=assicAnimaliFilialeDiRif]").val())}
                                                );
                                            });
                                        </script>
                                        
                                        <div class="spsel nosel borderColorDADEE1" id="assicAnimaliFilialeDiRif"  placeholder="Seleziona...">
                                            <!-- <input type="hidden" name="assicAnimaliFilialeDiRif">  -->
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
