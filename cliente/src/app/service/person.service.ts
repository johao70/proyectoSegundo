import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})
export class PersonService {
  constructor(private http: HttpClient) { }

  addPerson(data = {
    "pers_ci": "123456789-5",
    "nombre": "joel dasd :v", 
    "telefono": "09999984", 
    "correo": "juan@gmail.com", 
    "clave": "roger1234:v"
  }) {
    const url = environment.API_URL + 'person';
    console.log(data);
    return this.http.post(url, JSON.stringify(data));
  }  
}