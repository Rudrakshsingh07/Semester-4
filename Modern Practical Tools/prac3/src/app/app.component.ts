import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  standalone: false,
  styleUrl: './app.component.css',
})
export class AppComponent {
  title = 'hello';
  public greeting = ' ';
  public name = ' ';
  msg() {
    console.log('welcome page');
    this.greeting = 'Welcome ';
  }
}
