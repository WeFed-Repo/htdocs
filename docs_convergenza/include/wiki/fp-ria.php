<h3>Tab e box espandibili</h3>
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
                <li>2.1. cicla su tutte le tab per chiuderle</li>
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

<section>
    <h4>Cambiare tab tramite animazioni</h4>

    <p>
        Di solito usata per le tab principali.<br>
        Es. toggleTab(e, 'Ria', 2, 'slide');<br>
        Apre la tab principale dei trasferimenti con l'animazione slide
    </p>

    <ul>
        <li>
            <strong>1. toggleTab</strong>
            <ul>
                <li>
                    1.1. imposta isMoving a true per bloccare altre animazioni
                </li>
                <li>
                    1.2. imposta toggleTabUnloadCallback come funzione da chiamare dopo la chiusura della tab aperta
                </li>
                <li>
                    1.3. chiama unloadContent per eseguire alcune funzioni prima della chiusura
                </li>
            </ul>
        </li>
        <li>
            <strong>2. unloadContent</strong>
            <ul>
                <li>
                    2.1. esegue eventuali funzioni impostate alla chiusura della tab
                </li>
                <li>
                    2.2. alla fine lancia l'evento content:unloadComplete
                </li>
            </ul>
        </li>
        <li>
            <strong>3. toggleTabUnloadCallback</strong>
            <ul>
                <li>
                    3.1. chiude la tab, gestendo le animazioni
                </li>
                <li>
                    3.2. imposta toggleTabLoadCallback come funzione da chiamare dopo l'apertura della nuova tab
                </li>
                <li>
                    3.3. chiama loadContent per eseguire alcune funzioni prima dell'apertura della nuova tab
                </li>
            </ul>
        </li>
        <li>
            <strong>4. loadContent</strong>
            <ul>
                <li>
                    4.1. esegue eventuali funzioni impostate all'apertura della tab
                </li>
                <li>
                    4.2. alla fine lancia l'evento content:loadComplete
                </li>
            </ul>
        </li>
        <li>
            <strong>5. toggleTabLoadCallback</strong>
            <ul>
                <li>
                    5.1. apre la nuova tab, gestendo le animazioni
                </li>
                <li>
                    5.2. imposta isMoving a false per permettere altre animazioni
                </li>
            </ul>
        </li>
    </ul>
</section>

<section>
    <h4>Aprire/chiudere box</h4>
    <p>
        Usata per i box del tab "Situazione attuale"<br>
        Es. changeItemAccordion(e, 1, 'load');<br>
        Apre il primo box della RIA (dettaglio CC)
    </p>
    <ul>
        <li>
            <strong>1. changeItemAccordion</strong>
            <ul>
                <li>
                    1.1. imposta isMoving a true per bloccare altre animazioni
                </li>
                <li>
                    1.2. imposta contentProgressAccordionCallBack come funzione da chiamare dopo l'apertura/chiusura del
                    box
                </li>
                <li>
                    1.3. chiama loadContent/unloadContent per eseguire alcune funzioni prima dell'apertura/chiusura del
                    box
                </li>
            </ul>
        </li>
        <li>
            <strong>2. loadContent/unloadContent</strong>
            <ul>
                <li>
                    2.1. esegue eventuali funzioni impostate all'apertura/chiusura del box
                </li>
                <li>
                    2.2. alla fine lancia l'evento content:loadComplete/content:unloadComplete
                </li>
            </ul>
        </li>
        <li>
            <strong>3. contentProgressAccordionCallBack</strong>
            <ul>
                <li>
                    3.1. imposta isMoving a false per permettere altre animazioni
                </li>
            </ul>
        </li>
    </ul>
</section>
