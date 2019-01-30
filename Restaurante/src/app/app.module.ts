import { CommonModule } from '@angular/common';
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { HttpModule } from '@angular/http';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CalendarModule } from 'primeng/calendar';
import { FormsModule } from '@angular/forms';

@NgModule({
    imports: [
        CommonModule,
        BrowserModule,
        CalendarModule,
        BrowserAnimationsModule,
        AppRoutingModule,
        FormsModule,
        HttpModule
    ],
    declarations: [AppComponent],
    bootstrap: [AppComponent]
})

export class AppModule {}
