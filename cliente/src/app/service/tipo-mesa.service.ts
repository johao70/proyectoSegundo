import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

@Injectable({
  providedIn: 'root'
})
export class TipoMesaService {

  constructor(private http: Http) { }

  getTipoMesa(tipo_id, descripcion, capacidad) {
    this.http.get('http://localhost:8000/tipo_mesa',JSON.stringify(this.getTipoMesa)).toPromise().then(r => {console.log(r);}).catch(
      e => console.log(e));    
  }  
}
