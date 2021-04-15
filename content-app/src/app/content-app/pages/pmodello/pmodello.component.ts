import { Component,OnInit, Input, ViewChild, TemplateRef} from '@angular/core';
import { Pmodello } from './pmodello.model';
import { PmodelloService } from './pmodello.service';

@Component({
  selector: 'pmodello',
  templateUrl: './pmodello.component.html',
  providers:[PmodelloService]
})

export class PModello  implements OnInit {
  //array di testi iniziali
  
  public pModelli:Array<Pmodello>;
  //elementi dei box
  public titleBox:string;
  public textBox:string;
  public linkBox:string;
  public gotoBox:string;
 
  constructor(private pmodelloService: PmodelloService) { 
     
  }
  getArrayValori = (index,minI, maxI) => {
    let ArrayValori = []
    for (let i = minI; i <=maxI; i++) {
      ArrayValori.push(Number([this.pmodelloService.returnPmodelArray()[index].dataFromService[i].value]));
    }
    return ArrayValori;
  }
  //dati per le tabelle

  //instestazioni di colonna
  headingsCol:Array<any> = [
     {title:'Macro Asset Class', class:"center"},
     {title:'Peso',  class:"center"},
     {title:'Asset Class',  class:"center"},
     {title:'Peso',  class:"center"},
     {title:'Importo da investire',  class:"center",id:'importi'},
     {title:'Fondo',  class:"center"},
     {title:'',  class:"center"}
   ]
  
  //dati per le righe di tutte le tabelle rowspan costruiti tramite span in html
  //ogni array è una tabella per ogni tab
  rowsData:any = {
    //prima tabella
     0:
      [
        { 
          MacroAssetClass: 'Monetario', 
          Peso: this.getArrayValori(0,0,0).reduce((previous, next) => {
            return previous + next;
          }), 
          AssetClass: ['Liquidita'], 
          Pesi: this.getArrayValori(0,0,0),
          Importo:['0'],
          Fondo:[],
          btnId:['']
        },
        { 
          MacroAssetClass: 'Obbligazionario	', 
          Peso: this.getArrayValori(0,1,3).reduce((previous, next) => {
            return previous + next;
          }), 
          AssetClass: ['Obbligazionario Governativo', 'Obbligazionario Globale', 'Obbligazionario Corporate'], 
          Pesi: this.getArrayValori(0,1,3),
          Importo:['0','0','0'],
          Fondo:['','',''],
          btnId:[]
        }
      ],
      1:
      [
        { 
          MacroAssetClass: 'Azionario', 
          Peso: this.getArrayValori(1,0,2).reduce((previous, next) => {
            return previous + next;
          }), 
          AssetClass: ['Azionario Europa','Azionari America','Azionario Globale'], 
          Pesi: this.getArrayValori(1,0,2),
          Importo:['0','0','0'],
          Fondo:['','',''],
          btnId:['','','']
        },
        { 
          MacroAssetClass: 'Obbligazionario	', 
          Peso: this.getArrayValori(1,3,7).reduce((previous, next) => {
            return previous + next;
          }),
          AssetClass: ['Obbligazionario Emergenti', 'Obbligazionario High Yield', 'Obbligazionario Governativo','Obbligazionario Globale','Obbligazionario Corporate'], 
          Pesi: this.getArrayValori(1,3,7),
          Importo:['0','0','0','0','0'],
          Fondo:['','','','',''],
          btnId:[]
        },
        { 
            MacroAssetClass: 'Monetario', 
            Peso: this.getArrayValori(1,8,8).reduce((previous, next) => {
              return previous + next;
            }),
            AssetClass: ['Liquidita'], 
            Pesi: this.getArrayValori(1,8,8),
            Importo:['0'],
            Fondo:[],
            btnId:[]
        },
      ],
  }
  //array di classi per le calle delle tabelle
  cellClassName:Array<any> = [
    'left', 'right','left','right','right','left','center'
  ]
  // Inizializzazione
  ngOnInit(){
    this.pModelli=this.pmodelloService.returnPmodelArray();
   
  }
}
