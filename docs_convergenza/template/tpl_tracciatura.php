<h2>Tracciatura eventi</h2>
<p>Le pagine sono tracciate <strong>automaticamente</strong> tramite un apposito script.<br>
Per attivare la tracciatura correttamente serve esporre nel DOM le variabili <strong>X</strong> (id criptato dell'utente) e <strong>UACode</strong> (codice UA per identificare l'ambiente).</br>
Per tracciare un evento &egrave; sufficiente usare la funzione <code>gotoTrack(<i>tipoevento, oggetto_parametri, [link])</i>)</code>:</p>
<ul>
    <li><strong><i>tipoevento</i></strong> (stringa)<br>
    contiene il tipo di evento da tracciare (indicato dal fornitore)</li>
    <li><strong><i>oggetto_parametri</i></strong> (oggetto)<br>
    &egrave; un oggetto contenente i parametri da inviare per la tracciatura.</li>
    <li><strong><i>link</i></Strong> - val. opzionale (stringa)<br>
    qualora il nodo non avesse "href" (es: un bottone) sar&agrave; possibile utilizzare questo parametro come link di destinazione. Qualora tale link fosse omesso, verrà solo inserito un nuovo valore nel dataLayer (es: raccolta dato progressivo).</li>
</ul>
<h3>Esempi</h3>

<!-- ANCORA -->
<a onClick="gotoTrack('CLICK ANCORA',{'par1':'esempio ancora'})" href="/template/strutt_youweb.php?tpl=tpl_tracciatura.php">Link con invio parametri</a><br><br>
<!-- FINE ANCORA -->


<!-- BOTTONE -->
<button onClick="gotoTrack('CLICK BOTTONE',{'par1':'esempio bottone'},'/template/strutt_youweb.php?tpl=tpl_tracciatura.php')" >Bottone con invio parametri</button><br><br>
<!-- FINE BOTTONE -->

<!-- BOTTONE -->
<button onClick="gotoTrack('CLICK BOTTONE CALLBACK',{'par1':'esempio bottone callback'}, function(){alert('callback!')})" >Bottone con evento callback</button><br><br>
<!-- FINE BOTTONE -->

<!-- BOTTONE -->
<button onClick="gotoTrack('CLICK BOTTONE SOLA TRACCIATURA',{'par1':'esempio bottone solo tracciatura'}, function(){alert('callback!')})" >Bottone con sola tracciatura</button>
<!-- FINE BOTTONE -->