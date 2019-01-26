import { Component, OnInit } from '@angular/core';
import { routerTransition } from '../../router.animations';

@Component({
    selector: 'app-dashboard',
    templateUrl: './dashboard.component.html',
    styleUrls: ['./dashboard.component.scss'],
    animations: [routerTransition()]
})
export class DashboardComponent implements OnInit {
    public sliders: Array<any> = [];

    constructor() {
        this.sliders.push(
            {
                imagePath: 'assets/images/slider1.jpg',
                label: 'Restaurante',
                text:
                    'Moderno.'
            },
            {
                imagePath: 'assets/images/slider2.jpg',
                label: 'Restaurante',
                text: 'Comodidad.'
            },
            {
                imagePath: 'assets/images/slider3.jpg',
                label: 'Restaurante',
                text:
                    'Elegante.'
            },
            {
                imagePath: 'assets/images/slider4.jpg',
                label: 'Restaurante',
                text:
                    'Calidad.'
            },
            {
                imagePath: 'assets/images/slider5.jpg',
                label: 'Restaurante',
                text:
                    'Confianza.'
            }
        );
    }

    ngOnInit() {}

}
