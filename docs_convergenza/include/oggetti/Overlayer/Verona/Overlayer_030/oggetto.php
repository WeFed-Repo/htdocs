<!-- L'oggetto token è diverso tra webank e youweb- -->
<?php 
	if ($site == "youweb") 
	{
		?>
<a href="javascript:$('#helpDialog .modal-body').empty();OpenHelp('/template/strong_ex_bpm.php')" class="no-underline btn-icon">Link per l'apertura dell'overlayer di autenticazione <strong>token software per utenti ex BPM</strong></a>
<div id="" class="modal fade  helpDialog fullScreen" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	 <div class="modal-dialog">
	    <div class="modal-content">
	       <div class="modal-header clearfix">
	          <button type="submit" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	       </div>
	       <div class="modal-body">
	       </div>
	    </div>
	 </div>
</div>
<?php
					}
	?>	

<?php 
	if ($site == "webank") 
	{
		?>
	<p>PER WEBANK IL CASO TOKEN FISICO E' INCLUSO IN PAGINA</p>

<?php
}?>	


