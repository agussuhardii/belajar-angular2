import { Component, OnInit } from '@angular/core';
import {BarangService} from "../barang.service"; //9 import

@Component({
  selector: 'app-barang',
  templateUrl: './barang.component.html',
  styleUrls: ['./barang.component.css']
})
export class BarangComponent implements OnInit {
//7 buat objek any
  dataBarang: any = {};

  //6 injek service
  constructor(private barangService: BarangService) { }

  ngOnInit() {

    //8  panggil fungsi dari service
    this.barangService.getBarangPublic()
      .then(data => this.dataBarang = data)
      .catch(error => console.log(error));
  }

}
