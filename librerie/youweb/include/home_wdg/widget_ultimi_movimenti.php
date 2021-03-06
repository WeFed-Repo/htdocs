<script type="text/javascript" language="javascript" src="/HT/JS/jquery.ui.touch-punch.min.js"></script>
         <script type="text/javascript" language="javascript" src="/HT/JS/jquery/jquery-ui.selectToUISlider.js"></script>
         <link rel="Stylesheet" type="text/css" href="/HT/CSS/ui.slider.extras.css">
         <style>	
            .sliderContainer {
            position: relative;
            width: 100%;
            height: 31px;
            padding-top: 8px;
            }
            .slider {
            margin-left: 45px;
            margin-right: 45px;
            }
            .slider .ui-slider-handle {
            border-radius: 0 0 0 0;
            box-shadow: 1px 1px 2px #666666;
            height: 17px;
            margin-left: -22px;
            text-align: center;
            text-decoration: none;
            top: -5px;
            width: 45px;
            font-size:12px
            }
            .slider .ui-slider-handle:hover {
            text-decoration: none;
            cursor: e-resize;
            }
            a.meno {
            position: absolute;
            left: 4px;
            top: 7px;
            }
            a.piu {
            position: absolute;
            right: 4px;
            top: 7px;
            }
            .min {
            left: 43px;
            position: absolute;
            top: 24px;
            font-weight: bold;
            }
            .max {
            right: 26px;
            position: absolute;
            top: 24px;
            font-weight: bold;
            }
            td.select2slider {
            padding-right: 50px;
            }
            td.select2slider .ui-slider-handle {
            border-radius: 0 0 0 0;
            box-shadow: 1px 1px 2px #666666;
            height: 11px;
            margin-left: -8px;
            padding: 0 0 6px;
            text-align: center;
            text-decoration: none;
            top: -6px;
            width: 15px;
            }
            td.select2slider .ui-slider-handle:hover {
            cursor: e-resize;
            }
            #limitato {
            float: right;
            position: relative;
            right: 68%;
            }
            td.limiteAutoricariche .ui-slider {
            float: right;
            margin-right: -10px;
            width: 62%;
            }
            td.small .ui-slider {
            width: 50px;
            }
            td.medium .ui-slider {
            width: 100px;
            margin: auto;
            }
            span.ttContent{
            margin-left: 10px;
            }
         </style>
         <script>
            function updateSlider(event, ui, id, funCallBack){
            $('#slider_'+id).children('span').text( formatter( ui.value));
            $('#slider_'+id).siblings(':input').val(ui.value);
            
            if ($.isFunction(funCallBack)) {
            funCallBack(event, ui);
            }
            } 	
            
            function sliderLimiti(id,valMin,valMax,valStep,funCallBack) {
            $('#slider_'+id).slider({
            value: $("#"+id).val(),
            min: valMin,
            max: valMax, //5000.00,
            range: "min",
            step: valStep,
            slide: function(event, ui) {
            	updateSlider(event, ui, id, funCallBack);
            	var id_elemento = $(this).closest('.boxContent').attr('id');
            	$('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
            },
            change: function(event, ui) {
            	updateSlider(event, ui, id, funCallBack );
            	
            }
            });
            $('#slider_'+id+' > a').text(formatter($("#"+id).val()));
            
            } 
            
            function formatter(number) {
            return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, '.');
            }
            
            function somma(button) {
            var id_elemento = $(button).closest('.boxContent').attr('id');
            $('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
            var slider = $(button).siblings('.slider');
            var val = parseInt( $(button).siblings(':input').val() );
            var max = parseInt( slider.slider('option','max'));
            if(val < max) {
            	var step = slider.slider('option', 'step');
            	slider.slider("value", val + step)
            }
            return false;
            }
            
            function sottrai(button) {
            var id_elemento = $(button).closest('.boxContent').attr('id');
            $('#'+id_elemento).find('input[type=submit]').removeClass('disabled');
            var slider = $(button).siblings('.slider');
            var val = parseInt( $(button).siblings(':input').val() );
            if(val > 0) {
            	var step = slider.slider('option', 'step');
            	slider.slider("value", val - step)
            }
            return false;
            }
         </script>
         <script>
            var numeroContoMov = 0;
            var CCNumber = 0;
            var firstMov = false;
            var codContoCorr = "";
            
            window.getRootMovimentiHomepage = function() {
            return $("#riquadroSM");
            }
            window.getNodeMovimentiHomepage = function(selector) {
            return getRootMovimentiHomepage().find(selector);
            }
            
            function nextMovimenti(button){
            	if(numeroContoMov < CCNumber){
            		numeroContoMov = parseInt($('#slider_ContoCorrente').children('span').text());
            		$('#slider_ContoCorrente').children('span').text(formatter(numeroContoMov));
            			$('#slider_ContoCorrente').siblings(':input').val(numeroContoMov);
            			var val = parseInt( $(button).siblings(':input').val() );
            			var slider = $(button).siblings('.slider');
            			var step = slider.slider('option', 'step');
            			slider.slider("value", val + step)
            		}
            	}
            	
            	function prevMovimenti(button){
            		if(numeroContoMov>0){
            			numeroContoMov = parseInt($('#slider_ContoCorrente').children('span').text());
            			$('#slider_ContoCorrente').children('span').text(formatter(numeroContoMov));
            			$('#slider_ContoCorrente').siblings(':input').val(numeroContoMov);
            			var val = parseInt( $(button).siblings(':input').val() );
            			var slider = $(button).siblings('.slider');
            			var step = slider.slider('option', 'step');
            			slider.slider("value", val - step)
            		}
            	}
            	
            	function callSaldoMovimenti(){
            		$.ajax({
            			async: true,
            			dataType: 'html',
            			data: $('#formHP').serialize(),
            			url: getPathContext() + '/common/homePageSaldoMovimenti.do',
            			success: function(response) {
            			    var isError= false;
            				var htmlInt = jQuery('<div>').html(response).find('#intestatario').html();
            				var htmlPul = jQuery('<div>').html(response).find('#pulsanti').html();
            				getNodeMovimentiHomepage('#intes').html(htmlInt);
            				getNodeMovimentiHomepage('#puls').html(htmlPul);
            				
            				$('#MovimentiHomePage').html(response);
            				//controllo se la chiamata ha restituito un messaggio di errore
            				if ($('#MovimentiHomePage .boxMsg').size() > 0) {
            					isError = true;
            				}
            				//altezza box tabella/grafico
            				//messo fisso per evitare che il box aumenti o diminuisca a seconda del numero di movimenti
            				if (!isError) {
            					//adatto il grafico al suo contenitore
            			   		$('#movimentiGrafico').height($('#MovimentiHomePage').height()-10);
            			   		//-5 per evitare che il grafico si sovrapponga al box nella parte destra
            			   		$('#movimentiGrafico').width($('#MovimentiHomePage').width()-5);
            					$('#MovimentiHomePage').css('min-height','300px');
            				} else {
            				    //in caso di errore nascondo lo slider di saldo e movimenti
            					$('#riquadroSM .sliderContainerSpalla').hide();
            				}
            				$('#MovimentiHomePage .homeMsg').css({
                 				  position:'absolute',
                				   left: ($('#MovimentiHomePage').width() - $('#MovimentiHomePage .homeMsg').outerWidth())/2,
                  				   top: ($('#MovimentiHomePage').height() - $('#MovimentiHomePage .homeMsg').outerHeight())/3
              				 	});
              				 	$('#loadingMovimenti').hide();
            	 		}
            		 });
            	}
            				
            	function scalaDivSliderMovimenti(id, maxMens, val) {
            		var element = $('#slider_ContoCorrente');
            		var dimensioneMassima = $(element).width();
            		var nuovaDimensione = (dimensioneMassima / maxMens) * val;
            		if (nuovaDimensione < 70)
            			nuovaDimensione = 70;
            		var contenitore = $('#slider_' + id).parent('div').css('width',
            				nuovaDimensione + 45 + 45);
            	}
            
            	function updateSMovimenti(event, ui, id, funCallBack){
            		$('#slider_'+id).children('span').text( formatter(ui.value) );
            		
            		$('#slider_' + id).siblings(':input').val((parseInt(ui.value) - 1).toString());
            		if ($.isFunction(funCallBack)) {
            			funCallBack(event, ui, id);
            		}
            	} 	
            
            	 function callBackSlideMovimenti(event, ui, id){
            		numeroContoMov = parseInt($('#slider_' + id).siblings(':input').val());
            		getNodeMovimentiHomepage('#ContoCorrente').val(numeroContoMov);
            	 	callSaldoMovimenti();
            	 }
            
            	function sliderInit(id,valMin,valMax,valStep,funCallBack) {
            		$('#slider_'+id).slider({
            			value: $("#"+id).val(),
            			min: valMin,
            			max: valMax,
            			range: "min",
            			step: valStep,
            			
            			change: function(event, ui) {
            				updateSMovimenti(event, ui, id, funCallBack );
            			},
            			slide: function(event, ui) {
            				updateSMovimenti(event, ui, id, null );
            			}
            		});
            		$('#slider_'+id+' > a').text(format($("#"+id).val()));
            		$('#slider_'+id+' > a').addClass("margin-bottom20");
            	} 
            
            	function format(number) {
            		return Math.max(0, number).toFixed(0).replace(/(?=(?:\d{3})+$)(?!^)/g, '.');
            	}
            	
            	function prepareSliderMov(codice){
            		if(CCNumber > 1){
            			sliderInit('ContoCorrente', 1, CCNumber, 1,	callBackSlideMovimenti);
            			$('<span class="ui-icon ui-icon-grip-dotted-vertical"></span>').appendTo('td.select2slider .ui-slider-handle');
            			$('.ui-slider-handle.ui-state-default.ui-corner-all').text(numeroContoMov + 1);
            			firstMov = true;
            		}else{
            			$('#containerSliderHome').hide();
            		}
            	 }
            
            	$(document).ready(function(){
            		$('#numConto').val('0');
            		callSaldoMovimenti();
            
            	});
         </script>
         <div class="riquadro clearfix" id="riquadroSM">
            <div class="bs-example form-horizontal">
               <div class="form-group">
                  <h1>
                     <div class="flag hidden-xxs ultimeDisposizioni">&nbsp;</div>
                     Ultimi movimenti
                  </h1>
                  <div id="loadingMovimenti" class="col-xs-12 oCenter" style="display: none;">
                     <img src="/HT/IMAGES/caricamento.gif">
                  </div>
                  <div id="puls" class="floatr padding-top5">
                     <div id="puls_gr_table_chart" class="context-buttons margin-right10">
                        <!--[if gt IE 8]><!-->
                        <a href="#Table" title="Tabella" onclick="showTable(); return false;" id="btnTable" class="btnTable disabled"> </a>
                        <a href="#Chart" title="Grafico" onclick="loadDataGrafico(); return false;" id="btnChart" class="btnChart"> </a>
                        <!--<![endif]-->
                     </div>
                  </div>
                  <div class="col-xs-12 clear-padding">
                     <div id="intes">
                        <h3 class="titleSectionDouble">
                           <strong>Conto corrente - 00000000
                           - CASALPUSTERLENGO - 0000 - </strong><span class="intestatario">Cognome Nome</span>
                        </h3>
                     </div>
                  </div>
                  <div class="col-xs-12 clear-padding">
                     <form id="formHP">
                        <div class="sliderContainerSpalla margin-bottom10" id="containerSliderHome">
                           <a href="#Prev" class="meno" onclick="prevMovimenti(this)">
                           <img src="/HT/IMAGES/ico-slide-left.png" height="14" width="14" title="Precedente" alt="Precedente">
                           </a>
                           <div id="slider_ContoCorrente" class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                              <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div>
                              <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;">1</span>
                           </div>
                           <a href="#Next" class="piu" onclick="nextMovimenti(this)">
                           <img src="/HT/IMAGES/ico-slide-right.png" height="14" width="14" title="Successivo" alt="Successivo">
                           </a>
                           <input type="hidden" name="numConto" value="0" id="numConto">
                           <input type="text" value="0" id="ContoCorrente" style="display:none;">
                        </div>
                        <input type="hidden" name="schermata" value="tabella" id="schermata">
                     </form>
                  </div>
                  <div class="col-xs-12 clear-padding" id="MovimentiHomePage" style="min-height: 300px;">
                     <div id="pulsanti" style="display: none">
                        <div id="puls_gr_table_chart" class="context-buttons margin-right10">
                           <!--[if gt IE 8]><!-->
                           <a href="#Table" title="Tabella" onclick="showTable(); return false;" id="btnTable" class="btnTable disabled"> </a>
                           <a href="#Chart" title="Grafico" onclick="loadDataGrafico(); return false;" id="btnChart" class="btnChart"> </a>
                           <!--<![endif]-->
                        </div>
                     </div>
                     <div class="clearfix" id="saldoMov">
                        <div class="bs-example form-horizontal">
                           <div class="form-group">
                              <div class="col-xs-12 clear-padding">
                                 <div id="intestatario" style="display: none">
                                    <h3 class="titleSectionDouble">
                                       <strong>Conto corrente - 00000000
                                       - CASALPUSTERLENGO - 0000 - </strong><span class="intestatario">Cognome Nome</span>
                                    </h3>
                                 </div>
                                 <div id="loadingChart" class="caricamentoAjax" style="display: none;">
                                    <img src="/HT/IMAGES/caricamento.gif">
                                 </div>
                                 <div id="container">
                                    <div id="movimentiTable" class="margin-top10">
                                       <div class="table-responsive tabSelezioneCarte" style="display: block;">
                                          <div class="dataTables_wrapper no-footer">
                                             <table class="table table-striped dataTable no-footer home">
                                                <thead>
                                                   <tr class="hover">
                                                      <th>
                                                         Data Contabile
                                                      </th>
                                                      <th>
                                                         Causale 
                                                      </th>
                                                      <th>
                                                         Importo
                                                      </th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr class="odd">
                                                      <td>
                                                         03/02/2017
                                                      </td>
                                                      <td>
                                                         trasferim.tra conti
                                                      </td>
                                                      <td class="oRight">
                                                         <strong class="positivo">
                                                         5,00</strong>&nbsp;
                                                      </td>
                                                   </tr>
                                                   <tr class="even">
                                                      <td>
                                                         27/01/2017
                                                      </td>
                                                      <td>
                                                         add. pagam. diversi
                                                      </td>
                                                      <td class="oRight">
                                                         <strong class="negativo">
                                                         -7,00</strong>&nbsp;
                                                      </td>
                                                   </tr>
                                                   <tr class="odd">
                                                      <td>
                                                         27/01/2017
                                                      </td>
                                                      <td>
                                                         trasferim.tra conti
                                                      </td>
                                                      <td class="oRight">
                                                         <strong class="negativo">
                                                         -10,00</strong>&nbsp;
                                                      </td>
                                                   </tr>
                                                   <tr class="even">
                                                      <td>
                                                         03/01/2017
                                                      </td>
                                                      <td>
                                                         vers. contanti
                                                      </td>
                                                      <td class="oRight">
                                                         <strong class="positivo">
                                                         100,00</strong>&nbsp;
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                       <div style="position:absolute;bottom:-15px;left:0px;width:100%;">
                                          <div class="homePageHelp floatl">
                                             Ultimi 8 movimenti dell'ultimo trimestre
                                          </div>
                                       </div>
                                    </div>
                                    <!-- div contenitore per il grafico -->
                                    <div id="movimentiGrafico" style="display: none; height: 173px; width: 466px;">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 margin-top10">
                        <div>
                        </div>
                        <div>
                           <form id="saldoMovimentiDettaglio" method="post" action="/WEBHT/cc/movimentiConto.do" class="floatr margin-right10">
                              <input type="hidden" name="ultimiMovimenti" value="90">
                              <input type="hidden" name="compilazione" value="S">
                              <input type="hidden" name="tipoIntervallo" value="ultimiGiorni">
                              <input type="hidden" name="codContoCorrente" value="001|2070|207000000000" id="codContoCorrente">
                              <input type="submit" value="Saldo e movimenti" class="margin-bottom20Important btn 1">
                           </form>
                        </div>
                     </div>
                     <script type="text/javascript">
                        var i=0;
                        var dati = [];
                        var giorni = [];
                        var importi = [];
                        var causali = [];
                        var fido;
                        var saldiTotali = [];
                        var map = {};
                        var startDate;
                        var endDate
                        
                        
                        
                        
                        	fido = 0
                        
                        	
                        //creo l'array per disegnare il grafico dei saldi
                        	
                        	
                        //creo un array con tutti gli importi dei movimenti
                        
                        	importi.push("5,00");
                        
                        	importi.push("-7,00");
                        
                        	importi.push("-10,00");
                        
                        	importi.push("100,00");
                        
                        importi.reverse();
                        
                        //creo un array con tutte le causali
                        
                        	causali.push("34M");
                        
                        	causali.push("500");
                        
                        	causali.push("34M");
                        
                        	causali.push("780");
                        
                        causali.reverse();
                        
                        
                        //creo un array con tutte le date in cui &egrave; presente un movimento
                        
                        	giorni.push("Tue Jan 03 00:00:00 CET 2017");
                        
                        	giorni.push("Fri Jan 27 00:00:00 CET 2017");
                        
                        	giorni.push("Fri Jan 27 00:00:00 CET 2017");
                        
                        	giorni.push("Fri Feb 03 00:00:00 CET 2017");
                        
                        	giorni.push("Wed Mar 01 15:45:46 CET 2017");
                        
                        
                         	//salvo i saldi del conto dopo ogni movimento
                        
                         
                         	//visualizza tabella movimenti
                         	function showTable(){
                         		
                         		if(!getNodeMovimentiHomepage('#btnTable').hasClass('disabled')){
                        		getNodeMovimentiHomepage('#movimentiGrafico').hide();
                        		getNodeMovimentiHomepage('#movimentiTable').show();
                        		
                        		getNodeMovimentiHomepage('#schermata').val('tabella');
                        		getNodeMovimentiHomepage('#btnTable').addClass('disabled');
                        		if(getNodeMovimentiHomepage('#btnChart').hasClass('disabled'))
                        			getNodeMovimentiHomepage('#btnChart').removeClass('disabled');
                        	} else {
                        		getNodeMovimentiHomepage('#movimentiGrafico').hide();	
                        	}
                         	}
                         
                         	//disegno grafico
                         	function loadGrafico() {
                         		if (saldiTotali.length > 0){
                        		getNodeMovimentiHomepage('#wMessageTable').hide();
                        		var options = {packages: ['corechart'], callback : drawChart};
                        	    google.load('visualization', '1.0', options);
                        	} else{
                        	    getNodeMovimentiHomepage("#loadingChart").hide();
                        	    if(!$('#wMessageTable'))
                        	    	getNodeMovimentiHomepage('#wMessage').css('display', 'block');
                        	}
                         	}
                         	
                        function loadDataGrafico() {
                        	$('#schermata').val('chart');
                        	callSaldoMovimenti();
                        }
                        
                        function caricaGrafico(){
                        	if(!getNodeMovimentiHomepage('#btnChart').hasClass('disabled')){
                        		getNodeMovimentiHomepage("#loadingChart").show();
                        		getNodeMovimentiHomepage('#movimentiTable').hide();
                        		getNodeMovimentiHomepage('#movimentiGrafico').show();
                        	
                        			if (saldiTotali.length > 0){
                        			getNodeMovimentiHomepage('#wMessageTable').hide();
                        			var options = {packages: ['corechart'], callback : drawChart};
                        	    	google.load('visualization', '1.0', options);
                        	    } else {
                        	    	getNodeMovimentiHomepage("#loadingChart").hide();
                        	    	if(!$('#wMessageTable'))
                        	    		getNodeMovimentiHomepage('#wMessage').css('display', 'block');
                        	    }
                            	getNodeMovimentiHomepage('#schermata').val('chart');
                            	getNodeMovimentiHomepage('#btnChart').addClass('disabled');
                        		if (getNodeMovimentiHomepage('#btnTable').hasClass('disabled')) {
                        			getNodeMovimentiHomepage('#btnTable').removeClass('disabled');
                        		}
                            }
                        }
                        
                           function drawChart() {
                           	var saldiTotaliArray = [];
                           	for(i=0;i<saldiTotali.length;i++){
                           		saldiTotaliArray.push(saldiTotali[i].saldo);
                           	}
                           	var min = Math.min.apply(Math, saldiTotaliArray);
                           	var max = Math.max.apply(Math, saldiTotaliArray);
                           	
                          		var rows = [];
                            var data = new google.visualization.DataTable();
                            data.addColumn('date', 'Day');
                            data.addColumn('number', 'Saldo');
                            //data.addColumn({id:'i0', type:'number', role:'interval'});
                               //data.addColumn({id:'i1', type:'number', role:'interval'});
                            //data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
                            if(fido > 0){
                        	    data.addColumn('number', 'Affidamento');
                        		data.addColumn({id:'i0', type:'number', role:'interval'});
                                data.addColumn({id:'i1', type:'number', role:'interval'});
                        	   	data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': false}});
                        	}
                        	if(min<0){
                        		data.addColumn('number', 'Negativo');
                        		data.addColumn({id:'i0', type:'number', role:'interval'});
                                data.addColumn({id:'i1', type:'number', role:'interval'});
                                data.addColumn({type: 'string', role: 'tooltip', 'p': {'html': false}});
                        	}
                        	
                        	var maxvert = max;
                        	var minvert = min;
                        	if(min>fido && fido > 0)
                        		minvert = fido;
                        	if(max<fido)
                        		maxvert = fido;
                        
                        	//creo l array delle righe per disegnare il grafico
                        	for(i=0;i<saldiTotali.length;i++){
                        		var temp = [];
                        		temp.push(new Date(saldiTotali[i].data));
                        		temp.push(saldiTotali[i].saldo);
                        		//temp.push(saldiTotali[i].saldo);
                        		//temp.push(Math.min.apply(Math, saldiTotaliArray));
                        		//temp.push('<span>' + saldiTotali[i].data + '<br /> Saldo: ' + saldiTotali[i].saldo + '<span>');
                        		if(fido > 0){
                        			temp.push(fido);
                        			temp.push(fido);
                        			temp.push(0);
                        			temp.push('Affidamento: ' + fido);
                        		}
                        		if(min<0){
                        			temp.push(0);
                        			temp.push(0);
                        			temp.push(minvert-((maxvert-minvert)*0.1));
                        			if(saldiTotali[i].saldo<0)
                        				temp.push('Attenzione in data ' + saldiTotali[i].data + ' saldo negativo: ' + saldiTotali[i].saldo);
                        			else
                        				temp.push('Saldo in data ' + saldiTotali[i].data + ' uguale a: ' + saldiTotali[i].saldo);
                        		}
                        		rows.push(temp);
                        	}
                        	
                        	
                           	data.addRows(rows);
                          		
                          		var serie = {};
                          		serie[0] = {color: '#003b79', visibleInLegend: true, pointSize: 4};
                          		if(fido>0){
                          			serie[1] = {color: '#ffe538', visibleInLegend: true, pointSize: 0};
                          			if(min<0)
                             			serie[2] = {color: '#FF3657', visibleInLegend: true, pointSize: 0, enableInteractivity: false, visibleInLegend: false};
                          		}else if(min<0){
                          			serie[1] = {color: '#FF3657', visibleInLegend: true, pointSize: 0, enableInteractivity: false, visibleInLegend: false};
                          		}
                          		var options = {
                                   curveType: 'function',
                                   lineWidth: 2,
                                   intervals: { 'style':'area' },
                                   series: serie,
                                   legend: 'right',
                                   tooltip: {isHtml: true},
                                   animation:{
                        	        duration: 1000,
                        	        startup: true,
                        	        easing: 'out',
                        	    },
                                   vAxis: {
                                   	viewWindow: {
                        	          max: maxvert+((maxvert-minvert)*0.1),
                        	          min: minvert-((maxvert-minvert)*0.1),
                        	        },
                        	        format: '##,##0.00'
                        	      },
                        	     hAxis: {
                        	     	viewWindow: {
                        	          max: new Date(saldiTotali[saldiTotali.length-1].data),
                        	          min: new Date(saldiTotali[0].data),
                        	        },
                        	        format:'dd/MM'}
                               };
                               
                               
                           	var formatter = new google.visualization.NumberFormat(
                                {negativeColor: 'red', negativeParens: true, pattern: '##,##0.00'});
                               formatter.format(data, 1);     
                               
                          		var chart = new google.visualization.LineChart(document.getElementById('movimentiGrafico'));
                          		google.visualization.events.addListener(chart, 'ready', function(){
                          			
                          			getNodeMovimentiHomepage("#loadingChart").hide();
                          		});
                          		chart.draw(data, options);
                           }
                           //fine disegno grafico
                           
                        function hideInfoPanel(toHide) {
                        	toHide.slideUp(200);
                        	toHide.removeClass('visible');
                        }
                        
                           $(document).ready(function(){
                           	getNodeMovimentiHomepage("#loadingChart").hide();
                          		//getNodeMovimentiHomepage('#container').height(250);
                        	CCNumber = '2';
                        	if(!firstMov)
                        		prepareSliderMov();
                        
                          		
                        
                          		var schermata = 'tabella';
                          		getNodeMovimentiHomepage('#schermata').val(schermata);
                           	if (schermata == 'chart') {
                          			caricaGrafico();
                          		} else {
                        		showTable();			   		
                          		}
                          	});
                     </script>
                  </div>
               </div>
            </div>
         </div>