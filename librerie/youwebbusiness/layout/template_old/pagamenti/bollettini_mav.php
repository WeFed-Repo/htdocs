<table class="larghezzaEsterna old-container" cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
		<tbody><tr>
			<td valign="top">
				<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div><form name="form1" method="post" action="./pagamentoBollettinoMavRav.aspx" id="form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTE3MDUyNzA4NjRkZBodHZxBHXO3WurYHtLzTfGVjUKbwkvEuZraBapIB2q9">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="436817EA">
</div>
					    <div class="container"><div class="old-pageContent new-riquadro">
						<table height="100%" class="larghezzaEsterna" cellspacing="0" cellpadding="0" border="0" align="center">
							<tbody><tr valign="top">
								<td>
									
									<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
										
										<tbody><tr>
											<td width="100%" colspan="3" class="right">
												<table class="sfondoTabelle old-table table" cellspacing="0" cellpadding="0" border="0">
													<tbody><tr>
														<td>
															<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
																<tbody><tr class="titoloTabella">
																	
                                                                    
                                                                    <td>
                                                                        <table cellspacing="0" cellpadding="0" border="0">
																            <tbody><tr>
                                                                                <td height="20" class="old-pageTitle page-title"><div class="new-flag"></div><h1>
																	                &nbsp;Mav/Rav
                                                                                </h1></td>
                                                                                <td>
                                                                                    &nbsp;<a class="testoRedSmallBold old-fieldHelp " href="#" onclick="goTMHelp('pagamentoBollettinoMavRav.aspx','0','19')"><img src="/resources/YouBiz/images/i_help.png" border="0" width="20" height="20"></a>   
																                </td>
																            </tr>
																        </tbody></table>
                                                                    </td>
                                                                    
																</tr>
																<tr>
																	<td height="1" style="height: 5px;">
																		</td>
																</tr>
																<!--SEZIONE ORDINANTE-->
																<tr height="20" class="old-sectionTitle old-section section clearfix" style="padding-left: 0px;"><h3 class="new-titleSection">
																	
																		&nbsp;Dati Ordinante
																</h3></tr>
																<tr>
																	<td height="1" class="old-section section clearfix" style="height: 15px;">
																		</td>
																</tr>
																<tr>
																	<td class="old-section section clearfix">
																		
    <table border="0" class="interno_1">
        <tbody><tr class="">
            
            <td class="testoBlackSmall" nowrap="">
                <span class="testoRedSmallBold">*</span>&nbsp;Ordinante:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                
                
                <select style="width:350px" onchange="writeSia(this);GetVal(this);" name="cboAzienda" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                <option value="588536">C.P.C. INOX SPA</option></select>
            </td>
            
            
	        <td style="width:280px;padding-left:250px;" class="testoBlackSmall">
		        Sia:
	        </td>
	        <td><input type="text" size="10" readonly="" name="txtSia" class="new-form-control"></td>
		                
        </tr>
        <tr class="">
        
            <td class="testoBlackSmall">
                <span class="testoRedSmallBold">*</span>&nbsp;Banca:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                
                <select style="width:350px" onchange="writeAbi(this);GetVal(this)" name="cboBanca" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                <option value="05034">05034 - BANCO BPM</option></select>
            </td>
            
                        
        </tr>
        <tr class="">     
        
            <td class="testoBlackSmall">
                <span class="testoRedSmallBold">*</span>&nbsp;Conto:
                
            </td>
            
            <td style="text-align: left" class="testoBlackSmall">
                
                <select style="width:350px" name="cboConto" onchange="GetVal(this)" class="new-form-control">
                    
                    <option value="">seleziona...</option>
                    
                <option value="1922806">33473 - IT38V0503433473000000011905.</option></select>
            </td>
            <td style="text-align: right" colspan="2">
            
            </td>
        </tr>
        
        
    </tbody></table>
    
    <script language="javascript" type="text/javascript">
        var myForm=eval('document.form1');    
        var intestatario = new Array();
        var rapporto = new Array();
        var banca = new Array();
    
		function writeSia(combo){
		    
		        myForm.txtSia.value=intestatario[combo.selectedIndex].codAzienda;
		    
			refreshBanca(combo);
		}
        
		function writeAbi(combo){
			refreshConto(combo);
		}
		
		function GetVal(obj)
		{
		    ImpoDateStatoAzzFiltri(true);
                    
            
		}

        function doAfterLoaded(alsoFixed){

        var runNow = true;
        

        if(runNow)
        {
	        // valore di default del combo nel caso in cui sia selezionata la option 'seleziona..'
	        intestatario[0]=new infoIntestatario('','');
	        i = 1;
	        
	        //carico tutte le aziende
	        
                intestatario[i] = new infoIntestatario('C.P.C. INOX SPA','73586',588536);
                var iName = new Option(intestatario[i].ragioneSociale, intestatario[i].idAzienda, false, false);
                myForm.cboAzienda.options[i]=iName ;
                i++;
                
            
            //Riposiziono se unico rag sociale il valore di partenza senza "seleziona.."
            if (myForm.cboAzienda.options.length==2){
               myForm.cboAzienda.selectedIndex=1;
               writeSia(myForm.cboAzienda);
               refreshBanca(myForm.cboAzienda);
               //david 
               GetVal(myForm.cboAzienda);
            }

	        

            //Riposiziono se unica banca il valore di partenza senza "seleziona.."
            /*if (myForm.cboBanca.options.length==2){
                myForm.cboBanca.selectedIndex=1;
                refreshConto(myForm.cboBanca);
            }*/
           

	        
            
            //Riposiziono se unico conto il valore di partenza senza "seleziona.."
            /*if (myForm.cboConto.options.length==2){
                myForm.cboConto.selectedIndex=1;
            }*/
            
	      
                           setValueCombo(myForm.numRows,'50');
                          
            DefaultnumRowsSelect();
            }
        }
        
        function DefaultnumRowsSelect()
        {
            
        }

		function infoIntestatario(ragione_sociale,cod_azienda,idAzienda)
		{
			this.ragioneSociale = ragione_sociale;
			this.codAzienda = cod_azienda;
			this.idAzienda=idAzienda;
		}

		function infoBanca(nome,abi)
		{
			this.nome = nome;
			this.abi = abi;
		}
		
		function infoRapporto(descrizione,idrapporto)
		{
			this.dsRapporto = descrizione;
			this.idRapporto = idrapporto;
		}
		
		function clearCombo(combo){
			var itemsNum = combo.length;
			for (i = itemsNum; i > 0 ; i--){
				combo.options[i] = null;
			}
			combo.selectedIndex=0;
		}

		function setValueCombo(combo,valore)
		{
		    if(combo != null)
		    {
		        for (i = 0; i < combo.length ; i++){
			    if (combo.options[i].value == valore){
				        combo.selectedIndex=i;
				        break;
				    }
    				    
			    }    
		    }
		}
        
		function refreshBanca(combo){
			comboToClear = myForm.cboBanca;
			clearCombo(comboToClear);
			otherComboToClear = myForm.cboConto;
			clearCombo(otherComboToClear);
			
			// valore di default del combo nel caso in cui sia selezionata la option 'seleziona..'
			banca[0]=new infoBanca('','');
			b = 1;
			
			var idAzSel = combo.options[combo.selectedIndex].value;	
			
    		
    		//alert('cambio azienda:' + 'strAbiOld: ' + '');
    		
                
                //controllo l'azienda selezionata
                //alert('azienda:'+idAzSel+'--banca:'+'05034' + 'strAbiOld:' + '');
                if (idAzSel == '588536' ){
                    
                    
                            if ('' != '05034'){
        					        
					            banca[b] = new infoBanca('05034 - BANCO BPM','05034');
					            var bName = new Option(banca[b].nome, banca[b].abi, false, false)
					            myForm.cboBanca.options[b] = bName;
					            b++; 
					        }
                        
                }
                	
    		
    		if (myForm.cboBanca.options.length==2)
    		{
                myForm.cboBanca.selectedIndex=1;
                refreshConto(myForm.cboBanca);
                if (myForm.cboConto.options.length==2)
                {
                    myForm.cboConto.selectedIndex=1;
                }
            }
		}
		
		function refreshConto(combo){
		
			comboToClear = myForm.cboConto;
			clearCombo(comboToClear);
			combo.options.lenght = 0;
			// valore di default del combo nel caso in cui sia selezionata la option 'seleziona..'
			rapporto[0]=new infoRapporto('','');
			r = 1;
			
			var idAzSel = myForm.cboAzienda.options[myForm.cboAzienda.selectedIndex].value;	
			var idBancaSel = combo.options[combo.selectedIndex].value;
			
    		
                
                //controllo l'azienda selezionata
                if (idAzSel == '588536' ){
                    //controllo la banca
                    if (idBancaSel== '05034' ){
					    rapporto[r] = new infoRapporto('33473 - IT38V0503433473000000011905.',1922806);
					    var rName = new Option(rapporto[r].dsRapporto, rapporto[r].idRapporto, false, false)
					    myForm.cboConto.options[r] = rName;
					    r++;
					}
                }
		    

                if (myForm.cboConto.options.length==2)
                {
                    myForm.cboConto.selectedIndex=1;
                }
		}
		
        function setClassRowsXPAge(id){
        
            
                document.getElementById('aRowsXpag50').className = "testoBlackSmallBold";
            
                document.getElementById('aRowsXpag100').className = "testoBlackSmallBold";
            
                document.getElementById('aRowsXpag200').className = "testoBlackSmallBold";
             
            
            /*document.getElementById('aRowsXpag10').className = "testoBlackSmallBold";
            document.getElementById('aRowsXpag20').className = "testoBlackSmallBold";
            document.getElementById('aRowsXpag50').className = "testoBlackSmallBold";
            document.getElementById('aRowsXpag100').className = "testoBlackSmallBold";
            document.getElementById('aRowsXpag200').className = "testoBlackSmallBold";*/
            
            if (id==10){
                //document.getElementById('aRowsXpag10').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag10').className = "testoRedSmallBold";
            }
            if (id==20){
                //document.getElementById('aRowsXpag20').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag20').className = "testoRedSmallBold";
            }                
            if (id==50){
                //document.getElementById('aRowsXpag50').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag50').className = "testoRedSmallBold";
            }                
            if (id==100){
                //document.getElementById('aRowsXpag100').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag100').className = "testoRedSmallBold";
            }                
            if (id==200){
                //document.getElementById('aRowsXpag200').className = "testoBlackSmallBold";
                document.getElementById('aRowsXpag200').className = "testoRedSmallBold";
            }  
        }
		
		function ReLoad(nItem,valt){
		    myForm.wucHiidenRowsXPage.value=nItem;
		    
		}
		
		function visAvanzate()
		{
		    var myForm=eval('form1');
            var trAvanzate=document.getElementById('RowAvanzate');	
            if(trAvanzate.style.display =='none'){
				trAvanzate.style.display = '';
				myForm.cmdAvanzate.value = '<< Avanzate';
			}
			else{
				trAvanzate.style.display = 'none';
				myForm.cmdAvanzate.value = '>> Avanzate';
			}
		}
		
		doAfterLoaded();

    </script>
																	</td>
																</tr>
																<tr>
																	<td height="1" style="height: 5px;">
																		</td>
																</tr>
																<tr height="20" class="old-sectionTitle old-section section clearfix" style="padding-left: 0px;"><h3 class="new-titleSection">
																	
																		&nbsp;Dati Bollettino
																</h3></tr>
																<tr>
																	<td height="1" class="old-section section clearfix" style="height: 15px;">
																		</td>
																</tr>
																<tr>
																	<td class="old-section section clearfix txt_center">
																		<table width="80%" border="0">
																			<tbody><tr>																				
																				<td class="testoBlackSmall" nowrap="">
																					<span class="testoRedSmallBold">*</span>
																					Importo
																					&nbsp;
																					<input type="text" id="txt_importo" class="testoBlackSmall new-form-control" style="text-align: right" maxlength="20" size="20" onkeypress="return onlyRealNumbers(event);">
																					&nbsp;EURO
																				</td>
																				
                                                                                <td class="testoBlackSmall right" style="width: 250px">
																					<span class="testoRedSmallBold">*</span>
																					Data esecuzione
                                                                                    &nbsp;
                                                                                    <input size="11" maxlength="10" type="text" id="txtDataEsecuzione" name="" onkeypress="return onlyDate(event)" class="datepicker txtDataEsecuzioneYBW new-form-control hasDatepicker" value="27/09/2019">
                                                                                    <a class="icon-replace icon-calendar active" onclick="$('.datepicker.txtDataEsecuzioneYBW').datepicker('show');" href="javascript:void(0);">
                                        <img class="old-fieldCalendar txtDataEsecuzioneYBW" src="/resources/YouBiz/images/calendar.png" border="0" height="20" width="20" id="dp1569593463113"></a>
                                        <script language="javascript" type="text/javascript">
                                            $(function () { $(".txtDataEsecuzioneYBW").datepicker({beforeShowDay: noWeekendsOrHolidays});});
                                        </script> 
                                      
                                                                                    
																				</td>
																				<td class="testoBlackSmall" style="width: 90px" nowrap="">
																					
                                                                                    
                                                                                    
																				</td>
																				<td valign="baseline">
																					
                                                                                    
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
																<tr>
																	<td height="1" class="old-section section clearfix" style="height: 15px;">
																		</td>
																</tr>
																<tr>
																	<td class="old-section section clearfix txt_center">
																		<div id="bubble_tooltip" style="position: absolute; display: none; top: -196px;"><img src="/resources/05034/it-IT/TMIBBWEBServizi/img/imgCodMavYouBiz.jpg" width="434" height="186" border="0"></div><table width="80%" border="0">
																			<tbody><tr>
																				<td class="testoBlackSmall" width="150">
																					<input type="radio" id="rdbMAV" name="rdbMAV" class="testoBlackSmall" checked="checked" onclick="javascript:ChkRadio(this.id)">
																					MAV
																					&nbsp;&nbsp;
																				</td>
																				<td class="testoBlackSmall" nowrap="">
																					<span class="testoRedSmallBold" id="spanObbligMav" style="visibility:visible">*</span>
																					Codice MAV
																				</td>
																				<td class="testoBlackSmall" nowrap="">
																					<input size="27" maxlength="20" type="text" id="txt_CodMAV" name="txt_CodMAV" onkeypress="return onlyIntNumbers(event)" class="new-form-control">
																				</td>
																				<td style="width:450px">
																				    <a class="old-fieldHelp" href="#" onclick="showToolTip(event,'MAV');return false" onmouseout="hideToolTip()" title="Fac-simile">
																				        <img src="/resources/YouBiz/images/i_help.png" border="0" height="20" width="20">
																				    </a>
																				</td>
																			</tr>
																			<tr>
																				<td class="testoBlackSmall" width="150">
																					<input type="radio" id="rdbRAV" name="rdbRAV" class="testoBlackSmall" onclick="javascript:ChkRadio(this.id)">
																					RAV
																					&nbsp;&nbsp;
																				</td>
																				<td class="testoBlackSmall" nowrap="">
																					<span class="testoRedSmallBold" id="spanObbligRav" style="visibility:hidden">*</span>
																					Codice RAV
																				</td>
																				<td class="testoBlackSmall" nowrap="">
																					<input size="27" maxlength="20" type="text" id="txt_CodRAV" name="txt_CodRAV" disabled="disabled" onkeypress="return onlyIntNumbers(event)" class="new-form-control">
																				</td>
																				<td style="width:450px">
																				    <a class="old-fieldHelp" href="#" onclick="showToolTip(event,'RAV');return false" onmouseout="hideToolTip()" title="Fac-simile">
																				        <img src="/resources/YouBiz/images/i_help.png" border="0" height="20" width="20">
																				    </a>
																				</td>
																			</tr>
																			<tr style="height:2px">
																				<td></td>
																			</tr>
																			<tr>
																				<td>&nbsp;</td>
																				<td class="testoBlackSmall" nowrap="">
																					Descr. pagamento
																				</td>
																				<td class="testoBlackSmall" nowrap="" colspan="2">
																					<input size="75" maxlength="50" type="text" id="txt_DescrPag" name="txt_DescrPag" class="new-form-control">
																				</td>
																			</tr>
																			
																		</tbody></table>
																	</td>
																</tr>
                                                                
																<tr>
																	<td>
																		<table width="100%" border="0">
																			<tbody><tr>
																				<td height="30" class="old-buttons txt_center" id="noSpaceYouBiz" style="height: 10px;">
																					
																					&nbsp;
																					
																				</td>
																			</tr>
																			<tr>
																				<td style="width: 120px" colspan="1">
																					<span class="testoRedSmallBold">&nbsp;&nbsp;*
																						campi obbligatori
																					</span>
																				</td>
																			</tr>
																		</tbody></table>
																	</td>
																</tr>
															</tbody></table>
														</td>
													</tr>
												</tbody></table>
											</td>
										</tr>

									</tbody></table>
								</td>
							</tr>
						</tbody></table>
                        </div><div class="new-buttons"><input type="button" class="btn1" style="cursor: pointer" name="cmdVisualizza" value=" Conferma" onclick="javascript:goRiepilogo();"><input value="Annulla" type="button" onclick="javascript:annulla()" name="cmdAnnulla" class="btn1" style="cursor: Hand"></div></div>
					</form>
					<form name="frmGoConferma" id="frmGoConferma" action="" method="post">
						<input type="hidden" name="idAzienda" value="">
						<input type="hidden" name="idBanca" value="">
						<input type="hidden" name="idConto" value="">
						<input type="hidden" name="Importo" value="">
						<input type="hidden" name="Data" value="">
						<input type="hidden" name="strCodMav" value="">
						<input type="hidden" name="strCodRav" value="">
						<input type="hidden" name="EnumCodMav" value="">
						<input type="hidden" name="EnumCodRav" value="">
						<input type="hidden" name="Divisa" value="">
						<input type="hidden" name="DescrPagamento" value="">
						<input type="hidden" name="tm_tipo_operazione" value="">
						<input type="hidden" name="tm_idApplicazione" value="19">
						<input type="hidden" name="tm_idSubApplicazione" value="0">
					</form>
					<form name="frmAnnulla" id="frmAnnulla" action="../../main/serviziMain.aspx" method="post">
					</form>
			</td>
		</tr>
		<tr>
			<td valign="bottom">
				<div class="divFooter">
		            <div class="row footer">
			            <div class="container">
				            <div class="col-xs-4">
					            <div class="assistenza clearfix">
						            <h4>Assistenza Clienti</h4>
						            <div class="clearfix">
							            <a class="ico-assistenza" href="#">&nbsp;</a>
							            <div>
								            Numero verde:&nbsp;<strong>800.607.227</strong><br>
								            Dall'estero:&nbsp;<strong>+39 02.43371097</strong>
							            </div>
						            </div>
						            <div class="clearfix">
							            <a class="ico-gestore" href="#">&nbsp;</a>
							            <div>Per qualsiasi altra esigenza è a tua disposizione<br>
							            il <strong>Gestore</strong> presso la tua filiale di riferimento</div>
						            </div>
					            </div>
				            </div>
				            <div class="col-xs-4">					            
				            </div>
				            <div class="col-xs-4">
					            <div class="footer-logo"> <span>Banco Popolare</span> </div>
				            </div>
				            <div class="col-xs-12 margin-top10 txt_center disclaimer">
					            © 2000-2015&nbsp;-&nbsp;Vietata la riproduzione totale o parziale senza l'autorizzazione scritta dei detentori del copyright
				            </div>
			            </div>
		            </div>
	            </div>
			</td>
		</tr>

	</tbody></table>