<?php /*<p>
    Per mostrare un box di PostLogin come una normale modale (quindi mostrarlo al click di un bottone e creando l'overlay in stile popup):
</p>
<ol>
    <li>Sostituire class="not-floated-modal" con class="modal" nel div principale</li>
    <li>Aggiungere l'attributo data-modal="NOMEDELLAMODALE" alla modale</li>
    <li>Aggiungere data-modal-open="NOMEDELLAMODALE" al bottone che scatena l'apertura</li>
</ol>*/ ?>
<p> 
    Da grafica, è stato richiesto che se il bottone è singolo, venga centrato. 
    Se invece i bottoni sono più di uno, devono essere sbandierati a destra.
    <br />
    Per centrare il bottone singolo aggiungere all'elemento "modal-footer" 
    le classi .d-flex e .justify-content-center.
</p>