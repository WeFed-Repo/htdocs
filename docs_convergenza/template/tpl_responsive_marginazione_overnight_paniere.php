
<h2>Marginazione overnight</h2>
<div class="navContFirstLev outerTab">
	<div class="innerTab">
		<ul class="tabmedium">
		<li class="off" id="box5tab1"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_responsive_marginazione_overnight.php&liv1=trading&liv2=compravendita&liv3=inserimento_ordini&liv4=marginazione_overnight" title="come funziona">come funziona</a></li>
			<li class="on" id="box5tab2"><a href="/template/strutt_<?php print $site; ?>.php?tpl=tpl_responsive_marginazione_overnight_paniere.php&liv1=trading&liv2=compravendita&liv3=inserimento_ordini&liv4=marginazione_overnight" title="paniere">paniere</a></li>
		</ul>
	</div>
	<div class="separator"></div>
	<div class="panel-nofill">
		<section>
		<form class="formGenerico borderFormRounded output" role="form" id="form02">
		
		
         <!--caso con selettore rapporto -->
		<div class="form-group">
			<div class="row">
				<div class="col-xs-12 col-sm-5">
					<label class="control-label-output">Deposito titoli</label>
					<div id="sceltaSottoRapporto" class="selectRapp">
					<input id="sceltaSottoRapportoVal" type="hidden" class="value" name="sottorapporto" value="xxxaaaaaa"/>
					<a href="javascript:;" class="inputOption inputSx form-control">
						<span class="inputDx">
							<span class="input">
								xxx/aaaaaa
							</span>
						</span>
					</a>
					<div class="selector" style="display: none;">
						<span class="group">
							<a value="xxxaaaaaa" href="javascript:;" class="selectorOptions first selected">
							<strong>xxx/aaaaaa</strong><br/>
							Nome Nome Cognome Cognome1</a>
						</span>
						<span class="group">
							<a value="xxxbbbbbb" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb - tutti i sottodepositi</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxxbbbbbb0" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/0</strong><br/>
							Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2</a>
							<a value="xxxbbbbbb1" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/1</strong><br/>
							Nome Nome Cognome Cognome1</a>
							<a value="xxxbbbbbb2" href="javascript:;" class="selectorOptions">
							<strong>xxx/bbbbbb/2</strong><br/>
							Nome Nome Cognome Cognome2</a>
						</span>
						<span class="group">
							<a value="xxxcccccc" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc0" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/0</strong><br/>
								Nome Nome Cognome Cognome1 - Nome Nome Cognome Cognome2 - 
								Nome Nome Cognome Cognome3 - Nome Nome Cognome Cognome4 - 
								Nome Nome Cognome Cognome5</a>
							<a value="xxxcccccc1" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/1</strong><br/>
								Nome Nome Cognome Cognome1</a>
							<a value="xxxcccccc2" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/2</strong><br/>
								Nome Nome Cognome Cognome2</a>
							<a value="xxxcccccc3" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/3</strong><br/>
								Nome Nome Cognome Cognome3</a>
							<a value="xxxcccccc4" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/4</strong><br/>
								Nome Nome Cognome Cognome4</a>
							<a value="xxxcccccc5" href="javascript:;" class="selectorOptions">
								<strong>xxx/cccccc/5</strong><br/>
								Nome Nome Cognome Cognome5</a>
						</span>
					</div>
				</div>

				</div>
				<div class="col-xs-8 col-sm-3">
					<label class="control-label-output">Totale liquidit&agrave;</label>
					<span class="output txthelp" data-toggle="tooltip">4.213,46 al gg/mm/aaaa</span>
					<div class="htmlTooltip">
						08/07/2016: <strong><span id="tot_investibile_1">4.213,46</span>&nbsp;€</strong>
						<br>11/07/2016: <strong><span id="tot_investibile_1a">4.213,46</span>&nbsp;€</strong>
						<br>12/07/2016: <strong><span id="tot_investibile_2">4.213,46</span>&nbsp;€</strong>
						<br>13/07/2016: <strong><span id="tot_investibile_3">4.213,46</span>&nbsp;€</strong>
						<br>14/07/2016: <strong><span id="tot_investibile_4">4.213,46</span>&nbsp;€</strong>
					</div>
				</div>
				<div class="col-xs-2 col-sm-2 no-label">
					<a href="#1" class="no-underline btn-icon"><i class="icon icon-2x icon-zoom_piu_filled"></i ></a>
				</div>
			</div>
		</div>

	</form>
</section>
<section>
	<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	        <a class="collapsed" data-toggle="collapse" href="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
	         Ricerca titoli<br>
			<i class="icon icon-arrow_down"></i><i class="icon icon-arrow_up"></i>
			<p class="sottotitolo">Ricerca i titoli su cui &egrave; possibile fare operazioni in marginazione</p>
	        </a>
	      </h4>
	       
	    </div>
	    <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">
	       		<form class="formGenerico borderFormRounded" role="form" id="form01">
			    <div class="form-group">
			        <div class="row">
			           <div class="col-sm-4">
			                <label class="control-label">Strumento</label>
			                <select name="" class="form-control" id="strumentoSelect">
			                    <option>Azioni</option>
			                    <option>Obbligazioni</option>
			                    <option>ETF</option>
                			</select>
			            </div>
			             <script>
			            	$('#strumentoSelect').on('change',function(){
			            		$(this).val()==='Obbligazioni'  ? $('#emittente').show() : $('#emittente').hide();
							})
			            </script>
			            <div class="col-sm-4" style="display:none" id="emittente">
			                <label class="control-label">Emittente</label>
			                <select name="" class="form-control" id="tooltipOnSelect">
			                    <option>Lorem</option>
			                    <option>Lorem</option>
			                    <option>Lorem</option>
                			</select>
			            </div>
		           </div>
			     </div>
			     <div class="form-group">
			        <div class="row">
			            <div class="col-sm-4">
			                <label class="control-label">Titolo</label>
			                <input type="text" class="form-control" placeholder="ISIN, simbolo, descrizione">
			            </div>
			            <div class="col-sm-4">
			                <label class="control-label">Mercato</label>
			                <select name="" class="form-control" id="tooltipOnSelect">
			                    <option>Lorem</option>
			                    <option>Lorem</option>
			                    <option>Lorem</option>
                			</select>
			            </div>
			             <div class="col-sm-4">
			                <label class="control-label">Margine</label>
			                <select name="" class="form-control" id="tooltipOnSelect">
			                    <option>Lorem</option>
			                    <option>Lorem</option>
			                    <option>Lorem</option>
                			</select>
			            </div>
			           </div>
		          </div>
		        </form>
		        <div class="form-group btnWrapper">
                <div class="btn-align-center">
                    <a type="button" class="btn btn-primary" id="">cerca</a>
                    <br class="clear">
                </div>
            	</div>
			     </div>
	     </div>
	  </div>
	 

</div>
<table id="tableMarginazioneOver" cellspacing="0" cellpadding="0" border="0" class="sortableTable">
     <thead>
        <tr>
        	<th data-field="ico" data-sortable="false" class="center" rowspan="2" data-formatter="setIconaOperativa"></th>
            <th data-field="desc" data-sortable="true" class="left" rowspan="2" data-formatter="setLinkTitolo">Titolo</th>
            <th data-field="tipoOperativita" data-sortable="true" class="center" rowspan="2">Operativit&agrave;</th>
            <th data-field="leva" data-sortable="true" class="center" rowspan="2"  data-formatter="setLeva">Leva</th>
            <th data-field="coefficiente" data-sortable="true" class="center" rowspan="2" data-formatter="setCoefficiente">Margine stop loss</th>
            <th data-field="interessi" data-sortable="true" class="center" rowspan="2">Interesse % giorn. long</th>
            <th data-field="fee" data-sortable="true" class="center" rowspan="2">Fee % giorn. short</th>
            <th data-field="dispo" data-sortable="false" class="center" colspan="2">Disponibilit&agrave;</th>
             
         </tr>
         <tr>
         	 <th data-field="percLongDisponibile" data-sortable="true" class="center" data-formatter="setpercLongDisponibile">Long</th>
         	 <th data-field="percShortDisponibile" data-sortable="true" class="center"  data-formatter="setpercShortDisponibile">Short</th>
         </tr>
     </thead>
     <tbody>
     	<tr>
     		<td></td>
     		<td></td>
     		<td></td>
     		<td></td>
     		<td></td>
     		<td></td>
     		<td></td>
     		<td></td>
     		<td></td>
     	</tr>
     </tbody>
</table>
<!--overlayer icona operativa -->
<div class="sezioneLinks2 modal fade" id="iconaOperativaMenu1_html" tabindex="-1" role="dialog" aria-labelledby="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<a class="close close-top btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i ></a>
					<h2 class="modal-title" id="myModalLabel">BTP 01.02.06/01.08.2021 3,75%</h2>
				</div>
				
				<div class="body">
					<ul class="azioni">
							<li class="linkOn"><a title="C/V" href="link1.htm"><span>C/V</span></a></li>
							<li class="linkOff"><span title="C/V">C/V</span></li>
							<li class="linkOn"><a title="Book" href="javascript:openPopUp('medium', '')"><span>Book</span></a></li>
							<li class="linkOff"><span title="Book">Book</span></li>
							<li class="linkOn"><a title="Ordine Condizionato" href="link3.htm"><span>Ordine Cond.</span></a></li>
							<li class="linkOff"><span title="Ordine Condizionato">Ordine Cond.</span></li>
							<li class="linkOn"><a title="Analisi Tecnica" href="link4.htm"><span>Analisi Tecnica</span></a></li>
							<li class="linkOff"><span title="Analisi Tecnica">Analisi Tecnica</span></li>
							<li class="linkOn"><a title="Alert" href="link5.htm"><span>Alert</span></a></li>
							<li class="linkOff"><span title="Alert">Alert</span></li>
							<li class="linkOn"><a title="Carry-on" href="#"><span>Carry-on</span></a></li>
							<li class="linkOff"><span title="Carry-on">Carry-on</span></li>
							<li class="linkOn"><a title="Vendi" href="link6.htm"><span>Vendi</span></a></li>
							<li class="linkOff"><span title="Vendi">Vendi</span></li>
							<li class="linkOn"><a title="Vendi" href=""><span>Visualizza/Vendi</span></a></li>
							<li class="linkOff"><span title="Vendi">Visualizza/Vendi</span></li>
							<li class="linkOn last"><a title="Dettaglio fiscale" href="#" class="close-left" data-dismiss="modal" data-toggle="modal" data-target="#fiscalita"><span>Fiscalità</span></a></li>
							<li class="linkOff last"><span title="Dettaglio fiscale">Prezzo fiscale</span></li>
						</ul>
						<div class="clear"></div>
				</div>
			
		</div>
	</div>
</div>

<script>
    var $tableMarg = $('#tableMarginazioneOver');
    
    $(function () {
	        
	$.ajax({
       url: '/include/ajax/marginazioneOver.php',
       dataType: 'json',
       success: function(data) {
           $tableMarg.bootstrapTable({
              data: data.data,
              sortable: true,
              sortName: "data",
              sortOrder: "desc",
              pagination : "true",
              pageSize: 15,
              pageList: [15, 30, 60, 'tutti'],
              rowStyle: function(row, index) {
				if(index % 2 == 0)
				{
					return {
						classes: 'dispari'
					}
				}
				else {
					return {
						classes: 'pari'
					}
				}
			   }
            
           });
       },
       error: function(e) {
          console.log(e.responseText);
		}
      });
	  


     });

    function setLinkTitolo(value, row, index, options){
		return '<a href="#">' + value + '</a>';
	}

  	function setLeva(value, row, index, options){
  		return '<span class="posi">' + value + '%' + '</span>';
  	}
	function setCoefficiente(value, row, index, options){
  		return value + '%';
  	}
  	function setpercLongDisponibile(value, row, index, options){
  		if(typeof value != 'undefined')
  		{
  			return '<img src="/WB/fe/img/img_avail' + value +'.gif" title="' + row.qtaLongAvailable + ' titoli">';
  		}
  		else{
  			return '-';
  		}
  		
  	}
  	function setpercShortDisponibile(value, row, index, options){
  		if(typeof value != 'undefined')
  		{
  			return '<img src="/WB/fe/img/img_avail' + value +'.gif" title="' + row.qtaShortAvailable + ' titoli">';
  		}
  		else{
  			return '-';
  		}
  	}
  	function setIconaOperativa(value, row, index, options){
  		return "<div class='linkTooltip' data-toggle='modal'><a title='scegli loperazione da effettuare' id='link1' class='linkVai no-underline btn-icon' onclick='multiLinks(\"iconaOperativaMenu1.html\", \"right\", this, [\" \", \" \"], \"par1=eee&amp;par2=333\")'><i class='icon icon-2x icon-ico_azioni02A'></i></a></div>";
  	}
</script>

</section>
	</div>
</div>