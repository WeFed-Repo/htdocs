<h4>Effettua una ricerca per parola chiave (es. codice ISIN, nome fondo) - min 3 caratteri, usa AJAX con cache risultati</h4>
<form class="formGenerico borderFormRounded" role="form">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-6">
                <input type="text" id="ricLiberaAutocomplete" class="form-control clear-x">
                <script type="text/javascript">
                var cacheAC = {};
                $("#ricLiberaAutocomplete").autoComplete([], {
                    "minLength": 3,
                    "filter": function(request, response) {
                        var term = request.term;
                        if (term in cacheAC) {
                            response(cacheAC[term]);
                            return;
                        }
                        $.getJSON("/librerie/include/commons/ajax/fes/fdaAutoCom.php", request, function(data) {
                            data = $.map(data, function(item) {
                                return { "label": item.nome, "value": item.isin };
                            });
                            cacheAC[term] = data;
                            response(data);
                        });
                    },
                    "selectable": false,
                    "clearable": true,
                    "renderItem": stylingResults
                });
                </script>
            </div>
            <div class="col-sm-6">
                <a type="button" class="btn btn-primary" href="#">ricerca</a>
            </div>
        </div>
    </div>
</form>
