import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class PersonService {
  constructor(private http: HttpClient) { }

  addPerson(data = {
    "pers_ci": "171884264-2",
    "nombre": "Johao Perlaza",
    "telefono": "0978970998",
    "correo": "perlazajohao@gmail.com",
    "clave": "johao:v"
  }) {
    const url = environment.API_URL + 'person';
    console.log(data);
    return this.http.post(url,JSON.stringify(data));
  }
}