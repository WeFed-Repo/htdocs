import { Component,OnInit,ElementRef,ViewChild,ViewChildren,QueryList,TemplateRef,Input} from '@angular/core';
import { Pmodello } from './pmodello.model';
import { PmodelloService } from './pmodello.service';
declare function apriSchedaFondoFida(codiceFida);
declare function ttInit();
  

@Component({
  selector: 'pmodello',
  templateUrl: './pmodello.component.html',
  
})


export class PModello  implements OnInit {
  // Input
  @Input() setloading: any;

  //array di testi iniziali
  public pModelli:Array<Pmodello>;
  //elementi dei box
  public titleBox:string;
  public textBox:string;
  public linkBox:string;
  public gotoBox:string;
  public typePortafoglio:string;
  public idaaSelected:string;
  public idacSelected:string;
  //gestione numero righe da mostrare nella tabella dei sugegriti
  public onlySomeRow: boolean = true;
  //variabile di semaforo per la renderizzazione della tabella
  public isRenderingReady:boolean=false;
  //stato dei radio
  isRadioChecked:boolean= true;

  //stato della modale
  

  public valuesToSave: {}
  //inietto il servizio
  constructor(private pmodelloService: PmodelloService) {}
  
 
  
  //funzioni per costruire le tabelle di atterraggio
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
 
  //elementi per le tabella  di atterraggio
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
 //array di classi per le celle delle tabelle di atterraggio
  cellClassNameTablePm:Array<any> = [
    'left', 'right','left','right','right','left','center'
  ]
  
  //elementi per la tabella dei suggeriti
  //intestazioni colonne
  headingsColTabellaSugg :Array<any> = [
    {title:'', class:"center"},
    {title:'Nome',  class:"center"},
    {title:'Importo minimo prima sottoscrizione',  class:"center"}
  ]
  //schema di dati delle celle tabella suggeriti da popolare con la chiamata
  rowDataTabellaSugg: any = 
   [
    { 
      RadioCell: '', 
      Nome: '',
      Importo: '' 
    }
  ]
  //classi celle tabella suggeriti
  cellClassNameTabellaSugg:Array<any> = [
    'left', 'left','right'
  ]
  //classi right tabella suggeriti
  rowClassNameTabellaSugg:Array<any> = []
  
  //costruzione html tramite il controllo del figlio
  @ViewChild("modaleFondiSuggeriti") modaleFondiSuggeriti: ElementRef;
  @ViewChild("modaleFondiSuggeritiContent") modaleFondiSuggeritiContent: ElementRef;
  @ViewChild('radiobtnCell', { static: true }) radiobtnCell;
  @ViewChild('descCell', { static: true }) descCell;
  @ViewChild('impMinCell', { static: true }) impMinCell;
  @ViewChild('composizionePort', { static: true }) composizionePort;
  @ViewChild('closebuttonModal') closebutton;
  
  colsTemplateTabellaSugg: TemplateRef<any>[] = [];

  //controllo dei valori inseriti nelll'overlayer
 
  @ViewChildren("descriptionSel") descriptionSelList: QueryList<ElementRef>;
  @ViewChildren("importoSel") impSelList: QueryList<ElementRef>;
  
  //funzione di chiamata fondi suggeriti
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
        
        if(data['fondiSuggeriti']) {
          this.modaleFondiSuggeritiContent.nativeElement.classList.remove('loading');
          this.rowDataTabellaSugg = data['fondiSuggeriti'];
          //aggiungo la la classe hidden all'array delle classi di riga
          this.onlySomeRow = true;
          this.isRadioChecked= false;
          //nascondo le righe oltre la terza
          this.getTrTableSuggRow();
          //semaforo di rendering
          this.isRenderingReady = true;
          this.idaaSelected = params.aa;
          this.idacSelected = params.ac;
      }
     });
    
    }
    //funzione per popolare l'array delle classi dinamiche di riga della tabella
    getTrTableSuggRow() {
      this.rowClassNameTabellaSugg = [];
      this.rowDataTabellaSugg .forEach((element,index) => {
        if(this.onlySomeRow) {
          let classToAdd = index<3 ? '' : 'hidden'
          this.rowClassNameTabellaSugg.push(classToAdd)
        }
        else {
          this.rowClassNameTabellaSugg.push("");
        }
      });
    }
    //funzione chiamata dal carrello
    apriPdfFondo(codpdf) {
      apriSchedaFondoFida(codpdf);
    }
    //toogle row table
    toggleRow() {
       this.onlySomeRow= !this.onlySomeRow;
       this.getTrTableSuggRow();
    }
    //funzione per abilitare il salva alla selezione del radio btn
    setBtnSalva(el,dataPdf,impMin) {
        this.isRadioChecked= true;
        this.valuesToSave = {
           'value': el.target.value,
           'descrToFullfill' : this.pmodelloService.getArrayListH(this.descriptionSelList,'name-' + el.target.value),
           'impToFullfill' :  this.pmodelloService.getArrayListH(this.impSelList,'minp-' + el.target.value),
           'pdfToFullfill': dataPdf,
           'impMin': impMin
        } 
    }
   
    salva(idaa, idac) {
      //popolo il campo della descrizione nella tabella del portafoglio
      const descSel = this.composizionePort.nativeElement.querySelector("#txt" + idaa + "-" + idac),
            isinSel = this.composizionePort.nativeElement.querySelector("#hisin" + idaa + "-" + idac),
            hminSel = this.composizionePort.nativeElement.querySelector("#hmin" + idaa + "-" + idac),
            btnSel = this.composizionePort.nativeElement.querySelector("#btn" + idaa + "-" + idac)
      descSel.innerHTML = this.valuesToSave['descrToFullfill'];
      descSel.addEventListener('click',()=>this.apriPdfFondo(this.valuesToSave['pdfToFullfill']));
      isinSel.value =  this.valuesToSave['value']
      hminSel.value = this.valuesToSave['impMin']
      btnSel.setAttribute('class','btn btn-defalut btn-small');
      btnSel.innerHTML="cambia fondo"

      //switc del bottone nella tabella
      //chiudo la modale
      this.closebutton.nativeElement.click();
     
    }
    /*salva(idaa, idac) {
    
      enableCart(idaa,false);
      c = $('#totinv' + idaa).val().replace(/[^0-9]/g, '');
      calcolaPerc(aValori['valori' + idaa], c);
    }*/
    
  // Inizializzazione
  ngOnInit(){
    this.setloading();
    this.pModelli=this.pmodelloService.returnPmodelArray();
    this.colsTemplateTabellaSugg.push(this.radiobtnCell,this.descCell,this.impMinCell);
    ttInit();
   }
  
  ngAfterViewInit() {
    this.setloading(false);
   
  };
}
