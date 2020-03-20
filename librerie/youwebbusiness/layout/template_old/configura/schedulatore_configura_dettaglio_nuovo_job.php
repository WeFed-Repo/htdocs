
    <!--pagina da includere nel body per menu -->
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu1','onmouseoutDalLayer')" id="menu1"></div>
<div style="POSITION: absolute; TOP: 0px;VISIBILITY: hidden;" onmouseover="parent.tm_middle.clearTimeOut();" onmouseout="parent.tm_middle.layerTimeOut('menu2','onmouseoutDalLayer');" id="menu2"></div>
    <table class="larghezzaEsterna old-container" cellspacing="0" cellpadding="0" border="0" align="center" height="100%">
	<tbody><tr>
		<td valign="top" class="txt_center">
		<form name="Form1" method="post" action="jobSched.aspx" id="Form1">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTIxNjQxOTQyOGRkVlUeD6bCz2NVE03QN6V3Drw1rYI=">
</div>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="95D3556D">
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWAgKH2dykBQL4+5rnAvMX8Rs2iHAE/8rTpfbo5MDsEc1v">
</div>
		    <div class="container" style="height: 100%;"><div class="old-pageContent new-riquadro" style="height: 100%;">
			<table width="100%" align="center">
			    <tbody>
				<tr>
					<td>
						<table class="sfondoTabelle old-table table" cellspacing="0" cellpadding="0" border="0">
							
							<tbody><tr class="titoloTabella">
								<td class="old-pageTitle page-title"><div class="new-flag"></div><h1>Nuovo Job Informativo<a class="old-pageHelp" href="#" onclick="goTMHelp('jobSched.aspx','0','7')"><img src="/resources/YouBiz/images/i_help.png" class="imgSrv" alt="Help On Line"></a></h1></td>
							</tr>
							
							
							<tr>
								<td>
									<table border="0" cellspacing="0" class="sfondotab old-tabs" width="100%">
										<tbody><tr class="sfondotab">
											<td>
												<table height="100%" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" class="old-tabPanel">
                                                
												<tbody><tr class="rigascura even">
													<td>
														<table class="rigascura even" border="0" width="100%">
															<tbody><tr class="odd" style="background: transparent;">
																<td width="1%">Descrizione:&nbsp;</td>
																<td class="rigachiara odd">
																	<input name="txtDsJob" type="text" id="txtDsJob" class="textbox new-form-control" style="width:100%">
																	
																</td>
															</tr>
														</tbody></table>
													</td>
													
												</tr>
												<tr><td>&nbsp;</td></tr>
												
												
												</tbody></table>								
											</td>
										</tr>			
										<tr height="20"><td>&nbsp;</td></tr>							
										
									</tbody></table> 
								</td>
							</tr>
							
						</tbody></table>
					</td>
				</tr>
				<tr>
					<td class="old-buttons left">
                        
	                        
                                &nbsp;
		                   
					
					    &nbsp;
					</td>
				</tr>
			</tbody></table>
            </div><div class="new-buttons"><input type="button" class="btn1" name="cmdSalva" value="Salva descrizione" onclick="javascript:Salva();" style="width: 180px"><input type="button" class="btn1" name="cmdAnnulla" value="Esci" onclick="javascript:goEditSched();" style="width:60px"></div></div>
            <input type="hidden" name="pkSchedSel" value="844">
            <input type="hidden" name="idRobot" value="390271">
            <input type="hidden" name="dsRobot" value="RU8AJ">
		</form>
		<form name="frmGoSched" action="sched.aspx" method="post">
			<input type="hidden" name="pkSchedSel" value="844"> 
			<input type="hidden" name="goTipo" value="edit_sched_new">
			<input type="hidden" name="idTab" value="">
            <input type="hidden" name="idRobot" value="390271">
            <input type="hidden" name="dsRobot" value="RU8AJ">
		</form>
		<form name="frmSalvaJob" action="../common/eseguioperazione.aspx" method="post">
			<input type="hidden" name="pkSched" value="844"> 
			<input type="hidden" name="tm_tipo_operazione" value="tmsavejob_new">
			<input type="hidden" name="description" value="">
			<input type="hidden" name="pkJob" value="">
			<input type="hidden" name="idApplicazione" value="3">
            <input type="hidden" name="idRobot" value="390271">
            <input type="hidden" name="dsRobot" value="RU8AJ">
		</form>
		<form name="frmRefreshJobSched" action="jobsched.aspx" method="post">
			<input type="hidden" name="pkSchedSel" value="844"> 
			<input type="hidden" name="goTipo" value="edit_sched_new">
			<input type="hidden" name="idTab" value="0">
			<input type="hidden" name="pkJobSel" value="">
			<input type="hidden" name="jobMode" value="view_job_detail_new">
			<input type="hidden" name="idApplicazione" value="3">
            <input type="hidden" name="idRobot" value="390271">
            <input type="hidden" name="dsRobot" value="RU8AJ">
		</form>
		<form name="frmReloadFrame" method="post" action="../common/client/blank.aspx" target="iframesched">
			<input type="hidden" name="pkSchedSel" value="844"> 
			<input type="hidden" name="goTipo" value="edit_sched_new">
			<input type="hidden" name="idTab" value="0">
			<input type="hidden" name="pkJobSel" value="">
			<input type="hidden" name="idApplicazione" value="3">
            <input type="hidden" name="idRobot" value="390271">
            <input type="hidden" name="dsRobot" value="RU8AJ">
		</form>
		
		
		
		</td>
	</tr>
	<tr>
			<td valign="bottom">
				<div class="divFooter">
		            <div class="row footer">
			            <div class="container" style="height: 100%;">
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

    




    <script type="text/javascript">
        $(function () {
            
            $(".table tbody tr.odd").css("background", "transparent");
            $(".container").css("height", "100%");            
            $(".new-riquadro").css("height", "100%");            
            $("#iframesched").css("height", "350px");
            
        });
    </script>