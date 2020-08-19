<p>NOTE: La select multipla è un componente in stato bozza. NON VA UTILIZZATO.</p><br />

<style>
ul[tm-multiselect] {
    min-height: 150px;
    max-height: 400px;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
}

ul[tm-multiselect] > li.list-group-item {
    border-color: #c8c8c8;
}

ul[tm-multiselect] > li.title {
    cursor: default;
    background-color: #c8c8c8;
    padding-top: 3px !important;
    padding-bottom: 3px !important;
}

ul[tm-multiselect] > li[value] {
    cursor: pointer;
}

    ul[tm-multiselect] > li[value].selected {
        background-color: #2F9988;
        color: #fff;
    }

    ul[tm-multiselect] > li[value]:hover:not(.selected) {
        background-color: #37ad9c;
        color: #fff;
    }
</style>

<div class="container-fluid mt-3">

<div class="row mt-3">

    <div class="col-5 p-0">
        <ul class="list-group" tm-multiselect="from"></ul>
    </div>

    <div class="col-2 p-0 text-center">
        <button class="btn btn-primary w-auto text-center pl-4" tm-multiselect-sendTo="to"><span class="icon icon-arrow_right"></span></button>
        <br />
        <button class="btn btn-white w-auto text-center pl-4" tm-multiselect-sendTo="from"><span class="icon icon-arrow_left"></span></button>
    </div>

    <div class="col-5 p-0">
        <ul class="list-group" tm-multiselect="to"></ul>
    </div>

    <script type="text/javascript">

        // js: si copia da qua
        var $multiselect = {
            from: $('ul[tm-multiselect="from"]'),
            to: $('ul[tm-multiselect="to"]'),
        };

        var $sendTo = {
            from: $('button[tm-multiselect-sendTo="from"]'),
            to: $('button[tm-multiselect-sendTo="to"]')
        };

        var $items = {
            from: {
                getData: function () { return $('li[value]', $multiselect.from); },
                getSelected: function () { return $('li[value].selected', $multiselect.from); }
            },
            to: {
                getData: function () { return $('li[value]', $multiselect.to); },
                getSelected: function () { return $('li[value].selected', $multiselect.to); }
            }
        };

        var setDataSource = function (param) {
            var header = param.header;
            var items = param.items;

            $multiselect.from.append('<li class="list-group-item title">' + header + '</li>');
            $multiselect.to.append('<li class="list-group-item title">' + header + '</li>');

            $.each(items.from, function (index, item) {
                $multiselect.from.append('<li class="list-group-item" value="' + item.value + '">' + item.template + '</li>');
            });

            $.each(items.to, function (index, item) {
                $multiselect.to.append('<li class="list-group-item" value="' + item.value + '">' + item.template + '</li>');
            });

            setDelegates();
        }

        var setDelegates = function () {
            $items.from.getData().off('click').on('click', function (event) {
                var $item = $(this);
                if ($item.hasClass('selected')) {
                    $item.removeClass('selected');
                } else {
                    $item.addClass('selected');
                }
            });

            $items.to.getData().off('click').on('click', function (event) {
                var $item = $(this);
                if ($item.hasClass('selected')) {
                    $item.removeClass('selected');
                } else {
                    $item.addClass('selected');
                }
            });

            $sendTo.from.off('click').on('click', function (event) {
                $items.to.getSelected().each(function (index, item) {
                    //TODO: append elemento in $multiselect.from

                    //rimozione elemento
                    $(item).remove();
                });
            });

            $sendTo.to.off('click').on('click', function (event) {
                $items.from.getSelected().each(function (index, item) {
                    //TODO: append elemento in $multiselect.to

                    //rimozione elemento
                    $(item).remove();
                });
            });
        }

        var getSelectedItemFrom = function () {
            var items = [];
            $items.from.getSelected().each(function (index, item) { items.push($(item).attr('value')); });

            return items;
        }

        var getSelectedItemTo = function () {
            var items = [];
            $items.to.getSelected().each(function (index, item) { items.push($(item).attr('value')); });

            return items;
        }

        setDelegates();
        // js: si copia fino a qua

        //init... non va copiato nel componente, è la sua inizializzazione (esempio)
        setDataSource({
            header: 'SIA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rag. Soc. Intestatario',
            items: {

                from: [
                    {
                        value: 'test1',
                        template: 'Fonatanoni srl - 1'
                    },
                    {
                        value: 'test2',
                        template: 'Fonatanoni srl - 2'
                    },
                    {
                        value: 'test3',
                        template: 'Fonatanoni srl - 3'
                    },
                    {
                        value: 'test4',
                        template: 'Fonatanoni srl - 4'
                    },
                    {
                        value: 'test5',
                        template: 'Fonatanoni srl - 5'
                    },
                    {
                        value: 'test6',
                        template: 'Fonatanoni srl - 6'
                    }
                ],
                to: [
                    {
                        value: 'testA',
                        template: 'Fonatanoni srl - A'
                    },
                    {
                        value: 'testB',
                        template: 'Fonatanoni srl - B'
                    }
                ]

            }

        });
    </script>

</div>

</div>
