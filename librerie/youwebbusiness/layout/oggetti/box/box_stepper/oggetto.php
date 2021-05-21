<!-- 
modifiche html ad oggetto stepper rispetto al precedente

1) Aggiungere la classe "last" sull'ultima riga del blocco (valida indipendentemente dallo stato), questo eviterà il bordo a sinistra e l'ingombro verticale che scompaiono all'ultimo step
2) Eliminare tutti i div di classe step separator e step point che non servono più
3) Sostituire tutti i button di classe "btn btn-stepper" con uno span di classe "state" e riportare i testi in minuscolo
4) Mdificare l'html del bottone modifica sostituendolo con: <button class="btn btn-white in-table">Modifica</button> e toglierlo dalla relativa colonna di bootstrap (ora è posizionato in position absolute per esigenze specifiche di visualizzazione responsive )
5) Modificare la griglia di bootsrap di tutte le colonne (classi per larghezze)
-->


<section>
  <div class="bordered">
    <h2>Lorem ipsum</h2>
    <p>lorem ipsum <strong>dolor</strong> sit</p>
    <div class="step-wrapper">
      <!--STATO ATTIVO classe state-active -->
      <div class="row state-active">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="step-name">
            <div class="step-reas">Richiesta finanziamento</div>
            <div class="step-date"></div>
            <div class="step-number"><span>1</span></div>
          </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-2">
          <div class="step-state">
            <span>Stato:</span>
            <span class="state">Da compilare</span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-7">
          <div class="step-output">
          </div>
        </div>
        <div class="step-output-edit"></div>
      </div>
      <!--STATO DONE classe state-done -->
      <div class="row state-done">
          <div class="col-12 col-md-3 col-lg-3 col-xl-3">
            <div class="step-name">
                <div class="step-reas">Richiesta finanziamento</div>
                <div class="step-date">10.06.2020</div>
                <div class="step-number"><span>1</span></div>
            </div>
          </div>
          <div class="col-12 col-md-3 col-lg-3 col-xl-2">
              <div class="step-state">
                  <span>Stato:</span>
                  <span class="state">Compilato</span>
              </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-7">
              <div class="step-output">
                <div class="step-output-name">Compilato da: <strong>Mario Rossi</strong></div>
              </div>
          </div>
          <div class="step-output-edit">
              <button class="btn btn-white in-table">Modifica</button>
          </div>
      </div>
      <!--STATO Disactive classe state-disactive -->   
      <div class="row state-disactive">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="step-name">
              <div class="step-reas">Allegato 4bis</div>
              <div class="step-date">10.06.2020</div>
              <div class="step-number"><span>2</span></div>
          </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-2">
          <div class="step-state">
              <span>Stato:</span>
              <span class="state">Da compilare</span>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-7">
            <div class="step-output"></div>
        </div>
        <div class="step-output-edit"></div>
      </div>
        <!--STATO DONE classe state-done -->
      <div class="row state-done">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="step-name">
              <div class="step-reas">Adeguata verifica</div>
              <div class="step-date">10.06.2020</div>
              <div class="step-number"><span>2</span></div>
            </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-2">
            <div class="step-state">
                <span>Stato:</span>
                <span class="state">Compilato</span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-7">
            <div class="step-output">
              <div class="step-output-doc"><a href="#"><img src="./fe/img/icon/pdf.svg"><span>Adeguata verifica.pdf</span></a></div>
            </div>
        </div>
        <div class="step-output-edit">
          <button class="btn btn-white in-table">Modifica</button>
        </div>
      </div>
      <div class="row state-done">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="step-name">
              <div class="step-reas">Adeguata verifica</div>
              <div class="step-date">10.06.2020</div>
              <div class="step-number"><span>2</span></div>
          </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-2">
            <div class="step-state">
                <span>Stato:</span>
                <span class="state">Compilato</span>
              </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-7">
            <div class="step-output">
              <div class="step-output-doc"><a href="#"><img src="./fe/img/icon/pdf.svg"><span>Richiesta di Finanziamento…23 e ss.ll.mm.pdf</span></a></div>
            </div>
        </div>
        <div class="step-output-edit">
            <button class="btn btn-white in-table">Modifica</button>
        </div>
      </div>
      <div class="row state-done">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="step-name">
              <div class="step-reas">Adeguata verifica</div>
              <div class="step-date">10.06.2020</div>
              <div class="step-number"><span>2</span></div>
            </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-2">
            <div class="step-state">
                <span>Stato:</span>
                <span class="state">Compilato</span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-7">
            <div class="step-output"></div>
        </div>
        <div class="step-output-edit"></div>
      </div>
      <div class="row state-active">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="step-name">
              <div class="step-reas">Richiesta finanziamento</div>
              <div class="step-date"></div>
              <div class="step-number"><span>4</span></div>
          </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-2">
            <div class="step-state">
                <span>Stato:</span>
                <span class="state">Da firmare</span>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-6 col-xl-7">
            <div class="step-output">
              <div class="step-output-firme"><strong>Documenti firmati 0/4</strong></div>
            </div>
        </div>
        <div class="step-output-edit"></div>
      </div>
      <div class="row state-done last">
        <div class="col-12 col-md-3 col-lg-3 col-xl-3">
          <div class="step-name">
              <div class="step-reas">Richiesta finanziamento</div>
              <div class="step-date"></div>
              <div class="step-number"><span>4</span></div>
              
          </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-2">
            <div class="step-state">
                <span>Stato:</span>
                <span class="state">Firmato</span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-7">
                <div class="step-output">
                  <div class="step-output-firme color-green"><strong>Documenti firmati 4/4</strong></div>
                </div>
              </div>
            <div class="step-output-edit"></div>
        </div>
      </div>
    </div>
</section>
