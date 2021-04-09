//servizio dove caricare i dati dei poratfogli modello
import { Pmodello } from './pmodello.model';
//servizio per ora con dati statici da costruire a seguito delle chiamate
export class PmodelloService {
    private pmodelli:Array<Pmodello> = [
        new  Pmodello(
            "Difensivo", 
             true,
              `E’ un <strong>portafoglio che si pone l’obiettivo di difendere il capitale a fronte di rendimenti contenuti</strong> cercando di mantenersi al riparo dalle oscillazioni di mercato. Questo portafoglio è caratterizzato totalmente dall’investimento in <strong>fondi obbligazionari e flessibili prudenti</strong>, non è previsto l'investimento azionario. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi <strong>(orizzonte temporale minimo 1 anno)</strong>.`,
              [
                { 
                  MacroAssetClass: 'Monetario', 
                  Peso: '25%', 
                  AssetClass: ['Liquidita'], 
                  Pesi: ['25%'], 
                  Importo:['0'],
                  Fondo:[],
                  btnId:[]
                },
                { 
                  MacroAssetClass: 'Obbligazionario	', 
                  Peso: '75%', 
                  AssetClass: ['Obbligazionario Governativo', 'Obbligazionario Globale', 'Obbligazionario Corporate'], 
                  Pesi: ['20%','35%','20%'],
                  Importo:['0','0','0'],
                  Fondo:[],
                  btnId:[]
                }
              ],
              ['Macro Asset Class','Peso', 'Asset Class','Peso', 'Importo da investire', 'Fondo', '']
         ),
        new  Pmodello (
            "Prudente", 
            false, 
            `E’ un <strong>portafoglio che si pone l’obiettivo di minimizzare il rischio e cerca di offrire prospettive di rivalutazione del capitale investito</strong> sempre in relazione ai rendimenti di mercato mantenendo molto basso il livello di rischio dato dalle oscillazioni delle quotazioni. Questo portafoglio è caratterizzato da un <strong>investimento prevalentemente in fondi obbligazionari e flessibili prudenti</strong> con una piccola parte investita in fondi azionari. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi <strong>(orizzonte temporale minimo 2 anni)</strong>.`,
            [
                { 
                  MacroAssetClass: 'Azionario', 
                  Peso: '7%', 
                  AssetClass: ['Azionario Europa','Azionari America','Azionario Globale'], 
                  Pesi: ['0%','0%','7%'], 
                  Importo:['0','0','0'],
                  Fondo:[],
                  btnId:[]
                },
                { 
                  MacroAssetClass: 'Obbligazionario	', 
                  Peso: '61%', 
                  AssetClass: ['Obbligazionario Emergenti', 'Obbligazionario High Yield', 'Obbligazionario Governativo','Obbligazionario Globale','Obbligazionario Corporate'], 
                  Pesi: ['12%','7%','10%','20%','12%'],
                  Importo:['0','0','0','0','0'],
                  Fondo:[],
                  btnId:[]
                },
                { 
                    MacroAssetClass: 'Monetario', 
                    Peso: '20%', 
                    AssetClass: ['Liquidita'], 
                    Pesi: ['20%'], 
                    Importo:['0'],
                    Fondo:[],
                    btnId:[]
                },
              ],
              ['Macro Asset Class','Peso', 'Asset Class','Peso', 'Importo da investire', 'Fondo', '']
        )
        /*new  Pmodello (
            "Moderato", 
            false, 
            `Il portafoglio si pone a metà tra i portafogli più dinamici e quelli più difensivi con l’obiettivo di ottenere rendimenti interessanti concentrandosi soprattutto su investimenti a basso/medio rischio. Questo portafoglio è caratterizzato da fondi obbligazionari e flessibili prudenti non trascurando l'investimento in fondi azionari. I singoli fondi che compongono il portafoglio possono avere profili di rischio e caratteristiche diversi (orizzonte temporale minimo 3 anni).`,
            [
                { 
                  MacroAssetClass: 'Monetario', 
                  Peso: '25%', 
                  AssetClass: ['Liquidita'], 
                  Pesi: ['25%'], 
                  Importo:['0'],
                  Fondo:[],
                  btnId:[]
                },
                { 
                  MacroAssetClass: 'Obbligazionario	', 
                  Peso: '75%', 
                  AssetClass: ['Obbligazionario Governativo', 'Obbligazionario Globale', 'Obbligazionario Corporate'], 
                  Pesi: ['20%','35%','20%'],
                  Importo:['0','0','0'],
                  Fondo:[],
                  btnId:[]
                }
              ],
              ['Macro Asset Class','Peso', 'Asset Class','Peso', 'Importo da investire ', 'Fondo', '']
        )*/
    ]
    //costruiamo un array che mi restituisca una copia
    returnPmodelArray() {
        return this.pmodelli.slice();
    }
   
    
}