import { Component, Input, OnInit} from '@angular/core';

@Component({
  selector: 'form-select',
  templateUrl: './select.component.html'
})
export class Select implements OnInit {
  
    @Input() label: string;
    @Input() placeholder: string;
    @Input() options: any;
    @Input() value: any;
    @Input() error: string;

    seloptions = [];

    //Interattivita'
    onChange(){
        alert("Cambiato")
    }

    ngOnInit(){

        // Costruisce i valori della select inserendo anche il placeholder in testa
        this.seloptions.push(
            {value: "", text: (this.placeholder)? this.placeholder : "Seleziona..."}
        );
        this.seloptions = this.seloptions.concat((typeof this.options ==="string")? eval(this.options): this.options);
    }

}
