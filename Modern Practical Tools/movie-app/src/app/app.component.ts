// app.component.ts

import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})
export class AppComponent {
  title = "GeeksforGeeks's Movie Center";
  searchTerm: string = '';
  movies: any[] = [];

  private API_URL = 'https://omdbapi.com?apikey=fe2f6c44';

  constructor(private http: HttpClient) {
    this.searchMovies('SpiderMan');
  }

  searchMovies(title: string): void {
    this.http.get<any>(`${this.API_URL}&s=${title}`).subscribe((response) => {
      this.movies = response.Search || [];
    });
  }

  onSearch(): void {
    if (this.searchTerm.trim()) {
      this.searchMovies(this.searchTerm);
    }
  }
}
