
<a class="no-underline btn-icon">
	<i class="icon icon-info_fill icon-2x" data-toggle="tooltip" title="tooltip semplice"></i>
</a>
<br><br>
<a class="no-underline btn-icon">
	<i class="icon icon-info_fill icon-2x"  data-toggle="tooltip"  data-html="true" title="tooltip che apre un link <a target='blank' href='#'>pdf</a>"></i>
</a>
<br><br>
<a class="no-underline btn-icon">
	<i class="icon icon-info_fill icon-2x tooltip-placement-right"  data-toggle="tooltip" data-html="true" data-htmlid="#tooltipText"></i>
</a>
<br><br>
<div class="formGenerico">
<div class="radio-inline">
<label class="textWrapper fLleft">
	<input type="radio" name="rbdist" id="rbdist_1" value="0">
	<span class="text"></span>
</label>
<p id="spanTooltip" class="fLleft textWrapper txthelp closeable"  data-toggle="tooltip" data-html="true" data-htmlid="#tooltipText">Sì</p>


<br><br>
<p id="tooltipText" style="display:none">lorem ipsum dolor sit <a data-toggle="modal" data-target="#modaleStatico" id=>apri modale</a></p>
</div>
</div>

<div id="modaleStatico" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content">
      <div class="modal-header">
        <a class="close btn-icon" data-dismiss="modal" aria-label="Close"><i class="icon icon-alert_error_fill icon-2x"></i></a>
        <h1 class="modal-title">TITOLO MODALE</h1>
      </div>
      <div class="modal-body">
        Contenuto modale
      </div>
      <div class="modal-footer">
       	<div class="align-right">
			<input type="button" name="chiudi" value="Chiudi" data-dismiss="modal" class="btn  btn-primary" alt="Chiudi">
		</div>
		</div>
    </div>
	</div>
</div>

<script>
	$("#rbdist_1").on("click", function() {
		if($(this).is(':checked')) {
			$("#spanTooltip").trigger('click');
		}
		
	})
	$('#modaleStatico').on('show.bs.modal', function () {
		$("#spanTooltip,.tooltip").tooltip('hide');
	})
</script>
<br><br>

<div class="row" id="politic_esposta_1">
	<div class="col-sm-3">
		<div class="radio inline">
			<label class="flLeft">
				<input type="radio" name="politicEspostaAv_int1" id="politicEspostaAv_int1_S" onclick="openPep('1',this);setPep('1', 'S');" value="S">
				<span class="text"></span>
			</label>
			<span id="spanTooltip1" class="textWrapper txthelp closeable" data-toggle="tooltip" data-html="true" data-htmlid="#tooltipText" data-original-title="" title="" data-title="Importante: stai dichiarando di essere una persona politicamente esposta, prima di procedere leggi la <a data-toggle=&quot;modal&quot; data-target=&quot;#layeralert2&quot;>definizione</a>.">Sì</span>
			<br><br>
			<p id="tooltipText" style="display:none" class="inited">Importante: stai dichiarando di essere una persona politicamente esposta, prima di procedere leggi la <a data-toggle="modal" data-target="#layeralert2">definizione</a>.</p>																			
		</div>
	</div>
	<div class="col-sm-3">
		<div class="radio inline">
			<label class="textWrapper">
				<input type="radio" name="politicEspostaAv_int1" id="politicEspostaAv_int1_N" onclick="setPep('1', 'N');" value="N">
				<span class="text">No</span>
			</label>
		</div>
	</div>
</div>

<ol class="sotto-elenco">
  <li>one</li>
  <li>ldsad
    <ol>
      <li>lorem</li>
      <li>two.two</li>
      <li>two.three</li>
    </ol>
  </li>
  <li>three
    <ol>
      <li>three.one</li>
      <li>three.two
        <ol>
          <li>three.two.one</li>
          <li>three.two.two</li>
        </ol>
      </li>
    </ol>
  </li>
  <li>four</li>
</ol>