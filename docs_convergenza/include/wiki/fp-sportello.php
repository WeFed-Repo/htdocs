<h3>Flusso dispositive con Smash</h3>

<section>
    <ul>
        <li>
            <strong>1. chiamata Smash di verifica dati</strong>
            <ul>
                <li>1.1. p. es. bonifico -> dispoLinks.checkBonifico (ritorna hashOtp da utilizzare nelle successive chiamate)</li>
            </ul>
        </li>
        <li>
            <strong>2. strong authentication</strong>
            <ul>
                <li>
                    <strong>2.1. autenticazione tramite app</strong>
                    <ul>
                        <li>
                            2.1.1. creazione push -> dispoLinks.createPush
                            <ul>
                                <li>2.1.1.1. statoOperazione="VM" -> 2.1.3. inserimento token app</li>
                                <li>2.1.1.2. statoOperazione="RI" -> 2.1.2. polling push (inizia il polling)</li>
                            </ul>
                        </li>
                        <li>
                            2.1.2. polling push -> dispoLinks.checkPush (chiamata in polling)
                            <ul>
                                <li>2.1.2.1. esito="VM" -> 2.1.3. inserimento token app</li>
                                <li>2.1.2.2. esito="RI" -> 2.2. polling push (continua il polling)</li>
                                <li>2.1.2.3. esito="VP" -> 3. esecuzione dispositiva</li>
                            </ul>
                        </li>
                        <li>
                            2.1.3. inserimento token app -> dispoLinks.verifyPush
                            <ul>
                                <li>2.1.3.1. esito=="OK" -> dispoLinks.checkPush (chiamata singola, no polling)</li>
                                <ul>
                                    <li>2.1.3.1.1. "esito" == "VP" => 3. esecuzione dispositiva</li>
                                </ul>
                            </ul>
                        </li>
                        <li>
                            2.1.4. passaggio da app a token app -> dispoLinks.changePush
                            <ul>
                                <li>
                                    2.1.4.1. esito="OK" -> dispoLinks.ckeckPush (chiamata singola, no polling)
                                    <ul>
                                        <li>
                                            2.1.4.1.1. esito="VM" -> 2.1.3. inserimento token app
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>2.2. autenticazione tramite token fisico</strong>
                    <ul>
                        <li>
                            2.2.1. inserimento token fisico -> 3. esecuzione dispositiva
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <strong>3. esecuzione dispositiva</strong>
            <ul>
                <li>
                    3.1. p. es. bonifico -> dispoLinks.sendBonifico
                </li>
            </ul>
        </li>
        <li>
            <strong>4. Smash controlla la transazione</strong>
            <ul>
                <li>
                    4.1 esito.codice="GENERATE_PASSWORD" -> transazione identificata come a rischio
                    <ul>
                        <li>
                            4.1.1. invio OTP SMS -> dispoLinks.richiestaOTPSms
                        </li>
                        <li>
                            4.1.2. ripetere esecuzione dispositiva
                            <ul>
                                <li>
                                    4.1.2.1. p. es. bonifico -> dispoLinks.sendBonifico (campo aggiuntivo codiceOTPConSMS​)
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    4.2. esito.codice="SMASH_RISK_RED" -> Semaforo rosso, si torna alla schermata di compilazione
                </li>
                <li>
                    4.3. esito.codice="OK" -> Transazione eseguita (fine)
                </li>
            </ul>
        </li>
    </ul>
</section>





