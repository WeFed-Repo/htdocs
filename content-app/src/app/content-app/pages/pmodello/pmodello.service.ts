//servizio dove caricare i dati dei poratfogli modello
import { Injectable} from '@angular/core';
import { Pmodello } from './pmodello.model';
import { HttpClient,HttpParams } from '@angular/common/http';
// Variabili e funzioni globali
import { GlobalVars } from "../../core/globalVars.js";


//servizio per ora con dati statici da costruire a seguito delle chiamate
//valori recuperati da collaudo
const aValori = {}
aValori['valori11'] = [{"idaa":"11","idac":"246","value":25},{"idaa":"11","idac":"247","value":20},{"idaa":"11","idac":"248","value":35},{"idaa":"11","idac":"404","value":20}]
aValori['valori12'] = [{"idaa":"12","idac":"38","value":0},{"idaa":"12","idac":"70","value":0},{"idaa":"12","idac":"256","value":7},{"idaa":"12","idac":"65","value":12},{"idaa":"12","idac":"251","value":7},{"idaa":"12","idac":"252","value":10},{"idaa":"12","idac":"253","value":20},{"idaa":"12","idac":"254","value":12},{"idaa":"12","idac":"250","value":20}]
@Injectable({
  providedIn: 'root'
})
export class PmodelloService {
  constructor(private httpClient: HttpClient) {}
  
  private pmodelli:Array<Pmodello> = [
      new  Pmodello(
          "Difensivo", 
           true,
            `E’ un <strong>portafoglio che si pone l’obiettivo di difendere il capitale a fronte di rendimenti contenuti</strong> cercando di mantenersi al riparo dalle oscillazioni di mercato. Questo portafoglio è caratterizzato totalmente dall’investimento in <strong>fondi obbligazionari e flessibili prudenti</strong>, non è previsto l'investimento azionario. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi <strong>(orizzonte temporale minimo 1 anno)</strong>.`,
            aValori['valori11']
       ),
      new  Pmodello (
          "Prudente", 
          false, 
          `E’ un <strong>portafoglio che si pone l’obiettivo di minimizzare il rischio e cerca di offrire prospettive di rivalutazione del capitale investito</strong> sempre in relazione ai rendimenti di mercato mantenendo molto basso il livello di rischio dato dalle oscillazioni delle quotazioni. Questo portafoglio è caratterizzato da un <strong>investimento prevalentemente in fondi obbligazionari e flessibili prudenti</strong> con una piccola parte investita in fondi azionari. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi <strong>(orizzonte temporale minimo 2 anni)</strong>.`,
          aValori['valori12']
        )
    
  ]
  //costruiamo un array che mi restituisca una copia
  returnPmodelArray() {
      return this.pmodelli.slice();
  }
  //funzione di chiamata per recuperare i fondi suggeriti get con parametri
  pmsUrl = GlobalVars.apibaseurl + "/fondi_suggeriti.json";
  callFondiSuggeriti(params) {
    let httpParams = new HttpParams();
    Object.keys(params).forEach(function (key) {
        httpParams = httpParams.append(key.toString(), params[key]);
      });
    return this.httpClient.get<any>(this.pmsUrl,{
     params: httpParams
    })
  }
  
  //funzioni generiche per scorrere i children
  getArrayListV = (ArrayList,valueToCheck) => {
    
    let valToSend="";
    ArrayList.forEach(element => {
      if(element.nativeElement.id===valueToCheck) {
        valToSend = element.nativeElement.value
      }
    })
    return valToSend;
  }
  getArrayListH = (ArrayList,valueToCheck) => {
    
    let valToSend="";
    ArrayList.forEach(element => {
      if(element.nativeElement.id===valueToCheck) {
        valToSend = element.nativeElement.innerHTML
      }
    })
    return valToSend;
  }
  
  //costanti per aperture pagine
  cgi_protocol=window.location.protocol  + "//";
  cgi_host=window.location.hostname;
  wrp_script = '/WEBEXT/wrapped/goToInvest';
  obs = "OBSCNT=FNZ_NAV&tabId=nav_priv_wbx_investimenti&OBSKEY=nav_priv_wbx_acquisto_new&";
  
  apriPdfFondo(codiceFida){
    {
      const action = "/wbOnetoone/2l/action/investywb/RicercaFondi.action?" + this.obs;
      const param = "codicefida=" + codiceFida + "&fondo=true";
      top.document.location.href = this.cgi_protocol + this.cgi_host + this.wrp_script + action + param + "&cf=" + Math.random();
    }
  }
}

