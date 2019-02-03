import { CommonModule } from '@angular/common';
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { HttpModule } from '@angular/http';
import { HttpClientModule } from '@angular/common/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CalendarModule } from 'primeng/calendar';
import { ReservaService } from './service/reserva.service';

@NgModule({
    imports: [
        CommonModule,
        BrowserModule,
        CalendarModule,
        BrowserAnimationsModule,
        AppRoutingModule,
        HttpModule,
        HttpClientModule
    ],
    providers: [ReservaService],
    declarations: [AppComponent],
    bootstrap: [AppComponent]
})

export class AppModule {}
