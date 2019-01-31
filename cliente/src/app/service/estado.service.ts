import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

@Injectable({
  providedIn: 'root'
})
export class EstadoService {

  constructor(private http: Http) { }

  getEstado(estado_id, nombre) {
    this.http.get('http://localhost:8000/estado',JSON.stringify(this.getEstado)).toPromise().then(r => {console.log(r);}).catch(
      e => console.log(e));    
  }  
}
