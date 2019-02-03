import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class PersonService {

  constructor(private http: HttpClient) { }

  addPerson(data: any) {
    this.http.post('http://localhost:8000/person',JSON.stringify(data)).toPromise().then(r => {console.log(r);}).catch(
      e => console.log(e));    
  }
}