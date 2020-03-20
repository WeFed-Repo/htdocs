<!-- Modal -->
<div class="modal fade" data-modal="detail">
  <div class="modal-dialog modal-dialog-centered modal-with-slider" role="document">
    <div class="modal-slider">

      <div class="modal-slide">
        <div class="container">
          <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
              <div>
                <h5 class="modal-title">
                  Dettaglio
                  <button type="button" class="btn-icon-help" data-toggle-modal-slider></button>
                </h5>
              </div>
              <div class="modal-toolbar">
                <a href="#" aria-label="Pdf" >
                  <img src="./fe/img/icon/pdf.svg">
                </a>
                <a href="#" aria-label="Print" >
                  <img src="./fe/img/icon/print.svg">
                </a>
                <a href="#" data-dismiss="modal" aria-label="Close" >
                  <img src="./fe/img/icon/close.svg">
                </a>
              </div>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="detail-panel pb-4 pb-md-0">
                    <h2>Dossier</h2>
                    <?php for ($i = 0; $i <= 4; $i++) { ?>
                      <div class="list">
                				<dt class="list-key">Lorem</dt>
                				<dd class="list-value">Ipsum</dd>
                			</div>
                    <?php } ?>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="detail-panel">
                    <h2>Titolo</h2>
                    <?php for ($i = 0; $i <= 4; $i++) { ?>
                      <div class="list">
                				<dt class="list-key">Lorem</dt>
                				<dd class="list-value">Ipsum</dd>
                			</div>
                    <?php } ?>
                    <div class="list">
                				<dt class="list-key">Lorem ipsum dolor</dt>
                				<dd class="list-value">
                          Sit amet consectetur adipisicing elit. Possimus doloremque 
                          perferendis quia ea dolore itaque! Iste voluptas similique 
                          voluptate? Voluptates repellendus quos illo ut consequatur 
                          amet omnis sequi a quisquam.</dd>
                			</div>
                  </div>
                </div>
              </div>
              <!-- INIZIO DESKTOP -->
              <div class="d-none d-md-block p-3">
                <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped" data-table-mobilized-desktop="modaleTable">
                   <thead>
                      <tr>
                        <th data-field="data_movimento" data-sortable="true" class="center">Data <span class="d-none d-xl-inline">movimento</span></th>
                        <th data-field="operazione" data-sortable="true">Operazione</th>
                        <th data-field="qta" data-sortable="true" class="right">Quantità <span class="d-none d-xl-inline">trattata</span></th>
                        <th data-field="causale" data-sortable="true">Causale <span class="d-none d-xl-inline">movimento</span></th>
                        <th data-field="riferimento" data-sortable="true">Riferimento</th>
                        <th data-field="dossier_giro" data-sortable="true">Dossier giro</th>
                        <th data-field="cab_giro" data-sortable="true" class="right">CAB giro</th>
                      </tr>
                   </thead>
                   <tbody>
                     <?php // esempio ciclo per tabella in desktop ?>
                     <?php for ($i = 0; $i <= 3; $i++) { ?>
                       <tr data-index="<?= $i ?>">
                          <td class="center">28/02/2019</td>
                          <td>Acquisto</td>
                          <td class="right">450.000.000</td>
                          <td>0010-acquisto</td>
                          <td>K3ZM180003000</td>
                          <td></td>
                          <td class="right"> 01647</td>
                       </tr>
                     <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- FINE DESKTOP -->
              <!-- INIZIO MOBILE -->
              <div class="p-0 mt-3 m-0 d-block d-md-none">
                <div class="o-separator-line"></div>
                <div class="mobile-data" data-table-mobilized-mobile="modaleTable"></div>
              </div>
              <!-- FINE MOBILE -->
            </div>
          </div>
        </div>
      </div>

      <div class="modal-slide">
        <div class="container">
          <div class="modal-content">
            <div class="modal-header  d-flex justify-content-between">
              <div>
                <h5 class="modal-title">Help</h5>
              </div>
              <div class="modal-toolbar">
                <a href="#" aria-label="CSV" >
                  <img src="./fe/img/icon/excel.svg">
                </a>
                <a href="#" aria-label="Print" >
                  <img src="./fe/img/icon/print.svg">
                </a>
                <a href="#" data-toggle-modal-slider class="nowrap"> Torna al dettaglio &raquo; </a>
              </div>
            </div>
            <div class="modal-body">
              <h2>Dossier Titoli</h2>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
              <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
              <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
