import { NgModule }      from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { FormsModule }   from '@angular/forms';
import { HikingFormComponent }   from './hikingform.component';
import { HttpModule } from '@angular/http';
@NgModule({
  imports:      [ BrowserModule, FormsModule, HttpModule ],
  declarations: [ HikingFormComponent ],
  bootstrap:    [ HikingFormComponent ]
})
export class HikingFormModule { }
