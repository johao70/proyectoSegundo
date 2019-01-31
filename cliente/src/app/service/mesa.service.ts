import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

@Injectable({
  providedIn: 'root'
})
export class MesaService {

  constructor(private http: Http) { }

  getMesa(mesa_id, tipo_id, estado_id) {
    this.http.get('http://localhost:8000/mesa',JSON.stringify(this.getMesa)).toPromise().then(r => {console.log(r);}).catch(
      e => console.log(e));    
  }
}
