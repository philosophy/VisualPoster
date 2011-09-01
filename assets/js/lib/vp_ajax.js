(function() {
    var VP = window.VP || {};

    VP.Ajax = VP.Ajax || {};

    var makeRequest = function(action, postObj) {
        var ajaxSettings = {
            url: this.url,
            type: this.type,
            dataType: 'json',
            data: postObj,
            timeout: this.timeout
        }
        ajaxSettings.beforeSend = this.cb.beforeSend[action];
        ajaxSettings.dataFilter = this.cb.dataFilter[action];
        ajaxSettings.success = this.cb.success[action];
        ajaxSettings.complete = this.cb.complete[action];
        ajaxSettings.error = this.cb.error[action];
        $.ajax(ajaxSettings);
    };

    VP.Ajax.Request = function(args){
        if (args !== undefined) {
            if (args.url !== undefined) {
                this.url = args.url;
            }
            if (args.method !== undefined) {
                this.method = args.method;
            }
            if (args.type !== undefined) {
                this.type = args.type;
            }
            if (args.timeout !== undefined) {
                this.timeout = args.timeout;
            }
            if (args.dataType !== undefined) {
                this.dataType = args.dataType;
            }
        }
    };

    VP.Ajax.Request.prototype = {

        type: 'POST',
        data: {},
        url: '',
        timeout: 30000,
        dataType: 'json',

        /* these are the default callbacks on each type of Ajaxs */
        /* called before success, alter here the data and return it */
        defaultDataFilterCb: function (data, type) {return data;},
        /* called before sending request */
        defaultBeforeSendCb: function(xmlHttpRequest) {},
        /* called when ajax is success or ok */
        defaultSuccessCb: function(data, textStatus, xmlHttpRequest) {},
        /* called when request has completed */
        defaultCompleteCb: function(xmlHttpRequest, textStatus) {},
        /* called when request encountered an error */
        defaultErrorCb: function(xmlHttpRequest, textStatus, errorThrown) {},

        /* user defined callbacks */
        cb: {
            success: {},
            error: {},
            complete: {},
            beforeSend: {},
            dataFilter: {}
        },

        send: function(action, postObj, beforeSend, complete, dataFilter, success, error, url) {
            this.cb.success[action] = (success !== undefined && success !== null && success !== '') ? success : this.defaultSuccessCb;
            this.cb.error[action] = (error !== undefined && error !== null && error !== '') ? error : this.defaultErrorCb;
            this.cb.complete[action] = (complete !== undefined && complete !== null && complete !== '') ? complete : this.defaultCompleteCb;
            this.cb.beforeSend[action] = (beforeSend !== undefined && beforeSend !== null && beforeSend !== '') ? beforeSend : this.defaultBeforeSendCb;
            this.cb.dataFilter[action] = (dataFilter !== undefined && dataFilter !== null && dataFilter !== '') ? dataFilter : this.defaultDataFilterCb;
            this.url = url;
            makeRequest.call(this, action, postObj);
        }
    };
})();