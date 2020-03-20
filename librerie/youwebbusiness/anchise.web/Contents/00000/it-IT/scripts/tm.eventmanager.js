//var EventManager = {
//    subscribe: function (eventName, fn) {
//        // alert("Subscribe: " + eventName);
//        $(this).unbind(eventName);
//        $(this).bind(eventName, fn);
//    },
//    unsubscribe: function (eventName) {
//        // alert("Unsubscribe: " + eventName);
//        $(this).unbind(eventName);
//    },
//    unsubscribeAll: function (eventPrefix) {
//        //        var count;
//        //        count = 0;
//        //        $.each(jQuery.data(EventManager, 'events'), function (index, element) {
//        //            count = count + 1;
//        //        });
//        //        alert("count before: " + count);

//        $.each(jQuery.data(EventManager, 'events'), function (index, element) {
//            var eventName = element[0].type;
//            if (eventName.indexOf(eventPrefix) == 0) {
//                //alert("Unsubscribing " + eventName + ", since it starts with " + eventPrefix);
//                EventManager.unsubscribe(eventName);
//            }
//        });

//        //        count = 0;
//        //        $.each(jQuery.data(EventManager, 'events'), function (index, element) {
//        //            count = count + 1;
//        //        });
//        //        alert("count after: " + count);
//    },
//    publish: function (eventName, data) {
//        // alert("Published: " + eventName);
//        $(this).trigger(eventName, data);
//    }
//};

//var PageExt = {
//    navigate: function () {

//    },
//    refresh: function () {
//        var dataToPost = null;

//        if (this.section != undefined) {
//            var viewModel = rootViewModel[this.section];
//            if (viewModel != undefined) {
//                var jsonViewModel = ko.mapping.toJS(viewModel);
//                var stringViewModel = $.toJSON(jsonViewModel); // JSON.stringify(jsonViewModel);
//                dataToPost = stringViewModel;
//            }
//        }
//        
//        //alert("Refresh section " + this.section + " with action " + this.action);
//        
//        $.ajax({
//            url: this.action,
//            data: dataToPost,
//            type: "POST",
//            contentType: "application/json; charset=utf-8",
//            dataType: "json",
//            converters: { 'text json': true }
//        })
//        .error(function (data) {
//            $("#MainSection").html(data.responseText);
//        })
//        .done(function (data) {
//            $("#MainSection").html(data);
//        });
//    },
//    setAction: function (action) {
//        this.action = action;
//    },
//    setSection: function (section) {
//        this.section = section;
//    }
//};

//var PostBuildActions = {

//    fns: new Array(),
//    add: function (fn) {

//        this.fns.push(fn);
//    },
//    exec: function () {
//        if (this.fns != null && this.fns != undefined) {
//            $.each(this.fns, function (index, item) {
//            item();
//        });
//    }
//    }

//};