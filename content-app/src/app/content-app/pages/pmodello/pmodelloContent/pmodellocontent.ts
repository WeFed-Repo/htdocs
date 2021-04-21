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

  setFondiSuggeriti(id,idaa,idac) {
    let importoToSend:string,
        isinToSend: string;
        //funzione da usare come generica da spostare nel servizio
        let getArrayList = (ArrayList,idInput) => {
          let valToSend="";
          ArrayList.forEach(element => {
            if(element.nativeElement.id===(idInput+idaa+'-'+idac)) {
              valToSend = element.nativeElement.value
            }
          })
          return valToSend;
        }
  //recupero importo e isni da mandare alla chiamata in post per recuperare i fondi suggeriti        
  importoToSend = getArrayList(this.importiList,'hval');
  isinToSend = getArrayList(this.isinList,'hisin');
    let params= {
      p:id,
      aa:idaa,
      ac:idac,
      t: isinToSend,
      i:importoToSend
    }
    this.handleFondiSuggeriti.emit(params);
  }
  // Inizializzazione
  ngOnInit(){
    this.colsThTemplate=this.importi;
    this.colsTemplate.push(this.MacroAssetClass);
    this.colsTemplate.push(this.Peso);
    this.colsTemplate.push(this.AssetClass);
    this.colsTemplate.push(this.Pesi);
    this.colsTemplate.push(this.Importo);
    this.colsTemplate.push(this.Fondo);
    this.colsTemplate.push(this.btnId);
   
    
    
  }
}
