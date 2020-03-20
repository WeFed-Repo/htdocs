import React, { Component } from 'react';
import "./style.scss";
import {getNextState, getAvanzamentoPratica } from "../common/gestioneStati";


export default class extends Component {


    render() {

        let form = this.props.form,
            stato = (form.field_stato !== "BOZZA") ? getNextState(form) : form.field_stato,
            avanzamento = getAvanzamentoPratica(form),
            nint = (form.field_numintestatari !=="") ? form.field_numintestatari : "1",
            intcorrente = form.field_intestcorrente,
            ordineInt = form.field_ordineintestatari;

        return (
            <div className="ob-stepper">
                <p>Stato: {form.field_stato}
                    - Step: {stato}
                    - Intestatario corrente: {intcorrente}
                    - Ordine di compilazione: {ordineInt}</p>

                <div className="step">

                    <div className={"steps-wrap " + (avanzamento["BOZZA_VALIDATA"]==="corrente" ? "attivo" : "")}>
                        <div className="ob-owner">Prom.<br />finan.</div>
                        <div className="steps">
                            <div className={"step " + avanzamento["BOZZA_VALIDATA"]}><span>1 (Inizio)</span></div>
                        </div>
                    </div>
                    {   /* MONOINTESTATARIO O ORDINE INTESTATARI NORMALE */
                    
                        (stato !== "BOZZA" && (ordineInt ==="01" || ordineInt==="0" || ordineInt==="")) &&  
                        <>
                            <div className={"steps-wrap " + ((avanzamento["RACCOLTA_PRODOTTI"]==="corrente" ||
                            avanzamento["ADEMPIMENTI_NORMATIVI"] === "corrente"||
                            avanzamento["INT0_RIEPILOGO_DATI"] === "corrente" ||
                            avanzamento["INT0_CERTIF_CREDENZIALI"]==="corrente"
                            )? "attivo" :"")}>
                                    <div className="ob-owner">{nint === "1" ? "Mono" : "Primo"}<br />intestatario</div>
                                    <div className="steps">
                                        <div className={"step " + avanzamento["RACCOLTA_PRODOTTI"]}><span>2</span></div>
                                        <div className={"step " + avanzamento["ADEMPIMENTI_NORMATIVI"]}><span>3</span></div>
                                        <div className={"step " + avanzamento["INT0_RIEPILOGO_DATI"]}><span>4</span></div>
                                        <div className={"step " + avanzamento["INT0_CERTIF_CREDENZIALI"]}><span>5</span></div>
                                    </div>
                                </div>
                            <div className={"steps-wrap " + ((avanzamento["INT0_IDENTIF_CLIENTE"]==="corrente")? "attivo" :"")}>
                                <div className="ob-owner">Prom.<br />finan.</div>
                                <div className="steps">
                                    <div className={"step " + avanzamento["INT0_IDENTIF_CLIENTE"]}><span>6</span></div>
                                </div>
                            </div>
                            <div className={"steps-wrap " + ((avanzamento["INT0_FIRMA_PRECONTRATTUALE"]==="corrente" ||
                                avanzamento["INT0_FIRMA_VESSATORIE"]==="corrente" ||
                                avanzamento["INT0_FIRMA_INVESTIMENTO"] === "corrente"||
                                avanzamento["INT0_FIRMA_VESSATORIE_INVESTIMENTO"] === "corrente"
                                )? "attivo" :"")}>
                            <div className="ob-owner">{nint === "1" ? "Mono" : "Primo"}<br />intestatario</div>
                                <div className="steps">
                                    <div className={"step " + avanzamento["INT0_FIRMA_PRECONTRATTUALE"]}><span>7</span></div>
                                    <div className={"step " + avanzamento["INT0_FIRMA_VESSATORIE"]}><span>8</span></div>
                                    <div className={"step " + avanzamento["INT0_FIRMA_INVESTIMENTO"]}><span>9</span></div>
                                    <div className={"step " + avanzamento["INT0_FIRMA_VESSATORIE_INVESTIMENTO"]}><span>10</span></div>
                                </div>
                            </div>
                            <div className={"steps-wrap " + ((avanzamento["INT0_FIRMA_CONSULENTE"]==="corrente")? "attivo" :"")}>
                                <div className="ob-owner">Prom.<br />finan.</div>
                                <div className="steps">
                                    <div className={"step " + avanzamento["INT0_FIRMA_CONSULENTE"]}><span>11{(nint==="1")&& " (fine)"}</span></div>
                                    {nint==="1" && <div className={"step conclusione " + avanzamento["CONCLUSA"]}><span>Conclusa</span></div>}
                                </div>
                            </div>
                            {   // Caso con 2 intestatari: ordine normale
                                nint === "2" &&
                                <>
                                    <div className={"steps-wrap " + ((avanzamento["INT1_RIEPILOGO_DATI"] === "corrente" ||
                                    avanzamento["INT1_CERTIF_CREDENZIALI"] === "corrente")? "attivo" :"")}>
                                <div className="ob-owner">Secondo<br />intestatario</div>
                                        <div className="steps">
                                            <div className={"step " + avanzamento["INT1_RIEPILOGO_DATI"]}><span>12</span></div>
                                            <div className={"step " + avanzamento["INT1_CERTIF_CREDENZIALI"]}><span>13</span></div>
                                        </div>
                                    </div>
                                <div className={"steps-wrap " + ((avanzamento["INT1_IDENTIF_CLIENTE"]==="corrente")? "attivo" :"")}>
                                    <div className="ob-owner">Prom.<br />finan.</div>
                                    <div className="steps">
                                        <div className={"step " + avanzamento["INT1_IDENTIF_CLIENTE"]}><span>14</span></div>
                                    </div>
                                </div>
                                <div className={"steps-wrap " + ((avanzamento["INT1_FIRMA_PRECONTRATTUALE"]==="corrente" ||
                                    avanzamento["INT1_FIRMA_VESSATORIE"]==="corrente" ||
                                    avanzamento["INT1_FIRMA_INVESTIMENTO"] === "corrente"||
                                    avanzamento["INT1_FIRMA_VESSATORIE_INVESTIMENTO"] === "corrente"
                                    )? "attivo" :"")}>
                                <div className="ob-owner">Secondo<br />intestatario</div>
                                    <div className="steps">
                                        <div className={"step " + avanzamento["INT1_FIRMA_PRECONTRATTUALE"]}><span>15</span></div>
                                        <div className={"step " + avanzamento["INT1_FIRMA_VESSATORIE"]}><span>16</span></div>
                                        <div className={"step " + avanzamento["INT1_FIRMA_INVESTIMENTO"]}><span>17</span></div>
                                        <div className={"step " + avanzamento["INT1_FIRMA_VESSATORIE_INVESTIMENTO"]}><span>18</span></div>
                                    </div>
                                </div>
                                <div className={"steps-wrap " + ((avanzamento["INT1_FIRMA_CONSULENTE"]==="corrente")? "attivo" :"")}>
                                    <div className="ob-owner">Prom.<br />finan.</div>
                                    <div className="steps">
                                        <div className={"step " + avanzamento["INT1_FIRMA_CONSULENTE"]}><span>19 (fine)</span></div>
                                        {nint==="2" && <div className={"step conclusione " + avanzamento["CONCLUSA"]}><span>Conclusa</span></div>}
                                    </div>
                                </div>
                                </>
                            }

                        </>
                    }

                    {   /* DUE INTESTATARI CON PRECEDENZA SECONDO */
                    
                    (stato !== "BOZZA" && (ordineInt ==="10")) &&  
                    <>
                        <div className={"steps-wrap " + ((avanzamento["INT0_RIEPILOGO_DATI"] === "corrente" ||
                        avanzamento["INT0_CERTIF_CREDENZIALI"]==="corrente"
                        )? "attivo" :"")}>
                        <div className="ob-owner">{nint === "1" ? "Mono" : "Primo"}<br />intestatario</div>
                            <div className="steps">
                                
                                <div className={"step " + avanzamento["INT0_RIEPILOGO_DATI"]}><span>2</span></div>
                                <div className={"step " + avanzamento["INT0_CERTIF_CREDENZIALI"]}><span>3</span></div>
                            </div>
                        </div>
                        <div className={"steps-wrap " + ((avanzamento["INT0_IDENTIF_CLIENTE"]==="corrente")? "attivo" :"")}>
                            <div className="ob-owner">Prom.<br />finan.</div>
                            <div className="steps">
                                <div className={"step " + avanzamento["INT0_IDENTIF_CLIENTE"]}><span>4</span></div>
                            </div>
                        </div>
                        <div className={"steps-wrap " + ((avanzamento["INT0_FIRMA_PRECONTRATTUALE"]==="corrente" ||
                            avanzamento["INT0_FIRMA_VESSATORIE"]==="corrente" ||
                            avanzamento["INT0_FIRMA_INVESTIMENTO"] === "corrente"||
                            avanzamento["INT0_FIRMA_VESSATORIE_INVESTIMENTO"] === "corrente"
                            )? "attivo" :"")}>
                        <div className="ob-owner">{nint === "1" ? "Mono" : "Primo"}<br />intestatario</div>
                            <div className="steps">
                                <div className={"step " + avanzamento["INT0_FIRMA_PRECONTRATTUALE"]}><span>5</span></div>
                                <div className={"step " + avanzamento["INT0_FIRMA_VESSATORIE"]}><span>6</span></div>
                                <div className={"step " + avanzamento["INT0_FIRMA_INVESTIMENTO"]}><span>7</span></div>
                                <div className={"step " + avanzamento["INT0_FIRMA_VESSATORIE_INVESTIMENTO"]}><span>8</span></div>
                            </div>
                        </div>
                        <div className={"steps-wrap " + ((avanzamento["INT0_FIRMA_CONSULENTE"]==="corrente")? "attivo" :"")}>
                            <div className="ob-owner">Prom.<br />finan.</div>
                            <div className="steps">
                                <div className={"step " + avanzamento["INT0_FIRMA_CONSULENTE"]}><span>9{(nint==="1")&& " (fine)"}</span></div>
                            </div>
                        </div>
                                <div className={"steps-wrap " + ((avanzamento["RACCOLTA_PRODOTTI"]==="corrente" ||
                                avanzamento["ADEMPIMENTI_NORMATIVI"] === "corrente" || avanzamento["INT1_RIEPILOGO_DATI"] === "corrente" ||
                                avanzamento["INT1_CERTIF_CREDENZIALI"] === "corrente")? "attivo" :"")}>
                            <div className="ob-owner">Secondo<br />intestatario</div>
                                    <div className="steps">
                                        <div className={"step " + avanzamento["RACCOLTA_PRODOTTI"]}><span>10</span></div>
                                         <div className={"step " + avanzamento["ADEMPIMENTI_NORMATIVI"]}><span>11</span></div>

                                        <div className={"step " + avanzamento["INT1_RIEPILOGO_DATI"]}><span>12</span></div>
                                        <div className={"step " + avanzamento["INT1_CERTIF_CREDENZIALI"]}><span>13</span></div>
                                    </div>
                                </div>
                            <div className={"steps-wrap " + ((avanzamento["INT1_IDENTIF_CLIENTE"]==="corrente")? "attivo" :"")}>
                                <div className="ob-owner">Prom.<br />finan.</div>
                                <div className="steps">
                                    <div className={"step " + avanzamento["INT1_IDENTIF_CLIENTE"]}><span>14</span></div>
                                </div>
                            </div>
                            <div className={"steps-wrap " + ((avanzamento["INT1_FIRMA_PRECONTRATTUALE"]==="corrente" ||
                                avanzamento["INT1_FIRMA_VESSATORIE"]==="corrente" ||
                                avanzamento["INT1_FIRMA_INVESTIMENTO"] === "corrente"||
                                avanzamento["INT1_FIRMA_VESSATORIE_INVESTIMENTO"] === "corrente"
                                )? "attivo" :"")}>
                            <div className="ob-owner">Secondo<br />intestatario</div>
                                <div className="steps">
                                    <div className={"step " + avanzamento["INT1_FIRMA_PRECONTRATTUALE"]}><span>15</span></div>
                                    <div className={"step " + avanzamento["INT1_FIRMA_VESSATORIE"]}><span>16</span></div>
                                    <div className={"step " + avanzamento["INT1_FIRMA_INVESTIMENTO"]}><span>17</span></div>
                                    <div className={"step " + avanzamento["INT1_FIRMA_VESSATORIE_INVESTIMENTO"]}><span>18</span></div>
                                </div>
                            </div>
                            <div className={"steps-wrap " + ((avanzamento["INT1_FIRMA_CONSULENTE"]==="corrente")? "attivo" :"")}>
                                <div className="ob-owner">Prom.<br />finan.</div>
                                <div className="steps">
                                    <div className={"step " + avanzamento["INT1_FIRMA_CONSULENTE"]}><span>19</span></div>
                                    {nint==="2" && <div className={"step conclusione " + avanzamento["CONCLUSA"]}><span>Conclusa</span></div>}
                                </div>
                            </div>
                        </>
                    }
                </div>


                

            </div>
        )
    }

}