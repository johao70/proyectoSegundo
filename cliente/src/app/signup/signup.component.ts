import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { routerTransition } from '../router.animations';

import { ServiciosService } from '../service/servicios.service';
import { Person } from '../models/person';

@Component({
    selector: 'app-signup',
    templateUrl: './signup.component.html',
    styleUrls: ['./signup.component.scss'],
    animations: [routerTransition()]
})
export class SignupComponent implements OnInit {  
      
    person: Person;
    people: Array<Person>;
    
    constructor(public router: Router, private Servicios: ServiciosService) {}

    ngOnInit() {
      this.get();
      this.person = new Person();
    }

    get() {
        this.Servicios.get('person').subscribe(
            response => {
                this.people = response as Array<Person>;
            },
            error => {
                console.log(error);
            }
        );
    }

    post(){
        this.Servicios.post('person',this.person).subscribe(
          response => {
            this.get();
          },
          error => {
            console.log(error);
          }
          
        );
      }

    put(person:Person){
        this.Servicios.put('person',person).subscribe(
          response => {
            this.get();
          },
          error => {
            console.log(error);
          }          
        );
    }

    delete(person:Person){
        this.Servicios.delete('person',person).subscribe(
          response => {
            this.get();
          },
          error => {
            console.log(error);
          }          
        );
    }
}