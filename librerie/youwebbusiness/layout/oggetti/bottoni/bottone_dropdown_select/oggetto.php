<div class="dropdown dropdown-select-wrapper">
    <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        OPERAZIONI MASSIVE
        <img src="fe/img/icon/more.svg">
     </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="javascript:;" data-value="">Associa progetto</a></li>
          <li><a href="javascript:;" data-value="">Modifica Categoria/Sottoprodotto</a></li>
      </ul>
</div>
<script>

//emulazione funzione di popolamento del dropdown
$(function(){
var dropDownSelect = $(".dropdown-select-wrapper");
    dropDownSelect.each(function(index) {
        var dropDownMenu = dropDownSelect.find(".dropdown-menu"),
            dropDownItems = dropDownMenu.find("a"),
            dropDownBtn = dropDownSelect.find(".btn");
            dropDownItems.click(function(){
              dropDownBtn.html($(this).text() + ' <span class="caret"></span>');
                dropDownBtn.val($(this).data('value'));
            });
    })
})
</script>