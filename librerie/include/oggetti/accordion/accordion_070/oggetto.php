
<section>
<p style="text-align:center"> Questo oggetto viene usato solo in Cartimpronta Revolving di BPM</p>
<div class="contentCrBpm">
    <div class="sxCrBpm">
    	<a href="#1" class=" btn-icon" id="contenitoreBoxCr">
        	<i class="icon icon-1x icon-row_expand" id="switchCr"></i>      
    	</a>
	</div>
	<div class="dxCrBpm">
		<p><strong>Come è stato calcolato il TAEG di prima linea ?</strong></p> 
	</div>
    <div id="controlCr" class="bodyCrBpm">
           <p>
           		Componenti considerate nel calcolo del TAEG di prima linea:
           	</p>
           	<ul>
           		<li>
           			Tasso debitore annuo calcolato in funzione dello scaglione dell'importo del debito residuo. Il fido considerato ai fini del calcolo del TAEG è il limite dello scaglione stesso
           		</li>
           		<li>
           			Canone annuo / quota associativa di emissione: 23 €
           		</li>
           		<li>
           			Spese di invio rendiconto mensile cartaceo: 0 €
           		</li>
           		<li>
           			Costo della scrittura della riga di addebito sul conto corrente: 25,80 €, calcolato ipotizzando 12 scritture x 2,15 €
           		</li>
           		<li>
           			Si ipotizza che il credito venga rimborsato in 12 rate mensili
           		</li>
           	</ul>	
    </div>
</div>







<script type="text/javascript">
    $(function() {
        $('#contenitoreBoxCr').click(function() {
        
            $('#controlCr').toggle();

                if($('#controlCr').is(":visible")){
                    $('#switchCr').removeClass('icon-row_expand');
                    $('#switchCr').addClass('icon-row_contract');

                }else{
                    $('#switchCr').removeClass('icon-row_contract');
                    $('#switchCr').addClass('icon-row_expand');
                }
        });
    });
</script>




</section>