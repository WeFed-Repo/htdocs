import { Component,OnInit, Input} from '@angular/core';

@Component({
  selector: 'content-app',
  templateUrl: './content-app.component.html',
  styleUrls: ['./content-app.component.css']
})

export class ContentAppComponent  implements OnInit {

  @Input() contenuto = "default";

  constructor() {}

  // Inizializzazione
  ngOnInit(){

  }

}
