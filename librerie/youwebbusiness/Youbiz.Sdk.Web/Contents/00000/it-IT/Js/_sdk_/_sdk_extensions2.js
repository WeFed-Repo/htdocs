// IE FIX
if (!Array.prototype.find) {
    Array.prototype.find = function (handler) {

        var item;
        for (var i = 0; i < this.length; i++) {

            var _item = this[i];
            if (handler(_item) === true) {
                item = _item;
                break;
            }

        }

        return item;
    };
}

// IE FIX
if (!Array.prototype.filter) {
    Array.prototype.filter = function (handler) {

        var items = [];
        for (var i = 0; i < this.length; i++) {

            var _item = this[i];
            if (handler(_item) === true) {
                item.push(_item);
            }

        }

        return items;
    };
}


//OBJECT


