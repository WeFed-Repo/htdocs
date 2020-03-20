var PropertySelector = function (obj, dottedPropertyName) {
    var splitted = dottedPropertyName.split(".");

    var temp = obj[splitted[0]];
    for (var i = 1; i < splitted.length; i++) {
        temp = temp[splitted[i]];
    }

    return temp;
}


ko.observableArray.fn.sortAscProperty = function (prop) {
    this.sort(function (obj1, obj2) {
        if (PropertySelector(obj1, prop) >= PropertySelector(obj2, prop))
            return 1;
        else
            return -1;
    });
}

ko.observableArray.fn.sortDescProperty = function (prop) {
    this.sort(function (obj1, obj2) {
        if (PropertySelector(obj1, prop) <= PropertySelector(obj2, prop))
            return 1;
        else
            return -1;
    });
}

ko.observableArray.fn.sortAscObservableProperty = function (prop) {
    this.sort(function (obj1, obj2) {
        if (PropertySelector(obj1, prop)() >= PropertySelector(obj2, prop)())
            return 1;
        else
            return -1;
    });
}

ko.observableArray.fn.sortDescObservableProperty = function (prop) {
    this.sort(function (obj1, obj2) {
        if (PropertySelector(obj1, prop)() <= PropertySelector(obj2, prop)())
            return 1;
        else
            return -1;
    });
}