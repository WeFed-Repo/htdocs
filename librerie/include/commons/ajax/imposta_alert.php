<?php
	
	virtual("/librerie/php/core/functions.php");
	$resultlength = rand(0,50);
?>
<div class="modal-dialog" role="document">
<div class="modal-content">
<input type="hidden" value="B" name="test"/>
<div class="modal-header">
<a class="close btn-icon" data-dismiss="modal" aria-label="Close" onclick="indietro();"><i class="icon icon-alert_error_fill icon-2x"></i></a>
<h2 class="modal-title" id="myModalLabel">Risultati della ricerca</h2>
</div>
<div class="modal-body">
<table id="tableOrdered" cellspacing="0" cellpadding="0" border="0" class="">
     <thead>
        <tr>
<th data-field="radio" class="center" ></th>
<th data-field="simbolo" class="left">Simbolo</th>
<th data-field="titolo">Titolo</th>
<th data-field="mercato">Mercato</th>
        </tr>
     </thead>
</table>
<script>
    
    var data = [	
    <?php
		for ($i=1;$i<=$resultlength;$i++) {
						$classeriga = ($i & 1) ? "pari": "dispari";
						$titname = strtoupper(randomWord());
						if ($i>1) print ",";
						?>
						  {
		                    "radio": "<div class=\"radio\"><label><input id=\"radioRicercaTitolo0\" type=\"radio\" name=\"radioRicercaTitolo\" value=\"0\" onclick=\"javascript:selezionaTitolo('<?php print $i; ?>','MI','<?php print $titname; ?>','B','<?php print $titname; ?>');\"><span></span></label></div>",
		                    "simbolo": "<?php print $titname; ?>",
		                    "titolo": "<?php print $titname; ?>",
		                    "mercato": "MTA"
		                 }
			<?php
		}
		?>]
</script>
<div class="form-group btnWrapper">
<div class="btn-align-right">
<a type="button" class="btn btn-primary" id="" onclick="javascript:submitRicerca();">prosegui</a>
</div>
<br class="clear">
</div>
</div>
</div>
</div>