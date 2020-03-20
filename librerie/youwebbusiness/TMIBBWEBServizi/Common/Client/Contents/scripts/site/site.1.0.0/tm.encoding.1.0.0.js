function htmlEncode(itemToEncode) {
    if (itemToEncode) {
        return $('<a/>').text(itemToEncode).html();
    } else {
        return '';
    }
}