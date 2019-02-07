import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { routerTransition } from '../router.animations';
import { ServiciosService } from '../service/servicios.service';

@Component({
    selector: 'app-login',
    templateUrl: './login.component.html',
    styleUrls: ['./login.component.scss'],
    animations: [routerTransition()]
})
export class LoginComponent implements OnInit {
    public form ={
        correo:null,
        clave:null,
    };

    constructor(public router: Router, private servicios:ServiciosService) {}

    ngOnInit() {
        this.servicios.login('johao@mail', '123').subscribe(
            res => {
              console.log(res);
        });
    }

}
