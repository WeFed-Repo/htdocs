import { Component,OnInit, Input} from '@angular/core';
import { Pmodello } from './pmodello.model';
import { PmodelloService } from './pmodello.service';

@Component({
  selector: 'pmodello',
  templateUrl: './pmodello.component.html',
  providers:[PmodelloService]
})

export class PModello  implements OnInit {
  //array di testi iniziali
  
  public pModelli:Array<Pmodello>
 
  
  constructor(private pmodelloService: PmodelloService) { }
  
  // Inizializzazione
  ngOnInit(){
    this.pModelli=this.pmodelloService.returnPmodelArray();
    console.log("pmodello");
  
  }
}
