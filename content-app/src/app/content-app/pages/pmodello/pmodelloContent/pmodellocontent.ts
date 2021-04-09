import { Component,Input,OnInit} from '@angular/core';


@Component({
  selector: 'pmodello-content',
  templateUrl: 'pmodellocontent.html',
 
})

export class PModelloContent  implements OnInit {
  @Input() textIntro;
  @Input() dataTable;
  @Input() TableColumnsLabel;
  
  constructor() { }
  
  // Inizializzazione
  ngOnInit(){
  
  
  }
}
