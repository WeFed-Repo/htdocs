<!-- TITOLO -->
<div id="webcamBox">
    <div id="testNegativo" style="display: none;">
        <h3 style="color: red;">riconoscimento via webcam impossibile</h3>
        <h3 style="color: red;" id="testoNegativo"></h3>
    </div>
    <div id="testAttenzione" style="display: none;">
        <p>Ti verr&agrave; richiesto di accendere la webcam e il microfono(opzionale) per motivi di test. Non verrai registrato.</p>
        <button type="button" id="testWebcam" onclick="testVideo()"> START WEBCAM TEST </button>
    </div>
    <div id="testPositivo" style="display: block;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="webcamTitle">Integrazione Webcam Infocert</h2>
            </div>
        </div>
        <a id="mediaRefreshBox">
            RICARICA
        </a>
        <div id="localMediaBox">
            <div class="mediaStreamWrap">
                <div id="localMediaStream"></div>
            </div>
            <div id="localMediaInfo" class="mediaInfo">Francesco</div>
        </div>
        <div id="remoteMediaBox">
            <div class="mediaStreamWrap">
                <div id="remoteMediaStream"></div>
            </div>
            <div id="remoteMediaInfo" class="mediaInfo">
                <div class="row">
                    <div class="col-md-8 operatoreInfo">
                        <span id="operatoreNome">OPERATORE</span> <span id="operatoreAzienda">- INFOCERT</span><br>
                        <span id="operatoreSessione">Sessione in corso, 12/04/2016 - h. 10:55</span>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn-whlit fright uppercase inlineB">INTERROMPI</button>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" id="snapLocale" style="display: none;"> Take Local Screenshot </button>
        <button type="button" id="snapRemoto" style="display: none;"> Take Remote Screenshot </button>
        <button type="button" id="requestSnapRemoto" style="display: none;"> Request Remote Screenshot </button>
        <form id="chatBox" name="chat_form" onsubmit="return false">
            <h4>CHAT MESSAGGI</h4>
            <hr>
            <div id="chat" class="chat">
                <div id="chatHistory" class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="messageName">Francesco</span><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <span class="messageDate">20-04-2016, 10:15:30</span>
                        </div>
                        <div class="col-md-9">
                            <div class="messageText">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </div>
                        </div>
                    </div>
                    <div class="row fromOperator chatSpacer">
                        <div class="col-md-12">
                            <span class="messageName">Operatore - IC</span><br>
                        </div>
                    </div>
                    <div class="row fromOperator">
                        <div class="col-md-3">
                            <span class="messageDate">20-04-2016, 10:15:30</span>
                        </div>
                        <div class="col-md-9">
                            <div class="messageText">
                                Aut illum id cum commodi sit placeat, distinctio laboriosam explicabo cumque
                            </div>
                        </div>
                    </div>
                    <div class="row fromOperator">
                        <div class="col-md-3">
                            <span class="messageDate">20-04-2016, 10:15:30</span>
                        </div>
                        <div class="col-md-9">
                            <div class="messageText">
                                Aut illum id cum commodi sit placeat, distinctio laboriosam explicabo cumque
                            </div>
                        </div>
                    </div>
                    <div class="row chatSpacer">
                        <div class="col-md-12">
                            <span class="messageName">Francesco</span><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <span class="messageDate">20-04-2016, 10:15:30</span>
                        </div>
                        <div class="col-md-9">
                            <div class="messageText">
                                dicta quasi, hic eaque tempore aliquid voluptatum ab vitae nesciunt minus!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <span class="messageDate">20-04-2016, 10:15:30</span>
                        </div>
                        <div class="col-md-9">
                            <div class="messageText">
                                dicta quasi, hic eaque tempore aliquid voluptatum ab vitae nesciunt minus!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <span class="messageDate">20-04-2016, 10:15:30</span>
                        </div>
                        <div class="col-md-9">
                            <div class="messageText">
                                dicta quasi, hic eaque tempore aliquid voluptatum ab vitae nesciunt minus!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group btn-chat-group">
                    <input type="text" id="message" name="message" class="form-control btn-chat-name">
                    <span id="sendText" class="input-group-btn"><span class="btn btn-chat"><span class="btn-chat-action">Invia</span></span></span>
                </div>
            </div>
        </form>
        <button type="button" id="riconosciuto" style="display: none;"> Riconoscimento avvenuto! </button>
        <form name="token_data">
            <input type="hidden" id="token" value="">
            <input type="hidden" id="apikey" value="45309162">
        </form>
    </div>
</div>
<div class="spacer-no-border">&nbsp;</div>
<!-- Footnotes -->
<div class="row">
    <div class="col-sm-12">
        <p class="note">(*) I campi contrassegnati con l'asterisco sono obbligatori.</p>
    </div>
</div>
<!-- Footnotes -->
<hr>
<!-- Pulsanti -->
<div class="row">
    <div class="col-xs-12">
        <div class="btn-console">
            <a href="#!" class="btn-whlit btn-whlit-arrowleft fleft uppercase">INDIETRO</a>
            <button type="submit" class="btn-grlit btn-grlit-arrow fright uppercase inlineB">SALVA E PROSEGUI</button>
        </div>
    </div>
</div>
<!-- Fine pulsanti -->
