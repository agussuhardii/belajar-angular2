import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { BarangComponent } from './barang/barang.component';
import {RouterModule, Routes} from "@angular/router";
import {BarangService} from "./barang.service"; //13
import {FormsModule} from "@angular/forms";
import {HttpModule} from "@angular/http";

const routingApplikasi:Routes = [
  {path: 'barang', component:BarangComponent}
];

@NgModule({
  declarations: [
    AppComponent,
    BarangComponent
  ],
  imports: [
    BrowserModule,
    FormsModule, //11
    HttpModule,//12
    RouterModule.forRoot(routingApplikasi)
  ],
  providers: [BarangService],//14 import provider
  bootstrap: [AppComponent]
})
export class AppModule { }
