<h3>Validazione form</h3>


<section>
    <h4>Cambiare tab senza animazioni</h4>

    <p>
        Di solito usata per le sottotab.<br>
        Es. selectTab('Trasferimento', 1);<br>
        Apre la prima sottotab dei trasferimenti, utile quando si apre la tab princcipale dei trasferimenti e si
        vogliono resettare le sottotab
    </p>

    <ul>
        <li>
            <strong>1. selecttab</strong>
            <ul>
                <li>1.1. chiama hideTabs per chiudere tutte le tab</li>
                <li>1.2. mostra la tab da aprire</li>
                <li>1.3. chiama loadContent per eseguire alcune funzioni all'apertura della nuova tab</li>
            </ul>
        </li>
        <li>
            <strong>2. hideTabs</strong>
            <ul>
                <li>2.1. cicla su tette le tab per chiuderle</li>
            </ul>
        </li>
        <li>
            <strong>3. loadContent</strong>
            <ul>
                <li>3.1. esegue eventuali funzioni impostate all'apertura della tab</li>
                <li>3.2. alla fine lancia l'evento content:loadComplete</li>
            </ul>
        </li>
    </ul>
</section>