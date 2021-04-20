import { Component,OnInit,ElementRef,ViewChild,TemplateRef} from '@angular/core';
import { Pmodello } from './pmodello.model';
import { PmodelloService } from './pmodello.service';

@Component({
  selector: 'pmodello',
  templateUrl: './pmodello.component.html',
  
})

export class PModello  implements OnInit {
  //array di testi iniziali
  
  public pModelli:Array<Pmodello>;
 
  
  //elementi dei box
  public titleBox:string;
  public textBox:string;
  public linkBox:string;
  public gotoBox:string;
  public typePortafoglio:string;
  public dataFondiSel:string;
  
  
  constructor(private pmodelloService: PmodelloService) { 
     
  }
  getArrayValori = (index,minI, maxI) => {
    let ArrayValori = []
    for (let i = minI; i <=maxI; i++) {
      ArrayValori.push(Number(
        [
          this.pmodelloService.returnPmodelArray()[index].dataFromService[i].value
        ]
        )
      );
    }
    return ArrayValori;
  }
  getArrayIdac = (index,minI, maxI) => {
    let ArrayIdac = []
    for (let i = minI; i <=maxI; i++) {
      ArrayIdac.push(Number(
        [
          this.pmodelloService.returnPmodelArray()[index].dataFromService[i].idac
        ]
        )
      );
    }
    return ArrayIdac;
  }
 
  //elementi per la tabella del portafoglio
 
  //instestazioni di colonna
  headingsColTablePm:Array<any> = [
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
  rowsDataTablePm:any = {
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
          Importo:this.getArrayIdac(0,0,0),
          Fondo:this.getArrayIdac(0,0,0),
          btnId: {idac: this.getArrayIdac(0,0,0),labelOv:'SIC'}
        },
        { 
          MacroAssetClass: 'Obbligazionario	', 
          Peso: this.getArrayValori(0,1,3).reduce((previous, next) => {
            return previous + next;
          }), 
          AssetClass: ['Obbligazionario Governativo', 'Obbligazionario Globale', 'Obbligazionario Corporate'], 
          Pesi: this.getArrayValori(0,1,3),
          Importo:this.getArrayIdac(0,1,3),
          Fondo: this.getArrayIdac(0,1,3),
          btnId: {idac: this.getArrayIdac(0,1,3),labelOv:'SIC'}
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
          Importo:this.getArrayIdac(1,0,2),
          Fondo:this.getArrayIdac(1,0,2),
          btnId: {idac: this.getArrayIdac(1,0,2),labelOv:'PRU'}
        },
        { 
          MacroAssetClass: 'Obbligazionario	', 
          Peso: this.getArrayValori(1,3,7).reduce((previous, next) => {
            return previous + next;
          }),
          AssetClass: ['Obbligazionario Emergenti', 'Obbligazionario High Yield', 'Obbligazionario Governativo','Obbligazionario Globale','Obbligazionario Corporate'], 
          Pesi: this.getArrayValori(1,3,7),
          Importo:this.getArrayIdac(1,3,7),
          Fondo:this.getArrayIdac(1,3,7),
          btnId: {idac: this.getArrayIdac(1,3,7),labelOv:'PRU'}
        },
        { 
            MacroAssetClass: 'Monetario', 
            Peso: this.getArrayValori(1,8,8).reduce((previous, next) => {
              return previous + next;
            }),
            AssetClass: ['Liquidita'], 
            Pesi: this.getArrayValori(1,8,8),
            Importo:this.getArrayIdac(1,8,8),
            Fondo:this.getArrayIdac(1,8,8),
            btnId: {idac: this.getArrayIdac(1,8,8),labelOv:'PRU'}
        },
      ],
  }
 //array di classi per le calle delle tabelle
  cellClassNameTablePm:Array<any> = [
    'left', 'right','left','right','right','left','center'
  ]
  
  //elementi per la tabella dei suggeriti
  headingsColTabellaSugg :Array<any> = [
    {title:'', class:"center"},
    {title:'Nome',  class:"center"},
    {title:'Importo minimo prima sottoscrizione',  class:"center"}
  ]
  rowDataTabellaSugg: any = 
   [
    { 
      RadioCell: '', 
      Nome: '',
      Importo: '' 
    }
   ]
  
 
  
  @ViewChild("modaleFondiSuggeriti") modaleFondiSuggeriti: ElementRef;
  @ViewChild("modaleFondiSuggeritiContent") modaleFondiSuggeritiContent: ElementRef;
  handleFondiSuggeriti(params) {
  
  //setto il tipo di portafoglio da includere nel testo della modale
  switch(params.aa) {
    case '11':
      this.typePortafoglio = 'difensivo'
      break;
      case '12':
        this.typePortafoglio = 'prudente'
      break;
    default:
      
  }
  
  //setto il loading alla modale
  this.modaleFondiSuggeritiContent.nativeElement.classList.add('loading')
  //funzione di chiamata iniettata dal servizio
  //parametri in post da passare: id, idaa, idac, importoToSend, isinToSend
  this.pmodelloService.callFondiSuggeriti(params).subscribe(data=>{
    this.dataFondiSel = data['fondiSuggeriti'][0].Fidacode;
    this.modaleFondiSuggeritiContent.nativeElement.classList.remove('loading')
    console.log(data)
  });
  
  }
  

  // Inizializzazione
  ngOnInit(){
    this.pModelli=this.pmodelloService.returnPmodelArray();
  }
}
