var App;
(function (App) {
    (function (Core) {
        var _calcoloPasqua = function (year) {
            var a = year % 19;
            var b = Math.floor(year / 100);
            var c = year % 100;
            var d = Math.floor(b / 4);
            var e = b % 4;
            var f = Math.floor((b + 8) / 25);
            var g = Math.floor((b - f + 1) / 3);
            var h = (19 * a + b - d - g + 15) % 30;
            var i = Math.floor(c / 4);
            var j = c % 4;
            var k = (32 + 2 * e + 2 * i - h - j) % 7;
            var m = Math.floor((a + 11 * h + 22 * k) / 451);
            var month = Math.floor((h + k - 7 * m + 114) / 31);
            var day = ((h + k - 7 * m + 114) % 31) + 1;
            var easter = new Date(year + "-" + month + "-" + day);
            var dayOffset = 1; //
            var millisecondOffset = dayOffset * 24 * 60 * 60 * 1000;
            easter.setTime(easter.getTime() + millisecondOffset);

            return easter.getTime();
        }

        // Module method
        Core.NoWeekendsOrHolidays = function (date) {
            var noWeekend = $.datepicker.noWeekends(date);
            if (noWeekend[0]) {
                var natDays = [
                    [1, 1], [6, 1], [25, 4], [1, 5], [2, 6], [15, 8], [1, 11], [8, 12], [25, 12], [26, 12]
                ];
                var today = new Date();
                var year = today.getFullYear();
                var easter = new Date(_calcoloPasqua(year));
                if (today > easter) {
                    easter = new Date(_calcoloPasqua(year + 1));
                    natDays.push([easter.getDay(), easter.getMonth() + 1]);
                } else {
                    natDays.push([easter.getDay(), easter.getMonth() + 1]);
                }
                for (i = 0; i < natDays.length; i++) {
                    if (date.getMonth() == natDays[i][1] - 1
                            && date.getDate() == natDays[i][0]) {
                        return [false, ''];
                    }
                }
                return [true, ''];
            } else {
                return noWeekend;
            }
        };
    })(App.Core || (App.Core = {}));
    var Core = App.Core;
})(App || (App = {}));