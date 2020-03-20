function compareObjects(o1, o2, skipped) {

    if (skipped == undefined)
        skipped = [];
    for (var p in o1) {
        if (o1.hasOwnProperty(p)) {
            if (o1[p] !== o2[p] && $.inArray(p + '', skipped) == -1) {
                return false;
            }
        }
    }
    for (var p in o2) {
        if (o2.hasOwnProperty(p)) {
            if (o1[p] !== o2[p] && $.inArray(p + '', skipped) == -1) {
                return false;
            }
        }
    }
    return true;
}
