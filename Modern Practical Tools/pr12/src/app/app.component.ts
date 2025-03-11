import { Component, OnInit } from '@angular/core';
import { RouterOutlet, RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { Router } from '@angular/router';
import { DetailsService } from './details.service';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, CommonModule, RouterModule],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent implements OnInit {
  title = 'pr12';
  product_arr: any[] = [];

  constructor(private router: Router, private detailsService: DetailsService) {}

  ngOnInit() {
    this.product_arr = this.detailsService.getProduct();
  }

  goToDetails(id: number) {
    this.router.navigate(['/view-details', id]);
  }
}
