    <span class="breadcrumb d-none d-md-block"><span class="verde">Home</span> / Conti / Bonifico singolo</span>

      <h1>
        Saldo e Movimenti
        <button type="button" class="btn-icon-help" data-toggle="tooltip" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></button>
      </h1>

      <!-- Navigatore a tab -->
      <ul class="nav">
        <li class="nav-item"><a class="nav-link active">Movimenti Online</a></li>
        <li class="nav-item"><a class="nav-link">Movimenti CBI</a></li>
      </ul>
      <!-- Fine navigatore a tab -->

      <form action="#">
        <!-- Dati rapporto -->
        <section>
            <!-- Modale di selezione (esempio) -->
            <div class="modal fade" id="mobileSelector" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <a class="close btn-icon" data-dismiss="modal" aria-label="Close"></a>
                    <h2 class="modal-title" id="myModalLabel">Selezione intestatario *</h2>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col">
                          <!-- Esempio modal selector -->
                          <div class="modal-selector">
                            <label>Intestatario *</label>
                            <ul>
                              <li><a class="on">Tutti</a></li>
                              <li><a>Nome azienda SPA</a></li>
                              <li><a>Nome azienda SPA</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Esempio modal selector -->
                          <div class="modal-selector">
                            <label>Banca *</label>
                            <ul>
                              <li><a class="on">Tutti</a></li>
                              <li><a>Banca 1</a></li>
                              <li><a>Banca 2</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <!-- Esempio modal selector -->
                          <div class="modal-selector">
                            <label>Conto *</label>
                            <ul>
                              <li><a class="on">Tutti</a></li>
                              <li><a>39128938120-312312312</a></li>
                              <li><a>39128938120-312312399</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="modal-footer">
                    <button data-dismiss="modal" class="btn">Conferma</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- / Modale di selezione -->
            <div class="mobile-data-selector BT3-visible-xs d-block d-sm-none" data-toggle="modal" data-target="#mobileSelector">
              <span class="name">Nome Azienda SPA</span>
              <span class="detail">309218309218 - Banco BPM</span>
              <div class="row">
                <div class="form-group">
                  <div class="col">
                    <label class="control-label">Saldo Disponibile</label>
                    <span  class="output verde">99.999.999,99 EUR</select>
                  </div>
                  <div class="col">
                    <label class="control-label">Saldo Contabile</label>
                    <span  class="output verde">99.999.999,99 EUR</select>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fine selettore mobile -->


          <!-- Contenuo alternativo desktop -->
          <div class="bordered BT3-hidden-xs d-none d-sm-block">

            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label class="control-label">Rag. soc / Intestatario</label>
                  <select  class="form-control">
                    <option selected>Nome Azienda SPA</option>
                    <option>Altra azienda SPA</option>
                  </select>
                </div>
                <div class="col">
                  <label class="control-label">Banca</label>
                  <select  class="form-control">
                    <option selected>00000 - Nome banca</option>
                  </select>
                </div>
                <div class="col">
                  <label class="control-label">Conto</label>
                  <select  class="form-control">
                    <option selected>00000 - 00000000000</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label class="control-label">Saldo Disponibile</label>
                  <span  class="output big verde">99.999.999,99 EUR</select>
                </div>
                <div class="col">
                  <label class="control-label">Saldo Contabile</label>
                  <span  class="output big verde">99.999.999,99 EUR</select>
                </div>
                <div class="col">
                    <label class="control-label">SIA</label>
                  <span  class="output big verde">L0938712</select>
                </div>
              </div>
            </div>


          </div>
        </section>
        <!-- / Dati rapporto -->

        <div class="mobile-form">
          <!-- Dati movimenti -->
          <script type="text/javascript">
            var tableMovimenti,
                tbdata = [],
                randomWords = "lorem ipsum dolor sit amet consectetur adipisicing elit possimus nulla voluptas qui tempora odit iure sapiente quisquam praesentium ipsam error quod provident modi culpa quae blanditiis error deleniti suscipit neque";

              // Crea dei dati random per popolare la tabella
              for (x=0;x<=(Math.random()*100);x++) {
                tbdata.push({
                  "contabile": parseInt(28-x/3) + "/02/2019",
                  "link": "#",
                  "valuta" : parseInt(28-x/3) + "/02/2019",
                  "importo" : 10000 * Math.random() - 3000,
                  "divisa": "EUR",
                  "causale": parseInt((Math.random()*100) + 261),
                  "descrizione": randomWords.split(" ").map(function(word){
                    if(Math.random()>0.5) return (word + " ");
                  }).join(" ")
                });
              }

          </script>


          <section>

            <div class="bordered">
              <!-- Contenuto desktop -->
              <div class="BT3-hidden-xs d-none d-sm-block">

                <!-- Esempio di automazione della tabella -->
                <script type="text/javascript" src="./fe/assets/bootstrap/bootstrap-table.js"></script>
                <script type="text/javascript" >

                    $(function () {
                      tableMovimenti = $('#tableMovimenti');
                    tableMovimenti.bootstrapTable({
                              data: tbdata,
                              sortable: true,
                              sortName: "contabile",
                              sortOrder: "desc"
                        });
                   });
                </script>

                <!-- Fine esempio di automazione di una tabella -->



                <div class="table-heading table-heading-filters">

                  <div class="row justify-content-between d-flex align-items-center">
                    <div class="col">
                      <h4 class="text-nowrap">Movimenti Conto</h4>
                    </div>
                    <div class="col">
                      <div class="row justify-content-end flex-nowrap align-items-center">
                        <div class="col">
                          <div class="form-check  radio">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Tutti</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-check  radio">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Entrate</label>
                          </div>
                        </div>
                        <div class="col pr-0">
                          <div class="form-check  radio">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                            <label class="form-check-label" for="inlineRadio3">Uscite</label>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>


                <table id="tableMovimenti" cellspacing="0" cellpadding="0" border="0" class="table table-striped">
                     <thead>
                        <tr>
                            <th data-field="contabile" data-formatter="formatLink" class="center">Contabile</th>
                            <th data-field="valuta" data-sortable="true" class="center">Valuta</th>
                            <th data-field="importo" data-sortable="true" data-formatter="tableCellValue" class="right">Importo</th>
                            <th data-field="divisa" data-sortable="true" class="center">Divisa</th>
                            <th data-field="causale" data-sortable="true">Causale</th>
                            <th data-field="descrizione" data-sortable="false" class="right">Descrizione movimento</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                </table>


              </div>
              <!-- Fine contenuto desktop -->

              <!-- Contenuto mobile -->
              <div class="d-block d-md-none">
                <script type="text/javascript">
                  $(function(){

                    // Inserimento dei dati mobile
                    $.each(tbdata,function(x,obj){
                      $(movimentiMobile).append(

                          mobileDataBlock([
                            {"label": "Importo", "output": tableCellValue(obj.importo) + " " + obj.divisa, "class": "output-inline"},
                            {"label": "Data contabile", "output": obj.contabile, "class": "output-inline"},
                            {"label": "Data valuta", "output": obj.valuta, "class": "output-inline"},
                            {"label": "Descrizione", "output":obj.descrizione}
                          ])
                      )
                    })
                  });
                </script>
                <div class="mobile-data-heading">
                  <h4>Movimenti Conto</h4>
                  <div class="table-filters">
                    <div class="radio-inline">
                      <div class="radio control-group">
                                          <input type="radio" id="tipomov1" name="tipomov" value="tutti" checked>
                                          <label class="control control-checkbox" for="tipomov1">Tutti</label>
                                        </div>
                      <div class="radio control-group">
                                          <input type="radio" id="tipomov2" name="tipomov" value="entrate">
                                          <label class="control control-checkbox" for="tipomov2">Entrate</label>
                                        </div>
                      <div class="radio control-group">
                                          <input type="radio" id="tipomov3" name="tipomov" value="uscite">
                                          <label class="control control-checkbox" for="tipomov3">Uscite</label>
                                        </div>
                                      </div>
                  </div>
                </div>
                <div id="movimentiMobile" class="mobile-data">
                </div>
              </div>
              <!-- Fine contenuto mobile -->
            </div>

          </section>
          <!-- / Dati movimenti -->

        </div>
      </form>
