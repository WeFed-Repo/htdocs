import { Component,OnInit, Input, ViewChild, TemplateRef,ViewChildren,QueryList,ElementRef, Output,EventEmitter} from '@angular/core';
import { PmodelloService } from '../pmodello.service';
declare function calcolaPerc(valori,importo);

@Component({
  selector: 'pmodello-content',
  templateUrl: 'pmodellocontent.html',
 
})

export class PModelloContent  implements OnInit {
  @Input() textIntro;
  @Input() headingsCol:Array<any>;
  @Input() cellClassName:Array<any>;
  @Input() rowData:Array<object>;
  @Input() DataFromService;
  
 
  
  constructor(private pmodelloService: PmodelloService) { }

  //funzione esterna chiamata da js incluso
  calcImporti(e,valori) {
    const c = e.target.value.replace(/[^0-9]/g ,'');
    e.target.value = c;
    calcolaPerc(valori, c)
  }
  @ViewChildren("importoValue") importiList: QueryList<ElementRef>;
  @ViewChildren("isinValue") isinList: QueryList<ElementRef>;
  @ViewChildren("descrizioneToAppend") descrizioneToAppendlList:QueryList<ElementRef>;
  @Output() handleFondiSuggeriti = new EventEmitter();

  


  @ViewChild('MacroAssetClass', { static: true }) MacroAssetClass;
  @ViewChild('Peso', { static: true }) Peso;
  @ViewChild('AssetClass', { static: true }) AssetClass;
  @ViewChild('Pesi', { static: true }) Pesi;
  @ViewChild('Importo', { static: true }) Importo;
  @ViewChild('Fondo', { static: true }) Fondo;
  @ViewChild('btnId', { static: true }) btnId;
  @ViewChild('importi', { static: true }) importi;
 
  
 
  colsTemplate: TemplateRef<any>[] = [];
  colsThTemplate: TemplateRef<any>
  
  optionTemplateRef?: TemplateRef<any>;
  /*codSel = []*/
  setFondiSuggeriti(id,idaa,idac) {
    
    let importoToSend:string,
        isinToSend: string;
  
  //recupero importo e isni da mandare alla chiamata in post per recuperare i fondi suggeriti        
  importoToSend = this.pmodelloService.getArrayListV(this.importiList,'hval'+idaa+'-'+idac);
  isinToSend = this.pmodelloService.getArrayListV(this.isinList,'hisin'+idaa+'-'+idac);
    let params= {
      p:id,
      aa:idaa,
      ac:idac,
      t: isinToSend,
      i:importoToSend
    }
    this.handleFondiSuggeriti.emit(params);
  }

  /*setDescFromOverlay() {
    console.log();
  }*/
  // Inizializzazione
  ngOnInit(){
    this.colsThTemplate=this.importi;
    this.colsTemplate.push(this.MacroAssetClass,this.Peso,this.AssetClass,this.Pesi,this.Importo,this.Fondo,this.btnId);
 }
}
