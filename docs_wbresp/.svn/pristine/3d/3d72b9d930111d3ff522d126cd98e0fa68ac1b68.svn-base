/**
 * @file WebRTC client/server iframe communication api  for InfoCert COP Mobile
 *
 * @version 1.4.1
 * @license Copyright (c) 2016 InfoCert SPA
 * @author Cristiano Canofari
 */
(function(){





    var copWebRTCframeBroker;
    var listeningSignalEvents=["loading","idle","conferenceStarted","conferenceClosed","testConcluded"];

    /**
     * Create an object to enable javascript cross Iframe communication
     *
     * @class COPWebRTCIframeBroker
     * @param {Array} trustedOriginDomais It indicates the trusted Domains from which messages are accepted
     * @example <caption>Example creating object COPWebRTCIframeBroker.</caption>
     * var trustedDomains = ['http://192.168.1.2','http://localhost']
     * var copBroker=new COPCOPWebRTCIframeBroker(trustedDomains) ;
     */

    window.COPWebRTCIframeBroker = function(trustedOriginDomains) {
        try {


            var trustedOriginDomains = trustedOriginDomains;
            var checkDomain= function(domain){
                for (var i = 0, l = trustedOriginDomains.length; i < l; i++) {
                    if(domain===trustedOriginDomains[i]){
                        return true;
                    }
                }
                return false;
            };

            var events = {"loading":null,"idle":null,"conferenceStarted":null,"testConcluded":null};
            var signalEvents ={};
            this._getListeningEvents= function(){
                return events;
            };


            this._copWebRTC = null;
            this._targetIframe=null;
            this._idLocalVideoElement = null;
            this._localVideoProperties = null;
            this._idRemoteVideoElement = null;
            this._remoteVideoProperties = null;
            this._callReference=null;
            this._iePluginLoaded=false;
            this._testInstance=null;
            copWebRTCframeBroker = this;
            var responseMessage=function (messageCodeEventToResponse, data){
                var sentObject;
                if (data) {
                    sentObject = {
                        messageCode: messageCodeEventToResponse,
                        data: data
                    };
                }
                else {
                    sentObject = {
                        messageCode: messageCodeEventToResponse
                    };
                }
                var objectToSend;
                var ua = window.navigator.userAgent;
                var msie = ua.indexOf("MSIE ");

                if (msie > 0) {
                    objectToSend= JSON.stringify(sentObject);

                }else{
                    objectToSend=sentObject;
                }
                window.widgetToReply.postMessage(objectToSend, window.URLToReply);


            };
            function receiveMessage(event) {
                if (checkDomain(event.origin)) {
                    var objectReceived ={
                        messageCode:null
                    }
                    var ua = window.navigator.userAgent;
                    var msie = ua.indexOf("MSIE ");


                    if (msie > 0) {
                        if(event.data!=""&& !(event.data.indexOf('OTHelpers') === 0)) {
                            objectReceived = JSON.parse(event.data);
                        }

                    }
                    else{
                        objectReceived=event.data;
                    }
                    if (objectReceived.messageCode!=null&&(typeof objectReceived.messageCode != 'undefined') ) {
                        dispatchEvent("loading");

                        window.widgetToReply=event.source;
                        window.URLToReply=event.origin;
                        switch (objectReceived.messageCode) {
                            case 1:
                                copWebRTCframeBroker._callReference = objectReceived.parameters.callReference;
                                startVideoConference(copWebRTCframeBroker._callReference, function (response) {
                                    responseMessage(COPWebRTCIframeBroker.MessageCODES.START_VIDEO_CONFERENCE_RESPONSE, response);
                                    dispatchEvent("idle");
                                });
                                break;
                            case -1:
                                dispatchEvent(COPWebRTCIframeBroker.MessageCODES.START_VIDEO_CONFERENCE_RESPONSE, objectReceived.data);
                                dispatchEvent("idle");
                                break;
                            case 2:
                                stopVideoConference(function (err) {
                                    responseMessage(COPWebRTCIframeBroker.MessageCODES.STOP_VIDEO_CONFERENCE_RESPONSE, err);
                                    dispatchEvent("idle");
                                });
                                break;
                            case -2:
                                dispatchEvent(COPWebRTCIframeBroker.MessageCODES.STOP_VIDEO_CONFERENCE_RESPONSE, objectReceived.data);
                                dispatchEvent("idle");
                                break;
                            case 3:
                                testCOPWebRTCBrowser(function (result) {
                                    responseMessage(COPWebRTCIframeBroker.MessageCODES.TEST_BROWSER_RESPONSE, result);
                                    dispatchEvent("idle");
                                });
                                break;
                            case -3:
                                dispatchEvent(COPWebRTCIframeBroker.MessageCODES.TEST_BROWSER_RESPONSE, objectReceived.data);
                                dispatchEvent("idle");
                                break;
                            case 4:
                                isReady(function(result) {
                                    responseMessage(COPWebRTCIframeBroker.MessageCODES.IS_READY_RESPONSE, result);
                                    dispatchEvent("idle");
                                });

                                break;
                            case -4:
                                dispatchEvent(COPWebRTCIframeBroker.MessageCODES.IS_READY_RESPONSE, objectReceived.data);
                                dispatchEvent("idle");
                                break;
                            case 5:
                                stopBrowserTest(function (result) {
                                    responseMessage(COPWebRTCIframeBroker.MessageCODES.STOP_TEST_BROWSER_RESPONSE, result);
                                    dispatchEvent("idle");
                                });
                                break;
                            case -5:
                                dispatchEvent(COPWebRTCIframeBroker.MessageCODES.STOP_TEST_BROWSER_RESPONSE, objectReceived.data);
                                dispatchEvent("idle");
                                break;
                            case 6:
                                testWebcam(function (result) {
                                    responseMessage(COPWebRTCIframeBroker.MessageCODES.TEST_WEBCAM_RESPONSE, result);
                                    dispatchEvent("idle");
                                });
                                break;
                            case -6:
                                dispatchEvent(COPWebRTCIframeBroker.MessageCODES.TEST_WEBCAM_RESPONSE, objectReceived.data);
                                dispatchEvent("idle");
                                break;
                            case 7:
                                sendSignal();
                                break;

                        }

                    }


                }
            }


            if(window.addEventListener) {
                window.addEventListener("message", receiveMessage, false);
            }
            else{
                window.attachEvent("onmessage",receiveMessage);
            }


        }catch(err){

            throw new Error("new COPWebRTCIframeBroker: "+ err.message);

        }


    };


    COPWebRTCIframeBroker.prototype.addEventListener =function (eventName, callback) {
        //this._getListeningEvents()[eventName] = []
        //this._getListeningEvents()[eventName].push(callback);
        (this._getListeningEvents()[eventName] =this._getListeningEvents()[eventName] || []).push(callback);

    };
    COPWebRTCIframeBroker.prototype.removeEventListener =function (eventName) {
        //this._getListeningEvents()[eventName] = []
        //this._getListeningEvents()[eventName].push(callback);
        this._getListeningEvents()[eventName] =[];

    };

    function isIE(){
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");
        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
            return true;
        }
        else{
            return false;
        }
    }

    function dispatchEvent(eventName, args) {
        var callbacks = copWebRTCframeBroker._getListeningEvents()[eventName];
        if(callbacks) {
            for (var i = 0, l = callbacks.length; i < l; i++) {
                callbacks[i].call(null, args);
            }
            var listenerToBeRemoved=true;
            for (var i=0; i<listeningSignalEvents.length&&listenerToBeRemoved;i++){
                if(listeningSignalEvents[i]===eventName){
                    listenerToBeRemoved=false;
                }
            }
            if(eventName!=COPWebRTCIframeBroker.MessageCODES.START_VIDEO_CONFERENCE_RESPONSE&&listenerToBeRemoved) {
                copWebRTCframeBroker._getListeningEvents()[eventName] = [];
            }
        }

    }

    COPWebRTCIframeBroker.MessageCODES = {
        START_VIDEO_CONFERENCE:1,
        START_VIDEO_CONFERENCE_RESPONSE:-1,
        STOP_VIDEO_CONFERENCE:2,
        STOP_VIDEO_CONFERENCE_RESPONSE:-2,
        TEST_BROWSER:3,
        TEST_BROWSER_RESPONSE:-3,
        IS_READY:4,
        IS_READY_RESPONSE:-4,
        STOP_TEST_BROWSER:5,
        STOP_TEST_BROWSER_RESPONSE:-5,
        TEST_WEBCAM:6,
        TEST_WEBCAM_RESPONSE:-6,
        SEND_SIGNAL:7

    };
    /**
     * Set local video element reference and properties
     *
     * @method setLocalStreamReference
     * @param {string} idLocalVideoElement The id of the div DOM element which will receive the local video stream.
     * @param {Object} localVideoProperties This object contains the following properties (each of which are optional):<p>
     *     height (Number) ï¿½ The desired height, in pixels, of the displayed Publisher video stream.<p>
     *     width (Number) ï¿½ The desired width, in pixels, of the displayed Publisher video stream.
     *
     * @memberOf COPWebRTCIframeBroker
     * @instance
     */
    COPWebRTCIframeBroker.prototype.setLocalStreamReference= function(idLocalVideoElement,localVideoProperties){
        this._idLocalVideoElement=idLocalVideoElement;
        this._localVideoProperties=localVideoProperties;
    };

    /**
     * Set remote video element reference and properties
     *
     * @method setRemoteStreamReference
     * @param {string} idRemoteVideoElement The id of the div DOM element which will receive the local video stream.
     * @param {Object} remoteVideoProperties This object contains the following properties (each of which are optional):<p>
     *     height (Number) ï¿½ The desired height, in pixels, of the displayed Publisher video stream.<p>
     *     width (Number) ï¿½ The desired width, in pixels, of the displayed Publisher video stream.
     * @memberOf COPWebRTCIframeBroker
     * @instance
     */
    COPWebRTCIframeBroker.prototype.setRemoteStreamReference= function(idRemoteVideoElement,remoteVideoProperties){
        this._idRemoteVideoElement=idRemoteVideoElement;
        this._remoteVideoProperties=remoteVideoProperties;
    };


    /**
     * Request to the remote iframe if is Ready to accept request
     *
     * @private
     * @method requestIsReady
     * @param {string} idTargetIframe the id DOM of the iframe which will execute our requests.
     * @param {Function} callback Callback function to execute when the test has concluded.
     *
     */

    var  requestIsReady = function (idTargetIframe,callback){
        try {
            if (isIE()) {

                var frame_src = document.getElementById(idTargetIframe).src;
                var win = document.getElementById(idTargetIframe).contentWindow;
                var sentObject = {
                    messageCode: COPWebRTCIframeBroker.MessageCODES.IS_READY
                };
                copWebRTCframeBroker.addEventListener(COPWebRTCIframeBroker.MessageCODES.IS_READY_RESPONSE, callback);

                var ua = window.navigator.userAgent;
                var msie = ua.indexOf("MSIE ");

                if (msie > 0) {
                    win.postMessage(
                        JSON.stringify(sentObject),
                        frame_src
                    );
                }
                else {
                    win.postMessage(
                        sentObject,
                        frame_src
                    );
                }
            } else{
                callback();
            }

        }catch(err){
            callback(err);
            throw new Error("COPWebRTCIframeBroker.requestIsReady: "+  err);
        }

    };

    /**
     * Request to the remote iframe to start WebRTC video conference
     *
     * @method requestStartingVideoConference
     * @param {Object} callReference This object contains the following properties (each of which are requested):<p>
     *     customer (string). <p>
     *     webRTCRoom (string).<p>
     *     authWebRTCRoom (string).
     * @param {String} idTargetIframe the id DOM of the iframe which will execute our requests.
     * @param {Function} callback Callback function to execute message are received from the WebRTC ROOM.
     *
     * @example <caption>Example of request to start a  video conference </caption>
     * copBroker.requestStartingVideoConference(callReference, 'iframeId', function (message) {
     *   if(message==='userRecognized'){
     *      alert(User Recognized!);
     *   }
     *   else if(message==='error'){
     *      alert(Error message sent from the iframe!);
     *   }
     *   else{
     *      alert(Generic Error happened!);
     *   }
     *});
     * @memberOf COPWebRTCIframeBroker
     * @instance
     */
    COPWebRTCIframeBroker.prototype.requestStartingVideoConference= function (callReference,idTargetIframe,callback){
        try {

            requestIsReady(idTargetIframe, function() {
                copWebRTCframeBroker._targetIframe = idTargetIframe;
                var frame_src = document.getElementById(copWebRTCframeBroker._targetIframe).src;
                var win = document.getElementById(copWebRTCframeBroker._targetIframe).contentWindow;
                var sentObject = {
                    messageCode: COPWebRTCIframeBroker.MessageCODES.START_VIDEO_CONFERENCE,
                    parameters: {callReference: callReference}
                };
                copWebRTCframeBroker.addEventListener(COPWebRTCIframeBroker.MessageCODES.START_VIDEO_CONFERENCE_RESPONSE, callback);

                var ua = window.navigator.userAgent;
                var msie = ua.indexOf("MSIE ");

                if (msie > 0) {
                    win.postMessage(
                        JSON.stringify(sentObject),
                        frame_src
                    );
                }
                else {
                    win.postMessage(
                        sentObject,
                        frame_src
                    );
                }
            });

        }catch(err){
            callback(err);
            throw new Error("COPWebRTCIframeBroker.requestStartingVideoConference: "+  err);
        }


    };

    /**
     * Request to the remote iframe to stop WebRTC video conference
     *
     * @method requestStopVideoConference
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @memberOf COPWebRTCIframeBroker
     * @instance
     * @example <caption>Example of request to stop a video conference </caption>
     * copBroker.requestStopVideoConference( function (err) {
     * var message=''
     * if(err){
     *  message='Video Conference stopped OK';
     * }
     * else{
     *  message='Error stopping Video Conference';
     * }
     * alert(message);
     * );
     *
     */
    COPWebRTCIframeBroker.prototype.requestStopVideoConference= function (callback){
        try{
            var frame_src = document.getElementById(this._targetIframe).src;
            var win = document.getElementById(this._targetIframe).contentWindow;
            var sentObject={messageCode:COPWebRTCIframeBroker.MessageCODES.STOP_VIDEO_CONFERENCE,parameters:{callReference:this._callReference}};
            this.addEventListener(COPWebRTCIframeBroker.MessageCODES.STOP_VIDEO_CONFERENCE_RESPONSE,callback);
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (msie > 0) {
                win.postMessage(
                    JSON.stringify(sentObject),
                    frame_src
                );
            }
            else {
                win.postMessage(
                    sentObject,
                    frame_src
                );
            }

        }catch(err){
            callback(err);
            throw new Error("COPWebRTCIframeBroker.requestStopVideoConference: "+  err);
        }
    };

    /**
     * Request to test the client compatibility for COP WebRTC
     *
     * @method requestCOPWebRTCTest
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @param {string} idTargetIframe the id DOM of the iframe which will execute our test request.
     * @memberOf COPWebRTCIframeBroker
     * @instance
     * @example <caption>Example of request to test browser </caption>
     * copBroker.requestCOPWebRTCBrowserTest( 'idIframe',function (callback) {
     * var message=''
     * if (result === 'pass') {
     *   alert ('Test Superato!');
     * }
     * else if(result === 'warning'){
     *  alert('Test superato ma con riserva!')
     * }
     * else{
     *  alert ('Test Fallito!');
     * }
     * });
     *
     */
    COPWebRTCIframeBroker.prototype.requestCOPWebRTCBrowserTest= function(idTargetIframe,callback){
        try {
            requestIsReady(idTargetIframe, function() {
                copWebRTCframeBroker._targetIframe=idTargetIframe;
                var frame_src = document.getElementById(copWebRTCframeBroker._targetIframe).src;

                var win = document.getElementById(copWebRTCframeBroker._targetIframe).contentWindow;
                var sentObject = {messageCode: COPWebRTCIframeBroker.MessageCODES.TEST_BROWSER};
                copWebRTCframeBroker.addEventListener(COPWebRTCIframeBroker.MessageCODES.TEST_BROWSER_RESPONSE, callback);
                var ua = window.navigator.userAgent;
                var msie = ua.indexOf("MSIE ");

                if (msie > 0) {
                    win.postMessage(
                        JSON.stringify(sentObject),
                        frame_src
                    );
                }
                else {
                    win.postMessage(
                        sentObject,
                        frame_src
                    );
                }
            });
        }catch(err){
            callback(err);
            throw new Error("COPWebRTCIframeBroker.requestCOPWebRTCBrowserTest: "+  err);
        }


    };
    /**
     * Request to test the webcam accessibility by the browser client
     *
     * @method requestTestWebcam
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @param {string} idTargetIframe the id DOM of the iframe which will execute our test request.
     * @memberOf COPWebRTCIframeBroker
     * @instance
     * @example <caption>Example of request to test browser webcam accessibility </caption>
     * copBroker.requestTest( 'idIframe',function (callback) {
     * var message=''
     * if (result === 'pass') {
     *   alert ('Test Superato!');
     * }
     * else if(result === 'warning'){
     *  alert('Test superato ma con riserva!')
     * }
     * else{
     *  alert ('Test Fallito!');
     * }
     * });
     *
     */
    COPWebRTCIframeBroker.prototype.requestTestWebcam= function(idTargetIframe,callback){
        try {

            requestIsReady(idTargetIframe, function() {
                copWebRTCframeBroker._targetIframe=idTargetIframe;
                var frame_src = document.getElementById(copWebRTCframeBroker._targetIframe).src;

                var win = document.getElementById(copWebRTCframeBroker._targetIframe).contentWindow;
                var sentObject = {messageCode: COPWebRTCIframeBroker.MessageCODES.TEST_WEBCAM};
                copWebRTCframeBroker.addEventListener(COPWebRTCIframeBroker.MessageCODES.TEST_WEBCAM_RESPONSE, callback);
                var ua = window.navigator.userAgent;
                var msie = ua.indexOf("MSIE ");

                if (msie > 0) {
                    win.postMessage(
                        JSON.stringify(sentObject),
                        frame_src
                    );
                }
                else {
                    win.postMessage(
                        sentObject,
                        frame_src
                    );
                }
            });
        }catch(err){
            callback(err);
            throw new Error("COPWebRTCIframeBroker.requestTestWebcam: "+  err);
        }


    };
    /**
     * Request to stop the compatibility test browser for COP WebRTC
     *
     * @method requestStopBrowserTest
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @memberOf COPWebRTCIframeBroker
     * @instance
     * @example <caption>Example of request to test browser </caption>
     * copBroker.requestStopBrowserTest( function (callback) {
     * var message=''
     * if(err){
     *  message='TestBrowser stopped OK';
     * }
     * else{
     *  message='Error stopping TestBrowser';
     * }
     * alert(message);
     * );
     *
     */
    COPWebRTCIframeBroker.prototype.requestStopBrowserTest= function(callback){
        try{
            var frame_src = document.getElementById(this._targetIframe).src;
            var win = document.getElementById(this._targetIframe).contentWindow;
            var sentObject={messageCode:COPWebRTCIframeBroker.MessageCODES.STOP_TEST_BROWSER};
            this.addEventListener(COPWebRTCIframeBroker.MessageCODES.STOP_TEST_BROWSER_RESPONSE,callback);
            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (msie > 0) {
                win.postMessage(
                    JSON.stringify(sentObject),
                    frame_src
                );
            }
            else {
                win.postMessage(
                    sentObject,
                    frame_src
                );
            }

        }catch(err){
            callback(err);
            throw new Error("COPWebRTCIframeBroker.requestStopBrowserTest: "+  err);
        }



    };
    /**
     * Response to the remote request if it's ready to accept requests
     *
     * @private
     * @method isReady
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @event "conferenceStarted"
     *
     */
    function isReady(callback){
        try {

            if(copWebRTCframeBroker._testInstance==null) {
                copWebRTCframeBroker._testInstance = COPWebRTC.getTestInstance();
            }

            if(copWebRTCframeBroker._testInstance.isWebRTCReady()){
                callback(true);
            }
            else{
                copWebRTCframeBroker._testInstance.addEventListener('isReady',callback(true))
            }


        }catch(err){
            callback(err);
            throw new Error("COPWebRTCIframeBroker.isReady:"+  err);

        }

    }

    /**
     * Response to the remote request to start WebRTC video conference.
     *
     * @private
     * @method startVideoConference
     * @param {object} callReference. This object contains the following properties (each of which are requested):<p>
     *     customer (string)
     *     webRTCRoom (string)
     *     authWebRTCRoom (string)
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @fires "conferenceStarted"
     * @inner
     */
    function startVideoConference(callReference,callback){
        try {

            if(!copWebRTCframeBroker._copWebRTC) {
                copWebRTCframeBroker._copWebRTC = new COPWebRTC(callReference);


            }
            copWebRTCframeBroker.addEventListener('error',function(){
                callback('error');
            });

            copWebRTCframeBroker._copWebRTC.publishLocalStream(copWebRTCframeBroker._idLocalVideoElement,copWebRTCframeBroker._localVideoProperties,function(err){


            });
            copWebRTCframeBroker._copWebRTC.subscribeRemoteStream(copWebRTCframeBroker._idRemoteVideoElement,copWebRTCframeBroker._remoteVideoProperties,function(err){


            });


            dispatchEvent("conferenceStarted");
            callback();
        }catch(err){
            callback(err);
            //throw new Error("COPWebRTCIframeBroker.startVideoConference:"+  err);

        }

    }
    /**
     * Response to the remote request to stop WebRTC video conference.
     *
     * @private
     * @method stopVideoConference
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @inner
     */
    function stopVideoConference(callback) {
        try {

            if (!copWebRTCframeBroker._copWebRTC) {
                //throw new Error("No video conference to stop");
                callback('"No video conference to stop');
            }
            else{
                //var removingLocalVideoElement = $("#" + copWebRTCframeBroker._idLocalVideoElement);
                //var parentLocalVideoElement = removingLocalVideoElement.parent();
                //var removingRemoteVideoElement = $("#" + copWebRTCframeBroker._idRemoteVideoElement);
                //
                //
                //var parentRemoteVideoElement = removingRemoteVideoElement.parent();
                //
                //parentLocalVideoElement.empty();
                //parentRemoteVideoElement.empty();
                //
                //parentLocalVideoElement.append("<div id='" + copWebRTCframeBroker._idLocalVideoElement + "'></div>");
                //parentRemoteVideoElement.append("<div id='" + copWebRTCframeBroker._idRemoteVideoElement + "'></div>");
                copWebRTCframeBroker._copWebRTC.close(function(err){
                    if(err){
                        callback(err);
                        dispatchEvent("conferenceClosed");
                    }
                    else{
                        dispatchEvent("conferenceClosed");
                        callback();
                    }

                });

            }

        }catch(err){
            callback(err.message);
            //throw new Error("COPWebRTCIframeBroker.stopVideoConference:"+  err);

        }

    }
    /**
     * Response to the remote request to  test the client compatibility for COP WebRTC.
     *
     * @private
     * @method testCOPWebRTCBrowser
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @fires "testConcluded"
     * @inner
     *
     */
    function testCOPWebRTCBrowser(callback){

        var responses=[];
        if(copWebRTCframeBroker._testInstance==null) {
            copWebRTCframeBroker._testInstance = COPWebRTC.getTestInstance();
        }
        var handleResults = function (result) {

            if (result.value != 'pass') {
                responses.push(result);
            }
            return result.value;


        };

        //var localproperties = copWebRTCframeBroker._localVideoProperties;
        var localVideoElement=copWebRTCframeBroker._idLocalVideoElement;
        var localVideoProperties= copWebRTCframeBroker._localVideoProperties;
        copWebRTCframeBroker._testInstance.testBrowserCompatibility(function (result) {
            if (handleResults(result)!= 'fail') {
                copWebRTCframeBroker._testInstance.testServerConnectivity( function (result) {
                    if (handleResults(result)!= 'fail') {
                        copWebRTCframeBroker._testInstance.testTurnConnectivity(function (result) {
                            if (handleResults(result)!= 'fail') {
                                copWebRTCframeBroker._testInstance.testAccessToLocalAudioVideoDevice(localVideoElement, localVideoProperties,function (result) {
                                    handleResults(result);
                                    dispatchEvent("testConcluded",responses);
                                    callback(result.value);

                                });
                            }else{
                                dispatchEvent("testConcluded",responses);
                                callback(result.value);
                            }
                        });
                    }else{
                        dispatchEvent("testConcluded",responses);
                        callback(result.value);
                    }
                });
            }else{
                dispatchEvent("testConcluded",responses);
                callback(result.value);
            }


        });
    }
    /**
     * Response to the remote request to test the client browser webcam accessibility.
     *
     * @private
     * @method testWebcam
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @fires "testConcluded"
     * @inner
     *
     */
    function testWebcam(callback){

        var responses=[];
        if(copWebRTCframeBroker._testInstance==null) {
            copWebRTCframeBroker._testInstance = COPWebRTC.getTestInstance();
        }
        var handleResults = function (result) {

            if (result.value != 'pass') {
                responses.push(result);
            }
            return result.value;


        };
        var localVideoElement=copWebRTCframeBroker._idLocalVideoElement;
        var localVideoProperties= copWebRTCframeBroker._localVideoProperties;

        copWebRTCframeBroker._testInstance.testAccessToLocalAudioVideoDevice(localVideoElement, localVideoProperties,function (result) {
            handleResults(result);
            dispatchEvent("testConcluded",responses);
            callback(result.value);

        });
    }

    /**
     * Response to the remote request to stop Browser WebRTC Test Compatibility.  <caption>This method can be used only if we are on the server side of the webrtc call</caption>
     *
     * @private
     * @method stopBrowserTest
     * @param {Function} callback Callback function to execute when the test has concluded.
     * @inner
     */
    function stopBrowserTest(callback) {
        try {
            if(copWebRTCframeBroker._testInstance==null) {

                //throw new Error("No Tests to stop");
                callback('No Tests to stop');
            }
            else{
                var localVideoElement=copWebRTCframeBroker._idLocalVideoElement;
                var removingLocalVideoElement = $("#" +localVideoElement);
                var parentLocalVideoElement = removingLocalVideoElement.parent();

                parentLocalVideoElement.empty();

                parentLocalVideoElement.append("<div id='" + localVideoElement + "'></div>");
                copWebRTCframeBroker._testInstance.stopTestWebcamAccess(function(err){
                    if(err){
                        //throw new Error(err);
                        callback(err);
                    }
                    else{
                        callback();
                    }

                });

            }

        }catch(err){
            callback(err.message);
            //throw new Error("COPWebRTCIframeBroker.stopVideoConference:"+  err);

        }

    }

    function sendSignal(signalType) {
        try {

            if (!copWebRTCframeBroker._copWebRTC) {
                //throw new Error("No video conference to stop");
                alert("user not connected");
            }
            else{
               copWebRTCframeBroker._copWebRTC.sendSignal(signalType)

            }

        }catch(err){
            alert(err.message);
            //throw new Error("COPWebRTCIframeBroker.stopVideoConference:"+  err);

        }

    }

    /**
     * Get the reference parameters of the WebRTC call
     *
     *
     * @method getCallReference
     * @returns {Object}  This object contains the following properties (each of which are requested):<p>
     *     customer (string)
     *     webRTCRoom (string)
     *     authWebRTCRoom (string)
     * @memberOf COPWebRTCIframeBroker
     * @instance
     */
    COPWebRTCIframeBroker.prototype.getCallReference= function(){
        return this._callReference;
    }


    /**
     * Get the COPWebRTC created for the current WebRTC call. <caption>This method can be used only if we are on the server side of the webrtc call</caption>
     *
     *
     * @method getCOPWebRTC
     * @returns {COPWebRTC}  The COPWebRTC object instantiated
     * @memberOf COPWebRTCIframeBroker
     * @instance
     */
    COPWebRTCIframeBroker.prototype.getCOPWebRTC= function(){
        return this._copWebRTC;
    };


    /**
     * Set the COPWebRTC to use.  <caption>This method can be used only if we are on the server side of the webrtc call</caption>
     *
     *
     * @method setCOPWebRTC
     * @param {COPWebRTC} copwebrtc COPWebRTC to use with the current broker instance
     * @memberOf COPWebRTCIframeBroker
     * @instance
     */
    COPWebRTCIframeBroker.prototype.setCOPWebRTC= function(copWebRTC){
        this._copWebRTC=copWebRTC;
    }


    COPWebRTCIframeBroker.prototype.sendError= function(){
        dispatchEvent('error');
    }



})();