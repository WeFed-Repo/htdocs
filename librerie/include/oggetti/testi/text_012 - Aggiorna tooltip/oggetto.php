<p>Paragrafo semplice. Qui c'è un <span class="txthelp"><strong id="tooltipToUpdate" class="closeable" data-title="Testo iniziale del tooltip" data-toggle="tooltip">tooltip da aggiornare</strong></span>. Lorem <a href="#">ipsum dolor sit amet</a> ipsum dolor <strong>sit amet</strong>.</p>

<p>
	<a href="#!" id="tooltipUpdateLnk">Aggiorna il testo del tooltip</a>
</p>

<script>
	$(function () {
		// Il tooltip viene configurato al load della pagina da initTooltip,
		// ma può essere anche inizializzato manualmente.
		// Le option sono le stesse del tooltip Bootstrap
		// $('#tooltipAjax').tooltipPlus();

		$('#tooltipUpdateLnk').click(function () {
			$('#tooltipToUpdate').tooltipPlus('update', 'Testo del tooltip aggiornato.');
		});
	});
</script>