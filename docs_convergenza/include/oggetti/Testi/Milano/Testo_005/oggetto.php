<a class="no-underline btn-icon">
	<i class="icon icon-info_fill icon-2x" data-toggle="tooltip" title="tooltip semplice"></i>
</a>
<br><br>
<a class="no-underline btn-icon">
	<i class="icon icon-info_fill icon-2x"  data-toggle="tooltip"  data-html="true" title="tooltip che apre un link <a target='blank' href='#'>pdf</a>"></i>
</a>
<br><br>
<a class="no-underline btn-icon">
	<i class="icon icon-info_fill icon-2x"  data-toggle="tooltip"  data-html="true" data-htmlid="#tooltipText"></i>
</a>
<br><br>
<p id="tooltipText" style="display:none">lorem ipsum dolor sit <a data-toggle="modal" data-target="#modaleStatico">apri modale</a></p>

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

