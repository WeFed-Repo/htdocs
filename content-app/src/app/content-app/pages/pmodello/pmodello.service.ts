//servizio dove caricare i dati dei poratfogli modello
import { Pmodello } from './pmodello.model';
//servizio per ora con dati statici da costruire a seguito delle chiamate
//valori recuperati da collaudo
const aValori = {}
aValori['valori11'] = [{"idaa":"11","idac":"246","value":25},{"idaa":"11","idac":"247","value":20},{"idaa":"11","idac":"248","value":35},{"idaa":"11","idac":"404","value":20},{}]
aValori['valori12'] = [{"idaa":"12","idac":"38","value":0},{"idaa":"12","idac":"70","value":0},{"idaa":"12","idac":"256","value":7},{"idaa":"12","idac":"65","value":12},{"idaa":"12","idac":"251","value":7},{"idaa":"12","idac":"252","value":10},{"idaa":"12","idac":"253","value":20},{"idaa":"12","idac":"254","value":12},{"idaa":"12","idac":"250","value":20},{"idaa":"12","idac":"255","value":12},{}]

export class PmodelloService {
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
}