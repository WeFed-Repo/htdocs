var Logger = {
    debugMessageEnabled: true,
    debugMessage: function (message) {
        if (this.debugMessageEnabled && window.console) {
            window.console.log(this._getCurrentTime() + " - " + message);
        }
    },
    _getCurrentTime: function () {
        var currentDate = new Date();
        var hours = currentDate.getHours();
        var minutes = currentDate.getMinutes();
        var seconds = currentDate.getSeconds();

        if (minutes < 10) {
            minutes = "0" + minutes;
        }

        if (seconds < 10) {
            seconds = "0" + seconds;
        }

        var currentTime = hours + ":" + minutes + ":" + seconds;
        return currentTime;
    }
};

// MutualExcluded CheckBoxGroup
function enforceMutualExcludedCheckBox(checkBox, selector, propertyName) {
    //debugger;
    var isChecked = checkBox.prop("checked");
    var checkBoxes = selector;  
    checkBoxes.prop("checked", false);

    $.each(checkBoxes, function (index, checkbox) {
        var idDisposizione = checkbox.value;
        // debugger;
        var fullpropertyname = $(checkbox).data("fullpropertyname");
        var propertiesArray = eval(fullpropertyname);
        removeFromArray(idDisposizione, propertiesArray);
    });

    checkBox.prop("checked", isChecked);
};

function removeFromArray(value, list) {
    var index;
    if (list == null) {
        return;
    }
    index = list.indexOf(value);
    // Handle edge case so we dont do a range of 0 to -1
    if (index !== -1) {
        list.splice(index, 1);
    }
}