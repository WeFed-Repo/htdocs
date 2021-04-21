import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

// Componenti del form
import {Select} from './select/select.component'

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [
    Select
  ],
  exports: [
    Select
  ]
})
export class Form { }