<h2>Comunicazioni perdite superiori al 50%</h2>

<section>
	<ul>
		<li>
			In questa sezione sono disponibili le comunicazioni relative alle perdite superiori al 50% che sono state inviate via email.
		</li>
		<li>
			Le comunicazioni sono inviate quando le operazioni di trading in corso hanno generato una 
			passivit&agrave; potenziale che ha superato il 50% dell'impegno totale.
		</li>
	</ul>
</section>


<section>
	<h4>Ricerca</h4>
	<form class="formGenerico borderFormRounded output" role="form" id="form02">
		
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<div class="radio inline no-label">
						<label class="textWrapper">
				  			<input type="radio" name="visualizza" value="tuttiMovimenti">
				  			<span class="text">Periodo</span>
						</label>
					</div>
				</div>
				<script type="text/javascript">
				/* Esempio di inizializzazione dei datepicker */
				$(function(){

					/* datepicker 1 */
					$("#dp1").mask("99/99/9999");
					$("#dp1").datepicker({
					minDate: 1,
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
				   appendDatePickerIcon('dp1');


				    /* datepicker 2 */
					$("#dp2").mask("99/99/9999");
					$("#dp2").datepicker({
					minDate: 1,
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
				   appendDatePickerIcon('dp2');

				});
				</script>
				<div class="col-sm-3">
					<label class="control-label" for="#dp2">Dal</label>
		 			<div class="input-group">
					    <input type="text" id="dp1" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
					    <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
	     		    </div>
				</div>
				<div class="col-sm-3">
					<label class="control-label" for="#dp2">Al</label>
					<div class="input-group">
					    <input type="text" id="dp2" placeholder="gg/mm/aaaa"  class="form-control clear-x"> 
					    <div class="input-group-addon date"><i class="icon icon-calendar_filled"></i ></div>
	     		    </div>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row">
				<div class="col-sm-2 no-label">
					<div class="radio inline">
						<label class="textWrapper">
				  			<input type="radio" name="visualizza" value="tuttiMovimenti">
				  			<span class="text">Numero</span>
						</label>
					</div>
				</div>
				<div class="col-sm-2">
				<label class="control-label">Ultimi</label>
					<select class="form-control">
						<option>5</option>
						<option>10</option>
						<option>25</option>
						<option>50</option>
						<option>100</option>
					</select>
				</div>
			</div>
		</div>
	</form>

	<div class="form-group btnWrapper">
	  	<div class="btn-align-right">
	        <a type="button" class="btn btn-primary" id="" href="#">
	            Cerca
	        </a>	
	    </div>
	    <div class="clear"></div>
	</div>
</section>	


<section>
	<h4>Risultati ricerca: dal 00/00/0000 al 00/00/0000</h4>
	<table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
    <thead>
        <tr>
            <th data-field="data" data-sortable="true" data-sorter="fixDate" class="center">
            	Data
            </th>
            <th data-field="depositoTitolo" data-sortable="true" class="right">
            	Deposito titolo
            </th>
            <th data-field="icon" class="center">
            	-	
            </th>
        </tr>
    </thead>
	</table>
</section>	


<!-- JS PER GESTIONE TABELLA -->

<script>
    var $tableOrdered = $('#tableOrdered');
    $(function () {

	var valori = {  
	   "dati":[  
			    {  
				"data":"08\/01\/2016",
				"depositoTitolo":"01099/00000471550",
				"icon":"<a href='#!' class='btn-icon'><i class='icon icon-2x icon-pdf_circle_filled'></i></a>"
			    },
			    {  
			    "data":"10\/01\/2016",
			    "depositoTitolo":"01098/00000471551",
			    "icon":"<a href='#!' class='btn-icon'><i class='icon icon-2x icon-pdf_circle_filled'></i></a>"
			    },
			    {  
			    "data":"28\/01\/2016",
			    "depositoTitolo":"01097/00000471552",
			    "icon":"<a href='#!' class='btn-icon'><i class='icon icon-2x icon-pdf_circle_filled'></i></a>"
			    }
	   		]
	}


    $tableOrdered.bootstrapTable({
    	data: valori.dati,
        sortable: true,
        sortName: "data",
        sortOrder: "desc",

		rowStyle: function(row, index) {
			if(index % 2 == 0)
			{
				return {
							classes: 'dispari'
						}
			}
			else{
					return {
								classes: 'pari'
							}
				}
		}
	});
});
</script>


<!--END  JS GESTIONE TABELLA-->

<!-- -->

