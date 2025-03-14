// app.module.ts
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { AppComponent } from './app.component';
import { bootstrapApplication } from '@angular/platform-browser';

bootstrapApplication(AppComponent).catch((err) => console.error(err));

export class AppModule {}
