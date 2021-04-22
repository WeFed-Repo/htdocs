import { Component, Input, OnInit, Output, EventEmitter} from '@angular/core';

@Component({
  selector: 'form-select',
  templateUrl: './select.component.html'
})
export class Select implements OnInit {
  
    // Variabili locali
    seloptions = [];

    // Input
    @Input() label: string;
    @Input() placeholder: string;
    @Input() options: any;
    @Input() value: any;
    @Input() error: string;

    // Output
    @Output() newvalue = new EventEmitter<string>(); 
    
    //Interattivita'
    onChange(e){
        this.newvalue.emit(e.target.value)
    }

    ngOnInit(){

        // Costruisce i valori della select inserendo anche il placeholder in testa
        this.seloptions.push(
            {value: "", text: (this.placeholder)? this.placeholder : "Seleziona..."}
        );
        this.seloptions = this.seloptions.concat(this.options);
    }

}
