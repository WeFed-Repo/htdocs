var sessionManager = {
    session: [],
    set: function (key, value) {
        this.session[key] = value;
    },
    get: function (key) {
        return this.session[key];
    }
};