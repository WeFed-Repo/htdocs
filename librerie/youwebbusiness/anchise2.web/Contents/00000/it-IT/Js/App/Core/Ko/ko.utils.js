// get value of a element check if it is observable
var _getRealValue = function (element) {
    return ko.isObservable(element) ?
        element() :
        element;
}

var _getValueByKey = function (item, key) {
    if (key.indexOf('.') != -1) {
        var keys = key.split('.');
        var result = '';

        keys.forEach(function(key) {
            if (result) {
                result = _getRealValue(result[key]);
            } else {
                result = _getRealValue(item[key]);
            }
        });

        return result;
    } else {
        return _getRealValue(item[key]);
    }
}

// make distinct operation on property values
var _arrayGetDistinctPropertyValues = function (array, property) {
    array = array || [];
    property = property || 0;

    return ko.utils
             .arrayGetDistinctValues(ko.utils
                                       .arrayMap(array, function (item) {
                                           return _getRealValue(item[property]);
                                       }));
};

// make distinct operation in property values and return the first object matching with that value
var _arrayGetDistinctValuesBy = function (array, property) {
    array = array || [];
    property = property || 0;
    var result = [];

    var values = _arrayGetDistinctPropertyValues(array, property);

    ko.utils.arrayForEach(values, function (value) {
        result.push(ko.utils.arrayFirst(array, function (item) {
            return _getRealValue(item[property]) === value;
        }));
    });

    return result;
};

// Group element of an array based on returned element for the function f
//var result = groupBy(list, function (item) {
//    return [item.lastname, item.age];
//});
var _arrayGroupBy = function (array, f) {
    var groups = {};

    var normalizedArray = ko.toJS(array);

    ko.utils.arrayForEach(normalizedArray, function (item) {
        var group = ko.toJSON(f(item));
        groups[group] = groups[group] || [];
        groups[group].push(item);
    });
    return Object.keys(groups).map(function (group) {
        return groups[group];
    })
}

// Sum 
var _arraySum = function (array, f) {
    var normalizedArray = ko.toJS(array);

    if (typeof f !== 'function') {
        f = function (item) {
            return item;
        }
    }

    var sum = 0;
    for (var i = 0; i < normalizedArray.length; i++) {
        sum += parseFloat(f(normalizedArray[i]));
    }

    return sum;
};

var _arrayCount = function () {
    var ret = 0;
    var arrayContent = this();

    if (arrayContent) {
        ret = arrayContent.length;
    }

    return ret;
};

var _getResource = function (resource) {
    return _getValueByKey(Resources, resource);
};

// public method
ko.utils.arrayGetDistinctPropertyValues = _arrayGetDistinctPropertyValues;
ko.utils.arrayGetDistinctValuesBy = _arrayGetDistinctValuesBy;
ko.utils.arrayGroupBy = _arrayGroupBy;
ko.utils.arraySum = _arraySum;
ko.utils.getValueByKey = _getValueByKey;
ko.utils.GetResource = _getResource;
ko.observableArray.fn.count = _arrayCount;