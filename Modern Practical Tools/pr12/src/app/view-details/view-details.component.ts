import { Component, OnInit } from '@angular/core';
import { DetailsService } from '../details.service';
import { ActivatedRoute } from '@angular/router';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-view-details',
  templateUrl: './view-details.component.html',
  styleUrls: ['./view-details.component.css'],
  imports: [CommonModule],
  standalone: true
})
export class ViewDetailsComponent implements OnInit {
  product: any = null;
  id: number = 0;

  constructor(private details: DetailsService, private route: ActivatedRoute) {}
  
  ngOnInit(): void {
    this.route.params.subscribe(params => {
      this.id = +params['id']; // Convert to number using +
      const products = this.details.getProductById(this.id);
      if (products && products.length > 0) {
        this.product = products[0]; // Get the first matching product
      }
    });
  }
}
