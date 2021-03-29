//servizio dove caricare i dati dei poratfogli modello
import { Pmodello } from './pmodello.model';

export class PmodelloService {
    private pmodelli:Array<Pmodello> = [
        new  Pmodello(
            "Difensivo", 
             true,
              `E’ un <strong>portafoglio che si pone l’obiettivo di difendere il capitale a fronte di rendimenti contenuti</strong> cercando di mantenersi al riparo dalle oscillazioni di mercato. Questo portafoglio è caratterizzato totalmente dall’investimento in <strong>fondi obbligazionari e flessibili prudenti</strong>, non è previsto l'investimento azionario. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi <strong>(orizzonte temporale minimo 1 anno)</strong>.`
         ),
        new  Pmodello (
            "Prudente", 
            false, 
            `E’ un portafoglio che si pone l’obiettivo di minimizzare il rischio e cerca di offrire prospettive di rivalutazione del capitale investito sempre in relazione ai rendimenti di mercato mantenendo molto basso il livello di rischio dato dalle oscillazioni delle quotazioni. Questo portafoglio è caratterizzato da un investimento prevalentemente in fondi obbligazionari e flessibili prudenti con una piccola parte investita in fondi azionari. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi (orizzonte temporale minimo 2 anni).`
        ),
        new  Pmodello (
            "Moderato", 
            false, 
            `Il portafoglio si pone a metà tra i portafogli più dinamici e quelli più difensivi con l’obiettivo di ottenere rendimenti interessanti concentrandosi soprattutto su investimenti a basso/medio rischio. Questo portafoglio è caratterizzato da fondi obbligazionari e flessibili prudenti non trascurando l'investimento in fondi azionari. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi (orizzonte temporale minimo 3 anni).`)
    ]
    //costruiamo un array che mi restituisca una copia
    returnPmodelArray() {
        return this.pmodelli.slice();
    }
}