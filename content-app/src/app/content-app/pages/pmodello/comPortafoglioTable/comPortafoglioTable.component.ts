import { Component,OnInit, Input, ViewChild, TemplateRef,ViewChildren,QueryList,ElementRef, Output,EventEmitter} from '@angular/core';
import { PmodelloService } from '../pmodello.service';

@Component({
  selector: 'comPortafoglioTable',
  templateUrl: 'comPortafoglioTable.component.html',
 
})

export class comPortafoglioTable  implements OnInit {
  @Input() textIntro;
  @Input() headingsCol:Array<any>;
  @Input() cellClassName:Array<any>;
  @Input() rowData:Array<object>;
  @Input() DataFromService;
  @Input() valueInput;
  @Input() isBtnaddCarVisible;
  @Input() isBtnupDateCarVisible;
  @Output() handleFondiSuggeriti = new EventEmitter();
  @Output() handlecalcolaPerc= new EventEmitter();
  @Output() handleaddCart= new EventEmitter();
  
  constructor(private pmodelloService: PmodelloService) { }

  //funzione esterna chiamata da js incluso
  calcImporti(e,valori) {
    const c = e.target.value.replace(/[^0-9]/g ,'');
    e.target.value = c;
    let objToPass= {
      valori:valori,
      c:c
    }
    this.handlecalcolaPerc.emit(objToPass);
  }
  
  
  @ViewChildren("importoValue") importiList: QueryList<ElementRef>;
  @ViewChildren("isinValue") isinList: QueryList<ElementRef>;

  
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
  
  setFondiSuggeriti(ev,id,idaa,idac) {
     let importoToSend:string,
        isinToSend: string;
  
  //recupero importo e isni da mandare alla chiamata in post per recuperare i fondi suggeriti        
  importoToSend = this.pmodelloService.getArrayListV(this.importiList,'hval'+idaa+'-'+idac);
  isinToSend = this.pmodelloService.getArrayListV(this.isinList,'hisin'+idaa+'-'+idac);
    let objToPass= {
      p:id,
      aa:idaa,
      ac:idac,
      t: isinToSend,
      i:importoToSend
    }
    this.handleFondiSuggeriti.emit(objToPass);
  }

  addToCart(postfix) {
    this.handleaddCart.emit(postfix);
  }
  
  
  // Inizializzazione
  ngOnInit(){
    this.colsThTemplate=this.importi;
    this.colsTemplate.push(this.MacroAssetClass,this.Peso,this.AssetClass,this.Pesi,this.Importo,this.Fondo,this.btnId);
    
    
 }
}
