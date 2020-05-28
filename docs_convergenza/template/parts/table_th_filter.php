<!-- CODICE DI ESEMPIO PER FILTRO -->
<script type="text/javascript">
    // Inizializzazione del filtro
    var initThFilter = function(){

        var filter = $("<div>").addClass("filter-wrap"),
            toggleFilter = $("<div>").addClass("filter-toggle").append(
                $("<i>").addClass("icon icon-filter"),
                $("<i>").addClass("icon icon-close")

            ).click(function(){
                $(this).parents("th").toggleClass("filter-opened");

            }),
            filterInput = $("<input>").attr({type:"text",maxlength:20,"placeholder":"Lorem/ipsum"})
        $("th.filter").append(filter.append(toggleFilter,filterInput));

    }
</script>
<!-- CODICE DI ESEMPIO PER FILTRO -->