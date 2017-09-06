import { Injectable } from '@angular/core';
import {Http} from "@angular/http"; //2 import http
import 'rxjs/add/operator/toPromise'; // 3import rxjs

@Injectable()
export class BarangService {

//1 injek http
  constructor(private http: Http) { }



  // 4 buat fungsi memanggil data
  getBarangPublic():Promise<any>{
    return this.http.get("http://localhost/barang/barang.controller.php?aksi=find_all").toPromise()
      .then(hasil=>{return hasil.json();
      })


      //5  tampilkan kesalahan jika ada
      .catch(error=>{
        console.log(error);
        return error;
      });
  }
}
