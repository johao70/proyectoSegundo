import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { routerTransition } from '../router.animations';
import { HttpClient } from '@angular/common/http';

@Component({
    selector: 'app-signup',
    templateUrl: './signup.component.html',
    styleUrls: ['./signup.component.scss'],
    animations: [routerTransition()]
})
export class SignupComponent implements OnInit {
    constructor(public router: Router, private http: HttpClient) {}

    addPerson(nombre, pers_ci, telefono, correo, clave) {
        this.http.post('http://localhost:8000/person',JSON.stringify(nombre)).toPromise().then(r => {console.log(r);}).catch(
          e => console.log(e));  
    }

    ngOnInit() {}
}