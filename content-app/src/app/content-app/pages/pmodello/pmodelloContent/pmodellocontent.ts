import { Component,OnInit, Input, ViewChild, TemplateRef} from '@angular/core';


@Component({
  selector: 'pmodello-content',
  templateUrl: 'pmodellocontent.html',
 
})

export class PModelloContent  implements OnInit {
  @Input() textIntro;
  @Input() headingsCol:Array<object>;
  @Input() rowData:Array<object>;
  @Input() DataFromService;
 
  
  constructor() { }
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
