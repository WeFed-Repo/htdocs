<section class="bordered my-0 p-0">
  <div class="container-fluid my-2">
    <div class="row align-items-center table-heading-firstline justify-content-between" tm-custom-table-header="">
      <div class="d-flex justify-content-start">
        <h2 class="text-nowrap my-0 ml-2">Elenco Carte</h2>
      </div>
      <div class="d-flex justify-content-end">
        <div tm-table-actions="">
          <div tm-actions="" class="azioni-tabella">
            <a href="javascript:void(0);" tm-action-link="pdf" class="tm-norows-hide" style="text-decoration: none !important;">
              <span>
                <img src="fe/img/icon/pdf.svg">
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div tm-bstable-container="list" class="py-2">
    <div tablecontext="72726bd2c06946ebbe7e183c32621d12_3" style="">
      <div tm-table-header="" style="">
        <div class="d-flex justify-content-between align-items-end py-1">
          <div class="d-flex px-3 justify-content-start" tm-table-pagination="">
            <div class="azioni-tabella d-flex ml-1 mr-1">
              <div class="mr-3 nowrap" tm-page-list-label="">Rows per page</div>
              <ul class="list-inline nowrap page-list">
                <li class="list-inline-item page-list-event" page-size="10"> <a href="javascript:void(0);">10</a> </li>
                <li class="list-inline-item page-list-event" page-size="25"> <a href="javascript:void(0);">25</a> </li>
                <li class="list-inline-item active" page-size="50"> 50 </li>
                <li class="list-inline-item page-list-event" page-size="100"> <a href="javascript:void(0);">100</a> </li>
              </ul>
            </div>
          </div>
          <div class="d-flex px-3 justify-content-end" tm-table-actions=""></div>
        </div>
      </div>
      <div tm-bstable-v2="" class="px-3">
        <table data-bootstrap-table cellspacing="0" cellpadding="0" border="0" class="table table-striped" data-table-mobilized-desktop="NewTable">
          <?php virtual('/youwebbusiness/layout/oggetti/tabelle/_tabella/tabella.php');?>
        </table>
        <div class="clearfix"></div>
      </div>
      <div tm-table-footer="" style="">
        <div class="row align-items-center py-1 m-0">
          <div class="col-12 px-3" tm-table-itemscount=""><strong>1 total rows</strong></div>
          <div class="col px-3 d-flex justify-content-center" tm-table-pages=""></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fine contenuto desktop -->
  <!-- Contenuto mobile -->
  <div class="bordered p-0 d-block d-lg-none">
    <div class="mobile-data" data-table-mobilized-mobile="NewTable"></div>
  </div>
  <!-- Fine contenuto mobile -->
</section>
