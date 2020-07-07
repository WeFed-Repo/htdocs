	<div class="riquadro clearfix" id="riepilogoCartaBox">
		







<script type="text/javascript"><!--
	var eventi = [];
	var tipi = {};

	
	
	function getEventsByMonth(monthSel, yearSel){
		
		$('#riepilogoEventi').empty();
		
		var eventoPassato = "";
		var currDate = new Date();
		var currMonth = currDate.getMonth() + 1;
		var currYear = currDate.getFullYear();
		var currDay = currDate.getDate();

		$.each(eventi, function(i, evento) {
			var dayEvent = ""+evento.data.substring(0,2);
			var monthEvent = ""+evento.data.substring(3,5);
			var yearEvent = ""+evento.data.substring(6,10);
			
			if (monthEvent == monthSel && yearEvent == yearSel) { // eventi del mese
			
				eventoPassato = "";
				if (currYear > yearSel) {
					eventoPassato = "passato";
				} else if (currYear == yearSel) {
					if (currMonth > monthSel) {
						eventoPassato = "passato";
					} else if (currMonth == monthSel) {
						if (currDay > dayEvent) {
							eventoPassato = "passato";
						}
					}
				}
				
				if (eventoPassato=="passato") {
					$('#riepilogoEventi').append('<div class="col-xs-12 clear-padding-right margin-bottom5 clearfix '+ eventoPassato +'">'+
						'<b>' + evento.data + '</b><div class="leggendaEventi clearfix"><div class="'
						 + evento.tipo + ' colorBox floatl">&nbsp;</div><div class="col-xs-10">' + evento.descrizione + '</div></div></div>');
				
				} else {
					$('#riepilogoEventi').append('<div class="col-xs-12 clear-padding-right margin-bottom5 clearfix '+ eventoPassato +'">'+
						'<b><a href="#evento" onclick="gotoEventPage(' + i + ')" >' + evento.data + '</a></b><div class="leggendaEventi clearfix"><div class="'
						 + evento.tipo + ' colorBox floatl">&nbsp;</div><div class="col-xs-10"><a href="#evento" onclick="gotoEventPage(' + i + ')" >' 
						 + evento.descrizione + '</a></div></div></div>');

				}
			}
		});
	}
	
	function gotoEventPage(index){
		if (eventi[index] != 'undefined') {
			if (eventi[index].tipo == 'appuntamento') {
				goToPage('/serviziPerTe/dettaglioAppuntamento.do', 'idAppuntamento', eventi[index].id);
			} else if (eventi[index].tipo == 'appuntamento_ripianificato') {
				goToPage('/serviziPerTe/ripianificaAppuntamento.do', 'idAppuntamento', eventi[index].id);
			} else if (eventi[index].tipo == 'pagamento') {
				goToPage('/serviziPerTe/dettaglioEventoScadenzaOperazione.do', 'codice', eventi[index].id);
			} else if (eventi[index].tipo == 'scadenza_mifid') {
				goToPage('/serviziPerTe/dettaglioEventoScadenzaMifid.do', 'id', eventi[index].id);
			} else if (eventi[index].tipo == 'scadenza_bancomat') {
				goToPage('/serviziPerTe/dettaglioEventoScadenzaBancomat.do', 'id', eventi[index].id);
			} else if (eventi[index].tipo == 'scadenza_cartaconto') {
				goToPage('/serviziPerTe/dettaglioEventoScadenzaCartaconto.do', 'id', eventi[index].id);
			} else if (eventi[index].tipo == 'scadenza_cartacredito') {
				goToPage('/serviziPerTe/dettaglioEventoCarteCredito.do', 'id', eventi[index].id);
			} else if (eventi[index].tipo == 'scadenza_vincoli_cdep') {
				goToPage('/serviziPerTe/dettaglioScadenzaVincoloDeposito.do', 'id', eventi[index].id);
			} else if (eventi[index].tipo == 'scadenza_rata_finanziamento') {
				goToPage('/serviziPerTe/dettaglioEventoScadenzaRata.do', 'id', eventi[index].id);
			} else if (eventi[index].tipo == 'compleanno') {
				goToPage('/serviziPerTe/dettaglioEventoCompleanno.do', 'id', eventi[index].id);
			} else if (eventi[index].tipo == 'altro_compleanno') {
				goToPage('/serviziPerTe/dettaglioEventoAltroCompleanno.do', 'id', eventi[index].id);
			}
		}
	}

	$(document).ready(function() {
		var currTime = new Date();
		var startDateFrom = new Date(currTime.getFullYear(),currTime.getMonth() - 4,1);
		
		

			if($('#ilMioCalendario').size() === 1) {
				$.get(getPathContext()+'/serviziPerTe/eventiCalendarioJson.do', function(data) {
					eventi = data;
					
					$('#ilMioCalendario').datepicker('refresh');
					getEventsByMonth(""+ $.datepicker.formatDate('mm', new Date()),""+ $.datepicker.formatDate('yy', new Date()));
					
					$('#ilMioCalendario').datepicker({
						minDate: startDateFrom,
						maxDate: '+1y',
						changeMonth: false,
						changeYear: false,
						beforeShowDay: function(date) {
							
							var style = "";
							var desc = "";
							var cm = currTime.getMonth();
							var cd = currTime.getDate();
							var cy =currTime.getFullYear();
							var m = date.getMonth();
							var d = date.getDate();
							var y = date.getFullYear();
							
							if (cy > y) {
								style = " ui-datepicker-unselectable ui-state-disabled passato ";
							} else if (cy == y) {
								if (cm > m) {
									style = " ui-datepicker-unselectable ui-state-disabled passato ";
								} else if (cm == m) {
									if (cd > d) {
										style = " ui-datepicker-unselectable ui-state-disabled passato ";
									}
								}
							}
							
							/*  */
							var eventiTrovati = [];
							$.each(eventi, function(i, evento) {
								if ($.datepicker.formatDate('dd/mm/yy', date) === evento.data) {
									
									eventiTrovati.push(evento);
								}	
							});
							
							if (eventiTrovati.length === 1) {
								if (eventiTrovati[0].tipo == 'festivita') style += "noeventi "; 
								
								style += eventiTrovati[0].tipo;
								desc = $.trim(eventiTrovati[0].descrizione);
							} else if (eventiTrovati.length > 1) {
								style += 'multi';
								desc = eventiTrovati.length + '&nbsp;eventi in calendario';
							} else if (eventiTrovati.length === 0) {
								style += 'noeventi';
								desc = "";
							}
							return [true, style, desc];
						/*} else {
							return noWeekend;
						}*/
						},
						onSelect: function(dateText, inst) {
							
							var dataSelezionata = new Date(inst.selectedYear, inst.selectedMonth, inst.selectedDay);
							
							var eventiSelezionati = [];
							$.each(eventi, function(i, evento) {
								if ($.datepicker.formatDate('dd/mm/yy', dataSelezionata) === evento.data) {
									eventiSelezionati.push(evento);
								}	
							});
							if (eventiSelezionati.length === 1) {
								//vai al dettaglio
								if (eventiSelezionati[0].tipo == 'appuntamento') {
									goToPage('/serviziPerTe/dettaglioAppuntamento.do', 'idAppuntamento', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'appuntamento_ripianificato') {
									goToPage('/serviziPerTe/ripianificaAppuntamento.do', 'idAppuntamento', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'pagamento') {
									goToPage('/serviziPerTe/dettaglioEventoScadenzaOperazione.do', 'codice', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'scadenza_mifid') {
									goToPage('/serviziPerTe/dettaglioEventoScadenzaMifid.do', 'id', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'scadenza_bancomat') {
									goToPage('/serviziPerTe/dettaglioEventoScadenzaBancomat.do', 'id', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'scadenza_cartaconto') {
									goToPage('/serviziPerTe/dettaglioEventoScadenzaCartaconto.do', 'id', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'scadenza_cartacredito') {
									goToPage('/serviziPerTe/dettaglioEventoCarteCredito.do', 'id', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'scadenza_vincoli_cdep') {
									goToPage('/serviziPerTe/dettaglioScadenzaVincoloDeposito.do', 'id', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'scadenza_rata_finanziamento') {
									goToPage('/serviziPerTe/dettaglioEventoScadenzaRata.do', 'id', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'compleanno') {
									goToPage('/serviziPerTe/dettaglioEventoCompleanno.do', 'id', eventiSelezionati[0].id);
								} else if (eventiSelezionati[0].tipo == 'altro_compleanno') {
									goToPage('/serviziPerTe/dettaglioEventoAltroCompleanno.do', 'id', eventiSelezionati[0].id);
								}
							} else if (eventiSelezionati.length > 1) {
								goToPage('/serviziPerTe/ilMioCalendario.do', 'dataInizio', eventiSelezionati[0].data, 'dataFine', eventiSelezionati[0].data, 'eseguiRicerca', 'true', 'tipoRicerca', 'RICERCA_PER_DATA_ESECUZIONE'); //vai a "il mio calendario"
							} else if (eventiSelezionati.length == 0) {
	  								setTimeout(function () {$("#ilMioCalendario a.ui-state-active").removeClass('ui-state-active');}, 10);
 							}
 						},
						onChangeMonthYear: function(year, month, inst) {	
							getEventsByMonth(month, year);
						}
					});
					$('#loadingCalendar').hide();
				});
			}
			
	});
-->
</script>

		<div class="bs-example form-horizontal margin-top5 margin-bottom10">
			<div class="form-group clearfix">
				
				
				


<h1>
	
		<div class="flag hidden-xxs calendario">&nbsp;</div>
	
	
		Calendario
	
</h1>
				<div class="col-xs-12 margin-top10">
					<div id="loadingCalendar" class="col-xs-12 oCenter" style="display: none;">
						<img src="/HT/IMAGES/caricamento.gif">
					</div>
					<div id="ilMioCalendario" class="col-xs-7 hasDatepicker">
					<div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;"><div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="<Prec"><span class="ui-icon ui-icon-circle-triangle-w">&lt;Prec</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Succ>"><span class="ui-icon ui-icon-circle-triangle-e">Succ&gt;</span></a><div class="ui-datepicker-title"><span class="ui-datepicker-month">Maggio</span>&nbsp;<span class="ui-datepicker-year">2017</span></div></div><table class="ui-datepicker-calendar"><thead><tr><th scope="col"><span title="Lunedì">Lu</span></th><th scope="col"><span title="Martedì">Ma</span></th><th scope="col"><span title="Mercoledì">Me</span></th><th scope="col"><span title="Giovedì">Gi</span></th><th scope="col"><span title="Venerdì">Ve</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Sabato">Sa</span></th><th scope="col" class="ui-datepicker-week-end"><span title="Domenica">Do</span></th></tr></thead><tbody><tr><td class="  ui-datepicker-unselectable ui-state-disabled passato noeventi festivita" title="Festa del lavoro" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">1</a></td><td class="  ui-datepicker-unselectable ui-state-disabled passato noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">2</a></td><td class="  ui-datepicker-unselectable ui-state-disabled passato noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">3</a></td><td class="  ui-datepicker-unselectable ui-state-disabled passato noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">4</a></td><td class="  ui-datepicker-unselectable ui-state-disabled passato noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">5</a></td><td class=" ui-datepicker-week-end  ui-datepicker-unselectable ui-state-disabled passato noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">6</a></td><td class=" ui-datepicker-week-end  ui-datepicker-unselectable ui-state-disabled passato noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">7</a></td></tr><tr><td class="  ui-datepicker-unselectable ui-state-disabled passato noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">8</a></td><td class="  ui-datepicker-unselectable ui-state-disabled passato noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">9</a></td><td class=" ui-datepicker-days-cell-over noeventi ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default ui-state-highlight ui-state-active" href="#">10</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">11</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">12</a></td><td class=" ui-datepicker-week-end noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">13</a></td><td class=" ui-datepicker-week-end noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">14</a></td></tr><tr><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">15</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">16</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">17</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">18</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">19</a></td><td class=" ui-datepicker-week-end noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">20</a></td><td class=" ui-datepicker-week-end noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">21</a></td></tr><tr><td class=" compleanno" title="Tanti auguri!" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">22</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">23</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">24</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">25</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">26</a></td><td class=" ui-datepicker-week-end noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">27</a></td><td class=" ui-datepicker-week-end noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">28</a></td></tr><tr><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">29</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">30</a></td><td class=" noeventi" data-handler="selectDay" data-event="click" data-month="4" data-year="2017"><a class="ui-state-default" href="#">31</a></td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td><td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">&nbsp;</td></tr></tbody></table></div></div>
					<div id="riepilogoEventi" class="col-xs-5 padding-left10"><div class="col-xs-12 clear-padding-right margin-bottom5 clearfix passato"><b>01/05/2017</b><div class="leggendaEventi clearfix"><div class="festivita colorBox floatl">&nbsp;</div><div class="col-xs-10">Festa del lavoro</div></div></div><div class="col-xs-12 clear-padding-right margin-bottom5 clearfix "><b><a href="#evento" onclick="gotoEventPage(6)">22/05/2017</a></b><div class="leggendaEventi clearfix"><div class="compleanno colorBox floatl">&nbsp;</div><div class="col-xs-10"><a href="#evento" onclick="gotoEventPage(6)">Tanti auguri!</a></div></div></div></div>
				</div>
			</div>
		</div>
		<div class="pull-right margin-bottom10 margin-right10">
			<input type="button" name="" value="Richiedi appuntamento" onclick="goToPage('/serviziPerTe/richiestaAppuntamentoCompilazione.do')" style="margin-right:0px" class="btn hidden-xs">
		</div>
	</div>