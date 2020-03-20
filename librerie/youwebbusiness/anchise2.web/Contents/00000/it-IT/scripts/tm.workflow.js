function jsWorklow(initVals) {

    var parameters = $.extend({
        steps: [],
        compensation: $.noop
    }, initVals);


    // checkValues
    if (!$.isArray(parameters.steps)) {
        parameters.steps = [];
    }

    $.each(parameters.steps, function (index, item) {

        if (typeof item.method !== 'function')
            throw 'step ' + index + ' has not method as function';

        item.result = null;

    });

    return {
        _me: this,
        _steps: parameters.steps,
        _compensation: parameters.compensation,
        _lastStep: -1,
        _iseow: false,
        _setCurrentResult: function (result) {
            if (this._lastStep < this._steps.length) {
                this._steps[this._lastStep].result = result;
            }
        },
        _exec: function (stepIndex) {
            if (this._iseow) {
                throw 'reached compensation';
            }
            if (stepIndex >= this._steps.length) {
                this._execCompensation();
                return;
            } else {
                this._lastStep = stepIndex;
                var currentStep = this._steps[this._lastStep];
                try {
                    currentStep.method(this, stepIndex, currentStep);
                } catch (e) {
                    currentStep.exception = e;
                    this.next(false);
                }
            }
        },
        _execCompensation: function () {
            this._iseow = true;
            // valuto i true con massima priority
            var callIndex = -1;
            var maxPriority = 0;
            $.each(this._steps, function (index, item) {
                if (typeof item.result === "boolean" && item.result) {
                    if (item.onSuccess !== 'undefined') {
                        var currentPriority = item.onSuccess.priority || 0;
                        if (currentPriority > maxPriority && typeof item.onSuccess.method === "function") {
                            maxPriority = currentPriority;
                            callIndex = index;
                        }
                    }
                }
            });
            if (callIndex > -1) {
                this._steps[callIndex].onSuccess.method(this, callIndex, this._steps[callIndex]);
            } else {
                if (typeof this._compensation === "function")
                    this._compensation(this);
            }
        },

        currentStep: function () {
            return this._lastStep;
        },
        start: function () {
            if (this._lastStep != -1)
                throw 'current workflow position not at begin';
            this._exec(0);
        },
        next: function (result) {
            if (result === undefined)
                result = true;
            this._setCurrentResult(result);
            this._exec(this._lastStep + 1);
        },
        end: function () {
            var result = false;
            this._setCurrentResult(result);
            this._execCompensation();
        },
        reset: function () {
            this._lastStep = -1;
            this._iseow = false;
        }
    };
}