$(function () {

    $.widget('et.PagedList', $.tm.itemSelectorPage, {
        _validation: ko.observableArray([]),

        _init: function () {

            this._super();
            var me = this;

            $('thead > tr > th', this.element).each(function (index, element) {
                if (!$(element).hasClass('dt-nosort')) {
                    $(element).removeClass();
                    if ($(element).attr("dt-sortColumn") == me.options.param.pagingFilter.SortColumn()) {
                        me._orderClass($("th[dt-sortColumn='" + me.options.param.pagingFilter.SortColumn() + "']", me.element));
                    }
                }
            });

            $("thead > tr > th", me.element).unbind();

            $("thead > tr > th", me.element).not("thead > tr > th.dt-nosort", me.element).click(function (event) {
                event.preventDefault();

                me._sort($(event.currentTarget));
                me.options.param.pagingFilter.StartIndex(1);
                me._popolaTabella(false);
            });
        },

        _sort: function (column) {
            var me = this;

            if (column.attr("dt-sortColumn")) {
                if (column.attr("dt-sortColumn") != me.options.param.pagingFilter.SortColumn()) {
                    me.options.param.pagingFilter.IsSortAscending(true);
                    me._orderClass($("th[dt-sortColumn='" + me.options.param.pagingFilter.SortColumn() + "']", me.element), 'sorting');
                } else {
                    me.options.param.pagingFilter.IsSortAscending(!me.options.param.pagingFilter.IsSortAscending());
                }

                me.options.param.pagingFilter.SortColumn(column.attr("dt-sortColumn"));

                me._orderClass(column);
            }
        },

        _orderClass: function (column, className) {
            column.removeClass();
            if (className) {
                column.addClass(className);
            } else {
                if (this.options.param.pagingFilter.IsSortAscending()) {
                    column.addClass("sorting_asc");
                } else {
                    column.addClass("sorting_desc");
                }
            }
        },
        
        _format_date: function (value) {
            return App.Core.FormatDate(value.trim());
        },
        _format_import: function (value) {
            var decimal = App.Core.ParseNumber(parseFloat(value));

            if (isNaN(decimal)) {
                return "";
            } else {
                decimal = App.Core.FormatNumberSeparation(Math.round(decimal * 100) / 100);

                return decimal;
            }
        },

        _clearTable: function () {
            $('tbody', this.element).html('');
        },

        _getData: function (callback) {
            var me = this;

            Http.Post(this.options.param.dataSourceUrl, ko.mapping.toJSON(me.options.param.pagingFilter)).success(function (data) {
                var result = new App.Core.SearchJsonResult(data);

                me.options.param.pagingFilter = ko.mapping.fromJS(result.PagingFilter, null, me.options.param.pagingFilter);
                if (result.HasError) {
                    ko.mapping.fromJS(result.Messages, null, me.options.param.validation);
                } else {
                    me._clearTable();
                    if (result.Response) {
                        callback(result);
                    }
                }

                me._trigger("complete", null);
            });
        },

        _initPostPopulate: function (result) {
            this._super();

            this.element.DataTable().page.len(10).draw();
        },

        _drawRows: function (items) {
            var me = this;

            $.each(items, function (index, item) {
                var row = $('<tr></tr>');
                var tbody = $('tbody', me.element);

                $.each($('thead > tr > th', me.element), function (index, column) {
                    var col = $('<td></td>');
                    var cssClass = $(column).attr('dt-cssClass');
                    if (cssClass) {
                        col.addClass(cssClass);
                    }

                    var fixedValue = $(column).attr('dt-fixedValue');
                    if (fixedValue) {
                        col.text(fixedValue);
                    } else {
                        var attrName = $(column).attr('dt-columnProperty');
                        if (attrName) {
                            var value = ko.utils.getValueByKey(item, attrName);
                            var tag = $('<span></span>');

                            if (value !== null && value !== undefined) {
                                var dataType = $(column).attr('dt-dataType');
                                if (dataType) {
                                    value = me['_format_' + dataType](value);
                                }

                                var prefix = $(column).attr('dt-resource');
                                if (prefix) {
                                    resource = prefix + '.' + value;
                                    value = ko.utils.GetResource(resource);
                                }

                                var clickable = $(column).attr('dt-clickable');
                                if (clickable) {
                                    var conditions = ['=', '<', '>', '!='];
                                    var condition = '';

                                    $.each(conditions, function (index, item) {
                                        if (clickable.indexOf(item) >= 0) {
                                            condition = item;
                                            return;
                                        }
                                    });

                                    if (condition) {
                                        var conditionSplitted = clickable.split(condition);
                                        condition = ko.utils.getValueByKey(item, conditionSplitted[0]) + condition + conditionSplitted[1];

                                        if (eval(condition)) {
                                            tag = $('<a></a>').css('cursor', 'pointer').click(function (internalItem) {
                                                return function (event) {
                                                    me.options.param.detailCallback(internalItem);
                                                }
                                            }(item));
                                        }
                                    } else {
                                        tag = $('<a></a>').css('cursor', 'pointer').click(function (internalItem) {
                                            return function (event) {
                                                me.options.param.detailCallback(internalItem);
                                            }
                                        }(item));
                                    }
                                }

                                var fixedPostValue = $(column).attr('dt-fixedPostValue');
                                if (fixedPostValue) {
                                    value += ' ' + fixedPostValue;
                                }

                                var attrPostValue = $(column).attr('dt-postValue');
                                if (attrPostValue) {
                                    var postValue = ko.utils.getValueByKey(item, attrPostValue);

                                    if (postValue !== undefined && postValue !== null) {
                                        value += ' ' + postValue;
                                    }
                                }

                                var drawImageCallback = $(column).attr('dt-drawImageCallback');
                                if (drawImageCallback) {
                                    eval(drawImageCallback)(col, value);
                                    value = '';
                                }
                            } else {
                                value = '';
                            }

                            var negativeValueColor = $(column).attr('dt-negativeValueColor');
                            if (negativeValueColor) {
                                if (value[0] == '-') {
                                    col.css({ 'color': negativeValueColor });
                                }
                            }
                            tag.text(value);
                            col.append(tag);
                        }
                    }

                    row.append(col);
                });

                tbody.append(row);
            });
        },

        _drawPaginator: function (totalElements) {
            var element = $(this.element);
            var totalPages = Math.ceil((totalElements / this.options.param.pagingFilter.Size()));

            var divPaginator = $('<div></div>').attr('id', element.attr('id') + '_paginator').addClass('dataTables_paginate');
            var span = $('<span></span>');

            var me = this;

            if (totalPages > me.options.param.maxPages) {
                if (me.options.param.pagingFilter.StartIndex() < me.options.param.maxPages) {
                    for (var pageIndex = 1; pageIndex <= me.options.param.maxPages; pageIndex++) {
                        var page = $('<a>' + pageIndex + '</a>').addClass('paginate_button');

                        if (pageIndex == me.options.param.pagingFilter.StartIndex()) {
                            page.addClass('current');
                        } else {
                            page.unbind();
                            page.click(function (internalIndex) {
                                return function (event) {
                                    me.options.param.pagingFilter.StartIndex(internalIndex);
                                    me._popolaTabella(false);
                                }
                            }(pageIndex));
                        }

                        span.append(page);
                    }

                    divPaginator.append(span);

                    divPaginator.append($('<span><a class="paginate_ellipsis">...</a></span>'));

                    span = $('<span></span>');
                    var page = $('<a>' + totalPages + '</a>').addClass('paginate_button');
                    page.click(function () {
                        me.options.param.pagingFilter.StartIndex(totalPages);
                        me._popolaTabella(false);
                    });
                    span.append(page);
                    divPaginator.append(span);
                } else if (me.options.param.pagingFilter.StartIndex() >= me.options.param.maxPages && me.options.param.pagingFilter.StartIndex() < totalPages - 2) {
                    span = $('<span></span>');
                    var page = $('<a>1</a>').addClass('paginate_button');
                    page.click(function () {
                        me.options.param.pagingFilter.StartIndex(1);
                        me._popolaTabella(false);
                    });
                    span.append(page);
                    divPaginator.append(span);

                    divPaginator.append($('<span><a class="paginate_ellipsis">...</a></span>'));

                    span = $('<span></span>');
                    for (var pageIndex = me.options.param.pagingFilter.StartIndex() - 1; pageIndex <= me.options.param.pagingFilter.StartIndex() + 1; pageIndex++) {
                        var page = $('<a>' + pageIndex + '</a>').addClass('paginate_button');

                        if (pageIndex == me.options.param.pagingFilter.StartIndex()) {
                            page.addClass('current');
                        } else {
                            page.unbind();
                            page.click(function (internalIndex) {
                                return function (event) {
                                    me.options.param.pagingFilter.StartIndex(internalIndex);
                                    me._popolaTabella(false);
                                }
                            }(pageIndex));
                        }

                        span.append(page);
                    }
                    divPaginator.append(span);

                    divPaginator.append($('<span><a class="paginate_ellipsis">...</a></span>'));

                    span = $('<span></span>');
                    var page = $('<a>' + totalPages + '</a>').addClass('paginate_button');
                    page.click(function () {
                        me.options.param.pagingFilter.StartIndex(totalPages);
                        me._popolaTabella(false);
                    });
                    span.append(page);
                    divPaginator.append(span);
                } else {
                    span = $('<span></span>');
                    var page = $('<a>1</a>').addClass('paginate_button');
                    page.click(function () {
                        me.options.param.pagingFilter.StartIndex(1);
                        me._popolaTabella(false);
                    });
                    span.append(page);
                    divPaginator.append(span);

                    divPaginator.append($('<span><a class="paginate_ellipsis">...</a></span>'));

                    span = $('<span></span>');
                    for (var pageIndex = me.options.param.pagingFilter.StartIndex() - 4; pageIndex <= totalPages; pageIndex++) {
                        var page = $('<a>' + pageIndex + '</a>').addClass('paginate_button');

                        if (pageIndex == me.options.param.pagingFilter.StartIndex()) {
                            page.addClass('current');
                        } else {
                            page.unbind();
                            page.click(function (internalIndex) {
                                return function (event) {
                                    me.options.param.pagingFilter.StartIndex(internalIndex);
                                    me._popolaTabella(false);
                                }
                            }(pageIndex));
                        }

                        span.append(page);
                    }
                    divPaginator.append(span);
                }
            } else {
                for (var pageIndex = 1; pageIndex <= totalPages; pageIndex++) {
                    var page = $('<a>' + pageIndex + '</a>').addClass('paginate_button');

                    if (pageIndex == me.options.param.pagingFilter.StartIndex()) {
                        page.addClass('current');
                    } else {
                        page.unbind();
                        page.click(function (internalIndex) {
                            return function (event) {
                                me.options.param.pagingFilter.StartIndex();
                                me.options.param.pagingFilter.StartIndex(internalIndex);
                                me._popolaTabella(false);
                            }
                        }(pageIndex));
                    }

                    span.append(page);
                }
                divPaginator.append(span);
            }
            
            element.after(divPaginator);
        },

        _popolaTabella: function (postPopulate) {
            var me = this;

            me._getData(function (result) {
                me._drawRows(result.Response);

                $('#' + me.element.attr('id') + '_paginator').html('');
                if (result.TotaleElementi > me.options.param.pagingFilter.Size()) {
                    me._drawPaginator(result.TotaleElementi);
                }

                me._orderClass($("th[dt-sortColumn='" + me.options.param.pagingFilter.SortColumn() + "']", me.element));

                if (postPopulate === undefined) {
                    postPopulate = null;
                }
                if (postPopulate || postPopulate == null) {
                    me._initPostPopulate(result.Response);
                }

                $("thead > tr > th.sorting_disabled", me.element).not("thead > tr > th.dt-nosort", me.element).removeClass("sorting_disabled").addClass("sorting");
            });
        },
    })

});