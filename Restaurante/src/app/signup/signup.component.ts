import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { routerTransition } from '../router.animations';
import {NgbDateStruct} from '@ng-bootstrap/ng-bootstrap';

@Component({
    selector: 'app-signup',
    templateUrl: './signup.component.html',
    styleUrls: ['./signup.component.scss'],
    animations: [routerTransition()]
})
export class SignupComponent implements OnInit {
    constructor(public router: Router) {}

    ngOnInit() {}
}

class signup {
    constructor(public pers_ci: string = '', public nombre: string = '', public telefono: string = '', public correo: string = '', public clave: string = '') {}

    registros: signup[] = [];               //lista de registros
    regModel: signup;                       //modelo del registro
    showNew: Boolean = false;               //estado del registro - false
    submitType: string = 'Save';            //accion del submit - Save or Update
    selectedRow: number;


    onNew() {                               //Metodo asociado al boton
        this.regModel = new signup();       //iniciando nuevo registro
        this.submitType = 'Save';           //establecemos el tipo de submit - Save or Update
        this.showNew = true;                //visualizamos la seccion de registro
    }


    onSave() {
    if (this.submitType === 'Save') {
        this.registros.push(this.regModel);    
    } else {
        this.registros[this.selectedRow].pers_ci = this.regModel.pers_ci;    
        this.registros[this.selectedRow].nombre = this.regModel.nombre;    
        this.registros[this.selectedRow].telefono = this.regModel.telefono;    
        this.registros[this.selectedRow].correo = this.regModel.correo;    
        this.registros[this.selectedRow].clave = this.regModel.clave;     
    }    
    this.showNew = false;    
    }
}