import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

// Importazione dei componenti "oggetto"
import { Disclaimer } from './disclaimer/disclaimer.component';

// Importazione di moduli features
import { Form } from "./form/form.module";


@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [
    Disclaimer
  ],
  exports: [
    Disclaimer,
    Form
  ]
})
export class PageComponents { }