import { Injectable } from '@angular/core';
import { Http } from '@angular/http';

@Injectable({
  providedIn: 'root'
})
export class PersonService {

  constructor(private http: Http) { }

  addPerson(pers_ci, nombre, telefono, correo, clave) {
    this.http.post('http://localhost:8000/person',JSON.stringify(this.addPerson)).toPromise().then(r => {console.log(r);}).catch(
      e => console.log(e));    
  }
}