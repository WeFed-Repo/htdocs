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

        // Calcolo compilatori
        let primocomp = (ordineInt.length>1)? ordineInt.split("")[0]: "0",
            secondocomp = (ordineInt.length>1)? ordineInt.split("")[1]: "1";

        let primocompel = <>{(nint==="1") ? "Mono": ((primocomp==="0")? "Primo" : "Secondo")} <br/>intestatario</>
        let secondocompel =  <>{(nint==="1") ? "Mono": ((primocomp==="0")? "Secondo" : "Primo")} <br/>intestatario</>

        // Preparazione dell'oggetto per lo stepper
        let stepObj = [
            {
                owner:<>Prom.<br />finan.</>,
                status: (avanzamento["BOZZA_VALIDATA"].status==="corrente")? "attivo":"",
                steps: [{
                    name: "BOZZA",
                    status: avanzamento["BOZZA_VALIDATA"].status,
                    stepph: "1 (Inizio)"
                }]
            }
        ];

        // Primo compilatore
        stepObj.push(
            {
                owner: primocompel,
                status: (avanzamento["RACCOLTA_PRODOTTI"].status==="corrente" || avanzamento["ADEMPIMENTI_NORMATIVI"].status === "corrente"
                || avanzamento["INT"+  primocomp +"_RIEPILOGO_DATI"].status === "corrente" || avanzamento["INT"+ primocomp  +"_CERTIF_CREDENZIALI"].status === "corrente"
                )? "attivo":"",
                steps: [{
                    name: "RACCOLTA_PRODOTTI",
                    status: avanzamento["RACCOLTA_PRODOTTI"].status,
                    stepph: avanzamento["RACCOLTA_PRODOTTI"].stepnum
                },
                {
                    name: "ADEMPIMENTI_NORMATIVI",
                    status: avanzamento["ADEMPIMENTI_NORMATIVI"].status,
                    stepph: avanzamento["ADEMPIMENTI_NORMATIVI"].stepnum
                },
                {
                    name: "INT"+  primocomp +"_RIEPILOGO_DATI",
                    status: avanzamento["INT"+  primocomp +"_RIEPILOGO_DATI"].status,
                    stepph: avanzamento["INT"+  primocomp +"_RIEPILOGO_DATI"].stepnum
                },
                {
                    name: "INT"+  primocomp +"_RIEPILOGO_DATI",
                    status: avanzamento["INT"+ primocomp  +"_CERTIF_CREDENZIALI"].status,
                    stepph: avanzamento["INT"+ primocomp  +"_CERTIF_CREDENZIALI"].stepnum
                }]
            },
            {
                owner: <>Prom.<br />finan.</>,
                status: (avanzamento["INT"+ primocomp  +"_IDENTIF_CLIENTE"].status==="corrente")? "attivo":"",
                steps: [{
                    name: "INT"+  primocomp +"_IDENTIF_CLIENTE",
                    status: avanzamento["INT"+ primocomp  +"_IDENTIF_CLIENTE"].status,
                    stepph: avanzamento["INT"+ primocomp  +"_IDENTIF_CLIENTE"].stepnum
                }]
            } ,
            // Firme
            {
                owner: primocompel,
                status: (avanzamento["INT"+ primocomp  +"_FIRMA_TUB"].status==="corrente")? "attivo":"",
                steps: (()=>{
                    let stepFirma = [
                        // Blocchi firma di base
                        {
                            name: "INT"+  primocomp +"_FIRMA_TUB",
                            status: avanzamento["INT"+ primocomp  +"_FIRMA_TUB"].status,
                            stepph: avanzamento["INT"+ primocomp  +"_FIRMA_TUB"].stepnum
                        },
                        {
                            name: "INT"+  primocomp +"_FIRMA_VESSATORIE_TUB",
                            status: avanzamento["INT"+ primocomp  +"_FIRMA_VESSATORIE_TUB"].status,
                            stepph: avanzamento["INT"+ primocomp  +"_FIRMA_VESSATORIE_TUB"].stepnum
                        }
                    ];
                    // Eventuali blocchi firma aggiuntivi per DT
                    if (form.field_sessionfirmeblob_depositoincluso==="true") {
                        stepFirma.push(
                                {
                                    name: "INT"+  primocomp +"_FIRMA_TUB",
                                    status: avanzamento["INT"+ primocomp  +"_FIRMA_TUB"].status,
                                    stepph: avanzamento["INT"+ primocomp  +"_FIRMA_TUB"].stepnum
                                },
                                {
                                    name: "INT"+  primocomp +"_FIRMA_VESSATORIE_TUB",
                                    status: avanzamento["INT"+ primocomp  +"_FIRMA_VESSATORIE_TUB"].status,
                                    stepph: avanzamento["INT"+ primocomp  +"_FIRMA_VESSATORIE_TUB"].stepnum
                                }
                            
                        )
                    };   
                
                    return stepFirma;
                })()
            },
            {
                owner: <>Prom.<br />finan.</>,
                status: (avanzamento["INT"+ primocomp  +"_ATTESA_FIRMA_CONSULENTE"].status==="corrente")? "attivo":"",
                steps: (()=>{
    
                    let firmaCons = [
                        {
                            name: "INT"+  primocomp +"_ATTESA_FIRMA_CONSULENTE",
                            status: avanzamento["INT"+ primocomp  +"_ATTESA_FIRMA_CONSULENTE"].status,
                            stepph: avanzamento["INT"+ primocomp  +"_ATTESA_FIRMA_CONSULENTE"].stepnum
                        }
                    ]

                    // In caso di secondo intestatario chiude qui la pratica
                    if (nint === "1")
                    firmaCons.push({
                        name: "CONCLUSA",
                        status: avanzamento["CONCLUSA"].status,
                        stepph: "Conclusione"
                    });

                    return firmaCons;

                })()
            } 
                
        )

        // Eventuale secondo compilatore
        if (nint==="2"){

            stepObj.push(
                    {
                        owner: secondocompel,
                        status: (avanzamento["INT"+  secondocomp +"_RIEPILOGO_DATI"].status==="corrente" || avanzamento["INT"+ secondocomp  +"_CERTIF_CREDENZIALI"].status==="corrente")? "attivo":"",
                        steps:[{
                            name: "INT"+  secondocomp +"_RIEPILOGO_DATI",
                            status: avanzamento["INT"+  secondocomp +"_RIEPILOGO_DATI"].status,
                            stepph: avanzamento["INT"+  secondocomp +"_RIEPILOGO_DATI"].stepnum
                        },
                        {
                            name: "INT"+  secondocomp +"_CERTIF_CREDENZIALI",
                            status: avanzamento["INT"+ secondocomp  +"_CERTIF_CREDENZIALI"].status,
                            stepph: avanzamento["INT"+ secondocomp  +"_CERTIF_CREDENZIALI"].stepnum
                        }]
                    },
                    {
                        owner: <>Prom.<br />finan.</>,
                        status: (avanzamento["INT"+ secondocomp  +"_IDENTIF_CLIENTE"].status==="corrente")? "attivo":"",
                        steps: [{
                            name: "INT"+  secondocomp +"_IDENTIF_CLIENTE",
                            status: avanzamento["INT"+ secondocomp  +"_IDENTIF_CLIENTE"].status,
                            stepph: avanzamento["INT"+ secondocomp  +"_IDENTIF_CLIENTE"].stepnum
                        }
                    ]
                } ,
                // Firme
                {
                    owner: secondocompel,
                    status: (avanzamento["INT"+ secondocomp  +"_FIRMA_TUB"].status==="corrente")? "attivo":"",
                    steps: (()=>{
                        let stepFirma = [
                            // Blocchi firma di base
                            {
                                name: "INT"+  secondocomp +"_FIRMA_TUB",
                                status: avanzamento["INT"+ secondocomp  +"_FIRMA_TUB"].status,
                                stepph: avanzamento["INT"+ secondocomp  +"_FIRMA_TUB"].stepnum
                            },
                            {
                                name: "INT"+  secondocomp +"_FIRMA_VESSATORIE_TUB",
                                status: avanzamento["INT"+ secondocomp  +"_FIRMA_VESSATORIE_TUB"].status,
                                stepph: avanzamento["INT"+ secondocomp  +"_FIRMA_VESSATORIE_TUB"].stepnum
                            }
                        ];
                        // Eventuali blocchi firma aggiuntivi per DT
                        if (form.field_sessionfirmeblob_depositoincluso==="true") {
                            stepFirma.push(
                                    {
                                        name: "INT"+  secondocomp +"_FIRMA_TUF",
                                        status: avanzamento["INT"+ secondocomp  +"_FIRMA_TUF"].status,
                                        stepph: avanzamento["INT"+ secondocomp  +"_FIRMA_TUF"].stepnum
                                    },
                                    {
                                        name: "INT"+  secondocomp +"_FIRMA_VESSATORIE_TUF",
                                        status: avanzamento["INT"+ secondocomp  +"_FIRMA_VESSATORIE_TUF"].status,
                                        stepph: avanzamento["INT"+ secondocomp  +"_FIRMA_VESSATORIE_TUF"].stepnum
                                    }
                                
                            )
                        };   
                    
                        return stepFirma;
                    })()
                },
                {
                    owner: <>Prom.<br />finan.</>,
                    status: (avanzamento["INT"+ secondocomp  +"_ATTESA_FIRMA_CONSULENTE"].status==="corrente")? "attivo":"",
                    steps: (()=>{
    
                        let firmaCons = [
                            {
                                name: "INT"+  secondocomp +"_ATTESA_FIRMA_CONSULENTE",
                                status: avanzamento["INT"+ secondocomp  +"_ATTESA_FIRMA_CONSULENTE"].status,
                                stepph: avanzamento["INT"+ secondocomp  +"_ATTESA_FIRMA_CONSULENTE"].stepnum
                            }
                        ]
    
                        // In caso di secondo intestatario chiude qui la pratica
                        if (nint === "2")
                        firmaCons.push({
                            name: "CONCLUSA",
                            status: avanzamento["CONCLUSA"].status,
                            stepph: "Conclusione"
                        });
    
                        return firmaCons;
    
                    })()
                    
                }
            )
        }

    /*
        console.log("------------stepper-------------");
        console.log(stepObj)
        console.log("-----------/stepper-------------");
        */
        return (<>
                    <div className="ob-stepper">
                    {/* 
                     <p>Stato: {form.field_stato}
                        - Step: {stato}
                        - Intestatario corrente: {intcorrente}
                        - Ordine di compilazione: {ordineInt}</p>
                    
                    */}
                   

                    {stepObj.map((v,i)=>{
                        return (
                            <div className={"steps-wrap " + v.status} key={i}>
                                <div className="ob-owner">
                                    {v.owner}
                                </div>
                                <div className="steps">
                                    {v.steps.map((step,ind)=>{return(
                                         <div className={"step " + step.status + (step.name==="CONCLUSA" ? " conclusione":"")} title={step.name} key={ind}><span>{step.stepph}</span></div>
                                    )})}
                                </div>
                            </div>
                        )
                    })}
                </div>
                    {   
                        /* ELEMENTO PER DEBUG */
                        /*
                        Object.keys(avanzamento).map((v,i)=>{
                            return( 
                                <div className="step" key={i}>
                                    {v + " - " + (i+1) + "->"+avanzamento[v].status + " - " + avanzamento[v].stepnum}
                                </div>
                                )
                            }
                        )
                        */
                    }
            </>
        )
    }

}