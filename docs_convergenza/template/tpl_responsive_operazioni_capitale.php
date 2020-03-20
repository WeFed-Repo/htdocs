		<script type="text/javascript">	
//inizializzazione datepicker

$(function () {
	
	$("#datepickerToolDa").mask("99/99/9999");
	$("#datepickerToolDa").datepicker({
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
   	onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
    appendDatePickerIcon('datepickerToolDa');
   
   $("#datepickerToolA").mask("99/99/9999");
	$("#datepickerToolA").datepicker({
	showOtherMonths: true,
	showOn: "button",
	prevText: "<i class=\"icon icon-arrow_left\" title=\"icon-arrow_left\"></i>",
	nextText: "<i class=\"icon icon-arrow_right\" title=\"icon-arrow_right\"></i>",
	buttonImage: "/img/ret/pixel_trasp.gif",
	buttonImageOnly:true,
	beforeShow: renderPickDateMobile, //funzione per far si che si apra come overlayer su mobile
   	onClose: function(){
    	$('#datePickerWrapper').modal('hide');
    }
    })
   appendDatePickerIcon('datepickerToolA');

   });

</script>

<h2>Operazioni sul capitale</h2>
<section>
	<p>Puoi <strong>verificare</strong> gli <strong>ordini inseriti</strong>, visualizzarne i <strong>dettagli</strong>, conoscerne lo <strong>stato</strong> e, ove possibile, <strong>revocarli</strong> se non ancora eseguiti.</p>
</section>
<section>
	<div class="tithelp">
		<h4>Ricerca ordini</h4>
		<div class="flRight"><a href="#1" class="btn-icon" data-toggle="modal" data-target="#layerInfo"><i class="icon icon-info_fill icon-2x"></i></a><br class="clear"></div>
		<br class="clear">
	</div>
	<form class="formGenerico borderFormRounded" role="form" id="form01">
   	<div class="form-group">
	   	<div class="row">
	        <div class="col-xs-12 col-sm-6">
	            <label class="control-label">Ricerca per deposito titoli</label>
	            <select class="form-control">
	                <option value="1099/1007661/0">1099/1007661/0</option>
	                <option value="1099/1007661/1">1099/1007661/1</option>
	                <option value="1099/1007661/2">1099/1007661/2</option>
	            </select>
	        </div>
	    </div>
	</div>
	<div class="form-group">
    	<div class="row">
        	<div class="col-sm-8">
				<label class="control-label txthelp closeable"  data-title="Indicare l'intervallo temporale all'interno del quale effettuare la ricerca: è possibile visualizzare solo gli ordini a scadenza, quindi validi più giorni.<br>
Per visualizzare gli ordini inseriti nella giornata è sufficiente la sola selezione del deposito.
" data-toggle="tooltip">Periodo di ricerca</label>
					<div>
						<div class="radio inline">
	                            <div class="row">
	                            <label class="textWrapper flLeft marginTopMicro">
	                                <input type="radio" name="" id="">
	                                <span>&nbsp;</span>
	                            </label><br class="visible-xs">
									<div class="col-sm-5">
										<div class="form-inline">
										 <div class="form-group">
											  <div class="input-group">
											     <div class="input-group-addon first">Dal</div>
											     <input type="text" id="datepickerToolDa" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
											     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
											  </div>
											</div>
										</div> 
									</div>  
									<div class="col-sm-5">
									<div class="form-inline">
									  <div class="form-group">
										  <div class="input-group">
										     <div class="input-group-addon first">Al</div>
										     <input type="text" id="datepickerToolA" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
										     <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
										  </div>
										</div>
									</div>
									</div>
								</div>
	                    </div>
                    </div>
                    <div>
                    <div class="radio inline">
                    	<div class="row">
                            <label class="textWrapper flLeft marginTopMicro">
                                <input type="radio" name="" id="">
                                <span>&nbsp;</span>
                            </label><br class="visible-xs">
								<div class="col-sm-5">
									<select name="" class="form-control" id="tooltipOnSelect">
                    					<option>1 giorni</option>
                   						<option>2 giorni</option>
                   						<option>3 giorni</option>
                   						<option>4 giorni</option>
                					</select>
								</div>  
							
							</div>
                    </div>
                	</div>

					
						
		    </div>

		</div>
   	</div>
   	<div class="form-group btnWrapper">
     <div class="btn-align-center">
        <a type="button" class="btn btn-primary" id="">esegui ricerca</a>
    </div>
      <br class="clear">
    </div>
	</form>
</section>



	
<!--OVERLAYER SEPA -->
<div class="modal fade" id="layerInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
                <h2 class="modal-title" id="myModalLabel">Situazione ordini movimenti</h2> </div>
            <div class="modal-body">
                <div class="container-fluid">
                	<p>Questa funzione consente di visualizzare gli ordini inseriti e di conoscerne lo stato.</p>
					<p>Le informazioni si possono ottenere: </p>
					<ul>
						<li>per <strong>deposito titoli</strong>:
							<ol>
								<li>selezionare il <strong>deposito </strong>>che si intende visualizzare;</li>
								<li>indicare la <strong>data di inizio e fine</strong>ricerca, tenendo presente che se si
								desidera visualizzare gli ordini inseriti nella giornata &egrave; sufficiente
								la sola selezione del deposito; </li>
								<li>specificare il <strong>mercato </strong>di cui si intende ottenere la situazioni ordini. </li>
							</ol>


						</li>
						<li>per <strong>numero ordine </strong>&egrave; sufficiente inserire il numero indicato nella stampa dell'ordine fatto in agenzia o nella e-mail
                       di inserimento ordine.</li>
					</ul>
 					<p>Dal 2 aprile 2001 le azioni quotate nel comparto Mercato Telematico Azionario (MTA) sono ripartite, come stabilito dal provvedimento di Borsa n. 1574
						del 15/03/01, in Blue Chip, Segmento Ordinario - Classe 1, Segmento Ordinario- Classe 2 e Star. <br>
						Nel file allegato &egrave; disponibile la ripartizione dei titoli. </p>
					<p>Dal 19 novembre 2001 il Mercato Obbligazionario Telematico &egrave; suddiviso in quattro segmenti: <br>
						IT M1 = MOT - segmento BTP - CTZ - BOT - CCT; <br>
						IT M3 = MOT - segmento titoli in valuta; <br>
						IT M4 = MOT - segmento altri titoli; <br>
					</p>

					<p>E' possibile visualizzare solamente gli ordini a scadenza (validi pi&ugrave; giorni).
					In questo caso il periodo di validit&agrave; dell'ordine &egrave; visualizzabile nel
					dettaglio dello stesso. </p>

					<p>E' possibile visualizzare solamente gli ordini revocabili.</p>

					<p>In risposta alle selezioni effettuate si otterr&agrave; la lista degli ordini
					inseriti relativi al periodo di tempo selezionato, con l'indicazione dei
					seguenti dati: </p>
					<ul>
						<li><strong>Deposito</strong> selezionato </li>
						<li><strong>Periodo </strong>di selezione </li>
						<li><strong>Tipo di ordinamento</strong> - E' possibile visualizzare gli ordini in ordine di <strong>DATA, OPERAZIONE</strong> (Acquisto
						/ Vendita / Revoca) e di <strong>STATO</strong>
						(eseguiti / ineseguiti &nbsp;ecc..) </li>
					</ul>
					<p>Per <strong>DATA</strong>
					si intende la data di validit&agrave; dell'ordine (Es: Ordine inserito il 10/11
					con validit&agrave; dal 11/11 riporter&agrave; la data dell' 11/11)</p>
					<p>I possibili <strong>STATI</strong> di un ordine sono:</p>

					<table  width="100%">
						<tr valign="top">
							<td width="19%"><strong>inviato</strong></td>
							<td width="80%">l'ordine &egrave; stato inviato al mercato
							ed &egrave; in attesa di trovare una controparte per essere eseguito.
							</td></tr>
						<tr valign="top">
							<td><strong>eseguito totale</strong></td>
							<td>l'ordine ha trovato una controparte e il mercato ha comunicato l'avvenuta esecuzione </td>
						</tr>
						<tr valign="top">
							<td><strong>eseguito in fasi diverse</strong></td>
							<td>l'ordine ha trovato più controparti e il mercato ha restituito pi&ugrave; eseguiti </td></tr>
						<tr valign="top">
							<td><strong>eseguito con quantit&agrave; parziali</strong></td>
							<td>l'ordine &egrave; stato eseguito solo in parte,
								ma rimane sul mercato in attesa di altre controparti</td>
						</tr>
						<tr valign="top">
						<td><strong>ineseguito</strong> </td>
						<td>l'ordine non ha trovato controparti o &egrave; stato revocato </td></tr>
						<tr valign="top">
							<td><strong>raccolto</strong> </td>
							<td>l'ordine &egrave; stato inserito fuori dagli orari di mercato, &egrave; stato quindi raccolto dalla Banca Popolare di Milano che
							lo invier&agarve; al mercato alla sua riapertura.</td></tr>
						
					</table>

					<p>In particolare, per quanto riguarda gli ordini di sottoscrizione di <strong>Offerte
					Pubbliche</strong> i possibili stati sono i seguenti: </p>
						<table width="100%">
							<tr valign="top">
								<td width="12%"><strong>inserito</strong></td>
								<td width="87%">l'ordine &egrave; stato registrato.</td>
							</tr>
							<tr valign="top">
								<td><strong>inviato</strong> </td>
								<td>l'ordine &egrave; stato inviato a SIA, la societ&agrave;
								preposta alla gestione centralizzata degli ordini di sottoscrizione di
								OPV, che effettua giornalmente un controllo di merito delle adesioni e
								ne richiede la validazione al Global Coordinator. L'ordine validato rimane
								nello stato di "inviato"; l'ordine non validato pu&ograve; assumere
								gli stati "rifiutato da SIA" o "annullato dal Global 
								Coordinator".

								</td></tr>
							<tr valign="top">
								<td><strong>rifiutato da SIA</strong></td>
								<td>l'ordine non ha superato i controlli formali di SIA, ma verr&agrave; reinserito automaticamente una volta individuata ed eliminata
								la causa dello scarto. 
								</td>
							</tr>
							<tr valign="top">
								<td><strong>annullato dal Global Coordinator</strong></td>
								<td>l'ordine &egarve; stato respinto dal Responsabile
								del collocamento, a cui &egrave; demandata la verifica dell'eventuale presenza
								di ordini doppi nel sistema, tramite il controllo del codice fiscale. L'ordine
								in questo stato &egrave; considerato nullo a tutti gli effetti e non pu&ograve; essere
								reinserito.
							</td></tr>
							<tr valign="top">
							<td><strong>eseguito</strong> </td>
							<td>l'ordine &egrave; stato sorteggiato e la quantit&agrave; richiesta assegnata. </td></tr>
							<tr valign="top">
								<td><strong>eseguito con quantit&agrave; parziali</strong></td>
								<td>l'ordine &egrave; stato eseguito solo in parte;
								la quantit&agrave; non assegnata diventa automaticamente "ineseguito".</td></tr>
							<tr valign="top">
								<td><strong>ineseguito</strong> </td>
								<td>l'ordine non &egrave; stato sorteggiato.</td></tr></tbody>
					</table>

					<p>Per avere visibilit&agrave; sul <strong>dettaglio dell'ordine</strong> occorre selezionare il link corrispondente al <strong>N°
					ordine; </strong>tale funzionalit&agrave; permette
					di ottenere maggiori informazioni relativamente agli ordini <strong>raccolti,
					inviati,</strong> <strong>eseguiti</strong>, <strong>eseguiti in fasi diverse</strong>, ed <strong>eseguiti
					con quantit&agrave; parziali:</strong></p> 
					<table width="100%">
						<tr valign="top">
							<td width="32%"><strong>limite prezzo</strong></td>
							<td width="67%">prezzo limite per il quale si vuole che venga soddisfatto l'ordine </td>
						</tr>
						<tr valign="top">
							<td><strong>data e ora inserimento</strong></td>
							<td>data e ora in cui &egrave; stata inoltrata la proposta</td>
						</tr>
						<tr valign="top">
							<td><strong>validit&agrave; da / a</strong></td>
							<td>indica la validit&agrave; di permanenza sul mercato che si &egrave; assegnata all'ordine </td></tr>
							<tr valign="top">
								<td><strong>data e ora eseguito</strong></td>
								<td>data e ora in cui l'ordine trova soddisfazione</td></tr>
							<tr valign="top">
								<td><strong>prezzo eseguito</strong></td>
								<td>prezzo per il quale &egrave; soddisfatta la propria richiesta sul mercato </td></tr>
							<tr valign="top">
								<td><strong>valuta di regolamento</strong></td>
								<td>giorno in cui il titolo verr&agrave; caricato/scaricato sul/dal deposito indicato </td></tr>
							<tr valign="top"><td><strong>commissioni</strong> </td>
								<td>spese sostenute per l'operazione effettuata</td></tr>
								<tr valign="top">
									<td><strong>mercato</strong> </td>
									<td>la piazza/mercato su cui &egrave; stato effettuato l'ordine </td></tr>
									<tr valign="top">
										<td><strong>conto corrente di regolamento</strong></td>
										<td>conto su cui il controvalore dell'operazione in oggetto andr&agrave; ad incidere</td></tr>
					</table>
				</div>
            </div>
        </div>
    </div>
</div>
	
			
	
