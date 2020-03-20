//NB: dependency of this Utils
//knockoutjs
//moment.js
//jQuery
var App;
(function (App) {
    (function (Core) {
        Core.PagedObservableArray = function (options) {
            options = options || {};

            var
            //the complete data collection
            _allData = ko.observableArray(options.allData || []),

            //the size of the pages to display
            _pageSize = ko.observable(options.pageSize || 10),

            //array to change page size
            _pageSizeDropDown = options.pageSizeDropDown || [],

            //text to search in all elements of _allData
            _cercaText = ko.observable(options.cercaText || ''),

            //current sort property
            _currentSort = ko.observable(options.currentSort || ''),

            //current sort direction
            _currentSortIsAsc = ko.observable(options.currentSortIsAsc || true),

            //the index of the current page
            _pageIndex = ko.observable(1),

            //the number of pages
            _pageCount = ko.observable(1),

            //the current page data
            _page = ko.computed(function () {
                var cercaText = _cercaText().toLowerCase(),
                    allData = ko.toJS(_allData) || [];

                if (cercaText) {
                    // reset start index
                    _pageIndex(1);
                    // filter
                    allData = ko.utils.arrayFilter(allData, function (item) {
                        var retThisItem = false;
                        var recursiveFullTextSearch = function (item) {

                            $.each(item, function (i, n) {
                                if (retThisItem) {
                                    //break jquery each 
                                    return false;
                                }

                                if (n !== null && typeof n === "object") {
                                    recursiveFullTextSearch(n);
                                } else {
                                    retThisItem = evalThisItem(n);
                                }
                            });
                        };
                        var evalThisItem = function (property) {
                            var value = "";
                            try {
                                // to avoid rsa.js bug
                                value = (typeof property === "function" ? property() : property) || '';
                            } catch (e) {
                                console.log(e);
                            }

                            var stringValue = value instanceof Date ?
                                moment(value).format("DD/MM/YYYY") :
                                value.toString();

                            return stringValue.toLowerCase().indexOf(cercaText) > -1;
                        }

                        // Recursive call to analyze nested javascript object
                        recursiveFullTextSearch(item);

                        return retThisItem;
                    });
                }

                var pageSize = _pageSize(),
                    pageIndex = _pageIndex() - 1,
                    startIndex = pageSize * pageIndex,
                    endIndex = pageSize * (pageIndex + 1);

                // update page count
                _pageCount(Math.ceil(allData.length / _pageSize()) || 1);

                return allData.slice(startIndex, endIndex);
            }, this),

            //move to the next page
            _nextPage = function () {
                if (_pageIndex() < (_pageCount()))
                    _pageIndex(_pageIndex() + 1);
            },

            //move to the previous page
            _previousPage = function () {
                if (_pageIndex() > 1)
                    _pageIndex(_pageIndex() - 1);
            },

            //move to first page
            _firstPage = function () {
                _pageIndex(1);
            },

            //move to last page
            _lastPage = function () {
                _pageIndex(_pageCount());
            },

            //sort column
            _sortToggleObservable = function (columnName) {
                if (columnName == _currentSort()) {
                    if (_currentSortIsAsc()) {
                        _sortDescObservable(columnName);
                    } else {
                        _sortAscObservable(columnName);
                    }

                    _currentSortIsAsc(!_currentSortIsAsc());
                } else {
                    _currentSortIsAsc(true);
                    _sortAscObservable(columnName);
                }
                _currentSort(columnName);
            },

            _sortToggle = function (columnName) {
                if (columnName == _currentSort()) {
                    if (_currentSortIsAsc()) {
                        _sortDesc(columnName);
                    } else {
                        _sortAsc(columnName);
                    }

                    _currentSortIsAsc(!_currentSortIsAsc());
                } else {
                    _currentSortIsAsc(true);
                    _sortAsc(columnName);
                }
                _currentSort(columnName);
            },

            _sortObservable = function (columnName, asc) {
                if (columnName == _currentSort()) {
                    if (_currentSortIsAsc()) {
                        _sortAscObservable(columnName);
                    } else {
                        _sortDescObservable(columnName);
                    }                    
                } else {
                    _currentSortIsAsc(asc);
                    _sortAscObservable(columnName);
                }
                _currentSort(columnName);
            },

            _sort = function (columnName, asc) {
                if (columnName == _currentSort()) {
                    if (_currentSortIsAsc()) {
                        _sortAsc(columnName);
                    } else {
                        _sortDesc(columnName);
                    }
                } else {
                    _currentSortIsAsc(asc);
                    _sortAsc(columnName);
                }
                _currentSort(columnName);
            },

            _sortAscObservable = function (columnName) {
                _allData.sortAscObservableProperty(columnName);
            },

            _sortDescObservable = function (columnName) {
                _allData.sortDescObservableProperty(columnName);
            },

            _sortAsc = function (columnName) {
                _allData.sortAscProperty(columnName);
            },

            _sortDesc = function (columnName) {
                _allData.sortDescProperty(columnName);
            };

            _goToPage = function (page) {
                _pageIndex(page);
            };
            //reset page index when page size changes
            _pageSize.subscribe(function () {
                _pageIndex(-1); // force _page to recompute
                _pageIndex(1);
            });


            //init
            if (options.currentSortIsAsc && options.currentSort) {
                _sortAscObservable(options.currentSort);

                _pageCount(Math.ceil(_allData().length / _pageSize()) || 1);
            }

            //public members
            this.AllData = _allData;
            this.PageSize = _pageSize;
            this.PageSizeDropDown = _pageSizeDropDown;
            this.CercaText = _cercaText;
            this.PageIndex = _pageIndex;
            this.GoToPage = _goToPage;
            this.Page = _page;
            this.PageCount = _pageCount;
            this.NextPage = _nextPage;
            this.PreviousPage = _previousPage;
            this.FirstPage = _firstPage;
            this.LastPage = _lastPage;
            this.SortToggleObservable = _sortToggleObservable;
            this.SortToggle = _sortToggle;
            this.SortObservable = _sortObservable;
            this.Sort = _sort;
            this.CurrentSort = _currentSort();
            this.ThCss = function (columnName) {
                if (_currentSort() == columnName) {
                    if (_currentSortIsAsc()) {
                        return "sorting_asc";
                    } else {
                        return "sorting_desc";
                    }
                } else {
                    return "sorting";
                }
            };
        };

        Core.PagedArrayAsync = function (options) {
            options = options || {};

            var
                // viewmodel that will be extended
                _self = options.self,

                // url to search action 
                _searchUrl = options.searchUrl || '',

                // the function used to map the result into javascript object
                _mappingResponse = options.mappingResponse || null,

                // Search callback
                _searchCallback = options.searchCallback || $.noop,

                // Search filter, pagingFilter must be a js object that implement the interface of BasePagingFilterAsync
                _pagingFilter = ko.mapping.fromJS(options.pagingFilter, null, _pagingFilter),

                // reset start page if page size change
                _prevSize = ko.observable(_pagingFilter.Size()),

                // fix paging filter in case of strange value
                _fixPagingFilter = function () {
                    if (_prevSize() != null && _prevSize() !== _pagingFilter.Size()) {
                        _pagingFilter.StartIndex(1);
                    } else {
                        _pagingFilter.StartIndex(_pagingFilter.StartIndex() || 1);
                    }

                    _pagingFilter.Size(_pagingFilter.Size() || 10);
                    _pagingFilter.SortColumn(_pagingFilter.SortColumn() || '1');
                    _pagingFilter.IsSortAscending(_pagingFilter.IsSortAscending() === null ? false : _pagingFilter.IsSortAscending());
                },

                // All data retrieved by server
                _page = ko.observableArray([]),

                // Validation 
                _validation = ko.observableArray([]),

                // The number of all record server side
                _totaleElementi = ko.observable(0),

                // The drop down page size
                _pageSizeDropDown = options.pageSizeDropDown || [10, 20, 50, 100],

                // fn to retrieve elements from the server
                _getJsonData = function () {
                    _fixPagingFilter();

                    Http.Post(_searchUrl, ko.mapping.toJSON(_pagingFilter)).success(function (data) {
                        var result = new App.Core.SearchJsonResult(data);

                        ko.mapping.fromJS(result.PagingFilter, null, _pagingFilter);
                        if (result.HasError) {
                            ko.mapping.fromJS(result.Messages, null, _validation);
                        }
                        _totaleElementi(result.TotaleElementi);
                        _prevSize(_pagingFilter.Size());

                        // mapping response into page
                        if (_mappingResponse !== null) {
                            _page([]);
                            ko.utils.arrayForEach(result.Response || [], function (item) {
                                _page.push(new _mappingResponse(item));
                            });
                        } else {
                            ko.mapping.fromJS(result.Response || [], null, _page);
                        }
                        
                        _pageCount(Math.ceil(_totaleElementi() / _pagingFilter.Size()) || 1);
                        _searchCallback(result);

                    });
                },

                // page count
                _pageCount = ko.observable(1),

                // get css class
                _thCss = function (columnName) {
                    if (_pagingFilter.SortColumn() == columnName) {
                        if (_pagingFilter.IsSortAscending()) {
                            return "sorting_asc";
                        } else {
                            return "sorting_desc";
                        }
                    } else {
                        return "sorting";
                    }
                },

                _nextPage = function () {
                    if (_pagingFilter.StartIndex() < _pageCount()) {
                        _pagingFilter.StartIndex(_pagingFilter.StartIndex() + 1);
                        _getJsonData();
                    }
                },

                _previuosPage = function () {
                    if (_pagingFilter.StartIndex() > 1) {
                        _pagingFilter.StartIndex(_pagingFilter.StartIndex() - 1);
                        _getJsonData();
                    }
                },

                _firstPage = function () {
                    _pagingFilter.StartIndex(1);
                    _getJsonData();
                },

                _lastPage = function () {
                    _pagingFilter.StartIndex(_pageCount());
                    _getJsonData();
                },

                _sortToggle = function (sortColumn) {
                    return function () {
                        if (_pagingFilter.SortColumn() === sortColumn) {
                            _pagingFilter.IsSortAscending(!_pagingFilter.IsSortAscending());
                        } else {
                            _pagingFilter.IsSortAscending(true);
                        }

                        _pagingFilter.SortColumn(sortColumn || '1');
                        _pagingFilter.StartIndex(1);
                        _getJsonData();
                    };
                },

                _search = function () {
                    _pagingFilter.StartIndex(1);
                    _getJsonData();
                }

                _goToPage = function (page) {
                    _pagingFilter.StartIndex(page);
                    _getJsonData();
                };

            //public members
            this.PagingFilter = _pagingFilter;
            this.PageSizeDropDown = _pageSizeDropDown;
            this.MappingResponse = _mappingResponse;
            this.Page = _page;
            this.Search = _search;
            this.SearchCallback = _searchCallback;
            this.Validation = _validation;
            this.PageCount = _pageCount;
            this.PageIndex = _pagingFilter.StartIndex;
            this.GoToPage = _goToPage;
            this.ThCss = _thCss;
            this.NextPage = _nextPage;
            this.PreviousPage = _previuosPage;
            this.FirstPage = _firstPage;
            this.LastPage = _lastPage;
            this.SortToggle = _sortToggle;
            this.TotaleElementi = _totaleElementi;
        };

    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));