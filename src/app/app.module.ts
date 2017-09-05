import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { BarangComponent } from './barang/barang.component';
import {RouterModule, Routes} from "@angular/router";

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
    RouterModule.forRoot(routingApplikasi)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
